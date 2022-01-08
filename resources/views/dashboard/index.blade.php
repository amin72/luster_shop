@extends('layouts.app')


@section('title')
  داشبورد
@endsection


@section('content')
<div class="max-w-7xl mx-auto px-8 py-12 shadow-xl bg-gray-50 min-h-full">
  
  @include('partials.messages')

  {{-- shopping history --}}
  <div>
    <h1 class="text-center text-3xl mt-6 mb-16 tracking-wide font-semibold">تاریخچه خرید</h1>
    <div class="mt-8">
      @if ($carts->count() > 0)
        <div class="text-center text-gray-700">
          <div class="flex justify-between items-center border-b-2">
            <div class="hidden md:block md:w-1/3 text-xl font-semibold py-2 px-4 text-justify"></div>
            <div class="w-full md:w-1/3 md:text-xl font-semibold py-2 px-4 text-center">تاریخ</div>
            <div class="w-full md:w-1/3 md:text-xl font-semibold py-2 px-4 text-center">قیمت کل</div>
          </div>

          @foreach ($carts as $cart)
            @if ($cart->products->count() > 0)
              <div class="flex flex-col">
                <div class="flex flex-col md:flex-row justify-between items-center border-b-2 mt-2 pb-2">
                  <button class="my-1 md:my-0 w-full md:w-1/3 py-3 md:py-4 bg-gray-800 text-white rounded-xl mx-1 tracking-wide font-semibold toggle focus:outline-none">نمایش محصولات</button>
                  <div class="my-1 md:my-0 w-full md:w-1/3 py-3 md:py-4 bg-gray-300 rounded-xl mx-1 font-semibold tracking-wide">
                    {{ \Morilog\Jalali\CalendarUtils::strftime('Y/m/d', strtotime($cart->created_at->format('Y-m-d'))) }}
                  </div>
                  <div class="my-1 md:my-0 w-full md:w-1/3 py-3 md:py-4 bg-gray-300 rounded-xl mx-1 font-semibold">
                    <span class="tracking-widest change_price">{{ $cart->total_price }}</span>
                    <span>تومان</span>
                  </div>
                </div>
                <div class="hidden">
                  <ul class="border-4">
                    @foreach ($cart->products as $product)
                      <li class="hover:text-gray-500 border-b-2 py-5">
                        <a href="{{ route('products.show', $product->product()->slug) }}">{{ $product->name }}</a>
                        @if ($product->product()->download_file)
                          <a class="block text-red-400 mt-2" href="{{ route('shop.download', $product->product()->slug) }}">دانلود محصول</a>
                        @endif
                      </li>
                    @endforeach
                  </ul>
                </div>
              </div>
            @endif
          @endforeach
        </div>
      @else
        <p class="text-xl">تاریخچه خرید شما خالی است.</p>
        <a class="block text-red-400 text-lg my-2" href="{{ route('shop.index') }}">مشاهده محصولات</a>
      @endif
    </div>
  </div>


  {{-- author's info --}}
  <div class="border-t-2 pt-8 pb-6">
    <h1 class="text-center text-3xl mt-6 mb-16 tracking-wide font-semibold">ویرایش مشخصات</h1>

    <div class="md:max-w-2xl">
      <h2 class="text-lg">ویرایش عکس و بیوگرافی نویسنده</h2>

      <form action="{{ route('dashboard.update_info') }}" method="POST" class="flex flex-col" enctype="multipart/form-data">
        @csrf

        @php
          $user = Auth::user();
        @endphp

        {{-- name and phone --}}
        <div class="flex flex-col md:flex-row mt-10">
          {{-- name --}}
          <div class="md:w-1/2 md:pl-4">
            <input
              type="text"
              name="name"
              placeholder="نام"
              class="block w-full px-4 py-2 border border-gray-500 focus:outline-none focus:ring-1 ring-gray-500 rounded-lg"
              value="{{ $user->name }}">
          </div>

          {{-- email --}}
          <div class="mt-6 md:mt-0 md:w-1/2 md:pr-4">
            <input
              type="email"
              name="email"
              placeholder="ایمیل"
              class="block w-full px-4 py-2 border border-gray-500 focus:outline-none focus:ring-1 ring-gray-500 rounded-lg"
              value="{{ $user->email }}">
          </div>
        </div>
        
        {{-- image --}}
        <div class="mt-6">
          @if (Auth::user()->image_path)
            <img class="block mx-auto rounded-full h-40 w-40 my-8" src="{{ asset($user->image_path) }}">
          @endif

          <input
            type="file"
            name="image"
            placeholder="عکس"
            class="block w-full px-4 py-2 border border-gray-500 focus:outline-none focus:ring-1 ring-gray-500 rounded-lg"
            value="">
        </div>

        {{-- address --}}
        <div class="mt-6">
          <textarea
            name="info"
            placeholder="بیوگرافی"
            class="block h-52 md:h-40 w-full px-4 py-2 border border-gray-500 focus:outline-none focus:ring-1 ring-gray-500 rounded-lg"
            >{{ $user->info }}</textarea>
        </div>
        
        
        <div class="mt-6">
          <x-button
            type="submit"
            class="">ارسال</x-button>
        </div>
      </form>
    </div>
  </div>


  {{-- change phone and password links --}}
  <div class="border-t-4 pt-12 pb-6">
    <h1 class="text-center text-3xl mt-6 mb-16 tracking-wide font-semibold">ویرایش شماره تماس و رمز عبور</h1>
    <div class="flex flex-col md:flex-row">
      <a
        href="{{ route('change_phone') }}"
        class="block text-center px-2 py-3 text-white rounded-lg">
        <x-button>ویرایش شماره تلفن</x-button>
      </a>
      <a
        href="{{ route('change_password') }}"
        class="block text-center px-2 py-3 text-white rounded-lg mt-3 md:mt-0 md:mr-4">
        <x-button>تغییر رمز عبور</x-button>
      </a>
    </div>
  </div>
  

  {{-- edit address --}}
  <div class="border-t-4 py-12">
    <h1 class="text-center text-3xl mt-6 mb-16 tracking-wide font-semibold">ویرایش آدرس</h1>

    <div class="md:max-w-2xl">
      <p class="">آدرس خود را در این قسمت می توانید وارد کنید.</p>
      <p class="mt-3">این آدرس در هنگام خرید جهت ارسال کالا استفاده می شود.</p>

      <form action="{{ route('dashboard.update_address') }}" method="POST" class="flex flex-col">
        @csrf

        @php
          $address = Auth::user()->address;
        @endphp

        <div class="flex flex-col md:flex-row mt-10">
          {{-- province --}}
          <div class="md:w-1/2  md:pl-4">
            <input
              type="text"
              name="province"
              placeholder="استان"
              class="block w-full px-4 py-2 border border-gray-500 focus:outline-none focus:ring-1 ring-gray-500 rounded-lg"
              value="{{ $address->province }}">
          </div>

          {{-- city --}}
          <div class="mt-6 md:mt-0 md:w-1/2 md:pr-4">
            <input
              type="text"
              name="city"
              placeholder="شهر"
              class="block w-full px-4 py-2 border border-gray-500 focus:outline-none focus:ring-1 ring-gray-500 rounded-lg"
              value="{{ $address->city }}">
          </div>
        </div>
  
        {{-- address --}}
        <div class="mt-6">
          <textarea
            name="detail"
            placeholder="آدرس"
            class="block h-32 md:h-24 w-full px-4 py-2 border border-gray-500 focus:outline-none focus:ring-1 ring-gray-500 rounded-lg"
            >{{ $address->detail }}</textarea>
        </div>
        
        <div class="mt-6">
          <x-button
            type="submit"
            class="">ارسال</x-button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection


@section('bottom_scripts')
<script>
  $(document).ready(function() {
    $(".toggle").on("click", function() {
      var toggleItem = $(this).parent().next()
      toggleItem.toggleClass('hidden')
    })
  })
</script>
@endsection