<?php

namespace App\Http\Requests\User;

use App\Http\Requests\BaseRequest;

class CreateRatingRequest extends BaseRequest
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
            'rating' => 'required|decimal',
            'feedback' => 'required|string',
            'user_id' => 'required|exists:users,id',
            'doctor_id' => 'required|exists:doctors,id'
        ];
    }
}
