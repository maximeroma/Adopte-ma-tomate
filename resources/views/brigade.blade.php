@extends("layouts.app2")

@section('content')  
    <div class="container-fluid">
        <div class="row">
            <div id="calendar"></div>
        </div>
        <div class="row">
            <h1>Ma Brigade</h1>
        </div>

        <div class="row">
            <div class="col">
                <div class="card" style="width: 20rem;">
                    <img class="card-img-top" src="images/jaguar.jpg" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Morelize la puissance</p>
                    </div>
                    <div class="card-body">
                        <a href="#" class="card-link">Voir le profil</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 20rem;">
                    <img class="card-img-top" src="images/jaguar.jpg" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Raphael, le patron du PMU</p>
                    </div>
                    <div class="card-body">
                        <a href="#" class="card-link">Voir le profil</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 20rem;">
                    <img class="card-img-top" src="images/jaguar.jpg" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Marie L.</p>
                    </div>
                    <div class="card-body">
                        <a href="#" class="card-link">Voir le profil</a>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="container">
            <div class="row">
                <h1>Mon formulaire de contact</h1>
            </div>
            <div class="row">
                <form action="/register" method="POST">
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message" name="message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>        
    </div>
    

   
    
    
@endsection('content')

