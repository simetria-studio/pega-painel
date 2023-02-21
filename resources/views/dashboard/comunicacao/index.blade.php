@extends('layouts.dashboard')

@section('title', 'Comunicações')
@section('content')
    <div class="col-5 mx-auto text-center my-5 border-bottom border-primary border-3">
        <h1 class="h3">Comunicações</h1>
    </div>
    <div class="row justify-content-center">
        <div class="col-8 mt-5 menu">
            <nav class="navbar mb-3 navbar-expand" id="menu">
                <ul class="navbar-nav  mx-auto">
                    <li class="nav-item menu-item">
                        <a class="nav-link menu-link active" href="#aguardando" id="link-aguardando">Aguardando aprovação</a>
                    </li>
                    <li class="nav-item menu-item">
                        <a class="nav-link menu-link" href="#comunicado" id="link-comunicado">Comunicado Oficial</a>
                    </li>
                    <li class="nav-item menu-item">
                        <a class="nav-link menu-link" href="#recente" id="link-recente">Mais Recentes</a>
                    </li>
                    <li class="nav-item menu-item">
                        <a class="nav-link menu-link" href="#todos" id="link-todos">Todas</a>
                    </li>
                </ul>
            </nav>
            <div class="mb-3">
                <div class="div-escondida " id="aguardando">
                    <div class="menu p-2 mb-3">
                        <div class="text-center mb-2">
                            <h5>Solicitante: Nome do usuario</h5>
                        </div>
                        <div class="row justify-content-center gap-3">
                            <div class="col-8">
                                <div class="solicitacao">
                                    <p>Tipo de Solicitação: <span>Transferência de afixo</span></p>
                                </div>
                                <div class="solicitacao">
                                    <p>Animais envolvidos: <span>ID do animal</span>, <span>Id do animal 2</span></p>
                                </div>
                                <div class="solicitacao">
                                    <p>Terceiros Envolvidos: <span>Nome de terceiro</span></p>
                                </div>
                                <div class="solicitacao">
                                    <p>Valor a ser pago: <span>50,00</span></p>
                                </div>
                                <div class="solicitacao">
                                    <p>Status de pagamento: <strong class="text-success">Aprovado</strong></p>
                                </div>
                                <div class="solicitacao">
                                    <p>Afixo anterior: <span></span></p>
                                </div>
                                <div class="solicitacao">
                                    <p>Afixo Novo: <span></span></p>
                                </div>

                            </div>
                            <div class="col-3">
                                <form>
                                    <div class="mb-2 form-check ">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="aprovacao">
                                            Aprovar Decisão
                                        </label>
                                    </div>
                                    <div class="mb-2 form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="aprovacao">
                                            Reprovar Decisão
                                        </label>
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-default">Enviar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="menu p-2 mb-3">
                        <div class="text-center mb-2">
                            <h5>Solicitante: Nome do usuario</h5>
                        </div>
                        <div class="row justify-content-center gap-3">
                            <div class="col-8">
                                <div class="solicitacao">
                                    <p>Tipo de Solicitação: <span>Transferência de afixo</span></p>
                                </div>
                                <div class="solicitacao">
                                    <p>Animais envolvidos: <span>ID do animal</span>, <span>Id do animal 2</span></p>
                                </div>
                                <div class="solicitacao">
                                    <p>Terceiros Envolvidos: <span>Nome de terceiro</span></p>
                                </div>
                                <div class="solicitacao">
                                    <p>Valor a ser pago: <span>50,00</span></p>
                                </div>
                                <div class="solicitacao">
                                    <p>Status de pagamento: <strong class="text-danger">Pendente</strong></p>
                                </div>
                                <div class="solicitacao">
                                    <p>Afixo anterior: <span></span></p>
                                </div>
                                <div class="solicitacao">
                                    <p>Afixo Novo: <span></span></p>
                                </div>

                            </div>
                            <div class="col-3">
                                <form>
                                    <div class="mb-2 form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="aprovacao">
                                            Aprovar Decisão
                                        </label>
                                    </div>
                                    <div class="mb-2 form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="aprovacao">
                                            Reprovar Decisão
                                        </label>
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-default">Enviar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="div-escondida" id="comunicado">
                    <div class="menu p-2 mb-3">
                        <div class="text-center mb-2">
                            <h5>Solicitante: Nome do usuario</h5>
                        </div>
                        <div class="bg-light comunicado overflow-auto p-2 mb-4">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni debitis perspiciatis pariatur
                                nobis autem amet, architecto deleniti iusto fugit praesentium labore fuga ab eos aperiam
                                excepturi eum odio dignissimos quasi?
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, officiis dolor corporis, vero
                                odio adipisci ut deserunt odit, esse laborum praesentium aperiam accusamus pariatur dolore
                                suscipit fugiat facilis in a!
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consectetur velit nemo
                                exercitationem quam aliquam perferendis animi porro beatae, voluptatibus consequuntur
                                maiores non veniam mollitia ut natus quis earum consequatur accusamus!
                            </p>
                        </div>

                        <form>
                            <div class="text-center mb-3">
                                <textarea class="bg-light rounded  p-2" name="" id="" cols="98" rows="10"></textarea>
                            </div>
                            <div class="text-center mb-3">
                                <button type="submit" class="btn btn-default">Enviar Resposta</button>
                            </div>
                        </form>
                    </div>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="div-escondida" id="recente">
                <div class="menu p-2 mb-3">
                    <div class="text-center mb-2">
                        <h5>Solicitante: Nome do usuario</h5>
                    </div>
                    <div class="row justify-content-center gap-3">
                        <div class="col-8">
                            <div class="solicitacao">
                                <p>Tipo de Solicitação: <span>Transferência de afixo</span></p>
                            </div>
                            <div class="solicitacao">
                                <p>Animais envolvidos: <span>ID do animal</span>, <span>Id do animal 2</span></p>
                            </div>
                            <div class="solicitacao">
                                <p>Terceiros Envolvidos: <span>Nome de terceiro</span></p>
                            </div>
                            <div class="solicitacao">
                                <p>Valor a ser pago: <span>50,00</span></p>
                            </div>
                            <div class="solicitacao">
                                <p>Status de pagamento: <strong class="text-danger">Pendente</strong></p>
                            </div>
                            <div class="solicitacao">
                                <p>Afixo anterior: <span></span></p>
                            </div>
                            <div class="solicitacao">
                                <p>Afixo Novo: <span></span></p>
                            </div>

                        </div>
                        <div class="col-3">
                            <form>
                                <div class="mb-2 form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="aprovacao">
                                        Aprovar Decisão
                                    </label>
                                </div>
                                <div class="mb-2 form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="aprovacao">
                                        Reprovar Decisão
                                    </label>
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-default">Enviar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="menu p-2 mb-3">
                    <div class="text-center mb-2">
                        <h5>Solicitante: Nome do usuario</h5>
                    </div>
                    <div class="row justify-content-center gap-3">
                        <div class="col-8">
                            <div class="solicitacao">
                                <p>Tipo de Solicitação: <span>Cobrição</span></p>
                            </div>
                            <div class="solicitacao">
                                <p>Animais envolvidos: <span>ID do animal</span>, <span>Id do animal 2</span></p>
                            </div>
                            <div class="solicitacao">
                                <p>Tipo de cobrição: <span>Inseminação artificial</span></p>
                            </div>
                            <div class="solicitacao">
                                <p>Valor a ser pago: <span>50,00</span></p>
                            </div>
                            <div class="solicitacao">
                                <p>Status de pagamento: <strong class="text-danger">Pendente</strong></p>
                            </div>
                            <div class="solicitacao">
                                <p>Médico veterinário: <span>Dr. Nome Completo</span></p>
                            </div>
                        </div>
                        <div class="col-3">
                            <form>
                                <div class="mb-2 form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="aprovacao">
                                        Aprovar Decisão
                                    </label>
                                </div>
                                <div class="mb-2 form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="aprovacao">
                                        Reprovar Decisão
                                    </label>
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-default">Enviar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="div-escondida" id="todos">
                <div class="menu p-2 mb-3">
                    <div class="text-center mb-2">
                        <h5>Solicitante: Nome do usuario</h5>
                    </div>
                    <div class="row justify-content-center gap-3">
                        <div class="col-8">
                            <div class="solicitacao">
                                <p>Tipo de Solicitação: <span>Transferência de afixo</span></p>
                            </div>
                            <div class="solicitacao">
                                <p>Animais envolvidos: <span>ID do animal</span>, <span>Id do animal 2</span></p>
                            </div>
                            <div class="solicitacao">
                                <p>Terceiros Envolvidos: <span>Nome de terceiro</span></p>
                            </div>
                            <div class="solicitacao">
                                <p>Valor a ser pago: <span>50,00</span></p>
                            </div>
                            <div class="solicitacao">
                                <p>Status de pagamento: <strong class="text-danger">Pendente</strong></p>
                            </div>
                            <div class="solicitacao">
                                <p>Afixo anterior: <span></span></p>
                            </div>
                            <div class="solicitacao">
                                <p>Afixo Novo: <span></span></p>
                            </div>

                        </div>
                        <div class="col-3">
                            <form>
                                <div class="mb-2 form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="aprovacao">
                                        Aprovar Decisão
                                    </label>
                                </div>
                                <div class="mb-2 form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="aprovacao">
                                        Reprovar Decisão
                                    </label>
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-default">Enviar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="menu p-2 mb-3">
                    <div class="text-center mb-2">
                        <h5>Solicitante: Nome do usuario</h5>
                    </div>
                    <div class="row justify-content-center gap-3">
                        <div class="col-8">
                            <div class="solicitacao">
                                <p>Tipo de Solicitação: <span>Cobrição</span></p>
                            </div>
                            <div class="solicitacao">
                                <p>Animais envolvidos: <span>ID do animal</span>, <span>Id do animal 2</span></p>
                            </div>
                            <div class="solicitacao">
                                <p>Tipo de cobrição: <span>Inseminação artificial</span></p>
                            </div>
                            <div class="solicitacao">
                                <p>Valor a ser pago: <span>50,00</span></p>
                            </div>
                            <div class="solicitacao">
                                <p>Status de pagamento: <strong class="text-success">Aprovado</strong></p>
                            </div>
                            <div class="solicitacao">
                                <p>Médico veterinário: <span>Dr. Nome Completo</span></p>
                            </div>
                        </div>
                        <div class="col-3">
                            <form>
                                <div class="mb-2 form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="aprovacao">
                                        Aprovar Decisão
                                    </label>
                                </div>
                                <div class="mb-2 form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="aprovacao">
                                        Reprovar Decisão
                                    </label>
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-default">Enviar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="menu p-2 mb-3">
                    <div class="text-center mb-2">
                        <h5>Solicitante: Nome do usuario</h5>
                    </div>
                    <div class="row justify-content-center gap-3">
                        <div class="col-8">
                            <div class="solicitacao">
                                <p>Tipo de Solicitação: <span>Cobrição</span></p>
                            </div>
                            <div class="solicitacao">
                                <p>Animais envolvidos: <span>ID do animal</span>, <span>Id do animal 2</span></p>
                            </div>
                            <div class="solicitacao">
                                <p>Tipo de cobrição: <span>Inseminação artificial</span></p>
                            </div>
                            <div class="solicitacao">
                                <p>Valor a ser pago: <span>50,00</span></p>
                            </div>
                            <div class="solicitacao">
                                <p>Status de pagamento: <strong class="text-danger">Pendente</strong></p>
                            </div>
                            <div class="solicitacao">
                                <p>Médico veterinário: <span>Dr. Nome Completo</span></p>
                            </div>
                        </div>
                        <div class="col-3">
                            <form>
                                <div class="mb-2 form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="aprovacao">
                                        Aprovar Decisão
                                    </label>
                                </div>
                                <div class="mb-2 form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="aprovacao">
                                        Reprovar Decisão
                                    </label>
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-default">Enviar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        // Pega todos os links de navegação
        const links = document.querySelectorAll("#menu a");

        // Para cada link, adiciona um ouvinte de eventos de clique
        links.forEach((link) => {
            link.addEventListener("click", (event) => {
                event.preventDefault(); // impede o comportamento padrão do link
                const divId = link.getAttribute("href"); // pega o ID da div correspondente ao link
                const div = document.querySelector(divId); // pega a div correspondente ao ID
                const divs = document.querySelectorAll(".div-escondida"); // pega todas as divs escondidas
                divs.forEach((div) => {
                    div.style.display = "none"; // esconde todas as divs escondidas
                });
                div.style.display = "block"; // mostra a div correspondente ao link clicado
            });
        });

        // Adiciona a classe 'active' ao link clicado e remove a classe 'active' dos outros links
        links.forEach((link) => {
            link.addEventListener("click", (event) => {
                event.preventDefault();
                const divId = link.getAttribute("href");
                const div = document.querySelector(divId);
                const divs = document.querySelectorAll(".div-escondida");
                divs.forEach((div) => {
                    div.style.display = "none";
                });
                div.style.display = "block";

                // adiciona a classe 'active' ao link clicado
                links.forEach((link) => {
                    link.classList.remove("active");
                });
                link.classList.add("active");
            });
        });
        // Adiciona a classe 'active' ao primeiro link e oculta as outras divs
        links.forEach((link, index) => {
            const divId = link.getAttribute("href");
            const div = document.querySelector(divId);
            if (index === 0) {
                link.classList.add("active");
                div.style.display = "block";
            } else {
                div.style.display = "none";
            }
        });
    </script>
@endsection
