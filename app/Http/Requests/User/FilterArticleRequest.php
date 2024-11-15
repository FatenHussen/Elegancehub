<?php

namespace App\Http\Requests\User;

use App\Http\Requests\BaseRequest;

class FilterArticleRequest extends BaseRequest
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
            'title' => 'nullable|string|max:255',
            'category_id' => 'nullable|exists:categories,name',
            'locale' => 'nullable|string|in:en,es'
        ];
    }
}
