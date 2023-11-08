<x-table-dropdown-option type="role" title="role" width='w-60' :id="$item->id" :data="$item->id . '-' . $item->name" placement="bottom-end">
    <x-slot:content>
        <x-table-dropdown-option.link :href="route('permission.assignments.edit', $item)">
            <x-tabler-refresh />
            Sync role permissions
        </x-table-dropdown-option.link>
    </x-slot:content>
</x-table-dropdown-option>
