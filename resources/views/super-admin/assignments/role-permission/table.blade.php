<x-superadmin-layout title="Assign Permission">
    <x-slot:header>
        Assignment
    </x-slot:header>
    <x-assignment-tab>
        <div class="p-2">
            @include('super-admin.assignments.role-permission.create')
            <x-card class="overflow-hidden">
                <x-card.header>
                    <x-card.title>Role Permission Status</x-card.title>
                    <x-card.description>All information of role with permissions </x-card.description>
                </x-card.header>
                <x-card.content>
                    <x-table class="min-h-[65vh]">
                        <x-table.thead>
                            <x-table.tr>
                                <x-table.th class="text-center md:w-[20px]">#</x-table.th>
                                <x-table.th>Name</x-table.th>
                                <x-table.th>Permissions</x-table.th>
                                <x-table.th />
                            </x-table.tr>
                        </x-table.thead>
                        <x-table.tbody>
                            @forelse ($roles as $i => $item)
                                <x-table.tr>
                                    <x-table.td class="text-center md:w-[20px]">{{ $i + 1 }}</x-table.td>
                                    <x-table.td>
                                        {{ $item->name }}
                                    </x-table.td>
                                    <x-table.td>{{ implode(', ', $item->getPermissionNames()->toArray()) }}</x-table.td>
                                    <x-table.td>
                                        <div class="flex items-center">
                                            @include('super-admin.assignments.role-permission.partials.option')
                                        </div>
                                    </x-table.td>
                                </x-table.tr>
                            @empty
                                <x-table.tr>
                                    <x-table.td class="animate-pulse py-5 text-center text-base font-semibold text-destructive" colspan='5'>
                                        {{ __('Roles Not Found') }}
                                    </x-table.td>
                                </x-table.tr>
                            @endforelse
                        </x-table.tbody>
                    </x-table>
                </x-card.content>
            </x-card>
        </div>
    </x-assignment-tab>

    <x-slot:script>
        @push('scripts')
            <script type="text/javascript">
                $(document).ready(function() {
                    $('.permissions-multiple').select2();
                });
            </script>
        @endpush
    </x-slot:script>
</x-superadmin-layout>
