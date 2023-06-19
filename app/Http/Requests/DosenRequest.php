<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DosenRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            "name" => ["required"],
            "level" => ["required"],
            "email" => ["required"],
            "password" => ["required"],

            "nidn" => ["required"],
            "nama" => ["required"],
            "tmp_lahir" => ["required"],
            "tgl_lahir" => ["required"],
            "jabatan" => ["required"],

        ];
    }

    public function messages(){
        return [
            "name.required" => "Username Wajib di isi",
            "level.required" => "Status Akun Wajib di isi",
            "email.required" => "Email Wajib di isi",
            "password.required" => "Password Wajib di isi",

            "nidn.required" => "nidn Wajib di isi",
            "nama.required" => "nama Wajib di isi",
            "tmp_lahir.required" => "Tempat Lahir Wajib di isi",
            "tgl_lahir.required" => "Tanggal Lahir Wajib di isi",
            "jabatan.required" => "Jabatan Wajib di isi",
        ];
    }
}
