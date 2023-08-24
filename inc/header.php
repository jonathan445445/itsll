<nav class="navbar navbar-dark bg-dark navbar-expand-lg bg-light px-lg-3 py-lg-2 shadow-sm sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">RESERVEPLUSIVOIRE</a>

    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">accueil</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Service
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="residence.php">Location de residences meublés</a></li>
            <li><a class="dropdown-item" href="#">Location de vehicules</a></li>
            <li><a class="dropdown-item" href="#">Achat</a></li>
            <li><a class="dropdown-item" href="#">Vente</a></li>
            <li><a class="dropdown-item" href="#">Livraison</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link me-2" href="contact.php">Contactez-nous</a>
        </li>

        <li class="nav-item">
          <a class="nav-link me-2" href="propos.php">À propos de nous</a>
        </li>
        
      </ul>

      <div class="d-flex" role="search">
        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#loginModel">Login</button>
        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#registerModel">Register</button>
      </div>

    </div>
  </div>
</nav>

<div class="modal fade" id="loginModel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    	<form>
    		<div class="modal-header">
        	<h5 class="modal-title d-flex align-items-center">
        	<i class="bi bi-person-circle fs-3 me-2">Utilisateur</i>
        	</h5>
        	<button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      		</div>
      		<div class="modal-body">
        	<div class="mb-3">
    			<label class="form-label">Adresse e-mail</label>
    			<input type="email" class="form-control shadow-none">
  			  </div>
  			<div class="mb-4">
    			<label class="form-label">Mot de passe</label>
    			<input type="password" class="form-control shadow-none">
  			</div>
  			<div class="d-flex align-items-center justify-content-between mb-2">
  				<button type="submit" class="btn btn-dark shadow-none">LOGIN</button>
  				<a href="JavaScript: void(0)" class="text-secondary text-decoration-none" >Mot de passe oublié</a>
  			</div>
      		</div>
      		<div class="modal-footer">
        	<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
        	<button type="button" class="btn btn-primary">Connecter</button>
      		</div>
    	</form>
      
    </div>
  </div>
</div>




<div class="modal fade" id="registerModel" tabindex="-1" role="dialog" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
        <div class="modal-content">

			<div class="modal-header">
          		<h5 class="modal-title d-flex align-items-center"> 
          			<i class="bi bi-person-lines-fill fs-3 me-2">ENREGISTREMENT DE L'UTILISATEUR</i>
          		</h5>
      	 		<button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
    		</div>

            <div class="modal-body">
                
                <div style="max-width:100%;">

                    <div style="width:100%">

                        <div class="row">
                            <div class="form-group col">
                                <label for="code_cli">Prenom</label>
                                <input class="form-control" type="text" id="code_cli">
                            </div>

                            <div class="form-group col">
                                <label for="nom_cli">Nom</label>
                                <input class="form-control" type="text" id="nom_cli">
                                <small id="VerifNomCli" style="display:none;" class="text-danger">veuillez saisir le nom du client</small>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col">
                                <label for="code_cli">Code postal</label>
                                <input class="form-control" type="text" id="code_cli">
                            </div>

                            <div class="form-group col">
                                <label for="nom_cli">Pays/Région</label>
                                <input class="form-control" type="text" id="nom_cli">
                                <small id="VerifNomCli" style="display:none;" class="text-danger">veuillez saisir le nom du client</small>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col">
                                <label for="code_cli">Adresse</label>
                                <input class="form-control" type="text" id="code_cli">
                            </div>

                            <div class="form-group col">
                                <label for="nom_cli">Email</label>
                                <input class="form-control" type="text" id="nom_cli">
                                <small id="VerifNomCli" style="display:none;" class="text-danger">veuillez saisir le nom du client</small>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col">
                                <label for="code_cli">Mot de passe</label>
                                <input class="form-control" type="text" id="code_cli">
                            </div>

                            <div class="form-group col">
                                <label for="nom_cli">Confirmer Le Mot De Passe</label>
                                <input class="form-control" type="text" id="nom_cli">
                                <small id="VerifNomCli" style="display:none;" class="text-danger">veuillez saisir le nom du client</small>
                            </div>
                        </div>

                        <div class="text-center my-1">
	      					<button type="submit" class="btn btn-dark shadow-none">Enregistrer</button>
	      				</div>

                    </div>

                </div>

            </div>

            <div class="modal-footer">
                <button type="button" id="btnclose" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <button type="button" id="btnsave" name="registerbtn" class="btn btn-success">Ajouter</button>
            </div>
        </div>
    </div>
</div>