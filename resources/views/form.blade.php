@extends("layouts.app2")

@section('content')

<div class="container mgn_top">

	<h4>Creation de votre compte</h4>

	<hr>

	<form>
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="inputEmail4" class="col-form-label">Nom</label>
				<input type="text" class="form-control" id="inputEmail4" placeholder="Nom">
			</div>
			<div class="form-group col-md-6">
				<label for="inputPassword4" class="col-form-label">Prenom</label>
				<input type="text" class="form-control" id="inputPassword4" placeholder="Prenom">
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="inputAddress" class="col-form-label">Pseudo</label>
				<input type="text" class="form-control" id="inputAddress" placeholder="Pseudo">
			</div>
			<div class="form-group col-md-6">
				<label for="inputAddress2" class="col-form-label">Numéro</label>
				<input type="number" class="form-control" id="inputAddress2" placeholder="Numéro">
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="inputCity" class="col-form-label">Mot de passe</label>
				<input type="password" class="form-control" id="inputCity" placeholder="Password">
			</div>
			<div class="form-group col-md-6">
				<label for="inputState" class="col-form-label">Email</label>
				<input type="email" class="form-control" id="inputCity" placeholder="Email">
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="inputCity" class="col-form-label">Date</label>
				<input type="date" class="form-control" id="inputCity">
			</div>
			<div class="form-group col-md-6">
				<label for="inputState" class="col-form-label">Mon niveau de jardinage</label>
				<input type="email" class="form-control" id="inputCity" placeholder="Mon niveau de jardinage">
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="inputCity" class="col-form-label">Description</label>
				<textarea type="text" class="form-control" id="inputCity"></textarea>
			</div>
			<div class="form-group col-md-6">
				<label for="inputState" class="col-form-label">Adresse</label>
				<input type="text" class="form-control" id="inputCity" placeholder="Adresse">
			</div>
		</div>

		<div class="form-group">
			<div class="form-check">
				<label class="form-check-label">
					<input class="form-check-input" type="radio"> Homme
				</label>
				<label class="form-check-label">
					<input class="form-check-input" type="radio"> Femme
				</label>
			</div>
		</div>
		<button type="submit" class="btn btn-primary">Ok</button>
	</form>
</div>

@endsection	