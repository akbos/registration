<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<script type="text/javascript" src="d3/d3.js">
		<title>D3 test</title>
		</script>
		<style type="text/css">
	          div.bar{
		   display: inline-block;
		   width: 20px;
		   height: 75px;
		   background-color: teal;
		  }
		</style>
	</head>
	<body>
		1st D3 example
		<script type="text/javascript">
		 d3.select("body").append("p").text("Paragraph!");
		
		 var dataset = [5,6,7,8,9,10];
		 d3.select("body").selectAll("p")
		 .data(dataset)
		 .enter()
   		 .append("p")
	         .text(function(d){ return "I can count upto " + d;})
		 .style("color",function(d){
			if (d>7){
				return "red";
			}else{
				return "blue";
			}});
		</script>
		2nd D3 example
		<script type="text/javascript">
			var dataset1 = [6,3,2,6,7,33,40,42,48,43,2,2,1,3,3,14,6,16,2,10];
			d3.select("body").selectAll("div")
			.data(dataset1)
			.enter()
			.append("div")
			.attr("class","bar")
			.style("height",function(d){
			    var barHeight = d*5;
			    return barHeight + "px";	
			});
		</script>
	</body>
</html>
