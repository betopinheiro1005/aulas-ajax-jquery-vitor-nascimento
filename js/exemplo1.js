$(document).ready(function () {
    $("#home").css({"background": "khaki"});
    $("#container a").click(function (evt) {
        evt.preventDefault();
        $("#home").css({"background": ""});
        var href = $(this).attr('href');
        $.ajax({
            type: "POST",
            url: href,
            data: "url=" + href,
            beforeSend: function () {
                $("#loader").show();
                $("#content").html("");
            },
            success: function (data) {
                $("#loader").hide();
                $("#content").html(data);
            }
        });
    });
});

