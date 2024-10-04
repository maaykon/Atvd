<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Atividade</title>
</head>
<body>

   <section id="cadastroPdt">

      <div class="container-fluid">
         <div class="row">
            <div class="col-md-12">
               <h1>Cadastro de Produtos</h1>
            </div>
         </div>
      </div>

      <div class="container-fluid col-md-6">
         <form action="cadastroPdt.php" method="post" class="row g-3">

            <div class="col-md-12">
               <label for="inputnome" class="form-label">
                  Nome
               </label>
               <input type="text" class="form-control" id="inputnome" name="nome" required>
            </div>

            <div class="col-md-12">
               <label for="inputPrecoCp" class="form-label">
                  Preço de compra
               </label>
               <input type="text" class="form-control" id="precoCp" name="precoCp" required>
            </div>

            <div class="col-md-12">
               <label for="inputPrecoVd" class="form-label">
                  Preço de venda
               </label>
               <input type="number" step="0.01" class="form-control" id="PrecoVd" name="precoVd" required>
            </div>

            <div class="col-md-12">
               <label for="inputCodPdt" class="form-label">
                  Codigo do produto
               </label>
               <input type="number" step="0.01" class="form-control" id="codPdt" name="codigoPdt" required>
            </div>

            <div class="col-md-12">
               <label for="inputnomeFncd" class="form-label">
                  Nome do Fornecedor
               </label>
               <input type="text" class="form-control" id="nomeFncd" name="nomeFncd" required>
            </div>

            <div class="col-md-12">
               <button type="submit">Cadastrar produto</button>
           </div>
       
         </form>
      </div>
   </section>

    
</body>
</html>