
<!--barre de menu horizontale-->
	<div id="navigation">
		<ul id="nav">
			<li id="accueil"><a href="index.php">ACCUEIL</a></li>



        <li class="services"><a href="#">TELEPHONIE</a>
          <div class="conteneur-deroulant">

          <!--liste des applications du service telehonie-->
          <?php foreach($listeApplication1 as $appTelephonie) {
                  if ($appTelephonie['idServ'] === '1' ) {?>

                      <span class="link"><a href="<?= $appTelephonie['urlApp'] ?>" target="_blank"><?= $appTelephonie['nomApp'] ?></a></span>

                  <?php
                }
              }
            ?>
          </div>
        </li>

        <li class="services"><a href="#">RELEVE</a>
          <div class="conteneur-deroulant">

          <!--liste des applications du service releve-->
          <?php foreach($listeApplication2 as $appReleve) {
                  if ($appReleve['idServ'] === '2' ) {?>

                        <span class="link"><a href="<?= $appReleve['urlApp'] ?>" target="_blank"><?= $appReleve['nomApp'] ?></a></span>

              <?php
            }
          }
          ?>
          </div>
        </li>

      <li class="services"><a href="#">GINKO</a>
        <div class="conteneur-deroulant">

          <!--liste des applications du service ginko-->
            <?php foreach($listeApplication3 as $appGinko) {
                if ($appGinko['idServ'] === '3' ) {?>

                      <span class="link"><a href="<?= $appGinko['urlApp'] ?>" target="_blank"><?= $appGinko['nomApp'] ?></a></span>

                <?php
              }
            }
            ?>
        </div>
      </li>

      <li class="services"><a href="#">R.A.F.</a>
        <div class="conteneur-deroulant">

          <!--liste des applications du service r.a.f.-->
            <?php foreach($listeApplication4 as $appRaf) {
                if ($appRaf['idServ'] === '4'  ) {?>

                  <span class="link"><a href="<?= $appRaf['urlApp'] ?>" target="_blank"><?= $appRaf['nomApp'] ?></a></span>

                <?php
              }
            }
            ?>
        </div>
      </li>

      <li class="services"><a href="#">DISCO</a>
        <div class="conteneur-deroulant">

          <!--liste des applications du service r.a.f.-->
            <?php foreach($listeApplication5 as $appDisco) {
                if ($appDisco['idServ'] === '5' ) {?>

                      <span class="link"><a href="<?= $appDisco['urlApp'] ?>" target="_blank"><?= $appDisco['nomApp'] ?></a></span>

                <?php
              }
            }
            ?>
        </div>
      </li>

        <?php

        if (isset($_SESSION['nni'])){
            ?>

          <li id="deconnexion"><a href="index.php?action=decoAdmin">DECONNEXION</a></li>


            <?php
        }else {
            ?>

          <li id="connexion"><a href="#">ADMINISTRATION</a></li>

            <div id="id-connexion">
              <form action="index.php?action=gestionConnexion" method="post">
                <label for="nni" class="info-connex">NNI: </label>
                <input type="saisie-connex" name="nni" id="nni" class="saisie-connex" maxlength="10" size="20"
                       autofocus/>
                <br/>
                <label for="mdp" class="info-connex">Mot de passe: </label>
                <input type="password" name="mdp" id="mdp" class="saisie-connex">
                <div class="missmdp"><a href="#" id="missmdp">Mot de passe oublié?</a></div>
                <input type="submit" value="Connexion" id="valid-connexion">
              </form>
            </div>


            <?php
        }
        ?>
		</ul>
	</div>
