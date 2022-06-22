@extends('templates.base')


@section('content')
    <div class="row">
        <form class="col s12" method="POST" action="{{ route('product.store') }}">
            @csrf()
            @method('POST')
            <div class="row">
                <div class="input-field col s12">
                    <input disabled required placeholder="Placeholder" id="internal_code" type="text"
                        class="validate disabled" value={{ $product->internal_code }}>
                    <label for="internal_code">Código Interno</label>
                    <input disabled type="text" name="internal_code" hidden value={{ $product->internal_code }}>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input disabled id="name" required name="name" type="text" class="validate"
                        value="{{ $product->name }}">
                    <label for="name">Nome do Produto</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s4">
                    <input disabled required value="{{ $product->min_stock_alert }}" name="min_stock_alert"
                        id="min_stock_alert" type="number" min="1" step="1" class="validate"
                        inputmode="numeric" pattern="\d*">
                    <label for="min_stock_alert">Alerta de Estoque Mínimo</label>
                </div>
                <div required class="input-field col s4">
                    <input disabled value="{{ $product->quantity }}" id="quantity" name="quantity" type="number"
                        min="0" step="1" class="validate">
                    <label for="quantity">Quantidade Inicial</label>
                </div>
                <div required class="input-field col s4">
                    <input disabled value="{{ $product->price }}" id="price" name="price" type="number"
                        min="0" step="0.01" class="validate">
                    <label for="price">Preço</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input disabled id="description" name="description" value="{{ $product->description }}" type="text"
                        class="validate">
                    <label for="description">Descrição</label>
                </div>
            </div>
        </form>

        <div class="row">
            <div class="col">

                <a class="waves-effect waves-light btn blue" href="{{ route('product.edit', $product) }}">
                    <i class="material-icons left">edit</i>
                    Edit
                </a>
            </div>
            <div class="col">

                <form action="{{ route('product.destroy', $product) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="waves-effect waves-light btn red">
                        <i class="material-icons left">delete</i>
                        Deletar
                    </button>
                </form>
            </div>

        </div>
    </div>
@endsection
