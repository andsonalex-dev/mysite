@extends('layout.layoutfront')
@section('content')
    <!-- component -->
    <div
        class="px-4 pt-4 pb-4 mx-auto bg-gray-100 rounded-lg shadow-lg mt-28 max-w-7xl sm:mt-10 sm:px-6 md:mt-28 lg:mt-28 lg:px-8 xl:mt-28 ">
        <div class="flex flex-wrap items-center mt-2 md">
            <!-- CONTAINER -->
                <div class="p-2 mb-4 mr-3 bg-gray-300 rounded shadow-md w-80 flex-no-shrink">
                    <div class="flex justify-between py-1">
                        <h3 class="text-base"><i class="fab fa-github"></i>  Conheça o meu GitHub </h3>
                    </div>
                    <div class="mt-2 text-sm">
                        @foreach ($responseBody as $response)
                            <div class="p-2 mt-1 text-white bg-gray-800 border-b rounded cursor-pointer border-grey hover:bg-grey-lighter">
                                <a href="{{ $response->html_url }}"> <span class="font-bold">Título: {{ $response->name }}</span></a>
                                 <span class="font-medium"> -- {{ $response->description }}</span>
                                <span class="font-bold"> Linguagem:  {{ $response->language }} </span>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="w-2/3 p-2 ml-4 mr-3 bg-gray-300 rounded shadow-md flex-no-shrink">
                    <div class="flex justify-between py-1">
                        <h3 class="text-base"><i class="fab fa-instagram"></i> Mídias</h3>
                    </div>
                    <div class="mt-2 text-sm">

                    </div>
                </div>


            <!-- FIM DO CONTAINER -->
        </div>
    </div>
    <div class="clear-both m-20 sm:m-10"></div>

@endsection
