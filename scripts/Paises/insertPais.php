<?php

    require_once ('../../app.php');
    use Models\Paises;
    $miPais = new Paises;
    header("Content-Type: application/json"); //definimos el archivo como un tipo json
    //le decimos al archivo de php que obtenga cualquier tipo de entrada que le llegue y la transformamos a un 
    //array asociativo con el parametro "true", sin este parametro seria un objeto por defecto
    $_DATA = json_decode(file_get_contents("php://input"), true);
    $miPais->saveData($_DATA);
 
?>
















    // require_once('../../clases/Database.php');
    // $db = new Database();
    // $conn = $db->getConnection('db2');
    /*$sql = "INSERT INTO pais (nombre_pais) VALUES (?)";
    $stmt= $conn->prepare($sql);
    $nombrePais='Mexico2';
    $stmt->execute([$nombrePais]);*/
    /*$name = 'Uruguay';
    $data = [
        'nombre_pais' => $name
    ];
    $sql = "INSERT INTO pais (nombre_pais) VALUES (:nombre_pais)";
    $stmt= $conn->prepare($sql);
    $stmt->execute($data);*/
    /*
        Forma 1 : INSERT query with positional placeholders
        $sql = "INSERT INTO users (name, surname, sex) VALUES (?,?,?)";
        $stmt= $pdo->prepare($sql);
        $stmt->execute([$name, $surname, $sex]);
    */
    // $data = [
    //     ['Rusia'],
    //     ['China'],
    // ];
    // $stmt = $conn->prepare("INSERT INTO pais (nombre_pais) VALUES (?)");
    // try {
    //     $conn->beginTransaction();
    //     foreach ($data as $row)
    //     {
    //         $stmt->execute($row);
    //     }
    //     $conn->commit();
    // }catch (Exception $e){
    //     $pdo->rollback();
    //     throw $e;
    // }
    /*
     /* INSERT query with named placeholders */
        $data = [
            'name' => $name,
            'surname' => $surname,
            'sex' => $sex,
        ];
        $sql = "INSERT INTO users (name, surname, sex) VALUES (:name, :surname, :sex)";
        $stmt= $pdo->prepare($sql);
        $stmt->execute($data);
     */
    /* 
        INSERTing multiple rows
        $data = [
            ['John','Doe', 22],
            ['Jane','Roe', 19],
        ];
        $stmt = $pdo->prepare("INSERT INTO users (name, surname, age) VALUES (?,?,?)");
        try {
            $pdo->beginTransaction();
            foreach ($data as $row)
            {
                $stmt->execute($row);
            }
            $pdo->commit();
        }catch (Exception $e){
            $pdo->rollback();
            throw $e;
        }
    */
