<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $areaUri);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);

$arr = json_decode($response,true);

        foreach($arr["response"]["body"]["items"]["item"] as $arr1){ 
    ?>

    <div class="textbox">
        <?php
           echo $arr1["title"]."<br>"; //지역의 이름
           echo $arr1["addr1"]."<hr><br>"; //지역의 주소
        ?>
    </div>
    
    <?php
        }
    ?>
</body>
</html>