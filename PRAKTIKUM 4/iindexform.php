<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form dengan oop</title>
    <style>
        .wrapper{
            padding: 18px;
        }
        .form-input{
            display: block;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <?php
    require_once "formMahasiswa.php";

    $form= new form();
    $form->setTextField ('nama', '');
    $form->setTextField ('nim', '');
    $form->setTextField ('prodi', '');
    $form->setTextField ('fakultas', '');
    $form->tampilkanform ();


    ?>
</body>
</html>