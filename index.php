

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
