<?php 
<<<<<<< HEAD
$topics = ["Definitions", "Use of the road", "Speeds and distances", "Manouvers", "Priority at level crossigns and tunnels", "Transporting people and cargo", "Lights and indication in the vehicle", "Signs". "Documentation", "The Driver", "The road users", "Vehicle controls, visibility and comfort", "Safe driving", "The vehicles safety devices", "Journeys, efficient and preventive driving", "Driving accidents", "Vehicle maintainace"];
$temas = file_get_contents('json/topics.json');
=======
$topics = json_decode(file_get_contents("json/topics.json"), true)['topics'];
>>>>>>> refs/remotes/origin/main
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Permiso B - ES Driving Licence</title>
    <link rel="stylesheet" href="css/style.css" media="all">
  </head>
  <body>
    <header>
      <h1>Permiso B - Spanish Driving Licence.</h1>
	  <h3>Theory:</h3>	 
<div class="navigation">
   <button class="home"><a href="index.php">Home</a></button>
</div>
    </header>
    <main>
      <section class="categories">
       <h3 class="categories-title">By topic:</h3>
        <ul class="topics">
<?php
foreach ($topics as $topic) {
	$topicName = $topic['category'];
	$topiclow = strtolower($topicName); 
	$topicLink = str_replace(" ", "-", $topiclow);
    echo '<li class="topic_item"><a href="views/' . $topicLink . '.html">' . htmlspecialchars($topicName) . '</a></li>';
}

?>
        </ul>
      </section>
    </main>
  </body>
</html>
