@extends('app')

@section('contenido')
<!--Page header-->
<div class="page-header d-xl-flex d-block">
    <div class="page-leftheader">
        <h4 class="page-title">Tablero</h4>
        <span class="text-muted mb-1 fs-16">Hola <span class="mb-1 fs-16 fw-bold">
            {{Auth::user()->roles[0]->name}}
        </span>, bienvenido!</span>
    </div>
</div>
<!--End Page header-->


<!-- Row -->
<!--<div class="row">
    <div class="col-xl-12 col-md-12 col-lg-12">
        <div class="row">
            {{-- ================ T A R J E T A   C L I E N T E S ================ --}}
            <div class="col-xl-3 col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <div class="mt-0 text-left"> <span class="fs-14 font-weight-semibold">Clientes</span>
                                    <h3 class="mb-0 mt-1 mb-2 text-right">{{$clientes}}</h3>
                                    <a href="/clientes" class="text-muted">Ver más</a>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="icon1 bg-success my-auto  float-right"> <i class="feather feather-users"></i> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- ================ T A R J E T A   R E S E R V A C I O N E S   P E N D I E N T E S ================ --}}
            <div class="col-xl-3 col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <div class="mt-0 text-left"> <span class="fs-14 font-weight-semibold">Reservaciones pendientes</span>
                                    <h3 class="mb-0 mt-1 mb-2 text-right">{{$reservacionesPendientes}}</h3>
                                    <a href="/reservaciones" class="text-muted">Ver más</a>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="icon1 bg-primary my-auto  float-right"> <i class="feather feather-calendar"></i> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- ================ T A R J E T A   G A S T O S   D E L   M E S  ================ --}}
            <div class="col-xl-5 col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <div class="mt-0 text-left"> <span class="fs-14 font-weight-semibold">Ganancias del mes</span>
                                <h3 class="mb-0 mt-1 text-secondary mb-2 text-right">${{ number_format($ganancias, 2) }}</h3> </div>
                                <a href="/reportes" class="text-muted">Ver más</a>
                            </div>
                            <div class="col-4">
                                <div class="icon1 bg-secondary brround my-auto  float-right"> <i class="feather feather-dollar-sign"></i> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>-->
<!-- End Row-->


<!-- Row -->
<!--<div class="row">
    {{-- ================ T A R J E T A   G R A F I C A   G A N A N C I A S ================ --}}
    <div class="col-xl-9 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header border-0 responsive-header">
                <h4 class="card-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Resumen de ganancias</font></font></h4>
            </div>
            <div class="card-body"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                <canvas id="chartline1" style="display: block; width: 559px; height: 330px;" width="1118" height="660" class="chartjs-render-monitor"></canvas>
            </div>
        </div>
    </div>
    {{-- ================ T A R J E T A   P A G O S   R E C I E N T E S ================ --}}
    <div class="col-xl-3 col-md-12">
        <div class="card">
            <div class="card-header border-bottom-0">
                <h4 class="card-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Pagos recientes</font></font></h4>
            </div>
            <div class="card-body">
                {{-- PAGO 1 --}}
                @if(!is_null($ultimosPagos))
                    @foreach ($ultimosPagos as $pago)
                    <div class="mb-5">
                        <div class="list-group-item d-flex p-0  align-items-center border-0">
                            <div class="d-flex">
                                <div class="mt-1">
                                    <h6 class="mb-1 font-weight-semibold fs-16">{{$pago->user->name}}
                                        <span class="font-weight-normal">ha completado el pago de su reservación</span>
                                    </h6>
                                    <span class="clearfix"></span>
                                    <span class="fs-14 text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$pago->tiempo}}</font></font></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @else
                    <div class="mb-5">
                        <div class="list-group-item d-flex p-0  align-items-center border-0">
                            <div class="d-flex">
                                <div class="mt-1">
                                    <h6 class="mb-1 font-weight-semibold fs-16">
                                        <span class="font-weight-normal text-muted">Sin actividad reciente</span>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>-->
<!-- End Row-->

<!-- Row-->
<div class="row">
    {{-- ================ T A R J E T A   A C T I V I D A D   R E C I E N T E ================ --}}
    {{-- <div class="col-xl-4 col-md-12">
        <div class="card">
            <div class="card-header border-bottom-0">
                <h4 class="card-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Actividad reciente</font></font></h4>
            </div>
            <div class="card-body">
                <div class="mb-5">
                    <div class="list-group-item d-flex p-0  align-items-center border-0">
                        <div class="d-flex">
                            <div class="mt-1">
                                <h6 class="mb-1 font-weight-semibold fs-16"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mario Moreno Cantinflas
                                     </font></font><span class="font-weight-normal text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">solicita un cambio en </font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Graduación UPV
                                </font></font></h6>
                                <span class="clearfix"></span>
                                <span class="fs-14 text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">hace 30 minutos</font></font></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-5">
                    <div class="list-group-item d-flex p-0  align-items-center border-0">
                        <div class="d-flex">
                            <div class="mt-1">
                                <h6 class="mb-1 font-weight-semibold fs-16"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Forrest Gump
                                     </font></font><span class="font-weight-normal text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">solicita cancelar </font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Fiesta teniente Dan
                                </font></font></h6>
                                <span class="clearfix"></span>
                                <span class="fs-14 text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">hace 45 minutos</font></font></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="row">
    <div class="col-xl-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header  border-0">
                <h4 class="card-title">Lista de productos</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table  table-vcenter text-wrap table-bordered border-bottom" id="project-list">
                        <thead>
                            <tr>
                                <th>Codigo</th>
                                <th>Nombre</th>
                                <th>Unidades vendidas</th>
                                <th>Stock</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                    @isset($productos)
                        <tbody>
                            @foreach ($productos as $producto)
                                <tr>
                                    <td>{{$producto->codigo}}</td>
                                    <td>{{$producto->nombre}}</td>
                                    <td>{{$producto->precio}}</td>
                                    <td>{{$producto->stock}}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Ver"><i class="feather feather-eye text-primary"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @endisset
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

    {{-- ================ T A R J E T A   R E S E R V A C I O N E S   R E C I E N T E S ================ --}}
    {{-- <div class="col-xl-8 col-md-12"> --}}
    <div class="col-xl-12 col-md-12">
        <div class="card overflow-hidden">
            <div class="card-header border-0">
                <h4 class="card-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Carrito de Compras</font></font></h4>

            </div>
            <div>
                <input type="text">
            </div>

            <div class="card-body p-0 pt-4">
                <div class="table-responsive">

                    <table class="table table-vcenter text-nowrap border-top mb-0 invoice-table">

                        <thead>

                            <tr>
                                <th class="wd-10p border-bottom-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Producto</font></font></th>
                                <th class="wd-15p border-bottom-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cantidad</font></font></th>
                                <th class="wd-15p border-bottom-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Precio</font></font></th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--@foreach ($ultimasReservaciones as $booking)
                            <tr>
                                <td>{{$booking->id}}</td>
                                <td>
                                    <span>{{$booking->name}}</span>
                                </td>
                                <td>
                                    <span>{{$booking->address->street_name}}</span>
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <div class="mr-3 mt-0 mt-sm-1 d-block">
                                            <h6 class="mb-1 fs-14"><span class="text-muted mb-0 fs-14">Fecha:</span> {{$booking->booking_date}}</h6>
                                            <h6 class="mb-1 fs-14"><span class="text-muted mb-0 fs-14">Hora:</span> {{$booking->booking_time}}</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="d-flex">
                                        <div class="mr-3 mt-0 mt-sm-1 d-block">
                                            <h6 class="mb-1 fs-14">{{$booking->user->name}}</h6>
                                            <p class="text-muted mb-0 fs-12">{{$booking->user->email}}</p>
                                        </div>
                                    </a>
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('reservaciones.show', $booking->id) }}" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Ver"><i class="feather feather-eye text-primary"></i></a>
                                        <a href="{{ route('reservaciones.edit', $booking->id) }}" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Editar"><i class="feather feather-edit-2  text-success"></i></a>
                                        <form action="{{route('reservaciones.destroy', $booking->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="action-btns1 feather feather-trash-2 text-danger show_confirm" data-toggle="tooltip" data-placement="top" title="Eliminar" type="submit"></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach-->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Row-->
@endsection

@section('extra-script')

<script type="text/javascript" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
<script>
    $("#project-list").DataTable({
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.11.4/i18n/es-mx.json"
        }
    });
</script>


		{{-- GRAFICA ADMIN --}}
		<script>
            (() => {
                function e(e, a, o) {
                    return a in e ? Object.defineProperty(e, a, {
                        value: o,
                        enumerable: !0,
                        configurable: !0,
                        writable: !0
                    }) : e[a] = o, e
                }
                $((function(a) {
                        var t;
                        const gananciasAnual = @json($gananciasAnual);
                        r = document.getElementById("chartline1").getContext("2d"), new Chart(r, {
                            type: "bar",
                            data: {
                                labels: ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"],
                                datasets: [{
                                    label: "Ingresos",
                                    data: [gananciasAnual[0],gananciasAnual[1],gananciasAnual[2],gananciasAnual[3],gananciasAnual[4],gananciasAnual[5],gananciasAnual[6],gananciasAnual[7],gananciasAnual[8],gananciasAnual[9],gananciasAnual[10],gananciasAnual[11]],
                                    backgroundColor: "#0dcd94",
                                    borderColor: "#0dcd94",
                                    pointBackgroundColor: "#ffffff",
                                    borderRadius: Number.MAX_VALUE,
                                    pointRadius: 0,
                                    type: "bar"
                                }]
                            },
                            options: {
                                responsive: !0,
                                maintainAspectRatio: !1,
                                layout: {
                                    padding: {
                                        left: 0,
                                        right: 0,
                                        top: 0,
                                        bottom: 0
                                    }
                                },
                                tooltips: {
                                    enabled: !1
                                },
                                scales: {
                                    yAxes: [{
                                        gridLines: {
                                            display: !0,
                                            drawBorder: !1,
                                            zeroLineColor: "rgba(142, 156, 173,0.1)",
                                            color: "rgba(142, 156, 173,0.1)"
                                        },
                                        scaleLabel: {
                                            display: !1
                                        },
                                        ticks: {
                                            beginAtZero: !0,
                                            stepSize: 10,
                                            suggestedMin: 10,
                                            suggestedMax: 100,
                                            fontColor: "#8492a6"
                                        }
                                    }],
                                    xAxes: [{
                                        barValueSpacing: -2,
                                        barDatasetSpacing: 0,
                                        barRadius: 15,
                                        stacked: !1,
                                        categoryPercentage: .4,
                                        barPercentage: .8,
                                        ticks: {
                                            beginAtZero: !0,
                                            fontColor: "#8492a6"
                                        },
                                        gridLines: {
                                            color: "rgba(142, 156, 173,0.1)",
                                            display: !1
                                        }
                                    }]
                                },
                                legend: {
                                    display: !1
                                },
                                elements: {
                                    point: {
                                        radius: 0
                                    }
                                }
                            }
                        });
                }))
            })();
            </script>
@endsection