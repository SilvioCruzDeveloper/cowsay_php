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

    .botao {
        margin: 5px auto;
        padding: auto;
        background-color: #ccc;
        color: #000;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        cursor: pointer;
        box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
    }

    .botao:hover {
        background-color: #999;
    }

    .botao:active {
        background-color: #666;
        box-shadow: none;
    }

    div {

        display: flex;
        justify-content: center;
        align-items: center;
    }
    </style>
</head>

<body>
    <div><button onclick="redirect()" class="botao" id="btn">Chame a vaca</button></div>
    <!-- Exibição da mensagem 'cowsay' -->
    <br>
    <br>
    <?php
    // Verifica se o parâmetro 'cow' foi passado pela URL
    if (isset($_GET['cow'])) {
        $cow = $_GET['cow'];
        if ($cow == "cowsay") {
            // Exibe a mensagem 'cowsay'
            echo '
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
            ';
        } else {
            // Exibe uma mensagem padrão se 'cow' não for 'cowsay'
            echo '?????????';
        }
    }
    ?>
</body>

<script>
function redirect() {
    var cow = prompt("Digite o nome da vaca:");
    var cowEncoded = encodeURIComponent(cow);
    var url = "index.php?cow=" + cowEncoded;
    window.location.href = url;

}
</script>

</html>