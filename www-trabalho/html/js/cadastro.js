const salvar = document.getElementById('btncadastrarusuario');

async function Insert() {
    const form = document.getElementById('form');
    const formData = new FormData(form);
    const opt = {
        method: 'POST',
        body: formData
    };
    const response = await fetch('/insert', opt);
    const json = await response.json();
    if (json.status != true) {
        alert('Verique os dados digitados e tente novamente!');
        return;
    }
    alert('Disciplina cadastrada com sucesso!');
    return;
}
salvar.addEventListener('click', async () => {
    await Insert();
});