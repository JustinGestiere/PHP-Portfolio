<?php
include 'header.php';
?>

<section class="service_section layout_padding">
  <div class="container">
    <div class="heading_container heading_center">
      <h2>
        Documentation Technique - Calculatrice Immobilière
      </h2>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="detail-box">
            <h5>Présentation du projet</h5>
            <p>
              La calculatrice immobilière est une application web permettant aux utilisateurs de simuler des prêts immobiliers en fonction du montant emprunté, du taux d'intérêt et de la durée du prêt. 
              Elle a été développée avec une approche moderne et responsive, et peut également être utilisée comme application de bureau grâce à Electron.
            </p>
          </div>
        </div>
        
        <div class="box">
          <div class="detail-box">
            <h5>Architecture technique</h5>
            <p>
              <strong>Technologies utilisées :</strong>
            </p>
            <ul>
              <li>Frontend HTML5, CSS3, JavaScript</li>
              <li>Framework Electron pour la version desktop</li>
              <li>Système de génération PDF avec html2pdf.js</li>
              <li>Responsive design avec Media Queries</li>
            </ul>
          </div>
        </div>
        
        <div class="box">
          <div class="detail-box">
            <h5>Structure du code</h5>
            <p>
              Le projet est organisé selon une architecture simple mais efficace :
            </p>
            <ul>
              <li><strong>index.html</strong> Structure principale de l'application</li>
              <li><strong>style.css</strong> Fichier CSS principal pour le style de l'application</li>
              <li><strong>main.js</strong> Script JavaScript principal contenant la logique de calcul</li>
              <li><strong>images/</strong> Dossier contenant les images et autres ressources</li>
              <li><strong>electron.js / electron_fr.js</strong> Configuration pour la version desktop</li>
              <li><strong>forge.config.js</strong> Configuration pour le packaging Electron</li>
            </ul>
          </div>
        </div>
        
        <div class="box">
          <div class="detail-box">
            <h5>Algorithmes de calcul</h5>
            <p>
              La calculatrice utilise plusieurs formules financières pour effectuer les calculs de prêt immobilier :
            </p>
            <ul>
              <li><strong>Calcul de mensualité :</strong> E = (P * m * (1 + m)^n) / ((1 + m)^n - 1)</li>
              <li><strong>Calcul des intérêts mensuels :</strong> I = S * m</li>
              <li><strong>Calcul de l'amortissement mensuel :</strong> A = E - I</li>
            </ul>
            <p>
              Où :
            </p>
            <ul>
              <li>E = Échéance mensuelle</li>
              <li>P = Montant emprunté</li>
              <li>m = Taux d'intérêt mensuel (taux annuel / (100 * 12))</li>
              <li>n = Nombre de mensualités (durée en années * 12)</li>
              <li>I = Intérêts mensuels</li>
              <li>A = Amortissement mensuel</li>
              <li>S = Solde restant du prêt</li>
            </ul>
          </div>
        </div>
        
        <div class="box">
          <div class="detail-box">
            <h5>Fonctionnalités principales</h5>
            
            <h6>Calcul de mensualité et tableau d'amortissement</h6>
            <p>
              Cette fonctionnalité permet de calculer les mensualités d'un prêt en fonction du montant emprunté, du taux d'intérêt et de la durée du prêt.
              L'application génère également un tableau d'amortissement complet montrant l'évolution du prêt mois par mois.
            </p>
            
            <h6>Validation des données</h6>
            <p>
              L'application vérifie que les données saisies sont valides avant de procéder au calcul :
              - Le montant doit être un nombre entier supérieur ou égal à 1000
              - Le taux doit être un nombre entre 0.01 et 100
              - La durée doit être un nombre entier entre 1 et 100 ans
            </p>
            
            <h6>Génération de PDF</h6>
            <p>
              L'application permet de générer un document PDF contenant la simulation de prêt complète avec le tableau d'amortissement,
              en adaptant automatiquement la mise en page selon la taille de l'écran pour garantir une bonne lisibilité.
            </p>
            
            <h6>Version desktop</h6>
            <p>
              Grâce à Electron, l'application web peut être packagée en une application de bureau fonctionnant sur Windows, macOS et Linux, 
              offrant ainsi une expérience utilisateur similaire à une application native.
            </p>
          </div>
        </div>
        
        <div class="box">
          <div class="detail-box">
            <h5>Tests et validation</h5>
            <p>
              Plusieurs types de tests ont été mis en place pour garantir la fiabilité de l'application :
            </p>
            <ul>
              <li><strong>Validation des entrées :</strong> Vérification des données saisies par l'utilisateur</li>
              <li><strong>Adaptation responsive :</strong> Ajustement automatique de l'interface selon la taille de l'écran</li>
              <li><strong>Tests de compatibilité :</strong> Vérification sur différents navigateurs</li>
              <li><strong>Tests d'export PDF :</strong> Validation de la génération correcte du document PDF</li>
            </ul>
          </div>
        </div>
        
        <div class="box">
          <div class="detail-box">
            <h5>Déploiement</h5>
            <p>
              L'application est déployée selon deux méthodes :
            </p>
            <ul>
              <li><strong>Version web :</strong> Peut être déployée sur n'importe quel serveur web standard</li>
              <li><strong>Version desktop :</strong> Packagée avec Electron Forge pour créer des applications natives (.exe pour Windows, .dmg pour macOS, .AppImage pour Linux)</li>
            </ul>
          </div>
        </div>
        
        <div class="box">
          <div class="detail-box">
            <h5>Installation sur PC</h5>
            <p>
              Pour installer et exécuter l'application sur votre ordinateur, suivez ces étapes :
            </p>
            <h6>Prérequis</h6>
            <ul>
              <li>Node.js (version 14 ou supérieure)</li>
              <li>npm (généralement installé avec Node.js)</li>
              <li>Git (optionnel, pour cloner le dépôt)</li>
            </ul>
            <h6>Installation des dépendances</h6>
            <ol>
              <li>Clonez ou téléchargez le code source du projet</li>
              <li>Ouvrez un terminal dans le répertoire du projet</li>
              <li>Exécutez la commande <code>npm install</code> pour installer toutes les dépendances</li>
            </ol>
            <h6>Lancement de l'application</h6>
            <ul>
              <li><strong>Version web :</strong> Ouvrez simplement le fichier <code>index.html</code> dans votre navigateur</li>
              <li><strong>Version Electron :</strong> Exécutez <code>npm run start</code> pour lancer l'application en mode développement</li>
            </ul>
            <h6>Création d'un exécutable</h6>
            <p>
              Pour créer un fichier exécutable que vous pouvez distribuer :
            </p>
            <ol>
              <li>Exécutez <code>npm run make</code> dans le terminal</li>
              <li>Les fichiers d'installation seront générés dans le dossier <code>out/make</code></li>
              <li>Pour Windows : utilisez le fichier .exe dans le dossier squirrel.windows</li>
              <li>Pour macOS : utilisez le fichier .dmg</li>
              <li>Pour Linux : utilisez le fichier .deb ou .rpm selon votre distribution</li>
            </ol>
          </div>
        </div>
        
        <div class="box">
          <div class="detail-box">
            <h5>Perspectives d'évolution</h5>
            <p>
              Plusieurs améliorations sont envisagées pour les versions futures :
            </p>
            <ul>
              <li>Intégration d'une API pour récupérer les taux d'intérêt en temps réel</li>
              <li>Ajout de l'assurance emprunteur dans les calculs</li>
              <li>Possibilité de sauvegarder et comparer plusieurs simulations</li>
              <li>Amélioration de l'interface utilisateur avec des graphiques</li>
              <li>Ajout de calculs supplémentaires (capacité d'emprunt, taux d'endettement)</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
include 'footer.php';
?>
