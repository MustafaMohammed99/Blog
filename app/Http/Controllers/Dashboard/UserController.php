<?php

namespace App\Http\Controllers\Dashboard;

use App\Actions\Fortify\PasswordValidationRules;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    use PasswordValidationRules;



    public function index()
    {
        Gate::authorize('users.index');
        $request = request();
        $users = User::withCount('posts')
            ->filter($request->query()) 
            ->orderBy('users.type', 'desc')
            ->paginate();

        return view('dashboard.users.index', compact('users'));
    }

    public function create()
    {
        Gate::authorize('users.store');

        return view('dashboard.users.create', [
            'user' => new User(),
            'showPassword' => true
        ]);
    }



    public function store(UserRequest $request)
    {
        Gate::authorize('users.store');

        $data = $request->except('password');
        $data['password'] = Hash::make($request->password);
        $user = User::create($data);
        if ($user) {
            return redirect()
                ->route('dashboard.users.index')
                ->with('success', 'تم انشاء المستخدم بنجاح');
        }
        return redirect()
            ->route('dashboard.users.index')
            ->with('success', 'لم يتم انشاء المستخدم بنجاح');
    }


    public function show(User $user)
    {
        $posts = Post::where('user_id', $user->id)->paginate();
        return view('dashboard.posts.show', [
            'user' => $user,
            'posts'=>$posts
        ]);
    }


    public function edit(User $user)
    {
        if (Auth::user()->id !== $user->id) {
            if (Auth::user()->type !== 'admin') {
                Gate::authorize('users.update');
            }
        }
        $showPassword = false;
        return view('dashboard.users.edit', compact('user', 'showPassword'));
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => ['required', 'confirmed', Rules\Password::defaults()],

        ]);
        #Match The Old Password
        $user = Auth::user();
        if (!Hash::check($request->current_password, $user->password)) {
            throw ValidationException::withMessages(['current_password' => ':كلمة السر القديمة ليست صحيحة']);
        }
        #Update the new Password
        User::whereId($user->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return back()->with('success', 'تم تحديث كلمة السر بنجاح');
    }


    public function update(Request $request, User $user)
    {

        if (Auth::user()->id !== $user->id) {
            if (Auth::user()->type !== 'admin') {
                Gate::authorize('users.update');
            }
        }

        $user->update($request->all());

        return redirect()
            ->route('dashboard.posts.index')
            ->with('success', 'تم تحديث الحساب بنجاح');
    }


    public function destroy(User $user)
    {
        Gate::authorize('users.destroy');
        $user->delete();
        return redirect()
            ->route('dashboard.users.index')
            ->with('success', 'تم حذف المستخدم بنجاح');
    }


    public function trash()
    {
        Gate::authorize('user.trash');
        $request = request();
        $users = User::filter($request->query())
            ->orderBy('users.type')
            ->onlyTrashed()->paginate();
        return view('dashboard.users.trash', compact('users'));
    }

    public function restore(Request $request, $id)
    {
        Gate::authorize('users.restore');
        $user = User::onlyTrashed()->findOrFail($id);
        $user->restore();

        return redirect()->route('dashboard.users.trash')
            ->with('succes', 'User restored!');
    }

    public function forceDelete($id)
    {
        Gate::authorize('users.forceDelete');
        $user = User::onlyTrashed()->findOrFail($id);
        $user->forceDelete();
        return redirect()->route('dashboard.users.trash')
            ->with('succes', 'تم حذف المستخدم الى الابد ');
    }
}
