const ltcData = async () => {
    const response = await fetch('https://min-api.cryptocompare.com/data/v2/histominute?fsym=LTC&tsym=USD&limit=119&api_key=dc60a30bf57a201dc1566cfc3c0ebfbf565518e71b1ada5137a6d2ea0161df0b');
    const json = await response.json();
    const data = json.Data.Data
    const times = data.map(obj => obj.time)
    const prices = data.map(obj => obj.high)
    return {
      times,
      prices
    }
}
const dogeData = async () => {
    const response = await fetch('https://min-api.cryptocompare.com/data/v2/histominute?fsym=DOGE&tsym=USD&limit=119&api_key=dc60a30bf57a201dc1566cfc3c0ebfbf565518e71b1ada5137a6d2ea0161df0b');
    const json = await response.json();
    const data = json.Data.Data
    const times = data.map(obj => obj.time)
    const prices = data.map(obj => obj.high)
    return {
      times,
      prices
    }
}

const tronData = async () => {
    const response = await fetch('https://min-api.cryptocompare.com/data/v2/histominute?fsym=TRX&tsym=USD&limit=119&api_key=dc60a30bf57a201dc1566cfc3c0ebfbf565518e71b1ada5137a6d2ea0161df0b');
    const json = await response.json();
    const data = json.Data.Data
    const times = data.map(obj => obj.time)
    const prices = data.map(obj => obj.high)
    return {
      times,
      prices
    }
}

function checkStatus(response) {
    if (response.ok) {
      return Promise.resolve(response);
    } else {
      return Promise.reject(new Error(response.statusText));
    }
}

let createLtcChart
let createDogeChart
let createTronChart

async function printLtcChart() {
    let { times, prices } = await ltcData()
  
    let ltcChart = document.getElementById('ltcChart').getContext('2d');
  
    let gradient = ltcChart.createLinearGradient(0, 0, 0, 400);
  
    gradient.addColorStop(0, 'grey');
    gradient.addColorStop(.425, 'grey');
  
    Chart.defaults.global.defaultFontFamily = 'Red Hat Text';
    Chart.defaults.global.defaultFontSize = 12;
  
    createLtcChart = new Chart(ltcChart, {
      type: 'line',
      data: {
        labels: times,
        datasets: [{
          label: '$',
          data: prices,
          backgroundColor: gradient,
          borderColor: 'green',
          borderJoinStyle: 'round',
          borderCapStyle: 'round',
          borderWidth: 3,
          pointRadius: 0,
          pointHitRadius: 10,
          lineTension: .2,
        }]
      },
  
      options: {
        title: {
          display: false,
          text: 'Heckin Chart!',
          fontSize: 35
        },
  
        legend: {
          display: false
        },
  
        layout: {
          padding: {
            left: 0,
            right: 0,
            top: 0,
            bottom: 0
          }
        },
  
        scales: {
          xAxes: [{
            display: false,
            gridLines: {}
          }],
          yAxes: [{
            display: false,
            gridLines: {}
          }]
        },
  
        tooltips: {
          callbacks: {
            //This removes the tooltip title
            title: function() {}
         },
          //this removes legend color
          displayColors: false,
          yPadding: 10,
          xPadding: 10,
          position: 'nearest',
          caretSize: 10,
          backgroundColor: '#white',
          bodyFontSize: 15,
          bodyFontColor: '#FFFF00' 
        }
      }
    });
  }

  async function printDogeChart() {
    let { times, prices } = await dogeData()
  
    let dogeChart = document.getElementById('dogeChart').getContext('2d');
  
    let gradient = dogeChart.createLinearGradient(0, 0, 0, 400);
  
    gradient.addColorStop(0, 'yellow');
    gradient.addColorStop(.425, 'green');
  
    Chart.defaults.global.defaultFontFamily = 'Red Hat Text';
    Chart.defaults.global.defaultFontSize = 12;
  
    createLtcChart = new Chart(dogeChart, {
      type: 'line',
      data: {
        labels: times,
        datasets: [{
          label: '$',
          data: prices,
          backgroundColor: gradient,
          borderColor: 'yellow',
          borderJoinStyle: 'round',
          borderCapStyle: 'round',
          borderWidth: 3,
          pointRadius: 0,
          pointHitRadius: 10,
          lineTension: .2,
        }]
      },
  
      options: {
        title: {
          display: false,
          text: 'Heckin Chart!',
          fontSize: 35
        },
  
        legend: {
          display: false
        },
  
        layout: {
          padding: {
            left: 0,
            right: 0,
            top: 0,
            bottom: 0
          }
        },
  
        scales: {
          xAxes: [{
            display: false,
            gridLines: {}
          }],
          yAxes: [{
            display: false,
            gridLines: {}
          }]
        },
  
        tooltips: {
          callbacks: {
            //This removes the tooltip title
            title: function() {}
         },
          //this removes legend color
          displayColors: false,
          yPadding: 10,
          xPadding: 10,
          position: 'nearest',
          caretSize: 10,
          backgroundColor: '#white',
          bodyFontSize: 15,
          bodyFontColor: '#FFFF00' 
        }
      }
    });
  }
  async function printTronChart() {
    let { times, prices } = await tronData()
  
    let tronChart = document.getElementById('tronChart').getContext('2d');
  
    let gradient = tronChart.createLinearGradient(0, 0, 0, 400);
  
    gradient.addColorStop(0, 'black');
    gradient.addColorStop(.425, 'white');
  
    Chart.defaults.global.defaultFontFamily = 'Red Hat Text';
    Chart.defaults.global.defaultFontSize = 12;
  
    createLtcChart = new Chart(tronChart, {
      type: 'line',
      data: {
        labels: times,
        datasets: [{
          label: '$',
          data: prices,
          backgroundColor: gradient,
          borderColor: 'red',
          borderJoinStyle: 'round',
          borderCapStyle: 'round',
          borderWidth: 3,
          pointRadius: 0,
          pointHitRadius: 10,
          lineTension: .2,
        }]
      },
  
      options: {
        title: {
          display: false,
          text: 'Heckin Chart!',
          fontSize: 35
        },
  
        legend: {
          display: false
        },
  
        layout: {
          padding: {
            left: 0,
            right: 0,
            top: 0,
            bottom: 0
          }
        },
  
        scales: {
          xAxes: [{
            display: false,
            gridLines: {}
          }],
          yAxes: [{
            display: false,
            gridLines: {}
          }]
        },
  
        tooltips: {
          callbacks: {
            //This removes the tooltip title
            title: function() {}
         },
          //this removes legend color
          displayColors: false,
          yPadding: 10,
          xPadding: 10,
          position: 'nearest',
          caretSize: 10,
          backgroundColor: '#white',
          bodyFontSize: 15,
          bodyFontColor: '#FFFF00' 
        }
      }
    });
  }

async function updateLitePrice() {
    let { times, prices } = await ltcData()
    let currentPrice = prices[prices.length-1].toFixed(2);
  
    document.getElementById("ltcPrice").innerHTML = "$" + currentPrice;
  }
  async function updateDogePrice() {
    let { times, prices } = await dogeData()
    let currentPrice = prices[prices.length-1].toFixed(2);
  
    document.getElementById("dogePrice").innerHTML = "$" + currentPrice;
  }
  async function updateTronPrice() {
    let { times, prices } = await tronData()
    let currentPrice = prices[prices.length-1].toFixed(2);
  
    document.getElementById("tronPrice").innerHTML = "$" + currentPrice;
  }

// UPDATING //
updateLitePrice()
updateDogePrice()
updateTronPrice()

// PRINTING //
printLtcChart()
printDogeChart()
printTronChart()