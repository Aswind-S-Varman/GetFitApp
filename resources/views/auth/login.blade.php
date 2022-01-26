<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login</title>
<link href={{ URL::asset('css/main.css'); }} rel="stylesheet" />

<style>
  body{
    background-image: url('../assets/img/AD WEBSITE.jpg'); }
</style>
</head>
<body>
    <img src="../assets/img/GET FIT LOGO.png" alt="..." width= "150" height= "56.25" />

    <form method="POST" action="{{ route('login') }}">
@csrf

<div class="container">
    <h3>Log In</h3>
    <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mt-8">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>

  </div>

    </div>
    
</form>
</body>
</html>
