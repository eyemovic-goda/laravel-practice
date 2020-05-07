<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Restdata
 *
 * @property int $id
 * @property string $message
 * @property string $url
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Restdata newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Restdata newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Restdata query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Restdata whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Restdata whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Restdata whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Restdata whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Restdata whereUrl($value)
 * @mixin \Eloquent
 */
class Restdata extends Model
{
    protected $table = "restdata";
    protected $guarded = ["id"];
    static $rules = [
        "message" => "required",
        "url" => "required"
    ];

    public function getData()
    {
        return $this->id . ":" . $this->message . "(" . $this->url . ")";
    }
}
