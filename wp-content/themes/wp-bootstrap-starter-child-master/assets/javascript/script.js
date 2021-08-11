jQuery(function($) {

    // Add custom script here. Please backup the file before editing/modifying. Thanks
    
    // Run the script once the document is ready
    $(document).ready(function() {

    	//Replace bootstrap toggle menu to hover menu
		$(window).on("load resize", function() {
		  $('.navbar-collapse .dropdown-toggle').removeAttr('data-toggle');
		});

    });

    // Run the script once the window finishes loading
    $(window).load(function(){
        
    });


});
