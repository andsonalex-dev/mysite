<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
      <div>
        <div class="md:grid md:grid-cols-3 md:gap-6">
          <div class="md:col-span-1">
            <div class="px-4 mt-5 ml-3 sm:px-0">
              <h3 class="text-lg font-medium leading-6 text-gray-900">Editar Projeto</h3>
              <p class="mt-1 text-sm text-gray-600">
                Edite o projeto.
              </p>
            </div>
            @if (session()->has('message'))
            <div class="flex items-center px-4 py-3 ml-5 text-sm font-bold text-white bg-blue-500" role="alert">
                <svg class="w-4 h-4 mr-2 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
                <p class="text-sm">{{ session('message') }}</p>
              </div>
            @endif
          </div>
          <div class="mt-5 md:mt-0 md:col-span-2">
            <form wire:submit.prevent="create" method="POST"  enctype="multipart/form-data">
              <div class="shadow sm:rounded-md sm:overflow-hidden">
                <div class="px-4 py-5 space-y-6 bg-white sm:p-6">
                    <input type="hidden" wire:model="selected_id">
                    <label class="block">
                        <span class="text-gray-700">Nome do Projeto</span>
                        <input type="text" wire:model="title" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="titulo" >
                      </label>
                      <div class="error-message">
                          @error('title')
                            {{$message}}
                          @enderror
                      </div>
                  <div class="grid grid-cols-3 gap-6">
                    <div class="col-span-3 sm:col-span-2">
                      <label for="company_website" class="block text-sm font-medium text-gray-700">
                        Url do Projeto
                      </label>
                      <div class="flex mt-1 rounded-md shadow-sm">
                        <span class="inline-flex items-center px-3 text-sm text-gray-500 border border-r-0 border-gray-300 rounded-l-md bg-gray-50">
                          http://
                        </span>
                        <input type="text" wire:model="url" id="company_website" class="flex-1 block w-full border-gray-300 rounded-none focus:ring-indigo-500 focus:border-indigo-500 rounded-r-md sm:text-sm" placeholder="www.example.com">
                      </div>
                    </div>
                  </div>
                  <div class="error-message">
                    @error('url')
                      {{$message}}
                    @enderror
                </div>

                  <div wire:ignore>
                    <label for="body" class="block text-sm font-medium text-gray-700">
                      Descrição
                    </label>
                    <div class="mt-1">
                        <textarea id="body" wire:model="body" wire:key="body" rows="20" class="body "
                        x-data x-ref="page_text" x-init="
                            tinymce.init({
                                path_absolute: '/',
                                selector: 'textarea.body',
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
                                                @this.set('body', editor.getContent());
                                         });
                                          },
                                          });
                                         "></textarea>

                    </div>
                    <p class="mt-2 text-sm text-gray-500">
                     Descrição do Projeto
                    </p>
                  </div>
                  <div class="error-message">
                    @error('body')
                      {{$message}}
                    @enderror
                </div>
                  <div>
                    <label class="block text-sm font-medium text-gray-700">
                      Imagem
                    </label>
                    <div class="flex justify-center px-6 pt-5 pb-6 mt-2 border-2 border-gray-300 border-dashed rounded-md">
                      <div class="space-y-1 text-center">
                        <svg class="w-12 h-12 mx-auto text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                          <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <div class="flex text-sm text-gray-600">
                          <label for="file-upload" class="relative font-medium text-indigo-600 bg-white rounded-md cursor-pointer hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                            <span>Upload de arquivo</span>
                            <input id="file-upload" wire:model="image" type="file" class="sr-only">
                          </label>
                          <p class="pl-1">ou pegue e solte</p>
                        </div>
                        <p class="text-xs text-gray-500">
                          PNG, JPG, GIF up to 10MB
                        </p>
                      </div>
                    </div>
                    <div class="error-message">
                        @error('body')
                          {{$message}}
                        @enderror
                    </div>
                  </div>
                </div>
                <div class="px-4 py-3 text-right bg-gray-50 sm:px-6">
                  <button wire:click="update()" class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Atualizar
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



