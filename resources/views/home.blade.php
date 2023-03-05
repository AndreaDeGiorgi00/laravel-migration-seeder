<?php 
function getDayDate($string) {
    if ($string[5]) {
        return $string[5] + $string[6];
    };
    return $string[6];
}

$current_day = date('d');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trins</title>
    @vite('resources/js/app.js')
</head>
<body>
    
   
<table class="table">
  <thead>
    <tr>
      <th scope="col">Codice</th>
      <th scope="col">Stazione di partenza</th>
      <th scope="col">Stazione di arrivo</th>
      <th scope="col">Orario di partenza</th>
      <th scope="col">Orario di arrivo</th>
      <th scope="col">giorno di Partenza</th>
      <th scope="col">Codice treno</th>

    </tr>
  </thead>
  <tbody>
    @foreach ($trains as $train )

    @if($train->Giorno_partenza == $current_day)

    <tr>
      <td>{{$train->Codice_Treno}}</td>
      <td>{{$train->Stazione_di_partenza}}</td>
      <td>{{$train->Stazione_di_arrivo}}</td>
      <td>{{$train->Orario_di_partenza}}</td>
      <td>{{$train->Orario_di_arrivo}}</td>
      <td>{{$train->Giorno_partenza}}</td>
      <td>{{$train->Codice_Treno}}</td>
    </tr>
  </tbody>
    @endif
    @endforeach
</table>
        
  


</body>
</html>