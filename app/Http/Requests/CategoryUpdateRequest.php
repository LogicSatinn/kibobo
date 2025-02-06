<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryUpdateRequest extends FormRequest
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
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:100'],
            'color' => ['required', 'string', 'max:50'],
            'user_id' => ['required', 'integer', 'exists:users,id'],
            'group_id' => ['required', 'integer', 'exists:category_groups,id'],
            'category_group_id' => ['required', 'integer', 'exists:category_groups,id'],
        ];
    }
}
