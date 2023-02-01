<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
        return [
            'name' => 'required|min:5|max:50',
            'description' =>'required|string',
            'cover_img' =>'required|url',
            'git_link' =>'required|url',
        ];
    }
    public function messages() {
        return [
            "title.required" => "Il titolo è obbligatorio",
            "title.min" =>  "Il titolo deve avere almeno :min caratteri",
            "title.max" =>  "Il titolo deve avere massimo :max caratteri",
            "description.required" => "Il contenuto del post è obbligatorio",
            "cover_img.required" => "L'immagine e' richiesta",
            "cover_img.url" => "L'immagine deve essere un URL",
            "git_link.url" => "Il link deve essere un URL",
            "git_link.required" => "Il link deve esserci",
        ];
    }
}
