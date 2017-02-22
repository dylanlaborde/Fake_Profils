@extends('app')

@section('menu')
<div class="ui top menu">
	<div class="item">
		<a href="/">
			<h4>Home</h4>
		</a>
	</div>
</div>
@stop

@section('content')
<div>
	<div class="ui grid">
		<div class="seven wide column"></div>
		<h1>Fake_Profils</h1>

	</div>
	<div class="ui grid">
		<div class="seven wide column"></div>
		<span>générateur de profil aleatoire</span>
	</div>
</div>
<div class="ui grid">
<div class="four wide collumn column"></div>
	<div class="height wide collumn column">
		<div class="ui fluid card">
			<div class="content">
				<div class="header">Nom - prenom</div>
			</div>
			<div class="content">
				<div class="ui small feed">
					<h4 class="header">Adresse</h4>
					<div class="event">
						<div class="content">
							<div class="summary">
								adresse
							</div>
						</div>
					</div>
					<h4 class="ui sub header">Mail</h4>
					<div class="event">
						<div class="content">
							<div class="summary">
								mail@mail.mail
							</div>
						</div>
					</div>
					<h4 class="ui sub header">Téléphone</h4>
					<div class="event">
						<div class="content">
							<div class="summary">
								0.40.40.40.4
							</div>
						</div>
					</div>
					<h4 class="ui sub header">Date de naissance</h4>
					<div class="event">
						<div class="content">
							<div class="summary">
								25/04/1996
							</div>
						</div>
					</div>
					<h4 class="ui sub header">Âge</h4>
					<div class="event">
						<div class="content">
							<div class="summary">
								20 ans
							</div>
						</div>
					</div>
					<h4 class="ui sub header">Description</h4>
					<div class="event">
						<div class="content">
							<div class="summary">
							
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@stop


