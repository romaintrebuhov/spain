<?php

if (empty($_GET['name']) || empty($_GET['phone']) || empty($_GET['status']) || !in_array($_GET['status'], array('success','already')))
	die();


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Success </title>
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
<?php if(!empty($_GET["lym"])): ?>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript"> (function (d, w, c) {
            (w[c] = w[c] || []).push(function () {
                try {
                    w.yaCounter<?=htmlspecialchars($_GET["lym"])?> = new Ya.Metrika2({
                        id:<?=htmlspecialchars($_GET["lym"])?>,
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
        <div><img src="https://mc.yandex.ru/watch/<?= htmlspecialchars($_GET["lym"]) ?>?ut=noindex"
                  style="position:absolute; left:-9999px;" alt=""/></div>
    </noscript><!-- /Yandex.Metrika counter -->
<?php endif; ?>

<?php
$status = (!empty($_GET['status']) ? $_GET['status'] : "");
if(!empty($_GET["lfp"]) && $status != 'already'):
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
        fbq('init', '<?=htmlspecialchars($_GET["lfp"])?>');
        <?php if($status == 'success'): ?>
        fbq('track', 'Purchase');
        <?php else: ?>
        fbq('track', 'PageView');
        <?php endif; ?>
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=<?= htmlspecialchars($_GET["lfp"]) ?>&ev=PageView&noscript=1"/>
    </noscript>
    <!-- End Facebook Pixel Code-->
<?php endif; ?>

<?php if(!empty($_GET["lga"])): ?>
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

        ga('create', '<?=htmlspecialchars($_GET["lga"])?>', 'auto', {'name': 'WM'});
        ga('WM.send', 'pageview');
    </script>
    <!-- End Google Analytics -->
<?php endif; ?>

</head>
<body>

<style type="text/css">html,body{font-family:"Arial";font-weight:400;overflow-x:hidden;background-color:#e8ecef}*{margin:0;padding:0;box-sizing:border-box}.wrapper{width:100%;height:100%;min-height:100vh;padding:80px 0;position:relative}.content{border-radius:7px;background-color:#fff;box-shadow:0 1px 13px 0 rgba(142,158,179,0.38);width:939px;margin:0 auto;padding:40px 50px}.title{text-align:center;font-size:36px;color:#4779bd;line-height:1.2;padding:0 0 30px;width:839px;text-align:left;margin:0 auto}.title img,.title span{display:inline-block;vertical-align:middle}.title img{width:53px;height:53px}.content > div{font-size:16px;color:#343434;line-height:1.2;margin-bottom:20px}.content > div:last-child{margin-bottom:0}.contact-info{border:1px dashed #cfddea;border-radius:4px;background-color:#f3f5f7;width:100%;padding:20px 30px;font-size:16px;color:#343434;margin:20px 0}.contact-info p + p{margin-top:20px}.contact-info span{font-weight:700}.gs-f-box{margin-top:40px;text-align:center;font-size:12px;line-height:15px}.gs-f-box,.gs-f-box a{color:#666}.gs-f-links{margin-top:10px}.gs-f-links a{margin:0 5px}@media screen and (max-width: 768px){.title,.content{width:100%}.wrapper{padding:40px 15px}.content-wrapper{position:relative;left:auto;top:auto;margin-top:0}.content{padding:30px 20px}.title{font-size:28px;line-height:1}.title span{width:80%}.check-mark{width:40px!important}}@media screen and (max-width: 450px){.contact-info{padding:15px;font-size:16px}.content > div{font-size:14px}.title{font-size:20px}.gs-f-box{font-size:10px}}@media screen and (min-width: 769px) and (max-width: 980px){.title,.content{width:750px}.title{font-size:30px}}@media screen and (min-width: 980px) and (min-height: 700px){.content-wrapper{width:100%;position:absolute;left:0;top:50%;margin-top:-316px}}</style>

	<div class="wrapper">
		<div class="content-wrapper">
			<div class="title">
				<img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHg9IjBweCIgeT0iMHB4IiB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSI1MTIiIGhlaWdodD0iNTEyIiBjbGFzcz0iIj48Zz48Zz4KCTxnPgoJCTxwYXRoIGQ9Ik00MzcuMDE5LDc0Ljk4QzM4OC42NjcsMjYuNjI5LDMyNC4zOCwwLDI1NiwwQzE4Ny42MTksMCwxMjMuMzMxLDI2LjYyOSw3NC45OCw3NC45OEMyNi42MjgsMTIzLjMzMiwwLDE4Ny42MiwwLDI1NiAgICBzMjYuNjI4LDEzMi42NjcsNzQuOTgsMTgxLjAxOUMxMjMuMzMyLDQ4NS4zNzEsMTg3LjYxOSw1MTIsMjU2LDUxMmM2OC4zOCwwLDEzMi42NjctMjYuNjI5LDE4MS4wMTktNzQuOTgxICAgIEM0ODUuMzcxLDM4OC42NjcsNTEyLDMyNC4zOCw1MTIsMjU2UzQ4NS4zNzEsMTIzLjMzMyw0MzcuMDE5LDc0Ljk4eiBNMjU2LDQ4MkMxMzEuMzgzLDQ4MiwzMCwzODAuNjE3LDMwLDI1NlMxMzEuMzgzLDMwLDI1NiwzMCAgICBzMjI2LDEwMS4zODMsMjI2LDIyNlMzODAuNjE3LDQ4MiwyNTYsNDgyeiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgY2xhc3M9ImFjdGl2ZS1wYXRoIiBzdHlsZT0iZmlsbDojNDc3OUJEIiBkYXRhLW9sZF9jb2xvcj0iIzQ3NzliZCI+PC9wYXRoPgoJPC9nPgo8L2c+PGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMzc4LjMwNSwxNzMuODU5Yy01Ljg1Ny01Ljg1Ni0xNS4zNTUtNS44NTYtMjEuMjEyLDAuMDAxTDIyNC42MzQsMzA2LjMxOWwtNjkuNzI3LTY5LjcyNyAgICBjLTUuODU3LTUuODU3LTE1LjM1NS01Ljg1Ny0yMS4yMTMsMGMtNS44NTgsNS44NTctNS44NTgsMTUuMzU1LDAsMjEuMjEzbDgwLjMzMyw4MC4zMzNjMi45MjksMi45MjksNi43NjgsNC4zOTMsMTAuNjA2LDQuMzkzICAgIGMzLjgzOCwwLDcuNjc4LTEuNDY1LDEwLjYwNi00LjM5M2wxNDMuMDY2LTE0My4wNjZDMzg0LjE2MywxODkuMjE1LDM4NC4xNjMsMTc5LjcxNywzNzguMzA1LDE3My44NTl6IiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBjbGFzcz0iYWN0aXZlLXBhdGgiIHN0eWxlPSJmaWxsOiM0Nzc5QkQiIGRhdGEtb2xkX2NvbG9yPSIjNDc3OWJkIj48L3BhdGg+Cgk8L2c+CjwvZz48L2c+IDwvc3ZnPg==" class="check-mark" />
				<span>
					<?php
						if ($_GET['status'] == 'already')
							echo 'Su pedido está siendo procesado';
						else
							echo '¡Felicidades! Su pedido fue aceptado';
					?>
				</span>
			</div>
			<div class="content">

				<?php
					if ($_GET['status'] == 'success')
						echo '<div>Muy pronto un operador se comunicará con usted para confirmar su pedido. Se ruega mantener encendido su teléfono de contacto.</div>';
				?>

				<div>
					Información sobre su pedido:
				</div>
				<div class="contact-info">
					<?php
						if (!empty($_GET['order']))
							echo '<p>Número de pedido: <span>'.htmlspecialchars($_GET['order']).'</span></p>';
						if (!empty($_GET['order_status']))
							echo '<p>Estado del pedido: <span>'.htmlspecialchars($_GET['order_status']).'</span></p>';
					?>
					<p>Nombre: <span><?= htmlspecialchars($_GET['name']) ?></span></p>
					<p>Teléfono: <span><?= htmlspecialchars($_GET['phone']) ?></span></p>
				</div>
				<div>
					Si tiene preguntas sobre el pedido, contáctenos: <a href="mailto:support@gracestore.es">support@gracestore.es</a>
				</div>
			</div>
			<div class="gs-f-box"><div>&quot;<a href="https://gracestore.es/" target="_blank">Grace Store, SL</a>&quot;, Calle Aribau, 207, A1, Barcelona, 08021. All rights reserved.</div><div class="gs-f-links"><a href="https://gracestore.es/privacy-policy" target="_blank">Privacy policy</a><a href="https://gracestore.es/general-conditions-of-sale" target="_blank">General conditions of sale</a><a href="https://gracestore.es/legal-warning" target="_blank">Legal warning</a><a href="https://gracestore.es/delivery-and-returns" target="_blank">Delivery & Returns</a></div></div>
		</div>
	</div>

</body>
</html>