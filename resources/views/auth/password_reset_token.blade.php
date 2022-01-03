@extends('layouts.app')


@section('title')
  تغییر رمز عبور
@endsection


@section('content')
<div class="max-w-9xl mx-auto bg-white mt-6 py-2">
  @include('partials.messages')

  <h1 class="text-center text-2xl font-bold tracking-wide pt-10 pb-4">تغییر رمز</h1>

  <form
    method="POST"
    action="{{ route('password_reset_token') }}"
    class="px-4 my-4 mx-w-md sm:max-w-md mx-auto">
    @csrf

    <input type="hidden" name="phone" value="{{ Session::get('phone') }}">

    <!-- token -->
    <div class="mt-6">
      <label for="token">کد ۶ رقمی ارسال شده به شماره تلفن خود را در این قسمت وارد کنید</label>
      <input
        type="text"
        id="token"
        name="token"
        class="rounded block mt-1 w-full focus:outline-none py-3 border-1"
        value=""
        maxlength="6"
        required>
      @error('token')
        <div class="mt-2 text-red-600">
          @if ($message == 'The token must be at least 6 characters.')
            کد باید ۶ رقم باشد.
          @else
            {{ $message }}
          @endif
        </div>
      @enderror
      @error('token.expired')
        <div class="mt-2 text-red-600">
          {{ $message }}
        </div>
      @enderror
    </div>

    <div class="flex flex-col md:flex-row justify-between mt-6 items-center">
      <x-button>ارسال</x-button>
    </div>
  </form>
  
  <form
    method="POST"
    action="{{ route('password_reset_token') }}"
    class="px-4 my-4 mx-w-md sm:max-w-md mx-auto">
    @csrf
    @method('PUT')

    <input type="hidden" name="phone" value="{{ Session::get('phone') }}">
    <button type="submit" class="block text-gray-600 hover:text-gray-900 md:mt-0 focus:outline-none">
      ارسال مجدد کد فعال سازی
    </button>
  </form>
</div>
@endsection