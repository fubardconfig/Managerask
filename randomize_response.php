<?php
// randomize_response.php

// Array of possible responses related to Internet Technology
$responses = array(

"Oh, sure, let's fix another one of your 'emergencies' while I magically pull solutions out of thin air.",
"Of course, your lack of planning is now my top priority. It's not like I have other things to do.",
"Oh, brilliant idea! Let's add more complexity to an already convoluted system. What could possibly go wrong?",
"You want it done by when? Ah, the 'ASAP' deadline, my favorite, right after 'right now' and 'yesterday.'",
"Sure, I'll just wave my IT wand and fix everything. Because that's totally how it works.",
"Oh, you broke it again? Color me surprised. I never could have predicted that.",
"You want me to troubleshoot your issue? Let me grab my crystal ball and summon the IT spirits for you.",
"Your request is so unique and groundbreaking that it will surely require an unparalleled amount of eye-rolling on my part.",
"Congratulations! You've discovered a brand-new way to break the system. You must be so proud.",
"Oh, you need IT support? Let me guess, the 'I' stands for 'Inconvenience' in your world.",
"Sure, I'll happily prioritize your ticket right after I finish juggling flaming chainsaws.",
"Your technical expertise is truly astounding. I can't believe you didn't think of Googling the issue yourself.",
"Ah, yes, the classic 'I didn't do anything, it just stopped working' excuse. It's music to my ears.",
"Of course, I love being your personal IT magician. Just don't forget to clap your hands and say 'IT, fix it!'",
"Oh, don't worry, your vague and incomplete description of the problem is more than enough for me to work my magic.",
"You want a solution that's both fast and perfect? Sorry, our IT department doesn't deal in miracles.",
"Yes, I have all the time in the world to cater to your every IT whim. My other responsibilities are just a myth.",
"Just because I'm an IT manager doesn't mean I have a magic wand to resolve your self-inflicted technical disasters.",
"You broke the same thing for the tenth time? It's like Groundhog Day, but with less humor and more frustration.",
"Sure, I'll prioritize your issue right after I've finished perfecting my IT telepathy skills. It's a work in progress."
);

if (isset($_GET['question'])) {
    // Retrieve the question from the AJAX request
    $question = $_GET['question'];

    // Generate a random index within the range of the responses array
    $randomIndex = array_rand($responses);

    // Get the response associated with the random index
    $randomResponse = $responses[$randomIndex];

    // Simulate a delay to make it appear as if the response is being processed
    sleep(1);

    // Create an associative array to hold the question and response
    $data = array(
        'question' => $question,
        'response' => $randomResponse
    );

    // Convert the array to JSON format
    $jsonData = json_encode($data);

    // Set the appropriate response headers
    header('Content-Type: application/json');
    header('Access-Control-Allow-Origin: *');

    // Return the JSON-encoded data
    echo $jsonData;
}
?>
