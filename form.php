<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <link href="https://fonts.googleapis.com/css?family=Raleway:300&display=swap" rel="stylesheet">
  <link href="ursastyles.css" rel="stylesheet" type="text/css">
  <meta charset="utf-8" name= "viewport" content="width:device-width, initial-scale=1">
  <title>Connect</title>
</head>
<style>

body {
  width:100%;
  height:100%;
  margin: 0px;
  text-align: center;
  background-color: black;
  font-family: 'Raleway', sans-serif;
  font-weight: 300;
  font-size: 0px;
overflow-x: hidden;
}

.container {
  margin: 10px;
  padding: 40px;
  text-align: center;
  align-self: center;
  word-spacing: 1px;
}

header {
  background: white;
  top: 0;
  left: 0;
  right: 0;
  align-items: center;
}

header::after {
  content: '';
  display: table;
  clear: both;
}

.nospace {
  display: block;
  font-size: 0;
  text-align: center;
}

nav {
  font-size:10px;
  text-align: center;
  padding-right: 50px;
  padding-left:-50px;
  width: 100%;
  padding-top: -30px;
  padding-bottom: 90px;
}

nav ul {
  margin: 0;
  padding: 0;
  list-style: none;
}

nav li {
  display: inline-block;
  margin-left: 50px;
  margin-right:50px;
  margin-top: 30px;
  margin-bottom:0px;
  position: relative;
  direction: row;
}

nav a {
  color: black;
  text-decoration: none;
  font-size: 20px;
  float: center;
}

nav a:hover {
  color: black;
}

nav a:before {
  content: '';
  display: block;
  height: 5px;
  background-color: black;
  position: absolute;
  top: 0;
  width: 0%;
  transition: all ease-in-out 250ms;

}

nav a:hover:before {
  width: 100%;
}

    footer {
      background-color: black;
      color:white;
      padding: 30px;
      color: black;
      padding:20px;
      word-spacing: 5px;
      text-align: center;
    }

    h1{
      font-family: 'Raleway', sans-serif;
      background-color: black;
      padding: 40px;
      color: white;
      display:block;
    }

    form {
      display: block;
    }

    survey-form {
      background-color: white;
      padding: 10px 0px;
      display: grid;
      grid-template-rows: auto;
      grid-gap: 10px 20px;
      justify-content: center;
    }

    label {
      background-color: black;
      padding: 10px;
      text-align: center;
      margin: 10px 0px;
      align-self: center;
      color:white;
      font-size: 25px;
      float: center;
    }

    input {
      text-align: left;
      margin: 10px 0px;
      height: 30px;
      padding: 4px 4px;
    }

    select {
      margin: 10px 0px;
      height: 30px;
      padding: 4px 4px;
    }

    .row row-field {
      padding-top: 20px;
    }

    .field-label {
      align-self: flex-start;
      margin-top: 20px;

    }

    .field-input {
      font-size: 1.2 em;

    }

    .submit {
      font-family:'Raleway', sans-serif;
      font-size: 1.2em;
      margin: 50px 200px 10px 200px;
      padding: 10px 20px;
    }

    .con {
font-family:'Raleway', sans-serif;
color: white;
    }

    .success {
font-family:'Raleway', sans-serif;
color:white;
text-align:center;
font-size:14px;
font-weight:bold;
    }
</style>

<body>
  <header>
    <div class="container">
      <nav>
        <ul>
          <li><a href="index.html#home">HOME</a></li>
          <li><a href="index.html#gallery">GALLERY</a></li>
          <li><a href="index.html#whoweare">WHO-WE-ARE</a></li>
          <li><a href="index.html#whatwedo">WHAT-WE-DO</a></li>
          <li><a href="index.html#whoweworkwith">EXPERIENCE</a></li>
          <li><a href="connect.html">CONNECT</a></li>
        </ul>
</nav>
      </div>

  </header>

  <h1 class="con">CONNECT WITH URSA</h1>
<?php include('form_process.php');?>
  <section id="form">
    <form id="survey-form" class="" action="<?= $_SERVER['PHP_SELF'];?>" method="post">
      <section>
        <p id="description">Looking forward to hearing from you.</p>
      </section>
      <div class="row">
        <label for="#name" id="name-label">*NAME</label>
        <input autofocus type="text" name="name" value="<?= $name ?>" id="name" placeholder="URSA">
        <span class="error"><?=$name_error ?></span>
      </div>
      <div class="row">
        <label for="#email" id="email-label">* EMAIL</label>
        <input type="email" name="email" value="<?= $email ?>" id="email" placeholder="ursamediagroup@gmail.com" required>
        <span class="error"><?=$email_error ?></span>
      </div>
      <br>
      <br>
      <div class="row">
        <label for="#phone" id="phone-label">PHONE NUMBER</label>
        <input type="name" name="phone" value="<?= $phone ?>" id="PHONE" placeholder="(000)000-0000">
<span class="error"><?=$phone_error ?></span>
      </div>
        <br>
        <br>
        <div class="row row-field">
          <label id="field-label" for="#textfield">Message</label>
          <textarea id="field-input" name="message" rows="10" cols="50" placeholder="Enter your
                comment here..."></textarea>
        </div>
        <button id="submit" type="submit" name="button">Submit</button>
<div class ="success"><?= $success; ?></div>
    </form>
  </section>
  <footer>URSA MEDIA GROUP</footer>
</body>
</html>
