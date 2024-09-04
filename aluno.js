const salvar = document.getElementById('salvar');
const acao = document.getElementById('acao');
const mensagem = document.getElementById('mensagem');

async function Insert() {

    const form = document.getElementById('form');
    const formData = new FormData(form);
    const opt = {
        method: 'POST',
        body: formData
    };
    mensagem.className = 'alert alert-primary';
    mensagem.innerHTML = 'Fala cabeça de nois tudo, estamos salvando as informações';
    const request = await fetch('/controlealuno.php', opt);
    const response = await request.json();

    if (response.status === true) {
        //Exibimos uma mensagem de alterado ou inserido 
        //com sucesso.
        mensagem.className = 'alert alert-success';
        mensagem.innerHTML = response.msg;
        acao.value = 'e';
        setTimeout(() => {
            mensagem.className = 'alert alert-warning';
            mensagem.innerHTML = ` Todos os campos sinalizado com
                                <span class="text-danger">*</span> são de preenchimento obrigatórios `;
        }, 1000);
        return;
    }

    //Exibimos uma mensagem de restrição, para notificar o 
    //usuário que ele e não a equipe de desenvolvimento
    //esta fazendo caquinha.
    mensagem.className = 'alert alert-danger';
    mensagem.innerHTML = response.msg;

}
async function Update() {

}
salvar.addEventListener('click', async () => {
    if (acao.value == 'c') {
        await Insert();
    } else {
        await Update();
    }
});