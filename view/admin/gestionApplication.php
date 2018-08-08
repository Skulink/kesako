<?php $title = 'Gestion des applications' ?>
<?php ob_start(); ?>


<!--formulaire-->
<div class="container-form">
  <div class="formulaires">
    <h2 class="formtitle">Nouvelle application</h2>
      <hr />
    <form action="index.php?action=creationApp" method="post">
      <label for="appService" class="labelactu">Selection du service: </label>
      <select name="appService" class="select-logiciel" id="appService">
        <option value=""></option>

      <?php foreach($listeAjoutServices as $listServ) { ?>
        <option value="<?= $listServ['id_service']?>"><?= htmlspecialchars(strtoupper($listServ['nom_service']))?></option>
      <?php
      }
      ?>

      </select>
      <label for="appName" class="labelactu">Nom de l'application: </label>
      <input type="text" name="appName" id="appName" class="design-form" maxlength="25" size="100" autofocus/>
      <br />
      <label for="appUrl" class="labelactu">Adresse URL de l'application: </label>
      <input type="url" name="appUrl" id="appUrl" class="design-form" maxlength="255" size="100" autofocus/>
      <br />
      <input type="submit" value="Inserer" class="publication" />
    </form>
  </div>
  <div class="formulaires">
    <h2 class="formtitle">Modifier / supprimer une application</h2>
      <hr />
    <form action="index.php?action=searchApp" method="post">
      <label for="application" class="labelactu">Selection de l'application :</label>
      <select name="application" class="select-logiciel" id="application">
        <option value=""></option>
        <option value="">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - TELEPHONIE - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - </option>
          <?php foreach($listeModifTel as $listAppTel){?>
            <option value="<?= $listAppTel['id_application']?>"><?= htmlspecialchars($listAppTel['nom_application'])?></option>
              <?php
          }
          ?>
        <option value="">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - RELEVE- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - </option>
          <?php foreach($listeModifRel as $listAppRel){?>
            <option value="<?= $listAppRel['id_application']?>"><?= htmlspecialchars($listAppRel['nom_application'])?></option>
              <?php
          }
          ?>
        <option value="">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - GINKO - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - </option>
          <?php foreach($listeModifGin as $listAppGin){?>
            <option value="<?= $listAppGin['id_application']?>"><?= htmlspecialchars($listAppGin['nom_application'])?></option>
              <?php
          }
          ?>
        <option value="">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - R.A.F. - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - </option>
          <?php foreach($listeModifRaf as $listAppRaf){?>
            <option value="<?= $listAppRaf['id_application']?>"><?= htmlspecialchars($listAppRaf['nom_application'])?></option>
              <?php
          }
          ?>
        <option value="">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - DISCO - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - </option>
          <?php foreach($listeModifDis as $listAppDis){?>
            <option value="<?= $listAppDis['id_application']?>"><?= htmlspecialchars($listAppDis['nom_application'])?></option>
              <?php
          }
          ?>
      </select>
      <input type="submit" class="insertion" value="Rechercher" />
    </form>

    <?php
    if (isset($searchApp)){
    foreach($searchApp as $findApp) {
        ?>

      <form action="index.php?action=setApp" method="post">
        <hr>
        <label for="nomApp" class="labelactu">Nom de l'application: </label>
        <input type="text" id="nomApp" name="nomApp" value="<?= htmlspecialchars($findApp['nom_application']) ?>" class="design-form"
               maxlength="25" size="100" autofocus/>
        <br/>
        <label for="urlApp" class="labelactu">Adresse URL de l'application: </label>
        <input type="url" id="urlApp" name="urlApp" value="<?= htmlspecialchars($findApp['adresse_application']) ?>" class="design-form"
               maxlength="255" size="100" autofocus/>
        <br/>
        <input type="hidden" name="idApp" value="<?= $findApp['id_application'] ?>" />
        <input type="submit" name="modifier" value="Modifier" id="modifAppli" class="modif"/>
        <input type="submit" name="supprimer" value="Supprimer" class="suppr"/>
      </form>
        <?php
      }
    }
    ?>

  </div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require ('view/templates/base.php') ?>
