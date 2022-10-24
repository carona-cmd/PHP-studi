<?php 
var_dump($_POST); // superglobale cree automatiquement par php 
// post =[]
// quand on clique on aura un tableau $_POST = ["nom"=> "alain", "age" :> "12"]
// si tableau n est pas vide 
if (!empty($_POST)){
    if(empty($_POST["nom"])) ||  (empty($_POST["age"])) {
     echo "ok" ;
    } else{
    echo "merci";
}
}
?>

<form method="POST">
    <input type="text" name="nom" placeholder="votre nom">
</form>
<input type="text" name="age" placeholder="votre age"></form>
<input type="submit">
</form>