@extends('layouts.app')

@section('content')
    <h1>Criar loja</h1>
    <form action="{{route('admin.stores.update', ['store' => $store->id])}}" method="post">
        @csrf
        @method("PUT")

        <div class='form-group'>
            <label for="">Nome loja</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @endError" value="{{$store->name}}">
            @error('name')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class='form-group'>
            <label for="">Descrição</label>
            <input type="text" name="description" class="form-control @error('description') is-invalid @endError" value="{{$store->description}}">
            @error('description')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class='form-group'>
            <label for="">Telefone</label>
            <input type="text" name="phone" class="form-control @error('phone') is-invalid @endError" value="{{$store->phone}}">
            @error('phone')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class='form-group'>
            <label for="">Celular</label>
            <input type="text" name="mobile_phone" class="form-control @error('mobile_phone') is-invalid @endError" value="{{$store->mobile_phone}}">
            @error('mobile_phone')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class='form-group'>
            <label for="">Slug</label>
            <input type="text" name="slug" class="form-control" value="{{$store->slug}}">
        </div>

        <div>
            <button type="submit" class='btn btn-lg btn-success'>Atualizar Loja</button>
        </div>
    </form>
@endSection
