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

            'desc' => 'Cuando la imaginación, ambición y tecnología convergen, los resultados son  espectaculares.
                    Te presentamos KRONOS. Creado por KORG para satisfacer las necesidades de los intérpretes y productores más exigentes, y de los músicos más futuristas, KRONOS incorpora más de 50 años de experiencia en innovación y producción musical. Con nueve motores diferentes de síntesis y un completo conjunto de herramientas de interpretación y producción, KRONOS es sencillamente el sintetizador más versátil jamás fabricado.',

            'img' => 'https://cdn.korg.com/ar/products/upload/7a5295abbb941f0e2d1eb9b4ede224ad_pc.jpg'
        ),

        'roland' => array(
            'name' => 'Roland Juno X',

            'desc' => 'El Juno-X de Roland es un sintetizador de teclado de vanguardia con un aspecto auténtico de Juno-106 que es algo más que una reedición de la famosa serie Juno. Dispone de más de 4.000 sonidos y más de 90 kits de Drum , lo que representa un barrido de los sonidos más famosos de Roland desde principios de los 80 hasta la actualidad y, por supuesto, ofrece un enorme potencial para futuros éxitos. Equipado con la última generación de sonidos ZenCore de Roland, el Juno-X viene cargado con modelos de sus instrumentos de culto Juno-106, Juno-60, XV-5080 y RD-2000.',

            'img' => 'https://static.roland.com/products/juno-x/images/juno-x_front.jpg'

        ),

        'moog' => array(
            'name' => 'Moog One',

            'desc' => 'Moog One es el sintetizador definitivo de Moog: un sintetizador de sueños triple timbral, polifónico y analógico diseñado para inspirar imaginación, estimular la creatividad y desbloquear portales a grandes reinos de potencial sónico. El primer sintetizador analógico polifónico de Moog en más de tres décadas, Moog One es la culminación de años de investigación y se ha desarrollado para superar cada expectativa de un instrumento polifónico Moog. Con su configuración de 8 voz, el motor de sonido polifónico del Moog One está construido en la arquitectura sintetizadora más potente jamás empleada por un instrumento Moog. Por voz, Moog One ofrece 3 VCO analógicos recién diseñados, 2 filtros analógicos independientes, un generador de ruido analógico de doble fuente, mezclador analógico con entrada de audio externa, 4 LFO. y 3 sobres. Para ofrecer una experiencia de rendimiento infinitamente inspiradora, cada uno de los tres timbres se puede dividir o colocar fácilmente en el expresivo teclado de 61 notas de Moog One, cada uno con su propio secuenciador, arpegiador y biblioteca de efectos incorporada, incluyendo un conjunto de reverberaciones profesionales de Eventide.',

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