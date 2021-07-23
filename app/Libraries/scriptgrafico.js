new Morris.Line({
    // ID of the element in which to draw the chart.
    element: 'myfirstchart',
    // Chart data records -- each entry in this array corresponds to a point on the chart.
    data: [
      { year: '2014', value: 20 },
      { year: '2015', value: 10 },
      { year: '2016', value: 5 },
      { year: '2017', value: 5 },
      { year: '2018', value: 20 }
    ],
    // The name of the data record attribute that contains x-values.
    xkey: 'year',
    // A list of names of data record attributes that contain y-values.
    ykeys: ['value'],
    // Labels for the ykeys -- will be displayed when you hover over the chart.
    labels: ['Value']
  }).on('click', (index, item) => {
    console.log(index, item);
  });