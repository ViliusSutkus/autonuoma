<?php
  $menuLeft = array(
    'contract' => 'Sutartys',
    'service' => 'Paslaugos',
    'customer' => 'Klientai',
    'employee' => 'Darbuotojai',
    'car' => 'Automobiliai',
    'brand' => 'Markės',
    'model' => 'Modeliai'
  );
  $menuRight = array(
    'report' => 'Ataskaitos'
  );
?>

<div id="topMenu">
	<ul class="float-left">
<?php
  foreach ($menuLeft as $key => $val) {
    echo "<li><a href='index.php?module=${key}' title='${val}'";
    if ($module == $key) {
      echo ' class="active"';
    }
    echo ">${val}</a></li>";
  }
?>
	</ul>

	<ul class="float-right">

<?php
  foreach ($menuRight as $key => $val) {
    echo "<li><a href='index.php?module=${key}' title='${val}'";
    if ($module == $key) {
      echo ' class="active"';
    }
    echo ">${val}</a></li>";
  }
?>
	</ul>
</div>
