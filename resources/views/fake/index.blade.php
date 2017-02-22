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
				<div class="header">{{$fakers->name}}</div>
			</div>
			<div class="content">
				<div class="ui small feed">
					<h4 class="header">Adresse</h4>
					<div class="event">
						<div class="content">
							<div class="summary">
								{{$fakers->address}}
							</div>
						</div>
					</div>
					<h4 class="ui sub header">Mail</h4>
					<div class="event">
						<div class="content">
							<div class="summary">
								{{$fakers->freeEmail}}

							</div>
						</div>
					</div>
					<h4 class="ui sub header">Téléphone</h4>
					<div class="event">
						<div class="content">
							<div class="summary">
								{{$fakers->phoneNumber}}
							</div>
						</div>
					</div>
					<h4 class="ui sub header">Date de naissance</h4>
					<div class="event">
						<div class="content">
							<div class="summary">
								{{$dateFakes}}


							</div>
						</div>
					</div>
					<h4 class="ui sub header">Âge</h4>
					<div class="event">
						<div class="content">
							<div class="summary">
								{{$ages}}

							</div>
						</div>
					</div>
					<h4 class="ui sub header">Description</h4>
					<div class="event">
						<div class="content">
							<div class="summary">
								{{$fakers->text}}
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="extra content">
			<a href="/profil" class="ui button">Get link</a>
			</div>
		</div>
	</div>
</div>
<span>
	{{$fakers->seed()}}
</span>

@stop

