@extends('layouts.app')


@section('content')
  <div class="max-w-9xl mx-auto bg-white mt-6 py-2">

    <h1 class="text-center text-2xl font-bold tracking-wide pt-10 pb-4">ورود به لوستر شاپ</h1>

    <form method="POST" action="{{ route('login') }}" class="px-4 my-4 mx-w-md sm:max-w-md mx-auto">
      @csrf

      <!-- Email Address -->
      <div>
        <label for="email">ایمیل</label>
        <input
          type="email"
          class="rounded block mt-1 w-full focus:outline-none py-3 border-1"
          name="email"
          value="{{ old('email') }}"
          required
          autofocus>
      </div>

      <!-- Password -->
      <div class="mt-6">
        <label for="password">رمز عبور</label>
        <input
          type="password"
          class="rounded block mt-1 w-full focus:outline-none py-3 border-1"
          name="password"
          required
          autocomplete="current-password">
      </div>

      <!-- Remember Me -->
      <div class="mt-6">
        <label for="remember_me">
          <input
            type="checkbox"
            class="rounded mt-1 focus:outline-none border-0 p-2 border-2 border-indigo-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            name="remember"
            autocomplete="current-password">
            <span class="ml-2 text-sm text-gray-600">مرا به خاطر بسپار</span>
        </label>
      </div>

      <div class="mt-6 flex items-center justify-between">
        <x-button class="ml-3">
          ورود
        </x-button>

        @if (Route::has('password.request'))
          <a
            class="text-sm text-gray-600 hover:text-gray-900"
            href="{{ route('password.request') }}">
            رمز عبور را فراموش کردید؟
          </a>
        @endif
      </div>
    </form>
  </div>
@endsection

<!-- Session Status -->
<!-- <x-auth-session-status class="mb-4" :status="session('status')" /> -->

<!-- Validation Errors -->
<!-- <x-auth-validation-errors class="mb-4" :errors="$errors" /> -->
