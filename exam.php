<?php

// Set the time zone
date_default_timezone_set('UTC');

// Start the session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

// Include the database connection
require_once 'db.php';

// Fetch the exam questions from the database
$questions_query = $db->query("SELECT * FROM questions ORDER BY RAND() LIMIT 10");
$questions = $questions_query->fetchAll(PDO::FETCH_ASSOC);

// If there are no questions, show an error message
if (count($questions) == 0) {
    echo "There are no questions available at the moment.";
    exit();
}

// Store the question IDs in an array
$question_ids = array_column($questions, 'id');

// Shuffle the questions
shuffle($questions);

// Store the shuffled questions in the session
$_SESSION['questions'] = $questions;

// Set the current question index to 0
$_SESSION['current_question'] = 0;

// Display the first question
display_question($_SESSION['questions'][$_SESSION['current_question']]);

function display_question($question) {
    echo "<h1>{$question['question']}</h1>";
    echo "<form method='post' action='submit.php'>";
    echo "<input type='hidden' name='question_id' value='{$question['id']}' />";
    echo "<ul>";
    foreach ($question['options'] as $option) {
        echo "<li><input type='radio' name='answer' value='{$option}' /> {$option}</li>";
    }
    echo "</ul>";
    echo "<input type='submit' value='Submit' />";
    echo "</form>";
}

?>