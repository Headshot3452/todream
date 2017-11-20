<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Banner
 *
 * @property int $id
 * @property string $title
 * @property string|null $description
 * @property string $image
 * @property int $status
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property \Carbon\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Query\Builder|\App\Banner onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Banner whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Banner whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Banner whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Banner whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Banner whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Banner whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Banner whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Banner whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Banner withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Banner withoutTrashed()
 * @mixin \Eloquent
 * @method static bool|null forceDelete()
 */
class Banner extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
}
