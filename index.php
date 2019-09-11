<!DOCTYPE html>
<html lang="ptt-br">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
   <div class="container">
   
     <h2>Huck Burger</h2>
    
    <form action="gravar.php" method="post">
    
    
    
    <h6>Dados do Cliente</h6>
  <div class="form-group">
    <label for="nome">Nome</label>
    <input name="nome"  id="nome" type="text" class="form-control" >
    
  </div>
  <div class="form-group">
    <label for="tel">Telefone</label>
    <input name="tel" id="tel" type="text" class="form-control" >
  </div>
  <h6>Monte seu lache</h6>
  <div class="form-group ">
   
    
    <label class="form-check-label">Ponto da carne:</label>
    <br>
    <input name="carne" type="radio">Mal Passada 
    <input name="carne" type="radio">Ao ponto
    
    
  </div>
  
  
      <div class="form-group">
         <label for="">Pão:</label><br>
         
          <select name="pao" id="" class="form-control">
              <option value="Brioche">Brioche</option>
              <option value="Australiano">Australiano</option>
              <option value="integral">integral</option>
              <option value="Alho e orégano">Alho e orégano</option>
              <option value="Italiano com ervas">Italiano com ervas</option>
                
          </select>
          
      </div>
      
      <div class="form-group">
         <label for="">Queijo:</label><br>
          <select name="queijo" id="" class="form-control">
              <option value="Cheedar">Cheedar</option>
              <option value="Prato">Prato</option>
              <option value="Suiço">Suiço</option>
              <option value="Muçarela">Muçarela</option>
              <option value="Sem queijo">Sem queijo</option>
          </select>
          
      </div>
      
      <div class="form-group">
          <label for="desc">Observações</label><br>
          <textarea name="desc" id="desc"></textarea>
      </div>
  
  
  
      <button type="submit" class="btn btn-success">Cadastrar</button>
      
</form>
    
    </div>

    
    
    
    
    
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>