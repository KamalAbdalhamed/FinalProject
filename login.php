<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تـسـجـيـل الـدخـول</title>
    <style>
        
        *:before,
        *:after{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body{
            background-color: #080710;
        }
        .background{
            width: 430px;
            height: 520px;
            position: absolute;
            transform: translate(-50%,-50%);
            left: 50%;
            top: 50%;
        }
        .background .shape{
            height: 200px;
            width: 200px;
            position: absolute;
            border-radius: 50%;
        }
        .shape:first-child{
            background: linear-gradient(
                #1845ad,
                #23a2f6
            );
            left: -80px;
            top: -80px;
        }
        .shape:last-child{
            background: linear-gradient(
                to right,
                #ff512f,
                #f09819
            );
            right: -30px;
            bottom: -80px;
        }
        form{
            height: 480px;
            width: 420px;
            background-color: rgba(255,255,255,0.0);
            backdrop-filter: blur(40px);
            position: absolute;
            transform: translate(-50%,-50%);
            top: 50%;
            left: 50%;
            border-radius: 10px;
            border: 2px solid rgba(255,255,255,0.1);
            box-shadow: 0 0 40px rgba(8,7,16,0.6);
            padding: 50px 35px;
        }
        form *{
            font-family: 'Poppins',sans-serif;
            color: #ffffff;
            letter-spacing: 0.5px;
            outline: none;
            border: none;
        }
        form h3{
            font-size: 35px;
            font-weight: 600;
            line-height: 42px;
            text-align: center;
        }

        label{
            display: block;
            margin-top: 30px;
            font-size: 22px;
            font-weight: 500;
        }
        input{
            display: block;
            height: 50px;
            width: 100%;
            background-color: rgba(255,255,255,0.07);
            border-radius: 3px;
            padding: 0 10px;
            margin-top: 8px;
            font-size: 24px;
            font-weight: 300;
        }
        ::placeholder{
            color: #555555;
            font-size:20px;
        }
        button{
            margin-top: 50px;
            width: 100%;
            background-color: red;
            color: #fff;
            padding: 15px 0;
            font-size: 18px;
            font-weight: 600;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.33s ease;
        }
        button:hover{
            background-color:white;
            color: red;
            transform: scale(1.1);

        }
        .social{
            margin-top: 30px;
            display: flex;
        }
        .social div{
            background: red;
            width: 150px;
            border-radius: 3px;
            padding: 5px 10px 10px 5px;
            background-color: rgba(255,255,255,0.27);
            color: #eaf0fb;
            text-align: center;
        }
        .social div:hover{
            background-color: rgba(255,255,255,0.47);
        }
        .social .fb{
            margin-left: 25px;
        }
        .social i{
            margin-right: 4px;
        }

    </style>
</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form action="login1.php" method="post">
        <h3> تـسـجـيـل الـدخـول </h3>

        <label for="username">إســــم الــمــســتـــخــدم</label>
        <input type="text" placeholder="User name" id="username" name="username">

        <label for="password">كــلــمــة الــمــرور</label>
        <input type="password" placeholder="Password" id="password" name="password">

        <button>تـسـجـيـل الـدخـول</button>
    </form>






</body>
</html>
