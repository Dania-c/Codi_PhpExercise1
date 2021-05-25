<?php 

function palindrome($str){
    if(strrev($str)==$str){
        return 1;
    }else{
        return 0;
    }}


if(isset($_POST['submit']))
{
    $str=strtolower($_POST['word']);
    
    
    if(palindrome($str)){
        echo 'Palindrome';

    }else {
            echo 'Not a Palindrome';
            }
}
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" >
        <input type="text" name="word" placeholder="Enter a Word">
        <input type="submit" name='submit' value="check it">
        
    </form>
</body>
</html>