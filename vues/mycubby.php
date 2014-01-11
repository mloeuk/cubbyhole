<div class="container">
    <div class="col-md-12">
        <div class="page-header">
            <h1 class="ch">Cubby<span class="h">Hole</span> <small><span class="glyphicon glyphicon-hand-right"></span> <?php echo $path; ?></small></h1>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <ul class="nav nav-pills">
                <li><a href="#"><i class="fa fa-cloud-upload fa-lg"></i> Transférer</a></li>
                <li><a href="#"><i class="fa fa-plus-circle fa-lg"></i> Nouveau dossier</a></li>
            </ul>
        </div>
        <div class="col-md-4 col-md-offset-4">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Rechercher">
            </div>
        </div>
    </div>
    <div class="row row-cubby-table">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th style="width:5%"></th>
                        <th style="width:55%">Nom</th>
                        <th style="width:20%">Type</th>
                        <th style="width:20%">Modifié</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (count($list) > 0) {
                        foreach ($list as $l) {
                            if (is_dir($l)) {
                                echo "<tr><td colspan='4'>" . $l . "</td></tr>";
                            } else {
                                echo "<tr><td colspan='4'>" . $l . "</td></tr>";
                            }
                        }
                    } else {
                        echo "<tr><td colspan='4'>Ce dossier est vide.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>