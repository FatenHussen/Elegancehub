<?php

namespace App\Http\Requests\User;

use App\Http\Requests\BaseRequest;

class CreateAppointmentRequest extends BaseRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    // public function authorize(): bool
    // {
    //     return false;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'date' => 'required|date|after_now',
            'doctor_id' => 'required|exists:doctors,id',
            'user_id' => 'required|exists:users,id'
        ];
    }
}
