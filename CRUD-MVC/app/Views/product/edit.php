<?php include(VIEWS . 'inc' . DS . 'header.php'); ?>

<?php if (!isset($_POST['submit'])) : ?>

    <h1 class="text-center my-2 py-3">Edit Product </h1>

    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto">

                <form class="px-5 py-4 border rounded" method="POST" action="<?php url('product/update/' . $product['id']); ?>">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" required value="<?php echo $product['name']; ?>" name="name" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" required class="form-control" value="<?php echo $product['price']; ?>" name="price" id="price">
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" required class="form-control" value="<?php echo $product['description']; ?>" name="description" id="description">
                    </div>

                    <div class="form-group">
                        <label for="qty">Quantity</label>
                        <input type="number" required class="form-control" value="<?php echo $product['qty']; ?>" name="qty" id="qty">
                    </div>

                    <div class="d-flex justify-content-center align-items-center mt-4">
                        <button type="submit" name="submit" class="btn btn-warning">Update Product</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
<?php else : ?>
    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto  my-5">

                <?php if(isset($success)): ?>
                    <h3 class="alert alert-success text-center"><?php  echo $success; ?></h3>
                <?php endif; ?>
                <?php if(isset($error)): ?>
                    <h3 class="alert alert-danger text-center"><?php  echo $error; ?></h3>
                <?php endif; ?>

                <?php header( "refresh:2;url=../index" ); ?>

            </div>
        </div>
    </div>
<?php endif; ?>

<?php include(VIEWS . 'inc' . DS . 'footer.php'); ?>