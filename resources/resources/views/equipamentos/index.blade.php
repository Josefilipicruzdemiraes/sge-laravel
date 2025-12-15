<h1>Lista de Equipamentos</h1>

<a href="/equipamentos/create">Novo Equipamento</a>

<ul>
@foreach ($equipamentos as $equipamento)
    <li>
        <strong>{{ $equipamento->nome }}</strong>
        ({{ $equipamento->tipo }} - {{ $equipamento->potencia }})

        | <a href="/equipamentos/{{ $equipamento->id }}/edit">Editar</a>

        <form action="/equipamentos/{{ $equipamento->id }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Excluir</button>
        </form>
    </li>
@endforeach
</ul>
