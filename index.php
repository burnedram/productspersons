<html>
	<head>
		<meta charset="utf-8">
		<meta name="keywords" content="studygroup, STUDYGROUP, Study">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="STUDYGROUP!">
		<style>
			.mraffediv {
			    width: 300px;
			    height: 300px;
			    background-color: red;
			    position: relative;
			    -webkit-animation: mraffetrans 3s linear infinite;
			    animation: mraffetrans 3s linear infinite;
			}

			.mraffeimg {
			    width: 300px;
			    height: 300px;
			    position: relative;
			    -webkit-animation: mrnegrot 25s linear infinite;
			    animation: mrnegrot 25s linear infinite;
			}

			@-webkit-keyframes mraffetrans {
			    0%   {background-color:red; left:0px; top:0px;}
			    25%  {background-color:yellow; left:200px; top:0px;}
			    50%  {background-color:blue; left:200px; top:200px;}
			    75%  {background-color:green; left:0px; top:200px;}
			    100% {background-color:red; left:0px; top:0px;}
			}

			@keyframes mraffetrans {
			    0%   {background-color:red; left:0px; top:0px;}
			    25%  {background-color:yellow; left:200px; top:0px;}
			    50%  {background-color:blue; left:200px; top:200px;}
			    75%  {background-color:green; left:0px; top:200px;}
			    100% {background-color:red; left:0px; top:0px;}
			  from {
			    -ms-transform: rotate(0deg);
			    -moz-transform: rotate(0deg);
			    -webkit-transform: rotate(0deg);
			    -o-transform: rotate(0deg);
			    transform: rotate(0deg);
			  }
			  to {
			    -ms-transform: rotate(360deg);
			    -moz-transform: rotate(360deg);
			    -webkit-transform: rotate(360deg);
			    -o-transform: rotate(360deg);
			    transform: rotate(360deg);
			  }
			}

			@keyframes mrnegrot {
			  from {
			    -ms-transform: rotate(0deg);
			    -moz-transform: rotate(0deg);
			    -webkit-transform: rotate(0deg);
			    -o-transform: rotate(0deg);
			    transform: rotate(0deg);
			  }
			  to {
			    -ms-transform: rotate(-360deg);
			    -moz-transform: rotate(-360deg);
			    -webkit-transform: rotate(-360deg);
			    -o-transform: rotate(-360deg);
			    transform: rotate(-360deg);
			  }
			}
		</style>
	</head>
	<body>
		<div id="adde">products</div>
		<button id="rojas">solvec</button>
		<div id="lisaberga"></div>
		<img id="jabbe" src="http://www.gymgrossisten.com/bilder/produkter/700x700/SA001375_5.jpg?v=1431093574" style="display:none"/>
		<div id="mraffe" class="mraffediv" style="display:none">
			<img class="mraffeimg" src="http://media.snusbolaget.se/snusbolaget/images/swm-841-2015-09-09-133413930/555/555/0/kaliber-vit-portionssnus.png"/>
		</div>
	</body>
	<script>
		var counter = 0;
		var avid=document.getElementById("lisaberga");
		var tzigas=document.getElementById("adde");
		var gashi=document.getElementById("rojas");
		var boris=document.getElementById("jabbe");
		var klotet=document.getElementById("mraffe");
		gashi.onclick=function(){
			counter++;
			avid.innerHTML = counter;
			if (counter === 10) {
				boris.style="display:block";
			} else if (counter == 30) {
				boris.style="display:none";
				klotet.style="display:block";
			}
			var solved;
			if(tzigas.innerHTML === "products") {
				solved = "persons"
			}
			if(tzigas.innerHTML === "persons") {
				solved = "products"
			}
			var oohneei = getRandomColor();
			tzigas.style="color:"+oohneei;
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
