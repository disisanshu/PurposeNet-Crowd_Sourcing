
$(document).ready(function(){

	$("li").click(function(){
			var dropdownValue= $(this).attr("id");
			echo dropdownValue;
			switch(dropdownValue){
				case "default":
					$("#dropdownButton").html('Choose Features &nbsp;<span class="caret"></span>');
					$("#inputArea").attr({ "placeholder": "Select a role first from the dropdown menu on the left", "disabled":""} );
					$("#example").attr({ "data-title": "<b>First select a role!</b>", "data-content": "<i>Please first select a semantic role from the dropdown menu on the left!</i>" });
					$("#hiddenDescriptiveFeature").attr({ "name": "".dropdownValue, "value": "".dropdownValue });
					break;
				case "color":
					$("#dropdownButton").html('Color &nbsp;<span class="caret"></span>');
					$("#inputArea").attr("placeholder", "Color: the usual color in which this artifact appears after manufacture").removeAttr("disabled");
					$("#example").attr({ "data-title": "<b>Color in context of paper:</b>", "data-content": "<i><ul><li> White</li></ul></i>" });
					$("#hiddenDescriptiveFeature").attr({ "name": "".dropdownValue, "value": "".dropdownValue });
					break;
				case "constitution":
					$("#dropdownButton").html('Constitution &nbsp;<span class="caret"></span>');
					$("#inputArea").attr("placeholder", "Constitution: the material with which this artifact is mostly made of").removeAttr("disabled");
					$("#example").attr({ "data-title": "<b>Constitution in context of table:</b>", "data-content": "<i><ul><li> Wood</li></ul></i>" });
					$("#hiddenDescriptiveFeature").attr({ "name": "".dropdownValue, "value": "".dropdownValue });
					break;
				case "fluidity":
					$("#dropdownButton").html('Fluidity &nbsp;<span class="caret"></span>');
					$("#inputArea").attr("placeholder", "Fluidity: property of a substance that enables it to flow. It takes the values fluid and nonfluid.").removeAttr("disabled");
					$("#example").attr({ "data-title": "<b>Fluidity in context of juice:</b>", "data-content": "<i><ul><li> Fluid</li></ul></i>" });
					$("#hiddenDescriptiveFeature").attr({ "name": "".dropdownValue, "value": "".dropdownValue });
					break;
				case "heaviness":
					$("#dropdownButton").html('Heaviness &nbsp;<span class="caret"></span>');
					$("#inputArea").attr("placeholder", "Heaviness: refers to whether an artifact is Light, Moderate or Heavy in weight").removeAttr("disabled");
					$("#example").attr({ "data-title": "<b>Heaviness in context of screws:</b>", "data-content": "<i><ul><li> Light</li></ul></i>" });
					$("#hiddenDescriptiveFeature").attr({ "name": "".dropdownValue, "value": "".dropdownValue });
					break;
				case "inertness":
					$("#dropdownButton").html('Inertness &nbsp;<span class="caret"></span>');
					$("#inputArea").attr("placeholder", "Inertness: refers to whether an artifact is Acidic, Alkaline or Neutral").removeAttr("disabled");
					$("#example").attr({ "data-title": "<b>Inertness in context of Lime juice:</b>", "data-content": "<i><ul><li><li> Acidic</li></ul></i>" });
					$("#hiddenDescriptiveFeature").attr({ "name": "".dropdownValue, "value": "".dropdownValue });
					break;
				case "mobility":
					$("#dropdownButton").html('Mobility &nbsp;<span class="caret"></span>');
					$("#inputArea").attr("placeholder", "Mobility: indicates whether the given artifact moves in course of its action or remains stationary").removeAttr("disabled");
					$("#example").attr({ "data-title": "<b>Mobility in context of a car:</b>", "data-content": "<i><ul><li> Mobile</li></ul></i>" });
					$("#hiddenDescriptiveFeature").attr({ "name": "".dropdownValue, "value": "".dropdownValue });
					break;
				case "oilness":
					$("#dropdownButton").html('Oilness &nbsp;<span class="caret"></span>');
					$("#inputArea").attr("placeholder", "Oilness: indicates if the surface of the artifact is oily or not").removeAttr("disabled");
					$("#example").attr({ "data-title": "<b>Oilness in context of carburetor:</b>", "data-content": "<i><ul><li> Oily</li></ul></i>" });
					$("#hiddenDescriptiveFeature").attr({ "name": "".dropdownValue, "value": "".dropdownValue });
					break;
				case "position":
					$("#dropdownButton").html('Position &nbsp;<span class="caret"></span>');
					$("#inputArea").attr("placeholder", "Position: indicates where the component artifact is located vis-a-vis the artifact in which
it is resident").removeAttr("disabled");
					$("#example").attr({ "data-title": "<b>Position in context of Clutch:</b>", "data-content": "<i><ul><li> Located inside the car</li></ul></i>" });
					$("#hiddenDescriptiveFeature").attr({ "name": "".dropdownValue, "value": "".dropdownValue });
					break;
				case "shape":
					$("#dropdownButton").html('Shape &nbsp;<span class="caret"></span>');
					$("#inputArea").attr("placeholder", "Shape: indicates the general shape of the artifact").removeAttr("disabled");
					$("#example").attr({ "data-title": "<b>Shape in context of Racing Track:</b>", "data-content": "<i><ul><li> Oval</li></ul></i>" });
					$("#hiddenDescriptiveFeature").attr({ "name": "".dropdownValue, "value": "".dropdownValue });
					break;
				case "size":
					$("#dropdownButton").html('Size &nbsp;<span class="caret"></span>');
					$("#inputArea").attr("placeholder", "Size: refers to the amount of space occupied by the artifact").removeAttr("disabled");
					$("#example").attr({ "data-title": "<b>Size in context of a car:</b>", "data-content": "<i><ul><li> Moderate</li></ul></i>" });
					$("#hiddenDescriptiveFeature").attr({ "name": "".dropdownValue, "value": "".dropdownValue });
					break;
				case "sliminess":
					$("#dropdownButton").html('Sliminess &nbsp;<span class="caret"></span>');
					$("#inputArea").attr("placeholder", "Sliminess: refers to the stickiness property of a substance").removeAttr("disabled");
					$("#example").attr({ "data-title": "<b>Sliminess in context of Mineral Oil:</b>", "data-content": "<i><ul><li> Nonslimmy</li></ul></i>" });
					$("#hiddenDescriptiveFeature").attr({ "name": "".dropdownValue, "value": "".dropdownValue });
					break;
				case "smell":
					$("#dropdownButton").html('Smell &nbsp;<span class="caret"></span>');
					$("#inputArea").attr("placeholder", "Smell: indicates the property of an artifact that is sensed by the nose").removeAttr("disabled");
					$("#example").attr({ "data-title": "<b>Smell in context of a Room Freshner:</b>", "data-content": "<i><ul><li> Fragrant</li></ul></i>" });
					$("#hiddenDescriptiveFeature").attr({ "name": "".dropdownValue, "value": "".dropdownValue });
					break;
				case "smoothness":
					$("#dropdownButton").html('Smoothness &nbsp;<span class="caret"></span>');
					$("#inputArea").attr("placeholder", "Smoothness: indicates the texture of the surface of an artifact").removeAttr("disabled");
					$("#example").attr({ "data-title": "<b>Smoothness in context of Knife:</b>", "data-content": "<i><ul><li> Sharp</li>></ul></i>" });
					$("#hiddenDescriptiveFeature").attr({ "name": "".dropdownValue, "value": "".dropdownValue });
					break;
				case "softness":
					$("#dropdownButton").html('Softness &nbsp;<span class="caret"></span>');
					$("#inputArea").attr("placeholder", "Softness: indicates whether the artifact is easily deformed on application of stress").removeAttr("disabled");
					$("#example").attr({ "data-title": "<b>Softness in context of a Toy Gun:</b>", "data-content": "<i><ul><li> Hard</li></ul></i>" });
					$("#hiddenDescriptiveFeature").attr({ "name": "".dropdownValue, "value": "".dropdownValue });
					break;
				case "sound":
					$("#dropdownButton").html('Sound &nbsp;<span class="caret"></span>');
					$("#inputArea").attr("placeholder", "Sound: values are Silent, Whisper, Bearable_Sound and Unbearable_Sound").removeAttr("disabled");
					$("#example").attr({ "data-title": "<b>Sound in context of Atom Bomb:</b>", "data-content": "<i><ul><li> Unbearable</li></ul></i>" });
					$("#hiddenDescriptiveFeature").attr({ "name": "".dropdownValue, "value": "".dropdownValue });
					break;
				case "stability":
					$("#dropdownButton").html('Stability &nbsp;<span class="caret"></span>');
					$("#inputArea").attr("placeholder", "Stability: indicates whether the artifact remains as it is or disintegrates in normal").removeAttr("disabled");
					$("#example").attr({ "data-title": "<b>Stability in context of Ice:</b>", "data-content": "<i><ul><li> Unstable</li></ul></i>" });
					$("#hiddenDescriptiveFeature").attr({ "name": "".dropdownValue, "value": "".dropdownValue });
					break;
				case "state":
					$("#dropdownButton").html('State &nbsp;<span class="caret"></span>');
					$("#inputArea").attr("placeholder", "State: shows the Physical state in which the artifact usually exists").removeAttr("disabled");
					$("#example").attr({ "data-title": "<b>State in context of paper:</b>", "data-content": "<i><ul><li> Solid</li></ul></i>" });
					$("#hiddenDescriptiveFeature").attr({ "name": "".dropdownValue, "value": "".dropdownValue });
					break;
				case "subtleness":
					$("#dropdownButton").html('Subtleness &nbsp;<span class="caret"></span>');
					$("#inputArea").attr("placeholder", "Subtleness: indicates whether the artifact can be perceived visually or not").removeAttr("disabled");
					$("#example").attr({ "data-title": "<b>Subtleness in context of Power:</b>", "data-content": "<i><ul><li> Subtle</li></ul></i>" });
					$("#hiddenDescriptiveFeature").attr({ "name": "".dropdownValue, "value": "".dropdownValue });
					break;
				case "taste":
					$("#dropdownButton").html('Taste &nbsp;<span class="caret"></span>');
					$("#inputArea").attr("placeholder", "Taste: indicates the various tastes that can be perceived by the tongue").removeAttr("disabled");
					$("#example").attr({ "data-title": "<b>Taste in context of Sugar</b>", "data-content": "<i><ul><li> Sweet</li></ul></i>" });
					$("#hiddenDescriptiveFeature").attr({ "name": "".dropdownValue, "value": "".dropdownValue });
					break;
				case "temperature":
					$("#dropdownButton").html('Temperature &nbsp;<span class="caret"></span>');
					$("#inputArea").attr("placeholder", "Temperature: indicates the temperature in which the artifact usually functions").removeAttr("disabled");
					$("#example").attr({ "data-title": "<b>Temperature in context of Ice cream:</b>", "data-content": "<i><ul><li> Cold</li></ul></i>" });
					$("#hiddenDescriptiveFeature").attr({ "name": "".dropdownValue, "value": "".dropdownValue });
					break;
				case "transparency":
					$("#dropdownButton").html('Transparency &nbsp;<span class="caret"></span>');
					$("#inputArea").attr("placeholder", "Transparency: indicates the thickness of surface of an artifact").removeAttr("disabled");
					$("#example").attr({ "data-title": "<b>Transparency in context of Plastic</b>", "data-content": "<i><ul><li> Semi-Transparent</li></ul></i>" });
					$("#hiddenDescriptiveFeature").attr({ "name": "".dropdownValue, "value": "".dropdownValue });
					break;
				case "capacity":
					$("#dropdownButton").html('Capacity &nbsp;<span class="caret"></span>');
					$("#inputArea").attr("placeholder", "Capacity: maximum weight that this artifact can hold(integer value)").removeAttr("disabled");
					$("#example").attr({ "data-title": "<b>Capacity in context of a heavy-duty chair(in lbs)</b>", "data-content": "<i><ul><li> 500</li></ul></i>" });
					$("#hiddenDescriptiveFeature").attr({ "name": "".dropdownValue, "value": "".dropdownValue });
					break;
				case "magnitude":
					$("#dropdownButton").html('Magnitude &nbsp;<span class="caret"></span>');
					$("#inputArea").attr("placeholder", "Magnitude: standard dimensions of a sample of the artifact(integer value)").removeAttr("disabled");
					$("#example").attr({ "data-title": "<b>Length in context of a ladder(in m)</b>", "data-content": "<i><ul><li> 5</li></ul></i>" });
					$("#hiddenDescriptiveFeature").attr({ "name": "".dropdownValue, "value": "".dropdownValue });
					break;
				case "number":
					$("#dropdownButton").html('Number &nbsp;<span class="caret"></span>');
					$("#inputArea").attr("placeholder", "Number: indicates the standard number of items that come in a set of this artifact").removeAttr("disabled");
					$("#example").attr({ "data-title": "<b>Number in context of Footwear</b>", "data-content": "<i><ul><li> 2</li></ul></i>" });
					$("#hiddenDescriptiveFeature").attr({ "name": "".dropdownValue, "value": "".dropdownValue });
					break;
				case "weight":
					$("#dropdownButton").html('Standard Weight &nbsp;<span class="caret"></span>');
					$("#inputArea").attr("placeholder", "Standard Weight: indicates the weight of the artifact(integer value)").removeAttr("disabled");
					$("#example").attr({ "data-title": "<b>Standard Weight in context of a Sugar packet(in kg)</b>", "data-content": "<i><ul><li> 1</li></ul></i>" });
					$("#hiddenDescriptiveFeature").attr({ "name": "".dropdownValue, "value": "".dropdownValue });
					break;
				default:
					$("#dropdownButton").html('Choose Features &nbsp;<span class="caret"></span>');
			}
		});
});