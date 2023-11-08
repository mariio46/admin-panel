<x-superadmin-layout title="Sync Role Permissions">
    <x-slot:header>
        Assignment
    </x-slot:header>
    <x-assignment-tab>
        <div class="p-2">
            <x-card class="mb-2 w-1/2">
                <x-card.header>
                    <x-card.title>
                        Synchronize role permissions
                    </x-card.title>
                    <x-card.description>
                        Synchronize permissions to one role so he will be have ability to manage this website.
                    </x-card.description>
                </x-card.header>
                <x-card.content>
                    <form action="{{ route('permission.assignments.update', $role) }}" method="post" novalidate>
                        @csrf
                        @method('put')
                        <div>
                            <x-label for="role" :value="__('role')" />
                            <x-select id="role" name="role">
                                <x-select.content>
                                    <x-select.option :value="$role->name">{{ $role->name }}</x-select.option>
                                </x-select.content>
                            </x-select>
                            <x-input-error class="mt-2" :messages="$errors->assignRolePermission->get('role')" />
                        </div>
                        <div class="mt-6">
                            <x-label for="permissions" :value="__('permissions')" />
                            <select class="permissions-multiple" id="permissions" name="permissions[]" data-placeholder="Select permissions" data-allow-clear="false" title="Select city..."
                                style="width: 100%" multiple="multiple">
                                @foreach ($permissions as $item)
                                    <option value="{{ $item->name }}" {{ $role->permissions->find($item->id) ? 'selected' : '' }}>{{ $item->name }}</option>
                                @endforeach
                            </select>
                            <x-input-error class="mt-2" :messages="$errors->assignRolePermission->get('permissions')" />
                        </div>
                        <div class="mt-4 flex items-center justify-end">
                            <x-button type='submit'>
                                {{ __('Synchronize') }}
                            </x-button>
                        </div>
                    </form>
                </x-card.content>
            </x-card>
        </div>
    </x-assignment-tab>

    @push('scripts')
        <script type="text/javascript">
            $(document).ready(function() {
                $('.permissions-multiple').select2();
            });
        </script>
    @endpush
</x-superadmin-layout>
