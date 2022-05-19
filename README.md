# Resources
* Web: https://www.php.net/manual/en/index.php
* Youtube: https://www.youtube.com/watch?v=OK_JCtrrv-c
* Online PHP Code Editor: https://www.w3schools.com/php/phptryit.asp?filename=tryphp_compiler
* W3Schools: https://www.w3schools.com/php/default.asp
# Instruction
* You have to install PHP first. visit (https://windows.php.net/)
* While installing keep a note where are you installing the PHP (for windows while extraction Note the directory where you are saving)
* Now edit environment variables. And in **PATH** variable update the location of the PHP folder.
* To confirm everything is done smoothly. Type - ```php -v``` And this should return you the version if everything was fine. Otherwise you messed up in between.
* All the code snippits and examples are also written in seperate php files inside ```www``` folder. You can checkout according to the names they have been assigned.

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

```
echo "Hello, there ". $name." How are you";
```
We can write variable and text at same line with .(dot) operator.


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


## Switch
Switch statements are similar to the if-else statemetns.
Sytanx of switch statement:

```
switch($roll){
    case 1:
        echo"You attendance is 10<br>";
        break;
    case 2:
        echo"You attendance is 20<br>";
        break;
    case 3:
        echo"You attendance is 8<br>";
        break;
    case 4:
        echo"You attendance is 15<br>";
        break;
    case 5:
        echo"You attendance is 23<br>";
        break;
    case 6:
        echo"You attendance is 14<br>";
        break;
    case 7:
        echo"You attendance is 40<br>";
        break;
    default:
        echo "Your attendace is Not recorded<br>";
}
```

## LOOPING 
Looping is a way of iterating through the set of values or variables multiple times.
There are 3 types of loops:
* While
* For
* do-while

### While
The syntax for while loop is:

```
$i = 1;
while($i<100){
    echo "Hi i printed $i time <br>";
    $i+=1;
}
```
So, this would print the statement 99 times. 

While condition basically means that continue to iterate through the loop unless, a certain condition is met.

### For
 The syntax for ```for``` loop is simple. It is created with 3 @params.
 * initializing variable
 * condition
 * increment

 ```
for($i=0;$i<99;$i++){
    echo "I am Roll Number $i <br>";
}
 ```

 ## do-while
 do while loops atleast one time.
 The syntax of PHP do-while code is:

```
$i = 0;
do{
    echo "$i$ are with me<br>";
    $i++;
} while($i<=100);

```

## Project (Beginner Level)- Test Knowledge
* Greeter (Greets you with you name and welcomes you)
* MadLips
* Calculator

## Include in PHP
So now, let us assume that we have 100+ pages with us. And, we have a common thing in it. ```HEADER``` & ```FOOTER```. 
So what we will do is include that in our file(main.php). First thing first, we will create a ``header.php`` file. And ```footer.php``` and add the contents to thsoe files.
Now, as we have created them we need to add them in every page that we have by using keyword ```include```.
Ex: ```include "header.php"```

**Addition**
You can add HTML files also. You just need to specify the name.extension


**Note:** That PHP executes on what is written first executed first, so you will have to include the file in relevent position. If your file needs to be added in middle then, you will include that in middle and so on...

**Code snippit**
```
<?php
    echo "<br><br><br>";
    include "header.php";
    echo "<h2>";
    echo $_POST["data"];
    echo "</h2>";
    include "footer.php";
?>
```

**Include & Require Two methods of include.**

**Include:** Includes external file into php. It throws an warning and continues to the next if it doesn't finds the file. include(def.php); 
**include_once:** Includes external file, but once only. Even if it is included multiple times. include_once(def.php); 

**Require:** Makes it mandatory to include the file and if the file is not found throws an error. 
Two methods: require, require_once require(); 
**require_once:** requires a file once only even if it is called multiple times.

### Edit the variables & use functions of other php file.

So let us suppose we have a php file which contains 2 functions and a second file that contains author information. So, we know that this is the repetition code. So we use include but how can we change its variables? 
So it is easy you just have to include the file adn then write the same variables and change their values. 

We have created 2 seperate files named: ```authorDetail.php``` and ```author.php```

* In ```author.php```

```
<?php
function info($authorName, $authorArea, $totalPosts){
    echo "<br>";
    echo "author name : ";
    echo $authorName;
    echo "<br>";
    echo "author posts: ";
    echo $totalPosts;
    echo "<br>";
    echo "author area: ";
    echo $authorArea;
    echo "<br>";
}
?>
```

* In ```authorDetail.php```

```
<?php
function blogOwnerInfo($blogOwner){
    echo "$blogOwner is the Owner of the Blog";
}
?>
```

And now we have our main file named: ```include.php``` we have:

```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Include</title>
</head>
<body>
    <form action="include.php" method="POST">
    Enter about Via5k: <input type="text" name="data"> <br> <br>
    <input type="submit"> <br>
</form>

<?php
    echo "<br><br><br>";
    include "header.php";
    echo "<h2>";
    echo $_POST["data"];
    echo "</h2>";
    include "footer.php";

    // Edit variable of other files and use fucntions of other php files.
    echo "<br><br><br><br><br><br>";
    echo "New web <br>";
    $authorName = "Neeraj";
    $authorArea = "Technology"; 
    $totalPosts = 10;
    include "authorDetail.php";
    include "author.php";
    $blogOwner = "VIASK";
    blogOwnerInfo ($blogOwner);
    info($authorName, $authorArea, $totalPosts);
?>
</body>
</html>
```

## Classes and Objects

Class is a specification for custom data type.
So for example, we want to create a datatype for Book.
So, we don't have a Book datatype so we will create one using class.

Class is created using ```class ClassName {}```
**Example Class:**

```
    class Book{
        var $Name;
        var $Author;
        var $Price;
        var $Year;
        var $Pages;
        var $Available;
    }
```
**Note** how we have written var in front of the variables. This is done for the visibility. Var acts somewhat similar to public.


So now to create an object of this class. We can do something like this: ```$Book1 = new Book;``` This would create an object of Book Class.

And to assign Values, we can do it by using ```->```
Example: ```$book1->Price = 200``` and similarly it can be accessed using ```$book1->Price```

**Code Snippit:**

```
<?php
    class Book{
        var $Name;
        var $Author;
        var $Price;
        var $Year;
        var $Pages;
        var $Available;
    }
    $book1 = new Book;

    $book1->Name = "Programming PHP";
    $book1->Author = "Github";
    $book1->Price = 200;
    $book1->Year= 2022;
    $book1->Pages = 300;
    $book1->Available = "Yes";

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
?>
```

### Constructors
Special function that is called upon the class. Note that the name of the constructor should be ```function __construct(){}```
This function is called automatically when the instance of the class is created.


**Code Snippit:**

```
function __construct($name, $author, $price, $year, $pages,$available){
    $this->Name= $name;
    $this->Author= $author;
    $this->Price= $price;
    $this->Year= $year;
    $this->Pages= $pages;
    $this->Available= $available;
}
```
So this keyword is used when we have same names. Here we have different as i used capital first letter in class and as @param used small first letter.

### Object function
Object function is something that can be defined inside a class and then that class can use that object function.
So we call the object functions like this: ```objectname->functionName()```

Done with passing parameter so the value is being checked by this keyword. That is: this->Price means that for the current object check the price and if it is less than or equal to 100 then return true.

```
function isAffordable (){ //using this keyword
    if($this->Price<=100) return true;
    else return false;
}
```

**Calling the object function**
```$book1->display($book1);```
```$book1->isAffordable()```


Now, Done by passing the object in the object function.

This here means we are passing which object are we working on and then accessing its information.
```
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
}
```

### Vsibility
* public: can be accessed out of class.
* private: cannot be accessed outside the class.

### Getters and Setters
these are created inside the class.
* Getters: it is simply readOnly.
* Setters: it is simply write only.

**Code Snippit:**

```
private $locked; //must be private so that no one other than class can edit this.

function getLocked(){
    return $this->locked;
}
function setLocked($newVal){
    $this->locked = $newVal;
}
```

**Calling the getter And setter along with modifying the values.**
```
echo $book1->getLocked();
$book2->setLocked("No");
echo $book2->getLocked();
```


### Inheritance

done using the keyword ```extends```
So what basically it does is: copies the same properties of the other class in iteslf and adds some other functionalities to its own class. For example.

```
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
//inheritance  

$age1 = new age;
$age2 = new NeerajAge;
echo "Calling age1 young() ";
$age1->young();
echo "<br>";
echo "Calling age2 young()";
$age2->young();
echo "<br>";
echo "Calling age2 calAge() ";
$age2->calAge(21);
echo "<br>";
```

**THE OUTPUT WILL BE SOMETHING LIKE THIS**
```
Calling age1 young() Young age
Calling age2 young()Young age
Calling age2 calAge() Current age is: 21
```
So, we can see that for age2 which is an instance of NeerajAge, young() was able to be called. And at the same time, calAge() was also called. This is all because of inheritance.


## Database connection With PHP
To connect to a database we need work in 3 steps.
1. Provide Credentials
2. Create a connection
3. Check if the connection is established nad after that terminate it.

So, below php code shows simple implementation of the above 3 steps.

Connection is created using : ```sqli_connect($domain,$username,$password);```
and a fourth optional parameter can be passed i.e database name.


```
<?php
    $domain = "localhost";
    $username = $_POST["username"];
    $password = $_POST["password"];
    // creating a connection
    $connection = mysqli_connect($domain,$username,$password);
    if($connection){
        echo "Connection Established";
    }
    else{
        echo "Connection Failed";   
    }
?>
```

**Note:** When inserting use single quotes `' '`

### SQL Query
sql queries are like this: 

```
$q1 = "create database persons";
$q2 = "use persons";
$q3 = "create table information(name varchar(30), email varchar(30), age int)";
$q4 = "insert into information values('$name', '$email', $age)";
```

So, here something to note is i have used '$name' and same for '$email'. This is because they were declared as varchar. 

Another thing is, varchar is the datatype not varchar2.

At the same time all the rules are followed similarly to the sql queries but with a minor difference in syntax.

**Code Snippit**: Of Creating connection to database, Fetching data from form, Storing information in database, displaying data of teh database and closing the connection.

```
<?php
	$domain = "localhost";
	$username = "root";
	$password = "";
	// creating a connection
	$connection = mysqli_connect($domain,$username,$password);
	if(!$connection){ //if connection not established
		exit("Connection failed");
	}
	//getting the data from the html file
	$name = $_POST["personName"];
	$email = $_POST["personEmail"];
	$age = $_POST["personAge"];
	
	//SQL Queries
	//creates a database named persons.
	$q1 = "create database persons";
	//use the database persons.
	$q2 = "use persons";
	//creates the structure of the table.
	$q3 = "create table information(name varchar(30), email varchar(30), age int)";
	//Inserting the data in the table.
	$q4 = "insert into information values('$name', '$email', $age)";

	//runs the query in the connection established and the query.
	mysqli_query($connection,$q1);
	mysqli_query($connection,$q2);
	mysqli_query($connection,$q3);
	mysqli_query($connection,$q4);
	
	//Displaying the data of the Database.
	$q5 = "select * from information";
	$res = mysqli_query($connection,$q5); //storing the data that we have got into the $res.
	
	//Checking if the number of rows fetched is greater than 0, then do-
	if(mysqli_num_rows($res)>0){
		//store the row no 1 in $row variable.
		while($row = mysqli_fetch_assoc($res)) {
			//we are displaying the data of the stored $row variable.
			//$row['name'] means that from the $row variable, find the col with 'name' and print its value. Similarly in anothers also.
			echo "Name: " . $row['name']. " Age: " . $row['age']. " Email: " . $row['email']. "<br>";
		}
	}//Otherwise, display no information.
	else{
		echo "No records <br>";
	}
	//closing the connection.
	mysqli_close($connection);
?>
```



## Cookies
Stores the information in form of key:value pair known as cookie.
**NOTE** Cookie sends information through HTTP. 

That means it embeeds the cookie in Header. So, one thing to note is that, Whenever you are trying to set the cookie, it should be done prior to the HTML. As we cannot modify the headers once they are send. 

A cookie is a small file that the server embeds on the user's computer. Each time the same computer requests a page with a browser, it will send the cookie too. With PHP, you can both create and retrieve cookie values.

To create a cookie, we can do like this-
```
setcookie("key","value");
```

Generalised Syntax of setcookie include:
```
setcookie(name, value, expire, path, domain, secure, httponly); 
```

To check if the cookie is set or not?
```
if(isSet($_COOKIE['key'])){
    echo "Welcome, ".$_COOKIE["key"];
}else{
    echo "Sorry!!";
}
```


**Code Snippit:** For Setting Cookie

```
//As set cookie should be called first than that of the HTML.
<?php
    setcookie("name","neeraj");
?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
    <?php
    if(isSet($_COOKIE['name'])){
        echo "Welcome, ".$_COOKIE["name"];
    }else{
        echo "Sorry!! No cookie found";
    }
    ?>   
</body>
</html>
```


So, now if we want a cookie to expire in certain time. We can pass a third parameter in the setcookie.
```
setcookie('key','value',time()+60000);
```
So this will expire in 1 minute. and we pass the time as: time()+miliseconds.

So, whenever we want to destroy a cookie we write -milisecond. This means that cookie should have been destroyed easrlier and so it deletes cookie instantly.

**Code Snippit**
<?php
    setcookie("name","neeraj", time()-1);
?> 

## Session
Saves the information inside the server. 

While Cookies save the information in client side.

A session ends when we close the browser.

But a cookie has time limit. It can be 30, 20 or 1 day limit. i.e it will expire after certain days.

### Session Start and Setting Session variable
To start a session ```session_start()```
And note, like cookies, this should be also started before the HTML. 
After which we can set the session vairable that is key value.

* This will create a session with key:value as username and password```$_SESSION['username']``` ```$_SESSION['password'] ```
* Now, coming onto the setting of the session variable.

1. $_SESSION['username'] = "neeraj";
2. $_SESSION['password'] = "thisIsPassword;";
   
Now, as the session variables are set we can access them simply like cookies. i.e by ```$_SESSION['username'];``` etc.

### To Destroy the session and remove all session variable.

To remove all session variables, we use ```session_unset();``` Which removes all the session varibales.

And, to destroy a session use, ```session_destroy()``` Which will destroy the session along with its data.

```
<?php
    session_unset();
    if(isSet($_SESSION['username'])){
        echo "Session Alive";
    }else{
        echo "Session Killed";
    }
?>
```


### Code Snippit of Session CREATE, DESTROY

*filename: session.php*

```
<?php
//this will start the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>

<body>
    <form action="./session.php" method="POST">
        <input type="text" name="username" placeholder="Username"><br>
        <input type="text" name="password" placeholder="Password"><br>
        <input type="submit"><br>
    </form>

    <?php 
        $username = $_POST["username"];
        $password = $_POST["password"];

        $_SESSION["username"] = $username;
        $_SESSION["password"] = $password;

        if(isSet($_SESSION['username'])){
            echo "Session successfully set!!";
            echo "<br>";
            echo '
            <form action="./sessionDestroy.php" method="POST">
                <button type="submit">Destroy Session</button><br>
            </form>
            ';
        }
        else{
            echo "Session <b>Not</b> set";
        }
    ?>
</body>

</html>
```


*filename: sessionDestroy.php*

```
<?php
    session_unset();
    if(isSet($_SESSION['username'])){
        echo "Session Alive";
    }else{
        echo "Session Killed";
    }
?>
```


