<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculo</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script language="javascript" src="./script.js"></script>
    
</head>
<body>
    <form method="post" action="formulario.php">

    <fieldset id="nome"><legend>Identificação do Candidato</legend>
        <p><label for="cnome">Nome Completo:</label><input type="text" name="tnome" id="cnome" size="35" placeholder="Nome Completo..."/></p>
        <p><label for="ccargo">Cargo Pretendido:</label><input type="text" name="tcargo" id="ccargo" size="20" placeholder="Cargo..."/></p>
        <p><label for="cmail">E-mail:</label><input type="e-mail" name="tmail" id="cmail" size="25" placeholder="E-mail..."/></p> 
    </fieldset>
    <fieldset id="sexo"><legend>Sexo:</legend>
            <input type="radio" name="tsexo" id="cmasc" value="Masculino"/><label for="cmasc">Masculino</label>
                <input type="radio" name="tsexo" id="cfem" value="Feminino"/><label for="cfem">Feminino</label>
                    <p><label for="cdata">Data de Nascimento:</label><input type="date" name="tdata" id="cdata"></p>
    </fieldset>

    <fieldset id="endereco"><legend>Endereço do Candidato</legend>
        <p><label for="crua">Logradouro:</label><input type="text" name="trua" id="crua" size="35" placeholder="Rua, Av, Travessa..."/></p></p>
            <p><label for="cnum">Número:</label><input type="number" name="tnum" id="cnum" min="0" max="9999" placeholder="Nº..."/></p>
                <p><label for="cestado">Estado:</label><input type="text" name="testado" id="cestado" size="15" placeholder="Estado..."></p>
                    <p><label for="ccity">Cidade:</label><input type="text" name="tcity" id="ccity" size="10" placeholder="Cidade..."/></p>
    </fieldset>
    
    <fieldset id="info"><legend>Mais Informações</legend>
        <p><label for="cformacao">Formação:</label>

        <select name="tformacao" id="cformacao">
                <option>--Selecione--</option>
                <option>Ensino Fundamental</option>
                <option>Ensino Médio</option>
                <option>Graduação</option>
                <option>Pós Graduação</option>
            </select></p>
        <label for="carea">Área de Formação:</label>
            <select name="tarea" id="carea">
                <option>--Selecione--</option>
                <option>Desenvolvimento de Sistemas</option>
                <option>TI - Redes</option>
                <option>Adminstrativo</option>
                <option>Comercial - Vendas</option>
                <option>Relacionamento com cliente</option>
                <option>Gestão Financeira</option>
                <option>RH</option>
                <option>Análise de Dados</option>
            </select>   
    </fieldset>
  
    <fieldset id="exp" info="exp"><legend>Experiência:</legend>
    <div class="card-body" id="div-experiencia">
        <button class="btn btn-sm right" id="btn-adicionar-experiencia" title="Adicionar experiência">Adicionar experiência</button>
    </div>
    </fieldset>
 
    <fieldset id="msg"><legend>-------------------------------------------------------------------------------------------------------------------</legend>   
        <p><label for="cmsg">Fale mais sobre você:</label>
        <textarea name="tmsg" id="cmsg" cols="45" rows="5" placeholder="Escreva aqui um resumo sobre sua competências, habilidades e pontos fortes..."></textarea></p> 
    </fieldset>

    <input id="enviar" type="submit" value="Enviar"/>
    <input id="limpar" type="reset" value="Limpar">     
    
    </form>
</body>
</html>