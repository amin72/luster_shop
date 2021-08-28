@extends('layouts.base')


@section('contentx')
  {{-- banner section --}}
  <section class="mt-6">
    <div>
      <img class="rounded-2xl" src="{{ asset('img/0.png') }}" alt="">
    </div>
    <div class="mt-4 flex">
      <div class="ml-4 w-8/12 flex flex-1">
        <img class="rounded-2xl" src="{{ asset('img/2.png') }}" alt="">
      </div>
      <div class="w-4/12 flex flex-col">
        <img class="mb-4 rounded-2xl" src="{{ asset('img/1.png') }}" alt="">
        <img class="rounded-2xl" src="{{ asset('img/1.png') }}" alt="">
      </div>
    </div>
  </section>

  {{-- category section --}}
  <section class="mt-10 mb-20 flex justify-between">
    <div class="flex flex-col items-center">
      <img class="rounded-full h-32 w-32" src="{{ asset('img/3.jpg') }}" alt="">
      <span class="mt-6 tracking-wide font-semibold text-gray-800 text-sm">لوستر مدرن</span>
    </div>
    <div class="flex flex-col items-center">
      <img class="rounded-full h-32 w-32" src="{{ asset('img/3.jpg') }}" alt="">
      <span class="mt-6 tracking-wide font-semibold text-gray-800 text-sm">آباژور رومیزی</span>
    </div>
    <div class="flex flex-col items-center">
      <img class="rounded-full h-32 w-32" src="{{ asset('img/3.jpg') }}" alt="">
      <span class="mt-6 tracking-wide font-semibold text-gray-800 text-sm">مبلمان تختخواب‌شو</span>
    </div>
    <div class="flex flex-col items-center">
      <img class="rounded-full h-32 w-32" src="{{ asset('img/3.jpg') }}" alt="">
      <span class="mt-6 tracking-wide font-semibold text-gray-800 text-sm">مبل تک نفره</span>
    </div>
    <div class="flex flex-col items-center">
      <img class="rounded-full h-32 w-32" src="{{ asset('img/3.jpg') }}" alt="">
      <span class="mt-6 tracking-wide font-semibold text-gray-800 text-sm">میز</span>
    </div>
    <div class="flex flex-col items-center">
      <img class="rounded-full h-32 w-32" src="{{ asset('img/3.jpg') }}" alt="">
      <span class="mt-6 tracking-wide font-semibold text-gray-800 text-sm">چراغ آویز</span>
    </div>
    <div class="flex flex-col items-center">
      <img class="rounded-full h-32 w-32" src="{{ asset('img/3.jpg') }}" alt="">
      <span class="mt-6 tracking-wide font-semibold text-gray-800 text-sm">ساعت دیواری</span>
    </div>
    <div class="flex flex-col items-center">
      <img class="rounded-full h-32 w-32" src="{{ asset('img/3.jpg') }}" alt="">
      <span class="mt-6 tracking-wide font-semibold text-gray-800 text-sm">لوستر چوبی</span>
    </div>
  </section>

  {{-- favorite products --}}
  <section class="rounded-lg bg-white shadow w-full py-4 px-6">
    {{-- header --}}
    <div class="flex justify-between font-bold text-lg border-b mb-4">
      <span class="py-4 border-b border-red-500 -my-px text-gray-800 font-semibold tracking-wide">محبوب ترین محصولات</span>
      <a href="#" class="py-4 text-gray-500 hover:text-green-800">مشاهده همه</a>
    </div>

    {{-- products section --}}
    <div class="flex justify-between items-center pt-2 pb-8">
      <div class="w-56 text-center hover:shadow-xl px-4 py-4">
        <img class="mb-4 rounded h-full w-full mx-auto" src="{{ asset('img/3.jpg') }}" alt="">
        <span class="text-ceter text-gray-500 mx-auto">لوستر ۷ شعله چشمه نور کد H2084 - ۲۸۰ گرم</span>
        <div class="text-left text-gray-500 mt-6">1,250,000</div>
      </div>
      <div class="w-56 text-center hover:shadow-xl px-4 py-4">
        <img class="mb-4 rounded h-full w-full mx-auto" src="{{ asset('img/3.jpg') }}" alt="">
        <span class="text-ceter text-gray-500 mx-auto">لوستر ۷ شعله چشمه نور کد H2084 - ۲۸۰ گرم</span>
        <div class="text-left text-gray-500 mt-6">1,250,000</div>
      </div>
      <div class="w-56 text-center hover:shadow-xl px-4 py-4">
        <img class="mb-4 rounded h-full w-full mx-auto" src="{{ asset('img/3.jpg') }}" alt="">
        <span class="text-ceter text-gray-500 mx-auto">لوستر ۷ شعله چشمه نور کد H2084 - ۲۸۰ گرم</span>
        <div class="text-left text-gray-500 mt-6">1,250,000</div>
      </div>
      <div class="w-56 text-center hover:shadow-xl px-4 py-4">
        <img class="mb-4 rounded h-full w-full mx-auto" src="{{ asset('img/3.jpg') }}" alt="">
        <span class="text-ceter text-gray-500 mx-auto">لوستر ۷ شعله چشمه نور کد H2084 - ۲۸۰ گرم</span>
        <div class="text-left text-gray-500 mt-6">1,250,000</div>
      </div>
      <div class="w-56 text-center hover:shadow-xl px-4 py-4">
        <img class="mb-4 rounded h-full w-full mx-auto" src="{{ asset('img/3.jpg') }}" alt="">
        <span class="text-ceter text-gray-500 mx-auto">لوستر ۷ شعله چشمه نور کد H2084 - ۲۸۰ گرم</span>
        <div class="text-left text-gray-500 mt-6">1,250,000</div>
      </div>
    </div>
  </section>

  {{-- banner section --}}
  <section class="flex justify-between my-6">
    <div class="ml-4">
      <img class="rounded-xl w-full" src="{{ asset('img/4.jpg') }}" alt="">
    </div>
    <div>
      <img class="rounded-xl w-full" src="{{ asset('img/4.jpg') }}" alt="">
    </div>
  </section>

  {{-- favorite products --}}
  <section class="rounded-lg bg-white shadow w-full py-4 px-6">
    {{-- header --}}
    <div class="flex justify-between font-bold text-lg border-b mb-4">
      <span class="py-4 border-b border-red-500 -my-px text-gray-800 font-semibold tracking-wide">لوستر برنزی طرح فرشته</span>
      <a href="#" class="py-4 text-gray-500 hover:text-green-800">مشاهده همه</a>
    </div>

    {{-- products section --}}
    <div class="flex justify-between items-center pt-2 pb-8">
      <div class="w-56 text-center hover:shadow-xl px-4 py-4">
        <img class="mb-4 rounded h-full w-full mx-auto" src="{{ asset('img/3.jpg') }}" alt="">
        <span class="text-ceter text-gray-500 mx-auto">لوستر ۷ شعله چشمه نور کد H2084 - ۲۸۰ گرم</span>
        <div class="text-left text-gray-500 mt-6">1,250,000</div>
      </div>
      <div class="w-56 text-center hover:shadow-xl px-4 py-4">
        <img class="mb-4 rounded h-full w-full mx-auto" src="{{ asset('img/3.jpg') }}" alt="">
        <span class="text-ceter text-gray-500 mx-auto">لوستر ۷ شعله چشمه نور کد H2084 - ۲۸۰ گرم</span>
        <div class="text-left text-gray-500 mt-6">1,250,000</div>
      </div>
      <div class="w-56 text-center hover:shadow-xl px-4 py-4">
        <img class="mb-4 rounded h-full w-full mx-auto" src="{{ asset('img/3.jpg') }}" alt="">
        <span class="text-ceter text-gray-500 mx-auto">لوستر ۷ شعله چشمه نور کد H2084 - ۲۸۰ گرم</span>
        <div class="text-left text-gray-500 mt-6">1,250,000</div>
      </div>
      <div class="w-56 text-center hover:shadow-xl px-4 py-4">
        <img class="mb-4 rounded h-full w-full mx-auto" src="{{ asset('img/3.jpg') }}" alt="">
        <span class="text-ceter text-gray-500 mx-auto">لوستر ۷ شعله چشمه نور کد H2084 - ۲۸۰ گرم</span>
        <div class="text-left text-gray-500 mt-6">1,250,000</div>
      </div>
      <div class="w-56 text-center hover:shadow-xl px-4 py-4">
        <img class="mb-4 rounded h-full w-full mx-auto" src="{{ asset('img/3.jpg') }}" alt="">
        <span class="text-ceter text-gray-500 mx-auto">لوستر ۷ شعله چشمه نور کد H2084 - ۲۸۰ گرم</span>
        <div class="text-left text-gray-500 mt-6">1,250,000</div>
      </div>
    </div>
  </section>

  {{-- banner section --}}
  <section class="flex justify-between my-6">
    <div class="ml-4">
      <img class="rounded-xl w-full" src="{{ asset('img/4.jpg') }}" alt="">
    </div>
    <div>
      <img class="rounded-xl w-full" src="{{ asset('img/4.jpg') }}" alt="">
    </div>
  </section>
  
  {{-- favorite products --}}
  <section class="rounded-lg bg-white shadow w-full py-4 px-6">
    {{-- header --}}
    <div class="flex justify-between font-bold text-lg border-b mb-4">
      <span class="py-4 border-b border-red-500 -my-px text-gray-800 font-semibold tracking-wide">آباژور ایستاده و کنارسالنی</span>
      <a href="#" class="py-4 text-gray-500 hover:text-green-800">مشاهده همه</a>
    </div>

    {{-- products section --}}
    <div class="flex justify-between items-center pt-2 pb-8">
      <div class="w-56 text-center hover:shadow-xl px-4 py-4">
        <img class="mb-4 rounded h-full w-full mx-auto" src="{{ asset('img/3.jpg') }}" alt="">
        <span class="text-ceter text-gray-500 mx-auto">لوستر ۷ شعله چشمه نور کد H2084 - ۲۸۰ گرم</span>
        <div class="text-left text-gray-500 mt-6">1,250,000</div>
      </div>
      <div class="w-56 text-center hover:shadow-xl px-4 py-4">
        <img class="mb-4 rounded h-full w-full mx-auto" src="{{ asset('img/3.jpg') }}" alt="">
        <span class="text-ceter text-gray-500 mx-auto">لوستر ۷ شعله چشمه نور کد H2084 - ۲۸۰ گرم</span>
        <div class="text-left text-gray-500 mt-6">1,250,000</div>
      </div>
      <div class="w-56 text-center hover:shadow-xl px-4 py-4">
        <img class="mb-4 rounded h-full w-full mx-auto" src="{{ asset('img/3.jpg') }}" alt="">
        <span class="text-ceter text-gray-500 mx-auto">لوستر ۷ شعله چشمه نور کد H2084 - ۲۸۰ گرم</span>
        <div class="text-left text-gray-500 mt-6">1,250,000</div>
      </div>
      <div class="w-56 text-center hover:shadow-xl px-4 py-4">
        <img class="mb-4 rounded h-full w-full mx-auto" src="{{ asset('img/3.jpg') }}" alt="">
        <span class="text-ceter text-gray-500 mx-auto">لوستر ۷ شعله چشمه نور کد H2084 - ۲۸۰ گرم</span>
        <div class="text-left text-gray-500 mt-6">1,250,000</div>
      </div>
      <div class="w-56 text-center hover:shadow-xl px-4 py-4">
        <img class="mb-4 rounded h-full w-full mx-auto" src="{{ asset('img/3.jpg') }}" alt="">
        <span class="text-ceter text-gray-500 mx-auto">لوستر ۷ شعله چشمه نور کد H2084 - ۲۸۰ گرم</span>
        <div class="text-left text-gray-500 mt-6">1,250,000</div>
      </div>
    </div>
  </section>

  {{-- category section --}}
  <section class="mt-10 mb-20 flex justify-between">
    <div class="flex flex-col items-center">
      <img class="rounded-full h-32 w-32" src="{{ asset('img/3.jpg') }}" alt="">
      <span class="mt-6 tracking-wide font-semibold text-gray-800 text-sm">لوستر مدرن</span>
    </div>
    <div class="flex flex-col items-center">
      <img class="rounded-full h-32 w-32" src="{{ asset('img/3.jpg') }}" alt="">
      <span class="mt-6 tracking-wide font-semibold text-gray-800 text-sm">آباژور رومیزی</span>
    </div>
    <div class="flex flex-col items-center">
      <img class="rounded-full h-32 w-32" src="{{ asset('img/3.jpg') }}" alt="">
      <span class="mt-6 tracking-wide font-semibold text-gray-800 text-sm">مبلمان تختخواب‌شو</span>
    </div>
    <div class="flex flex-col items-center">
      <img class="rounded-full h-32 w-32" src="{{ asset('img/3.jpg') }}" alt="">
      <span class="mt-6 tracking-wide font-semibold text-gray-800 text-sm">مبل تک نفره</span>
    </div>
    <div class="flex flex-col items-center">
      <img class="rounded-full h-32 w-32" src="{{ asset('img/3.jpg') }}" alt="">
      <span class="mt-6 tracking-wide font-semibold text-gray-800 text-sm">میز</span>
    </div>
    <div class="flex flex-col items-center">
      <img class="rounded-full h-32 w-32" src="{{ asset('img/3.jpg') }}" alt="">
      <span class="mt-6 tracking-wide font-semibold text-gray-800 text-sm">چراغ آویز</span>
    </div>
    <div class="flex flex-col items-center">
      <img class="rounded-full h-32 w-32" src="{{ asset('img/3.jpg') }}" alt="">
      <span class="mt-6 tracking-wide font-semibold text-gray-800 text-sm">ساعت دیواری</span>
    </div>
    <div class="flex flex-col items-center">
      <img class="rounded-full h-32 w-32" src="{{ asset('img/3.jpg') }}" alt="">
      <span class="mt-6 tracking-wide font-semibold text-gray-800 text-sm">لوستر چوبی</span>
    </div>
  </section>

  {{-- favorite products --}}
  <section class="rounded-lg bg-white shadow w-full py-4 px-6">
    {{-- header --}}
    <div class="flex justify-between font-bold text-lg border-b mb-4">
      <span class="py-4 border-b border-red-500 -my-px text-gray-800 font-semibold tracking-wide">ساعت دیواری</span>
      <a href="#" class="py-4 text-gray-500 hover:text-green-800">مشاهده همه</a>
    </div>

    {{-- products section --}}
    <div class="flex justify-between items-center pt-2 pb-8">
      <div class="w-56 text-center hover:shadow-xl px-4 py-4">
        <img class="mb-4 rounded h-full w-full mx-auto" src="{{ asset('img/3.jpg') }}" alt="">
        <span class="text-ceter text-gray-500 mx-auto">لوستر ۷ شعله چشمه نور کد H2084 - ۲۸۰ گرم</span>
        <div class="text-left text-gray-500 mt-6">1,250,000</div>
      </div>
      <div class="w-56 text-center hover:shadow-xl px-4 py-4">
        <img class="mb-4 rounded h-full w-full mx-auto" src="{{ asset('img/3.jpg') }}" alt="">
        <span class="text-ceter text-gray-500 mx-auto">لوستر ۷ شعله چشمه نور کد H2084 - ۲۸۰ گرم</span>
        <div class="text-left text-gray-500 mt-6">1,250,000</div>
      </div>
      <div class="w-56 text-center hover:shadow-xl px-4 py-4">
        <img class="mb-4 rounded h-full w-full mx-auto" src="{{ asset('img/3.jpg') }}" alt="">
        <span class="text-ceter text-gray-500 mx-auto">لوستر ۷ شعله چشمه نور کد H2084 - ۲۸۰ گرم</span>
        <div class="text-left text-gray-500 mt-6">1,250,000</div>
      </div>
      <div class="w-56 text-center hover:shadow-xl px-4 py-4">
        <img class="mb-4 rounded h-full w-full mx-auto" src="{{ asset('img/3.jpg') }}" alt="">
        <span class="text-ceter text-gray-500 mx-auto">لوستر ۷ شعله چشمه نور کد H2084 - ۲۸۰ گرم</span>
        <div class="text-left text-gray-500 mt-6">1,250,000</div>
      </div>
      <div class="w-56 text-center hover:shadow-xl px-4 py-4">
        <img class="mb-4 rounded h-full w-full mx-auto" src="{{ asset('img/3.jpg') }}" alt="">
        <span class="text-ceter text-gray-500 mx-auto">لوستر ۷ شعله چشمه نور کد H2084 - ۲۸۰ گرم</span>
        <div class="text-left text-gray-500 mt-6">1,250,000</div>
      </div>
    </div>
  </section>

  {{-- cards --}}
  <section class="w-full mt-6">
    <div class="flex">
      <div class="w-1/4 ml-2">
        <img class="mb-4 rounded-xl h-full w-full mx-auto" src="{{ asset('img/5.jpg') }}" alt="">
      </div>
      <div class="w-1/4 ml-2 mr-2">
        <img class="mb-4 rounded-xl h-full w-full mx-auto" src="{{ asset('img/5.jpg') }}" alt="">
      </div>
      <div class="w-1/4 ml-2 mr-2">
        <img class="mb-4 rounded-xl h-full w-full mx-auto" src="{{ asset('img/5.jpg') }}" alt="">
      </div>
      <div class="w-1/4 mr-2">
        <img class="mb-4 rounded-xl h-full w-full mx-auto" src="{{ asset('img/5.jpg') }}" alt="">
      </div>
    </div>
  </section>

  <section class="rounded-lg bg-white shadow w-full py-4 px-6 mt-6">
    {{-- header --}}
    <div class="flex justify-between font-bold text-lg border-b mb-4">
      <span class="py-4 border-b border-red-500 -my-px text-gray-800 font-semibold tracking-wide">آباژور ایستاده و کنارسالنی</span>
      <a href="#" class="py-4 text-gray-500 hover:text-green-800">مشاهده همه</a>
    </div>

    {{-- products section --}}
    <div class="flex justify-between items-center pt-2 pb-8">
      <div class="w-56 text-center hover:shadow-xl px-4 py-4">
        <img class="mb-4 rounded h-full w-full mx-auto" src="{{ asset('img/3.jpg') }}" alt="">
        <span class="text-ceter text-gray-500 mx-auto">لوستر ۷ شعله چشمه نور کد H2084 - ۲۸۰ گرم</span>
        <div class="text-left text-gray-500 mt-6">1,250,000</div>
      </div>
      <div class="w-56 text-center hover:shadow-xl px-4 py-4">
        <img class="mb-4 rounded h-full w-full mx-auto" src="{{ asset('img/3.jpg') }}" alt="">
        <span class="text-ceter text-gray-500 mx-auto">لوستر ۷ شعله چشمه نور کد H2084 - ۲۸۰ گرم</span>
        <div class="text-left text-gray-500 mt-6">1,250,000</div>
      </div>
      <div class="w-56 text-center hover:shadow-xl px-4 py-4">
        <img class="mb-4 rounded h-full w-full mx-auto" src="{{ asset('img/3.jpg') }}" alt="">
        <span class="text-ceter text-gray-500 mx-auto">لوستر ۷ شعله چشمه نور کد H2084 - ۲۸۰ گرم</span>
        <div class="text-left text-gray-500 mt-6">1,250,000</div>
      </div>
      <div class="w-56 text-center hover:shadow-xl px-4 py-4">
        <img class="mb-4 rounded h-full w-full mx-auto" src="{{ asset('img/3.jpg') }}" alt="">
        <span class="text-ceter text-gray-500 mx-auto">لوستر ۷ شعله چشمه نور کد H2084 - ۲۸۰ گرم</span>
        <div class="text-left text-gray-500 mt-6">1,250,000</div>
      </div>
      <div class="w-56 text-center hover:shadow-xl px-4 py-4">
        <img class="mb-4 rounded h-full w-full mx-auto" src="{{ asset('img/3.jpg') }}" alt="">
        <span class="text-ceter text-gray-500 mx-auto">لوستر ۷ شعله چشمه نور کد H2084 - ۲۸۰ گرم</span>
        <div class="text-left text-gray-500 mt-6">1,250,000</div>
      </div>
    </div>
  </section>

  {{-- cards --}}
  <section class="w-full mt-6">
    <div class="flex">
      <div class="w-1/4 ml-2">
        <img class="mb-4 rounded-xl h-full w-full mx-auto" src="{{ asset('img/5.jpg') }}" alt="">
      </div>
      <div class="w-1/4 ml-2 mr-2">
        <img class="mb-4 rounded-xl h-full w-full mx-auto" src="{{ asset('img/5.jpg') }}" alt="">
      </div>
      <div class="w-1/4 ml-2 mr-2">
        <img class="mb-4 rounded-xl h-full w-full mx-auto" src="{{ asset('img/5.jpg') }}" alt="">
      </div>
      <div class="w-1/4 mr-2">
        <img class="mb-4 rounded-xl h-full w-full mx-auto" src="{{ asset('img/5.jpg') }}" alt="">
      </div>
    </div>
  </section>

  <section class="rounded-lg bg-white shadow w-full py-4 px-6 mt-6">
    {{-- header --}}
    <div class="flex justify-between font-bold text-lg border-b mb-4">
      <span class="py-4 border-b border-red-500 -my-px text-gray-800 font-semibold tracking-wide">محبوب‌ترین لوسترهای چوبی</span>
      <a href="#" class="py-4 text-gray-500 hover:text-green-800">مشاهده همه</a>
    </div>

    {{-- products section --}}
    <div class="flex justify-between items-center pt-2 pb-8">
      <div class="w-56 text-center hover:shadow-xl px-4 py-4">
        <img class="mb-4 rounded h-full w-full mx-auto" src="{{ asset('img/3.jpg') }}" alt="">
        <span class="text-ceter text-gray-500 mx-auto">لوستر ۷ شعله چشمه نور کد H2084 - ۲۸۰ گرم</span>
        <div class="text-left text-gray-500 mt-6">1,250,000</div>
      </div>
      <div class="w-56 text-center hover:shadow-xl px-4 py-4">
        <img class="mb-4 rounded h-full w-full mx-auto" src="{{ asset('img/3.jpg') }}" alt="">
        <span class="text-ceter text-gray-500 mx-auto">لوستر ۷ شعله چشمه نور کد H2084 - ۲۸۰ گرم</span>
        <div class="text-left text-gray-500 mt-6">1,250,000</div>
      </div>
      <div class="w-56 text-center hover:shadow-xl px-4 py-4">
        <img class="mb-4 rounded h-full w-full mx-auto" src="{{ asset('img/3.jpg') }}" alt="">
        <span class="text-ceter text-gray-500 mx-auto">لوستر ۷ شعله چشمه نور کد H2084 - ۲۸۰ گرم</span>
        <div class="text-left text-gray-500 mt-6">1,250,000</div>
      </div>
      <div class="w-56 text-center hover:shadow-xl px-4 py-4">
        <img class="mb-4 rounded h-full w-full mx-auto" src="{{ asset('img/3.jpg') }}" alt="">
        <span class="text-ceter text-gray-500 mx-auto">لوستر ۷ شعله چشمه نور کد H2084 - ۲۸۰ گرم</span>
        <div class="text-left text-gray-500 mt-6">1,250,000</div>
      </div>
      <div class="w-56 text-center hover:shadow-xl px-4 py-4">
        <img class="mb-4 rounded h-full w-full mx-auto" src="{{ asset('img/3.jpg') }}" alt="">
        <span class="text-ceter text-gray-500 mx-auto">لوستر ۷ شعله چشمه نور کد H2084 - ۲۸۰ گرم</span>
        <div class="text-left text-gray-500 mt-6">1,250,000</div>
      </div>
    </div>
  </section>

  {{-- cards --}}
  <section class="w-full mt-6">
    <div class="flex">
      <div class="w-1/4 ml-2">
        <img class="mb-4 rounded-xl h-full w-full mx-auto" src="{{ asset('img/5.jpg') }}" alt="">
      </div>
      <div class="w-1/4 ml-2 mr-2">
        <img class="mb-4 rounded-xl h-full w-full mx-auto" src="{{ asset('img/5.jpg') }}" alt="">
      </div>
      <div class="w-1/4 ml-2 mr-2">
        <img class="mb-4 rounded-xl h-full w-full mx-auto" src="{{ asset('img/5.jpg') }}" alt="">
      </div>
      <div class="w-1/4 mr-2">
        <img class="mb-4 rounded-xl h-full w-full mx-auto" src="{{ asset('img/5.jpg') }}" alt="">
      </div>
    </div>
  </section>

  <section class="rounded-lg bg-white shadow w-full py-4 px-6 mt-6">
    {{-- header --}}
    <div class="flex justify-between font-bold text-lg border-b mb-4">
      <span class="py-4 border-b border-red-500 -my-px text-gray-800 font-semibold tracking-wide">مبلمان پر تخفیف</span>
      <a href="#" class="py-4 text-gray-500 hover:text-green-800">مشاهده همه</a>
    </div>

    {{-- products section --}}
    <div class="flex justify-between items-center pt-2 pb-8">
      <div class="w-56 text-center hover:shadow-xl px-4 py-4">
        <img class="mb-4 rounded h-full w-full mx-auto" src="{{ asset('img/3.jpg') }}" alt="">
        <span class="text-ceter text-gray-500 mx-auto">لوستر ۷ شعله چشمه نور کد H2084 - ۲۸۰ گرم</span>
        <div class="text-left text-gray-500 mt-6">1,250,000</div>
      </div>
      <div class="w-56 text-center hover:shadow-xl px-4 py-4">
        <img class="mb-4 rounded h-full w-full mx-auto" src="{{ asset('img/3.jpg') }}" alt="">
        <span class="text-ceter text-gray-500 mx-auto">لوستر ۷ شعله چشمه نور کد H2084 - ۲۸۰ گرم</span>
        <div class="text-left text-gray-500 mt-6">1,250,000</div>
      </div>
      <div class="w-56 text-center hover:shadow-xl px-4 py-4">
        <img class="mb-4 rounded h-full w-full mx-auto" src="{{ asset('img/3.jpg') }}" alt="">
        <span class="text-ceter text-gray-500 mx-auto">لوستر ۷ شعله چشمه نور کد H2084 - ۲۸۰ گرم</span>
        <div class="text-left text-gray-500 mt-6">1,250,000</div>
      </div>
      <div class="w-56 text-center hover:shadow-xl px-4 py-4">
        <img class="mb-4 rounded h-full w-full mx-auto" src="{{ asset('img/3.jpg') }}" alt="">
        <span class="text-ceter text-gray-500 mx-auto">لوستر ۷ شعله چشمه نور کد H2084 - ۲۸۰ گرم</span>
        <div class="text-left text-gray-500 mt-6">1,250,000</div>
      </div>
      <div class="w-56 text-center hover:shadow-xl px-4 py-4">
        <img class="mb-4 rounded h-full w-full mx-auto" src="{{ asset('img/3.jpg') }}" alt="">
        <span class="text-ceter text-gray-500 mx-auto">لوستر ۷ شعله چشمه نور کد H2084 - ۲۸۰ گرم</span>
        <div class="text-left text-gray-500 mt-6">1,250,000</div>
      </div>
    </div>
  </section>

  <section class="w-full mt-6">
    <div class="">
      <img class="mb-4 rounded-xl h-full w-full mx-auto" src="{{ asset('img/6.jpg') }}" alt="">
    </div>
  </section>
@endsection