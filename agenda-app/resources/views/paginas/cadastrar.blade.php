<x-layout titulo="cadastrar">
    <br><br>
    <form class="container" action="cadastrar/salvar" method="GET">
        @csrf
        <div class="mb-3">
            <label for="dataCompromisso" class="form-label">Data Comprimisso:</label>
            <input type="date" class="form-control" id="dataEvento" name="dataEvento">
        </div>
        <br><br>
        <div class="mb-3">
            <label for="descricaoCompromisso" class="form-label">Descrição Comprimisso:</label>
            <input type="text" class="form-control" id="descricao" name="descricao">
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
        <a class="btn btn-primary" href="#">Atualizar</a>
        <a class="btn btn-primary" href="consultar">Consultar</a>
    </form>

</x-layout>