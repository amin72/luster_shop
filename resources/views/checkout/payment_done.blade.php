@extends('layouts.app')


@section('title')
  موفقیت پرداخت
@endsection


@section('content')
<div class="max-w-7xl mx-auto rounded border shadow-xl my-48 px-8 py-20 bg-gray-50">
  {{-- <div class=""> --}}

  <p class="text-center text-lg">پرداخت با موفقیت انجام شد. تاریخچه خرید در بخش <a class="text-red-400" href="{{ route('dashboard.index') }}">پنل کاربری</a> قابل مشاهده است.</p>
  <h2 class="text-center text-lg my-6">محصولات خریداری شده</h2>
  <div class="text-center">
    <ul class="border-4">
      @foreach ($cart->products as $product)
        <li class="hover:text-gray-500 border-b-2 py-5">
          <a href="{{ route('products.show', $product->product()->slug) }}">{{ $product->name }}</a>
        </li>
      @endforeach
    </ul>
  </div>
</div>
@endsection