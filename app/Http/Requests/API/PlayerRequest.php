<?php

namespace App\Http\Requests\API;

use Illuminate\Foundation\Http\FormRequest;

class PlayerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "first_name" => ["required", "string"],
            "last_name" => ["required", "string"],
            "age" => ["required", "integer"],
            "height" => ["required", "integer"],
            "position" => ["required", "string"],
            "skill" => ["required", "integer"],
        ];
    }
}
