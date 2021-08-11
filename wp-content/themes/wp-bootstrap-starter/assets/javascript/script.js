jQuery(function($) {

    // Add custom script here. Please backup the file before editing/modifying. Thanks
    
    // Run the script once the document is ready
    $(document).ready(function() {

    	//Replace bootstrap toggle menu to hover menu
		$(window).on("load resize", function() {
		  $('.navbar-collapse .dropdown-toggle').removeAttr('data-toggle');
		});

        /*** Nav tabs additional script ***/
        $('.nav .nav-item:first-child a').tab('show');
        // store the currently selected tab in the hash value
        $(".nav a").on("shown.bs.tab", function(e) {
         var id = $(e.target).attr("href").substr(1);
         window.location.hash = id;
        });

        // on load of the page: switch to the currently selected tab
        var hash = window.location.hash;
        $('.nav a[href="' + hash + '"]').tab('show');
        /*** End of Nav tabs additional script ***/

    });
    
    // Run the script once the window finishes loading
    $(window).load(function(){
        
    });


});
