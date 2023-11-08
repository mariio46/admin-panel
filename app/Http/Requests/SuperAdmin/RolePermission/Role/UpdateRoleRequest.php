<?php

namespace App\Http\Requests\SuperAdmin\RolePermission\Role;

use Illuminate\Foundation\Http\FormRequest;
use Spatie\Permission\Models\Role;

class UpdateRoleRequest extends FormRequest
{
    protected $errorBag = 'updateRole';

    public function authorize(): bool
    {
        return $this->user()->hasRole('super admin') ? true : false;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'min:3'],
        ];
    }

    public function update(Role $role)
    {
        $role->update([
            'name' => $this->name,
            'guard_name' => $this->guard_name ?? 'web',
        ]);

        return flash('Role has been update successfully.', 'bg-green-100 text-green-500 dark:bg-green-800 dark:text-green-200');
    }
}
