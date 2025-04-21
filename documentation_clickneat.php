<?php
include 'header.php';
?>

<section class="service_section layout_padding">
  <div class="container">
    <div class="heading_container heading_center">
      <h2>
        Documentation Technique - Click'n Eat
      </h2>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="detail-box">
            <h5>Présentation du projet</h5>
            <p>
              Click'n Eat est une application web de commande de nourriture en ligne permettant aux utilisateurs de commander des repas auprès de différents restaurants partenaires. 
              L'application offre une interface intuitive et responsive pour les clients, ainsi qu'un tableau de bord complet pour les restaurateurs et administrateurs.
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
              <li>Framework Laravel (PHP) pour le backend</li>
              <li>MySQL pour la base de données</li>
              <li>HTML5, CSS3, JavaScript pour le frontend</li>
              <li>Bootstrap pour le design responsive</li>
              <li>Blade comme moteur de templates</li>
              <li>OVH VPS pour l'hébergement</li>
            </ul>
          </div>
        </div>
        
        <div class="box">
          <div class="detail-box">
            <h5>Structure de la base de données</h5>
            <p>
              La base de données est organisée autour des entités principales suivantes :
            </p>
            <ul>
              <li><strong>Users</strong> : Stocke les informations des utilisateurs (clients, restaurateurs, administrateurs)</li>
              <li><strong>Restaurants</strong> : Contient les informations sur les restaurants partenaires</li>
              <li><strong>Categories</strong> : Catégories de plats (entrées, plats principaux, desserts, etc.)</li>
              <li><strong>Items</strong> : Plats proposés par les restaurants</li>
              <li><strong>Orders</strong> : Commandes passées par les utilisateurs</li>
              <li><strong>Order_items</strong> : Éléments individuels d'une commande</li>
              <li><strong>Reservations</strong> : Réservations de tables</li>
            </ul>
            <p>
              La base de données utilise des relations bien définies entre ces tables pour assurer l'intégrité des données :
            </p>
            <ul>
              <li>Relation one-to-many entre Restaurants et Items</li>
              <li>Relation many-to-many entre Items et Categories</li>
              <li>Relation one-to-many entre Users et Orders</li>
              <li>Relation one-to-many entre Orders et Order_items</li>
            </ul>
          </div>
        </div>
        
        <div class="box">
          <div class="detail-box">
            <h5>Architecture MVC</h5>
            <p>
              L'application suit le modèle MVC (Modèle-Vue-Contrôleur) de Laravel :
            </p>
            <ul>
              <li><strong>Modèles</strong> : Définissent la structure des données et les relations entre les tables</li>
              <li><strong>Vues</strong> : Utilisation du moteur de templates Blade pour générer l'interface utilisateur</li>
              <li><strong>Contrôleurs</strong> : Gèrent la logique métier et les interactions entre les modèles et les vues</li>
            </ul>
            <p>
              L'architecture inclut également :
            </p>
            <ul>
              <li><strong>Middleware</strong> : Pour la gestion de l'authentification et des autorisations</li>
              <li><strong>Routes</strong> : Définition des points d'entrée de l'API et des pages web</li>
              <li><strong>Migrations</strong> : Pour la gestion des versions de la base de données</li>
              <li><strong>Seeds</strong> : Pour peupler la base de données avec des données de test</li>
            </ul>
          </div>
        </div>
        
        <div class="box">
          <div class="detail-box">
            <h5>Fonctionnalités principales</h5>
            
            <h6>Système d'authentification</h6>
            <p>
              L'application utilise le système d'authentification de Laravel avec des rôles différenciés :
            </p>
            <ul>
              <li><strong>Administrateur</strong> : Gestion complète de la plateforme</li>
              <li><strong>Restaurateur</strong> : Gestion de son restaurant et de ses menus</li>
              <li><strong>Employé</strong> : Accès limité aux fonctionnalités du restaurant où il travaille</li>
              <li><strong>Client</strong> : Navigation, commande et réservation</li>
            </ul>
            
            <h6>Gestion des restaurants et menus</h6>
            <p>
              Les restaurateurs peuvent :
            </p>
            <ul>
              <li>Gérer les informations de leur restaurant (horaires, adresse, etc.)</li>
              <li>Créer et modifier des catégories de plats</li>
              <li>Ajouter, modifier et supprimer des plats</li>
              <li>Gérer les disponibilités</li>
            </ul>
            
            <h6>Système de commande</h6>
            <p>
              Les clients peuvent :
            </p>
            <ul>
              <li>Parcourir les restaurants par catégorie ou localisation</li>
              <li>Consulter les menus et ajouter des plats au panier</li>
              <li>Personnaliser leur commande (options, allergènes, etc.)</li>
              <li>Suivre l'état de leur commande en temps réel</li>
            </ul>
            
            <h6>Système de réservation</h6>
            <p>
              Fonctionnalité permettant aux clients de réserver une table dans un restaurant en spécifiant :
            </p>
            <ul>
              <li>Date et heure</li>
              <li>Nombre de personnes</li>
              <li>Préférences particulières</li>
            </ul>
            
            <h6>Tableau de bord</h6>
            <p>
              Interface d'administration permettant :
            </p>
            <ul>
              <li>Suivi des statistiques (commandes, chiffre d'affaires, etc.)</li>
              <li>Gestion des utilisateurs</li>
              <li>Suivi des réservations</li>
              <li>Gestion des commandes en cours</li>
            </ul>
          </div>
        </div>
        
        <div class="box">
          <div class="detail-box">
            <h5>Sécurité</h5>
            <p>
              Plusieurs mesures de sécurité ont été mises en place :
            </p>
            <ul>
              <li><strong>Authentification</strong> : Utilisation du système d'authentification sécurisé de Laravel</li>
              <li><strong>Autorisation</strong> : Contrôle d'accès basé sur les rôles (RBAC)</li>
              <li><strong>Protection CSRF</strong> : Contre les attaques Cross-Site Request Forgery</li>
              <li><strong>Validation des données</strong> : Validation côté serveur de toutes les entrées utilisateur</li>
              <li><strong>Hachage des mots de passe</strong> : Utilisation de l'algorithme Bcrypt</li>
              <li><strong>Protection XSS</strong> : Échappement automatique des données dans les vues Blade</li>
            </ul>
          </div>
        </div>
        
        <div class="box">
          <div class="detail-box">
            <h5>Tests et validation</h5>
            <p>
              L'application a été testée à plusieurs niveaux :
            </p>
            <ul>
              <li><strong>Tests unitaires</strong> : Vérification des fonctions individuelles</li>
              <li><strong>Tests d'intégration</strong> : Validation des interactions entre les composants</li>
              <li><strong>Tests fonctionnels</strong> : Simulation des actions utilisateur</li>
              <li><strong>Tests de charge</strong> : Vérification des performances sous charge</li>
              <li><strong>Tests de compatibilité</strong> : Validation sur différents navigateurs et appareils</li>
            </ul>
          </div>
        </div>
        
        <div class="box">
          <div class="detail-box">
            <h5>Déploiement</h5>
            <p>
              L'application est déployée sur un VPS OVH avec :
            </p>
            <ul>
              <li>Serveur web Nginx</li>
              <li>PHP-FPM pour le traitement PHP</li>
              <li>MySQL pour la base de données</li>
              <li>Configuration de SSL avec Let's Encrypt</li>
              <li>Mise en place de sauvegardes automatiques</li>
            </ul>
          </div>
        </div>
        
        <div class="box">
          <div class="detail-box">
            <h5>Perspectives d'évolution</h5>
            <p>
              Plusieurs améliorations sont envisagées pour les versions futures :
            </p>
            <ul>
              <li>Intégration d'un système de paiement en ligne</li>
              <li>Développement d'applications mobiles natives</li>
              <li>Mise en place d'un système de fidélité</li>
              <li>Intégration avec des services de livraison externes</li>
              <li>Implémentation d'un système de notation et d'avis</li>
              <li>Ajout de fonctionnalités de géolocalisation avancées</li>
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
