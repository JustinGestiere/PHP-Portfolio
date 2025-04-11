<?php
  include "header.php";
?>

<!-- service section -->

<section class="why_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Veille 5<span></span>
        </h2>
      </div>
      <div class="why_container">
        <div class="box">
          <div class="detail-box">
            <h1>
                SQL et la transition vers le stockage sans schéma
            </h1>
          </div>
        </div>
        <div class="box">
          <div class="detail-box">
            <h5>
                Contexte
            </h5>
            <p>
              Le stockage sans schéma (ou schemaless) gagne en popularité même dans les bases de données SQL 
              traditionnelles. Cette approche permet une flexibilité accrue pour gérer des données non 
              structurées ou semi-structurées, tout en conservant les avantages robustes d'une base 
              relationnelle : intégrité des données, langage SQL, transactions, etc.
            </p>
          </div>
        </div>
        <div class="box">
          <div class="detail-box">
            <h5>
                Détails Techniques
            </h5>
            <p>
              Historiquement, les bases de données SQL nécessitaient des schémas rigides, où chaque table 
              devait être définie à l'avance avec des colonnes précises.
              Aujourd'hui, grâce au support natif du type JSON (introduit notamment à partir de MySQL 5.7), 
              les bases relationnelles peuvent stocker des structures de données plus souples, comme des objets 
              ou des tableaux JSON.
              Cela permet une gestion dynamique des données, idéale pour les environnements à évolution rapide 
              ou aux besoins peu prévisibles.
            </p>
          </div>
        </div>
        <div class="box">
          <div class="detail-box">
            <h5>
                Avantages et Applications Pratiques
            </h5>
            <p>
              Le stockage sans schéma : facilite le développement agile où les structures de données changent 
              fréquemment, réduit les contraintes liées à l'évolution du modèle de données, est adapté aux 
              applications modernes comme les réseaux sociaux, les applications mobiles ou les systèmes de 
              gestion de contenu (CMS), qui manipulent des données riches, évolutives et hétérogènes.
              De plus, il permet de gagner du temps en évacuant les migrations complexes à chaque changement 
              de modèle.
            </p>
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
              <a href="https://www.ibm.com/fr-fr/topics/nosql-databases" target="_blank"><img src="images/lien_site.png" alt=""></a>
            </div>
            <a href="https://www.ibm.com/fr-fr/topics/nosql-databases" target="_blank"><p>Adresse du site (IBM)</p></a>
          </div>
        </div>
        <div class="boxe">
          <div class="ligne-boxe">
            <div class="img-boxe">
              <a href="https://stackoverflow.com/questions/3564024/storing-data-in-mysql-as-json?utm_source=chatgpt.com" target="_blank"><img src="images/lien_site.png" alt=""></a>
            </div>
            <a href="https://stackoverflow.com/questions/3564024/storing-data-in-mysql-as-json?utm_source=chatgpt.com" target="_blank"><p>Adresse du site (Stack Overflow)</p></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end service section -->


<?php
  include "footer.php";
?>