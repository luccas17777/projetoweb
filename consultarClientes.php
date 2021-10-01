<?php
require_once("controleDados/controllerCadastro.php");
?>
<!DOCTYPE html>
<html>
<head> 
    <meta charset="utf-8"> 
    <meta name="format-detection" content="telephone=no"> 
    <meta name="msapplication-tap-highlight" content="no"> 
    <meta name="viewport" content="initial-scale=1, width=device-width, viewport-fit=cover"> 
    <meta name="color-scheme" content="light dark"> 
    
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css"> 
    <link rel="stylesheet" href="css/estilo.css">

    <script src="js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
   

    <title>CONSULTAR REGISTROS</title>
    </head> 
    <body  data-spy="scroll" data-target="#navbar-example"> 
	<div class="container">
		<div class="row">
			<nav class="navbar navbar-expand navbar-dark bg-primary col-12">
				<a class="navbar-brand" href="index.php">SISTEMA WEB</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" 
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
				<div class="collapse navbar-collapse" id="navbarNavDropdown">
					<ul class="navbar-nav">
						<li class="nav-item"> <a class="nav-link" href="index.php">Cadastrar</a> </li>
						<li class="nav-item active"><a class="nav-link" href="consultarClientes.php">Consultar</a><span class="sr-only">(current)</span></li>
					</ul>
				</div>
			</nav>  
        </div>
        <div class="row">
        <div class="card mb-3 col-12">
            <div class="card-body">
				<h5 class="card-title">Consultar - Contatos Agendados</h5>
				<div class="table-responsive">
                <table class="table table-hover">
						<thead class="table-active bg-primary">
							<tr>
								<th scope="col">Nome</th>
								<th scope="col">Telefone</th>
								<th scope="col">Origem</th>
								<th scope="col">Contato</th>
								<th scope="col">Observação</th>
								<th scope="col">Ação</th>
							</tr>
						</thead>
						<tbody id="TableData">
						<?php
							$controller = new ControllerCadastro();
							$resultado = $controller->listar(0);
							//print_r($resultado);
							for($i=0;$i<count($resultado);$i++){ 
						?>
								<tr>
									<td scope="col"><?php echo $resultado[$i]['nome']; ?></td>
									<td scope="col"><?php echo $resultado[$i]['telefone']; ?></td>
									<td scope="col"><?php echo $resultado[$i]['origem']; ?></td>
									<td scope="col"><?php echo $resultado[$i]['data_contato']; ?></td>
									<td scope="col"><?php echo $resultado[$i]['observacao']; ?></td>
									<td scope="col">
										<button type="button" class="btn btn-outline-primary" onclick="location.href='editarClientes.php?id=<?php echo $resultado[$i]['id']; ?>'" style="width: 72px;">Editar</button>
										<button type="button" class="btn btn-outline-primary" onclick="javascript:confirmDelete('excluirClientes.php?id=<?php echo $resultado[$i]['id']; ?>')" style="width: 72px;">Excluir</button>
									</td>
								</tr>
						<?php
							}
						?>
							</tbody>
						</tbody>
					</table>
				</div>
				
            </div>
        </div>
        </div>
    </div>
</body>
</html>
