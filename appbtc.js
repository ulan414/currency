let ws = new WebSocket('wss://stream.binance.com:9443/ws/btceur@trade');
let stockPriceElement = document.getElementById('stock-price');
let lastPrice = null;
let price1 = null;
let price2 = null;
let price3 = null;
let price4 = null;
let price5 = null;
let prices = [null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null];
let count =-1;
   console.log(ws);
ws.onmessage = (event) =>{
    if(prices[99] !== null){
        prices = [null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null];
   }
    let stockObject = JSON.parse(event.data);
    console.log(stockObject);
    let price = parseFloat(stockObject.p).toFixed(2);
    stockPriceElement.innerText = price;
    stockPriceElement.style.color = !lastPrice || lastPrice === price ? 'black' : price>lastPrice ? 'green' : 'red';
    count++;
    //count is every point in the graph
        prices[count]=price
        //start graph again
        if(count>98){
            count=0;
        }
    lastPrice = price;
    graphh();
 

}