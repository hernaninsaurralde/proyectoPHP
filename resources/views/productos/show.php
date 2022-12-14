<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <title>Productos</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Audiowide&family=Roboto&display=swap');

        :root {
            --main-bg-color: #0E0F26;
            --font-color: #FFFCFF;
            --secondary-color: #302399;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-decoration: none;
        }

        body {
            background-color: var(--main-bg-color);
        }

        ul {
            display: flex;
            width: 100%;
            height: 100%;
            flex-direction: row;
            justify-content: space-evenly;
            align-items: center;
            list-style: none;
            text-decoration: none;
            font-family: 'Audiowide', cursive;
            color: var(--font-color);

        }


        ul a:visited,
        a:link {
            color: var(--font-color)
        }

        li {
            padding: 20px
        }

        li:hover {
            background: #302399;
            transition: all 0.5s ease-out;
        }

        li:active {
            background: #992385;
        }


        .logo {
            padding: 20px;
            height: 100%;
            background-color: var(--secondary-color);
            color: var(--font-color);
            font-family: 'Audiowide', cursive;

        }

        header {
            display: flex;
            flex-direction: row;
            width: 100%;
            align-items: center;
            border-bottom: 1px solid #9e619e;
        }

        .info_productos {
            padding: 70px;
            font-family: monospace;
            color: var(--font-color);
        } 
        .info_productos > * {
            margin-bottom: 20px;
        }

        .galeria {
            color: var(--font-color);
            font-family: monospace;
            padding: 30px 70px;
        }

        .galeria>p {
            font-size: 18px;
        }

        .galeria>* {
            margin-top: 30px;
        }

        .galeria>img {
            width: 500px;
            margin-left: 30%;
        }
    </style> 

</head>

<body>

    <?php
    include('../resources/views/header.php');

    $productos = array(

        'korg' => array(
            'name' => 'Korg Kronos',

            'desc' => 'Cuando la imaginaci??n, ambici??n y tecnolog??a convergen, los resultados son  espectaculares.
                    Te presentamos KRONOS. Creado por KORG para satisfacer las necesidades de los int??rpretes y productores m??s exigentes, y de los m??sicos m??s futuristas, KRONOS incorpora m??s de 50 a??os de experiencia en innovaci??n y producci??n musical. Con nueve motores diferentes de s??ntesis y un completo conjunto de herramientas de interpretaci??n y producci??n, KRONOS es sencillamente el sintetizador m??s vers??til jam??s fabricado.',

            'img' => 'https://cdn.korg.com/ar/products/upload/7a5295abbb941f0e2d1eb9b4ede224ad_pc.jpg'
        ),

        'roland' => array(
            'name' => 'Roland Juno X',

            'desc' => 'El Juno-X de Roland es un sintetizador de teclado de vanguardia con un aspecto aut??ntico de Juno-106 que es algo m??s que una reedici??n de la famosa serie Juno. Dispone de m??s de 4.000 sonidos y m??s de 90 kits de Drum , lo que representa un barrido de los sonidos m??s famosos de Roland desde principios de los 80 hasta la actualidad y, por supuesto, ofrece un enorme potencial para futuros ??xitos. Equipado con la ??ltima generaci??n de sonidos ZenCore de Roland, el Juno-X viene cargado con modelos de sus instrumentos de culto Juno-106, Juno-60, XV-5080 y RD-2000.',

            'img' => 'https://static.roland.com/products/juno-x/images/juno-x_front.jpg'

        ),

        'moog' => array(
            'name' => 'Moog One',

            'desc' => 'Moog One es el sintetizador definitivo de Moog: un sintetizador de sue??os triple timbral, polif??nico y anal??gico dise??ado para inspirar imaginaci??n, estimular la creatividad y desbloquear portales a grandes reinos de potencial s??nico. El primer sintetizador anal??gico polif??nico de Moog en m??s de tres d??cadas, Moog One es la culminaci??n de a??os de investigaci??n y se ha desarrollado para superar cada expectativa de un instrumento polif??nico Moog. Con su configuraci??n de 8 voz, el motor de sonido polif??nico del Moog One est?? construido en la arquitectura sintetizadora m??s potente jam??s empleada por un instrumento Moog. Por voz, Moog One ofrece 3 VCO anal??gicos reci??n dise??ados, 2 filtros anal??gicos independientes, un generador de ruido anal??gico de doble fuente, mezclador anal??gico con entrada de audio externa, 4 LFO. y 3 sobres. Para ofrecer una experiencia de rendimiento infinitamente inspiradora, cada uno de los tres timbres se puede dividir o colocar f??cilmente en el expresivo teclado de 61 notas de Moog One, cada uno con su propio secuenciador, arpegiador y biblioteca de efectos incorporada, incluyendo un conjunto de reverberaciones profesionales de Eventide.',

            'img' => 'https://m.media-amazon.com/images/I/51w2deilo7L._AC_.jpg'
        )
    )
    ?>
    <div class="ctnr_productos">
        <ul>
            <li><a href="korg">Korg </a></li>
            <li><a href="roland"> Roland </a></li>
            <li><a href="moog">Moog </a> </li>
        </ul>
    </div>

    <div class="info_productos">
        <?php

        echo '<h2>' . $productos[$producto]['name'] . '</h2>';
        echo '<p>' . $productos[$producto]['desc'] . '</p>';
        echo '<img src=' . $productos[$producto]['img'] . '>';
        ?>

    </div>

</body>

</html>