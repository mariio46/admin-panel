<?php

namespace App\Http\Controllers\SuperAdmin\RolePermission;

use App\Http\Controllers\Controller;
use App\Http\Requests\SuperAdmin\RolePermission\Role\StoreRoleRequest;
use App\Http\Requests\SuperAdmin\RolePermission\Role\UpdateRoleRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function table(): View
    {
        return view('super-admin.roles.table', [
            'collections' => Role::query()->oldest()->without(['users', 'permissions'])->fastPaginate(10),
        ]);
    }

    public function store(StoreRoleRequest $request): RedirectResponse
    {
        $request->store();

        return back();
    }

    public function update(UpdateRoleRequest $request, Role $role): RedirectResponse
    {
        $request->update($role);

        return back();
    }

    public function delete(Role $role): RedirectResponse
    {
        $role->users()->detach();

        $role->delete();

        flash('Role has been deleted successfully.', 'bg-green-100 text-green-500 dark:bg-green-800 dark:text-green-200');

        return back();
    }

    public function assign(Request $request): RedirectResponse
    {
        $role = Role::find($request->role)->name;

        $user = User::find($request->user)->assignRole($role);

        flash("{$user->name} has been assigned the role {$role}.", 'bg-green-100 text-green-500 dark:bg-green-800 dark:text-green-200');

        return back();
    }
}
