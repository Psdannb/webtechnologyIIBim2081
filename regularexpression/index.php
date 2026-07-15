<?php
/*
=>A Regular Expression (Regex) is a sequence of characters that defines a search pattern. In PHP, regular expressions are used to search, match, validate, extract, replace, and manipulate strings based on a specified pattern.
PHP uses the PCRE (Perl Compatible Regular Expressions) library, and regex functions usually begin with preg_ (e.g., preg_match(), preg_replace(), preg_split()).

#Need for Regular Expressions
=> Regular expressions are used to:
1.Validate user input (email, phone number, password, etc.)
2.Search for specific text in a string
3. Replace words or characters
4. Extract information from text
5. Split strings based on patterns
6. Filter and process data efficiently




#Delimiters
=> A regular expression pattern must be enclosed within delimiters.
for example: 
"/PHP/"
"#PHP#"
"~PHP~"
The slash (/) is the most commonly used delimiter.


#Common Regular Expression Functions
1. preg_match():
The preg_match() function searches a string for a pattern. It returns 1 if the pattern is found and 0 otherwise.
syntax: preg_match(pattern, string);
Example :
$str = "Learning PHP Programming";

if(preg_match("/PHP/", $str))
{
    echo "Pattern Found";
}
else
{
    echo "Pattern Not Found";
}

Output:Pattern Found
*/

/*
2. preg_match_all()
The preg_match_all() function finds all occurrences of a pattern in a string.
syntax:preg_match_all(pattern,string,returnarray)
Example: 
$str = "PHP is easy. PHP is powerful.";

preg_match_all("/PHP/", $str, $matches);

print_r($matches);
Output: Array ( [0] => Array ( [0] => PHP [1] => PHP ) )

*/

/*
3. preg_replace()
The preg_replace() function replaces all occurrences of a pattern with another string.
synatax: preg_replace(pattern, replacement, string);
Example:
$str = "I like Java.";

echo preg_replace("/Java/", "PHP", $str);
Output: I like PHP. 
*/

/*
4. preg_split()
The preg_split() function splits a string into an array using a regular expression pattern.
Syntax: preg_split(pattern, string);
Example: 
$str = "Apple,Banana,Mango";

$result = preg_split("/,/", $str);

print_r($result);
Output:Array ( [0] => Apple [1] => Banana [2] => Mango )
*/

/*
#Common Regular Expression Metacharacters
symbol: .
meaning : Matches any single character
Example: /a.c/ matches abc, axc
*/

/*
symbol: ^
meaning : Beginning of string
Example: /^PHP/
*/

/*
symbol: $
meaning : End of string
Example: /PHP$/ 
*/

/*
symbol: *
meaning : Zero or more occurrences
Example: /ab* /
*/

/*
symbol: +
meaning : One or more occurrences
Example: /ab+/ 
*/

/*
symbol: ?
meaning : Zero or one occurrence
Example: /colou?r/
*/

/*
symbol: []
meaning : Character class
Example: /[abc]/
*/


/*
symbol: [^ ]
meaning : Negated character class
Example: /[^0-9]/
*/

/*
symbol: \d
meaning : Any digit (0–9)
Example: /\d/
*/

/*
symbol: \D
meaning : Any non-digit
Example: /\D/
*/

/*
symbol: \w
meaning : Word character (A-Z, a-z, 0-9, _)
Example: /\w+/
*/

/*
symbol: \W
meaning : Non-word character
Example: /\W/
*/

/*
symbol: \s
meaning : Whitespace character
Example: /\s/
*/

/*
symbol: \S
meaning : Non-whitespace character
Example: /\S/
*/



/*Use case of Regular Expressions:
Example 1: Validate Email
$email = "student@gmail.com";

if(preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $email))
{
    echo "Valid Email";
}
else
{
    echo "Invalid Email";
}

output: 

Example 2: Check Mobile Number

$mobile = "9841234567";

if(preg_match("/^[0-9]{10}$/", $mobile))
{
    echo "Valid Mobile Number";
}
else
{
    echo "Invalid Mobile Number";
}

Output:

Example 3: Extract Numbers

$str = "Ram scored 85 marks in 2026.";

preg_match_all("/\d+/", $str, $matches);

print_r($matches[0]);
*/
?>