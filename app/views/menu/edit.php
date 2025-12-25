<?php include "public/html/header.html"; ?>

<h2>Edit Item</h2>

<form class="form" method="POST" action="index.php?action=update&id=<?= $item['id'] ?>">
  <input type="text" name="name" value="<?= $item['name'] ?>" required>
  <input type="number" step="0.01" name="price" value="<?= $item['price'] ?>" required>

  <select name="category">
    <option <?= $item['category']=="Coffee"?"selected":"" ?>>Coffee</option>
    <option <?= $item['category']=="Dessert"?"selected":"" ?>>Dessert</option>
  </select>

  <textarea name="description"><?= $item['description'] ?></textarea>

  <button class="btn-primary">Update</button>
</form>

<?php include "public/html/footer.html"; ?>
