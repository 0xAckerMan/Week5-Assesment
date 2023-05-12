<?php
global $wpdb;

$members = $wpdb->get_results("SELECT * FROM wp_members");
?>

<h1>Members</h1>
<div class="container">

    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone Number</th>

        </tr>
        <?php
        for ($i = 0; $i < count($members); $i++) {
        ?>

            <tr>
                <td><?php echo $members[$i]->name ?></td>
                <td><?php echo $members[$i]->email ?></td>
                <td><?php echo $members[$i]->phone ?></td>

            </tr>
        <?php
        }
        ?>
    </table>

</div>