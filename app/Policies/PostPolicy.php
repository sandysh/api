<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    
    public function create(Post $post)
    {
        if()
    }
    
    public function update()
    {
        
    }
    
    public function edit()
    {
        
    }
    
    public function delete()
    {
        
    }
}
