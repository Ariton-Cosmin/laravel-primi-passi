<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  
  <h1>Ciao {{$name}} {{$lastname}} </h1>

  @if($name === 'Cosmin') 
    <h2>Puoi accedere</h2> 
  @else
    <h2>Non puoi accedere</h2>
  @endif

</body>
</html>