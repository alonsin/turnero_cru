<div>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Estilos -->
    <style>
        body {
            font-family: 'Space Grotesk', sans-serif;
            background-color: #ffffff;
            color: #212529;
        }

        .table-container {
            border: 1px solid #dee2e6;
            border-radius: 0.75rem;
            overflow: hidden;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
            background: #fff;
        }

        .table thead th {
            background-color: #f8f9fa;
            text-transform: uppercase;
            font-size: 0.75rem;
            letter-spacing: 0.05em;
            color: #6c757d;
            padding: 1rem 1.25rem;
            vertical-align: middle;
        }

        .table tbody td {
            padding: 0.85rem 1.25rem;
            vertical-align: middle;
            font-size: 0.875rem;
        }

        .badge-scheduled {
            background-color: rgba(13, 110, 253, 0.1);
            color: #0d6efd;
            font-weight: 500;
            border-radius: 50rem;
            padding: 0.35em 0.8em;
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
            background-color: #f8f9fa;
            color: #0d6efd;
        }

        .action-btn.btn-cancel:hover {
            background-color: #fff5f5;
            color: #dc3545;
        }

        /* 🔥 RESPONSIVE TABLE (CARD STYLE MOBILE) */
        @media (max-width: 768px) {

            main {
                padding-left: 0 !important;
                padding-right: 0 !important;
            }

            .table-container {
                border-radius: 0;
                border-left: 0;
                border-right: 0;
            }

            table thead {
                display: none;
            }

            table,
            table tbody,
            table tr,
            table td {
                display: block;
                width: 100%;
            }

            table tr {
                background: #ffffff;
                border: 1px solid #dee2e6;
                border-radius: 0.75rem;
                margin: 0.75rem;
                padding: 0.75rem;
                box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, .05);
            }

            table td {
                border: none;
                padding: 0.45rem 0;
                display: flex;
                justify-content: space-between;
                align-items: center;
                font-size: 0.85rem;
            }

            table td::before {
                content: attr(data-label);
                font-weight: 600;
                color: #6c757d;
                font-size: 0.7rem;
                text-transform: uppercase;
            }

            table td.text-end {
                justify-content: flex-end;
                gap: 0.5rem;
            }
        }

        /* FAB */
        .fab-btn {
            position: fixed;
            bottom: 80px;
            right: 20px;
            width: 56px;
            height: 56px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            z-index: 1000;
        }
    </style>

    <!-- CONTENIDO -->
    <main class="container-fluid px-0 px-md-4 py-4">
        <div class="container px-3 px-md-0">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-4 gap-3">
                <h2 class="h3 fw-bold mb-0">{{$turneroMesas[0]->tournament->name_tournament}}</h2>
                <!-- <button class="btn btn-primary d-flex align-items-center gap-2 px-4">
                    <span class="material-symbols-outlined fs-6">add</span>
                    Agregar
                </button> -->
            </div>
        </div>

        <div class="container-fluid px-0">


            <div wire:ignore>

                <ul class="nav nav-tabs mb-3" id="turneroTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active"
                            data-bs-toggle="tab"
                            data-bs-target="#juegos"
                            type="button"
                            role="tab">
                            Juegos Actuales
                        </button>
                    </li>

                    <li class="nav-item" role="presentation">
                        <button class="nav-link"
                            data-bs-toggle="tab"
                            data-bs-target="#espera"
                            type="button"
                            role="tab">
                            Juegos en Espera
                        </button>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane fade show active" id="juegos" role="tabpanel">
                        <div class="table-responsive">
                            <div class="table-container">
                                <div class="table-responsive">
                                    <table class="table table-hover table-striped mb-0">
                                        <thead>
                                            <tr class="text-center">
                                                <th>Mesa</th>
                                                <th>Grupo</th>
                                                <th>JUEGO</th>
                                                <th>Tiempo en Juego</th>
                                                <th>Tipo en Turnero</th>
                                                <th>Estatus</th>
                                                <th class="text-end">Acciones</th>
                                            </tr>
                                        </thead>

                                        <tbody>


                                            @foreach ($turneroMesas as $t )
                                            <tr class="text-center">
                                                <td data-label="Mesa" class="fw-medium">
                                                    {{ $t->mesa->name ?? 'Sin mesa / En espera' }}
                                                </td>

                                                <td data-label="Grupo" class="text-center">{{$t->id_grupo}}</td>
                                                <td data-label="Juego" class="text-center text-nowrap">
                                                    <span class="badge bg-primary bg-opacity-25 text-primary">
                                                        {{$t->player1->name_player}}
                                                    </span>

                                                    <small class="mx-1 text-muted fw-semibold">vs</small>

                                                    <span class="badge bg-warning bg-opacity-25 text-danger">
                                                        {{$t->player2->name_player}}
                                                    </span>
                                                </td>


                                                <td data-label="Tiempo" class="text-center text-nowrap">

                                                    <span id="timer-{{$t->id}}" class="fw-bold d-block">
                                                        00:00:00
                                                    </span>
                                                    <div class="mt-1 opacity-75">
                                                        <button class="btn btn-sm btn-success me-1"
                                                            onclick="startTimer({{$t->id}})">▶</button>

                                                        <button class="btn btn-sm btn-warning me-1"
                                                            onclick="pauseTimer({{$t->id}})">⏸</button>

                                                        <button class="btn btn-sm btn-secondary"
                                                            onclick="resetTimer({{$t->id}})">🔄</button>
                                                    </div>

                                                </td>



                                                <td data-label="Tipo">{{$t->TypeGameTurner->nombre}}</td>
                                                <td data-label="Status" class="text-center">
                                                    <span class="badge 
                                        {{ $statusBadges[$t->estatus->name_estatus] ?? 'bg-light text-dark' }}">
                                                        {{ $t->estatus->name_estatus }}
                                                    </span>
                                                </td>

                                                <td data-label="Acciones" class="text-end">
                                                    <button class="action-btn">
                                                        <span class="material-symbols-outlined fs-6">edit</span>
                                                    </button>
                                                </td>

                                            </tr>

                                            @endforeach


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="espera" role="tabpanel">
                        <div class="table-responsive">
                            <div class="table-responsive">
                            <div class="table-container">
                                <div class="table-responsive">
                                    <table class="table table-hover table-striped mb-0">
                                        <thead>
                                            <tr class="text-center">
                                                <th>Mesa</th>
                                                <th>Grupo</th>
                                                <th>JUEGO</th>
                                                <th>Tiempo en Juego</th>
                                                <th>Tipo en Turnero</th>
                                                <th>Estatus</th>
                                                <th class="text-end">Acciones</th>
                                            </tr>
                                        </thead>

                                        <tbody>


                                            @foreach ($turneroEspera as $t )
                                            <tr class="text-center">
                                                <td data-label="Mesa" class="fw-medium">
                                                    {{ $t->mesa->name ?? 'Sin mesa / En espera' }}
                                                </td>

                                                <td data-label="Grupo" class="text-center">{{$t->id_grupo}}</td>
                                                <td data-label="Juego" class="text-center text-nowrap">
                                                    <span class="badge bg-primary bg-opacity-25 text-primary">
                                                        {{$t->player1->name_player}}
                                                    </span>

                                                    <small class="mx-1 text-muted fw-semibold">vs</small>

                                                    <span class="badge bg-warning bg-opacity-25 text-danger">
                                                        {{$t->player2->name_player}}
                                                    </span>
                                                </td>


                                                <td data-label="Tiempo" class="text-center text-nowrap">

                                                    <span id="timer-{{$t->id}}" class="fw-bold d-block">
                                                        00:00:00
                                                    </span>
                                                    <div class="mt-1 opacity-75">
                                                        <button class="btn btn-sm btn-success me-1"
                                                            onclick="startTimer({{$t->id}})">▶</button>

                                                        <button class="btn btn-sm btn-warning me-1"
                                                            onclick="pauseTimer({{$t->id}})">⏸</button>

                                                        <button class="btn btn-sm btn-secondary"
                                                            onclick="resetTimer({{$t->id}})">🔄</button>
                                                    </div>

                                                </td>



                                                <td data-label="Tipo">{{$t->TypeGameTurner->nombre}}</td>
                                                <td data-label="Status" class="text-center">
                                                    <span class="badge 
                                        {{ $statusBadges[$t->estatus->name_estatus] ?? 'bg-light text-dark' }}">
                                                        {{ $t->estatus->name_estatus }}
                                                    </span>
                                                </td>

                                                <td data-label="Acciones" class="text-end">
                                                    <button class="action-btn">
                                                        <span class="material-symbols-outlined fs-6">edit</span>
                                                    </button>
                                                </td>

                                            </tr>

                                            @endforeach


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>

            </div>



            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>



        </div>
        <script>
            let timers = {};
            let intervals = {};

            function startTimer(id) {
                if (!timers[id]) {
                    timers[id] = 0;
                }

                if (intervals[id]) return;

                intervals[id] = setInterval(() => {
                    timers[id]++;
                    document.getElementById(`timer-${id}`).innerText =
                        formatTime(timers[id]);
                }, 1000);
            }

            function pauseTimer(id) {
                clearInterval(intervals[id]);
                intervals[id] = null;
            }

            function resetTimer(id) {
                clearInterval(intervals[id]);
                intervals[id] = null;
                timers[id] = 0;
                document.getElementById(`timer-${id}`).innerText = "00:00:00";
            }

            function formatTime(seconds) {
                let h = String(Math.floor(seconds / 3600)).padStart(2, '0');
                let m = String(Math.floor((seconds % 3600) / 60)).padStart(2, '0');
                let s = String(seconds % 60).padStart(2, '0');
                return `${h}:${m}:${s}`;
            }
        </script>

    </main>
</div>