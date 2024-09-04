async function salvar() {
    //busca o formulário pelo id no arquivo html
    const form = document.getElementById("form_cursos");
    //lança uma mensagem de erro caso não seja encontrado o formulário
    if (!form) {
        throw new Error("Formulário não encontrado.");
    }
    //atribui chave/valor para os dados selecionados nos formulários 
    const formData = new FormData(form)
    //configura as opções de envio
    const options = {
        //determina o método de envio como POST
        method: "POST",
        //
        headers: new Headers({
            'Accept': 'application/json',
        }),
        body: formData 
    };
    //envia uma requisição fetch para o destino
    try {
        const response = await fetch('',options);

        return await response.json().then(data=>console.log(data))

    } catch (error) {
        throw new Error(error.message);
    }
};

addEventListener ('click', async() => {
    const dados = await salvar()





})
