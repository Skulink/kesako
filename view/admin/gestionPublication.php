<?php $title = 'Gestion des publications' ?>
<?php ob_start(); ?>


<!-- - formulaire - -->
<div class="container-form">
  <div class="formulaires">
    <h2 class="formtitle">Nouvelle publication</h2>
      <hr />
    <form action="index.php?action=insertPubli" method="post">
      <label for="titre" class="labelactu">Titre de l'article: </label>
      <input type="text" id="titre" name="titre" class="design-form" maxlength="100" size="100" autofocus/>
      <br />
      <label for="publication" class="labelactu">Publication de l'article: </label>
      <textarea id="publication" name="publication" class="public-article" cols="90" rows="4"></textarea>
      <br />
      <input type="submit" value="Publier" class="publication" />
    </form>
  </div>

  <div class="formulaires">
    <h2 class="formtitle">Historique des publications</h2>
      <form action="index.php?action=searchPubli" method="post">
        <label for="month" class="labelactu">Mois de publication : </label>
        <select name="month" class="select-month" id="month">
          <option value=""></option>
          <option value="1">janvier</option>
          <option value="2">fevrier</option>
          <option value="3">mars</option>
          <option value="4">avril</option>
          <option value="5">mai</option>
          <option value="6">juin</option>
          <option value="7">juillet</option>
          <option value="8">août</option>
          <option value="9">septembre</option>
          <option value="10">octobre</option>
          <option value="11">novembre</option>
          <option value="12">décembre</option>
        </select>
        <select name="years" class="select-years" id="years">
          <option value=""></option>
          <option value="2018">2018</option>
          <option value="2017">2017</option>
          <option value="2016">2016</option>
          <option value="2015">2015</option>
          <option value="2014">2014</option>
        </select>
        <input type="submit" name="datesearch" value="Rechercher" class="date-search">
      </form>

    <?php
    if (isset($resultPublication)){
      foreach($resultPublication as $infoPubli) {
          ?>
        <hr/>
        <form action="index.php?action=updateArticle" method="post">
          <p class="date-publi">Publié le <?= htmlspecialchars($infoPubli['dateCreation']) ?> par
            <strong><?= htmlspecialchars($infoPubli['prenomAuteur']) . " " . htmlspecialchars($infoPubli['nomAuteur']) ?></strong>
          </p>
          <label for="titre" class="labelactu">Titre de l'article: </label>
          <input type="text" name="titre" class="design-form" maxlength="150" size="100"
                 value="<?= htmlspecialchars($infoPubli['titreArticle'])?>" autofocus/>
          <br/>
          <label for="publication" class="labelactu">Publication de l'article: </label>
          <textarea name="publication" class="public-article" cols="90" rows="4"><?= htmlspecialchars($infoPubli['articleContent']) ?></textarea>
          <input type="hidden" name="idPublication" value="<?= htmlspecialchars($infoPubli['idArticle'])?>"/>
          <br/>
          <input type="submit" name="modifier" value="Modifier" class="modif"/>
          <input type="submit" name="supprimer" value="Supprimer" class="suppr"/>
        </form>
        <br>
          <?php
      }
    }
    ?>
  </div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require ('view/templates/base.php') ?>
