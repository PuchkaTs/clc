jQuery(document).ready(function($){
    
    $('#do').cycle(['We develop themes.', 'We climb mountains.', 'We\'ll be back with a new site soon.'], {
        delay: 5000,
        transitionDuration: 500,
        transitionEasing: 'swing'
    });

    var body = $('body');
    
	$('.twitter a').hover(
    	function() { $(body).addClass('twitter'); }, 
        function() { $(body).removeClass('twitter'); }
    );
    $('.dribbble a').hover(
    	function() { $(body).addClass('dribbble'); }, 
        function() { $(body).removeClass('dribbble'); }
    );
    $('.github a').hover(
    	function() { $(body).addClass('github'); }, 
        function() { $(body).removeClass('github'); }
    );
    $('.themes a').hover(
    	function() { $(body).addClass('themes'); }, 
        function() { $(body).removeClass('themes'); }
    );
    $('.labs a').hover(
    	function() { $(body).addClass('labs'); }, 
        function() { $(body).removeClass('labs'); }
    );
    $('.skype a').hover(
    	function() { $(body).addClass('skype'); }, 
        function() { $(body).removeClass('skype'); }
    );
    $('.mail a').hover(
    	function() { $(body).addClass('mail'); }, 
        function() { $(body).removeClass('mail'); }
    );
});
