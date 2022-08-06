@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
<h1>Sistema de prestamos</h1>
@stop

@section('content')

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>



<figure class="highcharts-figure">
  <div id="container"></div>
 
  </figure>
<script>
var datas = <?php echo json_encode($datas)?>;
 Highcharts.chart('container', {
    chart: {
    type: 'column'
  },
        title: {
            text: 'Registros de solicitantes por mes'
        },
        subtitle: {
            text: ''
        },
        xAxis: {
            categories: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre',
                'Octubre', 'Noviembre', 'Diciembre'
            ]
        },
        yAxis: {
            title: {
                text: 'Numero de insumos'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        series: [{
            name: 'Registros de solicitantes por mes',
            data: datas
        }],
        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }
    });

</script>



<figure class="highcharts-figure">
  <div id="container2"></div>
 
  </figure>
<script>
var insu2 = <?php echo json_encode($insu2)?>;
 Highcharts.chart('container2', {
    chart: {
    type: 'column'
  },
        title: {
            text: 'Licenciaturas'
        },
        subtitle: {
            text: 'Registro de los solicitantes de insumos por carrera'
        },
        xAxis: {
            categories: ['Psicología','Educación','Trabajo social','Cultura Física y Deporte','Otros',
            ]
        },
        yAxis: {
            title: {
                text: 'Numero de solicitantes'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        series: [{
            name: 'Solicitantes por Carrera',
             colorByPoint: true,
            data: insu2
            
        }],
        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }
    });

</script>

<figure class="highcharts-figure">
  <div id="container3"></div>
 
  </figure>
<script>
var insu3 = <?php echo json_encode($insu3)?>;
  Highcharts.chart('container3', {
    chart: {
    type: 'column'
  },
        title: {
            text: 'Tipos de insumos'
        },
        subtitle: {
            text: 'Registro de los solicitantes de insumos por tipo'
        },
        xAxis: {
            categories: ['Bocinas',		
	                        'Cable HDMI',		
                          'Cable VGA',	
                          'Cañon',
                          'Control',	
                          'Convertidor',	
                          'Extensión',
                          'Mimio',
                          'Otro',
                        ]
        },
        yAxis: {
            title: {
                text: 'Numero de solicitantes'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        series: [{
            name: 'Solicitantes por Carrera',
             colorByPoint: true,
            data: insu3
            
        }],
        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }
    });


</script>

@stop

