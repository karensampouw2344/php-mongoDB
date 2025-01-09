<?php
$employees = [
    [
        'name' => 'John Doe',
        'salary' => 50000,
        'email' => 'john.doe@example.com',
        'phone' => '123-456-7890',
        'employee_id' => 'E001',
        'date_of_birth' => '1990-01-01'
    ],
    [
        'name' => 'Jane Smith',
        'salary' => 60000,
        'email' => 'jane.smith@example.com',
        'phone' => '098-765-4321',
        'employee_id' => 'E002',
        'date_of_birth' => '1985-05-15'
    ],
    // Add more employees as needed
];

// Example of how to access employee data
foreach ($employees as $employee) {
    echo "Name: " . $employee['name'] . "\n";
    echo "Salary: " . $employee['salary'] . "\n";
    echo "Email: " . $employee['email'] . "\n";
    echo "Phone: " . $employee['phone'] . "\n";
    echo "Employee ID: " . $employee['employee_id'] . "\n";
    echo "Date of Birth: " . $employee['date_of_birth'] . "\n";
    echo "-------------------------\n";
}
?>
