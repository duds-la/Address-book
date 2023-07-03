<?php 
    include_once("templates/header.php");

?>
    <div class="container">
        <?php include_once("templates/backbtn.html"); ?>
        <h1 id="main-title">Criar contato</h1>
        <form action="<?= $BASE_URL ?>config/process.php" method="POST">
            <input type="hidden" name="type" value="create">
            <div class="form-group">
                <label for="name">Nome do Contato:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Insira o nome do contato" required>
            </div>
            <div class="form-group">
                <label for="phone">Número do Contato:</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Insira o número do contato" required>
            </div>
            <div class="form-group">
                <label for="observations">Observações do Contato:</label>
                <textarea type="text" class="form-control" id="observations" name="observations" placeholder="Insira uma observação sobre o contato" rows="3">
                </textarea>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>
<?php 
    
    include_once("templates/footer.php");

?>