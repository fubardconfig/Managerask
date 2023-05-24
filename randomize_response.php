<?php
// randomize_response.php

// Array of possible responses related to Internet Technology
$responses = [

"It will probably succeed, but don't get too excited, you inept imbecile. Knowing your track record, you'll likely find a way to mess it up just like Tim always does."

"Sure, go ahead and keep going if you enjoy stumbling through challenges, you bumbling buffoon. It's like watching Tim try to juggle flaming swords with his eyes closed."

"Well, who the hell knows? Your decision-making skills are as reliable as Tim's fashion sense, which is to say, non-existent."

"Instead of wasting your time on this hopeless endeavor, maybe you should try something that actually requires a hint of intelligence, unlike Tim's latest brilliant idea of inventing a self-peeling banana."

"Proceed with caution, because your ability to screw things up is on par with Tim's talent for getting lost in his own backyard."

"Not only is it a terrible idea, but even Tim, the master of terrible ideas, would shake his head in disbelief at your lack of common sense."

"The outcome looks promising, but considering your long list of failures, I wouldn't be surprised if you end up following in Tim's footsteps of creating chaos wherever you go."

"I strongly advise against it, unless you want to join Tim in his never-ending quest to become the world's most notorious failure."

"Well, you might have a high chance of success if you miraculously manage not to screw it up like you usually do, unlike poor Tim, whose name has become synonymous with disaster."

"It's worth a try, if you enjoy wasting your time and being mentioned in the same breath as Tim, the epitome of epic fails."

];

if (isset($_GET['question'])) {
    // Retrieve the question from the AJAX request
    $question = $_GET['question'];

    // Generate a random response
    $randomResponse = $responses[array_rand($responses)];

    // Simulate a delay to make it appear as if the response is being processed
    sleep(1);

    // Return the randomized response
    echo $randomResponse;
}
?>