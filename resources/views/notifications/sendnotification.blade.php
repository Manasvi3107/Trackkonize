<?php
// Simulated database
$employees = [
    1 => ['id' => 1, 'name' => 'John Doe', 'email' => 'john@example.com'],
    2 => ['id' => 2, 'name' => 'Jane Doe', 'email' => 'jane@example.com'],
];

$projects = [
    1 => ['id' => 1, 'name' => 'Project A', 'description' => 'Description for Project A'],
    2 => ['id' => 2, 'name' => 'Project B', 'description' => 'Description for Project B'],
];

// Simulated notifications
function sendNotification($to, $subject, $message)
{
    // You would implement actual notification logic here (email, push, etc.)
    echo "Notification sent to: $to\nSubject: $subject\nMessage: $message\n\n";
}

// Function to assign a project to an employee
function assignProject($employeeId, $projectId)
{
    global $employees, $projects;

    if (isset($employees[$employeeId]) && isset($projects[$projectId])) {
        $employee = $employees[$employeeId];
        $project = $projects[$projectId];

        // Notify employee about the assignment
        $subject = 'Project Assignment';
        $message = "Hello {$employee['name']}, you have been assigned to {$project['name']}.";
        sendNotification($employee['email'], $subject, $message);

        // You would typically update the database here with the assignment details
        echo "Project assigned successfully.\n";
    } else {
        echo "Invalid employee or project ID.\n";
    }
}

// Example: Assign Project A (ID: 1) to Employee John Doe (ID: 1)
assignProject(1, 1);
?>
