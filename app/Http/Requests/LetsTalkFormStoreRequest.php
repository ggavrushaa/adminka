<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LetsTalkFormStoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'position' => 'nullable|string|max:255',
            'company_name' => 'nullable|string|max:255',
            'project_name' => 'nullable|string|max:255',
            'task' => 'nullable|string|max:1000',
            'budget' => 'nullable|string|max:255',
            'contact_in' => 'nullable|array',
            'contact_in.*' => 'string|max:255',
            'direction' => 'required',
            'files' => 'array|max:5', 
            'files.*' => 'file|mimes:jpg,jpeg,png,pdf,doc,docx,xls,xlsx|max:2048',
        ];
    }
}
