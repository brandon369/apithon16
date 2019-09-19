<?php

$clientId = '0a94d9b5-96ee-476c-84be-e185c7795483';
$scope = "Deposit-account:read:user";
$grantType ="client_credentials";
$secret = "H3vX3fH6yD5uU3lR4hQ1iS1hS2aK7uW6mB1tA6wY8yV7rT8hE1";


$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://sbapi.bancolombia.com/v2/security/oauth-otp/oauth2/token",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "client_id=".$clientId."&client_secret=".$secret."&scope=".$scope."&grant_type=".$grantType."",
  CURLOPT_HTTPHEADER => array(
    "accept: application/json",
    "content-type: application/x-www-form-urlencoded"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
 } else {
//    echo $response;
 }

$respuesta = json_decode($response,true);
$token = $respuesta['access_token'];

if(array_key_exists('access_token',$respuesta)){
//   echo "hay token";
 echo "<script> console.log('su token es: $token') </script>";



  echo "<br>";
  echo "<br>";
  echo "<br>";
  //Si hay token entonces
  //consumir api international transfer
  
  $curl = curl_init();
  
  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://sbapi.bancolombia.com/v1/operations/product-specific/deposits/accounts/actions/internal-prevalidation",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => "{\"data\":[{\"correlation_identifier\":\"TEST_001\",\"context\":\"BENR\",\"creditor_account\":\"91108874\",\"creditor_name\":\"Andrea Pulido Nunez\",\"creditorAddress\":{\"country_id\":\"COLOMBIA\",\"address_line\":\"Calle 55 #87-99\",\"post_code\":\"512443\",\"town_name\":\"Itagui\"},\"creditor_organisation_identification\":\"11\",\"any_bic\":\"COLOCOBMMD1\"}]}",
    CURLOPT_HTTPHEADER => array(
      "accept: application/json",
      "authorization: Bearer ". $token,
      "content-type: application/json"
    ),
  ));
  
  $response = curl_exec($curl);
  $err = curl_error($curl);
  
  curl_close($curl);
  
  if ($err) {
    echo "cURL Error #:" . $err;
  } else {
    // echo $response;
  }
  
  $res = json_decode($response, true);
  
  
  $datos = $res['data'][0][0];
// echo "<pre>";
//   print_r($datos);
//   echo "</pre>";
  
  



}else{
  echo "no hay token";
}



?>




<!doctype html>
<html lang="es">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="vistas/img/favi64.png" type="image/png" sizes="16x16">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="vistas/css/css_divext.css">

  <title>Divext | Datos de Transferencia</title>
</head>

<body>
  <nav class="navbar navbar-light bg-light d-flex justify-content-center">
    <a class="navbar-brand" href="transferencia">
      <img src="vistas/img/divextt.png" height="80" alt="logo-divext">
    </a>
    <ul class="navbar-nav d-flex flex-row">
      <li class="nav-item p-2">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"
          class="btn btn-primary">Datos de Transferencia</a>
      </li>
      <li class="nav-item p-2">
        <a class="nav-link" href="salir">Cerrar Sesión</a>
      </li>
    </ul>
  </nav>





  <table class="table m-5">
    <thead>
      <tr>
        <h1 class="h1 m-5">El Estado de su Transferencia</h1>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">Identificador de correlación de la operación interna de transferencia :</th>
        <td><?= $datos['correlation_identifier']?></td>
      </tr>
      <tr>
        <th scope="row">Estado de Validación:</th>
        <td><?= $datos['account_validation_status']?></td>
      </tr>
      <tr>
        <th scope="row">La cuenta si la corresponde al beneficiario:</th>
        <td><?= $datos['creditor_account_match']?></td>
      </tr>
      <tr>
        <th scope="row">El nombre corresponde:</th>
        <td><?= $datos['creditor_name_match']?></td>
      </tr>
      <tr>
        <th scope="row">La dirección corresponde :</th>
        <td><?= $datos['creditor_address_match']?></td>
      </tr>

      <tr>
        <th scope="row">La identidad financiera corresponde corresponde a la cuenta :</th>
        <td><?= $datos['creditor_organisation_identification_match']?></td>
      </tr>

    </tbody>
  </table>


  </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>

</html>