<?php
            $produto1 = [
                        "nome" => "Câmera",
                        "marca" => "LG",
                        "preço" => 2500
                        ];
            
            $produto2 = [
                        "nome" => "Notebook",
                        "marca" => "Dell",
                        "preço" => 7500
                        ];

            $produto3 = [
                        "nome" => "Smartphone",
                        "marca" => "Samsung",
                        "preço" => 3500
                        ];


                $produtos = [
                        $produto1,
                        $produto2,
                        $produto3
                ];

        echo json_encode($produtos) ;
?>