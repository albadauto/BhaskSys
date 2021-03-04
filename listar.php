<?php
//COLOCAR SENHA DO BANCO
   $conexao_bd = mysqli_connect("localhost","root", "SENHA AQUI", "pw3", 8081);
    $comando_select = mysqli_query($conexao_bd, "select * from tb_bask");

    $tabela = array();
    for($i = 0; $i < 900; $i++){
        $exibe = mysqli_fetch_assoc($comando_select);
        if($exibe == NULL) break;
        $tabela[] = $exibe;
        
    }
    echo "<table style='width:100%; border: 1px solid black;'>";
    echo "<tr style='border: 1px solid black;'>";
    echo "<td style='border: 1px solid black;'> ID:" . "</td>";
    echo "<td style='border: 1px solid black;'>" . "</td>";
    echo "<td style='border: 1px solid black;'> Valor A:" . "</td>";
    echo "<td style='border: 1px solid black;'>" . "</td>";
    echo "<td style='border: 1px solid black;'> Valor B:" . "</td>";
    echo "<td style='border: 1px solid black;'>" . "</td>";
    echo "<td style='border: 1px solid black;'> Valor C:" . "</td>";
    echo "<td style='border: 1px solid black;'>" . "</td>";
    echo "<td style='border: 1px solid black;'> Result 1:" . "</td>";
    echo "<td style='border: 1px solid black;'>" . "</td>";
    echo "<td style='border: 1px solid black;'> Result 2:" . "</td>";
    echo "</tr>";
    foreach($tabela as $key => $value){
        echo "<tr style='border: 1px solid black;'>";
        foreach($value as $key => $exibir){
            echo "<td style='border: 1px solid black;'>";
            echo $exibir;
            echo "<td style='border: 1px solid black;'>";
        }
        echo "</tr>";
    }
    echo "</table>";
    
    

?>
<html>
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" >
    <input type="number" name="box_id"><br>
    <button type="submit" value="Excluir"> Excluir </button>
    </form>

</html>


<?php
    //COLOCAR SENHA DO BANCO
    $conexao_bd = mysqli_connect("localhost","root", "SENHA AQUI", "pw3", 8081);
    $delete = $_POST['box_id'];
    $comando_deletar = "DELETE FROM tb_bask WHERE conta_id = '$delete'";
    $resposta = mysqli_query($conexao_bd,$comando_deletar);
?>