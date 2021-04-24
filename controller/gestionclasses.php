<?php

chdir('..');
include_once 'services/classesService.php';
extract($_POST);

$fs = new classesService();
$r = True;

if ($op != '') {
    if ($op == 'add') {
        $fs->create(new classes(0, $code, $filiere));
    } elseif ($op == 'update') {
        $fs->update(new classes($id, $code, $filiere));
    } elseif ($op == 'delete') {
        $fs->delete($id);
    } elseif ($op == 'countFC') {
        header('Content-type: application/json');
        echo json_encode($fs->countF());
        $r = false;
    } elseif ($op == 'select') {
        header('Content-type: application/json');
        echo json_encode($fs->select($IdFiliere));
        $r = false;
    }
}else if($op == '' && isset($IdFiliere)){
    echo json_encode($fs->select($IdFiliere));
}

if ($r) {

    header('Content-type: application/json');
    echo json_encode($fs->findAll());
}

