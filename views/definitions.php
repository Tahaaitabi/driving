<?php
$definitions = json_decode(file_get_contents("../json/definitions.json"), true)['definitions'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Definitions</title> 
    <link rel="stylesheet" href="../css/definitions.css" media="all">
  </head>
  <body>
    <header>
      <div class="title">
        <h1>Definitions</h1>
      </div>
      <nav class="nav">
        <button class="home"><a href="../index.php"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
            </svg>
          </a></button>
      </nav>
    </header>

    <main>
      <div class="definition">
<?php foreach ($definitions as $def) {
$palabra = $def['palabra'];
$definicion = $def['def'];
$word = $def['word'];
$definition = $def['def-en'];

echo '<div class="wrapper">';
echo '<div class="spanish">';
echo '<div class="title-language">';
echo '<h3 class="palabra">' . $def['palabra'] . '</h3>' . '<img class="flag" src="../assets/svg/flags/4x3/es.svg">' ;
echo '</div>';
echo '<p class="def">' . $def['def'] . '</p>';
echo '</div>';
echo '<div class="english">';
echo '<div class="title-language">';
echo '<h3 class="word">' . $word . '</h3>' . '<img class="flag" src="../assets/svg/flags/4x3/gb.svg">';
echo '</div>';
echo '<p class="def-en">' . $definition . '</p>';
echo '<br>';
echo '</div>';
echo '</div>';

}
?>
      </div>
    </main>
  </body>
</html>
