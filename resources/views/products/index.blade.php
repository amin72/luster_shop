@extends('layouts.base')


@section('content')
  <div class="max-w-10xl 2xl:max-w-9xl mx-auto bg-white mt-6 py-2">
    {{-- sub categories --}}
    @if ($sub_categories)
      <section class="mt-10 mx-auto px-8">
        <div class="flex flex-wrap items-center">
          <h2 class="ml-2 py-1 font-semibold">دسته بندی:</h2>
          <ul class="flex">
          <li class="px-2 py-1 cursor-pointer text-sm md:text-base font-semibold bg-green-300 rounded-lg text-green-700 tracking-wide">
            <a href="{{ route('products.index', ['category' => $category->slug]) }}">همه</a>
          </li>
          @foreach ($sub_categories as $sub_category)
            <li class="px-2 py-1 cursor-pointer text-sm md:text-base font-semibold tracking-wide text-gray-500 hover:text-gray-700">
              <a href="{{ route('products.index', ['category' => $category->slug, 'sub_category' => $sub_category->slug]) }}">{{ $sub_category->name }}</a>
            </li>
          @endforeach
        </div>
      </section>
    @endif


    {{-- list products --}}
    <section class="flex flex-wrap mx-auto"> 
      {{-- container --}}
      @foreach ($products as $product)
        <a
          href="{{ route('products.show', $product->slug) }}"
          class="w-full md:w-1/2 lg:w-1/3 xl:w-1/4 mt-10 mb-16 px-6 py-6 border border-gray-100 shadow-sm hover:shadow-xl transition-shadow delay-50">
          <img class="h-96 w-full" src="{{ asset($product->small_image) }}" alt="{{ $product->name }}">
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
    </section>

    {{ $products->links() }}
  </div>
@endsection