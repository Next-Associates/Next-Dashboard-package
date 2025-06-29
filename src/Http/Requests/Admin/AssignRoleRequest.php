<?php 
namespace nextdev\nextdashboard\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AssignRoleRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; 
    }

    public function rules(): array
    {
        return [
            'role_id' => 'required|string|exists:roles,id',
        ];
    }
}
