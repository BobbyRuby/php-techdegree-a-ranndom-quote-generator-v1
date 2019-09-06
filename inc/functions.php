<?php
$quotes = [
    [
        "quote" => "Boys will be boys. And even that wouldn't matter if only we could prevent girls from being girls.",
        "source" => "Anne Frank - There's evidence to suggest that this quote is attributed to the author, though no official sources or credible evidence could be found or has yet to be added to this page",
        "citation" => "No citation could be found",
        "year" => "Unknown",
        "tags" => "Tags: <a href=''>Female</a> / <a href=''>German</a>"
    ],
    [
        "quote" => "There comes a time in every rightly constructed boy's life that he has a raging desire to go somewhere and dig for hidden treasure",
        "source" => "Mark Twain",
        "citation" => "Twain, M. (1876). The Adventures of Tom Sawyer. Hartford, CT: American Publishing Co.",
        "year" => "1876",
        "tags" => "Tags: <a href=''>Male</a> / <a href=''>Treasure</a>"
    ],
    [
        "quote" => "You don't have to listen to those mean girls. They're just there to make you upset and feel bad about yourself. 
        And you know, inside, they feel bad about themselves too. But they don't wanna admit it to anybody.",
        "source" => "Amanda Seyfried",
        "citation" => "http://wiseoldsayings.com/bad-girls-quotes/",
        "year" => "Unknown",
        "tags" => "Tags: <a href=''>Female</a> / <a href=''>Psychological Analysis</a>"
    ],
    [
        "quote" => "Don't half ass it Bobby!",
        "source" => "Mom",
        "citation" => "No citation could be found",
        "year" => "2000",
        "tags" => "Tags: <a href=''>Female</a> / <a href=''>Hillbilly Mommas</a>"
    ],
    [
        "quote" => "Taxation is theft, purely and simply even though it is theft on a grand and 
        colossal scale which no acknowledged criminals could hope to match. It is a compulsory 
        seizure of the property of the State’s inhabitants, or subjects",
        "source" => "Murray N. Rothbard",
        "citation" => "The Ethics of Liberty",
        "year" => "1982",
        "tags" => "Tags: <a href=''>Male</a> / <a href=''>Political</a>"
    ]
];
/**
 * Gets a quote from
 * @param $arr
 * @return mixed
 */
function getRandomQuote($arr){
    // store random integer for ascertaining a quote
   $randomInt = rand(0,4);
    return $arr[$randomInt];
}

// Create the printQuote funtion and name it printQuote
function printQuote($arr){
   $quoteForDisplay =  getRandomQuote($arr);
    $html ='';
    // Utilizing inline strings instead of concatenation
    $html .="<p class='quote'> {$quoteForDisplay['quote']}</p>
            <p class='source'> {$quoteForDisplay['source']}
             <span class='citation'> {$quoteForDisplay['citation']} </span>
              <span class='year'> {$quoteForDisplay['year']} </span>
              <p class='tags'> {$quoteForDisplay['tags']} </p>
            </p>";
    printf($html);
}

/**
 * Generate some random colors
 */
function getRandomColor(){
    echo 
    "<style>
        body{
          background-color: #". substr(uniqid(),-6).";
        }
        #loadQuote {
          background-color: #". substr(uniqid(),-3).";
        }
        </style>";
    // substr(uniqid(),-6) taken from https://stackoverflow.com/questions/5614530/generating-a-random-hex-color-code-with-php
}