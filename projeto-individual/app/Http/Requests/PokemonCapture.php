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
            'image' => 'required|file|mimes:png,svg',
            'power' => 'required|integer',
            'attack' => 'required|string',
            'defense' => 'required|integer',
            'healthy' => 'required|integer',
            'weakness' => 'required|integer',
            'weakness_type' => 'required|string',
            'stars' => 'required|integer',
            'pokedex_id' => 'nullable|integer',
        ];

        if ($this->method() === "PUT"){
            $rules['image'] = 'nullable|file|mimes:png,svg';
            $rules['type'] = 'nullable';
        }
        
        return $rules;
    }
}