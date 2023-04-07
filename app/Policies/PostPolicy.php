<?php

namespace App\Policies;

use App\Models\Post;
use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Gate;
class PostPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    
    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        //
        return Gate::allows('admin') && ! $user->posts()->exists();
    }

    public function edit(User $user, Post $post)
    {
        return Gate::allows('admin') && $user->id === $post->user_id;
    }

    public function update(User $user, Post $post)
    {
        return Gate::allows('admin') && $user->id === $post->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     */
}
