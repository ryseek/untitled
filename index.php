<html>
<head>
    <script src="vkontakte.ru/js/api/openapi.js" type="text/javascript"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<script language="javascript">
    window.onload = (function() {
        VK.init({
            apiId: 2046606 //id подключенного сайта
        });
        function authInfo(response)
        {
            if (response.session)
            {
                document.getElementById('t').innerHTML = "Your ID: " + response.session.mid;
            }
            else
            {
                document.getElementById('t').innerHTML = 'Вы не авторизованы вконтакте.';
            }
        }
        VK.Auth.getLoginStatus(authInfo);
    });
</script>
<div id='t'></div>

</body>
</html>