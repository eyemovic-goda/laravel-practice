<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Board
 *
 * @property int $id
 * @property int $person_id
 * @property string $title
 * @property string $message
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Board newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Board newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Board query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Board whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Board whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Board whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Board wherePersonId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Board whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Board whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Board extends Model
{
    protected $guarded = ["id"];

    public static $rules = [
        "person_id" => "required",
        "title" => "required",
        "message" => "required"
    ];

    public function person()
    {
        return $this->belongsTo(Person::class, "person_id");
    }

    public function getData()
    {
        return $this->id . ":" . $this->title . "(" . $this->person->name . ")";
    }
}
