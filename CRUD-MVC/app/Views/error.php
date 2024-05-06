<?php  include(VIEWS.'inc'.DS.'header.php'); ?>

<div class="jumbotron text-center my-5">
  <?php if(isset($error)): ?>
    <h1 class="alert alert-danger text-center w-50 mx-auto mb-5"><?php  echo $error; ?></h1>
  <?php endif; ?>
  <a class="btn btn-primary btn-lg" href="<?php url(); ?>" role="button">Back To Home</a>
</div>

<?php  include(VIEWS.'inc'.DS.'footer.php'); ?>
