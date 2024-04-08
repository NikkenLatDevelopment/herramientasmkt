<div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center min-vh-100">
            <div class="col-auto">
                <div class="row d-flex align-items-center justify-content-center">
                    <div class="col-12 col-lg">
                        <div class="mb-4 mx-auto text-center"><img src="{{ asset('assets/financial_coffee/img/general/logo.png') }}" srcset="{{ asset('assets/financial_coffee/img/general/logo-2x.png') }} 2x" class="img-fluid" alt="Logo Cafecito Financiero"></div>
                    </div>

                    <div class="col-12 col-lg">
                        <div class="text-center bg-white border border-success border-4 shadow rounded-5 mx-auto p-4 content">
                            <ul class="nav nav-tabs d-none" role="tablist">
                                <li class="nav-item" role="presentation"><button class="nav-link @if ($tab == 0) active @endif" id="step0-tab" data-bs-toggle="tab" data-bs-target="#step0-tab-pane" type="button" role="tab" aria-controls="step0-tab-pane" aria-selected="@if ($tab == 0) true @else false @endif">Home</button></li>
                                <li class="nav-item" role="presentation"><button class="nav-link @if ($tab == 1) active @endif" id="step1-tab" data-bs-toggle="tab" data-bs-target="#step1-tab-pane" type="button" role="tab" aria-controls="step1-tab-pane" aria-selected="@if ($tab == 1) true @else false @endif">Profile</button></li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane fade @if ($tab == 0) show active @endif" id="step0-tab-pane" role="tabpanel" aria-labelledby="step0-tab" tabindex="0">
                                    <form wire:submit.prevent='create' autocomplete="off">
                                        <h1 class="h5 fw-smibold text-success">Invita, comparte y GANA con los <span class="fw-bold">Cafecitos Financieros</span></h1>
                                        <p>Registra tu evento aquí</p>

                                        <div class="form-floating mb-2">
                                            <input type="text" class="form-control rounded-4 datePicker" id="form-date" wire:model="date" placeholder="Fecha evento (*)">
                                            <label for="form-date">Fecha del Evento (<span class="fw-bold text-danger">*</span>)</label>

                                            <!-- Mensaje de error -->
                                            @error('date')<div class="invalid-feedback d-inline-block text-start"><strong>{{ $message }}</strong></div>@enderror
                                            <!-- Mensaje de error -->
                                        </div>

                                        <div class="form-floating mb-2">
                                            <select class="form-select rounded-4" id="form-country" wire:model="country" aria-label="País (*)">
                                                <option selected>Selecciona una opción</option>
                                                <option value="10">Chile</option>
                                                <option value="1">Colombia</option>
                                                <option value="8">Costa Rica</option>
                                                <option value="4">Ecuador</option>
                                                <option value="7">El Salvador</option>
                                                <option value="6">Guatemala</option>
                                                <option value="2">México</option>
                                                <option value="5">Panamá</option>
                                                <option value="3">Perú</option>
                                            </select>

                                            <label for="form-country">País (<span class="fw-bold text-danger">*</span>)</label>

                                            <!-- Mensaje de error -->
                                            @error('country')<div class="invalid-feedback d-inline-block text-start"><strong>{{ $message }}</strong></div>@enderror
                                            <!-- Mensaje de error -->
                                        </div>

                                        <div class="form-floating mb-2">
                                            <input type="text" class="form-control rounded-4" id="form-city" wire:model="city" placeholder="Ciudad (*)">
                                            <label for="form-city">Ciudad (<span class="fw-bold text-danger">*</span>)</label>

                                            <!-- Mensaje de error -->
                                            @error('city')<div class="invalid-feedback d-inline-block text-start"><strong>{{ $message }}</strong></div>@enderror
                                            <!-- Mensaje de error -->
                                        </div>

                                        <hr class="text-secondary">

                                        <div class="text-start mb-2">
                                            <label for="form-file" class="form-label">Sube tu foto aquí (<span class="fw-bold text-danger">*</span>) <span class="small text-muted opacity-75 d-block">Tu foto debe estar en formato .PNG, .JPG o JPEG.</span></label>
                                            <input class="form-control rounded-4" type="file" id="form-file" wire:model="photo" accept=".jpg, .jpeg, .png">

                                            <!-- Mensaje de error -->
                                            @error('photo')<div class="invalid-feedback d-inline-block"><strong>{{ $message }}</strong></div>@enderror
                                            <!-- Mensaje de error -->

                                            <div class="small mt-3" wire:loading wire:target="photo">Cargando foto, espera por favor... <i class="fa-solid fa-circle-notch fa-spin"></i></div>
                                        </div>

                                        <hr class="text-secondary">
                                        <button type="submit" wire:target="photo" wire:loading.attr="disabled" class="btn btn-success rounded-4 py-3 w-100">Participar <i class="fa-solid fa-floppy-disk ms-1"></i> <span wire:loading  wire:target="photo"><div class="spinner-border spinner-border-sm ms-1" role="status"><span class="visually-hidden">Loading...</span></div></span></button>
                                        <div class="mt-2"><a href="https://storage.googleapis.com/vivenikken/sites/regional/cafecito-financiero/terms/terminos-condiciones.pdf?<?php echo date('Ymdhms') ?>" target="_blank" class="small text-muted opacity-50">Términos y Condiciones</a></div>
                                    </form>
                                </div>

                                <div class="tab-pane fade p-2 @if ($tab == 1) show active @endif" id="step1-tab-pane" role="tabpanel" aria-labelledby="step1-tab" tabindex="0">
                                    @if ($stage == 1)
                                        <div class="h5 fw-bold text-success">¡Felicidades por exponer tu negocio y registrar tu evento!</div>
                                        <p class="mb-0">Quedaste registrado/a para participar por un producto NIKKEN en el KicKoff Paso a paso de tu país.</p>
                                    @else
                                        <div class="h5 fw-bold text-success">¡Felicidades por exponer tu negocio y registrar tu evento!</div>
                                        <p class="mb-0">Quedaste registrado/a gana bonos de Seguimiento perfecto por incorporación con kit sistema de agua desde la primera unidad y por compras desde la segunda unidad.</p>

                                        @if (count($table) > 0)
                                            @php
                                            $totalIncorporation = 0;
                                            $bonusIncorporation = 0;
                                            $totalSale = 0;
                                            $bonusSale = 0;
                                            @endphp

                                            @foreach ($table as $item)
                                                @if (trim($item->tipo) != 'Compra')
                                                    @php
                                                        $totalIncorporation += $item->No_Unidades;
                                                        $bonusIncorporation += $item->Total_Amount;
                                                    @endphp
                                                @else
                                                    @php
                                                        $totalSale += $item->No_Unidades;
                                                        $bonusSale += $item->Total_Amount;
                                                    @endphp
                                                @endif
                                            @endforeach

                                            <div class="table-responsive mt-3">
                                                <table class="table table-hover table-striped table-bordered table-sm mb-0">
                                                    <thead class="text-white bg-success">
                                                        <tr>
                                                            <th scope="col"></th>
                                                            <th scope="col" class="small fw-semibold">Cant. Unidades</th>
                                                            <th scope="col" class="small fw-semibold">Bonos</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                            <td class="small fw-semibold">Incorporación</td>
                                                            <td>{{ $totalIncorporation }}</td>
                                                            <td>{{ number_format($bonusIncorporation, 2) }}</td>
                                                        </tr>

                                                        <tr>
                                                            <td class="small fw-semibold">Compra</td>
                                                            <td>{{ $totalSale }}</td>
                                                            <td>{{ number_format($bonusSale, 2) }}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        @endif
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <p class="small text-muted text-center lh-1 opacity-25 mt-4 mb-0">NIKKEN Latinoamérica 2024.</p>
                <p class="small text-muted text-center opacity-25 mb-5">&copy; Todos los derechos reservados.</p>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            function initDatePicker() {
                $('.datePicker').datepicker({
                    autoclose: true,
                    todayHighlight: true,
                    format: "dd-mm-yyyy",
                    language: 'es',
                    startDate: '01-04-2024',
                    endDate: '30-04-2024'
                }).on('change', function(){
                    var name = $(this).attr("wire:model");
                    var value = $(this).val();

                    @this.set(name, value)
                });
            }

            document.addEventListener("DOMContentLoaded", function(event) {
                //Inicializar DatePicker
                initDatePicker();
            });
        </script>
    @endpush
</div>
