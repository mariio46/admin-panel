<x-card class="mb-2 w-1/2">
    <x-card.header>
        <x-card.title>
            Assign permissions to role
        </x-card.title>
        <x-card.description>
            Assign permissions to one role so he will be have ability to manage this website.
        </x-card.description>
    </x-card.header>
    <x-card.content>
        <form action="{{ route('permission.assignments.store') }}" method="post">
            @csrf
            <div>
                <x-label for="role" :value="__('role')" />
                <x-select id="role" name="role" required>
                    <x-select.content>
                        <x-select.option disabled selected>Select role</x-select.option>
                        @foreach ($roles as $role)
                            <x-select.option :value="$role->id">{{ $role->name }}</x-select.option>
                        @endforeach
                    </x-select.content>
                </x-select>
                <x-input-error class="mt-2" :messages="$errors->assignRolePermission->get('role')" />
            </div>
            <div class="mt-6">
                <x-label for="permissions" :value="__('permissions')" />
                <select class="permissions-multiple" id="permissions" name="permissions[]" data-placeholder="Select permissions" data-allow-clear="false" title="Select city..." style="width: 100%"
                    required multiple="multiple">
                    @foreach ($permissions as $permission)
                        <option value="{{ $permission->name }}">{{ $permission->name }}</option>
                    @endforeach
                </select>
                <x-input-error class="mt-2" :messages="$errors->assignRolePermission->get('permissions')" />
            </div>
            <div class="mt-4 flex items-center justify-end">
                <x-button type='submit'>
                    {{ __('Assign') }}
                </x-button>
            </div>

        </form>
    </x-card.content>
</x-card>
