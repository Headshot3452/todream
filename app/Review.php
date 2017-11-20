<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Review
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $email
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property \Carbon\Carbon|null $deleted_at
 * @property int $status
 * @method static \Illuminate\Database\Query\Builder|\App\Review onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Review whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Review whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Review whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Review whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Review whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Review whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Review whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Review whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Review withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Review withoutTrashed()
 * @mixin \Eloquent
 */
class Review extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
}
