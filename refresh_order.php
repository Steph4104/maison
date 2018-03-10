<?php
 
include 'database.php';

// $_POST['item'] = $data;
//error_log($data);

$i = 0;

foreach ($_POST['item'] as $value) {
    // Execute statement:

    $sql = 'UPDATE sort_save SET display_order = '.$i.' WHERE id = '.$value;
        // $sql = "UPDATE sort_save SET id = $i WHERE id = $id";
    
    //error_log($sql);
    if(mysqli_query($conn, $sql)) {
        	    error_log( "Record modified successfully.");
                 } else {
         	    error_log( "ERROR: Could not execute $sql. ");
                 }
    $i++;
}
 
//  $move = $desired_position > $current_position ? 'down' : 'up';
//  error_log($move);

//  // Set the display_order for the dragged item to be 0 so we can update this record later by display_order = 0
// $query = "UPDATE sort_save
// SET display_order = 0
// WHERE display_order = :current_position
// AND user_id = :user_id";

// // Move down: Update the items between the current position and the desired position, decreasing each item by 1 to make space for the new item
// if ($move == 'down') {
//     $query = "UPDATE sort_save
//               SET display_order = (display_order - 1)
//               WHERE display_order > :current_position
//               AND display_order <= :desired_position
//               AND user_id = :user_id";
// }

// // Move up: Update the items between the desired position and the current position, increasing each item by 1 to make space for the new item
// if ($move == 'up') {
//     $query = "UPDATE sort_save
//               SET display_order = (display_order + 1)
//               WHERE display_order >= :desired_position
//               AND display_order < :current_position
//               AND user_id = :user_id";
// }

// // Update the item that was dragged and set it to be the desired position now that the slot is opend up
// $query = "UPDATE sort_save
// SET display_order = :desired_position
// WHERE display_order = 0
// AND user_id = :user_id";


// if(mysqli_query($conn, $query)) {
//     	    echo "Record modified successfully.";
//             } else {
//         echo "ERROR: Could not execute $query. ";
//             }
// // Your code here to connect to MySQL server
//     $i = 0;
//     foreach ($_POST['item'] as $value) {
//         // Sanitize the input
//         $id = mysqli_real_escape_string($conn, $value);
//         // Build statement:
//         $sql = "UPDATE sort_save SET id = $i WHERE id = $id";
//         // Execute statement:
//         if(mysqli_query($conn, $sql)) {
// 	    echo "Record modified successfully.";
//         } else {
// 	    echo "ERROR: Could not execute $sql. " . mysqli_error($link);
//         }
//         $i++;
//     }
 
// Close MySQL connection
?>