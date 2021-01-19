<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de traitement</title>
</head>
<body>
    <h1>Affichage des données en utilisant POST :</h1>
    <?php
        if ( isset($_POST['submit'])){
            $Lastname = $_POST['Lastname'];
            $Firstname = $_POST['Firstname'];
            $DOB = $_POST['DOB'];  
            echo 'Nom : ' . $Lastname .'<br>'; 
            echo 'Prénom : ' . $Firstname .'<br>';
            echo 'Date de naissance : ' . $DOB .'<br>'; 

            var_dump($_POST['interest']);
            $interest = $_POST['interest'];
            foreach ($interest as $valeur){
                echo $valeur ."<br>";
            }
        }
    ?>  
 
</body>
</html>

