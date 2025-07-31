<?php
include 'includes/header.php';
?>

<div class="container">
  <h2>Add Goods and Services</h2>
  <hr />
  <form action="php/save_goods_services.php" method="POST">
    <label class="form-label" for="name">Good or Service Name</label>
    <input
      class="form-control"
      type="text"
      id="name"
      name="name"
      required />

    <label class="form-label" for="description">Description</label>
    <textarea
      class="form-control"
      id="description"
      name="description"
      required>
        </textarea>

    <button type="submit" class="btn btn-primary">Save</button>
  </form>
</div>

<?php
include 'includes/footer.php';
?>