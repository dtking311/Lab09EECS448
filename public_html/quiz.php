<?php


$a1 = $_POST['q1'];
            $a2 = $_POST['q2'];
            $a3 = $_POST['q3'];
            $a4 = $_POST['q4'];
            $a5 = $_POST['q5'];
        
            $totalCorrect = 0;
			
            
            if ($a1 == "D") { $totalCorrect++; }
            if ($a2 == "B") { $totalCorrect++; }
            if ($a3 == "A") { $totalCorrect++; }
            if ($a4 == "C") { $totalCorrect++; }
            if ($a5 == "C") { $totalCorrect++; }
			
			$totalPercentage = ($totalCorrect/5)*100;
            
            echo "
			
			<h1> Quiz Results </h1>
			<div id='results'>$totalCorrect / 5 correct</div>
			<div id='perc_results'>$totalPercentage %</div>
			
			<h5>My name is?</h5>
			<p>Your Answer: $a1</p>
			<p>Correct Answer: D</p>
			
			<h5>KU is in what state?</h5>
			<p>Your Answer: $a2</p>
			<p>Correct Answer: B</p>
			
			<h5>When is breakfest eaten?</h5>
			<p>Your Answer: $a3</p>
			<p>Correct Answer: A</p>
			
			<h5>What has four wheels?</h5>
			<p>Your Answer: $a4</p>
			<p>Correct Answer: C</p>
			
			<h5>Which of the following is an animal?</h5>
			<p>Your Answer: $a5</p>
			<p>Correct Answer: C</p>
			
			
			
			
			";
			
			
            
        ?>
