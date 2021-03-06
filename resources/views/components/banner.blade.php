<div class="px-4 pt-4 pb-4 mx-auto mt-20 max-w-7xl sm:mt-20 sm:px-6 md:mt-20 lg:mt-20 lg:px-8 xl:mt-20 ">
    <div class="sm:text-center lg:text-left">
        <h1 class="font-sans text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-6xl" style="font-family: 'Source Sans Pro', sans-serif;">
            @php
            $name = explode(" ",$bio->name);
        @endphp
            <span class="block text-white xl:inline">@php echo($name[0]); @endphp</span>
            <span class="block xl:inline">@php echo($name[1]." ".$name[2]." ".$name[3]); @endphp</span>
        </h1>
        <p
            class="mt-3 text-base text-white sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
            Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat
            commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.
        </p>
        <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
            <div class="rounded-md shadow">
                <a href="#"
                    class="flex items-center justify-center w-full px-8 py-3 text-base font-medium text-white bg-green-600 border border-transparent rounded-md hover:bg-green-800 md:py-4 md:text-lg md:px-10">
                    Get started
                </a>
            </div>
            <div class="mt-3 sm:mt-0 sm:ml-3">
                <a href="#"
                    class="flex items-center justify-center w-full px-8 py-3 text-base font-medium text-green-700 bg-indigo-100 border border-transparent rounded-md hover:bg-indigo-200 md:py-4 md:text-lg md:px-10">
                    Live demo
                </a>
            </div>
        </div>
    </div>
</div>
