@extends('layouts.app')


@section('content')
  <div class="max-w-7xl mx-auto">
    {{-- category section --}}
    <section class="mt-10 flex justify-between flex-wrap">
      <div class="w-1/2 md:w-1/4 xl:w-auto my-4 flex flex-col items-center">
        <img class="rounded-full h-32 w-32" src="{{ asset('img/3.jpg') }}" alt="">
        <span class="mt-6 tracking-wide font-semibold text-gray-800 text-sm">لوستر مدرن</span>
      </div>
      <div class="w-1/2 md:w-1/4 xl:w-auto my-4 flex flex-col items-center">
        <img class="rounded-full h-32 w-32" src="{{ asset('img/3.jpg') }}" alt="">
        <span class="mt-6 tracking-wide font-semibold text-gray-800 text-sm">آباژور رومیزی</span>
      </div>
      <div class="w-1/2 md:w-1/4 xl:w-auto my-4 flex flex-col items-center">
        <img class="rounded-full h-32 w-32" src="{{ asset('img/3.jpg') }}" alt="">
        <span class="mt-6 tracking-wide font-semibold text-gray-800 text-sm">مبلمان تختخواب‌شو</span>
      </div>
      <div class="w-1/2 md:w-1/4 xl:w-auto my-4 flex flex-col items-center">
        <img class="rounded-full h-32 w-32" src="{{ asset('img/3.jpg') }}" alt="">
        <span class="mt-6 tracking-wide font-semibold text-gray-800 text-sm">مبل تک نفره</span>
      </div>
      <div class="w-1/2 md:w-1/4 xl:w-auto my-4 flex flex-col items-center">
        <img class="rounded-full h-32 w-32" src="{{ asset('img/3.jpg') }}" alt="">
        <span class="mt-6 tracking-wide font-semibold text-gray-800 text-sm">میز</span>
      </div>
      <div class="w-1/2 md:w-1/4 xl:w-auto my-4 flex flex-col items-center">
        <img class="rounded-full h-32 w-32" src="{{ asset('img/3.jpg') }}" alt="">
        <span class="mt-6 tracking-wide font-semibold text-gray-800 text-sm">چراغ آویز</span>
      </div>
      <div class="w-1/2 md:w-1/4 xl:w-auto my-4 flex flex-col items-center">
        <img class="rounded-full h-32 w-32" src="{{ asset('img/3.jpg') }}" alt="">
        <span class="mt-6 tracking-wide font-semibold text-gray-800 text-sm">ساعت دیواری</span>
      </div>
      <div class="w-1/2 md:w-1/4 xl:w-auto my-4 flex flex-col items-center">
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
      <div class="flex justify-between items-center pt-2 pb-8 text-sm xl:text-base flex-wrap">
        <div class="w-1/2 md:w-1/3 lg:w-1/6 text-center hover:shadow-xl px-1 sm:px-2 py-4">
          <img class="mb-4 rounded h-full w-full mx-auto" src="{{ asset('img/3.jpg') }}" alt="">
          <span class="text-ceter text-gray-500 mx-auto">لوستر ۷ شعله چشمه نور کد H2084 - ۲۸۰ گرم</span>
          <div class="text-left ml-2 text-gray-500 mt-6">1,250,000 تومان</div>
        </div>
        <div class="w-1/2 md:w-1/3 lg:w-1/6 text-center hover:shadow-xl px-1 sm:px-2 py-4">
          <img class="mb-4 rounded h-full w-full mx-auto" src="{{ asset('img/3.jpg') }}" alt="">
          <span class="text-ceter text-gray-500 mx-auto">لوستر ۷ شعله چشمه نور کد H2084 - ۲۸۰ گرم</span>
          <div class="text-left ml-2 text-gray-500 mt-6">1,250,000 تومان</div>
        </div>
        <div class="w-1/2 md:w-1/3 lg:w-1/6 text-center hover:shadow-xl px-1 sm:px-2 py-4">
          <img class="mb-4 rounded h-full w-full mx-auto" src="{{ asset('img/3.jpg') }}" alt="">
          <span class="text-ceter text-gray-500 mx-auto">لوستر ۷ شعله چشمه نور کد H2084 - ۲۸۰ گرم</span>
          <div class="text-left ml-2 text-gray-500 mt-6">1,250,000 تومان</div>
        </div>
        <div class="w-1/2 md:w-1/3 lg:w-1/6 text-center hover:shadow-xl px-1 sm:px-2 py-4">
          <img class="mb-4 rounded h-full w-full mx-auto" src="{{ asset('img/3.jpg') }}" alt="">
          <span class="text-ceter text-gray-500 mx-auto">لوستر ۷ شعله چشمه نور کد H2084 - ۲۸۰ گرم</span>
          <div class="text-left ml-2 text-gray-500 mt-6">1,250,000 تومان</div>
        </div>
        <div class="w-1/2 md:w-1/3 lg:w-1/6 text-center hover:shadow-xl px-1 sm:px-2 py-4">
          <img class="mb-4 rounded h-full w-full mx-auto" src="{{ asset('img/3.jpg') }}" alt="">
          <span class="text-ceter text-gray-500 mx-auto">لوستر ۷ شعله چشمه نور کد H2084 - ۲۸۰ گرم</span>
          <div class="text-left ml-2 text-gray-500 mt-6">1,250,000 تومان</div>
        </div>
        <div class="w-1/2 md:w-1/3 lg:w-1/6 text-center hover:shadow-xl px-1 sm:px-2 py-4">
          <img class="mb-4 rounded h-full w-full mx-auto" src="{{ asset('img/3.jpg') }}" alt="">
          <span class="text-ceter text-gray-500 mx-auto">لوستر ۷ شعله چشمه نور کد H2084 - ۲۸۰ گرم</span>
          <div class="text-left ml-2 text-gray-500 mt-6">1,250,000 تومان</div>
        </div>
      </div>
    </section>
  
  
    {{-- banner section --}}
    <section class="flex justify-between my-6">
      <div class="flex flex-col md:flex-row">
        <img class="block rounded-xl w-full md:w-1/2 md:pl-1" src="{{ asset('img/4.jpg') }}" alt="">
        <img class="block rounded-xl w-full md:w-1/2 md:pr-1 mt-4 md:mt-0" src="{{ asset('img/4.jpg') }}" alt="">
      </div>
    </section>
  
  
    {{-- luster products --}}
    <section class="rounded-lg bg-white shadow w-full py-4 px-6">
      {{-- header --}}
      <div class="flex justify-between font-bold text-lg border-b mb-4">
        <span class="py-4 border-b border-red-500 -my-px text-gray-800 font-semibold tracking-wide">لوستر برنزی طرح فرشته
        </span>
        <a href="#" class="py-4 text-gray-500 hover:text-green-800">مشاهده همه</a>
      </div>
  
      {{-- products section --}}
      <div class="flex justify-between items-center pt-2 pb-8 text-sm xl:text-base flex-wrap">
        <div class="w-1/2 md:w-1/3 lg:w-1/6 text-center hover:shadow-xl px-1 sm:px-2 py-4">
          <img class="mb-4 rounded h-full w-full mx-auto" src="{{ asset('img/3.jpg') }}" alt="">
          <span class="text-ceter text-gray-500 mx-auto">لوستر ۷ شعله چشمه نور کد H2084 - ۲۸۰ گرم</span>
          <div class="text-left ml-2 text-gray-500 mt-6">1,250,000 تومان</div>
        </div>
        <div class="w-1/2 md:w-1/3 lg:w-1/6 text-center hover:shadow-xl px-1 sm:px-2 py-4">
          <img class="mb-4 rounded h-full w-full mx-auto" src="{{ asset('img/3.jpg') }}" alt="">
          <span class="text-ceter text-gray-500 mx-auto">لوستر ۷ شعله چشمه نور کد H2084 - ۲۸۰ گرم</span>
          <div class="text-left ml-2 text-gray-500 mt-6">1,250,000 تومان</div>
        </div>
        <div class="w-1/2 md:w-1/3 lg:w-1/6 text-center hover:shadow-xl px-1 sm:px-2 py-4">
          <img class="mb-4 rounded h-full w-full mx-auto" src="{{ asset('img/3.jpg') }}" alt="">
          <span class="text-ceter text-gray-500 mx-auto">لوستر ۷ شعله چشمه نور کد H2084 - ۲۸۰ گرم</span>
          <div class="text-left ml-2 text-gray-500 mt-6">1,250,000 تومان</div>
        </div>
        <div class="w-1/2 md:w-1/3 lg:w-1/6 text-center hover:shadow-xl px-1 sm:px-2 py-4">
          <img class="mb-4 rounded h-full w-full mx-auto" src="{{ asset('img/3.jpg') }}" alt="">
          <span class="text-ceter text-gray-500 mx-auto">لوستر ۷ شعله چشمه نور کد H2084 - ۲۸۰ گرم</span>
          <div class="text-left ml-2 text-gray-500 mt-6">1,250,000 تومان</div>
        </div>
        <div class="w-1/2 md:w-1/3 lg:w-1/6 text-center hover:shadow-xl px-1 sm:px-2 py-4">
          <img class="mb-4 rounded h-full w-full mx-auto" src="{{ asset('img/3.jpg') }}" alt="">
          <span class="text-ceter text-gray-500 mx-auto">لوستر ۷ شعله چشمه نور کد H2084 - ۲۸۰ گرم</span>
          <div class="text-left ml-2 text-gray-500 mt-6">1,250,000 تومان</div>
        </div>
        <div class="w-1/2 md:w-1/3 lg:w-1/6 text-center hover:shadow-xl px-1 sm:px-2 py-4">
          <img class="mb-4 rounded h-full w-full mx-auto" src="{{ asset('img/3.jpg') }}" alt="">
          <span class="text-ceter text-gray-500 mx-auto">لوستر ۷ شعله چشمه نور کد H2084 - ۲۸۰ گرم</span>
          <div class="text-left ml-2 text-gray-500 mt-6">1,250,000 تومان</div>
        </div>
      </div>
    </section>  
    
  
    {{-- banner section --}}
    <section class="flex justify-between my-6">
      <div class="flex flex-col md:flex-row">
        <img class="block rounded-xl w-full md:w-1/2 md:pl-1" src="{{ asset('img/4.jpg') }}" alt="">
        <img class="block rounded-xl w-full md:w-1/2 md:pr-1 mt-4 md:mt-0" src="{{ asset('img/4.jpg') }}" alt="">
      </div>
    </section>
  
    {{-- cards for bellow products --}}
    <section class="w-full mt-6">
      <div class="flex flex-wrap">
        <img class="block w-1/2 md:w-1/4 mb-4 rounded-xl h-full pl-1" src="{{ asset('img/5.jpg') }}" alt="">
        <img class="block w-1/2 md:w-1/4 mb-4 rounded-xl h-full pr-1 md:pl-1" src="{{ asset('img/5.jpg') }}" alt="">
        <img class="block w-1/2 md:w-1/4 mb-4 rounded-xl h-full pl-1 md:pr-1" src="{{ asset('img/5.jpg') }}" alt="">
        <img class="block w-1/2 md:w-1/4 mb-4 rounded-xl h-full pr-1" src="{{ asset('img/5.jpg') }}" alt="">
      </div>
    </section>
  
    {{-- Lampshade products --}}
    <section class="rounded-lg bg-white shadow w-full py-4 px-6">
      {{-- header --}}
      <div class="flex justify-between font-bold text-lg border-b mb-4">
        <span class="py-4 border-b border-red-500 -my-px text-gray-800 font-semibold tracking-wide">آباژور ایستاده و کنارسالنی
  
        </span>
        <a href="#" class="py-4 text-gray-500 hover:text-green-800">مشاهده همه</a>
      </div>
  
      {{-- products section --}}
      <div class="flex justify-between items-center pt-2 pb-8 text-sm xl:text-base flex-wrap">
        <div class="w-1/2 md:w-1/3 lg:w-1/6 text-center hover:shadow-xl px-1 sm:px-2 py-4">
          <img class="mb-4 rounded h-full w-full mx-auto" src="{{ asset('img/3.jpg') }}" alt="">
          <span class="text-ceter text-gray-500 mx-auto">لوستر ۷ شعله چشمه نور کد H2084 - ۲۸۰ گرم</span>
          <div class="text-left ml-2 text-gray-500 mt-6">1,250,000 تومان</div>
        </div>
        <div class="w-1/2 md:w-1/3 lg:w-1/6 text-center hover:shadow-xl px-1 sm:px-2 py-4">
          <img class="mb-4 rounded h-full w-full mx-auto" src="{{ asset('img/3.jpg') }}" alt="">
          <span class="text-ceter text-gray-500 mx-auto">لوستر ۷ شعله چشمه نور کد H2084 - ۲۸۰ گرم</span>
          <div class="text-left ml-2 text-gray-500 mt-6">1,250,000 تومان</div>
        </div>
        <div class="w-1/2 md:w-1/3 lg:w-1/6 text-center hover:shadow-xl px-1 sm:px-2 py-4">
          <img class="mb-4 rounded h-full w-full mx-auto" src="{{ asset('img/3.jpg') }}" alt="">
          <span class="text-ceter text-gray-500 mx-auto">لوستر ۷ شعله چشمه نور کد H2084 - ۲۸۰ گرم</span>
          <div class="text-left ml-2 text-gray-500 mt-6">1,250,000 تومان</div>
        </div>
        <div class="w-1/2 md:w-1/3 lg:w-1/6 text-center hover:shadow-xl px-1 sm:px-2 py-4">
          <img class="mb-4 rounded h-full w-full mx-auto" src="{{ asset('img/3.jpg') }}" alt="">
          <span class="text-ceter text-gray-500 mx-auto">لوستر ۷ شعله چشمه نور کد H2084 - ۲۸۰ گرم</span>
          <div class="text-left ml-2 text-gray-500 mt-6">1,250,000 تومان</div>
        </div>
        <div class="w-1/2 md:w-1/3 lg:w-1/6 text-center hover:shadow-xl px-1 sm:px-2 py-4">
          <img class="mb-4 rounded h-full w-full mx-auto" src="{{ asset('img/3.jpg') }}" alt="">
          <span class="text-ceter text-gray-500 mx-auto">لوستر ۷ شعله چشمه نور کد H2084 - ۲۸۰ گرم</span>
          <div class="text-left ml-2 text-gray-500 mt-6">1,250,000 تومان</div>
        </div>
        <div class="w-1/2 md:w-1/3 lg:w-1/6 text-center hover:shadow-xl px-1 sm:px-2 py-4">
          <img class="mb-4 rounded h-full w-full mx-auto" src="{{ asset('img/3.jpg') }}" alt="">
          <span class="text-ceter text-gray-500 mx-auto">لوستر ۷ شعله چشمه نور کد H2084 - ۲۸۰ گرم</span>
          <div class="text-left ml-2 text-gray-500 mt-6">1,250,000 تومان</div>
        </div>
      </div>
    </section>
  
  
    {{-- category section --}}
    <section class="mt-10 flex justify-between flex-wrap">
      <div class="w-1/2 md:w-1/4 xl:w-auto my-4 flex flex-col items-center">
        <img class="rounded-full h-32 w-32" src="{{ asset('img/3.jpg') }}" alt="">
        <span class="mt-6 tracking-wide font-semibold text-gray-800 text-sm">لوستر مدرن</span>
      </div>
      <div class="w-1/2 md:w-1/4 xl:w-auto my-4 flex flex-col items-center">
        <img class="rounded-full h-32 w-32" src="{{ asset('img/3.jpg') }}" alt="">
        <span class="mt-6 tracking-wide font-semibold text-gray-800 text-sm">آباژور رومیزی</span>
      </div>
      <div class="w-1/2 md:w-1/4 xl:w-auto my-4 flex flex-col items-center">
        <img class="rounded-full h-32 w-32" src="{{ asset('img/3.jpg') }}" alt="">
        <span class="mt-6 tracking-wide font-semibold text-gray-800 text-sm">مبلمان تختخواب‌شو</span>
      </div>
      <div class="w-1/2 md:w-1/4 xl:w-auto my-4 flex flex-col items-center">
        <img class="rounded-full h-32 w-32" src="{{ asset('img/3.jpg') }}" alt="">
        <span class="mt-6 tracking-wide font-semibold text-gray-800 text-sm">مبل تک نفره</span>
      </div>
      <div class="w-1/2 md:w-1/4 xl:w-auto my-4 flex flex-col items-center">
        <img class="rounded-full h-32 w-32" src="{{ asset('img/3.jpg') }}" alt="">
        <span class="mt-6 tracking-wide font-semibold text-gray-800 text-sm">میز</span>
      </div>
      <div class="w-1/2 md:w-1/4 xl:w-auto my-4 flex flex-col items-center">
        <img class="rounded-full h-32 w-32" src="{{ asset('img/3.jpg') }}" alt="">
        <span class="mt-6 tracking-wide font-semibold text-gray-800 text-sm">چراغ آویز</span>
      </div>
      <div class="w-1/2 md:w-1/4 xl:w-auto my-4 flex flex-col items-center">
        <img class="rounded-full h-32 w-32" src="{{ asset('img/3.jpg') }}" alt="">
        <span class="mt-6 tracking-wide font-semibold text-gray-800 text-sm">ساعت دیواری</span>
      </div>
      <div class="w-1/2 md:w-1/4 xl:w-auto my-4 flex flex-col items-center">
        <img class="rounded-full h-32 w-32" src="{{ asset('img/3.jpg') }}" alt="">
        <span class="mt-6 tracking-wide font-semibold text-gray-800 text-sm">لوستر چوبی</span>
      </div>
    </section>
  
  
    {{-- clock products --}}
    <section class="rounded-lg bg-white shadow w-full py-4 px-6">
      {{-- header --}}
      <div class="flex justify-between font-bold text-lg border-b mb-4">
        <span class="py-4 border-b border-red-500 -my-px text-gray-800 font-semibold tracking-wide">ساعت دیواری
  
        </span>
        <a href="#" class="py-4 text-gray-500 hover:text-green-800">مشاهده همه</a>
      </div>
  
      {{-- products section --}}
      <div class="flex justify-between items-center pt-2 pb-8 text-sm xl:text-base flex-wrap">
        <div class="w-1/2 md:w-1/3 lg:w-1/6 text-center hover:shadow-xl px-1 sm:px-2 py-4">
          <img class="mb-4 rounded h-full w-full mx-auto" src="{{ asset('img/3.jpg') }}" alt="">
          <span class="text-ceter text-gray-500 mx-auto">لوستر ۷ شعله چشمه نور کد H2084 - ۲۸۰ گرم</span>
          <div class="text-left ml-2 text-gray-500 mt-6">1,250,000 تومان</div>
        </div>
        <div class="w-1/2 md:w-1/3 lg:w-1/6 text-center hover:shadow-xl px-1 sm:px-2 py-4">
          <img class="mb-4 rounded h-full w-full mx-auto" src="{{ asset('img/3.jpg') }}" alt="">
          <span class="text-ceter text-gray-500 mx-auto">لوستر ۷ شعله چشمه نور کد H2084 - ۲۸۰ گرم</span>
          <div class="text-left ml-2 text-gray-500 mt-6">1,250,000 تومان</div>
        </div>
        <div class="w-1/2 md:w-1/3 lg:w-1/6 text-center hover:shadow-xl px-1 sm:px-2 py-4">
          <img class="mb-4 rounded h-full w-full mx-auto" src="{{ asset('img/3.jpg') }}" alt="">
          <span class="text-ceter text-gray-500 mx-auto">لوستر ۷ شعله چشمه نور کد H2084 - ۲۸۰ گرم</span>
          <div class="text-left ml-2 text-gray-500 mt-6">1,250,000 تومان</div>
        </div>
        <div class="w-1/2 md:w-1/3 lg:w-1/6 text-center hover:shadow-xl px-1 sm:px-2 py-4">
          <img class="mb-4 rounded h-full w-full mx-auto" src="{{ asset('img/3.jpg') }}" alt="">
          <span class="text-ceter text-gray-500 mx-auto">لوستر ۷ شعله چشمه نور کد H2084 - ۲۸۰ گرم</span>
          <div class="text-left ml-2 text-gray-500 mt-6">1,250,000 تومان</div>
        </div>
        <div class="w-1/2 md:w-1/3 lg:w-1/6 text-center hover:shadow-xl px-1 sm:px-2 py-4">
          <img class="mb-4 rounded h-full w-full mx-auto" src="{{ asset('img/3.jpg') }}" alt="">
          <span class="text-ceter text-gray-500 mx-auto">لوستر ۷ شعله چشمه نور کد H2084 - ۲۸۰ گرم</span>
          <div class="text-left ml-2 text-gray-500 mt-6">1,250,000 تومان</div>
        </div>
        <div class="w-1/2 md:w-1/3 lg:w-1/6 text-center hover:shadow-xl px-1 sm:px-2 py-4">
          <img class="mb-4 rounded h-full w-full mx-auto" src="{{ asset('img/3.jpg') }}" alt="">
          <span class="text-ceter text-gray-500 mx-auto">لوستر ۷ شعله چشمه نور کد H2084 - ۲۸۰ گرم</span>
          <div class="text-left ml-2 text-gray-500 mt-6">1,250,000 تومان</div>
        </div>
      </div>
    </section>
  
  
    {{-- cards for bellow products --}}
    <section class="w-full mt-6">
      <div class="flex flex-wrap">
        <img class="block w-1/2 md:w-1/4 mb-4 rounded-xl h-full pl-1" src="{{ asset('img/5.jpg') }}" alt="">
        <img class="block w-1/2 md:w-1/4 mb-4 rounded-xl h-full pr-1 md:pl-1" src="{{ asset('img/5.jpg') }}" alt="">
        <img class="block w-1/2 md:w-1/4 mb-4 rounded-xl h-full pl-1 md:pr-1" src="{{ asset('img/5.jpg') }}" alt="">
        <img class="block w-1/2 md:w-1/4 mb-4 rounded-xl h-full pr-1" src="{{ asset('img/5.jpg') }}" alt="">
      </div>
    </section>
    
  
    {{-- wood luster products --}}
    <section class="rounded-lg bg-white shadow w-full py-4 px-6">
      {{-- header --}}
      <div class="flex justify-between font-bold text-lg border-b mb-4">
        <span class="py-4 border-b border-red-500 -my-px text-gray-800 font-semibold tracking-wide">محبوب‌ترین لوسترهای چوبی
  
        </span>
        <a href="#" class="py-4 text-gray-500 hover:text-green-800">مشاهده همه</a>
      </div>
  
      {{-- products section --}}
      <div class="flex justify-between items-center pt-2 pb-8 text-sm xl:text-base flex-wrap">
        <div class="w-1/2 md:w-1/3 lg:w-1/6 text-center hover:shadow-xl px-1 sm:px-2 py-4">
          <img class="mb-4 rounded h-full w-full mx-auto" src="{{ asset('img/3.jpg') }}" alt="">
          <span class="text-ceter text-gray-500 mx-auto">لوستر ۷ شعله چشمه نور کد H2084 - ۲۸۰ گرم</span>
          <div class="text-left ml-2 text-gray-500 mt-6">1,250,000 تومان</div>
        </div>
        <div class="w-1/2 md:w-1/3 lg:w-1/6 text-center hover:shadow-xl px-1 sm:px-2 py-4">
          <img class="mb-4 rounded h-full w-full mx-auto" src="{{ asset('img/3.jpg') }}" alt="">
          <span class="text-ceter text-gray-500 mx-auto">لوستر ۷ شعله چشمه نور کد H2084 - ۲۸۰ گرم</span>
          <div class="text-left ml-2 text-gray-500 mt-6">1,250,000 تومان</div>
        </div>
        <div class="w-1/2 md:w-1/3 lg:w-1/6 text-center hover:shadow-xl px-1 sm:px-2 py-4">
          <img class="mb-4 rounded h-full w-full mx-auto" src="{{ asset('img/3.jpg') }}" alt="">
          <span class="text-ceter text-gray-500 mx-auto">لوستر ۷ شعله چشمه نور کد H2084 - ۲۸۰ گرم</span>
          <div class="text-left ml-2 text-gray-500 mt-6">1,250,000 تومان</div>
        </div>
        <div class="w-1/2 md:w-1/3 lg:w-1/6 text-center hover:shadow-xl px-1 sm:px-2 py-4">
          <img class="mb-4 rounded h-full w-full mx-auto" src="{{ asset('img/3.jpg') }}" alt="">
          <span class="text-ceter text-gray-500 mx-auto">لوستر ۷ شعله چشمه نور کد H2084 - ۲۸۰ گرم</span>
          <div class="text-left ml-2 text-gray-500 mt-6">1,250,000 تومان</div>
        </div>
        <div class="w-1/2 md:w-1/3 lg:w-1/6 text-center hover:shadow-xl px-1 sm:px-2 py-4">
          <img class="mb-4 rounded h-full w-full mx-auto" src="{{ asset('img/3.jpg') }}" alt="">
          <span class="text-ceter text-gray-500 mx-auto">لوستر ۷ شعله چشمه نور کد H2084 - ۲۸۰ گرم</span>
          <div class="text-left ml-2 text-gray-500 mt-6">1,250,000 تومان</div>
        </div>
        <div class="w-1/2 md:w-1/3 lg:w-1/6 text-center hover:shadow-xl px-1 sm:px-2 py-4">
          <img class="mb-4 rounded h-full w-full mx-auto" src="{{ asset('img/3.jpg') }}" alt="">
          <span class="text-ceter text-gray-500 mx-auto">لوستر ۷ شعله چشمه نور کد H2084 - ۲۸۰ گرم</span>
          <div class="text-left ml-2 text-gray-500 mt-6">1,250,000 تومان</div>
        </div>
      </div>
    </section>
  </div>

@endsection