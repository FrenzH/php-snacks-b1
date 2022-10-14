<?php

/* Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60
Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) 
che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
Snack 3
Creare un array di array. 
Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati 
a quella data. Stampare ogni data con i relativi post.
Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z
Snack 4
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. 
Ogni punto un nuovo paragrafo.
Snack 5
Creare un array contenente qualche alunno di un’ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Stampare Nome, Cognome e la media dei voti di ogni alunno.
*/

?>

<?php

// SNACK 1

$games=[
    ["Home-Side-Team"=>"Los Angeles Lakers",
     "Out-Side-Team"=>"Detroit Pistons",
     "Home-Score"=>"90",
     "Out-Side-Score"=>"87"
     ],
     ["Home-Side-Team"=>"Miami Heat",
     "Out-Side-Team"=>"Dallas Mavericks",
     "Home-Score"=>"96",
     "Out-Side-Score"=>"106"
     ],
     ["Home-Side-Team"=>"Boston Celtics",
     "Out-Side-Team"=>"Los Angeles Clippers",
     "Home-Score"=>"103",
     "Out-Side-Score"=>"82"
     ],
     ["Home-Side-Team"=>"Charlotte Hornets",
     "Out-Side-Team"=>"Oklahoma City Thunder",
     "Home-Score"=>"92",
     "Out-Side-Score"=>"107"
     ],
     ["Home-Side-Team"=>"Denver Nuggets",
     "Out-Side-Team"=>"Milwaukee Bucks",
     "Home-Score"=>"102",
     "Out-Side-Score"=>"117"
     ],
];

?>

<div>
    <h1>
        SNACK 1
    </h1>
</div>

<?php

foreach($games as $singleGame){
?>
<div>
    <ul>
        <li><?= $singleGame["Home-Side-Team"]?> - <?=$singleGame['Out-Side-Team']?> | 
            <?=$singleGame["Home-Score"]?> - <?=$singleGame["Out-Side-Score"]?>
        </li>
    </ul>
</div>


<?php

};

?>

<?php

// SNACK 2 

$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];

?>

<div>
    <h1>
        SNACK 2
    </h1>
</div>

<?php

if(strlen($name) > 3 && filter_var($mail, FILTER_VALIDATE_EMAIL)
   && filter_var($age,FILTER_VALIDATE_INT) ){
    echo '<p>' . 'accesso confermato' . '</p>';
}

else{
    echo '<p>' . 'accesso negato' . '</p>';
}

?>


<?php

// SNACK 3

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];

?>

<div>
    <h1>
        SNACK 3
    </h1>
</div>

<?php




//$postsKey=array_keys($posts);

foreach($posts as $key=>$value){

?>

<div>
    <h2><?= $key ?></h2>
</div>  

 <?php



   

   
     
      
        foreach($value as $data){
         
        
        
        
    
        
?>


    
    <ul>
        <li><?= $data['title']?></li>
        <li><?= $data['author']?></li>
        <li><?= $data['text']?></li>
    </ul>












<?php
        }
    }

?>