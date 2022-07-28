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

 {!! Form::open(['route' => 'admin.charts.charts_res','method' =>'POST']) !!}
        <div class="row">

            <div class="col-12 col-md-3">
                <span>Fecha inicial</span>
            <div class="form-group">
                   <input class="form-control" type="date" 
                   value="{{old('fecha_ini')}}" 
                   name="fecha_ini" id="fecha_ini"></input>
                </div>
            </div>
             <div class="col-12 col-md-3">
                <span>Fecha final</span>
            <div class="form-group">
                   <input class="form-control" type="date" 
                   value="{{old('fecha_fin')}}" 
                   name="fecha_fin" id="fecha_fin"></input>
                </div>
            </div>

            
         
            <div class="col-12 col-md-3 text-center mt-4">
                
            <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-sm">Consultar</button>
                </div>
            </div>
       
            {!! Form::close() !!}

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
            text: 'Nuenos registros de insumos'
        },
        subtitle: {
            text: 'Insumos'
        },
        xAxis: {
            categories: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September',
                'October', 'November', 'December'
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
var insu2 = <?php echo json_encode($insu2)?>;
 Highcharts.chart('container2', {
    chart: {
    type: 'column'
  },
        title: {
            text: 'Nuenos registros de insumos'
        },
        subtitle: {
            text: 'Insumos'
        },
        xAxis: {
            categories: ['Psicologia', 'Trabajo social', 'Cultura fisica y deporte'
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
            name: 'Registros de insumos carrera de pisoclogia',
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
  <p class="highcharts-description">
    Chart showing how an HTML table can be used as the data source for the
    chart using the Highcharts data module. The chart is built by
    referencing the existing HTML data table in the page. Several common
    data source types are available, including CSV and Google Spreadsheet.
  </p>
  </figure>
<script>
var insu3 = <?php echo json_encode($insu3)?>;
 Highcharts.chart('container3', {
  chart: {
    type: 'area',
    inverted: true
  },
  title: {
    text: 'Average fruit consumption during one week'
  },
  accessibility: {
    keyboardNavigation: {
      seriesNavigation: {
        mode: 'serialize'
      }
    }
  },
  legend: {
    layout: 'vertical',
    align: 'right',
    verticalAlign: 'top',
    x: -150,
    y: 100,
    floating: true,
    borderWidth: 1,
    backgroundColor:
      Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF'
  },
  xAxis: {
    categories: [
      'Cable HDMI',
      'Proyectores',
      'Cable VGA',
      'Bocinas',

    ]
  },
  yAxis: {
    title: {
      text: 'Number of units'
    },
    allowDecimals: false,
    min: 0
  },
  plotOptions: {
    area: {
      fillOpacity: 0.5
    }
  },
        series: [{
            name: 'Numero de insumos usados por tipo',
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

<figure class="highcharts-figure">
  <div id="container4"></div>
  <p class="highcharts-description">
    Chart showing how an HTML table can be used as the data source for the
    chart using the Highcharts data module. The chart is built by
    referencing the existing HTML data table in the page. Several common
    data source types are available, including CSV and Google Spreadsheet.
  </p>
  </figure>
<script>
var insu4 = <?php echo json_encode($insu4)?>;
 Highcharts.chart('container4', {

  title: {
    text: 'Logarithmic axis demo'
  },

  xAxis: {
    tickInterval: 1,
    type: 'logarithmic',
    accessibility: {
      rangeDescription: 'Range: 1 to 10'
    }
  },

  yAxis: {
    type: 'logarithmic',
    minorTickInterval: 0.1,
    accessibility: {
      rangeDescription: 'Range: 0.1 to 1000'
    }
  },

  tooltip: {
    headerFormat: '<b>{series.name}</b><br />',
    pointFormat: 'x = {point.x}, y = {point.y}'
  },

  series: [{
    data: insu4
  }]
});

</script>
@stop

