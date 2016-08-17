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
                        
                        var dataset = [[121,58],[168,60],[23,17],[18,19],[34,13],[39,34],[73,65],[23,89],[34,65]];
                        
                        
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
			</script>
			Building a ScatterPlot MySelf
			<script type="text/javascript">
			var height = 100;
			var width = 350;

                        // Define the dataset. For each element in the dataset, later d3 will create a new element.
			var dataset = [[34,54],[44,75],[43,23]];
			
                        
			// create a svg oject by selecting the body and appending svg to it. Assign a set of attributes to the svg object created
			var svg = d3.select("body")
					.append("svg")
					.attr("height",height)
					.attr("width", width);

			// now draw on that svg canvas. D3 makes you select an element even if it is not available. Once you select an element and hit enter(), a new element is added to the canvas for every entry in the dataset. In this example, we selectAll'd circle, appended circle to svg after hitting enter() for the set of elements in the dataset and then assigned a set of attributes to circle - things like coordinates of the center and the radius
			svg.selectAll("circle")
					.data(dataset)
					.enter()
					.append("circle")
					.attr("cx",function(d){return d[0];})
					.attr("cy",function(d){return d[1];})
					.attr("r",10);
			
			</script>
			Now Let's add axes to the scatterplot
			<script type="text/javascript">
			var w = 300;
			var h = 400;

			var dataset = [[34,34],[54,23],[64,76]];

			// In v4, of D3 library, this is how to create axes. create x variable and assign it the domain and range. It should be of type scaleLinear. Later pass this x variable to axisBottom which will plot the axis for you. 
			var x = d3.scaleLinear().range([0,w]);
			x.domain([0,d3.max(dataset, function(d){return d[0];})]);

			var svg = d3.select("body")
					.append("svg")
					.attr("width",w)
					.attr("height",h);
					

 svg.selectAll("circle")
                                        .data(dataset)
                                        .enter()
                                        .append("circle")
                                        .attr("cx",function(d){return d[0];})
                                        .attr("cy",function(d){return d[1];})
                                        .attr("r",10);

//Actually plot the axis by callling axisBottom and passing it the x variable. The transform function when applied to g group changes the actual location of the axis on the svg element. Here we moved it to the bottom of the svg. Without transform, it would be plotted above the data points on the scatterplot
					svg.append("g")
					.attr("transform","translate(0," + height + ")")
					.call(d3.axisBottom(x));
				
			</script>
			
	</body>
</html>
