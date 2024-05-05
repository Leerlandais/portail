<form method="POST" id="inputForm">
  <div class="mb-4">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" id="title" name="titleInp" aria-describedby="titleHelp">
    <div id="titleHelp" class="form-text text-info">Name above window</div>
  </div>
  <div class="mb-4">
    <label for="desc" class="form-label">Description</label>
    <input type="text" class="form-control" id="desc" name="descInp" aria-describedby="descHelp">
    <div id="descHelp" class="form-text text-info">Floating Description</div>
  </div>
  <div class="mb-4">
    <label for="image" class="form-label">Image</label>
    <input type="text" class="form-control" id="image" name="imageInp" aria-describedby="imageHelp">
    <div id="imageHelp" class="form-text text-info">Image Location</div>
  </div>
  <div class="mb-1">
    <label for="url" class="form-label">URL</label>
    <input type="text" class="form-control" id="url" name="urlInp" aria-describedby="urlHelp">
    <div id="urlHelp" class="form-text text-info">Destination url</div>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>