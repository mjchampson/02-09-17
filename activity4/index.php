<!DOCTYPE html>
<html>
<head>
	<title>ACT#9</title>


<script language="javascript" type="text/javascript">
<!--
function getgrade(){
	var retValgrade= prompt("Enter grade:","....")
	if(retValgrade >=96 && retValgrade <=100 ){
		document.write("<h1>A+</h1>")
	}
	else if(retValgrade >=91 && retValgrade <=95){
		document.write("<h1>A</h1>")
	}
	else if(retValgrade >=86 && retValgrade <=90){
		document.write("<h1>A-</h1>")
	}
	else if(retValgrade >=80 && retValgrade <=85){
		document.write("<h1>B+</h1>")
	}
	else if(retValgrade >=75 && retValgrade <=79){
		document.write("<h1>B</h1>")
	}
	else if(retValgrade >=69 && retValgrade <=74){
		document.write("<h1>B-</h1>")
	}
	else if(retValgrade >=50 && retValgrade <=69){
		document.write("<h1>C</h1>")
	}
	else if(retValgrade <=49 && retValgrade >=0){
		document.write("<h1>F</h1>")
	}
	
	else if(retValgrade >=101){
		alert("Re-Enter correct Grade.")
		
	}
	setTimeout(function(){
		window.location.reload(1);
	},1000);
	
}
-->
</script>
</head>
<body>
<h1>Grading System</h1>
<input type="button" value="GRADE" onclick="getgrade()"/>
</body>
</html>