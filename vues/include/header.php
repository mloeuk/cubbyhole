<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand cubby" href="#"><i class="fa fa-cloud"></i></a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li <?php if($_GET['page'] === "mycubby"){echo "class='active'";} ?>><a href="./index.php?page=mycubby">Casier</a></li>
                <li <?php if($_GET['page'] === "stockage"){echo "class='active'";} ?>><a href="./index.php?page=stockage">Stockage</a></li>
                <li <?php if($_GET['page'] === "partage"){echo "class='active'";} ?>><a href="./index.php?page=partage">Partage</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['nom'] . " " . $_SESSION['prenom'] ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="./index.php?page=compte">Compte</a></li>
                        <li class="divider"></li>
                        <li><a href="./modeles/deconnexion.php"><span class="glyphicon glyphicon-log-out"></span> Se déconnecter</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<br />