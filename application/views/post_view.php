<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
       <div class="row">
          <div class="col-3">
          </div>
          <div class="col-6">
              <div class="col-12">
             <form method="post" action="<?= base_url('index.php/post/add/') ?>">
                <div class="form-group">
                  <label>Post Title</label>
                   <input type="text" name="post_title" class="form-control" required />
                </div>
                <div class="form-group">
                   <input type="submit" name="btnsave" class="btn btn-primary btn-block" value="Submit" />
                </div>
             </form>
             </div>
             <div class="col-12">
             <table class="table table-responsive">
              <?php 
               if(!empty($blogs)){
                  foreach ($blogs as $key => $value) {
                     ?>
                     <tr>
                       <td><?= $value->post_id ?></td>
                       <td><?= $value->post_title ?></td>
                       <td><?= $value->created ?></td>
                       <td><?= $value->modified ?></td>
                       <td><a class="btn btn-primary btn-sm" href='javascript:void(0);'>Update</a></td>
                       <td><a class="btn btn-danger btn-sm" href='javascript:void(0);'>Delete</a></td>
                     </tr>
                     <?php
                  }
               }
              ?>
              </table>
             </div>




          </div>
       </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>