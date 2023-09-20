<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="section" style="margin-top: 100px">
  <div class="container">
    <div class="row"><p></p></div>
  </div>
</div>
<div class="content-wrapper">
<section class="content">
  <div class="row">
    <div class="col-md-2"></div>
  	<div class="col-md-8">
  		<div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Editar Peça</h3>
        </div>
        <form role="form" action="/update/<?php echo htmlspecialchars( $item["iditem"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" method="post">
          <div class="box-body">
            <div class="form-group">
              <label for="item">Nome do item</label>
              <input type="text" class="form-control" id="item" name="item" placeholder="Digite o nome do item" value="<?php echo htmlspecialchars( $item["item"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" required="required">
            </div>
            <div class="form-group">
              <label for="codigo">Código do item</label>
              <input type="text" class="form-control" id="codigo" name="codigo" placeholder="Digite o código do item" value="<?php echo htmlspecialchars( $item["codigo"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"  required="required">
            </div>
            <div class="form-group">
              <label for="descricao">Descrição do item</label>
              <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Digite a descrição do item" value="<?php echo htmlspecialchars( $item["descricao"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" required="required">
            </div>
            <div class="form-group">
              <label for="preco">Preço</label>
              <input type="number" class="form-control" id="preco" name="preco" step="0.01" placeholder="0.00" value="<?php echo htmlspecialchars( $item["preco"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" required="required">
            </div>
          </div>
          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Salvar</button>
          </div>
        </form>
      </div>
  	</div>
    <div class="col-md-2"></div>
  </div>
</section>
<div class="section">
  <div class="container">
    <div class="row"><p></p></div>
  </div>
</div>