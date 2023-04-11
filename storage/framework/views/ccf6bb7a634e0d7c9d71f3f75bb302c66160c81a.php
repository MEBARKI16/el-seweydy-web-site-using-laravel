
 <!--APropos's section-->
 <?php $__env->startSection('content'); ?>
<head>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
  <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
</head>


  <!--Map's section-->
<div class="map-and-list-container">
<div class="qsn-menu">
  <div class="qsn-menu-inter">
  <div class="vertical-menu-first">
    <a href="#">
    <div class="menu-item" id="cableDiv" onmouseenter="coloredCable(this)" onmouseleave="normalCable(this)" >
      <div class="menu-icon"><img id="cableImage" src="<?php echo e(asset('public/images/cables et accessoires.png')); ?>" /></div>
      <div class="menu-text">Cables et accessoires</div>
    </div>
    </a>
    <a href="#">
    <div class="menu-item" id="electricDiv" onmouseenter="coloredElectric(this)" onmouseleave="normalElectric(this)">
      <div class="menu-icon"><img id="electricImage" src="<?php echo e(asset('public/images/Produits electriques.png')); ?>"/></div>
      <div class="menu-text">Produits électriques</div>
    </div>
    </a>
    <a href="#">
    <div class="menu-item" id="compteursDiv" onmouseenter="coloredCompteurs(this)" onmouseleave="normalCompteurs(this)">
      <div class="menu-icon"><img id="compteursImage" src="<?php echo e(asset('public/images/Compteurs.png')); ?>"/></div>
      <div class="menu-text">Compteurs</div>
    </div>
    </a>
    <a href="#">
    <div class="menu-item" id="transformateursDiv" onmouseenter="coloredTransformateurs(this)" onmouseleave="normalTransformateurs(this)">
      <div class="menu-icon"><img id="transformateursImage" src="<?php echo e(asset('public/images/Transformateurs.png')); ?>"/></div>
      <div class="menu-text">Transformateurs</div>
    </div>
    </a>
</div>
  </div>
</div>
<div class="map">
<img id="productsMap" height="100%" src="<?php echo e(asset('public/images/Map_All.png')); ?>"/>
</div>
<div class="qsn-menu">
  <div class="qsn-menu-inter">
  <div class="vertical-menu-last">
    <a href="#">
    <div class="menu-item" id="telDiv" onmouseenter="coloredTel(this)" onmouseleave="normalTel(this)">
      <div class="menu-icon"><img id="telImage" src="<?php echo e(asset('public/images/Telcommunication.png')); ?>"/></div>
      <div class="menu-text">Télécommunications</div>
    </div>
    </a>
    <a href="#">
    <div class="menu-item" id="energieDiv" onmouseenter="coloredEnergie(this)" onmouseleave="normalEnergie(this)">
      <div class="menu-icon"><img id="energieImage" src="<?php echo e(asset('public/images/Energies renouvelables.png')); ?>"/></div>
      <div class="menu-text">Energie renoublable</div>
    </div>
    </a>
    <a href="#">
    <div class="menu-item" id="devDiv" onmouseenter="coloredDev(this)" onmouseleave="normalDev(this)">
      <div class="menu-icon"><img id="devImage" src="<?php echo e(asset('public/images/Projet et developpement.png')); ?>"/></div>
      <div class="menu-text">Projet et developpement</div>
    </div>
    </a>
    <a href="#">
    <div class="menu-item" id="exportationDiv" onmouseenter="coloredExportation(this)" onmouseleave="normalExportation(this)">
      <div class="menu-icon"><img id="exportationImage" src="<?php echo e(asset('public/images/Exportation.png')); ?>"/></div>
      <div class="menu-text">Exportation</div>
    </div>
    </a>
</div>
  </div>
</div>
</div>
<!-- mobile top ------------------------------------------------------------->
<div class="map-and-list-container-mobile">
<div class="qsn-menu-mobile">
  <a href="#">
    <div class="menu-item" id="cableDivClick" onmouseenter="coloredCable(this)" onmouseleave="normalCable(this)" onclick="coloredCableClick(this)" >
      <div class="menu-icon"><img id="cableImageClick" src="<?php echo e(asset('public/images/cables et accessoires.png')); ?>" /></div>
    </div>
    </a>
    <a href="#">
    <div class="menu-item" id="electricDivClick" onmouseenter="coloredElectric(this)" onmouseleave="normalElectric(this)" onclick="coloredElectricClick(this)">
      <div class="menu-icon"><img id="electricImageClick" src="<?php echo e(asset('public/images/Produits electriques.png')); ?>"/></div>
    </div>
    </a>
    <a href="#">
    <div class="menu-item" id="compteursDivClick" onmouseenter="coloredCompteurs(this)" onmouseleave="normalCompteurs(this)" onclick="coloredCompteursClick(this)">
      <div class="menu-icon"><img id="compteursImageClick" src="<?php echo e(asset('public/images/Compteurs.png')); ?>"/></div>
    </div>
    </a>
    <a href="#">
    <div class="menu-item" id="transformateursDivClick" onmouseenter="coloredTransformateurs(this)" onmouseleave="normalTransformateurs(this)" onclick="coloredTransformateursClick(this)">
      <div class="menu-icon"><img id="transformateursImageClick" src="<?php echo e(asset('public/images/Transformateurs.png')); ?>"/></div>
    </div>
    </a>
    <a href="#">
    <div class="menu-item" id="telDivClick" onmouseenter="coloredTel(this)" onmouseleave="normalTel(this)" onclick="coloredTelClick(this)" >
      <div class="menu-icon"><img id="telImageClick" src="<?php echo e(asset('public/images/Telcommunication.png')); ?>"/></div>
    </div>
    </a>
    <a href="#">
    <div class="menu-item" id="energieDivClick" onmouseenter="coloredEnergie(this)" onmouseleave="normalEnergie(this)" onclick="coloredEnergieClick(this)">
      <div class="menu-icon"><img id="energieImageClick" src="<?php echo e(asset('public/images/Energies renouvelables.png')); ?>"/></div>
    </div>
    </a>
    <a href="#">
    <div class="menu-item" id="devDivClick" onmouseenter="coloredDev(this)" onmouseleave="normalDev(this)" onclick="coloredDevClick(this)">
      <div class="menu-icon"><img id="devImageClick" src="<?php echo e(asset('public/images/Projet et developpement.png')); ?>"/></div>
    </div>
    </a>
    <a href="#">
    <div class="menu-item" id="exportationDivClick" onmouseenter="coloredExportation(this)" onmouseleave="normalExportation(this)" onclick="coloredExportationClick(this)">
      <div class="menu-icon"><img id="exportationImageClick" src="<?php echo e(asset('public/images/Exportation.png')); ?>"/></div>
    </div>
    </a>
  </div>
  <div class="map">
<img id="productsMapClick" height="100%" src="<?php echo e(asset('public/images/Map_All.png')); ?>"/>
</div>
  </div>
<!-- end mobile top --------------------------------------------------------->
<div class="numbersImage"><img  src="<?php echo e(asset('public/images/numbersText.png')); ?>"/></div>
</div>
    <!--Presentation's section-->
    <section >
      <div class="presentation1">
        <h3>Elsewedy electric histoire et évolution</h3>
        <div class="presentation1-interior">
          <div class="presentation1-text">
          <p>
          Depuis 80 ans, Elsewedy Electric s’est positionné en tant que leader
          dans un marché qui porte des enjeux civilisationnels. Mettant
          l’innovation et la détermination au cœur de ses projets, le groupe
          aspire à étendre son champ d’action dans le secteur énergétique grâce
          à un système solide de gestion d’entreprise.<br /><br />

          Elsewedy Electric a évolué au fil des années pour devenir une
          entreprise d’envergure mondiale qui compte près de 12 000 employés et
          25 unités de production. Jouissant d’une expertise avérée, le groupe a
          su conquérir de nouveaux marchés ; 85 entités juridiques lui
          permettent de se déployer à l’international, depuis l’Égypte jusqu’en
          Asie, en passant par le Moyen-Orient, l’Europe et l’Afrique.<br />

          Fort de son expertise sectorielle, Elsewedy Electric opère dans des
          segments d’énergie divers, parmi eux :
         
          <ul class="segments">
            <li>La production de câbles, accessoires et de produits électriques.</li>
            <li>La mesure et la gestion d’énergie.</li>
            <li>Le développement de projets énergétiques ambitieux : production,
          transmission et distribution d’électricité, construction et
          infrastructures, investissement dans les énergies renouvelables,
          solutions de télécommunication et développement industriel.</li>
            
          </ul>
          </p>
          </div>
          <div class="presentation1-image">
          <img src="<?php echo e(asset('public/images/Image1.png')); ?>"/>
          </div>
        </div>

      </div>

      <div class="presentation2">
        <h3>ELSEWEDY ELECRIC ALGERIE</h3>
        <div class="presentation1-interior">
        <div class="presentation1-image">
          <img src="<?php echo e(asset('public/images/Image2.png')); ?>"/>
          </div>
        <div class="presentation1-text">
        <p>
          Riche de l’expérience de la société mère, la filiale algérienne
          Elsewedy Electric Algérie a pour objectif de rassembler tous les
          métiers que compte la chaîne de valeur de l’électricité ; de la
          production à la distribution en passant par le transport de l’énergie
          et l’investissement dans les énergies renouvelables.<br /><br />

          Les usines de production installées par Elsewedy Electric Algérie
          cristallisent la volonté de bâtir et de participer à la dynamique
          économique du pays. Cette détermination se traduit par un
          investissement de 20 milliards de dollars qui s’étend sur une
          superficie de 6 hectares.
        </p>
        </div>

        </div>
        <div class="presentation1-interior">
        <div class="presentation1-text">
        <h3>PLUS GRAND EXPORTATEUR DE Câbles électriques EN ALGERIE</h3>
        <p>
        L’installation de l’usine d’Elsewedy Electric Algérie en 2008 dans la région d’Aïn 
        Defla a permis à l’Algé it la facture d’importation du pays et contribue positivement 
        à la croissance du secteur industriel 
hors hydrocarbures.
<br>
L’usine a également permis de renforcer les exportations nationales en plaçant des produits 
made in Algeria sur de nombreux marchés, tels que la Guinée Équatoriale, l'Égypte, le Chili, le Qatar, 
la Tunisie, l'Italie, la Jordanie, l'Arabie Saoudite, l'Espagne et le Bahreïn.
        </p>
        </div>
        <div class="presentation1-image">
          <img src="<?php echo e(asset('public/images/Image3.png')); ?>"/>
          </div>

        </div>
       
      </div>
      <div class="presentation3">
        <h3>DÉVELOPPEMENT DE LA PRODUCTION</h3>
        <div class="presentation3-interior">
          <div class="presentation3-col">
             <hr class="hr-cables">
            <h4>Câbles</h4>
            <p>
          Implantée en Algérie depuis 2008 à Aïn Defla, l’usine de production
          des câbles a atteint une capacité de production équivalente à 30 000
          tonnes de câbles en cuivre et en aluminium ; parmi eux : des câbles à
          basse, moyenne et haute tension, des conducteurs aériens, les OPGW,
          des câbles spéciaux : anti-feu, anti-hydrocarbures, des câbles à très
          haute tension, des câbles souterrains, etc.<br /><br />
            </p>
          </div>
          <div class="presentation3-col">
          <hr class="hr-transmission">
            <h4>Transmission et distribution d'énergie</h4>
            <p>
          En 2010, Elsewedy Electric T&D Algérie a été créée. Spécialisée dans
          la fourniture, l’installation et la mise en service de lignes de
          transmission, de câbles tout-terrain, de sous-stations et des
          centrales solaires, Elsewedy Electric T&D Algérie fournit des
          solutions clé en main et accompagne les industries des services
          publics.<br /><br />
            </p>
          </div>
          <div class="presentation3-col">
          <hr class="hr-transformateurs">
            <h4>Transformateurs</h4>
            <p>
          Afin de satisfaire la demande du marché algérien et diversifier sa
          production, Elsewedy Electric Algérie a mis en place un plan pour la
          construction d'une nouvelle usine dédiée à la production de
          transformateurs. L’usine est opérationnelle depuis 2012, elle atteint
          aujourd’hui une capacité de production de 3 000 transformateurs par
          an, parmi eux : des transformateurs secs, des transformateurs immergés
          dans l'huile et des transformateurs spécifiques, fabriqués selon les
          exigences et les spécificités du client. <br /><br />
            </p>
          </div>
          <div class="presentation3-col">
          <hr class="hr-acc">
            <h4>Accessoires</h4>
            <p>
          En octobre 2018, l’entreprise a opté pour le renforcement de sa
          capacité en installant sa nouvelle unité de production d’accessoires
          de câbles. Cette unité atteint une capacité de production de 100 000
          pièces par an. Avec un investissement estimé à 1 million de dollars,
          l’entreprise a répondu au challenge qu’elle s’est fixé : rassembler
          tous les métiers que compte la chaîne de valeur de l’électricité ; de
          la production à la distribution en passant par le transport de
          l’énergie et l’investissement dans les énergies renouvelables.
          L’ensemble des produits sont pré-moulés en usine.
</p>
          </div>
        </div>
      </div>

<!-- Container for the image gallery -->
<div class="slider-container">
<div class="slider">
    <div class="slide-container"><img src="<?php echo e(asset('public/images/2006.png')); ?>"/></div>
    <div class="slide-container"><img src="<?php echo e(asset('public/images/2007.png')); ?>"/></div>
    <div class="slide-container"><img src="<?php echo e(asset('public/images/2008.png')); ?>"/></div>
    <div class="slide-container"><img src="<?php echo e(asset('public/images/2009.png')); ?>"/></div>
    <div class="slide-container"><img src="<?php echo e(asset('public/images/2010.png')); ?>"/></div>
    <div class="slide-container"><img src="<?php echo e(asset('public/images/2011.png')); ?>"/></div>
    <div class="slide-container"><img src="<?php echo e(asset('public/images/2012.png')); ?>"/></div>
    <div class="slide-container"><img src="<?php echo e(asset('public/images/2013.png')); ?>"/></div>
    <div class="slide-container"><img src="<?php echo e(asset('public/images/2014.png')); ?>"/></div>
    <div class="slide-container"><img src="<?php echo e(asset('public/images/2015.png')); ?>"/></div>
    <div class="slide-container"><img src="<?php echo e(asset('public/images/2016.png')); ?>"/></div>
    <div class="slide-container"><img src="<?php echo e(asset('public/images/2017.png')); ?>"/></div>
    <div class="slide-container"><img src="<?php echo e(asset('public/images/2018.png')); ?>"/></div>
    <div class="slide-container"><img src="<?php echo e(asset('public/images/2019.png')); ?>"/></div>
    <div class="slide-container"><img src="<?php echo e(asset('public/images/2020.png')); ?>"/></div>
    <div class="slide-container"><img src="<?php echo e(asset('public/images/2021.png')); ?>"/></div>
    <div class="slide-container"><img src="<?php echo e(asset('public/images/2022.png')); ?>"/></div>

  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script type="text/javascript">
  $('.slider').slick({
    autoplay: true,
    autoplaySpeed: 1500,
    arrows: true,
    dots: true,
    centerMode: true,
  centerPadding: '100px',
  slidesToShow: 4,
  // slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: true,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 4
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: true,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
  });
</script>
<script>

function coloredCable(x){
    var d = document.getElementById('cableDiv');
    var i = document.getElementById('cableImage');
    var m = document.getElementById('productsMap');

    d.style.background="#A10081";
    i.src="<?php echo e(asset('public/images/cables et accessoires-Bl.png')); ?>";
    m.src="<?php echo e(asset('public/images/Map_Cable.png')); ?>";
  }
  function coloredCableClick(x){
 
    var d = document.getElementById('cableDivClick');
    var i = document.getElementById('cableImageClick');
    var m = document.getElementById('productsMapClick');

    d.style.background="#A10081";
    i.src="<?php echo e(asset('public/images/cables et accessoires-Bl.png')); ?>";
    m.src="<?php echo e(asset('public/images/Map_Cable.png')); ?>";

  }
  function normalCable(x){
    var d = document.getElementById('cableDiv');
    var i = document.getElementById('cableImage');
    var m = document.getElementById('productsMap');

    d.style.background = "none";
    i.src="<?php echo e(asset('public/images/cables et accessoires.png')); ?>";
    m.src="<?php echo e(asset('public/images/Map_All.png')); ?>";
  }

  function coloredElectric(x){
    var d = document.getElementById('electricDiv');
    var i = document.getElementById('electricImage');
    var m = document.getElementById('productsMap');

    d.style.background="#AC0036";
    i.src="<?php echo e(asset('public/images/Produits electriques-BL.png')); ?>";
    m.src="<?php echo e(asset('public/images/Map_Produits_electriques.png')); ?>";
  }
  function coloredElectricClick(x){
    var d = document.getElementById('electricDivClick');
    var i = document.getElementById('electricImageClick');
    var m = document.getElementById('productsMapClick');

    d.style.background="#AC0036";
    i.src="<?php echo e(asset('public/images/Produits electriques-BL.png')); ?>";
    m.src="<?php echo e(asset('public/images/Map_Produits_electriques.png')); ?>";
  }
  function normalElectric(x){
    var d = document.getElementById('electricDiv');
    var i = document.getElementById('electricImage');
    var m = document.getElementById('productsMap');

    d.style.background="none";
    i.src="<?php echo e(asset('public/images/Produits electriques.png')); ?>";
    m.src="<?php echo e(asset('public/images/Map_All.png')); ?>";
  }

  function coloredCompteurs(x){
    var d = document.getElementById('compteursDiv');
    var i = document.getElementById('compteursImage');
    var m = document.getElementById('productsMap');

    d.style.background="#00A1E5";
    i.src="<?php echo e(asset('public/images/Compteurs-BL.png')); ?>";
    m.src="<?php echo e(asset('public/images/Map_Compteur.png')); ?>";
  }
  function coloredCompteursClick(x){
    var d = document.getElementById('compteursDivClick');
    var i = document.getElementById('compteursImageClick');
    var m = document.getElementById('productsMapClick');

    d.style.background="#00A1E5";
    i.src="<?php echo e(asset('public/images/Compteurs-BL.png')); ?>";
    m.src="<?php echo e(asset('public/images/Map_Compteur.png')); ?>";
  }
  function normalCompteurs(x){
    var d = document.getElementById('compteursDiv');
    var i = document.getElementById('compteursImage');
    var m = document.getElementById('productsMap');

    d.style.background="none";
    i.src="<?php echo e(asset('public/images/Compteurs.png')); ?>";
    m.src="<?php echo e(asset('public/images/Map_All.png')); ?>";
  }

  function coloredTransformateurs(x){
    var d = document.getElementById('transformateursDiv');
    var i = document.getElementById('transformateursImage');
    var m = document.getElementById('productsMap');

    d.style.background="#F16400";
    i.src="<?php echo e(asset('public/images/Transformateurs-BL.png')); ?>";
    m.src="<?php echo e(asset('public/images/Map_Transformateurs.png')); ?>";
  }
  function coloredTransformateursClick(x){
    var d = document.getElementById('transformateursDivClick');
    var i = document.getElementById('transformateursImageClick');
    var m = document.getElementById('productsMapClick');

    d.style.background="#F16400";
    i.src="<?php echo e(asset('public/images/Transformateurs-BL.png')); ?>";
    m.src="<?php echo e(asset('public/images/Map_Transformateurs.png')); ?>";
  }
  function normalTransformateurs(x){
    var d = document.getElementById('transformateursDiv');
    var i = document.getElementById('transformateursImage');
    var m = document.getElementById('productsMap');

    d.style.background="none";
    i.src="<?php echo e(asset('public/images/Transformateurs.png')); ?>";
    m.src="<?php echo e(asset('public/images/Map_All.png')); ?>";
  }

  function coloredTel(x){
    var d = document.getElementById('telDiv');
    var i = document.getElementById('telImage');
    var m = document.getElementById('productsMap');

    d.style.background="#453F91";
    i.src="<?php echo e(asset('public/images/tel-BL.png')); ?>";
    m.src="<?php echo e(asset('public/images/Map_tel.png')); ?>";
  }
  function coloredTelClick(x){
    var d = document.getElementById('telDivClick');
    var i = document.getElementById('telImageClick');
    var m = document.getElementById('productsMapClick');

    d.style.background="#453F91";
    i.src="<?php echo e(asset('public/images/tel-BL.png')); ?>";
    m.src="<?php echo e(asset('public/images/Map_tel.png')); ?>";
  }
  function normalTel(x){
    var d = document.getElementById('telDiv');
    var i = document.getElementById('telImage');
    var m = document.getElementById('productsMap');

    d.style.background="none";
    i.src="<?php echo e(asset('public/images/Telcommunication.png')); ?>";
    m.src="<?php echo e(asset('public/images/Map_All.png')); ?>";
  }

  function coloredEnergie(x){
    var d = document.getElementById('energieDiv');
    var i = document.getElementById('energieImage');
    var m = document.getElementById('productsMap');

    d.style.background="#4AAC40";
    i.src="<?php echo e(asset('public/images/Energies renouvelables-BL.png')); ?>";
    m.src="<?php echo e(asset('public/images/Map_Energie.png')); ?>";
  }
  function coloredEnergieClick(x){
    var d = document.getElementById('energieDivClick');
    var i = document.getElementById('energieImageClick');
    var m = document.getElementById('productsMapClick');

    d.style.background="#4AAC40";
    i.src="<?php echo e(asset('public/images/Energies renouvelables-BL.png')); ?>";
    m.src="<?php echo e(asset('public/images/Map_Energie.png')); ?>";
  }
  function normalEnergie(x){
    var d = document.getElementById('energieDiv');
    var i = document.getElementById('energieImage');
    var m = document.getElementById('productsMap');

    d.style.background="none";
    i.src="<?php echo e(asset('public/images/Energies renouvelables.png')); ?>";
    m.src="<?php echo e(asset('public/images/Map_All.png')); ?>";
  }

  function coloredDev(x){
    var d = document.getElementById('devDiv');
    var i = document.getElementById('devImage');
    var m = document.getElementById('productsMap');

    d.style.background="#7F7F7F";
    i.src="<?php echo e(asset('public/images/Projet et developpement-BL.png')); ?>";
    m.src="<?php echo e(asset('public/images/Map_Projets-et-developpement.png')); ?>";
  }
  function coloredDevClick(x){
    var d = document.getElementById('devDivClick');
    var i = document.getElementById('devImageClick');
    var m = document.getElementById('productsMapClick');

    d.style.background="#7F7F7F";
    i.src="<?php echo e(asset('public/images/Projet et developpement-BL.png')); ?>";
    m.src="<?php echo e(asset('public/images/Map_Projets-et-developpement.png')); ?>";
  }
  function normalDev(x){
    var d = document.getElementById('devDiv');
    var i = document.getElementById('devImage');
    var m = document.getElementById('productsMap');

    d.style.background="none";
    i.src="<?php echo e(asset('public/images/Projet et developpement.png')); ?>";
    m.src="<?php echo e(asset('public/images/Map_All.png')); ?>";
  }

  function coloredExportation(x){
    var d = document.getElementById('exportationDiv');
    var i = document.getElementById('exportationImage');
    var m = document.getElementById('productsMap');

    d.style.background="#FB0000";
    i.src="<?php echo e(asset('public/images/Exportation-BL.png')); ?>";
    m.src="<?php echo e(asset('public/images/Map_Exportations.png')); ?>";
  }
  
  function coloredExportationClick(x){
    var d = document.getElementById('exportationDivClick');
    var i = document.getElementById('exportationImageClick');
    var m = document.getElementById('productsMapClick');

    d.style.background="#FB0000";
    i.src="<?php echo e(asset('public/images/Exportation-BL.png')); ?>";
    m.src="<?php echo e(asset('public/images/Map_Exportations.png')); ?>";
  }
  function normalExportation(x){
    var d = document.getElementById('exportationDiv');
    var i = document.getElementById('exportationImage');
    var m = document.getElementById('productsMap');

    d.style.background="none";
    i.src="<?php echo e(asset('public/images/Exportation.png')); ?>";
    m.src="<?php echo e(asset('public/images/Map_All.png')); ?>";
  }
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/whitelineservices.dz/elsewedysite.whitelineservices.dz/elsewedyWebsite/elsewedyWebsite/resources/views/quisommesnous.blade.php ENDPATH**/ ?>