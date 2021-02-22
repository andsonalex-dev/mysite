@extends('layout.layoutfront')
@section('content')
<!-- component -->
<div class="px-4 pt-4 pb-4 mx-auto bg-gray-100 rounded-lg shadow-lg mt-28 max-w-7xl sm:mt-10 sm:px-6 md:mt-28 lg:mt-28 lg:px-8 xl:mt-28 ">
<div class="flex flex-wrap mt-2 md">
    <div class="w-full bg-white">
      <div class="mx-2">
        <h1 class="mt-16 text-6xl font-bold">{{$project->title}}</h1>
        <!-- description -->
        <div
          class="w-full mt-16 text-lg text-gray-500 description "
        >
        {!!$project->body!!}
        </div>

      </div>
    </div>
  </div>
</div>
<div class="clear-both m-20 sm:m-10"></div>
  @endsection
