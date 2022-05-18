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