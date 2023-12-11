
<x-app-layout>
    <style>
        .navbar span{
            color: gray;
            padding:10px
        }

        .input{
            all: unset;
            padding: 10px;
            border: 1px solid rgba(219,219,219);
            margin-top: 10px;
            background-color: rgba(250,250,250);
            border-radius: 5px;

        }
        .input:focus,
        .input:active{
            border: 1px solid rgba(38, 38, 38, 0.4)
        }
        *{
            font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif !important;
        }
    </style>
    <div style=" background-color: #fafafa; height: 125vh; margin: 0px;">
    <div style="display:flex;
    flex-direction:row;
    flex-wrap:nowrap;
    align-content:center;
    justify-content:center;
    align-items:center;
    height:90%;">
    
        <div class="left" style="
            height: 700px; 
            width: 430px; 
            background-image:url(https://static.cdninstagram.com/rsrc.php/v3/y4/r/ItTndlZM2n2.png);
            background-repeat: no-repeat;
            transform:scale(1.125);
            margin-right:40px;">
        </div>
        <div class="right" style="margin-top:-130px;">
        <div>
            <div style="display: flex;
            flex-direction:column;
            flex-wrap:nowrap;
            align-content:center;
            align-items:stretch;
            justify-content:center;
            width:350px;
            background-color:white;
            border: 1px solid rgba(219,219,219);
            font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            padding:40px;
            margin:20px;
            ">

                <img src=""  style="padding: 30px 70px 30px 70px " alt="insta-logo"/>
                <input type="text" placeholder="Phone number, username or email" class="input"/>
                <input type="password" placeholder="Password" class="input"/>
                <div style="background-color: rgba(0,149,246,0.3);
                text-align:center;
                color:white;
                margin-top:10px;
                border-radius:5px;
                padding:10px;
                ">
                Log In
            </div>
            <div style="display:flex; 
                margin-top:30px;
                flex-direction:row;
                align-items:center;">
                <div style="background-color:rgb(219,219,219); height: 1px;
                width:140px;
                 "> 
                 </div>
                 <div style="font-weight:600;
                 color:gray;
                 padding:0px 20px 0px 20px;">OR
                 </div>
           
                <div style="background-color:rgb(219,219,219); height: 1px;
                width:140px;
                "> 
                </div>
            </div>
            <div style="text-align: center; margin-top:20px;
            color:rgb(56,81,133);
            font-weight:600;
            font-size:18px;">
                <span style="background-image:url()"></span>
                <span>Log in with Facebook</span>
            </div>
            <div style="color:rgb(56,81,133); text-align:center; padding-top:20px;">
                Forgot password?
            </div>
            </div>
        </div>
        <div style="background-color:white;
        border:1px solid rgb(219,219,219);
        text-align:center;
        padding:20px;
        margin:20px;">
        Don't have an account? <span style="color:rgba(0,149,246,1); font-weight:600;">Sign up?</span>
        </div>
        <div style="text-align:center;">Get the app.</div>
        <div style="text-align:center; display:flex; margin-top:20px; justify-content: space-evenly;">
            <img style="width: 150px; border-radius:5px;" src="https://static.cdninstagram.com/rsrc.php/v3/yz/r/c5Rp7Ym-Klz.png" alt="google"/>
            <img style="width: 150px; border-radius:5px;" src="https://static.cdninstagram.com/rsrc.php/v3/yu/r/EHY6QnZYdNX.png" alt="microsoft"/>
        </div>

        
    </div>
    </div>
    <div style="height:10%;">
        <div style="display: flex; flex-direction:row; flex-wrap:wrap;
        text-align:center;
        justify-content:center;
        max-width:1200px;
        margin:auto;" class="navbar">

        <span>Meta</span>
        <span>About</span>
        <span>Blog</span> 
        <span>Jobs</span>
        <span>Help</span> 
        <span>API</span>
        <span>Privacy Terms</span>
        <span>Top Accounts</span>
        <span>Instagram Lite</span>
        <span>Contact</span> 
        <span>Uploading & Non-Users</span> 
        <span>Digital</span>
        <span>Collectibles Privacy</span> 
        <span>Notice</span>
        </div>
    </div>
</div>
</x-app-layout> 