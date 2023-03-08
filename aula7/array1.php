<h2>Array - Vetor</h2>
<p>
    Vetores são estruturas de dados
    unidimensionais "variáveis compostas", que
    permitem o armazenamento de mais de 1 valor.
    Para acessar os valores armazenados em um vetor
    é necessário informar o índice (key).
</p>

<strong>Aparência de um Vetor</strong>
<pre>
     +-----------+
    0|Maça       |
     +-----------+
    1|Uva        |
     +-----------+
    2|Pera       |
     +-----------+
    3|Laranja    |
     +-----------+
</pre>
<strong>Como criar um vetor</strong> 
<pre>
    //opção 1
    $variavel = ["Maça", "Uva", "Pera", "Laranja"];

    //opção 2
    $variavel = array("Maça", "Uva", "Pera", "Laranja");

    //opção 3
    $variavel = [];
    $variavel[0] = "Maça";
    $variavel[1] = "Uva";
    $variavel[2] = "Pera";
    $variavel[3] = "Laranja";
</pre>