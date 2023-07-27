<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>PedraPapelTesoura</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>

<?php
function jogarPedraPapelTesoura($escolhaUsuario) {
    // Opções válidas do jogo
    $opcoes = array('pedra', 'papel', 'tesoura');

    // Escolha aleatória da máquina
    $escolhaMaquina = $opcoes[array_rand($opcoes)];

    // Verifica o resultado do jogo
    if ($escolhaUsuario === $escolhaMaquina) {
        return "Empate. Você escolheu $escolhaUsuario e a máquina escolheu $escolhaMaquina.";
    } elseif (
        ($escolhaUsuario === 'pedra' && $escolhaMaquina === 'tesoura') ||
        ($escolhaUsuario === 'papel' && $escolhaMaquina === 'pedra') ||
        ($escolhaUsuario === 'tesoura' && $escolhaMaquina === 'papel')
    ) {
        return "Você venceu. Você escolheu $escolhaUsuario e a máquina escolheu $escolhaMaquina.";
    } else {
        return "Você perdeu. Você escolheu $escolhaUsuario e a máquina escolheu $escolhaMaquina.";
    }
}

?>

</body>
</html>