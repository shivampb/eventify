<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Login IN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- MATERIAL DESIGN ICONIC FONT -->
    <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

    <!-- STYLE CSS -->
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <div class="wrapper" style="background-image: url('https://images.unsplash.com/photo-1519671298057-aba40b21089b?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjR8fGluZGlhbiUyMHdlZGRpbmclMjBjb3VwbGV8ZW58MHx8MHx8fDA%3D');
		background-size: cover;
		background-position: center;">
        <div class="inner">
            <div class="image-holder">
                <img src="https://images.unsplash.com/photo-1562275211-9543b6c6f703?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTl8fGluZGlhbiUyMHdlZGRpbmclMjBjb3VwbGV8ZW58MHx8MHx8fDA%3D" alt="">
            </div>
            <form action="">
                <h3>Login IN</h3>

                <div class="form-wrapper">
                    <input type="text" placeholder="Username" class="form-control">
                    <i class="zmdi zmdi-account"></i>
                </div>


                <div class="form-wrapper">
                    <input type="password" placeholder="Password" class="form-control" id="password">
                    <i class="fa-solid fa-eye toggle-password"></i>
                </div>

                <button>Login
                    <i class="zmdi zmdi-arrow-right"></i>
                </button>
            </form>
        </div>
    </div>
    <script>
        const passwordField = document.getElementById("password");
        const togglePassword = document.querySelector(".toggle-password");

        togglePassword.addEventListener("click", function() {
            passwordField.type = passwordField.type === "password" ? "text" : "password";
        });
    </script>

</body>

</html>