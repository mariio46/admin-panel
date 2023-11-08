<x-superadmin-layout title="Assign Role">
    <x-slot:header>
        Assignment
    </x-slot:header>
    <x-assignment-tab>
        <div class="p-2">
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
                    <form action="{{ route('role.assignments.update', $user) }}" method="post" novalidate>
                        @csrf
                        @method('put')
                        <div>
                            <x-label for="user" :value="__('user')" />
                            {{-- <x-input id='user' name='user' :value="$user->id" disabled /> --}}
                            <x-select id="user" name="user">
                                <x-select.content>
                                    <x-select.option :value="$user->id">{{ $user->name }}</x-select.option>
                                </x-select.content>
                            </x-select>
                            <x-input-error class="mt-2" :messages="$errors->assignUserRole->get('user')" />
                        </div>
                        <div class="mt-6">
                            <x-label for="roles" :value="__('roles')" />
                            <select class="roles-multiple" id="roles" name="roles[]" data-placeholder="Select roles" data-allow-clear="false" title="Select city..." style="width: 100%"
                                multiple="multiple">
                                @foreach ($roles as $item)
                                    <option value="{{ $item->name }}" {{ $user->roles->find($item->id) ? 'selected' : '' }}>{{ $item->name }}</option>
                                @endforeach
                            </select>
                            <x-input-error class="mt-2" :messages="$errors->assignUserRole->get('roles')" />
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
