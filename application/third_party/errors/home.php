<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align: center;">welcome to codeigniter 3</h1>
    <table boarder='1'>
        <tr>
            <th>No</th>
            <th>Username</th>
            <th>Email</th>
        </tr>
        <?php $no=0; foreach($user as $row): $no++ ?>
        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $row->username ?></td>
            <td><?php echo $row->email ?></td>
        </tr>
        <?php endforeach ?>
    </table>
    <table></table>
</body>

</html>