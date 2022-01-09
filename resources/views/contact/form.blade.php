@extends('layouts.app')


@section('title')
  ارتباط با ما
@endsection


@section('content')
<div class="container my-12 mx-auto text-gray-800 text-xl px-4 sm:px-6 lg:px-16">
  @include('partials.messages')

  <div class="mt-4">
    <p class="text-justify">
    برای ارتباط بیشتر با ما درخصوص نحوه ارسال محصولات و همچنین نقطه نظرات و انتقاد و پیشنهادهای عزیزان در راستای رشد و ارتقاء کفیت سایت می توانید از طریق فرم زیر اقدام فرمایید.    </p>
    </p>
  </div>

  <div class="mt-10">
    <form action="{{ route('contact.store') }}" class="max-w-3xl flex flex-col" method="POST">
      @csrf

      <div class="flex flex-col md:flex-row justify-between my-3">
        <div class="md:w-1/2 md:pl-4 mb-3 md:mb-0">
          <input
            type="text"
            name="name"
            placeholder="نام"
            class="rounded block mt-1 w-full focus:outline-none py-3 border-1"
            max_lenght="60"
            required>
        </div>

        <div class="md:w-1/2 mb-3 md:mb-0">
          <input
            type="text"
            name="phone"
            placeholder="شماره تماس"
            class="rounded block mt-1 w-full focus:outline-none py-3 border-1">
        </div>
      </div>

      <div class="my-3">
        <textarea
          name="message"
          placeholder="متن پیام"
          class="rounded block mt-1 w-full focus:outline-none py-3 border-1 h-40"
          required></textarea>
      </div>
      <div class="mt-3">
        <x-button type="submit" class="text-base">ارسال</x-button>
      </div>
    </form>
  </div>
</div>
@endsection