<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Temperature Conversion</title>
    <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
    <style>
        *{margin:0;padding:0;box-sizing:border-box;
            font-family:'Muli', ;}

        h1{text-align:center; line-height:20vh;color:#110d89;}

         .main-div{
            width: 100%;
            height:80vh;
            display:flex;
            justify-content:space-around;
            align-items:center;
         }

         .left-side{
            background-color:#dfe6e9;
            border-radius:50% 90% 90% 50% / 50% 50% 90% 90%;
         }

          .left-side img{
            max-width:400px;
            height:auto; 
         }

         .right-side{
              width:400px;
              height:300px;
              background-color:#dfe6e9;
              border-radius:18px;
              display:flex;
              flex-direction:column;
              justify-content:center;
              align-items:center;
              text-align:center;
         }

         .input1{
             width: 250px;
             height:40px;
             padding:5px;
             outline:none;
             border-radius:1px solid grey;
             border-radius:15px
         }

         .selection{
           width: 100%;
           margin:20px 0;
         }

         .btn{
          padding:10px 16px;
          border-radius:5px;
          border:none; 
          outline:none;
          border-radius:9px;
          background-color:#110d89;
          color:#fff;
          font-size:0.9rem;
         }

         p{
          margin:20px 0 0 0;
         }

    </style>
</head>
<body>

     <header>
        <h1>Temperature Conversion</h1>
        <div class="main-div">
            <div class="left-side">
                 <img src="./images/b1.png" alt="">
            </div>

            <div class="right-side">
                 <form method="POST" action="">
                      <input type="text" name="num" placeholder="Enter The Value" class="input1">

                      <div class="selection">
                        <label>Celsius</label>
                        <input type="radio" name="units" value="cel">

                         <label>Fahrenheit</label>
                         <input type="radio" name="units" value="feh">
                      </div>

                      <input type="submit" name="submit" value="Convert Now" class="btn">
                 </form>

                 <div>
                    <p>
                         <?php
                            if(isset($_POST['submit'])){
                              $num=$_POST['num'];
                              $temp=$_POST['units'];

                              if($temp=="cel"){
                                   $result=$num * 9 / 5 + 32;
                                   echo "The Conversion Value of Celsius In Fahrenheit
                                    is " . $result;
                              }else{
                                   $result=($num - 32) * 5 / 9;
                                   echo "The Conversion Value of Fahrenheit In Celsius
                                    is " . $result;
                              }
                            }
                         ?>
                    </p>
                 </div>

            </div>
        </div>
     </header>

</body>
</html>