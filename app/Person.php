<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Eloquent;

/**
 * App\Person
 *
 * @property int $id
 * @property string $name
 * @property string $mail
 * @property int $age
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Person newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Person newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Person query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Person whereAge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Person whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Person whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Person whereMail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Person whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Person whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Person extends Model
{
    public function getData()
    {
        return $this->id . ":" . $this->name .
            "(" . $this->age . ")";
    }
}
