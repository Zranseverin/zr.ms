<?php

try{
$pdo = new  PDO('mysql:host=localhost;dbname=simplon.ci','root','');
}catch(PDOException  $ex){
$message = "Erreur";
echo  $message  .  ''  .$ex->getMessage();
}
$select = "SELECT * FROM participants";
$ps = $pdo->prepare($select);
$ps->execute();
 
?>
<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scalejkijio=1.0">
    <title>simplon.ci</title>
 
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<body>
    <style >
        
        .text {
  text-align: center;
  margin-top: 20px;
}

.text a {
  display: inline-block;
  padding: 10px 20px;
  background-color: #333;
  color: #fff;
  text-decoration: none;
  border-radius: 5px;
}

.text a:hover {
  background-color: #555;
}

.table {
  width: 100%;
  border-collapse: collapse;
}

.table th,
.table td {
  padding: 8px;
  text-align: left;
}

.table th {
  background-color: #f2f2f2;
}

.table tbody tr:nth-child(even) {
  background-color: #f9f9f9;
}

.table a {
  display: inline-block;
  padding: 6px 12px;
  text-decoration: none;
  background-color: #333;
  color: #fff;
  border-radius: 4px;
}

.table a:hover {
  background-color: #555;
}
.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 20px;
}

.table {
  width: 158%;
  border-collapse: collapse;
}

.table th,
.table td {
  padding: 8px;
  text-align: left;
}

.table th {
  background-color: #7d2ae8;
}

.table tbody tr:nth-child(even) {
  background-color: ;
}
h1 {
  text-align: left;
  margin-top: 40px;
  color: #333;
}
a href{
    text-align: left;
  margin-top: 20px;
}



    </style>

    <div class="container"><br>
         <div class="text"><a href="index.html">Retouner</a></div>


    <h1>Liste Des Darticipants</h1>
         </div>
 
        <div class="col-md-8">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Nom-participant</th>
                    <th>Prenoms-participant</th>
                    <th>Numero-telephone</th>
                    <th>E-mail</th>
                    
                </tr>
                </thead>
                <tbody>
                <?php while ($participants = $ps->fetch()) { ?>
                    <tr>
                        <td><?= $participants['nom'] ?></td>
                        <td><?= $participants['prenoms'] ?></td>
                        <td><?= $participants['numero_telephone'] ?></td>
                        <td><?= $participants['email'] ?></td>
                        <td></td>
                        <td></td>
                    </tr>
                <?php } ?>
                </tbody>
                
                </table>
               
             
                <div class="text"><a href="enregistrer.php">inscription</a></div>
                               
            
        </div>
    </div>
</div>
</body>
</html>