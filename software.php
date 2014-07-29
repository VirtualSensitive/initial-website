<?php include_once( dirname( __FILE__ ) . '/includes/header.php' ); ?>

<script src="scripts/jquery.bxSlider.min.js"></script>
<script src="scripts/piecemaker/scripts/swfobject/swfobject.js"></script>
<script src="scripts/jquery.blackandwhite.min.js"></script>
<script src="scripts/js_func.js"></script>
<script>
      var flashvars = {};
      flashvars.cssSource = "scripts/piecemaker/piecemaker.css";
      flashvars.xmlSource = "scripts/piecemaker/piecemaker2.xml";
		
      var params = {};
      params.play = "true";
      params.menu = "false";
      params.scale = "showall";
      params.wmode = "transparent";
      params.allowfullscreen = "true";
      params.allowscriptaccess = "always";
      params.allownetworking = "all";
	  
      swfobject.embedSWF('scripts/piecemaker/piecemaker.swf', 'piecemaker', '960', '480', '10', null, flashvars,    
      params, null);

$(function(){
	$('.features_slider').bxSlider({
		auto: false,
		displaySlideQty: 5,
		moveSlideQty: 1,
    	speed : 1000
	});
    $('.bwWrapper').BlackAndWhite({
        hoverEffect : true,
        webworkerPath : false,
        responsive:true,
        invertHoverEffect:false
    });
})
</script>

<div class="content_block">
<div class= "sliderWrapper">
 <!-- piecemaker slider -->
<div class="wraper">
 <div class="fallback"><img src="scripts/piecemaker/contents/slide_table_tactile_1.png" alt="Offres table tactile" /></div>
 <div id="piecemaker">
  <!--<p>Put your alternative Non Flash content here.</p>-->
 </div>
 </div>
</div>
<!-- /piecemaker slider -->

 <!-- text bar2 -->
 <div class="text_bar2">
  <div class="wraper">
   <h2>Pour chaque situation, nous avons l'offre adaptée (mise à disposition temporaire ou longue durée) <span>Pour une journée ?  Une foire ou un salon ? A l'achat ?</span></h2>
   <a class="buy btn_l" href="contact.php">Contactez nous!</a>
  </div>
 </div>
 <!-- /text bar2 -->
 <div class="wraper">
  
  
   	 <!-- services -->
	 <!--
 <div class="wraper">

  <div class="features_block services_option5_marg">
   <ul>
    <li class="design">
     <a class="circle_link" href="#">&nbsp;</a>
     <h4>A la journée</h4>
     <p>Intégration de vos contenus</p>
     <p>Livraison, installation et formation le jour J</p>
     <p>Support</p>
     <p>Démontage le jour J</p>
    </li>
    <li class="flexible">
     <a class="circle_link" href="#">&nbsp;</a>
     <h4>Foire ou salon</h4>
     <p>Intégration de vos contenus </p>
	 <p>Personalisation d'interface</p>
     <p>Livraison, installation et formation la veille</p>
     <p>Support et infogérance pendant l'évenement</p>
     <p>Démontage le dernier jour</p>
    </li>
    <li class="easy">
     <a class="circle_link" href="#">&nbsp;</a>
     <h4>A l'achat</h4>
     <p>Acquisition d'une ou pluieurs tables</p>
     <p>Livraison et installation</p>
     <p>Assurance tous risques valable 1 an en France</p>
     <p>Garantie 2 ans pièces et main d'oeuvre</p>
	 <p>Contrat de maintenance annuel</p>
    </li>
   </ul>
  </div>
 </div>
  <!-- /services  -->
  
   <!-- pricing option3 -->
   <!--
  <div class="pricing_option pricing_option3">
   <ul>
    <li>
     <h4>A la journée</h4>
     <p>Intégration de vos contenus</p>
     <p>Livraison, installation et formation le jour J</p>
     <p>Support</p>
     <p>Démontage le jour J</p>

    </li>
    <li >
     <h4>Foire ou salon</h4>
     <p>Intégration de vos contenus </p>
	 <p>Personalisation d'interface</p>
     <p>Livraison, installation et formation la veille</p>
     <p>Support et infogérance pendant l'évenement</p>
     <p>Démontage le dernier jour</p>
    </li>
    <li>
     <h4>A l'achat</h4>
     <p>Acquisition d'une ou pluieurs tables</p>
     <p>Livraison et installation</p>
     <p>Assurance tous risques valable 1 an en France</p>
     <p>Garantie 2 ans pièces et main d'oeuvre</p>
	 <p>Contrat de maintenance annuel</p>

    </li>
   </ul>
  </div>  
  -->
     <!-- pricing option3 -->
	 
	 
	  <!-- process -->
	  <!--
  <div class="process">
   <ul>
    <li>
     <h3><span>Etape 1</span> Recherche</h3>
     <p>Avec des partenaires technologiques comme l'Univerisité de Technologie de Compiègne (UTC), et ses laboratoirs de recherches, nous sommes en mesure de mettre en place des démarches de R&D nécessaire à la réussite de vos projets.</p>
    </li>
    <li>
     <h3><span>Step 2</span> Conception</h3>
     <p>Du materiel au logiciel en passant par l'ergonomie, VirtualSensitive prend en charge l'ensemble des étapes de votre cahier des charges. Une idée? une envie? Soumetez nous votre projet, nous l'étudierons avec attention !</p>
    </li>
    <li>
     <h3><span>Step 3</span> Connexions</h3>
     <p>Parfaitement compatible avec les offres actuel de cloud computing, nos mobiliers deviennent des terminaux d'accès à vos réseaux de données dématerialisées. Enrichissez vos bases de prospects CRM, connectez votre point de vents, offrez un accueil personalisé à vos clients !</p>
    </li>
    <li>
     <h3><span>Step 4</span> Deliver</h3>
     <p>table tactile multitouch</p>
    </li>
   </ul>
  </div>
  -->
  <!-- /process --> 

  </div>

</div>



<?php include_once( dirname( __FILE__ ) . '/includes/footer.php' ); ?>
