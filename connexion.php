<?php 
$servername = 'contactify';
$username = 'root';
$password = '';


$connexion = mysqli_connect($servername, $username, $password);


try{

    $query = "INSERT INTO results (`firstname`, `lastname` , `email`, `password`) VALUES ('$firstname', '$lastname', '$email', '$password')";

    $result = $connexion->query($sql_query);

}catch(Exeption $e){
    
    mysqli_query($connexion,$query);

}

?>