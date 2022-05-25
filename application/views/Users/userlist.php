<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user Data</title>
</head>
<body>
    <h1>User Account Details</h1>
    <?php
    ?>
    <table>
        <tr>
            <td>Username</td>
            <td>Password</td>
        </tr>
        <?php
        foreach($users as $row): 
        ?>
        <tr>
            <td> <?php echo $row['Username']; ?> </td>
            <td> <?php echo $row['Password']; ?> </td>
            <td></td>
        </tr>
        <?php
        endforeach;
        ?>
    </table>

</body>
</html>