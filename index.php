<!DOCTYPE>
 <html>
   
 <head>
  
  <title> jquery Title </title>
  <!--Beginn of Bootsrap bibliothek  06.01.2016 -->
   <!--<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>-->
  <!-- ende of Bootsrap bibliothek-->
  
   <!-- include jQuery sample functions-->
  <link href="lib/css/style.css" rel="stylesheet" type="text/css" media="screen"/>
   <!-- include jQuery -->
  <script type="text/javascript" src="lib/js/jquery-1.11.2.min.js"></script>
  <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>-->
  
  <!-- include jQuery sample functions-->
  <script type="text/javascript" src="lib/js/JqueryFunctions.js"></script>
 
  <!-- include Cycle -->
  <script src="http://malsup.github.io/jquery.cycle.all.js"></script>
			 
  
 </head>
 
 
    <!--[if IE 6 ]><body class="ie6 old_ie"><![endif]-->
    <!--[if IE 7 ]><body class="ie7 old_ie"><![endif]-->
    <!--[if IE 8 ]><body class="ie8"><![endif]-->
    <!--[if IE 9 ]><body class="ie9"><![endif]-->
    <!--[if !IE]><!--><body><!--<![endif]-->
	
     <h2>Demo 1 - Menucool Image Slider</h2>
	 
	 <script type="text/javascript" > 
						$(document).ready(function(){ 
						
						
						    // $("#traitement").hide();
							 
						$("#envoyer").click(function(){ 
						
						
						
						/*var value =$.trim($("#nom").val());
						//var value2 =$.trim($("#email").val());

							if( value.length>0 && value1.length>0 && value2.length>0 )
							{
							  $("#traitement").show(); 
							}*/
							
							});	

						});

			</script> 
	 
	 <script>
				         $("document").ready(function(){
						
						    $("#slider").cycle({ 
                             fx:  'scrollHorz',
                             after:   onAfter,	// calling the function	'onAfter'					 
                             delay: -15000
							});
						 });
						 
				</script> 
				
	 <script>
				         /*$(function(){
						    $("#envoyer").click(function(){ 
							
							$('#form input').blur(function(){
										if( $(this).val().length === 0 ) {
											$(this).parents('div').addClass('error');
										}
									});
                             
							});
						 });*/
						 
				</script>	
				   
				
				 
				<div id="galerie">
				<div id= "slider">
			        <img src="images/image-slider-1.jpg" alt="Welcome to Menucool.com" /> 
	               <img src="images/image-slider-2.jpg" alt="The best way to insert Slider in your site" />
	                <img src="images/image-slider-3.jpg" alt="Pure Javascript. No jQuery. No flash." />
	                <img src="images/image-slider-4.jpg" alt="Pure" />
		            <img src="images/image-slider-5.jpg" alt="Javascriflash." /> 		  
			  </div>
		  
	       <h3> <span> </span></h3>
			 
				  
			</div> 
			
			<p id= "ref"> </p>
			
			
			
<!-- Debut du Traitement-->

     <!-- Debut ajout 24.02 -->
	 
	 
	 
	 
	 
	 
	 
	 <!-- Fin ajout -->
				
	<div id = "traitement">		
		
		<div >
		
		  
		
		  <?php
		  
		   //require 'help.php';
		   
			/* 
			 
			 //echo $url;
			 
			 //Send Request to Ressource
			 
			 $client = curl_init("http://www.webservicex.com/globalweather.asmx?wsdl");
			 
			 curl_setopt($client,CURLOPT_RETURNTRANSFER,1);
			 //Get Response from Ressource
			 
			 $response = curl_exec($client);
			 
			 //Decode Response
			 
			 $result = json_decode($response);
			 
			 echo $response;
			 
			 //Output the Response */
			 
			 //#######################################################
			 
			 /* $client = curl_init("api.openweathermap.org/data/2.5/weather?q=London&appid=f7eb24d8e0b421bc27b99cd9edec88a8");
			 
			 curl_setopt($client,CURLOPT_RETURNTRANSFER,1);
			 //Get Response from Ressource
			 
			 $response = curl_exec($client);
			 
			  
			 echo '<pre>';
			 //echo $response;
			 echo gettype($response);
			 
			  $pieces = explode(",", $response);
			 
			  echo gettype($pieces);
			   echo count($pieces);
			   
			   for($i=0;$i<count($pieces);$i++){
			   
			   echo $pieces[$i].'<br />';
			   } */
			 
			 //#######################################################
			 
			 
			
			 
			/*	$url = "http://www.webservicex.com/globalweather.asmx?wsdl";
				
				
				
				$client = new SoapClient($url, array('trace' => true));
				
				$fcs = $client->__getFunctions();
				
				//debug($fcs);
				
				
				
				$res = $client->GetWeather(array('CityName' => 'Berlin', 'CountryName' => 'Germany'));
							
               #var_dump($res);
			   
			
				
				 #print_r ($res);
				 
				#$result = var_dump($res);
				
				  # echo "<p><b>".$result."</b></p>";
				   
				 $obj = new ObjectAndXML();
				
				
				
			 $recordsXML = $obj->objToXML($res);
			 
			 #echo gettype($recordsXML);
			 
			# echo $recordsXML;
			 
			 #$recordsXML = var_dump($recordsXML);
			 
			
			 
			 $pieces = explode("\n", $recordsXML);
			 
		 
		  
				echo '<pre>'; */
				
				
			
				
				
				
				
				// echo'<br/>'.$pieces[3];
				 
				 #/https\:\/\/dailytest02.de\/chargebacks\/([0-9a-f]{40})\/pay/
				 
				// $str = $pieces[3]; # <Location>Yaounde, Cameroon (FKYS) 03-50N 011-31E 760M</Location>
				 
				  #$str =  <Location>Yaounde, Cameroon (FKYS) 03-50N 011-31E 760M</Location>;
				 
				# if (preg_match("<([A-Za-z])>",$pieces[3]) || preg_match("</([A-Za-z])>",$pieces[3])){
				 
				/* $replacement = "\\1&nbsp\\2"; #&nbsp=Erzwungendes Leerzeichen
				 
				 $pattern = "(.*)&lt(.*)(.*)/([A-Za-z])(.*)(.*)&gt(.*)" ;
				 
				$str =  ereg_replace($pattern, $replacement, $str);
			
			 echo'<br/>'.$str;
				 
				$valore= ereg_replace("&lt(.Location)&gt","&nbsp",$str); 
				 
				  echo'<br/>'.$valore; */
				  #$pattern = "(.*)&lt(.*)(.*)([A-Za-z])(.*)(.*)&gt(.*)"; 
				 
			
				 
				 #echo'<br/>'.$str;
				 
					#}
						
						//echo'<br/>';
			
							 
							
 
		

				
				 #echo gettype($pieces);
					
				#$value = count($pieces);
			 
			
				   /*  echo gettype($pieces[3]);
					
					  echo'<br/>'.str_replace("/<\Location\/>/","all",$pieces[3]);
					   echo'<br/>'.$pieces[4];
					    echo'<br/>'.$pieces[5];
						 echo'<br/>'.$pieces[6];
						  echo'<br/>'.$pieces[7];
						   echo'<br/>'.$pieces[8];
						    echo'<br/>'.$pieces[9];
							 echo'<br/>'.$pieces[10];
							  echo'<br/>'.$pieces[11];
							   echo'<br/>'.$pieces[12]; */
					 
				
			 
			 #echo $value = count($pieces);
				
				
				#$recordsXML->CurrentWeather->Location;
                 #echo '<br/>'.$recordsXML->CurrentWeather->Time;	
				#echo '<br/>'."hallloo oo oo";
                #echo '<br/>'."hallloo oo oo";	
                # echo '<br/>'."hallloo oo oo";	
				#echo '<br/>'."hallloo oo oo";
               # echo '<br/>'."hallloo oo oo";				
				 
				
  ?>

 
		 
							 
	    </div>
		
		
		
		
			<?php
			
					require 'help.php';
					  
						   function test_input($data) {
						   $data = trim($data);
						   $data = stripslashes($data);
						   $data = htmlspecialchars($data);
						   return $data;
						} // End of test_input
						
						  $ErrorMsges = array("","","");
						  $stringErr = $ErrMail ="";
						
						
						function test_input_two($var){
						global $stringErr,$ErrorMsges;
						 for($x = 0; $x < count($var); $x++) {
						if($x!=2){				
					$stringErr = empty($var[$x]) ? "Field is required": "" ;	
					 
					//$stringErr = empty($var[$x]) ? "Field is required" : "" ;	
					if(empty($stringErr))
					{
						$stringErr = (!preg_match("/^[a-zA-Z ]*$/",$var[$x]))? "Only letters and white space allowed" : "" ;
					}                     
						$ErrorMsges[$x]= $stringErr;				 
						}else{
						
					    $ErrMail= empty($var[$x]) ? "Field is required" : "";
						
						if(empty($ErrMail)){
						$ErrMail =(!filter_var($var[$x], FILTER_VALIDATE_EMAIL))? "Invalid email format" : "" ;
						}
						$ErrorMsges[$x]= $ErrMail;  
						
						}
						
						//$ErrorMsges[$x]= $stringErr;
					
						}
						
							for($x = 0; $x < count($ErrorMsges); $x++) {
							
							//echo $ErrorMsges[$x];
							
							if($ErrorMsges[$x] != "") return false;
							
							}
						
						return true;
						}
			
			    $trt = array('nom','prenom','email','comment','newsletter');
				          
						  $nom = $prenom = $email = $comment = '';
						  // define variables and set to empty values
                         //$nomErr = $prenomErr = $emailErr = $commentErr = "";

           if ($_SERVER["REQUEST_METHOD"] == "POST"){ // check si le click sur le button "envoyer a ete effectue"
		   
					$nom = test_input($_POST[$trt[0]]);
					 $prenom = test_input($_POST[$trt[1]]);
					  $email = test_input($_POST[$trt[2]]);
					  $comment = test_input($_POST[$trt[3]]);
					  $newsletter =(!isset($_POST[$trt[4]])) ? false : true; // false si la variable n est pas definie  

					 
					  $values = array($nom,$prenom,$email);
					  
               if( test_input_two($values)){
				
				    echo 'Je suis dans le 2eme block';
					  
				   try{
                          // $bdd = new PDO('mysql:host=localhost;dbname=edmond','root',''); //connection au serveur mySQL
						   $bdd = new PDO('mysql:host=localhost;dbname=test','root','test'); //connection au serveur mySQL
				      } catch (Exception $e){
					  
                          die('Erreur : ' . $e->getMessage()); // en cas d erreur on arrete tout
						  
					  }
                                      
                        $req = $bdd->prepare('INSERT INTO T_MESSAGES(nom,prenom,email,comment,newsletter) VALUES(?,?,?,?,?)');

						 $req->execute(array($nom,$prenom,$email,$comment,$newsletter));
						 
						
					
					
					// echo '<p>'.' Merci Monsieur/Madame '.$nom.' '.$prenom.' pour le message.'.'<br/>'.'Il sera traite dans les brefs delais.'.'</p>'; 
	                    // Dans la DB Spalte newsletter: 1 = true et 0 = false
						
						//Ajout pr boostrat table am 06.01.2016
						
						
								
						
						//Fin de l ajout
						
						
						
	                  if($newsletter ){
					  
					   
					   
		                $mail = new Mail();
						$mail->sendMail($email);
		   
		              }
				
					
					

						 $req->closeCursor(); // Termine le traitement de la requête
						 
					

 
  
			 
			 
			 
			 //echo readDataForwards($bdd);
			 
            				
					
				
				}
					  
					  
		   }	  
						  					
?>

<?php
/*$target_dir = "C:\xampp\uploads";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}*/
?> 

	       
</div>	<!-- Fin du Traitement-->		
			
			
			<!-- action="echo htmlspecialchars($_SERVER["PHP_SELF"]);" => action="index.php" -->
			<!-- The enctype-Attribut specifies which content-type to use when submitting the form-->
<form id ='form' method="post" action = "index.php" enctype="multipart/form-data">			
        			
 <fieldset class="prime">
 
                  <legend> <strong>Contactez nous</strong></legend>	
				   <br />
				   
				   <label for="nom">Nom:<strong><sup>*</sup></strong></label>
				   <input type="text" name="nom" id="nom" class="wrap"  placeholder=" Ex: Kamer" value="<?php  echo $nom;?>" autofocus />
				   <!--<div class="error"><small> This element is required </small></div>-->
				   <div class="error"><small> <?php  echo $ErrorMsges[0];?> </small></div>
				   <br />
				   
				   <label for="prenom">Prenom:<strong><sup>*</sup></strong></label>
				   <input type="text" name="prenom" id="prenom" class="wrap" placeholder=" Douala " value="<?php  echo $prenom;?>" />
				   <div class="error"><small> <?php echo $ErrorMsges[1];?>  </small></div>
				   <br />
				   
				   <label for="email">Email:<strong><sup>*</sup></strong></label>
				   <input type="text" name="email" id="email" value="<?php  echo $email;?>"/>		
                   <div class="error"><small> <?php echo $ErrorMsges[2];?> </small></div>				   
					<br />
					
				  <label for="comment">Votre Message: </label>
                  <textarea name="comment" id="comment" rows="3" cols="22" maxlength="150"></textarea>
                  <br />
				  
				 <label for="comment"> Upload image: </label>
				 <input type="file" name="fileToUpload" id="fileToUpload">
				 <br />
				  
				 <label for="newsletter">Newsletter :</label>
				  <input class="curseur" type="checkbox" name="newsletter" id="newsletter" /> Recevoir
				  <br /> 
				  
                  <input id="envoyer" class="curseur" type="submit" value="Envoyer" />
			    
	</fieldset>		

</form>				
				
  </div><!-- end of content-->
  
  

 </body>
 
 
 
</html>
