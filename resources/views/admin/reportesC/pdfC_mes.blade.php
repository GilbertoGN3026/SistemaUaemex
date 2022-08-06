 
<!DOCTYPE html>
<html lang="en">
  <head>
  
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-sacale=1.0"
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="{{ public_path('css/app.css') }}">
  </head>
  
  <body>
  <h1>Reporte de insumos por mes</h1>
   <div class="card">

    <div class="card-body">
        
        <div class="row">
           
                <span>Fecha de Consulta: <b> </b> </span>
            
                    <strong>{{\Carbon\Carbon::now()->format('d/m/Y')}}</strong>
                
           
        
          <h1>Reporte de Enero-Junio {{\Carbon\Carbon::now()->year}} </h1>
           
                <span>Cantidad de Registros: <b> </b> </span>
          
                    <strong>{{$computos->count()}}</strong>
              </div>
            
        <table width="900px" class="table table-striped" >

            <thead>
                <tr>
                   <th>ID</th>
                    <th>Solicitante</th>
                    <th>Numero de Cuenta</th>
                    <th>Tipo de servicio</th>
                    <th>Numero de Equipo,Impreiones o Escaneos</th>
                    <th>Licenciatura</th>
                    <th>Usuario</th>
                    <th>Sugerencia</th>
                    <th colspan="2"></th>
                    <th></th>

                </tr>
            </thead>
            <tbody>
                @foreach($computos as $computo)
                <tr>
                    <td>{{$computo->id}}</td>
                    <td>{{$computo->nombre_completo}}</td>
                    <td>{{$computo->numero_cuenta}}</td>
                    <td>{{$computo->servicio->nombre_servicio}}</td>
                    <td>{{$computo->numero_eie}}</td>
                    <td>{{$computo->licenciatura->nombre_licenciatura}}</td>
                    <td>{{$computo->usuar->tipo_usuario}}</td>
                    <td>{{$computo->sugerencias}}</td>
                  
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
</div>


  </body>


</html>
 
 
 