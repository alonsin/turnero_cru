<!DOCTYPE html>
<html lang="en"><head>
<meta charset="utf-8"/>
<title>Game Manager - Upcoming Matches</title>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            "primary": "#007bff",
            "background-light": "#ffffff",
          },
          fontFamily: {
            "display": ["Space Grotesk"]
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
<style>
    .material-symbols-outlined {
      font-variation-settings:
        'FILL' 0,
        'wght' 400,
        'GRAD' 0,
        'opsz' 24
    }
  </style>
</head>
<body class="bg-background-light font-display text-gray-900">
<div class="flex h-screen flex-col">
<header class="flex items-center justify-between border-b border-gray-200 px-4 py-3 md:px-6">
<div class="flex items-center gap-4">
<div class="text-primary size-8">
<svg fill="none" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg"><path d="M44 11.2727C44 14.0109 39.8386 16.3957 33.69 17.6364C39.8386 18.877 44 21.2618 44 24C44 26.7382 39.8386 29.123 33.69 30.3636C39.8386 31.6043 44 33.9891 44 36.7273C44 40.7439 35.0457 44 24 44C12.9543 44 4 40.7439 4 36.7273C4 33.9891 8.16144 31.6043 14.31 30.3636C8.16144 29.123 4 26.7382 4 24C4 21.2618 8.16144 18.877 14.31 17.6364C8.16144 16.3957 4 14.0109 4 11.2727C4 7.25611 12.9543 4 24 4C35.0457 4 44 7.25611 44 11.2727Z" fill="currentColor"></path></svg>
</div>
<h1 class="text-lg font-bold text-gray-900">ADMINISTRACIÓN DE JUEGOS</h1>
</div>
<nav class="hidden md:flex items-center gap-6">
<a class="text-sm font-medium text-gray-700 hover:text-primary transition-colors" href="#">Dashboard</a>
<a class="text-sm font-medium text-primary" href="#">Matches</a>
<a class="text-sm font-medium text-gray-700 hover:text-primary transition-colors" href="#">Players</a>
<a class="text-sm font-medium text-gray-700 hover:text-primary transition-colors" href="#">Teams</a>
</nav>
<div class="flex items-center gap-4">
<button class="p-2 rounded-full hover:bg-gray-100 text-gray-700">
<span class="material-symbols-outlined">notifications</span>
</button>
<div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCjlm4Px62uqjme9QrTW3jpFhSbD6An1zBIWQBfqvFUB8LB5fYnn6zdGsnIGS5VPrCs879SIwW6K4MX1t3xWlSYV1Lc2ZI014jt6ZmaKD59cbmUSYV85_A9E7EIfprkgP7al6Ro8XGLD9jJv28O1NeQUbIyCmRsxChPEIS8qTQjIrOGKdoJoZdqtBM1SEdaLAPDFg-I8DYrmqq-VaKnTu5pHfWUQYHgW2dOuHypa3mKWoLutk31RvBAIEmNN0CO72dWL72fktvMAxSA");'></div>
</div>
</header>
<main class="flex-1 overflow-y-auto p-4 md:p-10 pb-20">
<div class="max-w-[120rem] mx-auto grid grid-cols-1 lg:grid-cols-3 gap-8">
<div class="lg:col-span-2">
<div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6 gap-4">
<h2 class="text-2xl md:text-3xl font-bold text-gray-900">Partidas en Juego</h2>
<button class="hidden md:flex items-center justify-center gap-2 px-4 py-2 bg-primary text-white rounded-lg hover:bg-primary/90 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 transition-colors text-sm font-medium" onclick="document.getElementById('add-match-modal').classList.remove('hidden'); document.getElementById('add-match-modal').classList.add('flex');">
<span class="material-symbols-outlined text-base">add</span>
<span>Add Match</span>
</button>
</div>
<div class="bg-white border border-gray-200 rounded-lg shadow-sm overflow-hidden mb-8">
<div class="p-4 flex flex-col sm:flex-row justify-between items-center gap-4">
<div class="relative w-full sm:w-auto">
<input class="block w-full rounded-lg border-gray-300 bg-white pl-10 pr-4 py-2 text-gray-900 focus:border-primary focus:ring-primary text-sm" placeholder="Search matches..." type="text"/>
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 text-base">search</span>
</div>
<div class="flex flex-col sm:flex-row gap-2 w-full sm:w-auto">
<select class="block w-full sm:w-auto rounded-lg border-gray-300 bg-white focus:border-primary focus:ring-primary text-gray-900 text-sm">
<option>All Sports</option>
<option>Soccer</option>
<option>Basketball</option>
<option>Volleyball</option>
<option>Tennis</option>
<option>Badminton</option>
</select>
<select class="block w-full sm:w-auto rounded-lg border-gray-300 bg-white focus:border-primary focus:ring-primary text-gray-900 text-sm">
<option>All Statuses</option>
<option>Scheduled</option>
<option>Live</option>
<option>Completed</option>
<option>Cancelled</option>
</select>
</div>
</div>
<div class="overflow-x-auto">
<table class="min-w-full text-sm text-left">
<thead class="bg-gray-50 text-xs uppercase text-gray-700">
<tr>
<th class="px-6 py-3 font-semibold" scope="col">
<button class="flex items-center gap-1">Date &amp; Time <span class="material-symbols-outlined text-sm">unfold_more</span></button>
</th>
<th class="px-6 py-3 font-semibold" scope="col">Game</th>
<th class="px-6 py-3 font-semibold" scope="col">Location</th>
<th class="px-6 py-3 font-semibold" scope="col">Teams</th>
<th class="px-6 py-3 font-semibold" scope="col">Score</th>
<th class="px-6 py-3 font-semibold" scope="col">Status</th>
<th class="px-6 py-3 font-semibold text-right" scope="col">Actions</th>
</tr>
</thead>
<tbody class="divide-y divide-gray-200">
<tr class="odd:bg-white even:bg-gray-50 hover:bg-gray-100 transition-colors">
<td class="px-6 py-4 whitespace-nowrap text-gray-900 font-medium">July 15, 2024, 7:00 PM</td>
<td class="px-6 py-4 whitespace-nowrap text-gray-800">Soccer</td>
<td class="px-6 py-4 whitespace-nowrap text-gray-800">City Park Field</td>
<td class="px-6 py-4 whitespace-nowrap text-gray-800">Team A vs. Team B</td>
<td class="px-6 py-4 whitespace-nowrap text-gray-800">2 - 1</td>
<td class="px-6 py-4 whitespace-nowrap">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-primary/20 text-primary">Scheduled</span>
</td>
<td class="px-6 py-4 whitespace-nowrap text-right">
<button class="p-1 text-gray-600 hover:text-primary rounded-full hover:bg-gray-100" onclick="document.getElementById('add-match-modal').classList.remove('hidden'); document.getElementById('add-match-modal').classList.add('flex');"><span class="material-symbols-outlined text-base">edit</span></button>
<button class="p-1 text-gray-600 hover:text-red-600 rounded-full hover:bg-red-50/50"><span class="material-symbols-outlined text-base">cancel</span></button>
</td>
</tr>
<tr class="odd:bg-white even:bg-gray-50 hover:bg-gray-100 transition-colors">
<td class="px-6 py-4 whitespace-nowrap text-gray-900 font-medium">July 15, 2024, 7:00 PM</td>
<td class="px-6 py-4 whitespace-nowrap text-gray-800">Soccer</td>
<td class="px-6 py-4 whitespace-nowrap text-gray-800">City Park Field</td>
<td class="px-6 py-4 whitespace-nowrap text-gray-800">Team A vs. Team B</td>
<td class="px-6 py-4 whitespace-nowrap text-gray-800">0 - 0</td>
<td class="px-6 py-4 whitespace-nowrap">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-primary/20 text-primary">Scheduled</span>
</td>
<td class="px-6 py-4 whitespace-nowrap text-right">
<button class="p-1 text-gray-600 hover:text-primary rounded-full hover:bg-gray-100" onclick="document.getElementById('add-match-modal').classList.remove('hidden'); document.getElementById('add-match-modal').classList.add('flex');"><span class="material-symbols-outlined text-base">edit</span></button>
<button class="p-1 text-gray-600 hover:text-red-600 rounded-full hover:bg-red-50/50"><span class="material-symbols-outlined text-base">cancel</span></button>
</td>
</tr>
<tr class="odd:bg-white even:bg-gray-50 hover:bg-gray-100 transition-colors">
<td class="px-6 py-4 whitespace-nowrap text-gray-900 font-medium">July 15, 2024, 7:00 PM</td>
<td class="px-6 py-4 whitespace-nowrap text-gray-800">Soccer</td>
<td class="px-6 py-4 whitespace-nowrap text-gray-800">City Park Field</td>
<td class="px-6 py-4 whitespace-nowrap text-gray-800">Team A vs. Team B</td>
<td class="px-6 py-4 whitespace-nowrap text-gray-800">0 - 0</td>
<td class="px-6 py-4 whitespace-nowrap">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-primary/20 text-primary">Scheduled</span>
</td>
<td class="px-6 py-4 whitespace-nowrap text-right">
<button class="p-1 text-gray-600 hover:text-primary rounded-full hover:bg-gray-100" onclick="document.getElementById('add-match-modal').classList.remove('hidden'); document.getElementById('add-match-modal').classList.add('flex');"><span class="material-symbols-outlined text-base">edit</span></button>
<button class="p-1 text-gray-600 hover:text-red-600 rounded-full hover:bg-red-50/50"><span class="material-symbols-outlined text-base">cancel</span></button>
</td>
</tr>
<tr class="odd:bg-white even:bg-gray-50 hover:bg-gray-100 transition-colors">
<td class="px-6 py-4 whitespace-nowrap text-gray-900 font-medium">July 15, 2024, 7:00 PM</td>
<td class="px-6 py-4 whitespace-nowrap text-gray-800">Soccer</td>
<td class="px-6 py-4 whitespace-nowrap text-gray-800">City Park Field</td>
<td class="px-6 py-4 whitespace-nowrap text-gray-800">Team A vs. Team B</td>
<td class="px-6 py-4 whitespace-nowrap text-gray-800">0 - 0</td>
<td class="px-6 py-4 whitespace-nowrap">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-primary/20 text-primary">Scheduled</span>
</td>
<td class="px-6 py-4 whitespace-nowrap text-right">
<button class="p-1 text-gray-600 hover:text-primary rounded-full hover:bg-gray-100" onclick="document.getElementById('add-match-modal').classList.remove('hidden'); document.getElementById('add-match-modal').classList.add('flex');"><span class="material-symbols-outlined text-base">edit</span></button>
<button class="p-1 text-gray-600 hover:text-red-600 rounded-full hover:bg-red-50/50"><span class="material-symbols-outlined text-base">cancel</span></button>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
<div class="lg:col-span-1">
<h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-6">Próxima Partida</h2>
<div class="bg-primary/10 border border-primary/30 rounded-lg shadow-sm p-6 mb-8 flex flex-col gap-4">
<p class="text-sm text-gray-700">Next Match:</p>
<div class="flex items-center gap-4">
<img alt="Team C Logo" class="size-16" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDeGYq7ITOyEQSpdp6ahL4BGLdoT7p8UhoUleAdwY8mG91RDjkx6PDxhWiLO3hQ9R5gJ0-k2U6qjvxbb0gp0rdqCCrZc2Uzx4BGJpuWkTv2XMPV96hi7nZc6degBENeowqgfy73WBhBZ_NY1ouv3TgcOpQtS4pK8O3zqrALOvLRbArhe2Ko7bdJzuEGyyVtmZ6CKOvUVK_MYyBFoUjWgDyneQZ8nxDfWEJtKrWEd3AYdtMYnoqGYGQbk9cMg8VPJRTwa8QsTsLD6hyg"/>
<div>
<p class="text-xl md:text-2xl font-bold text-primary">July 16, 2024, 8:30 PM</p>
<p class="text-lg md:text-xl text-gray-800">Team C vs. Team D</p>
</div>
<img alt="Team D Logo" class="size-16" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA-xvolqFckcLo6wa1Wc6G5vJ6Cj5Gc8SX7asdBr7bDUuDOAkbjC9vk2qnxXK9bcJFt1YY1tdbpnh6mRbyn6kgYm3lp7Sy-Oz-sZ0mUaPqR3LCSv6_q6eFJY4Z-RhiI9hxMjt7pCp14c21joj_wwwli1tHfdeilw6iDEnH2Ivy1IPbt9-V9gwYk8sBI-KjFhuIErLb50s-MpKGwts58qSdRJ0_fM944PpRnyvB1tVwo-IdY6ai4sJu_-DuSHhi-boq0vas5JTrF2Uxy"/>
</div>
<div class="flex flex-col gap-2">
<p class="text-gray-700 text-sm">Location: <span class="font-medium">Community Center Gym</span></p>
<p class="text-gray-700 text-sm">Sport: <span class="font-medium">Basketball</span></p>
</div>
<div class="flex gap-2 justify-end">
<button class="px-3 py-1 bg-white text-primary border border-primary rounded-lg hover:bg-primary/5 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 transition-colors text-sm font-medium" onclick="document.getElementById('add-match-modal').classList.remove('hidden'); document.getElementById('add-match-modal').classList.add('flex');">
<span class="material-symbols-outlined text-base align-middle">edit</span>
<span class="align-middle">Edit</span>
</button>
<button class="px-3 py-1 bg-red-500 text-white rounded-lg hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition-colors text-sm font-medium">
<span class="material-symbols-outlined text-base align-middle">cancel</span>
<span class="align-middle">Cancel</span>
</button>
</div>
</div>
<h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-6">Próximas Partidas</h2>
<div class="space-y-4">
<div class="bg-white border border-gray-200 rounded-lg shadow-sm p-4 flex items-center gap-4">
<img alt="Team E Logo" class="size-12" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCe23FvVD-CMDlWTgbci8iM0c1ywNkVG26aH_4ms24CvRYaGeV4H45ul_3Nh0OSuXLsoJrUX-jqxgkzoA9fTXfqz-DAZPK8wArXcoWh37iKTNwnMjPCK9IhCvt72W0HkktrMmgmec6nKo1rnK3Tos1WLigx4Mt_AhqZEER9msoIz9r7pFZJQAM9_tDoeP2_QQcdcS6Rcj7klt_fAStERaZOzW1gIsNBBbq2jcWs977lPkfABbdpvgXmFFgNomn5R1VZCx10vnzBZ1yH"/>
<div>
<p class="font-medium text-gray-900">July 17, 2024, 6:00 PM</p>
<p class="text-sm text-gray-700">Volleyball - Team E vs. Team F</p>
<p class="text-xs text-gray-500">Location: Beach Courts</p>
</div>
<div class="ml-auto flex gap-1">
<button class="p-1 text-gray-600 hover:text-primary rounded-full hover:bg-gray-100" onclick="document.getElementById('add-match-modal').classList.remove('hidden'); document.getElementById('add-match-modal').classList.add('flex');"><span class="material-symbols-outlined text-base">edit</span></button>
<button class="p-1 text-gray-600 hover:text-red-600 rounded-full hover:bg-red-50/50"><span class="material-symbols-outlined text-base">cancel</span></button>
</div>
</div>
<div class="bg-white border border-gray-200 rounded-lg shadow-sm p-4 flex items-center gap-4">
<img alt="Player 1 Logo" class="size-12" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBPOkBZ0FawAQ8vaKMksZIv2G0O7Bg3vWlnM80BtDwo1SAx9WSBa33TYQaPVwvFY1XMvUXMVgKVhRcNiI9VO6mprrOofYTC5XSk3mBZUoQWqfG_dIpOKBG_ber_PvC1PA0LaqJ8p9QU39Nr4V-NdNvT-iFQR3CI4Fkf8msrNxlvLZ4C-94_o7KjveBwd1h1eH_O3M-i8o1Fk5sBqlt2tET2xlxCY_ZT7JUYjobMpFt89LIsi5h9seT1vTVoW8ndNHN_3rogJ26FugWn"/>
<div>
<p class="font-medium text-gray-900">July 18, 2024, 7:30 PM</p>
<p class="text-sm text-gray-700">Tennis - Player 1 vs. Player 2</p>
<p class="text-xs text-gray-500">Location: Tennis Club</p>
</div>
<div class="ml-auto flex gap-1">
<button class="p-1 text-gray-600 hover:text-primary rounded-full hover:bg-gray-100" onclick="document.getElementById('add-match-modal').classList.remove('hidden'); document.getElementById('add-match-modal').classList.add('flex');"><span class="material-symbols-outlined text-base">edit</span></button>
<button class="p-1 text-gray-600 hover:text-red-600 rounded-full hover:bg-red-50/50"><span class="material-symbols-outlined text-base">cancel</span></button>
</div>
</div>
<div class="bg-white border border-gray-200 rounded-lg shadow-sm p-4 flex items-center gap-4">
<img alt="Player 3 Logo" class="size-12" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDPdDQJXzy2AV6LVH2PNIAVF6lHvWYS1NSR3IFhVaLyFlGGKmmqMItGDF-sfN_CnhGLLwTI3H76ac_PESTni-VSPjOajo_xlFa4H7ySkjAeqlGo79L4Fzb0EgE-o_Nm3DtAAg448RwUZSQrW58odmen52x5lqT8ChfUlpXjtaAQNWYOCykhStXvCQof5l-HnwJXgw4E_zCEXo4SzulLjfrYwDoYCovERWMQNUoyjjhvqEsjYUJFGbgAm2ZXx8pd01Jjeb3ownUthJve"/>
<div>
<p class="font-medium text-gray-900">July 19, 2024, 9:00 PM</p>
<p class="text-sm text-gray-700">Badminton - Player 3 vs. Player 4</p>
<p class="text-xs text-gray-500">Location: Indoor Arena</p>
</div>
<div class="ml-auto flex gap-1">
<button class="p-1 text-gray-600 hover:text-primary rounded-full hover:bg-gray-100" onclick="document.getElementById('add-match-modal').classList.remove('hidden'); document.getElementById('add-match-modal').classList.add('flex');"><span class="material-symbols-outlined text-base">edit</span></button>
<button class="p-1 text-gray-600 hover:text-red-600 rounded-full hover:bg-red-50/50"><span class="material-symbols-outlined text-base">cancel</span></button>
</div>
</div>
</div>
</div>
</div>
</main>
<div class="fixed inset-0 bg-black/50 hidden items-center justify-center p-4" id="add-match-modal">
<div class="bg-white rounded-lg shadow-xl w-full max-w-lg p-6">
<div class="flex justify-between items-center mb-4">
<h3 class="text-xl font-bold text-gray-900">Add/Edit Match</h3>
<button class="p-1 rounded-full hover:bg-gray-100" onclick="document.getElementById('add-match-modal').classList.remove('flex'); document.getElementById('add-match-modal').classList.add('hidden');">
<span class="material-symbols-outlined">close</span>
</button>
</div>
<form class="space-y-4">
<div>
<label class="block text-sm font-medium text-gray-700" for="game">Game</label>
<input class="mt-1 block w-full rounded-lg border-gray-300 bg-white focus:border-primary focus:ring-primary text-gray-900" id="game" type="text"/>
</div>
<div>
<label class="block text-sm font-medium text-gray-700" for="datetime">Date &amp; Time</label>
<input class="mt-1 block w-full rounded-lg border-gray-300 bg-white focus:border-primary focus:ring-primary text-gray-900" id="datetime" type="datetime-local"/>
</div>
<div>
<label class="block text-sm font-medium text-gray-700" for="location">Location</label>
<input class="mt-1 block w-full rounded-lg border-gray-300 bg-white focus:border-primary focus:ring-primary text-gray-900" id="location" type="text"/>
</div>
<div>
<label class="block text-sm font-medium text-gray-700" for="teams">Teams</label>
<input class="mt-1 block w-full rounded-lg border-gray-300 bg-white focus:border-primary focus:ring-primary text-gray-900" id="teams" placeholder="e.g. Team A vs. Team B" type="text"/>
</div>
<div class="flex justify-end gap-3 pt-4">
<button class="px-4 py-2 text-sm font-medium text-gray-700 bg-gray-200 hover:bg-gray-300 rounded-lg" onclick="document.getElementById('add-match-modal').classList.remove('flex'); document.getElementById('add-match-modal').classList.add('hidden');" type="button">Cancel</button>
<button class="px-4 py-2 text-sm font-medium text-white bg-primary hover:bg-primary/90 rounded-lg" type="submit">Save Match</button>
</div>
</form>
</div>
</div>
<button class="md:hidden fixed bottom-20 right-6 z-40 flex items-center justify-center size-14 bg-primary text-white rounded-full shadow-lg hover:bg-primary/90 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 transition-colors" onclick="document.getElementById('add-match-modal').classList.remove('hidden'); document.getElementById('add-match-modal').classList.add('flex');">
<span class="material-symbols-outlined text-3xl">add</span>
</button>
<nav class="fixed bottom-0 left-0 w-full bg-white border-t border-gray-200 flex justify-around items-center h-16 md:hidden z-50">
<a class="flex flex-col items-center gap-1 text-xs font-medium text-gray-700 hover:text-primary transition-colors" href="#">
<span class="material-symbols-outlined text-2xl">dashboard</span>
<span>Dashboard</span>
</a>
<a class="flex flex-col items-center gap-1 text-xs font-medium text-primary" href="#">
<span class="material-symbols-outlined text-2xl">event</span>
<span>Matches</span>
</a>
<a class="flex flex-col items-center gap-1 text-xs font-medium text-gray-700 hover:text-primary transition-colors" href="#">
<span class="material-symbols-outlined text-2xl">groups</span>
<span>Players</span>
</a>
<a class="flex flex-col items-center gap-1 text-xs font-medium text-gray-700 hover:text-primary transition-colors" href="#">
<span class="material-symbols-outlined text-2xl">sports_score</span>
<span>Teams</span>
</a>
</nav>
</div>

</body></html>