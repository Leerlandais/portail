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

?>

<h1>Somewhat Complete List of Countries</h1>
<h2>Things to do 
    <ul>
        <li>Select Display Amount</li>
        <li>Sort by anything</li>
        <li>Select countries by X to Y</li>
        <li>Whatever else I can think of</li>
    </ul> 
</h2>
<!--
<form action="" method="POST">
    <input type="text" name="amount">
    <button type="submit">change</button>
</form>
-->
<form action="" method="POST">
<select name="itemPerPage" id="">
    <option value="10">10</option>
    <option value="20">25</option>
    <option value="50">50</option>
    <option value="100">100</option>
    <option value="all">All</option>
</select>
</form>
<?php

if (isset($pagination)) {
    echo "<p>$pagination</p>"; }  ?>
<table class="countryTable">
    <th class="countryInfo">Name</th>
    <th class="countryInfo">ISO Code</th>
    <th class="countryInfo">Population</th>
    <th class="countryInfo">Area</th>
    <th class="countryInfo">Capital</th>
    <th class="countryInfo">Population of Capital</th>
    <th class="countryInfo">Altitude of Capital</th>
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