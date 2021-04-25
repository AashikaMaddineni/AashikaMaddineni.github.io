<!DOCTYPE html>

<html>
<head>
    <title>
    Welcome to my site!
    </title>

    <style>
    *{
        margin:10px;
        box-sizing: border-box;
    }
    
    .nav{
        background-color: #00000f;
        width: 500px;
        overflow: hidden;
        border-radius: 20px;
        padding:5px;
        margin:20px;
    }

    .nav a {
       color: #f2f2f2; 
        text-decoration:none;
        margin:10px;
        display: block;
        padding:5px 20px;
        float:left;
    }

    .nav a:hover {
    color:#255784;
    background: #2196f3;
    box-shadow: 0 0 10px #2196f3, 0 0 40px #2196f3,  0 0 80px #2196f3;
    }

      .column1 {
  float: left;
  width: 25%;
   }


    .column2 {
  width: 75%;
  padding: 20px;
   }

    .column {
  float: left;
  width: 60%;
  padding: 15px;
   }

   .column.side {
  width: 30%;
  float:center;
  background-color:#CDCDCD;
  overflow: auto;
}


   .row:after {
  content: "";
  display: table;
  clear: both;
 }

 .header {
  background-color:#CDCDCD;
  color:#800000;
  text-align: center;
  height:auto;
  }

 @media screen and (max-width:600px) {
  .column1, .column2, .header{
    width: 100%;
  }
}

     .body {
         font-family: Arial, Helvetica, sans-serif;
    }

    footer{
    width:95vw;
    height:auto;
    font-size:18px;
    padding: 3px;
    background-color: #000000;
    color: white;
    text-align: center;
    bottom: 0;
    position: fixed;
   }


    </style>

</head>

<body>


</div>

<div class="nav">
<a  href="">Home</a>
<a  href="">About</a>
<a  href="">Contact-us</a>
<a  href="index.html">Logout</a>
</div>




 <footer>
  <p>Developed by Aashika Maddineni</p>
</footer>

</body>
</html>


