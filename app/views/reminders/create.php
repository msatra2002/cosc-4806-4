<?php require_once 'app/views/templates/header.php' ?>
<div class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h1> Create a new Reminder</h1>

              <form action="/reminders/change" method="post" >
              <fieldset>
                <div class="form-group">
                  <label for="subject">subject </label>
                  <input required type="text" class="form-control" name="subject">
                </div>
                      <br>
                  <button type="submit" class="btn btn-secondary">Create</button>
              </fieldset>
              </form>
                 
            </div>
        </div>
    </div>
    <?php
    
    

    ?>

    <?php require_once 'app/views/templates/footer.php' ?>
