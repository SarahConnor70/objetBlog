<div class="row" >
  <div class="container">
    <form class="col s8 offset-s2" id="formulaire" action="?controller=posts&action=postEdit" method="post">
      <div class="row">
        <div class="container">
          <div class="card-panel teal lighten-2 col s10 offset-s1" id="titreFormulaire">
            <h4 class="center">Ajouter un article</h4>
          </div>
          <div class="">
            <div class="input-field col s8 offset-s2">
              <input id="titre" name="titre" type="text" class="validate">
              <label for="titre">Titre </label>
            </div>
            <div class="input-field col s8 offset-s2">
              <input id="auteur" name="auteur" type="text" class="validate">
              <label for="auteur">Auteur</label>
            </div>
            <div class="input-field col s8 offset-s2">
              <textarea id="article" name="article" class="materialize-textarea"></textarea>
              <label for="textarea1">Contenu article</label>
            </div>
            <div class="center-align" ">
              <button class="btn waves-effect waves-light" type="submit" name="action">Soumettre
                <i class="material-icons right">send</i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>