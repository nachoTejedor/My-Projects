<div class="space-y-6">
    
    <div>
        <x-input-label for="name" :value="__('Name')"/>
        <x-text-input wire:model="form.name" id="name" name="name" type="text" class="mt-1 block w-full" autocomplete="name" placeholder="Name"/>
        @error('form.name')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    <div>
        <x-input-label for="phone" :value="__('Phone')"/>
        <x-text-input wire:model="form.phone" id="phone" name="phone" type="text" class="mt-1 block w-full" autocomplete="phone" placeholder="Phone"/>
        @error('form.phone')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    <div>
        <x-input-label for="email" :value="__('Email')"/>
        <x-text-input wire:model="form.email" id="email" name="email" type="text" class="mt-1 block w-full" autocomplete="email" placeholder="Email"/>
        @error('form.email')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    <div>
        <x-input-label for="planet" :value="__('Planet')"/>
        <x-text-input wire:model="form.planet" id="planet" name="planet" type="text" class="mt-1 block w-full" autocomplete="planet" placeholder="Planet"/>
        @error('form.planet')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    <div>
        <x-input-label for="message" :value="__('Message')"/>
        <x-text-input wire:model="form.message" id="message" name="message" type="text" class="mt-1 block w-full" autocomplete="message" placeholder="Message"/>
        @error('form.message')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    <div>
        <x-input-label for="result" :value="__('Result')"/>
        <x-text-input wire:model="form.result" id="result" name="result" type="text" class="mt-1 block w-full" autocomplete="result" placeholder="Result"/>
        @error('form.result')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    <div>
        <x-input-label for="privacy" :value="__('Privacy')"/>
        <x-text-input wire:model="form.privacy" id="privacy" name="privacy" type="text" class="mt-1 block w-full" autocomplete="privacy" placeholder="Privacy"/>
        @error('form.privacy')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>