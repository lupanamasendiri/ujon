<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UJIAN ONLINE | YPI NURUL HUDA CISOKA</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap');
        *{
            padding:0;
            margin:0;
            box-sizing:border-box;
        }
        body, html{
            height:100%;
        }
        body{
            display:flex;
            justify-content:center;
            align-content:center;
            align-items:center;
            height:100%;
            font-family: 'Quicksand', sans-serif;
        }
        .login{
            width:700px;
            height:400px;
            position:absolute;
            left:50%;
            top:50%;
            transform:translate(-50%, -50%);
            display:flex;
            justify-content:space-between;
            box-shadow:0 0 4px rgba(0,0,0,0.15)
        }
        .side, form{
            flex-basis:50%;
        }
        form{
            display:flex;
            flex-direction:column;
            justify-content:center;
            align-content:center;
            align-items:center;
            gap:.5rem;

        }
        label{
            padding:.5rem;
        }
        label, input{
            width:100% ;
        }
        input{
            padding:.5rem;
            border-radius:.3rem;
            outline:none;
            border:1px solid rgba(0,0,0,0.15)
        }
        input:focus{
            border:1px solid #abc123;
            transition:all .5s ease-in-out;
        }
        .group{
            width:75%;
            display:flex;
            flex-direction:column;
        }
        input[type="checkbox"]{
            width:10% !important;
            text-align:left !important;
        }
        .btn{
            padding:.5rem;
            border-radius:.3rem;
            outline:none;
            border:none;
            box-shadow: 0 0 4px rgba(0,0,0,0.35);
            cursor:pointer;
            font-size:large;
        }
        .btn-login{
            background:#9c3058;
            color:#fff;
        }
        .side{
            background-image:linear-gradient(rgba(0,0,0,0.15),rgba(0,0,0,0.35)),url(https://images.unsplash.com/photo-1503676260728-1c00da094a0b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1122&q=80);
            background-size:cover;
            background-repeat:no-repeat;
            background-position:center center;
        }
    </style>
</head>
<body>
    <div class="login">
        <div class="side"></div>
        <form action="" method="post">
            <div class="group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" placeholder="Masukkan Username">
            </div>
            <div class="group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Masukkan Password">
                <label for="showPassword">
                    <input type="checkbox" id="showPassword">lihat password
                </label>
            </div>
            <div class="group">
                <button id="btn-login" class="btn btn-login">Login</button>
            </div>
        </form>
    </div>
    <script>
        var p = document.querySelector('input[type="password"]');
        var b = document.querySelector('#showPassword');
        
        const showPassword = () => {
            var isChecked =  b.checked;
            if(isChecked){
                p.setAttribute('type','text')
            }else{
                p.setAttribute('type','password')

            }
        }
        b.addEventListener('change', showPassword, false)


    </script>
</body>
</html>