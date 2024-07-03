<?php include("database.php");?>
<head>
<title>Feedback</title>
<style>
   .form {
    max-width: 500px;
    margin: 0 auto;
    padding: 20px;
    border: 4px solid #ccc;
    border-radius: 10px;
    background-color: darkcyan;
}
.feedback-form {
    display: flex;
    flex-direction: column;
}
.form label {
    font-size: 18px;
    font-style: italic;
    font-family: serif;
    font-weight: bolder;
    color: ghostwhite;



}
.form input[type="text"],
.form input[type="email"],
.form input[type="number"],
.form textarea {
    width: 100%;
    margin-bottom: 30px;
    border: 3px solid #ccc;
    border-radius: 5px;
    background-color: ghostsmoke;
}
.form textarea {
    resize: vertical;
    min-height: 100px;
}
.form input[type="text"],
.form input[type="email"],
    .form input[type="number"],
    .form textarea {
        padding: 8px;
        font-size: 14px;
        border-radius: 10px;
         }
body{
    background-color:white;
}
h1{
    background-color: white;
    text-align: center;
   font-family: fantasy;
   font-size: 30px;
   font-style: italic;
   

}
label:hover{
 background-color: crimson;
}
.input [type="submit"]{

    font-weight: bolder;
text-decoration: none;
display: inline-block;
background-color: black;
color: white;
border-radius: 10px;
padding: 15px;
margin: 0 auto;
font-size: 18px;
}
</style>
<body>
    <h1>Student Feedback form</h1>
    <div class="container">
      <form action=feeback.php method="Post">
        <div class="form">
            <div class="input field">
                <label> FirstName</label>
                <input type="text" class="input" name="fname">
        </div>
               <div class="input field">
                <label> last name</label>
                <input type="text" class="input" name="lname">
        </div>
      <div class="input field">
<label>Message</label>
        <textarea rows="4" cols="40" id="msg" name="msg"></textarea>
    </div>
    <div class="input field3">
 <center><input type="submit" value="submit"class="btn" name="register">
</center>
</div>
</form>
</body>
</html>
<?php
 if ($_POST['register'])
 {
    $fname=$_POST['fname'];
        $lname=$_POST['lname'];
$fmsg=$_POST['msg'];
$query = "INSERT INTO feeback VALUES('$fname','$lname','$fmsg')";
$data = mysqli_query($conn,$query);
      if($query)
       {
        echo "data inserted into database";
         }
        else
        {
            echo"failed";
        }
    }
?>                  