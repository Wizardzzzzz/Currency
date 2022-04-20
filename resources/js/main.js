//Api Долар євро біткоїн https://api.privatbank.ua/p24api/pubinfo?json&exchange&coursid=5
//Api різних валют https://bank.gov.ua/NBUStatService/v1/statdirectory/exchange?json
const rates = {};
const elementUSD = document.querySelector('[data-value="USD"]')
const elementEUR = document.querySelector('[data-value="EUR"]')
const elementGBP = document.querySelector('[data-value="GBP"]')
//Поля для введення суми
const input = document.querySelector('#input');
const result = document.querySelector('#result');
const select = document.querySelector('#select');

getCurrencies();
setInterval(getCurrencies, 10000);

//функція отримання  курсу валют
async function getCurrencies() {
    const response = await fetch('https://bank.gov.ua/NBUStatService/v1/statdirectory/exchange?json');
    const data = await response.json();
    const result = await data;

    rates.USD = result[26];
    rates.EUR = result[32];
    rates.GBP = result[25];

    console.log(rates);

    elementUSD.textContent = rates.USD.rate.toFixed(2);
    elementEUR.textContent = rates.EUR.rate.toFixed(2);
    elementGBP.textContent = rates.GBP.rate.toFixed(2);
}

input.oninput = convertValue;
select.oninput = convertValue;

//функція конвертації
function convertValue() {
    result.value = (parseFloat(input.value) / rates[select.value].rate).toFixed(2);
}
