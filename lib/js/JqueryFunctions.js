
 /*
   * Lien important m ayant aide dans la realisation de ce script
   * url : http://jquery.malsup.com/cycle/anchor.html
  */
function onAfter() {
	
	var img_src = $(this).attr('src');
  
  switch(img_src){
      case 'images/image-slider-1.jpg': $("span").html("father and daughter")
	  break; 
	  case 'images/image-slider-2.jpg': $("span").html("flying home")
	  break; 
	  case 'images/image-slider-3.jpg': $("span").html("Hospital with Dady") 
	  break; 
	  case 'images/image-slider-4.jpg': $("span").html("father and Scootboy") 
	  break; 
	  case 'images/image-slider-5.jpg': $("span").html("Dady and i") 
	  break; 
     
   }
      
      //$("#ref").html(img_src);   
}
