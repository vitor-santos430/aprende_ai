
<div class="container">
    <link rel="stylesheet" href="./css/minha_conta.css">

  <br>
  <form method="post" enctype="multipart/form-data">
    <div class="row">
      <div class="col-sm-2">
        <div class="dropdown">
          <select class="btn btn-secondary dropdown-toggle" name="SelecaoTema" searchable="Search here..">
            <option value="" disabled selected>Escolha um Tema</option>
              <?php
                $this->SelecionaTema();
               ?>
            </select>
          </div>

        </div>
      <div class="col-sm-2">
          <div class="dropdown">
            <select class="btn btn-secondary dropdown-toggle" name="SelecaoAssunto" searchable="Search here..">
              <option value="" disabled selected>Escolha um Assunto</option>
              <?php
                $this->SelecionaAssunto();
               ?>
            </select>
          </div>
        </div>
    </div>
<br>
    <div class="formulario">
      <div class="form-row">
        <div class="form-group col-md-12">
          <label for="inputEmail4">Título</label>
          <input type="text" class="form-control" name="titulo_Conteudo" id="inputEmail4">
        </div>
      </div>

    <div class="form-group">
      <label for="exampleFormControlTextarea1">Descrição Conteudo</label>
      <textarea class="form-control" id="DescricaoConteudo" name="descricao_Conteudo" rows="3" maxlength="70"></textarea>
    </div>

    <div class="form-group">
      <label for="exampleFormControlTextarea1" >Conteúdo</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" name="conteudo" rows="3"></textarea>
    </div>


    <div class="form-group">
      <label for="exampleFormControlFile1">Enviar imagem</label>
      <input type="file" accept="image/*" name="img_Conteudo" class="form-control-file" id="exampleFormControlFile1">
    </div>
        <button type="submit" name="btn_enviar" class="btn btn-warning">Enviar</button>
</form>


      </div>
</form>
