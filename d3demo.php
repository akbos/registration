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
		   margin-right: 2px;
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
		2nd D3 example </br>
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
		</br>
	        The same bar graph now using svg (earlier we used divs)
		<script type="text/javascript">
			var w = 500;
			var h = 100; 
			var barPadding = 1;
			
			var dataset = [4,5,13,46,23,17,18,19,34,13,4,34,23,35,23,9,34];
			
			
			var svg = d3.select("body")
						.append("svg")
						.attr("width", w)
						.attr("height", h);

			svg.selectAll("rect")
			   .data(dataset)
			   .enter()
			   .append("rect")
			   .attr("x", function(d, i) {
			   		return i * (w / dataset.length);
			   })
			   .attr("y", function(d) {
			   		return h - (d * 4);
			   })
			   .attr("width", w / dataset.length - barPadding)
			   .attr("height", function(d) {
			   		return d * 4;
			   })
			   .attr("fill", function(d) {
					return "rgb(0, 0, " + (d * 10) + ")";
			   });

			svg.selectAll("text")
			   .data(dataset)
			   .enter()
			   .append("text")
			   .text(function(d) {
			   		return d;
			   })
			   .attr("text-anchor", "middle")
			   .attr("x", function(d, i) {
			   		return i * (w / dataset.length) + (w / dataset.length - barPadding) / 2;
			   })
			   .attr("y", function(d) {
			   		return h - (d * 4) + 14;
			   })
			   .attr("font-family", "sans-serif")
			   .attr("font-size", "11px")
			   .attr("fill", "white");			
		</script>
	</body>
</html>
