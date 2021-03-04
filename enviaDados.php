<?php
    //AUTOR: JOSE ADAUTO ALBARRAZ BARBOSA
    //PROF: YURI SA (O BRABO)
    //COLOCAR SENHA DO BANCO
    //TROCAR PORTA DO LOCALHOST

    $a = $_POST['box_a']; 
    $b = $_POST['box_b'];
    $c = $_POST['box_c'];
    
    $conexao_bd = mysqli_connect("localhost", "root", "SENHA AQUI", "pw3", 8081) or die (mysqli_error($conexao_bd));

    function calculaDelta(){
        global $a, $b, $c;
        $result = pow($b, 2) - (4 * $a * $c);
        return $result;
    }

    function calculaPos(){
        global $b, $a;
        $result = (-$b + sqrt(calculaDelta())) / (2 * $a);
        return $result;
    }
    function calculaNeg(){
        global $b, $a;
        $result = (-$b - sqrt(calculaDelta())) / (2 * $a);
        return $result;
        
    }
    $calcuPos = calculaPos();
    $calcuNeg = calculaNeg();
    $comando = mysqli_query($conexao_bd, "insert into tb_bask(tb_a,tb_b,tb_c,tb_pos,tb_neg) values ('$a','$b','$c','$calcuPos','$calcuNeg')");
    if($comando){
        echo "<script>alert('tudo ok!')</script>";
    }else{
        echo "Ta errado" . mysqli_error($conexao_bd);
    }
   



?>