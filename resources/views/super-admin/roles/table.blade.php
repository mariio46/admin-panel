<x-superadmin-layout title="Roles">
    <x-slot:header>
        Roles
    </x-slot:header>
    <x-role-tab>
        <x-tab.content class="!p-2">
            @include('super-admin.roles.create')
            <x-card class="overflow-hidden">
                <x-card.content class="!p-0">
                    <x-table class="min-h-[65vh]">
                        <x-table.thead>
                            <x-table.tr>
                                <x-table.th class="text-center md:w-[20px]">#</x-table.th>
                                <x-table.th class="md:max-w-[300px]">Name</x-table.th>
                                <x-table.th>Guard name</x-table.th>
                                <x-table.th>Created</x-table.th>
                                <x-table.th>Updated</x-table.th>
                                <x-table.th />
                            </x-table.tr>
                        </x-table.thead>
                        <x-table.tbody>
                            @forelse ($collections as $i => $item)
                                <x-table.tr>
                                    <x-table.td class="text-center md:w-[20px]">{{ $i + $collections->firstItem() }}</x-table.td>
                                    <x-table.td class="md:max-w-[300px]">
                                        {{ $item->name }}
                                    </x-table.td>
                                    <x-table.td>{{ $item->guard_name }}</x-table.td>
                                    <x-table.td>{{ $item->created_at->diffForHumans() }}</x-table.td>
                                    <x-table.td>{{ $item->updated_at->diffForHumans() }}</x-table.td>
                                    <x-table.td>
                                        <div class="flex items-center justify-end">
                                            @include('super-admin.roles.partials.role-option')
                                        </div>
                                    </x-table.td>
                                </x-table.tr>
                                @include('super-admin.roles.partials.edit-role-modal')
                                @include('super-admin.roles.partials.delete-role-modal')
                            @empty
                                <x-table.tr>
                                    <x-table.td class="animate-pulse py-5 text-center text-base font-semibold text-destructive" colspan='5'>
                                        {{ __('Collections Not Found') }}
                                    </x-table.td>
                                </x-table.tr>
                            @endforelse
                        </x-table.tbody>
                    </x-table>
                </x-card.content>
            </x-card>
        </x-tab.content>
    </x-role-tab>
</x-superadmin-layout>
