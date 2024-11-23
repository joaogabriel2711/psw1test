<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <div class="cabecalho">

    <div id="botoes">
        <nav>
            <ul>
                <li class="ativo"><a href="#home">Início</a></li>
                <li class="desativo"><a href="#home">Perfil</a></li>
                <li class="desativo"><a href="#news">Notícias</a></li>
                <li class="desativo"><a href="#contact">Contato</a></li>
                <li class="desativo"><a href="#about">Sobre</a></li>
            </ul>
        </nav>

        <div class="meio">
            <div id="formulario">
                <div id="cabeca-formulario">
                    
                <form>
                    <label for="nome_completo">Digite seu nome: </label>
                    <input type="text" name="nome" id="idnome" placeholder="Ex: Joana">


                    <label for="nascimento">Insira sua data de nascimento: </label>
                    <input type="date" name="nascimento" id="idnascimento" max="<?=date('Y')?>-<?=date('m')?>-<?=date('d')?>"
                    title="Selecione uma data que seja antes de <?=date('d')?>/<?=date('m')?>/<?=date('Y')?>" 
                    value="<?=date('Y')?>-<?=date('m')?>-<?=date('d')?>">

                    <label for="genero">Qual seu Gênero? </label>
                    <select name="genero" id="idgenero">
                        <option value="masculino">Masculino</option>
                        <option value="feminino">Feminino</option>
                    </select>

            <label for="telefone">Telefone: </label>
            <input type="tel" name="telefone" id="idtelefone" placeholder=" Ex: 77999999999">
            <label for="numero">Numero casa: </label>
            <input type="number" name="numero" id="idnumero" placeholder="Ex: 10">
            <label for="bairro">Bairro: </label>
            <input type="text" name="bairro" id="idbairro" placeholder="Ex: Paraíso">
            <label for="rua">Rua: </label>
            <input type="text" name="rua" id="idrua" placeholder="Ex: Rua Germinio Augusto">
            <label for="email">E-mail:</label>
            <input type="email" name="email" id="idemail" placeholder="Ex: xxxxxx@gmail.com">
            <label for="CEP">CEP:</label>
            <input type="text" name="CEP" id="CEP" required pattern="\d{5}-\d{3}" placeholder="xxxxx-xxx">
            <label for="cpf"> CPF: </label>
            <input type="text" name="cpf" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" placeholder="xxx.xxx.xxx-xx" title="Digite um CPF no formato: xxx.xxx.xxx-xx">
            <label for="senha"> nova senha: </label>

            <input type="password" name="senha" id="idsenha" placeholder="Ex: xxxx1234">
            <div id="cor">
            </div>
                    

                    <div id="alinhamento-de-botoes">
                        <input type="submit" value="Concluir">
                        <input type="reset" value="Reiniciar">
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <div class="rodape">
        
        <div id="termo-logo">
            <div class="logo">
            
            </div>
            <div id="termo">
                <p>&copy; 2024 - Todos os direitos reservados a João Gabriel 2AII</p>
            </div>
            
        </div>   
    </div>
</body>
</html>