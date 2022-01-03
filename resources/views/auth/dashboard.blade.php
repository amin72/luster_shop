@extends('layouts.app')


@section('title')
  داشبورد
@endsection


@section('content')
<div class="max-w-7xl mx-auto px-8 py-12 shadow-xl bg-gray-50 min-h-full">
  
  @include('partials.messages')

  {{-- admin links --}}
  @if (Auth::user()->is_admin)
    <div class="border-b-2 my-4 mb-16">
      <h1 class="text-center text-3xl mt-6 mb-12 tracking-wide font-semibold">مدیریت</h1>
      <div class="flex flex-wrap mx-auto pb-4">
        {{-- add new post link --}}
        <a class="flex w-full md:w-1/2 lg:w-1/3 items-center text-lg lg:text-xl my-2 font-semibold" href="{{ route('blog.create') }}">
          <svg class="h-6 w-6 fill-current text-gray-600" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
            <path d="M16,10c0,0.553-0.048,1-0.601,1H11v4.399C11,15.951,10.553,16,10,16c-0.553,0-1-0.049-1-0.601V11H4.601
              C4.049,11,4,10.553,4,10c0-0.553,0.049-1,0.601-1H9V4.601C9,4.048,9.447,4,10,4c0.553,0,1,0.048,1,0.601V9h4.399
              C15.952,9,16,9.447,16,10z"/>
          </svg>
          <span class="mr-px">ایجاد پست جدید</span>
        </a>

        {{-- add new product link --}}
        <a class="flex w-full md:w-1/2 lg:w-1/3 items-center text-lg lg:text-xl my-2 font-semibold" href="{{ route('shop.create') }}">
          <svg class="h-6 w-6 fill-current text-gray-600" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
            <path d="M16,10c0,0.553-0.048,1-0.601,1H11v4.399C11,15.951,10.553,16,10,16c-0.553,0-1-0.049-1-0.601V11H4.601
              C4.049,11,4,10.553,4,10c0-0.553,0.049-1,0.601-1H9V4.601C9,4.048,9.447,4,10,4c0.553,0,1,0.048,1,0.601V9h4.399
              C15.952,9,16,9.447,16,10z"/>
          </svg>
          <span class="mr-px">ایجاد محصول جدید</span>
        </a>
        
        {{-- list all purchased products link --}}
        <a class="flex w-full md:w-1/2 lg:w-1/3 items-center text-lg lg:text-xl my-2 font-semibold" href="{{ route('shop.purchased_products') }}">
          <svg class="h-6 w-6 fill-current text-gray-600" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
            <path d="M1 4h2v2H1V4zm4 0h14v2H5V4zM1 9h2v2H1V9zm4 0h14v2H5V9zm-4 5h2v2H1v-2zm4 0h14v2H5v-2z"/>
          </svg>
          <span class="mr-1">مدیریت سفارشات</span>
        </a>

        {{-- edit comments link --}}
        <a class="flex w-full md:w-1/2 lg:w-1/3 items-center text-lg lg:text-xl my-2 font-semibold" href="{{ route('shop_comment.index') }}">
          <svg class="h-5 w-5 fill-current text-gray-600" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 20 20" style="enable-background:new 0 0 20 20;" xml:space="preserve">
            <path d="M5.8,12.2V6H2C0.9,6,0,6.9,0,8v6c0,1.1,0.9,2,2,2h1v3l3-3h5c1.1,0,2-0.9,2-2v-1.82c-0.064,0.014-0.132,0.021-0.2,0.021h-7
	            V12.2z M18,1H9C7.9,1,7,1.9,7,3v8h7l3,3v-3h1c1.1,0,2-0.899,2-2V3C20,1.9,19.1,1,18,1z"/>
          </svg>
          <span class="mr-1">مدیریت کامنت ها</span>
        </a>

        {{-- edit tags link --}}
        <a class="flex w-full md:w-1/2 lg:w-1/3 items-center text-lg lg:text-xl my-2 font-semibold" href="{{ route('tags.index') }}">
          <svg class="h-5 w-5 fill-current text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path d="M0 10V2l2-2h8l10 10-10 10L0 10zm4.5-4a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
          </svg>
          <span class="mr-1">مدیریت تگ ها</span>
        </a>

        {{-- edit contacts link --}}
        <a class="flex w-full md:w-1/2 lg:w-1/3 items-center text-lg lg:text-xl my-2 font-semibold" href="{{ route('contact.index') }}">
          <svg class="h-5 w-5 fill-current text-gray-600" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 20 20" style="enable-background:new 0 0 20 20;" xml:space="preserve">
            <path d="M5.8,12.2V6H2C0.9,6,0,6.9,0,8v6c0,1.1,0.9,2,2,2h1v3l3-3h5c1.1,0,2-0.9,2-2v-1.82c-0.064,0.014-0.132,0.021-0.2,0.021h-7
	            V12.2z M18,1H9C7.9,1,7,1.9,7,3v8h7l3,3v-3h1c1.1,0,2-0.899,2-2V3C20,1.9,19.1,1,18,1z"/>
          </svg>
          <span class="mr-1">مدیریت پیام ها</span>
        </a>

        {{-- edit pages link --}}
        <a class="flex w-full md:w-1/2 lg:w-1/3 items-center text-lg lg:text-xl my-2 font-semibold" href="{{ route('pages-admin.index') }}">
          <svg class="h-5 w-5 fill-current text-gray-600" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 20 20" style="enable-background:new 0 0 20 20;" xml:space="preserve">
            <path d="M11 12h6v-1l-3-1V2l3-1V0H3v1l3 1v8l-3 1v1h6v7l1 1 1-1v-7z"/>
          </svg>
          <span class="mr-1">مدیریت صفحات</span>
        </a>
        
        {{-- edit social media link --}}
        <a class="flex w-full md:w-1/2 lg:w-1/3 items-center text-lg lg:text-xl my-2 font-semibold" href="{{ route('social-media.index') }}">
          <svg class="h-5 w-5 fill-current text-gray-600" version="1.1" id="Chat" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 20 20" style="enable-background:new 0 0 20 20;" xml:space="preserve">
            <path d="M11 12h6v-1l-3-1V2l3-1V0H3v1l3 1v8l-3 1v1h6v7l1 1 1-1v-7z"/>
          </svg>
          <span class="mr-1">مدیریت شبکه های اجتماعی</span>
        </a>
      </div>
    </div>
  @endif


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
                  <button class="my-1 md:my-0 w-full md:w-1/3 py-3 md:py-4 bg-red-400 text-white rounded-xl mx-1 tracking-wide font-semibold toggle focus:outline-none">نمایش محصولات</button>
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
                        <a href="{{ route('shop.show', $product->product()->slug) }}">{{ $product->name }}</a>
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
          <button
            type="submit"
            class="block w-full md:w-auto rounded-lg px-6 py-3 bg-red-400 text-white focus:outline-none focus:ring-1 ring-gray-500">ارسال</button>
        </div>
      </form>
    </div>
  </div>


  {{-- change phone and password links --}}
  <div class="border-t-4 pt-12 pb-6">
    <h1 class="text-center text-3xl mt-6 mb-16 tracking-wide font-semibold">ویرایش شماره تماس و رمز عبور</h1>
    <div class="flex flex-col md:flex-row">
      <a href="{{ route('change_phone') }}" class="block text-center px-4 py-3 bg-red-400 text-white rounded-lg">ویرایش شماره تلفن</a>
      <a href="{{ route('change_password') }}" class="block text-center px-4 py-3 bg-red-400 text-white rounded-lg mt-3 md:mt-0 md:mr-4">تغییر رمز عبور</a>
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
          <button
            type="submit"
            class="block w-full md:w-auto rounded-lg px-6 py-3 bg-red-400 text-white focus:outline-none focus:ring-1 ring-gray-500">ارسال</button>
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