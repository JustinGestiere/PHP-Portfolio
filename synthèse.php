<?php
  include "header.php";
?>

  <!-- about section -->

<section class="why_section layout_padding">
  <div class="container">
    <div class="heading_container heading_center">
      <h2>
        Tableau de <span>Synthèse</span>
      </h2>
    </div>
    <div class="why_container">
      <div class="synthese-container">
        <div class="table-responsive">
          <table class="synthese-table">
            <thead>
              <tr>
                <th class="empty-header"></th>
                <th colspan="6" class="competences-header">Compétences</th>
              </tr>
              <tr>
                <th class="realisation-header">Réalisations</th>
                <th>Gérer le patrimoine informatique</th>
                <th>Répondre aux incidents</th>
                <th>Développer la présence en ligne</th>
                <th>Travailler en mode projet</th>
                <th>Mettre à disposition un service</th>
                <th>Organiser son développement</th>
              </tr>
            </thead>
            <tbody>
              <!-- Réalisations MyDigitalSchool -->
              <tr class="section-header">
                <td colspan="7">Réalisations MyDigitalSchool</td>
              </tr>
              <tr>
                <td class="projet-cell"><a href="page_réalisation1.php">Calculatrice prêt immobilier</a></td>
                <td></td>
                <td></td>
                <td></td>
                <td>✓</td>
                <td>✓</td>
                <td>✓</td>
              </tr>
              <tr>
                <td class="projet-cell"><a href="page_réalisation2.php">WEB FORMATION</a></td>
                <td>✓</td>
                <td></td>
                <td>✓</td>
                <td>✓</td>
                <td>✓</td>
                <td>✓</td>
              </tr>
              <tr>
                <td class="projet-cell"><a href="page_réalisation4.php">CLICK'N EAT</a></td>
                <td>✓</td>
                <td></td>
                <td>✓</td>
                <td>✓</td>
                <td>✓</td>
                <td>✓</td>
              </tr>
              <tr>
                <td class="projet-cell"><a href="page_réalisation3.php">PORTFOLIO</a></td>
                <td></td>
                <td></td>
                <td>✓</td>
                <td></td>
                <td>✓</td>
                <td>✓</td>
              </tr>
              
              <!-- Réalisations Entreprise -->
              <tr class="section-header">
                <td colspan="7">Réalisations Entreprise</td>
              </tr>
              <tr>
                <td class="projet-cell"><a href="page_réalisation5.php">Collecteur de données VIP</a></td>
                <td></td>
                <td>✓</td>
                <td></td>
                <td>✓</td>
                <td></td>
                <td>✓</td>
              </tr>
              <tr>
                <td class="projet-cell"><a href="page_réalisation6.php">Mise à jour calendriers ordonnanceur</a></td>
                <td>✓</td>
                <td>✓</td>
                <td></td>
                <td>✓</td>
                <td>✓</td>
                <td>✓</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="pdf-download-container">
        <a href="images/Tableau-synthese-competences.pdf" target="_blank" class="pdf-download-btn">
          <i class="fa fa-file-pdf-o"></i> PDF du tableau de synthèse
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Ajout du CSS pour le tableau de synthèse -->
<style>
  .synthese-container {
    width: 100%;
    overflow-x: auto;
    margin-top: 20px;
  }
  
  .synthese-table {
    width: 100%;
    border-collapse: collapse;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
  }
  
  .synthese-header {
    display: flex;
    background-color: #0f054c;
    color: white;
    font-weight: bold;
  }
  
  .synthese-row {
    display: flex;
    border-bottom: 1px solid #ddd;
    align-items: stretch;
  }
  
  .synthese-row:nth-child(even) {
    background-color: #f9f9f9;
  }
  
  .synthese-row:hover {
    background-color: #f1f1f1;
  }
  
  .synthese-cell {
    padding: 5px;
  }
  
  .header-cell {
    font-size: 18px;
    text-align: center;
    padding: 10px;
  }
  
  .projet-cell {
    flex: 1;
    border-right: 1px solid #ddd;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  
  .projet-content {
    text-align: center;
  }
  
  .competence-cell {
    flex: 2;
    padding: 5px 10px;
  }
  
  .projet-cell h4 {
    margin: 0 0 5px 0;
    color: #00bbf0;
  }
  
  .projet-cell p {
    margin: 0;
    font-size: 14px;
    color: #666;
  }
  
  .synthese-table th {
    background-color: #0f054c;
    color: white;
    padding: 12px;
    text-align: center;
    height: 50px;
    vertical-align: middle;
    font-weight: bold;
    border: 1px solid #ddd;
  }
  
  .table-responsive {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    margin-bottom: 20px;
  }
  
  .empty-header {
    background-color: white !important;
    border: 1px solid #ddd;
    color: #333;
  }
  
  .realisation-header {
    background-color: #0f054c !important;
    color: white;
    font-weight: bold;
    font-size: 16px;
    min-width: 150px;
    border-right: 8px solid white;
  }
  
  .competences-header {
    background-color: #00bbf0;
    color: white;
    font-size: 18px;
  }
  
  .section-header {
    background-color: #f0f0f0;
    font-weight: bold;
    color: #0f054c;
    text-align: left;
    padding: 10px;
    font-size: 16px;
    border-right: none;
  }
  
  .section-header td {
    border: 1px solid #ddd;
  }
  
  .synthese-table td {
    padding: 10px;
    text-align: center;
    border: 1px solid #ddd;
    vertical-align: middle;
  }
  
  .synthese-table tr:nth-child(even) {
    background-color: #f9f9f9;
  }
  
  .synthese-table tr:hover {
    background-color: #f1f1f1;
  }
  
  .projet-cell {
    text-align: left;
    font-weight: bold;
    background-color: #f1f1f1;
    border-right: 4px solid #00bbf0;
    min-width: 150px;
  }
  
  .projet-cell a {
    color: #00bbf0;
    text-decoration: none;
    transition: color 0.3s;
  }
  
  .projet-cell a:hover {
    color: #0f054c;
    text-decoration: underline;
  }
  
  /* Correction de l'alignement des en-têtes */
  .synthese-header .header-cell:first-child {
    flex: 1;
    text-align: center;
  }
  
  .synthese-header .header-cell:last-child {
    flex: 2;
    text-align: center;
  }
  
  .pdf-download-container {
    text-align: center;
    margin-top: 30px;
    margin-bottom: 20px;
  }
  
  .pdf-download-btn {
    display: inline-block;
    background-color: #00bbf0;
    color: white;
    padding: 10px 20px;
    border-radius: 5px;
    text-decoration: none;
    font-weight: bold;
    transition: background-color 0.3s, transform 0.2s;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  }
  
  .pdf-download-btn:hover {
    background-color: #0f054c;
    transform: translateY(-2px);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
  }
  
  .pdf-download-btn i {
    margin-right: 8px;
  }
  
  @media (max-width: 768px) {
    .synthese-table {
      font-size: 14px;
      width: 100%;
      overflow-x: auto;
      display: block;
    }
    
    .synthese-container {
      overflow-x: auto;
      padding: 0 10px;
    }
    
    .synthese-table th {
      padding: 8px 4px;
      height: 40px;
    }
    
    .synthese-table td {
      padding: 6px 4px;
    }
    
    .projet-header, .realisation-header {
      min-width: 120px;
    }
    
    .pdf-download-btn {
      padding: 8px 16px;
      font-size: 14px;
      margin-top: 20px;
    }
    
    .section-header td {
      font-size: 14px;
      padding: 8px 4px;
    }
    
    .realisation-header {
      border-right: 6px solid white;
    }
  }
  
  @media (max-width: 480px) {
    .synthese-table {
      font-size: 11px;
      width: 100%;
      overflow-x: auto;
      display: block;
    }
    
    .synthese-container {
      overflow-x: auto;
      padding: 0 5px;
      max-width: 100%;
    }
    
    .synthese-table th {
      padding: 6px 2px;
      font-size: 10px;
      height: 35px;
    }
    
    .synthese-table td {
      padding: 4px 2px;
    }
    
    .projet-cell a {
      font-size: 11px;
    }
    
    .projet-cell {
      min-width: 100px;
    }
    
    .pdf-download-btn {
      padding: 6px 12px;
      font-size: 12px;
      margin-top: 15px;
      width: 100%;
      text-align: center;
    }
    
    .section-header td {
      font-size: 12px;
      padding: 6px 2px;
    }
    
    .realisation-header {
      border-right: 4px solid white;
    }
    
    .competences-header {
      font-size: 10px;
    }
  }
</style>

<?php
  include "footer.php";
?>