<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Myrule implements Rule
{
    private $num;

    /**
     * Create a new rule instance.
     *
     * @param $num
     */
    public function __construct($num)
    {
        $this->num = $num;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param string $attribute
     * @param mixed $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return $value % $this->num == 0;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return $this->num . 'で割り切れる数字にしてください。';
    }
}
