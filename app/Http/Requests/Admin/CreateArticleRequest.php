<?php

namespace App\Http\Requests\Admin;

use App\Http\Requests\BaseRequest;

class CreateArticleRequest extends BaseRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    // public function authorize(): bool
    // {
    //     return true;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'category_id' => 'required|exits:categories,category',
            'locale' => 'required|string|in:en,es'
        ];
    }
}
