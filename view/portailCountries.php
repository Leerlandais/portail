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
        <li>Add Flags</li>
        <li>Select Display Amount</li>
        <li>Sort by anything</li>
        <li>Select countries by X to Y</li>
        <li>Whatever else I can think of</li>
    </ul> 
</h2>

<table class="countryTable">
    <th class="countryInfo">Name</th>
    <th class="countryInfo">ISO Code</th>
    <th class="countryInfo">Population</th>
    <th class="countryInfo">Area</th>
    <th class="countryInfo">Capital</th>
    <th class="countryInfo">Population of Capital</th>
    <th class="countryInfo">Altitude of Capital</th>
    <th class="countryInfo">Flag (not yet included)</th>
    <?php
        foreach($countries as $country) {
    ?>
        <tr class="countryRow">
            <td class="countryCol"><?php echo $country['nom']; ?></td>
            <td class="countryCol"><?php echo $country['iso']; ?></td>
            <td class="countryCol"><?= $country['population'];?></td>
            <td class="countryCol"><?= $country['superficie'];?></td>
            <td class="countryCol"><?= $country['capitale'];?></td>
            <td class="countryCol"><?= $country['popu_cap'];?></td>
            <td class="countryCol"><?= $country['altitude'];?></td>
            <td class="countryCol">Flag Coming</td>
        </tr>
    <?php
        }
    ?>
</table>

<script src="scripts/countriesScript.js"></script>
</body>
</html>