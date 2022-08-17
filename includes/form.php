<Form action="index.php" method="POST" class="container-fluide col-12">
                
                <!-- titre form -->
                    <h2 class="text-light">Formulaire d'ajout des données</h1> 
    
                <!-- prenom -->
                    <div class="row my-3">
                        <label class="col-12 text-light">Prenom</label>
                        <input type="text" name="prenom" class="col-12 bg-dark text-light">
                    </div>
    
                <!-- nom -->
                    <div class="row my-3">
                        <label class="col-12 text-light">Nom</label>
                        <input type="text" name="nom" class="col-12 bg-dark text-light">
                    </div>
    
                <!-- Age -->
                    <div class="row my-3">
                        <label class="col-12 text-light">Age( 10 à 60 ans )</label>
                        <input type="text" name="age" class="col-12">
                    </div>
                    
                <!-- Taille -->
                    <div class="row my-3 text-center">
                        <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Taille (entre 1.6 et 2m)</span>
                        </div>
                        <input type="number" class="form-control" name="taille" step="0.01" min="1.6" max="2">
                        <div class="input-group-prepend">
                            <span class="input-group-text">m</span>
                        </div>
                        </div>
                    </div>
    
                <!-- Radio -->
                    <div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="role" id="apprenants" value="apprenants" checked>
                        <label class="form-check-label  text-light" for="apprenants">
                            Apprenants
                        </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="role" id="formateur" value="formateur">
                        <label class="form-check-label  text-light" for="formateur">
                            Formateur
                        </label>
                        </div>
                    </div>
    
                <!-- Bouton Enregistrement -->
                    <div class="row col-2 float-right">
                        <input type="submit" name="enregistrementSimple" class="mt-2 btn btn-light" value="Enregistre les données"></input>   
                    </div>
                </Form>