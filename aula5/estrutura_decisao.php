<h2>Estrutura de decisão</h2>
    <p>
    As estruturas de condição permitem executar 
    blocos distintos de código dado uma condição.

      <strong>Exemplo</strong>
        <pre>
    
        if(condicao){
            //instruções executadas
            //caso a condição seja verdadeira 
        }else{
            //instruções executadas, caso 
            //a condição seja falsa
        }
    
    
        </pre>
    </p>
  
<?php
    $media = 7;

    if($media >= 6){
        echo "O aluno foi aprovado";
    }else {
        echo "O aluno foi aprovado";
    }
?>

---------------------------------------
media >= 6       | aprovado <br>
6 < media >= 3   | exame <br>
media < 3        | reprovado <br> 


<?php
            $media = 4;

        if($media >= 6){
            echo "O aluno foi aprovado";
        }else if($media >= 3){
                echo "O aluno foi de recuperação";
            }else  {
                echo "O aluno foi reprovado";
            }
?>

<p>
    O Php faz a conversão automática de alguns tipo 
    para verdadeiro ou falso.

    <strong>True</strong>
    <ul>
        <li>String vazia</li>
        <li>Número igual a 0</li>
        <li>Vetor vazio<li>
    </ul>

    <strong>False</strong>
    <ul>
       <li>String vazia</li> 
       <li>Número igual a zero</li>
       <li>Vetor vazio</li>
    </ul>
 </p>
<?php
    if("o loco meu!"){
        echo "Verdadeiro";
    }else{
         echo "Falso";
    }
?>

<?php
    $média = 4;
    if(média >=6 && "Quero passar de ano"){
        echo "HUHUHU, sou esperto";
    }else{
        echo "ihh, me dei mal";
    }

?>