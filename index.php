<html>
<head>
    <title>連結到LineNotify</title>
	<meta charset="big-5" />
    <script>
        function oAuth2() {
            var URL = 'https://access.line.me/dialog/oauth/weblogin?';
            URL += 'response_type=code';
            URL += '&client_id=1507926690';
            URL += '&redirect_uri=https://obscure-oasis-73152.herokuapp.com/call_black.php';
            URL += '&state=ArdCg'.time();
            window.location.href = URL;
        }
    </script>
</head>
<body>
    <button onclick="oAuth2();">連結到LineNotify按鈕</button>

</body>
</html>
