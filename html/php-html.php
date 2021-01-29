<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>PHP & HTML</title>
  </head>
  <body>
    <h1>Liste des élèves</h1>
    <!-- Instructions : Afficher la liste des élèves qui sont présents dans le tableau $students -->
    <?php
        //students
        $students = ['Hulk', 'Iron Man', 'Wonder Woman', 'Black Widow', 'Malicia'];
     ?>
     <ul>
       <?php
          // TODO Display the students here, each student inside a new <li> element
        foreach($students as $stud){
            echo "<li>$stud</li>";
        }
       ?>
     </ul>
     <hr>
     <h1>Date du jour</h1>
     <form>

       <!-- Instructions : Créer la liste de jour (en chiffres), de mois (en chiffres) et d'année en PHP. -->
       <label for="day">Day</label>
       <select  name="day" id="day"><?php
           for($i = 1; $i<=31;$i++) {
               echo "<option>$i</option>";
           }
           // TODO list of day ?>
       </select>
       <label for="month">Month</label>
       <select  name="month" id="month"><?php
           $mois = ["janvier","fevrier","mars","avril","mai","juin","juillet","aout","septembre","octobre","novembre","decembre"];
           foreach ($mois as $moi){
               echo "<option>$moi</option>";
           }
           // TODO list of month ?>
       </select>
       <label for="year">Year</label>
       <select  name="year" id="year"><?php
           for($i = 2020; $i<=2050;$i++) {
               echo "<option>$i</option>";
           }
           // TODO list of year ?>
       </select>
     </form>
     <hr>
     <!-- TODO Instruction : Afficher ce bloc que si dans l'URL il y'a une variable sexe et que ça valeur vaut "fille" -->
    <?php
    if(isset($_GET["sex"])){
        if($_GET["sex"] === "fille"){
            echo "<p>
                    Je suis une fille
                </p>";
        }
    }
    elseif(isset($_GET["sex"])){
        if($_GET["sex"] === "garçon"){
            echo "<p>
                    Je suis un garçon
                </p>";
        }
    }
    else{
        echo "<p>
                Je suis indefinie
              </p>";
    }
    ?>
  </body>
</html>
