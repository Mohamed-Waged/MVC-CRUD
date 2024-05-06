<?php  include(VIEWS.'inc'.DS.'header.php'); ?>

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

<?php  include(VIEWS.'inc'.DS.'footer.php'); ?>
