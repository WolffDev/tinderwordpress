jQuery(document).ready(function(){
	jQuery('.collapsible').on('click', function() {
		jQuery(this).collapsible({
			onOpen: function(el) { 
				el[0].querySelector(".collapsible-header").style.color = "rgb(255, 217, 98)";
				el[0].querySelector(".material-icons").className = "material-icons ani-down";
			
			},
			onClose: function(el) {
				el[0].querySelector(".collapsible-header").style.color = "white";
				el[0].querySelector(".material-icons").className = "material-icons ani-back";
			}
		});
	});
});