<?php

class reminder {
    public $userid;

    public function __construct() {

    }
    public function get_all_reminders() {
    $db = db_connect();
    $statement = $db->prepare("select * from reminders ;");
        $statement -> execute();
    $rows = $statement -> fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }

     public function update_reminder( $subject, $reminder_id) {
     $db = db_connect();
   // //do update statement
         $sql = "UPDATE reminders SET subject = :subject WHERE id = :id";
         $stmt = $db -> prepare($sql);
         $stmt->bindValue(":subject",$subject);
         $stmt->bindValue(":id",$reminder_id);
         //echo $reminder_id; 
         $stmt->execute();
         //echo "done";
         
         
   }
    public function add( $userId , $subject) {
         $db = db_connect();
       // //do update statement
        $sql = "INSERT INTO reminders (user_id , subject) VALUES (? , ?)";
        $stmt = $db -> prepare($sql);
        $stmt->execute([$userId , $subject]);
    
       }
    public function remove( $reminderId ) {
        $db = db_connect();
           // //do update statement
            $sql = "DELETE FROM reminders WHERE (id = :id)";
        
            $stmt = $db -> prepare($sql);
            $stmt->bindValue(":id",$reminderId);
            $stmt->execute();
        
        
           // header('Location: /reminders/index'); idk why this is not working ! 
    }
}
?>
        
