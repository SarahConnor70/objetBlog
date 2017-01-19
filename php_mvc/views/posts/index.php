<div class="container">
  <div class="col s10 offset-s1">
    <div class="card-panel teal lighten-2 col s10 offset-s1" id="titreFormulaire">
      <h4 class="center">Liste des articles</h4>
    </div>
  </div>
</div>

<?php foreach($posts as $post) { ?>
  <p>
    <div class="container">
      <div class="col s10 offset-1" >
        <div class="title green lighten-5 center showArticle" >
          <h4 class=""><?php echo $post->title; ?></h4>
        </div>
        <div class="showArticle white" id="contenuArticle">
          <br>
          <p><?php echo $post->content;?>
            
          </p>
          <br>
          <?php echo "Article posté par ".$post->author.", le ".$post->date;?>
          <a href='?controller=posts&action=show&id=<?php echo $post->id; ?>'>Voir l'article</a>
        </div>
      </div>
    </div>
  </p>
<?php } ?>


