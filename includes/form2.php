<Form action="index.php" method="POST" class="container-fluide col-12" enctype="multipart/form-data">
            <div class="row">

            <!-- Partie gauche -->
            <div class="col-6"> 
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
    

                </div>

        <!-- Partie droite -->
            <div class="col-4 ml-5">

                <!-- Checkbox -->
                <label class="text-light">Connaissances</label>
                    <div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="checkboxHtml" value="html" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                HTML
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="checkboxCss" value="css" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">
                                CSS
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="checkboxBootstrap" value="bootstrap" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">
                                Bootstrap
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="checkboxPhp" value="php" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">
                                PHP
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="checkboxMysql" value="mysql" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">
                                MySQL
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="checkboxJavascript" value="javascript" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">
                                JavaScript
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="checkboxSymfony" value="symfony" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">
                                Symfony
                            </label>
                        </div>
                    </div>


                    <!-- Couleur préférée -->
                    <br>
                    <div class="row col-12">
                    <label>Couleur préféré</label>
                    <input class="ml-4" type="color" name="color"
                            value="#0a2461">
                    </div>

                    <!-- Date de naissance -->
                    
                    <div class="row col-12">
                    <label>Date de naissance</label>
                    <input class="ml-2" type="date" id="start" name="dateDeNaissance"
                    value="2000-01-01"
                    min="1980-01-01" max="2012-08-12">

                    </div>

            </div>
            <!-- Joindre une image -->
            <div class="mt-4">
            <label class="text-light">Joindre une image</label>
            <br>
            <input class="text-light" type="file" name="fileToUpload" id="fileToUpload">
            </div>
        </div>
                

            <!-- Bouton Enregistrement -->
    
                <div class="row col-2 mt-4">
                <input type="submit" name="enregistrementComplet" class="mt-2 btn btn-light" value="Enregistre les données"></input>   
                </div>



</Form>