<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DataRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'dateFrom' => 'required|date_format:Y-m-d|before_or_equal:today',
            'dateTo' => 'required|date_format:Y-m-d|after_or_equal:dateFrom|before_or_equal:today',
            'limit' => 'nullable|integer|min:1|max:500',
            'page' => 'nullable|integer|min:1',
        ];
    }
}
