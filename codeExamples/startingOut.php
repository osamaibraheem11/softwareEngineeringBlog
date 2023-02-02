<?php

    echo "Hello, Learner!";

    echo "\nWe hope you enjoyed this lesson.";

    echo "\nAre you excited?" . "\nTo learn more?";

    $favorite_language = "PHP";

    $message = "$favorite_language is by far our favorite language.";

    $message .= " It's yours now too, right?";

    echo "\n" . $message . " Right?!";  
  
    $my_num = -19273645.862;

    $answer = $my_num;

    $answer += 2;

    $answer *= 2;

    $answer -= 2;

    $answer /= 2;

    $answer -= $my_num;

    echo "Look! It still works!\n";

    echo $answer;

    echo "\nCool?\nIt's a little cool, right?";




    function notFound()
    {
      echo "ERROR: Page not found!\n";
      return 404;
    }
    
    function greetLearner()
    {
      echo "Hello, Learner!\n";
      echo "I hope you're (still) enjoying PHP!\n";
      echo "Love, Codecademy\n";
      return "<3";
    }
    
    $error = notFound(); 
    $heart = greetLearner();
    
    echo "I received a $error, but it's ok because I also received $heart.";
  


    function first()
    {
      return "You did it!\n";
    }
    
    function second()
    {
      return "You're amazing!\n";
    }
    
    function third()
    {
      return "You're a coding hero!\n";
    }

    
    echo first() . second() . third();