<section id="home-form">        
    <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="nav nav-pills pull-right">
                        <li><a href="" id='linkInscription'> S'inscrire</a></li>
                        <li><a href="" id='linkConnexion'>Se connecter</a></li>
                        <li><a href="" id='linkDownload'><i class="fa fa-download"></i> Télécharger</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <center>
                        <h1 class="ch"><span class="glyphicon glyphicon-cloud"></span> Cubby<span class="h">Hole</span></h1>
                    </center>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="divConnexion">
                    <form class="form-signin connexion" id="formConnexion" method="post" action="./modeles/connexion.php">
                        <h2 class="form-signin-heading">Se connecter</h2>
                        <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Adresse Email" required autofocus>
                        <input type="password" class="form-control" name="motdepasse" id="inputPassword" placeholder="Mot de passe" required>
                        <button class="btn btn-lg btn-success btn-block" type="submit">Se connecter</button>
                        <br/>
                        <div class="alert alert-danger text-center" style="display:none;" id="error-sign-in-cnx"></div>
                    </form>
                </div>
                <div id="divInscription" style="display:none;">
                    <form class="form-signin inscription" id="formInscription" method="post" action="./modeles/inscription.php">
                        <h2 class="form-signin-heading">S'incrire</h2>
                        <input type="text" class="form-control" name="addprenom" placeholder="Prénom" required autofocus>
                        <input type="text" class="form-control remove-radius" name="addnom" placeholder="Nom" required>
                        <input type="email" class="form-control remove-radius" name="addemail" placeholder="Adresse Email" required>
                        <input type="password" class="form-control" name="addmotdepasse" placeholder="Mot de passe" required>
                        <button class="btn btn-lg btn-success btn-block" type="submit">S'inscrire</button>
                        <br/>
                        <div class="alert alert-danger text-center" style="display:none;" id="error-sign-in-ins"></div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <a href="#home-plus">En savoir plus</a>
            </div>
        </div>
    </div>
</section>
<section id="home-plus">
    <div class="bloc">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <i class="fa fa-users fa-5x"></i>
                    <h1>Partagez</h1>
                    <p>Choisissez quels documents et avec qui vous voulez partager</p>
                </div>
                <div class="col-md-4">
                    <i class="fa fa-globe fa-5x"></i>
                    <h1>Accessible</h1>
                    <p>Ayez vos documents où que vous soyez et à tout moment de la journée comme de la nuit</p>
                </div>
                <div class="col-md-4">
                    <i class="fa fa-facebook-square fa-5x"></i>
                    <h1>Facebook</h1>
                    <p>Pour suivre toute l'actualité de CubbyHole, consultez notre page Facebook</p>
                </div>
            </div>
            <div class="row" style="margin-top: 70px;">
                <div class="col-md-4 col-md-offset-4 text-center">
                    <a class="btn btn-lg btn-success btn-block" type="submit" id="btn-inscription-plus">S'inscrire</a>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="navbar navbar-default navbar-fixed-bottom bg-cloud">
    <div class="container">
        <p class="navbar-text pull-left">CubbyHole - Projet de SupInfo</p>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="">En Savoir plus</a></li>
                <li><a href="">Contact</a></li>
            </ul>
        </div>
    </div>
</div>