

<?php
  include 'navbar.php';
?>

<?php
  include 'Config.php';
?>

<div class="form">
  <div class="form__box">
    <div class="form__left">
      <div class="form__padding"><img class="form__image" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSqoqh7PTzdjkbz8HIDWJPBQB8VpFPg7SxfXg&usqp=CAU"/></div>
    </div>
    <div class="form__right">
      <div class="form__padding-right">
        <form method="post">
          <h1 class="form__title">Create a user</h1>
          <input class="" type="text" placeholder="Name" name="name" required/>
          <input class="" type="email" placeholder="Email" name="email" required/>
          <input class="" type="number" placeholder="Balance" name="balance" reuired/>
          <input class="form__submit-btn" type="submit" name="submit" value="Create"/>
  
      </div>
    </div>
  </div>



<style>
    @import url("https://fonts.googleapis.com/css?family=Ubuntu:700&display=swap");
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Times New Roman", Times, serif;
    text-decoration: none;
    }

    .form {
    width: 720px;
    height: 500px;
    margin: 50px auto;
    padding: 45px 65px;
    /* background: linear-gradient(to right, #8300cd, #b800c4); */
    }
    .form__box {
      background-color: #0D6EFD;
      background-image:
        linear-gradient(
          to right, 
          #FFf,
          #Fff, 
          rgb(240, 248, 255), 
          #F0F8FF
        );
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: space-around;
    align-items: center;
    /* background: #fff; */
    border-radius: 40px;
    }
    .form__left {
    width: 50%;
    }
    .form__padding {
    width: 210px;
    height: 210px;
    background: #fff;
    border-radius: 50%;
    margin: 0 auto;
    line-height: 210px;
    position: relative;
    }
    .form__image {
      
    max-width: 100%;
    width: 100%;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    }
    .form__right {
    line-height: 26px;
    width: 50%;
    }
    .form__padding-right {
    padding: 0 25px;
    }
    .form__title {
    font-size: 22px;
    font-weight: bold;
    /* text-align: center; */
    margin-bottom: 30px;
    }
    .form__submit-btn {
    background: #FFC107;
    cursor: pointer;
    width: 50%;
    }
    .form__submit-btn:hover {
      background-color: #212529;
      color: white;
    /* #0D6EFD */
    }

    input {
  
    display: block;
    width: 100%;
    margin-bottom: 25px;
    height: 35px;
    border-radius: 20px;
    border-color:#FFC107;
    /* background: #f2f2f2; */
    padding: 10px;
    font-size: 14px;
    position: relative;
    }
    input:after {
    position: absolute;
    content: "a***";
    }



</style>

<?php
   
    if(isset($_POST['submit'])){

    $name=$_POST['name'];
    $email=$_POST['email'];
    $balance=$_POST['balance'];
 
    $sql="insert into users(name,email,balance) values('{$name}','{$email}','{$balance}')";

    $result=mysqli_query($conn,$sql);

    if($result){
               echo "<script> alert('Hurray! User created');
                               window.location='transferMoney.php';
                     </script>";
                    
    }
  }
?>