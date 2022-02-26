<!-- 1 - o número de vezes que o produto de nome Filo Mix foi pedido. (Valor 0,3)
   - a quantidade total de itens Filo Mix pedidos (Valor 0,7)

2 - o nome da Companhia de cep 5442 (Valor 0,3)
        - todos os produtos que esta companhia vende, informando:  (Valor 0,7)
        - nome do produto
        - valor unitário
        - unidades em estoque

3 - o nome dos itens contidos no pedido de número 10515.  (Valor 1,2)

4 - o valor total do pedido de número 10517 (Valor 0,3) -->
<style>
    td{
      text-align: center;  
    }
</style>
<?php
    include "DB.php";
    include "Empresa.php";
    include "Pedidos.php";
    include "Produtos.php";
    include "EmpresasDAO.php";
    include "PedidosDAO.php";
    include "ProdutosDAO.php";
    $produtos = new ProdutosDAO();
    $produto = new Produto();
    $pedidos = new PedidosDAO();
    $nome = "Filo Mix";
    $produto->setNomeProduto($nome);
    echo "<pre>";
    echo "</pre>";

    $arrayProd = $produtos->buscaPorProduto($produto,$produto->getNomeProduto());
    
    foreach($arrayProd as $p){
        $idp = $p->getIdProduto();
    }
    $buscaProd = $pedidos->buscaPorProduto($idp);

    $count = 0;
    $ac = 0;
    foreach($buscaProd as $pd){
       $count++;
       $ac += $pd->getQuantidade();
    }
    echo "<br>";
    echo "<br>".$nome;
    echo "<br> Numero de pedidos: ".$count;
    echo "<br> Quantidade Total: ".$ac;
    echo "<hr>";

    $empresa = new Empresa();
    $empresas = new EmpresasDAO();
    $empresa->setCep(5442);
    $buscaEmp = $empresas->buscaPorCep($empresa, $empresa->getCep());
    // <h2>Campanhia</h2>
    foreach($buscaEmp as $emp){
        echo "<h3>Companhia : ".$emp->getNomeEmpresa()."</h3>";
        $recb = $produtos->buscaPorCompanhia($emp->getId());
        ?>
      
        <table border="1">
                <thead>
                    <th>Nome</th>
                    <th>Valor Unitario</th>
                    <th>Unidade em estoque</th>
                </thead>
                <tbody>
        <?php
            foreach($recb as $prodEmp){
        ?>
            <tr>
                <td><?=$prodEmp->getNomeProduto()?></td>
                <td><?=$prodEmp->getPrecoUnitario()?></td>
                <td><?=$prodEmp->getUnidadesEstocadas()?></td>
            </tr>
          
            <?php
        }
        echo "</tbody></table>";
    echo "<hr>";
}
    $pedido = new Pedido();
    $pedido->setIdPedido(10515);
    $anota = $pedidos->buscaPorPedido($pedido, $pedido->getIdPedido());
    // echo "<pre>";
    // var_dump($anota);   
    // echo "</pre>";
    echo "Nome dos produtos do pedido 10515";
    echo "<ul>";
    foreach($anota as $idProds){
        $produtoNome = $produtos->buscaPorId($idProds->getIdProduto());
        foreach($produtoNome as $nomep){
           echo "<li>".$nomep->getNomeProduto()."</li>";
         }
        
     }
    echo "</ul>";
    echo "<hr>";
    echo "pedido 10517";

     $pedido->setIdPedido(10517);
     $anota = $pedidos->buscaPorPedido($pedido, $pedido->getIdPedido());
     $total = 0;
    foreach($anota as $idProds){
        $q = $idProds->getQuantidade();
        $a = $idProds->getPrecoUnitario(); 
        $total += $q * $a;
    }
    echo "<br>";
    echo "O valor total da lista é: ".$total;