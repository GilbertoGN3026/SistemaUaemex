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
var comp2 = <?php echo json_encode($comp2)?>;
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
            categories: ['Escaneo', 'Equipo de computo', 'Impresiones', 
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
  <p class="highcharts-description">
    Chart showing how an HTML table can be used as the data source for the
    chart using the Highcharts data module. The chart is built by
    referencing the existing HTML data table in the page. Several common
    data source types are available, including CSV and Google Spreadsheet.
  </p>
  </figure>
<script>
var comp3 = <?php echo json_encode($comp3)?>;
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
      'Psicologia',
      'Educacion',
      'Cultura Fisica y Deporte',
      'Trabajo Social',
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
  <p class="highcharts-description">
    Chart showing how an HTML table can be used as the data source for the
    chart using the Highcharts data module. The chart is built by
    referencing the existing HTML data table in the page. Several common
    data source types are available, including CSV and Google Spreadsheet.
  </p>
  </figure>
<script>
var datas1 = <?php echo json_encode($datas1)?>;
 Highcharts.chart('container4', {
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
            data: datas1
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

