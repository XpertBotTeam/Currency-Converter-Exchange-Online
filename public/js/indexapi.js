const axios = require("axios");

const options = {
  method: 'GET',
  url: 'https://currency-converter5.p.rapidapi.com/currency/convert',
  params: {format: 'json', from: 'AUD', to: 'CAD', amount: '1'},
  headers: {
    'X-RapidAPI-Key': 'd8a4a5c7c1mshec9833657281db0p1f67bejsn7bf54b371675',
    'X-RapidAPI-Host': 'currency-converter5.p.rapidapi.com'
  }
};

axios.request(options).then(function (response) {
	console.log(response.data);
}).catch(function (error) {
	console.error(error);
});