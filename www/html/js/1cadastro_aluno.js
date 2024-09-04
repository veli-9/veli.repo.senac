const salvar_aluno = document.getElementById('btnsalvar');
const acao = document.getElementById('acao');
const mensagem = document.getElementById('mensagem');

async function insert() {

    const form = document.getElementById('form_aluno');
    const formData = new FormData(form_aluno);
    const opt = {

        method: 'POST',
        body: formData
    }
    const response = fetch('1aluno.php', opt);

}
salvar_aluno.addEventListener('click', async () => {
    await insert();
});