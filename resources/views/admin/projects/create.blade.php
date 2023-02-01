@extends('layouts.app')

@section('content')
    <div class="text-center bg-white rounded-3 py-5">
        <form action="{{route ('admin.projects.store')}}" class="form-group w-75 d-inline-block shadow rounded-3 p-3 py-5" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nome Progetto</label>
                <input type="text" class="form-control text-center w-75 mx-auto" name="title">
            </div>
            <div class="mb-3">
                <label class="form-label">Descrizione</label>
                <textarea name="description" cols="30" rows="5" class="form-control w-75 mx-auto"></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Link immagine</label>
                <input type="text" class="form-control text-center w-75 mx-auto" name="series">
            </div>
            <div class="mb-3">
                <label class="form-label">Link Git-Hub</label>
                <input type="text" class="form-control text-center w-75 mx-auto" name="sale_date">
            </div>
            <button class="btn btn-lg btn-outline-dark mt-4" type="submit">Salva Progetto</button>     
        </form>  
    </div>
@endsection