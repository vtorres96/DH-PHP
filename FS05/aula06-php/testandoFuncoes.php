<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Testando Funções</title>
</head>
<body>
    <?php 
        /*
        Função strpos recebe dois parâmetros
        ($string, $findString), é responsável por
        retornar, por exemplo:
        a posição onde encontramos uma letra 'a'
        na frase 'Gosto de arroz e feijão'.
        retornaria 9 devido encontrar a letra a
        na posição 9
        */
        $mystring = 'abc';
        $findme   = 'a';
        $pos = strpos($mystring, $findme);
        
        echo "strpos: $pos <br>";
        
        /* 
        Função strstr recebe dois parâmetros ($string, $fatiaDaString),
        encontra uma string (que é o primeiro parâmetro)
        e retorna o que desejamos
        a partir de determinado carater 
        (que é passado no segundo parâmetro)
        */
        $email  = 'name@example.com';
        $domain = strstr($email, '@');
        echo "strstr: $domain sem true <br>"; // prints @example.com
        
        $user = strstr($email, '@', true); // A partir do PHP 5.3.0
        echo "strstrs: $user com true <br>"; // prints name
        
        /* 
        Função strlen recebe um parâmetro ($sring)
        retorna o tamanho da string
        */
        $str = 'abcdef';
        $tamanhoStr = strlen($str); // 6
        echo "strlen: $tamanhoStr <br>";
        
        /*
        Função str_replace recebe três parãmetros
        ($find, $replace, $text) o prmeiro pâmetro
        é o de busca, o segundo parâmetro é o que ele
        irá alterar na string caso encontre o que foi buscado
        e o terceiro o texto onde ocorrerá essas alterações     
        */
        $vogais = array("a", "e", "i", "o", "u");
        $stringVazia = '';
        $onlyconsonants = str_replace($vogais, $stringVazia, "Chitãozinho");
        echo "str_replace: $onlyconsonants <br>";
        
        /* 
            Função count recebe um parâmetro ($item)
            retorna quantidade de elementos
        */
        $numeros[0] = 1;
        $numeros[1] = 3;
        $numeros[2] = 5;
        $numeros[3] = 7;
        $numeros[4] = 9;
        
        $contandoElementos = count($numeros);
        echo "count: $contandoElementos <br>";
        
        /* 
            Função isset recebe um parâmetro ($variavel)
            retornar se ela foi iniciada e definida com um valor
        */
        if (isset($var)) {
            echo "Essa variável existe.";
        } else {
            echo 'Não encontrei a variável';
        }

        // Date
        echo "<br/>date('d/m/y'): ".date("d/m/y")."<br/>";
        echo "date('D, d-m-Y'): ".date("D, d-m-Y")."<br/>";
        echo "date('D, d M Y'): ".date("D, d M Y")."<br/>";
?>
</body>
</html>