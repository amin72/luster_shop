@extends('layouts.base')


@section('content')
  <div class="max-w-10xl 2xl:max-w-9xl mx-auto bg-white mt-6 py-2">
    
    {{-- top image --}}
    <section></section>

    <section class="flex flex-col lg:flex-row py-8 px-4">
      <h1 class="inline-block lg:hidden border-b text-lg pb-3">محصول یک مبل تختخواب شو دو نفره چشمه نور مدل MA-503/140-PUR</h1>
      <div class="lg:w-4/12 flex-shrink-0 lg:pl-4">
        <div class="">
          <img class="h-96 w-full max-w-xs xl:max-w-sm mx-auto mt-10 lg:mt-0" src="{{ asset($product->image) }}" alt="{{ $product->name }}">
        </div>

        <div class="flex mt-10 overflow-hidden">
          <img class="h-16 w-1/6 ml-3 rounded cursor-pointer" src="{{ asset($product->image) }}" alt="{{ $product->name }}">
          <img class="h-16 w-1/6 ml-3 rounded cursor-pointer" src="{{ asset($product->image) }}" alt="{{ $product->name }}">
          <img class="h-16 w-1/6 ml-3 rounded cursor-pointer" src="{{ asset($product->image) }}" alt="{{ $product->name }}">
          <img class="h-16 w-1/6 ml-3 rounded cursor-pointer" src="{{ asset($product->image) }}" alt="{{ $product->name }}">
          <img class="h-16 w-1/6 ml-3 rounded cursor-pointer" src="{{ asset($product->image) }}" alt="{{ $product->name }}">
          <img class="h-16 w-1/6 ml-3 rounded cursor-pointer" src="{{ asset($product->image) }}" alt="{{ $product->name }}">
        </div>
      </div>

      <div class="w-full lg:w-8/12 flex-shrink-0">
        <h1 class="hidden lg:block border-b text-lg xl:text-xl pb-3">{{ $product->name }}</h1>
        {{-- properties --}}
        <div class="flex flex-wrap justify-between mt-6 lg:mt-0">
          <div class="w-full md:w-1/2 xl:w-1/3 flex-shrink-0 mt-6">
            <ul class="mt-3 text-sm space-y-2 text-gray-600 list-disc list-inside">
              <li>جنس لایه میانی : فوم</li>
              <li>جنس کلاف : استیل</li>
              <li>ارتفاع : 88 سانتی متر</li>
              <li>وزن : 76 کیلوگرم</li>              
            </ul>
          </div>

          <div class="w-full md:w-1/2 xl:w-1/3 flex-shrink-0 bg-gray-100 font-lg px-4 mt-10 md:mt-0">
            <div class="py-5 border-b">
              فروش توسط: لوستر شاپ
            </div>
            <div class="py-5 border-b">
              گارانتی ۱۲ ماهه لوستر شاپ
            </div>
            <div class="py-5 border-b">
              آماده ارسال از انبار طی 10 روز کاری
            </div>
            <div class="py-5 border-b text-left text-red-500 text-lg">
              <span class="change_price px-1 font-semibold tracking-widest">{{ $product->price }}</span>
              تومان
            </div>
            <div class="py-5 border-b text-left">
              <form action="" class="flex justify-between">
                <button class="w-3/4 inline-block flex-shrink-0 px-6 py-3 bg-red-500 text-white text-sm tracking-widest font-semibold rounded-r-lg focus:outline-none">افزودن به سبد خرید</button>
                <input class="w-1/4 text-center inline-block flex-shrink-0 py-3 px-2 rounded-l-lg focus:outline-none" type="number" name="qunatity" value="1" min="1">
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>


  <div class="max-w-10xl 2xl:max-w-9xl mx-auto bg-white mt-6">
    <section class="py-8 px-4">
      <span class="py-4 border-b border-red-500 -my-px text-gray-800 font-semibold text-xl tracking-wide">توضیحات</span>
      <p class="mt-10 mb-4 text-lg leading-10">{{ $product->description }}</p>
    </section>
  </div>


  <div class="max-w-10xl 2xl:max-w-9xl mx-auto bg-white mt-6">
    <section class="py-8 px-4">
      <span class="py-4 border-b border-red-500 -my-px text-gray-800 font-semibold text-xl tracking-wide">محصولات مرتبط</span>

      <div class="flex flex-wrap mx-auto"> 
        @foreach ($product->similar_products() as $prod)
          <a
            href="{{ route('products.show', $prod->slug) }}"
            class="w-full md:w-1/3 lg:w-1/4 xl:w-1/6 mt-10 lg:mb-16 px-4 py-4 border border-gray-100 shadow-sm hover:shadow-xl transition-shadow delay-50">
            <img class="h-60 w-full" src="{{ asset($prod->small_image) }}" alt="{{ $prod->name }}">
            <div class="text-center mt-3">
              <span
                class="block lg:text-xl text-gray-800 font-semibold lg:font-medium mt-6">
                {{ $product->name }}
              </span>
              <div class="text-gray-700 mt-2">
                <span class="change_price tracking-widest font-semibold">{{ $product->price }}</span>
                <span>تومان</span>
              </div>
              {{-- @include('partials.shop.add_to_cart', ['product' => $product]) --}}
            </div>
          </a>
        @endforeach
      </div>
    </section>
  </div>
@endsection