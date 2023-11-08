<x-card class="mb-2 w-1/2">
    <x-card.header>
        <x-card.title>
            Assign role to user
        </x-card.title>
        <x-card.description>
            Assign role to one user so he will be have ability to manage this website.
        </x-card.description>
    </x-card.header>
    <x-card.content>
        <form action="{{ route('role.assignments.store') }}" method="post">
            @csrf
            <div>
                <x-label for="user" :value="__('user')" />
                <x-select id="user" name="user">
                    <x-select.content>
                        <x-select.option disabled selected>Select User</x-select.option>
                        @foreach ($users as $user)
                            <x-select.option :value="$user->id">{{ $user->name }}</x-select.option>
                        @endforeach
                    </x-select.content>
                </x-select>
                <x-input-error class="mt-2" :messages="$errors->assignUserRole->get('user')" />
            </div>
            <div class="mt-6">
                <x-label for="roles" :value="__('roles')" />
                <select class="roles-multiple" id="roles" name="roles[]" data-placeholder="Select roles" data-allow-clear="false" title="Select city..." style="width: 100%" multiple="multiple">
                    @foreach ($roles as $role)
                        <option value="{{ $role->name }}">{{ $role->name }}</option>
                    @endforeach
                </select>
                <x-input-error class="mt-2" :messages="$errors->assignUserRole->get('roles')" />
            </div>
            <div class="mt-4 flex items-center justify-end">
                <x-button type='submit'>
                    {{ __('Assign') }}
                </x-button>
            </div>

        </form>
    </x-card.content>
</x-card>
