<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>فروشگاه لوستر اکسین | @yield('title')</title>
</head>
<body class="font-yekan antialiased bg-gray-100 text-gray-600" dir="rtl">
  {{-- header content --}}
  <header class="flex justify-between px-6 py-4 bg-white">
    <div class="flex flex-col justify-between w-full">
      {{-- top section --}}
      <div class="flex justify-between w-full">
  
        {{-- menu svg --}}
        <div class="flex flex-col lg:flex-row lg:items-center w-full">

          <div class="flex flex-row lg:flex-col justify-between">
            <div class="flex justify-between items-center lg:hidden">
              <div class="w-full">
                <button id="menu_button" type="button" class="focus:outline-none">
                  <svg id="menu_svg" class="h-6 w-6 fill-current" viewBox="0 0 18 14" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 1C0 0.447715 0.447715 0 1 0H17C17.5523 0 18 0.447715 18 1C18 1.55228 17.5523 2 17 2H1C0.447716 2 0 1.55228 0 1ZM0 7C0 6.44772 0.447715 6 1 6H17C17.5523 6 18 6.44772 18 7C18 7.55228 17.5523 8 17 8H1C0.447716 8 0 7.55228 0 7ZM1 12C0.447715 12 0 12.4477 0 13C0 13.5523 0.447716 14 1 14H17C17.5523 14 18 13.5523 18 13C18 12.4477 17.5523 12 17 12H1Z" />
                  </svg>
                </button>
              </div>
            </div>

            {{-- logo on big screen --}}
            @include('svg.decor-logo', ['class' => 'hidden lg:block h-14 w-52 lg:w-52 fill-current bg-red-100 rounded flex-shrink-0'])
  
            {{-- logo on small screen --}}
            @include('svg.decor-logo', ['class' => 'block lg:hidden h-14 w-28 md:w-40 fill-current bg-red-100 rounded flex-shrink-0'])

          </div>
          

          {{-- menu items --}}
          <div id="menu" class="hidden lg:hidden px-2 pt-2 pb-5">
            <a href="{{ route('pages.index') }}" class="tracking-wide block px-2 py-2 rounded leading-tight font-semibold md:flex-shrink-0 md:mt-0 hover:bg-gray-200">خانه</a>
            <a href="{{ route('products.index') }}" class="tracking-wide block px-2 py-2 rounded leading-tight font-semibold md:flex-shrink-0 mt-2 md:mt-0 hover:bg-gray-200">محصولات</a>
            <a href="{{ route('cart.index') }}" class="md:hidden tracking-wide block px-2 py-2 rounded leading-tight font-semibold md:flex-shrink-0 mt-2 md:mt-0 hover:bg-gray-200">سبد خرید</a>
            <a href="{{ route('contact.create') }}" class="tracking-wide block px-2 py-2 rounded leading-tight font-semibold md:flex-shrink-0 mt-2 md:mt-0 hover:bg-gray-200">تماس با ما</a>
            <a href="{{ route('cart.index') }}" class="tracking-wide block px-2 py-2 rounded leading-tight font-semibold md:flex-shrink-0 mt-2 md:mt-0 hover:bg-gray-200">سبد خرید</a>
            
            @if ($user = Auth::user())
              <a href="{{ route('dashboard.index') }}" class="tracking-wide block px-2 py-2 rounded leading-tight font-semibold md:flex-shrink-0 mt-2 md:mt-0 hover:bg-gray-200">پنل کاربری</a>
              <form action="#" method="POST">
                @csrf
                <button
                  type="submit"
                  class="tracking-wide block px-2 py-2 rounded leading-tight font-semibold md:flex-shrink-0 mt-2 md:mt-0 hover:bg-gray-200 focus:outline-none"
                >خروج</button>
              </form>
            @endif
            @if(Auth::guest())
              <a href="{{ route('login') }}" class="tracking-wide block px-2 py-2 rounded leading-tight font-semibold md:flex-shrink-0 mt-2 md:mt-0 hover:bg-gray-200">ورود</a>
              <a href="{{ route('register') }}" class="tracking-wide block px-2 py-2 rounded leading-tight font-semibold md:flex-shrink-0 mt-2 md:mt-0 hover:bg-gray-200">ثبت نام</a>
            @endif
          </div>
  
          {{-- search box --}}
          <div class="relative flex items-center lg:px-8 mt-4 lg:mt-0 md:w-96 w-full">
            <input
              type="text"
              placeholder="جستجو در محصولات ..."
              class="text-sm block py-3 pl-12 pr-4 rounded-lg w-full md:w-96 text-gray-800 focus:outline-none">
              <div class="absolute left-0 px-3 lg:px-0 lg:mx-10">
                @include('svg.magnifying-glass', ['class' => 'h-6 w-6 fill-current text-gray-500'])
              </div>
          </div>
        </div>
  
        <div class="hidden lg:flex items-center flex-shrink-0">
          <div class="flex items-center ml-6">
            @include('svg.user', ['class' => 'h-5 w-5 fill-current text-gray-500 ml-2'])
            @if ($user = Auth::user())
              <a href="{{ route('dashboard.index') }}" class="font-semibold text-sm tracking-wide">پنل کاربری</a>
              <span class="mx-2 text-gray-500">/</span>
              <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button
                  type="submit"
                  class="font-semibold text-sm tracking-wide"
                >خروج</button>
              </form>
            @endif
            @if(Auth::guest())
              <a href="{{ route('login') }}" class="font-semibold text-sm tracking-wide">ورود</a>
              <span class="mx-2 text-gray-500">/</span>
              <a href="{{ route('register') }}" class="font-semibold text-sm tracking-wide">ثبت نام</a>
            @endif
          </div>
          @include('svg.shopping-cart', ['class' => 'h-6 w-6 fill-current text-gray-500'])
        </div>
      </div>

      {{-- bottom section --}}
      <div class="hidden lg:block pt-8 w-full">
        <ul class="flex">
          <li class="mx-4 font-semibold text-gray-800 text-sm tracking-wide">
            <a href="{{ route('pages.index') }}">خانه</a>
          </li>
          <li class="mx-4 font-semibold hover:text-gray-800 text-sm tracking-wide">
            <a href="{{ route('products.index') }}">محصولات</a>
          </li>
          {{-- list all parent categories --}}
          @foreach (\App\Models\MenuCategory::where('published', true)->get() as $menu)
            <li class="mx-4 font-semibold hover:text-gray-800 text-sm tracking-wide">
              <a href="{{ route('products.index', ['menu' => $menu->slug]) }}">{{ $menu->name }}</a>
            </li>
          @endforeach
          <li class="mx-4 font-semibold hover:text-gray-800 text-sm tracking-wide">
            <a href="{{ route('contact.create') }}">تماس با ما</a>
          </li>
        </ul>
      </div>
    </div>
  </header>

  {{-- main content --}}
  <main class="mx-auto pb-16">
    @yield('content')
  </main>

  {{-- footer content --}}
  <footer class="">
    <div class="bg-gray-200 px-4 lg:px-12 xl:px-20">
      {{-- icons --}}
      <div class="flex flex-col md:flex-row justify-between px-16 pt-10 pb-6 border-b border-gray-300">
        <div class="flex flex-col items-center my-5 lg:my-0">
          <svg class="h-16 w-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 117 120">
            <g fill="none" fill-rule="evenodd">
              <path fill="#F05562" d="M46.573 8.182l47.733 14.917v23.36L78.514 51.6V29.398L28.821 13.557z"></path>
              <path fill="#434A54" fill-rule="nonzero" d="M116.014 19.464a2.075 2.075 0 0 0-.647-1.088 2.588 2.588 0 0 0-.47-.373 2.567 2.567 0 0 0-.3-.15c-.048-.028-18.584-5.94-55.609-17.735a2.52 2.52 0 0 0-1.526 0L2.075 17.742a2.518 2.518 0 0 0-1.762 2.396v60.423c0 1.098.714 2.07 1.762 2.4l19.451 6.575c.33.105.873-1.358 1.626-4.389L5.348 78.72V21.98l16.785-5.34 47.08 14.982-10.995 3.497-42.044-13.373a2.517 2.517 0 1 0-1.526 4.798L55.7 39.602v29.924a2.518 2.518 0 0 0 5.035 0V39.602l14.268-4.532v16.702a2.518 2.518 0 0 0 3.273 2.4l5.873-1.874a2.517 2.517 0 1 0-1.526-4.798l-2.593.825V33.472l13.006-4.14v14.854l-2.86.91a2.517 2.517 0 0 0 .756 4.916c.256 0 .51-.04.755-.118l4.617-1.468a2.517 2.517 0 0 0 1.762-2.4V27.722l13.021-4.139v55.136l-3.272 1.045a2.518 2.518 0 1 0 1.371 4.845c.031-.01 1.756-.558 5.175-1.648a2.517 2.517 0 0 0 1.762-2.4V20.139a2.517 2.517 0 0 0-.109-.674zm-38.496 9.514l-47.08-14.98 9.739-3.1 47.079 14.98-9.738 3.1zm18.04-5.74L48.483 8.255l9.736-3.096 47.079 14.98-9.738 3.099z"></path>
              <path fill="#434A54" fill-rule="nonzero" d="M13.345 63A2.345 2.345 0 0 0 11 65.345v17.034a2.345 2.345 0 0 0 4.69 0V65.345A2.345 2.345 0 0 0 13.345 63zM13.344 56c-.617 0-1.221.25-1.657.687a2.363 2.363 0 0 0-.687 1.66c0 .613.25 1.218.687 1.656a2.36 2.36 0 0 0 1.657.684A2.36 2.36 0 0 0 15 60.004c.436-.438.687-1.04.687-1.657 0-.619-.251-1.223-.687-1.66A2.361 2.361 0 0 0 13.344 56zM22.344 85c-.617 0-1.221.25-1.657.687a2.363 2.363 0 0 0-.687 1.66c0 .613.25 1.218.687 1.656a2.36 2.36 0 0 0 1.657.684A2.36 2.36 0 0 0 24 89.004c.436-.438.686-1.04.686-1.657 0-.619-.25-1.223-.686-1.66A2.361 2.361 0 0 0 22.344 85z"></path>
              <path fill="#55C6D9" fill-rule="nonzero" d="M98.5 53.47a2.518 2.518 0 0 0-2.518 2.517v26.246c-.014 12.508-10.15 22.645-22.659 22.659h-30.21a2.518 2.518 0 0 0-2.518 2.517v5.235L22.327 99.857 40.595 87.07v5.234a2.518 2.518 0 0 0 2.517 2.517h22.659c8.339-.008 15.097-6.766 15.105-15.105v-1.07a2.518 2.518 0 0 0-5.035 0v1.07c0 5.561-4.509 10.07-10.07 10.07H45.63v-7.553a2.518 2.518 0 0 0-3.96-2.062L16.493 97.795a2.517 2.517 0 0 0 0 4.124l25.177 17.623a2.517 2.517 0 0 0 3.96-2.062v-7.553h27.693c15.288-.018 27.676-12.406 27.694-27.694V55.987a2.518 2.518 0 0 0-2.518-2.518z"></path>
              <path fill="#F05562" d="M20 41h25.183v6.519L31.979 80h-8.135L36.66 48.354H20z"></path>
            </g>
          </svg>
          <span class="text-xs font-semibold text-gray-600 mx-auto tracking-wide mt-4">عودت وجه کالا</span>
        </div>
  
        <div class="flex flex-col items-center my-5 lg:my-0">
          <svg class="h-16 w-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 117 120">
            <g fill="none" fill-rule="evenodd">
              <g fill-rule="nonzero">
                <path fill="#F05562" d="M90.77 87.807c8.304 0 15.035-6.731 15.035-15.034 0-8.304-6.731-15.035-15.034-15.035v30.069z"></path>
                <g fill="#434A54">
                  <path d="M94.364 13.832C85.444 4.912 73.63 0 61.1 0 48.571 0 36.758 4.912 27.84 13.832a47.536 47.536 0 0 0-8.387 11.31c-1.403 3.833 3.126 4.769 4.225 2.22C30.78 13.942 44.89 4.78 61.1 4.78c23.332 0 42.314 18.982 42.314 42.313v13.708c-3.178-3.355-7.67-5.454-12.644-5.454a2.39 2.39 0 0 0-2.39 2.39v30.069a2.39 2.39 0 0 0 2.39 2.39c9.518 0 17.274-7.672 17.418-17.157.002-.03.004-8.678.007-25.946 0-12.53-4.913-24.343-13.832-33.262zM93.16 85.19V60.355c5.833 1.12 10.254 6.263 10.254 12.418 0 6.154-4.42 11.296-10.254 12.417zM103.838 87.566c-.606 0-1.201.247-1.63.676a2.324 2.324 0 0 0-.675 1.632c0 .604.246 1.199.675 1.63a2.32 2.32 0 0 0 1.63.673 2.32 2.32 0 0 0 1.63-.673 2.327 2.327 0 0 0 .675-1.63c0-.609-.246-1.204-.675-1.632a2.323 2.323 0 0 0-1.63-.676zM102.53 95.08a2.39 2.39 0 0 0-3.267.874c-4.639 8.031-11.93 13.554-21.176 16.084l-1.203-5.66a2.39 2.39 0 0 0-2.836-1.842l-8.068 1.715a2.39 2.39 0 0 0-1.841 2.835l1.715 8.07a2.39 2.39 0 0 0 2.835 1.84l8.069-1.715c11.713-2.49 20.927-9.037 26.645-18.935a2.39 2.39 0 0 0-.874-3.266zm-33.218 15.35l3.392-.72.721 3.392-3.392.721-.721-3.392z"></path>
                </g>
              </g>
              <path fill="#55C6D9" fill-rule="nonzero" d="M8.852 36.64a3.689 3.689 0 0 0-3.688 3.688v42.554a3.689 3.689 0 0 0 3.688 3.689h54.575l6.26 7.712a.738.738 0 0 0 1.31-.465v-53.49a3.689 3.689 0 0 0-3.688-3.689H8.852zm0 54.357a8.115 8.115 0 0 1-8.114-8.115V40.328a8.115 8.115 0 0 1 8.114-8.115H67.31a8.115 8.115 0 0 1 8.114 8.115v53.49a5.164 5.164 0 0 1-9.173 3.254l-4.93-6.075H8.851z"></path>
              <path fill="#434A54" d="M10 67.062v-3.408l7.868-8.139c1.482-1.555 2.634-3.077 2.634-4.631 0-1.853-1.251-3.011-2.996-3.011-1.777 0-3.094 1.058-3.851 2.713l-3.819-2.25c1.481-3.309 4.477-4.897 7.604-4.897 3.95 0 7.605 2.647 7.605 7.28 0 2.811-1.613 5.226-3.786 7.41l-4.51 4.533h8.658v4.4H10zm35.81-8.172v4.235h-2.47v3.937h-4.575v-3.937H27.869V58.89l7.936-15.45h4.872l-7.903 15.45h5.991v-5.492h4.576v5.492h2.469zm5.865.413h14.88v3.87l-7.803 19.29h-4.806l7.572-18.793h-9.843v-4.367z"></path>
              <path fill="#F05562" d="M56.717 44.26L36.162 82.461h1.992L58.695 44.26z"></path>
            </g>
          </svg>
          <span class="text-xs font-semibold text-gray-600 mx-auto tracking-wide mt-4">پشتیبانی ۲۴ ساعته</span>
        </div>
        
        <div class="flex flex-col items-center my-5 lg:my-0">
          <svg class="h-16 w-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 117 120">
            <g fill="none" fill-rule="evenodd" transform="translate(1 1)">
              <path fill="#434A54" fill-rule="nonzero" stroke="#434A54" d="M92.444 52.814c1.786-2.2 2.431-3.223 2.431-3.813 0-.591-.645-1.614-2.431-3.814l-.225-.277c-2.131-2.632-3.122-4.174-3.687-6.267-.424-1.572-.486-3.202-.29-5.156.073-.734.158-1.35.343-2.553.425-2.778.47-3.965.22-4.394-.256-.437-1.317-1.009-3.646-1.908l-.297-.115c-3.584-1.38-5.158-2.173-6.795-3.794-1.638-1.621-2.438-3.179-3.833-6.727l-.116-.295c-.908-2.305-1.486-3.355-1.928-3.608-.398-.228-1.582-.206-3.904.138l-.376.056c-1.369.205-1.988.29-2.727.362-1.979.194-3.628.134-5.218-.287-2.197-.58-3.654-1.52-6.612-3.872-2.223-1.768-3.256-2.407-3.853-2.407-.478 0-1.424.516-2.918 1.67-.22.17-.44.343-.765.602-3.127 2.487-4.584 3.426-6.78 4.007-2.264.598-4.047.51-7.874-.065-2.72-.409-3.919-.453-4.352-.205-.466.267-1.031 1.325-2.044 3.903-1.393 3.547-2.195 5.105-3.832 6.726-1.507 1.492-3.195 2.392-6.082 3.518-.2.078-.358.14-.714.276l-.298.115c-2.329.9-3.389 1.472-3.644 1.908-.23.395-.209 1.568.139 3.868l.056.372c.207 1.353.293 1.966.366 2.697.196 1.96.135 3.592-.29 5.166-.587 2.175-1.536 3.617-3.912 6.544-.396.49-.57.706-.74.922C4.646 47.588 4.124 48.526 4.124 49c0 .473.52 1.41 1.684 2.885.173.218.348.437.611.761 2.512 3.094 3.46 4.537 4.048 6.712.425 1.572.486 3.203.29 5.159-.073.733-.159 1.348-.343 2.55-.425 2.777-.47 3.964-.22 4.393.256.437 1.317 1.01 3.646 1.909l.297.114c3.584 1.38 5.158 2.173 6.796 3.794 1.637 1.621 2.438 3.179 3.832 6.727l.116.295c.908 2.306 1.486 3.355 1.928 3.608.398.228 1.583.206 3.906-.138l.376-.056c1.372-.206 1.993-.29 2.734-.363.699-.068 1.346-.104 1.973-.104 1.15 0 2.215.121 3.237.392 2.197.58 3.653 1.52 6.611 3.872 2.223 1.768 3.256 2.407 3.853 2.407.597 0 1.63-.639 3.853-2.407l.28-.222c2.658-2.11 4.215-3.09 6.33-3.65 2.264-.599 4.045-.51 7.874.065 2.72.408 3.92.452 4.352.204.466-.267 1.031-1.325 2.044-3.902 1.393-3.547 2.195-5.106 3.833-6.727 1.637-1.62 3.21-2.414 6.795-3.794l.298-.115c2.33-.899 3.39-1.471 3.644-1.908.231-.394.21-1.567-.138-3.867l-.057-.372c-.59-3.86-.681-5.623-.076-7.864.587-2.174 1.536-3.616 3.912-6.544zm.073 7.599c-.407 1.507-.336 2.898.159 6.128.04.258.04.258.068.45.507 3.353.537 4.963-.37 6.515-.937 1.603-2.364 2.373-5.715 3.668l-.303.116c-3.045 1.172-4.284 1.797-5.374 2.876-1.09 1.079-1.72 2.306-2.905 5.32-1.443 3.674-2.15 4.998-3.822 5.956-1.642.94-3.124.885-7.036.298-3.263-.49-4.668-.56-6.19-.157-1.387.367-2.59 1.125-4.816 2.89l-.277.22C52.803 97.186 51.486 98 49.5 98c-1.985 0-3.303-.815-6.436-3.307-2.504-1.991-3.648-2.728-5.094-3.11-.65-.173-1.362-.254-2.171-.254-.481 0-.995.029-1.567.085-.648.063-1.219.141-2.363.313l-.543.08c-3.388.502-5.014.532-6.582-.366-1.62-.927-2.397-2.34-3.705-5.657l-.118-.3c-1.184-3.014-1.814-4.24-2.904-5.32-1.09-1.078-2.33-1.703-5.375-2.875l-.3-.116c-3.352-1.295-4.78-2.065-5.717-3.668-.95-1.625-.894-3.092-.301-6.965.187-1.219.265-1.784.33-2.425.15-1.508.106-2.675-.171-3.703-.386-1.43-1.131-2.563-3.143-5.041-.41-.506-.596-.737-.782-.974C.827 52.202 0 50.717 0 49c0-1.718.828-3.204 2.564-5.405.184-.234.368-.463.639-.797 2.15-2.648 2.894-3.78 3.28-5.211.278-1.029.321-2.198.17-3.709-.064-.64-.142-1.203-.315-2.334l-.082-.535c-.507-3.354-.537-4.963.37-6.516.937-1.602 2.364-2.373 5.716-3.667l.302-.116.696-.27c2.393-.933 3.683-1.62 4.678-2.606 1.09-1.08 1.72-2.306 2.905-5.32 1.444-3.674 2.15-4.999 3.823-5.956 1.641-.94 3.124-.886 7.035-.298 3.261.489 4.668.56 6.19.157 1.446-.383 2.59-1.12 5.093-3.111.51-.405.742-.588.98-.771C46.264.819 47.765 0 49.5 0c1.986 0 3.304.815 6.437 3.307 2.504 1.991 3.647 2.728 5.093 3.11 1.039.275 2.22.318 3.746.168.646-.063 1.216-.14 2.358-.312l.542-.08c3.387-.502 5.012-.532 6.58.366 1.62.928 2.398 2.34 3.705 5.658l.118.299c1.184 3.014 1.815 4.24 2.905 5.32 1.09 1.079 2.329 1.703 5.374 2.876l.3.116c3.352 1.294 4.78 2.064 5.717 3.668.95 1.624.894 3.091.301 6.965-.187 1.22-.265 1.786-.33 2.428-.15 1.506-.106 2.673.171 3.7.37 1.372 1.136 2.564 2.92 4.767l.222.273C98.176 45.73 99 47.035 99 49c0 1.965-.823 3.271-3.34 6.372-2.012 2.478-2.756 3.61-3.143 5.041z"></path>
              <ellipse cx="50.5" cy="50" fill="#F05562" rx="31.5" ry="31"></ellipse>
              <path fill="#FFF" fill-rule="nonzero" d="M66.049 32.12a2.751 2.751 0 0 1 3.823-.602 2.7 2.7 0 0 1 .605 3.792L46.62 67.88a2.751 2.751 0 0 1-3.916.532L30.036 58.44a2.7 2.7 0 0 1-.443-3.813 2.752 2.752 0 0 1 3.845-.44L43.87 62.4l22.179-30.28z"></path>
              <path fill="#434A54" fill-rule="nonzero" d="M50.5 17c1.142 0 2.068.912 2.068 2.037s-.926 2.037-2.068 2.037c-16.217 0-29.364 12.95-29.364 28.926 0 15.975 13.147 28.926 29.364 28.926S79.864 65.976 79.864 50c0-1.125.926-2.037 2.068-2.037S84 48.875 84 50c0 18.225-14.998 33-33.5 33C31.998 83 17 68.225 17 50s14.998-33 33.5-33z"></path>
              <path fill="#55C6D9" fill-rule="nonzero" d="M74.46 96.206c0-1.218 1.016-2.206 2.27-2.206s2.27.988 2.27 2.206v20.587c0 1.42-1.36 2.47-2.784 2.149l-25.517-5.767-25.922 5.768c-1.422.317-2.777-.733-2.777-2.15v-13.725c0-1.218 1.016-2.206 2.27-2.206s2.27.988 2.27 2.206v10.957l23.656-5.264a2.334 2.334 0 0 1 1.021.002l23.243 5.253v-17.81zM24.5 94c-.657 0-1.302.267-1.767.733a2.52 2.52 0 0 0-.733 1.77c0 .654.267 1.3.733 1.767.465.465 1.11.73 1.767.73.657 0 1.302-.265 1.767-.73.466-.468.733-1.11.733-1.767a2.52 2.52 0 0 0-.733-1.77A2.519 2.519 0 0 0 24.5 94z"></path>
              <path fill="#434A54" fill-rule="nonzero" d="M58.5 17c-.657 0-1.303.267-1.767.733a2.52 2.52 0 0 0-.733 1.77c0 .654.267 1.3.733 1.767.465.465 1.11.73 1.767.73.657 0 1.303-.265 1.767-.73.465-.468.733-1.11.733-1.767a2.52 2.52 0 0 0-.733-1.77A2.519 2.519 0 0 0 58.5 17z"></path>
            </g>
          </svg>
          <span class="text-xs font-semibold text-gray-600 mx-auto tracking-wide mt-4">ضمانت اصل کالا</span>
        </div>
  
        <div class="flex flex-col items-center my-5 lg:my-0">
          <svg class="h-16 w-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 158 106">
            <g fill="none" fill-rule="evenodd">
              <path fill="#F05562" d="M86.751 13l47.734 14.917v23.36l-15.793 5.141V34.216L69 18.375z"></path>
              <path fill="#434A54" fill-rule="nonzero" d="M89.024 12.944l48.042 15.35a2.5 2.5 0 0 1 1.739 2.38v20.271a2.5 2.5 0 0 1-1.668 2.358l-4.695 1.658a2.5 2.5 0 0 1-1.665-4.715l3.028-1.07V32.502l-53.5-17.094c-2.293-.733-2.327-3.967-.048-4.747l17.6-6.025a2.5 2.5 0 0 1 1.562-.02l56 17.671a2.5 2.5 0 0 1 1.748 2.385v60.964a2.5 2.5 0 0 1-1.746 2.383l-56 17.715a2.5 2.5 0 0 1-1.517-.003L42.603 88.016a2.5 2.5 0 0 1-1.738-2.381v-8.252a2.5 2.5 0 1 1 5 0v6.427l52.807 16.916 53.495-16.922v-57.3L98.699 9.631l-9.675 3.312z"></path>
              <path fill="#434A54" fill-rule="nonzero" d="M153.913 22.616a2.5 2.5 0 1 1 1.508 4.768l-56 17.714a2.5 2.5 0 0 1-1.512 0L55.173 31.505a2.5 2.5 0 0 1 1.516-4.764l41.98 13.35 55.244-17.476z"></path>
              <path fill="#434A54" fill-rule="nonzero" d="M123.62 52.464a2.5 2.5 0 0 1 1.567 4.748l-6.165 2.036a2.5 2.5 0 0 1-3.284-2.374V38.429L62.24 21.335c-2.306-.736-2.323-3.993-.025-4.754l21.001-6.954a2.5 2.5 0 1 1 1.572 4.746L71.08 18.912 119 34.222a2.5 2.5 0 0 1 1.74 2.382v16.812l2.88-.952z"></path>
              <path fill="#434A54" fill-rule="nonzero" d="M45.851 26.94v12.047a2.5 2.5 0 1 1-5 0V25.105a2.5 2.5 0 0 1 1.751-2.385l19.863-6.237a2.5 2.5 0 1 1 1.498 4.77L45.851 26.94z"></path>
              <path fill="#55C6D9" fill-rule="nonzero" d="M66.965 44.5a2.5 2.5 0 1 1 0 5H22a2.5 2.5 0 1 1 0-5h44.965zM41.965 55.5a2.5 2.5 0 1 1 0 5H3a2.5 2.5 0 1 1 0-5h38.965z"></path>
              <circle cx="14.5" cy="47" r="2.5" fill="#55C6D9"></circle>
              <circle cx="21.5" cy="69" r="2.5" fill="#55C6D9"></circle>
              <path fill="#55C6D9" fill-rule="nonzero" d="M53.965 66.5a2.5 2.5 0 1 1 0 5H29a2.5 2.5 0 1 1 0-5h24.965zM78.965.5a2.5 2.5 0 1 1 0 5H40a2.5 2.5 0 1 1 0-5h38.965zM39.965 12.5a2.5 2.5 0 1 1 0 5H21a2.5 2.5 0 1 1 0-5h18.965z"></path>
              <path fill="#434A54" fill-rule="nonzero" d="M101.5 103.125a2.5 2.5 0 1 1-5 0V90.76a2.5 2.5 0 1 1 5 0v12.365zM101.5 80.714a2.5 2.5 0 1 1-5 0V45a2.5 2.5 0 1 1 5 0v35.714z"></path>
            </g>
          </svg>
          <span class="text-xs font-semibold text-gray-600 mx-auto tracking-wide mt-4">ارسال رایگان</span>
        </div>
  
        <div class="flex flex-col items-center my-5 lg:my-0">
          <svg class="h-16 w-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 117 120">
            <g fill="none" fill-rule="evenodd">
              <path fill="#F05562" fill-rule="nonzero" d="M35.476 117.433H13.02a4.678 4.678 0 0 1-4.678-4.678v-38.13a4.679 4.679 0 0 1 4.678-4.68h22.457a4.678 4.678 0 0 1 4.679 4.68v38.13a4.679 4.679 0 0 1-4.679 4.678z"></path>
              <path fill="#FFF" fill-rule="nonzero" d="M110.14 83.748h-7.322a5.614 5.614 0 1 0 0-11.229H62.247l1.956-2.505V58.206l-11.387 4.192-12.661 12.694v34.388l6.451 5.626a9.448 9.448 0 0 0 6.21 2.327h44.213c3.147 0 5.799-2.575 5.74-5.722a5.614 5.614 0 0 0-5.614-5.506h7.854c3.148 0 5.8-2.576 5.74-5.723a5.614 5.614 0 0 0-5.614-5.505h5.005a5.614 5.614 0 0 0 0-11.23z"></path>
              <path fill="#434A54" fill-rule="nonzero" d="M24.248 105.737c-.615 0-1.219.25-1.654.685a2.357 2.357 0 0 0-.686 1.654c0 .616.25 1.22.686 1.654a2.357 2.357 0 0 0 1.654.686c.615 0 1.219-.25 1.653-.686a2.356 2.356 0 0 0 .686-1.654c0-.615-.25-1.219-.686-1.654a2.355 2.355 0 0 0-1.653-.685zM114.184 45.108c-.615 0-1.219.25-1.654.686a2.358 2.358 0 0 0-.685 1.654c0 .615.25 1.219.685 1.653a2.357 2.357 0 0 0 1.654.686c.617 0 1.219-.25 1.654-.686a2.35 2.35 0 0 0 .687-1.653 2.35 2.35 0 0 0-.687-1.654 2.352 2.352 0 0 0-1.654-.686z"></path>
              <path fill="#434A54" fill-rule="nonzero" d="M125.088 27.686a2.34 2.34 0 0 0-1.655-.685l-57.546.003a2.34 2.34 0 0 0-2.34 2.34v25.965a67.055 67.055 0 0 0-9.353 4.108c-2.939 1.57-4.657 2.985-5.495 3.822l-7.43 7.43a7.015 7.015 0 0 0-5.793-3.063H13.02a7.026 7.026 0 0 0-7.017 7.018v38.13a7.026 7.026 0 0 0 7.017 7.019h22.458c3.287 0 6.053-2.273 6.81-5.33l2.782 2.426a11.786 11.786 0 0 0 7.748 2.904h70.617a2.34 2.34 0 0 0 2.339-2.34V29.34c0-.62-.247-1.215-.685-1.654zm-89.612 87.408H13.02c-1.29 0-2.34-1.05-2.34-2.34v-38.13c0-1.29 1.05-2.339 2.34-2.339h8.89v26.948a2.34 2.34 0 0 0 4.678 0V72.285h8.89c1.29 0 2.339 1.05 2.339 2.34v38.13c0 1.29-1.05 2.34-2.34 2.34zm12.668-1.75l-5.65-4.928V76.061l7.576-7.687c2.146-1.858 3.941-3.194 5.386-4.01 3.045-1.717 5.74-2.913 8.085-3.588v6.289l-2.266 6.03a2.34 2.34 0 0 0 2.266 1.76l39.277.003a3.279 3.279 0 0 1 3.276 3.275 3.279 3.279 0 0 1-3.276 3.275H79.252a2.34 2.34 0 0 0 0 4.679h30.889a3.279 3.279 0 0 1 3.275 3.275 3.279 3.279 0 0 1-3.275 3.275H79.25a2.34 2.34 0 0 0 0 4.679h25.884a3.279 3.279 0 0 1 3.275 3.275 3.279 3.279 0 0 1-3.275 3.275H79.252a2.34 2.34 0 0 0 0 4.679h17.904a3.279 3.279 0 0 1 3.275 3.275 3.279 3.279 0 0 1-3.275 3.275h-44.34a7.113 7.113 0 0 1-4.672-1.752zm56.257 1.75c.453-1 .708-2.108.708-3.275a7.905 7.905 0 0 0-.708-3.275h.734c4.386 0 7.954-3.568 7.954-7.954 0-1.279-.306-2.488-.845-3.56 3.368-.924 5.85-4.011 5.85-7.668a7.91 7.91 0 0 0-1.57-4.739V54.974a2.34 2.34 0 0 0-4.679 0v26.62a7.956 7.956 0 0 0-1.705-.186c.377-1 .632-2.108.632-3.275 0-4.385-3.568-7.953-7.954-7.953H68.227V32.676l52.867-.002v82.42h-16.693z"></path>
              <path fill="#434A54" d="M76.005 32h13.001v39H76.005z"></path>
              <path fill="#55C6D9" fill-rule="nonzero" d="M26.404 63.276a2.5 2.5 0 0 1-3.808 0C7.889 45.982.5 33.213.5 24.5c0-13.255 10.745-24 24-24s24 10.745 24 24c0 8.713-7.389 21.482-22.096 38.776zM43.5 24.5c0-10.493-8.507-19-19-19s-19 8.507-19 19c0 6.788 6.313 18.014 19 33.272 12.687-15.258 19-26.484 19-33.272z"></path>
              <path fill="#55C6D9" fill-rule="nonzero" d="M24.5 36.25c-6.49 0-11.75-5.26-11.75-11.75s5.26-11.75 11.75-11.75 11.75 5.26 11.75 11.75-5.26 11.75-11.75 11.75zm0-4.5a7.25 7.25 0 1 0 0-14.5 7.25 7.25 0 0 0 0 14.5z"></path>
            </g>
          </svg>
          <span class="text-xs font-semibold text-gray-600 mx-auto tracking-wide mt-4">پرداخت درب منزل</span>
        </div>
      </div>
  
      {{-- links --}}
      <div class="flex flex-col lg:flex-row justify-between pt-6 pb-8 border-b border-gray-300">
        <div class="w-full lg:w-8/12 flex flex-col md:flex-row justify-between">
          <div class="w-full md:w-1/3">
            <h2 class="text-sm font-bold tracking-widest">راهنمای خرید از لوسترشاپ</h2>
            <ul class="mt-2 lg:mt-4">
              <li>
                <a href="#" class="text-gray-600 text-xs font-semibold tracking-wide">راهنمای خرید</a>
              </li>
              <li>
                <a href="#" class="text-gray-600 text-xs font-semibold tracking-wide">روش های پرداخت</a>
              </li>
              <li>
                <a href="#" class="text-gray-600 text-xs font-semibold tracking-wide">شرایط ارسال سفارش</a>
              </li>
              <li>
                <a href="#" class="text-gray-600 text-xs font-semibold tracking-wide">خرید اقساطی</a>
              </li>
              <li>
                <a href="#" class="text-gray-600 text-xs font-semibold tracking-wide">راهنمای خرید موبایلی</a>
              </li>
            </ul>
          </div>
          <div class="w-full mt-4 md:mt-0 md:w-1/3">
            <h2 class="text-sm font-bold tracking-widest pt-3 md:pt-0 mt-2 md:mt-0 border-t md:border-t-0 border-gray-300">خدمات مشتریان</h2>
            <ul class="mt-2 lg:mt-4">
              <li>
                <a href="#" class="text-gray-600 text-xs font-semibold tracking-wide">سوالات متداول</a>
              </li>
              <li>
                <a href="#" class="text-gray-600 text-xs font-semibold tracking-wide">پرداخت مبالغ دلخواه</a>
              </li>
              <li>
                <a href="#" class="text-gray-600 text-xs font-semibold tracking-wide">سوالات متداول خرید مبلمان</a>
              </li>
              <li>
                <a href="#" class="text-gray-600 text-xs font-semibold tracking-wide">سوالات متداول خرید لوستر</a>
              </li>
            </ul>
          </div>
          <div class="w-full mt-4 md:mt-0 md:w-1/3">
            <h2 class="text-sm font-bold tracking-widest pt-3 mt-2 md:mt-0 border-t md:border-t-0 border-gray-300">با لوسترشاپ</h2>
            <ul class="mt-2 lg:mt-4">
              <li>
                <a href="#" class="text-gray-600 text-xs font-semibold tracking-wide">دکورمگ</a>
              </li>
              <li>
                <a href="#" class="text-gray-600 text-xs font-semibold tracking-wide">برند لوستر اکسین </a>
              </li>
              <li>
                <a href="{{ route('contact.create') }}" class="text-gray-600 text-xs font-semibold tracking-wide">تماس با ما</a>
              </li>
              <li>
                <a href="#" class="text-gray-600 text-xs font-semibold tracking-wide">مسابقه بزرگ جعبه گشایی</a>
              </li>
            </ul>
          </div>
        </div>
        
        <div class="w-full lg:w-4/12 mt-12 lg:mt-0">
          <div>
            <h2 class="text-sm font-semibold">از تخفیف‌ها و جدیدترین‌های ما باخبر شوید:</h2>
          </div>
          
          <div class="flex mt-4">
            <form action="" method="POST" class="flex">
              <input type="text" class="px-4 py-2 rounded-r-lg focus:outline-none md:w-72 lg:w-64 border-0" placeholder="ایمیل">
              <button class="px-4 md:px-6 py-2 bg-green-600 text-sm text-white tracking-wide rounded-l-lg focus:outline-none hover:bg-green-500">ارسال</button>
            </form>
          </div>
          
          <div class="mt-8">
            <p class="text-sm font-semibold">ما را در شبکه های اجتماعی دنبال کنید.</p>
  
            <div class="flex justify-between items-center w-64 mt-5">
              <a href="#">
                <svg class="h-6 w-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
                  <title>اینستاگرام</title>
                  <path transform="translate(-1 -1)" d="M18.94586,6.28931a6.60561,6.60561,0,0,0-.41833-2.18463,4.41189,4.41189,0,0,0-1.03809-1.59412,4.41189,4.41189,0,0,0-1.59412-1.03809,6.60561,6.60561,0,0,0-2.18463-.41833C12.75073,1.01038,12.44427,1,10,1s-2.75073.01038-3.71069,0.05414a6.60561,6.60561,0,0,0-2.18463.41833A4.41189,4.41189,0,0,0,2.51056,2.51056,4.41189,4.41189,0,0,0,1.47247,4.10468a6.60561,6.60561,0,0,0-.41833,2.18463C1.01038,7.24927,1,7.55573,1,10s0.01038,2.75073.05414,3.71069a6.60561,6.60561,0,0,0,.41833,2.18463,4.41189,4.41189,0,0,0,1.03809,1.59412,4.41109,4.41109,0,0,0,1.59412,1.03809,6.60561,6.60561,0,0,0,2.18463.41833C7.24927,18.98969,7.55573,19,10,19s2.75073-.01031,3.71069-0.05414a6.60561,6.60561,0,0,0,2.18463-.41833,4.60208,4.60208,0,0,0,2.6322-2.6322,6.60561,6.60561,0,0,0,.41833-2.18463C18.98962,12.75073,19,12.44427,19,10S18.98962,7.24927,18.94586,6.28931Zm-1.61993,7.34747a4.97824,4.97824,0,0,1-.30994,1.67114A2.98017,2.98017,0,0,1,15.30792,17.016a4.9786,4.9786,0,0,1-1.67114.30994C12.68787,17.3692,12.40326,17.37836,10,17.37836s-2.68787-.00916-3.63678-0.05243A4.9786,4.9786,0,0,1,4.69208,17.016a2.78769,2.78769,0,0,1-1.03485-.67322A2.78769,2.78769,0,0,1,2.984,15.30792a4.97824,4.97824,0,0,1-.30994-1.67114C2.6308,12.68774,2.62164,12.40314,2.62164,10s0.00916-2.68774.05243-3.63678A4.9786,4.9786,0,0,1,2.984,4.69208a2.78769,2.78769,0,0,1,.67322-1.03485A2.78769,2.78769,0,0,1,4.69208,2.984a4.9786,4.9786,0,0,1,1.67114-.30994C7.31226,2.6308,7.59686,2.62164,10,2.62164s2.68774,0.00916,3.63678.05243a4.9786,4.9786,0,0,1,1.67114.30994,2.78769,2.78769,0,0,1,1.03485.67322A2.78769,2.78769,0,0,1,17.016,4.69208a4.9786,4.9786,0,0,1,.30994,1.67114c0.04327,0.949.05243,1.2337,0.05243,3.63678S17.3692,12.68774,17.32593,13.63678ZM10,5.37836A4.62164,4.62164,0,1,0,14.62164,10,4.62169,4.62169,0,0,0,10,5.37836ZM10,13a3,3,0,1,1,3-3A3,3,0,0,1,10,13Zm5.88422-7.8042a1.08,1.08,0,1,1-1.08-1.08A1.08,1.08,0,0,1,15.88422,5.1958Z"/>
                </svg>
              </a>
              
              <a href="#">
                <svg class="h-6 w-6 rounded-full fill-current text-gray-500" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 455 455" xml:space="preserve">
                  <title>تلگرام</title>
                  <g>
                    <path style="fill-rule:evenodd;clip-rule:evenodd;" d="M0,0v455h455V0H0z M384.814,100.68l-53.458,257.136
                      c-1.259,6.071-8.378,8.822-13.401,5.172l-72.975-52.981c-4.43-3.217-10.471-3.046-14.712,0.412l-40.46,32.981
                      c-4.695,3.84-11.771,1.7-13.569-4.083l-28.094-90.351l-72.583-27.089c-7.373-2.762-7.436-13.171-0.084-16.003L373.36,90.959
                      C379.675,88.517,386.19,94.049,384.814,100.68z"/>
                    <path style="fill-rule:evenodd;clip-rule:evenodd;" d="M313.567,147.179l-141.854,87.367c-5.437,3.355-7.996,9.921-6.242,16.068
                      l15.337,53.891c1.091,3.818,6.631,3.428,7.162-0.517l3.986-29.553c0.753-5.564,3.406-10.693,7.522-14.522l117.069-108.822
                      C318.739,149.061,316.115,145.614,313.567,147.179z"/>
                  </g>
                </svg>
              </a>
              
              <a href="#">
                <svg class="h-6 w-6 fill-current text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
                  <title>تویتر</title>
                    <path d="M17.316,6.246c0.008,0.162,0.011,0.326,0.011,0.488c0,4.99-3.797,10.742-10.74,10.742c-2.133,0-4.116-0.625-5.787-1.697
                      c0.296,0.035,0.596,0.053,0.9,0.053c1.77,0,3.397-0.604,4.688-1.615c-1.651-0.031-3.046-1.121-3.526-2.621
                      c0.23,0.043,0.467,0.066,0.71,0.066c0.345,0,0.679-0.045,0.995-0.131c-1.727-0.348-3.028-1.873-3.028-3.703c0-0.016,0-0.031,0-0.047
                      c0.509,0.283,1.092,0.453,1.71,0.473c-1.013-0.678-1.68-1.832-1.68-3.143c0-0.691,0.186-1.34,0.512-1.898
                      C3.942,5.498,6.725,7,9.862,7.158C9.798,6.881,9.765,6.594,9.765,6.297c0-2.084,1.689-3.773,3.774-3.773
                      c1.086,0,2.067,0.457,2.756,1.191c0.859-0.17,1.667-0.484,2.397-0.916c-0.282,0.881-0.881,1.621-1.66,2.088
                      c0.764-0.092,1.49-0.293,2.168-0.594C18.694,5.051,18.054,5.715,17.316,6.246z"/>
                </svg>
              </a>
              
              <a href="#">
                <svg class="h-6 w-6 fill-current text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
                  <title>لینکدین</title>
                  <path d="M5,3c0,1.1-0.7,2-2,2C1.8,5,1,4.1,1,3.1C1,2,1.8,1,3,1S5,1.9,5,3z M1,19h4V6H1V19z M14.6,6.2c-2.1,0-3.3,1.2-3.8,2h-0.1
                    l-0.2-1.7H6.9C6.9,7.6,7,8.9,7,10.4V19h4v-7.1c0-0.4,0-0.7,0.1-1c0.3-0.7,0.8-1.6,1.9-1.6c1.4,0,2,1.2,2,2.8V19h4v-7.4
                    C19,7.9,17.1,6.2,14.6,6.2z"/>
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>
  
      <div class="flex flex-col md:flex-row justify-between pt-6 pb-8 max-w-4xl text-gray-800 font-normal">
        <p class="w-full md:w-1/3 px-4 my-4 md:my-0">شنبه تا جمعه، در همه ساعات شبانه روز پاسخگوی شما هستیم.</p>
        <p class="w-full md:w-1/3 px-4 my-4 md:my-0">شماره تماس: ۰۶۱۵-۲۲۲۳۴۵۶</p>
        <p class="w-full md:w-1/3 px-4 my-4 md:my-0">آدرس ایمیل: info@lusteroxin.ir</p>
      </div>
    </div>
  
    <div class="bg-gray-300 py-6 px-12 font-thin">
      <div class="flex flex-col lg:flex-row my-6">
        <div class="w-full lg:w-1/2 xl:w-2/3 leading-8 text-justify lg:pl-6 mb-6">
          <p class="text-sm lg:text-base">لوسترشاپ به‌عنوان يکی از بروزترين و جامع‌ترين فروشگاه‌های آنلاين لوستر، فعاليت خود را با هدف عرضه کالای ايرانی آغاز نموده است. فروش تخصصی لوسترشاپ در زمينه‌ٔ لوستر، لوازم دکوری و آباژور است. لوسترشاپ با گرد هم آوردن سبد خريدی کامل از بهترين محصولات ايرانی و حمايت از توليد ملی، باعث کاهش هزينهٔ مشتريان خود در امر خريد لوستر شده است. مشتريان می‌توانند به‌جای خريد فيزيکی در بازار و صرف وقت زياد، به‌راحتی در منزل ويترين و محصولات موجود در لوسترشاپ را با مشخصات کامل ببينند، مقايسه کنند و در انتها با اطمينان از شرايط ارسال و تضمين سلامت کالا خريد کنند و از خريد راحت و بی‌دغدغه خود لذت ببرند.</p>
        </div>
        
        <div class="flex flex-col sm:flex-row items-center mr-2 lg:mr-0 w-full lg:w-1/2 xl:w-1/3 justify-center space-y-6 md:space-y-0">
          <img class="block h-44 w-44 md:ml-2" src="{{ asset('img/7.jpg') }}" alt="">
          <img class="block h-44 w-44 md:mr-2" src="{{ asset('img/7.jpg') }}" alt="">
        </div>
      </div>
  
      <div class="border-t border-gray-400 pt-6 text-center text-sm">
        <p class="text-gray-800">استفاده از مطالب فروشگاه اینترنتی لوسترشاپ فقط برای مقاصد تجاری و با ذکر منبع بلامانع است. کلیه حقوق این سایت متعلق به لوسترشاپ می‌باشد.</p>
        <p class="text-gray-600 mt-2 font-medium tracking-wide">Copyright &copy; 2021</p>
      </div>
    </div>
  </footer>
  
  {{-- scripts --}}
  <script src="{{ mix('js/app.js') }}"></script>
  <script src="{{ asset('js/main.js') }}"></script>

  <script>
    $(document).ready(function() {
      $("#menu_button").click(function() {
        $("#menu").toggleClass('hidden');
        var menuIsHidden = $("#menu").hasClass('hidden');

        if (menuIsHidden) {
          var close_path = '<path fill-rule="evenodd" clip-rule="evenodd" d="M0 1C0 0.447715 0.447715 0 1 0H17C17.5523 0 18 0.447715 18 1C18 1.55228 17.5523 2 17 2H1C0.447716 2 0 1.55228 0 1ZM0 7C0 6.44772 0.447715 6 1 6H17C17.5523 6 18 6.44772 18 7C18 7.55228 17.5523 8 17 8H1C0.447716 8 0 7.55228 0 7ZM1 12C0.447715 12 0 12.4477 0 13C0 13.5523 0.447716 14 1 14H17C17.5523 14 18 13.5523 18 13C18 12.4477 17.5523 12 17 12H1Z" />';
          $("#menu_svg").html(close_path);
        } else {
          var menu_path = '<path fill-rule="evenodd" clip-rule="evenodd" d="M12.78 11.36a1 1 0 01-1.42 1.42L6.54 7.95 1.7 12.78a1 1 0 01-1.42-1.42l4.83-4.82L.3 1.7A1 1 0 011.71.29l4.83 4.83L11.36.3a1 1 0 111.42 1.42L7.95 6.54l4.83 4.82z" />';
          $("#menu_svg").html(menu_path);
        }
      })

      $("#search_button").click(function() {
        $("#search_input").toggleClass('hidden');

        var searchIsHidden = $("#search_input").hasClass('hidden');
        
        if (searchIsHidden) {
          var search_path = '<path d="M17.545,15.467l-3.779-3.779c0.57-0.935,0.898-2.035,0.898-3.21c0-3.417-2.961-6.377-6.378-6.377C4.869,2.1,2.1,4.87,2.1,8.287c0,3.416,2.961,6.377,6.377,6.377c1.137,0,2.2-0.309,3.115-0.844l3.799,3.801c0.372,0.371,0.975,0.371,1.346,0l0.943-0.943C18.051,16.307,17.916,15.838,17.545,15.467z M4.004,8.287c0-2.366,1.917-4.283,4.282-4.283c2.366,0,4.474,2.107,4.474,4.474c0,2.365-1.918,4.283-4.283,4.283C6.111,12.76,4.004,10.652,4.004,8.287z"/>';
          $("#search_svg").html(search_path);
        } else {
          var close_path = '<path d="M14.348,14.849c-0.469,0.469-1.229,0.469-1.697,0L10,11.819l-2.651,3.029c-0.469,0.469-1.229,0.469-1.697,0c-0.469-0.469-0.469-1.229,0-1.697l2.758-3.15L5.651,6.849c-0.469-0.469-0.469-1.228,0-1.697c0.469-0.469,1.228-0.469,1.697,0L10,8.183l2.651-3.031c0.469-0.469,1.228-0.469,1.697,0c0.469,0.469,0.469,1.229,0,1.697l-2.758,3.152l2.758,3.15C14.817,13.62,14.817,14.38,14.348,14.849z"/>';
          $("#search_svg").html(close_path);
        }
      })
    })
  </script>

  <script>
    $(document).ready(function() {
      $(document).scroll(function() {
          var scrollPos = $(this).scrollTop();
          $('#banner-text').css({
              'top': (scrollPos / 3) + 'px',
              'opacity': 1 - (scrollPos / 510)
          });
          $('#banner').css({
              'background-position': 'center ' + (-scrollPos / 3) + 'px'
          });
      });

      // remove tag
      $('.message_close').on('click', function(e) {
        $(this).parent().remove()
      })
    });

    $(".change_price").text(function() {
      var element = $(this).eq(0)
      formatElementPrice(element)
    })
  </script>
  
  @yield('bottom_scripts')
</body>
</html>