<?php session_start() ; ?>
<!DOCTYPE html>
<html lang="fr">
<?php include 'includes/head.php' ?>
<body class="bg-secondary">
<?php include 'includes/header.php'; ?>
<?php function readTable($tableau){
        foreach ($tableau as $key => $value){
            foreach ($value as $key2 => $value){
                echo 'Cette ligne correspond à la clé ' .  $key2 . ' et contient ' . $value . '<br>';
            }}
        };?>





<section class="container-fluid">
    
    <div class="row justify-content-center">
        
    <!-- Menu gauche -->
        <div class="col-3 px-4 bg-secondary">
            <?php 
            if (isset($_SESSION['infos'])) { ?>
                <a href="index.php"><button type="button" class="mt-2 btn btn-dark col-12">Home</button></a>  
            <?php 
                include 'includes/ul.php'; 
            } 
            else { ?>
                <a href="index.php"><button type="button" class="mt-2 btn btn-dark col-12">Home</button></a>                    
            <?php }
            ?>
        </div>

    <!-- Menu droite -->
        <div class="col-9 bg-secondary">
      
        <?php
             if (empty($_SESSION) && (!isset($_GET['simple'])) && (!isset($_GET['complet']))){  
                ?>
            <a href="index.php?simple"><input type="submit" name="afficheForm" class="mt-2 btn btn-light col-2" value="Ajouter des données"></input></a>   
            <a href="index.php?complet"><input type="submit" name="afficheForm" class="mt-2 btn btn-light col-2" value="Ajouter plus de données"></input></a>
            <?php  } 
            ?>

            <?php if(isset($_GET['simple'])) {  //affiche le form en appuyant sur le bouton
                    include 'includes/form.php'; 
                    } 

            if (isset($_GET['complet'])) {  //affiche le form en appuyant sur le bouton
                include 'includes/form2.php'; 
                } 
            
            // Vérification du form simple
            
            if (isset($_POST['enregistrementSimple'])){
                if (empty($_POST['nom'])){ ?>
                   <div class="text-light mt-4">Le nom n'a pas été correctement entré</div>
                <?php }
                if (empty($_POST['prenom'])){ ?>
                    <div class="text-light">Le prenom n'a pas été correctement entré</div>
                <?php }
                if (empty($_POST['age'])){ ?>
                    <div class="text-light">L'âge n'a pas été correctement entré</div>
                <?php }
                if (empty($_POST['taille'])){ ?>
                    <div class="text-light">La taille n'a pas été correctement entré</div>
                <?php }}

            // Vérification du form complet

            if (isset($_POST['enregistrementComplet'])){
                if (empty($_POST['nom'])){ ?>
                   <div>Le nom n'a pas été correctement entré</div>
                <?php }
                if (empty($_POST['prenom'])){ ?>
                    <div>Le prenom n'a pas été correctement entré</div>
                <?php }
                if (empty($_POST['age'])){ ?>
                    <div>L'âge n'a pas été correctement entré</div>
                <?php }
                if (empty($_POST['taille'])){ ?>
                    <div>La taille n'a pas été correctement entré</div>
                <?php }
                }


            // ajout des données form complet

            if (isset($_POST['enregistrementComplet'])) {
                $_SESSION['infos'] = [
                    'nom' => $_POST['nom'],
                    'prenom' => $_POST['prenom'],
                    'age' => $_POST['age'],
                    'taille' => $_POST['taille'],
                    'role' => $_POST['role']
                ];
               if (!empty($_POST['checkboxHtml'])) {
                $_SESSION['infos'] += ['html' => $_POST['checkboxHtml']];
               }
               if (!empty($_POST['checkboxCss'])) {
                $_SESSION['infos'] += ['css' => $_POST['checkboxCss']];
               }
               if (!empty($_POST['checkboxBootstrap'])) {
                $_SESSION['infos'] += ['bootstrap' => $_POST['checkboxBootstrap']];
               }
               if (!empty($_POST['checkboxPhp'])) {
                $_SESSION['infos'] += ['php' => $_POST['checkboxPhp']];
               }
               if (!empty($_POST['checkboxMysql'])) {
                $_SESSION['infos'] += ['mysql' => $_POST['checkboxMysql']];
               }
               if (!empty($_POST['checkboxJavascript'])) {
                $_SESSION['infos'] += ['javascript' => $_POST['checkboxJavascript']];
               }
               if (!empty($_POST['checkboxSymfony'])) {
                $_SESSION['infos'] += ['symfony' => $_POST['checkboxSymfony']];
               }               
               if (!empty($_POST['color'])) {
                $_SESSION['infos'] += ['color' => $_POST['color']];
               }
               if (!empty($_POST['dateDeNaissance'])) {
                $_SESSION['infos'] += ['birthday' => $_POST['dateDeNaissance']];
               }                


               
               

            ?> 
        <div class="col-12 text-center bg-success mt-2 p-1 rounded align-center"><p>Les données ont bien été sauvegardées</p></div>
        <?php       
            var_dump( $_SESSION['infos']);
            var_dump( $_FILES['fileToUpload']);
        }  


        if (isset($_POST['enregistrementComplet'])){ include 'includes/upload.php'; }
     


            // ajout des données form simple

            if (isset($_POST['enregistrementSimple'])) {
                $_SESSION['infos'] = [
                    'nom' => $_POST['nom'],
                    'prenom' => $_POST['prenom'],
                    'age' => $_POST['age'],
                    'taille' => $_POST['taille'],
                    'role' => $_POST['role']
                ];
                ?> 
            <div class="col-12 text-center bg-success mt-2 p-1 rounded align-center"><p>Les données ont bien été sauvegardées</p></div>
            <?php       
            }  


            elseif (isset($_GET['debug'])){ ?>
            <div>
                <h2>debugging</h2>
                <pre><?php print_r($_SESSION['infos']);?></pre>
     
            </div>    
           <?php
            }

            elseif (isset($_GET['conc'])){ 
                ?>
            <div>
                <h2>Concatenation</h2>
                <h3 class="mt-3"><?php echo $_SESSION['infos']['prenom'] . ' ' . $_SESSION['infos']['nom']; ?></h3>
                <div><?php echo $_SESSION['infos']['age'] . ' ans, je mesure ' . $_SESSION['infos']['taille'] . 'm et je fais partie des' . $_SESSION['infos']['role'] . 'de l\'AFCI.' ?></div>
                <h3 class="mt-3"><?php $_SESSION['infos']['nom'] =  strtoupper($_SESSION['infos']['nom']);
                    echo $_SESSION['infos']['prenom'] . ' ' . $_SESSION['infos']['nom'];
                ?></h3>
                <div><?php echo $_SESSION['infos']['age'] . ' ans, je mesure ' . $_SESSION['infos']['taille'] . 'm et je fais partie des' . $_SESSION['infos']['role'] . 'de l\'AFCI.' ?></div>
                <h3 class="mt-3"><?php echo $_SESSION['infos']['prenom'] . ' ' . $_SESSION['infos']['nom'];?></h3>
                <div><?php 
                $virgule = str_replace('.', ',', $_SESSION['infos']['taille']) ;
                echo $_SESSION['infos']['age'] . ' ans, je mesure ' . $virgule . 'm et je fais partie des' . $_SESSION['infos']['role'] . 'de l\'AFCI.';
                ?></div>
            </div>    
           <?php
            }

            elseif (isset($_GET['boucle'])){ ?>
            <div>
                <h2>loop</h2>
                <div><?php 
                $i = 0;
                while ($i < 10){
                    echo 'je m\'appelle ' . $_SESSION['infos']['prenom'] . ' ' . $_SESSION['infos']['nom'] . ', j\'ai ' . $_SESSION['infos']['age'] . ' ans et je mesure ' . $_SESSION['infos']['taille'] . 'm' . '<br>'; 
                    $i++;  }    
                    ?></div>      
            </div>    
            <?php
                }

            elseif (isset($_GET['fonction'])){?>
                <div>
                    <h2>fonction</h2>
                    <div>
            <?php readTable($_SESSION); ?>
                    </div>
                </div>    
            <?php  }

            elseif (isset($_GET['supprimer'])){
                
                session_destroy();
                
             ?>
                <h2> Les données ont bien étaient supprimées</h2> 
             <?php 
                            
        
            
            }
            

            ?>
        </div>
    </div>
</section>
<?php include 'includes/footer.php' ?>
</body>
</html>