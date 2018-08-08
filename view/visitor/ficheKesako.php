<?php $title = 'Fiche Kesako' ?>
<?php ob_start(); ?>

<!-- - container - -->
<div class="container">

  <!-- - colonne de gauche - -->
  <div id="col-gauche">
  </div>

  <!-- - colonne du milieu - -->
  <div id="col-centre">

    <!-- - Contenu social - -->
    <div class="containerFiche">
      <h1 class="contenuFiche">Resultats</h1>
      <p class="contenuFiche"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus fermentum dolor posuere lacus tincidunt facilisis. Nulla sollicitudin mi ac lorem mollis, eget rhoncus velit condimentum. Vivamus quis ex et ante commodo blandit. Nullam egestas odio nisl, vel porttitor orci blandit quis. Nulla facilisi. Nullam mollis diam suscipit, commodo nibh at, finibus purus. Nullam a tincidunt ipsum, vel rhoncus ligula. Integer congue, ligula eget blandit aliquet, urna orci interdum ipsum, sed porttitor mi dolor at purus. Cras congue accumsan tortor, et mattis erat placerat sed. Fusce eu ipsum eu sem pretium cursus ut vel felis. Integer nunc libero, dapibus eu orci non, rhoncus dictum mauris. Morbi semper dignissim nisl. Suspendisse tortor velit, accumsan eu semper eu, hendrerit quis leo. Nullam at pulvinar urna, et viverra est. Donec cursus lacus pretium odio commodo fermentum.

      Aenean at ante nec metus pellentesque eleifend sit amet sed justo. Praesent et turpis odio. Nunc tristique elementum diam vitae molestie. Aenean hendrerit a massa vitae volutpat. Vivamus euismod hendrerit arcu, sit amet aliquam turpis molestie at. Donec bibendum nec ligula eget malesuada. Morbi et neque nec mi blandit eleifend ut nec sapien. Aenean justo nulla, scelerisque in porttitor ac, tempor eget ligula. Nam in ex vulputate, mollis turpis vitae, feugiat mi. Vivamus diam eros, semper ut eros id, accumsan tincidunt augue. Proin non nisl ac arcu pretium vestibulum et a ex. Sed consequat purus ut augue pulvinar, ac viverra urna gravida. Ut sollicitudin sed odio in molestie. Aenean ultrices, purus eu dapibus condimentum, orci ex semper elit, eu tincidunt augue magna tincidunt metus. Donec laoreet elit eros, vel dignissim dolor mattis a. Phasellus aliquam vulputate velit. </p>
      <hr>
      <h4 class="listfile">Fichier(s) associé(s):</h4>
      <div class="filedel">
        <a href="#" class="linkfile"><img src="../../public/img/icon/paperclip.png" alt="trombone">fichierexcel.XLS</a>
        <a href="#" class="linkfile"><img src="../../public/img/icon/paperclip.png" alt="trombone">pasmodifiable.PDF</a>
        <a href="#" class="linkfile"><img src="../../public/img/icon/paperclip.png" alt="trombone">fichierworld.DOCX</a>
        <a href="#" class="linkfile"><img src="../../public/img/icon/paperclip.png" alt="trombone">fichierexcel.XLS</a>
        <a href="#" class="linkfile"><img src="../../public/img/icon/paperclip.png" alt="trombone">pasmodifiable.PDF</a>
        <a href="#" class="linkfile"><img src="../../public/img/icon/paperclip.png" alt="trombone">fichierworld.DOCX</a>
        <a href="#" class="linkfile"><img src="../../public/img/icon/paperclip.png" alt="trombone">fichierexcel.XLS</a>
        <a href="#" class="linkfile"><img src="../../public/img/icon/paperclip.png" alt="trombone">pasmodifiable.PDF</a>
        <a href="#" class="linkfile"><img src="../../public/img/icon/paperclip.png" alt="trombone">fichierworld.DOCX</a>
        <a href="#" class="linkfile"><img src="../../public/img/icon/paperclip.png" alt="trombone">fichierexcel.XLS</a>
        <a href="#" class="linkfile"><img src="../../public/img/icon/paperclip.png" alt="trombone">pasmodifiable.PDF</a>
        <a href="#" class="linkfile"><img src="../../public/img/icon/paperclip.png" alt="trombone">fichierworld.DOCX</a>
      </div>
    </div>
  </div>

  <!-- - colonne de droite - -->
  <div id="col-droite"></div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require ('view/templates/base.php') ?>
