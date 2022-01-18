@extends('layouts.app')


@section('title')
  خانه
@endsection


@section('content')
  <div class="max-w-7xl mx-auto">
    {{-- category section --}}
    <section class="mt-10 flex justify-between flex-wrap">
      @foreach (\App\Models\Circle::where(['section' => 1, 'is_active' => true])->take(6)->get() as $circle)
        <a 
          href="{{ $circle->link }}"
          class="rounded-full w-1/2 md:w-1/3 xl:w-auto my-4 flex flex-col items-center">
          <img
            class="rounded-full h-32 w-32"
            src="{{ asset($circle->image) }}"
            alt="{{ $circle->title }}">
          <span class="mt-4 tracking-wide font-semibold text-gray-800 text-sm">{{ $circle->title }}</span>
        </a>
      @endforeach
    </section>
  
  
    {{-- favorite products --}}
    <section class="rounded-lg bg-white shadow w-full py-4 px-6">
      {{-- header --}}
      <div class="flex justify-between font-bold text-lg border-b mb-4">
        <span class="py-4 border-b border-red-500 -my-px text-gray-800 font-semibold tracking-wide">محبوب ترین محصولات</span>
        <a href="#" class="py-4 text-gray-700 hover:text-green-800">مشاهده همه</a>
      </div>
  
      {{-- products section --}}
      <div class="flex justify-between items-center pt-2 pb-8 text-sm xl:text-base flex-wrap">
        @foreach (\App\Models\TopProduct::where('is_active', true)->orderBy('position')->take(6)->get() as $product)
          <a
            href="{{ route('products.show', $product->product->slug) }}"
            class="w-1/2 md:w-1/3 lg:w-1/6 text-center hover:shadow-xl px-1 sm:px-2 py-4">
            <img class="mb-4 rounded h-full w-full mx-auto" src="{{ asset($product->product->image) }}" alt="{{ $product->product->name }}">
            <span class="text-ceter text-gray-700 font-semibold mx-auto">{{ $product->product->name }}</span>
            <div class="text-left ml-2 text-gray-700 mt-6 font-semibold">
              <span class="change_price px-1 tracking-widest">{{ $product->product->price }}</span>
              تومان
            </div>
          </a>
        @endforeach
      </div>
    </section>
  
  
    {{-- luster products --}}
    <section class="rounded-lg bg-white shadow w-full pb-4 px-6">
      {{-- header --}}
      <div class="flex justify-between font-bold text-lg border-b mb-2">
        <span class="py-4 border-b border-red-500 -my-px text-gray-800 font-semibold tracking-wide">دیگر محصولات</span>
      </div>
  
      {{-- products section --}}
      <div class="flex justify-between items-center pb-8 text-sm xl:text-base flex-wrap">
        @foreach (\App\Models\RandomProduct::where('is_active', true)->orderBy('position')->take(30)->get() as $product)
          <a
            href="{{ route('products.show', $product->product->slug) }}"
            class="w-1/2 md:w-1/3 lg:w-1/6 text-center hover:shadow-xl px-1 sm:px-2 py-8">
            <img
              class="mb-4 rounded h-full w-full mx-auto"
              src="{{ asset($product->product->image) }}"
              alt="{{ $product->product->name }}">
            <span class="text-ceter text-gray-700 font-semibold mx-auto">{{ $product->product->name }}</span>
            <div class="text-left ml-2 text-gray-700 mt-6 font-semibold">
              <span class="change_price px-1 tracking-widest">{{ $product->product->price }}</span>
              تومان
            </div>
          </a>
        @endforeach
      </div>
    </section>  
  </div>    
@endsection