<div class="px-4 pt-4 pb-4 mx-auto mt-2 bg-gray-100 rounded-lg shadow-lg max-w-7xl sm:mt-10 sm:px-6 md:mt-10 lg:mt-10 lg:px-8 xl:mt-10 ">
<div class="flex-wrap mx-auto md:inline-flex sm:inline-flex xl:inline-flex">
    @foreach ($projects as $project)
        <div class="w-full md:w-3/6">
            <div class="w-full bg-gray-100 h-80 " style="background-image:url('{{ asset('storage/'.$project->image) }}'); background-size: cover;">
                <div class="flex items-end w-full h-full" style="background-color:rgba(0,0,0,0.8)">
                    <div class="px-4 py-2">
                        <div class="mb-2 text-sm text-green-400">
                            <p>Projetos</p>
                        </div>
                        <div class="mb-2">
                            <a href="{{ route('showproject', $project->id) }}" class="text-2xl font-semibold leading-tight text-gray-100 hover:text-gray-100">
                                {{ $project->title }}
                            </a>
                        </div>
                        <div class='flex text-sm text-gray-200 '>
                            @php
                                $text = $project->body;
                                $size = strlen($text);
                                $max = 30;

                                if ($size > $max) {
                                    $text = substr($text, 0, $max - $size) . ' ... ';
                                }
                            @endphp
                            <p>@php echo $text; @endphp</p>
                            <div class="pr-3"><span style="margin-left: 0.2rem;"> Saiba mais </span></div>
                            <div>{{$project->url}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
</div>
