<?php
if(isset($path[2]{0})) edit($db,$path[1]);
elseif(isset($path[1]{0})) detail($db,$path[1]);
else index($db);

function detail($db,$name){
	$name=preg_split('/-/',$name);
	$sql=new mySQL();
	$sql->connect($db['host'],$db['dbname'],$db['user'],$db['password']);
	$result=$sql->select('SELECT * FROM users WHERE firstname=? AND lastname=?',[$name[0],$name[1]]);
	if($result->rowCount()>0) print_r($result->fetch());
	else echo 'name not found';
}

function index($db){
	$sql=new mySQL();
	$sql->connect($db['host'],$db['dbname'],$db['user'],$db['password']);
	$result=$sql->select('SELECT ID,firstname,lastname,email FROM users');
	echo '<table>';
	while($row=$result->fetch()){
		echo '<tr><td>'.$row['ID'].'</td><td><a href="'.$row['firstname'].'-'.$row['lastname'].'">'.$row['firstname'].' '.$row['lastname'].'</a></td><td>'.$row['email'].'</td><td><a href="'.$row['firstname'].'-'.$row['lastname'].'/edit">edit</a></tr>';
	}
	echo '</table>';
	
}

function edit($db,$name){
	$name=preg_split('/-/',$name);
	$sql=new mySQL();
	$sql->connect($db['host'],$db['dbname'],$db['user'],$db['password']);
	$result=$sql->select('SELECT * FROM users WHERE firstname=? AND lastname=?',[$name[0],$name[1]]);
	if($result->rowCount()>0){
		$row=$result->fetch();
		?><form method="POST">
First name: 
<input type="text" value="<?= $row['firstname'] ?>" /><br />
Last name: 
<input type="text" value="<?= $row['lastname'] ?>" /><br />
Email: 
<input type="text" name="email"value="<?= $row['email'] ?>"  /><br />
Password: 
<input type="text" value="<?= $row['password'] ?>" /><br />
<button type="submit">Submit</button>
</form>
	<?php
	}
	else echo 'name not found';
}