@extends('layouts.dashboard')

@section('title', 'Consultar animais')
@section('content')

    <div class="col-5 mx-auto text-center my-5 border-bottom border-primary border-3">
        <h1 class="h3">Animais cadastrados</h1>
    </div>
    <div class="col-6 mx-auto mb-5">
        <form>
            <div class="search-group mb-3">
                <input type="text" class="form-control filter" placeholder="Pesquisar por nome, proprietário ou chip:">
                <a role="button" class="nav-link btn-search" type="button">
                    <iconify-icon icon="fa6-solid:magnifying-glass" width="20" height="20"></iconify-icon>
                </a>
            </div>
        </form>
    </div>

    <div class="col-10 mx-auto animais">
        @foreach ($animais as $animal)
            <div class="bg-secondary user-card mb-3">
                <div class="text-center name-card">
                    <span class="fs-5 text-primary">{{ $animal->nome_completo }}</span>
                </div>
                <div class="d-flex justify-content-around align-items-center p-3 ">
                    <div class="d-flex align-items-center">
                        <div class="dados-pessoais">
                            <p class="mb-0">Nome do genitor:
                                <span>{{ $animal->getPai->nome_completo ?? 'Genitor não registrado' }}</span>
                            </p>
                            <p class="mb-0">Nome da genitora:
                                <span>{{ $animal->getMae->nome_completo ?? 'Genitora não registrada' }}</span>
                            </p>
                            <p class="mb-0">Cadastro: <span>{{ $animal->registro_numero }}</span></p>
                            <p class="mb-0">Propietário(os): <span>{{ $animal->getOwner->nome ?? '' }}</span></p>
                        </div>
                    </div>

                    <div>
                        <div class="dados-pessoais">
                            <p class="mb-0">Código: <span>{{ $animal->numero_chip }}</span> </p>
                            <p class="mb-0">Tipo de reprodução: <span>{{ $animal->doador }}</span></p>
                        </div>
                        <div class="my-2">
                            <a href="{{ route('informacoes.animal', $animal->id) }}" type="button"
                                class="btn btn-default">Mais
                                informações</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        <div>
            <div class="d-flex justify-content-center">
                {{ $animais->links() }}
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $('.filter').on('keyup', function() {
                var searchTerm = $(this).val().toLowerCase();
                $.ajax({
                    url: "{{ route('animal.filtro') }}",
                    method: 'post',
                    data: {
                        _token: "{{ csrf_token() }}",
                        nome: searchTerm
                    },
                    success: function(data) {
                        $('.animais').html(data[0].view);
                    }

                });
            });
        });
    </script>

@endsection
