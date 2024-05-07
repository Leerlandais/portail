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
  <div class="mb-1">
    <label for="url" class="form-label text-info">URL</label>
    <input type="text" class="form-control" id="url" name="urlUpdate" value="<?=$onePortal["dest_url"]?>">
  </div>
  <!-- 2 more here, vis and place -->
  <button type="submit" class="btn btn-primary">Submit</button>
</form>