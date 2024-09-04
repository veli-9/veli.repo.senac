<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cursos</title>
    <link rel="stylesheet" href="estilo_curso.css">
</head>

<body>
    <h1>Cadastro de Cursos</h1>
    <hr>
    <form id="form_cursos">
        <label for="nome_do_curso">Nome do Curso: </label><br>
        <input type="text" id="nome_do_curso" name="nome_do_curso" placeholder="Insira o nome do curso" required />
        <br>
        <br>
        <label for="valor_mensalidade">Mensalidade: </label><br>
        <input type="text" id="valor_mensalidade" name="valor_mensalidade" placeholder="Valor da mensalidade" required />
        <br>
        <br>
        <label for="turno">Turno: </label><br>
        <select id="turno" name="turno">
            <option value="">Selecione o turno</option>
            <option value="">Matutino</option>
            <option value="">Vespertino</option>
            <option value="">Noturno</option>
        </select>
    </form>
    <br>
    <br>
    <button type="submit">Gravar</button>
</body>

<script> </script>
</html>