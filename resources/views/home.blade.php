@extends('adminlte::page')
@section('title', '17D06')
@section('plugins.Sweetalert2', true)
@section('content_header')

  <head>
    <link rel="stylesheet" href="{{ asset('assets/estilos.css') }}">
    <link rel="stylesheet" href="/css/admin_custom.css">
    <script> rel="stylesheet" href="{{ asset('assets/javascript.js') }}"</script>


  </head>

  <Strong>
    <center>BIENVENIDO AL SISTEMA 17D06</center>
  </Strong>

  <body class="antialiased">
    <div class="slider">
      <ul>
        <li>
          <img src="{{ asset('assets/img/backgroundlogin.jpg') }}" alt="">
        </li>
        <li>
          <img src="{{ asset('assets/img/tics.jpg') }}" alt="">
        </li>
        <li>
          <img src="{{ asset('assets/img/tics1.jpg') }}" alt="">
        </li>
        <li>
          <img src="{{ asset('assets/img/educacion.png') }}" alt="">
        </li>
      </ul>
    </div>
    <center><p class="end">Developed by Jean Solano</p></center>

  @stop
  
  @section('js')
    <script>
      console.log('Hi!');
    </script>
    <script>
      const Toast = Swal.mixin({
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
