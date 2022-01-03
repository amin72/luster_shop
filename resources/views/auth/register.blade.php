@extends('layouts.app')


@section('content')
  <div class="max-w-9xl mx-auto bg-white mt-6 py-2">

    <h1 class="text-center text-2xl font-bold tracking-wide pt-10 pb-4">ثبت نام</h1>

    <form
      method="POST"
      action="{{ route('register') }}"
      class="px-4 my-4 mx-w-md sm:max-w-md mx-auto">

      @csrf

      <!-- Name -->
      <div>
        <label for="name">نام</label>
        <input
          type="text"
          class="rounded block mt-1 w-full focus:outline-none py-3 border-1"
          name="name"
          value="{{ old('name') }}"
          required
          autofocus>
          <div class="mt-2 text-red-600">
            @error('phone')
              {{ $message === 'validation.unique' ? 'این شماره تلفن قبلا استفاده شده است.' : '' }}
              {{ $message === 'validation.min.string' ? 'شماره تلفن باید ۱۱ رقم باشد.' : ''}}
              {{ $message === 'validation.regex' ? 'شماره تلفن باید ۱۱ رقم باشد.' : ''}}
            @enderror
          </div>
      </div>

      <!-- Phone -->
      <div class="mt-6">
        <label for="phone">تلفن</label>
        <input
          type="text"
          class="rounded block mt-1 w-full focus:outline-none py-3 border-1"
          name="phone"
          value="{{ old('phone') }}"
          required>
          @error('phone')
            <div class="mt-2 text-red-600">
              {{ $message === 'The phone has already been taken.' ? 'این شماره تلفن قبلا استفاده شده است.' : '' }}
              {{ $message === 'validation.min.string' ? 'شماره تلفن باید ۱۱ رقم باشد.' : ''}}
              {{ $message === 'validation.regex' ? 'شماره تلفن باید ۱۱ رقم باشد.' : ''}}
            </div>
          @enderror
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
          @error('password')
            <div class="mt-2 text-red-600">
              {{ $message === 'validation.min.string' ? 'طول رمز عبور باید ۸ کاراکتر باشد.' : '' }}
              {{ $message === 'validation.confirmed' ? 'رمزهای عبور یکسان نیستند.' : ''}}
            </div>
          @enderror
      </div>

      <!-- Confirm Password -->
      <div class="mt-6">
        <label for="password_confirmation">رمز عبور</label>
        <input
          type="password"
          class="rounded block mt-1 w-full focus:outline-none py-3 border-1"
          name="password_confirmation"
          required
          autocomplete="current-password">
      </div>

      <div class="mt-6 flex items-center justify-between">
        <x-button class="ml-3">
          ثبت نام
        </x-button>

        <a
          class="text-sm text-gray-600 hover:text-gray-900"
          href="{{ route('login') }}">
          قبلاٌ ثبت نام کرده اید؟
        </a>
      </div>
    </form>
  </div>
@endsection

<!-- Session Status -->
<!-- <x-auth-session-status class="mb-4" :status="session('status')" /> -->

<!-- Validation Errors -->
<!-- <x-auth-validation-errors class="mb-4" :errors="$errors" /> -->
