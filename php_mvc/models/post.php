<?php
class Post {

  public $id;
  public $author;
  public $content;
  public $title;
  public $date;

  public function __construct($id, $title, $author, $content, $date) {
    $this->id      = $id;
    $this->title   = $title;
    $this->author  = $author;
    $this->content = $content;
    $this->date= $date;
  }

  public static function all() {
    $list = [];
    $db = Db::getInstance();
    $req = $db->query('SELECT * FROM articles order BY id DESC LIMIT 0,10');

    foreach($req->fetchAll() as $post) {
      $list[] = new Post($post['id'], $post['titre'], $post['auteur'], $post['article'], $post['date_parution'] );
    }

    return $list;
  }

  public static function postEdit($titre, $auteur, $article){


    $db = Db::getInstance();

    $req = $db->prepare('INSERT INTO articles (titre, auteur, article, date_parution) VALUES (:titre, :auteur, :article, NOW())');
    
    $req->bindParam(":titre", $titre);
    $req->bindParam(":auteur", $auteur);
    $req->bindParam(":article", $article);

    $req->execute();

  }

  public function edit(){
    require_once("views/posts/edit.php");
  }

  public static function find($id) {
    $db = Db::getInstance();

    $id = intval($id);
    $req = $db->prepare('SELECT * FROM articles WHERE id = :id');
    
    $req->execute(array('id' => $id));
    $post = $req->fetch();

    return new Post($post['id'], $post['titre'], $post['auteur'], $post['article'], $post['date_parution']);
  }

  public static function readComm($articles_id) {
    $list = [];

    $db = Db::getInstance();

    $articles_id = intval($articles_id);

    $req = $db->prepare('SELECT * FROM commentaires WHERE articles_id = :articles_id order BY id DESC');
    $req->execute(array('articles_id' => $articles_id));

    foreach($req->fetchAll() as $comm) {
      $list[] = new Post($comm['id'], $comm['articles_id'], $comm['auteur'], $comm['contenu'], $comm['date_parution'] );
    }

    return $list;
  }

  public static function addCom($auteur, $contenu, $articles_id){
    $db = Db::getInstance();

    $articles_id = intval($articles_id);

    $req = $db->prepare('INSERT INTO commentaires (auteur, contenu, date_parution, articles_id) VALUES (:auteur, :contenu, NOW(), :articles_id)');
    $req->bindParam(":auteur", $auteur);
    $req->bindParam(":contenu", $contenu);
    $req->bindParam(":articles_id", $articles_id);

    $req->execute();
  }
}
?>