<x-layout titulo="Editar">
    <form action="" method="get">
        <label> id </label>
        <input type="number" id="id" name="id" value="" disabled required/>
        <br><br>

        <label> Data: </label>
        <input type="date" id="dataEvento" name="dataEvento" value="" required/>
        <br><br>

        <label> Descrição: </label>
        <input type="text" id="descricao" name="descricao" value="" required/>
        <br><br>

        <button class="btn btn-primary" type="submit">Atualizar</button>  
        <!-- Botão Excluir com MODAL -->
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Excluir
        </button>

        <!-- Janela do MODAL -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Excluir<h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
                    </div>
                    <div class="modal-body">
                        Tem certeza que deseja excluir o cliente: ?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
                        <a type="button" class="btn btn-primary" href="#">Sim</a>
                    </div>
                </div>
            <div>
        </div>
    </form>
</x-layout>