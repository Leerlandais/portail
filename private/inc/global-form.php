<?php 


?>
<form method="POST" id="globalForm" class="mt-5 w-25">
<div class="mb-4">
    <?php
    foreach ($siteCss as $css) 
    ?>
    <label for="bgColourUpdate" class="form-label text-info"><?=$css["selector"]?></label>
    <input type="text" name="selectorBGC" style="display: none;" value="<?=$css["selector"]?>">
    <input type="text" class="form-control" name="bgColour" id="bgColourUpdate" value="<?=$css["value"]?>">
    
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
