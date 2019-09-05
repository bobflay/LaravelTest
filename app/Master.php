<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Master extends Model
{
	protected static function boot()
    {
        parent::boot();
        static::saving(function ($model) {
            $model->created_by = 'admin_user';
        });
    }
}