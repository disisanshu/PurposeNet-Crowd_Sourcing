<script>
$(document).ready(function() {
  var y=1;
  var n=0;

<?php 
for($i = 0;$i<10;$i++)
{
?>
    $(<?php print "'#yes".$i."'"; ?>).click(function() {
//    var art = $(<?php print "'#artifact".$i."'"; ?>).text();
    $.ajax({
       url:'api.php'+"?y="+y+"&art="+$(<?php print "'#artifact".$i."'"; ?>).text()+"&main="+$(<?php print "'#main".$i."'"; ?>).text(),
       dataType:"html",
       success:function(data) {
       $(<?php print "'#yes".$i."'"; ?>).hide();
       $(<?php print "'#no".$i."'"; ?>).hide();
       $(<?php print "'#oa".$i."'"; ?>).html("You voted yes");
       }
     });

     });
    $(<?php print "'#no".$i."'"; ?>).click(function() {
   	 $.ajax({
   		url:'api.php'+"?y="+n+"&art="+$(<?php print "'#artifact".$i."'"; ?>).text()+"&main="+$(<?php print "'#main".$i."'"; ?>).text(),
       		dataType:"html",
      		success:function(data) {
     		$(<?php print "'#yes".$i."'"; ?>).hide();
  		$(<?php print "'#no".$i."'"; ?>).hide();
       		$(<?php print "'#ob".$i."'"; ?>).html("You voted no");
       		}
    	 });
    });
	

<?php
}    
?>

});
</script>
