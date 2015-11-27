/**
 * Custom jQuery's
 * Created by PhpStorm.
 * User: G.ELLURANGGO
 */

// Set the dimensions of the canvas / graph
var m = [20, 10, 20, 10];
var w = window.innerWidth - m[1] - m[3] - 340;
var h = 340 - m[0] - m[2];

// Get the data
var data=[265, 492, 431, 124, 465, 810, 856, 621, 431, 613, 550, 600];

function formatCurrency (d){
    //return "$" + d;
    return d;
}

// Set the ranges
var xLabels = d3.time.scale().domain([new Date(2015, 0, 1), new Date(2015, 11, 31)]).range([0, w]);
var x = d3.scale.linear().domain([0, data.length]).range([0, w]);
var y = d3.scale.linear().domain([0, d3.max(data)]).range([h, 0]);

// Define the line
var line = d3.svg.line()
    .x(function(d,i) {
        console.log('Plotting X value for data point: ' + d + ' using index: ' + i + ' to be at: ' + x(i) + ' using our xScale.');
        return x(i);
    })
    .y(function(d) {
        console.log('Plotting Y value for data point: ' + d + ' to be at: ' + y(d) + " using our yScale.");
        return y(d);
    })

// Adds the svg canvas
var graph = d3.select("#monthlyReport").append("svg:svg")
    .attr("width", w + m[1] + m[3])
    .attr("height", h + m[0] + m[2])
    .append("svg:g")
    .attr("transform", "translate(" + 120 + "," + m[0] + ")");

// Define the axes
var xAxis = d3.svg.axis().scale(xLabels).ticks(d3.time.months).tickFormat(d3.time.format("%b")).tickSize(-h).tickSubdivide(true);
graph.append("svg:g")
    .attr("class", "x axis")
    .attr("transform", "translate(0," + h + ")")
    .call(xAxis);

var yAxisLeft = d3.svg.axis().scale(y).ticks(7).orient("left");
graph.append("svg:g")
    .attr("class", "y axis")
    .attr("transform", "translate(-25,0)")
    .call(yAxisLeft);

// Add the valueline path.
graph.append("svg:path")
    .attr("d", line(data))
    .attr('class', 'line');