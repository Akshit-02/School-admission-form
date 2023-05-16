<?php
include 'partials/dbconnect.php';
$output = false;
$query1 = "select * from admission_form where status='reject'";
$result1 = mysqli_query($con, $query1);
$num1 = mysqli_num_rows($result1);
if ($num1 > 0) {
    $output = true;
} else {

}
?>
<div>
    <h2>Students List</h2>
    <h3 style="color:rgb(204, 0, 0);">Rejected applications</h3>
    <?php
    if ($output) {
        echo "<table>
                        <tr>
                            <th style='width: 3%;'>ID</th>
                            <th style='width: 15%;'>Student name</th>
                            <th style='width: 15%;'>Guardian name</th>
                            <th style='width: 10%;'>Contact</th>
                            <th style='width: 20%;'>Address</th>
                            <th style='width: 5%;'>Class</th>
                            <th style='width: 7%;'>Shift</th>
                            <th style='width: 9%;'>D.O.B.</th>
                            <th style='width: 8%;'>Gender</th>
                        </tr>";

        while ($row1 = mysqli_fetch_assoc($result1)) {
            $sid = $row1['id'];
            echo "<tr>
                            <td>" . $row1['id'] . "</td>
                            <td>" . $row1['sname'] . "</td>
                            <td>" . $row1['gname'] . "</td>
                            <td>" . $row1['contact'] . "</td>
                            <td>" . $row1['address'] . "</td>
                            <td>" . $row1['class'] . "</td>
                            <td>" . $row1['shift'] . "</td>
                            <td>" . $row1['dob'] . "</td>
                            <td>" . $row1['gender'] . "</td>
                            
                            </tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No record found</p>";
    }
    ?>
</div>