

<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Comandas</title>

		<link rel="stylesheet" href="css/estilo.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

		<script>
			
			

		
		</script>
	</head>

	<body>
		<nav class="navbar navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="#">
					
					Comandas 
				</a>
			</div>
		</nav>

		<?php if( isset($_GET['inclusao']) && $_GET['inclusao'] == 1 ) {  ?>

			<div class="bg-success pt-2 text-white">
				<div class="row">
					<div class="col-md-10 d-flex justify-content-center">
				<h5>Encaminhado para cozinha! </h5>
				</div></div>
			</div>

		<?php } ?>

		<div class="container app">
			<div class="row">
				<div class="col mb-5">
					<ul class="nav nav-tabs flex-collumn mesas">
						<li style="background-color: black;" class="nav-item mesa"><a class="nav-link" href="nova_tarefa.php">Mesa 1</a></li>
						<li class="nav-item mesa"><a class="nav-link" href="mesa2.php">Mesa 2</a></li>
						<li class="nav-item mesa"><a class="nav-link" href="mesa2.php">Mesa 3</a></li>
						<li class="nav-item mesa"><a class="nav-link" href="mesa2.php">Mesa 4</a></li>
						<li class="nav-item mesa"><a class="nav-link" href="mesa2.php">Mesa 5</a></li>
						<li class="nav-item mesa"><a class="nav-link" href="mesa2.php">Mesa 6</a></li>
						<li class="nav-item mesa"><a class="nav-link" href="mesa2.php">Mesa 7</a></li>
						<li class="nav-item mesa"><a class="nav-link" href="mesa2.php">Mesa 8</a></li>
						<li class="nav-item mesa"><a class="nav-link" href="mesa2.php">Mesa 9</a></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 menu">
					<ul class="list-group">
						<li class="list-group-item"><a href="index.php">Pedidos Pendentes</a></li>
						<li class="list-group-item"><a href="todas_tarefas.php">Todos os Pedidos</a></li>
					</ul>
				</div>

				

<!-- ITEMS -->

				<div class="col-md-3">
                    <!-- form row -->
					 <div class="form-row">
                     <form class="form-inline" method="post" action="tarefa_controller.php?acao=inserir">
									<div class="form-group">
										
										<input name="tarefa" type="hidden" value="Item 1" class="form-control">
										<input type="hidden" name="mesa" value="1" class="form-control">
									</div>

									<button class="btn btn-success">Item 1</button>
									
									 </form> 

				    <form class="form-inline" method="post" action="tarefa_controller.php?acao=inserir">
									<div class="form-group">
										
										<input name="tarefa" type="hidden" value="Item 2" class="form-control" placeholder="Exemplo: Lavar o carro">
										<input type="hidden" name="mesa" value="1" class="form-control">
									</div>

									<button style="margin-left: 10px;" class="btn btn-success">Item 2</button> </form> 

					 <form class="form-inline" method="post" action="tarefa_controller.php?acao=inserir">
									<div class="form-group">
										
										<input name="tarefa" type="hidden" value="Item 3" class="form-control" >
										<input type="hidden" name="mesa" value="1" class="form-control">
									</div>

									<button style="margin-left: 10px;" class="btn btn-success">Item 3</button> </form> 					
						</div>
 
<!-- form row -->
					 <div class="form-row">
                     <form class="form-inline" method="post" action="tarefa_controller.php?acao=inserir">
									<div class="form-group">
										
										<input name="tarefa" type="hidden" value="Item 4" class="form-control">
										<input type="hidden" name="mesa" value="1" class="form-control">
									</div>

									<button class="btn btn-success">Item 4</button>
									
									 </form> 

				    <form class="form-inline" method="post" action="tarefa_controller.php?acao=inserir">
									<div class="form-group">
										
										<input name="tarefa" type="hidden" value="Item 5" class="form-control">
										<input type="hidden" name="mesa" value="1" class="form-control">
									</div>

									<button style="margin-left: 10px;" class="btn btn-success">Item 5</button> </form> 

					 <form class="form-inline" method="post" action="tarefa_controller.php?acao=inserir">
									<div class="form-group">
										
										<input name="tarefa" type="hidden" value="Item 6" class="form-control">
										<input type="hidden" name="mesa" value="1" class="form-control">
									</div>

									<button style="margin-left: 10px;" class="btn btn-success">Item 6</button> </form> 					
						</div> 

			
<!-- form row -->
					 <div class="form-row">
                     <form class="form-inline" method="post" action="tarefa_controller.php?acao=inserir">
									<div class="form-group">
										
										<input name="tarefa" type="hidden" value="Item 7" class="form-control">
										<input type="hidden" name="mesa" value="1" class="form-control">
									</div>

									<button class="btn btn-success">Item 7</button>
									
									 </form> 

				    <form class="form-inline" method="post" action="tarefa_controller.php?acao=inserir">
									<div class="form-group">
										
										<input name="tarefa" type="hidden" value="Item 8" class="form-control">
										<input type="hidden" name="mesa" value="1" class="form-control">
									</div>

									<button style="margin-left: 10px;" class="btn btn-success">Item 8</button> </form> 

					 <form class="form-inline" method="post" action="tarefa_controller.php?acao=inserir">
									<div class="form-group">
										
										<input name="tarefa" type="hidden" value="Item 9" class="form-control">
										<input type="hidden" name="mesa" value="1" class="form-control">
									</div>

									<button style="margin-left: 10px;" class="btn btn-success">Item 9</button> </form> 					
						</div>	
						
<!-- form row -->
					 <div class="form-row">
                     <form class="form-inline" method="post" action="tarefa_controller.php?acao=inserir">
									<div class="form-group">
										
										<input name="tarefa" type="hidden" value="Item 10" class="form-control">
										<input type="hidden" name="mesa" value="1" class="form-control">
									</div>

									<button class="btn btn-success">Item 10</button>
									
									 </form> 

				    <form class="form-inline" method="post" action="tarefa_controller.php?acao=inserir">
									<div class="form-group">
										
										<input name="tarefa" type="hidden" value="Item 11" class="form-control">
										<input type="hidden" name="mesa" value="1" class="form-control">
									</div>

									<button style="margin-left: 10px;" class="btn btn-success">Item 11</button> </form> 

					 <form class="form-inline" method="post" action="tarefa_controller.php?acao=inserir">
									<div class="form-group">
										
										<input name="tarefa" type="hidden" value="Item 12" class="form-control">
										<input type="hidden" name="mesa" value="1" class="form-control">
									</div>

									<button style="margin-left: 10px;" class="btn btn-success">Item 12</button> </form> 					
						</div>	
						
<!-- form row -->
					 <div class="form-row">
                     <form class="form-inline" method="post" action="tarefa_controller.php?acao=inserir">
									<div class="form-group">
										
										<input name="tarefa" type="hidden" value="Item 13" class="form-control">
										<input type="hidden" name="mesa" value="1" class="form-control">
									</div>

									<button class="btn btn-success">Item 13</button>
									
									 </form> 

				    <form class="form-inline" method="post" action="tarefa_controller.php?acao=inserir">
									<div class="form-group">
										
										<input name="tarefa" type="hidden" value="Item 14" class="form-control">
										<input type="hidden" name="mesa" value="1" class="form-control">
									</div>

									<button style="margin-left: 10px;" class="btn btn-success">Item 14</button> </form> 

					 <form class="form-inline" method="post" action="tarefa_controller.php?acao=inserir">
									<div class="form-group">
										
										<input name="tarefa" type="hidden" value="Item 15" class="form-control">
										<input type="hidden" name="mesa" value="1" class="form-control">
									</div>

									<button style="margin-left: 10px;" class="btn btn-success">Item 15</button> </form> 					
						</div>		
						
<!-- form row -->
					 <div class="form-row">
                     <form class="form-inline" method="post" action="tarefa_controller.php?acao=inserir">
									<div class="form-group">
										
										<input name="tarefa" type="hidden" value="Item 16" class="form-control">
										<input type="hidden" name="mesa" value="1" class="form-control">
									</div>

									<button class="btn btn-success">Item 16</button>
									
									 </form> 

				    <form class="form-inline" method="post" action="tarefa_controller.php?acao=inserir">
									<div class="form-group">
										
										<input name="tarefa" type="hidden" value="Item 17" class="form-control">
										<input type="hidden" name="mesa" value="1" class="form-control">
									</div>

									<button style="margin-left: 10px;" class="btn btn-success">Item 17</button> </form> 

					 <form class="form-inline" method="post" action="tarefa_controller.php?acao=inserir">
									<div class="form-group">
										
										<input name="tarefa" type="hidden" value="Item 18" class="form-control">
										<input type="hidden" name="mesa" value="1" class="form-control">
									</div>

									<button style="margin-left: 10px;" class="btn btn-success">Item 18</button> </form> 					
						</div></div>




<!-- bebidas -->

<div class="col-md-3">
                    <!-- form row -->
					 <div class="form-row">
                     <form class="form-inline" method="post" action="tarefa_controller.php?acao=inserir">
									<div class="form-group">
										
										<input name="tarefa" type="hidden" value="Bebida 1" class="form-control">
										<input type="hidden" name="mesa" value="1" class="form-control">
									</div>

									<button class="btn btn-warning">Bebida 1</button>
									
									 </form> 

				    <form class="form-inline" method="post" action="tarefa_controller.php?acao=inserir">
									<div class="form-group">
										
										<input name="tarefa" type="hidden" value="Bebida 2" class="form-control">
										<input type="hidden" name="mesa" value="1" class="form-control">
									</div>

									<button style="margin-left: 10px;" class="btn btn-warning">Bebida 2</button> </form> 

					 <form class="form-inline" method="post" action="tarefa_controller.php?acao=inserir">
									<div class="form-group">
										
										<input name="tarefa" type="hidden" value="Bebida 3" class="form-control">
										<input type="hidden" name="mesa" value="1" class="form-control">
									</div>

									<button style="margin-left: 10px;" class="btn btn-warning">Bebida 3</button> </form> 					
						</div>

					<div class="form-row">
                     <form class="form-inline" method="post" action="tarefa_controller.php?acao=inserir">
									<div class="form-group">
										
										<input name="tarefa" type="hidden" value="Bebida 4" class="form-control">
										<input type="hidden" name="mesa" value="1" class="form-control">
									</div>

									<button class="btn btn-warning">Bebida 4</button>
									
									 </form> 

				    <form class="form-inline" method="post" action="tarefa_controller.php?acao=inserir">
									<div class="form-group">
										
										<input name="tarefa" type="hidden" value="Bebida 5" class="form-control">
										<input type="hidden" name="mesa" value="1" class="form-control">
									</div>

									<button style="margin-left: 10px;" class="btn btn-warning">Bebida 5</button> </form> 

					 <form class="form-inline" method="post" action="tarefa_controller.php?acao=inserir">
									<div class="form-group">
										
										<input name="tarefa" type="hidden" value="Bebida 6" class="form-control">
										<input type="hidden" name="mesa" value="1" class="form-control">
									</div>

									<button style="margin-left: 10px;" class="btn btn-warning">Bebida 6</button> </form> 					
						</div>	
						
				<div class="form-row">
                     <form class="form-inline" method="post" action="tarefa_controller.php?acao=inserir">
									<div class="form-group">
										
										<input name="tarefa" type="hidden" value="Bebida 7" class="form-control">
										<input type="hidden" name="mesa" value="1" class="form-control">
									</div>

									<button class="btn btn-warning">Bebida 7</button>
									
									 </form> 

				    <form class="form-inline" method="post" action="tarefa_controller.php?acao=inserir">
									<div class="form-group">
										
										<input name="tarefa" type="hidden" value="Bebida 8" class="form-control">
										<input type="hidden" name="mesa" value="1" class="form-control">
									</div>

									<button style="margin-left: 10px;" class="btn btn-warning">Bebida 8</button> </form> 

					 <form class="form-inline" method="post" action="tarefa_controller.php?acao=inserir">
									<div class="form-group">
										
										<input name="tarefa" type="hidden" value="Bebida 9" class="form-control">
										<input type="hidden" name="mesa" value="1" class="form-control">
									</div>

									<button style="margin-left: 10px;" class="btn btn-warning">Bebida 9</button> </form> 					
						</div></div>  


	<!-- SOBREMESA -->

<div class="col-md-3">
                    <!-- form row -->
					 <div class="form-row">
                     <form class="form-inline" method="post" action="tarefa_controller.php?acao=inserir">
									<div class="form-group">
										
										<input name="tarefa" type="hidden" value="SOBREMESA 1" class="form-control">
										<input type="hidden" name="mesa" value="1" class="form-control">
									</div>

									<button class="btn btn-danger">SM 1</button>
									
									 </form> 

				    <form class="form-inline" method="post" action="tarefa_controller.php?acao=inserir">
									<div class="form-group">
										
										<input name="tarefa" type="hidden" value="SOBREMESA 2" class="form-control">
										<input type="hidden" name="mesa" value="1" class="form-control">
									</div>

									<button style="margin-left: 10px;" class="btn btn-danger">SM 2</button> </form> 

					 <form class="form-inline" method="post" action="tarefa_controller.php?acao=inserir">
									<div class="form-group">
										
										<input name="tarefa" type="hidden" value="SOBREMESA 3" class="form-control">
										<input type="hidden" name="mesa" value="1" class="form-control">
									</div>

									<button style="margin-left: 10px;" class="btn btn-danger">SM 3</button> </form> 					
						</div>

					<div class="form-row">
                     <form class="form-inline" method="post" action="tarefa_controller.php?acao=inserir">
									<div class="form-group">
										
										<input name="tarefa" type="hidden" value="SOBREMESA 4">
										<input type="hidden" name="mesa" value="1" class="form-control">
									</div>

									<button class="btn btn-danger">SM 4</button>
									
									 </form> 

				    <form class="form-inline" method="post" action="tarefa_controller.php?acao=inserir">
									<div class="form-group">
										
										<input name="tarefa" type="hidden" value="SOBREMESA 5" class="form-control">
										<input type="hidden" name="mesa" value="1" class="form-control">
									</div>

									<button style="margin-left: 10px;" class="btn btn-danger">SM 5</button> </form> 

					 <form class="form-inline" method="post" action="tarefa_controller.php?acao=inserir">
									<div class="form-group">
										
										<input name="tarefa" type="hidden" value="SOBREMESA 6" class="form-control">
										<input type="hidden" name="mesa" value="1" class="form-control">
									</div>

									<button style="margin-left: 10px;" class="btn btn-danger">SM 6</button> </form> 					
						</div></div>
							


			</div>
		</div>
	</body>
</html>