
<div class="container my-3 border border-secondary rounded-3 pt-3">
    <div class="container">
    <div class="table-responsive">
            <table class="table table-bordered table-striped animate__animated animate__fadeIn" data-toggle="table" data-show-columns="true" data-search="true"data-pagination="true" data-checkbox-header="true">
                <thead>
                    <tr>
                        <th class="text-center" data-sortable="true">Date</th>                        
                        <th class="text-center">Log</th>
                        <th class="text-center">Update</th>
                        <th class="text-center">Hide</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
$getDevLogs   = getAllDevLogsForAdmin($db);
                    
                    foreach($getDevLogs as $log) { 
                        ?>
                    <tr>
                    <td><?=$log["date"]?></td>
                        <td><?=$log["log"]?></td>
                        <td><a href="?updateLog&log=<?=$log["id"]?>">update</a></td>
                        <?php 
                            if ($log["visible"] === 1) {
                        ?>
                        <td><a href="?devlog&updateLog&id=<?=$log["id"]?>&show=0">hide</a></td>
                        <?php
                            }else {
                        ?>
                        <td><a href="?devlog&updateLog&id=<?=$log["id"]?>&show=1">show</a></td>
                        <?php
                        }
                        ?>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>                      
            </table>
        </div>
    </div>
</div>

<?php
// var_dump($getDevLogs);
?>