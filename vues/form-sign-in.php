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
</div>
<div class="navbar navbar-default navbar-fixed-bottom bg-cloud">
    <div class="container">
        <p class="navbar-text">Création du site web par l'équipe - Projet de SupInfo</p>
    </div>
</div>