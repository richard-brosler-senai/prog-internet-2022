<?php
    require_once("cabecalho.php");
    require_once("conexaobd.php");
    //Aqui colocarei o corpo se precisar
    $sql ="select p.pedido_id numero_pedido, p.data data_pedido,
    p.cliente_id codigo_cliente, c.nome nome_cliente,
    sum(i.quantidade * i.valor) total_pedido
    from pedido p
    inner join cliente c on c.cliente_id=p.cliente_id
    inner join pedido_item i on i.pedido_id = p.pedido_id
    group by p.pedido_id, p.data, p.cliente_id, c.nome
    order by p.data, 5 desc, p.pedido_id 
    limit 10";
    $stmt = $conn->prepare($sql);
    $result = $stmt->execute();
  ?>
    <div class="conteudo">
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th>Número do Pedido</th>
            <th>Data do pedido</th>
            <th>Código do Cliente</th>
            <th>Nome do Cliente</th>
            <th>Total do Pedido</th>
          </tr>
        </thead>
        <tbody>
  <?php
    if ($result){
      while($pedido = $stmt->fetch(PDO::FETCH_OBJ)){
        echo "<tr>";
        echo "  <td class=\"alinhatextodireita\">".$pedido->numero_pedido. "</td>";
        echo "  <td>".date_format(date_create($pedido->data_pedido),"d/m/Y")."</td>";
        echo "  <td>".$pedido->codigo_cliente."</td>";
        echo "  <td>".$pedido->nome_cliente."</td>";
        echo "  <td class=\"alinhatextodireita\">".number_format($pedido->total_pedido,2,",",".")."</td>";
        echo "</tr>";
      }
    }
  ?>
        </tbody>
      </table>
    </div>
  <?php
    require_once("rodape.php");