<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PokemonCapture extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        $id = $this->id ?? "";
        $rules = [
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'image' => 'file|mimes:png,svg|nullable|string|max:255',
            'power' => 'required|integer',
            'attack' => 'required|integer',
            'damage' => 'required|integer',
            'defense' => 'required|integer',
            'healthy' => 'required|integer',
            'stars' => 'required|integer',
            'pokedex_id' => 'nullable|integer',
            'trainer_id' => 'nullable|integer',
        ];
        
        return $rules;
    }
}