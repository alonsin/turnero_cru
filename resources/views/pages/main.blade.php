<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Administrador de Juegos - Turnero</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: "#007bff",
            "background-light": "#ffffff",
          },
          fontFamily: {
            display: ["Space Grotesk"],
          },
        },
      },
    };
  </script>
  <style>
    .material-symbols-outlined {
      font-variation-settings:
        'FILL' 0,
        'wght' 400,
        'GRAD' 0,
        'opsz' 24;
    }
  </style>
</head>

<body class="bg-background-light font-display text-gray-900">
  <div class="flex flex-col min-h-screen">

    <!-- HEADER -->
    <header class="flex items-center justify-between border-b border-gray-200 px-4 py-3 md:px-6 relative">
      <div class="flex items-center gap-4">
        <div class="text-primary size-8">
          <svg fill="none" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
            <path d="M44 11.2727C44 14.0109 39.8386 16.3957 33.69 17.6364C39.8386 18.877 44 21.2618 44 24C44 26.7382 39.8386 29.123 33.69 30.3636C39.8386 31.6043 44 33.9891 44 36.7273C44 40.7439 35.0457 44 24 44C12.9543 44 4 40.7439 4 36.7273C4 33.9891 8.16144 31.6043 14.31 30.3636C8.16144 29.123 4 26.7382 4 24C4 21.2618 8.16144 18.877 14.31 17.6364C8.16144 16.3957 4 14.0109 4 11.2727C4 7.25611 12.9543 4 24 4C35.0457 4 44 7.25611 44 11.2727Z" fill="currentColor"></path>
          </svg>
        </div>
        <h1 class="text-lg font-bold text-gray-900">ADMINISTRACIÓN C R U</h1>
      </div>

      <!-- Botón hamburguesa móvil -->
      <button id="menu-toggle" class="md:hidden p-2 rounded-lg hover:bg-gray-100 text-gray-700">
        <span class="material-symbols-outlined">menu</span>
      </button>

      <div class="hidden md:flex items-center gap-4">
        <button class="p-2 rounded-full hover:bg-gray-100 text-gray-700">
          <span class="material-symbols-outlined">notifications</span>
        </button>
        <div class="bg-center bg-no-repeat bg-cover rounded-full size-10" style='background-image:url("https://lh3.googleusercontent.com/aida-public/AB6AXuCjlm4Px62uqjme9QrTW3jpFhSbD6An1zBIWQBfqvFUB8LB5fYnn6zdGsnIGS5VPrCs879SIwW6K4MX1t3xWlSYV1Lc2ZI014jt6ZmaKD59cbmUSYV85_A9E7EIfprkgP7al6Ro8XGLD9jJv28O1NeQUbIyCmRsxChPEIS8qTQjIrOGKdoJoZdqtBM1SEdaLAPDFg-I8DYrmqq-VaKnTu5pHfWUQYHgW2dOuHypa3mKWoLutk31RvBAIEmNN0CO72dWL72fktvMAxSA");'></div>
      </div>
    </header>

    <!-- CONTENIDO -->
    <main class="flex-1 overflow-y-auto p-4 md:p-10 pb-24">
      <livewire:content-switcher />
    </main>


    <!-- Script JS -->
    <script>
      document.getElementById('menu-toggle').addEventListener('click', function() {
        const nav = document.getElementById('main-nav');
        nav.classList.toggle('hidden');
      });

      window.addEventListener('show-edit-modal', event => {
        const modal = new bootstrap.Modal(document.getElementById('editGameModal'));
        modal.show();
      });

      window.addEventListener('show-asign-table-modal', event => {
        const modal = new bootstrap.Modal(document.getElementById('asignTableGameModal'));
        modal.show();
      });

      window.addEventListener('show-end-game-modal', event => {
        const modal = new bootstrap.Modal(document.getElementById('endGameModal'));
        modal.show();
      });

      document.addEventListener('livewire:init', () => {
        Livewire.on('hide-edit-modal', () => {
          // Cambia '#editGameModal' por el ID real de tu modal en el HTML
          const modalElement = document.getElementById('editGameModal');
          const modalInstance = bootstrap.Modal.getInstance(modalElement);

          if (modalInstance) {
            modalInstance.hide();
          }
        });
      });
      document.addEventListener('livewire:init', () => {
        Livewire.on('hide-end-game-modal', () => {
          // Cambia '#editGameModal' por el ID real de tu modal en el HTML
          const modalElement = document.getElementById('endGameModal');
          const modalInstance = bootstrap.Modal.getInstance(modalElement);

          if (modalInstance) {
            modalInstance.hide();
          }
        });
        Livewire.on('hide-asign-game-modal', () => {
          // Cambia '#editGameModal' por el ID real de tu modal en el HTML
          const modalElement = document.getElementById('asignTableGameModal');
          const modalInstance = bootstrap.Modal.getInstance(modalElement);

          if (modalInstance) {
            modalInstance.hide();
          }
        });
      });
    </script>

</body>

</html>