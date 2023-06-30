<?php
    include_once('templates/header.php');

    if(isset($_POST['pesquisa'])){
        $result = pesquisaVagas($conn, $_POST['pesquisa']);
    } else {
        $result = exibeVagas($conn);
    }   
?> 




    <!-- aqui o conteudo principal  -->
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Minhas Vagas</h1>
        </div>
        <form action="MinhasVagas.php" method="post" class="input-group my-3">
            <input type="text" name="pesquisa" id="pesquisa" class="form-control" placeholder="Pesquisar">
            <button type="submit" class="btn btn-primary">Pesquisar</button>
        </form>

        <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Título</th>
                  <th>Status</th>
                  
                </tr>
              </thead>
              <tbody>
                <?php while($resultado = $result->fetch(PDO::FETCH_ASSOC)): ?>
                    <?php $contador = 1 ?>
                        <tr>
                        <td><?= $contador ?></td>
                        <td><a href="#"><?= $resultado['titulo_vaga'] ?></a></td>
                        <td><?= $resultado['status_vaga'] ?></td>
                        
                        </tr>
                    <?php $contador ++; ?>
                <?php endwhile; ?>
                    
              </tbody>
            </table>
          </div>


<?php include_once('templates/footer.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Hj8Y6AsQyA7ELTnqzvB5M2gu0tGMJk3o8NX7ckAGWDU7Q48h76zELr7Er1t1wHjG" crossorigin="anonymous"></script>
