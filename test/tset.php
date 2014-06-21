<html>
<head>
<script language="javascript" type="text/javascript">
function getValue() {
var currentvalue = document.form1.dropdown.value;
document.getElementById("value");
value.innerHTML = currentvalue;
}
</script>
</head>
<body onload="getValue()">
<style type="text/css">
#value {
border: solid 2px black;
width: 100px;
}
</style>
<form name="form1">
<select name="dropdown" onChange="getValue()">
<option value="option1">Option 1</option>
<option value="option2">Option 2</option>
<option value="option3">Option 3</option>
<option value="option4">Option 4</option>
<option value="option5">Option 5</option>
</select>
</form>
<div id="value">
</div>
</body>
</html>