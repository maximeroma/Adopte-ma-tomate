@extends("layouts.app2")

@section('content')  

    <div class="container-fluid">
        <!-- <h1 class="text-center">Un jardin</h1> -->
        <div class="row">
        <div class="col-md-6">
           <img src="res/oasisIsGood.jpg" style="width: 80%; margin-top:2px" alt=""/>
        </div class="container">
         <div class="col-md-6">
           <p><strong>description </strong> un jardin au calme avec de la salade...</p>
           <p><strong>superficie: </strong> 400 m2</p>
           <p><strong>Outils/ equipements disponible: </strong>acces au puit, motoculteur</p>
           <p><strong>Besoins: </strong>desherbage, elagage</p>
           <p class="port"><strong>Brigade presente: </strong><img style="width: 3rem;" class="card-img-top" src="images/celine.jpg" alt="Card image cap"><img style="width: 3rem;" class="card-img-top" src="images/audrey.jpg" alt="Card image cap"><img style="width: 3rem;" class="card-img-top" src="images/octavia.jpg" alt="Card image cap"><img style="width: 3rem;" class="card-img-top" src="images/morel.jpg" alt="Card image cap"><img style="width: 3rem;" class="card-img-top" src="images/emilie.jpg" alt="Card image cap">
           <a href="/brigade"><i class="fa fa-lg fa-calendar" aria-hidden="true"></i></a></p>


        </div>
        <div class="top">
            <h1 class="text-center">Brigade:</h1>
            <div class="topo">
                <div class="row">
                    <div class="card" style="width: 10rem;">
                        <img class="card-img-top" src="images/celine.jpg" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Celine</p>
                        </div>
                        <div class="card-body">
                            <a href="#" class="card-link">Voir le profil</a>
                        </div>
                    </div>
                    <div class="card" style="width: 10rem;">
                        <img class="card-img-top" src="images/audrey.jpg" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Audrey</p>
                        </div>
                        <div class="card-body">
                            <a href="#" class="card-link">Voir le profil</a>
                        </div>
                    </div>
                    <div class="card" style="width: 10rem;">
                        <img class="card-img-top" src="images/octavia.jpg" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Octavia</p>
                        </div>
                        <div class="card-body">
                            <a href="#" class="card-link">Voir le profil</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="topo">
                <div class="row">
                    <div class="card" style="width: 10rem;">
                        <img class="card-img-top" src="images/morel.jpg" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Morel</p>
                        </div>
                        <div class="card-body">
                            <a href="#" class="card-link">Voir le profil</a>
                        </div>
                    </div>
                    <div class="card" style="width: 10rem;">
                        <img class="card-img-top" src="images/emilie.jpg" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Emilie</p>
                        </div>
                        <div class="card-body">
                            <a href="#" class="card-link">Voir le profil</a>
                        </div>
                    </div>
                    <div class="card" style="width: 10rem;">
                        <img class="card-img-top" src="images/clemence.jpg" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Clemence</p>
                        </div>
                        <div class="card-body">
                            <a href="#" class="card-link">Voir le profil</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="topo">
                <div class="row">
                    <div class="card" style="width: 10rem;">
                        <img class="card-img-top" src="images/pmu.jpg" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Raphael</p>
                        </div>
                        <div class="card-body">
                            <a href="#" class="card-link">Voir le profil</a>
                        </div>
                    </div>
                    <div class="card" style="width: 10rem;">
                        <img class="card-img-top" src="images/maxime.jpg" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Maxime</p>
                        </div>
                        <div class="card-body">
                            <a href="#" class="card-link">Voir le profil</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
        
        <br>

    </div>
        <div class="container">
            <div class="row">
                <form action="/register" class="form" method="POST">
                <h1 class="text-center">Mon formulaire de contact</h1>
                    <div class="form-group">
                        <label for="email">Adresse mail</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message" name="message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Envoyé</button>
                </form>
            </div>
        </div>
    
@endsection('content')

