<x-table-dropdown-option type="role" title="role" width='w-48' :id="$item->id" :data="$item->id . '-' . $item->name" placement="bottom-end">
    <x-slot:content>
        <x-table-dropdown-option.link :href="route('role.assignments.edit', $item->username)">
            <x-tabler-refresh />
            Sync user role
        </x-table-dropdown-option.link>
    </x-slot:content>
</x-table-dropdown-option>
