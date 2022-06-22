@extends('templates.base')


@section('content')
    <div class="row">
        <form class="col s12" method="POST" action="{{ route('product.update', $product) }}">
            @csrf()
            @method('PUT')
            <div class="row">
                <div class="input-field col s12">
                    <input disabled required placeholder="Placeholder" id="internal_code" type="text" class="validate"
                        value={{ $product->internal_code }}>
                    <label for="internal_code">Código Interno</label>
                    <input type="text" name="internal_code" hidden value={{ $product->internal_code }}>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="name" required name="name" type="text" class="validate"
                        value="{{ $product->name }}">
                    <label for="name">Nome do Produto</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s4">
                    <input required value="{{ $product->min_stock_alert }}" name="min_stock_alert" id="min_stock_alert"
                        type="number" min="1" step="1" class="validate" inputmode="numeric" pattern="\d*">
                    <label for="min_stock_alert">Alerta de Estoque Mínimo</label>
                </div>
                <div required class="input-field col s4">
                    <input value="{{ $product->quantity }}" id="quantity" name="quantity" type="number" min="0"
                        step="1" class="validate">
                    <label for="quantity">Quantidade Inicial</label>
                </div>
                <div required class="input-field col s4">
                    <input value="{{ $product->price }}" id="price" name="price" type="number" min="0"
                        step="0.01" class="validate">
                    <label for="price">Preço</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="description" name="description" value="{{ $product->description }}" type="text"
                        class="validate">
                    <label for="description">Descrição</label>
                </div>
            </div>
            <div class="row">
                <button class="waves-effect waves-light btn blue" type="submit">
                    <i class="material-icons left">save</i>
                    Salvar
                </button>
            </div>
        </form>
    </div>
@endsection
