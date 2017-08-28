<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<style>
html {
    background-image: url(page-bg.png);
}
fieldset {
    margin-left: 500px;
	margin-right: 500px;
	margin-top: 100px;
	color: #660099;
	width: 400px;
	height: 400px;
	background-color: white;
	font-color: #EEA200
}

input[type=text] , [type=password]{
    width: 434px;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	font-size:15px;
}

input[type=submit] {
    width: 100%;
    background-color: #FFA500;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
h3 {color: red;
text-align:center}

</style>
</head>
<body>
 <fieldset>

<div>


<input id="name" name="username" placeholder="username" type="text" class="input">
<input id="password" name="password" placeholder="Password" type="password" class="input1">
<a href="maintain.php"><button>Go to maintanance</button></a>

<img src="logo.png"  width="100" height="50" />

</fieldset>


</body>

</html>