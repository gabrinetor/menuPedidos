<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">

		<title>QRCode Gerado</title>
		
		<!-- jquery - link cdn -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

		<!-- bootstrap - link cdn -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	
        <style>
            
            .container {
            width: 350px;
            height: 120px;
            }

            .container img {
            width: 100%;
            height: auto;
            }

        </style>
	
    </head>

	<body>
	    <div class="container">
	    	
	    	<br /><br />
			<h1 align="center">QR Code Gerado</h1>
	    	<br /><br />

            <div class="row">

	    	<div class="col-xl-2">
                <!--div php require_once('validar_acesso.php'); echo "Olá, ".$email_cli.". ";?-->            
            </div>


			<div class="col-xl-8">
            
            <?php
                require_once('validar_acesso.php');
                include("lib/vendor/autoload.php");

                //$dadoos = id + pagamento

                $data = $dadoos; //dado que ddesejo armazenar {$id_cli}

                echo '<img src="'.(new \chillerlan\QRCode\QRCode())->render($data).'" />';
            ?>
            
            </div>

			<div class="col-xl-2"><br><br><a href="index.php">Voltar para Home</a></div>

		</div>

        </div>

	    </div>
	
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	</body>
</html>
