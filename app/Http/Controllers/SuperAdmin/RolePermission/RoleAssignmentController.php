<?php

namespace App\Http\Controllers\SuperAdmin\RolePermission;

use App\Http\Controllers\Controller;
use App\Http\Requests\SuperAdmin\RolePermission\Assignment\AssignUserRoleRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Collection;
use Illuminate\View\View;
use Spatie\Permission\Models\Role;

class RoleAssignmentController extends Controller
{
    public function create(): View
    {
        return view('super-admin.assignments.user-role.table', [
            'users' => User::query()->select('id', 'name')->get(),
            'collections' => User::query()->select('id', 'name', 'username')->has('roles')->with(['roles' => fn ($role) => $role->select('id', 'name')])->get(),
            'roles' => $this->getRoles(),
        ]);
    }

    public function store(AssignUserRoleRequest $request): RedirectResponse
    {
        $request->store();

        return back();
    }

    public function edit(User $user)
    {
        return view('super-admin.assignments.user-role.edit', [
            'user' => $user,
            'roles' => $this->getRoles(),
        ]);
    }

    public function update(AssignUserRoleRequest $request, User $user): RedirectResponse
    {
        $request->update($user);

        return to_route('assignments.role.create');
    }

    protected function getRoles(): Collection
    {
        return Role::query()->select('id', 'name')->oldest()->get();
    }
}
