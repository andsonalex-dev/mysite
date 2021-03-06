{{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
<div>
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
            <div class="px-4 mt-5 ml-3 sm:px-0">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Novo Habilidade</h3>
                <p class="mt-1 text-sm text-gray-600">
                    Atribua suas habilidades e notas
                </p>
            </div>
            @if (session()->has('message'))
                <div class="flex items-center px-4 py-3 ml-5 text-sm font-bold text-white bg-blue-500" role="alert">
                    <svg class="w-4 h-4 mr-2 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path
                            d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z" />
                    </svg>
                    <p class="text-sm">{{ session('message') }}</p>
                </div>
            @endif
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form wire:submit.prevent="create" method="POST">
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="px-4 py-5 space-y-6 bg-white sm:p-6">
                        <label class="block">
                            <span class="text-gray-700">Título: </span>
                            <input type="text" wire:model="title"
                                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                placeholder="titulo">
                        </label>
                        <div class="error-message">
                            @error('title')
                                {{ $message }}
                            @enderror
                        </div>
                        <label class="block">
                            <span class="text-gray-700">Nota: </span>
                            <input type="text" wire:model="rating"
                                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                placeholder="Nota">
                        </label>
                        <div class="error-message">
                            @error('rating')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="px-4 py-3 text-right bg-gray-50 sm:px-6">
                        <button type="submit"
                            class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Salvar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- review item -->
