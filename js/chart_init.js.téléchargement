$(window).load(function() {
  
  //chart EDIT CHART DETAILS HERE
    "use strict";
    var data = {
  // A labels array that can contain any sort of values
  labels: ['2010', '2011', '2012', '2013', '2014'],
  // Our series array that contains series objects or in this case series data arrays
  series: [
    [3, 5, 4, 7, 8]
  ]
  };
  var options = {
  // Don't draw the line chart points
  showPoint: true,
  // Disable line smoothing
  lineSmooth: false,
  // Y-Axis specific configuration
  axisY: {
    // Lets offset the chart a bit from the labels
    offset: 60,
    // The label interpolation function enables you to modify the values
    // used for the labels on each axis. Here we are converting the
    // values into million pound.
    labelInterpolationFnc: function(value) {
      return '$' + value + 'mil';
    }
    }
  };
  new Chartist.Line('.ct-chart', data, options);
   //chart end   

  });