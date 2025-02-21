<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa de Satisfação</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
        <h1>Pesquisa de Satisfação</h1>
        <div class="mb-3 alert alert-primary">
            A secretaria de Gestão Tributária e Fiscal <b>(SEGET)</b> trabalha para atender você com qualidade e respeito. Sua opinião nos ajuda a evoluir!
        </div>
        <form action="submit_form.php" method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Nome Completo</label>
                <input 
                    type="text" 
                    class="form-control" 
                    id="name" 
                    name="name"
                    placeholder="Digite seu nome completo" 
                    required
                >
            </div>

            <div class="mb-3">
                <label for="documento" class="form-label">CPF ou CNPJ (Somente os números)</label>
                <input 
                    type="text" 
                    class="form-control" 
                    id="documento" 
                    name="documento"
                    placeholder="Digite seu nome CPF ou CNPJ" 
                    required
                >
            </div>

            <div class="mb-3">
                <label class="form-label">Essa é a sua primeira vez em nossas instalações?</label>
                <input 
                    type="radio" 
                    name="primeira-vez-sim" 
                    id="primeira-vez-no-sim" 
                    value="sim" required
                >
                <label for="primeira-vez-no-sim">Sim</label>
                <input 
                    type="radio" 
                    name="primeira-vez-sim" 
                    id="primeira-vez-no-nao" 
                    value="nao" required
                >
                <label for="primeira-vez-no-nao">Não</label>
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">Serviços Realizados</label>
                <input 
                    type="text" 
                    class="form-control" 
                    id="servicos-realizados" 
                    name="servicos-realizados"
                    placeholder="Digite quais serviços você usou" 
                    required
                >
            </div>

            <div class="mb-3">
                <label class="form-label">Simpatia e cordialidade do atendente:</label>
                <div class="rating">
                    <input type="radio" id="simpatia-e-cordialidade-5" name="simpatia-e-cordialidade" value="5" required><label for="simpatia-e-cordialidade-5">★</label>
                    <input type="radio" id="simpatia-e-cordialidade-4" name="simpatia-e-cordialidade" value="4" required><label for="simpatia-e-cordialidade-4">★</label>
                    <input type="radio" id="simpatia-e-cordialidade-3" name="simpatia-e-cordialidade" value="3" required><label for="simpatia-e-cordialidade-3">★</label>
                    <input type="radio" id="simpatia-e-cordialidade-2" name="simpatia-e-cordialidade" value="2" required><label for="simpatia-e-cordialidade-2">★</label>
                    <input type="radio" id="simpatia-e-cordialidade-1" name="simpatia-e-cordialidade" value="1" required><label for="simpatia-e-cordialidade-1">★</label>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Clareza nas informações</label>
                <div class="rating">
                    <input type="radio" id="clareza-nas-informacoes-5" name="clareza-nas-informacoes" value="5" required><label for="clareza-nas-informacoes-5">★</label>
                    <input type="radio" id="clareza-nas-informacoes-4" name="clareza-nas-informacoes" value="4" required><label for="clareza-nas-informacoes-4">★</label>
                    <input type="radio" id="clareza-nas-informacoes-3" name="clareza-nas-informacoes" value="3" required><label for="clareza-nas-informacoes-3">★</label>
                    <input type="radio" id="clareza-nas-informacoes-2" name="clareza-nas-informacoes" value="2" required><label for="clareza-nas-informacoes-2">★</label>
                    <input type="radio" id="clareza-nas-informacoes-1" name="clareza-nas-informacoes" value="1" required><label for="clareza-nas-informacoes-1">★</label>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Tempo de espera:</label>
                <div class="rating">
                    <input type="radio" id="tempo-de-espera-5" name="tempo-de-espera" value="5" required><label for="tempo-de-espera-5">★</label>
                    <input type="radio" id="tempo-de-espera-4" name="tempo-de-espera" value="4" required><label for="tempo-de-espera-4">★</label>
                    <input type="radio" id="tempo-de-espera-3" name="tempo-de-espera" value="3" required><label for="tempo-de-espera-3">★</label>
                    <input type="radio" id="tempo-de-espera-2" name="tempo-de-espera" value="2" required><label for="tempo-de-espera-2">★</label>
                    <input type="radio" id="tempo-de-espera-1" name="tempo-de-espera" value="1" required><label for="tempo-de-espera-1">★</label>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Resolução da solicitação</label>
                <div class="col">
                    <div class="col-md-6">
                        <input type="radio" id="resolvido-totalmente" name="resolucao-da-solicitacao" value="resolvido-totalmente" required>
                        <label for="resolvido-totalmente">Resolvido totalmente</label>
                    </div>
                    <div class="col-md-6">
                        <input type="radio" id="resolvido-parcialmente" name="resolucao-da-solicitacao" value="resolvido-parcialmente" required>
                        <label for="resolvido-parcialmente">Resolvido parcialmente</label>
                    </div>
                    <div class="col-md-6">
                        <input type="radio" id="nao-resolvido" name="resolucao-da-solicitacao" value="nao-resolvido" required>
                        <label for="nao-resolvido">Não resolvido</label>
                    </div>
                </div>
            </div>


            <div class="mb-3">
                <label for="name" class="form-label">Caso a sua situação não tenha sido resolvida conte-nos o por quê.</label>
                <input 
                    type="text" 
                    class="form-control" 
                    id="descricao-resolucao" 
                    name="descricao-resolucao"
                    placeholder="Digite o porquê sua solicitação não foi resolvida" 
                    required
                >
            </div>

            <div class="mb-3">
                <label class="form-label">Houve Processo?</label>
                <input 
                    type="radio" 
                    name="houve-processo" 
                    id="houve-processo-1" 
                    value="sim" required
                >
                <label for="houve-processo-1">Sim</label>
                <input 
                    type="radio" 
                    name="houve-processo" 
                    id="houve-processo-0" 
                    value="nao" required
                >
                <label for="houve-processo-0">Não</label>
            </div>

            <div class="mb-3">
                <label for="descricao-processo" class="form-label">Em caso de sim, conte-nos quantos dias teve o seu processo.</label>
                <input 
                    type="text" 
                    class="form-control" 
                    id="descricao-processo" 
                    name="descricao-processo"
                    placeholder="Digite quantos dias teve o seu processo" 
                    required
                >
            </div>

            <div class="mb-3">
                <label class="form-label">Resolução do Processo?</label>
                <div class="col">
                    <div class="col-md-6">
                        <input type="radio" name="resolucao-processo" id="rapido" value="rapido" required>
                        <label for="rapido">Rápido</label>
                    </div>
                    <div class="col-md-6">
                        <input type="radio" name="resolucao-processo" id="dentro-do-esperado" value="dentro-do-esperado" required>
                        <label for="dentro-do-esperado">Dentro do esperado</label>
                    </div>
                    <div class="col-md-6">
                        <input type="radio" name="resolucao-processo" id="demorado" value="demorado" required>
                        <label for="demorado">Demorado</label>
                    </div>
                </div>
            </div>


            <!-- <div class="mb-3">
                <label class="form-label">O quanto você indicaria nosso atendimento virtual para outra pessoa?</label>
                <div class="rating">
                    <input type="radio" id="indicaria-atendimento-virtual-10" name="indicaria-atendimento-virtual" value="10" required><label for="indicaria-atendimento-virtual-10">★</label>
                    <input type="radio" id="indicaria-atendimento-virtual-9" name="indicaria-atendimento-virtual" value="9" required><label for="indicaria-atendimento-virtual-9">★</label>
                    <input type="radio" id="indicaria-atendimento-virtual-8" name="indicaria-atendimento-virtual" value="8" required><label for="indicaria-atendimento-virtual-8">★</label>
                    <input type="radio" id="indicaria-atendimento-virtual-7" name="indicaria-atendimento-virtual" value="7" required><label for="indicaria-atendimento-virtual-7">★</label>
                    <input type="radio" id="indicaria-atendimento-virtual-6" name="indicaria-atendimento-virtual" value="6" required><label for="indicaria-atendimento-virtual-6">★</label>
                    <input type="radio" id="indicaria-atendimento-virtual-5" name="indicaria-atendimento-virtual" value="5" required><label for="indicaria-atendimento-virtual-5">★</label>
                    <input type="radio" id="indicaria-atendimento-virtual-4" name="indicaria-atendimento-virtual" value="4" required><label for="indicaria-atendimento-virtual-4">★</label>
                    <input type="radio" id="indicaria-atendimento-virtual-3" name="indicaria-atendimento-virtual" value="3" required><label for="indicaria-atendimento-virtual-3">★</label>
                    <input type="radio" id="indicaria-atendimento-virtual-2" name="indicaria-atendimento-virtual" value="2" required><label for="indicaria-atendimento-virtual-2">★</label>
                    <input type="radio" id="indicaria-atendimento-virtual-1" name="indicaria-atendimento-virtual" value="1" required><label for="indicaria-atendimento-virtual-1">★</label>
                </div>
            </div> -->

            <div class="mb-3">
                <label for="sugestao-duvida-ou-critica" class="form-label">Aqui você pode deixar sua sugestão, dúvida ou crítica. Para que possamos melhorar os serviços prestados.</label>
                <textarea class="form-control" id="sugestao-duvida-ou-critica" name="sugestao-duvida-ou-critica" rows="4"></textarea>
            </div>

            <input type="submit" class="btn btn-primary w-100" value="Enviar">
            <!-- <button type="submit" class="btn btn-primary w-100">Enviar</button> -->
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
