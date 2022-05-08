@extends('layouts.main')
@section('title', 'Criar Contato')
@section('content')
<div id="contact-create-container" class="col-md-6 offset-md-3">
    <h1>Criar Contato</h1>
    <form action="/contact" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Nome:</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="contact">Contato:</label>
            <input type="text" class="form-control" id="contact" name="contact">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" class="form-control" id="email" name="email">
        </div>
        <input type="submit" value="cadastrar" class="btn btn-primary">
    </form>
</div>
@endsection