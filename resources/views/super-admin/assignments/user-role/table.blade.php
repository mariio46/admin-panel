<x-superadmin-layout title="Assign Role">
    <x-slot:header>
        Assignment
    </x-slot:header>
    <x-assignment-tab>
        <div class="p-2">
            @include('super-admin.assignments.user-role.create')
            <x-card class="overflow-hidden">
                <x-card.header>
                    <x-card.title>User with role status</x-card.title>
                    <x-card.description>All information of user with roles </x-card.description>
                </x-card.header>
                <x-card.content>
                    <x-table class="min-h-[65vh]">
                        <x-table.thead>
                            <x-table.tr>
                                <x-table.th class="text-center md:w-[20px]">#</x-table.th>
                                <x-table.th class="md:max-w-[400px]">Name</x-table.th>
                                <x-table.th>roles</x-table.th>
                                <x-table.th />
                            </x-table.tr>
                        </x-table.thead>
                        <x-table.tbody>
                            @forelse ($collections as $i => $item)
                                <x-table.tr>
                                    <x-table.td class="text-center md:w-[20px]">{{ $i + 1 }}</x-table.td>
                                    <x-table.td class="md:max-w-[400px]">
                                        {{ $item->name }}
                                    </x-table.td>
                                    <x-table.td>{{ implode(', ', $item->getRoleNames()->toArray()) }}</x-table.td>
                                    <x-table.td>
                                        <div class="flex items-center">
                                            @include('super-admin.assignments.user-role.partials.option')
                                        </div>
                                    </x-table.td>
                                </x-table.tr>
                            @empty
                                <x-table.tr>
                                    <x-table.td class="animate-pulse py-5 text-center text-base font-semibold text-destructive" colspan='5'>
                                        {{ __('User Not Found') }}
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
                    $('.roles-multiple').select2();
                });
            </script>
        @endpush
    </x-slot:script>
</x-superadmin-layout>
