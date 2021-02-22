<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <div>
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1">
                <div class="px-4 mt-5 ml-3 sm:px-0">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Biografia</h3>
                    <p class="mt-1 text-sm text-gray-600">
                        Espaço para biografia
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
                                <span class="text-gray-700">Nome completo</span>
                                <input type="text" wire:model="name"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                    placeholder="Nome">
                            </label>
                            <div class="error-message">
                                @error('name')
                                    {{ $message }}
                                @enderror
                            </div>
                            <div class="grid grid-cols-3 gap-6">
                                <div class="col-span-3 sm:col-span-2">
                                    <label for="email" class="block text-sm font-medium text-gray-700">
                                        Email
                                    </label>
                                    <div class="flex mt-1 rounded-md shadow-sm">
                                        <span
                                            class="inline-flex items-center px-3 text-sm text-gray-500 border border-r-0 border-gray-300 rounded-l-md bg-gray-50">
                                            Email
                                        </span>
                                        <input type="text" wire:model="email" id="email"
                                            class="flex-1 block w-full border-gray-300 rounded-none focus:ring-indigo-500 focus:border-indigo-500 rounded-r-md sm:text-sm">
                                    </div>
                                </div>
                            </div>
                            <div class="error-message">
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </div>
                            <div class="grid grid-cols-3 gap-6">
                                <div class="col-span-3 sm:col-span-2">
                                    <label for="phone" class="block text-sm font-medium text-gray-700">
                                        Telefone
                                    </label>
                                    <div class="flex mt-1 rounded-md shadow-sm">
                                        <span
                                            class="inline-flex items-center px-3 text-sm text-gray-500 border border-r-0 border-gray-300 rounded-l-md bg-gray-50">
                                            Telefone
                                        </span>
                                        <input type="text" wire:model="phone" id="phone"
                                            class="flex-1 block w-full border-gray-300 rounded-none focus:ring-indigo-500 focus:border-indigo-500 rounded-r-md sm:text-sm">
                                    </div>
                                </div>
                            </div>
                            <div class="error-message">
                                @error('phone')
                                    {{ $message }}
                                @enderror
                            </div>

                            <div wire:ignore>
                                <label for="about" class="block text-sm font-medium text-gray-700">
                                    Sobre:
                                </label>
                                <div class="mt-1">
                                    <textarea id="about" wire:model="about" wire:key="about" rows="20" class="about "
                                        x-data x-ref="page_text" x-init="
                                            tinymce.init({
                                                path_absolute: '/',
                                                selector: 'textarea.about',
                                                plugins: [
                                                     'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                                                      'searchreplace wordcount visualblocks visualchars code fullscreen ',
                                                      'insertdatetime media nonbreaking save table directionality',
                                                      'emoticons template paste textpattern  imagetools help  '
                                                       ],
                                                        toolbar: 'insertfile undo redo | styleselect | bold italic forecolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media | help ',
                                                        relative_urls: false,
                                                        remove_script_host : false,
                                                        document_base_url: '{{ config('app.url') }}/',
                                                        language: 'pt_BR',
                                                        setup: function (editor) {
                                                                editor.on('init change', function () {
                                                                          editor.save();
                                                                  });
                                                       editor.on('change', function (e) {
                                                                @this.set('about', editor.getContent());
                                                         });
                                                          },
                                                          });
                                                         "></textarea>
                                </div>
                            </div>
                            <div class="error-message">
                                @error('about')
                                    {{ $message }}
                                @enderror
                            </div>
                            <div class="px-4 py-3 text-right bg-gray-50 sm:px-6">
                                <button type="submit"
                                    class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Salvar
                                </button>
                            </div>
                        </div>
                </form>
                <div>

                </div>
            </div>
        </div>
    </div>
</div>

<script>
    /* tinymce.init({
        selector: 'textarea.about',
        height: (window.innerHeight - 300),
        width: 700,
        forced_root_block: true,
        language: "pt_BR",
        plugins: [
            'advlist autolink link image lists print preview hr searchreplace wordcount fullscreen insertdatetime media save table paste emoticons'
        ],
     });*/

</script>
