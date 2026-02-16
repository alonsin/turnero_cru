<div>
    <div wire:ignore.self class="modal fade" id="asignTableGameModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-md modal-fullscreen-sm-down">
            <div class="modal-content border-0 shadow-lg rounded-4 overflow-hidden">

                {{-- HEADER --}}
                <div class="modal-header border-0 text-white py-4"
                    style="background: linear-gradient(135deg, #111827, #1f2937);">

                    <div class="w-100 text-center">
                        <h6 class="text-uppercase small mb-2 opacity-75">
                            Asignar Mesa
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

                        @if(!$hayMesasDisponibles)

                        {{-- MENSAJE SIN MESAS --}}
                        <div class="text-center py-4">
                            <div class="mb-3">
                                <i class="bi bi-exclamation-circle text-warning fs-1"></i>
                            </div>

                            <h6 class="fw-bold mb-2">
                                No hay mesas disponibles
                            </h6>

                            <p class="text-muted mb-0 small">
                                Todas las mesas están en juego actualmente.
                                Espera a que se libere una mesa.
                            </p>
                        </div>

                        @else

                        {{-- SELECT DE MESAS --}}
                        <label class="form-label fw-semibold mb-3">
                            Selecciona la mesa donde jugarán
                        </label>

                        <select
                            class="form-select form-select-lg rounded-3 @error('mesaid') is-invalid @enderror"
                            wire:model="mesaid">

                            <option value="">Seleccione mesa</option>

                            @foreach($mesasDisponibles as $mesa)
                            <option value="{{ $mesa->id }}">
                                Mesa {{ $mesa->numero ?? $mesa->id }}
                            </option>
                            @endforeach
                        </select>

                        @error('mesaid')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror

                        @endif

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
                        wire:loading.attr="disabled"
                        @disabled(!$hayMesasDisponibles)>

                        <span wire:loading.remove>
                            Asignar Mesa
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