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
        "nome" => "Ariel",
        "nota1" => 10,
        "nota2" => 8,
        "total" => [10] + [8]
    ];

    echo $alunos["total"];

?>