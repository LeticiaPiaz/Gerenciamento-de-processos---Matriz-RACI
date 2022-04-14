@extends('layouts.app')

@section('content')

<div class="row col-md-12 p-5 ">
    <!-- <div class="col-md-12"> -->
        <h5 class="mb-5 title1">Implementação de um novo sistema na empresa</h5>
        
        <div class="row">
            <!-- BLOCO COM LINKS RAPIDOS PARA OUTRAS ATIVIDADES -->
            <div class="col-md-2 mt-4 mr-2">
                <div class="textCenter mb-3">
                    <a href="{{ route('activity') }}" class="atividades">1 - Conhecimento da instalação do novo sistema</a>
                </div>
                <div class="textCenter mb-3">
                    <a href="{{ route('activity') }}" class="atividades">2 - Conhecimento da instalação do novo sistema</a>
                </div>
                <div class="textCenter mb-3">
                    <a href="{{ route('activity') }}" class="atividades">3 - Conhecimento da instalação do novo sistema</a>
                </div>
                <div class="textCenter mb-3">
                    <a href="{{ route('activity') }}" class="atividades">4 - Conhecimento da instalação do novo sistema</a>
                </div>
                <div class="textCenter mb-3">
                    <a href="{{ route('activity') }}" class="atividades">5 - Conhecimento da instalação do novo sistema</a>
                </div>
            </div>

            <!-- ESPAÇO ENTRE BLOCOS -->
            <div class="col-md-1"></div>

            <!-- BLOCO INFORMAÇÕES INICIAIS -->
            <div class="colorPrimary p-3 col-md-9">
                <div class="p-3">
                    <div class="row">
                        <h5 class="">Atividade 1</h5>
                        <div class="textCenter col-md-12 mt-4 mb-5">
                            <h5 class="">Conhecimento da instalação do novo sistema</h5>
                        </div>
                    </div>
                    <div class="pb-5 px-5">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th>Participantes</th>
                                    <th class="" scope="row">Responsabilidades</th>
                                </tr>
                                <tr>
                                    <td>Suporte TI</td>
                                    <th class="bg-info py-1 px-3" scope="row">I</th>
                                </tr>
                                <tr>
                                    <td>Gestor equipe</td>
                                    <th class="bg-info py-1 px-3" scope="row">I</th>
                                </tr>
                                <tr>
                                    <td>Gestor TI</td>
                                    <th class=" py-1 px-3" scope="row"></th>
                                </tr>
                                <tr>
                                    <td>Diretor</td>
                                    <th class="bg-secondary py-1 px-3" scope="row">R</th>
                                </tr>
                                <tr>
                                    <td>Assistente</td>
                                    <th class="bg-secondary py-1 px-3" scope="row">R</th>
                                </tr> 
                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>
        </div>

        <!-- BLOCO COM DETALHES -->
        <div class="colorPrimary p-3 col-md-12 mt-5">
            <div class="p-3">
                <div class="row">
                    <h5 class="">Detalhes</h5>
                    <!-- <div class="textCenter col-md-12 mt-4 mb-5">
                        <h5 class="">Conhecimento da instalação do novo sistema</h5>
                    </div> -->
                </div>
                <div class="pb-5 px-5 textCenter">
                    Metricas relacionadas a atividade
                </div>
                
            </div>
        </div>
    <!-- </div>     -->
</div>
@endsection