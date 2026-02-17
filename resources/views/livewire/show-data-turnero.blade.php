<main class="flex-grow container mx-auto p-4 sm:p-6 lg:p-8">
  <div class="flex flex-col lg:flex-row lg:gap-8 h-full">


    <livewire:container-carrusel-turner />   

    <div class="relative w-px h-auto lg:h-full lg:w-auto lg:min-h-full my-8 lg:my-0 flex items-center justify-center">
      <div class="absolute inset-x-0 h-full w-0.5 bg-gradient-to-t from-transparent via-black/10 dark:via-white/10 to-transparent lg:inset-y-0 lg:w-full lg:h-0.5 lg:bg-gradient-to-r"></div>
    </div>
    <div class="w-full lg:w-1/3 flex flex-col mt-8 lg:ml-8">
      <!-- <h2 class="text-5xl font-black text-black dark:text-white mb-8 text-center drop-shadow-lg animate-fade-in-down">Proximas Partidas</h2> -->



      <div class="relative w-full bg-white dark:bg-background-dark/40 rounded-3xl shadow-2xl border-b-8 border-[#f59e0b] overflow-hidden flex flex-col items-center p-8 cursor-pointer group transition-transform duration-500 hover:scale-[1.01]">

        <!-- Halo de pulso (animación tipo radar) -->
        <div class="absolute inset-0 flex items-center justify-center">
          <div class="relative w-full h-full flex items-center justify-center">
            <span class="absolute w-full h-full bg-[#f59e0b]/20 rounded-full pulse-ring"></span>
            <span class="absolute w-full h-full bg-[#f59e0b]/10 rounded-full pulse-ring delay-200"></span>
          </div>
        </div>

        <!-- Capa sutil al pasar el cursor -->
        <div class="absolute inset-0 bg-[#f59e0b]/10 dark:bg-[#f59e0b]/5 opacity-0 group-hover:opacity-20 transition-opacity duration-300"></div>

        <!-- Contenido principal -->
        @if($proximaPartida)

        <div class="relative z-10 flex flex-col items-center text-center" wire:poll.3s="loadGamesTurner">
          <p class="text-3xl font-extrabold text-black dark:text-white mb-4">
            PRÓXIMA PARTIDA
          </p>

          <div class="flex justify-center items-center gap-8 mt-2">

            <!-- Player 1 -->
            <div class="flex flex-col items-center">
              <div class="w-24 h-24 rounded-full bg-gray-300 dark:bg-gray-700 overflow-hidden border-4 border-[#f59e0b] shadow-xl">
                <img
                  alt="Jugador 1"
                  class="w-full h-full object-cover"
                  src="https://lh3.googleusercontent.com/aida-public/AB6AXuDVI4QE1KPGuqrr0KYddsu0TAdjI9VcRd-tXRKAkYWtDVfSVHerhoErblhQ-uxlX59vYczG2yovTAPzdJ6anCf8GGG77ZNuRll2GvgY8ilIlq7AZSF2VeTmefTf9QcGrvJxs02WVysaNnSISzHFPKXCpOlm5VUAvDqcyXCNeBJqdUIq8DrYwErsypVmagU_OcbV8u7JR5ZU9KWBVftj339I_QzYN93sDiwlln4T4a7LI5wZeycMiD82281i1VEgCh1aG8hDi_4-eKI" />
              </div>
              <p class="text-xl font-semibold text-black dark:text-white mt-3">
                {{ $proximaPartida->player1->name_player }}
              </p>
            </div>

            <span class="text-6xl font-black text-[#f59e0b]">
              VS
            </span>

            <!-- Player 2 -->
            <div class="flex flex-col items-center">
              <div class="w-24 h-24 rounded-full bg-gray-300 dark:bg-gray-700 overflow-hidden border-4 border-[#f59e0b] shadow-xl">
                <img
                  alt="Jugador 2"
                  class="w-full h-full object-cover"
                  src="https://lh3.googleusercontent.com/aida-public/AB6AXuBNhZNrxWIsQ7KvWJ1y_5HawixJG1fcsTv_QyyOGREbhigqOu7e0YV_1lRGnCzA8ADDzgnkwgVcp3R66qF7YW-x5nI3bcMeR9IBii32hkfCJAGQu0EAyGG5_lOHr7OzpTY8nMUUDAVK5w3GELzjoIc6-WhpqP6sdySodhBEPQz3qCJRT3ptbL3SItwU8-j3bKT4Ut8xAi2tRvMt-BhsDjrOYeGwidecWpGBHzkyPIpapzUXycfaBKZV9xb0qPJfEaLEpLfco26-0Pg" />
              </div>
              <p class="text-xl font-semibold text-black dark:text-white mt-3">
                {{ $proximaPartida->player2->name_player }}
              </p>
            </div>

          </div>

          <p class="text-lg font-medium text-gray-700 dark:text-gray-300 mt-2">
            Grupo: {{ $proximaPartida->id_grupo }}
          </p>
        </div>

        @else

        <div class="text-center py-10">
          <p class="text-2xl font-bold text-gray-500">
            No hay partidas en cola
          </p>
        </div>

        @endif

      </div>

      <style>
        @keyframes pulse-ring {
          0% {
            transform: scale(0.9);
            opacity: 0.8;
          }

          50% {
            transform: scale(1.1);
            opacity: 0.5;
          }

          100% {
            transform: scale(0.9);
            opacity: 0.8;
          }
        }

        .pulse-ring {
          animation: pulse-ring 2s ease-in-out infinite;
        }

        .delay-200 {
          animation-delay: 1s;
        }
      </style>




      <div class="flex flex-col gap-3 mt-8 overflow-y-auto max-h-[300px] lg:max-h-[unset] custom-scrollbar" wire:poll.3s="loadGamesTurner">

        <h3 class="text-xl font-bold text-gray-700  text-center dark:text-gray-300">Siguientes partidas</h3>
        @foreach($siguientesPartidas as $partida)
        <div class="relative w-full bg-white dark:bg-background-dark/40 rounded-2xl shadow-xl p-6 flex flex-col items-center justify-center transform transition-all duration-200 hover:scale-[1.02] active:scale-[0.98] cursor-grab border border-primary/20 dark:border-primary/30 z-10 group" draggable="true">
          <div class="absolute top-4 left-4 text-xs font-bold text-gray-500 dark:text-gray-400">#{{ $loop->iteration }}</div>
          <h3 class="text-lg font-black text-black dark:text-white text-center">{{ $partida->player1->name_player }} <span class="text-primary">vs</span> {{ $partida->player2->name_player }}</h3>
          <div class="absolute top-4 right-4 flex gap-2 opacity-0 group-hover:opacity-100 transition-opacity duration-200">
            <button class="p-2 rounded-full text-black/60 dark:text-white/60 hover:bg-black/10 dark:hover:bg-white/10">
              <span class="material-symbols-outlined text-xl">arrow_upward</span>
            </button>
            <button class="p-2 rounded-full text-black/60 dark:text-white/60 hover:bg-black/10 dark:hover:bg-white/10">
              <span class="material-symbols-outlined text-xl">arrow_downward</span>
            </button>
          </div>
        </div>
        @endforeach


      </div>
    </div>
  </div>
</main>