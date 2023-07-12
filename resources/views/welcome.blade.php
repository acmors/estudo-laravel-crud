<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
   
    <style>
        * {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
        }
        div {
            align-items: center;
            justify-content: center;
            display: flex;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            background-color: #5F9EA0;
            width: 300px;
            height: 450px;
            border-radius: 8px;
        }

        label {
            font-weight: 600;
            font-size: 20px;
            letter-spacing: 2px;
        }

        form {
            display:flex;
            flex-direction: column;
            color: white;
            text-align: center;
        }

        form input {
            margin-bottom: 5px;
        }

        input {
            text-align: center;
            border: none;
            border-radius: 8px;
            height: 30px;
            width: 280px;
        }

        button {
            border: none;
            border-radius: 8px;
            margin-top: 10px;
            height: 50px;
            cursor: pointer;

            font-weight: 600;
            font-size: 16px;

        }

     </style>   
    <title> Formulário de Cadastro </title>
</head>
<body>
    <div>
        <form action="/cadastrar-candidato" method="POST" >
            @csrf
            <label for="">Nome: </label>
            <input type="text" name="nome_aluno" placeholder="Digite seu nome...">

            <label for="">Telefone: </label>
            <input type="text" name="telefone_aluno" placeholder="Digite seu telefone...">

            <label for="">Idade: </label>
            <input type="text" name="idade_aluno" placeholder="Digite sua idade...">

            <label for="">Curso: </label>
            <input type="text" name="curso_aluno" placeholder="Digite seu curso...">

            <label for="">Turno: </label>
            <input type="text" name="turno_aluno" placeholder="Digite seu turno sendo M ou T...">

            <button type="submit" class="btn btn-primary">Submit</button>
         
        </form>
    </div>

</body>
</html>