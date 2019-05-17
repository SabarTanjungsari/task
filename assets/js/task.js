$(function () {

    // Active menu
    switch (menu) {
        case 'Home':
            $('#home').addClass('active');
            break;
        default :
            $('#dashboard').addClass('active');
    }
});