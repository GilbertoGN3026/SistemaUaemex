<!DOCTYPE html>
<html lang="es">  
<head>    
    <title>Formulario Salas de Computo</title>    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     
    <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        @livewireStyles
        <style>
         .imagen{
          background: url("{{asset('img/computacion1.jpg')}}");
          width:600px;
          height:350px;
          background-size:cover;
          no-repeat;
          align-items:center;
          display:flex;
          justify-content:center;
           margin-left:auto;
          margin-right:auto;
          margin-top:10px;
          
          
        }
        .boton{
          margin-left:20px;
         
        }
        </style>

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>  
        
</head>  
<body>
<!-- This example requires Tailwind CSS v2.0+ -->
<nav class="bg-gray-800">
  <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
    <div class="relative flex items-center justify-between h-16">
      <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
        <!-- Mobile menu button-->
        <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <!--
            Icon when menu is closed.

            Heroicon name: outline/menu

            Menu open: "hidden", Menu closed: "block"
          -->
          <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
          <!--
            Icon when menu is open.

            Heroicon name: outline/x

            Menu open: "block", Menu closed: "hidden"
          -->
          <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
        <div class="flex-shrink-0 flex items-center">
          <img class="block lg:hidden h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-500.svg" alt="Workflow">
          <img class="hidden lg:block h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-logo-indigo-500-mark-white-text.svg" alt="Workflow">
        </div>
        <div class="hidden sm:block sm:ml-6">
          <div class="flex space-x-4">
          
          </div>
          
        </div>
      </div>
      <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
       

        

       
  
</nav>


<h1></h1>
<h2></h2>


<section class="d-flex justify-content-center">
    <div class="card col-sm-6 p-3" >
            <div class="mb-3">
            <h1  class="d-flex justify-content-center">Universidad Autonoma del Estado de Mexico FACICO {{\Carbon\Carbon::now()->year}}A </h1>
             </div>
              <div class="boton">

                    
  <button class="btn btn-primary btn-sm" href="{{route('computos.index')}}">
 <i class="fa fa-arrow-left" ></i>atras
  </button>
             
              </div>

  <img class="imagen">
  <div class="card-body">
    <h5 class="card-title"></h5>
    {!! Form::open(['route' => 'computos.store']) !!}
        @include('computos.partials.form')
        <div class="row">
        <div class="col">
      {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
    <div class="col">
      C
    </div>
        
  </div>
</div>

        </div>
        </div>

</body>
</html>