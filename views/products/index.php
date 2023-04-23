<h1>Product List</h1>


    <p>
      <a href="/products/create" class="btn-success" >Create Product</a>
    </p>

    <form class="form-search" >
      <input class="input-search"
        value="<?= $search ?>"
        type="text" placeholder="Search for products" name="search"  >
      <button class="btn-search" type="submit">Search</button>
    </form>

    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Image</th>
          <th scope="col">Title</th>
          <th scope="col">Price</th>
          <th scope="col" >Create Date</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
       <?php foreach($products as $i => $product): ?>
         <tr>
          <td scope="row"><?php echo $i + 1 ?></td>
          <td>
            <?php if ($product["image"]): ?>
                <img src="/<?= $product["image"] ?>" class="thumb-image">
            <?php endif ?> 
        </td>
          <td><?php echo $product['title'] ?></td>
          <td><?php echo $product['price'] ?></td>
          <td><?php echo $product['create_date'] ?></td>
          <td>
            <a href="/products/update?id=<?= $product['id'] ?>" class="edit-btn">Edit</a>
            <form class="form-delete" method="post" action="/products/delete" >
              <input type="hidden" name="id" value="<?= $product["id"] ?>" >
              <button type="submit" class="delete-btn">Delete</button>
            </form>
          </td>
        </tr>
       <?php endforeach; ?>
      </tbody>
    </table>