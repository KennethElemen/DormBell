<?php include 'includes/config/dbconn.php'; ?>
<?php include 'includes/function/login.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="//code.tidio.co/rigk6wllgp396rgqayzic87xr1qljmk8.js" async></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
    <style>
        /* Add custom style for the content-wrapper and main-container */
        .content-wrapper, .main-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
        }

    .custom-img {
        padding: 20px;
        height: 300px;
        object-fit: cover;
        width: 100%; /* Ensure the width is 100% to maintain responsiveness */
    }

     .custom-nav-link {
        font-size: 18px; /* Adjust the font size as needed */
        transition: color 0.3s ease; /* Add a smooth transition effect */
    }

    .custom-nav-link:hover {
        color: purple; /* Change the hover color to purple */
    }
    </style>
</head>
<body>

        <nav class="navbar navbar-expand-lg navbar-light bg-white default-layout-navbar fixed-top">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <img src="assets/images/DormBell.png" alt="logo" class="img-fluid" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="Guest/availablerooms.php">
                                <p class="mb-0 text-lg custom-nav-link">Room</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">
                                <p class="mb-0 text-lg custom-nav-link">Login</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


    
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <!-- Section 1: Login Form -->
            <div class="content-wrapper d-flex align-items-center justify-content-center auth">
                <div class="row flex-grow">
                    <!-- Center the image on the left with right margin -->
                    <div class="col-lg-6 text-center mr-lg-4">
                        <img src="assets/images/1.webp" class="img-fluid">
                    </div>
                    <!-- Center the form on the right -->
                    <div class="col-lg-3">
                        <div class="auth-form-light text-left p-4">
                                     <h2 class="display-7">WELCOME</h2>

                                   <form class="pt-3" action=""method="post">
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-lg" id="Email" name="Email" placeholder="Email@gmail.com" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-lg" id="Password" name="Password" placeholder="Password" required>
                                    </div>
                                    <div class="mt-3">
                                        <button type="submit" class="btn btn-gradient-primary btn-lg font-weight-medium auth-form-btn">Log in</button>
                                    </div>
                                    <div class="my-2 d-flex justify-content-between align-items-center">
                                        <a href="#" class="auth-link text-black">Forgot password?</a>
                                    </div>
                                </form>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        
               
                </div>
            </div>
            <!-- End Section 3 -->

        </div>
        <!-- page-body-wrapper ends -->
    </div>

  
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/login.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/todolist.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- End custom js for this page -->
</body>
</html>
