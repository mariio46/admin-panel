<?php

namespace App\Http\Requests\SuperAdmin\RolePermission\Assignment;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

class AssignUserRoleRequest extends FormRequest
{
    protected $errorBag = 'assignUserRole';

    public function authorize(): bool
    {
        return $this->user()->hasRole('super admin') ? true : false;
    }

    public function rules(): array
    {
        return [
            'user' => ['required'],
            'roles' => ['required', 'array'],
        ];
    }

    public function store()
    {
        $user = User::find($this->user)->assignRole($this->roles);

        return flash('The role has been assign to ' . getFirstName($user->name) . '.', 'bg-green-100 text-green-500 dark:bg-green-800 dark:text-green-200');
    }

    public function update(User $user)
    {
        $user->syncRoles($this->roles);

        return flash(getFirstName($user->name) . ' roles has been synchronize.', 'bg-green-100 text-green-500 dark:bg-green-800 dark:text-green-200');
    }
}
