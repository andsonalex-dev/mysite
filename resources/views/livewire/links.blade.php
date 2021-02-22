<span class="mb-2 font-bold text-white uppercase">Minhas redes sociais</span>
@foreach($links as $link)
@php
    $type = Str::lower($link->type);
@endphp
<span class="my-2">
    <a href="{{$link->url}}" class="text-green-600 hover:text-green-800" >
        <i class="fab fa-@php echo $type; @endphp text-lg"> <span class="text-xl" style="font-family: 'Source Sans Pro', sans-serif; ">{{$link->type}}</span> </i>
    </a>
</span>
@endforeach
