<?php $title = 'Créer une fiche Kesako' ?>
<?php ob_start(); ?>


<!-- - formulaire - -->
<div class="container-form">
  <div class="formulaires">
    <h2 class="formtitle">Nouvelle fiche Kesako</h2>
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
          <option value="Nouvelle catégorie">---  Nouvelle Catégorie  ---</option>
      </select>
      <div class="containerAdd">
        <label for="newCat" class="labelAjout">Nouvelle catégorie: </label>
        <input type="text" name="newCat" class="design-form" maxlength="100" size="100" autofocus/>
        <label for="kesakofile" class="labelAjout" id="insertIcone">Joindre l'icône (format: JPEG, JPG, PNG  |  Taille: 163 X 76): </label>
        <input type="file" name="kesakofile" id="kesakofile" class="btnparcourir" />
      </div>
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
        <div class="containerAdd">
        <label for="newSC" class="labelAjout">Nouvelle sous-catégorie: </label>
        <input type="text" name="newSC" class="design-form" maxlength="100" size="100" autofocus/>
      </div>
      <label for="titreFiche" class="labelactu">Titre de la fiche: </label>
      <input type="text" name="titreFiche" id="titreFiche" class="design-form" maxlength="100" size="100" autofocus/>
      <br />
      <label for="descriptFiche" class="labelactu">Description de la fiche: </label>
      <textarea name="descriptFiche" id="descriptFiche" class="public-article" cols="90" rows="4"></textarea>
      <label for="kesakofile" class="labelactu">Joindre un fichier: </label>
      <input type="file" name="kesakofile" id="kesakofile" class="btnparcourir" />
      <br />
      <input type="submit" name="inserer" value="Insérer" class="insertion" />
      <hr>
    </form>
    <a href="index.php?action=gestionCategorie" class="btn-adminKesako">Gestion des catégories</a>
    <a href="index.php?action=gestionSousCategorie" class="btn-adminKesako">Gestion des sous-catégories</a>
    <a href="index.php?action=gestionFichesKesako" class="btn-adminKesako">Gestion des fiches kesako</a>
  </div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require ('view/templates/base.php') ?>
