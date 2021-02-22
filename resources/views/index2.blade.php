@extends('layout.layoutfront')

@section('content')
<section id="banner" class="major">
    <div class="inner">
        <header class="major">
            <h1 class="text-4xl font-extrabold tracking-tight sm:text-5xl md:text-6xl">
                @php
                    $name = explode(" ",$bio->name);
                @endphp
                Olá, me chamo @php echo($name[0]); @endphp
              </h1>
        </header>
        <div class="content">
            <h3>Amante de PHP, sigo cada dia mais buscando conhecimento me tornando cada vez mais capacitado para encarar os desafios atuais e futuros.</h3>
        </div>
    </div>
</section>

<!-- Main -->
<div id="main">

    <!-- Jobs -->
        <section id="one" class="tiles">
            @livewire('show-project-front')
        </section>

    <!-- Skills -->
        <section id="two">
            <div class="inner">
                <header class="major">
                    <h2>Habilidades</h2>
                </header>
                @livewire('show-skills')
            </div>
        </section>
        <!-- Contact Form -->
        @component('components.contactform')
        @endcomponent

</div>
@endsection
