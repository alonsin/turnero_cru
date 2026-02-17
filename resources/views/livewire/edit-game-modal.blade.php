<div>
    <div wire:ignore.self class="modal fade" id="editGameModal" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content border-0 shadow-lg rounded-4 overflow-hidden">

                {{-- HEADER CON ESTILO --}}
                <div class="modal-header border-0 text-white"
                    style="background: linear-gradient(135deg, #374151, #4b5563);">

                    <div>
                        <h5 class="modal-title fw-bold mb-0">
                            @if ($modecurrent === 'edit')
                            🎱 Actualizar - JUEGO {{ $mesa }}
                            @endif
                            @if ($modecurrent === 'create')
                            🎱 NUEVO - JUEGO
                            @endif
                        </h5>
                    </div>

                    <button type="button"
                        class="btn-close btn-close-white"
                        data-bs-dismiss="modal">
                    </button>
                </div>

                <div class="modal-body bg-light pt-4">
                    <div class="card border-0 rounded-4 p-4 mb-4 shadow-sm">
                        <div class="row g-4">

                            {{-- Grupo --}}
                            <div class="col-12 col-md-4">
                                <label class="form-label fw-semibold small text-uppercase text-muted">
                                    Grupo
                                </label>

                                <select
                                    class="form-select rounded-3 @error('grupo_id') is-invalid @enderror"
                                    wire:model="grupo_id"
                                    @disabled($fromTable=='currentgames' )>

                                    <option value="">Seleccione grupo</option>

                                    @foreach($grupos as $value => $label)
                                    <option value="{{ $value }}">
                                        {{ $label }}
                                    </option>
                                    @endforeach
                                </select>

                                @error('grupo_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            @if($fromTable !== 'waitinggames')
                            <div class="col-12 col-md-8">
                                <label class="form-label fw-semibold small text-uppercase text-muted">
                                    Estatus del Juego
                                </label>
                                <select class="form-select rounded-3"
                                    wire:model="estatus_id">
                                    <option value="">Seleccione estatus</option>
                                    @foreach($estatusall as $estatus)
                                    <option value="{{ $estatus->id }}">
                                        {{ $estatus->name_estatus }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            @endif

                        </div>
                    </div>
                    {{-- ENFRENTAMIENTO --}}
                    <div class="card border-0 rounded-4 p-4 shadow">

                        <div class="text-center mb-4">
                            <h6 class="fw-bold text-dark mb-1">
                                Enfrentamiento
                            </h6>
                        </div>

                        <div class="row align-items-center g-4">

                            {{-- Jugador 1 --}}
                            <div class="col-12 col-md-5">
                                <label class="form-label fw-semibold small text-uppercase text-muted">
                                    Jugador 1
                                </label>
                                <select
                                    wire:model="player1_id"
                                    @disabled($fromTable=='currentgames' )
                                    class="form-select rounded-3 @error('player1_id') is-invalid @enderror">
                                    <option value="">Seleccione jugador</option>
                                    @foreach($playersAll as $player)
                                    <option value="{{ $player->id }}">
                                        {{ $player->name_player }}
                                    </option>
                                    @endforeach
                                </select>

                                @error('player1_id')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                                @enderror

                            </div>

                            {{-- VS Visual Mejorado --}}
                            <div class="col-12 col-md-2 text-center">

                                <div class="position-relative d-inline-block">

                                    <div class="rounded-circle bg-dark text-white fw-bold d-flex align-items-center justify-content-center shadow-lg"
                                        style="width: 65px; height: 65px; font-size: 18px;">
                                        VS
                                    </div>
                                </div>

                            </div>

                            {{-- Jugador 2 --}}
                            <div class="col-12 col-md-5">
                                <label class="form-label fw-semibold small text-uppercase text-muted">
                                    Jugador 2
                                </label>
                                <select
                                    class="form-select rounded-3 @error('player2_id') is-invalid @enderror"
                                    @disabled($fromTable == 'currentgames')
                                    wire:model="player2_id">
                                    <option value="">Seleccione jugador</option>
                                    @foreach($playersAll as $player)
                                    <option value="{{ $player->id }}">
                                        {{ $player->name_player }}
                                    </option>
                                    @endforeach
                                </select>

                                @error('player2_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                        </div>
                    </div>

                </div>

                {{-- FOOTER MEJORADO --}}
                <div class="modal-footer bg-white border-0 py-3 px-4">

                    <button type="button"
                        class="btn btn-outline-secondary rounded-3 px-4"
                        data-bs-dismiss="modal">
                        Cancelar
                    </button>

                    <button type="button"
                        class="btn btn-dark rounded-3 px-4 shadow-sm"
                        wire:click="save"
                        wire:loading.attr="disabled">

                        <span wire:loading.remove>
                            {{ $modecurrent === 'edit' ? '💾 Actualizar' : '➕ Crear Juego' }}
                        </span>

                        <span wire:loading>
                            Guardando...
                        </span>
                    </button>


                </div>

            </div>
        </div>
    </div>
</div>