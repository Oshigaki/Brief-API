<?php
class Post{
    private $connection;
    private $table = 'posts';

    //Propriétés du POST
    public $id;
    public $category_id;
    public $category_name;
    public $title;
    public $body;
    public $author;
    public $created_at;

    //constructor wit DB
    public function __construct ($bd){
        $this ->connection = $db;
    }

    //Get posts
    public function read(){
        //creation de la requête
        $req = 'SELECT 
        c.name as category_name 
        p.id,
        p.category_id,
        p.title,
        p.body,
        p.author,
        p.created_at
        FROM
            ' .$this->table . 'p
            LEFT JOIN 
                categories c ON p.category_id = c.id
            ORDER BY 
                p.created_at DESC';
        
        //Prepare statement
        $stmt = $this->connection ->prepare($req);

        //execution de la requete
        $stmt ->execute();
        return $stmt;
    }
}
?>