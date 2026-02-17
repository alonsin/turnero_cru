<div>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />

    <style>
        body {
            font-family: 'Space Grotesk', sans-serif;
            background-color: #f8fafc;
            color: #212529;
        }

        .tournament-header {
            background: linear-gradient(135deg, #111827, #1f2937);
            color: white;
        }

        .tab-buttons .btn {
            min-width: 170px;
        }

        .table-container {
            border: 1px solid #e9ecef;
            border-radius: 1rem;
            overflow: hidden;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.05);
            background: #fff;
        }

        .table thead th {
            background-color: #f8f9fa;
            text-transform: uppercase;
            font-size: 0.75rem;
            letter-spacing: 0.05em;
            color: #6c757d;
            padding: 1rem;
        }

        .table tbody td {
            padding: 1rem;
            font-size: 0.9rem;
            vertical-align: middle;
        }

        .action-btn {
            background: none;
            border: none;
            color: #6c757d;
            padding: 6px;
            border-radius: 50%;
            transition: all 0.2s;
        }

        .action-btn:hover {
            background-color: #f1f3f5;
            color: #0d6efd;
        }

        .game-card {
            border: 1px solid #e9ecef;
            border-radius: 1rem;
            padding: 1rem;
            margin-bottom: 1rem;
            background: #ffffff;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.05);
            transition: 0.2s ease;
        }

        .game-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
        }

        .game-header {
            display: flex;
            justify-content: space-between;
            font-size: 0.85rem;
            color: #6c757d;
            margin-bottom: 0.75rem;
        }

        .game-players {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 0.5rem;
            font-weight: 600;
            margin-bottom: 0.75rem;
            flex-wrap: wrap;
        }

        .game-status {
            display: flex;
            justify-content: center;
            margin-bottom: 0.75rem;
        }

        .game-actions {
            display: flex;
            justify-content: center;
            gap: 0.5rem;
            flex-wrap: wrap;
        }

        .action-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 4px;
            padding: 6px 10px;
            border-radius: 10px;
            border: none;
            font-size: 0.85rem;
            font-weight: 500;
            background: #f3f4f6;
            color: #374151;
            transition: all 0.2s ease;
        }

        .action-btn:hover {
            background: #e5e7eb;
            transform: translateY(-1px);
        }

        .action-btn-danger {
            background: rgba(220, 38, 38, 0.08);
            color: #b91c1c;
        }

        .action-btn-danger:hover {
            background: rgba(220, 38, 38, 0.15);
        }

        .status-action-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 34px;
            height: 34px;
            border-radius: 10px;
            border: none;
            background: rgba(220, 38, 38, 0.08);
            color: #b91c1c;
            transition: all 0.2s ease;
        }

        .status-action-btn:hover {
            background: rgba(220, 38, 38, 0.15);
            transform: scale(1.05);
        }
    </style>

    <main class="container-fluid px-3 px-md-4 py-4">

        {{-- ===== HEADER ===== --}}
        <div class="rounded-4 shadow-sm mb-4 overflow-hidden">

            <div class="tournament-header text-center py-4 px-3">
                <h5 class="fw-bold mb-1">
                    {{ optional($turneroMesas->first())->tournament->name_tournament ?? 'Torneo' }}
                </h5>
                <small class="opacity-75">
                    Administración de Juegos
                </small>
            </div>

            <div class="bg-white p-3">
                <div class="d-flex justify-content-center flex-wrap gap-2 tab-buttons">

                    <button
                        class="btn rounded-pill px-4 {{ $activeTab === 'juegos' ? 'btn-dark shadow-sm' : 'btn-outline-secondary' }}"
                        wire:click="$set('activeTab', 'juegos')">
                        Juegos Actuales
                    </button>

                    <button
                        class="btn rounded-pill px-4 {{ $activeTab === 'espera' ? 'btn-dark shadow-sm' : 'btn-outline-secondary' }}"
                        wire:click="$set('activeTab', 'espera')">
                        Juegos en Espera
                    </button>

                    <button
                        class="btn rounded-pill px-4 {{ $activeTab === 'finalizados' ? 'btn-dark shadow-sm' : 'btn-outline-secondary' }}"
                        wire:click="$set('activeTab', 'finalizados')">
                        Juegos Finalizados
                    </button>
                    <button
                        class="btn rounded-pill px-4 {{ $activeTab === 'promediosgrupos' ? 'btn-dark shadow-sm' : 'btn-outline-secondary' }}"
                        wire:click="$set('activeTab', 'promediosgrupos')">
                        Prom Grupos
                    </button>
                    <button
                        class="btn rounded-pill px-4 {{ $activeTab === 'promfinales' ? 'btn-dark shadow-sm' : 'btn-outline-secondary' }}"
                        wire:click="$set('activeTab', 'promfinales')">
                        Lista Final
                    </button>

                </div>
            </div>
        </div>

        {{-- ================= TAB CONTENT ================= --}}

        {{-- ================= JUEGOS ACTUALES ================= --}}
        @if($activeTab === 'juegos')

        {{-- Desktop --}}
        <div class="d-none d-md-block">
            <div class="table-container">
                <table class="table table-hover mb-0 text-center">
                    <thead>
                        <tr>
                            <th>Mesa</th>
                            <th>Grupo</th>
                            <th>Juego</th>
                            <th>Estatus</th>
                            <th>Acciones</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($turneroMesas as $t)
                        <tr>
                            <td>{{ $t->mesa->name ?? 'En espera' }}</td>
                            <td>{{ $t->id_grupo }}</td>
                            <td>
                                <span class="badge bg-primary bg-opacity-25 text-primary">
                                    {{ $t->player1->name_player }}
                                </span>
                                <span class="mx-1 text-muted">vs</span>
                                <span class="badge bg-warning bg-opacity-25 text-danger">
                                    {{ $t->player2->name_player }}
                                </span>
                            </td>
                            <td>
                                <span class="badge {{ $statusBadges[$t->estatus->name_estatus] ?? 'bg-light text-dark' }}">
                                    {{ $t->estatus->name_estatus }}
                                </span>
                            </td>
                            <td>
                                <button class="action-btn"
                                    wire:click="$dispatch('openEditGameModal', { id: {{ $t->id }}, from: 'currentgames', mode: 'edit' })">
                                    <span class="material-symbols-outlined">edit</span>
                                </button>
                            </td>
                            <td>
                                <button class="action-btn action-btn-danger"
                                    wire:click="$dispatch('endGame', { id: {{ $t->id }}, mode: 'edit' })">

                                    <span class="material-symbols-outlined">
                                        task_alt
                                    </span>

                                    <span class="d-none d-lg-inline ms-1">
                                        Finalizar
                                    </span>
                                </button>
                            </td>

                        </tr>
                        @empty
                        <tr>
                            <td colspan="5">No hay juegos activos.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        {{-- Mobile --}}
        <div class="d-md-none">
            @forelse ($turneroMesas as $t)
            <div class="game-card">
                <div class="game-header">
                    <span><strong>Mesa:</strong> {{ $t->mesa->name ?? 'En espera' }}</span>
                    <span><strong>Grupo:</strong> {{ $t->id_grupo }}</span>
                </div>

                <div class="game-players">
                    <span class="badge bg-opacity-25 text-primary">
                        {{ $t->player1->name_player }}
                    </span>
                    <span class="text-muted">vs</span>
                    <span class="badge bg-opacity-25 text-danger">
                        {{ $t->player2->name_player }}
                    </span>
                </div>

                <div class="game-status d-flex justify-content-between align-items-center mt-2">

                    <span class="badge {{ $statusBadges[$t->estatus->name_estatus] ?? 'bg-light text-dark' }}">
                        {{ $t->estatus->name_estatus }}
                    </span>

                    <button class="action-btn"
                        wire:click="$dispatch('openEditGameModal', { id: {{ $t->id }}, from: 'currentgames', mode: 'edit' })">
                        <span class="material-symbols-outlined">edit</span>
                    </button>

                    <button class="status-action-btn"
                        wire:click="$dispatch('endGame', { id: {{ $t->id }}, mode: 'edit' })">
                        <span class="material-symbols-outlined">task_alt</span>
                    </button>

                </div>

            </div>
            @empty
            <p class="text-center">No hay juegos activos.</p>
            @endforelse
        </div>

        @endif


        {{-- ================= ESPERA ================= --}}
        @if($activeTab === 'espera')

        <div class="d-flex justify-content-between align-items-center mb-3 flex-wrap gap-2">
            <h5 class="fw-semibold mb-0">Juegos próximos</h5>

            <button
                wire:click="$dispatch('openEditGameModal', {id: null, from: 'waitinggames', mode: 'create'})"
                class="btn btn-dark shadow-sm">
                Agregar juego
            </button>
        </div>

        {{-- Desktop --}}
        <div class="d-none d-md-block">
            <div class="table-container">
                <table class="table table-hover mb-0 text-center">
                    <thead>
                        <tr>
                            <th>Turno</th>
                            <th>Mesa</th>
                            <th>Grupo</th>
                            <th>Juego</th>
                            <th>Estatus</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($turneroEspera as $t)
                        <tr>
                            <td>00{{ $t->posicion_cola }}</td>
                            <td>
                                <button wire:click="$dispatch('openAssingTable', { id: {{ $t->id }} })"
                                    class="btn btn-sm btn-outline-primary">
                                    Asignar mesa
                                </button>
                            </td>
                            <td>{{ $t->id_grupo }}</td>
                            <td>
                                {{ $t->player1->name_player }} vs {{ $t->player2->name_player }}
                            </td>
                            <td>
                                {{ $t->estatus->name_estatus }}
                            </td>
                            <td>
                                <button class="action-btn"
                                    wire:click="$dispatch('openEditGameModal', { id: {{ $t->id }}, from: 'waitinggames', mode: 'edit' })">
                                    <span class="material-symbols-outlined">edit</span>
                                </button>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6">No hay juegos en espera.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        {{-- Mobile --}}
        <div class="d-md-none">
            @forelse ($turneroEspera as $t)
            <div class="game-card">
                <div class="game-header">
                    <span><strong>Turno:</strong> 00{{ $t->posicion_cola }}</span>
                    <span><strong>Grupo:</strong> {{ $t->id_grupo }}</span>
                </div>

                <div class="game-players">
                    {{ $t->player1->name_player }} vs {{ $t->player2->name_player }}
                </div>

                <div class="game-actions">
                    <button wire:click="$dispatch('openAssingTable', { id: {{ $t->id }} })"
                        class="btn btn-sm btn-outline-primary">
                        Asignar mesa
                    </button>
                </div>
            </div>
            @empty
            <p class="text-center">No hay juegos en espera.</p>
            @endforelse
        </div>

        @endif


        {{-- ================= FINALIZADOS ================= --}}
        @if($activeTab === 'finalizados')
        <div class="text-center py-0">
            {{-- Desktop --}}
            <div class="d-none d-md-block">
                <div class="table-container">
                    <table class="table table-hover mb-0 text-center">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Grupo</th>
                                <th>Jugador 1</th>
                                <th>Puntos</th>
                                <th>VS</th>
                                <th>Puntos</th>
                                <th>Jugador 2</th>
                                <th>Entradas</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($turneroFinalizados as $t)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <span class="badge rounded-pill px-3 py-2 fw-semibold shadow-sm bg-warning-subtle text-warning-emphasis">
                                        <strong>{{ $t->id_grupo }}</strong>
                                    </span>
                                </td>

                                <td>
                                    {{ $t->player1->name_player }}
                                    ( <strong>{{ $t->carambolas_j1 }}</strong> ) - {{ $t->entradas > 0 
                                                                                    ? number_format($t->carambolas_j1 / $t->entradas, 3) 
                                                                                    : '0.000' }}
                                </td>
                                <td>
                                    {{ $t->pts_j1 }}
                                </td>
                                <td>
                                    <span class="text-muted">vs</span>
                                </td>
                                <td>
                                    {{ $t->pts_j2 }}
                                </td>
                                <td>
                                    {{ $t->player2->name_player }}
                                    ( <strong>{{ $t->carambolas_j2 }}</strong> ) - {{ $t->entradas > 0 
                                                                                    ? number_format($t->carambolas_j2 / $t->entradas, 3) 
                                                                                    : '0.000' }}
                                </td>
                                </td>
                                <td>
                                    <span class="badge rounded-pill px-3 py-2 fw-semibold shadow-sm
                                        {{ $t->entradas == 35 ? 'bg-danger-subtle text-success-emphasis' : 'bg-success-subtle text-danger-emphasis' }}">
                                        {{ $t->entradas }}
                                    </span>
                                </td>


                                <td>
                                    <button class="action-btn"
                                        wire:click="$dispatch('endGame', { id: {{ $t->id }}, mode: 'editfinished' })">
                                        <span class="material-symbols-outlined">edit</span>
                                    </button>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6">No hay juegos en espera.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            {{-- Mobile --}}
            <div class="d-block d-md-none">
                @forelse ($turneroFinalizados as $t)

                <div class="card shadow-sm mb-3 border-0">
                    <div class="card-body p-3">

                        {{-- Header --}}
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="fw-bold text-primary">
                                #{{ $loop->iteration }}
                            </span>
                            <span class="badge bg-secondary">
                                Grupo {{ $t->id_grupo }}
                            </span>
                        </div>

                        {{-- Marcador --}}
                        <div class="text-center my-3">

                            <div class="fw-semibold">
                                {{ $t->player1->name_player }}
                            </div>

                            <div class="display-6 fw-bold">
                                {{ $t->carambolas_j1 }}
                                <span class="text-muted mx-2 fs-6">vs</span>
                                {{ $t->carambolas_j2 }}
                            </div>

                            <div class="fw-semibold">
                                {{ $t->player2->name_player }}
                            </div>

                        </div>

                        {{-- Entradas --}}
                        <div class="d-flex justify-content-between align-items-center small text-muted mb-3">
                            <span>Entradas:</span>
                            <span class="fw-bold">{{ $t->entradas }}</span>
                        </div>

                        {{-- Acciones --}}
                        <div class="d-grid">
                            <button class="btn btn-outline-primary btn-sm"
                                wire:click="$dispatch('endGame', { id: {{ $t->id }}, mode: 'editfinished' })">
                                <span class="material-symbols-outlined align-middle">edit</span>
                                Editar resultado
                            </button>
                        </div>

                    </div>
                </div>

                @empty
                <div class="text-center text-muted py-4">
                    No hay juegos finalizados.
                </div>
                @endforelse
            </div>

        </div>
        @endif
        @if($activeTab === 'promediosgrupos')
        <div class="text-center">
            <livewire:average-groups-results />
        </div>
        @endif
        @if($activeTab === 'promfinales')
        <div class="text-center py-5">
            <h5 class="fw-semibold text-muted">
                Aquí irá el contenido de los promedios y posiciones finales
            </h5>
        </div>
        @endif


        <livewire:edit-game-modal />
        <livewire:asign-table-game-modal />
        <livewire:end--game-modal />

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </main>
</div>