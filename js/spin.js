// -------------spin-------------------
var resultWrapper = document.querySelector('.spin-result-wrapper');
var wheel = document.querySelector('.wheel-img');

$('.active').on("click", function(event) {
    $(this).off(event);
    var fiveSeconds = new Date().getTime() + 600000;
    if (wheel.classList.contains('rotated')) {
        resultWrapper.style.display = "block";
    } else {
        wheel.classList.add('super-rotation');
        setTimeout(function() {
            resultWrapper.style.display = "block";
        }, 8000);
        setTimeout(function() {
            $('.spin-wrapper').slideUp();
            $('.order_block').slideDown();
            $('.clock').countdown(fiveSeconds, { elapse: true })
                .on('update.countdown', function(event) {
                    var $this = $(this);
                    if (event.elapsed) {
                        $this.html("00 : 00");
                    } else {
                        $this.html(event.strftime('<span>%M</span> : <span>%S</span>'));
                    }
                });
        }, 10000);
        wheel.classList.add('rotated');
    }
})
var closePopup = document.querySelector('.close-popup');
$('.close-popup, .pop-up-button').click(function(e) {
    e.preventDefault();
    $('.spin-result-wrapper').fadeOut();
    var top = $('.spin-wrapper').offset().top;
    $('body,html').animate({ scrollTop: top }, 800);
});

// --------------SCROLL-------------------
$("a").on("touchend, click", function(e) {
    e.preventDefault();
    $('body,html').animate({ scrollTop: $('.scroll').offset().top }, 400);
});