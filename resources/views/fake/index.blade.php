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
	<div class="four wide collumn column">
		<form action="/api/refresh" method="post" id="refresh">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<button class="ui button" id="generate" type="submit">
				Générer un nouveau profil
			</button>

		</form>
	</div>

	<div class="height wide collumn column">
		<form action="/api/profil" id="json" method="get">
			<div class="ui fluid card">
				<div class="content">
					<div class="header">{{$name}}</div>
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<input type="hidden" name="name" value="{{$name}}" data-value="{{$name}}">

				</div>
				<div class="content">
					<div class="ui small feed">
						<h4 class="header">Adresse</h4>
						<div class="event">
							<div class="content">
								<div class="summary">{{$address}}</div>
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<input type="hidden" name="address" value="{{$address}}">


							</div>
						</div>
						<h4 class="ui sub header">Mail</h4>
						<div class="event">
							<div class="content">
								<div class="summary">
									{{$email}}
								</div>
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<input type="hidden" name="mail" value="{{$email}}">


							</div>
						</div>
						<h4 class="ui sub header">Téléphone</h4>
						<div class="event">
							<div class="content">
								<div class="summary">
									{{$phone}}
								</div>
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<input type="hidden" name="phone" value="{{$phone}}">


							</div>
						</div>
						<h4 class="ui sub header">Date de naissance</h4>
						<div class="event">
							<div class="content">
								<div class="summary">
									{{$birth}}


								</div>
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<input type="hidden" name="birth" value="{{$birth}}">


							</div>
						</div>
						<h4 class="ui sub header">Âge</h4>
						<div class="event">
							<div class="content">
								<div class="summary">
									{{$old}}

								</div>
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<input type="hidden" name="old" value="{{$old}}">


							</div>
						</div>
						<h4 class="ui sub header">Description</h4>
						<div class="event">
							<div class="content">
								<div class="summary">
									{{$text}}
								</div>
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<input type="hidden" name="text" value="{{$text}}">


							</div>
						</div>
					</div>
				</div>
				<div class="extra content">
				<a href="http://127.0.0.1:8000/api/profil/{{$seed}}" class="ui positive button">Get Json</a>
				</div>
			</div>
		</form>
	</div>
</div>
@stop


