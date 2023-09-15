@extends('adminlte::page')
@section('title', '17D06')
@section('plugins.Sweetalert2', true)
@section('content_header')
<style>
*{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .slider{
        width: 100%;
        height: 600px;
        overflow: hidden;
    }
    .slider ul{
        display: flex;
        animation: cambio 20s infinite
        alternate linear;
        width: 400%;
    }
    .slider li{
        width:100%;
        list-style: none;
    }
    .slider img{
        width: 100%;
        height: 100%;
    }
    @keyframes cambio{
        0%{margin-left: 0;}
        20%{margin-left:0;}

        25%{margin-left: -100%;}
        45%{margin-left: -100%;}

        50%{margin-left: -200%;}
        70%{margin-left: -200%;}

        75%{margin-left: -300%;}
        100%{margin-left: -300%;}

    }
        </style>
    </head>
    <Strong><center>BIENVENIDO AL SISTEMA 17D06</center></Strong>
    <body class="antialiased">
<div class="slider"> 
<ul>
<li>
            <img src="{{ asset ('assets/cover4.jpg')}}" alt="">
            </li>   
<li>
    <img src="{{ asset ('assets/tics.jpg')}}" alt="">
            </li>
            <li>
            <img src="{{ asset ('assets/tics1.jpg')}}" alt="">
            </li>
            <li>
            <img src="{{ asset ('assets/educacion.png')}}" alt="">
            </li>
            </ul>
</div>        
<center>Developed by Jean Solano</center>

@stop

@section('content')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script>const Toast = Swal.mixin({
  toast: true,
  position: 'center',
  showConfirmButton: false,
  timer: 1500,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
})

Toast.fire({
  icon: 'success',
  title: 'Inicio de sesion exitoso'
})
</script>
@stop
