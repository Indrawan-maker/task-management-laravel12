<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class TaskRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
    'judul' => 'required|max:255',
    'description' => 'required|max:555',
    'long_description' => 'required|max:555'
    ];
    }
}
