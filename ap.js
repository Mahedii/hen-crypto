var btc = document.getElementById("bitcoin");
var shib = document.getElementById("shiba-inu");
var mm72 = document.getElementById("mm72");
var doge = document.getElementById("dogecoin");

var liveprice = {
    "async": true,
    "scroosDomain": true,
    "url": "https://api.coingecko.com/api/v3/simple/price?ids=bitcoin%2Cshiba-inu%2Cmm72%2Cdogecoin&vs_currencies=usd",

    "method": "GET",
    "headers": {}
}

$.ajax(liveprice).done(function (response){
    btc.innerHTML = response.bitcoin.usd;
    shib.innerHTML = response.shiba-inu.usd;
    mm72.innerHTML = response.mm72.usd;
    doge.innerHTML = response.dogecoin.usd;

});