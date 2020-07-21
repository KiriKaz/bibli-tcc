let aula = $("#aula01");
let popup = $("#popup");
let bgpopup = $(".aulaspopup");

let bgpopup_shown = false;
// popup.prop("display", "none");
bgpopup.hide();

let toggle_popup = function(e) {
    e.preventDefault();
    if(bgpopup_shown) {
        bgpopup.hide();
    } else {
        bgpopup.show();
    }
    bgpopup_shown = !bgpopup_shown
}

bgpopup.on('click', toggle_popup);
aula.on('click', toggle_popup);
