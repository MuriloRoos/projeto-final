<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css' rel='stylesheet'>

    <link href="css/custom.css" rel="stylesheet">
    <title>Agendamentos</title>
</head>

<body>

    <div class="container">

        <h2 class="mb-4">Agenda</h2>
        
            <a href="../index.php">
                <button class="btn btn-primary">Voltar para o Início</button>
            </a>
        

        <span id="msg"></span>

        <div id='calendar'></div>
        
    </div>

    <!-- Modal Visualizar -->
    <div class="modal fade" id="visualizarModal" tabindex="-1" aria-labelledby="visualizarModalLabel">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">

                    <h1 class="modal-title fs-5" id="visualizarModalLabel">Visualizar o Evento</h1>
                    <h1 class="modal-title fs-5" id="editarModalLabel" style="display: none;">Editar o Evento</h1>

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <span id="msgViewEvento"></span>

                    <div id="visualizarEvento">

                        <dl class="row">

                            <dt class="col-sm-3">ID: </dt>
                            <dd class="col-sm-9" id="visualizar_id"></dd>

                            <dt class="col-sm-3">Título: </dt>
                            <dd class="col-sm-9" id="visualizar_title"></dd>

                            <dt class="col-sm-3">Início: </dt>
                            <dd class="col-sm-9" id="visualizar_start"></dd>

                            <dt class="col-sm-3">Fim: </dt>
                            <dd class="col-sm-9" id="visualizar_end"></dd>

                        </dl>

                        <button type="button" class="btn btn-warning" id="btnViewEditEvento">Editar</button>
                        <button type="button" class="btn btn-danger" id="btnApagarEvento">Excluir</button>
                    </div>

                    <div id="editarEvento" style="display: none;">

                        <span id="msgEditEvento"></span>

                        <form method="POST" id="formEditEvento">

                            <input type="hidden" name="edit_id" id="edit_id">

                            <div class="row mb-3">
                                <label for="edit_title" class="col-sm-2 col-form-label">Título</label>
                                <div class="col-sm-10">
                                    <input type="text" name="edit_title" class="form-control" id="edit_title" placeholder="Titulo do Evento">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="edit_start" class="col-sm-2 col-form-label">Título</label>
                                <div class="col-sm-10">
                                    <input type="datetime-local" name="edit_start" class="form-control" id="edit_start" placeholder="Titulo do Evento">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="edit_end" class="col-sm-2 col-form-label">Título</label>
                                <div class="col-sm-10">
                                    <input type="datetime-local" name="edit_end" class="form-control" id="edit_end" placeholder="Titulo do Evento">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="edit_color" class="col-sm-2 col-form-label">Título</label>
                                <div class="col-sm-10">
                                    <select name="edit_color" class="form-control" id="edit_color">
                                        <option value="">Selecione</option>
                                        <option style="color:#FFD700;" value="#FFD700">Amarelo</option>
                                        <option style="color:#0071c5;" value="#0071c5">Azul Turquesa</option>
                                        <option style="color:#FF4500;" value="#FF4500">Laranja</option>
                                        <option style="color:#884513;" value="#884513">Marrom</option>
                                        <option style="color:#1C1C1C;" value="#1C1C1C">Preto</option>
                                        <option style="color:#436EEE;" value="#436EEE">Royal Blue</option>
                                        <option style="color:#A020F0;" value="#A020F0">Roxo</option>
                                        <option style="color:#40E0D0;" value="#40E0D0">Turquesa</option>
                                        <option style="color:#228822;" value="#228822">Verde</option>
                                        <option style="color:#8B0000;" value="#880000">Vermelho</option>
                                    </select>
                                </div>
                            </div>

                            <button type="button" name="btnViewEvento" class="btn btn-primary" id="btnViewEvento">cancelar</button>

                            <button type="submit" name="btnEditEvento" class="btn btn-warning" id="btnEditEvento">Salvar</button>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Modal Cadastrar -->
    <div class="modal fade" id="cadastrarModal" tabindex="-1" aria-labelledby="cadastrarModalLabel">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="cadastrarModalLabel">Cadastrar Evento</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <span id="msgCadEvento"></span>

                    <form method="POST" id="formCadEvento">

                        <div class="row mb-3">
                            <label for="cad_title" class="col-sm-2 col-form-label">Título</label>
                            <div class="col-sm-10">
                                <input type="text" name="cad_title" class="form-control" id="cad_title" placeholder="Titulo do Evento">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="cad_start" class="col-sm-2 col-form-label">Título</label>
                            <div class="col-sm-10">
                                <input type="datetime-local" name="cad_start" class="form-control" id="cad_start" placeholder="Titulo do Evento">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="cad_end" class="col-sm-2 col-form-label">Título</label>
                            <div class="col-sm-10">
                                <input type="datetime-local" name="cad_end" class="form-control" id="cad_end" placeholder="Titulo do Evento">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="cad_color" class="col-sm-2 col-form-label">Título</label>
                            <div class="col-sm-10">
                                <select name="cad_color" class="form-control" id="cad_color">
                                    <option value="">Selecione</option>
                                    <option style="color:#FFD700;" value="#FFD700">Amarelo</option>
                                    <option style="color:#0071c5;" value="#0071c5">Azul Turquesa</option>
                                    <option style="color:#FF4500;" value="#FF4500">Laranja</option>
                                    <option style="color:#884513;" value="#884513">Marrom</option>
                                    <option style="color:#1C1C1C;" value="#1C1C1C">Preto</option>
                                    <option style="color:#436EEE;" value="#436EEE">Royal Blue</option>
                                    <option style="color:#A020F0;" value="#A020F0">Roxo</option>
                                    <option style="color:#40E0D0;" value="#40E0D0">Turquesa</option>
                                    <option style="color:#228822;" value="#228822">Verde</option>
                                    <option style="color:#8B0000;" value="#880000">Vermelho</option>
                                </select>
                            </div>
                        </div>

                        <button type="submit" name="btncadEvento" class="btn btn-success" id="btncadEvento">Cadastrar</button>

                    </form>

                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src='js/index.global.min.js'></script>
    <script src="js/bootstrap5/index.global.min.js"></script>
    <script src='js/core/locales-all.global.min.js'></script>
    <script src='js/custom.js'></script>

</body>

</html>