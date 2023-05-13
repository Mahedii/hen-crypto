/* Binance */
/* SHIB/USDT */
let ws_binance_shib = new WebSocket('wss://stream.binance.com:9443/ws');
/*let html_element_binance_shib = document.getElementById('show_price_binance_shib');*/
let html_element_binance_shib = document.querySelector('#show_price_binance_shib span');

let last_price_binance_shib = null;

ws_binance_shib.onopen = function () {
    ws_binance_shib.send(JSON.stringify ({
        'method': 'SUBSCRIBE',
        'params': ['shibusdt@trade'],
        'id': 1
    }))
};

ws_binance_shib.onmessage = function (event) {
    let current_price_binance_shib = JSON.parse(event.data);
    let price_binance_shib = parseFloat(current_price_binance_shib.p).toFixed(8);
    html_element_binance_shib.innerText = price_binance_shib;

    if ((price_binance_shib < last_price_binance_shib) && (isNaN(price_binance_shib) == false)) {
        html_element_binance_shib.innerText = '↓ $ ' + price_binance_shib;
        html_element_binance_shib.style.color = 'Bright Red';
    } else if ((price_binance_shib > last_price_binance_shib) && (isNaN(price_binance_shib) == false)) {
        html_element_binance_shib.innerText = '↑ $ ' + price_binance_shib;
        html_element_binance_shib.style.color = 'lime';
    } else if ((price_binance_shib == last_price_binance_shib) && (isNaN(price_binance_shib) == false)) {
        html_element_binance_shib.innerText = '$ ' + price_binance_shib;
        html_element_binance_shib.style.color = '#C724B1';
    }

    last_price_binance_shib = price_binance_shib;
};

/* DOGE/USDT */
let ws_binance_doge = new WebSocket('wss://stream.binance.com:9443/ws');
let html_element_binance_doge = document.querySelector('#show_price_binance_doge span');

let last_price_binance_doge = null;

ws_binance_doge.onopen = function () {
    ws_binance_doge.send(JSON.stringify ({
        'method': 'SUBSCRIBE',
        'params': ['dogeusdt@trade'],
        'id': 1
    }))
};

ws_binance_doge.onmessage = function (event) {
    let current_price_binance_doge = JSON.parse(event.data);
    let price_binance_doge = parseFloat(current_price_binance_doge.p).toFixed(8);
    html_element_binance_doge.innerText = price_binance_doge;

    if ((price_binance_doge < last_price_binance_doge) && (isNaN(price_binance_doge) == false)) {
        html_element_binance_doge.innerText = '↓ $ ' + price_binance_doge;
        html_element_binance_doge.style.color = 'Bright Red';
    } else if ((price_binance_doge > last_price_binance_doge) && (isNaN(price_binance_doge) == false)) {
        html_element_binance_doge.innerText = '↑ $ ' + price_binance_doge;
        html_element_binance_doge.style.color = 'lime';
    } else if ((price_binance_doge == last_price_binance_doge) && (isNaN(price_binance_doge) == false)) {
        html_element_binance_doge.innerText =  '$ ' + price_binance_doge;
        html_element_binance_doge.style.color = '#C724B1';
    }

    last_price_binance_doge = price_binance_doge;
};

/* bnb */
let ws_binance_bnb = new WebSocket('wss://stream.binance.com:9443/ws');
let html_element_binance_bnb = document.querySelector('#show_price_binance_bnb span');

let last_price_binance_bnb = null;

ws_binance_bnb.onopen = function () {
    ws_binance_bnb.send(JSON.stringify ({
        'method': 'SUBSCRIBE',
        'params': ['bnbusdt@trade'],
        'id': 1
    }))
};

ws_binance_bnb.onmessage = function (event) {
    let current_price_binance_bnb = JSON.parse(event.data);
    let price_binance_bnb = parseFloat(current_price_binance_bnb.p).toFixed(2);
    html_element_binance_bnb.innerText = price_binance_bnb;

    if ((price_binance_bnb < last_price_binance_bnb) && (isNaN(price_binance_bnb) == false)) {
        html_element_binance_bnb.innerText = '↓ $ ' + price_binance_bnb;
        html_element_binance_bnb.style.color = 'Bright Red';
    } else if ((price_binance_bnb > last_price_binance_bnb) && (isNaN(price_binance_bnb) == false)) {
        html_element_binance_bnb.innerText = '↑ $ ' + price_binance_bnb;
        html_element_binance_bnb.style.color = 'lime';
    } else if ((price_binance_bnb == last_price_binance_bnb) && (isNaN(price_binance_bnb) == false)) {
        html_element_binance_bnb.innerText = '$ ' + price_binance_bnb;
        html_element_binance_bnb.style.color = '#C724B1';
    }

    last_price_binance_bnb = price_binance_bnb;
};


/* btc */
let ws_binance_btc = new WebSocket('wss://stream.binance.com:9443/ws');
let html_element_binance_btc = document.querySelector('#show_price_binance_btc span');

let last_price_binance_btc = null;

ws_binance_btc.onopen = function () {
    ws_binance_btc.send(JSON.stringify ({
        'method': 'SUBSCRIBE',
        'params': ['btcusdt@trade'],
        'id': 1
    }))
};

ws_binance_btc.onmessage = function (event) {
    let current_price_binance_btc = JSON.parse(event.data);
    let price_binance_btc = parseFloat(current_price_binance_btc.p).toFixed(2);
    html_element_binance_btc.innerText = price_binance_btc;

    if ((price_binance_btc < last_price_binance_btc) && (isNaN(price_binance_btc) == false)) {
        html_element_binance_btc.innerText = '↓ $ ' + price_binance_btc;
        html_element_binance_btc.style.color = 'red';
    } else if ((price_binance_btc > last_price_binance_btc) && (isNaN(price_binance_btc) == false)) {
        html_element_binance_btc.innerText = '↑ $ ' + price_binance_btc;
        html_element_binance_btc.style.color = 'lime';
    } else if ((price_binance_btc == last_price_binance_btc) && (isNaN(price_binance_btc) == false)) {
        html_element_binance_btc.innerText = '$ ' + price_binance_btc;
        html_element_binance_btc.style.color = '#C724B1';
    }

        last_price_binance_btc = price_binance_btc;
};

/*<script>

        $(document).ready( function () {
            $('#datatable').DataTable({
                "paging":   false,
                "searching": false,
            });
        } );


        $(document).ready(function() {
            var baseUSD = '<?=$baseUSD?>';
            var coin_rate_in_ZAR = '<?=$coin_rate_in_ZAR?>';
            var coin_rate_in_USD = '<?=$coin_rate_in_USD?>';

            $('#gcw_valFpWbgYyUL0').val(baseUSD);
            $('#gcw_valFpWbgYyUL1').val(coin_rate_in_ZAR);


            // When USD value changes
            $('#gcw_valFpWbgYyUL0').on('keyup',function(){
                var baseUSD = $('#gcw_valFpWbgYyUL0').val();
                var valueInZar = baseUSD * coin_rate_in_ZAR;

                // alert(valueInZar);
                $('#gcw_valFpWbgYyUL1').val(valueInZar);

                
            });


            // When ZAR value changes
            $('#gcw_valFpWbgYyUL1').on('keyup',function(){
                var baseZAR = $('#gcw_valFpWbgYyUL1').val();
                var valueInUSD = (baseZAR * coin_rate_in_USD).toFixed(4);

                // alert(valueInUSD);
                $('#gcw_valFpWbgYyUL0').val(valueInUSD);

            });

        });

    </script>*/




 /* coin98 
let ws_binance_C98 = new WebSocket('wss://stream.binance.com:9443/ws');
let html_element_binance_C98 = document.getElementById('show_price_binance_C98');

let last_price_binance_C98 = null;

ws_binance_C98.onopen = function () {
    ws_binance_C98.send(JSON.stringify ({
        'method': 'SUBSCRIBE',
        'params': ['C98usdt@trade'],
        'id': 1
    }))
};

ws_binance_C98.onmessage = function (event) {
    let current_price_binance_C98 = JSON.parse(event.data);
    let price_binance_C98 = parseFloat(current_price_binance_C98.p).toFixed(2);
    html_element_binance_C98.innerText = price_binance_C98;

    if ((price_binance_C98 < last_price_binance_C98) && (isNaN(price_binance_C98) == false)) {
        html_element_binance_C98.innerText = '↓' + price_binance_C98;
        html_element_binance_C98.style.color = 'Bright Red';
    } else if ((price_binance_C98 > last_price_binance_C98) && (isNaN(price_binance_C98) == false)) {
        html_element_binance_C98.innerText = '↑' + price_binance_C98;
        html_element_binance_C98.style.color = 'green';
    } else if ((price_binance_C98 == last_price_binance_C98) && (isNaN(price_binance_C98) == false)) {
        html_element_binance_C98.innerText = price_binance_C98;
        html_element_binance_C98.style.color = '#C724B1';
    }

    last_price_binance_C98 = price_binance_C98;
};
*/

































/* Your third token */
let ws_binance_your_third_token = new WebSocket('wss://stream.binance.com:9443/ws');
let html_element_binance_your_third_token = document.getElementById('show_price_binance_your_third_token');

let last_price_binance_your_third_token = null;

ws_binance_your_third_token.onopen = function () {
    ws_binance_your_third_token.send(JSON.stringify ({
        'method': 'SUBSCRIBE',
        'params': ['your_third_token@trade'],
        'id': 1
    }))
};

ws_binance_your_third_token.onmessage = function (event) {
    let current_price_binance_your_third_token = JSON.parse(event.data);
    let price_binance_your_third_token = parseFloat(current_price_binance_your_third_token.p).toFixed(2);
    html_element_binance_your_third_token.innerText = price_binance_your_third_token;

    if ((price_binance_your_third_token < last_price_binance_your_third_token) && (isNaN(price_binance_your_third_token) == false)) {
        html_element_binance_your_third_token.innerText = '↓' + price_binance_your_third_token;
        html_element_binance_your_third_token.style.color = 'Bright Red';
    } else if ((price_binance_your_third_token > last_price_binance_your_third_token) && (isNaN(price_binance_your_third_token) == false)) {
        html_element_binance_your_third_token.innerText = '↑' + price_binance_your_third_token;
        html_element_binance_your_third_token.style.color = 'green';
    } else if ((price_binance_your_third_token == last_price_binance_your_third_token) && (isNaN(price_binance_your_third_token) == false)) {
        html_element_binance_your_third_token.innerText = price_binance_your_third_token;
        html_element_binance_your_third_token.style.color = '#C724B1';
    }

    last_price_binance_your_third_token = price_binance_your_third_token;
};