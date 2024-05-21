<form method="POST" id="updateForm" class="mt-5 w-25">
  <div class="mb-4">
    <label for="title" class="form-label text-info">Title</label>
    <input type="text" class="form-control" id="title" name="titleUpdate" value="<?=$onePortal["title"]?>">
  </div>
  <div class="mb-4">
    <label for="desc" class="form-label text-info">Description</label>
    <input type="text" class="form-control" id="desc" name="descUpdate" value="<?=$onePortal["description"]?>">
  </div>
  <div class="mb-4">
    <label for="image" class="form-label text-info">Image</label>
    <input type="text" class="form-control" id="image" name="imageUpdate" value="<?=$onePortal["img_src"]?>">
  </div>
  <div class="mb-4 d-flex flex-row">
    <label for="imgWidth" class="form-label text-info me-3">Image Width</label>
    <input type="number" step="1" class="form-control me-3 w-25" id="imgWidth" name="widthUpdate" value="<?=$onePortal["img_width"]?>">
    <input type="text" step="1" class="form-control w-25" id="imgWidthType" name="widthType" value="<?=$onePortal["img_width_type"]?>">
    <label for="imgWidthType" class="form-label text-info ms-3">&lpar;% - best&rpar;</label>
  </div>
  <div class="mb-4 d-flex flex-row">
    <label for="imageHeight" class="form-label text-info me-3">Image Height</label>
    <input type="number" step="1" class="form-control me-3 w-25" id="imageHeight" name="heightUpdate" value="<?=$onePortal["img_height"]?>">
    <input type="text" step="1" class="form-control w-25" id="imageHeightType" name="heightType" value="<?=$onePortal["img_height_type"]?>">
    <label for="imageHeightType" class="form-label text-info ms-3">&lpar;vh - best&rpar;</label>
  </div>
  <div class="mb-1">
    <label for="url" class="form-label text-info">URL</label>
    <input type="text" class="form-control" id="url" name="urlUpdate" value="<?=$onePortal["dest_url"]?>">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>