<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$aluno ["Madu"]["Idade"] = 17;
$aluno ["Madu"]["Nome"] = "Maria Eduarda Moreno dos Santos";
$aluno ["Thau"]["Idade"] = 50;
$aluno ["Thau"]["Nome"] = "Thauane Laíssa de Jesus Vital";

$professor ["James"]["Idade"] = 16;
$professor ["James"]["Nome"] = "Dieiminho Nunes";
$professor ["Fernando"]["Idade"] = 42;
$professor ["Fernando"]["Nome"] = "Fernando de Física";

$senac[0] = $professor;
$senac[1] = $aluno;

print_r($aluno);
print_r($professor);
print_r($senac);
?>

</body>
</html>