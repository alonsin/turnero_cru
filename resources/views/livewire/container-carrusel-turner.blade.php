 <div class="w-full lg:flex-grow lg:w-2/3 flex flex-col">
     <h1 class="text-7xl font-black text-white dark:text-white mb-8 text-center drop-shadow-lg animate-fade-in-down">Copa Longoni 2026</h1>
     <h4 class="text-3xl font-black text-white dark:text-white mb-8 text-center drop-shadow-lg animate-fade-in-down">
         Partidas en Juego
     </h4>

     <!-- CONTENEDOR DEL CARRUSEL -->
     <div id="carousel-partidas" class="relative h-[1060px] overflow-hidden rounded-3xl" wire:poll.55s="loadGamesTurner">
         <div id="carousel-inner" class="flex flex-col transition-transform duration-700 ease-in-out">

             @forelse ($turneroEncurso as $t)
             <!-- PARTIDA 1 -->
             <div class="w-full bg-white mt-5 dark:bg-background-dark/50 rounded-3xl shadow-2xl border-b-8 border-blue-500 overflow-hidden flex flex-col lg:flex-row items-center p-8">
                 <!-- Info Mesa -->
                 <div class="flex flex-col items-center lg:items-start lg:w-1/4 text-center lg:text-left mb-6 lg:mb-0">
                     <p class="text-2xl font-bold text-black dark:text-white">{{$t->mesa->name}}</p>
                     <p class="text-xl font-medium text-black/70 dark:text-white/70">Grupo: {{$t->id_grupo}}</p>
                 </div>

                 <!-- Jugadores -->
                 <div class="flex items-center justify-center gap-8 lg:w-1/2">
                     <div class="flex flex-col items-center">
                         <div class="w-24 h-24 rounded-full overflow-hidden border-4 border-blue-500 shadow-xl">
                             <img alt="Ana" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDVI4QE1KPGuqrr0KYddsu0TAdjI9VcRd-tXRKAkYWtDVfSVHerhoErblhQ-uxlX59vYczG2yovTAPzdJ6anCf8GGG77ZNuRll2GvgY8ilIlq7AZSF2VeTmefTf9QcGrvJxs02WVysaNnSISzHFPKXCpOlm5VUAvDqcyXCNeBJqdUIq8DrYwErsypVmagU_OcbV8u7JR5ZU9KWBVftj339I_QzYN93sDiwlln4T4a7LI5wZeycMiD82281i1VEgCh1aG8hDi_4-eKI" class="object-cover w-full h-full">
                         </div>
                         <p class="text-lg font-semibold text-black dark:text-white mt-3">{{$t->player1->name_player}}</p>
                     </div>

                     <span class="text-6xl font-black text-blue-500">VS</span>

                     <div class="flex flex-col items-center">
                         <div class="w-24 h-24 rounded-full overflow-hidden border-4 border-blue-500 shadow-xl">
                             <img alt="Carlos" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBNhZNrxWIsQ7KvWJ1y_5HawixJG1fcsTv_QyyOGREbhigqOu7e0YV_1lRGnCzA8ADDzgnkwgVcp3R66qF7YW-x5nI3bcMeR9IBii32hkfCJAGQu0EAyGG5_lOHr7OzpTY8nMUUDAVK5w3GELzjoIc6-WhpqP6sdySodhBEPQz3qCJRT3ptbL3SItwU8-j3bKT4Ut8xAi2tRvMt-BhsDjrOYeGwidecWpGBHzkyPIpapzUXycfaBKZV9xb0qPJfEaLEpLfco26-0Pg" class="object-cover w-full h-full">
                         </div>
                         <p class="text-lg font-semibold text-black dark:text-white mt-3">{{$t->player2->name_player}}</p>
                     </div>
                 </div>

                 <!-- Cronómetro -->
                 <div class="lg:w-1/4 text-right">
                     <p class="text-xl font-medium text-blue-600 dark:text-green-400">{{$t->estatus->name_estatus}}</p>
                 </div>
             </div>
             @empty
             <tr>
             </tr>
             @endforelse
         </div>
     </div>
     <script>
         // JS simple para rotar las partidas
         const carouselInner = document.getElementById('carousel-inner');
         const partidas = carouselInner.children;
         let index = 0;

         setInterval(() => {
             index = (index + 1) % partidas.length;
             const offset = -index * partidas[0].offsetHeight;
             carouselInner.style.transform = `translateY(${offset}px)`;
         }, 5000); // cada 5 segundos rota automáticamente
     </script>
 </div>