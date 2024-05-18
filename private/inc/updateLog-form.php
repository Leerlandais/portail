<form method="POST" id="updateLogForm" class="mt-5 w-25">
  <div class="mb-4">
    <label for="title" class="form-label text-info">Date</label>
    <input type="text" class="form-control" id="title" name="dateUpdate" value="<?=$oneLog["date"]?>">
  </div>
  <div class="mb-4">
    <label for="desc" class="form-label text-info">Log</label>
    <input type="text" class="form-control" id="desc" name="logUpdate" value="<?=$oneLog["log"]?>">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>