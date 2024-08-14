const salvar_disciplina =
    document.getElementById('btnsalvar');

async function insert() {

    const form = document.getElementById('form_empresa');
    const formData = new FormData(form_disciplina);
    const opt = {

        method: 'POST',
        body: formData
    }
    const response = fetch('3empresa.php', opt);

}
salvar_disciplina.addEventListener('click', async () => {
    await insert();
});