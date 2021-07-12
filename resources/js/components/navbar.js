$(function () {
    var open = false;
    $('#mobile-menu').on('click', function () {
        open = !open;
        if (open) {
            console.log('open');
            $('#mobile-menu .la-bars').removeClass('block').addClass('hidden');
            $('#mobile-menu .la-times').removeClass('hidden').addClass('block');
            
            $('#mobile-menu-navigation').removeClass('hidden');
        } else {
            console.log('close');
            $('#mobile-menu .la-bars').removeClass('hidden').addClass('block');
            $('#mobile-menu .la-times').removeClass('block').addClass('hidden');
            
            $('#mobile-menu-navigation').addClass('hidden');
        }
    });

    var otherOpen = false;
    $('#other-menu').on('click', function () {
        otherOpen = !otherOpen;
        if (otherOpen) {
            $('#other-menu-dropdown').addClass('hidden');
        } else {
            $('#other-menu-dropdown').removeClass('hidden');
        }
    })
})