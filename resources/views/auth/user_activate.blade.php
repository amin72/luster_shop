@extends('layouts.app')


@section('title')
  فعال سازی اکانت
@endsection


@section('content')
<div class="max-w-9xl mx-auto bg-white mt-6 py-6">
  @include('partials.messages')

  <h1 class="text-center text-2xl font-bold tracking-wide pt-10 pb-4">فعال سازی اکانت</h1>

  <form
    method="POST"
    action="{{ route('user_activate') }}"
    class="px-4 my-4 mx-w-md sm:max-w-md mx-auto">
    @csrf

    <!-- token -->
    <div class="mt-6">
      <label for="token">کد را در این قسمت وارد کنید</label>
      <input
        type="text"
        id="token"
        name="token"
        class="rounded block mt-2 w-full focus:outline-none py-3 border-1"
        value=""
        maxlength="6"
        autofocus
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
    action="{{ route('user_activate') }}"
    method="POST"
    class="mt-6 px-4 mx-w-md sm:max-w-md mx-auto"
    >
    @csrf
    @method('PUT')
    <button type="submit" class="block text-gray-600 hover:text-gray-900 md:mt-0 focus:outline-none">
      ارسال مجدد کد فعال سازی
    </button>
  </form>
</div>
@endsection