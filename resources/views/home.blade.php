@extends('layouts.app')

@section('content')

<div class="row col-md-12  mt-3 p-5 ">
    <div class="col-md-11">
        <!-- <div class="filtroLateral colorPrimary p-5 mb-5"> -->
        <h5 class="textCenter mb-3 title1">Processos em aberto</h5>
        
        <button class="backgroundList btn bg-light my-2 p-3 col-md-12">
                <div class="row ">
                        <!-- <div class="img_arquivo"></div> -->
                        <!-- <img src="" style="width: 100px;"> -->
                        <!-- <img src="{{ asset('images/file-alt-solid.png') }}" /> -->
                    <div class="col-md-5">
                        <h5 class="">Implementação de um novo sistema na empresa</h5>
                    </div>
                    <div class="col-md-5">
                        <p class="m-0">Implementação de um novo sistema na empresa</p>
                        <p class="m-0">Assunto:</p>
                        <p class="m-0">Assunto:</p>
                    </div>
                    <!-- <div class="col-md-2">
                        <p class="m-0">Assunto:</p>
                    </div>
                    <div class="col-md-2">
                        <p class="m-0">Assunto:</p>
                    </div> -->
                </div>
                <!-- <div class="row justify-content-end">
                    <p class="m-0 mt-1"><small class="text-muted text-danger">Concluido</small></p>
                </div> -->
        </button class="btn">
        <button class="backgroundList btn bg-light my-2 p-3 col-md-12">
                <div class="row ">
                        <!-- <div class="img_arquivo"></div> -->
                        <!-- <img src="" style="width: 100px;"> -->
                        <!-- <img src="{{ asset('images/file-alt-solid.png') }}" /> -->
                    <div class="col-md-5">
                        <h5 class="">Implementação de um novo sistema na empresa</h5>
                    </div>
                    <div class="col-md-5">
                        <p class="m-0">Implementação de um novo sistema na empresa</p>
                    </div>
                    <div class="col-md-2">
                        <p class="m-0">Assunto:</p>
                    </div>
                    <div class="col-md-2">
                        <p class="m-0">Assunto:</p>
                    </div>
                </div>
                <!-- <div class="row justify-content-end">
                    <p class="m-0 mt-1"><small class="text-muted text-danger">Concluido</small></p>
                </div> -->
        </button class="btn">
        <button class="backgroundList btn bg-light my-2 p-3 col-md-12">
                <div class="row ">
                        <!-- <div class="img_arquivo"></div> -->
                        <!-- <img src="" style="width: 100px;"> -->
                        <!-- <img src="{{ asset('images/file-alt-solid.png') }}" /> -->
                    <div class="col-md-5">
                        <h5 class="">Implementação de um novo sistema na empresa</h5>
                    </div>
                    <div class="col-md-5">
                        <p class="m-0">Implementação de um novo sistema na empresa</p>
                    </div>
                    <div class="col-md-2">
                        <p class="m-0">Assunto:</p>
                    </div>
                    <div class="col-md-2">
                        <p class="m-0">Assunto:</p>
                    </div>
                </div>
                <!-- <div class="row justify-content-end">
                    <p class="m-0 mt-1"><small class="text-muted text-danger">Concluido</small></p>
                </div> -->
        </button class="btn">
            
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
</div>
@endsection