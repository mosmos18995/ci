<?php

class Calculator extends CI_Controller
{
    public function plus($number1 = 0, $number2 = 0)
    {
        echo "ค่าที่ 1 คือ : " . $number1 . '<br>';
        echo "ค่าที่ 2 คือ : " . $number2 . '<br>';
        echo "ผลลัพธ์ของผลรวม" .$number1. " + " . $number2 . " คือ " . ($number1 + $number2); 
    }
}
