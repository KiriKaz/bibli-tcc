let    show_ham   = $("#check");
let show_button   = $("#show");
let hide_button   = $("#hide");
let    ham_menu   = $("#hamburguer-menu");
let         nav   = $("#nav");
let        logo   = $(".logo");
let dropdown_menu = $("#dropdown-menu");
let dropdown_toggle = $("#dropdown-toggle");
let perfil_btn = $("#perfilbtn");
let logout_btn = $("#logoutbtn");

let ham_home = $("#ham_home");
let ham_class = $("#ham_class");
let ham_about = $("#ham_about");
let ham_contact = $("#ham_contact");


let ham_shown   = false;
show_ham.prop('checked', false);

let dropdown_shown = false;
// dropdown_menu.prop("display", "none");
dropdown_menu.hide()

let toggle_dropdown = function(e) {
    e.preventDefault();
    if(dropdown_shown) {
        dropdown_menu.hide();
    } else {
        dropdown_menu.show();
    }
    dropdown_shown = !dropdown_shown
}

let toggle_ham = function(e) {
    e.preventDefault();
    ham_shown = !ham_shown;
    let toggle_elements = [ham_menu, show_button, hide_button, logo];
    toggle_elements.forEach(function(elem) {
        elem.toggleClass("toggled");
    });
};

// let scroll_function = function(e) {
//     scrolled = Boolean($(window).scrollTop());
//     if(scrolled && !nav.hasClass("scrolled")) {
//         nav.toggleClass("scrolled");
//         ham_menu.toggleClass("scrolled");
//     } else if(!scrolled && nav.hasClass("scrolled")) {
//         nav.toggleClass("scrolled");
//         ham_menu.toggleClass("scrolled");
//     }
// };/

// if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
//     pass    
// } else {
//     $(window).on('scroll', scroll_function);
// }

[hide_button, show_button].forEach(function(button) {
    button.on('click', toggle_ham);
})

dropdown_toggle.on('click', toggle_dropdown);

perfil_btn.on('click', function(e) {
    e.preventDefault();
    window.location = "perfil.php";
});


logout_btn.on('click', function(e) {
    e.preventDefault();
    $.post('session_man.php', {action: 'logout'})
        .done(function(data) {
            window.location.reload();
        });
});

ham_home.on('click', function(e) {
    e.preventDefault();
    window.location = "index.php";
});

ham_class.on('click', function(e) {
    e.preventDefault();
    window.location = "classes.php";
});

ham_about.on('click', function(e) {
    e.preventDefault();
    window.location = "about.php";
});

ham_contact.on('click', function(e) {
    e.preventDefault();
    window.location = "contato.php";
});
