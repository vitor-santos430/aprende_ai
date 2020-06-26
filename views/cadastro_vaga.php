
<div class="container">
    <link rel="stylesheet" href="./css/minha_conta.css">


  <br>
  <form method="post">
    <div class="formulario">

      <div class="form-row">
        <div class="form-group col-md-12">
          <label for="inputEmail4">Vaga</label>
          <input type="text" class="form-control" id="inputEmail4" name="nome_Vaga">
        </div>
      </div>

      <div class="form-group">
        <label for="exampleFormControlTextarea1">Descrição da Vaga</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descricao_Vaga"></textarea>
      </div>

      <div class="form-row">
        <div class="form-group col-md-12">
          <label for="inputEmail4">Nome do postador</label>
          <input type="text" class="form-control" id="inputEmail4" name="nome_Postador">
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-12">
          <label for="inputEmail4">E-mail</label>
          <input type="email" class="form-control" id="inputEmail4" name="email_Vaga" placeholder="e-mail">
          <br>

          <button type="submit" name="btn_enviar" class="btn btn-warning">Postar</button>
        </div>
      </div>
</form>
