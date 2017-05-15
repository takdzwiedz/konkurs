$(function() {

    $('#pytanie2').hide();
    $('#pytanie1').change(function() {

        if ($(this).is(":selected")) {
            $('#pytanie2').hide();
        } else {
            $('#pytanie2').show();
        }
    });
});

$(function() {

    $('#pytanie3').hide();
    $('#pytanie2').change(function() {

        if ($(this).is(":selected")) {
            $('#pytanie3').hide();
        } else {
            $('#pytanie3').show();
        }
    });
});

$(function() {

    $('#pytanie4').hide();
    $('#pytanie3').change(function() {

        if ($(this).is(":selected")) {
            $('#pytanie4').hide();
        } else {
            $('#pytanie4').show();
        }
    });
});
