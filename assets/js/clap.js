$(document).ready(function () {
    var clapLimit = 50;
    var i = 1,
        timeOut = 0;

    $('#celap').on('mousedown touchstart', function (e) {
        $(this).addClass('active');
        timeOut = setInterval(function () {
            if (i < clapLimit) {
                $(".counter").html(parseInt($('.counter').html()) + 1);
                $(".counter").show("fast");
            } else {
                $(".counter").show("fast");
            }
        }, 500);
    }).bind('mouseup mouseleave touchend', function () {
        $(this).removeClass('active');
        clearInterval(timeOut);
        $(".counter").hide("slow");

        $.ajax({
            type: "POST",
            url: "<?php echo base_url('Stories/autosave_celap'); ?>",
            data: {
                clapCount: parseInt($('.counter').html())
            },
            success: function (result) {
                console.log(result);
            }
        });
    });
})