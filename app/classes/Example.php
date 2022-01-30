<?php


namespace App\classes;


class Example
{
    public $name;
    public $email;
    public $mobile;
    public $firstName;
    public $lastName;
    public $x;
    public $y;
    public $z;
    public $data=[];

    public function index()
    {
       // $this->firstName = 'Robin';//this->firstName means catching method
       // $this->lastName = 'khan';
        // echo "hello"." ".$this->firstName ." ".$this->lastName;

        $this->x = 10;
        $this->y = 20;
        $this->z = 30;

//        echo $this->x + $this->y;
//        echo "<br>";
//        echo $this->x - $this->y;
//        echo "<br>";
//        echo $this->x * $this->y;
//        echo "<br>";
//        echo $this->x / $this->y;
//        echo "<br>";
//        echo $this->x % $this->y;

//        echo $this->x++;
//        echo '<br>';
//        echo $this->x;
//
//        echo ++$this->x;
//        echo '<br>';
//        echo $this->x;

//        echo $this->x--;
//        echo '<br>';
//        echo ++$this->x;
//        echo $this->x++;
//        echo '<br>';
//        echo $this->x;



//        echo $this->x+=$this->y; //$this->x = $this->x + $this->y;
//        echo '<br>';
//        echo $this->x-=$this->y;//$this->x = $this->x + $this->y;
//        echo '<br>';
//        echo $this->x *= $this->y;//$this->x = $this->x + $this->y;
//        echo '<br>';
//        echo $this->x /= $this->y;//$this->x = $this->x + $this->y;
//        echo '<br>';
//        echo $this->x %= $this->y;//$this->x = $this->x + $this->y;
//        echo '<br>';
//        echo $this->x .= $this->y;//$this->x = $this->x concate $this->y;

//        echo $this->x > $this->y;
//        echo $this->x >= $this->y;
//        echo $this->x < $this->y;
//        echo $this->x <= $this->y;
//        echo $this->x != $this->y;
//        echo $this->x === $this->y;
//        echo $this->x !== $this->y;


//        echo ($this->x > $this->y) && ($this->y > $this->z);
//        echo '<br>.....</br>';
//        echo ($this->x > $this->y) && ($this->y < $this->z);
//        echo '<br>.....</br>';
//        echo ($this->x < $this->y) && ($this->y < $this->z);
//        echo '<br>.....</br>';




//        echo ($this->x > $this->y) || ($this->y > $this->z);
//        echo '<br>.....</br>';
//        echo ($this->x > $this->y) || ($this->y < $this->z);
//        echo '<br>.....</br>';
//        echo ($this->x < $this->y) || ($this->y < $this->z);
//        echo '<br>.....</br>';


//        $this->x=100;
//        if ($this->x >20){
//            echo $this->x;
//        }
//        else{
//            echo "hello world";
//        }

//        switch ($this->x){
//            case 10:
//                echo "heloo";
//                break;
//            case 20:
//                echo "world";
//                break;
//            case 30:
//                echo "welcome";
//                break;
//            case 40:
//                echo "to";
//                break;
//            case 50:
//                echo "Bangladesh";
//                break;
//            default:
//                echo "bitm";
//
//        }


//        for($this->y = 10; $this->y <=15; $this->y++){
//            echo 'helo world <br/>';
//        }
//        for($this->y = 99; $this->y >=77; $this->y--){
//            //echo 'helo world <br/>';
//            echo $this->y.'';
//        }
//
//    $this->x =100;
//        while ($this->x < 110){
//            echo 'hello world <br/>';
//            $this->x++;
//        }


//        $this->x =100;
//        do{
//            echo 'hello bangladesh<br/>';
//            $this->x++;
//        }while($this->x <110);


        $this->data = [10,20, 30,"bitm",100.200,true];
        //echo $this->data[9];

        foreach ($this->data as $item){
            echo $item;
        }


    }

}