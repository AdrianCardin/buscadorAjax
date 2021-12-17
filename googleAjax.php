<!DOCTYPE html>
<html lang="es">

<head>
    <meta name="encoding" charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google Clone</title>
    <meta name="autor" content="Paula Farias">
    <meta name="description" content="Imitación">
    <link rel="shorcut icon" href="style/images/logo.png" />

    <!-- GOOGLE FONTS -->

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css"
        integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw=="
        crossorigin="anonymous" />

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="style/main.css">
</head>

<body>


    <div class="container-fluid">

        <!-- ---- ROW 1: ACCESS ---- -->
        <div class="row mt-2">
            <div class="col text-right">

                <!-- LINK GMAIL -->
                <a class="mt-2 ml-2 mb-2 color-grey" href="https://mail.google.com/mail/?tab=wm&amp;authuser=0&amp;ogbl"
                    target="_top">Gmail</a>

                <!-- LINK IMÁGENES -->
                <a class="mt-2 ml-2 mb-2 mr-2 color-grey"
                    href="https://www.google.com.ar/imghp?hl=es-419&amp;tab=wi&amp;authuser=0&amp;ogbl"
                    target="_top">Imágenes</a>

                <!-- LOGO CUADRADOS -->
                <a class="mt-2 ml-2 mb-2 mr-2 cuadrados-google"
                    href="https://www.google.com.ar/intl/es-419/about/products?tab=wh" title="Google Apps"
                    aria-expanded="false" role="button" tabindex="0">
                </a>

                <div style="overflow: hidden; position: absolute; top: 0px; width: 328px; z-index: 991; height: 0px; margin-top: 40px; right: 0px; margin-right: 27px; transition: height 0.3s ease-in-out 0s; max-height: calc(-56px + 100vh); visibility: hidden;">
                    <iframe role="presentation" frameborder="0" scrolling="no" src="https://ogs.google.com/u/0/widget/app?origin=https%3A%2F%2Fwww.google.com&amp;cn=app&amp;pid=1&amp;spid=1&amp;hl=es-419" style="height: 100%; width: 100%; visibility: hidden;">
                    </iframe>
                </div>

                <!-- LOGO/IMAGEN USUARIO -->
                <a class="mt-2 ml-2 mb-2 mr-2"
                    href="https://accounts.google.com/SignOutOptions?hl=es-419&amp;continue=https://www.google.com/webhp%3Fie%3DUTF-8%26rct%3Dj"
                    role="button" tabindex="0" title="Cuenta de Google" aria-expanded="false">
                    <img class="rounded-circle"
                        src="https://lh3.googleusercontent.com/ogw/ADGmqu9S4ZOjH6d1F5KYkMPSLJ0YGnCPwMwJNphBUbmY=s32-c-mo"
                        srcset="./style/images/cardin.jpg 1x, ./style/images/cardin.jpg 2x "
                        alt="" aria-hidden="true" data-noaft="" data-atf="1">
                </a>
            </div>
        </div>

        <!-- ---- ROW 2: IMAGE ---- -->
        <div class="row google-img">
            <div class="col text-center">
                <img src="style/images/google.png" alt="Google Logo">
            </div>
        </div>

        <!-- ---- ROW 3: SEARCH ---- -->
        <div class="row m-3 search-bar">
            <div class="col">
                <form class="" action="" style="overflow:visible" data-submitfalse="q" id="tsf"
                    method="GET" name="f" role="search">
                    <div class="input-group mb-3">

                        <div class="input-group-prepend">
                            <span class="input-group-text bg-transparent border-right-0">
                                <i class="fas fa-search"></i>
                            </span>
                        </div>

                        <input class="form-control border-left-0 border-right-0" maxlength="2048" name="q" id="search" type="text"
                            jsaction="paste:puy29d" aria-autocomplete="both" aria-haspopup="false" autocapitalize="off"
                            autocomplete="off" autocorrect="off" autofocus="" role="combobox" spellcheck="false"
                            title="Buscar" value="" aria-label="Buscar"
                            data-ved="0ahUKEwj6pKSf4p7sAhWHF7kGHfdyAIYQ39UDCAQ" aria-describedby="button-addon2" form="tsf">
                        <div class="input-group-append">
                            <span class="input-group-text bg-transparent border-left-0">
                                <a href=""><img src="style/images/microfono.png" alt="Micrófono de Google"></a>
                            </span>
                        </div>

                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-3 col-md-offset-3" id="result"></div>


        <!-- ---- ROW 4: BUTTONS ---- -->
        <div class="row">
            <div class="col google-buttons text-center">  
                <input class="" value="Buscar con Google" aria-label="Buscar con Google" name="btnK" type="submit" data-ved="0ahUKEwjdtpr-5Z7sAhX7KrkGHQLfA_wQ4dUDCAs" form="tsf">
                <input class="" value="Me siento con suerte " aria-label="Me siento con suerte " name="btnI" type="submit" jsaction="sf.lck" data-ved="0ahUKEwjdtpr-5Z7sAhX7KrkGHQLfA_wQ19QECAw" form="tsf">
            </div>
        </div>

        <!-- ---- ROW 5: GOOGLE EN ENGLISH ---- -->
        <div class="row mt-2">
            <div class="col text-center"> 
                <p class="google-english">Ofrecido por Google en: <a href="https://www.google.com/setprefs?sig=0_IqOfUn168T3VYuS941NoAKIczwE%3D&amp;hl=en&amp;source=homepage&amp;sa=X&amp;ved=0ahUKEwjdtpr-5Z7sAhX7KrkGHQLfA_wQ2ZgBCA8">English</a></p> 
            </div>
        </div>



    </div>


    <!-- ---- FOOTER ---- -->
    <footer class="footer">

        <div class="border">
            <p class="mt-2">España</p>
        </div>

        <div class="row">
            <div class="col">
                <p class="mt-2 links-footer">
                    <a class="mr-4"
                        href="https://www.google.com/intl/es-419_ar/ads/?subid=ww-ww-et-g-awa-a-g_hpafoot1_1!o2&amp;utm_source=google.com&amp;utm_medium=referral&amp;utm_campaign=google_hpafooter&amp;fg=1"
                        ping="/url?sa=t&amp;rct=j&amp;source=webhp&amp;url=https://www.google.com/intl/es-419_ar/ads/%3Fsubid%3Dww-ww-et-g-awa-a-g_hpafoot1_1!o2%26utm_source%3Dgoogle.com%26utm_medium%3Dreferral%26utm_campaign%3Dgoogle_hpafooter%26fg%3D1&amp;ved=0ahUKEwjt-4iJ157sAhWnDrkGHTIIBboQkdQCCBY">Publicidad</a>
                    <a class="mr-4"
                        href="https://www.google.com/services/?subid=ww-ww-et-g-awa-a-g_hpbfoot1_1!o2&amp;utm_source=google.com&amp;utm_medium=referral&amp;utm_campaign=google_hpbfooter&amp;fg=1"
                        ping="/url?sa=t&amp;rct=j&amp;source=webhp&amp;url=https://www.google.com/services/%3Fsubid%3Dww-ww-et-g-awa-a-g_hpbfoot1_1!o2%26utm_source%3Dgoogle.com%26utm_medium%3Dreferral%26utm_campaign%3Dgoogle_hpbfooter%26fg%3D1&amp;ved=0ahUKEwjt-4iJ157sAhWnDrkGHTIIBboQktQCCBc">Negocios</a>
                    <a class="mr-4"
                        href="https://about.google/?utm_source=google-AR&amp;utm_medium=referral&amp;utm_campaign=hp-footer&amp;fg=1"
                        ping="/url?sa=t&amp;rct=j&amp;source=webhp&amp;url=https://about.google/%3Futm_source%3Dgoogle-AR%26utm_medium%3Dreferral%26utm_campaign%3Dhp-footer%26fg%3D1&amp;ved=0ahUKEwjt-4iJ157sAhWnDrkGHTIIBboQkNQCCBg">Sobre
                        Google</a>
                    <a href="https://google.com/search/howsearchworks/?fg=1"> Cómo funciona la Búsqueda </a>
                </p>
            </div>
            <div class="col">
                <p class="mt-2 mr-4 text-right links-footer">

                    <a class="ml-4" href="https://policies.google.com/privacy?hl=es-419&amp;fg=1"
                        ping="/url?sa=t&amp;rct=j&amp;source=webhp&amp;url=https://policies.google.com/privacy%3Fhl%3Des-419%26fg%3D1&amp;ved=0ahUKEwjt-4iJ157sAhWnDrkGHTIIBboQ8awCCBI">Privacidad</a>
                    <a class="ml-4" href="https://policies.google.com/terms?hl=es-419&amp;fg=1"
                        ping="/url?sa=t&amp;rct=j&amp;source=webhp&amp;url=https://policies.google.com/terms%3Fhl%3Des-419%26fg%3D1&amp;ved=0ahUKEwjt-4iJ157sAhWnDrkGHTIIBboQ8qwCCBM">Condiciones</a>
                    <a class="ml-4" href="https://www.google.com/preferences?hl=es-419" id="fsettl"
                        aria-controls="fsett" aria-expanded="false" aria-haspopup="true" role="button"
                        jsaction="foot.cst"
                        ping="/url?sa=t&amp;rct=j&amp;source=webhp&amp;url=https://www.google.com/preferences%3Fhl%3Des-419&amp;ved=0ahUKEwjt-4iJ157sAhWnDrkGHTIIBboQzq0CCBQ">Preferencias</a>

                <div style="display: none;">
                    <a href="https://www.google.com/preferences?hl=es-419&amp;fg=1" role="menuitem">Configuración de
                        búsqueda</a><a href="/advanced_search?hl=es-419&amp;fg=1" role="menuitem">Búsqueda avanzada</a>
                    <a href="https://myactivity.google.com/privacyadvisor/search?utm_source=googlemenu&amp;fg=1"
                        role="menuitem">Tus datos en la Búsqueda</a>
                    <a href="https://myactivity.google.com/product/search?utm_source=google&amp;hl=es-419&amp;fg=1"
                        role="menuitem">Actividad de búsqueda</a>
                    <a href="https://support.google.com/websearch/?p=ws_results_help&amp;hl=es-419&amp;fg=1"
                        role="menuitem">Buscar en la ayuda</a>
                    <a href="#" data-bucket="websearch" role="menuitem" id="dk2qOd" target="_blank" jsaction="gf.sf"
                        data-ved="0ahUKEwjt-4iJ157sAhWnDrkGHTIIBboQLggV">Enviar comentarios</a>
                </div>
                </p>
            </div>

        </div>
    </footer>




    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>

    <!-- POPPER -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>

    <!-- BOOTSTRAP -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/index.js"></script>

</body>

</html>