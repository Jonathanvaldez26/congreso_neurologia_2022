<title>
    Transmisión 
</title>
<?php echo $header; ?>
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <script language="javascript" type="text/javascript">
        // function textodeiframe(){
        //     var frame = document.getElementById('iframe-video');
        //     var v = frame.contentDocument.getElementsByTagName('video');
        //     // document.getElementById('txt2').value = txt;

        //     // var v = document.getElementById("transmision_prueba");
        //     // v[0].attr('muted',true);
        //     v[0].addEventListener("timeupdate",function(ev){
        //         document.getElementById("time_2").innerHTML = v[0].currentTime;
        //         // console.log(v[0].currentTime);
        //     },true);
        // }

        function textodeiframeJQ(){
            let frame = $('#iframe-video');
            let video = frame.contents().find('video');

            video.prop('muted',true);
            video.prop('autoplay',true);

            video.on('timeupdate', function(){
                $('#time_2').html(video[0].currentTime);
            });
            // console.log(doc);
            // var frame = document.getElementById('iframe-video');
            // var v = frame.contentDocument.getElementsByTagName('video');
            // document.getElementById('txt2').value = txt;

            // var v = document.getElementById("transmision_prueba");
            // v[0].attr('muted',true);
            // v[0].addEventListener("timeupdate",function(ev){
            //     document.getElementById("time_2").innerHTML = v[0].currentTime;
            //     // console.log(v[0].currentTime);
            // },true);
        }
        function textodeiframeJQ2(){
            let frame = $('#iframe-video-2');
            let video = frame.contents().find('video');

            video.prop('muted',true);
            video.prop('autoplay',true);

            video.on('timeupdate', function(){
                $('#time_2').html(video[0].currentTime);
            });
            // console.log(doc);
            // var frame = document.getElementById('iframe-video');
            // var v = frame.contentDocument.getElementsByTagName('video');
            // document.getElementById('txt2').value = txt;

            // var v = document.getElementById("transmision_prueba");
            // v[0].attr('muted',true);
            // v[0].addEventListener("timeupdate",function(ev){
            //     document.getElementById("time_2").innerHTML = v[0].currentTime;
            //     // console.log(v[0].currentTime);
            // },true);
        }

        $(document).ready(function(){
            // textodeiframe();
            textodeiframeJQ();
        })
    </script>
    <nav class="navbar navbar-main navbar-expand-lg position-sticky mt-4 top-1 px-0 mx-4 shadow-none border-radius-xl z-index-sticky" id="navbarBlur" data-scroll="true">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-2">
                    <li class="breadcrumb-item text-sm">
                        <a class="opacity-3 text-dark" href="javascript:;">
                            <svg width="12px" height="12px" class="mb-1" viewBox="0 0 45 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <title>shop </title>
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g transform="translate(-1716.000000, -439.000000)" fill="#252f40" fill-rule="nonzero">
                                        <g transform="translate(1716.000000, 291.000000)">
                                            <g transform="translate(0.000000, 148.000000)">
                                                <path d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z"></path>
                                                <path d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z"></path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </a>
                    </li>
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="/Home/">Inicio</a></li>
                    <li class="breadcrumb-item text-sm">Transmisión</li>
                </ol>
            </nav>

            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <div class="input-group"></div>
                </div>

                <ul class="navbar-nav  justify-content-end">
                    <li class="nav-item d-flex align-items-center">
                        <a href="/Home/" class="nav-link text-body font-weight-bold mx-lg-4 mx-0 px-0">
                            <i class="fa fa-home me-sm-0"></i>
                            <span class="d-sm-inline d-none">Inicio</span>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav  justify-content-end">
                    <li class="nav-item d-flex align-items-center">
                        <a href="/Login/cerrarSession" class="nav-link text-body font-weight-bold px-0">
                            <i class="fa fa-power-off me-sm-1"></i>
                            <span class="d-sm-inline d-none">Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->


    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card card-body" id="profile">
            <div class="row justify-content-center align-items-center">
              <div class="col-sm-auto col-4">
                <div class="avatar avatar-xl position-relative">
                  <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoGBxMTExYTExMWGBYZFhYWGBYYGRkZGBYZGBkZGhoYGRkcHysjGhwoIhYZJDYjKSwuMTExGSE3PDcvOyswMS4BCwsLDw4PHRERHTAoISgwMDIyMDAwMDAwMDAwMDAxMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMP/AABEIAJcBTQMBIgACEQEDEQH/xAAcAAACAgMBAQAAAAAAAAAAAAAABwUGAQMEAgj/xABOEAACAQMABQgGBgYIAgsBAAABAgMABBEFBhIhMQcTIkFRYXGBFDKCkaGxI0JicpLBUlODosLRFiQzQ0RzstJUoxUlNDVjhJOUs8PhF//EABkBAQADAQEAAAAAAAAAAAAAAAABAgMEBf/EADIRAAIBAgQDBgQHAQEAAAAAAAABAgMRBBIhMRVBURMiUmGRoQUUgdEyM2JxseHwwSP/2gAMAwEAAhEDEQA/AHNRRRQBRRRQBRRRQBRRXPd3kcS7UkiIva7BR7yaA30VATa8aOU4N3F7JLf6QazBrto9zgXcPtNs/wCrFTkl0ZF0T9FaLa7jkG1G6OO1WDD3g1uzUEmaKKKAKKKKAKKK8u4AyTgdtAZrNRVlrHaTMUjuIXYHGyHXOR2DO/yqUo01uDNFFFAYrNYJqMstYbWVikVxE7gkbKuucjsGd/lRJsEpRWKzQBRRRQBRRRQBRRRQBRRRQGKKjtKaetrf+3njjPUGYbR8F4n3VGwa+6Oc7IukB+0GQe9gBUqMnqkRdFkorVFKrKGVgykZBBBBHaCONbagkKKKKAKKKKAKKKKAKKKKAxXlmwMmvVULli060MC26HDTE7RHERrjaHtEgeG1VoRcpJIhuyInXPlOcs0NiQFG5pyASx/8MHcB9ojf1dtLu7upJW25ZHkY8Wdix95q8amcmZuI1nuHaONwGSNMbbKeDMxBCg9mCcHqq9WfJ/o6MYFsrd8haQ/vE/CuztKVLRK5SzYiKK+gG1N0ef8AB2/lGo+IFRukOTPR8udmJ4yeuN2GPZYlfhUrFw6MZGJW3meM7UbsjfpIxU+8b6tOhOUq+gwHYTp2SetjukXfnvbaru1h5K54gXt355Rv2CAsgHdvw/wPdVGkQqSrAgg4IIwQR1EHga1Tp1F1I1R9A6pawJfQCdFKdJkZSQSGXjvHEbwfOpmqXyPWTR2AZhjnJXkH3eigPnsZq6V5s0lJpGi2M0UUVUk1SyBQWYgADJJ3AAcSaTfKDr290zQQMVtxuJG4z957E7F6+J7BKcrWt+0TYwNuH9sw6z1RjuHFvIdtUfRuh5Zo5plGIoULyOeGcdFB2sd27qzvrtoUklnmUlLkiPxVm1X14vbZ0RXM0ZIUROS2ckABG4qewbx3VWatnJVonn75GYZSFTKezaGBGPHJ2vYNdNXLkbkiivfQdsZJG8YPZ2V7NYqj8qWt/o0fo8LfTyrvIO+KM5BbuY8B5nqryoxc5WRq3YgeU/XcuWs7d+gMrLIp9Y8DGp/RHWevh25XWKnNG6qyPazXj/RwohKkjfK3BVUdS5IG17s9UJXqUoxSyxM2y0ap673sDpGrGZGYKIZCSSScAI53qeHd3U8VO7fupN8j+hueuzOwysK5H+Y+QvuAY+IFOYVw4nLnskXhsZooorAsFFFFAFFFYoDBNK/XvlKbaa3smwBkPON5J6xF/u93bW7lZ1xKZsoGwxH0zg71BG6MHtI3nuIHWcK6uzD0E+9IzlLkj1I5ZizEsx3lmJJJ7STvNYrp0Xo2W4lWGFC7t1DqHWzHgqjtNNTVrksgiAe6+mk47OSI1PZji3nu7q6alaFMqoti31c1rnsXzDJ0c5aJjmNu3d9U94wfHhTo1R1qhv4tuM7LrgSRkjaQn5qeo/I7qk7bRkEa7McMaL2KiqPcBXqKyiVi6xorEYLKoBI44JA4Vw1akJ7KzNEmjakgPAg7yNxzvBwR5GtlJvSWsUmj9LXBQnmjKGki+qwdFZiB1P0iQfLhTghlDKGU5DAEHtBGQaznTcbPqSnc20UUVQkKKKKAKKKKAxSf5bc+lxZ4cwMfjfP5U4KpHKtqy91AssK7UsW0dkcXRsbQA6yMAgdxHXWtCSjNNlZLQ3cm+tcd1CkLELPEgVk/SVQAHXt3AZHUfKrjXzNDMyMHRmVlOVZSQykdYI4GmJqtyrMuI71Sw4CZBv8AbTr8V39xrathnfNEiM+o1qK4tGaThnQSQyrIp61OcdxHEHuO+u2uQuYNVbWjUS3vZUlfKMD9JsYBmUcFY9R4dLjjI7CLTRSMnF3TIauareBY1VEUKqgKqjcAAMACt1FFCTFVrlA1lFlbllI558pEO/rcjsUb/HA66sM0gUFmIAAJJPAADJJ7qQWu2sTXty0u/mx0Il7EB447WO8+Q6q2oU88tdkVk7I5dA6ImvJ1hjJLuSzOd+yM5eRu38yQOumLyjwxWOi0tIRgPIifabZ+kd2PWSVXP3uypjk11W9Dg25F+nlwz9qL9WPy4nvJ7BVP5a7/AGrmGEcI4ix+9K3DxxGv4q3z9pVSWyItaJQab/Ivovm7V5yOlLJgH7EeVH7xk99KHB6hk9Qr6K1d0eLe2hhH93Gin7wHSPvzV8XK0UupEFqa9ZtNJZ27zybwowq9bufVUeJ9wyeqlTqfoKXSt09xcEmMPtStw22+rEvYMY8FA7c1u170vJpO9S0t+kiOY0/RZ+DyH7K4O/sUnrpp6v6HjtIEgj4KN562Y+s57yd9YflQ/U/ZE7sqnK/dLDYpAgCiSRECjcAiDa3DqGQo86UFX3lrv9u6ihHCOPaP3pDv+CL76okcZYhV9ZiFXxY4Hzrqw8ctNP6lZbjp5I9GczYK5HSlZpT931U8tlQfaNXGubR9oIYo4l9VEVB4KoUfKumvOnLNJs0SsgorVPMqKXdgqqCSzEAADiSTwFLvWLlZRGKWcYkxu52TIT2UGCw7yR50hTlN6INpDJopKwcqd+r7TGJ1602MDyIOR7zTK1Q1rhv4yydF1wJIycshPWD9ZT1H5HdV50ZwV2QpJlgqG1w04tnbSTnBYDZjU/Wdtyjw6z3A1M5pO8senOduVt1PQhALd8jjJ9ylR7TVFKnnmkJOyKTPMzszuxZ2YszHiWY5JPvrbo2wkuJUhiXadzhR8yT1ADeT2Cuam/yS6scxF6VIv0ko6OeKR8R5txPds99ejWmqcf4KJXZP6n6sRWMIRelI2DJJje7fko6h+ZNT1FFeW227s1M0UUVAEFyjnOkrk/bT4RRj8qbvJ9MX0dak8REq/g6P8NJbW655y9uX7Z5QPBWKj4KKdPJ9Hs6OtR2wq34st+dduIVqUUUjuywUUUVxFwooooAooooAooooCj658nEV0WmgIinO8/oSH7QHqn7Q8waVWm9BXFo2xPEydjcUb7rjcfDjX0ZWm5tkkUpIiup3FWAIPiDXRSxEoaPVFHBM+ctHaQmt35yCRo37VOM9xHBh3Gr9q9ytOuEvItocOdjGG8WQ7j7JHhUxp/kpt5ctbuYW/R9aM+R3r5HHdS61g1Su7PJmiOx+tTpx+ZG9faArozUau+5HeiPPQ+mILlNuCVZF69k71PYynep7jXfXzdorSc1vIJYJCjjrHAjsYcGHcadGoWt638ZDAJPHjnEHAg8HX7J7Oo+RPNVoOGq2LRlctVFFcek75II3mkOERSzHuAzu7T1AdprAsUjlg1j5qIWkZ6cozJj6sYPq+0RjwB7arHJTq36RcekSDMUJB38Gl4qPBfWPs9tVzSt/Ne3LSkFpJXAVB1ZIVIx4bh8aeuquhFs7aOBcEqMu36Tneze/4AV2yfZU8q3ZRd53JakBr7d87pC4fqEhQeEYEf8AAafk0gVSx4AEnwAzXzXPMXZnPF2Zz4sST86rg1q2JkrqRYc/fW0eN3Oh2+7HmQ/6cedNLlQ1k9FtubjbE02UXHFF+vJ5A4Hew7Kp3IzbA3MszYCxQ8TwBkbjnq6MbVG6SuH0vpMKhOw7iNPsRJklu44DN4sBWlRKdTXaKIT0LbyNat7EZvHHSfKRdyA9JvFiMeC99Mc1ptbdY0WNAAqqFUDgABgD4V6nlCqzHgoLHwAzXFOTnJsulZCC16vOev7h85AlaMeEeI934PjXrUKz53SFumMgSBz+zBf5qKhJJi5Lt6zEs3ixyfiaunIxbbV8z/q4HPmzKo+G1XpS7lJ/sZrVjmFa5pVRSzEBQCSTuAAGSSeytlLLlj1kIAsozjaAeUj9H6sfnjaPds9RrzqcHOVkaN2RW9f9dXvXMcZK26norwMhH13/ACHV41W7CyknkWKFGd24Ko3nv7h3ncK820DSOsaKWdmCqo4licACnnqPqpHYxYwGlcAySdp/RXsQfHjXdOcaEbIzScmLHWDUSSztefuJU2y6IsSAtvbJOXJG8AE4A6uNTXIhbkzXEnUsaJnvdif4PjXJyvaxrPOtvGcpCSXI4GQ7iPZG7xLdlXXks0IbazVnGJJTzrA8QCAEU9nRAOO1jWc5y7LvbslJZtCzX10sUbyP6qIzt4KCT8q+cb26aaR5X9aR2dvFiSfnTp5WL/mtHyAHfKyRDwJy37qmkjU4ONk5CZM6laE9Lu4oSMpnbk/y0wSPPcvtU/41AAAGANwHZS65EdF4imuSN7sIkP2UGWI7izY9imRWOJnmnboTBWRmiiiucuYrk0reCGGSVuCRu59lSfyrrqlcr+leasuaB6UzBMfYXpOfDcB7VWhHNJIh7CaAZzji7H3sx/MmvpDRlqIYY4hwSNEHgqgflSR5NdE+kX8WRlIjzz9nQ9X94r8afFdOLlqoorDqZooorkLhRRRQGK1zyBVLMQFAJJPAAbyTWyqzynzsmjbgrxKoh+68iK37pNTFXaQZD6k6+el3s0TnZRwDbqd25M7QP2mBDeyR1Vfq+Z7eZo2V0YqykMrDiCN4Ipyai6/xXYWKYhLjhg7lk707/s+7NdNehl70dikZX3LrRWM1muUuFeSuRg16ooCia3cmkNwGktsRTcdkbonPYVHqHvHmDVB1Lmls9JwpIpRuc5iRT2SdHHeMlG78CnvSd1qukm03EI8HZmt4iR9Z0cFj5er7NdVGpKScXqrFGkhxCljy0awepZIeyWXH/LQ+fS8lpiaVvkghkmkOFRC58AOA7zw86+d9K6QeeaSeQ9KRi57s8FHcBgeVRhqeaWZ8hJ6Fy5HtBc7cNcuOhCML2GRh/CuT4sKcNQOouhPRLOKIjDlduT7772B8Ny+zU8KzrTzzbLRVkROuFxzdlcv2QS48SpA+dfPIp78p0uzo2471RfxSIPzpE11YNd1vzM57lk0fpP0fRkyrukupjHnr5qJFLnzMhXzPZVs5FNC4SW7Yb2PMx/dUguR4sAPYNLNdt9iMbz6iDvZicDxLV9D6v6NFtbxQLwjRVPe3Fj5kk+dRiHkjbm2TBXJCofXS42LG6brEEoHiUIHzqYqr8qMuzo2fvEa++RAfhmuOmryS8y72EXTM5DIOlcyd0Sf6yfypaU2uRCLFtM3bPj8Maf7q9HEu1NmcNy+zyhFLMcBQWJ7ABkmvnPTOkWuJ5bhuMjlvAfVXyGB5U89fpymj7phx5pl/F0f4qQFY4OO8iZsYfIzoIPLJduN0f0ceeG2wy7eSkD2z2VJcoHKMsYa3s3DSHKvKp6MfUQh+s/fwHjwgdXtC6UubZLeIcxbdIs7ZTndslix+u437gMLgCrvqtyd2tph2HOyjeHcDZU/YTgPE5PfVZuCm5Sd+iJV7WRUuTvk/eVlubtSsYIZIm9aQ8Qzg8E68He3hxbYry7ADJOAN5J6q0aPv4p4xJC6uhzhlOQcbjvrnnOU3dlkrC/5c7jEdtH2vI/4FC/8A2UrKZHLp/aWn3Z/nFS2c7j4V34df+SM57j95PbPmtH2y4wTEJD4yZc5/FVgrl0UmzDEvZGg9yiuqvOk7ts0RmiiioJMUjeU/TvpN4yqcxw5iXsLA/SMPE7vBRTF5SdZxZ25VG+nlBWPHFRwaTyzu7yO+lryd6qm9nG2v0ERBkPU3ZEO89fdntFdWHiopzkUlroX/AJJNAcxbc+4xJPht/ERj1B55Le0OyrxXlVA3CvVc05uUm2WSsZoooqCQooooArj0rYJNDJDIMpIpRvAjGR3jj5V2UUB87ayaBlspjDKO9Hx0ZF6mX4ZHUfKouvovTmhYbqIxzoHXiOplParcVNKzWXkuuISXtzz0fHZ3CUeXB/Lf3V6FHERlpLRmcoHLq7ykXduAkhE8Y3AOTtgd0nE+0DV40ZyqWMgHO85EftKWX8SZ+IFJ2aFkYo6srDirAqw8Qd4rXV5UKc9f4IzNH0BDrlYMMi7h83Cn3Ng15utdtHoMm7iPcjbZ9yZNIGs1n8nHqyc7GPrZyqbatFZKy5GDMwwwH2F6j3nh2VE8keiDNeiYjoQguSet2BVB472b2e+q9oDQM15LzUKZO7aY7kjHa7dXhxPVTz1V1fjsoFhj3n1nfrdzjLH3YA6gBUVHClBwjuwrt3ZUeWrTOzFFaqd8h5x/uIeiPNt/sVRtQ9FekX0EZGVDc6/3Y+lg9xIVfarv5WJHOkZAw3BIgnemznI7totU7yHWGXuJyOCpEp+8Sz/6Uq0e5Quv9cbyGmKzRRXnmhUOV1saNl73hH/NQ/lSRp3craE6NlwCcPETjqAkXJPdSRr0cJ+D6mU9yy8mWjee0hCCMrHtTN7GNn95kp70reQ2z6VzMeoRxL+8zfwU0q5cTK9T9i8Ngqocrp/6uk/zIf8A5Fq31UOVxCdHSYBOHiJx1AOMk91Z0vxr9yXsJOnFyLL/AFFz23Eh/cjH5UnKcvIx/wBhb/Pk/wBKV34r8v6mcNyw63aPa4s54V9Zo22fvDeo94FfPJFfTlLTXzk3aWRrizA2mJaSEkKGbrZCdwJ6wd2TnNc2GqqDsy0o3LtqlcCSzt3XgYY/eFAI8iCPKu66ukiRpJGVEUZZmIAA7yaSuidL6VsAYEjlUZ6KPEz4J483u6+7IqcsNT9I6RZZNIzSJEDkRkgMfuovRT7xGe6qyopO7krEp3OrSmmJ9MSm0s9qO1B+mnIxtr+jjsPUv1uvAyDftD6MjtokgiXZRBgDrPaxPWxO8nvrGidFRW0axQoEReAHWesk8ST2mu6s5ST0WxKQuOXCzJhgmA9SRkPcJFyPjH8aVLDdX0TrPoZbu2lgY4216LfosN6t5ECvn7SFjJBI8MqlXQ4ZT29o7QeIPWDXbhZpxy9Ck1qfQmrl0JbWCQcHhjb3qM1IilNyZ69RwR+i3LbKAkxynJC7RyUbHAZJIPeRu3UwZNbLFV2jdwY7pFJ9wOa46lOUZNWLpqxMVCa06zQ2MXOSnLHOxGD0nPd2DtPV7hVV1k5WIkBW0TnH/WOCqL3hThm+A76rWhdUr3ScnpFwzqjcZZB0mX9GNOzs4L41eFG3enoiG+hHW9tdaXu2P1mILvv2IY87h4DfgcSc95p06B0NFaQrBEMKvEnixPFm7Sf/AM4Cs6C0HDaRCKFNlRvJ4sx/SY9ZqRqtWrm0WyCjYzRRRWRYKKKKAKKK1tIBxOPHdQHrNBqOuNO20fr3EQ9tc+6oPWLWhGiPot5Erjf0vrDB3AkYB4dXu41JrCjObSS+tmW0GjNJafWK7f1riXycr8FxXLJfSt60sh8XY/M1Fz0F8Knzkhx6X0fbTLszxxOOrbCnHgTvHlVR0lqBolvVl5r7syke6TaqhHfxrNWjOUdmaL4SucvYsUuoWjQf+8gB3mIn312aP1O0MhzJd873NMqr7kwfjVRoqzr1HuyeEU/ExvWGldHwoI4pYEQcFRkUeOB199dY1gtT/iIvxr/OktRWdyeEx8TGvp620deKFneF8eqwkCuv3WDZHhwNedU9HWljG8UM6sryGTLuhIyqrjIxkdGlVRipzu2XkRwmPifoPIX0f61PxL/OtguU/TX8QpEbI7KMCouRwleL2HszoRglSOzIxVU0vyc6PnJZVMTHiYmAX8Byo8gKWtYFWjJx2YfwleL2G7qfqylhE8Ubs4eTnCzYz6qrjdux0fjU9mkOsrDgxHgTW1b6UcJZB4Ow/Oobbd2V4S1tL2/see1XlwDuOCDuIPXSTTTFwOE8w/aP/Otq6xXY/wATL5sT86i5XhU/Ei+6W5N9HzEkRGJj1xNsj8BynwqT1T1dSxhMMbu6l2fL7OQSFGOiAMdH40tU1vvRwuX8wh+a1tTXm+H9/nxWP/bVnOTVm9DPhdTk4jfopUJygXo+vGfFB+RFdFvyhXhYKfR9/WyuAO8kPVSr+G1l09RnUVRo9dZ+trE/tZF+amumPXaTrFmfC7x846mxi8JVXIuNFVuHW1Tx9HHhcofmoruh1gibi8Y/axn+KoMnSmt0S1QmsuqdteqOeTpgYWRTsuvdnrHccipBNJQn+9jPtL/OtouUPB194qU2ndFMr5oWl3yOtn6O7GOoPHv8yrb/AHVm05HN/wBJd7uxI8H3sxx7qZokHaPfWdqte3qWtcrkK1oHUCxtiGWLnHHB5TtkHtC+qp7wM1ZgKxtUbVZSk5ati1j3RXnNZzUEmaKxWaAKKKKA1TMACScAAnPZjrpK6ZuzI7fTyTL1OwK58EJOPhTuqEv9U7SU7TwqGO8lcqT3nZxmh2YPEQoybmrieFZpq/0Asf1b/wDqP/OsrqFY/qSf2sn+6lj0+KUej9EKmim0upFiP7gebufm1bl1Psh/h088n86WIfxWnyT9hP0U5BqvZj/DReaA/OsRaIscsqxW5K+sAqEr94Dh51FinFoeFicrGR206baztGGY44GA3EqsZA8SK9QG1PqcycEL0dg9I8F3dfdSxHF14PcSm0O0VkCnct1BvAeLIySAy7gOOd+7FbYJY3GUZGHapB+VLEcW/T7/ANCOETfon3GvQtn/AEG/Cf5U8GnQLtllCjcWJAUb8ceHHdXqGZXGUYMO1SCPeKkrxZ+H3/oR4s5P1b/gb+VHoMv6qT8Dfyp3c+myW2l2RnLZGBjjk9WK8G9i2gu2m0cYXaXaOeGBmlhxZ+H3FDa6KQgbbzRns9HdwPMMM10jQ9p9a6lH/lZB+dNdbqMhSGXDZ2TkYbHHG/fwPurzNexKoZpECngxZQp8CTg1JlL4lJvmvqvsKtdF2P8Axkn/ALd63JoSxb/HMPGBx86am2u7eN/DeN/Xu7a8GePpdJej628dH73Z50KvHz5X9V9haDVizPDSSDxTHzcVJaM1fWIHmdJxLnecRxknzLk1eyy5A3ZO8DdkgYyR7x768XE8SY22Rc8NoqM+GeNQUljqklZt/Wz/AOFYTQl2fV0mp/Yxn+Kto1evv+OQ+NulWCeaFMF2jXPDaKjPhnjWxpkVdolQmM7RIC47c8MUMnip+XovsVg6uXvXPbN963X8q1S6uXZ+po9vvQsPlVrF1GQpDqQxwpDDDHsU53nceFDXCAMSygL6xyOjuz0t+7zqSPmZeXoinf0auRxtNHN4I6/lR/R+UcdG2jfclK/NKt3/AEhDs7fOx7Gcbe0uzns2s4zWzn1OBtDLDKjI6Q7R2jePfQlYqf8Ar/cpw0KPr6IX2J0PzK16XQNqfW0ZMveGUj92XPwq3PdIGCF0DngpYBj4DOTWJruNCFd0VjwDMAT4AnfQPEz8/V/crlvqdo+ThBIvcxmX/UcHyrYeT+x/VMP2j/zqattIKzSDZZRGcM7bIQnGTg5zu6yQK7BQr8zV5SfqVj/+f2XUsg8Hagag2vUZR4SH+VWQyAEDIyc4HWccce8ViadUBZ2CqOJYgAeZqB8zV8TK+uo8A4S3A8JT/Ks/0MTqubseEzfmKsEUqsAykMDwIIIPgRxrZQjt6nVla/ohjhe3g/ag/wANZXVaVfVv7rzZW+YqyUUHbT6+yIBdC3Y4X8ntRRt+VdEVjdjjdo33oB/C4qXxRQh1G97eiOa1SUf2jo33UKfN2rpoooZ3M0UUUAUUUUAUUUUB5NLQWbmK4ht43lhxHIWaB4pypnDzWzF1Uykptnt6jnIpm1irRlYiwu9J2/PGd7GCRYvRkSRRE8HPMJVYoiuFJYRiRc4+uBmpC6e3lSEWtuybN1aFx6PJDhVc4ztIu1s784yBnvq6UUziwrYbX+qaQi5tudZb3ZX0SRWw0zkYuNnEu0GUhR8cVI86Eme4sbaRFW1aJhzLwrLO7xiECNlBbZO0S+MAE76YNFWdS/IWFjLo64gsp7OWF2AltJ02dqcMpuIjOMhAWO0juVxwk66sOqsSm7nlt4Xht2iiXDRtCJJVZyXWNgCMKQCcDPlVtoqHNtWFhSz6Lu+YuYEjk5mdru4Y7LBlMUkn0YGN/OkQkdoL8anNGxBNIM0qEbS2wTNq8mSIQN04XEWy2M57Kv1FS6l+QsUDQVo63RmaGQQSm5FshVv6uxIMjsuOgJirsM8OH1q5tAQrCLZ72CRo/QLeKPMMkoidS5lRo1RijMCm8jfs46sUyKKh1L8hYoGn/SZLhbmCBuas1TYU7UbNtBXmCR7OZMxFUA3YYHidw4NYNE3B/wCkp4EduckETxbLfSwtBCVkQdbo5bhxBccRTOooqluQsULTPpRu/TI4WMVqyRDeQzoR/WCkeyecyHUAgjfD11I63mMXNq80LSQhLgNiF5gGYR7OVVWxnB3kVbKKjN5CwrX0e6Lbl4nji52+aNHtnueZjdkMSNCoJUkAkD6tWjWqJSLOQxM9tHKHkjVGbZUxMI2aIDJVWI6ON2443VaqKObbFhazaI9IJEcUsdvJpCN48RtGUC2rK0yoQDGplAIJAyfGvEdpcDnHu4WdU0gj3CxozCVEtljWZYwMyJthGKjOPZpm0VPaPoMpRruW39IgnNu5tBHOgAtpdlJy0fTMXN7XSUMofZxuO/fXLotjbS20skM6wgaQ2FWKWRokkmjaJCiKWTKgkKRuGB1Uw6KjPpYWFxpWJWS8ia3la7mlZ7eQROSQwUwus2ziMJgZ2iMbJ3V70jK8ElwXthLcPcK8bPBLKssWygVY3QERlSDuJHAnG/NMSipz+QsUHSVtO6XNtHCzG4vnDZyimFYomkJk2SFDbOwDg72PYamtU9JMsUVtcZW4UyRYIYiQQgdNXwAwKMh2t2ST1girJWsxLtBsDaAIBwMgHGQD2HA91Q5XVrCxR9Pm5e8N3HC5is2VF3sGcEbVwY49kmXKuqjBG+M4zXZrFcI9xBK8UslvC08cg5p3CyssXNyc3skyIBtjbUEAtVwopm20FiM0RfwthIkdBsbagxPGoUuy/WUAHIJ2eODnG+pSiiqkhRRRQBRRRQBRRRQBRRRQBRRRQBRRRQBRRRQBRRRQBRRRQBRRRQBRRRQBRRRQBRRRQBRRRQBRRRQBRRRQBRRRQBRRRQBRRRQBRRRQBRRRQBRRRQBRRRQBRRRQH//Z" alt="bruce" class="w-100 border-radius-lg shadow-sm">
                </div>
              </div>
              <div class="col-sm-auto col-8 my-auto">
                <div class="h-100">
                    <h5 class="mb-1 font-weight-bolder" id="nombre_transmision">
                        Nombre de la transmisión
                    </h5>
                  
                    <input type="text" id="nombre_t1" value="<?php echo $transmision_1['nombre'];?>" readonly hidden>
                    <input type="text" id="nombre_t2" value="<?php echo $transmision_2['nombre'];?>" readonly hidden>
                  <p class="mb-0 font-weight-bold text-sm">

                  </p>
                </div>
              </div>
              
              <div class="col-sm-auto ms-sm-auto mt-sm-0 mt-3 d-flex">

                <div class="form-check form-switch ms-2">
                <div class="row text-center">
                    <div class="col-lg-12 col-md-12 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                        <div class="nav-wrapper position-relative end-0">
                            <ul class="nav nav-pills nav-fill p-1 bg-transparent" role="tablist">
                                <li class="nav-item transmisiones" data-transmision="1">
                                    <a class="nav-link mb-0 px-0 py-1 active" href="#transmision_1" data-bs-toggle="tab" role="tab" aria-selected="true">
                                        <span class="fa fa-handshake-o"></span>
                                        <span class="ms-1">Transmisión 1</span>
                                    </a>
                                </li>
                                <li class="nav-item transmisiones" data-transmision="2">
                                    <a class="nav-link mb-0 px-0 py-1" href="#transmision_2" data-bs-toggle="tab" role="tab" aria-selected="false">
                                        <span class="fas fa-signal-stream"></span>
                                        <span class="ms-1">Transmisión 2</span>
                                    </a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a class="nav-link mb-0 px-0 py-1" href="#transmision_3" data-bs-toggle="tab" role="tab" aria-selected="false">
                                        <span class="fa fa-times"></span>
                                        <span class="ms-1">Transmisión 3</span>
                                    </a>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show position-relative active height-350 border-radius-lg" id="transmision_1" role="tabpanel" aria-labelledby="transmision_1">
                <div class="row mt-4">
                    <div class="col-10 col-lg-8">
                    <div class="card">
                        <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-md-12 m-auto text-center">
                            <!-- <img alt="Image placeholder" style="width: 100%" src="https://images.unsplash.com/photo-1552581234-26160f608093?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2100&q=80" class="img-fluid border-radius-lg shadow-lg"> -->
                                <section>
                                    <iframe id="iframe-video-2" onload="textodeiframeJQ2()" src="<?php echo $transmision_1['url'];?>" width="640" height="521" frameborder="0">a</iframe>
                                </section>
                            </div>
                        </div>
                        <div class="row align-items-center px-2 mt-4 mb-2">
                            <div class="col-sm-6">
                            <div class="d-flex">
                                <div class="d-flex align-items-center">
                                <i class="ni ni-like-2 me-1 cursor-pointer"></i>
                                <span class="text-sm me-3 ">150</span>
                                </div>
                                <div class="d-flex align-items-center">
                                <i class="ni ni-chat-round me-1 cursor-pointer"></i>
                                <span class="text-sm me-3">36</span>
                                </div>
                            </div>
                            </div>

                            <hr class="horizontal dark my-3">
                        </div>
                        <!-- Comments -->
                        <div class="mb-1">
                            <div class="d-flex">
                            <div class="flex-shrink-0">
                                <img alt="Image placeholder" class="avatar rounded-circle" src="../../../assets/img/team-4.jpg">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6 class="h5 mt-0">Dr. Michael Lewis</h6>
                                <p class="text-sm">Muy Interesante, felicitaciones.</p>
                                <div class="d-flex">
                                <div>
                                    <i class="ni ni-like-2 me-1 cursor-pointer"></i>
                                </div>
                                <span class="text-sm me-2">3 likes</span>

                                </div>
                            </div>
                            </div>
                            <div class="d-flex mt-3">
                            <div class="flex-shrink-0">
                                <img alt="Image placeholder" class="avatar rounded-circle" src="../../../assets/img/team-5.jpg">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6 class="h5 mt-0">Dra. Jessica Stones</h6>
                                <p class="text-sm">Muy buena presentación.</p>
                                <div class="d-flex">
                                <div>
                                    <i class="ni ni-like-2 me-1 cursor-pointer"></i>
                                </div>
                                <span class="text-sm me-2">10 likes</span>

                                </div>
                            </div>
                            </div>
                            <div class="d-flex mt-4">
                            <div class="flex-shrink-0">
                                <img alt="Image placeholder" class="avatar rounded-circle me-3" src="../../../assets/img/bruce-mars.jpg">
                            </div>
                            <div class="flex-grow-1 my-auto">
                                <form class="align-items-center">
                                <div class="d-flex">
                                    <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Escribe un comentario para todos los asistentes." aria-label="Message example input" onfocus="focused(this)" onfocusout="defocused(this)">
                                    </div>
                                    <button class="btn bg-gradient-primary mb-0 ms-2">
                                    <i class="ni ni-send"></i>
                                    </button>
                                </div>
                                </form>

                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-10 col-lg-4">
                    <div class="card">
                        <div class="card blur shadow-blur max-height-vh-70">
                        <div class="card-header shadow-lg">
                            <div class="row">
                            <div class="col-md-10">
                                <div class="d-flex align-items-center">
                                <img alt="Image" src="../../../assets/img/bruce-mars.jpg" class="avatar">
                                <div class="ms-3">
                                    <h6 class="mb-0 d-block">Dr. Charlie Watson</h6>
                                    <span class="text-sm text-dark opacity-8">Tus Preguntas al Ponente</span>
                                </div>
                                </div>
                            </div>

                            <div class="col-1 my-auto ps-0">
                                <div class="dropdown">
                                <button class="btn btn-icon-only shadow-none text-dark mb-0" type="button" data-bs-toggle="dropdown">
                                    <i class="ni ni-settings"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end me-sm-n2 p-2" aria-labelledby="chatmsg">
                                    <li>
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        Profile
                                    </a>
                                    </li>
                                    <li>
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        Mute conversation
                                    </a>
                                    </li>
                                    <li>
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        Block
                                    </a>
                                    </li>
                                    <li>
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        Clear chat
                                    </a>
                                    </li>
                                    <li>
                                    <hr class="dropdown-divider">
                                    </li>
                                    <li>
                                    <a class="dropdown-item border-radius-md text-danger" href="javascript:;">
                                        Delete chat
                                    </a>
                                    </li>
                                </ul>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="card-body overflow-auto overflow-x-hidden">
                            <div class="row justify-content-start mb-4">
                            <div class="col-auto">
                                <div class="card ">
                                <div class="card-body py-2 px-3">
                                    <p class="mb-1">
                                    ¿Dr. Puede responder que beneficios tiene el punto A? Por favor

                                    </p>
                                    <div class="d-flex align-items-center text-sm opacity-6">
                                    <i class="ni ni-check-bold text-sm me-1"></i>
                                    <small>3:14 pm</small>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <div class="row justify-content-end text-right mb-4">
                            <div class="col-auto">
                                <div class="card bg-gray-200">
                                <div class="card-body py-2 px-3">
                                    <p class="mb-1">
                                    ¿Son consecutivos los conceptos?<br>
                                    </p>
                                    <div class="d-flex align-items-center justify-content-end text-sm opacity-6">
                                    <i class="ni ni-check-bold text-sm me-1"></i>
                                    <small>4:42pm</small>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <div class="row mt-4">
                            <div class="col-md-12 text-center">
                                <span class="badge text-dark">Wed, 3:27pm</span>
                            </div>
                            </div>
                            <div class="row justify-content-start mb-4">
                            <div class="col-auto">
                                <div class="card ">
                                <div class="card-body py-2 px-3">
                                    <p class="mb-1">
                                    Yeah! Responsive Design is geared towards those trying to build web apps
                                    </p>
                                    <div class="d-flex align-items-center text-sm opacity-6">
                                    <i class="ni ni-check-bold text-sm me-1"></i>
                                    <small>4:31pm</small>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <div class="row justify-content-end text-right mb-4">
                            <div class="col-auto">
                                <div class="card bg-gray-200">
                                <div class="card-body py-2 px-3">
                                    <p class="mb-1">
                                    Excellent, I want it now !
                                    </p>
                                    <div class="d-flex align-items-center justify-content-end text-sm opacity-6">
                                    <i class="ni ni-check-bold text-sm me-1"></i>
                                    <small>4:42pm</small>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <div class="row justify-content-start mb-4">
                            <div class="col-auto">
                                <div class="card ">
                                <div class="card-body py-2 px-3">
                                    <p class="mb-1">
                                    You can easily get it; The content here is all free
                                    </p>
                                    <div class="d-flex align-items-center text-sm opacity-6">
                                    <i class="ni ni-check-bold text-sm me-1"></i>
                                    <small>4:42pm</small>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <div class="row justify-content-end text-right mb-4">
                            <div class="col-auto">
                                <div class="card bg-gray-200">
                                <div class="card-body py-2 px-3">
                                    <p class="mb-1">
                                    Awesome, blog is important source material for anyone who creates apps? <br>
                                    Beacuse these blogs offer a lot of information about website development.
                                    </p>
                                    <div class="d-flex align-items-center justify-content-end text-sm opacity-6">
                                    <i class="ni ni-check-bold text-sm me-1"></i>
                                    <small>4:42pm</small>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <div class="row justify-content-start mb-4">
                            <div class="col-5">
                                <div class="card ">
                                <div class="card-body p-2">
                                    <div class="col-12 p-0">
                                    <img src="https://images.unsplash.com/photo-1602142946018-34606aa83259?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1762&amp;q=80" alt="Rounded image" class="img-fluid mb-2 border-radius-lg">
                                        
                                    </div>
                                    <div class="d-flex align-items-center text-sm opacity-6">
                                    <i class="ni ni-check-bold text-sm me-1"></i>
                                    <small>4:47pm</small>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <div class="row justify-content-end text-right mb-4">
                            <div class="col-auto">
                                <div class="card bg-gray-200">
                                <div class="card-body py-2 px-3">
                                    <p class="mb-0">
                                    At the end of the day … the native dev apps is where users are
                                    </p>
                                    <div class="d-flex align-items-center justify-content-end text-sm opacity-6">
                                    <i class="ni ni-check-bold text-sm me-1"></i>
                                    <small>4:42pm</small>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <div class="row justify-content-start">
                            <div class="col-auto">
                                <div class="card ">
                                <div class="card-body py-2 px-3">
                                    <p class="mb-0">
                                    Charlie is Typing...
                                    </p>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="card-footer d-block">
                            <form class="align-items-center">
                            <div class="d-flex">
                                <div class="input-group">
                                <input type="text" class="form-control" placeholder="Escribe tu pregunta al ponente aquí." aria-label="Message example input" onfocus="focused(this)" onfocusout="defocused(this)">
                                </div>
                                <button class="btn bg-gradient-primary mb-0 ms-2">
                                <i class="ni ni-send"></i>
                                </button>
                            </div>
                            </form>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade position-relative height-350 border-radius-lg" id="transmision_2" role="tabpanel" aria-labelledby="transmision_2">
                <div class="row mt-4">
                        <div class="col-10 col-lg-8">
                        <div class="card">
                            <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-md-12 m-auto text-center">
                                <!-- <img alt="Image placeholder" style="width: 100%" src="https://images.unsplash.com/photo-1552581234-26160f608093?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2100&q=80" class="img-fluid border-radius-lg shadow-lg"> -->
                                    <section>
                                        <iframe id="iframe-video-2" onload="textodeiframeJQ2()" src="<?php echo $transmision_2['url'];?>" width="640" height="521" frameborder="0">a</iframe>
                                    </section>
                                </div>
                            </div>
                            <div class="row align-items-center px-2 mt-4 mb-2">
                                <div class="col-sm-6">
                                <div class="d-flex">
                                    <div class="d-flex align-items-center">
                                    <i class="ni ni-like-2 me-1 cursor-pointer"></i>
                                    <span class="text-sm me-3 ">150</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                    <i class="ni ni-chat-round me-1 cursor-pointer"></i>
                                    <span class="text-sm me-3">36</span>
                                    </div>
                                </div>
                                </div>

                                <hr class="horizontal dark my-3">
                            </div>
                            <!-- Comments -->
                            <div class="mb-1">
                                <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <img alt="Image placeholder" class="avatar rounded-circle" src="../../../assets/img/team-4.jpg">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h6 class="h5 mt-0">Dr. Michael Lewis</h6>
                                    <p class="text-sm">Muy Interesante, felicitaciones.</p>
                                    <div class="d-flex">
                                    <div>
                                        <i class="ni ni-like-2 me-1 cursor-pointer"></i>
                                    </div>
                                    <span class="text-sm me-2">3 likes</span>

                                    </div>
                                </div>
                                </div>
                                <div class="d-flex mt-3">
                                <div class="flex-shrink-0">
                                    <img alt="Image placeholder" class="avatar rounded-circle" src="../../../assets/img/team-5.jpg">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h6 class="h5 mt-0">Dra. Jessica Stones</h6>
                                    <p class="text-sm">Muy buena presentación.</p>
                                    <div class="d-flex">
                                    <div>
                                        <i class="ni ni-like-2 me-1 cursor-pointer"></i>
                                    </div>
                                    <span class="text-sm me-2">10 likes</span>

                                    </div>
                                </div>
                                </div>
                                <div class="d-flex mt-4">
                                <div class="flex-shrink-0">
                                    <img alt="Image placeholder" class="avatar rounded-circle me-3" src="../../../assets/img/bruce-mars.jpg">
                                </div>
                                <div class="flex-grow-1 my-auto">
                                    <form class="align-items-center">
                                    <div class="d-flex">
                                        <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Escribe un comentario para todos los asistentes." aria-label="Message example input" onfocus="focused(this)" onfocusout="defocused(this)">
                                        </div>
                                        <button class="btn bg-gradient-primary mb-0 ms-2">
                                        <i class="ni ni-send"></i>
                                        </button>
                                    </div>
                                    </form>

                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="col-10 col-lg-4">
                        <div class="card">
                            <div class="card blur shadow-blur max-height-vh-70">
                            <div class="card-header shadow-lg">
                                <div class="row">
                                <div class="col-md-10">
                                    <div class="d-flex align-items-center">
                                    <img alt="Image" src="../../../assets/img/bruce-mars.jpg" class="avatar">
                                    <div class="ms-3">
                                        <h6 class="mb-0 d-block">Dr. Charlie Watson</h6>
                                        <span class="text-sm text-dark opacity-8">Tus Preguntas al Ponente</span>
                                    </div>
                                    </div>
                                </div>

                                <div class="col-1 my-auto ps-0">
                                    <div class="dropdown">
                                    <button class="btn btn-icon-only shadow-none text-dark mb-0" type="button" data-bs-toggle="dropdown">
                                        <i class="ni ni-settings"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end me-sm-n2 p-2" aria-labelledby="chatmsg">
                                        <li>
                                        <a class="dropdown-item border-radius-md" href="javascript:;">
                                            Profile
                                        </a>
                                        </li>
                                        <li>
                                        <a class="dropdown-item border-radius-md" href="javascript:;">
                                            Mute conversation
                                        </a>
                                        </li>
                                        <li>
                                        <a class="dropdown-item border-radius-md" href="javascript:;">
                                            Block
                                        </a>
                                        </li>
                                        <li>
                                        <a class="dropdown-item border-radius-md" href="javascript:;">
                                            Clear chat
                                        </a>
                                        </li>
                                        <li>
                                        <hr class="dropdown-divider">
                                        </li>
                                        <li>
                                        <a class="dropdown-item border-radius-md text-danger" href="javascript:;">
                                            Delete chat
                                        </a>
                                        </li>
                                    </ul>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="card-body overflow-auto overflow-x-hidden">
                                <div class="row justify-content-start mb-4">
                                <div class="col-auto">
                                    <div class="card ">
                                    <div class="card-body py-2 px-3">
                                        <p class="mb-1">
                                        ¿Dr. Puede responder que beneficios tiene el punto A? Por favor

                                        </p>
                                        <div class="d-flex align-items-center text-sm opacity-6">
                                        <i class="ni ni-check-bold text-sm me-1"></i>
                                        <small>3:14 pm</small>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <div class="row justify-content-end text-right mb-4">
                                <div class="col-auto">
                                    <div class="card bg-gray-200">
                                    <div class="card-body py-2 px-3">
                                        <p class="mb-1">
                                        ¿Son consecutivos los conceptos?<br>
                                        </p>
                                        <div class="d-flex align-items-center justify-content-end text-sm opacity-6">
                                        <i class="ni ni-check-bold text-sm me-1"></i>
                                        <small>4:42pm</small>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <div class="row mt-4">
                                <div class="col-md-12 text-center">
                                    <span class="badge text-dark">Wed, 3:27pm</span>
                                </div>
                                </div>
                                <div class="row justify-content-start mb-4">
                                <div class="col-auto">
                                    <div class="card ">
                                    <div class="card-body py-2 px-3">
                                        <p class="mb-1">
                                        Yeah! Responsive Design is geared towards those trying to build web apps
                                        </p>
                                        <div class="d-flex align-items-center text-sm opacity-6">
                                        <i class="ni ni-check-bold text-sm me-1"></i>
                                        <small>4:31pm</small>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <div class="row justify-content-end text-right mb-4">
                                <div class="col-auto">
                                    <div class="card bg-gray-200">
                                    <div class="card-body py-2 px-3">
                                        <p class="mb-1">
                                        Excellent, I want it now !
                                        </p>
                                        <div class="d-flex align-items-center justify-content-end text-sm opacity-6">
                                        <i class="ni ni-check-bold text-sm me-1"></i>
                                        <small>4:42pm</small>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <div class="row justify-content-start mb-4">
                                <div class="col-auto">
                                    <div class="card ">
                                    <div class="card-body py-2 px-3">
                                        <p class="mb-1">
                                        You can easily get it; The content here is all free
                                        </p>
                                        <div class="d-flex align-items-center text-sm opacity-6">
                                        <i class="ni ni-check-bold text-sm me-1"></i>
                                        <small>4:42pm</small>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <div class="row justify-content-end text-right mb-4">
                                <div class="col-auto">
                                    <div class="card bg-gray-200">
                                    <div class="card-body py-2 px-3">
                                        <p class="mb-1">
                                        Awesome, blog is important source material for anyone who creates apps? <br>
                                        Beacuse these blogs offer a lot of information about website development.
                                        </p>
                                        <div class="d-flex align-items-center justify-content-end text-sm opacity-6">
                                    <i class="ni ni-check-bold text-sm me-1"></i>
                                    <small>4:42pm</small>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <div class="row justify-content-start mb-4">
                            <div class="col-5">
                                <div class="card ">
                                <div class="card-body p-2">
                                    <div class="col-12 p-0">
                                    <img src="https://images.unsplash.com/photo-1602142946018-34606aa83259?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1762&amp;q=80" alt="Rounded image" class="img-fluid mb-2 border-radius-lg">
                                        
                                    </div>
                                    <div class="d-flex align-items-center text-sm opacity-6">
                                    <i class="ni ni-check-bold text-sm me-1"></i>
                                    <small>4:47pm</small>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <div class="row justify-content-end text-right mb-4">
                            <div class="col-auto">
                                <div class="card bg-gray-200">
                                <div class="card-body py-2 px-3">
                                    <p class="mb-0">
                                    At the end of the day … the native dev apps is where users are
                                    </p>
                                    <div class="d-flex align-items-center justify-content-end text-sm opacity-6">
                                    <i class="ni ni-check-bold text-sm me-1"></i>
                                    <small>4:42pm</small>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <div class="row justify-content-start">
                            <div class="col-auto">
                                <div class="card ">
                                <div class="card-body py-2 px-3">
                                    <p class="mb-0">
                                    Charlie is Typing...
                                    </p>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="card-footer d-block">
                            <form class="align-items-center">
                            <div class="d-flex">
                                <div class="input-group">
                                <input type="text" class="form-control" placeholder="Escribe tu pregunta al ponente aquí." aria-label="Message example input" onfocus="focused(this)" onfocusout="defocused(this)">
                                </div>
                                <button class="btn bg-gradient-primary mb-0 ms-2">
                                <i class="ni ni-send"></i>
                                </button>
                            </div>
                            </form>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
      </div>

      <footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart"></i> by
                <a href="https://www.grupolahe.com" class="font-weight-bold" target="_blank">Grupo LAHE</a>
                for a better web.
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>

    <?php echo $footer; ?>
</main>


<script>
    $(document).ready(function(){

        function actualizarProgreso(transmision, segundos){
            $.ajax({
                url: "/Transmission/updateProgress",
                type: "POST",
                data: {transmision, segundos},
                beforeSend: function() {
                    console.log("Procesando....");
                },
                success: function(respuesta) {

                    console.log(respuesta);
                    
                },
                error: function(respuesta) {
                    console.log(respuesta);
                }
            });
        }

        function actualizarProgresoConFecha(transmision, segundos){
            $.ajax({
                url: "/Transmission/updateProgressWithDate",
                type: "POST",
                data: {transmision, segundos},
                beforeSend: function() {
                    console.log("Procesando....");
                },
                success: function(respuesta) {

                    console.log(respuesta);
                    
                },
                error: function(respuesta) {
                    console.log(respuesta);
                }
            });
        }

        var intervalo;
        let tiempo;

        let transmision_actual = 1;

        //Variables para conteo de tiempo de transmisión 1
        var inicio = $('#secs_t1').val()-2;
        let min = 0;
        let sec = 0;
        let cut_mod_min;
        let increment = 1;

        //Variables para conteo de tiempo de transmisión 2
        var inicio_2 = $('#secs_t2').val()-2;
        let min_2 = 0;
        let sec_2 = 0;
        let cut_mod_min_2;
        let increment_2 = 0;

        let total_time = 0;

        function countTime(){

            intervalo = setInterval(function() {
                inicio += increment;
                inicio_2 += increment_2;

                total_time++;
                
                // if (inicio >= 60) {
                //     mins = (inicio/60);
                //     sec = inicio%60;
                //     let x = mins.toString().indexOf('.');

                //     if (x == -1) {
                //         min = mins;
                //     } else {
                //         cut_mod_min = mins.toString().substring(0,x);
                //         let min = cut_mod_min;
                //         // console.log(cut_mod_min);
                //     }

                //     if (sec < 10) {
                //         $('#time_watch_1').html(min+' 0'+sec); 
                //     } else {
                //         $('#time_watch_1').html(min+' '+sec);
                //     }
                // } else if(inicio < 0) {
                //     // $('#time_watch_1').html(inicio);
                // } else {
                //     $('#time_watch_1').html(inicio);
                // }


                // if (inicio_2 >= 60) {
                //     mins_2 = (inicio_2/60);
                //     sec_2 = inicio_2%60;
                //     let z = mins_2.toString().indexOf('.');

                //     if (z == -1) {
                //         min_2 = mins_2;
                //     } else {
                //         cut_mod_min_2 = mins_2.toString().substring(0,z);
                //         let min_2 = cut_mod_min_2;
                //         // console.log(cut_mod_min_2);
                //     }

                //     if (sec_2 < 10) {
                //         $('#time_watch_2').html(min_2+' 0'+sec_2); 
                //     } else {
                //         $('#time_watch_2').html(min_2+' '+sec_2);
                //     }
                // } else if(inicio_2 < 0) {
                //     // $('#time_watch_2').html(inicio_2);
                // } else {
                //     $('#time_watch_2').html(inicio_2);
                // }

                let status_1 = $('#status_t1').val();
                let status_2 = $('#status_t2').val();

                if (status_1 == 2) {
                    console.log('listo para correr el tiempo (1)');
                } else {
                    console.log('NOOO listo para correr el tiempo (1)');
                }

                if (status_2 == 2) {
                    console.log('listo para correr el tiempo (2)');
                } else {
                    console.log('NOOO listo para correr el tiempo (2)');
                }

                if ((total_time % 60) == 0) {
                    console.log('ejecutamos Ajax');
                    
                    if (transmision_actual == 1) {
                        actualizarProgresoConFecha(1,inicio);
                        actualizarProgreso(2,inicio_2);
                    } else if (transmision_actual == 2) {
                        actualizarProgresoConFecha(2,inicio_2);
                        actualizarProgreso(1,inicio);
                    }
                }
                
            },1000);
            $(window).blur(function() {
                console.log('fuera de la ventana');
                increment = 0;
                increment_2 = 0;
            });
            $(window).focus(function() {
                console.log('dentro de la ventana');
                if (transmision_actual == 1) {
                    increment = 1;
                } else if(transmision_actual == 2) {
                    increment_2 = 1;
                }
            });
        }

        countTime();

        let t1 = $('#transmision_1').html();
        let t2 = $('#transmision_2').html();

        $('.transmisiones').on('click', function(){

            let t_current = $(this).attr('data-transmision');

            if (t_current == 1) {
                // $('#nombre_transmision').html($('#nombre_t1').val());
                $('#transmision_1').empty();
                $('#transmision_2').empty();
                $('#transmision_1').html(t1);
                increment = 1;
                increment_2 = 0;
                transmision_actual = 1;
            }

            if (t_current == 2) {
                // $('#nombre_transmision').html($('#nombre_t2').val());
                $('#transmision_1').empty();
                $('#transmision_2').empty();
                $('#transmision_2').html(t2);
                increment = 0;
                increment_2 = 1;
                transmision_actual = 2;
            }
        });

        let identificadorIntervaloDeTiempo;

        function repetirCadaSegundo() {
            identificadorIntervaloDeTiempo = setInterval(mandarMensaje, 1000);
        }

        function mandarMensaje() {
            console.log("Ha pasado 1 segundo.");
        }

        // repetirCadaSegundo();
    });
</script>
