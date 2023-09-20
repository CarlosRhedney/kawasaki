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
          <a href="/create" class="btn btn-success"><i class="glyphicon glyphicon-pencil"></i> Cadastrar</a>
          <div class="box-tools pull-right">
            <form action="/">
              <div class="input-group input-group-sm" style="width: 150px">
                <input type="text" name="search" class="form-control pull-right" placeholder="Pesquisar" value="<?php echo htmlspecialchars( $search, ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                <div class="input-group-btn">
                  <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
                </div>
              </div>
            </form>
          </div>
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
                <th style="width: 150px">&nbsp;</th>
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
                  <a href="/update/<?php echo htmlspecialchars( $value1["iditem"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-edit"></i> Editar</a>
                  <a href="/delete/<?php echo htmlspecialchars( $value1["iditem"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" onclick="return confirm('Deseja realmente excluir este registro?')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></i> Excluir</a>
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