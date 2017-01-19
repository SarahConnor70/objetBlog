<?php
class PostsController {

  public function index() {

    $posts = Post::all();
    require_once('views/posts/index.php');
  }

  public function edit(){
    require_once("views/posts/edit.php");
  }

 public function postEdit(){

    if(isset( $_POST['titre']) && isset($_POST['auteur']) && isset( $_POST['article'])){
      $titre = $_POST['titre'];
      $auteur = $_POST['auteur'];
      $article = $_POST['article'];

      Post::postEdit($titre, $auteur, $article);

      require_once("views/posts/postEdit.php");
  } 

}

public function show() {

  if (!isset($_GET['id']))
    return call('pages', 'error');

  $post = Post::find($_GET['id']);

  if(isset($_POST['auteur']) && isset($_POST['contenu'])) {
    $auteur = $_POST['auteur'];
    $contenu = $_POST['contenu'];
    $articles_id = $_GET['id'];

    Post::addCom($auteur, $contenu, $articles_id);

  }
  $comms = Post::readComm($_GET['id']);
  require_once('views/posts/show.php');

}

}
?>