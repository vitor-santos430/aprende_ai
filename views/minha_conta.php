
<div class="container">
    <link rel="stylesheet" href="./css/minha_conta.css">
<form method="post" enctype="multipart/form-data">
<div>
    <img class="perfil-avatar" src="./views/img/img_usuarios/<?php echo $img;?>">
<br><br>
    <div class="input-group col-5 mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
      </div>
      <div class="custom-file">
          <input type="file" class="custom-file-input"
          id="img_usuario"
          aria-describedby="inputGroupFileAddon01"
          accept="image/*"
          name="img_perfil">
          <label class="custom-file-label" for="inputGroupFile01">Escolha sua foto de perfil</label>
      </div>
    </div>

</div>


    <h2 class="nome-perfil"><?php echo "$nome $sobrenome"; ?></h2>
    <p><b>APELIDO:</b><span name="apelido"><?php echo " $apelido"; ?></span></p>
<!--

<h2>Conteúdos vistos</h2>

<div class="row row-cols-1 row-cols-md-3">
  <div class="col mb-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Concurso Público</h5>
        <p class="card-text">Prévia do último conteudo vídeo sobre concurso público ou curso que se inscreveu.</p>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Enem</h5>
        <p class="card-text">Cronograma. Cronograma; Publicação do Edital; Pedido de Isenção; Justificativa de Ausência.</p>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Conhecimentos Gerais</h5>
        <p class="card-text">Prévia do último conteudo vídeo sobre concurso público ou curso que se inscreveu.</p>
      </div>
    </div>
  </div>
  -->
  <br>

    <div class="formulario">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="validationDefault01">Primeiro nome</label>
          <input type="text" class="form-control" id="validationDefault01" placeholder="Nome" value="<?php echo "$nome"; ?>" name="nome" required>
        </div>
        <div class="form-group col-md-6">
          <label for="validationDefault02">Sobrenome</label>
          <input type="text" class="form-control" id="validationDefault02" placeholder="Sobrenome" value="<?php echo "$sobrenome"; ?>" name="sobrenome" required>
        </div>

        <div class="form-group col-md-12">
          <label for="inputPassword4">CPF</label>
          <input type="text" class="form-control" id="inputPassword4" placeholder="CPF (Somente números)" name="cpf" value="<?php echo "$cpf"; ?>">
        </div>

        <!-- <div class="form-group col-md-6">
          <label for="validationDefaultUsername">Usuário</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroupPrepend2">@</span>
            </div>
            <input type="" class="form-control" id="validationDefaultUsername" placeholder="Usuario" name="apelido" aria-describedby="inputGroupPrepend2"  value="<?php echo "$apelido"; ?>" >

          </div>
        </div> -->
      </div>
      <div class="form-row">
        <div class="form-group col-md-12">
          <label for="inputEmail4">Email</label>
          <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email" value="<?php echo "$email"; ?>">
      <div class="form-group">
        <label for="inputAddress">Endereço</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="Rua dos Bobos, nº 0" name="endereco" value="<?php echo "$endereco"; ?>">
      </div>
      <div class="form-group">
        <label for="inputAddress2">Complemento</label>
        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartamento, hotel, casa, etc." name="complemento" value="<?php echo "$complemento"; ?>">
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputCity">Cidade</label>
          <input type="text" class="form-control" id="inputCity" placeholder="Guarulhos" name="cidade" value="<?php echo "$cidade"; ?>">
        </div>
        <div class="form-group col-md-4">
          <label for="inputEstado">Estado</label>
          <select id="inputEstado" class="form-control" name="estado" >
              <option value=""
              <?php echo $estado =='...'?'selected':'';?>
              >...</option>

              <option value="Acre"
              <?php echo $estado =='Acre'?'selected':'';?>
              >Acre</option>

              <option value="Alagoas"
              <?php echo $estado =='Alagoas'?'selected':'';?>
               >Alagoas</option>

               <option value="Amapá"
              <?php echo $estado =='Amapá'?'selected':'';?>
              >Amapá</option>

              <option value="Amazonas"
              <?php echo $estado =='Amazonas'?'selected':'';?>
              >Amazonas</option>

              <option value="Bahia"
              <?php echo $estado =='Bahia'?'selected':'';?>
              >Bahia</option>

              <option value="Ceará"
              <?php echo $estado =='Ceará'?'selected':'';?>
              >Ceará</option>

              <option value="Distrito Federal"
              <?php echo $estado =='Distrito Federal'?'selected':'';?>
              >Distrito Federal</option>

              <option value="Espírito Santo"
              <?php echo $estado =='Espírito Santo'?'selected
              ':'';?>>Espírito Santo</option>

              <option value="Goiás"
              <?php echo $estado =='Goiás'?'selected':'';?>
              >Goiás</option>

              <option value="Maranhão"
              <?php echo $estado =='Maranhão'?'selected':'';?>
              >Maranhão</option>

              <option value="Mato Grosso"
              <?php echo $estado =='Mato Grosso'?'selected':'';?>
              >Mato Grosso</option>

              <option value="Mato Grosso do Sul"
              <?php echo $estado =='Mato Grosso do Sul'?'selected':'';?>
              >Mato Grosso do Sul</option>

              <option value="Minas Gerais"
              <?php echo $estado =='Minas Gerais'?'selected':'';?>
              >Minas Gerais</option>

              <option value="Pará"
              <?php echo $estado =='Pará'?'selected':'';?>
              >Pará</option>

              <option value="Paraíba"
              <?php echo $estado =='Paraíba'?'selected':'';?>
              >Paraíba</option>

              <option value="Paraná"
              <?php echo $estado =='Paraná'?'selected':'';?>
              >Paraná</option>

              <option value="Pernambuco"
              <?php echo $estado =='Pernambuco'?'selected':'';?>
              >Pernambuco</option>

              <option value="Piauí"
              <?php echo $estado =='Piauí'?'selected':'';?>
              >Piauí</option>

              <option value="Rio de Janeiro"
              <?php echo $estado =='Rio de Janeiro'?'selected':'';?>
              >Rio de Janeiro</option>

              <option value="Rio Grande do Norte"
              <?php echo $estado =='Rio Grande do Norte'?'selected':'';?>
              >Rio Grande do Norte</option>

              <option value="Rio Grande do Sul"
              <?php echo $estado =='Rio Grande do Sul'?'selected':'';?>
              >Rio Grande do Sul</option>

              <option value="Rondônia"
              <?php echo $estado =='Rondônia'?'selected':'';?>
              >Rondônia</option>

              <option value="Roraima"
              <?php echo $estado =='Roraima'?'selected':'';?>
              >Roraima</option>

              <option value="Santa Catarina"
              <?php echo $estado =='Santa Catarina'?'selected':'';?>
              >Santa Catarina</option>

              <option value="São Paulo"
              <?php echo $estado =='São Paulo'?'selected':'';?>
              >São Paulo</option>

              <option value="Sergipe"
              <?php echo $estado =='Sergipe'?'selected':'';?>
              >Sergipe</option>

              <option value="Tocantins"
              <?php echo $estado =='Tocantins'?'selected':'';?>
              >Tocantins</option>
          </select>
        </div>
        <div class="form-group col-md-2">
          <label for="inputCEP">CEP</label>
          <input type="text" class="form-control" id="inputCEP" placeholder="00000-000" name="cep" value="<?php echo "$cep"; ?>">
        </div>
      </div>
      </div>
        <div class="form-group col-md-12">
          <label for="inputPassword4">Senha</label>
          <input type="password" class="form-control" id="inputPassword4" name="senha" placeholder="Senha">
          <small id="passwordHelpInline" class="text-muted">Deve ter entre 8 e 20 caracteres.</small>
        </div>
    </div>
      </div>

      <button type="submit" class="btn btn-warning" name="btn_enviar">Atualizar</button>
</form>
<br><br>
<<<<<<< HEAD
<?php

$minhaConta = new MinhaConta;

  switch ($minhaConta->verificaPermissao()) {
    case 1: $minhaConta->RequisitarPermissao();
      ?>
      <form method="post" class="was-validated" enctype="multipart/form-data">
        <div class="custom-file">
          <input type="file" accept=".doc , .txt , .pdf" class="custom-file-input" name="txt_documento" id="validatedCustomFile" required>
          <label class="custom-file-label" for="validatedCustomFile"></label>
        </div>
          <button type="submit" name="btn_Postar" class="btn btn-warning">Postar!</button>
        </form>

<?php
    break;
    case 2:
      ?>
      <h2 class="nome-perfil">Documento em analise</h2>
<?php
    break;
    default:
      ?>
        <h2 class="nome-perfil">já possui Acesso a postar conteudo!</h2>
<?php
  }
       ?>




=======
<form method="post" enctype="multipart/form-data">
  <div class="form-group">
      <label for="exampleInputEmail1">Poste um arquivo!!</label>
      <!-- <input type="file"  name="img_Conteudo" class="form-control-file btn-danger" id="exampleFormControlFile1"> -->

      <div class="custom-file">
        <input type="file" class="custom-file-input" accept="*.docx | image/* | *.doc | *.pdf" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
        <label class="custom-file-label" for="inputGroupFile01">Escolher arquivo</label>
      </div>
      <small id="emailHelp" class="form-text text-muted">Poste um arquivo contendo suas qualificações para ensinar ou até mesmo um material e ganhe acesso após analíse a postar conteudo.</small>
    </div>
    <button type="submit" class="btn btn-warning">Postar!</button>
  </form>
>>>>>>> a161fe4cef6570512744dba009f49beb32050e34
</div>
