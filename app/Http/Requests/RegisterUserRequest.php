<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterUserRequest extends FormRequest
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
          'name' => "required|string|max:255|unique:users",
          'email' => "required|string|email|max:255|unique:users",
          'password' => "required|min:8|confirmed",
          'avatar' =>"required",
        ];
    }

    // public function messages()
    // {
    //   return [
    //       'string'=>"El campo :attribute debe ser un texto",
    //       'required'=>"Este campo :attribute es obligatorio",
    //       'email'=>"El :attribute es inválido",
    //       'min'=>"El campo :attribute tiene un mínimo de :min",
    //       'max'=>"El campo :attribute tiene un máximo de :max",
    //       'unique'=>"El :attribute se encuentra repetido",
    //     ];
    // }
}
