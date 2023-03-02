@foreach ($pessoas as $pessoa)
<div class="bg-secondary user-card mb-3">
    <div class="text-center name-card">
        <span class="fs-5 text-primary">{{ $pessoa->nome }}</span>
    </div>
    <div class="d-flex justify-content-around align-items-center p-3 ">
        <div class="d-flex align-items-center">
            <div class="perfil">
                <img src="https://www.w3schools.com/howto/img_avatar.png" alt="Avatar" class="avatar">
            </div>
            <div class="dados-pessoais">
                <p class="mb-0">Email: <span>{{ $pessoa->email }}</span> </p>
                <p class="mb-0">CPF/CNPJ: <span>{{ $pessoa->cpf }} {{ $pessoa->cnpj }}</span> </p>
                <p class="mb-0">CEP: <span>{{ $pessoa->getAdress->cep ?? 'S/N' }}</span> </p>
                <p class="mb-0">Endereço: <span>{{ $pessoa->getAdress->endereco ?? 'S/N' }}</span> </p>
            </div>
        </div>

        <div>
            <div class="dados-pessoais">
                <p class="mb-0">Telefone: <span> {{ $pessoa->whatsapp }}</span> </p>
                <p class="">Tipo de usuário: <span>Não definido</span></p>
            </div>
            <div class="mb-2">
                <a href="{{ route('user.animais', $pessoa->id) }}" type="button" class="btn btn-default">Animais
                    cadastrados</a>
            </div>
            <div class="mb-2">
                <a href="{{ route('dados.pessoais', $pessoa->id) }}" type="button" class="btn btn-default">Mais
                    informações</a>
            </div>
        </div>
    </div>
</div>
@endforeach

