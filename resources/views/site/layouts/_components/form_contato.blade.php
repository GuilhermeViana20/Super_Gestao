{{ $slot }}

<form class="row bg-light p-3" action="{{ route('site.contato') }}" method="POST">
    @csrf
    
    <legend class="pb-3 text-center rounded">Preencha o formulário</legend>

    <div class="col-md-6 mb-3">
        <label for="nome" class="form-label">Nome Completo</label>
        <input name="nome" type="text" class="form-control" id="nome" placeholder="Seu Nome">
    </div>

    <div class="col-md-6 mb-3">
        <label for="telefone" class="form-label">Telefone / WhatsApp</label>
        <input name="telefone" type="text" class="form-control" id="telefone" placeholder="Seu Telefone">
    </div>
    
    <div class="col-md-12 mb-3">
        <label for="email" class="form-label">E-mail</label>
        <input name="email" type="email" class="form-control" id="email" placeholder="Seu E-mail">
    </div>
    
    <div class="col-md-12 mb-3">
        <label for="nome" class="form-label">Qual o motivo do contato?</label>
        <select name="motivo_contato" class="form-select" aria-label="Default select example">
            <option selected disabled>Selecione o motivo</option>
            <option value="1">Dúvida</option>
            <option value="2">Elogio</option>
            <option value="3">Reclamação</option>
        </select>
    </div>
    
    <div class="col-md-12 mb-3">
        <label for="mensagem" class="form-label">Sua Mensagem</label>
        <textarea name="mensagem" class="form-control" placeholder="Preencha aqui a sua mensagem" id="mensagem" style="height: 100px"></textarea>
    </div>

    <div class="col-md-12">
        <button type="submit" class="col-12 btn btn-purple">Enviar</button>
    </div>
    
</form>