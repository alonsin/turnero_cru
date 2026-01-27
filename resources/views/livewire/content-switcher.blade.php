<div class="w-full min-h-screen px-0 sm:px-0 md:px-8 py-0 md:py-6">

    <!-- Contenedor principal -->
    <div
        class="
            w-full
            bg-white
            md:max-w-6xl md:mx-auto
            md:rounded-2xl
            md:shadow-lg
            p-0 md:p-6
        ">

        <!-- Tabs -->
        <div class="flex gap-2 sm:gap-4 mb-6 px-0 md:px-0 pt-4 md:pt-0">
            <button
                wire:click="showJuegos"
                class="flex-1 px-4 py-2 rounded-xl font-semibold transition-all duration-300
    {{ $section === 'juegos'
        ? 'bg-emerald-500 text-white shadow-md hover:bg-emerald-600'
        : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }}">

                🎮 Juegos
            </button>

            <button
                wire:click="showJugadores"
                class="flex-1 px-4 py-2 rounded-xl font-semibold transition-all duration-300
    {{ $section === 'jugadores'
        ? 'bg-emerald-500 text-white shadow-md hover:bg-emerald-600'
        : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }}">

                👤 Jugadores
            </button>

        </div>

        <!-- Contenido dinámico -->
        <div class="animate-fade-in">
            @if ($section === 'juegos')
            @include('livewire.sections.juegos')
            @elseif ($section === 'jugadores')
            @include('livewire.sections.jugadores')
            @endif
        </div>

    </div>
</div>