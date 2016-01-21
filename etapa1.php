<?php header('Content-type: text/html; charset=UTF-8'); ?>

<h1>Desafio Programado SexLog Etapa 1 - Rogério Pereira rogerio@groupsofter.com.br</h1>

<h2>Entendendo a ETAPA 1:</h2>

<p>
    A primeira etapa é muito simples: você deve criar um código PHP que encontre e apresente o 10.001º número primo. 
    Lembre-se lá do colégio, o número 1 não é primo, certo?"
</p>

<p>
    <strong>O número 1 não é primo.</strong> Porque para ser primo ele precisa de dois divisores distintos (1 e o 
    próprio número), e 1 só é divisivel por ele mesmo.
</p>

<p>
    Procurando 10001° numero primo, Aguarde.
</p>

<?php
    ini_set('max_execution_time', 30000);   //Define o tempo maximo para nao dar problema com o tempo de execução

    $primos         = 0;                    //Quantidade de numeros primos
    $numero         = 1;                    //inicia em 1 para que na primeira vez que rode o while ja some para 2
    $procuraProximo;

    //Enquanto o array não tiver 10001 elementos
    while($primos < 10001){
        $numero++;  //Incrementa o numero a ser buscado no inicio para no final nao ter 1 a mais

        $isPrimo = true;

        //Percorre todos os numeros de 2 a n verificando se é divisivel por outros numeros
        for($i=2; $i<$numero; $i++){
            //Se for divisivel (resto da divisão = 0) então não é primo
            if(($numero % $i) == 0) {
                $isPrimo = false;
                break;
            }
        }

        //Se a variavel ainda for true não caiu na condição da linha 35 então é primo 
        //Aumenta o contador de primos encontrados
        if($isPrimo == true)
            $primos++;
    }
?>

<h2>Resposta</h2>

<p>
    O 10001° numero primo é o numero <strong><?= $numero ?></strong><br/>
    
    <a 
        href='http://sexlog.com/prova_<?= $numero ?>' 
        alt='Etapa 2' 
        title='Etapa 2' 
        target='_blank'
    >
        Acessa a etapa 2
    </a>
</p>

//Resposta 104743