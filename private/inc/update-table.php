
<div class="container my-3 border border-secondary rounded-3 pt-3">
    <div class="container">
        <div class="table-responsive">
            <table class="table table-bordered table-striped animate__animated animate__fadeIn" data-toggle="table" data-show-columns="true" data-search="true"data-pagination="true" data-checkbox-header="true">
                <thead>
                    <tr>
                        <th class="text-center"  data-sortable="true">Placement</th>
                        <th class="text-center">Up</th>
                        <th class="text-center">Down</th>                        
                        <th class="text-center" data-sortable="true">Title</th>
                        <th class="text-center">Update</th>
                        <th class="text-center">Hide</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $adminPortals = getPortalPlaceForAdmin($db);
                    $count = count($adminPortals);
                    $count--;
                    foreach($adminPortals as $port) { 
                        ?>
                    <tr>
                        <td><?=$port["placement"]?></td>
                        <?php
                            if ($port["placement"] === 0) {
                        ?>
                            <td class="text-center">-</td>
                            <?php
                            }else {
                            ?>
                        <td><a href="?update&dir=up&place=<?=$port["placement"]?>"><img src="images/arrow-up.svg" alt="up arrow"></a></td>
                        <?php } ?>
                        <?php
                            if ($port["placement"] === $count) {
                        ?>
                            <td class="text-center">-</td>
                            <?php
                            }else {
                            ?>
                        <td><a href="?update&dir=down&place=<?=$port["placement"]?>"><img src="images/arrow-down.svg" alt="down arrow"></a></td>
                        <?php } ?>
                        <td><?=$port["title"]?></td>
                        <td><a href="?update&item=<?=$port["id"]?>">update</a></td>
                        <?php 
                            if ($port["visible"] === 1) {
                        ?>
                        <td><a href="?update&id=<?=$port["id"]?>&show=0">hide</a></td>
                        <?php
                            }else {
                        ?>
                        <td><a href="?update&id=<?=$port["id"]?>&show=1">show</a></td>
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
