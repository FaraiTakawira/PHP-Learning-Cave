<?php


// Sample if
// $t = date("H");

// if($t < 1){
//     echo 'Good Morning';
// }elseif($t < 17){
//     echo 'Good Afternoon';
// }
// else{
//     echo 'Good Evening';
// }

$post = ['First Post', 'Last Post'];

 
// if(!empty($post)){
//     echo $post[1];
// }else {
//     echo 'There is nothing to worry about';
// }


$firstPost = !empty ($post) ? $post [0] : 'No Posts';
echo $firstPost;


// // Without circle braces

// Sample if-else

// Difference between == and ===

// if AND

// if OR

// Ternary if

// Short ternary

// Null coalescing operator

// switch
