<?php
session_start();

$bmi = null;
$targetCalories = null;
$showModal = false;

// Reset Button
if (isset($_GET['action']) && $_GET['action'] == 'reset') {
    session_unset();    // unset all session variable
    session_destroy();  // destroy session
    header("Location: " . $_SERVER['PHP_SELF']); // redirect
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $weight = $_POST['weight'];
    $height = $_POST['height'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $activity = $_POST['activity']; // معامل النشاط
    $goal = $_POST['goal'];

    //  step ( 1 ) -  BMI حساب
    $heightInMeters = $height / 100;
    $bmi = round($weight / ($heightInMeters * $heightInMeters), 1);

    //  step ( 2 ) -  BMR حساب
    if ($gender == "male") {
        $bmrBase = 88.362 + (13.397 * $weight) + (4.799 * $height) - (5.677 * $age);
    } else {
        $bmrBase = 447.593 + (9.247 * $weight) + (3.098 * $height) - (4.330 * $age);
    }

    // step ( 3 ) -  الضرب في معامل النشاط للحصول على السعرات اليومية الفعلية
    $maintenanceCalories = round($bmrBase * $activity);
    $targetCalories = $maintenanceCalories;

    // step ( 4 ) - حساب السعرات البومية الفعلية بناء على الهدف ( تخسيس او بناء عضلي او الحفاظ على الوضع الحالي )
    if ($goal == 'lose') {
        $targetCalories = $maintenanceCalories - 500;
    } elseif ($goal == 'gain') {
        $targetCalories = $maintenanceCalories + 400;
    }

    $showModal = true;
}
