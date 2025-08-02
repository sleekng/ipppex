<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registration Successful</title>
    </head>
    <style></style>

    <body style="
            
                                                                    align-items: center;
                                                                    display: flex;
                                                                    justify-content: center;
                                                                    font-family: Arial, Helvetica, sans-serif;
                                                                    font-size: 16px !important;
                                                            ">
        <div style=" width: 600px; ">
            <div style=" width:100%; margin-top: 40px;  text-align: center;  margin-bottom: 10px;">
                <img style="text-align: center;" src=" {{ $message->embed(public_path('storage/img/logo.png')) }}" alt="" width="150px">
            </div>
            <div style=" text-align: center; font-weight: bold;">
                <p>International Paper Publishing, Packaging & Printing Expo</p>
            </div>
            <div style=" border-radius: 2px; background-color: #202020;">
                <h3 style=" color:white;  padding: 10px 20px;
                                                                                                                text-align: center;
                                                                                                                ">Registration Acknowledged
                </h3>
            </div>
            <div style=" width:100%;  text-align: center;  margin-bottom: 10px;">
                <img style="text-align: center;" src=" {{ $message->embed(public_path('storage/img/gallery/1.jpg')) }}" alt="" width="100%">
            </div>
            <div></div>
            <div style="    padding: 10px 4px;">
                <div style="margin-bottom: 10px;">
                    <h1>Thank you
                        {{ $regData['company_name'] }}
                        for your Registration</h3>
                </div>
                <p style="line-height: 24px;"><br>
                    Your tag number is :
                    <span style="font-weight: bolder">
                        IPPPEX2023/{{ $regData['tagnumber'] }}</span>
                    <br>
                    Thank you!</p>

                <div style="margin-top: 10px; font">
                    <a href="https://ipppex.com.ng/conference">Please click Here</a>
                    to download the conference program & brochure.
                    <br><br>
                </div>
                <div style="margin-top: 10px; font">
                    Kindly follow us for more update:
                    <br>
                </div>
            </div>

            <div style=" padding-top: 20px; padding-bottom: 20px;  font-size: 11px; background-color: #e8e8e8; color: #333;border-radius: 2px;">
                <div style=" padding-right: 40px;">
                    <ul style=" list-style: none; display: flex; justify-content: space-between; flex-wrap: wrap; ">
                        <li style="  display: inline; text-align: center;">
                            <a style="font-size: 10px;" href="https://web.facebook.com/ipppexdcsexpo">Facebook</a>
                        </li>
                        <li style="  padding-left:10px; display: inline; text-align: center;">
                            <a style="font-size: 10px;" href="https://www.instagram.com/ipppexdcs/">Instagram</a>
                        </li>
                        <li style="  padding-left:10px; display: inline; text-align: center;">
                            <a style="font-size: 10px;" href="https://twitter.com/ipppexpo">Twitter</a>
                        </li>
                        <li style="  padding-left:10px; display: inline; text-align: center;">
                            <a style="font-size: 10px;" href="tel:+234816 976 7741">Call:(Ola)</a>
                        </li>
                        <li style="  padding-left:10px; display: inline; text-align: center;">
                            <a style="font-size: 10px;" href="https://www.youtube.com/channel/UCKbV5lFtcRYf_l8wDZZFtRw">Youtube</a>
                        </li>
                        <li style="  padding-left:10px; display: inline; text-align: center;">
                            <a style="font-size: 10px;" href="https://lb.benchmarkemail.com//listbuilder/signupnew?IkfHTmyPVq8mkhkNolpbjf5pwVnAjsSIcywGqQCGZoDtO5iNRn8gS049TyW7spdJ">Subscribe to IPPPEX Newsletter</a>
                        </li>
                    </ul>
                </div>

                <p style=" padding-left: 10px; padding-right: 10px; text-align: center;">
                    IPPPEX 2023 is not just another industry event. It is a unique opportunity to connect with industry leaders, showcase your products and services, and expand your business in Nigeria and beyond. Act now to take advantage of this unique opportunity to connect with industry leaders, showcase your products and services, and expand your business in Nigeria and beyond.</p>


            </div>


        </div>
    </body>

</html>
