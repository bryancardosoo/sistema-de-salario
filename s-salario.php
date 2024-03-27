<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistema de salário - PW</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="style.css">
</head>
<body>
  <section>
    <h1>Sistema de salário</h1>
    <div>
      <form method="post">
        <label for="name">Nome</label><br />
        <input type="text" name="name" /><br />
        <br />
        <input type="number" step="0.01" name="week1" placeholder="Valor semana 1" />
        <input type="number" step="0.01" name="week2" placeholder="Valor semana 2" />
        <br />
        <input type="number" step="0.01" name="week3" placeholder="Valor semana 3" />
        <input type="number" step="0.01" name="week4" placeholder="Valor semana 4" /><br />
        <br />
        <input type="submit" name="submit" value="Validar" id="submit" />
      </form>
    </div>
    <div id="message">
      