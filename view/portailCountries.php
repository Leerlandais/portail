<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body class="countryBody">
<?php
include("../view/inc/header.php");
// if(isset($itemCount)) echo $itemCount;
?>

<h1>Somewhat Complete List of Countries</h1>
<h2>Things to do 
    <ul>
        <li>Sort by anything</li>
        <li>Select countries by X to Y</li>
        <li>Whatever else I can think of</li>
    </ul> 
</h2>

<!-- <a href="?p=countries&hello">hello</a> -->
<?php
/*
  if (isset($_GET['hello'])) {                  NOW I KNOW HOW I'LL DO THE SORT :)
    echo 'that worked';
  }
  */
?>



<?php



   
if (isset($pagination)) {
    echo "<p>$pagination</p>"; }  ?>
    <form action="" method="POST" class="countryCount">
<select name="itemsPerPage" id="">
    <option value="10">10</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="100">100</option>
    <option value="all">All</option>
</select>
<button type="send">Show</button>
</form>
<table class="countryTable">
    <th class="countryInfo"><a href="?p=countries&sort=name">Name</a></th>
    <th class="countryInfo"><a href="?p=countries&sort=iso">ISO Code</a></th>
    <th class="countryInfo"><a href="?p=countries&sort=pop">Population</a></th>
    <th class="countryInfo"><a href="?p=countries&sort=area">Area</a></th>
    <th class="countryInfo"><a href="?p=countries&sort=cap">Capital</a></th>
    <th class="countryInfo"><a href="?p=countries&sort=pop_cap">Population of Capital</a></th>
    <th class="countryInfo"><a href="?p=countries&sort=alt">Altitude of Capital</a></th>
    <th class="countryInfo">Flag</th>
    <?php
        foreach($countries as $country) {
    ?>
        <tr class="countryRow">
            <td class="countryCol"><?= $country['nom']; ?></td>
            <td class="countryCol"><?= $country['iso']; ?></td>
            <td class="countryCol"><?= $country['population'];?></td>
            <td class="countryCol"><?= $country['superficie']." km²";?></td>
            <td class="countryCol"><?= $country['capitale'];?></td>
            <td class="countryCol"><?= $country['popu_cap'];?></td>
            <td class="countryCol"><?= $country['altitude']." m";?></td>
            <td class="countryCol"><img src="images/svg/<?= strtolower($country['iso']); ?>.svg"></td>
        </tr>
    <?php
        }
    ?>
</table>

<script src="scripts/countriesScript.js"></script>
</body>
</html>