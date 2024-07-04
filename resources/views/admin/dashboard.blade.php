<?php
use App\Http\Controllers\ConfigSistema;

?>
<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-body pb-2">
                <div class="d-flex align-items-start mb-4 mb-xl-0">
                    <div class="flex-grow-1">
                        <h5 class="card-title">Vacantes</h5>
                    </div>                    
                </div>

                <div class="row align-items-center">
                    <div class="col-xl-4">
                        <div class="card bg-light mb-0">
                            <div class="card-body">
                                <div class="py-2">
                                    <h5>Vacantes activas:</h5>
                                    <h2 class="mt-4 pt-1 mb-1">
                                        {{ ConfigSistema::moneyFormat($data['vacantes_activas'],0) }}
                                    </h2>
                                    <p class="text-muted font-size-15 text-truncate"></p>

                
                                    <div class="row mt-4">                                                                                
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-xl-8">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-start">
                                        <div class="flex-grow-1">
                                            <h5 class="card-title mb-2">Estado</h5>
                                        </div>
                                    </div>

                                    <div id="chart-vacantes"  class="apex-charts" dir="ltr"></div>
                                    <div class="mt-1 px-2">
                                        @foreach($data['vacantes_estado']['labels'] as $k => $label)
                                            <div class="order-wid-list d-flex justify-content-between border-bottom">
                                                <p class="mb-0">
                                                    <i class="mdi mdi-square-rounded font-size-10 me-2" style="color:{{ $data['vacantes_estado']['colores'][$k]  }}"></i>
                                                    {{ $label }}
                                                </p>
                                                <div>
                                                    <span class="pe-5">
                                                        {{ ConfigSistema::moneyFormat($data['vacantes_estado']['num'][$k],0) }}
                                                    </span>
                                                </div>
                                            </div>
                                        @endforeach 
                                    </div>

                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-6">
        <div class="card">
            <div class="card-body pb-2">
                <div class="d-flex align-items-start mb-4 mb-xl-0">
                    <div class="flex-grow-1">
                        <h5 class="card-title">Empresas</h5>
                    </div>                    
                </div>

                <div class="row align-items-center">
                    <div class="col-xl-4">
                        <div class="card bg-light mb-0">
                            <div class="card-body">
                                <div class="py-2">
                                    <h5>Empresas registradas:</h5>
                                    <h2 class="mt-4 pt-1 mb-1">
                                        {{ ConfigSistema::moneyFormat($data['empresas_registrados'],0) }}
                                    </h2>
                                    <p class="text-muted font-size-15 text-truncate"></p>

                
                                    <div class="row mt-4">                                                                                
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-xl-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-start">
                                    <div class="flex-grow-1">
                                        <h5 class="card-title mb-2">Estado</h5>
                                    </div>
                                </div>

                                <div id="chart-empresas"  class="apex-charts" dir="ltr"></div>
                                <div class="mt-1 px-2">
                                    @foreach($data['empresas_estado']['labels'] as $k => $label)
                                        <div class="order-wid-list d-flex justify-content-between border-bottom">
                                            <p class="mb-0">
                                                <i class="mdi mdi-square-rounded font-size-10 me-2" style="color:{{ $data['empresas_estado']['colores'][$k]  }}"></i>
                                                {{ $label }}
                                            </p>
                                            <div>
                                                <span class="pe-5">
                                                    {{ ConfigSistema::moneyFormat($data['empresas_estado']['num'][$k],0) }}
                                                </span>
                                            </div>
                                        </div>
                                    @endforeach 
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
</div><!-- end row-->