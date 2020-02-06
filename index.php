<?php include "inc/header.php"; ?>
<?php include "inc/function.php"; ?>
<style>
	hr{
		border-color:#ddd;
	}
	input[type="number"]{
		height: 20px;
		border-radius:2px;
		margin:4px;
	}
</style>

	<hr>Basic Questions you should to know as Programmer<hr><br><br>
    <p>Q. Write a PHP program to find factorial of a number using recursive function. <p></</p>
<?php
    // using recursive function
    function factorial($num){
        if ($num <= 1){
            return 1;
        }else{
             return  $num * factorial($num-1);
        }
    }echo "Factorial is: ".factorial(4);
?>
    <br>
<p>Q. Remove specific element by value from an array in PHP?</p>
<?php
$monthArray = array('jan', 'feb', 'march', 'april', 'may');
$arrayToRemove = array('march');
print_r(array_diff($monthArray, $arrayToRemove));
?>

    <br>
<p>Q. Remove - from string start and end?</p>
<?php
    $str = '-Hello Themelooks-';
    echo str_replace('-', '', $str);
?>
    <br>

<p>Q. Laravel Routes</p>

    Redirect Routes: Route::redirect('/redirect-here', '/redirect-there');
    <br>
    View Routes: Route::view('/user-profile', 'welcome');
    <br>
    Required Parameters: Route::get('user/{id}',  function($id){ <br>
                             return 'User '.$id; <br>
                        });
    <br>
    Name Routes: Route::get('user/profile', 'UserProfileController@show')->name('profile');
    <br>
<code>
    Middleware :
    <br>
    Route::middleware(['first', 'second'])->group(function(){ <br>
        Route::get('/', function(){ <br>
               // use first and second route <br>
        }); <br>
        Route::get('user/profile', function(){ <br>
              // use first and second route <br>
        }); <br>
    }); <br>
</code>

















<?php include "inc/footer.php"; ?>