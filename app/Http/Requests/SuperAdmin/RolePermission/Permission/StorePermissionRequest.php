<?php

namespace App\Http\Requests\SuperAdmin\RolePermission\Permission;

use Illuminate\Foundation\Http\FormRequest;
use Spatie\Permission\Models\Permission;

class StorePermissionRequest extends FormRequest
{
    protected $errorBag = 'storePermission';

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

    public function store()
    {
        Permission::create([
            'name' => $this->name,
            'guard_name' => $this->guard_name ?? 'web',
        ]);

        return flash('Permission has been added successfully.', 'bg-green-100 text-green-500 dark:bg-green-800 dark:text-green-200');
    }
}
