// JavaScript Document
if (window.jQuery) { 
var $j = jQuery.noConflict();	


$j('.linkable').click(function(){
	window.location=$j(this).find("a").attr("href"); 
	return false;
});

$j('input[name="vuelo"]').click(function(){
	if($j(this).attr("value")=="SI"){
		$j("#no_tiene_vuelo").hide();
		$j("#tiene_vuelo").show();
	}
	else {
		$j("#tiene_vuelo").hide();
		$j("#no_tiene_vuelo").show();
	}
});


$j('a.smooth').click(function(){ 
    var $link = $j(this);  
    var anchor  = $link.attr('href');  
    $j('html, body').stop().animate({  
        scrollTop: $j(anchor).offset().top  
    }, 1000);  
});  





}