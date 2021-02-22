<nav class="fixed top-0 z-10 flex flex-wrap items-center justify-between w-full pt-6 pb-4 pl-6 pr-6" x-data="{ isOpen: false }"
    @keydown.escape="isOpen = false" :class="{ 'shadow-lg bg-gray-900' : isOpen , 'bg-gray-800' : !isOpen}">
    <!--Logo etc-->
    <div class="flex items-center flex-shrink-0 mr-6 text-white">
        <a class="text-white no-underline hover:text-white hover:no-underline" href="/">
            <img class="w-40 sm:w-48 top-1" src="{{asset('images/logo.svg')}}">
        </a>
    </div>

    <!--Toggle button (hidden on large screens)-->
    <button @click="isOpen = !isOpen" type="button"
        class="block px-2 text-gray-500 lg:hidden hover:text-white focus:outline-none focus:text-white"
        :class="{ 'transition transform-180': isOpen }">
        <svg class="w-6 h-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path x-show="isOpen" fill-rule="evenodd" clip-rule="evenodd"
                d="M18.278 16.864a1 1 0 0 1-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 0 1-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 0 1 1.414-1.414l4.829 4.828 4.828-4.828a1 1 0 1 1 1.414 1.414l-4.828 4.829 4.828 4.828z" />
            <path x-show="!isOpen" fill-rule="evenodd"
                d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z" />
        </svg>
    </button>

    <!--Menu-->
    <div class="flex-grow w-full lg:flex lg:items-center lg:w-auto"
        :class="{ 'block shadow-3xl': isOpen, 'hidden': !isOpen }" @click.away="isOpen = false"
        x-show.transition="true">
        <ul class="items-center justify-end flex-1 pt-6 lg:pt-0 list-reset lg:flex">
            <li class="mr-3">
                <a class="inline-block px-4 py-2 text-white no-underline" href="/" @click="isOpen = false">Home
                </a>
            </li>
            <li class="mr-3">
                <a class="inline-block px-4 py-2 text-gray-600 no-underline hover:text-gray-200 hover:text-underline"
                    href="{{ route('biograph') }}" @click="isOpen = false">Biográfia

                </a>
            </li>
            <li class="mr-3">
                <a class="inline-block px-4 py-2 text-gray-600 no-underline hover:text-gray-200 hover:text-underline"
                    href="{{ route('portfolio')}}" @click="isOpen = false">Portfólio
                </a>
            </li>
            <li class="mr-3">
                <a class="inline-block px-4 py-2 text-gray-600 no-underline hover:text-gray-200 hover:text-underline"
                    href="{{ route('socialmedia')}}" @click="isOpen = false">Social Media
                </a>
            </li>
        </ul>
    </div>
</nav>
