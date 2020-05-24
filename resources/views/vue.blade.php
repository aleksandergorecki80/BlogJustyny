<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blog Justyny</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- CSS -->
        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
        
        <!-- SCRIPT -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- vue-recaptcha -->
        <script src="https://www.google.com/recaptcha/api.js?onload=vueRecaptchaApiLoaded&render=explicit" async defer></script> 

        <!-- informacja o ciasteczkach ah -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        


    </head>
    <body>
        <div id="app">
            <div class="container mt-4 mb-4 pr-4 pl-3">
                <my-nav></my-nav>
                <index></index>
                <my-footer></my-footer>
            </div>
        </div>
        
        <section id="cookie-warn">
            <p><strong>UWAGA!</strong> Niniejsza strona wykorzystuje pliki cookies. 
            Informacje uzyskane za pomocą cookies wykorzystywane są głównie 
            w celach statystycznych. Pozostając na stronie godzisz się na 
            ich zapisywanie w Twojej przeglądarce. 
            <a href="javascript:void(0);" id="close-cookie-warn"
            >Zamknij ostrzeżenie</a></p>
        </section>
        <script>
            $().ready(function() {
            var sName = "cookiesok";
            $("#close-cookie-warn").click(function(){
                var oExpire = new Date();
                oExpire.setTime((new Date()).getTime() + 3600000*24*365);
                document.cookie = sName + "=1;expires=" + oExpire;
                $("#cookie-warn").hide("slow");
            });
        
            var sStr = '; '+ document.cookie +';';
            var nIndex = sStr.indexOf('; '+ escape(sName) +'=');
            if (nIndex === -1) {
                $("#cookie-warn").show();
            }
        });
        </script>
    </body>
</html>
