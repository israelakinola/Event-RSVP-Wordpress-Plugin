<?php
/**
 *  @package  eventRsvp
 */

namespace Inc\Utility;

class FormHandling{

    public static $validatedData = [];

    public static function validateInput( $dataArray){
        // Validate Input Data
       foreach($dataArray as $data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            array_push(self::$validatedData, $data);
       }

       return self::$validatedData;
         
    }

    //This method handles the attendee form submission
    public static function rsvpAttendanceFormHandling($event_id){
        global $wpdb;

        if ($_SERVER["REQUEST_METHOD"] == "POST" and $_REQUEST['attendee_name'] != '') {
            // collects value of input field and save to the RSVP DB Tables
            $attendee_name = $_REQUEST['attendee_name'];
            $attendee_email = $_REQUEST['attendee_email'];
            $event_id =  $event_id;
            $format = array('%s','%s','%d');
            $table = $wpdb->prefix.'rsvp';
            $data = array('attendee_name' => $attendee_name, 'attendee_email' => $attendee_email, 'event_id' => $event_id );
            if($wpdb->insert($table,$data,$format) != false){
                echo "SAVED";
               
            }
        }
    }
    
        
    public function run(){
        add_action( 'admin_menu', [$this, 'createAdminPage'] );
    }
}