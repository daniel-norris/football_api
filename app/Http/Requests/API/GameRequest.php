<?php

namespace App\Http\Requests\API;

use Illuminate\Foundation\Http\FormRequest;

class GameRequest extends FormRequest
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
            "players_side" => ["required", "integer"],
            "team_1" => ["required", "string"],
            "team_2" => ["required", "string"],
        ];
    }
}
