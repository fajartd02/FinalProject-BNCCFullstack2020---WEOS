$('.module-btn').on('click', ev => {
    $('.module-btn').each((_, elem) => $(elem).removeAttr('current'));
    $(ev.target).attr('current', '1');
});