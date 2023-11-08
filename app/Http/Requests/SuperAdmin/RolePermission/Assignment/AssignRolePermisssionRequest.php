<?php

namespace App\Http\Requests\SuperAdmin\RolePermission\Assignment;

use Illuminate\Foundation\Http\FormRequest;
use Spatie\Permission\Models\Role;

class AssignRolePermisssionRequest extends FormRequest
{
    protected $errorBag = 'assignRolePermission';

    public function authorize(): bool
    {
        return $this->user()->hasRole('super admin') ? true : false;
    }

    public function rules(): array
    {
        return [
            'role' => ['required'],
            'permissions' => ['required', 'array'],
        ];
    }

    public function store()
    {
        $role = Role::find($this->role);

        $role->givePermissionTo($this->permissions);

        return flash('The permissions has been given to ' . getFirstName($role->name) . '.', 'bg-green-100 text-green-500 dark:bg-green-800 dark:text-green-200');
    }

    public function update(Role $role)
    {
        $role->syncPermissions($this->permissions);

        return flash(getFirstName($role->name) . ' permissions has been synchronize.', 'bg-green-100 text-green-500 dark:bg-green-800 dark:text-green-200');
    }
}
