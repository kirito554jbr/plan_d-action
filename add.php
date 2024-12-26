<?php

include('./connexion.php');

$query = "INSERT INTO results (`firstname`, `lastname` , `email`, `password`) VALUES ('$firstname', '$lastname', '$email', '$password')";

$mysqli_query($connexion, $query);


// while ()
// {
    $row = $result-> fetch_assoc();
// };
 

?>