<?php include "public/html/header.html"; ?>

<h2>Add New Item To The Menu</h2>

<form method="POST" action="index.php?action=create">
  <label>enter the item you wish to add:
  <input type="text" name="name" placeholder="Item name" required><br><br>
  <label>enter the price of the item that you wish to add:
  <input type="number" step="0.01" name="price" placeholder="Price" required><br><br>

  <label>select the category of the item you wish to add:
    <select name="category" required>
    <option value="">Select Category</option>
    <option value="Coffee">Coffee</option>
    <option value="Dessert">Dessert</option>
  </select><br><br>

  <label>how do you wish to describe the item you added ?  <textarea name="description" placeholder="Description"></textarea><br>
    <hr>
  <button class="btn-primary">ADD</button>
</form>

<?php include "public/html/footer.html"; ?>
