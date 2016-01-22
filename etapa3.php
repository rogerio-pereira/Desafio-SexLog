<?php header('Content-type: text/html; charset=UTF-8'); ?>

<?php include_once('etapa3.class.php') ?>

<p>b3rdcigpi4pv0gp@htmadv.rdb</p>

<ul>
    <li>
        Os algoritmos desenvolvidos DEVERÃO implementar conceitos de orientação a objetos
    </li>
    <li>
        Se possível, implemente um TESTE UNITÁRIO para garantir o funcionamento
    </li>
</ul>

<p>
    Sua missão final é desenvolver um algoritmo para descriptografar o e-mail (b3rdcigpi4pv0gp@htmadv.rdb) no 
    qual deverá enviar seu currículo e a as soluções desenvolvidas em cada uma das etapas. 
</p>

<p>
    Para cada letra do alfabeto podemos associar um número, por exemplo: a = 1, b = 2, c = 3 até z = 26. Para 
    criptografar o texto foi usada a seguinte regra: 
</p>

<ul>
    <li>
        Definir um número inteiro maior que zero como chave
    </li>
    <li>
        Converter cada letra do texto para número
    </li>
    <li>
        Somar a chave e converter para letra novamente. Caso passe de 26, voltar a contar do 1
    </li>
    <li>
        A pontuação e os espaços não foram criptografados
    </li>
</ul>

<p>
    <strong>Dica:</strong> para chegar a chave utilizada para criptografar o texto você deverá somar os resultados no primeiro e segundo desafios, pegar as posições 5 e 6 do resultado e invertê-las
</p>

<?php 
    new Etapa3(104743, 20365011073, 'b3rdcigpi4pv0gp@htmadv.rdb'); 
?>