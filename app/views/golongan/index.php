<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <style>
      a .icon {
      width: 25px;
      text-align:center;
      }

      .container {
            max-width: 1000px;
            margin-left: auto;
            margin-right: auto;
            padding-left: 10px;
            padding-right: 10px;
            }

            h2 {
            font-size: 26px;
            margin: 20px 0;
            text-align: center;
            }
            h2 small {
            font-size: 0.5em;
            }

            .responsive-table li {
            border-radius: 3px;
            padding: 25px 30px;
            display: flex;
            justify-content: space-between;
            margin-bottom: 25px;
            }
            .responsive-table .table-header {
            background-color: #95A5A6;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.03em;
            }
            .responsive-table .table-row {
            background-color: #ffffff;
            box-shadow: 0px 0px 9px 0px rgba(0, 0, 0, 0.1);
            }
            .responsive-table .col-1 {
            flex-basis: 3%;
            }
            .responsive-table .col-2 {
            flex-basis: 10%;
            }
            .responsive-table .col-3 {
            flex-basis: 10%;
            }
            .responsive-table .col-4 {
            flex-basis: 10%;
            }
            .responsive-table .col-5 {
            flex-basis: 10%;
            }
            .responsive-table .col-6 {
            flex-basis: 7%;
            }
            .responsive-table .col-7 {
            flex-basis: 10%;
            }
            .responsive-table .col-8 {
            flex-basis: 10%;
            }
            @media all and (max-width: 767px) {
            .responsive-table .table-header {
            display: none;
            }
            .responsive-table li {
            display: block;
            }
            .responsive-table .col {
            flex-basis: 100%;
            }
            .responsive-table .col {
            display: flex;
            padding: 10px 0;
            }
            .responsive-table .col:before {
            color: #6C7A89;
            padding-right: 10px;
            content: attr(data-label);
            flex-basis: 50%;
            text-align: right;
            }
            }

            .btn{
                  padding: 10px;
            }
      </style>
</head>
<body>
<h2></h2>
<a href="<?php echo URL; ?>/golongan/input" class="btn">Tambah Golongan</a>

<div class="container">
      <h2>Table Golongan</h2>
      <ul class="responsive-table">
            <li class="table-header">
                  <div class="col col-1">No</div>
                  <div class="col col-2">Kode Golongan</div>
                  <div class="col col-3">Nama Golongan</div>
                  <div class="col col-6">Aksi</div>
            </li>
      <?php $i=1; ?>
      <?php foreach ($data['rows'] as $row) { ?>                        
            <li class="table-row">
                  <div class="col col-1" data-label="Job Id"><?= $i; ?></div>
                  <div class="col col-2" data-label="User Name"><?php echo $row['gol_kode']; ?></div>
                  <div class="col col-3" data-label="User Email"><?php echo $row['gol_nama']; ?></div>
                  <div class="col col-6" data-label="Action">
                  <a href="<?php echo URL; ?>/Golongan/edit/<?php echo $row['gol_id']; ?>"><img class="icon" src="<?php echo AST; ?>/img/editing.png" alt=""></a>
                        <a href="<?php echo URL; ?>/Golongan/delete/<?php echo $row['gol_id']; ?>"><img class="icon" src="<?php echo AST; ?>/img/delete.png" alt=""></a>
                  </div>
            </li>
            <?php $i++; ?>
      <?php } ?>                        
      </ul>
      </div>
</body>
</html>