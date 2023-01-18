<?php

namespace App\Models\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;
use Illuminate\Support\Facades\Auth;

class PostScope implements Scope
{

    public function apply(Builder $builder, Model $model)
    {
        $user = Auth::user();
        if ($user && $user->id && $user->type !== 'admin') {
            $builder->where('user_id', '=', $user->id);
        }
    }
}
