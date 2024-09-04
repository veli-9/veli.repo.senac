const salvar_empresa =
    document.getElementById('btnsalvar');

async function insert() {

    const form = document.getElementById('form_empresa');
    const formData = new FormData(form_empresa);
    const opt = {

        method: 'POST',
        body: formData
    }
    const response = fetch('3empresa.php', opt);

}
salvar_empresa.addEventListener('click', async () => {
    await insert();
});