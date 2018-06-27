<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <title>Laravel</title>
  </head>

<body>		
  	<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark  ">
		<div class="container">
			<a href="/corpo" class="navbar-brand bg-danger mb-0"><h4>&nbsp;North Wind&nbsp;</h4></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsite">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarsite">
					<ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop">Funcionários</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="/cadfuncionario">Cadastrar</a>
								<a class="dropdown-item" href="/funcionarios">Listar</a>
							</div>
            </li>
            <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop">Territórios</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="/cadterritorios">Cadastrar</a>
								<a class="dropdown-item" href="/territorios">Listar</a>
							</div>
            </li>
					  <li class="nav-item dropdown">
							 <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop">Funcionário-Territórios</a>
							 <div class="dropdown-menu">
								<a class="dropdown-item" href="/cadfuncionario_territorio">Cadastrar</a>
								<a class="dropdown-item" href="/funcionarios-territorios">Listar</a>
					    	 </div>
					  </li>                       
            <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop">Regiões</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="/cadregioes">Cadastrar</a>
								<a class="dropdown-item" href="/regioes">Listar</a>
							</div>
            </li>                         
           </ul>
				</div>
			</div>
		</div>	
  </nav>
  <br>
  <br>
  <br>
  <br> 
    <div class="container">

          @yield('conteudo')

    </div>
 </body>
</html>





<!-- 
  <body style="background-color: #FFF !important;">

    <div class="container">
     
      <nav class="navbar navbar-default fixed-top bg-dark">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="/sobre">Menu Principal </a>
          </div>
          <div class="navbar-header">
            <a class="navbar-brand" href="/funcionarios">Funcionários </a>
          </div>
          <div class="nav navbar-nav "> 
              <a class="navbar-brand" href="/produtos/novo">Novo</a>
           </div>
          <div class="nav navbar-nav "> 
              <a class="navbar-brand" href="/produtos">Listagem</a>
           </div>
        </div>
      </nav>
      <br>
      <br>
      
      @yield('conteudo')

    </div>
   
 </body>
</html>
-->
