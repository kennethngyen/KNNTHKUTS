<?php
    $name = $_POST['name']
    $phone = $_POST['phone']
    $email = $_POST['email']
    $date = $_POST['date']
    $time = $_POST['time']
    $info = $_POST['info']

    $conn = new mysqli('localhost','root','','knnthkuts')
    if($conn->connect_error){
        die('Connection failed : ', $conn->connect_error)
    }else{
        $stmt = $conn->prepare("insert into registration(name, phone, email, date, time, info)
        values(?,?,?,?,?,?)");
        $stmt->bind_param("sissss", $name, $phone, $email, $date, $time, $info)
        $stmt->execute();
        echo "appointment booked"
        $stmt->close();
        $conn->close();
    }
>