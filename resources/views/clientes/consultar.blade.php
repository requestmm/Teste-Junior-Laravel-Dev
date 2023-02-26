@include('parts.header');



                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Gestão de Clientes</h1>
                    


                <form class="user">
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control" id="cliente-nome"
                                placeholder="Nome">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control only-integers" id="cliente-cpf"
                                placeholder="CPF">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <select class="form-control" id="lista-estados"  aria-label="Estado (UF)" disabled>
                            
                                
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <select class="form-control " id="lista-cidades" disabled>
                                
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                        <div class="input-group input-group-joined" style="width: 16.5rem;">
                            <input class="form-control ps-0 " id="litepicker-data-nascimento" placeholder="Data de Nascimento" />
                        </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-check">
                                <input class="form-check-input cliente-sexo" id="radio-masc" type="radio" value="M" name="cliente_sexo">
                                <label class="form-check-label" for="radio-masc">Masculino</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input cliente-sexo" id="radio-fem" type="radio" value="F" name="cliente_sexo">
                                <label class="form-check-label " for="radio-fem">Feminino</label>
                            </div>
                        </div>
                    </div>
                    
                    
                    <button class="btn btn-success" type="reset" id="btn-limpar">Limpar</button>
                    <button class="btn btn-success" type="button" id="btn-pesquisar">Pesquisar</button>
                    <button class="btn btn-success" type="button" id="btn-cadastrar">Cadastrar</button>
                    
                    <hr>
                </form>
                    
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Lista de clientes</h6>
                            
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link page-prev" href="javascript:void(0);">Anterior</a></li>
                                <li class="page-item"><a class="page-link page-next" href="javascript:void(0);">Próxima</a></li>
                            </ul>
                            </nav>
                                <table class="table table-bordered" id="table-lista-clientes" width="100%" cellspacing="0" data-page="1">
                                    <thead>
                                        <tr>
                                            <th>Opções</th>
                                            <th>Nome</th>
                                            <th>CPF</th>
                                            <th>Nascimento</th>
                                            <th>Estado</th>
                                            <th>Cidade</th>
                                            <th>Sexo</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Opções</th>
                                            <th>Nome</th>
                                            <th>CPF</th>
                                            <th>Nascimento</th>
                                            <th>Estado</th>
                                            <th>Cidade</th>
                                            <th>Sexo</th>
                                        </tr>
                                    </tfoot>
                                    <tbody id="lista-clientes">
                                        
                                        

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Modals -->
    <div class="modal fade" id="modalCadastradoSucesso" tabindex="-1" aria-labelledby="modalCadastradoSucessoLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modalCadastradoSucessoLabel">Cadastrado com sucesso</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cancelar"></button>
            </div>
            <div class="modal-body">
                Cliente cadastrado com sucesso.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-close" data-bs-dismiss="modal">Fechar</button>
            </div>
            </div>
        </div>
    </div>
    <!-- Delete Modal -->
    <div class="modal fade" id="DeleteModal" tabindex="-1" aria-labelledby="DeleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="DeleteModalLabel">Remover cliente</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cancelar"></button>
            </div>
            <div class="modal-body">
                Você confirma a remoção do cliente?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" id="btn-confirmar">Sim, confirmo</button>
            </div>
            </div>
        </div>
        </div>
    <!-- Delete modal -->
    <!-- Edit Modal -->
        <div class="modal fade" id="EditModal" tabindex="-1" aria-labelledby="EditModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="EditModalLabel">Editar cliente</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cancelar"></button>
            </div>
            <div class="modal-body">
                <form class="user">
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control" id="cliente-nome"
                                placeholder="Nome">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="cliente-cpf"
                                placeholder="CPF">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <select class="form-control" id="lista-estados"  aria-label="Estado (UF)" disabled>
                            
                                
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <select class="form-control " id="lista-cidades" disabled>
                                
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                        <div class="input-group input-group-joined" style="width: 12.5rem;">
                            <input class="form-control ps-0 " id="editmodal-litepicker-data-nascimento" placeholder="Data de Nascimento" />
                        </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-check">
                                <input class="form-check-input cliente-sexo" id="radio-masc" type="radio" value="M" name="cliente_sexo">
                                <label class="form-check-label" for="radio-masc">Masculino</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input cliente-sexo" id="radio-fem" type="radio" value="F" name="cliente_sexo">
                                <label class="form-check-label " for="radio-fem">Feminino</label>
                            </div>
                        </div>
                    </div>
                    
                    <hr>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" id="btn-salvar">Salvar</button>
            </div>
            </div>
        </div>
        </div>
    <!-- Edit modal -->
    <!-- End of Modals -->

@include('parts.footer')

    <!-- Busca cidades e estados -->
    <script>
        $(document).ready(function(){
            $.get("/api/localidades/estados", function(data){
                
                let html = `<option selected disabled value="">Estado (UF)</option>`
                data.forEach((estado)=>{
                    html+= `<option value="${estado.id}">${estado.nome}</option>`
                })
                $('#lista-estados').html(html)
                $('#lista-estados').prop("disabled",false)
            })

            $("#lista-estados").on('change', document, function(){
                    $('#lista-cidades').prop("disabled",true)
                    estado_id = $("#lista-estados option:selected").val()
                    
                    $.get("/api/localidades/cidades-por-estado", {estado_id}, function(data){
                    let html = `<option selected disabled value="">Cidade</option>`
                    data.forEach((cidade)=>{
                        html+= `<option value="${cidade.id}">${cidade.nome}</option>`
                    })
                    $('#lista-cidades').html(html)
                    $('#lista-cidades').prop("disabled",false)
                })
            })
        })
    </script>

    <!-- Busca cidades e estados -->
    <script>

        function template_row(id, nome, cpf, nascimento, estado, cidade, sexo){

            return `
            <tr data-id="${id}">
                <td>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary lista-btn-editar" data-bs-toggle="modal" data-id="${id}" data-bs-target="#EditModal">
                    Editar
                    </button>
                    <button type="button" class="btn btn-primary lista-btn-remover" data-bs-toggle="modal" data-id="${id}" data-bs-target="#DeleteModal">
                    Remover
                    </button>
                    <!-- Button trigger modal -->
                </td>
                <td>${nome}</td>
                <td>${cpf}</td>
                <td>${nascimento}</td>
                <td>${estado}</td>
                <td>${cidade}</td>
                <td>${sexo}</td>
            </tr>
            `


        }
        
        $(document).ready(function(){
            function listarClientes(pageAction = null){
                
                cpf = $("#cliente-cpf").val();
                data_nascimento = $("#litepicker-data-nascimento").val();
                localidade_id = $("#lista-cidades option:selected").val();
                nome = $("#cliente-nome").val();
                sexo = $(".cliente-sexo[name=cliente_sexo]:checked").val();

                table_page = $("#table-lista-clientes").data("page")
                
                if(pageAction=="next"){
                    table_page++;
                }

                if(pageAction=="prev"){
                    table_page--;
                }


                $.get("/api/clientes/consultar", {page: table_page, cpf, data_nascimento, localidade_id, nome, sexo}, function(data){
                    
                    let html = ``
                    $("#table-lista-clientes").data("page", data.current_page)
                    data.data.forEach(function(cliente){
                        html += template_row(cliente.id, cliente.nome,cliente.cpf,cliente.data_nascimento,cliente.cidade.estado.nome,cliente.cidade.nome,cliente.sexo)
                        
                    })
                    $('#lista-clientes').html(html)
                
                })
            }

            $('.page-prev').on("click", document, ()=>listarClientes('prev'))
            $('.page-next').on("click", document, ()=>listarClientes('next'))

            listarClientes()

            $("#btn-cadastrar").on("click", document, ()=>listarClientes())
            $("#btn-pesquisar").on("click", document, ()=>listarClientes())

        })
    </script>

    <!-- Data de Nascimento -->
    <script>
        
        new Litepicker({
        element: document.getElementById('litepicker-data-nascimento'),
        singleMode: true,
        format: 'DD-MM-YYYY'
        })
        new Litepicker({
        element: document.getElementById('editmodal-litepicker-data-nascimento'),
        singleMode: true,
        format: 'DD-MM-YYYY'
        })
    </script>

    <!-- Busca clientes -->
    <script>
        $(document).ready(function(){
            $("#btn-cadastrar").on("click", document, function(){
                cpf = $("#cliente-cpf").val();
                data_nascimento = $("#litepicker-data-nascimento").val();
                localidade_id = $("#lista-cidades option:selected").val();
                nome = $("#cliente-nome").val();
                sexo = $(".cliente-sexo[name=cliente_sexo]:checked").val();
                $.post("/api/clientes/cadastrar", {cpf, data_nascimento, localidade_id, nome, sexo})
                .done(function(data){
                    $('#modalCadastradoSucesso').modal('show')

                })
                .fail(function(data){
                })
                .always()
                $("#btn-limpar").click()
                $("#btn-pesquisar").click()
            })
            
        })
    </script>

    <!-- Confirmar delete modal -->
    <script>



        $(document).on('click', 'button.lista-btn-remover', function(e){
            let id = $(e.target).data("id")
            $("#DeleteModal #btn-confirmar").attr("data-id", id)
            
        });

        $(document).on('click', 'button.lista-btn-editar', function(e){
            let id = $(e.target).data("id")
            $("#EditModal #btn-salvar").attr("data-id", id)

            tr = $(`#table-lista-clientes tr[data-id="${id}"]`)
            nome = $(tr).children("td:nth(1)").text()
            cpf = $(tr).children("td:nth(2)").text()
            data_nascimento = $(tr).children("td:nth(3)").text() 
            estado = $(tr).children("td:nth(4)").text()
            cidade = $(tr).children("td:nth(5)").text()
            sexo = $(tr).children("td:nth(6)").text()
            console.log(data_nascimento)
            $("#EditModal #cliente-nome").val(nome)
            $("#EditModal #cliente-cpf").val(cpf)
            $("#EditModal #editmodal-litepicker-data-nascimento").val(data_nascimento)
            $(`#EditModal .cliente-sexo[value=${sexo}]`).prop("checked", true)


            $.get("/api/localidades/estados", function(data){
                
                let html = `<option selected disabled value="">Estado (UF)</option>`
                data.forEach((estado)=>{
                    html+= `<option value="${estado.id}">${estado.nome}</option>`
                })
                $('#EditModal  #lista-estados').html(html)
                $('#EditModal  #lista-estados').prop("disabled",false)

                $(`#EditModal  #lista-estados option:contains(${estado})`).prop("selected", true)
                $(`#EditModal  #lista-estados`).trigger("change")

            })

            $("#EditModal #lista-estados").on('change', document, function(){
                    $('#lista-cidades').prop("disabled",true)
                    estado_id = $("#EditModal  #lista-estados option:selected").val()
                    
                    $.get("/api/localidades/cidades-por-estado", {estado_id}, function(data){
                    let html = `<option selected disabled value="">Cidade</option>`
                    data.forEach((cidade)=>{
                        html+= `<option value="${cidade.id}">${cidade.nome}</option>`
                    })
                    $('#EditModal #lista-cidades').html(html)
                    $('#EditModal #lista-cidades').prop("disabled",false)
                    $(`#EditModal #lista-cidades option:contains(${cidade})`).prop("selected", true)
                    $(`#EditModal #lista-cidades`).trigger("change")
                })
            })

            
        });

        $(document).on('click', '#EditModal #btn-salvar', function(e){
            $.ajax({
                    url: '/api/clientes/editar',
                    type: 'PUT',
                    data: {
                        id: $("#EditModal #btn-salvar").data("id"),
                        nome: $("#EditModal #cliente-nome").val(),
                        cpf: $("#EditModal #cliente-cpf").val(),
                        data_nascimento: $("#EditModal #editmodal-litepicker-data-nascimento").val(),
                        localidade_id: $("#EditModal #lista-cidades").val(),
                        sexo: $("#EditModal .cliente-sexo[name=cliente_sexo]:checked").val()
                    },
                    success: function(result) {
                        location.reload();
                        $("#EditModal").toggle("hide")
                    }
                });
        })

        $(document).on('click', '#DeleteModal #btn-confirmar', function(e){
                $.ajax({
                    url: '/api/clientes/deletar',
                    type: 'DELETE',
                    data: {
                        id: $(e.target).data("id")
                    },
                    success: function(result) {
                        location.reload();
                        $("#DeleteModal").toggle("hide")
                    }
                });
        });

        $(document).on('click', '#EditModal #btn-salvar', function(e){
                $.ajax({
                    url: '/api/clientes/editar',
                    type: 'PUT',
                    data: {
                        id: $(e.target).data("id"),
                        nome: $('#EditModal .cliente-nome').val(),
                        cpf: $('#EditModal .cliente-cpf').val(),
                        sexo: $('#EditModal .cliente-sexo[name=cliente_sexo]:checked').val(),
                        localidade_id: $('#EditModal #lista-cidades option:selected').val(),
                        data_nascimento: $('#EditModal #litepicker-data-nascimento').val()
                    },
                    success: function(result) {
                        location.reload();
                        $("#EditModal").toggle("hide")
                    }
                });
        });
        
    </script>
    <!-- End Confirmar delete modal -->

</body>

</html>