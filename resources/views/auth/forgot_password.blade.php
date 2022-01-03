@extends('layouts.app')


@section('content')
  <div class="max-w-9xl mx-auto bg-white mt-6 py-2">

    <h1 class="text-center text-2xl font-bold tracking-wide pt-10 pb-6">  بازیابی رمز عبور</h1>
    <p class="mb-4 text-gray-600 text-center">
      اگر رمز عبور خود را فراموش کرده اید در زیر شماره تلفن خود را وارد کنید.
    </p>

    <form
      method="POST"
      action="{{ route('password.phone') }}"
      class="px-4 mt-6 mb-4 mx-w-md sm:max-w-md mx-auto">
      @csrf

      <!-- phone -->
      <div>
        <label for="phone">تلفن</label>
        <input
          type="tel"
          class="rounded block mt-1 w-full focus:outline-none py-3 border-1"
          name="phone"
          value="{{ old('phone') }}"
          required
          autofocus>

          @error('phone.notfound')
            <div class="mt-2 text-red-600">
              {{ $message }}
            </div>
          @enderror
          @error('phone')
            <div class="mt-2 text-red-600">
              {{ $message === 'validation.min.string' ? 'شماره تلفن باید ۱۱ رقم باشد.' : ''}}
              {{ $message === 'validation.regex' ? 'شماره تلفن باید ۱۱ رقم باشد.' : ''}}
            </div>
          @enderror
      </div>

      <div class="mt-6 flex items-center justify-between">
        <x-button class="ml-3">
          ارسال
        </x-button>
      </div>
    </form>
  </div>
@endsection