<?php
  require_once("cabecalho.php");
  require_once("conexaobd.php");
  //Aqui colocarei o corpo se precisar
  $sql ="select cliente_id codigo_cliente, nome nome_cliente,
  telefone telefone_cliente, 
  concat(logradouro, ' - ', numero) endereco_cliente,
  cidade cidade_cliente, uf uf_cliente
from cliente
order by uf, cidade, nome limit 7";
  $stmt = $conn->prepare($sql);
  $result = $stmt->execute();
?>
  <div class="conteudo">
    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th>Código do Cliente</th>
          <th>Nome do Cliente</th>
          <th>Telefone do Cliente</th>
          <th>Endereço do Cliente</th>
          <th>Cidade do Cliente</th>
          <th>UF do Cliente</th>
        </tr>
      </thead>
      <tbody>
<?php
  if ($result){
    while($cliente = $stmt->fetch(PDO::FETCH_OBJ)){
      echo "<tr>";
      echo "  <td>".$cliente->codigo_cliente. "</td>";
      echo "  <td>".$cliente->nome_cliente."</td>";
      echo "  <td>".$cliente->telefone_cliente."</td>";
      echo "  <td>".$cliente->endereco_cliente."</td>";
      echo "  <td>".$cliente->cidade_cliente."</td>";
      echo "  <td>".$cliente->uf_cliente."</td>";
      echo "</tr>";
    }
  }
?>
      </tbody>
    </table>
  </div>
<?php
  require_once("rodape.php");