<?php

 $acao = 'recuperarTarefasPendentes';
 require 'tarefa_controller.php';
 $index = 1;



 ?>

<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Comandas</title>

		<link rel="stylesheet" href="css/estilo.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

				<script>
			function editar(id, txt_tarefa){
				//criar form 
				let form = document.createElement('form')
				form.action = 'tarefa_controller.php?acao=atualizar'
				form.method = 'post'
				form.className = 'row'

				//criar input
               let inputTarefa = document.createElement('input')
               inputTarefa.type = 'text'
               inputTarefa.name = 'tarefa'
               inputTarefa.className = 'col-9 form-control'
               inputTarefa.value = txt_tarefa

               //criar um input hidden para guardar o id da tarefa

               let inputId = document.createElement('input')
               inputId.type = 'hidden'
               inputId.name = 'id'
               inputId.value = id

				//criar button
				let button = document.createElement('button')
				button.type = 'submit'
				button.className = 'col-3 btn btn-info'
				button.innerHTML = 'Atualizar'

				//incluir InputTarefa no form
				form.appendChild(inputTarefa)

				//incluir inputHidden no form
				form.appendChild(inputId)

				//incluir botao no form
				form.appendChild(button)

				/* teste
				console.log(form)
				alert(id) 
				*/

				//selecionar tarefa
				let tarefa = document.getElementById('tarefa_'+id)

				//limpar o texto da tarefa para inclusao do form 
				tarefa.innerHTML = ''

				//inserir form na pagina
				tarefa.insertBefore(form, tarefa[0]) 
			}

			function remover(id){
				location.href = 'index.php?acao=remover&id='+id
			}

			function marcarRealizada(id){
				location.href = 'index.php?acao=marcarRealizada&id='+id
			}

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

		<div class="container app">
			
					<div class="row">
				<div class="col">
					<ul class="nav nav-tabs flex-collumn mesas">
						<li class="nav-item mesa"><a class="nav-link" href="nova_tarefa.php">Mesa 1</a></li>
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
						<li class="list-group-item active"><a href="#">Pedidos Pendentes</a></li>
						<li class="list-group-item"><a href="todas_tarefas.php">Todos os Pedidos</a></li>
					</ul>
				</div>

				<div class="col-md-9">
					<div class="container pagina">
						<div class="row">
							<div class="col">
								<h4>Pedidos Pendentes</h4>
								<hr />

																<?php 

								foreach($tarefas as $indice => $tarefa) {  ?>

								<div class="row mb-3 d-flex align-items-center tarefa">
									<div class="col-sm-9" id="tarefa_<?= $tarefa->id ?>"> <?= $tarefa->tarefa ?> (<?= $tarefa->mesa  ?>) </div>  
									<div class="col-sm-3 mt-2 d-flex justify-content-between">
										<i class="fas fa-trash-alt fa-lg text-danger" onclick="remover(<?= $tarefa->id ?>)"></i>

                                

										<i class="fas fa-edit fa-lg text-info" onclick="editar(<?= $tarefa->id ?>, '<?= $tarefa->tarefa ?>' )"></i>
										<i class="fas fa-check-square fa-lg text-success" onclick="marcarRealizada(<?= $tarefa->id ?>)"></i>

									
									</div>
								</div>

							<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>