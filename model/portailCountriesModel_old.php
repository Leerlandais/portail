<?php

/*
function getCountries(PDO $db): array {
    $sql = "SELECT * FROM portail_countries ORDER BY id ASC"; 
    $stmt = $db->prepare($sql);
    try {
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }catch (PDOException $e){
        error_log("Error getting messages: " . $e->getMessage());
        return false;
    }
    return [];
}


function getCountriesByAmount(PDO $db, $numPerPage) {
    $sql = "SELECT * FROM portail_countries ORDER BY id ASC LIMIT $numPerPage"; 
    $stmt = $db->prepare($sql);
    try {
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }catch (PDOException $e){
        error_log("Error getting messages: " . $e->getMessage());
        return false;
    }
    return [];
}
*/

function countCountries(PDO $db): array {
    $sql = "SELECT id FROM portail_countries"; 
    $stmt = $db->prepare($sql);
    try {
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }catch (PDOException $e){
        error_log("Error getting count: " . $e->getMessage());
        return false;
    }
}

function getCountries(PDO $db, int $currentPage, int $nbPerPage=25, string $sortby="id")
{
    $offset = ($currentPage - 1) * $nbPerPage;
    $sql = "SELECT * FROM `portail_countries` ORDER BY $sortby ASC LIMIT $offset,$nbPerPage";
    $query = $db->query($sql);
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    $query->closeCursor();
    return $result;
}


/*
function getCountries(PDO $db, int $currentPage, int $nbPerPage=25, string $sortBy="id")
{
    $offset = ($currentPage - 1) * $nbPerPage;
    $query = $db->prepare("SELECT * FROM `portail_countries` ORDER BY ? ASC LIMIT ?, ?");
    $query->bindParam(1, $sortBy, PDO::PARAM_STR);
    $query->bindParam(2, $nbPerPage, PDO::PARAM_INT);
    $query->bindParam(3, $offset, PDO::PARAM_INT);
    $result = $query->execute();
    return $result;


}

*/
/*
function getCountries(PDO $db, int $currentPage, int $nbPerPage=25, string $sortBy="id")
{
    $offset = ($currentPage - 1) * $nbPerPage;
    $sql = "SELECT * FROM `portail_countries` ORDER BY :sort ASC LIMIT :offs, :num";
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':sort', $sortBy);
    $stmt->bindValue(':offs', $offset);
    $stmt->bindValue(':num', $nbPerPage);
    try {

        $stmt->execute();
        return true;
    } catch (PDOException $e) {

        error_log("Error adding message: " . $e->getMessage());
        return false;
    }
}


/*
function getPaginationInformations(PDO $db, int $currentPage, int $nbPerPage, string $sortby="id")
{   
$offset = ($currentPage - 1) * $nbPerPage;
$sql = "SELECT * FROM `portail_countries` ORDER BY $sortby ASC LIMIT $offset,$nbPerPage";

    $query = $db->query($sql);
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    $query->closeCursor();
    return $result;
}
*/
function paginationModel(string $url,                                                                               // need to rewrite this !!!!!!!!!!!!!!!!!!
                        string $getName,
                        int $nbTotalItem, 
                        int $currentPage=1,
                        string $sortBy="id",
                        int $nbByPage = 10 
                        )
{
    
    if($nbTotalItem===0) return null;
    
    $sortie="";
    
    $nbPage = (int) ceil($nbTotalItem/$nbByPage);
    if($nbPage<2) return null;

    if($currentPage===1){
        $sortie.= "";
    }elseif ($currentPage===2) {
        $sortie.= "<a href='$url?p=countries&$getName=1&sort=$sortBy&itemPer=$nbByPage"."'><<</a> <a href='$url?p=countries&$getName=".($currentPage-1)."&sort=$sortBy&itemPer=$nbByPage'><</a>";
    }else{
        $sortie.= "<a href='$url?p=countries&$getName=1&sort=$sortBy&itemPer=$nbByPage'><<</a> <a href='$url?p=countries&$getName=".($currentPage-1)."&sort=$sortBy&itemPer=$nbByPage'><</a>";
    }

    for($i=1;$i<=$nbPage;$i++)
    {
        
        if($i===$currentPage) $sortie.= " $i ";
        else if($i===1) $sortie.= " <a href='$url?p=countries&$getName=$i&sort=$sortBy&itemPer=$nbByPage'>$i</a> ";
        else $sortie.= " <a href='$url?p=countries&$getName=$i&sort=$sortBy&itemPer=$nbByPage'>$i</a> ";
    }

    $sortie.= $currentPage === $nbPage ? "" : "<a href='$url?p=countries&$getName=".($currentPage+1)."&sort=$sortBy&itemPer=$nbByPage'>></a> <a href='$url?p=countries&$getName=$nbPage&sort=$sortBy&itemPer=$nbByPage'>>></a>";

    return $sortie;
}