<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12 mt-5">
          <h1 class="text-center">Edit Record</h1>
          <hr style="background-color: black;color: black;height: 1px;">
        </div>
      </div>
      <div class="row">
        <div class="col-md-5 mx-auto">
          <form action="<?php echo base_url(); ?>update/<?php echo $post->id; ?>" method="post">
            <?php 

                if($msg = $this->session->flashdata('success')){ ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                      <strong>Success</strong> <?php echo $msg; ?>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
              <?php  }

              if($msg = $this->session->flashdata('error')){ ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                      <strong>Error</strong> <?php echo $msg; ?>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
              <?php  }

             ?>
             <input type="hidden" name="edit_id" value="<?php echo $post->id; ?>">
            <div class="form-group has-danger">
              <label for="">Title</label>
              <input type="text" name="edit_title" class="form-control <?php echo form_error('edit_title') ? 'is-invalid' : '' ?>" value="<?php echo set_value('edit_title', $post->title); ?>">
              <div class="invalid-feedback">
                <?php echo form_error('edit_title'); ?>
              </div>
            </div>
            <div class="form-group has-danger">
              <label for="">Description</label>
              <textarea name="edit_description" id="" cols="" rows="3" class="form-control <?php echo form_error('edit_description') ? 'is-invalid' : '' ?>"><?php echo set_value('edit_description', $post->description); ?></textarea>
              <div class="invalid-feedback">
                <?php echo form_error('edit_description'); ?>
              </div>
            </div>
            <div class="form-group">
              <button class="btn btn-primary" type="submit">Update</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>