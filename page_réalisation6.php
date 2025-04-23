<?php
  include "header.php";
?>

<!-- service section -->

<section class="why_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          RÉALISATION 6<span></span>
        </h2>
      </div>
      <div class="why_container">
        <div class="box">
          <!-- <div class="img-box">
            <img src="images/w1.png" alt="">
          </div> -->
          <div class="detail-box">
            <h1>
                Mise à jour calendriers ordonnanceur
            </h1>
          </div>
        </div>
        <div class="box">
          <div class="img-box-page">
            <img src="images/image_dollaru.jpg" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Compétences mises en oeuvre 
            </h5>
            <p>
              <pre>

<strong><a href="synthèse.php">Gérer le patrimoine informatique</a></strong>
Recenser et identifier les resources numériques
Exploiter des référentiels, normes et standards adoptés par le prestataire informatique
Mettre en place et vérifier les niveaux d'habilitation associés à un service
Vérifier les conditions de la continuité d'un service informatique
Gérer des sauvegardes
<strong><a href="synthèse.php">Répondre aux incidents et aux demandes d'assistance et d'évolution</a></strong>
Collecter, suivre et orienter des demandes
Traiter des demandes concernant les services réseau et système, applicatifs
Traiter des demandes concernant les applications
<strong><a href="synthèse.php">Travailler en mode projet</a></strong>
Analyser les objectifs et modalités d'organisation d'un projet
Planifier les activités
Évaluer les indicateurs de suivi d'un projet et analyser les écarts
<strong><a href="synthèse.php">Mettre à disposition des utilisateurs un service informatique</a></strong>
Réaliser les tests d'intégration et d'acceptation d'un service
Déployer un service
Accompagner les utilisateurs dans la mise en place d'un service
<strong><a href="synthèse.php">Organiser son développement professionnel</a></strong>
Mettre en place son environnement d'apprentissage professionnel
Mettre en œuvre des outils et stratégies de veille informationnelle
Développer son projet professionnel
              </pre>
            </p>
          </div>
        </div>
        <div class="box">
          <!-- <div class="img-box-page">
            <img src="images/projet1.png" alt="">
          </div> -->
          <div class="detail-box">
            <h5>
              Contexte  
            </h5>
            <p>
              Ce projet a été réalisé au sein du Centre de Traitement Informatique (CTI) d'Angers et portait 
              sur la gestion, la vérification et la mise à jour automatisée des calendriers de l'ordonnanceur 
              Dollar Universe ($U) sur l'ensemble des serveurs du parc. Les calendriers sont essentiels au 
              bon fonctionnement des tâches planifiées sur chaque serveur, et leur maintenance nécessite de 
              prendre en compte les intervalles de dates, les règles associées à chaque tâche, ainsi que les 
              jours fériés. Plusieurs scripts ont été développés pour vérifier l'état des calendriers, détecter 
              les problèmes potentiels, comparer les règles, effectuer les mises à jour et nettoyer les scripts 
              temporaires, tout en assurant la traçabilité et la centralisation des résultats.
            </p>
          </div>
        </div>
        <div class="box">
          <!-- <div class="img-box-page">
            <img src="images/projet1.png" alt="">
          </div> -->
          <div class="detail-box">
            <h5>
              Description des différentes tâches  
            </h5>
            <pre>
Analyse des spécificités des calendriers Dollar Universe (date de début/fin, règles, jours fériés)
Développement et déploiement de plusieurs scripts SHELL pour :
  - Vérifier les calendriers sur tous les serveurs (script_lance_script_verif_calendrier_$U.sh, script_verif_calendrier.sh)
  - Identifier les machines présentant des problèmes de calendrier et générer des listes de suivi
  - Comparer les règles de chaque tâche avec l'onglet Règles (script_lance_compare_regles.sh, script_compare_regles.sh)
  - Mettre à jour les calendriers et notifier les résultats (script_maj_calendrier_<environnement>.sh)
  - Nettoyer les scripts temporaires après traitement (script_nettoyage_script_calendrier.sh)
Centralisation des résultats, archivage, et documentation technique
Mise à jour et gestion des fichiers référentiels (liste_serveur, liste_machine_probleme_calendrier, temps_de_traitement_MAJ_calendrier)
            </pre>
          </div>
        </div>
        <div class="box">
          <!-- <div class="img-box">
            <img src="images/w3.png" alt="">
          </div> -->
          <div class="detail-box">
            <h5>
              Outils utilisés
            </h5>
            <p>
              <pre>
Dollar Universe ($U) pour l'ordonnancement et la supervision
Scripts SHELL (bash) pour l'automatisation
Serveurs Linux (VIP, OMNISCIENT et serveurs distants)
Fichiers référentiels internes (liste_serveur, User_DollarU, temps_de_traitement_MAJ_calendrier)
Documentation technique (DocTech – $U – Explication_MAJ_Calendrier_$U)
              </pre>
            </p>
          </div>
        </div>
        <div class="box">
          <!-- <div class="img-box">
            <img src="images/w4.png" alt="">
          </div> -->
          <div class="detail-box">
            <h5>
              Collaborateurs
            </h5>
            <p>
              Travail réalisé individuellement avec l'assistance de mes collègues.
            </p>
          </div>
        </div>
        <div class="box">
          <!-- <div class="img-box">
            <img src="images/w4.png" alt="">
          </div> -->
          <div class="detail-box">
            <h5>
              Informations supplémentaires
            </h5>
            <p>
              <pre>
Effectué au sein de l'établissement : Centre de traitement informatique (CTI) Angers
Option : Services informatiques aux organisations
Période : Du 20 Novembre 2024 au 30 Janvier 2025
              </pre>
            </p>
          </div>
        </div>
        <div class="box">
          <div class="detail-box">
            <h5>
              Documentation utilisateur
            </h5>
            <p>
              La documentation utilisateur pour la mise à jour des calendriers d'ordonnanceur fournit toutes les informations nécessaires pour comprendre et utiliser le système. Elle inclut une présentation du projet, les procédures d'utilisation et les fonctionnalités principales de l'outil de gestion des calendriers.
            </p>
            <div class="btn-box">
              <a href="images/DocTech – $U – Explication_MAJ_Calendrier_$U_Ecole.pdf" target="_blank">
                Voir la documentation
              </a>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="detail-box">
            <h5>
              Documents
            </h5>
          </div>
        </div>
        <div class="boxe">
          <div class="ligne-boxe">
            <div class="img-boxe">
              <a href="https://collecteur-vip.entreprise.com" target="_blank"><img src="images/lien_site.png" alt=""></a>
            </div>
            <a href="https://collecteur-vip.entreprise.com" target="_blank"><p>Présentation power point</p></a>
          </div>      
          <div class="ligne-boxe">
            <div class="img-boxe">
              <a href="gantt_projet2_entreprise.php" target=""><img src="images/gantt_tableau.png" alt=""></a>
            </div>
            <a href="gantt_projet2_entreprise.php" target=""><p>GANTT</p></a>
          </div>
          <div class="box">
            <div class="detail-box">
              <h5>
                Scripts SHELL
              </h5>
            </div>
          </div>
          <!-- Boucle sur les 6 scripts et images associées -->
          <div class="scripts-block">
            <!-- Script 1 -->
            <div class="ligne-boxe">
              <div class="img-boxe">
                <a href="images/1-script_lance_script_verif_calendrier_$U.sh" target="_blank"><img src="images/scriptlogo.png" alt="Script 1"></a>
              </div>
              <a href="images/1-script_lance_script_verif_calendrier_$U.sh" target="_blank"><p>Script lance script vérification calendrier</p></a>
            </div>
            <div class="ligne-boxe">
              <div class="img-boxe">
                <a href="images/capture_script1_projet2.png" target="_blank"><img src="images/schema.png" alt="Capture script 1"></a>
              </div>
              <a href="images/capture_script1_projet2.png" target="_blank"><p>Capture Script lance script vérification calendrier</p></a>
            </div>
            <!-- Script 2 -->
            <div class="ligne-boxe">
              <div class="img-boxe">
                <a href="images/2-script_verif_calendrier.sh" target="_blank"><img src="images/scriptlogo.png" alt="Script 2"></a>
              </div>
              <a href="images/2-script_verif_calendrier.sh" target="_blank"><p>Script vérification calendrier</p></a>
            </div>
            <div class="ligne-boxe">
              <div class="img-boxe">
                <a href="images/capture_script2_projet2.png" target="_blank"><img src="images/schema.png" alt="Capture script 2"></a>
              </div>
              <a href="images/capture_script2_projet2.png" target="_blank"><p>Capture Script vérification calendrier</p></a>
            </div>
            <!-- Script 3 -->
            <div class="ligne-boxe">
              <div class="img-boxe">
                <a href="images/3-script_lance_compare_regles.sh" target="_blank"><img src="images/scriptlogo.png" alt="Script 3"></a>
              </div>
              <a href="images/3-script_lance_compare_regles.sh" target="_blank"><p>Script lance compare règles</p></a>
            </div>
            <div class="ligne-boxe">
              <div class="img-boxe">
                <a href="images/capture_script3_projet2.png" target="_blank"><img src="images/schema.png" alt="Capture script 3"></a>
              </div>
              <a href="images/capture_script3_projet2.png" target="_blank"><p>Capture Script lance compare règles</p></a>
            </div>
            <!-- Script 4 -->
            <div class="ligne-boxe">
              <div class="img-boxe">
                <a href="images/4-script_compare_regles.sh" target="_blank"><img src="images/scriptlogo.png" alt="Script 4"></a>
              </div>
              <a href="images/4-script_compare_regles.sh" target="_blank"><p>Script compare règles</p></a>
            </div>
            <div class="ligne-boxe">
              <div class="img-boxe">
                <a href="images/capture_script4_projet2.png" target="_blank"><img src="images/schema.png" alt="Capture script 4"></a>
              </div>
              <a href="images/capture_script4_projet2.png" target="_blank"><p>Capture Script compare règles</p></a>
            </div>
            <!-- Script 5 -->
            <div class="ligne-boxe">
              <div class="img-boxe">
                <a href="images/5-script_maj_calendrier_production.sh" target="_blank"><img src="images/scriptlogo.png" alt="Script 5"></a>
              </div>
              <a href="images/5-script_maj_calendrier_production.sh" target="_blank"><p>Script maj calendrier production</p></a>
            </div>
            <div class="ligne-boxe">
              <div class="img-boxe">
                <a href="images/capture_script5_projet2.png" target="_blank"><img src="images/schema.png" alt="Capture script 5"></a>
              </div>
              <a href="images/capture_script5_projet2.png" target="_blank"><p>Capture Script maj calendrier production</p></a>
            </div>
            <!-- Script 6 -->
            <div class="ligne-boxe">
              <div class="img-boxe">
                <a href="images/6-script_nettoyage_script_calendrier.sh" target="_blank"><img src="images/scriptlogo.png" alt="Script 6"></a>
              </div>
              <a href="images/6-script_nettoyage_script_calendrier.sh" target="_blank"><p>Script nettoyage script calendrier</p></a>
            </div>
            <div class="ligne-boxe">
              <div class="img-boxe">
                <a href="images/capture_script6_projet2.png" target="_blank"><img src="images/schema.png" alt="Capture script 6"></a>
              </div>
              <a href="images/capture_script6_projet2.png" target="_blank"><p>Capture Script nettoyage script calendrier</p></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end service section -->


<?php
  include "footer.php";
?>