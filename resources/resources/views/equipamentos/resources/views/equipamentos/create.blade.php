<h1>Cadastrar Equipamento</h1>

<form method="POST" action="/equipamentos">
    @csrf

    <label>Nome:</label><br>
    <input type="text" name="nome"><br><br>

    <label>Tipo:</label><br>
    <input type="text" name="tipo"><br><br>

    <label>Potência:</label><br>
    <input type="text" name="potencia"><br><br>

    <button type="submit">Salvar</button>
</form>

<br>
<a href="/equipamentos">Voltar</a>
