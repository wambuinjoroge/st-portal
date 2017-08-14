@extends('layouts.app')
@section('content')
    <?php
//    Prime numbers are numbers that are only divisible by themselves and 1.
    $n=1;
        for($i=1 ; $i<10; $i++){
            if($n % $i !== 0){
            $n += $i;
            }
        }
        echo ('The sum is '. $n );
    ?>
    <p>You're correct!!</p>
    @stop