// bigdropdownmenu
$(document).ready(function(){
    // $(".dropdown").hover(
    $(".dropdown").click(
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideToggle("400");
            $(this).toggleClass('open');
        }
    );
});

$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});
