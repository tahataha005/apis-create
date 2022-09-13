<?php

// Note: Couldn't download post man so I used get to solve this question


$password = $_GET["password"];

$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$numbers = preg_match('@[0-9]@', $password);
$characters = preg_match('@[^\w]@', $password);
$results = [
    "password" => $password
];
$strength = 0;


// Validations

if(strlen($password) > 11){
    $results += [
        "length" => "good"
    ];
    $strength+=1;
}
else{
    $results += [
        "length" => "should be greater than 12 characters"
    ];
}




if($uppercase == 1){
    $results += [
        "uppercase" => "present"
    ];
    $strength+=1;
}
else{
    $results += [
        "uppercase" => "absent"
    ];
}




if($lowercase == 1){
    $results += [
        "lowercase" => "present"
    ];
    $strength+=1;
}
else{
    $results += [
        "lowercase" => "absent"
    ];
}




if($numbers == 1){
    $results += [
        "numbers" => "present"
    ];
    $strength+=1;
}
else{
    $results += [
        "numbers" => "absent"
    ];
}




if($characters == 1){
    $results += [
        "characters" => "present"
    ];
    $strength+=1;
}
else{
    $results += [
        "characters" => "absent"
    ];
}


// Strength Check

if($strength == 5){
    $results += [
        "STRENGTH" => "Very Strong"
    ];
} else{
    if($strength == 4){
        $results += [
            "STRENGTH" => "Strong"
        ];
    } else{
        if($strength == 3){
            $results += [
                "STRENGTH" => "Neutral"
            ];
        } else{
            if($strength == 2){
                $results += [
                    "STRENGTH" => "Weak"
                ];
            } else{
                if($strength == 1){
                    $results += [
                        "STRENGTH" => "Very Weak"
                    ];
                } else{
                    if($strength == 0){
                        $results += [
                            "STRENGTH" => "Unaccepted"
                        ];
                    }
                }
            }
        }
    }
}

echo json_encode($results)

?>