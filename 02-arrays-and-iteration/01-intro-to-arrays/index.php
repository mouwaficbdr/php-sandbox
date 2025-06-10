<?php 
  $names = array('Jack', 'John', 'Jill');
  

function inspect($value) {
  echo '<pre>';
  var_dump($value);
  echo '</pre>';
}

$names[3] = "Mouwafic";
echo "<h2>Before</h2>";
inspect($names);

unset($names[3]);
echo "<h2>After</h2>";
inspect($names);