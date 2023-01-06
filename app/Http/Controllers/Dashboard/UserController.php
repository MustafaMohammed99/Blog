<?php

namespace App\Http\Controllers\Dashboard;

use App\Actions\Fortify\PasswordValidationRules;
use App\Actions\Fortify\UpdateUserPassword;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    use PasswordValidationRules;



    public function index()
    {
        Gate::authorize('users.index');

        $request = request();
        $users = User::filter($request->query())
            ->orderBy('users.type')
            ->paginate();

        return view('dashboard.users.index', compact('users'));
    }

    public function create()
    {
        Gate::authorize('users.store');

        return view('dashboard.users.create', [
            'user' => new User(),
            'confirm_password' => false
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


    public function show($id)
    {
        //
    }


    public function edit(User $user)
    {
        Gate::authorize('users.update');
        $confirm_password = 'false';
        return view('dashboard.users.edit', compact('user', 'confirm_password'));
    }

    public function updatePassword(Request $request)
    {
        try {

            $updatePasswordController = new UpdateUserPassword;

            $updatePasswordController->update(Auth::user(), $request->all());

            return redirect()
                ->back()->with('success',  'تم التحديث بنجاح');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'حدث خطأ أثناء التحديث');
        }
    }


    public function update(UserRequest $request, User $user)
    {
        Gate::authorize('users.update');

        $user->update($request->all());
        return redirect()
            ->route('dashboard.users.index')
            ->with('success', 'تم التحديث بنجاح');
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

    public function restore(UserRequest $request, $id)
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
