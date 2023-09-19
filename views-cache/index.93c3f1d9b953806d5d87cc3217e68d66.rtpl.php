<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="section">
  <div class="container">
    <div class="row"><p style="margin-top: 100px"></p></div>
  </div>
</div>
<div class="content">
<section class="section">
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <div class="box-header with-border">
        <h3 class="box-title">Lista de Peças</h3>
      </div>
      <div>
        <div>
          <a href="/create" class="btn btn-success">Cadastrar</a>
        </div>

        <div class="box-body no-padding">
          <table class="table table-striped table-condesed">
            <thead>
              <tr>
                <th style="width: 10px">#</th>
                <th>Peça/Item</th>
                <th>Código</th>
                <th>Descrição</th>
                <th>Preço</th>
                <th style="width: 140px">&nbsp;</th>
              </tr>
            </thead>
            <tbody>
              <?php $counter1=-1;  if( isset($itens) && ( is_array($itens) || $itens instanceof Traversable ) && sizeof($itens) ) foreach( $itens as $key1 => $value1 ){ $counter1++; ?>
              <tr>
                <td><?php echo htmlspecialchars( $value1["iditem"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                <td><?php echo htmlspecialchars( $value1["item"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                <td><?php echo htmlspecialchars( $value1["codigo"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                <td><?php echo htmlspecialchars( $value1["descricao"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                <td><?php echo formatPrice($value1["preco"]); ?></td>
                <td>
                  <a href="/update/<?php echo htmlspecialchars( $value1["iditem"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Editar</a>
                  <a href="/delete/<?php echo htmlspecialchars( $value1["iditem"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" onclick="return confirm('Deseja realmente excluir este registro?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Excluir</a>
                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="col-md-2"></div>
  </div>

</section>
</div>