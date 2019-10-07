<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V2</title>
	<?php $this->load->view("_partials/head.php") ?>
</head>
<body>

<div class="container">
<?php
// input misspelled word
$input = $wordword;

// array of words to check against
// $words  = array('apple','pineapple','banana','orange',
//                 'radish','carrot','pea','bean','potato');
                $words=array();
                foreach($katadasar as $data){
                    array_push($words,$data->katadasar);
                }
                // print_r($a);


// no shortest distance found, yet
$shortest = -1;

// loop through words to find the closest


$closest=array();
// array_push($a,"blue","yellow");
// print_r($a);

while($shortest == -1){
    foreach ($words as $word) {

        // calculate the distance between the input word,
        // and the current word
        $lev = levenshtein($input, $word);

        // check for an exact match
        if ($lev == 0) {

            // closest word is this one (exact match)
            $closest = $word;
            $shortest = 0;

            // break out of the loop; we've found an exact match
            break;
        }

        // if this distance is less than the next found shortest
        // distance, OR if a next shortest word has not yet been found
        if ($lev <= $shortest || $shortest < 0) {
            // set the closest match, and shortest distance
            // $closest  = $word;
            array_push($closest,$word);
            $shortest = $lev;
        }
    }
}

echo "Inputan Kata = $input"."<br>";
if ($shortest == 0) {
    echo "Kata yang cocok: $closest\n";
} else {
    // Turn off all error reporting
    error_reporting(0);
    $count = count($closest);
    // for($i = $count; $i>=($count/1.1); $i--){
    //     echo $closest[$i]."<br>";
    // }
    print_r($closest);
    // echo $closest;
}

?>

</div>

    <?php $this->load->view("_partials/js.php") ?>
</body>
</html>