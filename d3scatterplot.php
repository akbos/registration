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
		Basic ScatterPlot
		<script type="text/javascript">
			var h = 300;
			var w = 400;
			var barPadding = 1;
			
			var dataset = [[121,58],[168,60],[23,17],[18,19],[34,13],[4,34],[23,35],[23,9],[34,19]];
			
			
			var svg = d3.select("body")
						.append("svg")
						.attr("width", w)
						.attr("height", h);

			svg.selectAll("circle")
			   .data(dataset)
			   .enter()
			   .append("circle")
			   .attr("cx", function(d) {
			   		return d[0];
			   })
			   .attr("cy", function(d) {
			   		return d[1];
			   })
			   .attr("r", function(d){ return Math.sqrt(d[1])});
			</script>

			Basic Scatterplot with Labels
			<script>
			var h = 300;
                        var w = 400;
                        var barPadding = 1;
                        
                        var dataset = [[121,58],[168,60],[23,17],[18,19],[34,13],[4,34],[23,35],[23,9],[34,19]];
                        
                        
                        var svg = d3.select("body")
                                                .append("svg")
                                                .attr("width", w)
                                                .attr("height", h);

                        svg.selectAll("circle")
                           .data(dataset)
                           .enter()
                           .append("circle")
                           .attr("cx", function(d) {
                                        return d[0];
                           })
                           .attr("cy", function(d) {
                                        return d[1];
                           })
                           .attr("r", function(d){ return Math.sqrt(d[1])});

			  svg.selectAll("text")
			   .data(dataset)
			   .enter()
			   .append("text")
			   .text(function(d){ return d[0]+","+d[1]})
			   .attr("x", function(d){ return d[0];})					   .attr("y", function(d){ return d[1];})
			   .attr("font-family", "sans-seriff")
			   .attr("font-size", "11px")
			   .attr("fill", "red");
;		   

			</script>
	</body>
</html>
