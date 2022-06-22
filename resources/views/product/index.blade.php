@extends('templates.base')


@section('content')
    <div class="row">
        <a class="waves-effect waves-light btn blue" href={{ route('product.create') }}>
            <i class="material-icons left">add</i>
            Cadastrar Produto
        </a>
    </div>
    <h1>Produtos</h1>

    <table class="table highlight">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Preço</th>
                <th scope="col">Quantidade</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr style="cursor: pointer;">
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>
                        <a class='dropdown-trigger btn btn-flat waves-effect' href='#'
                            data-target='dropdown-{{ $product->id }}'>
                            <i class="material-icons">more_vert</i>
                        </a>
                    </td>
                </tr>

                <ul id='dropdown-{{ $product->id }}' class='dropdown-content' style="width: 300px !important">
                    <li>
                        <a href="{{ route('product.show', $product) }}">
                            <i class="material-icons">more</i>
                            Mais
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('product.edit', $product) }}">
                            <i class="material-icons">edit</i>
                            Editar
                        </a>
                    </li>
                </ul>
            @endforeach
        </tbody>
    </table>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const elems = document.querySelectorAll('.dropdown-trigger');
            M.Dropdown.init(elems, {
                constrainWidth: false
            });
        });
    </script>
@endsection
