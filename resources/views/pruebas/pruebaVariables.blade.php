<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prueba solo con post</title>
</head>
<body>
    <!-- Blade permite formatear el codigo de forma mas escueta usando las llaves dobles -->

    <!-- aqui compruebo si categoria esta definida para formatear el h1 -->
    <!-- 
        --@if (isset($categoria) && $categoria)
        --<h1>aquí se mostraria un post {{$post}} con categoria {{$categoria}}</h1> 
        --@else
        --<h1>aquí se mostraria un post {{$post}} sin categoria</h1> 
        --@endif
    -->

    <!-- tambien pueden aplicarse ternarios y demás -->
   <h1>Aquí se mostraría un post {{$post}} con categoría {{$categoria ?? '"sin categoría"'}}</h1>
</body>
</html>