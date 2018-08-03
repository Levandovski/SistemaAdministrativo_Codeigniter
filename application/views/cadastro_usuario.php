<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<div class="col-md-10">       
  <h1 class="page-header">Novo Usuário</h1>
</div>
<div class="col-md-12">
<form  action="<?= base_url()?>usuario/cadastrar" method="post">
  <div class="form-group">
    <label for="nome">Nome:</label>
    <input type="text" class="form-control" id="nome" name="nome" placeholder="Infome seu nome..." required="">
  </div>
  <div class="row">
      <div class="col-md-3">
        <div class="form-group">
            <label for="cpf">CPF:</label>
            <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Infome seu cpf..." required="">
        </div>
      </div>
      <div class="col-md-7">
        <div class="form-group">
            <label for="endereco">Endereço:</label>
            <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Infome seu endereço..." required="">
        </div>
      </div>
      <div class="col-md-2">
      <div class="form-group">
        <label for="nivel">Nivel:</label>
          <select id="nivel" class="form-control" name="nivel" required="">
              <option value="0">----</option>
              <option value="1">Administrador</option>
              <option value="2">Usuário</option>
          </select>
      </div>
    </div>
  </div><!--Fim do row-->
  <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Infome seu email..." required="">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
          <label for="senha">Senha:</label>
          <input type="password" class="form-control" id="senha" name="senha" placeholder="Informe sua senha..." required="">
        </div>
    </div>
    <div class="col-md-2">
      <div class="form-group">
        <label for="status">Status:</label>
          <select id="status" class="form-control" name="status" required="">
              <option value="0">----</option>
              <option value="1">Ativo</option>
              <option value="2">Inativo</option>
          </select>
      </div>
    </div>
</div><!--Fim do row-->
<div id="esquerda">
        <button type="submit" class="btn btn-success">Enviar</button>
        <button type="reset" class="btn btn-default">Cancelar</button>
      </div>
</form>
</div>
        </div>
      </div>
</div>
 
