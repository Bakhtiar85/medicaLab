function visible(partial) {
    var $t = partial,
        $w = jQuery(window),
        viewTop = $w.scrollTop(),
        viewBottom = viewTop + $w.height(),
        _top = $t.offset().top,
        _bottom = _top + $t.height(),
        compareTop = partial === true ? _bottom : _top,
        compareBottom = partial === true ? _top : _bottom;

    return (
        compareBottom <= viewBottom && compareTop >= viewTop && $t.is(":visible")
    );
}

$(window).scroll(function () {
    if (visible($(".count-digit"))) {
        if ($(".count-digit").hasClass("counter-loaded")) return;
        $(".count-digit").addClass("counter-loaded");

        $(".count-digit").each(function () {
            var $this = $(this);
            jQuery({ Counter: 0 }).animate(
                { Counter: $this.text() },
                {
                    duration: 3000,
                    easing: "swing",
                    step: function () {
                        $this.text(Math.ceil(this.Counter));
                    }
                }
            );
        });
    }
});

function hidden_navbar() {
    $('#hidden_navbar').fadeToggle();
    $('button#hamburger svg').fadeToggle();
}

function myFunction(x) {
    if (x.matches) { // If media query matches
        $('#hidden_navbar').addClass('hidden')
        $('div#footer').css('background-position', 'left')
    }
}
var x = window.matchMedia("(max-width: 786px)")
myFunction(x) // Call listener function at run time

function footerForm(){
    alert('This from is not accepting any thing right now!')
}