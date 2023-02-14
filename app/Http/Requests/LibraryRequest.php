<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Unique;
use Illuminate\Foundation\Http\FormRequest;

class LibraryRequest extends FormRequest
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
        $title_unique = Rule::unique('libraries', 'title');
        if ($this->method() !== 'POST') {
            $title_unique->ignore($this->route()->parameter('id'));
        }
        return [
            'title' => ['required', $title_unique],
            'author' => ['required'],
            'pages' => ['required', 'integer']
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Judul harus diisi!',
            'title.unique' => 'Judul buku sudah ada di dalam list',
            'author.required' => 'Penulis Buku harus diisi!',
            'pages.required' => 'Jumlah Halaman buku harus diisi',
            'pages.integer' => 'Jumlah Halaman buku harus diisi dengan angka!'
        ];
    }
}
