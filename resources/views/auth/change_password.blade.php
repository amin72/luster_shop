@extends('layouts.app')


@section('title')
  تغییر رمز عبور
@endsection


@section('content')

<div class="max-w-xl mx-auto md:my-8 lg:my-36 px-8 py-12 shadow-xl bg-gray-50">
  @include('partials.messages')

  <h1 class="text-center text-3xl mb-12 tracking-wide font-semibold">تغییر رمز عبور</h1>

  <form action="{{ route('change_password') }}" method="POST" class="">
    @csrf
    @method('PUT')

    <div class="flex flex-col mt-10">
      {{-- password --}}
      <div>
        <label for="password" class="block w-full py-2">رمز عبور</label>
        <input
          type="password"
          name="password"
          class="block w-full px-4 py-2 border border-gray-500 focus:outline-none focus:ring-1 ring-gray-500 rounded-lg"
          required>
        @error('password')
          <div class="mt-2 text-red-600">
            {{ $message === 'validation.min.string' ? 'طول رمز عبور باید ۸ کاراکتر باشد.' : '' }}
            {{ $message === 'validation.confirmed' ? 'رمزهای عبور یکسان نیستند.' : ''}}
          </div>
        @enderror
      </div>

      {{-- confirmed password --}}
      <div class="mt-6">
        <label for="password_confirmation" class="block w-full py-2">رمز عبور (تکرار)</label>
        <input
          type="password"
          name="password_confirmation"
          class="block w-full px-4 py-2 border border-gray-500 focus:outline-none focus:ring-1 ring-gray-500 rounded-lg"
          required>
      </div>
    </div>

    <div class="mt-6">
      <button
        type="submit"
        class="block w-full md:w-auto rounded-lg px-6 py-3 bg-red-400 text-white focus:outline-none focus:ring-1 ring-gray-500">ارسال</button>
    </div>
  </form>

</div>
@endsection