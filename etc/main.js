$(window).on('load', function(e) {
    $('.preloader').addClass('complete');
    setTimeout(function(){
        $('.preloader').remove();
    }, 2000);
    setTimeout(function(){
        $("#monitor").toggleClass('toggled');
    }, 600);
    setTimeout(function(){
        // $("#cursor").toggleClass('toggled');
        let cursor = $("#cursor");
        cursor.animate({opacity: '1', top: '65vh', left: '38vw'}, "slow");
        cursor.animate({top: '60vh', left: '25vw'}, "slow");
    }, 1000);
});

let    show_ham = $("#check");
let show_button = $("#show");
let hide_button = $("#hide");
let    ham_menu = $("#hamburguer-menu");
let         nav = $("#nav");
let        logo = $(".logo");

let ham_shown   = false;
show_ham.prop('checked', false);


let toggle_ham = function(e) {
    e.preventDefault();
    ham_shown = !ham_shown;
    let toggle_elements = [ham_menu, show_button, hide_button, logo];
    toggle_elements.forEach(function(elem) {
        elem.toggleClass("toggled");
    });
};

let scroll_function = function(e) {
    scrolled = Boolean($(window).scrollTop());
    if(scrolled && !nav.hasClass("scrolled")) {
        nav.toggleClass("scrolled");
        ham_menu.toggleClass("scrolled");
    } else if(!scrolled && nav.hasClass("scrolled")) {
        nav.toggleClass("scrolled");
        ham_menu.toggleClass("scrolled");
    }
};

[hide_button, show_button].forEach(function(button) {
    button.on('click', toggle_ham);
})

$(window).on('scroll', scroll_function);