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
          <h1 class="text-center">Records</h1>
          <hr style="background-color: black;color: black;height: 1px;">
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <a href="<?php echo base_url(); ?>" class="btn btn-info btn-sm">Add Records</a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 mt-2 mx-auto">
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
             
          <?php

              if($posts){
                  foreach($posts as $post){ ?>
                  
                  <div class="card mb-2">
                    <div class="card-header">
                      <?php echo $post->title; ?>
                    </div>
                    <div class="card-body">
                      <?php echo $post->description; ?>
                    </div>
                    <div class="card-footer">
                      <div class="text-right">
                        <a href="<?php echo base_url(); ?>delete/<?php echo $post->id; ?>">Delete</a>
                        <a href="<?php echo base_url(); ?>edit/<?php echo $post->id; ?>">Edit</a>
                      </div>
                    </div>
                  </div>

              <?php    }
              }

          ?>
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