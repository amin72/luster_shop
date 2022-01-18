@extends('layouts.app')


@section('title')
  {{ $title }}
@endsection


@section('content')
<div class="max-w-xl mx-auto md:my-8 lg:my-24 px-8 py-12 shadow-xl bg-gray-50">
  <h1 class="text-center text-3xl mb-12 tracking-wide font-semibold">{{ $header }}</h1>
  <p class="text-center text-2xl mb-12 tracking-wide font-semibold">{{ $message }}</p>
  <a class="block text-center text-2xl text-red-400" href="{{ route('pages.index') }}">بازگشت به خانه</a>
</div>
@endsection