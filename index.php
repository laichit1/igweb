<?php
    $url = 'https://www.taishinbank.com.tw/TSB/personal/deposit/lookup/realtime/index.html';
    $ch = curl_init();    //初始化
    $timeout = 30;
    $useragent="Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.1) Gecko/20061204 Firefox/2.0.0.1";
    $cookie = "cookieLangId=zh_tw;";

    curl_setopt ($ch, CURLOPT_URL, $url);                //設定抓取網址
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);//逾時時間
    curl_setopt ($ch, CURLOPT_USERAGENT, $useragent);
    curl_setopt ($ch, CURLOPT_COOKIE, $cookie);
  
    $data = curl_exec($ch);            //抓取網頁
   
    curl_close($ch);
    $file = fopen("out.html", 'w');    //開啟檔案
    fwrite($file, $data);            //寫入檔案                                   
    fclose($file);                    //關閉檔案
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
<meta charset="utf-8">
<script src="https://cdn.staticfile.org/jquery/1.10.2/jquery.min.js">
</script>
</head>
<body>
<script type="text/javascript">
	const http = new XMLHttpRequest()

	http.open("GET", "https://www.taishinbank.com.tw/TSB/personal/deposit/lookup/realtime/index.html")
	http.send()

	http.onload = () => console.log(http.responseText)
</script>

</iframe>
</body>
</html>