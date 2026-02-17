<div class="w-full">
    @foreach ($tablas as $grupo => $jugadores)

    <!-- Card principal por grupo -->
    <div class="card mb-4 shadow-sm">

        <!-- Header del grupo -->
        <div class="card-header fw-semibold"
            style="
                background: rgba(99, 102, 241, 0.08);
                backdrop-filter: blur(8px);
                color: #4f46e5;
                border-bottom: 1px solid rgba(99, 102, 241, 0.15);
                font-size: 0.95rem;
                padding: 0.5rem 1rem;
            ">
            Grupo {{ $grupo }}
        </div>

        <!-- Tabla para pantallas grandes -->
        <div class="table-responsive d-none d-md-block">
            <table class="table table-bordered text-center mb-0 table-sm">
                <thead class="table-light" style="font-size: 0.85rem;">
                    <tr>
                        <th>Jugador</th>
                        <th>JJ</th>
                        <th>CF</th>
                        <th>CC</th>
                        <th>Entradas</th>
                        <th>Prom Gral</th>
                        <th>PTS</th>
                    </tr>
                </thead>
                <tbody style="font-size: 0.85rem;">
                    @foreach ($jugadores as $j)
                    <tr>
                        <td class="text-start fw-semibold py-1">{{ $j['jugador'] }}</td>
                        <td class="py-1">{{ $j['jj'] }}</td>
                        <td class="py-1">{{ $j['cf'] }}</td>
                        <td class="py-1">{{ $j['cc'] }}</td>
                        <td class="py-1">{{ $j['entradas'] }}</td>
                        <td class="py-1">{{ $j['promedio'] }}</td>
                        <td class="py-1">{{ $j['pts'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Version móvil: cards verticales -->
        <div class="d-block d-md-none">
            @foreach ($jugadores as $j)
            <div class="card mb-2 shadow-sm">
                <div class="card-body p-2" style="font-size: 0.85rem;">
                    <h6 class="fw-semibold mb-1">{{ $j['jugador'] }}</h6>

                    <div class="row mb-1">
                        <div class="col-6 text-start"><small class="text-muted">JJ</small></div>
                        <div class="col-6 text-end">{{ $j['jj'] }}</div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-6 text-start"><small class="text-muted">CF</small></div>
                        <div class="col-6 text-end">{{ $j['cf'] }}</div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-6 text-start"><small class="text-muted">CC</small></div>
                        <div class="col-6 text-end">{{ $j['cc'] }}</div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-6 text-start"><small class="text-muted">Entradas</small></div>
                        <div class="col-6 text-end">{{ $j['entradas'] }}</div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-6 text-start"><small class="text-muted">Prom</small></div>
                        <div class="col-6 text-end">{{ $j['promedio'] }}</div>
                    </div>
                    <div class="row">
                        <div class="col-6 text-start"><small class="text-muted">PTS</small></div>
                        <div class="col-6 text-end fw-semibold">{{ $j['pts'] }}</div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>

    @endforeach
</div>