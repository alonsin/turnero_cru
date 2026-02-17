<main class="flex-grow container mx-auto p-4 sm:p-6 lg:p-8">
      <div class="flex flex-col lg:flex-row lg:gap-8 h-full">
           
       


        <!--  -->
        <div class="w-full lg:flex-grow lg:w-2/3 flex flex-col">
          <h2 class="text-5xl font-black text-black dark:text-white mb-8 text-center drop-shadow-lg animate-fade-in-down">
            Partidas en Juego
          </h2>

          <!-- CONTENEDOR DEL CARRUSEL -->
          <div id="carousel-partidas" class="relative h-[1060px] overflow-hidden rounded-3xl">

            <!-- LISTA DE PARTIDAS -->
            <div id="carousel-inner" class="flex flex-col transition-transform duration-700 ease-in-out">

              <!-- PARTIDA 1 -->
              <div class="w-full bg-white dark:bg-background-dark/50 rounded-3xl shadow-2xl border-b-8 border-green-500 overflow-hidden flex flex-col lg:flex-row items-center p-8">
                <!-- Info Mesa -->
                <div class="flex flex-col items-center lg:items-start lg:w-1/4 text-center lg:text-left mb-6 lg:mb-0">
                  <p class="text-2xl font-bold text-black dark:text-white">Mesa: 1</p>
                  <p class="text-xl font-medium text-black/70 dark:text-white/70">Grupo: A</p>
                </div>

                <!-- Jugadores -->
                <div class="flex items-center justify-center gap-8 lg:w-1/2">
                  <div class="flex flex-col items-center">
                    <div class="w-24 h-24 rounded-full overflow-hidden border-4 border-green-500 shadow-xl">
                      <img alt="Ana" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDVI4QE1KPGuqrr0KYddsu0TAdjI9VcRd-tXRKAkYWtDVfSVHerhoErblhQ-uxlX59vYczG2yovTAPzdJ6anCf8GGG77ZNuRll2GvgY8ilIlq7AZSF2VeTmefTf9QcGrvJxs02WVysaNnSISzHFPKXCpOlm5VUAvDqcyXCNeBJqdUIq8DrYwErsypVmagU_OcbV8u7JR5ZU9KWBVftj339I_QzYN93sDiwlln4T4a7LI5wZeycMiD82281i1VEgCh1aG8hDi_4-eKI" class="object-cover w-full h-full">
                    </div>
                    <p class="text-xl font-semibold text-black dark:text-white mt-3">Ana</p>
                  </div>

                  <span class="text-6xl font-black text-green-500">VS</span>

                  <div class="flex flex-col items-center">
                    <div class="w-24 h-24 rounded-full overflow-hidden border-4 border-green-500 shadow-xl">
                      <img alt="Carlos" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBNhZNrxWIsQ7KvWJ1y_5HawixJG1fcsTv_QyyOGREbhigqOu7e0YV_1lRGnCzA8ADDzgnkwgVcp3R66qF7YW-x5nI3bcMeR9IBii32hkfCJAGQu0EAyGG5_lOHr7OzpTY8nMUUDAVK5w3GELzjoIc6-WhpqP6sdySodhBEPQz3qCJRT3ptbL3SItwU8-j3bKT4Ut8xAi2tRvMt-BhsDjrOYeGwidecWpGBHzkyPIpapzUXycfaBKZV9xb0qPJfEaLEpLfco26-0Pg" class="object-cover w-full h-full">
                    </div>
                    <p class="text-xl font-semibold text-black dark:text-white mt-3">Carlos</p>
                  </div>
                </div>

                <!-- Cronómetro -->
                <div class="lg:w-1/4 text-right">
                  <p id="timer-1" class="text-6xl font-black text-green-600 dark:text-green-400 animate-pulse">25:30</p>
                  <p class="text-xl font-medium text-green-600 dark:text-green-400">Activa</p>
                </div>
              </div>

              <!-- PARTIDA 2 -->
              <div class="w-full mt-5 bg-white dark:bg-background-dark/40 rounded-3xl shadow-2xl border-b-8 border-yellow-500 overflow-hidden flex flex-col lg:flex-row items-center p-8">
                <div class="flex flex-col items-center lg:items-start lg:w-1/4 text-center lg:text-left mb-6 lg:mb-0">
                  <p class="text-2xl font-bold text-black dark:text-white">Mesa: 2</p>
                  <p class="text-xl font-medium text-black/70 dark:text-white/70">Grupo: B</p>
                </div>
                <div class="flex items-center justify-center gap-8 lg:w-1/2">
                  <div class="flex flex-col items-center">
                    <div class="w-24 h-24 rounded-full overflow-hidden border-4 border-yellow-500 shadow-xl">
                      <img alt="Sofía" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCCPUawDHvXsoZVjhm8Ge7CM23IXyvqFX8XezHHrOPeIKAQSIM3OcEkCe8jim5mjm0QLOiqEvj3y9YuZeuztYqncqo4aCLjrcQEweVuehP4NbV1NedoFwfrQUGnKB3BiqDtj69D2J4zo1VfZDaTA5yoJdQ5sCEnCbF4zMrMHYnLLYYbz9QPXUvreiG1UtsKJbkGrRfBtHzZKr8lhHIxINsqR4gLHWsEB2KaGkwaIQw2OOqbEftw-gQr2Xrp_rqqsy4fIpHrZr7QHlo" class="object-cover w-full h-full">
                    </div>
                    <p class="text-xl font-semibold text-black dark:text-white mt-3">Sofía</p>
                  </div>
                  <span class="text-6xl font-black text-yellow-500">VS</span>
                  <div class="flex flex-col items-center">
                    <div class="w-24 h-24 rounded-full overflow-hidden border-4 border-yellow-500 shadow-xl">
                      <img alt="Mateo" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBpA5L9SNVyc-aFojhBC6JWbVne1tGucX3mWQZ1dgjOLs-k7aRwS_EOG7PPMYH80bpFYttGe2GUdxds7harSD6VD05BVs3LikHzyK31Cg5HhKihvqL39QeP7ChafDJngGVx3tEedj-Y88sMLK7D9RyKAmBdp7VlDINOjk2HQgeNDMz9nVQ-QFA2-MSDy-3QipnEpw00JWmEKCtQU_FcpNovG5gqfyYuFeafK2OvHM2CQL6kg4fFLME61KyYOLMINAcDFtw-MUxuNzk" class="object-cover w-full h-full">
                    </div>
                    <p class="text-xl font-semibold text-black dark:text-white mt-3">Mateo</p>
                  </div>
                </div>
                <div class="lg:w-1/4 text-right">
                  <p id="timer-2" class="text-6xl font-black text-yellow-600 dark:text-yellow-400 animate-pulse">45:10</p>

                  <p class="text-xl font-medium text-yellow-600 dark:text-yellow-400">Pendiente</p>
                </div>
              </div>

              <!-- PARTIDA 3 -->
              <div class="w-full mt-5 bg-white dark:bg-background-dark/30 rounded-3xl shadow-2xl border-b-8 border-green-500 overflow-hidden flex flex-col lg:flex-row items-center p-8">
                <div class="flex flex-col items-center lg:items-start lg:w-1/4 text-center lg:text-left mb-6 lg:mb-0">
                  <p class="text-2xl font-bold text-black dark:text-white">Mesa: 3</p>
                  <p class="text-xl font-medium text-black/70 dark:text-white/70">Grupo: C</p>
                </div>
                <div class="flex items-center justify-center gap-8 lg:w-1/2">
                  <div class="flex flex-col items-center">
                    <div class="w-24 h-24 rounded-full overflow-hidden border-4 border-green-500 shadow-xl">
                      <img alt="Laura" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAWkx23i_0PKOL0ujYFSwCQvyFF2MgKnyOPxOBjadCeKV0P8m45SEXzlTw-YYE67GRIPH_kjU57zjwqCoiRZvETvMB4IBcRwtRpFbCArBGQycra8PoD23HLwHwNbGmLm7215ty_obJ__01UaMyMRHBD1MvKBwX3y2AZ9ntyzVh-l_-hbWq46cjFJhD2isrNB6l9nzr7WwirlXx5xYZOVCimzK67MiVBQVI7Gmp6Pi7oPhSXyz54yIGJqIOtVGZMD9lHqD0-1Znc784" class="object-cover w-full h-full">
                    </div>
                    <p class="text-xl font-semibold text-black dark:text-white mt-3">Laura</p>
                  </div>
                  <span class="text-6xl font-black text-green-500">VS</span>
                  <div class="flex flex-col items-center">
                    <div class="w-24 h-24 rounded-full overflow-hidden border-4 border-green-500 shadow-xl">
                      <img alt="Javier" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCIVvCbYLVGpe2la1R9lBLkbbaGJht06eiSvox88O0jbx0sufqvpBmnpWLUbYbgzqKeXixsfXrnk-52AWY3IuwGQfjPfIGh8VSM15DVgssoR1yMEjl4hsunc2iVGKXhwPXGhyn3wuMqYJ4bZkJhr5jT3F0RKDf8rQTFQMGLID-pV9ZpI7lFfWBq6DiymnqY-PvEnH5mo_g3t0vzSjrLgemZTrkhCVu4wLAbHeHfFh2jbZMcUDIZ6JHkpmfFL9zrJtqPNacabOuZmgA" class="object-cover w-full h-full">
                    </div>
                    <p class="text-xl font-semibold text-black dark:text-white mt-3">Javier</p>
                  </div>
                </div>
                <div class="lg:w-1/4 text-right">
                  <p id="timer-3" class="text-6xl font-black text-green-600 dark:text-green-400 animate-pulse">15:40</p>
                  <p class="text-xl font-medium text-green-600 dark:text-green-400">Activa</p>
                </div>
              </div>

              <!-- PARTIDA 2 -->
              <div class="w-full mt-5 bg-white dark:bg-background-dark/40 rounded-3xl shadow-2xl border-b-8 border-yellow-500 overflow-hidden flex flex-col lg:flex-row items-center p-8">
                <div class="flex flex-col items-center lg:items-start lg:w-1/4 text-center lg:text-left mb-6 lg:mb-0">
                  <p class="text-2xl font-bold text-black dark:text-white">Mesa: 4</p>
                  <p class="text-xl font-medium text-black/70 dark:text-white/70">Grupo: B</p>
                </div>
                <div class="flex items-center justify-center gap-8 lg:w-1/2">
                  <div class="flex flex-col items-center">
                    <div class="w-24 h-24 rounded-full overflow-hidden border-4 border-yellow-500 shadow-xl">
                      <img alt="Sofía" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCCPUawDHvXsoZVjhm8Ge7CM23IXyvqFX8XezHHrOPeIKAQSIM3OcEkCe8jim5mjm0QLOiqEvj3y9YuZeuztYqncqo4aCLjrcQEweVuehP4NbV1NedoFwfrQUGnKB3BiqDtj69D2J4zo1VfZDaTA5yoJdQ5sCEnCbF4zMrMHYnLLYYbz9QPXUvreiG1UtsKJbkGrRfBtHzZKr8lhHIxINsqR4gLHWsEB2KaGkwaIQw2OOqbEftw-gQr2Xrp_rqqsy4fIpHrZr7QHlo" class="object-cover w-full h-full">
                    </div>
                    <p class="text-xl font-semibold text-black dark:text-white mt-3">Sofía</p>
                  </div>
                  <span class="text-6xl font-black text-yellow-500">VS</span>
                  <div class="flex flex-col items-center">
                    <div class="w-24 h-24 rounded-full overflow-hidden border-4 border-yellow-500 shadow-xl">
                      <img alt="Mateo" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBpA5L9SNVyc-aFojhBC6JWbVne1tGucX3mWQZ1dgjOLs-k7aRwS_EOG7PPMYH80bpFYttGe2GUdxds7harSD6VD05BVs3LikHzyK31Cg5HhKihvqL39QeP7ChafDJngGVx3tEedj-Y88sMLK7D9RyKAmBdp7VlDINOjk2HQgeNDMz9nVQ-QFA2-MSDy-3QipnEpw00JWmEKCtQU_FcpNovG5gqfyYuFeafK2OvHM2CQL6kg4fFLME61KyYOLMINAcDFtw-MUxuNzk" class="object-cover w-full h-full">
                    </div>
                    <p class="text-xl font-semibold text-black dark:text-white mt-3">Mateo</p>
                  </div>
                </div>
                <div class="lg:w-1/4 text-right">
                  <p id="timer-4" class="text-6xl font-black text-yellow-600 dark:text-yellow-400 animate-pulse">45:10</p>
                  <p class="text-xl font-medium text-yellow-600 dark:text-yellow-400">Pendiente</p>
                </div>
              </div>

              <!-- PARTIDA 3 -->
              <div class="w-full mt-5 bg-white dark:bg-background-dark/30 rounded-3xl shadow-2xl border-b-8 border-green-500 overflow-hidden flex flex-col lg:flex-row items-center p-8">
                <div class="flex flex-col items-center lg:items-start lg:w-1/4 text-center lg:text-left mb-6 lg:mb-0">
                  <p class="text-2xl font-bold text-black dark:text-white">Mesa: 5</p>
                  <p class="text-xl font-medium text-black/70 dark:text-white/70">Grupo: C</p>
                </div>
                <div class="flex items-center justify-center gap-8 lg:w-1/2">
                  <div class="flex flex-col items-center">
                    <div class="w-24 h-24 rounded-full overflow-hidden border-4 border-green-500 shadow-xl">
                      <img alt="Laura" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAWkx23i_0PKOL0ujYFSwCQvyFF2MgKnyOPxOBjadCeKV0P8m45SEXzlTw-YYE67GRIPH_kjU57zjwqCoiRZvETvMB4IBcRwtRpFbCArBGQycra8PoD23HLwHwNbGmLm7215ty_obJ__01UaMyMRHBD1MvKBwX3y2AZ9ntyzVh-l_-hbWq46cjFJhD2isrNB6l9nzr7WwirlXx5xYZOVCimzK67MiVBQVI7Gmp6Pi7oPhSXyz54yIGJqIOtVGZMD9lHqD0-1Znc784" class="object-cover w-full h-full">
                    </div>
                    <p class="text-xl font-semibold text-black dark:text-white mt-3">Laura</p>
                  </div>
                  <span class="text-6xl font-black text-green-500">VS</span>
                  <div class="flex flex-col items-center">
                    <div class="w-24 h-24 rounded-full overflow-hidden border-4 border-green-500 shadow-xl">
                      <img alt="Javier" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCIVvCbYLVGpe2la1R9lBLkbbaGJht06eiSvox88O0jbx0sufqvpBmnpWLUbYbgzqKeXixsfXrnk-52AWY3IuwGQfjPfIGh8VSM15DVgssoR1yMEjl4hsunc2iVGKXhwPXGhyn3wuMqYJ4bZkJhr5jT3F0RKDf8rQTFQMGLID-pV9ZpI7lFfWBq6DiymnqY-PvEnH5mo_g3t0vzSjrLgemZTrkhCVu4wLAbHeHfFh2jbZMcUDIZ6JHkpmfFL9zrJtqPNacabOuZmgA" class="object-cover w-full h-full">
                    </div>
                    <p class="text-xl font-semibold text-black dark:text-white mt-3">Javier</p>
                  </div>
                </div>
                <div class="lg:w-1/4 text-right">
                  <p id="timer-5" class="text-6xl font-black text-green-600 dark:text-green-400 animate-pulse">15:40</p>
                  <p class="text-xl font-medium text-green-600 dark:text-green-400">Activa</p>
                </div>
              </div>

              <!-- PARTIDA 2 -->
              <div class="w-full mt-5 bg-white dark:bg-background-dark/40 rounded-3xl shadow-2xl border-b-8 border-yellow-500 overflow-hidden flex flex-col lg:flex-row items-center p-8">
                <div class="flex flex-col items-center lg:items-start lg:w-1/4 text-center lg:text-left mb-6 lg:mb-0">
                  <p class="text-2xl font-bold text-black dark:text-white">Mesa: 6</p>
                  <p class="text-xl font-medium text-black/70 dark:text-white/70">Grupo: B</p>
                </div>
                <div class="flex items-center justify-center gap-8 lg:w-1/2">
                  <div class="flex flex-col items-center">
                    <div class="w-24 h-24 rounded-full overflow-hidden border-4 border-yellow-500 shadow-xl">
                      <img alt="Sofía" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCCPUawDHvXsoZVjhm8Ge7CM23IXyvqFX8XezHHrOPeIKAQSIM3OcEkCe8jim5mjm0QLOiqEvj3y9YuZeuztYqncqo4aCLjrcQEweVuehP4NbV1NedoFwfrQUGnKB3BiqDtj69D2J4zo1VfZDaTA5yoJdQ5sCEnCbF4zMrMHYnLLYYbz9QPXUvreiG1UtsKJbkGrRfBtHzZKr8lhHIxINsqR4gLHWsEB2KaGkwaIQw2OOqbEftw-gQr2Xrp_rqqsy4fIpHrZr7QHlo" class="object-cover w-full h-full">
                    </div>
                    <p class="text-xl font-semibold text-black dark:text-white mt-3">Sofía</p>
                  </div>
                  <span class="text-6xl font-black text-yellow-500">VS</span>
                  <div class="flex flex-col items-center">
                    <div class="w-24 h-24 rounded-full overflow-hidden border-4 border-yellow-500 shadow-xl">
                      <img alt="Mateo" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBpA5L9SNVyc-aFojhBC6JWbVne1tGucX3mWQZ1dgjOLs-k7aRwS_EOG7PPMYH80bpFYttGe2GUdxds7harSD6VD05BVs3LikHzyK31Cg5HhKihvqL39QeP7ChafDJngGVx3tEedj-Y88sMLK7D9RyKAmBdp7VlDINOjk2HQgeNDMz9nVQ-QFA2-MSDy-3QipnEpw00JWmEKCtQU_FcpNovG5gqfyYuFeafK2OvHM2CQL6kg4fFLME61KyYOLMINAcDFtw-MUxuNzk" class="object-cover w-full h-full">
                    </div>
                    <p class="text-xl font-semibold text-black dark:text-white mt-3">Mateo</p>
                  </div>
                </div>
                <div class="lg:w-1/4 text-right">
                  <p id="timer-6" class="text-6xl font-black text-yellow-600 dark:text-yellow-400 animate-pulse">45:10</p>
                  <p class="text-xl font-medium text-yellow-600 dark:text-yellow-400">Pendiente</p>
                </div>
              </div>

              <!-- PARTIDA 3 -->
              <div class="w-full mt-5 bg-white dark:bg-background-dark/30 rounded-3xl shadow-2xl border-b-8 border-green-500 overflow-hidden flex flex-col lg:flex-row items-center p-8">
                <div class="flex flex-col items-center lg:items-start lg:w-1/4 text-center lg:text-left mb-6 lg:mb-0">
                  <p class="text-2xl font-bold text-black dark:text-white">Mesa: 7</p>
                  <p class="text-xl font-medium text-black/70 dark:text-white/70">Grupo: C</p>
                </div>
                <div class="flex items-center justify-center gap-8 lg:w-1/2">
                  <div class="flex flex-col items-center">
                    <div class="w-24 h-24 rounded-full overflow-hidden border-4 border-green-500 shadow-xl">
                      <img alt="Laura" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAWkx23i_0PKOL0ujYFSwCQvyFF2MgKnyOPxOBjadCeKV0P8m45SEXzlTw-YYE67GRIPH_kjU57zjwqCoiRZvETvMB4IBcRwtRpFbCArBGQycra8PoD23HLwHwNbGmLm7215ty_obJ__01UaMyMRHBD1MvKBwX3y2AZ9ntyzVh-l_-hbWq46cjFJhD2isrNB6l9nzr7WwirlXx5xYZOVCimzK67MiVBQVI7Gmp6Pi7oPhSXyz54yIGJqIOtVGZMD9lHqD0-1Znc784" class="object-cover w-full h-full">
                    </div>
                    <p class="text-xl font-semibold text-black dark:text-white mt-3">Laura</p>
                  </div>
                  <span class="text-6xl font-black text-green-500">VS</span>
                  <div class="flex flex-col items-center">
                    <div class="w-24 h-24 rounded-full overflow-hidden border-4 border-green-500 shadow-xl">
                      <img alt="Javier" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCIVvCbYLVGpe2la1R9lBLkbbaGJht06eiSvox88O0jbx0sufqvpBmnpWLUbYbgzqKeXixsfXrnk-52AWY3IuwGQfjPfIGh8VSM15DVgssoR1yMEjl4hsunc2iVGKXhwPXGhyn3wuMqYJ4bZkJhr5jT3F0RKDf8rQTFQMGLID-pV9ZpI7lFfWBq6DiymnqY-PvEnH5mo_g3t0vzSjrLgemZTrkhCVu4wLAbHeHfFh2jbZMcUDIZ6JHkpmfFL9zrJtqPNacabOuZmgA" class="object-cover w-full h-full">
                    </div>
                    <p class="text-xl font-semibold text-black dark:text-white mt-3">Javier</p>
                  </div>
                </div>
                <div class="lg:w-1/4 text-right">
                  <p id="timer-7" class="text-6xl font-black text-green-600 dark:text-green-400 animate-pulse">15:40</p>
                  <p class="text-xl font-medium text-green-600 dark:text-green-400">Activa</p>
                </div>
              </div>

              <!-- PARTIDA 2 -->
              <div class="w-full mt-5 bg-white dark:bg-background-dark/40 rounded-3xl shadow-2xl border-b-8 border-yellow-500 overflow-hidden flex flex-col lg:flex-row items-center p-8">
                <div class="flex flex-col items-center lg:items-start lg:w-1/4 text-center lg:text-left mb-6 lg:mb-0">
                  <p class="text-2xl font-bold text-black dark:text-white">Mesa: 8</p>
                  <p class="text-xl font-medium text-black/70 dark:text-white/70">Grupo: B</p>
                </div>
                <div class="flex items-center justify-center gap-8 lg:w-1/2">
                  <div class="flex flex-col items-center">
                    <div class="w-24 h-24 rounded-full overflow-hidden border-4 border-yellow-500 shadow-xl">
                      <img alt="Sofía" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCCPUawDHvXsoZVjhm8Ge7CM23IXyvqFX8XezHHrOPeIKAQSIM3OcEkCe8jim5mjm0QLOiqEvj3y9YuZeuztYqncqo4aCLjrcQEweVuehP4NbV1NedoFwfrQUGnKB3BiqDtj69D2J4zo1VfZDaTA5yoJdQ5sCEnCbF4zMrMHYnLLYYbz9QPXUvreiG1UtsKJbkGrRfBtHzZKr8lhHIxINsqR4gLHWsEB2KaGkwaIQw2OOqbEftw-gQr2Xrp_rqqsy4fIpHrZr7QHlo" class="object-cover w-full h-full">
                    </div>
                    <p class="text-xl font-semibold text-black dark:text-white mt-3">Sofía</p>
                  </div>
                  <span class="text-6xl font-black text-yellow-500">VS</span>
                  <div class="flex flex-col items-center">
                    <div class="w-24 h-24 rounded-full overflow-hidden border-4 border-yellow-500 shadow-xl">
                      <img alt="Mateo" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBpA5L9SNVyc-aFojhBC6JWbVne1tGucX3mWQZ1dgjOLs-k7aRwS_EOG7PPMYH80bpFYttGe2GUdxds7harSD6VD05BVs3LikHzyK31Cg5HhKihvqL39QeP7ChafDJngGVx3tEedj-Y88sMLK7D9RyKAmBdp7VlDINOjk2HQgeNDMz9nVQ-QFA2-MSDy-3QipnEpw00JWmEKCtQU_FcpNovG5gqfyYuFeafK2OvHM2CQL6kg4fFLME61KyYOLMINAcDFtw-MUxuNzk" class="object-cover w-full h-full">
                    </div>
                    <p class="text-xl font-semibold text-black dark:text-white mt-3">Mateo</p>
                  </div>
                </div>
                <div class="lg:w-1/4 text-right">
                  <p id="timer-8" class="text-6xl font-black text-yellow-600 dark:text-yellow-400 animate-pulse">45:10</p>
                  <p class="text-xl font-medium text-yellow-600 dark:text-yellow-400">Pendiente</p>
                </div>
              </div>

              <!-- PARTIDA 3 -->
              <div class="w-full mt-5 bg-white dark:bg-background-dark/30 rounded-3xl shadow-2xl border-b-8 border-green-500 overflow-hidden flex flex-col lg:flex-row items-center p-8">
                <div class="flex flex-col items-center lg:items-start lg:w-1/4 text-center lg:text-left mb-6 lg:mb-0">
                  <p class="text-2xl font-bold text-black dark:text-white">Mesa: 9</p>
                  <p class="text-xl font-medium text-black/70 dark:text-white/70">Grupo: C</p>
                </div>
                <div class="flex items-center justify-center gap-8 lg:w-1/2">
                  <div class="flex flex-col items-center">
                    <div class="w-24 h-24 rounded-full overflow-hidden border-4 border-green-500 shadow-xl">
                      <img alt="Laura" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAWkx23i_0PKOL0ujYFSwCQvyFF2MgKnyOPxOBjadCeKV0P8m45SEXzlTw-YYE67GRIPH_kjU57zjwqCoiRZvETvMB4IBcRwtRpFbCArBGQycra8PoD23HLwHwNbGmLm7215ty_obJ__01UaMyMRHBD1MvKBwX3y2AZ9ntyzVh-l_-hbWq46cjFJhD2isrNB6l9nzr7WwirlXx5xYZOVCimzK67MiVBQVI7Gmp6Pi7oPhSXyz54yIGJqIOtVGZMD9lHqD0-1Znc784" class="object-cover w-full h-full">
                    </div>
                    <p class="text-xl font-semibold text-black dark:text-white mt-3">Laura</p>
                  </div>
                  <span class="text-6xl font-black text-green-500">VS</span>
                  <div class="flex flex-col items-center">
                    <div class="w-24 h-24 rounded-full overflow-hidden border-4 border-green-500 shadow-xl">
                      <img alt="Javier" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCIVvCbYLVGpe2la1R9lBLkbbaGJht06eiSvox88O0jbx0sufqvpBmnpWLUbYbgzqKeXixsfXrnk-52AWY3IuwGQfjPfIGh8VSM15DVgssoR1yMEjl4hsunc2iVGKXhwPXGhyn3wuMqYJ4bZkJhr5jT3F0RKDf8rQTFQMGLID-pV9ZpI7lFfWBq6DiymnqY-PvEnH5mo_g3t0vzSjrLgemZTrkhCVu4wLAbHeHfFh2jbZMcUDIZ6JHkpmfFL9zrJtqPNacabOuZmgA" class="object-cover w-full h-full">
                    </div>
                    <p class="text-xl font-semibold text-black dark:text-white mt-3">Javier</p>
                  </div>
                </div>
                <div class="lg:w-1/4 text-right">
                  <p id="timer-9" class="text-6xl font-black text-green-600 dark:text-green-400 animate-pulse">15:40</p>
                  <p class="text-xl font-medium text-green-600 dark:text-green-400">Activa</p>
                </div>
              </div>

              <!-- PARTIDA 2 -->
              <div class="w-full mt-5 bg-white dark:bg-background-dark/40 rounded-3xl shadow-2xl border-b-8 border-yellow-500 overflow-hidden flex flex-col lg:flex-row items-center p-8">
                <div class="flex flex-col items-center lg:items-start lg:w-1/4 text-center lg:text-left mb-6 lg:mb-0">
                  <p class="text-2xl font-bold text-black dark:text-white">Mesa: 10</p>
                  <p class="text-xl font-medium text-black/70 dark:text-white/70">Grupo: B</p>
                </div>
                <div class="flex items-center justify-center gap-8 lg:w-1/2">
                  <div class="flex flex-col items-center">
                    <div class="w-24 h-24 rounded-full overflow-hidden border-4 border-yellow-500 shadow-xl">
                      <img alt="Sofía" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCCPUawDHvXsoZVjhm8Ge7CM23IXyvqFX8XezHHrOPeIKAQSIM3OcEkCe8jim5mjm0QLOiqEvj3y9YuZeuztYqncqo4aCLjrcQEweVuehP4NbV1NedoFwfrQUGnKB3BiqDtj69D2J4zo1VfZDaTA5yoJdQ5sCEnCbF4zMrMHYnLLYYbz9QPXUvreiG1UtsKJbkGrRfBtHzZKr8lhHIxINsqR4gLHWsEB2KaGkwaIQw2OOqbEftw-gQr2Xrp_rqqsy4fIpHrZr7QHlo" class="object-cover w-full h-full">
                    </div>
                    <p class="text-xl font-semibold text-black dark:text-white mt-3">Sofía</p>
                  </div>
                  <span class="text-6xl font-black text-yellow-500">VS</span>
                  <div class="flex flex-col items-center">
                    <div class="w-24 h-24 rounded-full overflow-hidden border-4 border-yellow-500 shadow-xl">
                      <img alt="Mateo" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBpA5L9SNVyc-aFojhBC6JWbVne1tGucX3mWQZ1dgjOLs-k7aRwS_EOG7PPMYH80bpFYttGe2GUdxds7harSD6VD05BVs3LikHzyK31Cg5HhKihvqL39QeP7ChafDJngGVx3tEedj-Y88sMLK7D9RyKAmBdp7VlDINOjk2HQgeNDMz9nVQ-QFA2-MSDy-3QipnEpw00JWmEKCtQU_FcpNovG5gqfyYuFeafK2OvHM2CQL6kg4fFLME61KyYOLMINAcDFtw-MUxuNzk" class="object-cover w-full h-full">
                    </div>
                    <p class="text-xl font-semibold text-black dark:text-white mt-3">Mateo</p>
                  </div>
                </div>
                <div class="lg:w-1/4 text-right">
                  <p id="timer-10" class="text-6xl font-black text-yellow-600 dark:text-yellow-400 animate-pulse">45:10</p>
                  <p class="text-xl font-medium text-yellow-600 dark:text-yellow-400">Pendiente</p>
                </div>
              </div>

              <!-- PARTIDA 3 -->
              <div class="w-full mt-5 bg-white dark:bg-background-dark/30 rounded-3xl shadow-2xl border-b-8 border-green-500 overflow-hidden flex flex-col lg:flex-row items-center p-8">
                <div class="flex flex-col items-center lg:items-start lg:w-1/4 text-center lg:text-left mb-6 lg:mb-0">
                  <p class="text-2xl font-bold text-black dark:text-white">Mesa: 11</p>
                  <p class="text-xl font-medium text-black/70 dark:text-white/70">Grupo: C</p>
                </div>
                <div class="flex items-center justify-center gap-8 lg:w-1/2">
                  <div class="flex flex-col items-center">
                    <div class="w-24 h-24 rounded-full overflow-hidden border-4 border-green-500 shadow-xl">
                      <img alt="Laura" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAWkx23i_0PKOL0ujYFSwCQvyFF2MgKnyOPxOBjadCeKV0P8m45SEXzlTw-YYE67GRIPH_kjU57zjwqCoiRZvETvMB4IBcRwtRpFbCArBGQycra8PoD23HLwHwNbGmLm7215ty_obJ__01UaMyMRHBD1MvKBwX3y2AZ9ntyzVh-l_-hbWq46cjFJhD2isrNB6l9nzr7WwirlXx5xYZOVCimzK67MiVBQVI7Gmp6Pi7oPhSXyz54yIGJqIOtVGZMD9lHqD0-1Znc784" class="object-cover w-full h-full">
                    </div>
                    <p class="text-xl font-semibold text-black dark:text-white mt-3">Laura</p>
                  </div>
                  <span class="text-6xl font-black text-green-500">VS</span>
                  <div class="flex flex-col items-center">
                    <div class="w-24 h-24 rounded-full overflow-hidden border-4 border-green-500 shadow-xl">
                      <img alt="Javier" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCIVvCbYLVGpe2la1R9lBLkbbaGJht06eiSvox88O0jbx0sufqvpBmnpWLUbYbgzqKeXixsfXrnk-52AWY3IuwGQfjPfIGh8VSM15DVgssoR1yMEjl4hsunc2iVGKXhwPXGhyn3wuMqYJ4bZkJhr5jT3F0RKDf8rQTFQMGLID-pV9ZpI7lFfWBq6DiymnqY-PvEnH5mo_g3t0vzSjrLgemZTrkhCVu4wLAbHeHfFh2jbZMcUDIZ6JHkpmfFL9zrJtqPNacabOuZmgA" class="object-cover w-full h-full">
                    </div>
                    <p class="text-xl font-semibold text-black dark:text-white mt-3">Javier</p>
                  </div>
                </div>
                <div class="lg:w-1/4 text-right">
                  <p id="timer-11" class="text-6xl font-black text-green-600 dark:text-green-400 animate-pulse">15:40</p>
                  <p class="text-xl font-medium text-green-600 dark:text-green-400">Activa</p>
                </div>
              </div>

            </div>
          </div>
        </div>


        <script>
          document.addEventListener("DOMContentLoaded", function() {
            // 🔹 Configura aquí los tiempos iniciales de cada mesa
            const timers = [{
                id: "timer-1",
                minutes: 25,
                seconds: 30
              },
              {
                id: "timer-2",
                minutes: 45,
                seconds: 10
              },
              {
                id: "timer-3",
                minutes: 12,
                seconds: 5
              },
              {
                id: "timer-4",
                minutes: 30,
                seconds: 0
              },
              {
                id: "timer-5",
                minutes: 15,
                seconds: 15
              },
              {
                id: "timer-6",
                minutes: 8,
                seconds: 40
              },
              {
                id: "timer-7",
                minutes: 50,
                seconds: 55
              },
              {
                id: "timer-8",
                minutes: 10,
                seconds: 20
              },
              {
                id: "timer-9",
                minutes: 35,
                seconds: 45
              },
              {
                id: "timer-10",
                minutes: 5,
                seconds: 0
              },
              {
                id: "timer-11",
                minutes: 0,
                seconds: 0
              }
            ];

            // 🔹 Función genérica para iniciar cada cronómetro
            timers.forEach(timer => {
              const el = document.getElementById(timer.id);
              if (!el) return; // Evita errores si falta un elemento
              let totalSeconds = timer.minutes * 60 + timer.seconds;

              setInterval(() => {
                totalSeconds++;
                const minutes = String(Math.floor(totalSeconds / 60)).padStart(2, '0');
                const seconds = String(totalSeconds % 60).padStart(2, '0');
                el.textContent = `${minutes}:${seconds}`;
              }, 1000);
            });
          });
        </script>


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

        <!--  -->





        <div class="relative w-px h-auto lg:h-full lg:w-auto lg:min-h-full my-8 lg:my-0 flex items-center justify-center">
          <div class="absolute inset-x-0 h-full w-0.5 bg-gradient-to-t from-transparent via-black/10 dark:via-white/10 to-transparent lg:inset-y-0 lg:w-full lg:h-0.5 lg:bg-gradient-to-r"></div>
        </div>
        <div class="w-full lg:w-1/3 flex flex-col mt-8 lg:ml-8">
          <h2 class="text-5xl font-black text-black dark:text-white mb-8 text-center drop-shadow-lg animate-fade-in-down">Proximas Partidas</h2>



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
            <div class="relative z-10 flex flex-col items-center text-center">
              <p class="text-3xl font-extrabold text-black dark:text-white mb-4">PRÓXIMA PARTIDA</p>

              <div class="flex justify-center items-center gap-8 mt-2">
                <div class="flex flex-col items-center">
                  <div class="w-24 h-24 rounded-full bg-gray-300 dark:bg-gray-700 overflow-hidden border-4 border-[#f59e0b] shadow-xl">
                    <img alt="Marta" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDVI4QE1KPGuqrr0KYddsu0TAdjI9VcRd-tXRKAkYWtDVfSVHerhoErblhQ-uxlX59vYczG2yovTAPzdJ6anCf8GGG77ZNuRll2GvgY8ilIlq7AZSF2VeTmefTf9QcGrvJxs02WVysaNnSISzHFPKXCpOlm5VUAvDqcyXCNeBJqdUIq8DrYwErsypVmagU_OcbV8u7JR5ZU9KWBVftj339I_QzYN93sDiwlln4T4a7LI5wZeycMiD82281i1VEgCh1aG8hDi_4-eKI" />
                  </div>
                  <p class="text-xl font-semibold text-black dark:text-white mt-3">Marta</p>
                </div>

                <span class="text-6xl font-black text-[#f59e0b] transform transition-transform duration-300 group-hover:scale-110">VS</span>

                <div class="flex flex-col items-center">
                  <div class="w-24 h-24 rounded-full bg-gray-300 dark:bg-gray-700 overflow-hidden border-4 border-[#f59e0b] shadow-xl">
                    <img alt="Luis" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBNhZNrxWIsQ7KvWJ1y_5HawixJG1fcsTv_QyyOGREbhigqOu7e0YV_1lRGnCzA8ADDzgnkwgVcp3R66qF7YW-x5nI3bcMeR9IBii32hkfCJAGQu0EAyGG5_lOHr7OzpTY8nMUUDAVK5w3GELzjoIc6-WhpqP6sdySodhBEPQz3qCJRT3ptbL3SItwU8-j3bKT4Ut8xAi2tRvMt-BhsDjrOYeGwidecWpGBHzkyPIpapzUXycfaBKZV9xb0qPJfEaLEpLfco26-0Pg" />
                  </div>
                  <p class="text-xl font-semibold text-black dark:text-white mt-3">Luis</p>
                </div>
              </div>

              <p class="text-lg font-medium text-gray-700 dark:text-gray-300 mt-2">Grupo: A</p>
            </div>
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




          <div class="flex flex-col gap-3 mt-8 overflow-y-auto max-h-[300px] lg:max-h-[unset] custom-scrollbar">



            <div class="relative w-full bg-white dark:bg-background-dark/40 rounded-2xl shadow-xl p-6 flex flex-col items-center justify-center transform transition-all duration-200 hover:scale-[1.02] active:scale-[0.98] cursor-grab border border-primary/20 dark:border-primary/30 z-10 group" draggable="true">
              <div class="absolute top-4 left-4 text-sm font-bold text-gray-500 dark:text-gray-400">#1</div>
              <h3 class="text-2xl font-black text-black dark:text-white text-center">Isabel <span class="text-primary font-medium">vs</span> Jorge</h3>
              <p class="text-base text-black/50 dark:text-white/50 mt-2">Mesa: <span class="font-bold">5</span></p>
              <div class="absolute top-4 right-4 flex gap-2 opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                <button class="p-2 rounded-full text-black/60 dark:text-white/60 hover:bg-black/10 dark:hover:bg-white/10">
                  <span class="material-symbols-outlined text-xl">arrow_upward</span>
                </button>
                <button class="p-2 rounded-full text-black/60 dark:text-white/60 hover:bg-black/10 dark:hover:bg-white/10">
                  <span class="material-symbols-outlined text-xl">arrow_downward</span>
                </button>
              </div>
            </div>


            <div class="relative w-full bg-white dark:bg-background-dark/40 rounded-2xl shadow-xl p-6 flex flex-col items-center justify-center transform transition-all duration-200 hover:scale-[1.02] active:scale-[0.98] cursor-grab border border-primary/20 dark:border-primary/30 z-10 group" draggable="true">
              <div class="text-1xl absolute top-4 left-4 text-sm font-bold text-gray-500 dark:text-gray-400">#2</div>
              <h3 class="text-3xl font-black text-black dark:text-white text-center">Isabel <span class="text-primary font-medium">vs</span> Jorge</h3>
              <p class="text-base text-black/50 dark:text-white/50 mt-2">Mesa: <span class="font-bold">5</span></p>
              <div class="absolute top-4 right-4 flex gap-2 opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                <button class="p-2 rounded-full text-black/60 dark:text-white/60 hover:bg-black/10 dark:hover:bg-white/10">
                  <span class="material-symbols-outlined text-xl">arrow_upward</span>
                </button>
                <button class="p-2 rounded-full text-black/60 dark:text-white/60 hover:bg-black/10 dark:hover:bg-white/10">
                  <span class="material-symbols-outlined text-xl">arrow_downward</span>
                </button>
              </div>
            </div>


          </div>
        </div>
      </div>
    </main>