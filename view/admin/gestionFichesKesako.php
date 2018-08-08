<?php $title = 'Gestion des fiches Kesako' ?>
<?php ob_start(); ?>

<!-- - formulaire - -->
<div class="container-form">
  <div class="formulaires">
    <h2 class="formtitle">Modifier/Supprimer une fiche Kesako</h2>
      <hr>
    <form action="traitement.php" method="post">
      <div class="blocRadio">
        <input type="radio" id="sectionChoice1" name="section" value="commun" checked="checked">
        <label for="sectionChoice1" class="labelRadio">COMMUN</label>
        <input type="radio" id="sectionChoice2" name="section" value="domaine">
        <label for="sectionChoice2" class="labelRadio">DOMAINE</label>
      </div>
      <label for="categorie" class="labelactu">Catégorie : </label>
        <select name="categorie" class="select-logiciel" id="categorie">
          <option value="annuaire/trombi">Annuaire / Trombi</option>
          <option value="Boîte à outils">Boîte à outils</option>
          <option value="Catalogue des prestations">Catalogue des prestations</option>
          <option value="Code de bonne conduite">Code de bonne conduite</option>
          <option value="QE TGC">QE TGC</option>
          <option value="Telephonie">Telephonie</option>
          <option value="Ginko">Ginko</option>
          <option value="Linky">Linky</option>
          <option value="Petits Producteurs">Petits Producteurs</option>
          <option value="Mobalpa">Mobalpa</option>
          <option value="Dico du jargon ERDF">Dico du jargon ERDF</option>
          <option value="Aide informatique">Aide informatique</option>
      </select>
      <label for="sousCategorie" class="labelactu">Sous-catégorie : </label>
        <select name="sousCategorie" class="select-logiciel" id="sousCategorie">
          <option value="Interlocuteurs Privilégiés">Interlocuteurs Privilégiés</option>
          <option value="Autres services">Autres services</option>
          <option value="Amanda">Amanda</option>
          <option value="Régies / Syndicats">Régies / Syndicats</option>
          <option value="Fournisseurs (Contacts + IDCOM + hotline)">Fournisseurs (Contacts + IDCOM + hotline)</option>
          <option value="Adresse envoi chèque fournisseurs">Adresse envoi chèque fournisseurs</option>
          <option value="Champs électromagnétiques">Champs électromagnétiques</option>
          <option value="Nouvelle catégorie">---  Nouvelle Catégorie  ---</option>
        </select>
      <label for="ficheKesako" class="labelactu">Fiche Kesako: </label>
        <select name="sousCategorie" class="select-logiciel" id="sousCategorie">
          <option value="Interlocuteurs Privilégiés">Interlocuteurs Privilégiés</option>
          <option value="Autres services">Autres services</option>
          <option value="Amanda">Amanda</option>
          <option value="Régies / Syndicats">Régies / Syndicats</option>
          <option value="Fournisseurs (Contacts + IDCOM + hotline)">Fournisseurs (Contacts + IDCOM + hotline)</option>
          <option value="Adresse envoi chèque fournisseurs">Adresse envoi chèque fournisseurs</option>
          <option value="Champs électromagnétiques">Champs électromagnétiques</option>
          <option value="Nouvelle catégorie">---  Nouvelle Catégorie  ---</option>
        </select>
        <input type="submit" name="rechercher" value="Rechercher" class="insertion">
    </form>
    <form action="" method="post">
      <hr>
      <label for="titreFiche" class="labelactu">Titre de la fiche: </label>
      <input type="text" name="titreFiche" id="titreFiche" class="design-form" maxlength="100" size="100" autofocus/>
      <br />
      <label for="descriptFiche" class="labelactu">Description de la fiche: </label>
      <textarea name="descriptFiche" id="descriptFiche" class="public-article" cols="90" rows="4"></textarea>
      <label for="kesalofile" class="labelactu">Joindre un fichier: </label>
      <input type="file" name="kesalofile" id="kesalofile" class="btnparcourir" />
      <br />
      <p class="delfile">Supprimer un fichier: </p>
      <div class="filedel">
        <table>
          <tr>
            <td><img src="../../public/img/icon/paperclip.png" alt="trombone"> fichierexcel.XLS</td>
            <td><span class="imgDL"><input type="image" src="../../public/img/icon/delete.png" alt="supprimer"></span></td>
          </tr>
          <tr>
            <td><img src="../../public/img/icon/paperclip.png" alt="trombone"> pasmodifiable.PDF</td>
            <td><span class="imgDL"><input type="image" src="../../public/img/icon/delete.png" alt="supprimer"></span></td>
          </tr>
          <tr>
            <td><img src="../../public/img/icon/paperclip.png" alt="trombone"> fichierworld.DOCX</td>
            <td><span class="imgDL"><input type="image" src="../../public/img/icon/delete.png" alt="supprimer"></span></td>
          </tr>
        </table>
      </div>
      <br>
      <div class="btndelfile">
      <input type="submit" name="modifier" value="Modifier" class="modif" />
      <input type="submit" name="supprimer" value="Supprimer" class="suppr" />
      </div>
      <hr>
      <a href="index.php?action=gestionFiche" class="btn-adminKesako">Retour</a>
      </form>
    </form>
  </div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require ('view/templates/base.php') ?>
