@extends('layouts.app')


@section('title')
  سبد خرید
@endsection


@section('content')
<div class="max-w-7xl mx-auto px-8 py-6 rounded border shadow-xl">
  @include('partials.messages')

  @if (Cart::isEmpty())
    <div class="mt-4 text-xl text-center">
      سبد خرید خالی است. برای مشاهده محصولات به <a class="text-red-400" href="{{ route('shop.index') }}">فروشگاه</a> بروید.
    </div>
  @else
    {{-- display cart items --}}
    <div class="text-center text-gray-700">
      <div class="hidden lg:flex justify-between items-center border-b-2">
        <div class="w-7/12 text-xl font-semibold py-2 px-4 text-justify">نام محصول</div>
        <div class="w-1/12 text-xl font-semibold py-2">تعداد</div>
        <div class="w-2/12 text-xl font-semibold py-2">قیمت واحد</div>
        <div class="w-2/12 text-xl font-semibold py-2"></div>
      </div>

      @foreach (Cart::getContent() as $item)
      <div class="flex flex-col lg:flex-row lg:items-center border-b-2">

        {{-- product's name --}}
        <div class="flex items-center lg:w-7/12">
          <span class="w-1/4 md:w-1/6 text-right flex-shrink-0 lg:hidden">نام محصول:</span>
          <div class="w-3/4 lg:w-full py-4 lg:px-4 text-justify lg:bg-gray-300 rounded-xl flex-1 lg:ml-1 hover:text-gray-500 pr-2">
            <a href="{{ route('products.show', $item->associatedModel->slug) }}">
              {{ $item->name }}
            </a>
          </div>
        </div>

        {{-- quantity --}}
        <div class="flex items-center lg:w-1/12 lg:ml-1">
          <span class="text-right w-1/4 md:w-1/6 flex-shrink-0 lg:hidden">تعداد:</span>
          <div class="w-3/4 lg:w-full py-4 lg:px-4 text-justify lg:text-center lg:bg-gray-300 rounded-xl flex-1 font-semibold pr-2 lg:pr-0">{{ $item->quantity }}</div>
        </div>

        {{-- remove, decrement and increase quantity --}}
        <div class="flex justify-between flex-col lg:flex-row lg:w-4/12">

          <div class="flex justify-between items-center w-full lg:ml-1">
            <span class="text-right w-1/4 md:w-1/6 flex-shrink-0 lg:hidden">قیمت واحد:</span>

            <div class="flex lg:justify-center w-3/4 py-4 lg:px-4 text-justify lg:bg-gray-300 rounded-xl flex-1 pr-2">
              <span class="tracking-widest change_price">{{ $item->price }}</span>
              <span class="mr-2">تومان</span>
            </div>
          </div>

          <div class="flex justify-center py-5 md:justify-start lg:justify-end">
            <form action="{{ route('cart.destroy', $item->id) }}" method="POST">
              @csrf
              @method("DELETE")
              <x-button>حذف</x-button>
            </form>

            <div class="flex items-center px-2">
              <form action="{{ route('cart.update', ['id' => $item->id, 'action' => 'increase']) }}" method="POST">
                @csrf
                @method('PUT')
                <button class="focus:outline-none">
                  <svg class="h-8 w-8 fill-current text-blue-500 hover:text-blue-700 increase_quantity" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
                    <title>افزایش تعداد محصول</title>
                    <path d="M10,2.5L16.5,9H13v8H7V9H3.5L10,2.5z"/>
                  </svg>
                </button>
              </form>

              <form action="{{ route('cart.update', ['id' => $item->id, 'action' => 'decrease']) }}" method="POST">
                @csrf
                @method('PUT')
                <button class="focus:outline-none">
                  <svg class="h-8 w-8 fill-current text-red-500 hover:text-red-700 decrease_quantity" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
                    <title>کاهش تعداد محصول</title>
                    <path d="M10,17.5L3.5,11H7V3h6v8h3.5L10,17.5z"/>
                  </svg>
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
      @endforeach
      
      <div class="flex flex-col lg:flex-row items-center mt-6">
        <div class="lg:w-1/2 w-full px-4 h-16 flex justify-between items-center bg-gray-300 rounded-xl my-2 ml-2">
          <div class="lg:w-1/2 text-lg lg:text-xl">مجموع کل</div>
          <div class="lg:w-1/2 text-lg lg:text-xl">
            <span class="tracking-widest change_price">{{ Cart::getTotal() }}</span>
            <span>تومان</span>
          </div>
        </div>
        <div class="lg:w-1/2 w-full h-16 flex justify-between items-center bg-gray-300 rounded-xl my-2 ml-2">
          <a class="checkout h-full w-full flex justify-center items-center px-4 bg-red-400 text-white font-semibold text-xl rounded-xl hover:bg-red-500 tracking-widest" href="{{ route('checkout.index') }}">پرداخت</a>
        </div>
      </div>
    </div>
  @endif
</div>
@endsection