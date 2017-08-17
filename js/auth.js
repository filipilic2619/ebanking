$(document).ready(function(){
    $('.log-btn').click(function(e){

        if($.trim( $('#Password').val())=="")
        {
            showAlert("Unesite kod");

        } else {

            $.ajax({
                type: 'POST',
                url: 'verification.php',
                data: {
                    'password': $('#Password').val()
                },
                success: function (result) {

                     if(result=="fail")
                     {
                         alert("Uneli ste neispravan sigurnosni kod. Bićete preusmereni na početnu stranu.");
                         window.location = "logout.php";
                     } else if (result=="true"){
                         window.location = "main.php";
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