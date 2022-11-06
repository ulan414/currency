<?php
$id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ETH currency</title>
</head>
<body>  
<div class="currencys">
    <div class="cur"><a href="index.php?id=1">btc</a></div>
    <div class="cur"><a href="index.php?id=2">eth</a></div>
    <div class="cur"><a href="index.php?id=3">doge</a></div>
    <div class="cur"><a href="index.php?id=4">bnb</a></div>
</div>
    <div>
        <img src="ethereum-eth-logo1.png" alt="" width="52px">
        <center>
            <div class="current">
        <?php if($id == 1 || is_null($id)){ ?>
    <div>BTC</div>
    <?php }else if($id == 2){?>
        <div>ETH</div>
           <?php }else if($id == 3){?>
            <div>DOGE</div>
        <?php }else if($id == 4){?>
            <div>BNB</div>
        <?php } ?>
        </div>
        </center>
        <h1 id="stock-price" class="price">---</h1>
    </div>
    <div id="graph">
        <canvas id = "myChart" width="500px" height="600px">
        </canvas>
    </div>
    <div id="output">
        <?php if($id == 1 || is_null($id)){ ?>
    <script src="appbtc.js" id="eth"></script>

    <?php }else if($id == 2){?>
        <script src="appeth.js" id="eth"></script>

           <?php }else if($id == 3){?>
        <script src="appdog.js" id="eth"></script>

        <?php }else if($id == 4){?>
        <script src="appbnb.js" id="eth"></script>

        <?php } ?>

    </div>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js'></script>
    <script>
                setInterval(function() {
                    let ctx = document.querySelector('#myChart').getContext('2d');
        ctx.canvas.parentNode.style.height = '600px';
        ctx.canvas.parentNode.style.width = '1500px';
        let myChart = new Chart(ctx, {
            type: 'line',
            data: {
                borderColor:'red',
                labels: [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50],
                datasets: [{
                    label: 'ETH',
                    data: [prices[0], prices[1], prices[2], prices[3], prices[4], prices[5], prices[6], prices[7], prices[8], prices[9], prices[10], prices[11], prices[12], prices[13], prices[14], prices[15], prices[16], prices[17], prices[18], prices[19], prices[20], prices[21], prices[22], prices[23], prices[24], prices[25], prices[26], prices[27], prices[28], prices[29], prices[30], prices[31], prices[32], prices[33], prices[34], prices[35], prices[36], prices[37], prices[38], prices[39], prices[40], prices[41], prices[42], prices[43], prices[44], prices[45], prices[46], prices[47], prices[48], prices[49], prices[50]],
                    borderColor: '#FF4219',
                    borderWith: 4
                }]
            },
            options: {
                maintainAspectRatio:false,
            }
        })
                }, 3000);
            
    // do stuff
    </script>
        <?php if($id == 1 || is_null($id)){ ?>
        <!--styles for BTC-->
        <style>
            .price{
                font-family: Calibri, 'Trebuchet MS';
            }
            body{
                background-color: #77FFF5;
            }
            .cur{
                float:left;
                margin-left: 20px;
            }
            .curbtc{
                background-color:red;
            }
            .current{
                font-size:50px; 
            }
                </style>
<?php }else if($id == 2){ ?>
        <!--styles for ETH-->
        <style>
            .price{
                font-family: Calibri, 'Trebuchet MS';
            }
            body{
                background-color: #77FFF5;
            }
            .cur{
                float:left;
                margin-left: 20px;
            }
            .curbtc{
                background-color:red;
            }
            .current{
                font-size:50px; 
            }
                </style>
<?php }else if($id == 3){ ?>
            <!--styles for DOGECOIN-->
            <style>
            .price{
                font-family: Calibri, 'Trebuchet MS';
            }
            body{
                background-color: #77FFF5;
            }
            .cur{
                float:left;
                margin-left: 20px;
            }
            .curbtc{
                background-color:red;
            }
            .current{
                font-size:50px; 
            }
                </style>
<?php }else if($id == 4){ ?>
            <!--styles for BNB-->
            <style>
            .price{
                font-family: Calibri, 'Trebuchet MS';
            }
            body{
                background-color: #77FFF5;
            }
            .cur{
                float:left;
                margin-left: 20px;
            }
            .curbtc{
                background-color:red;
            }
            .current{
                font-size:50px; 
            }
                </style>
    <?php } ?>
        
</body>
</html>