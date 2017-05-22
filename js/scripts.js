
jQuery(document).ready(function() {
    $('.page-container form').submit(function(){
        var username = $(this).find('.username').val();
        var password = $(this).find('.password').val();
        if(username == '') {
            $(this).find('.error').fadeOut('slow', function(){
                $(this).css('top', '27px');
            });
            $(this).find('.error').fadeIn('slow', function(){
                $(this).parent().find('.username').focus();
            });
            return false;
        }
        if(password == '') {
            setTimeout( function(){
                $('.error').slideDown('slow');
            },300);
            $(this).find('.error').fadeOut('slow', function(){
                $(this).css('top', '96px');
            });
            
            $(this).find('.error').fadeIn('slow', function(){
                $(this).parent().find('.password').focus();
            });
            return false;
        }
    });

    $('.page-container form .username, .page-container form .password').keyup(function(){
        $(this).parent().find('.error').fadeOut('slow');
    });

});

