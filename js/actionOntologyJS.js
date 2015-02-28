

$(function(){
	$("#collapseExampleSubaction").hide();
	$("#exampleSubaction").click(function(){
		$("#collapseExampleSubaction").toggle();
	});
	$("#collapseExamplePrecondition").hide();
	$("#examplePrecondition").click(function(){
		$("#collapseExamplePrecondition").toggle();
	});
	//$("#dropdownButton").toggle(function(){
		
	//});
	$("li").click(function(){
			var dropdownValue= $(this).attr("id");
			switch(dropdownValue){
				case "default":
					$("#dropdownButton").html('Choose Theta Roles &nbsp;<span class="caret"></span>');
					$("#inputAreaSemantic").attr({ "placeholder": "Select a role first from the dropdown menu on the left", "disabled":""} );
					$("#exampleSemantic").attr({ "data-title": "<b>First select a role!</b>", "data-content": "<i>Please first select a semantic role from the dropdown menu on the left!</i>" });
					$("#hiddenSemanticRole").attr({ "value": "default" });
					break;
				case "actor":
					$("#dropdownButton").html('Actor &nbsp;<span class="caret"></span>');
					$("#inputAreaSemantic").attr("placeholder", "Actor: doer of the action").removeAttr("disabled");
					$("#exampleSemantic").attr({ "data-title": "<b>Actor in context of a car:</b>", "data-content": "<i><ul><li>NULL</li></ul></i>" });
					$("#hiddenSemanticRole").attr({ "value": "actor" });
					break;
				case "agent":
					$("#dropdownButton").html('Agent &nbsp;<span class="caret"></span>');
					$("#inputAreaSemantic").attr("placeholder", "Agent: through which the action is performed").removeAttr("disabled");
					$("#exampleSemantic").attr({ "data-title": "<b>Agent in context of a car:</b>", "data-content": "<i><ul><li>NULL</li></ul></i>" });
					$("#hiddenSemanticRole").attr({ "value": "agent" });
					break;
				case "asset":
					$("#dropdownButton").html('Asset &nbsp;<span class="caret"></span>');
					$("#inputAreaSemantic").attr("placeholder", "Asset").removeAttr("disabled");
					$("#exampleSemantic").attr({ "data-title": "<b>Asset in context of a car:</b>", "data-content": "<i><ul><li>NULL</li></ul></i>" });
					$("#hiddenSemanticRole").attr({ "value": "asset" });
					break;
				case "attribute":
					$("#dropdownButton").html('Attribute &nbsp;<span class="caret"></span>');
					$("#inputAreaSemantic").attr("placeholder", "Attribute").removeAttr("disabled");
					$("#exampleSemantic").attr({ "data-title": "<b>Attribute in context of a car:</b>", "data-content": "<i><ul><li>NULL</li></ul></i>" });
					$("#hiddenSemanticRole").attr({ "value": "attribute" });
					break;
				case "beneficiary":
					$("#dropdownButton").html('Beneficiary &nbsp;<span class="caret"></span>');
					$("#inputAreaSemantic").attr("placeholder", "Beneficiary").removeAttr("disabled");
					$("#exampleSemantic").attr({ "data-title": "<b>Beneficiary in context of a car:</b>", "data-content": "<i><ul><li><li>NULL</li></ul></i>" });
					$("#hiddenSemanticRole").attr({ "value": "beneficiary" });
					break;
				case "cause":
					$("#dropdownButton").html('Cause &nbsp;<span class="caret"></span>');
					$("#inputAreaSemantic").attr("placeholder", "Cause").removeAttr("disabled");
					$("#exampleSemantic").attr({ "data-title": "<b>Cause in context of a car:</b>", "data-content": "<i><ul><li>NULL</li></ul></i>" });
					$("#hiddenSemanticRole").attr({ "value": "cause" });
					break;
				case "destination":
					$("#dropdownButton").html('Destination &nbsp;<span class="caret"></span>');
					$("#inputAreaSemantic").attr("placeholder", "Destination").removeAttr("disabled");
					$("#exampleSemantic").attr({ "data-title": "<b>Destination in context of a car:</b>", "data-content": "<i><ul><li> Place Y (where journey ends)</li></ul></i>" });
					$("#hiddenSemanticRole").attr({ "value": "destination" });
					break;
				case "source":
					$("#dropdownButton").html('Source &nbsp;<span class="caret"></span>');
					$("#inputAreaSemantic").attr("placeholder", "Source").removeAttr("disabled");
					$("#exampleSemantic").attr({ "data-title": "<b>Source in context of a car:</b>", "data-content": "<i><ul><li> Place X (where journey begins)</li></ul></i>" });
					$("#hiddenSemanticRole").attr({ "value": "source" });
					break;
				case "location":
					$("#dropdownButton").html('Location &nbsp;<span class="caret"></span>');
					$("#inputAreaSemantic").attr("placeholder", "Location").removeAttr("disabled");
					$("#exampleSemantic").attr({ "data-title": "<b>Location in context of a car:</b>", "data-content": "<i><ul><li>NULL</li></ul></i>" });
					$("#hiddenSemanticRole").attr({ "value": "location" });
					break;
				case "experiencer":
					$("#dropdownButton").html('Experiencer &nbsp;<span class="caret"></span>');
					$("#inputAreaSemantic").attr("placeholder", "experiencer").removeAttr("disabled");
					$("#exampleSemantic").attr({ "data-title": "<b>Experiencer in context of a car:</b>", "data-content": "<i><ul><li>NULL</li></ul></i>" });
					$("#hiddenSemanticRole").attr({ "value": "experiencer" });
					break;
				case "extent":
					$("#dropdownButton").html('Extent &nbsp;<span class="caret"></span>');
					$("#inputAreaSemantic").attr("placeholder", "Extent").removeAttr("disabled");
					$("#exampleSemantic").attr({ "data-title": "<b>Extent in context of a car:</b>", "data-content": "<i><ul><li>NULL</li></ul></i>" });
					$("#hiddenSemanticRole").attr({ "value": "extent" });
					break;
				case "instrument":
					$("#dropdownButton").html('Instrument &nbsp;<span class="caret"></span>');
					$("#inputAreaSemantic").attr("placeholder", "Instrument").removeAttr("disabled");
					$("#exampleSemantic").attr({ "data-title": "<b>Instrument in context of a car:</b>", "data-content": "<i><ul><li> Car</li></ul></i>" });
					$("#hiddenSemanticRole").attr({ "value": "instrument" });
					break;
				case "material":
					$("#dropdownButton").html('Material &nbsp;<span class="caret"></span>');
					$("#inputAreaSemantic").attr("placeholder", "Material").removeAttr("disabled");
					$("#exampleSemantic").attr({ "data-title": "<b>Material in context of a car:</b>", "data-content": "<i><ul><li>NULL</li>></ul></i>" });
					$("#hiddenSemanticRole").attr({ "value": "material" });
					break;
				case "patient":
					$("#dropdownButton").html('Patient &nbsp;<span class="caret"></span>');
					$("#inputAreaSemantic").attr("placeholder", "Patients").removeAttr("disabled");
					$("#exampleSemantic").attr({ "data-title": "<b>Patient in context of a car:</b>", "data-content": "<i><ul><li>NULL</li></ul></i>" });
					$("#hiddenSemanticRole").attr({ "value": "patient" });
					break;
				case "predicate":
					$("#dropdownButton").html('Predicate &nbsp;<span class="caret"></span>');
					$("#inputAreaSemantic").attr("placeholder", "Predicate").removeAttr("disabled");
					$("#exampleSemantic").attr({ "data-title": "<b>Predicate in context of a car:</b>", "data-content": "<i><ul><li> Start engine of the car</li><li> Accelerate car</li><li> Steer car</li><li> Stop car</li></ul></i>" });
					$("#hiddenSemanticRole").attr({ "value": "predicate" });
					break;
				case "recipient":
					$("#dropdownButton").html('Recipient &nbsp;<span class="caret"></span>');
					$("#inputAreaSemantic").attr("placeholder", "Recipient").removeAttr("disabled");
					$("#exampleSemantic").attr({ "data-title": "<b>Recipient in context of a car:</b>", "data-content": "<i><ul><li>NULL</li></ul></i>" });
					$("#hiddenSemanticRole").attr({ "value": "recipient" });
					break;
				case "stimulus":
					$("#dropdownButton").html('Stimulus &nbsp;<span class="caret"></span>');
					$("#inputAreaSemantic").attr("placeholder", "Stimulus").removeAttr("disabled");
					$("#exampleSemantic").attr({ "data-title": "<b>Stimulus in context of a car:</b>", "data-content": "<i><ul><li>NULL</li></ul></i>" });
					$("#hiddenSemanticRole").attr({ "value": "stimulus" });
					break;
				case "theme":
					$("#dropdownButton").html('Theme &nbsp;<span class="caret"></span>');
					$("#inputAreaSemantic").attr("placeholder", "Theme").removeAttr("disabled");
					$("#exampleSemantic").attr({ "data-title": "<b>Theme in context of a car:</b>", "data-content": "<i><ul><li> Passenger</li></ul></i>" });
					$("#hiddenSemanticRole").attr({ "value": "theme" });
					break;
				case "time":
					$("#dropdownButton").html('Time &nbsp;<span class="caret"></span>');
					$("#inputAreaSemantic").attr("placeholder", "Time").removeAttr("disabled");
					$("#exampleSemantic").attr({ "data-title": "<b>Time in context of a car:</b>", "data-content": "<i><ul><li>NULL</li></ul></i>" });
					$("#hiddenSemanticRole").attr({ "value": "time" });
					break;
				case "topic":
					$("#dropdownButton").html('Topic &nbsp;<span class="caret"></span>');
					$("#inputAreaSemantic").attr("placeholder", "Topic").removeAttr("disabled");
					$("#exampleSemantic").attr({ "data-title": "<b>Topic in context of a car:</b>", "data-content": "<i><ul><li>NULL</li></ul></i>" });
					$("#hiddenSemanticRole").attr({ "value": "topic" });
					break;
				default:
					$("#dropdownButton").html('Choose Theta Roles &nbsp;<span class="caret"></span>');
			}
		});
});
