<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{ asset('Reg.css') }}">
</head>
<body>
<!-- <form id="registrationForm"> -->
  <div class="container">
    <hr>

	<!-- <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" id="name">

    <label for="surname"><b>Surname</b></label>
    <input type="text" placeholder="Enter Surname" name="surname" id="surname">

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email">

    <label for="msg"><b>Message</b></label><br>
    <textarea name="msg" cols="35" rows="10">  </textarea>
     <br>-->

    <?php
        echo Form::open(array('url' => '/uploadfile', 'files' => 'true'));
        echo "Select the file to upload";
        echo Form::file('image'); echo "<br>";
        echo Form::submit('Send');
        echo Form::close();
    ?>
    
    <!-- <button type="submit" class="registerbtn">Send</button> -->
  </div>
<!-- </form> -->
    
</body>
</html>