jQuery(document).ready(function($){

    // Listen to all CF7 form events
    $(document).on('wpcf7mailsent wpcf7mailfailed wpcf7invalid', '.wpcf7', function(event){
        // Determine message
        var message = '';
        if(event.type === 'wpcf7mailsent'){
            message = 'Thank you! Your feedback was sent.';
        } else if(event.type === 'wpcf7mailfailed'){
            message = 'There was an error sending your feedback. Please try again.';
        } else if(event.type === 'wpcf7invalid'){
            message = 'Please fill in all required fields.';
        }

        // Remove any existing popup
        $('.cf7-popup').remove();

        // Create new popup
        var popup = $('<div class="cf7-popup"></div>').text(message);

        // Style as error if not mailsent
        if(event.type !== 'wpcf7mailsent'){
            popup.addClass('error');
        }

        // Append to body and show
        $('body').append(popup);
        popup.fadeIn(300);

        // Hide after 3 seconds
        setTimeout(function(){
            popup.fadeOut(300, function(){ $(this).remove(); });
        }, 3000);
    });

});

jQuery(document).ready(function () {
    jQuery('#top-navi ul li:first-child').on('click', function () {
        jQuery('#top-navi ul li:not(:first-child)').slideToggle(400);
    });
});

jQuery(window).resize(function(){
    if(jQuery(window).width()>650){
        jQuery('#top-navi ul li:not(:first-child)').show();
    }
    else{
        jQuery('#top-navi ul li:not(:first-child)').hide();
    }
    
});