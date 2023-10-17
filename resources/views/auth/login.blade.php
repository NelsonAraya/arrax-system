<!doctype html>
<html lang="en">

<head>
  <title>Login Arrax</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('assets/estilos.css')}}">
</head>

<body>
    <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-10">
              <div class="card rounded-3 text-black">
                <div class="row g-0">
                  <div class="col-lg-6">
                    <div class="card-body p-md-5 mx-md-4">
      
                      <div class="text-center">
                        <img src="{{ asset('assets/images/logo/logo.png') }}"
                          style="width: 185px;" alt="logo">
                        <h4 class="mt-1 mb-5 pb-1">Sistema de Administración y Control de Bomberos</h4>
                      </div>
      
                      <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <p>Ingrese usuario </p>
      
                        <div class="form-outline mb-4">
                          <input type="text" id="txtlogin" name="txtlogin" class="form-control"
                            placeholder="Rut o email" autocomplete="off" />
                          <label class="form-label" for="txtlogin">Usuario</label>
                        </div>
                        <div class="form-outline mb-4">
                          <input type="password" id="txtpass" name="txtpass" class="form-control" />
                          <label class="form-label" for="txtpass">Password</label>
                        </div>
      
                        <div class="text-center pt-1 mb-5 pb-1">
                          <button class="btn btn-primary btn-block fa-lg mb-3" type="submit">Iniciar Sesion</button>

                        </div>
      
                        <div class="d-flex align-items-center justify-content-center pb-4">
                          <p class="mb-0 me-2">Desarrollado por Nelson Araya - Sistema</p>
                          <button type="button" class="btn btn-outline-danger">Arrax</button>
                        </div>
      
                      </form>
      
                    </div>
                  </div>
                  <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                    <img src="{{ asset('assets/images/logo/login.jpg') }}" alt="Descripción de la imagen" style="width: 100%; height: 90%">
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