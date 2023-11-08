<x-table-dropdown-option type="permission" title="permission" width='w-48' :id="$item->id" :data="$item->id . $item->name" placement="bottom-end">
    <x-slot:content>
        <x-table-dropdown-option.button-link x-data="" x-on:click.prevent="$dispatch('open-modal', 'edit-{{ str($item->name)->slug() }}-permission-{{ $item->id }}')">
            <x-tabler-pencil />
            Edit
        </x-table-dropdown-option.button-link>
        <x-table-dropdown-option.button-link x-data="" x-on:click.prevent="$dispatch('open-modal', 'delete-permission-{{ $item->id }}')">
            <x-tabler-trash />
            Delete
        </x-table-dropdown-option.button-link>
    </x-slot:content>
</x-table-dropdown-option>
