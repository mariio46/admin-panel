<?php

namespace App\Http\Controllers\SuperAdmin\RolePermission;

use App\Http\Controllers\Controller;
use App\Http\Requests\SuperAdmin\RolePermission\Permission\StorePermissionRequest;
use App\Http\Requests\SuperAdmin\RolePermission\Permission\UpdatePermissionRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function table(): View
    {
        return view('super-admin.permissions.table', [
            'collections' => Permission::query()->oldest()->fastPaginate(10),
        ]);
    }

    public function store(StorePermissionRequest $request): RedirectResponse
    {
        $request->store();

        return back();
    }

    public function update(UpdatePermissionRequest $request, Permission $permission): RedirectResponse
    {
        $request->update($permission);

        return back();
    }

    public function delete(Permission $permission): RedirectResponse
    {
        $permission->delete();

        flash('Permission has been deleted successfully.', 'bg-green-100 text-green-500 dark:bg-green-800 dark:text-green-200');

        return back();
    }
}
