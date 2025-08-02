<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


</head>
<style>



</style>
<body style="

        display: flex;
        justify-content: center;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 16px !important;
">
    <div  style=" width: 600px; position: relative; overflow:hidden ">

        <div>
          
        </div>
        <div>
        </div>
        <div  style="padding: 40px;  border-top-right-radius: 10px; border-top-left-radius: 10px; background-color: #020e38; color: white;">
          
            <div style=" position: relative; overflow: hidden; border-radius: 4px;">
                <div style=" z-index: 30; position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(2, 14, 56, 0.586);">

                </div>
                <img  style=" position: relative; z-index: 20;" width="100%" src="{{ $message->embed(public_path('/storage/img/home-bg1.PNG')) }}" alt="">
                <div style=" display: flex; align-items: center; flex-direction: column; justify-content: center; position: absolute; z-index: 50; top: 0; left: 0; width: 100%; height: 100%;">
                    <div  style=" width:100%; text-align: center;  margin-bottom: 10px;  padding: 20px 0; ">
                        <a href="#"><img  style="text-align: center;" src="{{ $message->embed(public_path('/storage/img/logo.png')) }}" alt="" width="200px"></a>
                    </div>
                    <div style=" text-align: center; font-weight: bold; width: 80%;">
                        <p> Showcasing the most lucrative Investment locations in the world
                            </p>
                            <div style=" display: flex; padding: 0 10px; justify-content: center;">
                                <a href="#"><img width="20px" style=" padding: 0 10px; color:#fff" src="{{ $message->embed(public_path('/storage/img/logo-linkedin.svg')) }}" alt=""></a>
                                <a href="#"><img width="20px" style=" padding: 0 10px; color:#fff" src="{{ $message->embed(public_path('/storage/img/logo-facebook.svg')) }}" alt=""></a>
                                <a href="#"><img width="20px" style=" padding: 0 10px; color:#fff" src="{{ $message->embed(public_path('/storage/img/logo-twitter.svg')) }}" alt=""></a>
                            </div>
                    </div>
                </div>
            </div>
            <div style="padding-top: 40px; ">
                <img style=" position: absolute; top: 0; left: 0; z-index: 20;" src="{{ $message->embed(public_path('/storage/img/pattern.png')) }}" alt="">
                
                <div style=" position: relative; z-index: 50;">
                    {!! $UserInfo['message'] !!}
                </div>
           
            </div>
    
        </div>

        <div  style=" position: relative; z-index: 50; font-size: 11px;
        background-color: #e8e8e8;
        padding: 20px;
        color: #333;
        border-radius: 2px;
        text-align: center;">
        <div>
          

        </div>
            <p> showcasing the most attractive business destinations in North America and Canada to Site Selectors and CEOs from Europe and the UK. FDI Alliance is a platform strictly aimed at decision makers. We present easily digestible yet detailed information on the most attractive locations in North America and Canada. </p>

         <div style=" display: flex; justify-content: center;  text-align:center;">
                <ul style="display: flex;         list-style: none;
                margin-top: 10px;">
                    <li style="         text-decoration: none;
        margin-right: 20px;">
                        <a href="#">Home</a>
                    </li>
                    <li style="         text-decoration: none;
        margin-right: 20px;">
                        <a href="#">About</a>
                    </li>
                    <li style="         text-decoration: none;
        margin-right: 20px;">
                        <a href="#">Showcases</a>
                    </li>
                    <li style="         text-decoration: none;
        margin-right: 20px;">
                        <a href="#">Articles</a>
                    </li>
                    <li style="         text-decoration: none;
        margin-right: 20px;">
                        <a href="#">e-mag</a>
                    </li>
                    <li style="         text-decoration: none;
        margin-right: 20px;">
                        <a href="#">subscription</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/ionicons@latest/dist/ionicons.js"></script>
</body>
</html>