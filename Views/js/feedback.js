function newFeedback(form) {
    $.ajax({
        type: 'POST',
        url: '/feedback/newFeedback/',
        data: $(form).serialize(),
        beforeSend: function () {
            $("#spinner").fadeToggle(500).delay(1000).fadeToggle(500);
        },
        success: function(data) {
            $(".feedback-wrapper").html(data);
        }
    });
}