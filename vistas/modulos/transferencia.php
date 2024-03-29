<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="vistas/img/favi64.png" type="image/png" sizes="16x16">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="vistas/css/css_divext.css">

    <title>Divext | Transferencia</title>
  </head>
  <body>
    
        <nav class="navbar navbar-light bg-light d-flex justify-content-center">
        <a class="navbar-brand" href="#">
                    <img src="vistas/img/divextt.png" height="80" alt="logo-divext">
                </a>
                <ul class="navbar-nav d-flex flex-row">
                    <li class="nav-item p-2">
                            <a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"
                                class="btn btn-primary">Transferencia</a>
                    </li>
                    <li class="nav-item p-2">
                      <!-- Estado de mis transferencias consume las apis International Transfer y Security -->
                            <a class="nav-link" href="estado" >Estado de mis Transferencias</a>
                        </li>
                    
                        <li class="nav-item p-2">
                            <a class="nav-link" href="salir" >Cerrar Sesión</a>
                        </li>
                </ul>
            </nav>

            <div class="card m-5">
                    <div class="card-header h1 d-flex justify-content-center">
                      Transferencia
                    </div>
                    <div class="card-body">

                      
                        <br>

                            <form method="POST">

                            <div class="form-group">
                                    <label for="exampleFormControlSelect1">País</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                      <option>Estados Unidos</option>
                                      <option>Rusia</option>
                                      <option>Brasil</option>
                                      <option>Colombia</option>
                                      <option>España</option>
                                    </select>
                                  </div>
                                    <div class="form-group">
                                      <label for="exampleFormControlSelect1">Ciudad</label>
                                      <select class="form-control" id="exampleFormControlSelect1">
                                        <option>Nueva York</option>
                                        <option>San Francisco</option>
                                        <option>Chicago</option>
                                        <option>Miami</option>
                                        <option>Boston</option>
                                      </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Banco</label>
                                        <select class="form-control" id="exampleFormControlSelect1">
                                          <option>Bank of Nova Scotia</option>
                                          <option>Barclays Bank PLC </option>
                                          <option>Citibank N.a.</option>
                                          <option>Deutsche Bank AG</option>
                                          <option>Royal Bank of Canada</option>
                                        </select>
                                      </div>
                                      <div class="form-group">
                                          <label for="exampleFormControlSelect1">Código SWIFT</label>
                                          <select class="form-control" id="exampleFormControlSelect1">
                                            <option>NOSC</option>
                                            <option>BARC</option>
                                            <option>CITI</option>
                                            <option>DEUT</option>
                                            <option>ROYC</option>
                                          </select>
                                        </div>

                                    <div class="form-group">
                                            <label for="exampleFormControlInput1">Número de cuenta del Destinario</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="*********" name="cuenta">
                                          </div>
                                          <div class="form-group">
                                                <label for="exampleFormControlInput1">Monto</label>
                                                <p>monto actual es de COP$<?php echo $_SESSION['monto'];?></p>
                                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="00.0" name="transferencia">
                                              </div>
                                              <input type="submit" class="btn btn-primary" id="color-azul"  value="Transferir">
                                  </form>
                                  

              

                                  <?php
                                  //Validar la transferencia
                                  $verificar = new ControladorTransferencia();
                                  $verificar-> ctrvalidarTransferencia();
                                  ?>
      
                    </div>
                  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>