<html>
	<head>
		<meta charset="utf-8">
		<meta name="keywords" content="studygroup, STUDYGROUP, Study">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="STUDYGROUP!">
	</head>
	<body>
		<div id="adde">products</div>
		<button id="rojas">solvec</button>
		<div id="lisaberga"></div>
		<img id="jabbe" src="http://www.gymgrossisten.com/bilder/produkter/700x700/SA001375_5.jpg?v=1431093574" style="display:none"/>
	</body>
	<script>
		var counter = 0;
		var avid=document.getElementById("lisaberga");
		var tzigas=document.getElementById("adde");
		var gashi=document.getElementById("rojas");
		var boris=document.getElementById("jabbe");
		gashi.onclick=function(){
			counter++;
			avid.innerHTML = counter;
			if (counter === 10) {
				boris.style="display:block";
			}
			var solved;
			if(tzigas.innerHTML === "products") {
				solved = "persons"
			}
			if(tzigas.innerHTML === "persons") {
				solved = "products"
			}
			var oohneei = getRandomColor();
			solved.style="color:oohneei";
			tzigas.innerHTML = solved;
		};

		function getRandomColor() {
			var letters = '0123456789ABCDEF';
			var color = '#';
			for (var i = 0; i < 6; i++ ) {
				color += letters[Math.floor(Math.random() * 16)];
			}
			return color;
		}
	</script>  

</html>
