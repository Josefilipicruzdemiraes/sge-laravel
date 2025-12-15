<h1>Editar Equipamento</h1>

<form method="POST" action="/equipamentos/{{ $equipamento->id }}">
    @csrf
    @method('PUT')

    <label>Nome:</label><br>
    <input type="text" name="nome" value="{{ $equipamento->nome }}"><br><br>

    <label>Tipo:</label><br>
    <input type="text" name="tipo" value="{{ $equipamento->tipo }}"><br><br>

    <label>Potência:</label><br>
    <input type="text" name="potencia" value="{{ $equipamento->potencia }}"><br><br>

    <button type="submit">Atualizar</button>
</form>

<br>
<a href="/equipamentos">Voltar</a>
