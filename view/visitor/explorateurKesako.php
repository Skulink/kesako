<?php $title = 'Explorateur Kesako' ?>
<?php ob_start(); ?>

<!-- - container - -->
<div class="container">

  <!-- - colonne de gauche - -->
  <div id="col-gauche">
  </div>
  <!-- - colonne du milieu - -->
  <div id="col-centre">
    <div class="blocArboSC">
      <ul class="arboSC"><input type="image" src="public/img/icon/plus.png" alt="déplier" class="arboImg">Interlocuteurs Privilégiés</ul>
      <ul class="arboSC"><input type="image" src="public/img/icon/plus.png" alt="déplier" class="arboImg">Autres services</ul>
      <ul class="arboSC"><input type="image" src="public/img/icon/plus.png" alt="déplier" class="arboImg">Amanda</ul>
      <ul class="arboSC"><input type="image" src="public/img/icon/plus.png" alt="déplier" class="arboImg">Régie / Syndicats</ul>
      <ul class="arboSC"><input type="image" src="public/img/icon/plus.png" alt="déplier" class="arboImg">Fournisseurs (Contacts + IDCOM + hotline)</ul>
      <ul class="arboSC"><input type="image" src="public/img/icon/plus.png" alt="déplier" class="arboImg">Champs électromagnétiques</ul>
      <ul class="arboSC"><input type="image" src="public/img/icon/moins.png" alt="déplier" class="arboImg">Adresse envoi chèque fournisseurs
        <li class="arboFiche"><a href="index.php?action=ficheKesako">Interlocuteurs Privilégiés</a></li></li>
        <li class="arboFiche"><a href="index.php?action=ficheKesako">Autres services</a></li>
        <li class="arboFiche"><a href="index.php?action=ficheKesako">Amanda</a></li>
        <li class="arboFiche"><a href="index.php?action=ficheKesako">Régie / Syndicats</a></li>
        <li class="arboFiche"><a href="index.php?action=ficheKesako">Fournisseurs (Contacts + IDCOM + hotline)</a></li>
        <li class="arboFiche"><a href="index.php?action=ficheKesako">Champs électromagnétiques</a></li>
        <li class="arboFiche"><a href="index.php?action=ficheKesako">Adresse envoi chèque fournisseurs</a></li>
      </ul>
    </div>
  </div>

  <!-- - colonne de droite - -->
  <div id="col-droite">
  </div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require ('view/templates/base.php') ?>
