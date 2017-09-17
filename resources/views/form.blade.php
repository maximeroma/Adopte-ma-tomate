@extends("layouts.app2")

@section('content')

<div class="container mgn_top">

	<h4>Creation de votre compte</h4>

	<hr>



		<div class="form-row">

			<div class="form-group col-md-6">
				<label for="inputPassword4" class="col-form-label">Prenom</label>
				<input type="text" class="form-control" id="prenom" placeholder="Prenom" name="prenom">
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
				<label for="inputCity" class="col-form-label">Date</label>
				<input type="date" class="form-control" id="inputCity">
			</div>
			<div class="form-group col-md-6">
				<label for="inputState" class="col-form-label">Mon niveau de jardinage</label>
				<input type="text" class="form-control" id="inputCity" placeholder="Mon niveau de jardinage">
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
					<input class="form-check-input" name="gender" type="radio"> Homme
				</label>
				<label class="form-check-label">
					<input class="form-check-input" name="gender" type="radio"> Femme
				</label>
			</div>
		</div>



		<form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name" class="col-md-4 control-label">Name</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>



                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="col-md-4 control-label">Password</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control" name="password" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    </div>
                </div>

                

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Register
                        </button>
                    </div>
                </div>
            </form>

</div>

@endsection	