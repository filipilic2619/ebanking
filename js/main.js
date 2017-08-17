$( document ).ready(function() {
    $("#glavno").html("");
    $.ajax({
        type: 'POST',
        url: 'racuni.php',
        data: {

        },
        success: function (result) {



            var niz = result.split(';');
            var brojevi = niz[0].split(',');
            var nazivi = niz[1].split(',');

            $("#racuni").html("");
            for (var i in brojevi) {
                $("#racuni").append("<li><a href='javascript:void(0)' onclick='promeniRacun(this.id)' class='racun' id='" + brojevi[i] + "'>" + nazivi[i] + "</a></li>");
            }


        }
    });

    $.ajax({
        type: 'POST',
        url: 'getPlatioc.php',
        data: {

        },
        success: function (result) {

            $("#ime").html('<i class="fa fa-user"></i> '+ result +'<b class="caret"></b>');
        }
    });


});

function promeniRacun(id) {
    $.ajax({
        type: 'POST',
        url: 'prikazRacuna.php',
        data: {
            'id': id
        },
        success: function (result) {

            $("#glavno").html(result);
            var myTableArray = [];
            $("table#tbl tr").each(function() {
                var arrayOfThisRow = [];
                var tableData = $(this).find('td');
                if (tableData.length > 0) {
                    tableData.each(function() { arrayOfThisRow.push($(this).text()); });
                    myTableArray.push(arrayOfThisRow);
                }
            });

            grafik(myTableArray);
        }
    });


}

function grafik(data) {
    var datumi = [];
    var stanja = [];
    for (var i= 0; i<data.length; i++)
    {
        datumi.push(data[i][2]);
        stanja.push(data[i][4]);
    }

    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: datumi,
            datasets: [{
                label: 'iznos',
                data: stanja

            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            legend: {
                display: false
            },
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }

        }
    });

}

function noviNalog() {

    $.ajax({
        type: 'POST',
        url: 'novinalog.php',
        data: {

        },
        success: function (result) {

            $("#glavno").html(result);
        }
    });
}

function promenaNaloga(broj) {

    if(broj != "izaberi")
    {
        $("#racunplatioca").val(broj);
        $("#imeplatioca").val($("#ime").text());
        $("#uplati").attr("disabled", false);

    } else
    {
        $("#racunplatioca").val("");
        $("#imeplatioca").val("");
        $("#uplati").attr("disabled", true);
        $("#iznos").val("");
        $("#model").val("");
        $("#poziv").val("");
        $("#svrha").val("");
        $("#datum").val("");
        $("#racunprimaoca").val("");
        $("#imeprimaoca").val("");
    }



}

function uplati() {
    $.ajax({
        type: 'POST',
        url: 'uplata.php',
        data: {
            racunplatioca: $("#racunplatioca").val(),
            imeplatioca : $("#imeplatioca").val(),
            iznos : $("#iznos").val(),
            racunprimaoca : $("#racunprimaoca").val(),
            imeprimaoca : $("#imeprimaoca").val(),
            model : $("#model").val(),
            poziv : $("#poziv").val(),
            svrha : $("#svrha").val(),
            datum : $("#datum").val()

        },
        success: function (result) {

            alert("Uspešno ste izvršili uplatu");
            $("#iznos").val("");
            $("#model").val("");
            $("#poziv").val("");
            $("#svrha").val("");
            $("#datum").val("");
            $("#racunprimaoca").val("");
            $("#imeprimaoca").val("");
        }
    });

}

function token() {

    $.ajax({
        type: 'POST',
        url: 'token.php',
        data: {

        },
        success: function (result) {

            $("#glavno").html(result);
        }
    });
}

function izmeniToken() {

    $.ajax({
        type: 'POST',
        url: 'izmeniToken.php',
        data: {
            token: $("#tokenbroj").val()
        },
        success: function (result) {

           alert("Uspešno ste izmenili token.")
        }
    });
}

