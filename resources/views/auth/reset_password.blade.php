@extends('layouts.app')


@section('title')
  تغییر رمز عبور
@endsection


@section('content')
  <div class="max-w-9xl mx-auto bg-white mt-6 py-2">

    <h1 class="text-center text-2xl font-bold tracking-wide pt-10 pb-4">تغییر رمز عبور</h1>

    <form
      method="POST"
      action="{{ route('password.update') }}"
      class="px-4 my-4 mx-w-md sm:max-w-md mx-auto">
      @csrf

      <!-- Password -->
      <div class="mt-6">
        <label for="password">رمز عبور</label>
        <input
          type="password"
          class="rounded block mt-1 w-full focus:outline-none py-3 border-1"
          name="password"
          id="password"
          required
          autocomplete="current-password">
          @error('password')
            <div class="mt-2 text-red-600">
              {{ $message === 'The password must be at least 8 characters.' ? 'طول رمز عبور باید ۸ کاراکتر باشد.' : '' }}
              {{ $message === 'The password confirmation does not match.' ? 'رمزهای عبور یکسان نیستند.' : ''}}
            </div>
          @enderror
      </div>

      <!-- Password -->
      <div class="mt-6">
        <label for="password_confirmation">رمز عبور (تکرار)</label>
        <input
          type="password"
          class="rounded block mt-1 w-full focus:outline-none py-3 border-1"
          name="password_confirmation"
          id="password_confirmation"
          required>
      </div>

      <div class="mt-6 flex items-center justify-between">
        <x-button class="ml-3">
          ارسال
        </x-button>
      </div>
    </form>
  </div>
@endsection