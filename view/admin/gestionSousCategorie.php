<?php $title = 'Gestion des sous-catégories' ?>
<?php ob_start(); ?>

<!-- - formulaire - -->
<div class="container-form">
  <div class="formulaires">
    <h2 class="formtitle">Modifier/Supprimer une sous-catégorie</h2>
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
        </select><input type="submit" name="rechercher" value="Rechercher" class="insertion">
    </form>
    <form>
      <hr>
      <label for="modifSC" class="labelactu">Modifier Sous-catégorie : </label>
      <input type="text" name="modifSC" id="modifSC" class="design-form" maxlength="100" size="100" autofocus/>
      <div class="btndelfile" id="btndelfile">
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
