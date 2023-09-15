<!doctype html>
<html lang="en">

<head>
  <title>Login</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/estilos.css')}}">

</head>

<body>

<section class="h-100 gradient-form" style="background-image: url('{{ asset ('assets/cover4.jpg')}}')">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <img src="{{ asset ('assets/LOGOMINEDUC.JPG')}}"
                    style="width: 185px;" alt="logo">
                  <h4 class="mt-1 mb-5 pb-1">Distrito 17D06 Eloy Alfaro</h4>
                </div>

                <form action="{{route('login')}}" method="post">
                    @csrf
                  <p>Iniciar Sesion</p>

                  <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example11">Correo Electronico</label>  
                  <input type="email" name="email" id="form2Example11" class="form-control"
                      placeholder="Ingrese su correo electronico" />
                  </div>

                  <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example22">Contraseña</label>  
                  <input type="password" name="password" id="form2Example22" class="form-control" placeholder="Ingrese su contraseña" />
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1">
                    <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Iniciar Sesion</button>
                    <br>
                    
                  </div>

                  <!--<div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">No tienes cuenta?</p>
                    <a href="{{route('register')}}" button type="button" class="btn btn-outline-danger">Crear cuenta</a>
                  </div>-->

                </form>

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-4" style="background-image: url('{{ asset ('assets/educacion.png')}}')">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <h4 class="mb-4">Sobre el sistema</h4> 
                <p class="small mb-0">En este sistema se podra visualizar informacion del distrito 6</p>
                <br>
                <br>
                <br>
            
                <center>Developed by Jean Solano</center>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>