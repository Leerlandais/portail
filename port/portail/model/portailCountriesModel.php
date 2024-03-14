<?php

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

function getPaginationInformations(PDO $db, int $currentPage, int $nbPerPage)
{
    $offset = ($currentPage - 1) * $nbPerPage;
    $sql = "SELECT * FROM `portail_countries` ORDER BY `id` ASC LIMIT $offset,$nbPerPage";
    $query = $db->query($sql);
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    $query->closeCursor();
    return $result;
}

function paginationModel(string $url,                                           // merci MPitz, ce fonction est génial (j'ai quand même le changer à ma sauce (mais je n'arrive pas à faire sans le >>> pour dernier page))
                        string $getName,
                        int $nbTotalItem, 
                        int $currentPage=1,
                        int $nbByPage=50 
                        )
{
    
    if($nbTotalItem===0) return null;
    
    $sortie="";
    
    $nbPage = (int) ceil($nbTotalItem/$nbByPage);
    if($nbPage<2) return null;

    if($currentPage===1){
        $sortie.= "";
    }elseif ($currentPage===2) {
        $sortie.= "<a href='$url?p=countries&pg=1"."'><<</a> <a href='$url?p=countries&$getName=".($currentPage-1)."'><</a>";
    }else{
        $sortie.= "<a href='$url?p=countries&pg=1'><<</a> <a href='$url?p=countries&$getName=".($currentPage-1)."'><</a>";
    }

    for($i=1;$i<=$nbPage;$i++)
    {
        
        if($i===$currentPage) $sortie.= " $i ";
        else if($i===1) $sortie.= " <a href='$url?p=countries'>$i</a> ";
        else $sortie.= " <a href='$url?p=countries&$getName=$i'>$i</a> ";
    }

    $sortie.= $currentPage === $nbPage ? "> >>" : "<a href='$url?p=countries&$getName=".($currentPage+1)."'>></a> <a href='$url?p=countries&$getName=$nbPage'>>></a>";

    return $sortie;
}