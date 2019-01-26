$(document).ready(function () {
    
    $(".solicitar").click(function (evt) {
        evt.preventDefault();
        
        var atual = $(this);
        var id = $(this).attr('rel');
        
        $.ajax({
            type: "POST",
            url: "buscar.php",
            data: "id=" + id,
            beforeSend: function () {
                $("#loader").show();
            },
            success: function (data) {
                $("#loader").hide();
                atual.parent().html(data);
            }
        });
    });
});

