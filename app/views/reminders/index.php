<?php require_once 'app/views/templates/header.php' ?>
<div class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h1>Reminders</h1>
                 <p> <a href= "/reminders/create">Create a reminder</a></p>
            </div>
        </div>
    </div>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>Subject</th>
                <th>delete</th>
                <th>update</th>
            </tr>
        </thead>
        






    
    <?php
    foreach ($data['reminders'] as $reminder) {
        echo "<tbody><tr><td>" .$reminder['id']. "</td> <td>".  $reminder['subject'] . " </td><td>";
        ?>
        <form action="/reminders/update" method="post" >

            <input type='hidden' name='id' value=' <?php echo $reminder['id'] ?> ' >
            <input type='hidden' name='subject' value=' <?php echo $reminder['subject']?> ' >
            <button type="submit" class="btn btn-secondary">update</button>

        </form>
        <?php echo "</td> <td>";?>
        <form action="/reminders/delete" method="post" >
            
            <input type='hidden' name='id' value=' <?php echo $reminder['id'] ?> ' >
            <button type="submit" class="btn btn-secondary">delete</button>
            
        </form>
        
        <?php
        echo "</td></tr>";
    }
        echo "</ tbody> </table>";
    
    ?>
    
    <?php require_once 'app/views/templates/footer.php' ?>
