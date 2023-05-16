<?php
include 'partials/dbconnect.php';
$output = false;
$query1 = "select * from admission_form where status IS NULL OR status=''";
$result1 = mysqli_query($con, $query1);
$num1 = mysqli_num_rows($result1);
if ($num1 > 0) {
    $output = true;
} else {

}
if (isset($_GET['sid'])) {
    $id = $_GET['sid'];
    if (isset($_GET['a'])) {
        $action = $_GET['a'];
        if ($action == 'accept') {
            $query2 = "update admission_form set status='accept' where id=$id ";
            $result2 = mysqli_query($con, $query2);

        } else {
            $query2 = "update admission_form set status='reject' where id=$id ";
            $result2 = mysqli_query($con, $query2);
        }
    }
}
?>
<div>
    <h2>Students List</h2>
    <h3 style="color:rgb(255, 0, 102);">Appplication Forms</h3>
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
                            <th style='width: 8%;'>Options</th>
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
                            <td>
                            <button name='accept' class='accept'><a class= 'a-accept' href= '?a=accept&sid=$sid'><img src='img/correct.png' alt=''></a></button>
                            <button name='reject' class='reject'><a class= 'a-remove' href= '?a=reject&sid=$sid'><img src='img/remove.png' alt=''></a></button>
                            </td>
                            </tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No record found</p>";
    }
    ?>
</div>