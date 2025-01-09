<?php
$students = [
    [
        'name' => 'Kenneth H',
        'grade' => '3.8',
        'email' => 'kennethhizkias@gmail.com',
        'phone' => '321-654-0987',
        'student_id' => '26272729',
        'date_of_birth' => '2004-04-20'
    ],
    [
        'name' => 'Saputra Tanuwijaya',
        'grade' => '3.6',
        'email' => 'saputratanuwijaya45@gmail.com',
        'phone' => '654-321-9870',
        'student_id' => '272828237',
        'date_of_birth' => '2005-03-30'
    ],
    // Add more students as needed
];

// Example of how to access student data
foreach ($students as $student) {
    echo "Name: " . $student['name'] . "\n";
    echo "Grade: " . $student['grade'] . "\n";
    echo "Email: " . $student['email'] . "\n";
    echo "Phone: " . $student['phone'] . "\n";
    echo "Student ID: " . $student['student_id'] . "\n";
    echo "Date of Birth: " . $student['date_of_birth'] . "\n";
    echo "-------------------------\n";
}
?>
