   <?php if (!empty($errors)): ?>
        <div class="error-alert">
            <?php foreach($errors as $error): ?>
                <p><?= $error ?></p>
            <?php endforeach; ?>
        </div>
    <?php endif ?>

    <form class="form" action="" method="post" enctype="multipart/form-data" >
    
        <?php if ($product['image']): ?>
            <img src="/<?= $product['image'] ?>" class="update-image">
        <?php endif; ?>    

        <div class="label">
            <label for="img">Product Image</label>
            <input type="file" name="image"  >
            <br/>
        </div>
        <div class="label">Product Title</label>
            <input type="text" name="title" value="<?= $product["title"]; ?>"   >
        </div>
        <div class="label">
            <label for="title">Product Description</label>
            <textarea id="message" id="message" name="description"><?= $product["description"] ?></textarea>
        </div>
        <div class="label">
            <label for="price">Product Price</label>
            <input type="number" name="price" step=".01" value="<?= $product["price"]; ?>"  >
        </div>
        <input type="submit" value="Submit">
    </form>