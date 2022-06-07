
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Api</title>
</head>
<body>
 <h1>Personajes</h1>
 <style>
     .gridd{
         display: grid;
         grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
         text-align: center;
         
     }
     .dango{
         display:flex;
         flex-direction: column;
         margin: 20px;
     }
 </style>
 <main class="gridd">
     <?php 
     require_once("index.php"); 
     datos();
     ?>
 </main>
</body>
</html>