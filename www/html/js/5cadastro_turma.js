const salvar_disciplina =
    document.getElementById('btnsalvar');

async function insert() {

    const form = document.getElementById('form_turma');
    const formData = new FormData(form_turma);
    const opt = {

        method: 'POST',
        body: formData
    }
    const response = fetch('5turma.php', opt);

}
salvar_disciplina.addEventListener('click', async () => {
    await insert();
});