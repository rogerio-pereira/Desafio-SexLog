<?php header('Content-type: text/html; charset=UTF-8'); ?>

<h1>ETAPA 2</h1>
<p>
    Bem-vindx à ETAPA 2 do Desafio!
</p>

<p>
    Você passou pela etapa dos Números Primos. Está prontx para a próxima?
</p>

<p>
    Na matemática, a Sequência de Fibonacci é uma sequência de números inteiros, começando normalmente por 0 e 1, na qual, cada termo subsequente (número de Fibonacci) corresponde a soma dos dois anteriores. Você também viu isso na escola… só puxar na memória… Lembrou? Sua missão agora é calcular a soma dos primeiros 50 termos. 
</p>

<?php
    ini_set('max_execution_time', 30000);   //Define o tempo maximo para nao dar problema com o tempo de execução

    $fibonacci = array();
    $fibonacci[] = 0;
    $fibonacci[] = 1;
    $atual = 1;
    
    for($i=2;$i<50;$i++)
        $fibonacci[] = $fibonacci[$i-1] + $fibonacci[$i-2];

    $soma = 0;

    foreach ($fibonacci as $valor) {
        $soma += $valor;
    }

?>

<h2>Resposta</h2>

<p>
    A soma dos 50 primeiros ternos é <strong><?= $soma ?></strong>
    
    <a 
        href='http://sexlog.com/prova_<?= $soma ?>' 
        alt='Etapa 3' 
        title='Etapa 3' 
        target='_blank'
    >
        Acessa a etapa 3
    </a>
</p>

//Resposta 20365011073