@extends('layouts.app.main')

@section('content')
    <div class="select-owner">
        <div> <select class="js-example-basic-single" name="state">

            </select>
        </div>
        <div class="text-center">
            <a href="{{ route('resenha.step1') }}"> <button class="btn btn-primary">Continuar</button></a>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('.js-example-basic-single').select2({
                placeholder: 'Selecione o animal',
                width: '100%',

            });
        });
    </script>
@endsection
