<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;

    const TYPE_COURSE = 0;
    const TYPE_CALL = 1;

    protected $dates = ['deleted_at'];
    protected $fillable = ['name', 'email', 'phone', 'message', 'post_id', 'title', 'type', 'comment'];
}
