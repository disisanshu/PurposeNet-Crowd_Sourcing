<div id="container"></div>
<script src="kinetic.min.js"></script>
<script>
var stage = new Kinetic.Stage({
container: 'container',
width: 1200,
height: 700
});
var layer = new Kinetic.Layer();
var complexText = new Kinetic.Text({
x: 500,
y: 300,
text: "wheels",
textFill: '#555',
fill: '#ddd',
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
layer.add(complexText);
stage.add(layer);
</script>
