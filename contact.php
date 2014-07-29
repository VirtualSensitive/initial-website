<?php include_once( dirname( __FILE__ ) . '/includes/header.php' ); ?>

<?php 

	$formSent = false;
	$errors = false;
	
	$name = "";
	$mail = "";
	$message = "";

	if( isset( $_POST[ "form" ] ) ) {
		try {
			if( !isset( $_POST[ "name" ] ) || empty( $_POST[ "name" ] ) ) {
				throw new Exception( "Merci de préciser votre nom." );
			}
			
			$name = $_POST[ "name" ];
			
			if( !isset( $_POST[ "mail" ] ) || empty( $_POST[ "mail" ] ) ) {
				throw new Exception( "Merci de préciser votre email." );
			}
			
			$mail = $_POST[ "mail" ];
			
			$messageContent = $_POST[ "message" ];
			
			$mailFrom = "contact@virtualsensitive.com";
			$mailTo = "contact@virtualsensitive.com";
			
			$subject = "Nouveau message depuis le site web";
			
			$message = "De : " . $name . "\n";
			$message .= $mail . "\n";
			$message .= $messageContent;
			
			mail( $mailTo, $subject, $message );
			
			$formSent = true;
			
		} catch( Exception $e ) {
			$errors = $e->getMessage();
		}	
	}	

?>

<script>
$(function(){
	$('.clients_slider').bxSlider({
		auto: false,
		controls : false,
		mode: 'fade',
		pager: true
	});	
	$('.recent_slider').bxSlider({
		auto: false,
		displaySlideQty: 1,
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

 <!-- top_title -->
 <div class="top_title">
  <div class="wraper">
   <h2>Envie d'une démo ?<span>Nous vous accueillons sur rendez-vous dans notre Show-Room, à moins d'une heure de Paris !</span></h2>
  </div>
 </div>
 <!-- /top_title -->
 
 <div class="wraper">
 	<div id="contactForm">
 		<?php if( $formSent == false ): ?>
 			<?php if( $errors ): ?>
 				<p><?php echo $errors; ?></p>
 			<?php endif; ?>
 		<?php else: ?>
 			<p>Votre message a bien été envoyé.</p>
 		<?php endif; ?>
 	</div>
 	<!-- End #contactForm -->
 	
 	<script type="text/javascript">
		$( function() {
			$( "#contactFormTextarea" ).focus( function() {
				if( $( this ).val() == "Entrez ici votre message..." ) {
					$( this ).val( "" );
				}
			});
		});
 	</script>
 
  <!-- contact_us -->
  <div class="contact_us">
<!--   <div class="bwWrapper"><img src="images/contact_us/contact_us.png" width="640" height="265" alt="" /></div>-->
   <div class="map_wrap"><iframe width="640" height="280" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.fr/maps?f=q&amp;source=s_q&amp;hl=fr&amp;geocode=&amp;q=PARC+TECHNOLOGIQUE+DES+RIVES+DE+L'OISE,+Venette&amp;aq=0&amp;oq=parc+te&amp;sll=49.4006,2.854858&amp;sspn=0.117073,0.338173&amp;t=h&amp;ie=UTF8&amp;hq=PARC+TECHNOLOGIQUE+DES+RIVES+DE+L'OISE,&amp;hnear=Venette,+Oise,+Picardie&amp;ll=49.406365,2.793681&amp;spn=0.029263,0.084543&amp;z=14&amp;iwloc=A&amp;cid=10600398691495207521&amp;output=embed"></iframe><br /><small><a href="https://maps.google.fr/maps?f=q&amp;source=embed&amp;hl=fr&amp;geocode=&amp;q=PARC+TECHNOLOGIQUE+DES+RIVES+DE+L'OISE,+Venette&amp;aq=0&amp;oq=parc+te&amp;sll=49.4006,2.854858&amp;sspn=0.117073,0.338173&amp;t=h&amp;ie=UTF8&amp;hq=PARC+TECHNOLOGIQUE+DES+RIVES+DE+L'OISE,&amp;hnear=Venette,+Oise,+Picardie&amp;ll=49.406365,2.793681&amp;spn=0.029263,0.084543&amp;z=14&amp;iwloc=A&amp;cid=10600398691495207521" style="color:#0000FF;text-align:left">Agrandir le plan</a></small></div>
   <ul>
    <li>Adresse :<br /><br /><br /><br />Téléphone:<br />Fax:</br>Mail:</li>
    <li><strong>VirtualSensitive<br />Parc technologique des rives de l'Oise<br />Rue les rives de l'Oise<br />60280 VENETTE<br />0344907990<br />0344907878</br>contact@virtualsensitive.com</strong></li>
   </ul> 
   <!--
   <h4>Laissez nous votre message !</h4>
   <form action="#" method="post">
    <p><label for="namet">Nom</label><br /><input id="namet" type="text" /></p>
    <p><label for="mailt">E-mail</label><br /><input id="mailt" type="text" /></p>
    <p><label for="website">Société</label><br /><input id="website" type="text" /></p>
    <p><label for="message">Message</label><br /><textarea id="message"></textarea></p>
   <p><input class="btn_m" type="submit" value="Envoyer" /></p>
   </form>
   -->
   
    <h4>Un commentaire, un message, une idée de projet, vous avez la parole ! </h4>
   	<form action="#" method="post">
   		<label for="name" >Votre nom : </label>
 		<input id="namet" value="<?php echo $name; ?>" type="text" name="name" /> <br />
 			
 		<label for="mail">Votre mail : </label>
 		<input id="mailt" value="<?php echo $mail; ?>" type="text" name="mail" /> <br />
 		
 		<textarea id="contactFormTextarea" style="margin-top: 20px;" name="message">Entrez ici votre message...</textarea>	
 			
 		<input type="hidden" name="form" />
    	<p><input class="btn_m" type="submit" value="Envoyer" /></p>
   	</form>
   
  </div>
  <!-- /contact_us -->
  <!-- sidebar -->
  <div class="sidebar">
  
   <!-- our clients -->
   <div class="our_clients">
    <h4>Nos clients nous aiment !</h4>
     <ul class="clients_slider">
	  <li>
	   <blockquote>
	    <p>"Connec'table a permis de promouvoir l'image innovante de Nicomatic, tout en offrant un espace d'accueil sur le stand particulièrement ludique et convivial. Nous sommes fiers d'avoir été les premiers à l'utiliser sur Electronica."</p>
	    <p> S. Charbonnel - responsable marketing opérationnel</p>
		<p>NICOMATIC</p>
	   </blockquote>
	  </li>	
	  <li>
	   <blockquote>
		<p>Nous avons mis deux exemplaires de la nouvelle Connec'table à la disposition des étudiants ingénieurs de l'UTC sur le salon Comutec 2012. Les tables tactiles leur ont permis d'effectuer des recherches par critères, et de trouver rapidement l'entreprise la plus adaptée à leur besoin."</p>
	    <p>R. Ghesquiere - Président</p>
		<p>COMUTEC</p>
	   </blockquote>
	  </li>
	 </ul>   
   </div>
   <!-- /our clients -->
   
   <!-- recent work -->
   <!--
   <div class="recent_work">
    <h4>Recent Work Widget</h4>
    <ul class="recent_slider">
     <li><div class="bwWrapper"><a href="#"><img src="images/blog/blog_23.png" width="59" height="54" alt="" /></a></div><div class="bwWrapper"><a href="#"><img src="images/blog/blog_24.png" width="59" height="54" alt="" /></a></div><div class="bwWrapper"><a href="#"><img src="images/blog/blog_25.png" width="59" height="54" alt="" /></a></div><div class="bwWrapper"><a href="#"><img src="images/blog/blog_26.png" width="59" height="54" alt="" /></a></div><div class="bwWrapper"><a href="#"><img src="images/blog/blog_27.png" width="59" height="54" alt="" /></a></div><div class="bwWrapper"><a href="#"><img src="images/blog/blog_28.png" width="59" height="54" alt="" /></a></div></li>
    </ul>
   </div>
   -->
   <!-- /recent work -->
  
  </div>
  <!-- /sidebar -->
 </div>
</div>

<?php include_once( dirname( __FILE__ ) . '/includes/footer.php' ); ?>
