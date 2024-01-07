<?php
$title='';
$css='';
require_once 'layouts/_head.php';
?>


<body>
<?php
require_once 'layouts/_nav.php';
?>

<h1 class="text-center">Manage Member</h1>
<div class="container">
    <div class="table-responsive">
        <table class="main-table text-center table table-bordered">
            <tr>
                <td>#ID</td>
                <td>Username</td>
                <td>Email</td>
                <td>Registered Date</td>
                <td>Avatar</td>
                <td>Control</td>
            </tr>
            <?php 
            foreach($rows as $row){
                echo "<tr>";
                echo "<td>" . $row['id']        . "</td>";
                echo "<td>" . $row['name']      . "</td>";
                echo "<td>" . $row['email']     . "</td>";
                echo "<td>" . $row['GroupID']   . "</td>";
                echo "<td>" . $row['date']      . "</td>";
                echo "<td>" . $row['image']     . "</td>";
                echo "<td>";
                // Ici, vous devez placer les éléments de contrôle, comme des liens, des boutons, etc.
                // Voici un exemple de lien de modification et de suppression
                echo "<a href='edit_member.php?id=" . $row['userID'] . "'>Edit</a>";
                echo " | ";
                echo "<a href='delete_member.php?id=" . $row['userID'] . "'>Delete</a>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div> 
</div>







<?php
$js ='';
require_once 'layouts/_footer.php' ;
?>