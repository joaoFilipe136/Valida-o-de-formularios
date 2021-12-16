<?php
  
  $Nome = $_POST['nome'];
  $Senha = $_POST['senha'];
  $Idade = $_POST['idade'];              
  $Telefone = $_POST['fone'];
  $Email = $_POST['endEmail'];

  echo "Nome: ".$Nome."<br>";
  echo "Senha: ".$Senha."<br>";
  echo "Idade: ".$Idade."<br>";
  echo "Telefone: ".$Telefone."<br>";
  echo "E-mail: ".$Email."<br>";

  echo "<hr>";

  $comidaPref = $_POST['comidaPref']; 

  echo "Comida preferida: ".$comidaPref;

  echo "<hr>";

  $disciplinas = '';

  if (isset($_POST['redes'])) {
      
    $disciplinas .= "A disciplina redes de computadores foi selecionada <br>";
  }

  if (isset($_POST['JavaScript'])) {
      
    $disciplinas .= "A disciplina JavaScript foi selecionada <br>";
  }

  if (isset($_POST['Java'])) {
      
    $disciplinas .= "A disciplina Java foi selecionada <br>";
  }

  if (isset($_POST['Arquitetura'])) {
      
    $disciplinas .= "A disciplina Arquitetura e manutenção de PC foi selecionada <br>";
  }

  echo $disciplinas;

  echo "<hr>";

  $Carro = $_POST['cars'];

  echo "Carro: ".$Carro;

  echo "<hr>";

  $Nota = $_POST['nota'];

  echo "Nota de satisfação com o curso: ".$Nota;

  echo "<hr>";

  $dataAni = $_POST['data'];

  echo "Data de aniversário: ".$dataAni;

  echo "<hr>";

  $time = $_POST['descanso'];

  echo "Horario que vai dormir: ".$time;
  echo "<hr>";