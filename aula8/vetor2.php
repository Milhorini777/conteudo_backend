<h2> Vetor indexado por texto </h2>
    <p> Os vetores podem usar textos para indexar (identificar) os valores armazenados.
        Exemplo:
        
        +------------+
  nome  | Ariel      |
        +------------+
  nota1 | 10         |
        +------------+
  nota2 | 8          |
        +------------+

    </p>


    <?php

    $alunos = [
        "nome" => "Sasa",
        "nota1" => 7,
        "nota2" => 8,
        "total" => [7] + [8]
    ];

    $alunos["notaTotal"] = ($alunos["nota1"] + $alunos["nota2"]);
    var_dump($alunos);

    //imprimir todos os valores de um vetor
    //utilizando o foreach
    foreach($alunos as $key => $value){
        echo "$value <br>";
    }

?>