<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Clientes</title>
    <link rel="stylesheet" href="estilo.css">

</head>

<body>
    <h1 id="cad_clientes" class="clientes"> Cadastro de Clientes</h1>
    <br>
    <hr>
    <h2>Dados Pessoais</h2>
    <form name="form" id="form">
        <label for="nome"> Nome: </label><br>
        <input type="text" id="nome" name="nome" placeholder="Digite seu nome" size="50px" required />
        <br>
        <label for="sobrenome">Sobrenome: </label><br>
        <input type="text" id="sobrenome" name="sobrenome" placeholder="Digite o sobrenome" size="50px" required />
        <br>
        <label for="cpf">CPF: </label>
        <input type="text" id="cpf" name="cpf" placeholder="Digite aqui o CPF" size="18px" />
        <label for="rg">RG: </label>
        <input type="text" id="rg" name="rg" placeholder="Digite aqui o RG" size=15px>
        <br>
        <label for="data_nascimento">Data de Nascimento: </label>
        <input type="date" id="data_nascimento" name="data_nascimento" placeholder="Digite aqui a data de nascimento" required>
        <br>
        <label for="nome_pai">Nome do Pai: </label>
        <input type="text" id="nome_pai" name="nome_pai" placeholder="Digite aqui o nome do seu pai" size="30px" required />
        <br>
        <label for="nome_mae">Nome da Mãe: </label>
        <input type="text" id="nome_mae" name="nome_mae" placeholder="Digite aqui o nome da sua mãe" size="30px" required />
        <br>
        <label for="renda">Renda mensal: </label>
        <input type="number" id="renda" name="renda" placeholder="Digite aqui a sua renda" required />
        <br>
        <label for="estadocivil">Estado Civil: </label>
        <select id="estadocivil" name="estadocivil" required>
            <option value="">Selecione aqui uma opção</option>
            <option value="solteiro">Solteiro</option>
            <option value="casado">Casado</option>
            <option value="divorciado">Divorciado</option>
            <option value="viuvo">Viúvo</option>
        </select>
        <br>
        <br>
        <br>
        <hr>
        <h2>Dados de Endereço</h2>
        <label for="cep">CEP:</label>
        <input type="number" id="cep" name="cep" placeholder="Digite aqui o seu CEP" required/>
        <br>
        <label for="logradouro">&nbsp;Logradouro:</label>
        <input type="text" id="logradouro" name="logradouro" placeholder="Digite aqui seu logradouro"required />
        <label for="bairro">Nome do bairro:</label>
        <input type="text" id="bairro" name="bairro" placeholder="Digite aqui seu bairro" />
        <br>
        <label for="numerocasa">Número da casa:</label>
        <input type="number" id="numerocasa" name="numerocasa" placeholder="Número da casa"/>
        <label for="cidade">&nbsp;Cidade:</label>
        <input type="text" id="cidade" name="cidade" placeholder="Digite aqui sua cidade" />
        <label for="uf">&nbsp;Unidade Federativa:</label>
        <select id="uf" name="uf" required>
            <option value="">Selecione aqui um Estado</option>
            <option value="AC">Acre</option>
            <option value="AL">Alagoas</option>
            <option value="AP">Amapá</option>
            <option value="AM">Amazonas</option>
            <option value="BA">Bahia</option>
            <option value="CE">Ceará</option>
            <option value="DF">Distrito Federal</option>
            <option value="ES">Espírito Santo</option>
            <option value="GO">Goiás</option>
            <option value="MA">Maranhão</option>
            <option value="MT">Mato Grosso</option>
            <option value="MS">Mato Grosso do Sul</option>
            <option value="MG">Minas Gerais</option>
            <option value="PA">Pará</option>
            <option value="PB">Paraíba</option>
            <option value="PR">Paraná</option>
            <option value="PE">Pernambuco</option>
            <option value="PI">Piauí</option>
            <option value="RJ">Rio de Janeiro</option>
            <option value="RN">Rio Grande do Norte</option>
            <option value="RS">Rio Grande do Sul</option>
            <option value="RO">Rondônia</option>
            <option value="RR">Roraima</option>
            <option value="SC">Santa Catarina</option>
            <option value="SP">São Paulo</option>
            <option value="SE">Sergipe</option>
            <option value="TO">Tocantins</option>        
        </select>
        <label for="country">País:</label>
        <select id="country" name="country" required>
            <option value="">Selecione um país</option>
            <option value="bra">Brasil</option>
            <option value="arg">Argentina</option>
            <option value="uru">Uruguai</option>
            <option value="bol">Bolívia</option>
    </form>
    <script src="/js/index.js"></script>
</body>

</html>