$('a').click(function(e){
    e.preventDefault();
    $.ajax({ type: 'POST',
            url: 'login-ajax.php',
            success: function(response){
                if (response == 'accept') {
                    $('#do').submit();
                } else {
                    $('div').fadeIn(400);
                }
            },
            error: function(response){
                    $('div').fadeIn(400);
            }
     });
});