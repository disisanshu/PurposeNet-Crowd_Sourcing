$(document).ready(function() {
  var y=1;
  var n=0;

    $('#yes0').click(function() {
    $.ajax({
       url:'api.php',
       data:y,
       success:function(data) {
       $("#yes0").fadeOut();
       $("#no0").fadeOut();
       $("#oa0").html("you told it was Batman");
       }
     });

     });
    $('#no0').click(function() {
       $("#yes0").fadeOut();
       $("#no0").fadeOut();
       $("#ob0").html("you told it was Joker");
    });

    $('#yes1').click(function() {
    $.ajax({
       url:'api.php',
       data:y,
       success:function(data) {
       $("#yes1").fadeOut();
       $("#no1").fadeOut();
       $("#oa1").html("you told it was Batman");
       }
     });

     });
    $('#no1').click(function() {
       $("#yes1").fadeOut();
       $("#no1").fadeOut();
       $("#ob1").html("you told it was Joker");
    });

    $('#yes2').click(function() {
    $.ajax({
       url:'api.php',
       data:y,
       success:function(data) {
       $("#yes2").fadeOut();
       $("#no2").fadeOut();
       $("#oa2").html("you told it was Batman");
       }
     });

     });
    $('#no2').click(function() {
       $("#yes2").fadeOut();
       $("#no2").fadeOut();
       $("#ob2").html("you told it was Joker");
    });

    $('#yes3').click(function() {
    $.ajax({
       url:'api.php',
       data:y,
       success:function(data) {
       $("#yes3").fadeOut();
       $("#no3").fadeOut();
       $("#oa3").html("you told it was Batman");
       }
     });

     });
    $('#no3').click(function() {
       $("#yes3").fadeOut();
       $("#no3").fadeOut();
       $("#ob3").html("you told it was Joker");
    });

    $('#yes4').click(function() {
    $.ajax({
       url:'api.php',
       data:y,
       success:function(data) {
       $("#yes4").fadeOut();
       $("#no4").fadeOut();
       $("#oa4").html("you told it was Batman");
       }
     });

     });
    $('#no4').click(function() {
       $("#yes4").fadeOut();
       $("#no4").fadeOut();
       $("#ob4").html("you told it was Joker");
    });

    $('#yes5').click(function() {
    $.ajax({
       url:'api.php',
       data:y,
       success:function(data) {
       $("#yes5").fadeOut();
       $("#no5").fadeOut();
       $("#oa5").html("you told it was Batman");
       }
     });

     });
    $('#no5').click(function() {
       $("#yes5").fadeOut();
       $("#no5").fadeOut();
       $("#ob5").html("you told it was Joker");
    });

    $('#yes6').click(function() {
    $.ajax({
       url:'api.php',
       data:y,
       success:function(data) {
       $("#yes6").fadeOut();
       $("#no6").fadeOut();
       $("#oa6").html("you told it was Batman");
       }
     });

     });
    $('#no6').click(function() {
       $("#yes6").fadeOut();
       $("#no6").fadeOut();
       $("#ob6").html("you told it was Joker");
    });

    $('#yes7').click(function() {
    $.ajax({
       url:'api.php',
       data:y,
       success:function(data) {
       $("#yes7").fadeOut();
       $("#no7").fadeOut();
       $("#oa7").html("you told it was Batman");
       }
     });

     });
    $('#no7').click(function() {
       $("#yes7").fadeOut();
       $("#no7").fadeOut();
       $("#ob7").html("you told it was Joker");
    });

    $('#yes8').click(function() {
    $.ajax({
       url:'api.php',
       data:y,
       success:function(data) {
       $("#yes8").fadeOut();
       $("#no8").fadeOut();
       $("#oa8").html("you told it was Batman");
       }
     });

     });
    $('#no8').click(function() {
       $("#yes8").fadeOut();
       $("#no8").fadeOut();
       $("#ob8").html("you told it was Joker");
    });

    $('#yes9').click(function() {
    $.ajax({
       url:'api.php',
       data:y,
       success:function(data) {
       $("#yes9").fadeOut();
       $("#no9").fadeOut();
       $("#oa9").html("you told it was Batman");
       }
     });

     });
    $('#no9').click(function() {
       $("#yes9").fadeOut();
       $("#no9").fadeOut();
       $("#ob9").html("you told it was Joker");
    });

});
