<?php

include 'include/session.php';
// head section
include 'include/head.php';

?>
<style>
    html,
    body {
        height: 100%;
    }

    .form-signin {
        max-width: 330px;
        padding: 1rem;
    }

    .form-signin .form-floating:focus-within {
        z-index: 2;
    }
</style>

<body>

    <!-- Navbar section -->
    <?php include 'include/nav.php'; ?>
    <!-- Navbar section -->

    <div class="container">
        <main class="form-signin w-100 m-auto">
            <form action="register_db.php" id="registerForm" method="POST">
                <h1 class="h3 mb-3 fw-normal">Register</h1>

                <?php if (isset($_SESSION['error'])) { ?>
                    <div class="alert alert-danger">
                        <?php
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                        ?>
                    </div>
                <?php } ?>

                <?php if (isset($_SESSION['success'])) { ?>
                    <div class="alert alert-success">
                        <?php
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                        ?>
                    </div>
                <?php } ?>

                <div class="form-floating">
                    <input type="text" class="form-control" name="firstName" placeholder="Enter your firstname">
                    <label for="floatingInput">Firstname</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" name="lastName" placeholder="Enter your lastname">
                    <label for="floatingInput">Lastname</label>
                </div>
                <div class="form-floating">
                    <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating">
                    <input type="password" id="myPass" class="form-control" name="password" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>

                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" onclick="showPass()"> Show password
                    </label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" name="register" type="submit">Sign Up</button>
            </form>
        </main>
    </div>

    <?php
    // script section
    include 'include/script.php';
    // footor section
    include 'include/footor.php';

    ?>

    <script>
        function showPass() {
            let myPass = document.getElementById('myPass');
            if (myPass.type === "password") {
                myPass.type = "text";
            } else {
                myPass.type = "password";
            }
        }

        $(document).ready(function() {
            $("#registerForm").submit(function(e) {
                e.preventDefault();

                let formUrl = $(this).attr("action");
                let reqMethod = $(this).attr("method");
                let formData = $(this).serialize();

                $.ajax({
                    url: formUrl,
                    type: reqMethod,
                    data: formData,
                    success: function(data) {
                        let result = JSON.parse(data);
                        if (result.status == "success") {
                            console.log("Success", result)
                            Swal.fire("สำเร็จ!", result.msg, result.status).then(function() {
                                window.location.reload();
                            });
                        } else {
                            console.log("Error", result)
                            Swal.fire("ล้มเหลว!", result.msg, result.status);
                        }
                    }
                })
            })
        })
    </script>
</body>

</html>