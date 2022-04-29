<?php

   $first = "The five boxing wizard";
   $second = "jumps quickly";

   $sentence = $first;
   $sentence = $second;

   echo $first . $second;

   ?>

   <br>

   <?php echo strtolower($first . $second); ?> <br>

   <?php echo strtoupper($first . $second); ?> <br>

   Number of characters: <?php echo strlen($first . $second); ?> <br>

   Search for a string or character: <?php echo strstr($sentence, "jump"); ?> <br>

   Replace a character: <?php echo str_replace("five","seven",$first . $second); ?>

  