<link rel="stylesheet" href="css/styles_cadastro.css">
<div class="container">
  <form method="POST">
    <div class="formulario">    
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="validationDefault01">Nome Fantasia</label>
          <input type="text" class="form-control" id="validationDefault01" 
          placeholder="Nome Fantasia" name="nome" required>
        </div>
        <div class="form-group col-md-6">
          <label for="validationDefault02">Razão Social</label>
          <input type="text" class="form-control" id="validationDefault02" 
          placeholder="Razão Social" name="razaoSocial" required>
        </div>

        <div class="form-group col-md-6">
          <label for="inputPassword4">CNPJ</label> 
          <input type="text" class="form-control" id="inputPassword4" name="cnpj" placeholder="CNPJ" required>
        </div>

        <div class="form-group col-md-6">
          <label for="validationDefaultUsername">Usuário</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroupPrepend2">@</span>
            </div>
            <input type="text" class="form-control" id="validationDefaultUsername"
             placeholder="Usuário" aria-describedby="inputGroupPrepend2" name="usuario" required>
          </div>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-12">
          <label for="inputEmail4">Email</label>
          <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Email" required>
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Senha</label>
          <input type="password" class="form-control" id="inputPassword4" 
          name="senha"  placeholder="Senha" required>
          <small id="passwordHelpInline" class="text-muted">Deve ter entre 8 e 20 caracteres.</small>
        </div>
        
      <div class="form-inline">
        <div class="form-group col-md-6 mb-3">
            <label for="inputPassword6">Confirmar Senha</label>
            <input type="password" id="inputPassword6" class="form-control" 
            aria-describedby="passwordHelpInline" name="confirmaSenha"  placeholder="Confirmar Senha" required>
        </div>
      </div>
    </div>
      </div>
      <div class="form-group">
        <label for="inputAddress">Endereço</label>
        <input type="text" class="form-control" id="inputAddress" 
        name="endereco" placeholder="Rua dos Bobos, nº 0">
      </div>
      <div class="form-group">
        <label for="inputAddress2">Complemento</label>
        <input type="text" class="form-control" id="inputAddress2" 
        name="complemento" placeholder="Apartamento, hotel, casa, etc.">
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputCity">Cidade</label>
          <input type="text" class="form-control" id="inputCity"
          name="cidade" placeholder="Cidade">
        </div>
        <div class="form-group col-md-4">
          <label for="inputEstado">Estado</label>
          <select id="inputEstado" class="form-control" name="estado">
            <option>...</option>
            <option value="Acre">Acre</option>
            <option value="Alagoas">Alagoas</option>
            <option value="Amapá">Amapá</option>
            <option value="Amazonas">Amazonas</option>
            <option value="Bahia">Bahia</option>
            <option value="Ceará">Ceará</option>
            <option value="Distrito Federal">Distrito Federal</option>
            <option value="Espírito Santo">Espírito Santo</option>
            <option value="Goiás">Goiás</option>
            <option value="Maranhão">Maranhão</option>
            <option value="Mato Grosso">Mato Grosso</option>
            <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
            <option value="Minas Gerais">Minas Gerais</option>
            <option value="Pará">Pará</option>
            <option value="Paraíba">Paraíba</option>
            <option value="Paraná">Paraná</option>
            <option value="Pernambuco">Pernambuco</option>
            <option value="Piauí">Piauí</option>
            <option value="Rio de Janeiro">Rio de Janeiro</option>
            <option value="Rio Grande do Norte">Rio Grande do Norte</option>
            <option value="Rio Grande do Sul">Rio Grande do Sul</option>
            <option value="Rondônia">Rondônia</option>
            <option value="Roraima">Roraima</option>
            <option value="Santa Catarina">Santa Catarina</option>
            <option value="São Paulo">São Paulo</option>
            <option value="Sergipe">Sergipe</option>
            <option value="Tocantins">Tocantins</option>
          </select>
        </div>
        <div class="form-group col-md-2">
          <label for="inputCEP">CEP</label>
          <input type="text" class="form-control" id="inputCEP" name="cep" placeholder="00000-000">
        </div>
      </div>
    
      <button type="submit" class="btn btn-warning" name="btn_enviar" >Cadastrar</button>
    </div>
  </form>

