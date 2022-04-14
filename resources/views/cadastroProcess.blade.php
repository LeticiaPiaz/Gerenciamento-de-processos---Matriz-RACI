@extends('layouts.app')

@section('content')

<div class="row col-md-12  m-2 p-5 ">
    <h5 class="mb-5 title1">Cadastrar processos</h5>

    <div class=" colorPrimary my-2 p-3 col-md-12">
        <form action="{{route('processCadastro')}}" method="post">
            @csrf
            <div class="p-3">
                <div class="col-md-12 mb-5">
                    <label for="">Nome do processo:</label>
                    <input type="text" class="form-control">
                </div>
                <div class="row col-md-12">
                    <div class="mr-5 col-md-1">
                        <label for="">Atividade:</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" class="form-control col-md-2">
                    </div>
                    
                    <button type="button" class="btn btn-secondary col-md-2"  data-bs-toggle="modal" data-bs-target="#Modal_adicionar_participantes"> Adicionar </button>

                </div>
                <table class="table col-md-10">
                    <tbody>
                        <tr>
                            
                        </tr>
                        
                    </tbody>
                </table>
            </div>
        </form>
    </div>
</div>
        <!-- SCRIPT PARA ADICIONAR ATIVIDADES -->
        <script>
        var controlAtividades = 0;

        $(document).on('click', '#salvarAtividade', ()=> {
            controlAtividades += 1;
            console.log(controlAtividades)
            var opt = document.getElementById('listAtividades')
            var newRow = document.createElement('tr');

            newRow.insertCell(0).innerHTML = 'ID';
            newRow.insertCell(1).innerHTML = 'NOME';

            // var colunaValor = newRow.insertCell(2);
            // colunaValor.button = 'Excluir';
            // colunaValor.className = 'btn buttonEdit';
            // colunaValor.onclick = apagarLinha();

            // colunaValor2 = newRow.insertCell(3);

            // colunaValor.button = 'Excluir';
            // colunaValor.className = 'btn buttonExcluir';
            // colunaValor.onclick = Modal_adicionar_adivogados();

            newRow.id(colunaValor.id = `Adv${controlAtividades}`)
            opt.appendChild(newRow);
            alet('chega aqui!');
            return false;
        })
    })

    

    function inserirLinha() {
        alert('chega aquei!!')
        controlAtividades += 1;
        var opt = document.getElementById('listAtividades')
        var newRow = opt.createElement('tr');

        newRow.insertCell(0).innerHTML = 'ID';
        newRow.insertCell(1).innerHTML = 'NOME';

        colunaValor = newRow.insertCell(2);
        colunaValor.button = 'Excluir';
        colunaValor.className = 'btn buttonEdit';
        colunaValor.onclick = apagarLinha();

        // colunaValor2 = newRow.insertCell(3);
        // colunaValor.button = 'Excluir';
        // colunaValor.className = 'btn buttonExcluir';
        // colunaValor.onclick = Modal_adicionar_participantes();

        opt.appendChild(newRow);
        return false;
    }

    function apagarLinha(id){

    }

</script>
<!-- Modal tabela atividades -->
<div class="modal fade" id="Modal_adicionar_participantes" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Cadastro de participantes</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                             
                            <div className="row mb-5">
                                <div className="col-md-3">
                                    <label>Usuário: </label>
                                </div>
                                <div className="col-md-4 mb-5">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Selecione um usuário</option>
                                        <option value="1">suporte TI</option>
                                        <option value="2">Gestor equipe</option>
                                        <option value="3">Gestor TI</option>
                                        <option value="4">Diretor</option>
                                        <option value="5">Assistente</option>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div className="row">
                                <div className="col-md-3">
                                    <label>Responsabilidade: </label>
                                </div>
                                <div className="col-md-4">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Selecione uma responsabilidade</option>
                                        <option value="1">A - aprovador</option>
                                        <option value="2">R - responsavel</option>
                                        <option value="3">C - consultado</option>
                                        <option value="4">I - informado</option>
                                    </select>
                                </div>
                            </div>
                                
                            <table class="table table-striped caption-top mt-5">
                                <thead className="table-secondary">
                                    <tr>
                                        <th scope="col">Responsabilidade</th>
                                        <th scope="col">Usuário</th>
                                    </tr>
                                </thead>
                                <tbody id="listResponsabilidades">
                                    <tr>
                                        <th>1</th>
                                        <th>2</th>
                                    </tr>
                                </tbody>
                            </table>                                 
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                            <button id="salvarResponsaveis" type="button" class="btn btn-secondary" data-bs-dismiss="modal" onClick="inserirLinha()">Salvar</button>
                        </div>
                    </div>    
                </div>
            </div>
@endsection