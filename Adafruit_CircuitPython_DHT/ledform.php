<?php 

    $command = escapeshellcmd('sudo /usr/bin/python3 /var/www/ledLight.py '.$_POST['on']);

    $output = shell_exec($command);


    $file_path = "/home/pi/Adafruit_CircuitPython_DHT/examples/test_sensor_data.txt";

    if(file_exists($file_path)){
        $fp=file_get_contents($file_path,"r");
        $fp = substr_replace($fp, "[", 0, 0);
        $fp = substr_replace($fp, "{}]", strlen($fp), 0);
        $json = json_decode($fp, true);
	}

?>
<html>

	<title>mytitle</title>
	
	<head>
	</head>

	<body>
        <form method="POST">
            <button name='on' value='1'> on </button>
            <button name='on' value='0'> off </button>
        </form>
        <div>
            <p><?php echo $output; ?></p>
        </div>
	<center><img src="./img/turtle.jpg" style="width:300px;height: 400px;" alt="烏龜圖片"></center>
        <center><a href="https://aijianggu.com/collect/209715.html#:~:text=%E9%81%A9%E5%AE%9C%E5%B7%B4%E8%A5%BF%E9%BE%9C%E7%9A%84%E7%94%9F%E9%95%B7%E6%BA%AB%E5%BA%A6%E6%98%AF%E5%9C%A8%E4%BA%8C%E5%8D%81%E8%87%B3%E4%B8%89%E5%8D%81%E5%BA%A6%E4%B9%8B%E9%96%93%EF%BC%8C%E6%9C%80%E4%BD%B3%E7%9A%84%E6%BA%AB%E5%BA%A6%E6%98%AF%E5%9C%A8%E4%BA%8C%E5%8D%81%E4%B8%83%E5%BA%A6%E5%B7%A6%E5%8F%B3%E3%80%82,4%E3%80%81%E9%A3%BC%E6%96%99%E7%AE%A1%E7%90%86%E3%80%82" >巴西龜養殖溫度指南</a></center>          
        <center><h2>溫度感測資料</h2></center>
       
        
        <!--表格-->
                
        <center><table style="border:3px #E6CAFF dashed" width="800">
            <tr style="background-color:#C4E1FF">
                <th align="center">攝氏溫度</th>
                <th align="center">華氏溫度</th>
                <th align="center">濕度</th>
            </tr>
            <?php foreach ($json as $key => $val) { 
                    if ($val != "") { ?>
                <tr style="background-color:#EEE">
                <td align="center"><?php echo $val['temperature_c']?></td>
                    <td align="center"><?php echo $val['temperature_f']?></td>
                    <td align="center"><?php echo $val['humidity']?></td>
                </tr>
            <?php }} ?>
        </table></center>
        
        <!--div-->
        <div>
            
        </div>

	</body>

</html>
