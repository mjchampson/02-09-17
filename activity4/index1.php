<!DOCTYPE html>
<html>
<head>
	<title>	act 9 </title>
</head>
<body>

<script type="text/javascript">
	
		function getGrade() {
			var  status = true;
			var isNaN = true;
			while(status){
			var grade = prompt("Enter your grade...", "your Grade Here");
			


			switch(true)
			{
				case (grade >= 96 && grade <= 100 ) : document.write("A+");
				status = false;
				break;
				case (grade >= 91 && grade <= 95 ) : document.write("A");
				status = false;
				break;
				case (grade >= 86 && grade <= 90 ) : document.write("A-");
				status = false;
				break;
				case (grade >= 81 && grade <= 85 ) : document.write("B+");
				status = false;
				break;
				case (grade >= 76 && grade <= 80 ) : document.write("B");
				status = false;
				break;
				case (grade >= 71 && grade <= 75 ) : document.write("B-");
				status = false;
				break;
				case (grade >= 66 && grade <= 70 ) : document.write("C+");
				status = false;
				break;
				case (grade >= 61 && grade <= 65 ) : document.write("C");
				status = false;
				break;
				case (grade >= 50 && grade <= 60 ) : document.write("C-");
				status = false;
				break;
				case (grade >= 45 && grade <= 49 ) : document.write("D");
				status = false;
				break;
				case (grade >= 0 && grade <= 44 ) : document.write("F");
				status = false;
				break;	
				default : alert("Re-Enter Correct Grade.");
			}
		}
	}
</script>
<input type="button" onclick="getGrade()" value="Click to Enter the Grade!" />
</body>
</html>