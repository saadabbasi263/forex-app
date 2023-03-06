<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        /*  |====================|
    |=== Import Fonts ===|
    |====================|
*/
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:wght@400;500;600&display=swap');

/*  |=====================|
    |=== layout colors ===|
    |=====================|
*/
:root {
    --grey-shade: #737373;
    --separator: #C8C7C7;
    --dark-grey: #3A3939;
}

/*  |======================|
    |=== general styles ===|
    |======================|
*/
p, h5, h3 {
    font-family: 'Inter', sans-serif;
}
.main-container {
    box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.12);
    border-radius: 1rem;
    padding: 36px 24px;
    margin: 0!important;
}
.text-g {
    color: var(--grey-shade);
}

p {
    font-size: 1rem;
    font-weight: 400;
    letter-spacing: 0.5px;
}

/*  |======================|
    |=== header - style ===|
    |======================|
*/
.top-row::after {
    content: '';
    border-bottom: 1px solid var(--separator);
    width: 95%;
    display: block;
    margin-left: 12px;
    margin-top: 24px;
}

.top-row h5 {
    font-size: 1.5rem;
    font-weight: 600;
}

.top-row p {
    font-size: 1rem;
    font-weight: 400;
}

.header-info {
    /* padding: 0; */
    margin-left: -1.25rem;
}

.logo-cont svg {
    /* width: 100%; */
}

/*  |===============================|
    |=== top - paragraph - style ===|
    |===============================|
*/
.top-p-h {
    font-size: 1rem;
    font-weight: 700;
    color: var(--dark-grey);
}

/*  |======================|
    |=== digits - style ===|
    |======================|
*/
.digits {
    background: #F1F1F1;
    border: 1px solid #FB627E;
    border-radius: 4px;
    position: relative;
    display: inline-block;
    height: 64px;
    width: 64px;

}

.otp {
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    /* transform: translateY(-50%) */

}

.first-digit,
.second-digit,
.third-digit {

    margin-right: 2%;
}

.digits h3 {
    margin-bottom: 0;
    margin-top: 0;

    /* padding: 10px; */
}

/*  |==================================|
    |=== bottom - paragraph - style ===|
    |==================================|
*/
.end-h {
    font-size: 1.25rem;
    font-weight: 600;
    color: var(--grey-shade);
}

/*  |=====================|
    |=== media queries ===|
    |=====================|
*/

@media (max-width: 991px) {
.first-digit,
.second-digit,
.third-digit {

    margin-right: 0;
}
}

@media (max-width: 343px) {
    .digits{
        width: 45px;
        height: 45px;
    }
}
        </style>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Streaming App</title>
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
    crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container-fluid">
        <div class="main-container mt-5 ms-5 col-md-4">
        <div class="inner-container">
            <div class="row top-row">
                <!-- <div class="logo-cont col-sm-12 col-lg-3">
                    <img class="img-fluid" src="{{url('/logo.png')}}"  alt="logo" >
                </div> -->
                <!--.logo-cont-->
                <div class="col-sm-12 col-lg-9 header-info">
                <h5>Streaming App</h5>
                    <p class="text-g mb-0">Best Streaming App To Make Your Days Better </p>
                    
                <h6 class="top-p-h mt-4">Hi, {{ $name }}</h6>
                <p class="top-p-p text-g">
                    Protect your privacy with ease - just use the code below to open our
                    app and change your pin to something stronger.
                </p>
            <div class="row pass-code justify-content-center gx-2 mt-3 mb-4">
                <div class="first-digit digits col-1 col-sm-1">
                    <h3 class="otp">{{ $otp['0'] }}</h3>
                </div>
                <!--.first-digit-->
                <div class="second-digit digits col-1 col-sm-1">
                    <h3 class="otp">{{ $otp['1'] }}</h3>
                </div>
                <!--.second-digit-->
                <div class="third-digit digits col-1">
                    <h3 class="otp">{{ $otp['2'] }}</h3>
                </div>
                <!--.third-digit-->
                <div class="fourth-digit digits col-1">
                    <h3 class="otp">{{ $otp['3'] }}</h3>
                </div>
                <div class="fourth-digit digits col-1">
                    <h3 class="otp">{{ $otp['4'] }}</h3>
                </div>
                <div class="fourth-digit digits col-1">
                    <h3 class="otp">{{ $otp['5'] }}</h3>
                </div>
                <!--.fourth-digit-->
            </div>
            <!--.pass-code-->
        
            <p class="text-g">
                We're always here to help! If you encounter any issues, please contact
                us at
                <span style="color: #498BEE; text-decoration: underline;"><strong><a href="mailto:streamingapp@gmail.com">streamingapp@gmail.com</a></strong></span> and we'll do our best to assist
                you.
            </p>
            <p class="text-g">Thanks</p>
            <h6 class="end-h">Streaming App</h6>
        </div>
        <!--.inner-container-->
    </div>
    <!--.main-container-->
    </div> <!--.container-fluid-->
    
</body>
<footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>


</footer>
</html>
