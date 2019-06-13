<?php include("connection.php") ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Registration page</title>
	</head>
	<body>
		<fieldset>
			<legend>User Registration Form</legend>
			<table>
				<tr>
					<td><label>Name</label></td>
					<td><input type="text" name="name"  id="name"></td>
				</tr>
				<tr>
					<td><label>User Name</label></td>
					<td><input type="text" name="username" id="username"></td>
				</tr>
				<tr>
					<td><label>Email Id</label></td>
					<td><input type="email" name="email" id="email"></td>
				</tr>
				<tr>
					<td><label>Password</label></td>
					<td><input type="password" name="password" class="password"></td>
				</tr>
				<tr>
					<td><label>Confirm Password</label></td>
					<td><input type="password" name="password" class="password"></td>
				</tr>
				<tr>
					<td><label>Security Question</label></td>
					<td>
						<select id="question">
							<option>What is your favourite Pet</option>
							<option>What is your favourite place</option>
							<option>What is your favourite Color</option>
						</select>
					</td>
				</tr>
				<tr>
					<td><label>Your Answer</label></td>
					<td><input type="text" name="" id="answer"></td>
				</tr>
				<tr>
					<td><button onclick="saveData()">Save</button></td>
					<td><button onclick="resetData()">Clear</button></td>
				</tr>
			</table>
		</fieldset>
		<script type="text/javascript">
			var password = document.querySelector('.password').value;
			console.log(password);
			function saveData(){
				var name = document.querySelector('#name').value;
				var username = document.querySelector('#username').value;
				var email = document.querySelector('#email').value;
				var password = document.querySelector('.password').value;
				console.log(password);
				var question = document.querySelector('#question').value;
				var answer = document.querySelector('#answer').value;
				var xmlReq = new XMLHttpRequest();
				xmlReq.onreadystatechange = function(){
					if(this.readyState == 4 && this.status == 200){
						var data = this.response;
						alert(this.response);
						
					}
				}
					xmlReq.open("POST","register_insert.php",true);
					xmlReq.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
					xmlReq.send("name="+name+"&username="+username+"&email="+email+"&password="+password+"&question="+question+"&answer="+answer);
				}
		</script>
	</body>
</html>