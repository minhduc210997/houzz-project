$(document).ready(function(){
	"use strict";
	
	var search_bar = $('.span-search');
	$('#search-button').click(function(){
		search_bar.slideToggle();
    });
});

function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

/* Set the width of the side navigation to 0 */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
