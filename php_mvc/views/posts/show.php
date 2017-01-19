<div class="container">
  <div class="col s10 offset-s1">
    <div class="card-panel teal lighten-2 col s10 offset-s1" id="titreFormulaire">
      <h4 class="center">Détail de l'article</h4>
    </div>
  </div>
</div>
<div class="container">
      <div class="col s10 offset-1" >
        <div class="title green lighten-5 center showArticle" >
        <h4><?php echo $post->title; ?></h4>
        </div>
         <div class="showArticle white" id="contenuArticle">
			<p><?php echo $post->content; ?></p><br/>
			<p><?php echo "Article posté par " .$post->author.", le ".$post->date; ?></p>
		</div>
<br>
<div class="container">
<div class="card-panel teal lighten-2 col s8 offset-s2 center" id="titreFormulaire">
<h5 class="center" id="titreCommentaire">Commentaires de l'article :</h5>
</div>
</div>
<br>


<?php foreach($comms as $comm) { ?>


<div class="showArticle white" id="contenuArticle">
			<?php echo $comm->content; ?>
		
<p>Commentaire posté par <?php echo $comm->author; ?></p>
</div>
<br>

<?php } ?>


<div class="row">
		<div class="container">
			<div class="card-panel teal waves-effect waves-light lighten-2 col s6 offset-s3" id="titreFormulaire"><h5 class="center">Ajouter un commentaire</h5>
			</div>
			<form class="" id="formulaire" method="POST" action='?controller=posts&action=show&id=<?php echo $post->id ?>'>
				<div class="">
					
					<div class="input-field col s8 offset-s2">
						<input id="auteur" name="auteur" type="text" class="validate">
						<label for="auteur">Auteur</label>
					</div>
					<div class="input-field col s8 offset-s2">
						<textarea id="contenu" name="contenu" class="materialize-textarea"></textarea>
						<label for="textarea1">Contenu commentaire</label>
					</div>
					<div class="col s2 offset-s5 center-align" ">	
						<button type="submit" class="btn-floating btn-large waves-effect waves-light lighten-2"><i class="material-icons">add</i>
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>