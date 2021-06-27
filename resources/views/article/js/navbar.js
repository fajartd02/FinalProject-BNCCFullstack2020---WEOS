$('.popup').hide();
$('#search').val('');

function isUserDetailOpen() {
    return $('.popup').is(':visible');
}

$('#user-btn').on('click', () => {
    const details = $('.popup');

    if (!isUserDetailOpen()) {
        details.show();
    } else {
        details.hide();
    }
});

$(document).on('click', ev => {
    if ($('#user-btn').has(ev.target).length) {
        return;
    }

    console.log($('#user-btn').has(ev.target).length);

    if (isUserDetailOpen()) {
        $('.popup').hide();
    }
});

// prevents key press when user details is open
$(document).on('keypress', ev => {
    if (isUserDetailOpen()) {
        ev.preventDefault();
    }
});

$(document).on('keyup', ev => {
    if (isUserDetailOpen()) {
        ev.preventDefault();

        if (ev.key === 'Escape') {
            $('.popup').hide();
        }
    }
});