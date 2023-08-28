<div>
    <form wire:submit="save">
        <x-input-label>Nome </x-input-label>
        <x-text-input type="text" wire:model.lazy="form.name" /> {{ $form->name }}
        <div>
            @error('form.name')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <x-input-label>Email </x-input-label>
        <x-text-input type="text" wire:model.lazy="form.email" />
        <div>
            @error('form.email')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
        <x-input-label>Senha</x-input-label>
        <x-text-input type="password" wire:model="form.password" />
        <div>
            @error('form.password')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <x-primary-button type="submit">Save</x-primary-button>
        <x-secondary-button wire:click="add">Add user</x-secondary-button>
    </form>
    
    @foreach ($users as $user)
        <li>
            {{ $user['name'] }}
        </li>
    @endforeach

</div>
