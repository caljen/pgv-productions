	<script src="../assets/js/jquery-1.11.3.min.js"></script> 
	<script src="../assets/js/foundation.min.js"></script>
    <script src="../assets/js/jquery.tooltipster.js"></script>
    <script src="../assets/js/jquery.easing.1.3.js"></script>
    <script src="../assets/js/jquery.scrollUp.min.js"></script> 
    <script src="../assets/js/pgvCtrl.js"></script>     
    
	<script type="text/javascript">
    <!--
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-29273139-1']);
      _gaq.push(['_trackPageview']);
    
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
      -->
    </script>

	<script>
		$(document).foundation();
              
		$(document).ready(function() {
    	
		//initialize the tooltipser plugin
		$('.tooltip1').tooltipster();
		
		//initialize the scroll to top plugin
		$(function () {
		  $.scrollUp({
			scrollName: 'scrollUp', // Element ID
			topDistance: '100', // Distance from top before showing element (px)
			topSpeed: 300, // Speed back to top (ms)
			animation: 'fade', // Fade, slide, none
			animationInSpeed: 200, // Animation in speed (ms)
			animationOutSpeed: 200, // Animation out speed (ms)
			scrollText: 'Scroll to top', // Text for element
			activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
		  });
		});
		
		//start WOW
        new WOW().init();
		
		//Scrolling to sections in the music room
		var win = $(window),
    doc = $(document),
    divNum=0;
    maxDivs=12;

win.scroll(function(){
    
/*  
    if( win.scrollTop() >= doc.height() - win.height()  - 10) 
    
    {
    
    //Add something at the end of the page
    while(divNum<=maxDivs)
    {
        divNum++; 
        //jQuery("#LoginButton").click(); //trigger a button click
        jQuery('#page_section'+divNum).show(); //trigger a button click
        //alert(jQuery('#page_section'+divNum));      
    }
    
    if(divNum==maxDivs)
    {
        alert("maxed out!");
    }
*/
/*
jQuery.ajax({
  url: "va14_faq.html",
  context: document.body
}).done(function() {
  
jQuery( '#load-more:last' ).text( "left: " + position.left + ", top: " + position.top );
}); 

*/
//} 
    
    if(win.scrollTop() > 300 ) {        
                
    }   
    if(win.scrollTop() < 300 ) {    
    }
});

$(".road-construction").click(function (){
	$('html, body').animate({
		scrollTop: $("#road-construction").offset().top
     }, 500);
});

$(".cali-free-styles").click(function (){
	$('html, body').animate({
		scrollTop: $("#cali-free-styles").offset().top
     }, 500);
});

$(".reason-and-emotion").click(function (){
	$('html, body').animate({
		scrollTop: $("#reason-and-emotion").offset().top
     }, 500);
});

/*Start email obfuscation*/
	$(".email").defuscate(); 
/*End email obfuscation*/

});//end on ready


/*Start email obfuscation function*/
	$.fn.defuscate = function() {
   return this.each(function(){
     var email = String($(this).html()).replace(/\s*\(.+\)\s*/, "@");
     $(this).before('<a href="mailto:' + email + '" class="email tooltip1" >' + email + "</a>").remove();
   });
}; 
/*End email obfuscation function*/


function scrollWindow(id)//takes and id to get it's position, then scroll to that id's vertical position, with easing
  {

var div = jQuery( '#' + id );
var position = div.position();

$('html, body').animate({
		scrollTop:[position.top]
     }, "500");
}

</script>
    
