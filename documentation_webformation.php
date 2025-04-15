<?php
include 'header.php';
?>

<section class="service_section layout_padding">
  <div class="container">
    <div class="heading_container heading_center">
      <h2>
        Documentation Utilisateur - Web Formation
      </h2>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="detail-box">
            <h5>Présentation du projet</h5>
            <p>
              Web Formation est une plateforme de formation en ligne développée pour permettre aux utilisateurs de suivre des cours dans différentes matières. 
              Le site propose différents rôles (administrateur, formateur, étudiant) avec des fonctionnalités adaptées à chacun.
            </p>
          </div>
        </div>
        
        <div class="box">
          <div class="detail-box">
            <h5>Environnement technique</h5>
            <p>
              <strong>Technologies utilisées :</strong>
            </p>
            <ul>
              <li>Frontend : HTML5, CSS3, JavaScript, Bootstrap</li>
              <li>Backend : PHP 8.0+</li>
              <li>Base de données : MySQL</li>
              <li>Serveur : Apache</li>
              <li>Gestion de version : Git</li>
            </ul>
          </div>
        </div>
        
        <div class="box">
          <div class="detail-box">
            <h5>Accès à la plateforme</h5>
            <p>
              La plateforme Web Formation est accessible directement en ligne à l'adresse : 
              <a href="https://web-formation.justingestiere.com/files/login.php" target="_blank">https://web-formation.justingestiere.com/files/login.php</a>
            </p>
            <p>
              <strong>Comptes de démonstration :</strong>
            </p>
            <ul>
              <li><strong>Administrateur :</strong> admin@webformation.fr / mot de passe : admin123</li>
              <li><strong>Formateur :</strong> formateur@webformation.fr / mot de passe : formateur123</li>
              <li><strong>Étudiant :</strong> etudiant@webformation.fr / mot de passe : etudiant123</li>
            </ul>
          </div>
        </div>
        
        <div class="box">
          <div class="detail-box">
            <h5>Guide d'utilisation par rôle</h5>
            
            <h6>Rôle Administrateur</h6>
            <p>En tant qu'administrateur, vous pouvez :</p>
            <ul>
              <li>Gérer les utilisateurs (création, modification, suppression)</li>
              <li>Gérer les matières et les cours</li>
              <li>Attribuer des formateurs aux matières</li>
              <li>Consulter les statistiques de la plateforme</li>
              <li>Gérer les paramètres globaux du site</li>
            </ul>
            
            <h6>Rôle Formateur</h6>
            <p>En tant que formateur, vous pouvez :</p>
            <ul>
              <li>Créer et gérer des cours dans vos matières assignées</li>
              <li>Ajouter du contenu pédagogique (textes, images, vidéos, fichiers)</li>
              <li>Créer des évaluations et des quiz</li>
              <li>Suivre la progression des étudiants</li>
              <li>Communiquer avec les étudiants via la messagerie interne</li>
            </ul>
            
            <h6>Rôle Étudiant</h6>
            <p>En tant qu'étudiant, vous pouvez :</p>
            <ul>
              <li>Consulter et suivre les cours disponibles</li>
              <li>S'inscrire à de nouvelles matières</li>
              <li>Passer des évaluations et quiz</li>
              <li>Suivre votre progression personnelle</li>
              <li>Communiquer avec les formateurs via la messagerie interne</li>
              <li>Télécharger les ressources pédagogiques</li>
            </ul>
          </div>
        </div>
        
        <div class="box">
          <div class="detail-box">
            <h5>Fonctionnalités principales</h5>
            
            <h6>Système d'authentification</h6>
            <p>
              La plateforme utilise un système d'authentification sécurisé avec différents niveaux d'accès selon le rôle de l'utilisateur.
              Les mots de passe sont hashés en base de données pour garantir la sécurité des comptes.
            </p>
            
            <h6>Gestion des cours</h6>
            <p>
              Les cours sont organisés par matières et peuvent contenir différents types de contenu (texte, images, vidéos, fichiers PDF).
              Chaque cours peut être associé à des quiz ou évaluations pour vérifier les acquis des étudiants.
            </p>
            
            <h6>Suivi de progression</h6>
            <p>
              Les étudiants peuvent suivre leur progression dans chaque cours et matière.
              Les formateurs peuvent consulter les statistiques de progression de leurs étudiants.
            </p>
            
            <h6>Messagerie interne</h6>
            <p>
              La plateforme intègre un système de messagerie permettant aux utilisateurs de communiquer entre eux.
              Les formateurs peuvent envoyer des messages groupés à tous les étudiants d'un cours.
            </p>
          </div>
        </div>
        
        <div class="box">
          <div class="detail-box">
            <h5>Installation locale (pour développeurs)</h5>
            <p>
              Si vous souhaitez installer le projet en local pour le développement ou les tests, suivez ces étapes :
            </p>
            <ol>
              <li><strong>Prérequis :</strong> PHP 8.0+, MySQL, Apache, Composer</li>
              <li><strong>Cloner le dépôt :</strong> <code>git clone https://github.com/JustinGestiere/Web_Formation.git</code></li>
              <li><strong>Configurer la base de données :</strong> Importez le fichier SQL fourni dans le dossier <code>/database</code></li>
              <li><strong>Configurer les paramètres :</strong> Modifiez le fichier <code>config.php</code> avec vos informations de connexion à la base de données</li>
              <li><strong>Lancer le serveur :</strong> Utilisez un serveur local comme XAMPP ou lancez <code>php -S localhost:8000</code> dans le dossier du projet</li>
              <li><strong>Accéder au site :</strong> Ouvrez votre navigateur et accédez à <code>http://localhost:8000</code></li>
            </ol>
          </div>
        </div>
        
        <div class="box">
          <div class="detail-box">
            <h5>Support et contact</h5>
            <p>
              Pour toute question ou problème concernant la plateforme Web Formation, vous pouvez contacter l'équipe de développement :
            </p>
            <ul>
              <li>Email : contact@web-formation.fr</li>
              <li>GitHub : <a href="https://github.com/JustinGestiere/Web_Formation" target="_blank">https://github.com/JustinGestiere/Web_Formation</a></li>
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
