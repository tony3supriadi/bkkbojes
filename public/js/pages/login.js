$(function () {
    $('#password')
        .on('focus', () => {
            $('.input-group-append .input-group-text').addClass('border-primary');
        })
        .on('focusout', () => {
            $('.input-group-append .input-group-text').removeClass('border-primary');
        });
    
    var showing = false;
    $('.input-group-append .input-group-text').on('click', () => {
        showing = !showing;
        if (showing) {
            $('.input-group-append .input-group-text i').removeClass('la-eye-slash').addClass('la-eye');
            $('#password').attr('type', 'text').focus();
        } else {
            $('.input-group-append .input-group-text i').removeClass('la-eye').addClass('la-eye-slash');
            $('#password').attr('type', 'password').focus();
        }
    })
})