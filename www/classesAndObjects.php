<?php
    class Book{
        var $Name;
        var $Author;
        var $Price;
        var $Year;
        var $Pages;
        var $Available;
        private $locked;
        function __construct($name, $author, $price, $year, $pages,$available, $locked){
            $this->Name= $name;
            $this->Author= $author;
            $this->Price= $price;
            $this->Year= $year;
            $this->Pages= $pages;
            $this->Available= $available;
            $this->setLocked($locked);
        }
        function display($book1){
            echo $book1->Name;
            echo "<br>";
            echo $book1->Author;
            echo "<br>";
            echo $book1->Price;
            echo "<br>";
            echo $book1->Year;
            echo "<br>";
            echo $book1->Pages;
            echo "<br>";
            echo $book1->Available;
            echo "<br>";
            echo $book1->getLocked();
            echo "<br>";
        }

        function isAffordable (){ //using this keyword
            if($this->Price<=100) return true;
            else return false;
        }
        function getLocked(){
            return $this->locked;
        }
        function setLocked($newVal){
            $this->locked = $newVal;
        }
    }

    class age{
        function young(){
            echo "Young age ";
        }
        function elder(){
            echo "Elder age";
        }
        function old(){
            echo "Old age";
        }
    } 
    //what i am doing is creating another class of NeerajAge which extends (meaning copies all the properties of age in this one)
    class NeerajAge extends age{
        function calAge($currAge){
            echo "Current age is: $currAge";
        }
    }
    //Here i am assigning the values using the constructor.
    $book1 = new Book("Programming PHP","Github",200,2022,300,"Yes", "Yes");
    $book1->display($book1);
    $book2 = new Book("Programming C","Github",202,2001,3200,"No", "Yes");
    $book2->display($book2);
    echo "<br>Is the book Affordable?&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
    if($book1->isAffordable()){
        echo "Affordable<br>";
    }
    else {
        echo "Not Affordable";
    }
    echo "<br><br>";
    // We can access the $vairbale using the class functions.
    // One of the class function is constructor.
    // Initally we have set the locked as Yes, and if i try to reset it to NO.
    // $book1->locked = "No"; //this would give an error.
    //So we cannot edit the $locked variable directly.

    //Now using getter and setters for locked variable...
    echo $book1->getLocked();
    $book2->setLocked("No");
    echo "<br>";echo "<br>";
    echo $book2->getLocked();
    
    //inheritance 
    $age1 = new age;
    $age2 = new NeerajAge;
    echo "<br>Calling age1 young() ";
    $age1->young();
    echo "<br>";
    echo "Calling age2 young()";
    $age2->young();
    echo "<br>";
    echo "Calling age2 calAge() ";
    $age2->calAge(21);
    echo "<br>";

    //Assigning the values manually to the book class.
    // $book1 = new Book;
    // $book1->Name = "Programming PHP";
    // $book1->Author = "Github";
    // $book1->Price = 200;
    // $book1->Year= 2022;
    // $book1->Pages = 300;
    // $book1->Available = "Yes";

    // echo $book1->Name;
    // echo "<br>";
    // echo $book1->Author;
    // echo "<br>";
    // echo $book1->Price;
    // echo "<br>";
    // echo $book1->Year;
    // echo "<br>";
    // echo $book1->Pages;
    // echo "<br>";
    // echo $book1->Available;
    // echo "<br>";
?>
