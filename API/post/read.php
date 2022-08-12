<?php
    //headers
    headers('Acess-Control-Allow-Origin;*');
    header('Content-Type: application/json');

    include_once '../../config/Database.php';
    include_once '../../models/Post.php';

    //Nouvelle instance des la DB et de la connection
    $database = new Database();
    $db = $database->conection();

    //Instanciation de l'objet Blog post
    $post = new  Post($db);

    //Requête de Blog post
    $result = $post->read();

    //envoyé une colone de compte
    $num = $result -> rowCount();

    if($num >0){
        //Post array
        $posts_arr = array();
    }
?>