<?php
    $dns = 'mysql:host=localhost;dbname=obunalar';
    $user = 'root';
    $pass = '';
    $connect = new PDO($dns, $user, $pass);
    //Insert to table
    //$connect -> query('INSERT INTO `mijoz`(`F_I_SH`) VALUES("Raximov Jamshid")');
    //Get data from table
    $list = $connect
                ->query('SELECT * FROM `mijoz` ORDER BY `id` DESC')
                ->fetchAll();
    //var_dump($list); ?>
    <a href="create.php"> Create element </a>
    <hr>
    <table border="1">
        <thead>
            <td>#</td>
            <th>ID</th>
            <th>F_I_SH</th>
            <th>adres</th>
            <th>nomer</th>
            <th>buyurtma_nomi</th>
            <th>buyurtma_vaqti</th>
            <th>narxi</th>
            <th>Amallar</th>
        </thead>
        <tbody>
            <?php foreach($list AS $index=>$item): ?>
                <tr>
                    <td><?php echo ++$index; ?></td>
                </tr>
        </tbody>