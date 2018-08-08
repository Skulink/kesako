<?php $title = 'Resultat de la recherche' ?>
<?php ob_start(); ?>

<!-- - container - -->
<div class="container">

  <!-- - colonne de gauche - -->
  <div id="col-gauche">
  </div>
  <!-- - colonne du milieu - -->
  <div id="col-centre">

    <!-- - barre de recherche - -->
    <div id="resultsearch">
      <div id="saisie">
        <form id="recherche" method="post">
          <input id="search" type="search" name="saisie" placeholder="Mots-Clefs..."/>
          <input id="loupe" type="submit" value=""/>
        </form>
      </div>
    </div>
    <!-- - Resultat des recherches - -->
    <div id="publi-social">
      <h1>Resultat(s)</h1>
      <ul>
        <li class="resultList"><a href="index.php?action=ficheKesako">Example de resultat 1</a></li>
        <li class="resultList"><a href="index.php?action=ficheKesako">Resultat avec exemple 2</a></li>
        <li class="resultList"><a href="index.php?action=ficheKesako">3eme dans la liste des resultats</a></li>
      </ul>
    </div>
  </div>

  <!-- - colonne de droite - -->
  <div id="col-droite">
  </div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require ('view/templates/base.php') ?>
