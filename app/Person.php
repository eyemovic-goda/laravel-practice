<?php

namespace App;

use App\Scopes\ScopePerson;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Eloquent;
use function foo\func;

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
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Person nameEqual($str)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Person ageGreaterThan($str)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Person ageLessThan($str)
 */
class Person extends Model
{

    protected $guarded = ["id"];

    public static $rules = [
        "name" => "required",
        "mail" => "email",
        "age" => "integer|min:0|max:150"
    ];

    protected static function boot()
    {
        parent::boot();
//        // グローバルスコープ
//        static::addGlobalScope("role", function (Builder $builder) {
//            $builder->where("age", ">", 10);
//        });
//
//        // スコープクラスバージョン
//        static::addGlobalScope(new ScopePerson);
    }

    public function boards()
    {
        return $this->hasMany('App\Board');
    }

    public function getData()
    {
        return $this->id . ":" . $this->name . "(" . $this->age . ")";
    }

    public function scopeNameEqual($query, $str)
    {
        return $query->where("name", $str);
    }

    public function scopeAgeGreaterThan($query, $str)
    {
        return $query->where("age", ">=", $str);
    }

    public function scopeAgeLessThan($query, $str)
    {
        return $query->where("age", "<=", $str);
    }
}
