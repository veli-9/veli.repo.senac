//cria a constante salvar_aluno, que vai receber a ID do botão btnsalvar
const salvar_aluno =
    document.getElementById('btnsalvar');
//cria a função assíncrona de insert (inserção)
async function insert() {
    //cria a constante form que recebe os valores do formulário de ID aluno
    const form = document.getElementById('aluno1');
    //cria a constante formData que recebe os campos dos dados de formulário do objeto form aluno
    const formData = new FormData(aluno1);
    //cria a constante opt (options)
    const opt = {
        //seleciona o método de requisição POST
        method: 'POST',
        //acessa o body do arquivo html que recebe o valor da constante formData, que está recebendo os campos de formulário do form de id aluno
        //convertendo os campos e respostas em pares de chaves/valores
        body: formData
    }
    //cria a constante resposta que, por fetch que insere no caminho informado
    const response = fetch('1aluno.php', opt);
}
salvar_aluno.addEventListener('click', async () => {
    await insert();

});