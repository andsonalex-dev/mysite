<div class="px-4 pt-4 pb-4 mx-auto mt-10 bg-gray-100 rounded-lg shadow-lg max-w-7xl sm:mt-10 sm:px-6 md:mt-10 lg:mt-10 lg:px-8 xl:mt-10 ">
    <div class="sm:text-center lg:text-left">

    <h2 class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-6xl">Habilidades</h2>
        @foreach ($skills as $skill)
            <div class="relative pt-1">
                <div class="flex items-center justify-between mb-2">
                    <div>
                        <span
                            class="inline-block px-2 py-1 text-xs font-semibold text-green-600 uppercase bg-green-200 rounded-md">
                            {{ $skill->title }}
                        </span>
                    </div>
                    <div class="text-right">
                        <span class="inline-block text-xs font-semibold text-green-600">
                            {{ $skill->rating }}0%
                        </span>
                    </div>
                </div>
                <div class="flex h-2 mb-4 overflow-hidden text-xs bg-green-200 rounded">
                    <div style="width:{{ $skill->rating }}0%"
                        class="flex flex-col justify-center text-center text-white bg-green-500 shadow-none whitespace-nowrap">
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</div>
