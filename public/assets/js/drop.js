$(document).ready(function(){
    $("#matematika").hover(function(){
        $(".tahunmtk").show();
        $(".tahunipa").hide();
        $(".tahuninggris").hide();
        $(".tahunindo").hide();
    });
    $("#ipa").hover(function(){
      $(".tahunmtk").hide();
      $(".tahunipa").show();
      $(".tahuninggris").hide();
      $(".tahunindo").hide();
    });
    $("#inggris").hover(function(){
      $(".tahunmtk").hide();
      $(".tahunipa").hide();
      $(".tahuninggris").show();
      $(".tahunindo").hide();
    });
    $("#indo").hover(function(){
      $(".tahunmtk").hide();
      $(".tahunipa").hide();
      $(".tahuninggris").hide();
      $(".tahunindo").show();
    });
});
