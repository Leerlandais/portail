
<div class="container my-3 border border-secondary rounded-3 pt-3">
    <div class="container">
        <div class="table-responsive">
            <table class="table table-bordered table-striped animate__animated animate__zoomIn" data-toggle="table" data-show-columns="true" data-search="true"data-pagination="true" data-checkbox-header="true">
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
                    foreach($adminPortals as $port) { 
                        ?>
                    <tr>
                        <td>up</td>
                        <td>hide</td>
                        <td><?=$port["placement"]?></td>
                        <td><?=$port["title"]?></td>
                        <td><a href="?update&item=<?=$port["id"]?>">update</a></td>
                        <td>hide</td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>                      
            </table>
        </div>
    </div>
</div>
