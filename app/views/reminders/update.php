<div class="container">
<div class="page-header" id="banner">
    <div class="row">
        <div class="col-lg-12">
            <?php 
            echo "<h1> Update Reminder</h1>";
            echo " <p> <a href= \"/reminders/index\">Back to reminders</a></p>";
            
            echo "<p> <s>" . $data['subject'] . '</s></p>'; 
            ?>

          <form action="/reminders/rechange" method="post" >
          
            <div class="form-group">
              <label for="subject">subject </label>
                <input type='hidden' name='id' value=' <?php echo $data['reminder_id']?> ' >
              <input required type="text" class="form-control" name="subject2" placeholder = " <?php echo  $data['subject'] ;  ?>">
            </div>
                  <br>
              <button type="submit" class="btn btn-secondary">Update</button>
          
          </form>

        </div>
    </div>
</div>
<?php



?>

<?php require_once 'app/views/templates/footer.php' ?>