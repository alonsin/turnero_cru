<div class="w-full min-h-screen px-0 md:px-8 py-0 md:py-6">

    <!-- Contenedor principal -->
    <div class="w-full md:max-w-7xl md:mx-auto">

        <!-- Contenido dinámico -->
        <div class="animate-fade-in">
            @if ($section === 'juegos')
                <livewire:juegos />
            @elseif ($section === 'jugadores')
                @include('livewire.sections.jugadores')
            @endif
        </div>

    </div>

</div>
