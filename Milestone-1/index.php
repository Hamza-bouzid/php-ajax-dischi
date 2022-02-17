
<?php 
$database = [
  [
      'title' => 'New Jersey',
      'author' => 'Bon Jovi',
      'year' => 1988,
      'poster' => 'https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg',
      'genre' => 'Rock'
  ],
  [
      'title' => 'Live at Wembley 86',
      'author' => 'Queen',
      'year' => 1992,
      'poster' => 'https://images-na.ssl-images-amazon.com/images/I/71g40mlbinL._SX355_.jpg',
      'genre' => 'Pop'
  ],
  [
      'title' => 'Ten\'s Summoner\'s Tales',
      'author' => 'Sting',
      'year' => 1993,
      'poster' => 'https://images-na.ssl-images-amazon.com/images/I/411BQR6BHRL.jpg',
      'genre' => 'Pop'
  ],
  [
      'title' => 'Steve Gadd band',
      'author' => 'Steve Gadd Band',
      'year' => 2018,
      'poster' => 'https://m.media-amazon.com/images/I/81UtLzBDoEL._SS500_.jpg',
      'genre' => 'Jazz'
  ],
  [
      'title' => 'Brave new World',
      'author' => 'Iron Maiden',
      'year' => 2000,
      'poster' => 'https://upload.wikimedia.org/wikipedia/en/0/03/Iron_Maiden_-_Brave_New_World.jpg',
      'genre' => 'Metal'
  ],
  [
      'title' => 'One more car, one more rider',
      'author' => 'Eric Clapton',
      'year' => 2002,
      'poster' => 'https://images-na.ssl-images-amazon.com/images/I/81MDAIdh78L._SY355_.jpg',
      'genre' => 'Rock'
  ]
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <title>Milestone 1</title>
</head>
<body>
 <header>
    <div class="logo">
      <img src="img/logo-small.svg" alt="Logo" />
    </div>
  </header>

  <main>
  <div class="container">
    <div class="dischi">
      <?php 
      foreach($database as $disco) {
        echo "<div class='disco'>" .
        "<img src='$disco[poster]'/>" .
        "<h3>". $disco[title] . "</h3>" .
        "<h4>". $disco[author] . "</h4>" .
        "<h4>". $disco[year] . "</h4>" .
        "</div>" ;
      };
      
      ?>
    </div>
  </div>
  </main>

  
</body>
</html>