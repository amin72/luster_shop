@extends('layouts.app')


@section('title')
  فعال سازی اکانت
@endsection


@section('content')
<div class="max-w-xl mx-auto px-8 py-12 shadow-xl bg-gray-50 my-16 md:my-32 lg:my-44">
  @include('partials.messages')

  <h1 class="text-center text-3xl mb-12 tracking-wide font-semibold">فعال سازی اکانت</h1>

  <form method="POST" action="{{ route('change_phone') }}">
    @csrf
    @method('PUT')

    <!-- token -->
    <div class="mt-6">
      <label for="token">کد را در این قسمت وارد کنید</label>
      <input
        type="text"
        id="token"
        name="token"
        class="block mt-1 w-full"
        value=""
        max="6"
        required>
        @error('token')
          <div class="mt-2 text-red-600">
            {{ $message === 'validation.min.string' ? 'کد باید ۶ رقم باشد.' : ''}}
            {{ $message === 'validation.max.string' ? 'کد باید ۶ رقم باشد.' : '' }}
          </div>
        @enderror
        @error('token.expired')
          <div class="mt-2 text-red-600">
            {{ $message }}
          </div>
        @enderror
    </div>

    <div class="flex flex-col md:flex-row justify-between mt-6 items-center">
      <button class="block w-full md:w-auto px-4 py-2 bg-red-400 rounded-lg text-white tracking-widest focus:outline-none">ارسال</button>
    </div>
  </form>

  <form action="{{ route('user_activate') }}" method="POST" class="mt-6">
    @csrf
    @method('PUT')
    <button type="submit" class="block text-gray-600 hover:text-gray-900 md:mt-0 focus:outline-none">
      ارسال مجدد کد فعال سازی
    </button>
  </form>
</div>
@endsection