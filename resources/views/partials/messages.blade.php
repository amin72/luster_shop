@if ($message = Session::get('success'))
  @php
    Session::forget('success')
  @endphp
  <div class="flex items-center justify-between bg-green-300 rounded py-3 px-4 mb-10">
    <strong class="text-green-900 tracking-wider">{{ $message }}</strong>
    <button type="button" class="message_close text-right focus:outline-none font-bold">×</button>
  </div>
@endif

@if ($message = Session::get('info'))
  @php
    Session::forget('info')
  @endphp
  <div class="flex items-center justify-between bg-blue-300 rounded py-3 px-4 mb-10">
      <strong class="text-blue-900 tracking-wider">{{ $message }}</strong>
    <button type="button" class="message_close text-right focus:outline-none font-bold">×</button>
  </div>
@endif

@if ($message = Session::get('warning'))
  @php
    Session::forget('warning')
  @endphp
  <div class="flex items-center justify-between bg-yellow-300 rounded py-3 px-4 mb-10">
    <strong class="text-yellow-900 tracking-wider">{{ $message }}</strong>
    <button type="button" class="message_close text-right focus:outline-none font-bold">×</button>
  </div>
@endif

@if ($message = Session::get('error'))
  @php
    Session::forget('error')
  @endphp
  <div class="flex items-center justify-between bg-red-300 rounded py-3 px-4 mb-10">
    <strong class="text-red-900 tracking-wider">{{ $message }}</strong>
    <button type="button" class="message_close text-right focus:outline-none font-bold">×</button>
  </div>
@endif

{{-- @if (count($errors) > 0)
  <div class="mx-auto w-full mb-6">
    <h2 class="font-semibold text-lg">خطاهای زیر پیش آمده اند:</h2>
    <ul class="mt-3 list-disc list-inside text-red-600">
      @foreach ($errors->all() as $error)
        <li class="my-1">{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif --}}