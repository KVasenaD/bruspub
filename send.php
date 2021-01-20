<?php
$phone = $_POST['phone'];

$phone = htmlspecialchars($phone);

$phone = urldecode($phone);

$phone = trim($phone);?>
<!DOCTYPE html>
<html lang="ru">
<head>

    <link rel="stylesheet" type="text/css" href="css/style2.css">
    <link rel="stylesheet" type="text/css" href="css/pushy.css">

    <meta name="google-site-verification" content="cCPvlk5lR-hME9oO2Ff4w2AOiop1U7pZpVAi6pyOqaw" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome-ie7.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome-ie7.min.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" Content="Бар-ресторан Брюссель - отличное место в Тимирязевском районе. Тут можно выпить импортного пенного в компании друзей и посмотреть важный матч. Уютный небольшой бар не ограничивается только барной картой и предлагает богатый ассортимент европейских блюд. Поход сюда может стать полноценным семейным обедом или ужином, а так же местом для проведения банкета недалеко от дома">
    <title>Форма заявки с сайта</title>
    <link href="https://fonts.googleapis.com/css?family=Kurale&amp;subset=cyrillic,cyrillic-ext,devanagari,latin-ext" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style>
        .first{
            background-color: rgba(20,5,5,0.6);
        }
        body{
            background: url(img/index.png) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
    </style>
    <script>
        function checkForm(obj){
            var return_value = true;

            var phn = obj.phone.value;


            var reg_phn= /\d\d{3}\d{3}\d{4}/;

            var error_msg = "Ошибка в заполнении формы:\n";



            if(reg_phn.exec(phn) == null){
                return_value = false;
            }


            if(!return_value){
                alert(error_msg);
                return return_value;
            }
            if(return_value){
                alert("Отправлено");
            }
        }
    </script>
</head>
<body id="body">

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter50403076 = new Ya.Metrika2({
                    id:50403076,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/tag.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks2");
</script>
<script type="text/javascript" >
    var date = new Date();
    function track_user() {
        setInterval(function() {
            date.setTime(date.getTime()+(2*1000));
            document.cookie = "enter=1; expires="+ date.toGMTString() + "; path=/";
        }, 1000);
    }
    track_user();
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/50403076" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->




<div class="page" style="position: relative">










    <div class="index-bg">
        <!-- ШАПКА -->
        <header class="first">


            <a id="logo" href="/"><img src="img/logo_white.png" alt="Логотип"></a>



            <nav class="pushy pushy-right">
                <div class="pushy-content">
                    <ul>


                        <li class="pushy-link"><a href="menu.html">Меню</a>
                        </li>
                        <!--<li class="pushy-link"><a href="banket-1.html">Банкеты</a>
                        </li>
                        <li class="pushy-link"><a href="discount-1.html">Скидки</a>
                        </li>-->
                        <li class="pushy-link"><a href="foto.html">Фото</a></li>
                        <li class="pushy-link"><a href="contact.html">Контакты</a></li>
                        <li class="pushy-link"><a href="delivery.html">Доставка</a>
                        </li>

                    </ul>
                </div>
            </nav>

            <!-- Site Overlay -->
            <div class="site-overlay"></div>

            <!-- Your Content -->
            <noindex>
                <div id="container">
                    <!-- Menu Button -->
                    <button class="menu-btn">&#9776;</button>
                </div></noindex>



        </header>




        <div class="hello" style="display: flex; justify-content: center">


            <div class="work-block" style="border-radius: 50px;position: absolute;top: 50%;transform: translateY(-50%)">
                <div class="oh" style="border-radius: 50px; ">
                    <i class="pe-7s-clock"></i>
                    <form action="send.php" method="post" onsubmit="return checkForm(this)" style="display: flex;flex-direction: column;">


<?php
if (mail("bruspub@gmail.com", "Отменить подписку!","Телефон:".$phone ,"From: bruspub@gmail.com \r\n"))
 {     echo "<h1>Вы успешно отписаны от рассылки</h1>";
} else { 
    echo "<h1>При отправке сообщения возникли ошибки</h1>";
}?>
                </div>

                </form>

            </div>
        </div>

    </div>

</div>






<div class="button-book">

    <a href="booking.html"> Бронировать!</a>
</div>


<!-- ПОДВАЛ -->
<footer id="footer">
    <div class="copyrights">

        <div class="row">
            Brussels &copy; 2016<script>new Date().getFullYear()>2010&&document.write("-"+new Date().getFullYear());</script> <span><br></span>Разработка: <a style="color:#b64024" href="https://t.me/lisa41014">FoxNet</a>
            <!--<a href="https://bruspub.ru/index/opros/0-22">Опрос</a>-->
        </div>

    </div>
</footer>
</div>


<script src="js/pushy.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/scripts.js"></script>


<!-- BEGIN JIVOSITE CODE {literal} -->
<!--<script type='text/javascript'>
(function(){ var widget_id = 'uyl3MX8s6q';var d=document;var w=window;function l(){var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true;s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();
</script>-->
<!-- {/literal} END JIVOSITE CODE -->




<script>
    window.replainSettings = { id: 'f331b3a4-a17c-420c-b9f8-e8c1a6d86b94' };
    (function(u){var s=document.createElement('script');s.type='text/javascript';s.async=true;s.src=u;
        var x=document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);
    })('https://widget.replain.cc/dist/client.js');
</script>







</body>
</html>
