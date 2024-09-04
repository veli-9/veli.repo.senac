const salvar_disciplina =
    document.getElementById('btnsalvar');

async function insert() {

    const form = document.getElementById('form_disciplina');
    const formData = new FormData(form_disciplina);
    const opt = {

        method: 'POST',
        body: formData
    }
    const response = fetch('2disciplina.php', opt);

}
salvar_disciplina.addEventListener('click', async () => {
    await insert();
});