<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookMyStay |Contact|</title>
    <?php require('inc/links.php') ?>
    <link rel="stylesheet" href="css/common.css">
</head>
<body class="bg-light">
    
    <?php require('inc/header.php');
    ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">Contact Us</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Sequi qui corporis dolorem, <br> id harum odio corrupti 
            quasi quidem quisquam voluptatibus
        </p>
    </div>


    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4">
                <iframe class="w-100 rounded mb-4" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7001.621615118807!2d77.23153799999999!3d28.665383!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd08c16bad3b%3A0x26668a270e9365b7!2sKashmere%20Gate%2C%20Delhi!5e0!3m2!1sen!2sin!4v1723377669027!5m2!1sen!2sin" loading="lazy"></iframe>
                    
                    <h5>Address</h5>
                    <a href="https://maps.app.goo.gl/4LXP865zHDRALzRaA" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2">
                        <i class="bi bi-geo-alt-fill"></i>XYZ, Kashmere Gate, Delhi
                    </a>
                    
                    <h5 class="mt-4">Call us</h5>
                    <a href="tel: +917777333221" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> +917777333221
                    </a>
                    <br>
                    <a href="tel: +917777333221" class="d-inline-block text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> +917777333221
                    </a>

                    <h5 class="mt-4">Email</h5>
                    <a href="mailto: ask.bookmystay@gmail.com"  class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-envelope-fill"></i>ask.bookmystay@gmail.com
                    </a>
                    
                    <h5 class="mt-4">Follow us</h5>
                    <a href="#" class="d-inline-block text-dark fs-5 me-2">
                          
                    </a>

                    <a href="#" class="d-inline-block text-dark fs-5 me-2">
                        <i class="bi bi-facebook me-1"></i>
                    </a>
                   
                    <a href="#" class="d-inline-block text-dark fs-5"> 
                        <i class="bi bi-instagram me-1"></i>  
                    </a> 

                </div>
            </div>

            <div class="col-lg-6 col-md-6 px-4">
                <div class="bg-white rounded shadow p-4 ">
                    <form>
                       <h5>Send a message</h5> 
                       <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Name</label>
                            <input type="text" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Email</label>
                            <input type="email" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Phone</label>
                            <input type="number" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Gender</label>
                            <div class="d-flex align-items-center">
                                <div class="me-3">
                                    <input type="radio" id="male" name="gender" value="male">
                                    <label for="male" class="form-label">Male</label>
                                </div>
                                <div>
                                    <input type="radio" id="female" name="gender" value="female">
                                    <label for="female" class="form-label">Female</label>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Subject</label>
                            <textarea class="form-control shadow-none" rows="2" style="resize: none;"></textarea>
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Message</label>
                            <textarea class="form-control shadow-none" rows="5" style="resize: none;"></textarea>
                        </div>
                        <button type="submit" class="btn text-white custom-bg mt-3">SEND</button>
                    </form>
                </div>
            </div>

        </div>
    </div>




    <?php require('inc/footer.php');
    ?>

</body>
</html>



