@extends('layouts.app.main')

@section('content')
    <div class="m-4 text-red-900">
        <a href="{{ route('app.index') }}">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                class="w-8 h-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
            </svg>
        </a>
    </div>
    <div class="select-owner">
        <div> <select class="js-example-basic-single" name="state">

            </select>
        </div>
        <div class="text-center">
            <a href="{{ route('chose.animal') }}"> <button class="btn btn-primary">Continuar</button></a>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('.js-example-basic-single').select2({
                placeholder: 'Selecione o proprietário',
                width: '100%',

            });
        });
    </script>
@endsection
