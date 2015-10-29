$(document).ready(function() {

    $('#toFeatured').click(function() {
        $('html,body').animate({
                scrollTop: $("#featured").offset().top - 70},
            'slow');
    });


    $(window).scroll(function() {
        var curr = $(document).scrollTop();
        var firstGray = $(".section.gray:first").offset().top - 70;
        console.log("is " + curr + " > than " + firstGray);

        if(curr >= firstGray) {
            $(".navbar").addClass('transition-color');
        }
        else {
            $(".navbar").removeClass('transition-color');
        }

    });

    /** USED FOR SENDING EMAIL **/
    $('.send-mail').click(function(e) {
        e.preventDefault();
        var data = {
            name: $('#name').val(),
            email: $('#email').val(),
            message: $('#message').val()
        };

        //
        $.ajax({
            type: "POST",
            url: "/app/core/commands/send_mail.php",
            data: data,
            cache: false,
            success:function(data) {
                var obj = JSON.parse(data);
                console.log(obj);
                $('#response').text(obj.message);
                if(obj.error) {
                    $('#response').addClass('red');
                } else {
                    $('#response').removeClass('red');
                }
                $('#response').addClass('show');

                window.setTimeout(function(){
                    $('#response').removeClass('show');
                }, 4000, function() {
                    $('#response').removeClass('red');
                })
            },
            error:function() {
                $('#response').text('Something went wrong on our end, please email us directly at info@kodadevelopment.com');
                $('#response').addClass('red');
                $('#response').addClass('show');
            }
        })
    });
});

