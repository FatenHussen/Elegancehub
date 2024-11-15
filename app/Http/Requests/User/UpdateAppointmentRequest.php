<?php

namespace App\Http\Requests\User;

use App\Http\Requests\BaseRequest;

class UpdateAppointmentRequest extends BaseRequest
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
            'date' => 'nullable|date|after_now',
            'doctor_id' => 'nullable|exists:doctors,id',
            'user_id' => 'nullable|exists:users,id'
        ];
    }
}
