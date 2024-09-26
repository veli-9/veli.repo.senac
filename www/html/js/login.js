const login = document.getElementById('btnlogin')

async function Login() {
    const form = document.getElementById('form_login');
    const formData = new FormData(form);
    const opt = {
        method: 'POST',
        body: formData
};
const response = await fetch('/autenticacao', opt);

if (!response.ok) {
    const errorText = await response.text(); // Leia a resposta como texto
    console.error('Erro:', errorText);
    alert('Verique os dados digitados e tente novamente!');
    return;
}
const json = await response.json()
    if (json.status != true) {
        alert('Erro');
        return;
    }
    alert('Usuário logado com sucesso!');
    return;
}
login.addEventListener('click', async () => {
    await Login();
});