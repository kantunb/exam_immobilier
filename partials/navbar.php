<nav class="navbar navbar-expand-sm navbar-light bg-light">
    <a class="navbar-brand" href="http://localhost:8888/whiskyBar/index.php">Mes logements</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <!-- <li class="nav-item active">
                <a class="nav-link" href="http://localhost:8888/whiskyBar/index.php">Home <span class="sr-only">(current)</span></a>
            </li> -->
            <li class="nav-item">
                <a class="nav-link" href="./add.php">Ajouter un logement</a>
            </li>
            <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">En faire +</a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                    <a class="dropdown-item" href="#">Modifier</a>
                    <a class="dropdown-item" href="#">Supprimer</a>
                </div>
            </li> -->
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#connexion">
                Se connecter
            </button>

            <!-- Modal -->
            <div class="modal fade" id="connexion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Se connecter</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="form-group" action="" method="$_POST">

                                <div class="form-group">
                                    <label for="email">Email</label><br>
                                    <input type="email" class="form-control" name="email" aria-describedby="email" placeholder="">
                                </div>

                                <div class="form-group">
                                    <label for="password">Password</label><br>
                                    <input type="password" class="form-control" name="password" aria-describedby="emailHelpId" placeholder="">
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary">Me connecter</button>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</nav>