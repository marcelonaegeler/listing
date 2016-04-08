<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>List</title>

	<link href="https://fonts.googleapis.com/css?family=Noto+Sans:400,700" rel="stylesheet" type="text/css">
	<link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="stylesheets/style.css">
	<link rel="stylesheet" href="stylesheets/dropdown.css">
	<link rel="stylesheet" href="stylesheets/grid.css">

</head>
<body>
	<?php include '_header.html' ?>

	<section class="content content-mid">

		<section class="topbar card">
			<h1 class="heading-1">Listing</h1>
		</section>

		<section class="list-by-date card">

			<div class="filters">
				mostrando <span class="highlight">todas as categorias</span>
			</div>
			
			<div class="period-item">
				<div class="period-date">08/04</div>

				<div class="period-list-item row">
					<div class="column column-4">
						<span class="circular-marker bg-red"></span> 
						<a href="#" class="period-list-item-name">List item 01</a>
					</div>
					<div class="column column-3">categoria 01</div>
					<div class="column column-3">R$50,00 (lucro R$15,00)</div>
					<div class="column column-2">Editar</div>
				</div>

				<div class="period-list-item row">
					<div class="column column-4">
						<span class="circular-marker bg-red"></span> 
						<a href="#" class="period-list-item-name">List item 02</a>
					</div>
					<div class="column column-3">categoria 03</div>
					<div class="column column-3">R$60,00 (lucro R$20,00)</div>
					<div class="column column-2">Editar</div>
				</div>

			</div>

			<div class="period-item">
				<div class="period-date">10/04</div>

				<div class="period-list-item row">
					<div class="column column-4">
						<span class="circular-marker bg-red"></span> 
						<a href="#" class="period-list-item-name">List item 03</a>
					</div>
					<div class="column column-3">categoria 01</div>
					<div class="column column-3">R$50,00 (lucro R$15,00)</div>
					<div class="column column-1">
						<a href="" title="Pago"><i class="ion-happy-outline"></i></a>
						<a href="" title="Não pago"><i class="ion-sad-outline"></i></a>
					</div>
					<div class="column column-1">Editar</div>
				</div>

				<div class="period-list-item row">
					<div class="column column-4">
						<span class="circular-marker bg-red"></span> 
						<a href="#" class="period-list-item-name">List item 04</a>
					</div>
					<div class="column column-3">categoria 03</div>
					<div class="column column-3">R$60,00 (lucro R$20,00)</div>
					<div class="column column-2">Editar</div>
				</div>

			</div>

		</section>

	</section>
	
</body>
</html>