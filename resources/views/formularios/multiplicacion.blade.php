@extends('plantilla')
@section('contenido')
<form method="POST" action="/multiplicacion">
            @csrf
            <div class="form-group">
                <label for="numero_uno">Numero Uno</label>
                <input type="number" class="form-control" name="numero_uno" id="numero_uno"
                    aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
                <label for="numero_dos">Numero Dos</label>
                <input type="number" class="form-control" name="numero_dos" id="numero_dos"
                    aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted"></small>
            </div>
            <button type="submit" class="btn btn-primary">Multiplicar</button>
           
        </form>
        @endsection



        
    