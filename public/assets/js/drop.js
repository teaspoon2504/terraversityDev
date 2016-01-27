$(document).ready(function(){
    $("#matematikaDasar").hover(function(){
        $(".tahunmatematikaDasar").show();
        $(".tahunmatematikaIpa").hide();
        $(".tahunfisika").hide();
        $(".tahunkimia").hide();
        $(".tahunbiologi").hide();
        $(".tahuninggris").hide();
        $(".tahunindo").hide();
        $(".tahuntpa").hide();
    });
    $("#matematikaIpar").hover(function(){
        $(".tahunmatematikaDasar").hide();
        $(".tahunmatematikaIpa").show();
        $(".tahunfisika").hide();
        $(".tahunkimia").hide();
        $(".tahunbiologi").hide();
        $(".tahuninggris").hide();
        $(".tahunindo").hide();
        $(".tahuntpa").hide();
    });
    $("#fisika").hover(function(){
        $(".tahunmatematikaDasar").hide();
        $(".tahunmatematikaIpa").hide();
        $(".tahunfisika").show();
        $(".tahunkimia").hide();
        $(".tahunbiologi").hide();
        $(".tahuninggris").hide();
        $(".tahunindo").hide();
        $(".tahuntpa").hide();
    });
    $("#kimia").hover(function(){
        $(".tahunmatematikaDasar").hide();
        $(".tahunmatematikaIpa").hide();
        $(".tahunfisika").hide();
        $(".tahunkimia").show();
        $(".tahunbiologi").hide();
        $(".tahuninggris").hide();
        $(".tahunindo").hide();
        $(".tahuntpa").hide();
    });
    $("#biologi").hover(function(){
        $(".tahunmatematikaDasar").hide();
        $(".tahunmatematikaIpa").hide();
        $(".tahunfisika").hide();
        $(".tahunkimia").hide();
        $(".tahunbiologi").show();
        $(".tahuninggris").hide();
        $(".tahunindo").hide();
        $(".tahuntpa").hide();
    });
    $("#inggris").hover(function(){
        $(".tahunmatematikaDasar").hide();
        $(".tahunmatematikaIpa").hide();
        $(".tahunfisika").hide();
        $(".tahunkimia").hide();
        $(".tahunbiologi").hide();
        $(".tahuninggris").show();
        $(".tahunindo").hide();
        $(".tahuntpa").hide();
    });
    $("#indo").hover(function(){
        $(".tahunmatematikaDasar").hide();
        $(".tahunmatematikaIpa").hide();
        $(".tahunfisika").hide();
        $(".tahunkimia").hide();
        $(".tahunbiologi").hide();
        $(".tahuninggris").hide();
        $(".tahunindo").show();
        $(".tahuntpa").hide();
    });
    $("#tpa").hover(function(){
        $(".tahunmatematikaDasar").hide();
        $(".tahunmatematikaIpa").hide();
        $(".tahunfisika").hide();
        $(".tahunkimia").hide();
        $(".tahunbiologi").hide();
        $(".tahuninggris").hide();
        $(".tahunindo").hide();
        $(".tahuntpa").show();
    });

});


$(document).ready(function(){
    $("#thn2001").click(function(){
        $("#konten2001").show();
        $("#konten2002").hide();
        $("#konten2000").hide();
    });
    $("#thn2000").click(function(){
        $("#konten2000").show();
        $("#konten2002").hide();
        $("#konten2001").hide();
    });
    $("#thn2002").click(function(){
        $("#konten2002").show();
        $("#konten2001").hide();
        $("#konten2000").hide();
    });
});



// testi

$(document).ready(function() {
  //Set the carousel options
  $('#quote-carousel').carousel({
    pause: true,
    interval: 4000,
  });
});
