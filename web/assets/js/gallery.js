 // portfolio
 $('.gallery .nest .subnest a').click(function() {
    var itemID = $(this).attr('href');
    $('.gallery .nest').addClass('item_open');
    $(itemID).addClass('item_open');
    return false;
});
$('.close').click(function() {
    $('.port, .gallery .nest').removeClass('item_open');
    return false;
});

$(".gallery .nest .subnest a").click(function() {
    $('html, body').animate({
        scrollTop: parseInt($("#top").offset().top)
    }, 400);
});