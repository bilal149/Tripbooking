<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adventure Khobar</title>
    <style>
        .Heading {
            color: #000000;
            font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif;
            font-size: 24px;
            font-weight: 100;
            background-color: #ffffff;
            padding-top: 10px;
            padding-right: 10px;
            padding-bottom: 10px;
            padding-left: 10px;
            }
        .Details {
            color: #000000;
            font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif;
            font-size: 14px;
            font-weight: 100;
            padding-top: 10px;
            background-color: #ffffff;
            padding-right: 10px;
            padding-bottom: 10px;
            padding-left: 10px;
            }
        .DetailsMessage {
            color: #000000;
            font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif;
            font-size: 14px;
            font-weight: 100;
            background-color: #EEEEEE;
            padding-top: 10px;
            padding-right: 10px;
            padding-bottom: 10px;
            padding-left: 10px;
            }
        .Footer {
            color: #000000;
            font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif;
            font-size: 14px;
            font-weight: 100;
            background-color: #DBDBDB;
            padding-top: 10px;
            padding-right: 10px;
            padding-bottom: 10px;
            padding-left: 10px;
            }
        .Footer {
            color: #000000;
            font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif;
            font-size: 14px;
            font-weight: 100;
            background-color: #DBDBDB;
            padding-top: 10px;
            padding-right: 10px;
            padding-bottom: 10px;
            padding-left: 10px;
            }
        .Footer a {
            color: #0095D9;
            font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif;
            font-size: 14px;
            font-weight: 100;
            }
        </style>
</head>
<body>  
        <TABLE style='BORDER-RIGHT: #CCCCCC 1px solid; PADDING-RIGHT: 0px; BORDER-TOP: #CCCCCC 1px solid; PADDING-LEFT: 0px; PADDING-BOTTOM: 0px; BORDER-LEFT: #CCCCCC 1px solid; PADDING-TOP: 0px; BORDER-BOTTOM: #CCCCCC 1px solid'
        height=238 cellSpacing='0' cellPadding='0' width='800'>
          <tr> 
           <td class='Heading'> <img src='http://pcocarrent.co.uk/image/logo.png'><br>
           Adventure Enjoy with Khobar</td>
          </tr>
                        <tr>
                            <td height='40' class='DetailsMessage'>
                                <p>Dear Sir/Madam {{$book['name']}},<br>
                                    <p>Service-1 {{$book['service1']}},<br>
                                      <p>Service-2 {{$book['service2']}},<br>
                                        <p>Service-3 {{$book['service3']}},<br>
                                          <p>Service-4 {{$book['service4']}},<br>
                                            <p>Service-5 {{$book['service5']}},<br>
                                        <p>Phone No {{$book['phone_no']}},<br>
                                    <p>Subject {{$book['subject']}},<br>
                                        <p>Subject {{$book['message']}},<br>
                                            <p>From {{$book['email']}},<br>
                                            Thankyou for your E-Mail.We will you contact soon!</p><br>
                                                <p><strong>Kindest Regards,</strong><br>
                                                   <strong>From Adventure Khobar</strong></p>
                            </td>
                        </tr>
          <tr>
            <td height='40' class='Footer'>This E-Mail Powered by <a href=;http://swismax.com;>Swis MAX Solutions</a></td>
          </tr>
        </table>
</body>
</html>