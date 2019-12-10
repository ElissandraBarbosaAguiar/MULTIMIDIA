<!DOCTYPE html>
<html lang="en">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="js/index.js"></script>

</head>
<body>
    <header>
        <h1>Galeria de Imagens</h1>
        <ul id="menu-galerias">
            <!-- Aqui vai carregar o menu (as galerias) -->
        </ul>
    </header>
    <main>
        <div id="fotos">
            <!-- Aqui serão exibidas as fotos -->
         <!--        <div class="img-thumbnail">
            <img src="images/g1_foto1.jpg" alt="..." class="img-thumbnail">
            <img src="images/g1_foto2.jpg" alt="..." class="img-thumbnail">
            <img src="images/g1_foto3.jpg" alt="..." class="img-thumbnail">
            <img src="images/g2_foto1.png" alt="..." class="img-thumbnail">
            <img src="images/g2_foto2.png" alt="..." class="img-thumbnail">

                 </div>

             -->
             <?php
                
                $nome ="g1_foto1.jpg";
                $nome ="g1_foto2.jpg";
                $nome ="g1_foto3.jpg";
                $nome ="g1_foto4.jpg";
                $nome ="g2_foto1.png";
                $nome ="g2_foto2.png";
                $nome ="g2_foto3.png";
                $nome ="g2_foto4.png";


                $img = imagecreatefromjpeg("images/thumbs/$nome");
                $imgs = getimagesize("images/$nome");
                        //AQUI É A ONDE A TROCA DE IMAGENS OCORRE. DO ESTADO GRANDE  PARA O PEQUENO.
                $w = $imgs[0];
                $h = $imgs [1];

                $escala = 100/$w;

                $l =floor($w*$escala);
                $a = floor($h*$escala);

                $tp = imagecreatetruecolor($l,$a);

                imagecopyresampled($tp,$img,0,0,0,0,$l, $a, $w, $h);

                    imagejpeg($tp, "thumbs/$nome",100);

             ?>
<!-- <img src="thumbs/g1_foto1.jpg">  -->



        </div>
    </main>
</body>
</html>