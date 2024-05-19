<?php 


?>
<div class="mb-4 d-flex flex-row flex-wrap w-auto">
  <?php
    foreach ($siteCss as $css) {
      ?>
      <div class="d-flex flex-column mx-5">
      <form method="POST" id="globalForm" class="mt-5 w-auto">
    <label for="cssSelector" class="form-label text-info"><?=$css["selector"]?></label>
    <input type="text" name="cssSelector" style="display: none;" value="<?=$css["selector"]?>">
    <input type="text" class="form-control" name="cssValue"  value="<?=$css["value"]?>">

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  
  <form method="POST" id="globalFormOpt" class="mt-1 w-auto">
    <input type="text" name="cssReset" style="display: none;" value="<?=$css["selector"]?>">
    <button type="submit" class="btn btn-primary" name="undoChange">Undo Change</button>
    <button type="submit" class="btn btn-primary" name="resetDefault">Reset to Default</button>
  </form> 
</div>
  
    <?php
    }
    ?>
    </div>


