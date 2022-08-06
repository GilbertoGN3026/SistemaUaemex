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
  <p class="highcharts-description">
    Chart showing how an HTML table can be used as the data source for the
    chart using the Highcharts data module. The chart is built by
    referencing the existing HTML data table in the page. Several common
    data source types are available, including CSV and Google Spreadsheet.
  </p>
  </figure>
<script>
var datas = <?php echo json_encode($datas)?>;
 Highcharts.chart('container', {
    chart: {
    type: 'column'
  },
        title: {
            text: 'Registros de solicitantes por mes "Equipo de Computo,Impresiones y Escaneo" '
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
                text: 'Número de registros'
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
            name: 'Registros de insumos',
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
  <p class="highcharts-description">
    Chart showing how an HTML table can be used as the data source for the
    chart using the Highcharts data module. The chart is built by
    referencing the existing HTML data table in the page. Several common
    data source types are available, including CSV and Google Spreadsheet.
  </p>
  </figure>
<script>
var comp2 = <?php echo json_encode($comp2)?>;
 Highcharts.chart('container2', {
    chart: {
    type: 'column'
  },
        title: {
            text: 'Tipo de Servicio'
        },
        subtitle: {
            text: 'Registro de los solicitantes por tipo de Servicio'
        },
        xAxis: {
            categories: ['Equipo de computo','Escaneo', 'Impresiones', 
            ]
           
        },
        yAxis: {
            title: {
                text: 'Numero de registros'
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
            name: 'Registros de tipo de servicio',
             colorByPoint: true,
            data: comp2
            
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
var comp3 = <?php echo json_encode($comp3)?>;
 Highcharts.chart('container3', {
    chart: {
    type: 'column'
  },
        title: {
            text: 'Licenciaturas'
        },
        subtitle: {
            text: 'Registro de los solicitantes de Equipo de Computo, Escaneo e Impresiones por carrera'
        },
        xAxis: {
            categories: ['Psicología','Educación','Trabajo social','Cultura Física y Deporte','Otros',
            ]
        },
        yAxis: {
            title: {
                text: 'Numero de registros'
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
            data: comp3
            
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
  <div id="container4"></div>
 
  </figure>
<script>
var comp4 = <?php echo json_encode($comp4)?>;
 Highcharts.chart('container4', {
    chart: {
    type: 'column'
  },
        title: {
            text: 'Usuarios'
        },
        subtitle: {
         text: 'Registro de los solicitantes de Equipo de Computo, Escaneo e Impresiones por usuario'

        },
        xAxis: {
            categories: ['Alumno','Administrativo','Externo'
            ]
        },
        yAxis: {
            title: {
                text: 'Numero de registros'
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
            name: 'Registros de tipos de usuarios',
            data: comp4
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

