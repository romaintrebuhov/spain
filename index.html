<?php

/*

	Please feel free to use next GET parameters on our landings:

	'sub1' - Customer sub1
	'sub2' - Customer sub2
	'sub3' - Customer sub3
	'sub4' - Customer sub4
	'clickid' - Customer Click ID

	'lym' - Yandex.Metrika counter number
	'lga' - Google Analytics tracking number
	'lfp' - Facebook Pixel ID

	Or set values of the some parameters bellow in the code:

*/


$stream = "gQnaLDF7WV"; // Stream hash like 'a1b2C3D4', from redirect url http://bltl.pro/a1b2C3D4
$landing = "LP4 - ES - Cash"; // Landing page name, field for statistic

$lym = ""; // Yandex.Metrika counter number
$lfp = ""; // Google Analytics tracking number
$lga = ""; // Facebook Pixel ID


//========= DO NOT EDIT BELOW THIS LINE =========//

$lym = !empty($_GET["lym"]) ? $_GET["lym"] : $lym;
$lfp = !empty($_GET["lfp"]) ? $_GET["lfp"] : $lfp;
$lga = !empty($_GET["lga"]) ? $_GET["lga"] : $lga;

if(!empty($stream) && !empty($landing) && !empty($_POST['name']) && !empty($_POST['phone'])) {

    $params = array(
        'stream' => $stream,
        'landing' => $landing,
        'country' => 'ES',
        'name' => $_POST['name'],
        'phone' => $_POST['phone'],
        'postcode' => (!empty($_POST['postcode']) ? $_POST['postcode'] : ""),
        'address' => (!empty($_POST['address']) ? $_POST['address'] : ""),
        'comment' => (!empty($_POST['comment']) ? $_POST['comment'] : ""),
        'ip' => (!empty($_SERVER["REMOTE_ADDR"]) ? $_SERVER["REMOTE_ADDR"] : ""),
        'user-agent' => (!empty($_SERVER["HTTP_USER_AGENT"]) ? $_SERVER["HTTP_USER_AGENT"] : ""),
        'sub1' => (!empty($_GET["sub1"]) ? $_GET["sub1"] : ""),
        'sub2' => (!empty($_GET["sub2"]) ? $_GET["sub2"] : ""),
        'sub3' => (!empty($_GET["sub3"]) ? $_GET["sub3"] : ""),
        'sub4' => (!empty($_GET["sub4"]) ? $_GET["sub4"] : ""),
        'clickid' => (!empty($_GET["clickid"]) ? $_GET["clickid"] : "")
    );

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://broleads.com/api/v1/order');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_USERAGENT, (!empty($_SERVER["HTTP_USER_AGENT"]) ? $_SERVER["HTTP_USER_AGENT"] : ""));
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
    $response = json_decode(curl_exec($ch));
    $response_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if(
        ($response_code == 200 && $response->status == 'success') ||
        ($response_code == 400 && $response->status == 'error' && !empty($response->error) && preg_match("/^Order already created.*$/", $response->error))
    ) {

        $sparams = array(
            'name' => $_POST['name'],
            'phone' => $_POST['phone'],
            'status' => ($response->status == 'error' ? 'already' : 'success')
        );

        if(!empty($response->order))
            $sparams['order'] = $response->order;
        if(!empty($response->order_status))
            $sparams['order_status'] = $response->order_status;
        if(!empty($lym))
            $sparams['lym'] = $lym;
        if(!empty($lfp))
            $sparams['lfp'] = $lfp;
        if(!empty($lga))
            $sparams['lga'] = $lga;

        header('Location: success.php?' . http_build_query($sparams));
        exit;

    }

}

//========= DO NOT EDIT ABOVE THIS LINE =========//

?>
<!DOCTYPE >
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta content="text/javascript; charset=utf-8" http-equiv="Content-Script-Type" />
    <meta content="no-cache" http-equiv="Pragma" />
    <link rel="icon" href="favicon.ico">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <link href="css/index.css" media="all" rel="stylesheet" type="text/css" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/spin.css">
    <title>Natillas de Chocolate</title>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <?php if(!empty($lym)): ?>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript"> (function (d, w, c) {
            (w[c] = w[c] || []).push(function () {
                try {
                    w.yaCounter<?=htmlspecialchars($lym)?> = new Ya.Metrika2({
                        id:<?=htmlspecialchars($lym)?>,
                        clickmap: true,
                        trackLinks: true,
                        accurateTrackBounce: true,
                        webvisor: true,
                        ut: "noindex"
                    });
                } catch (e) {
                }
            });
            var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () {
                n.parentNode.insertBefore(s, n);
            };
            s.type = "text/javascript";
            s.async = true;
            s.src = "https://mc.yandex.ru/metrika/tag.js";
            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            } else {
                f();
            }
        })(document, window, "yandex_metrika_callbacks2"); </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/<?= htmlspecialchars($lym) ?>?ut=noindex"
                  style="position:absolute; left:-9999px;" alt=""/></div>
    </noscript><!-- /Yandex.Metrika counter -->
<?php endif; ?>

<?php
$status = (!empty($_GET['status']) ? $_GET['status'] : "");
if(!empty($lfp) && $status != 'already'):
    ?>
    <!-- Begin Facebook Pixel Code -->
    <script>
        !function (f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function () {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '<?=htmlspecialchars($lfp)?>');
        <?php if($status == 'success'): ?>
        fbq('track', 'Purchase');
        <?php else: ?>
        fbq('track', 'PageView');
        <?php endif; ?>
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=<?= htmlspecialchars($lfp) ?>&ev=PageView&noscript=1"/>
    </noscript>
    <!-- End Facebook Pixel Code-->
<?php endif; ?>

<?php if(!empty($lga)): ?>
    <!-- Google Analytics -->
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', '<?=htmlspecialchars($lga)?>', 'auto', {'name': 'WM'});
        ga('WM.send', 'pageview');
    </script>
    <!-- End Google Analytics -->
<?php endif; ?>

    <script src="js/jquery.countdown.min.js"></script>
    <script type="text/javascript" src="js/dr-dtime.min.js"></script>
    <style>.e451f6a00d29 {
        width: 1px !important;
        height: 1px !important;
        border: 0 !important;
        background: none !important;
        border-style: none !important;
        position: absolute;
    }</style>
</head>

<body style="visibility: visible;">
    <!--retarget-->
    <!--retarget-->
    <div id="container">
        <div id="header">
            <!--start header-->
            <div class="headerInside">
                <!--start headerInside-->
                <div class="logo fl">
                    <a href="" id="logoImg" target="_blank" title="logo"></a>
                </div>
                <div class="search fr">
                    <div id="banner-search">
                        <form action="" class="navigationSearch" method="get" name="searchForm" target="_blank">
                            <input class="textEntry newsearchterm" id="navigationSearchInput" name="search" placeholder="Buscar" type="text" value="" />
                            <a href="" style="font-size: inherit" target="_blank"><i class="fa fa-search"></i></a>
                        </form>
                    </div>
                </div>
                <div id="nav">
                    <!--start nav-->
                    <ul>
                        <li class="first"><a href="" target="_blank">Fitness</a></li>
                        <li><a class="active" href="" target="_blank">Comida</a></li>
                        <li><a href="" target="_blank">Sexo y Amor</a></li>
                        <li><a href="" target="_blank">Mujer</a></li>
                        <li><a href="" target="_blank">Dieta</a></li>
                        <li><a href="" target="_blank">Salud</a></li>
                        <li><a href="" target="_blank">Belleza</a></li>
                        <li><a href="" target="_blank">Estilo</a></li>
                    </ul>
                </div>
                <!--end nav-->
                <div id="nav2">
                    <ul>
                        <li class="first"><a href="" target="_blank">Recetas</a></li>
                        <li><a href="" target="_blank">Perdida de peso</a></li>
                        <li><a href="" target="_blank">Calorías</a></li>
                        <li><a href="" target="_blank">Estrés</a></li>
                    </ul>
                </div>
            </div>
            <!--end headerInside-->
            <div style="clear: both;"></div>
        </div>
        <!--end header-->
        <div id="main">
            <!--start main-->
            <div id="content">
                <!--start content-->
                <div class="leftColumn fl">
                    <!--start leftColumn-->
                    <span class="h2span">INFORME ESPECIAL:</span>
                    <img alt="" class="featured" src="img/featured.jpg" />
                    <p></p>
                    <h1>CIENTÍFICOS: ¡ADELGAZA A LAS DOS HORAS DESPUÉS DE USARLO!</h1>
                    <br />
                    <br />
                    <table class="prof">
                        <tbody>
                            <tr>
                                <td class="pic"><img alt="" src="img/prof.png" /></td>
                                <td class="txt">
                                    <p>
                                        El nuevo descubrimiento del prof. Fisher comprueba que uno puede deshacerse del
                                        sobrepeso y del colesterol alto a la vez. </p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p style="margin-top:5px;"><strong>Los especialistas informan que basta con tomar una para perder 2,5
                            kg. El profesor Adam Fisher comprobó con pruebas médicas que en solo 120 minutos derrite el tejido
                            adiposo. Al mismo tiempo, arranca las capas de colesterol, que se desprende de las arterias. De esta
                            manera, adelgaza y reduce todas las consecuencias más graves del sobrepeso: colesterol alto, exceso
                            de azúcar y trastornos metabólicos.</strong></p>
                    <br />
                    <div style="clear:both;"></div>
                    <br />
                    <p class="fletter">
                        El profesor Fisher de Ohio College creó una fórmula adelgazante súper-rápida y 100% natural. En el
                        entorno científico, desde los genéticos y médicos y hasta los académicos, todos lo consideran un
                        hito en la lucha contra la obesidad. Comprobado por pruebas empíricos, pruebas químicas y
                        clínicas. </p>
                    <br />
                    <p>
                        Solo en EE.UU. y en Japón la fórmula del profesor fue probada ya por 9.000 personas. Las encuestas y
                        entrevistas de consumidores confirmaron que tiene dos propiedades. </p>
                    <br />
                    <ul class="check" style="list-style-type:none; line-height: 150%">
                        <li>
                            Es 3 veces más rápido y efectivo que los ejercicios y las dietas bajas en calorías.
                        </li>
                        <li>
                            Disminuye el nivel de colesterol y mejora la circulación sanguínea.
                        </li>
                    </ul>
                    <br />
                    <p><strong>Las personas que adelgazan con el profesor eliminaron los depósitos de colesterol de las
                            arterias:</strong></p>
                    <br />
                    <div class="main-graphic" style="position: relative;text-align:center;">
                        <div class="main-graphic-before" style="display:inline-block;margin:auto;position:relative;max-width:50%; min-width:250px;   z-index: 1;">
                            <img src="img/cholesterola.jpg" style="max-width:100%;" />
                            <span style="position: absolute; left: 42%; bottom:78%; width:60%;">Las capas de colesterol bloquean el flujo sanguíneo</span>
                        </div>
                        <div class="main-graphic-after" style="display:inline-block;margin:auto;position:relative;max-width:50%;min-width:250px;    z-index: 0;">
                            <img src="img/cholesterolb.jpg" style="max-width:100%;" />
                            <span style="position: absolute; left:52%; bottom:78%; width:40%;">La sangre fluye normalmente</span>
                        </div>
                        <div class="clirifneed"></div>
                    </div>
                    <br class="clirifneed" />
                    <h3>Quemas 2 kg de grasa y disminuyes el colesterol a las 2 horas de usarlo - efectos garantizados con
                        pruebas médicas</h3>
                    <br />
                    <p>
                        El profesor explica los efectos de su fórmula adelgazante súper-rápida de manera científica: </p>
                    <br />
                    <p>
                        "El secreto de la eficacia está en los ingredientes. He empleado una combinación única de sustancias
                        adelgazantes y destructoras de colesterol, y la he registrado en el instituto de patentes. Quema la
                        grasa durante 24 horas al día. </p>
                    <p>
                        La más importante es el café verde: es una sustancia natural que activa el proceso de la quema de la
                        grasa, contribuyendo a la reducción rápida del peso corporal. </p>
                    <p>
                        Las sustancias incluidas en la fórmula llegan a las zonas responsables de la eliminación del tejido
                        adiposo y actúan de manera multidimensional. </p>
                    <br />
                    <p>
                        <strong>Antes que nada</strong>, hacen que el organismo comience a quemar glucosa, es decir azúcar,
                        y grasa del hígado al momento. <strong>Enseguida</strong>, y lo más importante desde el punto de
                        vista médico, es que disminuyen la asimilación de azúcar en la sangre. Cuando no se acumula azúcar
                        en la circulación, no hay posibilidad de que se convierta en grasa, porque es precisamente el azúcar
                        la que se convierte en células grasas.</p>
                    <br />
                    <p>
                        <strong>Después</strong>, limpian intensamente las venas y arterias, gracias a los antioxidantes en
                        la sangre. Estos se unen a las toxinas y pedazos de colesterol con cadenas de péptidos, para luego
                        ser eliminados de la circulación.</p>
                    <br />
                    <p>
                        La sinergia de estas tres actividades es la que permite quemar grasa y al mismo tiempo disminuir el
                        nivel de colesterol. Gracias a ello es posible no solo disminuir el nivel de grasa en la sangre,
                        también se pueden eliminar las consecuencias del sobrepeso más peligrosas para el cuerpo: el
                        colesterol alto, el exceso de azúcar y los problemas de metabolismo". </p>
                    <br />
                    <h3>Advertencia: confía solo en los métodos comprobados</h3>
                    <br />
                    <div class="poster-art" style="float:left; width: 30%;min-width:110px;  position:relative; margin-right: 20px; border: 1px solid #ccc;">
                        <img alt="" src="img/cover.jpg" style="width: 100%; display: block; margin: 0 auto; " />
                        <p style="background: #ebebeb; float:left; font-size:12px; padding:3px; text-align:center;">
                            La revista World of Science consideró que el método del profesor es el mayor descubrimiento en
                            el campo de la salud del año 2015. </p>
                    </div>
                    <p>
                        En la ciencia no hay lugar a accidentes. No hay lugar a promesas. Solo los resultados hablan por sí
                        mismos. Por eso, el prof. Fisher elaboró un test clínico especial, que confirmó que <strong>basta
                            con tan solo dos horas para pesar menos y bajar el nivel de colesterol malo.</strong></p>
                    <br />
                    <p>
                        En las pruebas participaron 122 personas de 23 a 65 años. Los participantes seguían diariamente una
                        dieta que describían como rica en grasas y colesterol. El objetivo de la prueba era comprobar que la
                        fórmula adelgazante del profesor en realidad garantiza la pérdida de peso y la reducción de
                        colesterol, <u>¿Sin dietas especiales y ejercicios?</u> Presentamos los resultados:</p>
                    <br />
                    <h3>Los resultados documentados del tratamiento de 4 semanas del prof. Fisher, publicados en la revista
                        médica Lipids in Health&amp;Disease:</h3>
                    <br />
                    <ul class="bokk" style="line-height: 150%">
                        <li>
                            En base a las encuestas, los investigadores calculan que los participantes adelgazaron en
                            promedio 14.57 kg en 30 días.
                        </li>
                        <li>
                            El análisis de sangre de los participantes demostró que el nivel de colesterol malo (LDL) en los
                            pacientes disminuyo 60 unidades.
                        </li>
                        <li>
                            Las investigaciones demostraron los beneficios del preparado en las vías arteriales.
                        </li>
                        <li>
                            El indicador BMI de los pacientes disminuyó en promedio 6.55 puntos.
                        </li>
                    </ul>
                    <br />
                    <h3>El proceso del tratamiento, de acuerdo a la documentación de la investigación*</h3>
                    <br />
                    <p>
                        <small>*Nota de redacción: Se ha mantenido el texto original. Los datos de los pacientes se han
                            borrado para proteger su privacidad.
                        </small>
                    </p>
                    <div class="day">
                        <span class="day-t"></span>
                        <div class="day-text">
                            <h2><strong>La primera semana</strong></h2>
                            <p class="testdiaryp">
                                Me presenté a las pruebas porque temía por mi salud. Ya después de las primeras dos horas
                                sentí los primeros efectos. Tenía más energía y no sentía hambre. </p>
                            <p class="testdiaryp">
                                Dos días después aún me sentía genial y casi no pensaba en comer. Estaba también más
                                relajada y bien descansada, porque desde que había comenzado con el tratamiento dejé de
                                preocuparme tanto por mi estado de salud. </p>
                            <p class="testdiaryp">
                                Seis días después me subí a la báscula. El resultado: ¡5 kg menos! ¡Por primera vez, desde
                                hacía años, pesaba menos de 80 kg! </p>
                            <div class="clr"></div>
                        </div>
                    </div>
                    <div class="day">
                        <span class="day-t"></span>
                        <div class="day-text">
                            <h2><strong>La tercera semana</strong></h2>
                            <p class="testdiaryp">
                                Me siento bien, como nunca antes. Tengo más energía y duermo mejor, seguro porque ya no
                                siento estrés pensando en el sobrepeso y los problemas que causa. Estoy relajada y, además,
                                he adelgazado 5 kilogramos más. En total, he bajado 10 kg en 3 semanas, es decir, 476 gramos
                                diarios. </p>
                            <p class="testdiaryp">
                                Adelgazar esos 10 kilos es un gran alivio para las articulaciones y la espalda. ¡No más
                                dolor y adiós al estrés! </p>
                            <div class="clr"></div>
                        </div>
                    </div>
                    <div class="day">
                        <span class="day-t"></span>
                        <div class="day-text">
                            <h2><strong>La cuarta semana</strong></h2>
                            <p class="testdiaryp">
                                En la cuatro semanas vino la última prueba. Adelgacé un total de 15 kilos, pero las pruebas
                                de sangre tenían que demostrar si había logrado vencer al colesterol alto.</p>
                            <p class="testdiaryp">
                                Tenía miedo. Cuando el médico me invitó a su consulta, me dijo con rostro serio: "Señora
                                Isabel, al principio pensaba que había confundido sus resultados con los de otro paciente.
                                Pero no es un error - ¡FELICIDADES POR SU ÉXITO!"</p>
                            <p class="testdiaryp">
                                ¡Mi nivel de colesterol había caído un total de 80 puntos! Por fin puedo dormir tranquila,
                                sin preocuparme por mi salud."</p>
                            <div class="clr"></div>
                        </div>
                    </div>
                    <br />
                    <h4>Información del participante de las pruebas:</h4>
                    <br />
                    <table class="data">
                        <tbody>
                            <tr>
                                <td></td>
                                <td>
                                    29/08/2015 <br />(principio del estudio)
                                </td>
                                <td>
                                    13.09.2015
                                </td>
                                <td>
                                    20.09.2015
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Peso
                                </td>
                                <td>
                                    84
                                </td>
                                <td>
                                    73
                                </td>
                                <td>
                                    69
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Colesterol total
                                </td>
                                <td>
                                    289 mg/dl
                                </td>
                                <td>
                                    164 mg/dl
                                </td>
                                <td>
                                    147 mg/dl
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    LDL - colesterol malo
                                </td>
                                <td>
                                    210
                                </td>
                                <td>
                                    171
                                </td>
                                <td>
                                    130
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    HDL - colesterol bueno
                                </td>
                                <td>
                                    36
                                </td>
                                <td>
                                    40
                                </td>
                                <td>
                                    40
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Triglicéridos
                                </td>
                                <td>
                                    218
                                </td>
                                <td>
                                    99
                                </td>
                                <td>
                                    82
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <br />
                    <p>
                        De los relatos documentados resulta que el tratamiento adelgazante elaborado por el profesor encanta
                        no solo a científicos, sino también a las personas normales. Habrá sido por esto que se convirtió en
                        un método muy popular de la lucha contra el sobrepeso y el colesterol alto. Cada vez más personas
                        quieren comprobar personalmente su eficacia.</p>
                    <p class="pageheader">
                        <sup class="start"></sup>
                        Cuando vi el informe de las pruebas clínicas me sorprendí de verdad y desde entonces recomiendo este
                        tratamiento a todos mis clientes con sobrepeso y colesterol alto, les encanta.<sup class="end"></sup>
                    </p>
                    <p style="text-align:right;">
                        Mariano Vilalta - nutricionista de Burgos </p>
                    <br />
                    <p>
                        El profesor recibía tantas peticiones de personas que querían probar su tratamiento adelgazante
                        súper-rápido que destruye los depósitos de colesterol, que su pequeño laboratorio pronto no podía
                        más con la producción. Por eso decidió empezar la colaboración con una empresa que fabricaría el
                        suplemento adelgazante según su fórmula. Lo llamó simplemente Natillas de Chocolate. </p>
                    <br />
                    <p>
                        Puesto que es un método científico, el profesor Fisher declaró que lo único que importa son los
                        resultados, no las promesas. Por eso, si cualquier persona usa el suplemento Natillas de Chocolate y no
                        consigue los resultados garantizados, recibirá una devolución incondicional de 100% de los gastos.
                        Esto es garantía personal del prof. Fisher, confirmada por el fabricante del producto. ¡De esta
                        manera no arriesgas nada! </p>
                    <br />
                    <p class="pageheader mt">
                        <sup class="start"></sup>
                        El profesor Fisher no promete nada, él habla sobre los hechos. Sin duda alguna, es el mejor
                        tratamiento documentado adelgazante que existe.<sup class="end"></sup>
                    </p>
                    <p style="text-align:right;">
                        Max Bosworth, doctor en ciencias de salud de Worlds Health News </p>
                    <br />
                    <p>
                        Recuerda, leer sobre el mejor método para adelgazar no te ayudará a perder peso. Por eso, si
                        realmente quieres bajar de peso y terminar con el colesterol, ¡debes probar este método tú mismo! Si
                        lo haces, te convencerás de que los resultados no están comprobados solo con datos científicos,
                        también los comprobarás tu mismo. Y lo más importante, no tendrás que esperar más de 24 h. Es
                        posible que, si tomaras la la bebida al leer este texto, ¡ya habrías visto los primeros
                        resultados! </p>
                    <br />
                    <p><strong>Información importante</strong>
                        Recuerda: el producto Natillas de Chocolate solo contiene sustancias naturales y no interfiere con ningunos
                        medicamentos, por eso no deberías dejar la medicación recetada durante el tratamiento. </p>
                    <br />
                    <p>
                        Después de publicar este artículo, con placer documentamos los éxitos que tienen muchas personas
                        después de usar Natillas de Chocolate (el autor del presente texto incluido). Si tú también quieres hacer
                        algo para tu salud y cuerpo, <strong>¡no esperes más!</strong> ¡No tienes nada que perder! Haz clic
                        en el presente enlace para pedir Natillas de Chocolate estando seguro que pides un producto original que
                        funciona de verdad.</p>
                    <br />
                    <div class="clr"></div>
                </div>
                <!--end leftColumn-->
                <div class="sidebar fr">
                    <!--start sidebar-->
                    <div id="socialmedia">
                        <img src="img/facebooks.jpg" />
                    </div>
                    <br />
                    <div class="weather">
                        <ul>
                            <li><img alt="" src="img/w1.jpg" /></li>
                            <li>
                                <p class="big">9<sup>°</sup></p>
                                <p>Nublado</p>
                            </li>
                            <li>
                                <p class="mini"><i>RealFeel® </i><b>9<sup>°</sup></b></p>
                            </li>
                            <li>
                                <p class="blue">Hoy</p>
                                <p class="date">
                                    <script type="text/javascript">
                                    dtime_nums(-1, true)
                                    </script>
                                </p>
                                <img alt="" src="img/w2.jpg" />
                            </li>
                            <li>
                                <p class="blue">Esta noche</p>
                                <p class="date">
                                    <script type="text/javascript">
                                    dtime_nums(-1, true)
                                    </script>
                                </p>
                                <img alt="" src="img/w3.jpg" />
                            </li>
                            <li>
                                <p class="blue">Mañana</p>
                                <p class="date">
                                    <script type="text/javascript">
                                    dtime_nums(-1, true)
                                    </script>
                                </p>
                                <img alt="" src="img/w4.jpg" />
                            </li>
                            <li class="minh">
                                <p>Máx. <b>14<sup>°</sup></b></p>
                                <p><i>RealFeel® </i><b>9<sup>°</sup></b></p>
                                <p class="mini">Areas de niebla</p>
                            </li>
                            <li class="minh">
                                <p>Mín. <b>5<sup>°</sup></b></p>
                                <p><i>RealFeel® </i><b>9<sup>°</sup></b></p>
                                <p class="mini">Parcialmente nublado</p>
                            </li>
                            <li class="minh">
                                <p>Máx. <b>15<sup>°</sup></b></p>
                                <p><i>RealFeel® </i><b>9<sup>°</sup></b></p>
                                <p class="mini">Intervalos de nubes y sol</p>
                            </li>
                        </ul>
                    </div>
                    <a class="aw-widget-legal" href=""></a>
                    <div class="aw-widget-36hour lt-320 lt-480 lt-540 lt-624 lt-632 lt-780 lt-860 lt-950" data-editlocation="true" data-language="es" data-locationkey="" data-uid="awtd1383134730488" data-unit="c" data-useip="true" id="awtd1383134730488">
                    </div>
                    <br />
                    <a href="" target="_blank"><img src="img/cover.jpg" /></a>
                    <br />
                    <h1>Las opiniones de los clientes</h1>
                    <div class="testim">
                        <div class="test">
                            <img alt="" src="img/user01.jpg" />
                            <p style="font-weight:bold;">¡15 kg menos en un mes!</p>
                            <p> El sobrepeso me molestaba en mi vida cotidiana. Dolor de articulaciones, falta de aliento,
                                transpiración excesiva... solo son algunas de las molestias de las que sufría. Natillas de Chocolate
                                me lo recomendó un nutricionista conocido. Cuando lo probé, supe de inmediato que NUNCA más
                                iba a probar otro método. Gracias a esto, mi sobrepeso desaparecía día tras día, y con él se
                                desvanecían todos mis problemas.</p>
                            <span>Juana, Almería</span>
                        </div>
                        <div class="test">
                            <img alt="" src="img/user02.jpg" />
                            <p style="font-weight:bold;">Temía por mi salud</p>
                            <p>El médico estaba horrorizado con mis resultados. Dijo que si quiero vivir hasta la vejez,
                                tengo que hacer algo con mi colesterol alto inmediatamente. Al principio seguía dietas, pero
                                sin efectos. Por fin me peché con el método del profesor y todo cambió para bien. Día tras
                                día tenía menos grasa y bajaba el nivel de colesterol malo. En totalidad, perdí 25 kilos y
                                bajé el nivel de colesterol en 120 unidades. Seamos sinceros, este producto me ha devuelto
                                la salud.</p>
                            <span>Alba, Vigo</span>
                        </div>
                    </div>
                </div>
                <!--end sidebar-->
            </div>
            <!--end content-->
        </div>
        <!--end main-->
    </div>
    <!--end container-->
    <div class="clr"></div>
    <div id="fullWidth">
		<div class="scroll"></div>
                <div class="spin-wrapper">
                    <p>
                        ATENCION!
                    </p>
                    <p>
                        Nuestro sitio ofrece descuentos en la compra de Natillas de Chocolate. Hacer
                        Pruebe su suerte haciendo clic en el botón Girar. Si tiene suerte, ¡Puede comprar este producto a un precio con descuento!
                        Suerte
                    </p>
                    <div class="wheel-wrarpper">
                        <div class="wheel">
                            <img class="wheel-img lazy" src="img/prizewheel.png" />
                            <div class="wheel-cursor">
                                <img src="img/wheel-cursor.png" />
                                <span class="cursor-text active"> GIRAR </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="order_block">
                    <div class="iframe">
                        <font class="form-font" color="black">
                            Ingrese sus datos para ordenar
                            Natillas de chocolate
                            <br>
                            <span style="color:red; white-space: nowrap;">
                                <span class="hidden-pzero">Cómprelo por 49.9 euros</span>,
                            </span>
                            <span style="color:red; white-space: nowrap;">En vez de <span style="text-decoration: line-through;">99.8 euros</span>:
                            </span>
                        </font>
                        <form class="orderForm x_order_form order_all" action="" method="POST">
                            <div class="order_form">
                                <div class="block_form">
                                    <label class="block_form_label">Nombre:</label>
                                    <div>
                                        <input type="text" class="form_input" name="name" required placeholder="Escriba su nombre">
                                    </div>
                                </div>
                                <div class="block_form">
                                    <label class="block_form_label">Número de teléfono:</label>
                                    <div>
                                        <input class="form_input phone_n" name="phone" required placeholder="+34 912345678" type="tel">
                                    </div>
                                </div>
                                <div class="clear"></div>
                                <button class="button order-btn ifr_button sub" style="text-transform: uppercase;" type="submit">Cómprelo por 49.9 euros</span>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="spin-result-wrapper">
                        <div class="pop-up-window">
                            <div class="close-popup"></div>
                            <span class="pop-up-heading"> Felicidades!</span>
                            <p class="pop-up-text">¡Acaba de recibir un descuento del 50% para comprar Natillas de Chocolate!</p>
                            <a class="pop-up-button" href="#">Aceptar</a>
                        </div>
                    </div>
                </div>
        <div class="step">
            <u><a href="" target="_blank">
                    <p style="font-size:25px; color:blue; line-height: initial;">Haz clic aquí para recibir el producto del
                        prof. Fisher<br /> con el descuento y libérate del sufrimiento causado por el sobrepeso&gt;&gt;</p>
                </a></u>
        </div>
        <!--end step-->
        <div class="clr"></div>
        <div class="fbcommentscontainer">
            <div id="feedback_1HsYymlsW4NLzXtW1" style="font-family: Tahoma;">
                <div class="fbFeedbackContent" id="uz1cxy_1">
                    <div class="stat_elem">
                        <div class="uiHeader uiHeaderTopBorder uiHeaderNav composerHider">
                            <div class="clearfix uiHeaderTop">
                                <a class="uiHeaderActions rfloat" target="_blank">
                                    Comentar </a>
                                <div>
                                    <h4 class="uiHeaderTitle" tabindex="0">
                                        <div class="uiSelector inlineBlock orderSelector lfloat uiSelectorNormal">
                                            <div class="wrap">
                                                <a aria-expanded="false" aria-haspopup="1" class="uiSelectorButton uiButton uiButtonSuppressed" data-label="683 comments" data-length="60" rel="toggle" role="button" target="_blank"><span class="uiHeaderActions">Últimos comentarios en Facebook</span></a>
                                                <div class="uiSelectorMenuWrapper uiToggleFlyout">
                                                </div>
                                            </div>
                                        </div>
                                        <span class="phm indicator"></span>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="uiList fbFeedbackPosts">
                        <li class="fbFeedbackPost fbFirstPartyPost uiListItem fbTopLevelComment uiListItem uiListVerticalItemBorder" id="fbc_10150877187848759_22497027_10150877337728759">
                            <div class="UIImageBlock clearfix">
                                <a aria-hidden="true" class="postActor UIImageBlock_Image UIImageBlock_MED_Image" href="" tabindex="-1" target="_blank"><img alt="" class="img" src="img/41554_50302938_1878686864_q.jpg" /></a>
                                <div class="UIImageBlock_Content UIImageBlock_MED_Content">
                                    <div class="postContainer fsl fwb fcb">
                                        <a class="profileName" href="" target="_blank">
                                            Mª Carmen Sosa </a>
                                        <div class="postContent fsm fwn fcg">
                                            <div class="postText">
                                                Vi resultados de las pruebas en la prensa, son sorprendentes de verdad. El
                                                mes que viene me caso así que lo voy a probar sin duda!! Gracias por la
                                                info!!
                                            </div>
                                            <div class="stat_elem">
                                                <div class="action_links fsm fwn fcg">
                                                    <a id="uz1cxy_5" target="_blank">
                                                        Respuesta </a>
                                                    <span class="dotpos">.</span>
                                                    <a class="uiBlingBox postBlingBox" data-ft='{"tn":"O"}' target="_blank"><i class="img sp_comments sx_comments_like"><img src="img/likethumb.png" /> </i>
                                                        <span class="text">13</span></a> <span class="dotpos">.</span>
                                                    <a class="fbUpDownVoteOption hidden_elem" rel="async-post" target="_blank">
                                                        ¡Me gusta! </a>
                                                    <span class="dotpos">.</span>
                                                    <abbr class="timestamp" data-utime="1338433588" title="Wednesday, May 30, 2012 at 8:06pm">hace 12 minutos</abbr>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fsm fwn fcg"></div>
                                </div>
                            </div>
                        </li>
                        <li class="fbFeedbackPost fbFirstPartyPost uiListItem fbTopLevelComment uiListItem uiListVerticalItemBorder" id="fbc_10150877187848759_22497027_10150877337728759">
                            <div class="UIImageBlock clearfix">
                                <a aria-hidden="true" class="postActor UIImageBlock_Image UIImageBlock_MED_Image" href="" tabindex="-1" target="_blank"><img alt="" class="img" src="img/370176_564964504_308463864_q.jpg" /></a>
                                <div class="UIImageBlock_Content UIImageBlock_MED_Content">
                                    <div class="postContainer fsl fwb fcb">
                                        <a class="profileName" href="" target="_blank">
                                            Alicia Muñoz </a>
                                        <div class="postContent fsm fwn fcg">
                                            <div class="postText">
                                                Tengo colesterol alto y más de 15 kilos de sobrepeso. He rellenado el
                                                formulario. No veo la hora de empezar a usarlo.
                                            </div>
                                            <div class="stat_elem">
                                                <div class="action_links fsm fwn fcg">
                                                    <a id="uz1cxy_5" target="_blank">
                                                        Respuesta </a> <span class="dotpos">.</span>
                                                    <a class="uiBlingBox postBlingBox" data-ft='{"tn":"O"}' target="_blank"><i class="img sp_comments sx_comments_like"><img src="img/likethumb.png" /></i><span class="text">6</span></a>
                                                    <span class="dotpos">.</span>
                                                    <a class="fbUpDownVoteOption hidden_elem" rel="async-post" target="_blank">
                                                        ¡Me gusta! </a>
                                                    <span class="dotpos">.</span>
                                                    <abbr class="timestamp" data-utime="1338433588" title="Wednesday, May 30, 2012 at 8:06pm">hace 13 minutos</abbr>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fsm fwn fcg"></div>
                                </div>
                            </div>
                        </li>
                        <li class="fbFeedbackPost fbFirstPartyPost uiListItem fbTopLevelComment uiListItem uiListVerticalItemBorder" id="fbc_10150877187848759_22497027_10150877337728759">
                            <div class="UIImageBlock clearfix">
                                <a aria-hidden="true" class="postActor UIImageBlock_Image UIImageBlock_MED_Image" href="" tabindex="-1" target="_blank"><img alt="" class="img" src="img/157804_21416303_1043059674_q.jpg" /></a>
                                <div class="UIImageBlock_Content UIImageBlock_MED_Content">
                                    <div class="postContainer fsl fwb fcb">
                                        <a class="profileName" href="" target="_blank">
                                            Julia Diaz </a>
                                        <div class="postContent fsm fwn fcg">
                                            <div class="postText">
                                                Hace tiempo que sigo las novedades del campo de salud y dietas. Hace poco
                                                escuché a mi madre hablar sobre este método, porque una amiga suya perdió 6
                                                kg en 15 días y estabilizó el nivel de azúcar. Tendré que probar un día,
                                                gracias.
                                            </div>
                                            <div class="stat_elem">
                                                <div class="action_links fsm fwn fcg">
                                                    <a id="uz1cxy_5" target="_blank">
                                                        Respuesta </a> <span class="dotpos">.</span>
                                                    <a class="uiBlingBox postBlingBox" data-ft='{"tn":"O"}' target="_blank"><i class="img sp_comments sx_comments_like"><img src="img/likethumb.png" /></i><span class="text">19</span></a>
                                                    <span class="dotpos">.</span>
                                                    <a class="fbUpDownVoteOption hidden_elem" rel="async-post" target="_blank">
                                                        ¡Me gusta! </a>
                                                    <span class="dotpos">.</span>
                                                    <abbr class="timestamp" data-utime="1338433588" title="Wednesday, May 30, 2012 at 8:06pm">hace 25 minutos</abbr>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="postReplies fsm fwn fcg">
                                        <div id="uz1cxy_4">
                                            <ul class="uiList fbFeedbackReplies">
                                                <li class="fbFeedbackPost fbFirstPartyPost uiListItem fbCommentRespuesta uiListItem uiListVerticalItemBorder" id="fbc_10150877337728759_22500369_10150877995903759_Respuesta">
                                                    <div class="UIImageBlock clearfix">
                                                        <a aria-hidden="true" class="postActor UIImageBlock_Image UIImageBlock_MED_Image" tabindex="-1" target="_blank"><img alt="" class="img" src="img/157689_1027278331_1478344009_q.jpg" /></a>
                                                        <div class="UIImageBlock_Content UIImageBlock_MED_Content">
                                                            <div class="postContainer fsl fwb fcb">
                                                                <a class="profileName" href="" target="_blank">
                                                                    Inmaculada Arroyo </a>
                                                                <div class="postContent fsm fwn fcg">
                                                                    <div class="postText">
                                                                        Sí, en serio es un producto increíble!!! Mi mejor
                                                                        amiga usa Natillas de Chocolate y ha adelgazado un montón...
                                                                        no podía creerlo, me puse a buscar para investigar
                                                                        un poco el tema y así encontré este artículo. ¡No
                                                                        podía creer que se lo puede conseguir en una oferta
                                                                        así! Sé que mi amiga gastó unos 150 euros, pero
                                                                        igual valió la pena... imagínense lo contenta que
                                                                        estaría si hubiera pagado mucho menos. ¡Es un regalo
                                                                        maravilloso, gracias!!
                                                                    </div>
                                                                    <div class="stat_elem">
                                                                        <div class="action_links fsm fwn fcg">
                                                                            <a id="uz1cxy_8" target="_blank">
                                                                                Respuesta </a> <span class="dotpos">.</span>
                                                                            <a class="fbUpDownVoteOption hidden_elem" rel="async-post" target="_blank">
                                                                                ¡Me gusta! </a>
                                                                            <span class="dotpos">.</span>
                                                                            <abbr class="timestamp" data-utime="1338463406" title="Thursday, May 31, 2012 at 4:23am">hace
                                                                                46 minutos</abbr>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="postReplies fsm fwn fcg"></div>
                                                            <div class="fsm fwn fcg"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="fsm fwn fcg"></div>
                                </div>
                            </div>
                        </li>
                        <li class="fbFeedbackPost fbFirstPartyPost uiListItem fbTopLevelComment uiListItem uiListVerticalItemBorder" id="fbc_10150877187848759_22497027_10150877337728759">
                            <div class="UIImageBlock clearfix">
                                <a aria-hidden="true" class="postActor UIImageBlock_Image UIImageBlock_MED_Image" href="" tabindex="-1" target="_blank"><img alt="" class="img" src="img/572741_30110787_2084442239_q.jpg" /></a>
                                <div class="UIImageBlock_Content UIImageBlock_MED_Content">
                                    <div class="postContainer fsl fwb fcb">
                                        <a class="profileName" href="" target="_blank">
                                            Valeria Torres </a>
                                        <div class="postContent fsm fwn fcg">
                                            <div class="postText">
                                                Llevo toda mi vida luchando con sobrepeso y espero que algo por fin me
                                                ayude... He rellenado el formulario y me he apuntado al gimnasio. Espero
                                                perder unos 20 kilos este año.
                                            </div>
                                            <div class="stat_elem">
                                                <div class="action_links fsm fwn fcg">
                                                    <a id="uz1cxy_5" target="_blank">
                                                        Respuesta </a> <span class="dotpos">.</span>
                                                    <a class="uiBlingBox postBlingBox" data-ft='{"tn":"O"}' target="_blank"><i class="img sp_comments sx_comments_like"><img src="img/likethumb.png" /></i><span class="text">53</span></a>
                                                    <span class="dotpos">.</span>
                                                    <a class="fbUpDownVoteOption hidden_elem" rel="async-post" target="_blank">
                                                        ¡Me gusta! </a>
                                                    <span class="dotpos">.</span>
                                                    <abbr class="timestamp" data-utime="1338433588" title="Wednesday, May 30, 2012 at 8:06pm">hace aproximadamente una hora</abbr>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fsm fwn fcg"></div>
                                </div>
                            </div>
                        </li>
                        <li class="fbFeedbackPost fbFirstPartyPost uiListItem fbTopLevelComment uiListItem uiListVerticalItemBorder" id="fbc_10150877187848759_22497027_10150877337728759">
                            <div class="UIImageBlock clearfix">
                                <a aria-hidden="true" class="postActor UIImageBlock_Image UIImageBlock_MED_Image" href="" tabindex="-1" target="_blank"><img alt="" class="img" src="img/174008_50902984_682021130_q.jpg" /></a>
                                <div class="UIImageBlock_Content UIImageBlock_MED_Content">
                                    <div class="postContainer fsl fwb fcb">
                                        <a class="profileName" href="" target="_blank">
                                            Patricia Rodriguez </a>
                                        <div class="postContent fsm fwn fcg">
                                            <div class="postText">
                                                Justo estaba buscando algunos métodos comprobados para bajar el colesterol
                                                porque mi marido se descuidó mucho, gracias por la ayuda!
                                            </div>
                                            <div class="stat_elem">
                                                <div class="action_links fsm fwn fcg">
                                                    <a id="uz1cxy_5" target="_blank">
                                                        Respuesta </a> <span class="dotpos">.</span>
                                                    <a class="uiBlingBox postBlingBox" data-ft='{"tn":"O"}' target="_blank"><i class="img sp_comments sx_comments_like"><img src="img/likethumb.png" /></i><span class="text">3</span></a>
                                                    <span class="dotpos">.</span>
                                                    <a class="fbUpDownVoteOption hidden_elem" rel="async-post" target="_blank">
                                                        ¡Me gusta! </a>
                                                    <span class="dotpos">.</span>
                                                    <abbr class="timestamp" data-utime="1338433588" title="Wednesday, May 30, 2012 at 8:06pm">hace 1 hora</abbr>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fsm fwn fcg"></div>
                                </div>
                            </div>
                        </li>
                        <li class="fbFeedbackPost fbFirstPartyPost uiListItem fbTopLevelComment uiListItem uiListVerticalItemBorder" id="fbc_10150877187848759_22497027_10150877337728759">
                            <div class="UIImageBlock clearfix">
                                <a aria-hidden="true" class="postActor UIImageBlock_Image UIImageBlock_MED_Image" href="" tabindex="-1" target="_blank"><img alt="" class="img" src="img/371948_501645553_1716896386_q.jpg" /></a>
                                <div class="UIImageBlock_Content UIImageBlock_MED_Content">
                                    <div class="postContainer fsl fwb fcb">
                                        <a class="profileName" href="" target="_blank">
                                            Ma Ribel </a>
                                        <div class="postContent fsm fwn fcg">
                                            <div class="postText">
                                                hola acabo me rellenar el formulario, quiero empezar ya!! graciasss!
                                            </div>
                                            <div class="stat_elem">
                                                <div class="action_links fsm fwn fcg">
                                                    <a id="uz1cxy_5" target="_blank">
                                                        Respuesta </a> <span class="dotpos">.</span>
                                                    <a class="uiBlingBox postBlingBox" data-ft='{"tn":"O"}' target="_blank"><i class="img sp_comments sx_comments_like"><img src="img/likethumb.png" /></i><span class="text">1</span></a>
                                                    <span class="dotpos">.</span>
                                                    <a class="fbUpDownVoteOption hidden_elem" rel="async-post" target="_blank">
                                                        ¡Me gusta! </a>
                                                    <span class="dotpos">.</span>
                                                    <abbr class="timestamp" data-utime="1338433588" title="Wednesday, May 30, 2012 at 8:06pm">hace 2 horas</abbr>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fsm fwn fcg"></div>
                                </div>
                            </div>
                        </li>
                        <li class="fbFeedbackPost fbFirstPartyPost uiListItem fbTopLevelComment uiListItem uiListVerticalItemBorder" id="fbc_10150877187848759_22497027_10150877337728759">
                            <div class="UIImageBlock clearfix">
                                <a aria-hidden="true" class="postActor UIImageBlock_Image UIImageBlock_MED_Image" href="" tabindex="-1" target="_blank"><img alt="" class="img" src="img/273930_20904468_1027986766_q.jpg" /></a>
                                <div class="UIImageBlock_Content UIImageBlock_MED_Content">
                                    <div class="postContainer fsl fwb fcb">
                                        <a class="profileName" href="" target="_blank">
                                            José Arregui </a>
                                        <div class="postContent fsm fwn fcg">
                                            <div class="postText">
                                                Me lo recomendó un amigo que lo usó hace un tiempo. Me apunté al club, pedí
                                                un envase y lo recibí a unos 3 días (desgraciadamente entonces no tenían
                                                esta oferta, una pena). Por ahora los afectos son asombrosos, los kilos
                                                desaparecen y yo me siento cada vez mejor. Estoy esperando la 3 y 4 semana.
                                            </div>
                                            <div class="stat_elem">
                                                <div class="action_links fsm fwn fcg">
                                                    <a id="uz1cxy_5" target="_blank">
                                                        Respuesta </a> <span class="dotpos">.</span>
                                                    <a class="uiBlingBox postBlingBox" data-ft='{"tn":"O"}' target="_blank"><i class="img sp_comments sx_comments_like"><img src="img/likethumb.png" /></i><span class="text">12</span></a>
                                                    <span class="dotpos">.</span>
                                                    <a class="fbUpDownVoteOption hidden_elem" rel="async-post" target="_blank">
                                                        ¡Me gusta! </a>
                                                    <span class="dotpos">.</span>
                                                    <abbr class="timestamp" data-utime="1338433588" title="Wednesday, May 30, 2012 at 8:06pm">hace 2 horas</abbr>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fsm fwn fcg"></div>
                                </div>
                            </div>
                        </li>
                        <li class="fbFeedbackPost fbFirstPartyPost uiListItem fbTopLevelComment uiListItem uiListVerticalItemBorder" id="fbc_10150877187848759_22497027_10150877337728759">
                            <div class="UIImageBlock clearfix">
                                <a aria-hidden="true" class="postActor UIImageBlock_Image UIImageBlock_MED_Image" href="" tabindex="-1" target="_blank"><img alt="" class="img" src="img/173211_1135451090_1466382495_q.jpg" /></a>
                                <div class="UIImageBlock_Content UIImageBlock_MED_Content">
                                    <div class="postContainer fsl fwb fcb">
                                        <a class="profileName" href="" target="_blank">
                                            Mónica Cabrera </a>
                                        <div class="postContent fsm fwn fcg">
                                            <div class="postText">
                                                Me encantan estas esta bebida, porque nada más me funciona igual de bien. No
                                                podía creer lo que veía cuando perdí 2 kg la primera semana.
                                            </div>
                                            <div class="stat_elem">
                                                <div class="action_links fsm fwn fcg">
                                                    <a id="uz1cxy_5" target="_blank">
                                                        Respuesta </a> <span class="dotpos">.</span>
                                                    <a class="uiBlingBox postBlingBox" data-ft='{"tn":"O"}' target="_blank"><i class="img sp_comments sx_comments_like"><img src="img/likethumb.png" /></i><span class="text">30</span></a>
                                                    <span class="dotpos">.</span>
                                                    <a class="fbUpDownVoteOption hidden_elem" rel="async-post" target="_blank">
                                                        ¡Me gusta! </a>
                                                    <span class="dotpos">.</span>
                                                    <abbr class="timestamp" data-utime="1338433588" title="Wednesday, May 30, 2012 at 8:06pm">hace 2 horas</abbr>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fsm fwn fcg"></div>
                                </div>
                            </div>
                        </li>
                        <li class="fbFeedbackPost fbFirstPartyPost uiListItem fbTopLevelComment uiListItem uiListVerticalItemBorder" id="fbc_10150877187848759_22497027_10150877337728759">
                            <div class="UIImageBlock clearfix">
                                <a aria-hidden="true" class="postActor UIImageBlock_Image UIImageBlock_MED_Image" href="" tabindex="-1" target="_blank"><img alt="" class="img" src="img/369223_12411516_333332392_q.jpg" /></a>
                                <div class="UIImageBlock_Content UIImageBlock_MED_Content">
                                    <div class="postContainer fsl fwb fcb">
                                        <a class="profileName" href="" target="_blank">
                                            Mercedez Chaves </a>
                                        <div class="postContent fsm fwn fcg">
                                            <div class="postText">
                                                a mi me funciona maravilloso!!! así como esperaba. La verdad es que no fue
                                                muy dificíl y quiero que todos sepais que realmente funciona.
                                                <div class="comm__img">
                                                	<a href="#"><img src="img/review1.jpg" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="stat_elem">
                                                <div class="action_links fsm fwn fcg">
                                                    <a id="uz1cxy_5" target="_blank">
                                                        Respuesta </a> <span class="dotpos">.</span>
                                                    <a class="uiBlingBox postBlingBox" data-ft='{"tn":"O"}' target="_blank"><i class="img sp_comments sx_comments_like"><img src="img/likethumb.png" /></i><span class="text">53</span></a>
                                                    <span class="dotpos">.</span>
                                                    <a class="fbUpDownVoteOption hidden_elem" rel="async-post" target="_blank">
                                                        ¡Me gusta! </a>
                                                    <span class="dotpos">.</span>
                                                    <abbr class="timestamp" data-utime="1338433588" title="Wednesday, May 30, 2012 at 8:06pm">hace 2 horas</abbr>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fsm fwn fcg"></div>
                                </div>
                            </div>
                        </li>
                        <li class="fbFeedbackPost fbFirstPartyPost uiListItem fbTopLevelComment uiListItem uiListVerticalItemBorder" id="fbc_10150877187848759_22497027_10150877337728759">
                            <div class="UIImageBlock clearfix">
                                <a aria-hidden="true" class="postActor UIImageBlock_Image UIImageBlock_MED_Image" href="" tabindex="-1" target="_blank"><img alt="" class="img" src="img/371738_1363268399_1637317047_q.jpg" /></a>
                                <div class="UIImageBlock_Content UIImageBlock_MED_Content">
                                    <div class="postContainer fsl fwb fcb">
                                        <a class="profileName" href="" target="_blank">
                                            Marisol Gavarette </a>
                                        <div class="postContent fsm fwn fcg">
                                            <div class="postText">
                                                Pues todo lo que ponen aquí es un cuento. Se me hace difícil creerlo. Las
                                                usé y en 3 semanas perdí más de 10kg. Mi madre las usa desde hace 3 días y
                                                ya ha perdido 2 kilos. Y no siente hambre. Habían momentos que tenía algo de
                                                hambre, ¡pero que más da! La mayoría era el hambre psicológica. Esto
                                                funcionó cuando ya me habían fallado todas las dietas. ¿Qué otra dieta
                                                permite perder tanto sin ejercicios y hambre? ¡Ninguna!
                                            </div>
                                            <div class="stat_elem">
                                                <div class="action_links fsm fwn fcg">
                                                    <a id="uz1cxy_5" target="_blank">
                                                        Respuesta </a> <span class="dotpos">.</span>
                                                    <a class="uiBlingBox postBlingBox" data-ft='{"tn":"O"}' target="_blank"><i class="img sp_comments sx_comments_like"><img src="img/likethumb.png" /></i><span class="text">16</span></a>
                                                    <span class="dotpos">.</span>
                                                    <a class="fbUpDownVoteOption hidden_elem" rel="async-post" target="_blank">
                                                        ¡Me gusta! </a>
                                                    <span class="dotpos">.</span>
                                                    <abbr class="timestamp" data-utime="1338433588" title="Wednesday, May 30, 2012 at 8:06pm">hace 2 horas</abbr>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fsm fwn fcg"></div>
                                </div>
                            </div>
                        </li>
                        <li class="fbFeedbackPost fbFirstPartyPost uiListItem fbTopLevelComment uiListItem uiListVerticalItemBorder" id="fbc_10150877187848759_22497027_10150877337728759">
                            <div class="UIImageBlock clearfix">
                                <a aria-hidden="true" class="postActor UIImageBlock_Image UIImageBlock_MED_Image" href="" tabindex="-1" target="_blank"><img alt="" class="img" src="img/48783_12401144_1332233149_q.jpg" /></a>
                                <div class="UIImageBlock_Content UIImageBlock_MED_Content">
                                    <div class="postContainer fsl fwb fcb">
                                        <a class="profileName" href="" target="_blank">
                                            Almudena García </a>
                                        <div class="postContent fsm fwn fcg">
                                            <div class="postText">
                                                YA había escrito aquí, pero he regresado para deciros ¡cómo me va! Bajé casi
                                                30 kg en 2 series durante 6 meses, y mantengo ese peso. Mis resultados
                                                hablan por si mismos. Natillas de Chocolate es capaz de mejorar tu vida. ¡Gracias!
                                            </div>
                                            <div class="stat_elem">
                                                <div class="action_links fsm fwn fcg">
                                                    <a id="uz1cxy_5" target="_blank">
                                                        Respuesta </a> <span class="dotpos">.</span>
                                                    <a class="uiBlingBox postBlingBox" data-ft='{"tn":"O"}' target="_blank"><i class="img sp_comments sx_comments_like"><img src="img/likethumb.png" /></i><span class="text">2</span></a>
                                                    <span class="dotpos">.</span>
                                                    <a class="fbUpDownVoteOption hidden_elem" rel="async-post" target="_blank">
                                                        ¡Me gusta! </a>
                                                    <span class="dotpos">.</span>
                                                    <abbr class="timestamp" data-utime="1338433588" title="Wednesday, May 30, 2012 at 8:06pm">hace 2 horas</abbr>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fsm fwn fcg"></div>
                                </div>
                            </div>
                        </li>
                        <li class="fbFeedbackPost fbFirstPartyPost uiListItem fbTopLevelComment uiListItem uiListVerticalItemBorder" id="fbc_10150877187848759_22497027_10150877337728759">
                            <div class="UIImageBlock clearfix">
                                <a aria-hidden="true" class="postActor UIImageBlock_Image UIImageBlock_MED_Image" href="" tabindex="-1" target="_blank"><img alt="" class="img" src="img/187364_20501998_2048679844_q.jpg" /></a>
                                <div class="UIImageBlock_Content UIImageBlock_MED_Content">
                                    <div class="postContainer fsl fwb fcb">
                                        <a class="profileName" href="" target="_blank">
                                            Pablo Delgado </a>
                                        <div class="postContent fsm fwn fcg">
                                            <div class="postText">
                                                Tengo 28 años y tengo que perder unos 10 kilos. Empiezo hoy y espero que el
                                                método funcione. ¡Crucen los dedos!
                                            </div>
                                            <div class="stat_elem">
                                                <div class="action_links fsm fwn fcg">
                                                    <a id="uz1cxy_5" target="_blank">
                                                        Respuesta </a> <span class="dotpos">.</span>
                                                    <a class="uiBlingBox postBlingBox" data-ft='{"tn":"O"}' target="_blank"><i class="img sp_comments sx_comments_like"><img src="img/likethumb.png" /></i><span class="text">11</span></a>
                                                    <span class="dotpos">.</span>
                                                    <a class="fbUpDownVoteOption hidden_elem" rel="async-post" target="_blank">
                                                        ¡Me gusta! </a>
                                                    <span class="dotpos">.</span>
                                                    <abbr class="timestamp" data-utime="1338433588" title="Wednesday, May 30, 2012 at 8:06pm">hace 2 horas</abbr>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fsm fwn fcg"></div>
                                </div>
                            </div>
                        </li>
                        <li class="fbFeedbackPost fbFirstPartyPost uiListItem fbTopLevelComment uiListItem uiListVerticalItemBorder" id="fbc_10150877187848759_22497027_10150877337728759">
                            <div class="UIImageBlock clearfix">
                                <a aria-hidden="true" class="postActor UIImageBlock_Image UIImageBlock_MED_Image" href="" tabindex="-1" target="_blank"><img alt="" class="img" src="img/273549_7706291_1106946751_q.jpg" /></a>
                                <div class="UIImageBlock_Content UIImageBlock_MED_Content">
                                    <div class="postContainer fsl fwb fcb">
                                        <a class="profileName" href="" target="_blank">
                                            Margarita Serrano </a>
                                        <div class="postContent fsm fwn fcg">
                                            <div class="postText">
                                                Yo estoy haciendo el tratamiento de 40 días con este suplemento (lo pedí en
                                                esta página). Lo único que voy a decir es que conmigo funciona. Después de
                                                26 días desaparecieron 12 kilos. ¡Y no los quiero de vuelta! Tengo más
                                                energía, duermo bien, no me duelen articulaciones, y solo son algunos de los
                                                beneficios. Puedo decir que ser una persona delgada no tiene precio. Estoy
                                                llegando a los 50 y a pesar de que antes a veces descuidaba mi salud, ahora
                                                se ha convertido en una prioridad. Estas esta bebida son perfectas para mi.
                                                ¿Tenéis algunos consejos?
                                            </div>
                                            <div class="stat_elem">
                                                <div class="action_links fsm fwn fcg">
                                                    <a id="uz1cxy_5" target="_blank">
                                                        Respuesta </a> <span class="dotpos">.</span>
                                                    <a class="uiBlingBox postBlingBox" data-ft='{"tn":"O"}' target="_blank"><i class="img sp_comments sx_comments_like"><img src="img/likethumb.png" /></i><span class="text">33</span></a>
                                                    <span class="dotpos">.</span>
                                                    <a class="fbUpDownVoteOption hidden_elem" rel="async-post" target="_blank">
                                                        ¡Me gusta! </a>
                                                    <span class="dotpos">.</span>
                                                    <abbr class="timestamp" data-utime="1338433588" title="Wednesday, May 30, 2012 at 8:06pm">hace 2 horas</abbr>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fsm fwn fcg"></div>
                                </div>
                            </div>
                        </li>
                        <li class="fbFeedbackPost fbFirstPartyPost uiListItem fbTopLevelComment uiListItem uiListVerticalItemBorder" id="fbc_10150877187848759_22497027_10150877337728759">
                            <div class="UIImageBlock clearfix">
                                <a aria-hidden="true" class="postActor UIImageBlock_Image UIImageBlock_MED_Image" href="" tabindex="-1" target="_blank"><img alt="" class="img" src="img/370345_7008369_2025512953_q.jpg" /></a>
                                <div class="UIImageBlock_Content UIImageBlock_MED_Content">
                                    <div class="postContainer fsl fwb fcb">
                                        <a class="profileName" href="" target="_blank">
                                            Luz Gonzalez </a>
                                        <div class="postContent fsm fwn fcg">
                                            <div class="postText">
                                                Después de la primera serie con el producto Natillas de Chocolate perdí casi 20 kg...
                                                después cuidé el peso unas 6 semanas y hace un par de días empecé la segunda
                                                vuelta y y tengo 6 kilos menos... ningunos efectos secundarios, dolores de
                                                cabeza o lo que sea... para mi es lo mejor del mundo... tanto dinero gastado
                                                en varias dietas y programas de adelgazamiento, no pienso probar más nada...
                                            </div>
                                            <div class="stat_elem">
                                                <div class="action_links fsm fwn fcg">
                                                    <a id="uz1cxy_5" target="_blank">
                                                        Respuesta </a> <span class="dotpos">.</span>
                                                    <a class="uiBlingBox postBlingBox" data-ft='{"tn":"O"}' target="_blank"><i class="img sp_comments sx_comments_like"><img src="img/likethumb.png" /></i><span class="text">23</span></a>
                                                    <span class="dotpos">.</span>
                                                    <a class="fbUpDownVoteOption hidden_elem" rel="async-post" target="_blank">
                                                        ¡Me gusta! </a>
                                                    <span class="dotpos">.</span>
                                                    <abbr class="timestamp" data-utime="1338433588" title="Wednesday, May 30, 2012 at 8:06pm">hace 3 horas</abbr>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fsm fwn fcg"></div>
                                </div>
                            </div>
                        </li>
                        <li class="fbFeedbackPost fbFirstPartyPost uiListItem fbTopLevelComment uiListItem uiListVerticalItemBorder" id="fbc_10150877187848759_22497027_10150877337728759">
                            <div class="UIImageBlock clearfix">
                                <a aria-hidden="true" class="postActor UIImageBlock_Image UIImageBlock_MED_Image" href="" tabindex="-1" target="_blank"><img alt="" class="img" src="img/371925_1426200070_1825128294_q.jpg" /></a>
                                <div class="UIImageBlock_Content UIImageBlock_MED_Content">
                                    <div class="postContainer fsl fwb fcb">
                                        <a class="profileName" href="" target="_blank">
                                            Belén Sosa </a>
                                        <div class="postContent fsm fwn fcg">
                                            <div class="postText">
                                                Hoy es mi octavo día del tratamiento y ya perdí 3 kg :))
                                            </div>
                                            <div class="stat_elem">
                                                <div class="action_links fsm fwn fcg">
                                                    <a id="uz1cxy_5" target="_blank">
                                                        Respuesta </a> <span class="dotpos">.</span>
                                                    <a class="uiBlingBox postBlingBox" data-ft='{"tn":"O"}' target="_blank"><i class="img sp_comments sx_comments_like"><img src="img/likethumb.png" /></i><span class="text">6</span></a>
                                                    <span class="dotpos">.</span>
                                                    <a class="fbUpDownVoteOption hidden_elem" rel="async-post" target="_blank">
                                                        ¡Me gusta! </a>
                                                    <span class="dotpos">.</span>
                                                    <abbr class="timestamp" data-utime="1338433588" title="Wednesday, May 30, 2012 at 8:06pm">hace 3 horas</abbr>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fsm fwn fcg"></div>
                                </div>
                            </div>
                        </li>
                        <li class="fbFeedbackPost fbFirstPartyPost uiListItem fbTopLevelComment uiListItem uiListVerticalItemBorder" id="fbc_10150877187848759_22497027_10150877337728759">
                            <div class="UIImageBlock clearfix">
                                <a aria-hidden="true" class="postActor UIImageBlock_Image UIImageBlock_MED_Image" href="" tabindex="-1" target="_blank"><img alt="" class="img" src="img/275712_1815883270_368899092_q.jpg" /></a>
                                <div class="UIImageBlock_Content UIImageBlock_MED_Content">
                                    <div class="postContainer fsl fwb fcb">
                                        <a class="profileName" href="" target="_blank">
                                            Eva Garrido </a>
                                        <div class="postContent fsm fwn fcg">
                                            <div class="postText">
                                                Llevo 6 días con el tratamiento y perdí casi 5 kilos. Es muy excitante. Por
                                                fin no me comen los remordimientos por picar entre comidas. Tengo muchísima
                                                energía y limitar las calorías parece más fácil. Anoche tuve que forzarme
                                                para terminar a comer una manzana. ¡Suerte a todos ustedes!
                                            </div>
                                            <div class="stat_elem">
                                                <div class="action_links fsm fwn fcg">
                                                    <a id="uz1cxy_5" target="_blank">
                                                        Respuesta </a> <span class="dotpos">.</span>
                                                    <a class="uiBlingBox postBlingBox" data-ft='{"tn":"O"}' target="_blank"><i class="img sp_comments sx_comments_like"><img src="img/likethumb.png" /></i><span class="text">2</span></a>
                                                    <span class="dotpos">.</span>
                                                    <a class="fbUpDownVoteOption hidden_elem" rel="async-post" target="_blank">
                                                        ¡Me gusta! </a>
                                                    <span class="dotpos">.</span>
                                                    <abbr class="timestamp" data-utime="1338433588" title="Wednesday, May 30, 2012 at 8:06pm">hace 3 horas</abbr>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fsm fwn fcg"></div>
                                </div>
                            </div>
                        </li>
                        <li class="fbFeedbackPost fbFirstPartyPost uiListItem fbTopLevelComment uiListItem uiListVerticalItemBorder" id="fbc_10150877187848759_22497027_10150877337728759">
                            <div class="UIImageBlock clearfix">
                                <a aria-hidden="true" class="postActor UIImageBlock_Image UIImageBlock_MED_Image" href="" tabindex="-1" target="_blank"><img alt="" class="img" src="img/371788_39603151_990746142_q.jpg" /></a>
                                <div class="UIImageBlock_Content UIImageBlock_MED_Content">
                                    <div class="postContainer fsl fwb fcb">
                                        <a class="profileName" href="" target="_blank">
                                            Marta Rivera </a>
                                        <div class="postContent fsm fwn fcg">
                                            <div class="postText">
                                                Hasta ahora no sabía que tal producto existe. Ya llevo 6 días usando el
                                                suplemento. El lunes todavía pesaba 84 kg. Hoy es domingo y peso 81 kg.
                                                Decidan ustedes mismos si funciona. :) Este producto es una maravilla.
                                            </div>
                                            <div class="stat_elem">
                                                <div class="action_links fsm fwn fcg">
                                                    <a id="uz1cxy_5" target="_blank">
                                                        Respuesta </a> <span class="dotpos">.</span>
                                                    <a class="uiBlingBox postBlingBox" data-ft='{"tn":"O"}' target="_blank"><i class="img sp_comments sx_comments_like"><img src="img/likethumb.png" /></i><span class="text">17</span></a>
                                                    <span class="dotpos">.</span>
                                                    <a class="fbUpDownVoteOption hidden_elem" rel="async-post" target="_blank">
                                                        ¡Me gusta! </a>
                                                    <span class="dotpos">.</span>
                                                    <abbr class="timestamp" data-utime="1338433588" title="Wednesday, May 30, 2012 at 8:06pm">hace 4 horas</abbr>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fsm fwn fcg"></div>
                                </div>
                            </div>
                        </li>
                        <li class="fbFeedbackPost fbFirstPartyPost uiListItem fbTopLevelComment uiListItem uiListVerticalItemBorder" id="fbc_10150877187848759_22497027_10150877337728759">
                            <div class="UIImageBlock clearfix">
                                <a aria-hidden="true" class="postActor UIImageBlock_Image UIImageBlock_MED_Image" href="" tabindex="-1" target="_blank"><img alt="" class="img" src="img/370953_20903876_26789988_q.jpg" /></a>
                                <div class="UIImageBlock_Content UIImageBlock_MED_Content">
                                    <div class="postContainer fsl fwb fcb">
                                        <a class="profileName" href="" target="_blank">
                                            María Jose Escobar </a>
                                        <div class="postContent fsm fwn fcg">
                                            <div class="postText">
                                                He decidido participar en el club de los descuentos para recibir Natillas de Chocolate. Solo quería perder 5 kg. Tardé solo 1,5 semana y dejé de usar el
                                                producto. Atención: comía lo que me daba la gana. Sé que debería haber
                                                seguido la dieta, pero contar calorías no es lo mío. Comía sano (verduras,
                                                carne magra, pescado) y hacía bastante ejercicio. Después de la primera
                                                semana noté que tenía menos apetito, pero más energía. Estaba contenta. Me
                                                gustaba que siguiera perdiendo peso aunque ya no tomaba las pastillas. Creo
                                                que es por haber cambiado el estilo de vida, pero Natillas de Chocolate contribuyó
                                                bastante. Ahora me sería difícil perder peso, pero no me molesta. Lo
                                                recomiendo a todos, pero junto con una dieta adecuada y un programa de
                                                ejercicios, y tras consultarlo con un médico.
                                            </div>
                                            <div class="stat_elem">
                                                <div class="action_links fsm fwn fcg">
                                                    <a id="uz1cxy_5" target="_blank">
                                                        Respuesta </a> <span class="dotpos">.</span>
                                                    <a class="uiBlingBox postBlingBox" data-ft='{"tn":"O"}' target="_blank"><i class="img sp_comments sx_comments_like"><img src="img/likethumb.png" /></i><span class="text">8</span></a>
                                                    <span class="dotpos">.</span>
                                                    <a class="fbUpDownVoteOption hidden_elem" rel="async-post" target="_blank">
                                                        ¡Me gusta! </a>
                                                    <span class="dotpos">.</span>
                                                    <abbr class="timestamp" data-utime="1338433588" title="Wednesday, May 30, 2012 at 8:06pm">hace 6 horas</abbr>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fsm fwn fcg"></div>
                                </div>
                            </div>
                        </li>
                        <li class="fbFeedbackPost fbFirstPartyPost uiListItem fbTopLevelComment uiListItem uiListVerticalItemBorder" id="fbc_10150877187848759_22497027_10150877337728759">
                            <div class="UIImageBlock clearfix">
                                <a aria-hidden="true" class="postActor UIImageBlock_Image UIImageBlock_MED_Image" href="" tabindex="-1" target="_blank"><img alt="" class="img" src="img/173605_1387563113_14543618_q.jpg" /></a>
                                <div class="UIImageBlock_Content UIImageBlock_MED_Content">
                                    <div class="postContainer fsl fwb fcb">
                                        <a class="profileName" href="" target="_blank">
                                            Carmen Velazquez </a>
                                        <div class="postContent fsm fwn fcg">
                                            <div class="postText">
                                                Que yo sepa, este tratamiento, y sobre todo si se realiza bajo el control
                                                médico, no solo funciona, sino que es totalmente seguro. Probablemente es
                                                mejor no usarlo por más de 40 días seguidos, pero dudo que alguien lo use
                                                así. Una dieta baja en carbohidratos puede ser de ayuda. No se recomiendan
                                                comidas con mucha grasa. Pienso que Natillas de Chocolate puede ser una buena
                                                alternativa para los que han probado de todo y han empezado a tener
                                                problemas de salud resultantes del sobrepeso.
                                            </div>
                                            <div class="stat_elem">
                                                <div class="action_links fsm fwn fcg">
                                                    <a id="uz1cxy_5" target="_blank">
                                                        Respuesta </a> <span class="dotpos">.</span>
                                                    <a class="uiBlingBox postBlingBox" data-ft='{"tn":"O"}' target="_blank"><i class="img sp_comments sx_comments_like"><img src="img/likethumb.png" /></i><span class="text">20</span></a>
                                                    <span class="dotpos">.</span>
                                                    <a class="fbUpDownVoteOption hidden_elem" rel="async-post" target="_blank">
                                                        ¡Me gusta! </a>
                                                    <span class="dotpos">.</span>
                                                    <abbr class="timestamp" data-utime="1338433588" title="Wednesday, May 30, 2012 at 8:06pm">hace 8 horas</abbr>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fsm fwn fcg"></div>
                                </div>
                            </div>
                        </li>
                        <li class="fbFeedbackPost fbFirstPartyPost uiListItem fbTopLevelComment uiListItem uiListVerticalItemBorder" id="fbc_10150877187848759_22497027_10150877337728759">
                            <div class="UIImageBlock clearfix">
                                <a aria-hidden="true" class="postActor UIImageBlock_Image UIImageBlock_MED_Image" href="" tabindex="-1" target="_blank"><img alt="" class="img" src="img/70524_1387164496_88414351_q.jpg" /></a>
                                <div class="UIImageBlock_Content UIImageBlock_MED_Content">
                                    <div class="postContainer fsl fwb fcb">
                                        <a class="profileName" href="" target="_blank">
                                            Gloria Villanueva </a>
                                        <div class="postContent fsm fwn fcg">
                                            <div class="postText">
                                                Digan lo que quieran sobre la eficacia de Natillas de Chocolate. Para mí, lo único
                                                que importa es si se pierde peso o no. Y es que yo sí que perdí bastante
                                                gracias a este producto.
                                            </div>
                                            <div class="stat_elem">
                                                <div class="action_links fsm fwn fcg">
                                                    <a id="uz1cxy_5" target="_blank">
                                                        Respuesta </a> <span class="dotpos">.</span>
                                                    <a class="uiBlingBox postBlingBox" data-ft='{"tn":"O"}' target="_blank"><i class="img sp_comments sx_comments_like"><img src="img/likethumb.png" /></i><span class="text">10</span></a>
                                                    <span class="dotpos">.</span>
                                                    <a class="fbUpDownVoteOption hidden_elem" rel="async-post" target="_blank">
                                                        ¡Me gusta! </a>
                                                    <span class="dotpos">.</span>
                                                    <abbr class="timestamp" data-utime="1338433588" title="Wednesday, May 30, 2012 at 8:06pm">hace 8 horas</abbr>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fsm fwn fcg"></div>
                                </div>
                            </div>
                        </li>
                        <li class="fbFeedbackPost fbFirstPartyPost uiListItem fbTopLevelComment uiListItem uiListVerticalItemBorder" id="fbc_10150877187848759_22497027_10150877337728759">
                            <div class="UIImageBlock clearfix">
                                <a aria-hidden="true" class="postActor UIImageBlock_Image UIImageBlock_MED_Image" href="" tabindex="-1" target="_blank"><img alt="" class="img" src="img/68110_118129944918825_2832407_n.jpg" /></a>
                                <div class="UIImageBlock_Content UIImageBlock_MED_Content">
                                    <div class="postContainer fsl fwb fcb">
                                        <a class="profileName" href="" target="_blank">
                                            Isabel Barral </a>
                                        <div class="postContent fsm fwn fcg">
                                            <div class="postText">
                                                ¡Es un producto fenomenal! Viajo mucho, y me es difícil mantener una
                                                alimentación disciplinada. Pero Natillas de Chocolate me ayuda a mantener mi peso
                                                adecuado. En 19 días pude bajar 9 kg.
                                            </div>
                                            <div class="stat_elem">
                                                <div class="action_links fsm fwn fcg">
                                                    <a id="uz1cxy_5" target="_blank">
                                                        Respuesta </a> <span class="dotpos">.</span>
                                                    <a class="uiBlingBox postBlingBox" data-ft='{"tn":"O"}' target="_blank"><i class="img sp_comments sx_comments_like"><img src="img/likethumb.png" /></i><span class="text">13</span></a>
                                                    <span class="dotpos">.</span>
                                                    <a class="fbUpDownVoteOption hidden_elem" rel="async-post" target="_blank">
                                                        ¡Me gusta! </a>
                                                    <span class="dotpos">.</span>
                                                    <abbr class="timestamp" data-utime="1338433588" title="Wednesday, May 30, 2012 at 8:06pm">hace 8 horas</abbr>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fsm fwn fcg"></div>
                                </div>
                            </div>
                        </li>
                        <li class="fbFeedbackPost fbFirstPartyPost uiListItem fbTopLevelComment uiListItem uiListVerticalItemBorder" id="fbc_10150877187848759_22497027_10150877337728759">
                            <div class="UIImageBlock clearfix">
                                <a aria-hidden="true" class="postActor UIImageBlock_Image UIImageBlock_MED_Image" href="" tabindex="-1" target="_blank"><img alt="" class="img" src="img/369872_722424386_1857330401_q.jpg" /></a>
                                <div class="UIImageBlock_Content UIImageBlock_MED_Content">
                                    <div class="postContainer fsl fwb fcb">
                                        <a class="profileName" href="" target="_blank">
                                            Pilar Toledo </a>
                                        <div class="postContent fsm fwn fcg">
                                            <div class="postText">
                                                Acabo de terminar el tratamiento con Natillas de Chocolate y conseguí perder 7 kg y
                                                me siento estupendamente. He probado varias dietas y técnicas de perder el
                                                peso, pero gracias a éste ni siquiera tenía que hacer ejercicio. Simplemente
                                                empecé a tomar estas pastillas y el sobrepeso desapareció.
                                            </div>
                                            <div class="stat_elem">
                                                <div class="action_links fsm fwn fcg">
                                                    <a id="uz1cxy_5" target="_blank">
                                                        Respuesta </a> <span class="dotpos">.</span>
                                                    <a class="uiBlingBox postBlingBox" data-ft='{"tn":"O"}' target="_blank"><i class="img sp_comments sx_comments_like"><img src="img/likethumb.png" /></i><span class="text">3</span></a>
                                                    <span class="dotpos">.</span>
                                                    <a class="fbUpDownVoteOption hidden_elem" rel="async-post" target="_blank">
                                                        ¡Me gusta! </a>
                                                    <span class="dotpos">.</span>
                                                    <abbr class="timestamp" data-utime="1338433588" title="Wednesday, May 30, 2012 at 8:06pm">hace 8 horas</abbr>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fsm fwn fcg"></div>
                                </div>
                            </div>
                        </li>
                        <li class="fbFeedbackPost fbFirstPartyPost uiListItem fbTopLevelComment uiListItem uiListVerticalItemBorder" id="fbc_10150877187848759_22497027_10150877337728759">
                            <div class="UIImageBlock clearfix">
                                <a aria-hidden="true" class="postActor UIImageBlock_Image UIImageBlock_MED_Image" href="" tabindex="-1" target="_blank"><img alt="" class="img" src="img/224406_100629153374069_2784614_n.jpg" /></a>
                                <div class="UIImageBlock_Content UIImageBlock_MED_Content">
                                    <div class="postContainer fsl fwb fcb">
                                        <a class="profileName" href="" target="_blank">
                                            Diana Correa </a>
                                        <div class="postContent fsm fwn fcg">
                                            <div class="postText">
                                                Empecé con 79 kilos, ahora peso 66. Perdí 13 kg durante la primera serie y
                                                estoy encantada. Usando este método no tenía hambre y dormía muy bien. Tengo
                                                5 cm menos en la pantorrilla, la cintura, la cadera y los hombros en tan
                                                solo 40 días. Después de la segunda serie perdí 5 kilos en 12 días. Gracias
                                                a Natillas de Chocolate me siento como una súper héroe.
                                            </div>
                                            <div class="stat_elem">
                                                <div class="action_links fsm fwn fcg">
                                                    <a id="uz1cxy_5" target="_blank">
                                                        Respuesta </a> <span class="dotpos">.</span>
                                                    <a class="uiBlingBox postBlingBox" data-ft='{"tn":"O"}' target="_blank"><i class="img sp_comments sx_comments_like"><img src="img/likethumb.png" /></i><span class="text">5</span></a>
                                                    <span class="dotpos">.</span>
                                                    <a class="fbUpDownVoteOption hidden_elem" rel="async-post" target="_blank">
                                                        ¡Me gusta! </a>
                                                    <span class="dotpos">.</span>
                                                    <abbr class="timestamp" data-utime="1338433588" title="Wednesday, May 30, 2012 at 8:06pm">hace 9 horas</abbr>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fsm fwn fcg"></div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="fbConnectWidgetFooter">
                        <div class="fbFooterBorder">
                            <div class="clearfix uiImageBlock">
                                <a class="uiImageBlockImage uiImageBlockSmallImage lfloat" target="_blank"><i class="img sp_comments sx_comments_cfavicon"></i></a>
                                <div class="uiImageBlockContent uiImageBlockSmallContent">
                                    <div class="fss fwn fcg">
                                        <span>
                                            <a class="uiLinkSubtle" target="_blank">Facebook social plugin</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <!--End of fbcommentscontainer -->
    </div>
    <script src="js/spin.js"></script>
    <script>var LP_COUNTRY = 'ES'</script>
    <link rel="stylesheet" href="ex-content/gs-tooltip.css" />
    <script src="ex-content/gs-tooltip.js"></script>
    <!-- GS Footer -->
    <style type="text/css">.gs-f-box{border-top:1px solid #e2e2e2;padding:20px;background-color:#fff;text-align:center;font-size:12px;line-height:15px}.gs-f-box,.gs-f-box a{color:#666}.gs-f-links{margin-top:10px}.gs-f-links a{margin:0 5px}</style>
    <div class="gs-f-box"><div>&quot;<a href="https://gracestore.es/" target="_blank">Grace Store, SL</a>&quot;, Calle Aribau, 207, A1, Barcelona, 08021. All rights reserved.</div><div class="gs-f-links"><a href="https://gracestore.es/privacy-policy" target="_blank">Privacy policy</a><a href="https://gracestore.es/general-conditions-of-sale" target="_blank">General conditions of sale</a><a href="https://gracestore.es/legal-warning" target="_blank">Legal warning</a><a href="https://gracestore.es/delivery-and-returns" target="_blank">Delivery & Returns</a></div></div>
</body>

</html>