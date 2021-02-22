@extends('layout.layoutfront')
@section('content')
<!-- component -->
<div class="px-4 pt-4 pb-4 mx-auto bg-gray-100 rounded-lg shadow-lg mt-28 max-w-7xl sm:mt-10 sm:px-6 md:mt-28 lg:mt-28 lg:px-8 xl:mt-28 ">
<div class="flex flex-wrap items-center mt-2 md">
    <div class="w-full bg-white md:w-1/2">
      <div class="mx-2">
        <h1 class="mt-16 text-6xl font-bold">{{$bio->name}}</h1>
        <!-- description -->
        <div
          class="w-full mt-16 text-gray-500 text-md description sm: md:w-2/3"
        >{!!$bio->about!!}
        </div>
        <div class="flex mt-16 font-light text-gray-500">
            <div class="pr-4">
              <span class="uppercase">TEL</span>
              <p class="pt-2 text-2xl font-semibold text-gray-900">{{$bio->phone}}</p>
            </div>
            <div class="pr-4">
              <span class="uppercase">EMAIL</span>
              <p class="pt-2 text-2xl font-semibold text-gray-900">{{$bio->email}}</p>
            </div>
          </div>
      </div>
    </div>
    <div class="w-full h-screen bg-red-600 md:w-1/2">

      <img
        src="https://source.unsplash.com/7H77FWkK_x4/1600x900"
        class="w-full h-screen"
        alt=""
      />
    </div>
  </div>
</div>
<div class="clear-both m-20 sm:m-10"></div>
  @endsection
