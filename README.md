# Instruction
* You have to install PHP first. visit (https://windows.php.net/)
* While installing keep a note where are you installing the PHP (for windows while extraction Note the directory where you are saving)
* Now edit environment variables. And in **PATH** variable update the location of the PHP folder.
* To confirm everything is done smoothly. Type - ```php -v``` And this should return you the version if everything was fine. Otherwise you messed up in between.

## Running a server

first thing first you need to create a folder or directory wherein you want to start your server. This is for your own ease.
* Create a directory ex: ```Php Codes```
* Create a directory inside ```Php Codes``` named ```www``` Follow the naming correctly.
* Inside ```www``` directory keep all your php code.
* Now to see your program running, first start the server. ```php -S localhost:3000```
* Now goto your browser and type ```localhost:3000/www/phpFilename.php```
* **NOTE:** that here phpFilename.php will be replaced by the name of your file.
## Echo

```echo("Hello World");``` OR ```echo "Hello World";```
Writes information inside echo in the HTML page.

* **We can Also write HTML Code in echo**
```echo "<h1>Hello World</h1>";```

**Example Snippit:**
```
<?php
    echo "<h1>Hello World</h1>";
    echo "<p>Hello World is the basic program that is first developed to increase knowledge base</p>";
    echo "<hr>";
?>
```

## Variable

```
$name
$age
```
When we write $, it tells PHP that we are creating a variable. 
**Code Snippit**
```
    <?php
        $personName = "Jhon";
        $personAge = 29;
        echo "<h1>Sotry of $personName</h1>";
        echo "<p>There once was a man named $personName, He was $personAge years old. <br>He was quite funny and short tempered. And when he saw his age above 35 he shot himself.</p>";
        echo "<p>But we dont have to worry right now because of his current Age beign $personAge</p>";
        echo "<hr>";
    ?>
```


## Data Types

* String: Stores a stream of characters. **Example** ```$stringVariable = "This is string variable";```
* Decimal: Stores a decimal Numebr. **Example** ```$decimalVariable = 20;```
* Floating Point: Stores a floating Point Numebr. **Example** ```$floatingVariable = 20.23;```
* Boolean: Stores a value true or false. **Example** ```$booleanVariable = false;```
* null: Says No value. **Example:** ```$nullValue = null;```

**Example Snippit**
```
<?php
    $personName = "Jhon";
    $personAge = 29;
    echo "$personName is currently $personAge years Old.";
?>
```

## Fucntions
* strlen($sampleString): Returns the size of the parameter passed.
* strtoupper($allLowerCaseLetters): converts everything that is put inside () to upper case.
* strtolower($allUpperCaseLetters): converts everything that is put inside () to lower case.
* $variableName[0] : prints the first charater in the string.
* str_replace("jone","mark",$stringToBeChanged): here the first parameter is what we want to change and second parameter is what we want to change it with. And, the 3rd parameter is where it needs to be changed.
* substr($stringSample,startingIndexNumber, endingIndexNumber): this will return the substring with the given indexes.
**Example Snippit**
```
<?php
    $name = "Jone Thomson";
    echo "My name is $name <br> My name's length is";
    echo strlen($name);
    echo "<br>Converted to upper case ";
    echo strtoupper($name);
    echo "<br>Converted to lower case ";
    echo strtolower($name);        
    echo "<br>Word at 3rd index is ";
    echo $name[3];
    echo "<br>Replacing the string from Jone to Mark: ";
    echo str_replace("Jone","Mark",$name);
    echo "<br>Grabbing Substring ";
    echo substr($name, 4);
?>
```

## Working With Numbers

**Example Snippit**
```
<?php
    echo floor(23.90);
    echo "<br>";
    echo pow(2,5);
    echo "<br>";
    echo ceil(32.53);
    echo "<br>";
    echo sqrt(321);
    echo "<br>";
    echo 232+32;
    $num = 23;
    echo "<br>";
    $num++;
    echo $num;
    echo "<br>";
    $num--;
    echo $num;
    echo "<br>";
?>
```

## Getting User Input
So to get input from user we create a form. Now action will be pointing to the php page. While, the Method will be pointing to the GET. Why get? because we are getting data..
Create a input field. And give it a name. Note that name should be unique.

Secondly, on php page we need to handle that also. How can that be handled?
So first thing first init php. and write
```echo $_GET["namehere"]```
Now what this means is, we are saying that Get the value of tag with name = namehere. And echo it.

## Get & Post

**GET**

Get sends all data in the url. That is whatever the information we are trying to send is copied into url. 
It is accessed in php using
```$_GET["name"]```

**POST**
Post method does not copies the data into the url. It sends it anonymously. It is accessed in php using
```$_POST["name"]```


## Comments
* Single line comments // 
* Multiline Comments /* */ 

## Arrays
Arrays are a collection of variables. Just like we are defining variables $a, $b, etc. we can define them all in a group which is known as array.

```$followersArray = array('github','mark','andrew','neeraj');```

*Accessing the value of the array.*

```echo $followersArray[1]``` This would print **mark** as indexing starts from 0.

### 2-D Arrays

2-D (two dimensional array) is considered as array of array so the syntax will be similar to array of array.

```$friends2DArray = array(array('neeraj','mark'),array('jason','jitesh'))``` 

*Accessing is similar to 1-D array*

### Storing in array
To store in array we can use push method.

```$arrname.push(value)```

### Count()
To find the length of the array, we can use count ```count($emp);```


## Checkboxes

Create a form for checkboxes and in @params value and name we need to make sure that -
* value = what does the checkbox indicates for eg: amle, female etc.
* name = we will write the same name for all the checkboxes. As we want all these checkboxes to be in a group. We will write the same name for all the checkboxes and also, we will add [] in names as we want all the values of the checkboxes to be stored in array.

```<input type="checkbox" name="gender[]" value="male">```

And in php, we will access the value. ```$_POST["gender"]```. This will return an array. We don't need to specifically write ```[gender[]""]``` in php. And the value of this post req. can be accessed using ```[i]``` where i is the index.


## Associative Arrays
It is like an array of {key=>value} pair.
* Key value pair is mapped using =>
* Key should be always unique
* So, now to access the value, you should know the key. Otherwise it throws an error.

**Code Snippit**
```
$grades = array("Neeraj"=>10, "Andrew"=>10, "Mark"=>8.7);
echo $grades["Neeraj"];
```
This would return the value associated with key "Neeraj" 

## Functions

```
function HelloWorld(){
    //function body
    echo "Hello World!!";
}
```

So, this will be a function, now we need to call this fucntion. And this can be simply done by writing the function name followed with parenthesis.
*Example:* ```HelloWorld();```

### Function with parameters

```
function HelloWorld($name){
    //function body
    echo "Hello $name!!";
}
HelloWorld("Neeraj");
```

### Return value in function

So, to get a return value from a function, you just have to use a return keyword. 
```

function add($num1, $num2){
    $sum = $num1+$num2;
    return $sum;
}
echo add(2,3);
```

## If - Else - Nested If - Statements
If else statements are used as conditionals. We can say that if you are mark then ay 20$. Else Don't pay. So this is a simple case of if-else statement.

Similarly we can use the condition ofr 3 person. i.e if you are mark then pay 20$. Else if you are jone pay 10$. else don't pay anything.

Example code snippit of if-else and elseif can be seen below.
**Snippit**

```
<?php
    $isFail = true;
    if($isFail){
        echo "You have failed the exam";
        echo "<br>";
    }
    else{
        echo "You have passed the exam but failed life";
    }
    
    // $isMale = "a";
    $isMale = "a";
    $isTall = false;
    if($isMale!=true || $isMale!=false && $isTall!=false || $isTall!=true ){
        echo "Ahh!! I don't know what you are and what's your height.<br>";
    }
    else if($isMale && $isTall){
        echo "You are Tall and Male <br>";
    }
    else if($isMale && !$isTall){
        echo "You are Male but small <br>";
    }
    else if(!$isMale && $isTall){
        echo "You are a woman and You are Tall <br>";
    }
    else{
        echo "You are a woman and You are small <br>";
    }
?>
```


## 