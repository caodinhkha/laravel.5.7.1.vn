<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends \Spatie\Permission\Models\Permission
{
    /**
     * @return array
     */
    public static function defaultPermissions()
    {
        return [
            'viewPost',
            'addPost',
            'editPost',
            'deletePost',
        ];
    }
}
