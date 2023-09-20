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
  		<div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title">Nova Peça</h3>
        </div>
        <form role="form" action="/create" method="post">
          <div class="box-body">
            <div class="form-group">
              <label for="item">Nome do item</label>
              <input type="text" class="form-control" id="item" name="item" placeholder="Digite o nome do item" required="required">
            </div>
            <div class="form-group">
              <label for="codigo">Código do item</label>
              <input type="text" class="form-control" id="codigo" name="codigo" placeholder="Digite o código do item" required="required">
            </div>
            <div class="form-group">
              <label for="descricao">Descrição do item</label>
              <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Digite uma descrição do item" required="required">
            </div>
            <div class="form-group">
              <label for="price">Preço</label>
              <input type="number" class="form-control" id="price" name="preco" step="0.01" placeholder="0.00" required="required">
            </div>
          </div>
          <div class="box-footer">
            <button type="submit" class="btn btn-success">Cadastrar</button>
          </div>
        </form>
      </div>
  	</div>
    <div class="col-md-2"></div>
  </div>
</section>
</div>
<div class="section">
  <div class="container">
    <div class="row"><p></p></div>
  </div>
</div>