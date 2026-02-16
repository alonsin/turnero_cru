<div>
    <div wire:ignore.self class="modal fade" id="endGameModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-md modal-fullscreen-sm-down">
            <div class="modal-content border-0 shadow-lg rounded-4 overflow-hidden">

                {{-- HEADER --}}
                <div class="modal-header border-0 text-white py-4"
                    style="background: linear-gradient(135deg, #111827, #1f2937);">

                    <div class="w-100 text-center">
                        <h6 class="text-uppercase small mb-2 opacity-75">
                            Finalizar Juego
                        </h6>

                        <span class="badge bg-light text-dark px-3 py-2 rounded-pill mb-3">
                            Grupo {{ $grupo_id }}
                        </span>

                        <div class="d-flex flex-column flex-sm-row align-items-center justify-content-center gap-3 mt-3">
                            <div class="fw-bold fs-5">
                                {{ $player1name }}
                            </div>

                            <div class="fw-bold fs-4 text-warning">
                                VS
                            </div>

                            <div class="fw-bold fs-5">
                                {{ $player2name }}
                            </div>
                        </div>
                    </div>

                    <button type="button"
                        class="btn-close btn-close-white position-absolute end-0 top-0 m-3"
                        data-bs-dismiss="modal">
                    </button>
                </div>

                {{-- BODY --}}
                <div class="modal-body bg-light p-4">

                    <div class="card border-0 shadow-sm rounded-4 p-4">

                        <div class="row g-4">

                            {{-- Carambolas Jugador 1 --}}
                            <div class="col-12 col-md-6">
                                <label class="form-label fw-semibold text-muted">
                                    {{ $player1name }}
                                </label>
                                <input type="number"
                                    min="0"
                                    max="30"
                                    class="form-control form-control-lg text-center rounded-3 @error('numcaram_j1') is-invalid @enderror"
                                    wire:model="numcaram_j1"
                                    placeholder="0">
                                @error('numcaram_j1')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Carambolas Jugador 2 --}}
                            <div class="col-12 col-md-6">
                                <label class="form-label fw-semibold text-muted">
                                    {{ $player2name }}
                                </label>
                                <input type="number"
                                    min="0"
                                    max="30"
                                    class="form-control form-control-lg text-center rounded-3 @error('numcaram_j2') is-invalid @enderror"
                                    wire:model="numcaram_j2"
                                    placeholder="0">
                                @error('numcaram_j2')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Entradas --}}
                            <div class="col-12 mt-3">
                                <label class="form-label fw-semibold text-muted text-center w-100">
                                    Número de Entradas
                                </label>
                                <input type="number"
                                    min="0"
                                    max="35"
                                    class="form-control form-control-lg text-center rounded-3 @error('entradas') is-invalid @enderror"
                                    wire:model="entradas"
                                    placeholder="0">
                                @error('entradas')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>


                    </div>

                </div>

                {{-- FOOTER --}}
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
                            Finalizar Juego
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