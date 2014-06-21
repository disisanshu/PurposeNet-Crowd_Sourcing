$(document).ready(function() {
  var y=1;
  var n=0;

    $('#yes0').click(function() {
    var art = $("#myprecious0").text();
//    alert(art);
    $.ajax({
       type:"POST",
       url:'api.php',
       data:"y="+y+"&art="+art,
       dataType:"html",
       success:function(data) {
       $("#yes0").fadeOut();
       $("#no0").fadeOut();
       $("#oa0").html("You voted yes");
       }
     });

     });
    $('#no0').click(function() {
       $("#yes0").fadeOut();
       $("#no0").fadeOut();
       $("#ob0").html("You voted no");
    });

    $('#yes1').click(function() {
    $.ajax({
       url:'api.php',
       data:y,
       success:function(data) {
       $("#yes1").fadeOut();
       $("#no1").fadeOut();
       $("#oa1").html("You voted yes");
       }
     });

     });
    $('#no1').click(function() {
       $("#yes1").fadeOut();
       $("#no1").fadeOut();
       $("#ob1").html("You voted no");
    });

    $('#yes2').click(function() {
    $.ajax({
       url:'api.php',
       data:y,
       success:function(data) {
       $("#yes2").fadeOut();
       $("#no2").fadeOut();
       $("#oa2").html("You voted yes");
       }
     });

     });
    $('#no2').click(function() {
       $("#yes2").fadeOut();
       $("#no2").fadeOut();
       $("#ob2").html("You voted no");
    });

    $('#yes3').click(function() {
    $.ajax({
       url:'api.php',
       data:y,
       success:function(data) {
       $("#yes3").fadeOut();
       $("#no3").fadeOut();
       $("#oa3").html("You voted yes");
       }
     });

     });
    $('#no3').click(function() {
       $("#yes3").fadeOut();
       $("#no3").fadeOut();
       $("#ob3").html("You voted no");
    });

    $('#yes4').click(function() {
    $.ajax({
       url:'api.php',
       data:y,
       success:function(data) {
       $("#yes4").fadeOut();
       $("#no4").fadeOut();
       $("#oa4").html("You voted yes");
       }
     });

     });
    $('#no4').click(function() {
       $("#yes4").fadeOut();
       $("#no4").fadeOut();
       $("#ob4").html("You voted no");
    });

    $('#yes5').click(function() {
    $.ajax({
       url:'api.php',
       data:y,
       success:function(data) {
       $("#yes5").fadeOut();
       $("#no5").fadeOut();
       $("#oa5").html("You voted yes");
       }
     });

     });
    $('#no5').click(function() {
       $("#yes5").fadeOut();
       $("#no5").fadeOut();
       $("#ob5").html("You voted no");
    });

    $('#yes6').click(function() {
    $.ajax({
       url:'api.php',
       data:y, 
       success:function(data) {
       $("#yes6").fadeOut();
       $("#no6").fadeOut();
       $("#oa6").html("You voted yes");
       }
     });

     });
    $('#no6').click(function() {
       $("#yes6").fadeOut();
       $("#no6").fadeOut();
       $("#ob6").html("You voted no");
    });

    $('#yes7').click(function() {
    $.ajax({
       url:'api.php',
       data:y,
       success:function(data) {
       $("#yes7").fadeOut();
       $("#no7").fadeOut();
       $("#oa7").html("You voted yes");
       }
     });

     });
    $('#no7').click(function() {
       $("#yes7").fadeOut();
       $("#no7").fadeOut();
       $("#ob7").html("You voted no");
    });

    $('#yes8').click(function() {
    $.ajax({
       url:'api.php',
       data:y,
       success:function(data) {
       $("#yes8").fadeOut();
       $("#no8").fadeOut();
       $("#oa8").html("You voted yes");
       }
     });

     });
    $('#no8').click(function() {
       $("#yes8").fadeOut();
       $("#no8").fadeOut();
       $("#ob8").html("You voted no");
    });

    $('#yes9').click(function() {
    $.ajax({
       url:'api.php',
       data:y,
       success:function(data) {
       $("#yes9").fadeOut();
       $("#no9").fadeOut();
       $("#oa9").html("You voted yes");
       }
     });

     });
    $('#no9').click(function() {
       $("#yes9").fadeOut();
       $("#no9").fadeOut();
       $("#ob9").html("You voted no");
    });

});
