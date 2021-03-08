$(document).ready(function () {
    $('#btn-submit').on('click', function (e) {
        e.preventDefault();

        $.ajax({
            type: 'POST',
            url: "/subscribe",
            data: {
                email:$('#email11').val()
            },
            success: function (data) {
                if (data.status === true) {
                    $('.msg2').removeAttr('style');
                    $('.error12').css('display', 'none');
                    $('#form_subscribe')[0].reset();
                } else {
                    console.log(data)
                    let errors = $('.error12').addClass('alert alert-danger');
                    errors.empty()
                    errors.append(data.errors)
                }
            },
            error(error) {
                console.log('error', error);
            }

        });
    });

});
