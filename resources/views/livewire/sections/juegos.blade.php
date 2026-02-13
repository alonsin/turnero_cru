<div>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />

    <style>
        body {
            font-family: 'Space Grotesk', sans-serif;
            background-color: #ffffff;
            color: #212529;
        }

        /* ===== DESKTOP TABLE ===== */
        .table-container {
            border: 1px solid #e9ecef;
            border-radius: 1rem;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
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

        /* ===== MOBILE CARDS ===== */
        .game-card {
            border: 1px solid #e9ecef;
            border-radius: 1rem;
            padding: 1rem;
            margin-bottom: 1rem;
            background: #ffffff;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            transition: 0.2s ease;
        }

        .game-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.08);
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
    </style>

    <main class="container-fluid px-3 px-md-4 py-4">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="h4 fw-bold mb-0">
                {{$turneroMesas[0]->tournament->name_tournament ?? 'Torneo'}}
            </h2>
        </div>

        {{-- TABS --}}
        <ul class="nav nav-tabs mb-4">
            <li class="nav-item">
                <button class="nav-link {{ $activeTab === 'juegos' ? 'active' : '' }}"
                    wire:click="$set('activeTab', 'juegos')">
                    Juegos Actuales
                </button>
            </li>

            <li class="nav-item">
                <button class="nav-link {{ $activeTab === 'espera' ? 'active' : '' }}"
                    wire:click="$set('activeTab', 'espera')">
                    Juegos en Espera
                </button>
            </li>

            <li class="nav-item">
                <button class="nav-link {{ $activeTab === 'finalizados' ? 'active' : '' }}"
                    wire:click="$set('activeTab', 'finalizados')">
                    Juegos Finalizados
                </button>
            </li>
        </ul>

        <div class="tab-content">

            {{-- ================= JUEGOS ACTUALES ================= --}}
            <div class="tab-pane fade {{ $activeTab === 'juegos' ? 'show active' : '' }}">

                {{-- DESKTOP --}}
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
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($turneroMesas as $t)
                                <tr>
                                    <td>{{ $t->mesa->name ?? 'Sin mesa / En espera' }}</td>
                                    <td>{{$t->id_grupo}}</td>
                                    <td>
                                        <span class="badge bg-primary bg-opacity-25 text-primary">
                                            {{$t->player1->name_player}}
                                        </span>
                                        vs
                                        <span class="badge bg-warning bg-opacity-25 text-danger">
                                            {{$t->player2->name_player}}
                                        </span>
                                    </td>
                                    <td>
                                        <span class="badge {{ $statusBadges[$t->estatus->name_estatus] ?? 'bg-light text-dark' }}">
                                            {{ $t->estatus->name_estatus }}
                                        </span>
                                    </td>
                                    <td>
                                        <button class="action-btn"
                                            wire:click="$dispatch('openEditGameModal', {
                                                id: {{ $t->id }},
                                                from: 'currentgames',
                                                mode: 'edit'
                                            })">
                                            <span class="material-symbols-outlined">edit</span>
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                {{-- MOBILE --}}
                <div class="d-md-none">
                    @foreach ($turneroMesas as $t)
                    <div class="game-card">
                        <div class="game-header">
                            <span><strong>Mesa:</strong> {{ $t->mesa->name ?? 'En espera' }}</span>
                            <span><strong>Grupo:</strong> {{$t->id_grupo}}</span>
                        </div>

                        <div class="game-players">
                            <span class="badge bg-primary bg-opacity-25 text-primary">
                                {{$t->player1->name_player}}
                            </span>
                            <span class="text-muted">vs</span>
                            <span class="badge bg-warning bg-opacity-25 text-danger">
                                {{$t->player2->name_player}}
                            </span>
                        </div>

                        <div class="game-status">
                            <span class="badge {{ $statusBadges[$t->estatus->name_estatus] ?? 'bg-light text-dark' }}">
                                {{ $t->estatus->name_estatus }}
                            </span>
                        </div>

                        <div class="game-actions">
                            <button class="btn btn-sm btn-outline-primary"
                                wire:click="$dispatch('openEditGameModal', {
                                        id: {{ $t->id }},
                                        from: 'currentgames',
                                        mode: 'edit'
                                    })">
                                Editar
                            </button>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- ================= ESPERA ================= --}}
            <div class="tab-pane fade {{ $activeTab === 'espera' ? 'show active' : '' }}">

                <div class="d-flex justify-content-between align-items-center mb-3 flex-wrap gap-2">
                    <h5 class="fw-semibold mb-0">Juegos próximos</h5>

                    <button
                        wire:click="$dispatch('openEditGameModal', {id: null,from: 'waitinggames',mode: 'create'})"
                        class="btn btn-primary shadow-sm">
                        Agregar juego
                    </button>
                </div>

                {{-- DESKTOP --}}
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
                                @foreach ($turneroEspera as $t)
                                <tr>
                                    <td>00{{$t->posicion_cola}}</td>
                                    <td>
                                        <button wire:click="asignarMesa({{ $t->id }})"
                                            class="btn btn-sm btn-outline-primary">
                                            Asignar mesa
                                        </button>
                                    </td>
                                    <td>{{$t->id_grupo}}</td>
                                    <td>
                                        <span class="badge bg-primary bg-opacity-25 text-primary">
                                            {{$t->player1->name_player}}
                                        </span>
                                        vs
                                        <span class="badge bg-warning bg-opacity-25 text-danger">
                                            {{$t->player2->name_player}}
                                        </span>
                                    </td>
                                    <td>
                                        <span class="badge {{ $statusBadges[$t->estatus->name_estatus] ?? 'bg-light text-dark' }}">
                                            {{ $t->estatus->name_estatus }}
                                        </span>
                                    </td>
                                    <td>
                                        <button class="action-btn"
                                            wire:click="$dispatch('openEditGameModal', {
                                                id: {{ $t->id }},
                                                from: 'waitinggames',
                                                mode: 'edit'
                                            })">
                                            <span class="material-symbols-outlined">edit</span>
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                {{-- MOBILE --}}
                <div class="d-md-none">
                    @foreach ($turneroEspera as $t)
                    <div class="game-card">
                        <div class="game-header">
                            <span><strong>Turno:</strong> 00{{$t->posicion_cola}}</span>
                            <span><strong>Grupo:</strong> {{$t->id_grupo}}</span>
                        </div>

                        <div class="game-players">
                            <span class="badge bg-primary bg-opacity-25 text-primary">
                                {{$t->player1->name_player}}
                            </span>
                            <span class="text-muted">vs</span>
                            <span class="badge bg-warning bg-opacity-25 text-danger">
                                {{$t->player2->name_player}}
                            </span>
                        </div>

                        <div class="game-status">
                            <span class="badge {{ $statusBadges[$t->estatus->name_estatus] ?? 'bg-light text-dark' }}">
                                {{ $t->estatus->name_estatus }}
                            </span>
                        </div>

                        <div class="game-actions">
                            <button class="btn btn-sm btn-outline-primary"
                                wire:click="asignarMesa({{ $t->id }})">
                                Asignar mesa
                            </button>

                            <button class="btn btn-sm btn-outline-secondary"
                                wire:click="$dispatch('openEditGameModal', {
                                        id: {{ $t->id }},
                                        from: 'waitinggames',
                                        mode: 'edit'
                                    })">
                                Editar
                            </button>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        </div>

        <livewire:edit-game-modal />

    </main>
</div>