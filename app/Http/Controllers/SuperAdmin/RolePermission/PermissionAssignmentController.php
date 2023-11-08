<?php

namespace App\Http\Controllers\SuperAdmin\RolePermission;

use App\Http\Controllers\Controller;
use App\Http\Requests\SuperAdmin\RolePermission\Assignment\AssignRolePermisssionRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Collection;
use Illuminate\View\View;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionAssignmentController extends Controller
{
    public function create(): View
    {
        return view('super-admin.assignments.role-permission.table', [
            'permissions' => $this->getPermission(),
            'roles' => Role::query()->select('id', 'name')->with(['permissions' => fn ($permission) => $permission->select('id', 'name')])->oldest()->get(),
        ]);
    }

    public function store(AssignRolePermisssionRequest $request): RedirectResponse
    {
        $request->store();

        return back();
    }

    public function edit(Role $role): View
    {
        return view('super-admin.assignments.role-permission.edit', [
            'role' => $role,
            'permissions' => $this->getPermission(),
        ]);
    }

    public function update(AssignRolePermisssionRequest $request, Role $role): RedirectResponse
    {
        $request->update($role);

        return to_route('assignments.permission.create');
    }

    protected function getPermission(): Collection
    {
        return Permission::query()->select('id', 'name')->oldest()->get();
    }
}
