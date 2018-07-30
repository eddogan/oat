	let teamAJAXCatMobileRunning = false;
    $('body').on('click', '.dropdown-team-cat', function(){	
	    
	    const isMobile = $(window).width() < 1024 ? 'mobile' : false;
	    
	    teamAJAXCatMobileRunning = true;
	    const cat_id = parseInt( $(this).attr('data-id') );
	    const cat_name = $(this).text();     
	    $.post(
		    ajax_object.ajaxurl,
		    {
			    action: 'getteamcat',
				cat_id: cat_id,
				cat_name: cat_name,
				$mobile: isMobile
		    },
		    function(data){
			    $('.team-container').html(data);
			    $('.team-type-btn').text(cat_name);
			    teamAJAXCatRunning = false;
		    }
	    );
    });