<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Validação de formularios com PHP </title>
</head>
<body>
    <main>
       <div>
           <h2> Validando tipos diversos de campos de formulário </h2>
           <form action="valida.php" method="post">
                 <p> Nome: <input type="text" name="nome"> </p>
                 <p> Senha: <input type="password" name="senha"> </p>
                 <p> Idade: <input type="number" name="idade"> </p>    
                 <p> Telefone: <input type="tel" name="fone"> </p>  
                 <p> E-mail: <input type="email" name="endEmail"> </p>
                 <hr>
                 <h4> Uma forma de organizar melhor o formulário com PHP </h4>
                 <fieldset>
                     <legend>
                         Tipo 'radio' escolha uma opção entre várias - campo "name" é igual em todas as opções
                     </legend>
                     <p>
                      <input type="radio" name="comidaPref" value="Arroz com Feijão e Carne">
                      <label for="comidaPref"> Arroz com Feijão e Carne </label>
                     </p>
                     <p>
                      <input type="radio" name="comidaPref" value="Arroz com Macarrão e Carne">
                      <label for="comidaPref"> Arroz com Macarrão e Carne </label>
                     </p>
                     <p>
                      <input type="radio" name="comidaPref" value="Baião e Carne">
                      <label for="comidaPref"> Baião e Carne </label>
                     </p>
                     <p>
                      <input type="radio" name="comidaPref" value="Baião, Salada e Ovo">
                      <label for="comidaPref"> Baião, Salada e Ovo </label>
                     </p>
                 </fieldset>
                 <fieldset>
                     <legend>
                         Tipo: 'checkbox' - Escolha mais de uma opção - Disciplinas
                     </legend>
                     <p>
                      <input type="checkbox" name="redes">
                      <label for="redes"> Redes de computadores </label>  
                     </p>
                     <p>
                      <input type="checkbox" name="JavaScript">
                      <label for="JavaScript"> Java Script </label>  
                     </p>
                     <p>
                      <input type="checkbox" name="Java">
                      <label for="Java"> Programação em Java </label>  
                     </p>
                     <p>
                      <input type="checkbox" name="Arquitetura">
                      <label for="Arquitetura"> Arquitetura e manutenção de PC </label>  
                     </p>
                 </fieldset>
                 <fieldset>
                     <legend> Em qual carrro gostaria de viajar? </legend>
                     <label for="cars"> Escolha um carro: </label>
                     <select name="cars">
                         <option value="Onix Plus"> Onix Plus </option>
                         <option value="Toro"> Toro </option>
                         <option value="Corola"> Corola </option>
                         <option value="Polo"> Polo </option>
                     </select>
                 </fieldset>
                 <fieldset>
                     <legend> Qual sua nota de satisfação para o curso de Informática? </legend>
                     <label for="nota"> Valores de 0 a 100 </label>
                     <input type="range" min="0" max="100" name="nota">
                 </fieldset>
                 <fieldset>
                     <legend> Quando você deve ganhar presentes? </legend>
                     <label for="data"> Qual a data do seu aniversário? </label>
                     <input type="date" name="data">
                 </fieldset>
                 <fieldset>
                     <legend> Que horas você geralmente dormi? </legend>
                     <label for="nota"> Qual o horario que geralmente vai dormir? </label>
                     <input type="time" name="descanso">
                 </fieldset>
                 <hr>
                 <button type="submit"> Enviar e Mostrar </button>   
           </form>
       </div>
    </main>
</body>
</html>