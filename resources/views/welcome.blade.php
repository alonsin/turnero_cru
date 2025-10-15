<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>TURNERO C R U</title>
    <link crossorigin="" href="https://fonts.gstatic.com/" rel="preconnect" />
    <link as="style" href="https://fonts.googleapis.com/css2?display=swap&amp;family=Public+Sans:wght@400;500;700;900" onload="this.rel='stylesheet'" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#13a4ec",
                        "background-light": "#f6f7f8",
                        "background-dark": "#101c22",
                    },
                    fontFamily: {
                        "display": ["Public Sans"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <style type="text/tailwindcss">
        @layer utilities {
            .scrollbar-hide::-webkit-scrollbar {
                display: none;
            }
            .scrollbar-hide {
                -ms-overflow-style: none;
                scrollbar-width: none;
            }
            .bg-pattern {
                background-image: url('data:image/svg+xml,%3Csvg width="100" height="100" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="%23FFFFFF" fill-opacity="0.1"%3E%3Cpath d="M98 0H2V98H0V100h100V0h-2V98H2V0zM10 10V0H0v10h10zm20 0V0h-10v10h10zM40 0h10v10H40V0zm20 0h10v10H60V0zm20 0h10v10H80V0zm10 20h10v10H90V20zM90 40h10v10H90V40zm0 20h10v10H90V60zm0 20h10v10H90V80zM80 90h10v10H80V90zm-20 0h10v10H60V90zm-20 0h10v10H40V90zM20 90h10v10H20V90zM0 90h10v10H0V90zM0 80h10v10H0V80zM0 60h10v10H0V60zM0 40h10v10H0V40zM0 20h10v10H0V20z"/%3E%3C/g%3E%3C/svg%3E');
                background-size: 100px 100px;
            }.custom-scrollbar::-webkit-scrollbar {
                width: 8px;
            }
            .custom-scrollbar::-webkit-scrollbar-track {
                background: transparent;
                border-radius: 10px;
            }
            .custom-scrollbar::-webkit-scrollbar-thumb {
                background: rgba(0, 0, 0, 0.2);
                border-radius: 10px;
            }
            .dark .custom-scrollbar::-webkit-scrollbar-thumb {
                background: rgba(255, 255, 255, 0.2);
            }
            .custom-scrollbar {
                scrollbar-width: thin;
                scrollbar-color: rgba(0, 0, 0, 0.2) transparent;
            }
            .dark .custom-scrollbar {
                scrollbar-color: rgba(255, 255, 255, 0.2) transparent;
            }
            @keyframes pulse-ring {
                0% {
                    transform: scale(0.33);
                    opacity: 1;
                }
                100% {
                    transform: scale(1.5);
                    opacity: 0;
                }
            }
            .pulse-ring {
                animation: pulse-ring 2s cubic-bezier(0.215, 0.61, 0.355, 1) infinite;
            }
            @keyframes slide-in-top {
                0% {
                    transform: translateY(-20px);
                    opacity: 0;
                }
                100% {
                    transform: translateY(0);
                    opacity: 1;
                }
            }
            .slide-in-top {
                animation: slide-in-top 0.5s ease-out forwards;
            }
            @keyframes marquee {
                0% { transform: translateX(100%); }
                100% { transform: translateX(-100%); }
            }
            .marquee {
                animation: marquee 15s linear infinite;
                white-space: nowrap;
                overflow: hidden;
            }
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark font-display">
    <div class="flex flex-col min-h-screen">
        <!-- <header class="sticky top-0 z-10 bg-background-light/80 dark:bg-background-dark/80 backdrop-blur-sm border-b border-black/10 dark:border-white/10">
<div class="container mx-auto px-4 sm:px-6 lg:px-8">
<div class="flex items-center justify-between h-16">
<div class="flex items-center gap-4 text-black dark:text-white">
<div class="w-8 h-8 text-primary">
<svg fill="none" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
<path d="M24 4C25.7818 14.2173 33.7827 22.2182 44 24C33.7827 25.7818 25.7818 33.7827 24 44C22.2182 33.7827 14.2173 25.7818 4 24C14.2173 22.2182 22.2182 14.2173 24 4Z" fill="currentColor"></path>
</svg>
</div>
<h1 class="text-2xl font-bold">TURNERO PARTIDAS CRU</h1>
</div>
<div class="flex items-center gap-4">
<nav class="hidden md:flex items-center gap-6">
<a class="text-base font-medium text-black dark:text-white hover:text-primary" href="#">En
                            Curso</a>
<a class="text-base font-medium text-black dark:text-white hover:text-primary" href="#">Próximos</a>
<a class="text-base font-medium text-black dark:text-white hover:text-primary" href="#">Historial</a>
</nav>
<button class="p-2 rounded-full text-black dark:text-white hover:bg-black/10 dark:hover:bg-white/10">
<svg fill="currentColor" height="24" viewBox="0 0 256 256" width="24" xmlns="http://www.w3.org/2000/svg">
<path d="M128,80a48,48,0,1,0,48,48A48.05,48.05,0,0,0,128,80Zm0,80a32,32,0,1,1,32-32A32,32,0,0,1,128,160Zm88-29.84q.06-2.16,0-4.32l14.92-18.64a8,8,0,0,0,1.48-7.06,107.21,107.21,0,0,0-10.88-26.25,8,8,0,0,0-6-3.93l-23.72-2.64q-1.48-1.56-3-3L186,40.54a8,8,0,0,0-3.94-6,107.71,107.71,0,0,0-26.25-10.87,8,8,0,0,0-7.06,1.49L130.16,40Q128,40,125.84,40L107.2,25.11a8,8,0,0,0-7.06-1.48A107.6,107.6,0,0,0,73.89,34.51a8,8,0,0,0-3.93,6L67.32,64.27q-1.56,1.49-3,3L40.54,70a8,8,0,0,0-6,3.94,107.71,107.71,0,0,0-10.87,26.25,8,8,0,0,0,1.49,7.06L40,125.84Q40,128,40,130.16L25.11,148.8a8,8,0,0,0-1.48,7.06,107.21,107.21,0,0,0,10.88,26.25,8,8,0,0,0,6,3.93l23.72,2.64q1.49,1.56,3,3L70,215.46a8,8,0,0,0,3.94,6,107.71,107.71,0,0,0,26.25,10.87,8,8,0,0,0,7.06-1.49L125.84,216q2.16.06,4.32,0l18.64,14.92a8,8,0,0,0,7.06,1.48,107.21,107.21,0,0,0,26.25-10.88,8,8,0,0,0,3.93-6l2.64-23.72q1.56-1.48,3-3L215.46,186a8,8,0,0,0,6-3.94,107.71,107.71,0,0,0,10.87-26.25,8,8,0,0,0-1.49-7.06Zm-16.1-6.5a73.93,73.93,0,0,1,0,8.68,8,8,0,0,0,1.74,5.48l14.19,17.73a91.57,91.57,0,0,1-6.23,15L187,173.11a8,8,0,0,0-5.1,2.64,74.11,74.11,0,0,1-6.14,6.14,8,8,0,0,0-2.64,5.1l-2.51,22.58a91.32,91.32,0,0,1-15,6.23l-17.74-14.19a8,8,0,0,0-5-1.75h-.48a73.93,73.93,0,0,1-8.68,0,8,8,0,0,0-5.48,1.74L100.45,215.8a91.57,91.57,0,0,1-15-6.23L82.89,187a8,8,0,0,0-2.64-5.1,74.11,74.11,0,0,1-6.14-6.14,8,8,0,0,0-5.1-2.64L46.43,170.6a91.32,91.32,0,0,1-6.23-15l14.19-17.74a8,8,0,0,0,1.74-5.48,73.93,73.93,0,0,1,0-8.68,8,8,0,0,0-1.74-5.48L40.2,100.45a91.57,91.57,0,0,1,6.23-15L69,82.89a8,8,0,0,0,5.1-2.64,74.11,74.11,0,0,1,6.14-6.14A8,8,0,0,0,82.89,69L85.4,46.43a91.32,91.32,0,0,1,15-6.23l17.74,14.19a8,8,0,0,0,5.48,1.74,73.93,73.93,0,0,1,8.68,0,8,8,0,0,0,5.48-1.74L155.55,40.2a91.57,91.57,0,0,1,15,6.23L173.11,69a8,8,0,0,0,2.64,5.1,74.11,74.11,0,0,1,6.14,6.14,8,8,0,0,0,5.1,2.64l22.58,2.51a91.32,91.32,0,0,1,6.23,15l-14.19,17.74A8,8,0,0,0,199.87,123.66Z"></path>
</svg>
</button>
<div class="w-10 h-10 rounded-full bg-cover bg-center" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDT0gL6gp6FrVApNcaiAwK_gfuRZ1XdhKGzdMlUZfwwjSs-5_hTsz3U4CQ7giWNezbYovfPB9FpW5aEanDUdFHq-JBgADAsJXwehlCBxhW31wQz_mme6SQdVRsCRReHl0RQJaF9QZ_Xz6GqiGp_Z-FcESR84Tu-Kt3l4tJG3F36xSDegfUayFE-HI5lQnuvRC3Osfz7xdGP-PuthTOYpgELHwcfuAzLd3iflTcu_MTSmXPq4YKkDo4YOkqUwPE23BlzsfqPM0z-GX4");'></div>
</div>
</div>
</div>
</header> -->
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
                                    <p id="timer-10"class="text-6xl font-black text-yellow-600 dark:text-yellow-400 animate-pulse">45:10</p>
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
    </div>

</body>

</html>