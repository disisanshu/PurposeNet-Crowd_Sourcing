<?php
include('db_connection.php');
$ar = array();
$r = mysql_query("SELECT * FROM temp");
$l = 0;
while($w = mysql_fetch_array($r)) {
	$ar[$l] = $w["artifacts"];
	$l = $l + 1;
}
$i = 0;
?>

<div id="container">
</div>
<script src="kinetic.min.js"></script>
<script>
var stage = new Kinetic.Stage({
	container: 'container',
	width: 1200,
	height: 1200
});
layer = new Kinetic.Layer();
name = <?php echo '"'.$ar[$i].'"'; $i = $i + 1;?>;
var textbox = new Kinetic.Text({
	x: 500,
	y: 300,
	text: name,
	textFill: 'white',
	fill: 'blue',
	fontSize: 14,
	width: 100,
	height: 100,
	padding: 20,
	align: 'center',
	shadow: {
		color: 'black',
		blur: 10,
		offset: [10, 10],
		opacity: 0.2
	},
	cornerRadius: 10,
	draggable: true
});

textbox.on('dragend',function(e){
var x = e.clientX;
var y = e.clientY;
var n = <?php echo '"'.$ar[$i].'"'; $i = $i + 1;?>;
if(y>900 && y<1200) {
	if((x > 0 && x<300)) {
		textbox.setX(500);
		textbox.setY(300);
		textbox.setText(n);
	}
	if((x > 300 && x<600)) {
		textbox.setX(500);
		textbox.setY(300);
		textbox.setText(n);
	}
	if((x > 600 && x<900)) {
		textbox.setX(500);
		textbox.setY(300);
		textbox.setText(n);
	}
	if((x > 900 && x<1200)) {
		textbox.setX(500);
		textbox.setY(300);
		textbox.setText(n);
	}
}
});

var bg = new Image();
bg.onload = function() {
	background = new Kinetic.Image({
		image: bg,		
		width: 1200,
		height:	1200
	});
};
bg.src=("bg.jpg");

var imageObj = new Image();
imageObj.onload = function() {
	bucket1 = new Kinetic.Image({
		x: 0,
		y: 900,
		image: imageObj,		
		width:300,
		height: 300
	});
	bucket2 = new Kinetic.Image({
		x: 300,
		y: 900,
		image: imageObj,		
		width:300,
		height: 300
	});
	bucket3 = new Kinetic.Image({
		x: 600,
		y: 900,
		image: imageObj,		
		width:300,
		height: 300
	});
	bucket4 = new Kinetic.Image({
		x: 900,
		y: 900,
		image: imageObj,		
		width:300,
		height: 300
	});
	layer.add(background);
	layer.add(bucket1);
	layer.add(bucket2);
	layer.add(bucket3);
	layer.add(bucket4);
	layer.add(textbox);
	stage.add(layer);
};
imageObj.src="bucket.png";

</script>
