@extends('layouts.app.main')

@section('title')

@section('content')
    <div class="my-8">
        <div class="m-4 text-red-900">
            <a href="{{ url()->previous() }}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                </svg>
            </a>
        </div>
        <div class="text-center  font-semibold">
            <p class="drop-shadow">
                Meus animais <br />
                cadatrados
            </p>
        </div>
        <form action="">
            <div class="relative mx-auto w-72 py-4">

                <input
                    class="border-zinc-100 border drop-shadow-2xl p-1 bg-zinc-100 shadow rounded-xl text-center w-full focus:ring-1 focus:ring-red-200 focus:border-red-800 focus:outline-none"
                    type="search" placeholder="Buscar animal" />
                <button type="submit" class="absolute inset-y-0 right-0 focus:text-red-900  flex items-center pr-3  ">
                    <svg aria-hidden="true" class="w-5 h-5 text-zinc-500 hover:text-red-900" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
        </form>

        <div class="card rounded-lg mx-5 my-4 bg-zinc-100 drop-shadow-2xl">
            <div class="card-header rounded-t-lg flex p-2 justify-around border-b-2 border-red-900 drop-shadow-2xl">
                <div>
                    <h1 class="text-sm font-semibold">Cosmos</h1>
                </div>
                <div>
                    <h1 class="text-xs font-normal">000001</h1>
                </div>
            </div>
            <div class="card-main grid grid-cols-2 p-2">
                <div class="text-sm mx-auto">
                    <p>Reprodutor:</p>
                    <p>Reprodutora:</p>
                    <p>Nascimento:</p>
                    <p>Gênero:</p>
                    <p>Tipo de reprodução:</p>
                </div>

                <div class="text-sm mx-auto">
                    <p>Artur</p>
                    <p>Cometa</p>
                    <p>2022</p>
                    <p>Macho</p>
                    <p>Sêmen</p>
                </div>
            </div>
            <div class="card-galery">
                <div class="grid grid-cols-3 gap-3 p-3">
                    <img class="rounded-lg" src="{{ asset('app/img/avatar-1.png') }}" alt="" />
                    <img class="rounded-lg" src="{{ asset('app/img/avatar-2.png') }}" alt="" />
                    <img class="rounded-lg" src="{{ asset('app/img/avatar-3.png') }}" alt="" />
                </div>
                <div class="flex justify-center">
                    <nav aria-label="Page navigation example">
                        <ul class="flex list-style-none">
                            <li class="page-item">
                                <a class="page-link relative block py-1.5 px-3 rounded border-0 bg-transparent outline-none transition-all duration-300 rounded text-gray-800 hover:text-gray-800 focus:shadow-none"
                                    href="#" aria-label="Previous">
                                    <span aria-hidden="true">&lt;</span>
                                </a>
                            </li>
                            <li class="page-item">
                                <a class="page-link relative block py-1.5 px-1 rounded border-0 bg-transparent outline-none transition-all duration-300 rounded text-gray-800 hover:text-red-900 hover:bg-gray-200 focus:shadow-none"
                                    href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link relative block py-1.5 px-1 rounded border-0 bg-transparent outline-none transition-all duration-300 rounded text-gray-800 hover:text-red-900 hover:bg-gray-200 focus:shadow-none"
                                    href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link relative block py-1.5 px-1 rounded border-0 bg-transparent outline-none transition-all duration-300 rounded text-gray-800 hover:text-red-900 hover:bg-gray-200 focus:shadow-none"
                                    href="#">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link relative block py-1.5 px-1 rounded border-0 bg-transparent outline-none transition-all duration-300 rounded text-gray-800 hover:text-red-900 hover:bg-gray-200 focus:shadow-none"
                                    href="#">4</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link relative block py-1.5 px-3 rounded border-0 bg-transparent outline-none transition-all duration-300 rounded text-gray-800 hover:text-red-900 hover:bg-gray-200 focus:shadow-none"
                                    href="#" aria-label="Next">
                                    <span aria-hidden="true">&gt;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="card rounded-lg mx-5 my-8 drop-shadow-2xl bg-zinc-100">
            <div class="card-header rounded-t-lg flex p-2 justify-around border-b-2 border-red-900 drop-shadow-2xl">
                <div>
                    <h1 class="text-sm font-semibold">Cosmos</h1>
                </div>
                <div>
                    <h1 class="text-xs font-normal">000002</h1>
                </div>
            </div>
            <div class="card-main grid grid-cols-2 p-2">
                <div class="text-sm mx-auto">
                    <p>Reprodutor:</p>
                    <p>Reprodutora:</p>
                    <p>Nascimento:</p>
                    <p>Gênero:</p>
                    <p>Tipo de reprodução:</p>
                </div>

                <div class="text-sm mx-auto">
                    <p>Artur</p>
                    <p>Cometa</p>
                    <p>2022</p>
                    <p>Macho</p>
                    <p>Sêmen</p>
                </div>
            </div>
            <div class="card-galery">
                <div class="grid grid-cols-3 gap-3 p-3">
                    <img class="rounded-lg" src="{{ asset('app/img/avatar-1.png') }}" alt="" />
                    <img class="rounded-lg" src="{{ asset('app/img/avatar-2.png') }}" alt="" />
                    <img class="rounded-lg" src="{{ asset('app/img/avatar-3.png') }}" alt="" />
                </div>
                <div class="flex justify-center  ">
                    <nav aria-label="Page navigation example  ">
                        <ul class="flex list-style-none">
                            <li class="page-item">
                                <a class="page-link relative block py-1.5 px-3 rounded border-0 bg-transparent outline-none transition-all duration-300 rounded text-gray-800 hover:text-gray-800 focus:shadow-none"
                                    href="#" aria-label="Previous">
                                    <span aria-hidden="true">&lt;</span>
                                </a>
                            </li>
                            <li class="page-item">
                                <a class="page-link relative block py-1.5 px-1 rounded border-0 bg-transparent outline-none transition-all duration-300 rounded text-gray-800 hover:text-red-900 hover:bg-gray-200 focus:shadow-none"
                                    href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link relative block py-1.5 px-1 rounded border-0 bg-transparent outline-none transition-all duration-300 rounded text-gray-800 hover:text-red-900 hover:bg-gray-200 focus:shadow-none"
                                    href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link relative block py-1.5 px-1 rounded border-0 bg-transparent outline-none transition-all duration-300 rounded text-gray-800 hover:text-red-900 hover:bg-gray-200 focus:shadow-none"
                                    href="#">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link relative block py-1.5 px-1 rounded border-0 bg-transparent outline-none transition-all duration-300 rounded text-gray-800 hover:text-red-900 hover:bg-gray-200 focus:shadow-none"
                                    href="#">4</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link relative block py-1.5 px-3 rounded border-0 bg-transparent outline-none transition-all duration-300 rounded text-gray-800 hover:text-red-900 hover:bg-gray-200 focus:shadow-none"
                                    href="#" aria-label="Next">
                                    <span aria-hidden="true">&gt;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
