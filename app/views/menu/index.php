<?php include "public/html/header.html"; ?>

<div class="top-bar">
  <h2>Our Menu</h2>
  <a href="index.php?action=create" class="btn-primary">➕ Add Item</a>
</div>

<div class="menu-grid">
<?php foreach ($items as $item): ?>
  <div class="menu-card">
    <h3><?= htmlspecialchars($item['name']) ?></h3>
    <span class="category"><?= htmlspecialchars($item['category']) ?></span>
    <p><?= htmlspecialchars($item['description']) ?></p>

    <div class="price"><?= $item['price'] ?> ₺</div>


    <div class="card-actions">
      <a href="index.php?action=edit&id=<?= $item['id'] ?>" class="btn-edit">Edit</a>
      <a href="index.php?action=delete&id=<?= $item['id'] ?>" class="btn-delete"
         onclick="return confirm('Delete this item?')">Delete</a>
    </div>
  </div>
<?php endforeach; ?>
</div>

<?php include "public/html/footer.html"; ?>
