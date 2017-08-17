$(document).ready(function(){
    $('.log-btn').click(function(e){

        if($.trim( $('#UserName').val())=="" || $.trim( $('#Password').val())=="")
        {
            showAlert("Sva polja su obavezna");

        } else {
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: 'login.php',
                data: {
                    'username': $('#UserName').val(),
                    'password': $('#Password').val()
                },
                success: function (result) {

                    if(result=="fail")
                    {
                        showAlert("Pogrešno korisničko ime ili lozinka");
                    } else if(result=="ok")
                    {
                        window.location = "auth.php";
                    }
                }
            });
        }
    });

    $('.form-control').keypress(function(){
        hideAlert();
    });
});

function showAlert(text) {
    $('.alert').html(text);
    $('.log-status').addClass('wrong-entry');
    $('.alert').fadeIn(500);

}

function hideAlert() {
    $('.log-status').removeClass('wrong-entry');
    $('.alert').fadeOut(500);

}