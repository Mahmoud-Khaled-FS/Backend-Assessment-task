<x-app-layout>
  <div class="max-w-2xl mt-12 m-auto">
    
    @if(session()->has("message"))
    <div class="flex px-6 py-4 items-center bg-green-600 text-white message">{{ session()->get('message') }}</div>
    @endif
    <form method="POST" action="{{ route('contact') }}">
      @csrf
      <div>
        <div class="mt-4">
          <x-input-label for="name" :value="__('Name')" />
          <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
          <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        <div class="mt-4">
          <x-input-label for="email" :value="__('Email')" />
          <x-text-input id="email" class="block mt-1 w-full" type="text" name="email" :value="old('email')" required autofocus autocomplete="email" />
          <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <div class="mt-4">
          <x-input-label for="subject" :value="__('Subject')" />
          <x-text-input id="subject" class="block mt-1 w-full" type="text" name="subject" :value="old('subject')" required autofocus autocomplete="subject" />
          <x-input-error :messages="$errors->get('subject')" class="mt-2" />
        </div>

        <div class="mt-4">
          <x-input-label for="message" :value="__('Message')" />
          <x-text-input id="message" textarea class="block mt-1 w-full" type="text" name="message" :value="old('message')" required autofocus autocomplete="message" />
          <x-input-error :messages="$errors->get('message')" class="mt-2" />
        </div>

          <div class="flex items-center justify-end mt-4">
            
            <x-primary-button id="login" class="ms-3">
              {{ __('Submit') }}
            </x-primary-button>
          </div>
        </form>
      </div>
      </x-app-layout>