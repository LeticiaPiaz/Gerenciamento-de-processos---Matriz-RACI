@extends('layouts.app')

@section('content')

<div class="row col-md-12  m-2 p-5 ">
    <div class="col-md-11">
        <!-- @if(Auth::user()->name == "admin")
        <div class="row mb-5">
            <div class="btn btn-dark col-md-3"> <a class="buttons" href="{{ route('process') }}">Novo processo</a></div>
            <div class="col-md-1"></div>
            <button type='button' class="col-md-3 btn btn-dark" data-bs-toggle="modal" data-bs-target="#modalRegister">{{ __('Novo usuario') }}</button>

        </div> -->
        <!-- @endif -->
        <h5 class="textCenter mb-5 title1">Processos em aberto</h5>

        @if(Auth::user()->name == "admin")
        <div class="colorPrimary my-2 p-3 col-md-12">
            <div class="p-3">
                <div class="col-md-12 mb-5">
                    <h5 class="">Implementação de um novo sistema na empresa</h5>
                </div>
                <table class="table">
                    <tbody>
                        <tr>
                            <td></td>
                            <th class="" scope="row">Suporte TI</th>
                            <th class="" scope="row">Gestor equipe</th>
                            <th class="" scope="row">Gestor TI</th>
                            <th class="" scope="row">Diretor</th>
                            <th class="" scope="row">Assistente</th>
                        </tr>
                        <tr>
                            <td>
                                <a href="{{ route('activity') }}" class="atividades">Conhecimento da instalação do novo sistema</a>
                            </td>
                            <th class="bg-info py-1 px-3" scope="row">I</th>
                            <th class="bg-danger py-1 px-3" scope="row">R</th>
                            <th class="bg-warning py-1 px-3" scope="row">A</th>
                            <th class="bg-info py-1 px-3" scope="row">I</th>
                            <th class="bg-success py-1 px-3" scope="row">C</th>
                        </tr>
                        <tr>
                            <td><a href="" class="atividades">Analise do necessário para a implantação</a></td>
                            <th class="bg-info py-1 px-3" scope="row">I</th>
                            <th class="bg-secondary py-1 px-3" scope="row">C</th>
                            <th class="bg-secondary py-1 px-3" scope="row">R</th>
                            <th class="bg-warning py-1 px-3" scope="row">A</th>
                            <th class="bg-info py-1 px-3" scope="row">I</th>
                        </tr>
                        <tr>
                            <td><a href="" class="atividades">Controle das etapas de instalação</a></td>
                            <th class=" py-1 px-3" scope="row"></th>
                            <th class="bg-secondary py-1 px-3" scope="row">I</th>
                            <th class="bg-warning py-1 px-3" scope="row">A</th>
                            <th class="bg-secondary py-1 px-3" scope="row">C</th>
                            <th class="bg-secondary py-1 px-3" scope="row">R</th>
                        </tr>
                        <tr>
                            <td><a href="" class="atividades">Controle das etapas de instalação</a></td>
                            <th class="bg-secondary py-1 px-3" scope="row">R</th>
                            <th class="bg-warning py-1 px-3" scope="row">A</th>
                            <th class="bg-secondary py-1 px-3" scope="row">I</th>
                            <th class="bg-secondary py-1 px-3" scope="row">I</th>
                            <th class="bg-secondary py-1 px-3" scope="row">I</th>
                        </tr> 
                    </tbody>
                </table>
            </div>
        </div>
        @endif
        
        @if(Auth::user()->name == "suporte TI")
        <div class="colorPrimary my-2 p-3 col-md-12">
            <div class="p-3">
                <div class="col-md-12 mb-5">
                    <h5 class="">Implementação de um novo sistema na empresa</h5>
                </div>
                <table class="table">
                    <tbody>
                        <tr>
                            <td></td>
                            <th class="" scope="row">Suporte TI</th>
                        </tr>
                        <tr>
                            <td>Conhecimento da instalação do novo sistema</td>
                            <th class="bg-info py-1 px-3" scope="row">I</th>
                        </tr>
                        <tr>
                            <td>Analise do necessário para a implantação</td>
                            <th class="bg-info py-1 px-3" scope="row">I</th>
                        </tr>
                        <tr>
                            <td>Treinamento dos funcionários</td>
                            <th class="bg-secondary py-1 px-3" scope="row">R</th>
                        </tr> 
                    </tbody>
                </table>
            </div>
        </div>
        @endif

        @if(Auth::user()->name == "Gestor equipe")
        <div class="colorPrimary my-2 p-3 col-md-12">
            <div class="p-3">
                <div class="col-md-12 mb-5">
                    <h5 class="">Implementação de um novo sistema na empresa</h5>
                </div>
                <table class="table">
                    <tbody>
                        <tr>
                            <td></td>
                            <th class="" scope="row">Gestor equipe</th>
                        </tr>
                        <tr>
                            <td>Conhecimento da instalação do novo sistema</td>
                            <th class="bg-danger py-1 px-3" scope="row">R</th>
                        </tr>
                        <tr>
                        <td>Analise do necessário para a implantação</td>
                            <th class="bg-secondary py-1 px-3" scope="row">C</th>
                        </tr>
                        <tr>
                        <td>Controle das etapas de instalação</td>
                            <th class="bg-secondary py-1 px-3" scope="row">I</th>
                        </tr>
                        <tr>
                            <td>Treinamento dos funcionários</td>
                            <th class="bg-warning py-1 px-3" scope="row">A</th>
                        </tr> 
                    </tbody>
                </table>
            </div>
        </div>
        @endif

        @if(Auth::user()->name == "gestor TI")
        <div class="colorPrimary my-2 p-3 col-md-12">
            <div class="p-3">
                <div class="col-md-12 mb-5">
                    <h5 class="">Implementação de um novo sistema na empresa</h5>
                </div>
                <table class="table">
                    <tbody>
                        <tr>
                            <td></td>
                            <th class="" scope="row">Gestor TI</th>
                        </tr>
                        <tr>
                            <td>Conhecimento da instalação do novo sistema</td>
                            <th class="bg-warning py-1 px-3" scope="row">A</th>
                        </tr>
                        <tr>
                        <td>Analise do necessário para a implantação</td>
                            <th class="bg-secondary py-1 px-3" scope="row">R</th>
                        </tr>
                        <tr>
                        <td>Controle das etapas de instalação</td>
                            <th class="bg-warning py-1 px-3" scope="row">A</th>
                        </tr>
                        <tr>
                            <td>Treinamento dos funcionários</td>
                            <th class="bg-secondary py-1 px-3" scope="row">I</th>
                        </tr> 
                    </tbody>
                </table>
            </div>
        </div>
        @endif

        @if(Auth::user()->name == "diretor")
        <div class="colorPrimary my-2 p-3 col-md-12">
            <div class="p-3">
                <div class="col-md-12 mb-5">
                    <h5 class="">Implementação de um novo sistema na empresa</h5>
                </div>
                <table class="table">
                    <tbody>
                        <tr>
                            <td></td>
                            <th class="" scope="row">Diretor</th>
                        </tr>
                        <tr>
                            <td>Conhecimento da instalação do novo sistema</td>
                            <th class="bg-info py-1 px-3" scope="row">I</th>
                        </tr>
                        <tr>
                        <td>Analise do necessário para a implantação</td>
                            <th class="bg-warning py-1 px-3" scope="row">A</th>
                        </tr>
                        <tr>
                        <td>Controle das etapas de instalação</td>
                            <th class="bg-success py-1 px-3" scope="row">C</th>
                        </tr>
                        <tr>
                            <td>Treinamento dos funcionários</td>
                            <th class="bg-info py-1 px-3" scope="row">I</th>
                        </tr> 
                    </tbody>
                </table>
            </div>
        </div>
        @endif

        @if(Auth::user()->name == "assistente")
        <div class="colorPrimary my-2 p-3 col-md-12">
            <div class="p-3">
                <div class="col-md-12 mb-5">
                    <h5 class="">Implementação de um novo sistema na empresa</h5>
                </div>
                <table class="table">
                    <tbody>
                        <tr>
                            <td></td>
                            <th class="" scope="row">Assistente</th>
                        </tr>
                        <tr>
                            <td>Conhecimento da instalação do novo sistema</td>
                            <th class="bg-success py-1 px-3" scope="row">C</th>
                        </tr>
                        <tr>
                        <td>Analise do necessário para a implantação</td>
                            <th class="bg-info py-1 px-3" scope="row">I</th>
                        </tr>
                        <tr>
                        <td>Controle das etapas de instalação</td>
                            <th class="bg-secondary py-1 px-3" scope="row">R</th>
                        </tr>
                        <tr>
                            <td>Treinamento dos funcionários</td>
                            <th class="bg-secondary py-1 px-3" scope="row">I</th>
                        </tr> 
                    </tbody>
                </table>
            </div>
        </div>
        @endif


        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="modal fade" id="modalRegister" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-size">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Registre-se</h5>
                    <!-- <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button> -->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="modal-body">

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>

                            <div class="col-md-6 my-auto">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Endereço de E-Mail') }}</label>

                            <div class="col-md-6 my-auto">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}</label>

                            <div class="col-md-6 my-auto">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar senha') }}</label>

                            <div class="col-md-6 my-auto">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-dark">
                                    {{ __('Criar Conta') }}
                                </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection