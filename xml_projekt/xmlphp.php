<?php
    $data = simplexml_load_file("biljke.xml");
    $zacinis = [];
    $ukrasni = [];
    
    foreach($data->children() as $subject){
        if(isset($subject->z)){
            foreach($subject->z as $data_zacini){
                $zacinis[] = $data_zacini;
            }
        }
        if(isset($subject->u)){
            foreach($subject->u as $data_ukrasne){
                $ukrasni[] = $data_ukrasne;
            }
        }
    } 
    echo "<script>console.log(JSON.parse('" . json_encode($data) . "'));</script>";
?>

<!DOCTYPE html>
<html lang="hr" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="autor" content="Maximilian Pokupec, JMBAG 0236218753"/>
    <title>Moje Biljke</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <header id="header">
        <div class="unutarnji">
            <h1>Moje biljke</h1>
        </div>
    </header>

    <main>
        <div class="unutarnji">

            
            <div class="flex-container">

            <div class="redovi">
            <h1>Zacinsko bilje</h1><br/>
                <div class="stupci">
                    <img src="images/sl1.jpg" style="max-width: 100%; padding: 10px;">
                    <h3><?php echo $data[0]->biljka[0]->zacin[0]->naziv;?></h3>
                </div>
                <div class="stupci">
                    <img src="images/sl2.jpg" style="max-width: 100%; padding: 10px;">
                    <h3><?php echo $data[0]->biljka[0]->zacin[1]->naziv;?></h3>
                </div>
                <div class="stupci">
                    <img src="images/sl3.jpg" style="max-width: 100%; padding: 10px;">
                    <h3><?php echo $data[0]->biljka[0]->zacin[2]->naziv;?></h3>
                </div>
                
                
            
            <div class="redovi">
            <h1>Ukrasno bilje</h1><br/>
                <div class="stupci">
                    <img src="images/sl4.jpg" style="max-width: 100%; padding: 10px;">
                    <h3><?php echo $data[0]->biljka[1]->ukras[0]->naziv;?></h3>
                    <h4><?php echo $data[0]->biljka[1]->ukras[0]->opis;?></h4>
                </div>
                <div class="stupci">
                    <img src="images/sl5.jpg" style="max-width: 100%; padding: 10px;">
                    <h3><?php echo $data[0]->biljka[1]->ukras[1]->naziv;?></h3>
                    <h4><?php echo $data[0]->biljka[1]->ukras[1]->opis;?></h4>
                </div>
                <div class="stupci">
                    <img src="images/sl6.jpg" style="max-width: 100%; padding: 10px;">
                    <h3><?php echo $data[0]->biljka[1]->ukras[2]->naziv;?></h3>
                    <h4><?php echo $data[0]->biljka[1]->ukras[2]->opis;?></h4>
                </div>
        </div>
    </main>

    <footer id="footer">
        <div class="unutarnji">
            <p>© Maximilian Pokupec 2022, JMBAG:0236218753</p>
            <p>Smjer Elektroničko poslovanje</p>
        </div>
    </footer>
</body>

</html>