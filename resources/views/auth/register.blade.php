<x-guest-layout>
    <div class="">
        <a href="/">
            <img src="{{ asset('logo.jpg') }}" class="mx-auto" style="width: 200px; height: 80px;">
        </a>
    </div>
    <div class="text-center my-5">
       <span style="font-size: 20px;">Créez un compte Gratuitement!</span> 
    </div>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label class="text-white" for="name" :value="__('Nom Complet')" />
            <x-text-input id="name" class="block mt-1 w-full text-black" type="text" name="name"  :value="old('name')" placeholder="Nom Complet ..." required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" class="text-white" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full text-black" type="email" name="email" :value="old('email')" placeholder="Email ..." required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" class="text-white" :value="__('Mot de passe')" />

            <x-text-input id="password" class="block mt-1 w-full text-black" type="password" name="password" placeholder="Mot de passe ..." required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" class="text-white" :value="__('Confirmez le mot de passe')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full text-black" type="password" name="password_confirmation" placeholder="Confirmez le mot de passe ..." required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-white dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>


<style>
  
</style>