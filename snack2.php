<!-- Snack 2
Creare un array di array. 
Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e 
come valore un array di post associati a quella data.
 Stampare ogni data con i relativi post.
Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z -->
<?php

$posts = [

    '10-01-2019' => [
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
    '10-02-2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15-05-2019' => [
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

/* print_r(array_values( $posts));
 */
$postsValue = array_keys($posts);
/* 
echo "<pre>"; *//* 
var_dump (print_r(array_values( $posts))); */
/* var_dump(array_keys($postsValue));
echo "</pre>"; */

/* for ($i = 0;  $i < count(array_keys($postsValue)); $i++){
    $ValueArray = $postsValue[$i];
} */

$chiavi_messaggi = array_keys($posts);

//faccio il ciclo per trovare le chiavi dell'arrey
for ($i = 0;  $i < count($chiavi_messaggi); $i++){
    $chiave = $chiavi_messaggi[$i];

    $messaggio = $posts[$chiave];

    echo "<span>$i - $chiave </span>";

//faccio il ciclo per trovare i valori nelle delle chiavi
    for ($y = 0; $y < count ($messaggio); $y++){
        $post = $messaggio[$y];


        //cerco i singoli elementi nel mio array
        $title = $post["title"];
        $author = $post["author"];
        $text = $post["text"];
 
      //  var_dump($post); 
       //  var_dump( $messaggio[$y]);

     echo "<p> <h4>$title</h4> <h5>$author</h5> <span>$text</span>  </p>";

    }

  /*   echo $ValueArray;
    for ($i = 0; $i < count($posts[$ValueArray]); $i++){
        $message = $post[$ValueArray][$i];
    }
 */
}




?>