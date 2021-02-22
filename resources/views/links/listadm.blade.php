<div class="flex flex-col p-2 ml-5 mr-5">
    <h3>Listagem de Habilidades</h3>
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
            <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col"
                                class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                Titulo
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                Nota
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                Editar
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($skills as $skill)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <p>{{ $skill->title }}</p>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center mt-1">
                                        <div class="w-1/5 tracking-tighter text-indigo-500 ">
                                            <span>{{ $skill->rating }}</span>
                                        </div>
                                        <div class="w-3/5">
                                            <div class="w-full h-2 bg-gray-300 rounded-lg">
                                        @switch($skill->rating)
                                            @case(1)
                                            <div class="w-2/12 h-2 bg-indigo-600 rounded-lg "></div>
                                            @break
                                            @case(2)
                                            <div class="w-4/12 h-2 bg-indigo-600 rounded-lg "></div>
                                            @break
                                            @case(3)
                                            <div class="w-6/12 h-2 bg-indigo-600 rounded-lg "></div>
                                            @break
                                            @case(4)
                                            <div class="w-8/12 h-2 bg-indigo-600 rounded-lg "></div>
                                            @break
                                            @case(5)
                                            <div class="h-2 bg-indigo-600 rounded-lg w-12/12 "></div>
                                            @break
                                            @default
                                            <div class="h-2 bg-indigo-600 rounded-lg w-12/12 "></div>
                                        @endswitch
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Editar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $skills->links() }}
            </div>
        </div>
    </div>
</div>





