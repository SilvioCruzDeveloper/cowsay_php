<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-size: 25px;
            color: #fff;
            background-color: #000;
        }

        span {
            color: #000;
        }
    </style>
</head>

<body>


    <?php
    $cow = $_GET['cow'];
    if ($cow == "cowsay") : ?>
        / You have Egyptian flu: you\'re going to \
        <br>
        \ be a mummy. <span>____________________</span> /
        <br>
        <span>_</span>-----------------------------------------------
        <br>
        <span>______</span>\<span>___</span> ^__^
        <br>
        <span>______</span> \ <span>___</span>(oo)\_______
        <br>
        <span>__________</span> (__)\<span>_______</span> )\/\
        <br>
        <span>_______________</span>||- - - -w |
        <br>
        <span>_______________</span>||<span>______</span> ||
    <?php elseif ($cow == []) : ?>
        ?????????
    <?php endif ?>


</body>
<script>
    var cow = prompt("Digite o nome da vaca:");
    document.getElementById("cow").innerHTML = cow;

    // Codificar o valor de 'cow' para garantir que ele esteja seguro para uma URL
    var cowEncoded = encodeURIComponent(cow);

    // Construir a URL com o parâmetro 'cow'
    var url = "index.php?cow=" + cowEncoded;

    // Redirecionar para a nova URL
    window.location.href = url;
</script>




</html>