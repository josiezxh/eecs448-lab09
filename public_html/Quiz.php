<!DOCTYPE html>
<html>
    <head>
        <title>Exercise 2: Quiz Results</title>
    </head>

    <style>
        body{ padding: 50px;
             font-size: 20px;
            background-image: url(https://i.pinimg.com/736x/23/2f/e0/232fe0f070c923472229787f8a435761.jpg);}
    </style>

    <body>
    <div style="border-width: 10px;border-style:double;border-color: #f54928;text-align: center; background-color: #f7ccc6; max-width:fit-content; padding: 50px;"> 
 
    <h1>Quiz Results</h1>
 
        <?php
            $score = 0;
            $a1 = $_POST['q1a'];
            $a2 = $_POST['q2a'];
            $a3 = $_POST['q3a'];
            $a4 = $_POST['q4a'];
            $a5 = $_POST['q5a'];
            

            if($a1 == "1")
            {
                $s1 = "O";
            }
            else if($a1 == "2")
            {
                $score++;
                $s1 = "E";
            }
            else if($a1 == "3")
            {
                $s1 = "A";
            }
            else
            {
                $s1 = "I";
            }

            if($a2 == "1")
            {
                $score++;
                $s2 = "Smallpox";
            }
            else if($a2 == "2")
            {
                $s2 = "Influenza";
            }
            else if($a2 == "3")
            {
                $s2 = "HPV";
            }
            else
            {
                $s2 = "Polio";
            }

            if($a3 == "1")
            {
                $s3 = "Banana";
            }
            else if($a3 == "2")
            {
                $score++;
                $s3 = "Pineapple";
            }
            else if($a3 == "3")
            {
                $s3 = "Pear";
            }
            else
            {
                $s3 = "Apple";
            }

            if($a4 == "1")
            {
                $s4 = "Vitamin K";
            }
            else if($a4 == "2")
            {
                $s4 = "Vitamin E";
            }
            else if($a4 == "3")
            {
                $s4 = "Vitamin B6";
            }
            else
            {
                $score++;
                $s4 = "Vitamin C";
            }

            if($a5 == "1")
            {
                $score++;
                $s5 = "Baby One More Time";
            }
            else if($a5 == "2")
            {
                $s5 = "Toxic";
            }
            else if($a5 == "3")
            {
                $s5 = "Gimme More";
            }
            else
            {
                $s5 = "Oops! I Did It Again";
            }

            echo "<div>$score / 5 correct</div>";
            $scoreper = ($score/5)*100;
            echo "<div>$scoreper%</div>";
        ?>
    </div>
    <div style="margin-top:20px; border-width: 10px;border-style:double;border-color: #f54928;background-color: #f7ccc6; max-width:fit-content; padding: 50px;"> 
       <ol>
           <li>
               <h3>Which is the only vowel not used as the first letter in a US State?</h3>
               <div>
                   <h4>Your Answer: <?php echo "$s1";?> </h4>
               </div>
               <div>
                   <h4>Correct Answer: E</h4>
               </div>
           </li>
           <li>
               <h3>The first successful vaccine was introduced by Edward Jenner in 1796. Which disease did it guard against?</h3>
               <div>
               <h4>Your Answer: <?php echo "$s2";?> </h4>
               </div>
               <div>
               <h4>Correct Answer: Smallpox</h4>
               </div>
           </li>
           <li>
               <h3>In tennis, what piece of fruit is found at the top of the men's Wimbledon trophy?</h3>
               <div>
               <h4>Your Answer: <?php echo "$s3";?> </h4>
               </div>
               <div>
               <h4>Correct Answer: Pineapple</h4>
               </div>
           </li>
           <li>
               <h3>Which vitamin is the only one that you will not find in an egg?</h3>
               <div>
               <h4>Your Answer: <?php echo "$s4";?> </h4>
               </div>
               <div>
               <h4>Correct Answer: Vitamin C</h4>
               </div>
           </li>
           <li>
               <h3>What was Britney Spears’ first single called?</h3>
               <div>
               <h4>Your Answer: <?php echo "$s5";?> </h4>
               </div>
               <div>
               <h4>Correct Answer: Baby One More Time</h4>
               </div>
           </li>
       </ol>
    </div>
    </body>
</html>