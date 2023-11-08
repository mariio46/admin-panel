<x-table-dropdown-option type="role" title="role" width='w-48' :id="$item->id" :data="$item->id . $item->name" placement="bottom-end">
    <x-slot:content>
        <x-table-dropdown-option.button-link x-data="" x-on:click.prevent="$dispatch('open-modal', 'edit-{{ str($item->name)->slug() }}-role-{{ $item->id }}')">
            <x-tabler-pencil />
            Edit
        </x-table-dropdown-option.button-link>
        <x-table-dropdown-option.button-link x-data="" x-on:click.prevent="$dispatch('open-modal', 'delete-role-{{ $item->id }}')">
            <x-tabler-trash />
            Delete
        </x-table-dropdown-option.button-link>
    </x-slot:content>
</x-table-dropdown-option>
