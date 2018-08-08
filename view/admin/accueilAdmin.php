<?php $title = 'Accueil Kesako Administrateur' ?>
<?php ob_start(); ?>


    <!-- - container - -->
    <div class="container">

    <!-- - colonne de gauche - -->
    <div id="col-gauche">
        <div id="commun-link">
            <h3 class="kesako-title">COMMUN</h3>
            <hr/>
            <div class="kesako-img">
                <a href="index.php?action=exploKesako"><img src="public/img/kesakoCategory/annuaire_trombi.jpg" alt="annuaire_trombi" class="commun-img" class="img"></a>
                <a href="index.php?action=exploKesako"><img src="public/img/kesakoCategory/boite_a_outils.jpg" alt="boite_a_outils" class="commun-img" class="img"></a>
                <a href="index.php?action=exploKesako"><img src="public/img/kesakoCategory/catalogue_des_prestations.jpg" alt="catalogue_des_prestations" class="commun-img"></a>
                <a href="index.php?action=exploKesako"><img src="public/img/kesakoCategory/code_de_bonne_conduite.jpg" alt="code_de_bonne_conduite" class="commun-img"></a>
                <a href="index.php?action=exploKesako"><img src="public/img/kesakoCategory/QE_TGC.jpg" alt="QE_TGC" class="commun-img"></a>
                <a href="index.php?action=exploKesako"><img src="public/img/kesakoCategory/telephonie.jpg" alt="telephonie" class="commun-img"></a>
                <a href="index.php?action=exploKesako"><img src="public/img/kesakoCategory/ginko.jpg" alt="ginko" class="commun-img"></a>
                <a href="index.php?action=exploKesako"><img src="public/img/kesakoCategory/linky.jpg" alt="linky" class="commun-img"></a>
                <a href="index.php?action=exploKesako"><img src="public/img/kesakoCategory/petits_producteurs.jpg" alt="petits_producteurs" class="commun-img"></a>
                <a href="index.php?action=exploKesako"><img src="public/img/kesakoCategory/mobalpa.jpg" alt="mobalpa" class="commun-img"></a>
                <a href="index.php?action=exploKesako"><img src="public/img/kesakoCategory/dico_du_jargon_erdf.jpg" alt="dico_du_jargon_erdf" class="commun-img"></a>
                <a href="index.php?action=exploKesako"><img src="public/img/kesakoCategory/aide_informatique.jpg" alt="aide_informatique" class="commun-img"></a>
                <a href="index.php?action=exploKesako"><img src="public/img/kesakoCategory/dysfonc_postes_sources.jpg" alt="dysfonc_postes_sources" class="commun-img"></a>
                <a href="index.php?action=exploKesako"><img src="public/img/kesakoCategory/urgence_gaz.jpg" alt="urgence_gaz" class="commun-img"></a>
            </div>
        </div>
    </div>
    <!-- - colonne du milieu - -->
    <div id="col-centre">

        <!-- - logo enedis - -->
        <div class="bandeau">
            <a href="index.php"><img src="public/img/logo/erdf-mv.png" alt="logo-entreprise" id="logo"/></a>
        </div>

        <!-- - barre de recherche - -->
        <?php include('view/templates/barreRecherche.php') ?>

        <!-- - Contenu social - -->

        <?php foreach($lastPubli as $afficherPubliAdmin) {
            ?>
            <div class="publi-social">
                <div class="entete-publi">
                    <h2 class="titre-publi"><?= htmlspecialchars($afficherPubliAdmin['titreArticle']) ?></h2>
                    <p class="info-publi">Publié le <?= $afficherPubliAdmin['dateCreation'] ?><br>Par <?= htmlspecialchars($afficherPubliAdmin['prenomAuteur'])." ".htmlspecialchars($afficherPubliAdmin['nomAuteur']) ?>
                    </p>
                </div>
                <p class="contenu-publi"><?= htmlspecialchars($afficherPubliAdmin['articleContent']) ?></p>
                <hr>
            </div>
            <?php
        }
        ?>


    </div>

    <!-- - colonne de droite - -->
    <div id="col-droite">

        <!-- - Accès aux boutons admins - -->

        <?php include('view/templates/gestionAdmin.php') ?>

        <div id="domaine-link">
            <h3 class="kesako-title">DOMAINE</h3>
            <hr/>
            <div class="kesako-img">
                <a href="index.php?action=exploKesako"><img src="public/img/kesakoCategory/service_client.jpg" alt="service_client" class="domaine-img"></a>
                <a href="index.php?action=exploKesako"><img src="public/img/kesakoCategory/k1.jpg" alt="k1" class="domaine-img"></a>
                <a href="index.php?action=exploKesako"><img src="public/img/kesakoCategory/sge.jpg" alt="sge" class="domaine-img"></a>
                <a href="index.php?action=exploKesako"><img src="public/img/kesakoCategory/ligne184.jpg" alt="ligne184" class="domaine-img"></a>
                <a href="index.php?action=exploKesako"><img src="public/img/kesakoCategory/reclasACH.jpg" alt="reclasACH" class="domaine-img"></a>
                <a href="index.php?action=exploKesako"><img src="public/img/kesakoCategory/se102_prese102.jpg" alt="se102_prese102" class="domaine-img"></a>
                <a href="index.php?action=exploKesako"><img src="public/img/kesakoCategory/se144.jpg" alt="se144" class="domaine-img"></a>
                <a href="index.php?action=exploKesako"><img src="public/img/kesakoCategory/raf_petra.jpg" alt="raf_petra" class="domaine-img"></a>
                <a href="index.php?action=exploKesako"><img src="public/img/kesakoCategory/sclinky.jpg" alt="sclinky" class="domaine-img"></a>
                <a href="index.php?action=exploKesako"><img src="public/img/kesakoCategory/Capella.jpg" alt="Capella" class="domaine-img"></a>
            </div>
        </div>
    </div>

<?php $content = ob_get_clean(); ?>
<?php require ('view/templates/base.php') ?>
