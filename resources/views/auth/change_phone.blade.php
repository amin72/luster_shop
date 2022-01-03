@extends('layouts.app')


@section('title')
  ویرایش شماره تماس
@endsection


@section('content')
<div class="max-w-xl mx-auto md:my-8 lg:my-36 px-8 py-12 shadow-xl bg-gray-50">
  @include('partials.messages')

  <h1 class="text-center text-3xl mb-12 tracking-wide font-semibold">ویرایش شماره تلفن</h1>

  <form action="{{ route('change_phone') }}" method="POST">
    @csrf

    <div class="flex flex-col mt-10">
      {{-- current phone number --}}
      <div>
        <label class="block w-full py-2">شماره تلفن فعلی</label>
        <input
          type="text"
          class="block w-full px-4 py-2 border border-gray-500 focus:outline-none focus:ring-1 ring-gray-500 rounded-lg"
          value="{{ Auth::user()->phone }}"
          disabled>
      </div>

      {{-- new phone number --}}
      <div class="mt-6">
        <label class="block w-full py-2">شماره تلفن جدید</label>
        <input
          type="text"
          name="phone"
          class="block w-full px-4 py-2 border border-gray-500 focus:outline-none focus:ring-1 ring-gray-500 rounded-lg"
          value="{{ old('phone') }}">
          @error('phone')
          <div class="mt-2 text-red-600">
            {{ $message === 'validation.unique' ? 'این شماره تلفن تکراری است.' : '' }}
            {{ $message === 'validation.min.string' ? 'شماره تلفن باید ۱۱ رقم باشد.' : '' }}
            {{ $message === 'validation.regex' ? 'شماره تلفن باید ۱۱ رقم باشد.' : ''}}
          </div>
        @enderror
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