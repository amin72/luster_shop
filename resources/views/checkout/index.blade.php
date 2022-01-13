@extends('layouts.app')


@section('title')
  ادامه خرید
@endsection


@section('content')
<div class="max-w-7xl mx-auto px-8 py-6 rounded shadow-xl my-12 lg:my-32">
  @include('partials.messages')

  <div class="w-full pl-4">
    <h2 class="text-2xl">لیست محصولات شما</h2>
    <div class="mt-4 border-t-2">
      {{-- display cart items --}}
      <div class="text-center text-gray-700">
        @foreach (Cart::getContent() as $item)
          <div class="flex flex-col lg:flex-row lg:items-center border-b-2">
            {{-- product's name --}}
            <div class="flex items-center lg:w-9/12 my-2">
              <span class="w-1/4 md:w-1/6 text-right flex-shrink-0 lg:hidden">نام محصول:</span>
              <div class="w-3/4 lg:w-full py-4 lg:px-4 text-justify lg:bg-gray-300 rounded-xl ml-1 hover:text-gray-500 pr-2">
                <a href="{{ route('products.show', $item->associatedModel->slug) }}">
                  {{ $item->name }}
                </a>
              </div>
            </div>

            {{-- quantity --}}
            <div class="flex items-center lg:w-1/12 lg:ml-1">
              <span class="text-right w-1/4 md:w-1/6 flex-shrink-0 lg:hidden">تعداد:</span>
              <div class="w-3/4 lg:w-full py-4 lg:px-4 text-justify lg:text-center lg:bg-gray-300 rounded-xl pr-2 lg:pr-0 font-semibold">
                {{ $item->quantity }}
              </div>
            </div>

            {{-- price --}}
            <div class="flex items-center lg:w-2/12">
              <span class="text-right w-1/4 md:w-1/6 flex-shrink-0 lg:hidden">قیمت واحد:</span>
              <div class="w-3/4 lg:w-full py-4 lg:px-4 text-justify lg:text-center lg:bg-gray-300 rounded-xl pr-2 lg:pr-0">
                <span class="tracking-widest change_price">{{ $item->price }}</span>
                <span>تومان</span>
              </div>
            </div>
          </div>
        @endforeach
  
        <div class="flex items-center">
          <div class="w-full h-16 flex justify-between items-center bg-gray-300 rounded-xl my-2 font-bold">
            <div class="w-1/2 text-right pr-4">مجموع کل</div>
            <div class="w-1/2 text-left pl-4">
              <span class="tracking-widest change_price">{{ Cart::getTotal() }}</span>
              <span class="mr-1">تومان</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="my-2 font-bold">
      <form action="{{ route('checkout.store') }}" method="POST">
        @csrf
        <x-button class="text-base">ادامه پرداخت</x-button>
      </form>
    </div>

  </div>

  <div class="my-4">
  </div>
</div>
@endsection