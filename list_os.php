
<?php  require_once("../logics_data/lista_os.php");  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Ordens de Serviço Cadastradas</title>
    
    
</head>
<style>
        .error{
            color: red;
        }

       .corgeral{
            color: #0e84b5;
        }
        input[name="nome_razao"] {
        width: 50%;
        }
        input[name="cnpjtrue"] {
        width: 178px;
        }

        input[name="data_nascimento"] {
        width: 178px;
        }
        input[name="busca_os"] {
        width: 16%;
        }         

    </style>
    <div id="Menu">
    <?php  require_once("../menu.html");  ?> 

    </div>


<body>
<span class="corgeral">
<br><br><br><br><br><br>
    <h1>Lista de Ordens de serviço Cadastradas</h1></span>
    <table border="3" cellpadding = "3">
        <thead>
            <form method="POST" action="">
                
            <span class="corgeral">
                <b>Buscar Ordens de Serviço:</b> <input type="search" placeholder="Busca por OS, Nome ou Valor." name="busca_os"> 
                <button type="submit">Buscar</button>
                <button type="submit" name="limpa_filtro" >Limpar Filtro</button><br><br><br>
                <p><button type="submit" name="rel_ordens">Gerar Relatório</button></p>
            </span>
        
        </form>

            <th>Ordem de Serviço</th>
            <th>Nome do Cliente</th>
            <th>Valor da Ordem</th>
            <td><b>Status</b></td>
            
        </thead>
        <tbody>
        
            <?php 
            if($num_os == 0){ ?>
            <tr>
            <td colspan="7"> <br><b>Nenhuma Ordem foi cadastrada ainda.</b></td><br>
            </tr>

            
            <?php }else{
                if(!isset($_POST['busca_os'])){
                
                while($ordem_servico = $queryos->fetch_assoc()){
                    
                    
                    
                    
                    
                    
                                      
                    ?>
                    
            <tr>
                <td><?php echo $ordem_servico['id']?></td>
                <td><?php echo $ordem_servico['nome_cliente']?></td>
                <td><?php echo "R$".$ordem_servico['valor']?></td>
                <td><?php echo $ordem_servico['status_os']?></td>
                <td><a href="edita_os.php?id=<?php echo $ordem_servico['id']; ?>">Editar</a>
                <td><p><a href="deleta_os.php?id=<?php  echo $ordem_servico['id'];  ?>">Deletar</a></p></td>
                
              
           
            </tr>
            <?php } 
             }
        } 
        ?>
        <?php  require_once("../logics_data/busca_os.php");  ?> 
        <?php 
            if(isset($_POST['rel_ordens'])){

                if($num_os == 0 ){
                    echo "<script>alert('Não há dados para consulta');</script>";
                    echo "<script> 
                    window.location.href='/erp/cadastro_os/list_os.php';</script>";
                }else{

                echo "<SCRIPT>
                window.location.href='/erp/cadastro_os/rel_ordens.php';
                </SCRIPT>";
                }
            }
            
            ?>   
            
    </table>

</body>
</html>

