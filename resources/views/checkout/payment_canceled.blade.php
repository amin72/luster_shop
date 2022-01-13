@extends('layouts.app')

@section('title')
  لغو پرداخت
@endsection


@section('content')
<div class="max-w-7xl mx-auto px-8 py-6 rounded border shadow-xl my-32">
  عملیات پرداخت کنسل شد. <a class="text-red-400" href="{{ route('products.index') }}">بازگشت به صفحه خرید محصولات</a>
</div>
@endsection