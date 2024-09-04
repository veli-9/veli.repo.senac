const calc = document.getElementById("btncalcular");

async function calcular() {
    // Seleciona o formulário no documento HTML usando o seletor de ID
    const form = document.querySelector("#form");
    // Verifica se o formulário foi encontrado
    if (!form) {
        // Lança um erro se o formulário não foi encontrado
        throw new Error("Formulário não encontrado.");
    }
    // Cria um objeto FormData com os dados do formulário selecionado
    const formData = new FormData(form);
    // Define as opções para a requisição fetch
    const options = {
        method: "POST", // Define o método HTTP como POST
        headers: new Headers({
            'Accept': 'application/json', // Define o cabeçalho de aceitação para JSON
            // Adicione outros cabeçalhos necessários aqui
        }),
        body: formData // Define o corpo da requisição como os dados do formulário
    };
    try {
        // Envia uma requisição fetch para o servidor com as opções especificadas
        const response = await fetch('calculadora.php', options);

        // Converte a resposta para JSON e retorna
        return await response.json();
    } catch (error) {
        // Lança um erro se houver problemas na requisição fetch
        throw new Error(error.message); // Propaga o erro para ser tratado por quem chamou a função
    }
}














async function mostrar_resultado(resultado) {
    document.getElementById('resultado').value = resultado.resultado;
}
calc.addEventListener('click', async () => {
    //Seleciona os dados do formulario em envia 
    //Para o arquivo PHP realizar o calculo
    const resposta = await calcular();
    //Exibirá o resultado no front-end
    await mostrar_resultado(resposta);
});