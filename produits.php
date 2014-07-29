<?php include_once( dirname( __FILE__ ) . '/includes/header.php' ); ?>

<script>
      var flashvars = {};
      flashvars.cssSource = "scripts/piecemaker/piecemaker.css";
      flashvars.xmlSource = "scripts/piecemaker/piecemaker.xml";
		
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
 <div class="fallback"><img src="scripts/piecemaker/contents/slide_table_tactile_1.png" alt="VirtualSensitive designer de tables tactiles" /></div>
 <div id="piecemaker">
  <!--<p>Put your alternative Non Flash content here.</p>-->
 </div>
 </div>
</div>
<!-- /piecemaker slider -->
 <!-- text bar2 -->
 <div class="text_bar">
  <div class="wraper">
   <h2>Connec'table, la table ronde MultiTouch par VirtualSensitive <span>Un produit unique, qui vous plonge au coeur d'un univers interactif aux possibilités infinies!</span> </h2>
	<div class="widget">
	<h3 style="margin-top: -15px;">Télécharger la brochure Connec'table</h3>
	<a class="buy btn_l" href="http://www.virtualsensitive.com/brochure.pdf">Brochure pdf</a>
	</div>
  </div>
 </div>
 <!-- /text bar2 -->
 
  <div class="wraper" style="position: relative; width: 1000px; height: 650px; overflow: hidden; clear: both;">
  	<img style="position: absolute; z-index: 10;" src="images/filigrane_table_tactile.png" width="1000" height="790" alt="table ronde tactile filigrane" />
  	
	<div id="video1" style="width: 40%; position: absolute; z-index: 100; top: 180px; left: 50px;">
		<h1 style="text-align: center; width: 100%;">Démonstration en vidéo</h1>
		</br>
		<object width="420" height="315"><param name="movie" value="http://www.youtube.com/v/f1fl1QdMrRA?version=3&amp;hl=fr_FR&amp;rel=0"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/f1fl1QdMrRA?version=3&amp;hl=fr_FR&amp;rel=0" type="application/x-shockwave-flash" width="420" height="315" allowscriptaccess="always" allowfullscreen="true"></embed></object>		
		
	</div>

	<div id="video2" style="width: 40%; position: absolute; z-index: 100; top: 180px; right: 50px;">
		<h1 style="text-align: center; width: 100%;">Fabrication en vidéo</h1>
		</br>
		<object width="420" height="315"><param name="movie" value="http://www.youtube.com/v/IdOvhOKq6M4?version=3&amp;hl=fr_FR&amp;rel=0"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/IdOvhOKq6M4?version=3&amp;hl=fr_FR&amp;rel=0" type="application/x-shockwave-flash" width="420" height="315" allowscriptaccess="always" allowfullscreen="true"></embed></object>
		
	</div>
  </div>

  
  
    <!-- text bar2 -->
 <div id="applis" class="text_bar2">
  <div class="wraper">
   <h2>Notre force: des logiciels réellement adaptés à un usage collectif <span>Nous mettons au point des outils logiciels performants et ergonomiques, qui tirent réellement parti de la technologie MultiTouch.</span><span>Jujez par vous même!</span> </h2>
  </div>
 </div>
 <!-- /text bar2 -->
 
  <div class="wraper"> 
  <!-- services option -->
  <div  class="features2_block services_option">
   <div id="h_tabs" class="c_after">
   <ul class="tab_select left_list">
    <li class="design">
     <a class="tlink" href="#htab-1">&nbsp;</a>
     <a class="circle_link">&nbsp;</a>
     <h4>Maquette 3D</h4>
     <p><span>Donnez vie à vos produits</span></p>
    </li>
    <li class="flexible">
     <a class="tlink" href="#htab-2">&nbsp;</a>
     <a class="circle_link">&nbsp;</a>
     <h4>Maps</h4>
     <p><span>Orientez, informez</span></p>
    </li>
    <li class="fonts">
     <a class="tlink" href="#htab-3">&nbsp;</a>
     <a class="circle_link">&nbsp;</a>
     <h4>Explorateur de fichiers</h4>
     <p><span>Parcourez vos dossiers</span></p>
    </li>
    <li class="ultra">
     <a class="tlink" href="#htab-4">&nbsp;</a>
     <a class="circle_link">&nbsp;</a>
     <h4>Browser Web</h4>
     <p><span>Surfez à plusieurs</span></p>
    </li>
    <li class="support">
     <a class="tlink" href="#htab-5">&nbsp;</a>
     <a class="circle_link">&nbsp;</a>
     <h4>Présentations</h4>
     <p><span>Slides pdf, ppt...</span></p>
    </li>
	<!--
    <li class="easy">
     <a class="tlink" href="#htab-6">&nbsp;</a>
     <a class="circle_link">&nbsp;</a>
     <h4>Multimédia</h4>
     <p><span>Vidéos, photos, musiques...</span></p>
    </li>
	-->
    <li class="color">
     <a class="tlink" href="#htab-7">&nbsp;</a>
     <a class="circle_link">&nbsp;</a>
     <h4>Jeux</h4>
     <p><span>Ludique, divertissant, amusant</span></p>
    </li>
	<li class="updates">
     <a class="tlink" href="#htab-8">&nbsp;</a>
     <a class="circle_link">&nbsp;</a>
     <h4>Outil de dessin</h4>
     <p><span>Annotez vos documents</span></p>
    </li>

   </ul>
   <div id="htab-1" class="right_desc">
    <h2>Quoi de mieux pour présenter une maquette 3D qu’une table tactile ?</h2>
    <p><em><strong>C'est un outil de communication qui donne du volume et une dimension réelle à vos maquettes numériques. Manipulez, agrandissez, pivotez, modifiez à l’infini. Le rendu, de grande qualité, améliore la compréhension et l'appropriation de vos produits techniques.</strong></em></p>
	<object width="100%" height="315"><param name="movie" value="http://www.youtube.com/v/rBmCGDkWREQ?version=3&amp;hl=fr_FR&amp;rel=0"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/rBmCGDkWREQ?version=3&amp;hl=fr_FR&amp;rel=0" type="application/x-shockwave-flash" width="100%" height="315" allowscriptaccess="always" allowfullscreen="true"></embed></object>
   </div>
   <div id="htab-2" class="right_desc">
    <h2>Une volonté de se situer rapidement et sans efforts… </h2>
	<p><em><strong>Maps met à votre disposition un planisphère en vue satellite, où il est possible de zoomer jusqu’à clairement voir le positionnement des villes, des autoroutes, départementales, nationales et de tout autres points d'intérêts. Orientez également en indoor avec l'appli RoomMap!</strong></em></p>
	<object width="100%" height="315"><param name="movie" value="http://www.youtube.com/v/d1TbNKuDyc4?hl=fr_FR&amp;version=3&amp;rel=0"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/d1TbNKuDyc4?hl=fr_FR&amp;version=3&amp;rel=0" type="application/x-shockwave-flash" width="100%" height="315" allowscriptaccess="always" allowfullscreen="true"></embed></object>
   </div>
   <div id="htab-3" class="right_desc">
    <h2>Du bout des doigts, accédez à tous vos fichiers.</h2>
	<p><em><strong>Explorez le contenu de votre clé USB, naviguez dans les documents présents sur la table. Notre méthode de navigation, ludique et simple à prendre en main, vous garantit une recherche en toute simplicité, pour une efficacité accrue!</strong></em></p>
	<object width="100%" height="315"><param name="movie" value="http://www.youtube.com/v/-VTG0O2o_90?hl=fr_FR&amp;version=3&amp;rel=0"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/-VTG0O2o_90?hl=fr_FR&amp;version=3&amp;rel=0" type="application/x-shockwave-flash" width="100%" height="315" allowscriptaccess="always" allowfullscreen="true"></embed></object>
   </div>
   <div id="htab-4" class="right_desc">
    <h2>Connec'table réinvente la navigation internet!</h2>
    <p><em><strong>Nous vous offrons en exclusivité la possibilité de surfer à plusieurs et en simultané. Manipulez vos onglets comme des photos et accédez à vos pages web favorites. Laissez vos prospects vous montrer leurs réalisations !</strong></em></p>
   	<object width="100%" height="315"><param name="movie" value="http://www.youtube.com/v/MUVtqWpO4nU?hl=fr_FR&amp;version=3&amp;rel=0"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/MUVtqWpO4nU?hl=fr_FR&amp;version=3&amp;rel=0" type="application/x-shockwave-flash" width="100%" height="315" allowscriptaccess="always" allowfullscreen="true"></embed></object>
   </div>
   <div id="htab-5" class="right_desc">
    <h2>Donnez vie à vos présentations!</h2>
    <p><em><strong>Impressionnez par votre maîtrise des nouvelles technologies numériques. Organisez vos documents par thématiques, rendez les manipulables facilement et par tout le monde. Vous pouvez les agrandir, les déplacer, les orienter à volonté. Vous pouvez même les envoyer en pièce jointe d'un e-mail!</strong></em></p>
   	<object width="100%" height="315"><param name="movie" value="http://www.youtube.com/v/W9tCrXqoI3g?version=3&amp;hl=fr_FR&amp;rel=0"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/W9tCrXqoI3g?version=3&amp;hl=fr_FR&amp;rel=0" type="application/x-shockwave-flash" width="100%" height="315" allowscriptaccess="always" allowfullscreen="true"></embed></object>
   </div>
   <!--
   <div id="htab-6" class="right_desc">
    <p><em><strong>Connec’table est capable d’afficher des documents numériques de tous formats. Visionnez des vidéos, des  photos à plusieurs de manière interactive et ludique ! Grâce au tactile tout est plus facile.</strong></em></p>
   	<iframe width="420" height="315" src="http://www.youtube.com/embed/IdOvhOKq6M4" frameborder="0" allowfullscreen></iframe>
   </div>
   -->
   <div id="htab-7" class="right_desc">
    <h2>Oserez-vous défier les autres joueurs ?!</h2>
	<p><em><strong>Des jeux amusants qui vous permettront de divertir en instaurant un climat convivial. Ils vous guideront vers une bonne prise en main de votre nouvel outil MultiTouch. Connec’table, génératrice d’attractivité par la bonne humeur qui se dégage des participants.</strong></em></p>
   <object width="100%" height="315"><param name="movie" value="http://www.youtube.com/v/gKN-HuNV0dM?version=3&amp;hl=fr_FR&amp;rel=0"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/gKN-HuNV0dM?version=3&amp;hl=fr_FR&amp;rel=0" type="application/x-shockwave-flash" width="100%" height="315" allowscriptaccess="always" allowfullscreen="true"></embed></object>
   </div>
   <div id="htab-8" class="right_desc">
    <h2>Vos doigts sont des stylos!</h2>
    <p><em><strong>Le logiciel de dessin de Connec’table vous sera utile pour annoter vos documents et réaliser des schémas de façon collaborative. Jouez avec les couleurs, modifiez les styles, faîtes parler votre créativité !</strong></em></p>
    <object width="100%" height="315"><param name="movie" value="http://www.youtube.com/v/muPt_Sd8aEw?hl=fr_FR&amp;version=3&amp;rel=0"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/muPt_Sd8aEw?hl=fr_FR&amp;version=3&amp;rel=0" type="application/x-shockwave-flash" width="100%" height="315" allowscriptaccess="always" allowfullscreen="true"></embed></object>
   </div>
   </div>
  </div>
  <!-- /services option -->
 </div>
  

<?php include_once( dirname( __FILE__ ) . '/includes/footer.php' ); ?>
