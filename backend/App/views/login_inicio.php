<?php
echo $header;
?>


<!DOCTYPE html>
<html lang="es">
<head>

    <style type="text/css">
         html, body { height:100%; width:100%; height:100vh; width:100vw; margin:0; padding:0; overflow:hidden; }
        .fill-viewport { position:fixed; top:0; left:0; right:0; bottom:0; padding:0; margin:0; overflow: hidden; }
        .fill-viewport.landscape-left { left: env(safe-area-inset-left); }
        .fill-viewport.landscape-right { right: env(safe-area-inset-right); }
        #viewer { z-index:1; }
        #preloadContainer { z-index:2; opacity:0; background-color:rgba(255,255,255,1); transition: opacity 0.5s; -webkit-transition: opacity 0.5s; -moz-transition: opacity 0.5s; -o-transition: opacity 0.5s;}
    </style>

</head>
<body>
<div id="preloadContainer" class="fill-viewport"><div style="z-index: 4; position: absolute; display: flex; align-items: center; text-align: center; overflow: hidden; right: 37.13561470215462%; bottom: 16.871508379888265%; width: 26.87%; height: 83.13%" ><video id="video_D4221595_C59E_39E2_41E1_6A4F7484883C" width="100%" height="100%" onended="onVideoEnd()" autoplay playsinline webkit-playsinline poster="media/video_D4221595_C59E_39E2_41E1_6A4F7484883C_poster_es.jpg" preload="auto"><source src="media/video_D4221595_C59E_39E2_41E1_6A4F7484883C_es.mp4" type="video/mp4">Your browser does not support the video tab</video></div><div style="z-index: 5; position: absolute; left: 0%; top: 82.73743016759776%; width: 100.00%; height: 10.00%" ><div style="text-align:left; color:#000; "><DIV STYLE="text-align:center;font-size:1.6666666666666663vmin;"><SPAN STYLE="display:inline-block; letter-spacing:0vmin; white-space:pre-wrap;color:#777777;font-size:1.67vmin;font-family:Arial, Helvetica, sans-serif;">Cargando , por favor espere...</SPAN></DIV></div></div></div>
<div id="viewer" class="fill-viewport"></div>
</body>
</html>
