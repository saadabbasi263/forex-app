<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="front-style.css">
    <title>Card</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;700;800&display=swap');
:root {
    --black-shade: #333132;
    --primary-color:#349CEA;
}
* {
    font-family: 'Inter', sans-serif;
}
/*
    |-------------------------|
    |--- Containers styles ---|
    |-------------------------|
*/
.outer-container {
    box-shadow: 4px 4px 12px rgba(91, 89, 89, 0.12);
    border-radius: 16px;
    height: 296px;
    width: 496px;
    position: relative;
    margin-top: 20px;
    margin-left: 20px;
    margin-right: -20px;
}

.outer-container .top-left-pink {
    position: absolute;
    left: 0%;
    right: 58.67%;
    top: 0%;
    bottom: 79.05%;
}

.outer-container .top-right-green {
    position: absolute;
    left: 79.44%;
    right: 0%;
    top: 0%;
    bottom: 65.2%;
}

.outer-container .bottom-left-pink {
    position: absolute;
    left: 0%;
    right: 78.83%;
    top: 65.88%;
    bottom: 0%;
}

.outer-container .bottom-right-pink {
    position: absolute;
    left: 75.6%;
    right: 0%;
    top: 87.16%;
    bottom: 0%;
}
/*
    |------------------|
    |--- left Part ---|
    |------------------|
*/

.left svg {
    position: absolute;
    width: 88px;
    height: 88px;
    left: 48px;
top: 78px;
}

.left input {
    margin-top: 12px;
    background-color: transparent;
}
.left .company {
    position: absolute;
    width: 132px;
    height: 19px;
    left: 25px;
    top: 178px;
    text-align: center;
}

.left .tag {
    position: absolute;
    width: 132px;
    height: 19px;
    left: 25px;
    top: 205px;
    text-align: center;
}
/*
    |------------------|
    |--- Right Part ---|
    |------------------|
*/

.top {
    position: absolute;
    width: 22px;
    height: 13.5px;
    left: 0.91px;
    top: -13.5px;
}

.bottom {
    position: absolute;
    width: 22px;
    height: 13.5px;
    left: 0.91px;
    top: 127.5px;
}

.contact-wrapper {
    margin-top: -10px;
}

.right {
    border-radius: 0px 16px 16px 0px;
    position: absolute;
    width: 283px;
    height: 296px;
    left: 213px;
    top: 0px
}

.contact-info {
    margin: 18px 0 18px 0px;
}

.blue {
    position: absolute;
width: 284px;
height: 16px;
left: 212px;
top: 280px;
}
/*
    |--------------------|
    |--- input styles ---|
    |--------------------|
*/

input {
    border: none;
    stroke: none;
    outline: none;
}

.right input::placeholder {
    color: var(--black-shade);
}

.right input, select, textarea {
    color: var(--black-shade);
    font-size: 12px;
}

.name {
    margin-top: 34px;
    font-weight: 700;
}

/*
    |-----------------------|
    |--- Backside styles ---|
    |-----------------------|
*/

.back-outer-container {
    position: relative;
    width: 496px;
    height: 296px;
    left: 0px;
    top: 0px;
    box-shadow: 4px 4px 12px rgba(91, 89, 89, 0.12);
    border-radius: 16px;
    margin-top: 20px;
    margin-left: 20px;
}

.back-outer-container .back-pink {
    position: absolute;
    left: 0%;
    right: 73.39%;
    top: 0%;
    bottom: 58.11%;
}

.back-outer-container .back-green {
    position: absolute;
    left: 79.44%;
    right: 0%;
    top: 65.2%;
    bottom: 0%;
}

.qr {
    position: absolute;
    width: 80px;
    height: 80px;
    left: 209px;
    top: 81px;
}

.company {
    position: absolute;
    width: 132px;
    height: 19px;
    left: 182px;
    top: 177px;
}

.tag {
    position: absolute;
    width: 68px;
    height: 15px;
    left: 216px;
    top: 200px;
}

.company input {
    background-color: transparent;
    border: none;
    outline: none;
    width: 100%;
    text-align: center;
}

.company input::placeholder {
    color: var(--black-shade);
}

.company input, select, textarea {
    color: var(--black-shade);
}

.tag input {
    background-color: transparent;
    border: none;
    outline: none;
    width: 100%;
    text-align: center;

}

.tag input::placeholder {
    color: var(--black-shade);
}

.tag input, select, textarea {
    color: var(--black-shade);
}
    </style>
</head>

<body>
    <div class="outer-container col-3">
        <!-- <div class="top-left-pink">
            <svg width="205" height="62" viewBox="0 0 205 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M205 0C191.675 36.0059 165.9 62 120 62C88.775 62 43.225 53.3659 0 38.3941V16C0 7.16344 7.16344 0 16 0H205Z"
                    fill="#E870A1" />
            </svg>
        </div> -->
        <!-- <div class="top-right-green">
            <svg width="102" height="103" viewBox="0 0 102 103" fill="none" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <rect width="102" height="103" fill="url(#pattern0)" />
                <defs>
                    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_63_6121" transform="scale(0.00980392 0.00970874)" />
                    </pattern>
                    <image id="image0_63_6121" width="102" height="103"
                        xlink:href="data:image/png;base64,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" />
                </defs>
            </svg>

        </div> -->
        <!-- <div class="bottom-left-pink">
            <svg width="105" height="101" viewBox="0 0 105 101" fill="none" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <rect width="105" height="101" fill="url(#pattern0)" />
                <defs>
                    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_63_6122" transform="scale(0.00952381 0.00990099)" />
                    </pattern>
                    <image id="image0_63_6122" width="105" height="101"
                        xlink:href="data:image/png;base64,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" />
                </defs>
            </svg>

        </div> -->
        <!-- <div class="bottom-right-pink">
            <svg width="121" height="38" viewBox="0 0 121 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M121 0V22C121 30.8366 113.837 38 105 38H0C36.0404 14.9213 81.8544 1.19067 121 0Z"
                    fill="#E870A1" />
            </svg>

        </div> -->
        <div class="row">
            <div class="left col-6 text-center">
                <svg width="88" height="88" viewBox="0 0 88 88" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_63_689)">
                        <path
                            d="M31.04 9.44C31.04 9.82191 31.1917 10.1882 31.4617 10.4582C31.7318 10.7283 32.0981 10.88 32.48 10.88C32.8619 10.88 33.2282 10.7283 33.4982 10.4582C33.7683 10.1882 33.92 9.82191 33.92 9.44C33.92 9.05809 33.7683 8.69182 33.4982 8.42177C33.2282 8.15171 32.8619 8 32.48 8C32.0981 8 31.7318 8.15171 31.4617 8.42177C31.1917 8.69182 31.04 9.05809 31.04 9.44Z"
                            fill="black" />
                        <path
                            d="M35.36 10.8799H36.8V9.43994C36.8 9.82185 36.6483 10.1881 36.3782 10.4582C36.1082 10.7282 35.7419 10.8799 35.36 10.8799Z"
                            fill="black" />
                        <path
                            d="M39.68 10.88V9.44C39.68 9.05809 39.5283 8.69182 39.2582 8.42177C38.9882 8.15171 38.6219 8 38.24 8C37.8581 8 37.4918 8.15171 37.2218 8.42177C36.9517 8.69182 36.8 9.05809 36.8 9.44V10.88H39.68Z"
                            fill="black" />
                        <path
                            d="M41.12 10.8799H42.56V9.43994C42.56 9.82185 42.4083 10.1881 42.1382 10.4582C41.8682 10.7282 41.5019 10.8799 41.12 10.8799Z"
                            fill="black" />
                        <path
                            d="M39.68 9.43994V10.8799H41.12C40.7381 10.8799 40.3718 10.7282 40.1018 10.4582C39.8317 10.1881 39.68 9.82185 39.68 9.43994Z"
                            fill="black" />
                        <path
                            d="M45.44 10.88V9.44C45.44 9.05809 45.2883 8.69182 45.0182 8.42177C44.7482 8.15171 44.3819 8 44 8C43.6181 8 43.2518 8.15171 42.9818 8.42177C42.7117 8.69182 42.56 9.05809 42.56 9.44V10.88H45.44Z"
                            fill="black" />
                        <path
                            d="M51.2 9.44C51.2 9.82191 51.3517 10.1882 51.6218 10.4582C51.8918 10.7283 52.2581 10.88 52.64 10.88C53.0219 10.88 53.3882 10.7283 53.6582 10.4582C53.9283 10.1882 54.08 9.82191 54.08 9.44C54.08 9.05809 53.9283 8.69182 53.6582 8.42177C53.3882 8.15171 53.0219 8 52.64 8C52.2581 8 51.8918 8.15171 51.6218 8.42177C51.3517 8.69182 51.2 9.05809 51.2 9.44Z"
                            fill="black" />
                        <path
                            d="M32.48 13.7601H33.92V12.3201C33.92 12.702 33.7683 13.0683 33.4982 13.3383C33.2282 13.6084 32.8619 13.7601 32.48 13.7601Z"
                            fill="black" />
                        <path
                            d="M33.92 12.3199V13.7599H36.8V10.8799H35.36C34.9781 10.8799 34.6118 11.0316 34.3417 11.3016C34.0717 11.5717 33.92 11.938 33.92 12.3199Z"
                            fill="black" />
                        <path d="M39.68 10.8835H36.8V13.7635H39.68V10.8835Z" fill="black" />
                        <path d="M42.56 10.8835H39.68V13.7635H42.56V10.8835Z" fill="black" />
                        <path
                            d="M44 13.7599H42.56V10.8799H45.44V12.3199C45.44 12.7018 45.2883 13.0681 45.0182 13.3381C44.7482 13.6082 44.3819 13.7599 44 13.7599Z"
                            fill="black" />
                        <path
                            d="M31.04 15.2V16.64H33.92V13.76H32.48C32.0981 13.76 31.7318 13.9117 31.4617 14.1818C31.1917 14.4518 31.04 14.8181 31.04 15.2Z"
                            fill="black" />
                        <path d="M36.8 13.7637H33.92V16.6437H36.8V13.7637Z" fill="black" />
                        <path d="M39.68 13.7637H36.8V16.6437H39.68V13.7637Z" fill="black" />
                        <path
                            d="M39.68 15.2V13.76H41.12C40.7381 13.76 40.3718 13.9117 40.1018 14.1818C39.8317 14.4518 39.68 14.8181 39.68 15.2Z"
                            fill="black" />
                        <path
                            d="M45.44 15.2C45.44 15.5819 45.5917 15.9482 45.8618 16.2182C46.1318 16.4883 46.4981 16.64 46.88 16.64C47.2619 16.64 47.6282 16.4883 47.8982 16.2182C48.1683 15.9482 48.32 15.5819 48.32 15.2C48.32 14.8181 48.1683 14.4518 47.8982 14.1818C47.6282 13.9117 47.2619 13.76 46.88 13.76C46.4981 13.76 46.1318 13.9117 45.8618 14.1818C45.5917 14.4518 45.44 14.8181 45.44 15.2Z"
                            fill="black" />
                        <path
                            d="M51.2 15.2V16.64H54.08V13.76H52.64C52.2581 13.76 51.8918 13.9117 51.6218 14.1818C51.3517 14.4518 51.2 14.8181 51.2 15.2Z"
                            fill="black" />
                        <path
                            d="M56.96 15.2V16.64H54.08V13.76H55.52C55.9019 13.76 56.2682 13.9117 56.5383 14.1818C56.8083 14.4518 56.96 14.8181 56.96 15.2Z"
                            fill="black" />
                        <path d="M33.92 16.6436H31.04V19.5236H33.92V16.6436Z" fill="black" />
                        <path d="M36.8 16.6436H33.92V19.5236H36.8V16.6436Z" fill="black" />
                        <path
                            d="M38.24 19.5199H36.8V16.6399H39.68V18.0799C39.68 18.4618 39.5283 18.8281 39.2582 19.0981C38.9882 19.3682 38.6219 19.5199 38.24 19.5199Z"
                            fill="black" />
                        <path
                            d="M41.12 19.5201H42.56V18.0801C42.56 18.462 42.4083 18.8283 42.1382 19.0983C41.8682 19.3684 41.5019 19.5201 41.12 19.5201Z"
                            fill="black" />
                        <path
                            d="M45.44 19.5199V18.0799C45.44 17.698 45.2883 17.3317 45.0182 17.0617C44.7482 16.7916 44.3819 16.6399 44 16.6399C43.6181 16.6399 43.2518 16.7916 42.9818 17.0617C42.7117 17.3317 42.56 17.698 42.56 18.0799V19.5199H45.44Z"
                            fill="black" />
                        <path
                            d="M52.64 19.5199H54.08V16.6399H51.2V18.0799C51.2 18.4618 51.3517 18.8281 51.6218 19.0981C51.8918 19.3682 52.2581 19.5199 52.64 19.5199Z"
                            fill="black" />
                        <path d="M56.96 16.6436H54.08V19.5236H56.96V16.6436Z" fill="black" />
                        <path
                            d="M31.04 19.52V20.96C31.04 21.3419 31.1917 21.7082 31.4617 21.9783C31.7318 22.2483 32.0981 22.4 32.48 22.4C32.8619 22.4 33.2282 22.2483 33.4982 21.9783C33.7683 21.7082 33.92 21.3419 33.92 20.96V19.52H31.04Z"
                            fill="black" />
                        <path
                            d="M33.92 20.96V19.52H35.36C34.9781 19.52 34.6118 19.6717 34.3417 19.9418C34.0717 20.2118 33.92 20.5781 33.92 20.96Z"
                            fill="black" />
                        <path
                            d="M38.24 22.4H39.68V20.96C39.68 21.3419 39.5283 21.7081 39.2582 21.9782C38.9882 22.2482 38.6219 22.4 38.24 22.4Z"
                            fill="black" />
                        <path
                            d="M39.68 20.96V22.4H42.56V19.52H41.12C40.7381 19.52 40.3718 19.6717 40.1018 19.9418C39.8317 20.2118 39.68 20.5781 39.68 20.96Z"
                            fill="black" />
                        <path
                            d="M44 22.4H42.56V19.52H45.44V20.96C45.44 21.3419 45.2883 21.7082 45.0182 21.9783C44.7482 22.2483 44.3819 22.4 44 22.4Z"
                            fill="black" />
                        <path
                            d="M54.08 20.96V19.52H52.64C53.0219 19.52 53.3882 19.6717 53.6582 19.9418C53.9283 20.2118 54.08 20.5781 54.08 20.96Z"
                            fill="black" />
                        <path d="M56.96 19.5237H54.08V22.4037H56.96V19.5237Z" fill="black" />
                        <path
                            d="M36.8 23.8399V25.2799H39.68V22.3999H38.24C37.8581 22.3999 37.4918 22.5516 37.2218 22.8217C36.9517 23.0917 36.8 23.458 36.8 23.8399Z"
                            fill="black" />
                        <path
                            d="M41.12 25.2799H39.68V22.3999H42.56V23.8399C42.56 24.2218 42.4083 24.5881 42.1382 24.8581C41.8682 25.1282 41.5019 25.2799 41.12 25.2799Z"
                            fill="black" />
                        <path
                            d="M42.56 23.8399V22.3999H44C43.6181 22.3999 43.2518 22.5516 42.9818 22.8217C42.7117 23.0917 42.56 23.458 42.56 23.8399Z"
                            fill="black" />
                        <path
                            d="M51.2 25.2799V23.8399C51.2 23.458 51.0483 23.0917 50.7782 22.8217C50.5082 22.5516 50.1419 22.3999 49.76 22.3999C49.3781 22.3999 49.0118 22.5516 48.7418 22.8217C48.4717 23.0917 48.32 23.458 48.32 23.8399V25.2799H51.2Z"
                            fill="black" />
                        <path d="M56.96 22.3999H54.08V25.2799H56.96V22.3999Z" fill="black" />
                        <path
                            d="M31.04 26.72C31.04 27.1019 31.1917 27.4682 31.4617 27.7383C31.7318 28.0083 32.0981 28.16 32.48 28.16C32.8619 28.16 33.2282 28.0083 33.4982 27.7383C33.7683 27.4682 33.92 27.1019 33.92 26.72C33.92 26.3381 33.7683 25.9718 33.4982 25.7018C33.2282 25.4317 32.8619 25.28 32.48 25.28C32.0981 25.28 31.7318 25.4317 31.4617 25.7018C31.1917 25.9718 31.04 26.3381 31.04 26.72Z"
                            fill="black" />
                        <path d="M39.68 25.28H36.8V28.16H39.68V25.28Z" fill="black" />
                        <path
                            d="M39.68 26.72V25.28H41.12C40.7381 25.28 40.3718 25.4317 40.1018 25.7018C39.8317 25.9718 39.68 26.3381 39.68 26.72Z"
                            fill="black" />
                        <path
                            d="M45.44 28.16V26.72C45.44 26.3381 45.2883 25.9718 45.0182 25.7018C44.7482 25.4317 44.3819 25.28 44 25.28C43.6181 25.28 43.2518 25.4317 42.9818 25.7018C42.7117 25.9718 42.56 26.3381 42.56 26.72V28.16H45.44Z"
                            fill="black" />
                        <path
                            d="M48.32 25.28V26.72C48.32 27.1019 48.4717 27.4682 48.7418 27.7383C49.0118 28.0083 49.3781 28.16 49.76 28.16C50.1419 28.16 50.5082 28.0083 50.7782 27.7383C51.0483 27.4682 51.2 27.1019 51.2 26.72V25.28H48.32Z"
                            fill="black" />
                        <path
                            d="M52.64 28.16H54.08V26.72C54.08 27.1019 53.9283 27.4682 53.6582 27.7382C53.3882 28.0083 53.0219 28.16 52.64 28.16Z"
                            fill="black" />
                        <path d="M56.96 25.28H54.08V28.16H56.96V25.28Z" fill="black" />
                        <path d="M39.68 28.1599H36.8V31.0399H39.68V28.1599Z" fill="black" />
                        <path
                            d="M41.12 31.0401H42.56V29.6001C42.56 29.982 42.4083 30.3483 42.1382 30.6183C41.8682 30.8884 41.5019 31.0401 41.12 31.0401Z"
                            fill="black" />
                        <path
                            d="M39.68 29.6001V31.0401H41.12C40.7381 31.0401 40.3718 30.8884 40.1018 30.6183C39.8317 30.3483 39.68 29.982 39.68 29.6001Z"
                            fill="black" />
                        <path d="M45.44 28.1599H42.56V31.0399H45.44V28.1599Z" fill="black" />
                        <path
                            d="M45.44 29.6001V31.0401H46.88C46.4981 31.0401 46.1318 30.8884 45.8618 30.6183C45.5917 30.3483 45.44 29.982 45.44 29.6001Z"
                            fill="black" />
                        <path
                            d="M54.08 28.1599H52.64C52.2581 28.1599 51.8918 28.3116 51.6218 28.5817C51.3517 28.8517 51.2 29.218 51.2 29.5999C51.2 29.9818 51.3517 30.3481 51.6218 30.6181C51.8918 30.8882 52.2581 31.0399 52.64 31.0399H54.08V28.1599Z"
                            fill="black" />
                        <path d="M56.96 28.1599H54.08V31.0399H56.96V28.1599Z" fill="black" />
                        <path
                            d="M56.96 29.6001V31.0401H58.4C58.0181 31.0401 57.6518 30.8884 57.3818 30.6183C57.1117 30.3483 56.96 29.982 56.96 29.6001Z"
                            fill="black" />
                        <path
                            d="M10.88 31.04H9.44C9.05809 31.04 8.69182 31.1918 8.42177 31.4618C8.15171 31.7319 8 32.0981 8 32.48C8 32.862 8.15171 33.2282 8.42177 33.4983C8.69182 33.7683 9.05809 33.92 9.44 33.92H10.88V31.04Z"
                            fill="black" />
                        <path d="M13.7636 31.04H10.8836V33.92H13.7636V31.04Z" fill="black" />
                        <path d="M16.6436 31.04H13.7636V33.92H16.6436V31.04Z" fill="black" />
                        <path
                            d="M16.64 33.92H18.08C18.4619 33.92 18.8282 33.7683 19.0982 33.4983C19.3683 33.2282 19.52 32.862 19.52 32.48C19.52 32.0981 19.3683 31.7319 19.0982 31.4618C18.8282 31.1918 18.4619 31.04 18.08 31.04H16.64V33.92Z"
                            fill="black" />
                        <path
                            d="M25.28 32.48C25.28 32.862 25.4317 33.2282 25.7018 33.4983C25.9718 33.7683 26.3381 33.92 26.72 33.92C27.1019 33.92 27.4682 33.7683 27.7383 33.4983C28.0083 33.2282 28.16 32.862 28.16 32.48C28.16 32.0981 28.0083 31.7319 27.7383 31.4618C27.4682 31.1918 27.1019 31.04 26.72 31.04C26.3381 31.04 25.9718 31.1918 25.7018 31.4618C25.4317 31.7319 25.28 32.0981 25.28 32.48Z"
                            fill="black" />
                        <path
                            d="M29.6 33.92H31.04V32.48C31.04 32.8619 30.8883 33.2282 30.6182 33.4982C30.3482 33.7683 29.9819 33.92 29.6 33.92Z"
                            fill="black" />
                        <path
                            d="M33.92 33.92V32.48C33.92 32.0981 33.7683 31.7319 33.4982 31.4618C33.2282 31.1918 32.8619 31.04 32.48 31.04C32.0981 31.04 31.7318 31.1918 31.4617 31.4618C31.1917 31.7319 31.04 32.0981 31.04 32.48V33.92H33.92Z"
                            fill="black" />
                        <path d="M39.68 31.04H36.8V33.92H39.68V31.04Z" fill="black" />
                        <path d="M42.56 31.04H39.68V33.92H42.56V31.04Z" fill="black" />
                        <path d="M45.44 31.04H42.56V33.92H45.44V31.04Z" fill="black" />
                        <path
                            d="M45.44 33.92H46.88C47.2619 33.92 47.6282 33.7683 47.8982 33.4983C48.1683 33.2282 48.32 32.862 48.32 32.48C48.32 32.0981 48.1683 31.7319 47.8982 31.4618C47.6282 31.1918 47.2619 31.04 46.88 31.04H45.44V33.92Z"
                            fill="black" />
                        <path
                            d="M54.08 32.48V31.04H52.64C53.0219 31.04 53.3882 31.1918 53.6582 31.4618C53.9283 31.7319 54.08 32.0981 54.08 32.48Z"
                            fill="black" />
                        <path
                            d="M52.64 33.92H54.08V32.48C54.08 32.8619 53.9283 33.2282 53.6582 33.4982C53.3882 33.7683 53.0219 33.92 52.64 33.92Z"
                            fill="black" />
                        <path d="M56.96 31.04H54.08V33.92H56.96V31.04Z" fill="black" />
                        <path
                            d="M56.96 33.92H58.4C58.7819 33.92 59.1482 33.7683 59.4183 33.4983C59.6883 33.2282 59.84 32.862 59.84 32.48C59.84 32.0981 59.6883 31.7319 59.4183 31.4618C59.1482 31.1918 58.7819 31.04 58.4 31.04H56.96V33.92Z"
                            fill="black" />
                        <path
                            d="M68.48 31.04H67.04C66.6581 31.04 66.2918 31.1918 66.0217 31.4618C65.7517 31.7319 65.6 32.0981 65.6 32.48C65.6 32.862 65.7517 33.2282 66.0217 33.4983C66.2918 33.7683 66.6581 33.92 67.04 33.92H68.48V31.04Z"
                            fill="black" />
                        <path d="M71.3564 31.04H68.4764V33.92H71.3564V31.04Z" fill="black" />
                        <path
                            d="M71.36 33.92H72.8C73.1819 33.92 73.5482 33.7683 73.8182 33.4983C74.0883 33.2282 74.24 32.862 74.24 32.48C74.24 32.0981 74.0883 31.7319 73.8182 31.4618C73.5482 31.1918 73.1819 31.04 72.8 31.04H71.36V33.92Z"
                            fill="black" />
                        <path
                            d="M80 33.92V32.48C80 32.0981 79.8483 31.7319 79.5782 31.4618C79.3082 31.1918 78.9419 31.04 78.56 31.04C78.1781 31.04 77.8118 31.1918 77.5418 31.4618C77.2717 31.7319 77.12 32.0981 77.12 32.48V33.92H80Z"
                            fill="black" />
                        <path
                            d="M10.88 35.3599V33.9199H9.44C9.82191 33.9199 10.1882 34.0716 10.4582 34.3417C10.7283 34.6117 10.88 34.978 10.88 35.3599Z"
                            fill="black" />
                        <path
                            d="M10.88 33.9199V35.3599C10.88 35.7418 11.0317 36.1081 11.3018 36.3782C11.5718 36.6482 11.9381 36.7999 12.32 36.7999C12.7019 36.7999 13.0682 36.6482 13.3382 36.3782C13.6083 36.1081 13.76 35.7418 13.76 35.3599V33.9199H10.88Z"
                            fill="black" />
                        <path
                            d="M13.76 35.3599V33.9199H15.2C14.8181 33.9199 14.4518 34.0716 14.1818 34.3417C13.9117 34.6117 13.76 34.978 13.76 35.3599Z"
                            fill="black" />
                        <path
                            d="M25.28 36.7999V35.3599C25.28 34.978 25.1283 34.6117 24.8583 34.3417C24.5882 34.0716 24.2219 33.9199 23.84 33.9199C23.4581 33.9199 23.0918 34.0716 22.8218 34.3417C22.5517 34.6117 22.4 34.978 22.4 35.3599V36.7999H25.28Z"
                            fill="black" />
                        <path
                            d="M26.72 36.8001H28.16V35.3601C28.16 35.742 28.0083 36.1083 27.7382 36.3783C27.4682 36.6484 27.1019 36.8001 26.72 36.8001Z"
                            fill="black" />
                        <path
                            d="M25.28 35.3601V36.8001H26.72C26.3381 36.8001 25.9718 36.6484 25.7018 36.3783C25.4317 36.1083 25.28 35.742 25.28 35.3601Z"
                            fill="black" />
                        <path
                            d="M28.16 35.3599V36.7999H31.04V33.9199H29.6C29.2181 33.9199 28.8518 34.0716 28.5817 34.3417C28.3117 34.6117 28.16 34.978 28.16 35.3599Z"
                            fill="black" />
                        <path
                            d="M32.48 36.7999H31.04V33.9199H33.92V35.3599C33.92 35.7418 33.7683 36.1081 33.4982 36.3782C33.2282 36.6482 32.8619 36.7999 32.48 36.7999Z"
                            fill="black" />
                        <path
                            d="M35.36 36.8001H36.8V35.3601C36.8 35.742 36.6483 36.1083 36.3782 36.3783C36.1082 36.6484 35.7419 36.8001 35.36 36.8001Z"
                            fill="black" />
                        <path d="M39.68 33.9199H36.8V36.7999H39.68V33.9199Z" fill="black" />
                        <path
                            d="M39.68 35.3599V33.9199H41.12C40.7381 33.9199 40.3718 34.0716 40.1018 34.3417C39.8317 34.6117 39.68 34.978 39.68 35.3599Z"
                            fill="black" />
                        <path
                            d="M42.56 35.3599V33.9199H41.12C41.5019 33.9199 41.8682 34.0716 42.1382 34.3417C42.4083 34.6117 42.56 34.978 42.56 35.3599Z"
                            fill="black" />
                        <path
                            d="M41.12 36.8001H42.56V35.3601C42.56 35.742 42.4083 36.1083 42.1382 36.3783C41.8682 36.6484 41.5019 36.8001 41.12 36.8001Z"
                            fill="black" />
                        <path
                            d="M39.68 35.3601V36.8001H41.12C40.7381 36.8001 40.3718 36.6484 40.1018 36.3783C39.8317 36.1083 39.68 35.742 39.68 35.3601Z"
                            fill="black" />
                        <path d="M45.44 33.9199H42.56V36.7999H45.44V33.9199Z" fill="black" />
                        <path
                            d="M45.44 35.3599V33.9199H46.88C46.4981 33.9199 46.1318 34.0716 45.8618 34.3417C45.5917 34.6117 45.44 34.978 45.44 35.3599Z"
                            fill="black" />
                        <path
                            d="M45.44 35.3601V36.8001H46.88C46.4981 36.8001 46.1318 36.6484 45.8618 36.3783C45.5917 36.1083 45.44 35.742 45.44 35.3601Z"
                            fill="black" />
                        <path
                            d="M54.08 33.9199H52.64C52.2581 33.9199 51.8918 34.0716 51.6218 34.3417C51.3517 34.6117 51.2 34.978 51.2 35.3599C51.2 35.7418 51.3517 36.1081 51.6218 36.3782C51.8918 36.6482 52.2581 36.7999 52.64 36.7999H54.08V33.9199Z"
                            fill="black" />
                        <path
                            d="M55.52 36.7999H54.08V33.9199H56.96V35.3599C56.96 35.7418 56.8083 36.1081 56.5383 36.3782C56.2682 36.6482 55.9019 36.7999 55.52 36.7999Z"
                            fill="black" />
                        <path
                            d="M56.96 35.3599V33.9199H58.4C58.0181 33.9199 57.6518 34.0716 57.3818 34.3417C57.1117 34.6117 56.96 34.978 56.96 35.3599Z"
                            fill="black" />
                        <path
                            d="M59.84 35.3599C59.84 35.7418 59.9917 36.1081 60.2618 36.3782C60.5318 36.6482 60.8981 36.7999 61.28 36.7999C61.6619 36.7999 62.0282 36.6482 62.2983 36.3782C62.5683 36.1081 62.72 35.7418 62.72 35.3599C62.72 34.978 62.5683 34.6117 62.2983 34.3417C62.0282 34.0716 61.6619 33.9199 61.28 33.9199C60.8981 33.9199 60.5318 34.0716 60.2618 34.3417C59.9917 34.6117 59.84 34.978 59.84 35.3599Z"
                            fill="black" />
                        <path
                            d="M77.12 33.9199V35.3599C77.12 35.7418 77.2717 36.1081 77.5418 36.3782C77.8118 36.6482 78.1781 36.7999 78.56 36.7999C78.9419 36.7999 79.3082 36.6482 79.5782 36.3782C79.8483 36.1081 80 35.7418 80 35.3599V33.9199H77.12Z"
                            fill="black" />
                        <path
                            d="M8 38.24C8 38.622 8.15171 38.9882 8.42177 39.2583C8.69182 39.5283 9.05809 39.68 9.44 39.68C9.82191 39.68 10.1882 39.5283 10.4582 39.2583C10.7283 38.9882 10.88 38.622 10.88 38.24C10.88 37.8581 10.7283 37.4919 10.4582 37.2218C10.1882 36.9518 9.82191 36.8 9.44 36.8C9.05809 36.8 8.69182 36.9518 8.42177 37.2218C8.15171 37.4919 8 37.8581 8 38.24Z"
                            fill="black" />
                        <path
                            d="M16.64 38.24C16.64 38.622 16.7917 38.9882 17.0618 39.2583C17.3318 39.5283 17.6981 39.68 18.08 39.68C18.4619 39.68 18.8282 39.5283 19.0982 39.2583C19.3683 38.9882 19.52 38.622 19.52 38.24C19.52 37.8581 19.3683 37.4919 19.0982 37.2218C18.8282 36.9518 18.4619 36.8 18.08 36.8C17.6981 36.8 17.3318 36.9518 17.0618 37.2218C16.7917 37.4919 16.64 37.8581 16.64 38.24Z"
                            fill="black" />
                        <path d="M25.28 36.8H22.4V39.68H25.28V36.8Z" fill="black" />
                        <path d="M28.16 36.8H25.28V39.68H28.16V36.8Z" fill="black" />
                        <path
                            d="M29.6 39.68H28.16V36.8H31.04V38.24C31.04 38.622 30.8883 38.9882 30.6182 39.2583C30.3482 39.5283 29.9819 39.68 29.6 39.68Z"
                            fill="black" />
                        <path
                            d="M31.04 38.24V36.8H32.48C32.0981 36.8 31.7318 36.9518 31.4617 37.2218C31.1917 37.4919 31.04 37.8581 31.04 38.24Z"
                            fill="black" />
                        <path
                            d="M33.92 38.24V39.68H36.8V36.8H35.36C34.9781 36.8 34.6118 36.9518 34.3417 37.2218C34.0717 37.4919 33.92 37.8581 33.92 38.24Z"
                            fill="black" />
                        <path d="M39.68 36.8H36.8V39.68H39.68V36.8Z" fill="black" />
                        <path d="M42.56 36.8H39.68V39.68H42.56V36.8Z" fill="black" />
                        <path d="M45.44 36.8H42.56V39.68H45.44V36.8Z" fill="black" />
                        <path
                            d="M48.32 38.24V39.68H45.44V36.8H46.88C47.2619 36.8 47.6282 36.9518 47.8982 37.2218C48.1683 37.4919 48.32 37.8581 48.32 38.24Z"
                            fill="black" />
                        <path
                            d="M48.32 38.24V39.68H49.76C49.3781 39.68 49.0118 39.5283 48.7418 39.2582C48.4717 38.9882 48.32 38.6219 48.32 38.24Z"
                            fill="black" />
                        <path
                            d="M71.36 38.24C71.36 38.622 71.5117 38.9882 71.7818 39.2583C72.0518 39.5283 72.4181 39.68 72.8 39.68C73.1819 39.68 73.5482 39.5283 73.8182 39.2583C74.0883 38.9882 74.24 38.622 74.24 38.24C74.24 37.8581 74.0883 37.4919 73.8182 37.2218C73.5482 36.9518 73.1819 36.8 72.8 36.8C72.4181 36.8 72.0518 36.9518 71.7818 37.2218C71.5117 37.4919 71.36 37.8581 71.36 38.24Z"
                            fill="black" />
                        <path
                            d="M22.4 39.6799V41.1199C22.4 41.5018 22.5517 41.8681 22.8218 42.1382C23.0918 42.4082 23.4581 42.5599 23.84 42.5599C24.2219 42.5599 24.5882 42.4082 24.8583 42.1382C25.1283 41.8681 25.28 41.5018 25.28 41.1199V39.6799H22.4Z"
                            fill="black" />
                        <path
                            d="M25.28 41.1199V39.6799H26.72C26.3381 39.6799 25.9718 39.8316 25.7018 40.1017C25.4317 40.3717 25.28 40.738 25.28 41.1199Z"
                            fill="black" />
                        <path d="M36.8 39.6799H33.92V42.5599H36.8V39.6799Z" fill="black" />
                        <path d="M39.68 39.6799H36.8V42.5599H39.68V39.6799Z" fill="black" />
                        <path
                            d="M39.68 41.1199V39.6799H41.12C40.7381 39.6799 40.3718 39.8316 40.1018 40.1017C39.8317 40.3717 39.68 40.738 39.68 41.1199Z"
                            fill="black" />
                        <path
                            d="M45.44 41.1199V39.6799H44C44.3819 39.6799 44.7482 39.8316 45.0182 40.1017C45.2883 40.3717 45.44 40.738 45.44 41.1199Z"
                            fill="black" />
                        <path
                            d="M46.88 42.5599H48.32V39.6799H45.44V41.1199C45.44 41.5018 45.5917 41.8681 45.8618 42.1382C46.1318 42.4082 46.4981 42.5599 46.88 42.5599Z"
                            fill="black" />
                        <path d="M51.2 39.6799H48.32V42.5599H51.2V39.6799Z" fill="black" />
                        <path
                            d="M54.08 41.1199V42.5599H51.2V39.6799H52.64C53.0219 39.6799 53.3882 39.8316 53.6582 40.1017C53.9283 40.3717 54.08 40.738 54.08 41.1199Z"
                            fill="black" />
                        <path
                            d="M54.08 41.1201V42.5601H55.52C55.1381 42.5601 54.7718 42.4084 54.5018 42.1384C54.2317 41.8683 54.08 41.502 54.08 41.1201Z"
                            fill="black" />
                        <path
                            d="M56.96 41.1199C56.96 41.5018 57.1117 41.8681 57.3818 42.1382C57.6518 42.4082 58.0181 42.5599 58.4 42.5599C58.7819 42.5599 59.1482 42.4082 59.4183 42.1382C59.6883 41.8681 59.84 41.5018 59.84 41.1199C59.84 40.738 59.6883 40.3717 59.4183 40.1017C59.1482 39.8316 58.7819 39.6799 58.4 39.6799C58.0181 39.6799 57.6518 39.8316 57.3818 40.1017C57.1117 40.3717 56.96 40.738 56.96 41.1199Z"
                            fill="black" />
                        <path
                            d="M61.28 42.5601H62.72V41.1201C62.72 41.502 62.5683 41.8683 62.2983 42.1384C62.0282 42.4084 61.6619 42.5601 61.28 42.5601Z"
                            fill="black" />
                        <path
                            d="M65.6 42.5599V41.1199C65.6 40.738 65.4483 40.3717 65.1782 40.1017C64.9082 39.8316 64.5419 39.6799 64.16 39.6799C63.7781 39.6799 63.4118 39.8316 63.1417 40.1017C62.8717 40.3717 62.72 40.738 62.72 41.1199V42.5599H65.6Z"
                            fill="black" />
                        <path
                            d="M65.6 41.1201V42.5601H67.04C66.6581 42.5601 66.2918 42.4084 66.0217 42.1384C65.7517 41.8683 65.6 41.502 65.6 41.1201Z"
                            fill="black" />
                        <path
                            d="M77.12 42.5599V41.1199C77.12 40.738 76.9683 40.3717 76.6982 40.1017C76.4282 39.8316 76.0619 39.6799 75.68 39.6799C75.2981 39.6799 74.9318 39.8316 74.6618 40.1017C74.3917 40.3717 74.24 40.738 74.24 41.1199V42.5599H77.12Z"
                            fill="black" />
                        <path
                            d="M77.12 41.1201V42.5601H78.56C78.1781 42.5601 77.8118 42.4084 77.5418 42.1384C77.2717 41.8683 77.12 41.502 77.12 41.1201Z"
                            fill="black" />
                        <path
                            d="M10.88 42.5601H9.44C9.05809 42.5601 8.69182 42.7118 8.42177 42.9818C8.15171 43.2519 8 43.6181 8 44.0001C8 44.382 8.15171 44.7482 8.42177 45.0183C8.69182 45.2883 9.05809 45.4401 9.44 45.4401H10.88V42.5601Z"
                            fill="black" />
                        <path
                            d="M10.88 45.4401H12.32C12.7019 45.4401 13.0682 45.2883 13.3382 45.0183C13.6083 44.7482 13.76 44.382 13.76 44.0001C13.76 43.6181 13.6083 43.2519 13.3382 42.9818C13.0682 42.7118 12.7019 42.5601 12.32 42.5601H10.88V45.4401Z"
                            fill="black" />
                        <path
                            d="M19.52 42.5601H18.08C17.6981 42.5601 17.3318 42.7118 17.0618 42.9818C16.7917 43.2519 16.64 43.6181 16.64 44.0001C16.64 44.382 16.7917 44.7482 17.0618 45.0183C17.3318 45.2883 17.6981 45.4401 18.08 45.4401H19.52V42.5601Z"
                            fill="black" />
                        <path
                            d="M19.52 45.4401H20.96C21.3419 45.4401 21.7082 45.2883 21.9783 45.0183C22.2483 44.7482 22.4 44.382 22.4 44.0001C22.4 43.6181 22.2483 43.2519 21.9783 42.9818C21.7082 42.7118 21.3419 42.5601 20.96 42.5601H19.52V45.4401Z"
                            fill="black" />
                        <path
                            d="M25.28 44.0001C25.28 44.382 25.4317 44.7482 25.7018 45.0183C25.9718 45.2883 26.3381 45.4401 26.72 45.4401C27.1019 45.4401 27.4682 45.2883 27.7383 45.0183C28.0083 44.7482 28.16 44.382 28.16 44.0001C28.16 43.6181 28.0083 43.2519 27.7383 42.9818C27.4682 42.7118 27.1019 42.5601 26.72 42.5601C26.3381 42.5601 25.9718 42.7118 25.7018 42.9818C25.4317 43.2519 25.28 43.6181 25.28 44.0001Z"
                            fill="black" />
                        <path
                            d="M32.48 45.44H33.92V44C33.92 44.3819 33.7683 44.7482 33.4982 45.0182C33.2282 45.2883 32.8619 45.44 32.48 45.44Z"
                            fill="black" />
                        <path d="M36.8 42.5601H33.92V45.4401H36.8V42.5601Z" fill="black" />
                        <path
                            d="M38.24 45.4401H36.8V42.5601H39.68V44.0001C39.68 44.382 39.5283 44.7482 39.2582 45.0183C38.9882 45.2883 38.6219 45.4401 38.24 45.4401Z"
                            fill="black" />
                        <path
                            d="M41.12 45.44H42.56V44C42.56 44.3819 42.4083 44.7482 42.1382 45.0182C41.8682 45.2883 41.5019 45.44 41.12 45.44Z"
                            fill="black" />
                        <path
                            d="M45.44 45.4401V44.0001C45.44 43.6181 45.2883 43.2519 45.0182 42.9818C44.7482 42.7118 44.3819 42.5601 44 42.5601C43.6181 42.5601 43.2518 42.7118 42.9818 42.9818C42.7117 43.2519 42.56 43.6181 42.56 44.0001V45.4401H45.44Z"
                            fill="black" />
                        <path
                            d="M51.2 44.0001V42.5601H49.76C50.1419 42.5601 50.5082 42.7118 50.7782 42.9818C51.0483 43.2519 51.2 43.6181 51.2 44.0001Z"
                            fill="black" />
                        <path
                            d="M49.76 45.44H51.2V44C51.2 44.3819 51.0483 44.7482 50.7782 45.0182C50.5082 45.2883 50.1419 45.44 49.76 45.44Z"
                            fill="black" />
                        <path d="M54.08 42.5601H51.2V45.4401H54.08V42.5601Z" fill="black" />
                        <path
                            d="M56.96 44.0001V45.4401H54.08V42.5601H55.52C55.9019 42.5601 56.2682 42.7118 56.5383 42.9818C56.8083 43.2519 56.96 43.6181 56.96 44.0001Z"
                            fill="black" />
                        <path
                            d="M62.72 42.5601H61.28C60.8981 42.5601 60.5318 42.7118 60.2618 42.9818C59.9917 43.2519 59.84 43.6181 59.84 44.0001C59.84 44.382 59.9917 44.7482 60.2618 45.0183C60.5318 45.2883 60.8981 45.4401 61.28 45.4401H62.72V42.5601Z"
                            fill="black" />
                        <path d="M65.6 42.5601H62.72V45.4401H65.6V42.5601Z" fill="black" />
                        <path d="M68.48 42.5601H65.6V45.4401H68.48V42.5601Z" fill="black" />
                        <path
                            d="M71.36 44.0001V45.4401H68.48V42.5601H69.92C70.3019 42.5601 70.6682 42.7118 70.9382 42.9818C71.2083 43.2519 71.36 43.6181 71.36 44.0001Z"
                            fill="black" />
                        <path
                            d="M75.68 45.4401H77.12V42.5601H74.24V44.0001C74.24 44.382 74.3917 44.7482 74.6618 45.0183C74.9318 45.2883 75.2981 45.4401 75.68 45.4401Z"
                            fill="black" />
                        <path
                            d="M80 44.0001V45.4401H77.12V42.5601H78.56C78.9419 42.5601 79.3082 42.7118 79.5782 42.9818C79.8483 43.2519 80 43.6181 80 44.0001Z"
                            fill="black" />
                        <path
                            d="M26.72 48.3199H28.16V46.8799C28.16 47.2618 28.0083 47.6281 27.7382 47.8981C27.4682 48.1682 27.1019 48.3199 26.72 48.3199Z"
                            fill="black" />
                        <path
                            d="M28.16 46.8799V48.3199H31.04V45.4399H29.6C29.2181 45.4399 28.8518 45.5917 28.5817 45.8617C28.3117 46.1318 28.16 46.498 28.16 46.8799Z"
                            fill="black" />
                        <path d="M33.92 45.4399H31.04V48.3199H33.92V45.4399Z" fill="black" />
                        <path d="M36.8 45.4399H33.92V48.3199H36.8V45.4399Z" fill="black" />
                        <path
                            d="M36.8 46.8799V45.4399H38.24C37.8581 45.4399 37.4918 45.5917 37.2218 45.8617C36.9517 46.1318 36.8 46.498 36.8 46.8799Z"
                            fill="black" />
                        <path
                            d="M39.68 46.8799V48.3199H42.56V45.4399H41.12C40.7381 45.4399 40.3718 45.5917 40.1018 45.8617C39.8317 46.1318 39.68 46.498 39.68 46.8799Z"
                            fill="black" />
                        <path
                            d="M44 48.3199H42.56V45.4399H45.44V46.8799C45.44 47.2619 45.2883 47.6281 45.0182 47.8982C44.7482 48.1682 44.3819 48.3199 44 48.3199Z"
                            fill="black" />
                        <path
                            d="M51.2 45.4399H49.76C49.3781 45.4399 49.0118 45.5917 48.7418 45.8617C48.4717 46.1318 48.32 46.498 48.32 46.8799C48.32 47.2619 48.4717 47.6281 48.7418 47.8982C49.0118 48.1682 49.3781 48.3199 49.76 48.3199H51.2V45.4399Z"
                            fill="black" />
                        <path d="M54.08 45.4399H51.2V48.3199H54.08V45.4399Z" fill="black" />
                        <path d="M56.96 45.4399H54.08V48.3199H56.96V45.4399Z" fill="black" />
                        <path
                            d="M56.96 46.8799V48.3199H58.4C58.0181 48.3199 57.6518 48.1682 57.3818 47.8981C57.1117 47.6281 56.96 47.2618 56.96 46.8799Z"
                            fill="black" />
                        <path
                            d="M65.6 46.8799V45.4399H64.16C64.5419 45.4399 64.9082 45.5917 65.1782 45.8617C65.4483 46.1318 65.6 46.498 65.6 46.8799Z"
                            fill="black" />
                        <path d="M68.48 45.4399H65.6V48.3199H68.48V45.4399Z" fill="black" />
                        <path
                            d="M69.92 48.3199H68.48V45.4399H71.36V46.8799C71.36 47.2619 71.2083 47.6281 70.9382 47.8982C70.6682 48.1682 70.3019 48.3199 69.92 48.3199Z"
                            fill="black" />
                        <path
                            d="M77.12 46.8799V45.4399H75.68C76.0619 45.4399 76.4282 45.5917 76.6982 45.8617C76.9683 46.1318 77.12 46.498 77.12 46.8799Z"
                            fill="black" />
                        <path
                            d="M77.12 45.4399V46.8799C77.12 47.2619 77.2717 47.6281 77.5418 47.8982C77.8118 48.1682 78.1781 48.3199 78.56 48.3199C78.9419 48.3199 79.3082 48.1682 79.5782 47.8982C79.8483 47.6281 80 47.2619 80 46.8799V45.4399H77.12Z"
                            fill="black" />
                        <path
                            d="M10.88 49.7601C10.88 50.142 11.0317 50.5083 11.3018 50.7783C11.5718 51.0484 11.9381 51.2001 12.32 51.2001C12.7019 51.2001 13.0682 51.0484 13.3382 50.7783C13.6083 50.5083 13.76 50.142 13.76 49.7601C13.76 49.3782 13.6083 49.0119 13.3382 48.7418C13.0682 48.4718 12.7019 48.3201 12.32 48.3201C11.9381 48.3201 11.5718 48.4718 11.3018 48.7418C11.0317 49.0119 10.88 49.3782 10.88 49.7601Z"
                            fill="black" />
                        <path
                            d="M15.2 51.2H16.64V49.76C16.64 50.1419 16.4883 50.5082 16.2182 50.7782C15.9482 51.0483 15.5819 51.2 15.2 51.2Z"
                            fill="black" />
                        <path
                            d="M19.52 51.2001V49.7601C19.52 49.3782 19.3683 49.0119 19.0982 48.7418C18.8282 48.4718 18.4619 48.3201 18.08 48.3201C17.6981 48.3201 17.3318 48.4718 17.0618 48.7418C16.7917 49.0119 16.64 49.3782 16.64 49.7601V51.2001H19.52Z"
                            fill="black" />
                        <path
                            d="M19.52 49.76V51.2H20.96C20.5781 51.2 20.2118 51.0483 19.9418 50.7782C19.6717 50.5082 19.52 50.1419 19.52 49.76Z"
                            fill="black" />
                        <path
                            d="M25.28 48.3201H23.84C23.4581 48.3201 23.0918 48.4718 22.8218 48.7418C22.5517 49.0119 22.4 49.3782 22.4 49.7601C22.4 50.142 22.5517 50.5083 22.8218 50.7783C23.0918 51.0484 23.4581 51.2001 23.84 51.2001H25.28V48.3201Z"
                            fill="black" />
                        <path d="M28.16 48.3201H25.28V51.2001H28.16V48.3201Z" fill="black" />
                        <path d="M31.04 48.3201H28.16V51.2001H31.04V48.3201Z" fill="black" />
                        <path
                            d="M31.04 49.7601V48.3201H32.48C32.0981 48.3201 31.7318 48.4718 31.4617 48.7418C31.1917 49.0119 31.04 49.3782 31.04 49.7601Z"
                            fill="black" />
                        <path
                            d="M33.92 49.7601V48.3201H32.48C32.8619 48.3201 33.2282 48.4718 33.4982 48.7418C33.7683 49.0119 33.92 49.3782 33.92 49.7601Z"
                            fill="black" />
                        <path
                            d="M33.92 48.3201V49.7601C33.92 50.142 34.0717 50.5083 34.3417 50.7783C34.6118 51.0484 34.9781 51.2001 35.36 51.2001C35.7419 51.2001 36.1082 51.0484 36.3782 50.7783C36.6483 50.5083 36.8 50.142 36.8 49.7601V48.3201H33.92Z"
                            fill="black" />
                        <path d="M42.56 48.3201H39.68V51.2001H42.56V48.3201Z" fill="black" />
                        <path
                            d="M42.56 49.7601V48.3201H44C43.6181 48.3201 43.2518 48.4718 42.9818 48.7418C42.7117 49.0119 42.56 49.3782 42.56 49.7601Z"
                            fill="black" />
                        <path
                            d="M45.44 49.7601C45.44 50.142 45.5917 50.5083 45.8618 50.7783C46.1318 51.0484 46.4981 51.2001 46.88 51.2001C47.2619 51.2001 47.6282 51.0484 47.8982 50.7783C48.1683 50.5083 48.32 50.142 48.32 49.7601C48.32 49.3782 48.1683 49.0119 47.8982 48.7418C47.6282 48.4718 47.2619 48.3201 46.88 48.3201C46.4981 48.3201 46.1318 48.4718 45.8618 48.7418C45.5917 49.0119 45.44 49.3782 45.44 49.7601Z"
                            fill="black" />
                        <path
                            d="M51.2 49.7601V48.3201H49.76C50.1419 48.3201 50.5082 48.4718 50.7782 48.7418C51.0483 49.0119 51.2 49.3782 51.2 49.7601Z"
                            fill="black" />
                        <path
                            d="M52.64 51.2001H54.08V48.3201H51.2V49.7601C51.2 50.142 51.3517 50.5083 51.6218 50.7783C51.8918 51.0484 52.2581 51.2001 52.64 51.2001Z"
                            fill="black" />
                        <path d="M56.96 48.3201H54.08V51.2001H56.96V48.3201Z" fill="black" />
                        <path
                            d="M59.84 49.7601V51.2001H56.96V48.3201H58.4C58.7819 48.3201 59.1482 48.4718 59.4183 48.7418C59.6883 49.0119 59.84 49.3782 59.84 49.7601Z"
                            fill="black" />
                        <path
                            d="M59.84 49.76V51.2H61.28C60.8981 51.2 60.5318 51.0483 60.2618 50.7782C59.9917 50.5082 59.84 50.1419 59.84 49.76Z"
                            fill="black" />
                        <path
                            d="M65.6 48.3201V49.7601C65.6 50.142 65.7517 50.5083 66.0217 50.7783C66.2918 51.0484 66.6581 51.2001 67.04 51.2001C67.4219 51.2001 67.7882 51.0484 68.0582 50.7783C68.3283 50.5083 68.48 50.142 68.48 49.7601V48.3201H65.6Z"
                            fill="black" />
                        <path
                            d="M68.48 49.7601V48.3201H69.92C69.5381 48.3201 69.1718 48.4718 68.9017 48.7418C68.6317 49.0119 68.48 49.3782 68.48 49.7601Z"
                            fill="black" />
                        <path
                            d="M8 52.64C8 53.0219 8.15171 53.3881 8.42177 53.6582C8.69182 53.9282 9.05809 54.08 9.44 54.08C9.82191 54.08 10.1882 53.9282 10.4582 53.6582C10.7283 53.3881 10.88 53.0219 10.88 52.64C10.88 52.258 10.7283 51.8918 10.4582 51.6217C10.1882 51.3517 9.82191 51.2 9.44 51.2C9.05809 51.2 8.69182 51.3517 8.42177 51.6217C8.15171 51.8918 8 52.258 8 52.64Z"
                            fill="black" />
                        <path
                            d="M16.64 51.2H15.2C14.8181 51.2 14.4518 51.3517 14.1818 51.6217C13.9117 51.8918 13.76 52.258 13.76 52.64C13.76 53.0219 13.9117 53.3881 14.1818 53.6582C14.4518 53.9282 14.8181 54.08 15.2 54.08H16.64V51.2Z"
                            fill="black" />
                        <path d="M19.5236 51.2H16.6436V54.08H19.5236V51.2Z" fill="black" />
                        <path
                            d="M19.52 54.08H20.96C21.3419 54.08 21.7082 53.9282 21.9783 53.6582C22.2483 53.3881 22.4 53.0219 22.4 52.64C22.4 52.258 22.2483 51.8918 21.9783 51.6217C21.7082 51.3517 21.3419 51.2 20.96 51.2H19.52V54.08Z"
                            fill="black" />
                        <path
                            d="M28.16 52.64V51.2H26.72C27.1019 51.2 27.4682 51.3517 27.7382 51.6217C28.0083 51.8918 28.16 52.258 28.16 52.64Z"
                            fill="black" />
                        <path
                            d="M26.72 54.0799H28.16V52.6399C28.16 53.0218 28.0083 53.3881 27.7382 53.6581C27.4682 53.9282 27.1019 54.0799 26.72 54.0799Z"
                            fill="black" />
                        <path d="M31.04 51.2H28.16V54.08H31.04V51.2Z" fill="black" />
                        <path
                            d="M39.68 51.2V52.64C39.68 53.0219 39.8317 53.3881 40.1018 53.6582C40.3718 53.9282 40.7381 54.08 41.12 54.08C41.5019 54.08 41.8682 53.9282 42.1382 53.6582C42.4083 53.3881 42.56 53.0219 42.56 52.64V51.2H39.68Z"
                            fill="black" />
                        <path
                            d="M54.08 52.64V51.2H52.64C53.0219 51.2 53.3882 51.3517 53.6582 51.6217C53.9283 51.8918 54.08 52.258 54.08 52.64Z"
                            fill="black" />
                        <path d="M56.96 51.2H54.08V54.08H56.96V51.2Z" fill="black" />
                        <path d="M59.84 51.2H56.96V54.08H59.84V51.2Z" fill="black" />
                        <path d="M62.72 51.2H59.84V54.08H62.72V51.2Z" fill="black" />
                        <path
                            d="M65.6 52.64V54.08H62.72V51.2H64.16C64.5419 51.2 64.9082 51.3517 65.1782 51.6217C65.4483 51.8918 65.6 52.258 65.6 52.64Z"
                            fill="black" />
                        <path
                            d="M67.04 54.0799H68.48V52.6399C68.48 53.0218 68.3283 53.3881 68.0582 53.6581C67.7882 53.9282 67.4219 54.0799 67.04 54.0799Z"
                            fill="black" />
                        <path
                            d="M65.6 52.6399V54.0799H67.04C66.6581 54.0799 66.2918 53.9282 66.0217 53.6581C65.7517 53.3881 65.6 53.0218 65.6 52.6399Z"
                            fill="black" />
                        <path
                            d="M68.48 52.64V54.08H71.36V51.2H69.92C69.5381 51.2 69.1718 51.3517 68.9017 51.6217C68.6317 51.8918 68.48 52.258 68.48 52.64Z"
                            fill="black" />
                        <path d="M74.2364 51.2H71.3564V54.08H74.2364V51.2Z" fill="black" />
                        <path d="M77.1164 51.2H74.2364V54.08H77.1164V51.2Z" fill="black" />
                        <path
                            d="M77.12 54.08H78.56C78.9419 54.08 79.3082 53.9282 79.5782 53.6582C79.8483 53.3881 80 53.0219 80 52.64C80 52.258 79.8483 51.8918 79.5782 51.6217C79.3082 51.3517 78.9419 51.2 78.56 51.2H77.12V54.08Z"
                            fill="black" />
                        <path
                            d="M28.16 54.0801H26.72C26.3381 54.0801 25.9718 54.2318 25.7018 54.5018C25.4317 54.7719 25.28 55.1382 25.28 55.5201C25.28 55.902 25.4317 56.2683 25.7018 56.5383C25.9718 56.8084 26.3381 56.9601 26.72 56.9601H28.16V54.0801Z"
                            fill="black" />
                        <path
                            d="M29.6 56.9601H28.16V54.0801H31.04V55.5201C31.04 55.902 30.8883 56.2683 30.6182 56.5383C30.3482 56.8084 29.9819 56.9601 29.6 56.9601Z"
                            fill="black" />
                        <path
                            d="M32.48 56.96H33.92V55.52C33.92 55.9019 33.7683 56.2682 33.4982 56.5383C33.2282 56.8083 32.8619 56.96 32.48 56.96Z"
                            fill="black" />
                        <path
                            d="M36.8 56.9601V55.5201C36.8 55.1382 36.6483 54.7719 36.3782 54.5018C36.1082 54.2318 35.7419 54.0801 35.36 54.0801C34.9781 54.0801 34.6118 54.2318 34.3417 54.5018C34.0717 54.7719 33.92 55.1382 33.92 55.5201V56.9601H36.8Z"
                            fill="black" />
                        <path
                            d="M42.56 55.5201C42.56 55.902 42.7117 56.2683 42.9818 56.5383C43.2518 56.8084 43.6181 56.9601 44 56.9601C44.3819 56.9601 44.7482 56.8084 45.0182 56.5383C45.2883 56.2683 45.44 55.902 45.44 55.5201C45.44 55.1382 45.2883 54.7719 45.0182 54.5018C44.7482 54.2318 44.3819 54.0801 44 54.0801C43.6181 54.0801 43.2518 54.2318 42.9818 54.5018C42.7117 54.7719 42.56 55.1382 42.56 55.5201Z"
                            fill="black" />
                        <path
                            d="M48.32 55.5201C48.32 55.902 48.4717 56.2683 48.7418 56.5383C49.0118 56.8084 49.3781 56.9601 49.76 56.9601C50.1419 56.9601 50.5082 56.8084 50.7782 56.5383C51.0483 56.2683 51.2 55.902 51.2 55.5201C51.2 55.1382 51.0483 54.7719 50.7782 54.5018C50.5082 54.2318 50.1419 54.0801 49.76 54.0801C49.3781 54.0801 49.0118 54.2318 48.7418 54.5018C48.4717 54.7719 48.32 55.1382 48.32 55.5201Z"
                            fill="black" />
                        <path
                            d="M52.64 56.96H54.08V55.52C54.08 55.9019 53.9283 56.2682 53.6582 56.5383C53.3882 56.8083 53.0219 56.96 52.64 56.96Z"
                            fill="black" />
                        <path d="M56.96 54.0801H54.08V56.9601H56.96V54.0801Z" fill="black" />
                        <path d="M59.84 54.0801H56.96V56.9601H59.84V54.0801Z" fill="black" />
                        <path d="M62.72 54.0801H59.84V56.9601H62.72V54.0801Z" fill="black" />
                        <path d="M65.6 54.0801H62.72V56.9601H65.6V54.0801Z" fill="black" />
                        <path d="M68.48 54.0801H65.6V56.9601H68.48V54.0801Z" fill="black" />
                        <path d="M71.3564 54.0801H68.4764V56.9601H71.3564V54.0801Z" fill="black" />
                        <path
                            d="M71.36 55.5201V54.0801H72.8C72.4181 54.0801 72.0518 54.2318 71.7818 54.5018C71.5117 54.7719 71.36 55.1382 71.36 55.5201Z"
                            fill="black" />
                        <path
                            d="M74.24 55.5201V54.0801H72.8C73.1819 54.0801 73.5482 54.2318 73.8182 54.5018C74.0883 54.7719 74.24 55.1382 74.24 55.5201Z"
                            fill="black" />
                        <path
                            d="M71.36 55.52V56.96H72.8C72.4181 56.96 72.0518 56.8083 71.7818 56.5383C71.5117 56.2682 71.36 55.9019 71.36 55.52Z"
                            fill="black" />
                        <path
                            d="M74.24 54.0801V55.5201C74.24 55.902 74.3917 56.2683 74.6618 56.5383C74.9318 56.8084 75.2981 56.9601 75.68 56.9601C76.0619 56.9601 76.4282 56.8084 76.6982 56.5383C76.9683 56.2683 77.12 55.902 77.12 55.5201V54.0801H74.24Z"
                            fill="black" />
                        <path
                            d="M77.12 55.5201V54.0801H78.56C78.1781 54.0801 77.8118 54.2318 77.5418 54.5018C77.2717 54.7719 77.12 55.1382 77.12 55.5201Z"
                            fill="black" />
                        <path
                            d="M33.92 56.96H32.48C32.0981 56.96 31.7318 57.1117 31.4617 57.3817C31.1917 57.6518 31.04 58.018 31.04 58.4C31.04 58.7819 31.1917 59.1481 31.4617 59.4182C31.7318 59.6882 32.0981 59.84 32.48 59.84H33.92V56.96Z"
                            fill="black" />
                        <path d="M36.8 56.96H33.92V59.84H36.8V56.96Z" fill="black" />
                        <path
                            d="M54.08 56.96H52.64C52.2581 56.96 51.8918 57.1117 51.6218 57.3817C51.3517 57.6518 51.2 58.018 51.2 58.4C51.2 58.7819 51.3517 59.1481 51.6218 59.4182C51.8918 59.6882 52.2581 59.84 52.64 59.84H54.08V56.96Z"
                            fill="black" />
                        <path d="M56.96 56.96H54.08V59.84H56.96V56.96Z" fill="black" />
                        <path
                            d="M56.96 58.4V56.96H58.4C58.0181 56.96 57.6518 57.1117 57.3818 57.3817C57.1117 57.6518 56.96 58.018 56.96 58.4Z"
                            fill="black" />
                        <path
                            d="M65.6 58.4V56.96H64.16C64.5419 56.96 64.9082 57.1117 65.1782 57.3817C65.4483 57.6518 65.6 58.018 65.6 58.4Z"
                            fill="black" />
                        <path d="M68.48 56.96H65.6V59.84H68.48V56.96Z" fill="black" />
                        <path d="M71.3564 56.96H68.4764V59.84H71.3564V56.96Z" fill="black" />
                        <path
                            d="M74.24 58.4V59.84H71.36V56.96H72.8C73.1819 56.96 73.5482 57.1117 73.8182 57.3817C74.0883 57.6518 74.24 58.018 74.24 58.4Z"
                            fill="black" />
                        <path
                            d="M74.24 58.3999V59.8399H75.68C75.2981 59.8399 74.9318 59.6882 74.6618 59.4181C74.3917 59.1481 74.24 58.7818 74.24 58.3999Z"
                            fill="black" />
                        <path
                            d="M33.92 61.2801V59.8401H32.48C32.8619 59.8401 33.2282 59.9918 33.4982 60.2619C33.7683 60.5319 33.92 60.8982 33.92 61.2801Z"
                            fill="black" />
                        <path d="M36.8 59.8401H33.92V62.7201H36.8V59.8401Z" fill="black" />
                        <path
                            d="M45.44 61.2801V62.7201H48.32V59.8401H46.88C46.4981 59.8401 46.1318 59.9918 45.8618 60.2619C45.5917 60.5319 45.44 60.8982 45.44 61.2801Z"
                            fill="black" />
                        <path
                            d="M51.2 61.2801V62.7201H48.32V59.8401H49.76C50.1419 59.8401 50.5082 59.9918 50.7782 60.2619C51.0483 60.5319 51.2 60.8982 51.2 61.2801Z"
                            fill="black" />
                        <path
                            d="M54.08 61.2801V59.8401H52.64C53.0219 59.8401 53.3882 59.9918 53.6582 60.2619C53.9283 60.5319 54.08 60.8982 54.08 61.2801Z"
                            fill="black" />
                        <path d="M56.96 59.8401H54.08V62.7201H56.96V59.8401Z" fill="black" />
                        <path
                            d="M59.84 61.2801C59.84 61.662 59.9917 62.0283 60.2618 62.2983C60.5318 62.5684 60.8981 62.7201 61.28 62.7201C61.6619 62.7201 62.0282 62.5684 62.2983 62.2983C62.5683 62.0283 62.72 61.662 62.72 61.2801C62.72 60.8982 62.5683 60.5319 62.2983 60.2619C62.0282 59.9918 61.6619 59.8401 61.28 59.8401C60.8981 59.8401 60.5318 59.9918 60.2618 60.2619C59.9917 60.5319 59.84 60.8982 59.84 61.2801Z"
                            fill="black" />
                        <path d="M68.48 59.8401H65.6V62.7201H68.48V59.8401Z" fill="black" />
                        <path
                            d="M68.48 61.2801V59.8401H69.92C69.5381 59.8401 69.1718 59.9918 68.9017 60.2619C68.6317 60.5319 68.48 60.8982 68.48 61.2801Z"
                            fill="black" />
                        <path
                            d="M71.36 61.2801V59.8401H69.92C70.3019 59.8401 70.6682 59.9918 70.9382 60.2619C71.2083 60.5319 71.36 60.8982 71.36 61.2801Z"
                            fill="black" />
                        <path
                            d="M72.8 62.7201H74.24V59.8401H71.36V61.2801C71.36 61.662 71.5117 62.0283 71.7818 62.2983C72.0518 62.5684 72.4181 62.7201 72.8 62.7201Z"
                            fill="black" />
                        <path d="M77.1164 59.8401H74.2364V62.7201H77.1164V59.8401Z" fill="black" />
                        <path
                            d="M80 61.2801V62.7201H77.12V59.8401H78.56C78.9419 59.8401 79.3082 59.9918 79.5782 60.2619C79.8483 60.5319 80 60.8982 80 61.2801Z"
                            fill="black" />
                        <path d="M36.8 62.72H33.92V65.6H36.8V62.72Z" fill="black" />
                        <path
                            d="M36.8 64.1599V65.5999H38.24C37.8581 65.5999 37.4918 65.4482 37.2218 65.1781C36.9517 64.9081 36.8 64.5418 36.8 64.1599Z"
                            fill="black" />
                        <path
                            d="M39.68 64.16C39.68 64.5419 39.8317 64.9082 40.1018 65.1782C40.3718 65.4483 40.7381 65.6 41.12 65.6C41.5019 65.6 41.8682 65.4483 42.1382 65.1782C42.4083 64.9082 42.56 64.5419 42.56 64.16C42.56 63.7781 42.4083 63.4118 42.1382 63.1417C41.8682 62.8717 41.5019 62.72 41.12 62.72C40.7381 62.72 40.3718 62.8717 40.1018 63.1417C39.8317 63.4118 39.68 63.7781 39.68 64.16Z"
                            fill="black" />
                        <path d="M48.32 62.72H45.44V65.6H48.32V62.72Z" fill="black" />
                        <path d="M51.2 62.72H48.32V65.6H51.2V62.72Z" fill="black" />
                        <path d="M56.96 62.72H54.08V65.6H56.96V62.72Z" fill="black" />
                        <path
                            d="M56.96 64.1599V65.5999H58.4C58.0181 65.5999 57.6518 65.4482 57.3818 65.1781C57.1117 64.9081 56.96 64.5418 56.96 64.1599Z"
                            fill="black" />
                        <path
                            d="M64.16 65.5999H65.6V64.1599C65.6 64.5418 65.4483 64.9081 65.1782 65.1781C64.9082 65.4482 64.5419 65.5999 64.16 65.5999Z"
                            fill="black" />
                        <path d="M68.48 62.72H65.6V65.6H68.48V62.72Z" fill="black" />
                        <path
                            d="M68.48 64.1599V65.5999H69.92C69.5381 65.5999 69.1718 65.4482 68.9017 65.1781C68.6317 64.9081 68.48 64.5418 68.48 64.1599Z"
                            fill="black" />
                        <path
                            d="M74.24 64.16V62.72H72.8C73.1819 62.72 73.5482 62.8717 73.8182 63.1417C74.0883 63.4118 74.24 63.7781 74.24 64.16Z"
                            fill="black" />
                        <path
                            d="M75.68 65.6H77.12V62.72H74.24V64.16C74.24 64.5419 74.3917 64.9082 74.6618 65.1782C74.9318 65.4483 75.2981 65.6 75.68 65.6Z"
                            fill="black" />
                        <path d="M79.9964 62.72H77.1164V65.6H79.9964V62.72Z" fill="black" />
                        <path
                            d="M32.48 68.48H33.92V67.04C33.92 67.422 33.7683 67.7882 33.4982 68.0583C33.2282 68.3283 32.8619 68.48 32.48 68.48Z"
                            fill="black" />
                        <path d="M36.8 65.6001H33.92V68.4801H36.8V65.6001Z" fill="black" />
                        <path
                            d="M39.68 67.0401V68.4801H36.8V65.6001H38.24C38.6219 65.6001 38.9882 65.7518 39.2582 66.0219C39.5283 66.2919 39.68 66.6582 39.68 67.0401Z"
                            fill="black" />
                        <path
                            d="M46.88 68.4801H48.32V65.6001H45.44V67.0401C45.44 67.422 45.5917 67.7883 45.8618 68.0583C46.1318 68.3284 46.4981 68.4801 46.88 68.4801Z"
                            fill="black" />
                        <path
                            d="M49.76 68.4801H48.32V65.6001H51.2V67.0401C51.2 67.422 51.0483 67.7883 50.7782 68.0583C50.5082 68.3284 50.1419 68.4801 49.76 68.4801Z"
                            fill="black" />
                        <path
                            d="M52.64 68.48H54.08V67.04C54.08 67.422 53.9283 67.7882 53.6582 68.0583C53.3882 68.3283 53.0219 68.48 52.64 68.48Z"
                            fill="black" />
                        <path d="M56.96 65.6001H54.08V68.4801H56.96V65.6001Z" fill="black" />
                        <path d="M59.84 65.6001H56.96V68.4801H59.84V65.6001Z" fill="black" />
                        <path d="M62.72 65.6001H59.84V68.4801H62.72V65.6001Z" fill="black" />
                        <path d="M65.6 65.6001H62.72V68.4801H65.6V65.6001Z" fill="black" />
                        <path d="M68.48 65.6001H65.6V68.4801H68.48V65.6001Z" fill="black" />
                        <path
                            d="M71.36 67.0401V68.4801H68.48V65.6001H69.92C70.3019 65.6001 70.6682 65.7518 70.9382 66.0219C71.2083 66.2919 71.36 66.6582 71.36 67.0401Z"
                            fill="black" />
                        <path
                            d="M77.12 67.0401V65.6001H75.68C76.0619 65.6001 76.4282 65.7518 76.6982 66.0219C76.9683 66.2919 77.12 66.6582 77.12 67.0401Z"
                            fill="black" />
                        <path
                            d="M75.68 68.48H77.12V67.04C77.12 67.422 76.9683 67.7882 76.6982 68.0583C76.4282 68.3283 76.0619 68.48 75.68 68.48Z"
                            fill="black" />
                        <path d="M79.9964 65.6001H77.1164V68.4801H79.9964V65.6001Z" fill="black" />
                        <path
                            d="M31.04 69.92V71.36H33.92V68.48H32.48C32.0981 68.48 31.7318 68.6317 31.4617 68.9017C31.1917 69.1718 31.04 69.5381 31.04 69.92Z"
                            fill="black" />
                        <path d="M36.8 68.4763H33.92V71.3563H36.8V68.4763Z" fill="black" />
                        <path
                            d="M38.24 71.36H36.8V68.48H39.68V69.92C39.68 70.3019 39.5283 70.6682 39.2582 70.9382C38.9882 71.2083 38.6219 71.36 38.24 71.36Z"
                            fill="black" />
                        <path
                            d="M49.76 71.3599H51.2V69.9199C51.2 70.3018 51.0483 70.6681 50.7782 70.9382C50.5082 71.2082 50.1419 71.3599 49.76 71.3599Z"
                            fill="black" />
                        <path
                            d="M51.2 69.92V71.36H54.08V68.48H52.64C52.2581 68.48 51.8918 68.6317 51.6218 68.9017C51.3517 69.1718 51.2 69.5381 51.2 69.92Z"
                            fill="black" />
                        <path
                            d="M55.52 71.36H54.08V68.48H56.96V69.92C56.96 70.3019 56.8083 70.6682 56.5383 70.9382C56.2682 71.2083 55.9019 71.36 55.52 71.36Z"
                            fill="black" />
                        <path
                            d="M56.96 69.92V68.48H58.4C58.0181 68.48 57.6518 68.6317 57.3818 68.9017C57.1117 69.1718 56.96 69.5381 56.96 69.92Z"
                            fill="black" />
                        <path
                            d="M59.84 69.92V68.48H58.4C58.7819 68.48 59.1482 68.6317 59.4183 68.9017C59.6883 69.1718 59.84 69.5381 59.84 69.92Z"
                            fill="black" />
                        <path
                            d="M58.4 71.3599H59.84V69.9199C59.84 70.3018 59.6883 70.6681 59.4183 70.9382C59.1482 71.2082 58.7819 71.3599 58.4 71.3599Z"
                            fill="black" />
                        <path d="M62.72 68.4763H59.84V71.3563H62.72V68.4763Z" fill="black" />
                        <path
                            d="M64.16 71.36H62.72V68.48H65.6V69.92C65.6 70.3019 65.4483 70.6682 65.1782 70.9382C64.9082 71.2083 64.5419 71.36 64.16 71.36Z"
                            fill="black" />
                        <path
                            d="M65.6 69.92V68.48H67.04C66.6581 68.48 66.2918 68.6317 66.0217 68.9017C65.7517 69.1718 65.6 69.5381 65.6 69.92Z"
                            fill="black" />
                        <path
                            d="M68.48 69.92V68.48H67.04C67.4219 68.48 67.7882 68.6317 68.0582 68.9017C68.3283 69.1718 68.48 69.5381 68.48 69.92Z"
                            fill="black" />
                        <path
                            d="M68.48 68.48V69.92C68.48 70.3019 68.6317 70.6682 68.9017 70.9382C69.1718 71.2083 69.5381 71.36 69.92 71.36C70.3019 71.36 70.6682 71.2083 70.9382 70.9382C71.2083 70.6682 71.36 70.3019 71.36 69.92V68.48H68.48Z"
                            fill="black" />
                        <path
                            d="M72.8 71.3599H74.24V69.9199C74.24 70.3018 74.0883 70.6681 73.8182 70.9382C73.5482 71.2082 73.1819 71.3599 72.8 71.3599Z"
                            fill="black" />
                        <path
                            d="M74.24 69.92V71.36H77.12V68.48H75.68C75.2981 68.48 74.9318 68.6317 74.6618 68.9017C74.3917 69.1718 74.24 69.5381 74.24 69.92Z"
                            fill="black" />
                        <path
                            d="M78.56 71.36H77.12V68.48H80V69.92C80 70.3019 79.8483 70.6682 79.5782 70.9382C79.3082 71.2083 78.9419 71.36 78.56 71.36Z"
                            fill="black" />
                        <path d="M33.92 71.3564H31.04V74.2364H33.92V71.3564Z" fill="black" />
                        <path
                            d="M35.36 74.2401H33.92V71.3601H36.8V72.8001C36.8 73.182 36.6483 73.5483 36.3782 73.8183C36.1082 74.0884 35.7419 74.2401 35.36 74.2401Z"
                            fill="black" />
                        <path
                            d="M36.8 72.8001V71.3601H38.24C37.8581 71.3601 37.4918 71.5118 37.2218 71.7819C36.9517 72.0519 36.8 72.4182 36.8 72.8001Z"
                            fill="black" />
                        <path
                            d="M46.88 74.24H48.32V72.8C48.32 73.182 48.1683 73.5482 47.8982 73.8183C47.6282 74.0883 47.2619 74.24 46.88 74.24Z"
                            fill="black" />
                        <path
                            d="M48.32 72.8001V74.2401H51.2V71.3601H49.76C49.3781 71.3601 49.0118 71.5118 48.7418 71.7819C48.4717 72.0519 48.32 72.4182 48.32 72.8001Z"
                            fill="black" />
                        <path
                            d="M52.64 74.2401H51.2V71.3601H54.08V72.8001C54.08 73.182 53.9283 73.5483 53.6582 73.8183C53.3882 74.0884 53.0219 74.2401 52.64 74.2401Z"
                            fill="black" />
                        <path
                            d="M54.08 72.8001V71.3601H55.52C55.1381 71.3601 54.7718 71.5118 54.5018 71.7819C54.2317 72.0519 54.08 72.4182 54.08 72.8001Z"
                            fill="black" />
                        <path
                            d="M59.84 71.3601H58.4C58.0181 71.3601 57.6518 71.5118 57.3818 71.7819C57.1117 72.0519 56.96 72.4182 56.96 72.8001C56.96 73.182 57.1117 73.5483 57.3818 73.8183C57.6518 74.0884 58.0181 74.2401 58.4 74.2401H59.84V71.3601Z"
                            fill="black" />
                        <path
                            d="M61.28 74.2401H59.84V71.3601H62.72V72.8001C62.72 73.182 62.5683 73.5483 62.2983 73.8183C62.0282 74.0884 61.6619 74.2401 61.28 74.2401Z"
                            fill="black" />
                        <path
                            d="M62.72 72.8001V71.3601H64.16C63.7781 71.3601 63.4118 71.5118 63.1417 71.7819C62.8717 72.0519 62.72 72.4182 62.72 72.8001Z"
                            fill="black" />
                        <path
                            d="M71.36 72.8001V74.2401H74.24V71.3601H72.8C72.4181 71.3601 72.0518 71.5118 71.7818 71.7819C71.5117 72.0519 71.36 72.4182 71.36 72.8001Z"
                            fill="black" />
                        <path d="M77.1164 71.3564H74.2364V74.2364H77.1164V71.3564Z" fill="black" />
                        <path
                            d="M77.12 72.8001V71.3601H78.56C78.1781 71.3601 77.8118 71.5118 77.5418 71.7819C77.2717 72.0519 77.12 72.4182 77.12 72.8001Z"
                            fill="black" />
                        <path
                            d="M77.12 72.8V74.24H78.56C78.1781 74.24 77.8118 74.0883 77.5418 73.8183C77.2717 73.5482 77.12 73.182 77.12 72.8Z"
                            fill="black" />
                        <path d="M33.92 74.2363H31.04V77.1163H33.92V74.2363Z" fill="black" />
                        <path
                            d="M33.92 75.68V74.24H35.36C34.9781 74.24 34.6118 74.3917 34.3417 74.6618C34.0717 74.9318 33.92 75.2981 33.92 75.68Z"
                            fill="black" />
                        <path
                            d="M33.92 75.6799V77.1199H35.36C34.9781 77.1199 34.6118 76.9682 34.3417 76.6982C34.0717 76.4281 33.92 76.0618 33.92 75.6799Z"
                            fill="black" />
                        <path
                            d="M38.24 77.1199H39.68V75.6799C39.68 76.0618 39.5283 76.4281 39.2582 76.6982C38.9882 76.9682 38.6219 77.1199 38.24 77.1199Z"
                            fill="black" />
                        <path
                            d="M39.68 75.68V77.12H42.56V74.24H41.12C40.7381 74.24 40.3718 74.3917 40.1018 74.6618C39.8317 74.9318 39.68 75.2981 39.68 75.68Z"
                            fill="black" />
                        <path d="M45.44 74.2363H42.56V77.1163H45.44V74.2363Z" fill="black" />
                        <path d="M48.32 74.2363H45.44V77.1163H48.32V74.2363Z" fill="black" />
                        <path
                            d="M49.76 77.12H48.32V74.24H51.2V75.68C51.2 76.0619 51.0483 76.4282 50.7782 76.6982C50.5082 76.9683 50.1419 77.12 49.76 77.12Z"
                            fill="black" />
                        <path
                            d="M51.2 75.68V74.24H52.64C52.2581 74.24 51.8918 74.3917 51.6218 74.6618C51.3517 74.9318 51.2 75.2981 51.2 75.68Z"
                            fill="black" />
                        <path
                            d="M54.08 75.68C54.08 76.0619 54.2317 76.4282 54.5018 76.6982C54.7718 76.9683 55.1381 77.12 55.52 77.12C55.9019 77.12 56.2682 76.9683 56.5383 76.6982C56.8083 76.4282 56.96 76.0619 56.96 75.68C56.96 75.2981 56.8083 74.9318 56.5383 74.6618C56.2682 74.3917 55.9019 74.24 55.52 74.24C55.1381 74.24 54.7718 74.3917 54.5018 74.6618C54.2317 74.9318 54.08 75.2981 54.08 75.68Z"
                            fill="black" />
                        <path
                            d="M62.72 75.68V77.12H65.6V74.24H64.16C63.7781 74.24 63.4118 74.3917 63.1417 74.6618C62.8717 74.9318 62.72 75.2981 62.72 75.68Z"
                            fill="black" />
                        <path
                            d="M65.6 77.12H67.04C67.4219 77.12 67.7882 76.9683 68.0582 76.6982C68.3283 76.4282 68.48 76.0619 68.48 75.68C68.48 75.2981 68.3283 74.9318 68.0582 74.6618C67.7882 74.3917 67.4219 74.24 67.04 74.24H65.6V77.12Z"
                            fill="black" />
                        <path
                            d="M72.8 77.12H74.24V74.24H71.36V75.68C71.36 76.0619 71.5117 76.4282 71.7818 76.6982C72.0518 76.9683 72.4181 77.12 72.8 77.12Z"
                            fill="black" />
                        <path d="M77.1164 74.2363H74.2364V77.1163H77.1164V74.2363Z" fill="black" />
                        <path
                            d="M80 75.68V77.12H77.12V74.24H78.56C78.9419 74.24 79.3082 74.3917 79.5782 74.6618C79.8483 74.9318 80 75.2981 80 75.68Z"
                            fill="black" />
                        <path
                            d="M32.48 80.0001H33.92V77.1201H31.04V78.5601C31.04 78.942 31.1917 79.3083 31.4617 79.5784C31.7318 79.8484 32.0981 80.0001 32.48 80.0001Z"
                            fill="black" />
                        <path d="M36.8 77.1165H33.92V79.9965H36.8V77.1165Z" fill="black" />
                        <path d="M39.68 77.1165H36.8V79.9965H39.68V77.1165Z" fill="black" />
                        <path
                            d="M41.12 80.0001H39.68V77.1201H42.56V78.5601C42.56 78.942 42.4083 79.3083 42.1382 79.5784C41.8682 79.8484 41.5019 80.0001 41.12 80.0001Z"
                            fill="black" />
                        <path
                            d="M42.56 78.5601V77.1201H44C43.6181 77.1201 43.2518 77.2718 42.9818 77.5419C42.7117 77.8119 42.56 78.1782 42.56 78.5601Z"
                            fill="black" />
                        <path
                            d="M51.2 78.5601C51.2 78.942 51.3517 79.3083 51.6218 79.5784C51.8918 79.8484 52.2581 80.0001 52.64 80.0001C53.0219 80.0001 53.3882 79.8484 53.6582 79.5784C53.9283 79.3083 54.08 78.942 54.08 78.5601C54.08 78.1782 53.9283 77.8119 53.6582 77.5419C53.3882 77.2718 53.0219 77.1201 52.64 77.1201C52.2581 77.1201 51.8918 77.2718 51.6218 77.5419C51.3517 77.8119 51.2 78.1782 51.2 78.5601Z"
                            fill="black" />
                        <path
                            d="M62.72 77.1201V78.5601C62.72 78.942 62.8717 79.3083 63.1417 79.5784C63.4118 79.8484 63.7781 80.0001 64.16 80.0001C64.5419 80.0001 64.9082 79.8484 65.1782 79.5784C65.4483 79.3083 65.6 78.942 65.6 78.5601V77.1201H62.72Z"
                            fill="black" />
                        <path
                            d="M65.6 78.5601V77.1201H67.04C66.6581 77.1201 66.2918 77.2718 66.0217 77.5419C65.7517 77.8119 65.6 78.1782 65.6 78.5601Z"
                            fill="black" />
                        <path
                            d="M68.48 78.5601C68.48 78.942 68.6317 79.3083 68.9017 79.5784C69.1718 79.8484 69.5381 80.0001 69.92 80.0001C70.3019 80.0001 70.6682 79.8484 70.9382 79.5784C71.2083 79.3083 71.36 78.942 71.36 78.5601C71.36 78.1782 71.2083 77.8119 70.9382 77.5419C70.6682 77.2718 70.3019 77.1201 69.92 77.1201C69.5381 77.1201 69.1718 77.2718 68.9017 77.5419C68.6317 77.8119 68.48 78.1782 68.48 78.5601Z"
                            fill="black" />
                        <path
                            d="M74.24 78.5601V77.1201H72.8C73.1819 77.1201 73.5482 77.2718 73.8182 77.5419C74.0883 77.8119 74.24 78.1782 74.24 78.5601Z"
                            fill="black" />
                        <path
                            d="M75.68 80.0001H77.12V77.1201H74.24V78.5601C74.24 78.942 74.3917 79.3083 74.6618 79.5784C74.9318 79.8484 75.2981 80.0001 75.68 80.0001Z"
                            fill="black" />
                        <path
                            d="M78.56 80.0001H77.12V77.1201H80V78.5601C80 78.942 79.8483 79.3083 79.5782 79.5784C79.3082 79.8484 78.9419 80.0001 78.56 80.0001Z"
                            fill="black" />
                        <path
                            d="M8.612 8C8.44998 8.00094 8.29486 8.06573 8.1803 8.1803C8.06573 8.29486 8.00094 8.44998 8 8.612V27.5516C8 27.7139 8.06448 27.8696 8.17925 27.9844C8.29403 28.0991 8.44969 28.1636 8.612 28.1636H27.5516C27.7139 28.1636 27.8696 28.0991 27.9844 27.9844C28.0991 27.8696 28.1636 27.7139 28.1636 27.5516V8.612C28.1636 8.44969 28.0991 8.29403 27.9844 8.17925C27.8696 8.06448 27.7139 8 27.5516 8H8.612ZM25.28 13.76V24.92C25.28 25.0155 25.2421 25.107 25.1746 25.1746C25.107 25.2421 25.0155 25.28 24.92 25.28H11.24C11.1445 25.28 11.053 25.2421 10.9854 25.1746C10.9179 25.107 10.88 25.0155 10.88 24.92V11.24C10.88 11.1445 10.9179 11.053 10.9854 10.9854C11.053 10.9179 11.1445 10.88 11.24 10.88H24.92C25.0155 10.88 25.107 10.9179 25.1746 10.9854C25.2421 11.053 25.28 11.1445 25.28 11.24V13.76Z"
                            fill="black" />
                        <path
                            d="M22.4 19.52V14.372C22.4 14.2097 22.3355 14.054 22.2208 13.9393C22.106 13.8245 21.9503 13.76 21.788 13.76H14.372C14.2097 13.76 14.054 13.8245 13.9393 13.9393C13.8245 14.054 13.76 14.2097 13.76 14.372V21.7916C13.76 21.9539 13.8245 22.1096 13.9393 22.2244C14.054 22.3391 14.2097 22.4036 14.372 22.4036H21.788C21.9503 22.4036 22.106 22.3391 22.2208 22.2244C22.3355 22.1096 22.4 21.9539 22.4 21.7916V19.52Z"
                            fill="black" />
                        <path
                            d="M60.4484 8C60.2864 8.00094 60.1313 8.06573 60.0167 8.1803C59.9022 8.29486 59.8374 8.44998 59.8364 8.612V27.5516C59.8364 27.7139 59.9009 27.8696 60.0157 27.9844C60.1305 28.0991 60.2861 28.1636 60.4484 28.1636H79.388C79.5503 28.1636 79.706 28.0991 79.8208 27.9844C79.9355 27.8696 80 27.7139 80 27.5516V8.612C80 8.44969 79.9355 8.29403 79.8208 8.17925C79.706 8.06448 79.5503 8 79.388 8H60.4484ZM77.12 13.76V24.92C77.12 25.0155 77.0821 25.107 77.0146 25.1746C76.9471 25.2421 76.8555 25.28 76.76 25.28H63.08C62.9846 25.28 62.893 25.2421 62.8255 25.1746C62.758 25.107 62.72 25.0155 62.72 24.92V11.24C62.72 11.1445 62.758 11.053 62.8255 10.9854C62.893 10.9179 62.9846 10.88 63.08 10.88H76.76C76.8555 10.88 76.9471 10.9179 77.0146 10.9854C77.0821 11.053 77.12 11.1445 77.12 11.24V13.76Z"
                            fill="black" />
                        <path
                            d="M74.24 19.52V14.372C74.24 14.2916 74.2241 14.2121 74.1934 14.1378C74.1626 14.0636 74.1176 13.9961 74.0607 13.9393C74.0039 13.8824 73.9364 13.8373 73.8622 13.8066C73.7879 13.7758 73.7083 13.76 73.628 13.76H66.212C66.0497 13.76 65.894 13.8245 65.7792 13.9393C65.6645 14.054 65.6 14.2097 65.6 14.372V21.7916C65.6 21.9539 65.6645 22.1096 65.7792 22.2244C65.894 22.3391 66.0497 22.4036 66.212 22.4036H73.628C73.7083 22.4036 73.7879 22.3878 73.8622 22.357C73.9364 22.3263 74.0039 22.2812 74.0607 22.2244C74.1176 22.1675 74.1626 22.1001 74.1934 22.0258C74.2241 21.9516 74.24 21.872 74.24 21.7916V19.52Z"
                            fill="black" />
                        <path
                            d="M8.612 59.84C8.44998 59.841 8.29486 59.9057 8.1803 60.0203C8.06573 60.1349 8.00094 60.29 8 60.452V79.388C8 79.5503 8.06448 79.706 8.17925 79.8208C8.29403 79.9355 8.44969 80 8.612 80H27.5516C27.7139 80 27.8696 79.9355 27.9844 79.8208C28.0991 79.706 28.1636 79.5503 28.1636 79.388V60.4484C28.1636 60.2861 28.0991 60.1305 27.9844 60.0157C27.8696 59.9009 27.7139 59.8364 27.5516 59.8364L8.612 59.84ZM25.28 65.6V76.76C25.28 76.8555 25.2421 76.9471 25.1746 77.0146C25.107 77.0821 25.0155 77.12 24.92 77.12H11.24C11.1445 77.12 11.053 77.0821 10.9854 77.0146C10.9179 76.9471 10.88 76.8555 10.88 76.76V63.08C10.88 62.9846 10.9179 62.893 10.9854 62.8255C11.053 62.758 11.1445 62.72 11.24 62.72H24.92C25.0155 62.72 25.107 62.758 25.1746 62.8255C25.2421 62.893 25.28 62.9846 25.28 63.08V65.6Z"
                            fill="black" />
                        <path
                            d="M22.4 71.3601V66.2121C22.4 66.1317 22.3842 66.0521 22.3534 65.9779C22.3227 65.9036 22.2776 65.8362 22.2208 65.7794C22.1639 65.7225 22.0965 65.6774 22.0222 65.6467C21.948 65.6159 21.8684 65.6001 21.788 65.6001H14.372C14.2916 65.6001 14.2121 65.6159 14.1378 65.6467C14.0636 65.6774 13.9961 65.7225 13.9393 65.7794C13.8824 65.8362 13.8373 65.9036 13.8066 65.9779C13.7758 66.0521 13.76 66.1317 13.76 66.2121V73.6281C13.76 73.7904 13.8245 73.9461 13.9393 74.0608C14.054 74.1756 14.2097 74.2401 14.372 74.2401H21.788C21.9503 74.2401 22.106 74.1756 22.2208 74.0608C22.3355 73.9461 22.4 73.7904 22.4 73.6281V71.3601Z"
                            fill="black" />
                        <circle cx="44" cy="44" r="12" fill="white" />
                        <g clip-path="url(#clip1_63_689)">
                            <path
                                d="M47.9062 36.0001C47.2214 35.9822 46.5394 36.0959 45.8973 36.3349C44.6473 36.8483 44 38.8126 44 38.8126C45.0447 38.9218 46.1007 38.8154 47.1027 38.5001C48.0042 37.9404 48.6768 37.0778 49 36.0671C48.6372 36.0215 48.2719 35.9991 47.9062 36.0001ZM44 38.8573C42.192 38.8573 41.1429 40.0626 41.1429 42.1832C41.1429 42.6296 40.7634 43.076 40.3393 43.6117C39.5439 44.3578 39.0646 45.3803 39 46.4689C39.1177 47.7134 39.6954 48.8694 40.62 49.7107C41.5447 50.552 42.7499 51.0182 44 51.0182C45.2501 51.0182 46.4553 50.552 47.38 49.7107C48.3046 48.8694 48.8823 47.7134 49 46.4689C48.9223 45.3882 48.4542 44.3727 47.683 43.6117C47.2554 43.2416 46.9645 42.7385 46.8571 42.1832C46.8571 40.0626 45.808 38.8573 44 38.8573Z"
                                fill="#E870A1" />
                        </g>
                    </g>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H88V88H0V0ZM4 4V84H84V4H4Z" fill="#E870A1" />
                    <defs>
                        <clipPath id="clip0_63_689">
                            <rect width="72" height="72" fill="white" transform="translate(8 8)" />
                        </clipPath>
                        <clipPath id="clip1_63_689">
                            <rect width="10" height="15" fill="white" transform="translate(39 36)" />
                        </clipPath>
                    </defs>
                </svg>


                <span><strong><input class="company" type="text" value={{ $data->comp_name }} readonly="readonly"></strong></span>
                <input class="tag" type="text" value={{ $data->comp_tag }} readonly="readonly">
            </div> <!--.left-->
            <div class="right col-6">
                <input class="name" type="text" value={{ $data->name }} readonly="readonly">
                <input class="desig" type="text" value={{ $data->designation }} readonly="readonly">
                <div class="contact-wrapper">
                    <div class="phone contact-info">
                        <span class="icon">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect width="20" height="20" rx="10" fill="#F4F4F4" />
                                <g clip-path="url(#clip0_63_6098)">
                                    <path
                                        d="M15.28 13.2278C15.28 13.3628 15.2453 13.541 15.1093 13.7303C15.0981 13.7453 13.975 15.28 13.36 15.28L13.3234 15.2782C11.8712 15.2069 10.075 14.11 7.98247 12.0175C5.89091 9.92597 4.79403 8.12972 4.72185 6.67753L4.72091 6.65315C4.72091 6.64659 4.71997 6.64003 4.71997 6.63347C4.71997 6.00534 6.25466 4.9019 6.26966 4.89065C6.6681 4.60659 7.11341 4.70972 7.29716 4.96753C7.42372 5.13534 8.58528 6.90909 8.71466 7.12565C8.84778 7.35815 8.82247 7.6769 8.65185 7.96097C8.55997 8.12972 8.25903 8.65565 8.11841 8.8994C8.26841 9.1169 8.67153 9.6494 9.51716 10.4791C10.3487 11.3116 10.8831 11.7232 11.1025 11.8797C11.3481 11.7382 11.8731 11.4382 12.0475 11.3435C12.3578 11.1738 12.6784 11.1541 12.8837 11.291C13.0872 11.4128 14.8834 12.596 15.0315 12.7028C15.1665 12.7985 15.2556 12.9616 15.2753 13.1482C15.2781 13.1725 15.28 13.1988 15.28 13.2278Z"
                                        fill="#1ED6BB" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_63_6098">
                                        <rect width="12" height="12" fill="white"
                                            transform="translate(4 16) rotate(-90)" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </span> <!--.icon-->
                        <span class="info">
                            <input class="orange" type="text" value={{ $data->phone }} readonly="readonly">
                        </span>
                    </div> <!--.phone-->
                    <div class="email contact-info">
                        <span class="icon">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect width="20" height="20" rx="10" fill="#F4F4F4" />
                                <path
                                    d="M4 5.67993V6.36993L10 11.1324L16 6.42993V5.67993H4ZM4 6.97743V14.3199H16V7.03743L10.15 11.6274C10.1069 11.6612 10.0525 11.6799 10 11.6799C9.9475 11.6799 9.89406 11.6621 9.85 11.6274L4 6.97743Z"
                                    fill="#1ED6BB" />
                            </svg>
                        </span> <!--.icon-->
                        <span class="info">
                            <input class="orange" type="text" value={{ $data->email }} readonly="readonly">
                        </span>
                    </div> <!--.email-->
                    <div class="link contact-info">
                        <span class="icon">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect width="20" height="20" rx="10" fill="#F4F4F4" />
                                <g clip-path="url(#clip0_63_6110)">
                                    <path
                                        d="M12.88 4.96094C12.3268 4.96091 11.7735 5.17173 11.3523 5.59281L10.1523 6.79281C9.55425 7.39089 9.38331 8.25455 9.63483 9.00719L10.4969 8.14516C10.5329 7.89868 10.6417 7.66092 10.8311 7.47156L12.0311 6.27156C12.2651 6.0378 12.5728 5.92047 12.88 5.92047C13.1872 5.92047 13.4947 6.03756 13.7284 6.27156C14.1962 6.73956 14.1962 7.50068 13.7284 7.96844L12.5284 9.16844C12.3391 9.3578 12.1016 9.46642 11.8548 9.50266L10.9923 10.3652C11.2151 10.4396 11.447 10.4791 11.6795 10.4791C12.2327 10.4791 12.786 10.2684 13.2072 9.84719L14.4072 8.64719C15.2496 7.80503 15.2493 6.43497 14.4072 5.59281C13.986 5.17185 13.4331 4.96097 12.88 4.96094ZM11.4306 8.07531C11.3059 8.07903 11.1876 8.13115 11.1006 8.22062L8.22061 11.1006C8.17455 11.1449 8.13777 11.1978 8.11243 11.2565C8.08709 11.3151 8.07371 11.3782 8.07306 11.442C8.07241 11.5059 8.08451 11.5692 8.10864 11.6284C8.13278 11.6875 8.16848 11.7412 8.21363 11.7864C8.25879 11.8315 8.31251 11.8672 8.37163 11.8913C8.43076 11.9155 8.49411 11.9276 8.55797 11.9269C8.62183 11.9263 8.68491 11.9129 8.74354 11.8876C8.80216 11.8622 8.85513 11.8254 8.89936 11.7794L11.7794 8.89937C11.8487 8.83195 11.8961 8.74515 11.9153 8.65034C11.9345 8.55553 11.9246 8.45714 11.8869 8.36806C11.8492 8.27898 11.7854 8.20336 11.704 8.15112C11.6226 8.09889 11.5273 8.07246 11.4306 8.07531ZM8.4278 9.52562C7.8393 9.49568 7.24154 9.70378 6.7928 10.1523L5.5928 11.3523C4.75064 12.1945 4.75064 13.565 5.5928 14.4072C6.014 14.8281 6.56703 15.0386 7.11999 15.0386C7.67295 15.0386 8.22598 14.8279 8.64718 14.4067L9.84718 13.2067C10.4453 12.6086 10.6167 11.745 10.3651 10.9923L9.50265 11.8548C9.46665 12.1013 9.35779 12.3391 9.16843 12.5284L7.96843 13.7284C7.50067 14.1964 6.73931 14.1964 6.27155 13.7284C5.80379 13.2604 5.80379 12.4993 6.27155 12.0316L7.47155 10.8316C7.66091 10.6422 7.89867 10.5331 8.14515 10.4969L9.00718 9.63484C8.81902 9.57196 8.62397 9.53561 8.4278 9.52562Z"
                                        fill="#1ED6BB" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_63_6110">
                                        <rect width="12" height="12" fill="white" transform="translate(4 4)" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </span> <!--.icon-->
                        <span class="info">
                            <input class="orange" type="text" value={{ $data->website }} readonly="readonly">
                        </span>
                    </div> <!--.link-->
                    <div class="location contact-info">
                        <span class="icon">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect width="20" height="20" rx="10" fill="#F4F4F4" />
                                <g clip-path="url(#clip0_63_6116)">
                                    <path
                                        d="M9.99997 3.47998C8.27966 3.47998 6.87997 4.87967 6.87997 6.59998C6.87997 8.88561 9.68966 12.5897 9.80872 12.7462L9.99997 12.9947L10.1912 12.7462C10.3103 12.5897 13.12 8.88561 13.12 6.59998C13.12 4.87967 11.7203 3.47998 9.99997 3.47998ZM9.99997 5.63998C10.5306 5.63998 10.96 6.06936 10.96 6.59998C10.96 7.13061 10.5306 7.55998 9.99997 7.55998C9.46935 7.55998 9.03997 7.13061 9.03997 6.59998C9.03997 6.06936 9.46935 5.63998 9.99997 5.63998ZM5.75122 10.68L4.37872 14.52H15.6212L14.2487 10.68H12.4122C12.3184 10.845 12.2247 11.0053 12.1309 11.16H13.9112L14.9387 14.04H5.06122L6.08872 11.16H7.86904C7.77529 11.0053 7.68154 10.845 7.58779 10.68H5.75122Z"
                                        fill="#1ED6BB" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_63_6116">
                                        <rect width="12" height="12" fill="white" transform="translate(4 3)" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </span>
                        <span class="info"> <input class="black" type="text"
                        value={{ $data->address }} readonly="readonly"></span>
                    </div> <!--.location-->
                </div> <!--contact-wrapper-->
            </div> <!--.right-->

        </div> <!--.row-->
    </div><!--.outer-container-->
    <div class="back-outer-container col-3 text-center">
            <!-- <div class="back-pink">
                <img src="pink.png" alt="pink color">
            </div> -->
        <!-- <div class="back-green">
            <svg width="102" height="103" viewBox="0 0 102 103" fill="none" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <rect width="102" height="103" fill="url(#pattern0)" />
                <defs>
                    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_63_687" transform="scale(0.00980392 0.00970874)" />
                    </pattern>
                    <image id="image0_63_687" width="102" height="103"
                        xlink:href="data:image/png;base64,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" />
                </defs>
            </svg>

        </div> -->
        <div class="qr col-12">
            <svg width="88" height="88" viewBox="0 0 88 88" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_63_689)">
                    <path
                        d="M31.04 9.44C31.04 9.82191 31.1917 10.1882 31.4617 10.4582C31.7318 10.7283 32.0981 10.88 32.48 10.88C32.8619 10.88 33.2282 10.7283 33.4982 10.4582C33.7683 10.1882 33.92 9.82191 33.92 9.44C33.92 9.05809 33.7683 8.69182 33.4982 8.42177C33.2282 8.15171 32.8619 8 32.48 8C32.0981 8 31.7318 8.15171 31.4617 8.42177C31.1917 8.69182 31.04 9.05809 31.04 9.44Z"
                        fill="black" />
                    <path
                        d="M35.36 10.8799H36.8V9.43994C36.8 9.82185 36.6483 10.1881 36.3782 10.4582C36.1082 10.7282 35.7419 10.8799 35.36 10.8799Z"
                        fill="black" />
                    <path
                        d="M39.68 10.88V9.44C39.68 9.05809 39.5283 8.69182 39.2582 8.42177C38.9882 8.15171 38.6219 8 38.24 8C37.8581 8 37.4918 8.15171 37.2218 8.42177C36.9517 8.69182 36.8 9.05809 36.8 9.44V10.88H39.68Z"
                        fill="black" />
                    <path
                        d="M41.12 10.8799H42.56V9.43994C42.56 9.82185 42.4083 10.1881 42.1382 10.4582C41.8682 10.7282 41.5019 10.8799 41.12 10.8799Z"
                        fill="black" />
                    <path
                        d="M39.68 9.43994V10.8799H41.12C40.7381 10.8799 40.3718 10.7282 40.1018 10.4582C39.8317 10.1881 39.68 9.82185 39.68 9.43994Z"
                        fill="black" />
                    <path
                        d="M45.44 10.88V9.44C45.44 9.05809 45.2883 8.69182 45.0182 8.42177C44.7482 8.15171 44.3819 8 44 8C43.6181 8 43.2518 8.15171 42.9818 8.42177C42.7117 8.69182 42.56 9.05809 42.56 9.44V10.88H45.44Z"
                        fill="black" />
                    <path
                        d="M51.2 9.44C51.2 9.82191 51.3517 10.1882 51.6218 10.4582C51.8918 10.7283 52.2581 10.88 52.64 10.88C53.0219 10.88 53.3882 10.7283 53.6582 10.4582C53.9283 10.1882 54.08 9.82191 54.08 9.44C54.08 9.05809 53.9283 8.69182 53.6582 8.42177C53.3882 8.15171 53.0219 8 52.64 8C52.2581 8 51.8918 8.15171 51.6218 8.42177C51.3517 8.69182 51.2 9.05809 51.2 9.44Z"
                        fill="black" />
                    <path
                        d="M32.48 13.7601H33.92V12.3201C33.92 12.702 33.7683 13.0683 33.4982 13.3383C33.2282 13.6084 32.8619 13.7601 32.48 13.7601Z"
                        fill="black" />
                    <path
                        d="M33.92 12.3199V13.7599H36.8V10.8799H35.36C34.9781 10.8799 34.6118 11.0316 34.3417 11.3016C34.0717 11.5717 33.92 11.938 33.92 12.3199Z"
                        fill="black" />
                    <path d="M39.68 10.8835H36.8V13.7635H39.68V10.8835Z" fill="black" />
                    <path d="M42.56 10.8835H39.68V13.7635H42.56V10.8835Z" fill="black" />
                    <path
                        d="M44 13.7599H42.56V10.8799H45.44V12.3199C45.44 12.7018 45.2883 13.0681 45.0182 13.3381C44.7482 13.6082 44.3819 13.7599 44 13.7599Z"
                        fill="black" />
                    <path
                        d="M31.04 15.2V16.64H33.92V13.76H32.48C32.0981 13.76 31.7318 13.9117 31.4617 14.1818C31.1917 14.4518 31.04 14.8181 31.04 15.2Z"
                        fill="black" />
                    <path d="M36.8 13.7637H33.92V16.6437H36.8V13.7637Z" fill="black" />
                    <path d="M39.68 13.7637H36.8V16.6437H39.68V13.7637Z" fill="black" />
                    <path
                        d="M39.68 15.2V13.76H41.12C40.7381 13.76 40.3718 13.9117 40.1018 14.1818C39.8317 14.4518 39.68 14.8181 39.68 15.2Z"
                        fill="black" />
                    <path
                        d="M45.44 15.2C45.44 15.5819 45.5917 15.9482 45.8618 16.2182C46.1318 16.4883 46.4981 16.64 46.88 16.64C47.2619 16.64 47.6282 16.4883 47.8982 16.2182C48.1683 15.9482 48.32 15.5819 48.32 15.2C48.32 14.8181 48.1683 14.4518 47.8982 14.1818C47.6282 13.9117 47.2619 13.76 46.88 13.76C46.4981 13.76 46.1318 13.9117 45.8618 14.1818C45.5917 14.4518 45.44 14.8181 45.44 15.2Z"
                        fill="black" />
                    <path
                        d="M51.2 15.2V16.64H54.08V13.76H52.64C52.2581 13.76 51.8918 13.9117 51.6218 14.1818C51.3517 14.4518 51.2 14.8181 51.2 15.2Z"
                        fill="black" />
                    <path
                        d="M56.96 15.2V16.64H54.08V13.76H55.52C55.9019 13.76 56.2682 13.9117 56.5383 14.1818C56.8083 14.4518 56.96 14.8181 56.96 15.2Z"
                        fill="black" />
                    <path d="M33.92 16.6436H31.04V19.5236H33.92V16.6436Z" fill="black" />
                    <path d="M36.8 16.6436H33.92V19.5236H36.8V16.6436Z" fill="black" />
                    <path
                        d="M38.24 19.5199H36.8V16.6399H39.68V18.0799C39.68 18.4618 39.5283 18.8281 39.2582 19.0981C38.9882 19.3682 38.6219 19.5199 38.24 19.5199Z"
                        fill="black" />
                    <path
                        d="M41.12 19.5201H42.56V18.0801C42.56 18.462 42.4083 18.8283 42.1382 19.0983C41.8682 19.3684 41.5019 19.5201 41.12 19.5201Z"
                        fill="black" />
                    <path
                        d="M45.44 19.5199V18.0799C45.44 17.698 45.2883 17.3317 45.0182 17.0617C44.7482 16.7916 44.3819 16.6399 44 16.6399C43.6181 16.6399 43.2518 16.7916 42.9818 17.0617C42.7117 17.3317 42.56 17.698 42.56 18.0799V19.5199H45.44Z"
                        fill="black" />
                    <path
                        d="M52.64 19.5199H54.08V16.6399H51.2V18.0799C51.2 18.4618 51.3517 18.8281 51.6218 19.0981C51.8918 19.3682 52.2581 19.5199 52.64 19.5199Z"
                        fill="black" />
                    <path d="M56.96 16.6436H54.08V19.5236H56.96V16.6436Z" fill="black" />
                    <path
                        d="M31.04 19.52V20.96C31.04 21.3419 31.1917 21.7082 31.4617 21.9783C31.7318 22.2483 32.0981 22.4 32.48 22.4C32.8619 22.4 33.2282 22.2483 33.4982 21.9783C33.7683 21.7082 33.92 21.3419 33.92 20.96V19.52H31.04Z"
                        fill="black" />
                    <path
                        d="M33.92 20.96V19.52H35.36C34.9781 19.52 34.6118 19.6717 34.3417 19.9418C34.0717 20.2118 33.92 20.5781 33.92 20.96Z"
                        fill="black" />
                    <path
                        d="M38.24 22.4H39.68V20.96C39.68 21.3419 39.5283 21.7081 39.2582 21.9782C38.9882 22.2482 38.6219 22.4 38.24 22.4Z"
                        fill="black" />
                    <path
                        d="M39.68 20.96V22.4H42.56V19.52H41.12C40.7381 19.52 40.3718 19.6717 40.1018 19.9418C39.8317 20.2118 39.68 20.5781 39.68 20.96Z"
                        fill="black" />
                    <path
                        d="M44 22.4H42.56V19.52H45.44V20.96C45.44 21.3419 45.2883 21.7082 45.0182 21.9783C44.7482 22.2483 44.3819 22.4 44 22.4Z"
                        fill="black" />
                    <path
                        d="M54.08 20.96V19.52H52.64C53.0219 19.52 53.3882 19.6717 53.6582 19.9418C53.9283 20.2118 54.08 20.5781 54.08 20.96Z"
                        fill="black" />
                    <path d="M56.96 19.5237H54.08V22.4037H56.96V19.5237Z" fill="black" />
                    <path
                        d="M36.8 23.8399V25.2799H39.68V22.3999H38.24C37.8581 22.3999 37.4918 22.5516 37.2218 22.8217C36.9517 23.0917 36.8 23.458 36.8 23.8399Z"
                        fill="black" />
                    <path
                        d="M41.12 25.2799H39.68V22.3999H42.56V23.8399C42.56 24.2218 42.4083 24.5881 42.1382 24.8581C41.8682 25.1282 41.5019 25.2799 41.12 25.2799Z"
                        fill="black" />
                    <path
                        d="M42.56 23.8399V22.3999H44C43.6181 22.3999 43.2518 22.5516 42.9818 22.8217C42.7117 23.0917 42.56 23.458 42.56 23.8399Z"
                        fill="black" />
                    <path
                        d="M51.2 25.2799V23.8399C51.2 23.458 51.0483 23.0917 50.7782 22.8217C50.5082 22.5516 50.1419 22.3999 49.76 22.3999C49.3781 22.3999 49.0118 22.5516 48.7418 22.8217C48.4717 23.0917 48.32 23.458 48.32 23.8399V25.2799H51.2Z"
                        fill="black" />
                    <path d="M56.96 22.3999H54.08V25.2799H56.96V22.3999Z" fill="black" />
                    <path
                        d="M31.04 26.72C31.04 27.1019 31.1917 27.4682 31.4617 27.7383C31.7318 28.0083 32.0981 28.16 32.48 28.16C32.8619 28.16 33.2282 28.0083 33.4982 27.7383C33.7683 27.4682 33.92 27.1019 33.92 26.72C33.92 26.3381 33.7683 25.9718 33.4982 25.7018C33.2282 25.4317 32.8619 25.28 32.48 25.28C32.0981 25.28 31.7318 25.4317 31.4617 25.7018C31.1917 25.9718 31.04 26.3381 31.04 26.72Z"
                        fill="black" />
                    <path d="M39.68 25.28H36.8V28.16H39.68V25.28Z" fill="black" />
                    <path
                        d="M39.68 26.72V25.28H41.12C40.7381 25.28 40.3718 25.4317 40.1018 25.7018C39.8317 25.9718 39.68 26.3381 39.68 26.72Z"
                        fill="black" />
                    <path
                        d="M45.44 28.16V26.72C45.44 26.3381 45.2883 25.9718 45.0182 25.7018C44.7482 25.4317 44.3819 25.28 44 25.28C43.6181 25.28 43.2518 25.4317 42.9818 25.7018C42.7117 25.9718 42.56 26.3381 42.56 26.72V28.16H45.44Z"
                        fill="black" />
                    <path
                        d="M48.32 25.28V26.72C48.32 27.1019 48.4717 27.4682 48.7418 27.7383C49.0118 28.0083 49.3781 28.16 49.76 28.16C50.1419 28.16 50.5082 28.0083 50.7782 27.7383C51.0483 27.4682 51.2 27.1019 51.2 26.72V25.28H48.32Z"
                        fill="black" />
                    <path
                        d="M52.64 28.16H54.08V26.72C54.08 27.1019 53.9283 27.4682 53.6582 27.7382C53.3882 28.0083 53.0219 28.16 52.64 28.16Z"
                        fill="black" />
                    <path d="M56.96 25.28H54.08V28.16H56.96V25.28Z" fill="black" />
                    <path d="M39.68 28.1599H36.8V31.0399H39.68V28.1599Z" fill="black" />
                    <path
                        d="M41.12 31.0401H42.56V29.6001C42.56 29.982 42.4083 30.3483 42.1382 30.6183C41.8682 30.8884 41.5019 31.0401 41.12 31.0401Z"
                        fill="black" />
                    <path
                        d="M39.68 29.6001V31.0401H41.12C40.7381 31.0401 40.3718 30.8884 40.1018 30.6183C39.8317 30.3483 39.68 29.982 39.68 29.6001Z"
                        fill="black" />
                    <path d="M45.44 28.1599H42.56V31.0399H45.44V28.1599Z" fill="black" />
                    <path
                        d="M45.44 29.6001V31.0401H46.88C46.4981 31.0401 46.1318 30.8884 45.8618 30.6183C45.5917 30.3483 45.44 29.982 45.44 29.6001Z"
                        fill="black" />
                    <path
                        d="M54.08 28.1599H52.64C52.2581 28.1599 51.8918 28.3116 51.6218 28.5817C51.3517 28.8517 51.2 29.218 51.2 29.5999C51.2 29.9818 51.3517 30.3481 51.6218 30.6181C51.8918 30.8882 52.2581 31.0399 52.64 31.0399H54.08V28.1599Z"
                        fill="black" />
                    <path d="M56.96 28.1599H54.08V31.0399H56.96V28.1599Z" fill="black" />
                    <path
                        d="M56.96 29.6001V31.0401H58.4C58.0181 31.0401 57.6518 30.8884 57.3818 30.6183C57.1117 30.3483 56.96 29.982 56.96 29.6001Z"
                        fill="black" />
                    <path
                        d="M10.88 31.04H9.44C9.05809 31.04 8.69182 31.1918 8.42177 31.4618C8.15171 31.7319 8 32.0981 8 32.48C8 32.862 8.15171 33.2282 8.42177 33.4983C8.69182 33.7683 9.05809 33.92 9.44 33.92H10.88V31.04Z"
                        fill="black" />
                    <path d="M13.7636 31.04H10.8836V33.92H13.7636V31.04Z" fill="black" />
                    <path d="M16.6436 31.04H13.7636V33.92H16.6436V31.04Z" fill="black" />
                    <path
                        d="M16.64 33.92H18.08C18.4619 33.92 18.8282 33.7683 19.0982 33.4983C19.3683 33.2282 19.52 32.862 19.52 32.48C19.52 32.0981 19.3683 31.7319 19.0982 31.4618C18.8282 31.1918 18.4619 31.04 18.08 31.04H16.64V33.92Z"
                        fill="black" />
                    <path
                        d="M25.28 32.48C25.28 32.862 25.4317 33.2282 25.7018 33.4983C25.9718 33.7683 26.3381 33.92 26.72 33.92C27.1019 33.92 27.4682 33.7683 27.7383 33.4983C28.0083 33.2282 28.16 32.862 28.16 32.48C28.16 32.0981 28.0083 31.7319 27.7383 31.4618C27.4682 31.1918 27.1019 31.04 26.72 31.04C26.3381 31.04 25.9718 31.1918 25.7018 31.4618C25.4317 31.7319 25.28 32.0981 25.28 32.48Z"
                        fill="black" />
                    <path
                        d="M29.6 33.92H31.04V32.48C31.04 32.8619 30.8883 33.2282 30.6182 33.4982C30.3482 33.7683 29.9819 33.92 29.6 33.92Z"
                        fill="black" />
                    <path
                        d="M33.92 33.92V32.48C33.92 32.0981 33.7683 31.7319 33.4982 31.4618C33.2282 31.1918 32.8619 31.04 32.48 31.04C32.0981 31.04 31.7318 31.1918 31.4617 31.4618C31.1917 31.7319 31.04 32.0981 31.04 32.48V33.92H33.92Z"
                        fill="black" />
                    <path d="M39.68 31.04H36.8V33.92H39.68V31.04Z" fill="black" />
                    <path d="M42.56 31.04H39.68V33.92H42.56V31.04Z" fill="black" />
                    <path d="M45.44 31.04H42.56V33.92H45.44V31.04Z" fill="black" />
                    <path
                        d="M45.44 33.92H46.88C47.2619 33.92 47.6282 33.7683 47.8982 33.4983C48.1683 33.2282 48.32 32.862 48.32 32.48C48.32 32.0981 48.1683 31.7319 47.8982 31.4618C47.6282 31.1918 47.2619 31.04 46.88 31.04H45.44V33.92Z"
                        fill="black" />
                    <path
                        d="M54.08 32.48V31.04H52.64C53.0219 31.04 53.3882 31.1918 53.6582 31.4618C53.9283 31.7319 54.08 32.0981 54.08 32.48Z"
                        fill="black" />
                    <path
                        d="M52.64 33.92H54.08V32.48C54.08 32.8619 53.9283 33.2282 53.6582 33.4982C53.3882 33.7683 53.0219 33.92 52.64 33.92Z"
                        fill="black" />
                    <path d="M56.96 31.04H54.08V33.92H56.96V31.04Z" fill="black" />
                    <path
                        d="M56.96 33.92H58.4C58.7819 33.92 59.1482 33.7683 59.4183 33.4983C59.6883 33.2282 59.84 32.862 59.84 32.48C59.84 32.0981 59.6883 31.7319 59.4183 31.4618C59.1482 31.1918 58.7819 31.04 58.4 31.04H56.96V33.92Z"
                        fill="black" />
                    <path
                        d="M68.48 31.04H67.04C66.6581 31.04 66.2918 31.1918 66.0217 31.4618C65.7517 31.7319 65.6 32.0981 65.6 32.48C65.6 32.862 65.7517 33.2282 66.0217 33.4983C66.2918 33.7683 66.6581 33.92 67.04 33.92H68.48V31.04Z"
                        fill="black" />
                    <path d="M71.3564 31.04H68.4764V33.92H71.3564V31.04Z" fill="black" />
                    <path
                        d="M71.36 33.92H72.8C73.1819 33.92 73.5482 33.7683 73.8182 33.4983C74.0883 33.2282 74.24 32.862 74.24 32.48C74.24 32.0981 74.0883 31.7319 73.8182 31.4618C73.5482 31.1918 73.1819 31.04 72.8 31.04H71.36V33.92Z"
                        fill="black" />
                    <path
                        d="M80 33.92V32.48C80 32.0981 79.8483 31.7319 79.5782 31.4618C79.3082 31.1918 78.9419 31.04 78.56 31.04C78.1781 31.04 77.8118 31.1918 77.5418 31.4618C77.2717 31.7319 77.12 32.0981 77.12 32.48V33.92H80Z"
                        fill="black" />
                    <path
                        d="M10.88 35.3599V33.9199H9.44C9.82191 33.9199 10.1882 34.0716 10.4582 34.3417C10.7283 34.6117 10.88 34.978 10.88 35.3599Z"
                        fill="black" />
                    <path
                        d="M10.88 33.9199V35.3599C10.88 35.7418 11.0317 36.1081 11.3018 36.3782C11.5718 36.6482 11.9381 36.7999 12.32 36.7999C12.7019 36.7999 13.0682 36.6482 13.3382 36.3782C13.6083 36.1081 13.76 35.7418 13.76 35.3599V33.9199H10.88Z"
                        fill="black" />
                    <path
                        d="M13.76 35.3599V33.9199H15.2C14.8181 33.9199 14.4518 34.0716 14.1818 34.3417C13.9117 34.6117 13.76 34.978 13.76 35.3599Z"
                        fill="black" />
                    <path
                        d="M25.28 36.7999V35.3599C25.28 34.978 25.1283 34.6117 24.8583 34.3417C24.5882 34.0716 24.2219 33.9199 23.84 33.9199C23.4581 33.9199 23.0918 34.0716 22.8218 34.3417C22.5517 34.6117 22.4 34.978 22.4 35.3599V36.7999H25.28Z"
                        fill="black" />
                    <path
                        d="M26.72 36.8001H28.16V35.3601C28.16 35.742 28.0083 36.1083 27.7382 36.3783C27.4682 36.6484 27.1019 36.8001 26.72 36.8001Z"
                        fill="black" />
                    <path
                        d="M25.28 35.3601V36.8001H26.72C26.3381 36.8001 25.9718 36.6484 25.7018 36.3783C25.4317 36.1083 25.28 35.742 25.28 35.3601Z"
                        fill="black" />
                    <path
                        d="M28.16 35.3599V36.7999H31.04V33.9199H29.6C29.2181 33.9199 28.8518 34.0716 28.5817 34.3417C28.3117 34.6117 28.16 34.978 28.16 35.3599Z"
                        fill="black" />
                    <path
                        d="M32.48 36.7999H31.04V33.9199H33.92V35.3599C33.92 35.7418 33.7683 36.1081 33.4982 36.3782C33.2282 36.6482 32.8619 36.7999 32.48 36.7999Z"
                        fill="black" />
                    <path
                        d="M35.36 36.8001H36.8V35.3601C36.8 35.742 36.6483 36.1083 36.3782 36.3783C36.1082 36.6484 35.7419 36.8001 35.36 36.8001Z"
                        fill="black" />
                    <path d="M39.68 33.9199H36.8V36.7999H39.68V33.9199Z" fill="black" />
                    <path
                        d="M39.68 35.3599V33.9199H41.12C40.7381 33.9199 40.3718 34.0716 40.1018 34.3417C39.8317 34.6117 39.68 34.978 39.68 35.3599Z"
                        fill="black" />
                    <path
                        d="M42.56 35.3599V33.9199H41.12C41.5019 33.9199 41.8682 34.0716 42.1382 34.3417C42.4083 34.6117 42.56 34.978 42.56 35.3599Z"
                        fill="black" />
                    <path
                        d="M41.12 36.8001H42.56V35.3601C42.56 35.742 42.4083 36.1083 42.1382 36.3783C41.8682 36.6484 41.5019 36.8001 41.12 36.8001Z"
                        fill="black" />
                    <path
                        d="M39.68 35.3601V36.8001H41.12C40.7381 36.8001 40.3718 36.6484 40.1018 36.3783C39.8317 36.1083 39.68 35.742 39.68 35.3601Z"
                        fill="black" />
                    <path d="M45.44 33.9199H42.56V36.7999H45.44V33.9199Z" fill="black" />
                    <path
                        d="M45.44 35.3599V33.9199H46.88C46.4981 33.9199 46.1318 34.0716 45.8618 34.3417C45.5917 34.6117 45.44 34.978 45.44 35.3599Z"
                        fill="black" />
                    <path
                        d="M45.44 35.3601V36.8001H46.88C46.4981 36.8001 46.1318 36.6484 45.8618 36.3783C45.5917 36.1083 45.44 35.742 45.44 35.3601Z"
                        fill="black" />
                    <path
                        d="M54.08 33.9199H52.64C52.2581 33.9199 51.8918 34.0716 51.6218 34.3417C51.3517 34.6117 51.2 34.978 51.2 35.3599C51.2 35.7418 51.3517 36.1081 51.6218 36.3782C51.8918 36.6482 52.2581 36.7999 52.64 36.7999H54.08V33.9199Z"
                        fill="black" />
                    <path
                        d="M55.52 36.7999H54.08V33.9199H56.96V35.3599C56.96 35.7418 56.8083 36.1081 56.5383 36.3782C56.2682 36.6482 55.9019 36.7999 55.52 36.7999Z"
                        fill="black" />
                    <path
                        d="M56.96 35.3599V33.9199H58.4C58.0181 33.9199 57.6518 34.0716 57.3818 34.3417C57.1117 34.6117 56.96 34.978 56.96 35.3599Z"
                        fill="black" />
                    <path
                        d="M59.84 35.3599C59.84 35.7418 59.9917 36.1081 60.2618 36.3782C60.5318 36.6482 60.8981 36.7999 61.28 36.7999C61.6619 36.7999 62.0282 36.6482 62.2983 36.3782C62.5683 36.1081 62.72 35.7418 62.72 35.3599C62.72 34.978 62.5683 34.6117 62.2983 34.3417C62.0282 34.0716 61.6619 33.9199 61.28 33.9199C60.8981 33.9199 60.5318 34.0716 60.2618 34.3417C59.9917 34.6117 59.84 34.978 59.84 35.3599Z"
                        fill="black" />
                    <path
                        d="M77.12 33.9199V35.3599C77.12 35.7418 77.2717 36.1081 77.5418 36.3782C77.8118 36.6482 78.1781 36.7999 78.56 36.7999C78.9419 36.7999 79.3082 36.6482 79.5782 36.3782C79.8483 36.1081 80 35.7418 80 35.3599V33.9199H77.12Z"
                        fill="black" />
                    <path
                        d="M8 38.24C8 38.622 8.15171 38.9882 8.42177 39.2583C8.69182 39.5283 9.05809 39.68 9.44 39.68C9.82191 39.68 10.1882 39.5283 10.4582 39.2583C10.7283 38.9882 10.88 38.622 10.88 38.24C10.88 37.8581 10.7283 37.4919 10.4582 37.2218C10.1882 36.9518 9.82191 36.8 9.44 36.8C9.05809 36.8 8.69182 36.9518 8.42177 37.2218C8.15171 37.4919 8 37.8581 8 38.24Z"
                        fill="black" />
                    <path
                        d="M16.64 38.24C16.64 38.622 16.7917 38.9882 17.0618 39.2583C17.3318 39.5283 17.6981 39.68 18.08 39.68C18.4619 39.68 18.8282 39.5283 19.0982 39.2583C19.3683 38.9882 19.52 38.622 19.52 38.24C19.52 37.8581 19.3683 37.4919 19.0982 37.2218C18.8282 36.9518 18.4619 36.8 18.08 36.8C17.6981 36.8 17.3318 36.9518 17.0618 37.2218C16.7917 37.4919 16.64 37.8581 16.64 38.24Z"
                        fill="black" />
                    <path d="M25.28 36.8H22.4V39.68H25.28V36.8Z" fill="black" />
                    <path d="M28.16 36.8H25.28V39.68H28.16V36.8Z" fill="black" />
                    <path
                        d="M29.6 39.68H28.16V36.8H31.04V38.24C31.04 38.622 30.8883 38.9882 30.6182 39.2583C30.3482 39.5283 29.9819 39.68 29.6 39.68Z"
                        fill="black" />
                    <path
                        d="M31.04 38.24V36.8H32.48C32.0981 36.8 31.7318 36.9518 31.4617 37.2218C31.1917 37.4919 31.04 37.8581 31.04 38.24Z"
                        fill="black" />
                    <path
                        d="M33.92 38.24V39.68H36.8V36.8H35.36C34.9781 36.8 34.6118 36.9518 34.3417 37.2218C34.0717 37.4919 33.92 37.8581 33.92 38.24Z"
                        fill="black" />
                    <path d="M39.68 36.8H36.8V39.68H39.68V36.8Z" fill="black" />
                    <path d="M42.56 36.8H39.68V39.68H42.56V36.8Z" fill="black" />
                    <path d="M45.44 36.8H42.56V39.68H45.44V36.8Z" fill="black" />
                    <path
                        d="M48.32 38.24V39.68H45.44V36.8H46.88C47.2619 36.8 47.6282 36.9518 47.8982 37.2218C48.1683 37.4919 48.32 37.8581 48.32 38.24Z"
                        fill="black" />
                    <path
                        d="M48.32 38.24V39.68H49.76C49.3781 39.68 49.0118 39.5283 48.7418 39.2582C48.4717 38.9882 48.32 38.6219 48.32 38.24Z"
                        fill="black" />
                    <path
                        d="M71.36 38.24C71.36 38.622 71.5117 38.9882 71.7818 39.2583C72.0518 39.5283 72.4181 39.68 72.8 39.68C73.1819 39.68 73.5482 39.5283 73.8182 39.2583C74.0883 38.9882 74.24 38.622 74.24 38.24C74.24 37.8581 74.0883 37.4919 73.8182 37.2218C73.5482 36.9518 73.1819 36.8 72.8 36.8C72.4181 36.8 72.0518 36.9518 71.7818 37.2218C71.5117 37.4919 71.36 37.8581 71.36 38.24Z"
                        fill="black" />
                    <path
                        d="M22.4 39.6799V41.1199C22.4 41.5018 22.5517 41.8681 22.8218 42.1382C23.0918 42.4082 23.4581 42.5599 23.84 42.5599C24.2219 42.5599 24.5882 42.4082 24.8583 42.1382C25.1283 41.8681 25.28 41.5018 25.28 41.1199V39.6799H22.4Z"
                        fill="black" />
                    <path
                        d="M25.28 41.1199V39.6799H26.72C26.3381 39.6799 25.9718 39.8316 25.7018 40.1017C25.4317 40.3717 25.28 40.738 25.28 41.1199Z"
                        fill="black" />
                    <path d="M36.8 39.6799H33.92V42.5599H36.8V39.6799Z" fill="black" />
                    <path d="M39.68 39.6799H36.8V42.5599H39.68V39.6799Z" fill="black" />
                    <path
                        d="M39.68 41.1199V39.6799H41.12C40.7381 39.6799 40.3718 39.8316 40.1018 40.1017C39.8317 40.3717 39.68 40.738 39.68 41.1199Z"
                        fill="black" />
                    <path
                        d="M45.44 41.1199V39.6799H44C44.3819 39.6799 44.7482 39.8316 45.0182 40.1017C45.2883 40.3717 45.44 40.738 45.44 41.1199Z"
                        fill="black" />
                    <path
                        d="M46.88 42.5599H48.32V39.6799H45.44V41.1199C45.44 41.5018 45.5917 41.8681 45.8618 42.1382C46.1318 42.4082 46.4981 42.5599 46.88 42.5599Z"
                        fill="black" />
                    <path d="M51.2 39.6799H48.32V42.5599H51.2V39.6799Z" fill="black" />
                    <path
                        d="M54.08 41.1199V42.5599H51.2V39.6799H52.64C53.0219 39.6799 53.3882 39.8316 53.6582 40.1017C53.9283 40.3717 54.08 40.738 54.08 41.1199Z"
                        fill="black" />
                    <path
                        d="M54.08 41.1201V42.5601H55.52C55.1381 42.5601 54.7718 42.4084 54.5018 42.1384C54.2317 41.8683 54.08 41.502 54.08 41.1201Z"
                        fill="black" />
                    <path
                        d="M56.96 41.1199C56.96 41.5018 57.1117 41.8681 57.3818 42.1382C57.6518 42.4082 58.0181 42.5599 58.4 42.5599C58.7819 42.5599 59.1482 42.4082 59.4183 42.1382C59.6883 41.8681 59.84 41.5018 59.84 41.1199C59.84 40.738 59.6883 40.3717 59.4183 40.1017C59.1482 39.8316 58.7819 39.6799 58.4 39.6799C58.0181 39.6799 57.6518 39.8316 57.3818 40.1017C57.1117 40.3717 56.96 40.738 56.96 41.1199Z"
                        fill="black" />
                    <path
                        d="M61.28 42.5601H62.72V41.1201C62.72 41.502 62.5683 41.8683 62.2983 42.1384C62.0282 42.4084 61.6619 42.5601 61.28 42.5601Z"
                        fill="black" />
                    <path
                        d="M65.6 42.5599V41.1199C65.6 40.738 65.4483 40.3717 65.1782 40.1017C64.9082 39.8316 64.5419 39.6799 64.16 39.6799C63.7781 39.6799 63.4118 39.8316 63.1417 40.1017C62.8717 40.3717 62.72 40.738 62.72 41.1199V42.5599H65.6Z"
                        fill="black" />
                    <path
                        d="M65.6 41.1201V42.5601H67.04C66.6581 42.5601 66.2918 42.4084 66.0217 42.1384C65.7517 41.8683 65.6 41.502 65.6 41.1201Z"
                        fill="black" />
                    <path
                        d="M77.12 42.5599V41.1199C77.12 40.738 76.9683 40.3717 76.6982 40.1017C76.4282 39.8316 76.0619 39.6799 75.68 39.6799C75.2981 39.6799 74.9318 39.8316 74.6618 40.1017C74.3917 40.3717 74.24 40.738 74.24 41.1199V42.5599H77.12Z"
                        fill="black" />
                    <path
                        d="M77.12 41.1201V42.5601H78.56C78.1781 42.5601 77.8118 42.4084 77.5418 42.1384C77.2717 41.8683 77.12 41.502 77.12 41.1201Z"
                        fill="black" />
                    <path
                        d="M10.88 42.5601H9.44C9.05809 42.5601 8.69182 42.7118 8.42177 42.9818C8.15171 43.2519 8 43.6181 8 44.0001C8 44.382 8.15171 44.7482 8.42177 45.0183C8.69182 45.2883 9.05809 45.4401 9.44 45.4401H10.88V42.5601Z"
                        fill="black" />
                    <path
                        d="M10.88 45.4401H12.32C12.7019 45.4401 13.0682 45.2883 13.3382 45.0183C13.6083 44.7482 13.76 44.382 13.76 44.0001C13.76 43.6181 13.6083 43.2519 13.3382 42.9818C13.0682 42.7118 12.7019 42.5601 12.32 42.5601H10.88V45.4401Z"
                        fill="black" />
                    <path
                        d="M19.52 42.5601H18.08C17.6981 42.5601 17.3318 42.7118 17.0618 42.9818C16.7917 43.2519 16.64 43.6181 16.64 44.0001C16.64 44.382 16.7917 44.7482 17.0618 45.0183C17.3318 45.2883 17.6981 45.4401 18.08 45.4401H19.52V42.5601Z"
                        fill="black" />
                    <path
                        d="M19.52 45.4401H20.96C21.3419 45.4401 21.7082 45.2883 21.9783 45.0183C22.2483 44.7482 22.4 44.382 22.4 44.0001C22.4 43.6181 22.2483 43.2519 21.9783 42.9818C21.7082 42.7118 21.3419 42.5601 20.96 42.5601H19.52V45.4401Z"
                        fill="black" />
                    <path
                        d="M25.28 44.0001C25.28 44.382 25.4317 44.7482 25.7018 45.0183C25.9718 45.2883 26.3381 45.4401 26.72 45.4401C27.1019 45.4401 27.4682 45.2883 27.7383 45.0183C28.0083 44.7482 28.16 44.382 28.16 44.0001C28.16 43.6181 28.0083 43.2519 27.7383 42.9818C27.4682 42.7118 27.1019 42.5601 26.72 42.5601C26.3381 42.5601 25.9718 42.7118 25.7018 42.9818C25.4317 43.2519 25.28 43.6181 25.28 44.0001Z"
                        fill="black" />
                    <path
                        d="M32.48 45.44H33.92V44C33.92 44.3819 33.7683 44.7482 33.4982 45.0182C33.2282 45.2883 32.8619 45.44 32.48 45.44Z"
                        fill="black" />
                    <path d="M36.8 42.5601H33.92V45.4401H36.8V42.5601Z" fill="black" />
                    <path
                        d="M38.24 45.4401H36.8V42.5601H39.68V44.0001C39.68 44.382 39.5283 44.7482 39.2582 45.0183C38.9882 45.2883 38.6219 45.4401 38.24 45.4401Z"
                        fill="black" />
                    <path
                        d="M41.12 45.44H42.56V44C42.56 44.3819 42.4083 44.7482 42.1382 45.0182C41.8682 45.2883 41.5019 45.44 41.12 45.44Z"
                        fill="black" />
                    <path
                        d="M45.44 45.4401V44.0001C45.44 43.6181 45.2883 43.2519 45.0182 42.9818C44.7482 42.7118 44.3819 42.5601 44 42.5601C43.6181 42.5601 43.2518 42.7118 42.9818 42.9818C42.7117 43.2519 42.56 43.6181 42.56 44.0001V45.4401H45.44Z"
                        fill="black" />
                    <path
                        d="M51.2 44.0001V42.5601H49.76C50.1419 42.5601 50.5082 42.7118 50.7782 42.9818C51.0483 43.2519 51.2 43.6181 51.2 44.0001Z"
                        fill="black" />
                    <path
                        d="M49.76 45.44H51.2V44C51.2 44.3819 51.0483 44.7482 50.7782 45.0182C50.5082 45.2883 50.1419 45.44 49.76 45.44Z"
                        fill="black" />
                    <path d="M54.08 42.5601H51.2V45.4401H54.08V42.5601Z" fill="black" />
                    <path
                        d="M56.96 44.0001V45.4401H54.08V42.5601H55.52C55.9019 42.5601 56.2682 42.7118 56.5383 42.9818C56.8083 43.2519 56.96 43.6181 56.96 44.0001Z"
                        fill="black" />
                    <path
                        d="M62.72 42.5601H61.28C60.8981 42.5601 60.5318 42.7118 60.2618 42.9818C59.9917 43.2519 59.84 43.6181 59.84 44.0001C59.84 44.382 59.9917 44.7482 60.2618 45.0183C60.5318 45.2883 60.8981 45.4401 61.28 45.4401H62.72V42.5601Z"
                        fill="black" />
                    <path d="M65.6 42.5601H62.72V45.4401H65.6V42.5601Z" fill="black" />
                    <path d="M68.48 42.5601H65.6V45.4401H68.48V42.5601Z" fill="black" />
                    <path
                        d="M71.36 44.0001V45.4401H68.48V42.5601H69.92C70.3019 42.5601 70.6682 42.7118 70.9382 42.9818C71.2083 43.2519 71.36 43.6181 71.36 44.0001Z"
                        fill="black" />
                    <path
                        d="M75.68 45.4401H77.12V42.5601H74.24V44.0001C74.24 44.382 74.3917 44.7482 74.6618 45.0183C74.9318 45.2883 75.2981 45.4401 75.68 45.4401Z"
                        fill="black" />
                    <path
                        d="M80 44.0001V45.4401H77.12V42.5601H78.56C78.9419 42.5601 79.3082 42.7118 79.5782 42.9818C79.8483 43.2519 80 43.6181 80 44.0001Z"
                        fill="black" />
                    <path
                        d="M26.72 48.3199H28.16V46.8799C28.16 47.2618 28.0083 47.6281 27.7382 47.8981C27.4682 48.1682 27.1019 48.3199 26.72 48.3199Z"
                        fill="black" />
                    <path
                        d="M28.16 46.8799V48.3199H31.04V45.4399H29.6C29.2181 45.4399 28.8518 45.5917 28.5817 45.8617C28.3117 46.1318 28.16 46.498 28.16 46.8799Z"
                        fill="black" />
                    <path d="M33.92 45.4399H31.04V48.3199H33.92V45.4399Z" fill="black" />
                    <path d="M36.8 45.4399H33.92V48.3199H36.8V45.4399Z" fill="black" />
                    <path
                        d="M36.8 46.8799V45.4399H38.24C37.8581 45.4399 37.4918 45.5917 37.2218 45.8617C36.9517 46.1318 36.8 46.498 36.8 46.8799Z"
                        fill="black" />
                    <path
                        d="M39.68 46.8799V48.3199H42.56V45.4399H41.12C40.7381 45.4399 40.3718 45.5917 40.1018 45.8617C39.8317 46.1318 39.68 46.498 39.68 46.8799Z"
                        fill="black" />
                    <path
                        d="M44 48.3199H42.56V45.4399H45.44V46.8799C45.44 47.2619 45.2883 47.6281 45.0182 47.8982C44.7482 48.1682 44.3819 48.3199 44 48.3199Z"
                        fill="black" />
                    <path
                        d="M51.2 45.4399H49.76C49.3781 45.4399 49.0118 45.5917 48.7418 45.8617C48.4717 46.1318 48.32 46.498 48.32 46.8799C48.32 47.2619 48.4717 47.6281 48.7418 47.8982C49.0118 48.1682 49.3781 48.3199 49.76 48.3199H51.2V45.4399Z"
                        fill="black" />
                    <path d="M54.08 45.4399H51.2V48.3199H54.08V45.4399Z" fill="black" />
                    <path d="M56.96 45.4399H54.08V48.3199H56.96V45.4399Z" fill="black" />
                    <path
                        d="M56.96 46.8799V48.3199H58.4C58.0181 48.3199 57.6518 48.1682 57.3818 47.8981C57.1117 47.6281 56.96 47.2618 56.96 46.8799Z"
                        fill="black" />
                    <path
                        d="M65.6 46.8799V45.4399H64.16C64.5419 45.4399 64.9082 45.5917 65.1782 45.8617C65.4483 46.1318 65.6 46.498 65.6 46.8799Z"
                        fill="black" />
                    <path d="M68.48 45.4399H65.6V48.3199H68.48V45.4399Z" fill="black" />
                    <path
                        d="M69.92 48.3199H68.48V45.4399H71.36V46.8799C71.36 47.2619 71.2083 47.6281 70.9382 47.8982C70.6682 48.1682 70.3019 48.3199 69.92 48.3199Z"
                        fill="black" />
                    <path
                        d="M77.12 46.8799V45.4399H75.68C76.0619 45.4399 76.4282 45.5917 76.6982 45.8617C76.9683 46.1318 77.12 46.498 77.12 46.8799Z"
                        fill="black" />
                    <path
                        d="M77.12 45.4399V46.8799C77.12 47.2619 77.2717 47.6281 77.5418 47.8982C77.8118 48.1682 78.1781 48.3199 78.56 48.3199C78.9419 48.3199 79.3082 48.1682 79.5782 47.8982C79.8483 47.6281 80 47.2619 80 46.8799V45.4399H77.12Z"
                        fill="black" />
                    <path
                        d="M10.88 49.7601C10.88 50.142 11.0317 50.5083 11.3018 50.7783C11.5718 51.0484 11.9381 51.2001 12.32 51.2001C12.7019 51.2001 13.0682 51.0484 13.3382 50.7783C13.6083 50.5083 13.76 50.142 13.76 49.7601C13.76 49.3782 13.6083 49.0119 13.3382 48.7418C13.0682 48.4718 12.7019 48.3201 12.32 48.3201C11.9381 48.3201 11.5718 48.4718 11.3018 48.7418C11.0317 49.0119 10.88 49.3782 10.88 49.7601Z"
                        fill="black" />
                    <path
                        d="M15.2 51.2H16.64V49.76C16.64 50.1419 16.4883 50.5082 16.2182 50.7782C15.9482 51.0483 15.5819 51.2 15.2 51.2Z"
                        fill="black" />
                    <path
                        d="M19.52 51.2001V49.7601C19.52 49.3782 19.3683 49.0119 19.0982 48.7418C18.8282 48.4718 18.4619 48.3201 18.08 48.3201C17.6981 48.3201 17.3318 48.4718 17.0618 48.7418C16.7917 49.0119 16.64 49.3782 16.64 49.7601V51.2001H19.52Z"
                        fill="black" />
                    <path
                        d="M19.52 49.76V51.2H20.96C20.5781 51.2 20.2118 51.0483 19.9418 50.7782C19.6717 50.5082 19.52 50.1419 19.52 49.76Z"
                        fill="black" />
                    <path
                        d="M25.28 48.3201H23.84C23.4581 48.3201 23.0918 48.4718 22.8218 48.7418C22.5517 49.0119 22.4 49.3782 22.4 49.7601C22.4 50.142 22.5517 50.5083 22.8218 50.7783C23.0918 51.0484 23.4581 51.2001 23.84 51.2001H25.28V48.3201Z"
                        fill="black" />
                    <path d="M28.16 48.3201H25.28V51.2001H28.16V48.3201Z" fill="black" />
                    <path d="M31.04 48.3201H28.16V51.2001H31.04V48.3201Z" fill="black" />
                    <path
                        d="M31.04 49.7601V48.3201H32.48C32.0981 48.3201 31.7318 48.4718 31.4617 48.7418C31.1917 49.0119 31.04 49.3782 31.04 49.7601Z"
                        fill="black" />
                    <path
                        d="M33.92 49.7601V48.3201H32.48C32.8619 48.3201 33.2282 48.4718 33.4982 48.7418C33.7683 49.0119 33.92 49.3782 33.92 49.7601Z"
                        fill="black" />
                    <path
                        d="M33.92 48.3201V49.7601C33.92 50.142 34.0717 50.5083 34.3417 50.7783C34.6118 51.0484 34.9781 51.2001 35.36 51.2001C35.7419 51.2001 36.1082 51.0484 36.3782 50.7783C36.6483 50.5083 36.8 50.142 36.8 49.7601V48.3201H33.92Z"
                        fill="black" />
                    <path d="M42.56 48.3201H39.68V51.2001H42.56V48.3201Z" fill="black" />
                    <path
                        d="M42.56 49.7601V48.3201H44C43.6181 48.3201 43.2518 48.4718 42.9818 48.7418C42.7117 49.0119 42.56 49.3782 42.56 49.7601Z"
                        fill="black" />
                    <path
                        d="M45.44 49.7601C45.44 50.142 45.5917 50.5083 45.8618 50.7783C46.1318 51.0484 46.4981 51.2001 46.88 51.2001C47.2619 51.2001 47.6282 51.0484 47.8982 50.7783C48.1683 50.5083 48.32 50.142 48.32 49.7601C48.32 49.3782 48.1683 49.0119 47.8982 48.7418C47.6282 48.4718 47.2619 48.3201 46.88 48.3201C46.4981 48.3201 46.1318 48.4718 45.8618 48.7418C45.5917 49.0119 45.44 49.3782 45.44 49.7601Z"
                        fill="black" />
                    <path
                        d="M51.2 49.7601V48.3201H49.76C50.1419 48.3201 50.5082 48.4718 50.7782 48.7418C51.0483 49.0119 51.2 49.3782 51.2 49.7601Z"
                        fill="black" />
                    <path
                        d="M52.64 51.2001H54.08V48.3201H51.2V49.7601C51.2 50.142 51.3517 50.5083 51.6218 50.7783C51.8918 51.0484 52.2581 51.2001 52.64 51.2001Z"
                        fill="black" />
                    <path d="M56.96 48.3201H54.08V51.2001H56.96V48.3201Z" fill="black" />
                    <path
                        d="M59.84 49.7601V51.2001H56.96V48.3201H58.4C58.7819 48.3201 59.1482 48.4718 59.4183 48.7418C59.6883 49.0119 59.84 49.3782 59.84 49.7601Z"
                        fill="black" />
                    <path
                        d="M59.84 49.76V51.2H61.28C60.8981 51.2 60.5318 51.0483 60.2618 50.7782C59.9917 50.5082 59.84 50.1419 59.84 49.76Z"
                        fill="black" />
                    <path
                        d="M65.6 48.3201V49.7601C65.6 50.142 65.7517 50.5083 66.0217 50.7783C66.2918 51.0484 66.6581 51.2001 67.04 51.2001C67.4219 51.2001 67.7882 51.0484 68.0582 50.7783C68.3283 50.5083 68.48 50.142 68.48 49.7601V48.3201H65.6Z"
                        fill="black" />
                    <path
                        d="M68.48 49.7601V48.3201H69.92C69.5381 48.3201 69.1718 48.4718 68.9017 48.7418C68.6317 49.0119 68.48 49.3782 68.48 49.7601Z"
                        fill="black" />
                    <path
                        d="M8 52.64C8 53.0219 8.15171 53.3881 8.42177 53.6582C8.69182 53.9282 9.05809 54.08 9.44 54.08C9.82191 54.08 10.1882 53.9282 10.4582 53.6582C10.7283 53.3881 10.88 53.0219 10.88 52.64C10.88 52.258 10.7283 51.8918 10.4582 51.6217C10.1882 51.3517 9.82191 51.2 9.44 51.2C9.05809 51.2 8.69182 51.3517 8.42177 51.6217C8.15171 51.8918 8 52.258 8 52.64Z"
                        fill="black" />
                    <path
                        d="M16.64 51.2H15.2C14.8181 51.2 14.4518 51.3517 14.1818 51.6217C13.9117 51.8918 13.76 52.258 13.76 52.64C13.76 53.0219 13.9117 53.3881 14.1818 53.6582C14.4518 53.9282 14.8181 54.08 15.2 54.08H16.64V51.2Z"
                        fill="black" />
                    <path d="M19.5236 51.2H16.6436V54.08H19.5236V51.2Z" fill="black" />
                    <path
                        d="M19.52 54.08H20.96C21.3419 54.08 21.7082 53.9282 21.9783 53.6582C22.2483 53.3881 22.4 53.0219 22.4 52.64C22.4 52.258 22.2483 51.8918 21.9783 51.6217C21.7082 51.3517 21.3419 51.2 20.96 51.2H19.52V54.08Z"
                        fill="black" />
                    <path
                        d="M28.16 52.64V51.2H26.72C27.1019 51.2 27.4682 51.3517 27.7382 51.6217C28.0083 51.8918 28.16 52.258 28.16 52.64Z"
                        fill="black" />
                    <path
                        d="M26.72 54.0799H28.16V52.6399C28.16 53.0218 28.0083 53.3881 27.7382 53.6581C27.4682 53.9282 27.1019 54.0799 26.72 54.0799Z"
                        fill="black" />
                    <path d="M31.04 51.2H28.16V54.08H31.04V51.2Z" fill="black" />
                    <path
                        d="M39.68 51.2V52.64C39.68 53.0219 39.8317 53.3881 40.1018 53.6582C40.3718 53.9282 40.7381 54.08 41.12 54.08C41.5019 54.08 41.8682 53.9282 42.1382 53.6582C42.4083 53.3881 42.56 53.0219 42.56 52.64V51.2H39.68Z"
                        fill="black" />
                    <path
                        d="M54.08 52.64V51.2H52.64C53.0219 51.2 53.3882 51.3517 53.6582 51.6217C53.9283 51.8918 54.08 52.258 54.08 52.64Z"
                        fill="black" />
                    <path d="M56.96 51.2H54.08V54.08H56.96V51.2Z" fill="black" />
                    <path d="M59.84 51.2H56.96V54.08H59.84V51.2Z" fill="black" />
                    <path d="M62.72 51.2H59.84V54.08H62.72V51.2Z" fill="black" />
                    <path
                        d="M65.6 52.64V54.08H62.72V51.2H64.16C64.5419 51.2 64.9082 51.3517 65.1782 51.6217C65.4483 51.8918 65.6 52.258 65.6 52.64Z"
                        fill="black" />
                    <path
                        d="M67.04 54.0799H68.48V52.6399C68.48 53.0218 68.3283 53.3881 68.0582 53.6581C67.7882 53.9282 67.4219 54.0799 67.04 54.0799Z"
                        fill="black" />
                    <path
                        d="M65.6 52.6399V54.0799H67.04C66.6581 54.0799 66.2918 53.9282 66.0217 53.6581C65.7517 53.3881 65.6 53.0218 65.6 52.6399Z"
                        fill="black" />
                    <path
                        d="M68.48 52.64V54.08H71.36V51.2H69.92C69.5381 51.2 69.1718 51.3517 68.9017 51.6217C68.6317 51.8918 68.48 52.258 68.48 52.64Z"
                        fill="black" />
                    <path d="M74.2364 51.2H71.3564V54.08H74.2364V51.2Z" fill="black" />
                    <path d="M77.1164 51.2H74.2364V54.08H77.1164V51.2Z" fill="black" />
                    <path
                        d="M77.12 54.08H78.56C78.9419 54.08 79.3082 53.9282 79.5782 53.6582C79.8483 53.3881 80 53.0219 80 52.64C80 52.258 79.8483 51.8918 79.5782 51.6217C79.3082 51.3517 78.9419 51.2 78.56 51.2H77.12V54.08Z"
                        fill="black" />
                    <path
                        d="M28.16 54.0801H26.72C26.3381 54.0801 25.9718 54.2318 25.7018 54.5018C25.4317 54.7719 25.28 55.1382 25.28 55.5201C25.28 55.902 25.4317 56.2683 25.7018 56.5383C25.9718 56.8084 26.3381 56.9601 26.72 56.9601H28.16V54.0801Z"
                        fill="black" />
                    <path
                        d="M29.6 56.9601H28.16V54.0801H31.04V55.5201C31.04 55.902 30.8883 56.2683 30.6182 56.5383C30.3482 56.8084 29.9819 56.9601 29.6 56.9601Z"
                        fill="black" />
                    <path
                        d="M32.48 56.96H33.92V55.52C33.92 55.9019 33.7683 56.2682 33.4982 56.5383C33.2282 56.8083 32.8619 56.96 32.48 56.96Z"
                        fill="black" />
                    <path
                        d="M36.8 56.9601V55.5201C36.8 55.1382 36.6483 54.7719 36.3782 54.5018C36.1082 54.2318 35.7419 54.0801 35.36 54.0801C34.9781 54.0801 34.6118 54.2318 34.3417 54.5018C34.0717 54.7719 33.92 55.1382 33.92 55.5201V56.9601H36.8Z"
                        fill="black" />
                    <path
                        d="M42.56 55.5201C42.56 55.902 42.7117 56.2683 42.9818 56.5383C43.2518 56.8084 43.6181 56.9601 44 56.9601C44.3819 56.9601 44.7482 56.8084 45.0182 56.5383C45.2883 56.2683 45.44 55.902 45.44 55.5201C45.44 55.1382 45.2883 54.7719 45.0182 54.5018C44.7482 54.2318 44.3819 54.0801 44 54.0801C43.6181 54.0801 43.2518 54.2318 42.9818 54.5018C42.7117 54.7719 42.56 55.1382 42.56 55.5201Z"
                        fill="black" />
                    <path
                        d="M48.32 55.5201C48.32 55.902 48.4717 56.2683 48.7418 56.5383C49.0118 56.8084 49.3781 56.9601 49.76 56.9601C50.1419 56.9601 50.5082 56.8084 50.7782 56.5383C51.0483 56.2683 51.2 55.902 51.2 55.5201C51.2 55.1382 51.0483 54.7719 50.7782 54.5018C50.5082 54.2318 50.1419 54.0801 49.76 54.0801C49.3781 54.0801 49.0118 54.2318 48.7418 54.5018C48.4717 54.7719 48.32 55.1382 48.32 55.5201Z"
                        fill="black" />
                    <path
                        d="M52.64 56.96H54.08V55.52C54.08 55.9019 53.9283 56.2682 53.6582 56.5383C53.3882 56.8083 53.0219 56.96 52.64 56.96Z"
                        fill="black" />
                    <path d="M56.96 54.0801H54.08V56.9601H56.96V54.0801Z" fill="black" />
                    <path d="M59.84 54.0801H56.96V56.9601H59.84V54.0801Z" fill="black" />
                    <path d="M62.72 54.0801H59.84V56.9601H62.72V54.0801Z" fill="black" />
                    <path d="M65.6 54.0801H62.72V56.9601H65.6V54.0801Z" fill="black" />
                    <path d="M68.48 54.0801H65.6V56.9601H68.48V54.0801Z" fill="black" />
                    <path d="M71.3564 54.0801H68.4764V56.9601H71.3564V54.0801Z" fill="black" />
                    <path
                        d="M71.36 55.5201V54.0801H72.8C72.4181 54.0801 72.0518 54.2318 71.7818 54.5018C71.5117 54.7719 71.36 55.1382 71.36 55.5201Z"
                        fill="black" />
                    <path
                        d="M74.24 55.5201V54.0801H72.8C73.1819 54.0801 73.5482 54.2318 73.8182 54.5018C74.0883 54.7719 74.24 55.1382 74.24 55.5201Z"
                        fill="black" />
                    <path
                        d="M71.36 55.52V56.96H72.8C72.4181 56.96 72.0518 56.8083 71.7818 56.5383C71.5117 56.2682 71.36 55.9019 71.36 55.52Z"
                        fill="black" />
                    <path
                        d="M74.24 54.0801V55.5201C74.24 55.902 74.3917 56.2683 74.6618 56.5383C74.9318 56.8084 75.2981 56.9601 75.68 56.9601C76.0619 56.9601 76.4282 56.8084 76.6982 56.5383C76.9683 56.2683 77.12 55.902 77.12 55.5201V54.0801H74.24Z"
                        fill="black" />
                    <path
                        d="M77.12 55.5201V54.0801H78.56C78.1781 54.0801 77.8118 54.2318 77.5418 54.5018C77.2717 54.7719 77.12 55.1382 77.12 55.5201Z"
                        fill="black" />
                    <path
                        d="M33.92 56.96H32.48C32.0981 56.96 31.7318 57.1117 31.4617 57.3817C31.1917 57.6518 31.04 58.018 31.04 58.4C31.04 58.7819 31.1917 59.1481 31.4617 59.4182C31.7318 59.6882 32.0981 59.84 32.48 59.84H33.92V56.96Z"
                        fill="black" />
                    <path d="M36.8 56.96H33.92V59.84H36.8V56.96Z" fill="black" />
                    <path
                        d="M54.08 56.96H52.64C52.2581 56.96 51.8918 57.1117 51.6218 57.3817C51.3517 57.6518 51.2 58.018 51.2 58.4C51.2 58.7819 51.3517 59.1481 51.6218 59.4182C51.8918 59.6882 52.2581 59.84 52.64 59.84H54.08V56.96Z"
                        fill="black" />
                    <path d="M56.96 56.96H54.08V59.84H56.96V56.96Z" fill="black" />
                    <path
                        d="M56.96 58.4V56.96H58.4C58.0181 56.96 57.6518 57.1117 57.3818 57.3817C57.1117 57.6518 56.96 58.018 56.96 58.4Z"
                        fill="black" />
                    <path
                        d="M65.6 58.4V56.96H64.16C64.5419 56.96 64.9082 57.1117 65.1782 57.3817C65.4483 57.6518 65.6 58.018 65.6 58.4Z"
                        fill="black" />
                    <path d="M68.48 56.96H65.6V59.84H68.48V56.96Z" fill="black" />
                    <path d="M71.3564 56.96H68.4764V59.84H71.3564V56.96Z" fill="black" />
                    <path
                        d="M74.24 58.4V59.84H71.36V56.96H72.8C73.1819 56.96 73.5482 57.1117 73.8182 57.3817C74.0883 57.6518 74.24 58.018 74.24 58.4Z"
                        fill="black" />
                    <path
                        d="M74.24 58.3999V59.8399H75.68C75.2981 59.8399 74.9318 59.6882 74.6618 59.4181C74.3917 59.1481 74.24 58.7818 74.24 58.3999Z"
                        fill="black" />
                    <path
                        d="M33.92 61.2801V59.8401H32.48C32.8619 59.8401 33.2282 59.9918 33.4982 60.2619C33.7683 60.5319 33.92 60.8982 33.92 61.2801Z"
                        fill="black" />
                    <path d="M36.8 59.8401H33.92V62.7201H36.8V59.8401Z" fill="black" />
                    <path
                        d="M45.44 61.2801V62.7201H48.32V59.8401H46.88C46.4981 59.8401 46.1318 59.9918 45.8618 60.2619C45.5917 60.5319 45.44 60.8982 45.44 61.2801Z"
                        fill="black" />
                    <path
                        d="M51.2 61.2801V62.7201H48.32V59.8401H49.76C50.1419 59.8401 50.5082 59.9918 50.7782 60.2619C51.0483 60.5319 51.2 60.8982 51.2 61.2801Z"
                        fill="black" />
                    <path
                        d="M54.08 61.2801V59.8401H52.64C53.0219 59.8401 53.3882 59.9918 53.6582 60.2619C53.9283 60.5319 54.08 60.8982 54.08 61.2801Z"
                        fill="black" />
                    <path d="M56.96 59.8401H54.08V62.7201H56.96V59.8401Z" fill="black" />
                    <path
                        d="M59.84 61.2801C59.84 61.662 59.9917 62.0283 60.2618 62.2983C60.5318 62.5684 60.8981 62.7201 61.28 62.7201C61.6619 62.7201 62.0282 62.5684 62.2983 62.2983C62.5683 62.0283 62.72 61.662 62.72 61.2801C62.72 60.8982 62.5683 60.5319 62.2983 60.2619C62.0282 59.9918 61.6619 59.8401 61.28 59.8401C60.8981 59.8401 60.5318 59.9918 60.2618 60.2619C59.9917 60.5319 59.84 60.8982 59.84 61.2801Z"
                        fill="black" />
                    <path d="M68.48 59.8401H65.6V62.7201H68.48V59.8401Z" fill="black" />
                    <path
                        d="M68.48 61.2801V59.8401H69.92C69.5381 59.8401 69.1718 59.9918 68.9017 60.2619C68.6317 60.5319 68.48 60.8982 68.48 61.2801Z"
                        fill="black" />
                    <path
                        d="M71.36 61.2801V59.8401H69.92C70.3019 59.8401 70.6682 59.9918 70.9382 60.2619C71.2083 60.5319 71.36 60.8982 71.36 61.2801Z"
                        fill="black" />
                    <path
                        d="M72.8 62.7201H74.24V59.8401H71.36V61.2801C71.36 61.662 71.5117 62.0283 71.7818 62.2983C72.0518 62.5684 72.4181 62.7201 72.8 62.7201Z"
                        fill="black" />
                    <path d="M77.1164 59.8401H74.2364V62.7201H77.1164V59.8401Z" fill="black" />
                    <path
                        d="M80 61.2801V62.7201H77.12V59.8401H78.56C78.9419 59.8401 79.3082 59.9918 79.5782 60.2619C79.8483 60.5319 80 60.8982 80 61.2801Z"
                        fill="black" />
                    <path d="M36.8 62.72H33.92V65.6H36.8V62.72Z" fill="black" />
                    <path
                        d="M36.8 64.1599V65.5999H38.24C37.8581 65.5999 37.4918 65.4482 37.2218 65.1781C36.9517 64.9081 36.8 64.5418 36.8 64.1599Z"
                        fill="black" />
                    <path
                        d="M39.68 64.16C39.68 64.5419 39.8317 64.9082 40.1018 65.1782C40.3718 65.4483 40.7381 65.6 41.12 65.6C41.5019 65.6 41.8682 65.4483 42.1382 65.1782C42.4083 64.9082 42.56 64.5419 42.56 64.16C42.56 63.7781 42.4083 63.4118 42.1382 63.1417C41.8682 62.8717 41.5019 62.72 41.12 62.72C40.7381 62.72 40.3718 62.8717 40.1018 63.1417C39.8317 63.4118 39.68 63.7781 39.68 64.16Z"
                        fill="black" />
                    <path d="M48.32 62.72H45.44V65.6H48.32V62.72Z" fill="black" />
                    <path d="M51.2 62.72H48.32V65.6H51.2V62.72Z" fill="black" />
                    <path d="M56.96 62.72H54.08V65.6H56.96V62.72Z" fill="black" />
                    <path
                        d="M56.96 64.1599V65.5999H58.4C58.0181 65.5999 57.6518 65.4482 57.3818 65.1781C57.1117 64.9081 56.96 64.5418 56.96 64.1599Z"
                        fill="black" />
                    <path
                        d="M64.16 65.5999H65.6V64.1599C65.6 64.5418 65.4483 64.9081 65.1782 65.1781C64.9082 65.4482 64.5419 65.5999 64.16 65.5999Z"
                        fill="black" />
                    <path d="M68.48 62.72H65.6V65.6H68.48V62.72Z" fill="black" />
                    <path
                        d="M68.48 64.1599V65.5999H69.92C69.5381 65.5999 69.1718 65.4482 68.9017 65.1781C68.6317 64.9081 68.48 64.5418 68.48 64.1599Z"
                        fill="black" />
                    <path
                        d="M74.24 64.16V62.72H72.8C73.1819 62.72 73.5482 62.8717 73.8182 63.1417C74.0883 63.4118 74.24 63.7781 74.24 64.16Z"
                        fill="black" />
                    <path
                        d="M75.68 65.6H77.12V62.72H74.24V64.16C74.24 64.5419 74.3917 64.9082 74.6618 65.1782C74.9318 65.4483 75.2981 65.6 75.68 65.6Z"
                        fill="black" />
                    <path d="M79.9964 62.72H77.1164V65.6H79.9964V62.72Z" fill="black" />
                    <path
                        d="M32.48 68.48H33.92V67.04C33.92 67.422 33.7683 67.7882 33.4982 68.0583C33.2282 68.3283 32.8619 68.48 32.48 68.48Z"
                        fill="black" />
                    <path d="M36.8 65.6001H33.92V68.4801H36.8V65.6001Z" fill="black" />
                    <path
                        d="M39.68 67.0401V68.4801H36.8V65.6001H38.24C38.6219 65.6001 38.9882 65.7518 39.2582 66.0219C39.5283 66.2919 39.68 66.6582 39.68 67.0401Z"
                        fill="black" />
                    <path
                        d="M46.88 68.4801H48.32V65.6001H45.44V67.0401C45.44 67.422 45.5917 67.7883 45.8618 68.0583C46.1318 68.3284 46.4981 68.4801 46.88 68.4801Z"
                        fill="black" />
                    <path
                        d="M49.76 68.4801H48.32V65.6001H51.2V67.0401C51.2 67.422 51.0483 67.7883 50.7782 68.0583C50.5082 68.3284 50.1419 68.4801 49.76 68.4801Z"
                        fill="black" />
                    <path
                        d="M52.64 68.48H54.08V67.04C54.08 67.422 53.9283 67.7882 53.6582 68.0583C53.3882 68.3283 53.0219 68.48 52.64 68.48Z"
                        fill="black" />
                    <path d="M56.96 65.6001H54.08V68.4801H56.96V65.6001Z" fill="black" />
                    <path d="M59.84 65.6001H56.96V68.4801H59.84V65.6001Z" fill="black" />
                    <path d="M62.72 65.6001H59.84V68.4801H62.72V65.6001Z" fill="black" />
                    <path d="M65.6 65.6001H62.72V68.4801H65.6V65.6001Z" fill="black" />
                    <path d="M68.48 65.6001H65.6V68.4801H68.48V65.6001Z" fill="black" />
                    <path
                        d="M71.36 67.0401V68.4801H68.48V65.6001H69.92C70.3019 65.6001 70.6682 65.7518 70.9382 66.0219C71.2083 66.2919 71.36 66.6582 71.36 67.0401Z"
                        fill="black" />
                    <path
                        d="M77.12 67.0401V65.6001H75.68C76.0619 65.6001 76.4282 65.7518 76.6982 66.0219C76.9683 66.2919 77.12 66.6582 77.12 67.0401Z"
                        fill="black" />
                    <path
                        d="M75.68 68.48H77.12V67.04C77.12 67.422 76.9683 67.7882 76.6982 68.0583C76.4282 68.3283 76.0619 68.48 75.68 68.48Z"
                        fill="black" />
                    <path d="M79.9964 65.6001H77.1164V68.4801H79.9964V65.6001Z" fill="black" />
                    <path
                        d="M31.04 69.92V71.36H33.92V68.48H32.48C32.0981 68.48 31.7318 68.6317 31.4617 68.9017C31.1917 69.1718 31.04 69.5381 31.04 69.92Z"
                        fill="black" />
                    <path d="M36.8 68.4763H33.92V71.3563H36.8V68.4763Z" fill="black" />
                    <path
                        d="M38.24 71.36H36.8V68.48H39.68V69.92C39.68 70.3019 39.5283 70.6682 39.2582 70.9382C38.9882 71.2083 38.6219 71.36 38.24 71.36Z"
                        fill="black" />
                    <path
                        d="M49.76 71.3599H51.2V69.9199C51.2 70.3018 51.0483 70.6681 50.7782 70.9382C50.5082 71.2082 50.1419 71.3599 49.76 71.3599Z"
                        fill="black" />
                    <path
                        d="M51.2 69.92V71.36H54.08V68.48H52.64C52.2581 68.48 51.8918 68.6317 51.6218 68.9017C51.3517 69.1718 51.2 69.5381 51.2 69.92Z"
                        fill="black" />
                    <path
                        d="M55.52 71.36H54.08V68.48H56.96V69.92C56.96 70.3019 56.8083 70.6682 56.5383 70.9382C56.2682 71.2083 55.9019 71.36 55.52 71.36Z"
                        fill="black" />
                    <path
                        d="M56.96 69.92V68.48H58.4C58.0181 68.48 57.6518 68.6317 57.3818 68.9017C57.1117 69.1718 56.96 69.5381 56.96 69.92Z"
                        fill="black" />
                    <path
                        d="M59.84 69.92V68.48H58.4C58.7819 68.48 59.1482 68.6317 59.4183 68.9017C59.6883 69.1718 59.84 69.5381 59.84 69.92Z"
                        fill="black" />
                    <path
                        d="M58.4 71.3599H59.84V69.9199C59.84 70.3018 59.6883 70.6681 59.4183 70.9382C59.1482 71.2082 58.7819 71.3599 58.4 71.3599Z"
                        fill="black" />
                    <path d="M62.72 68.4763H59.84V71.3563H62.72V68.4763Z" fill="black" />
                    <path
                        d="M64.16 71.36H62.72V68.48H65.6V69.92C65.6 70.3019 65.4483 70.6682 65.1782 70.9382C64.9082 71.2083 64.5419 71.36 64.16 71.36Z"
                        fill="black" />
                    <path
                        d="M65.6 69.92V68.48H67.04C66.6581 68.48 66.2918 68.6317 66.0217 68.9017C65.7517 69.1718 65.6 69.5381 65.6 69.92Z"
                        fill="black" />
                    <path
                        d="M68.48 69.92V68.48H67.04C67.4219 68.48 67.7882 68.6317 68.0582 68.9017C68.3283 69.1718 68.48 69.5381 68.48 69.92Z"
                        fill="black" />
                    <path
                        d="M68.48 68.48V69.92C68.48 70.3019 68.6317 70.6682 68.9017 70.9382C69.1718 71.2083 69.5381 71.36 69.92 71.36C70.3019 71.36 70.6682 71.2083 70.9382 70.9382C71.2083 70.6682 71.36 70.3019 71.36 69.92V68.48H68.48Z"
                        fill="black" />
                    <path
                        d="M72.8 71.3599H74.24V69.9199C74.24 70.3018 74.0883 70.6681 73.8182 70.9382C73.5482 71.2082 73.1819 71.3599 72.8 71.3599Z"
                        fill="black" />
                    <path
                        d="M74.24 69.92V71.36H77.12V68.48H75.68C75.2981 68.48 74.9318 68.6317 74.6618 68.9017C74.3917 69.1718 74.24 69.5381 74.24 69.92Z"
                        fill="black" />
                    <path
                        d="M78.56 71.36H77.12V68.48H80V69.92C80 70.3019 79.8483 70.6682 79.5782 70.9382C79.3082 71.2083 78.9419 71.36 78.56 71.36Z"
                        fill="black" />
                    <path d="M33.92 71.3564H31.04V74.2364H33.92V71.3564Z" fill="black" />
                    <path
                        d="M35.36 74.2401H33.92V71.3601H36.8V72.8001C36.8 73.182 36.6483 73.5483 36.3782 73.8183C36.1082 74.0884 35.7419 74.2401 35.36 74.2401Z"
                        fill="black" />
                    <path
                        d="M36.8 72.8001V71.3601H38.24C37.8581 71.3601 37.4918 71.5118 37.2218 71.7819C36.9517 72.0519 36.8 72.4182 36.8 72.8001Z"
                        fill="black" />
                    <path
                        d="M46.88 74.24H48.32V72.8C48.32 73.182 48.1683 73.5482 47.8982 73.8183C47.6282 74.0883 47.2619 74.24 46.88 74.24Z"
                        fill="black" />
                    <path
                        d="M48.32 72.8001V74.2401H51.2V71.3601H49.76C49.3781 71.3601 49.0118 71.5118 48.7418 71.7819C48.4717 72.0519 48.32 72.4182 48.32 72.8001Z"
                        fill="black" />
                    <path
                        d="M52.64 74.2401H51.2V71.3601H54.08V72.8001C54.08 73.182 53.9283 73.5483 53.6582 73.8183C53.3882 74.0884 53.0219 74.2401 52.64 74.2401Z"
                        fill="black" />
                    <path
                        d="M54.08 72.8001V71.3601H55.52C55.1381 71.3601 54.7718 71.5118 54.5018 71.7819C54.2317 72.0519 54.08 72.4182 54.08 72.8001Z"
                        fill="black" />
                    <path
                        d="M59.84 71.3601H58.4C58.0181 71.3601 57.6518 71.5118 57.3818 71.7819C57.1117 72.0519 56.96 72.4182 56.96 72.8001C56.96 73.182 57.1117 73.5483 57.3818 73.8183C57.6518 74.0884 58.0181 74.2401 58.4 74.2401H59.84V71.3601Z"
                        fill="black" />
                    <path
                        d="M61.28 74.2401H59.84V71.3601H62.72V72.8001C62.72 73.182 62.5683 73.5483 62.2983 73.8183C62.0282 74.0884 61.6619 74.2401 61.28 74.2401Z"
                        fill="black" />
                    <path
                        d="M62.72 72.8001V71.3601H64.16C63.7781 71.3601 63.4118 71.5118 63.1417 71.7819C62.8717 72.0519 62.72 72.4182 62.72 72.8001Z"
                        fill="black" />
                    <path
                        d="M71.36 72.8001V74.2401H74.24V71.3601H72.8C72.4181 71.3601 72.0518 71.5118 71.7818 71.7819C71.5117 72.0519 71.36 72.4182 71.36 72.8001Z"
                        fill="black" />
                    <path d="M77.1164 71.3564H74.2364V74.2364H77.1164V71.3564Z" fill="black" />
                    <path
                        d="M77.12 72.8001V71.3601H78.56C78.1781 71.3601 77.8118 71.5118 77.5418 71.7819C77.2717 72.0519 77.12 72.4182 77.12 72.8001Z"
                        fill="black" />
                    <path
                        d="M77.12 72.8V74.24H78.56C78.1781 74.24 77.8118 74.0883 77.5418 73.8183C77.2717 73.5482 77.12 73.182 77.12 72.8Z"
                        fill="black" />
                    <path d="M33.92 74.2363H31.04V77.1163H33.92V74.2363Z" fill="black" />
                    <path
                        d="M33.92 75.68V74.24H35.36C34.9781 74.24 34.6118 74.3917 34.3417 74.6618C34.0717 74.9318 33.92 75.2981 33.92 75.68Z"
                        fill="black" />
                    <path
                        d="M33.92 75.6799V77.1199H35.36C34.9781 77.1199 34.6118 76.9682 34.3417 76.6982C34.0717 76.4281 33.92 76.0618 33.92 75.6799Z"
                        fill="black" />
                    <path
                        d="M38.24 77.1199H39.68V75.6799C39.68 76.0618 39.5283 76.4281 39.2582 76.6982C38.9882 76.9682 38.6219 77.1199 38.24 77.1199Z"
                        fill="black" />
                    <path
                        d="M39.68 75.68V77.12H42.56V74.24H41.12C40.7381 74.24 40.3718 74.3917 40.1018 74.6618C39.8317 74.9318 39.68 75.2981 39.68 75.68Z"
                        fill="black" />
                    <path d="M45.44 74.2363H42.56V77.1163H45.44V74.2363Z" fill="black" />
                    <path d="M48.32 74.2363H45.44V77.1163H48.32V74.2363Z" fill="black" />
                    <path
                        d="M49.76 77.12H48.32V74.24H51.2V75.68C51.2 76.0619 51.0483 76.4282 50.7782 76.6982C50.5082 76.9683 50.1419 77.12 49.76 77.12Z"
                        fill="black" />
                    <path
                        d="M51.2 75.68V74.24H52.64C52.2581 74.24 51.8918 74.3917 51.6218 74.6618C51.3517 74.9318 51.2 75.2981 51.2 75.68Z"
                        fill="black" />
                    <path
                        d="M54.08 75.68C54.08 76.0619 54.2317 76.4282 54.5018 76.6982C54.7718 76.9683 55.1381 77.12 55.52 77.12C55.9019 77.12 56.2682 76.9683 56.5383 76.6982C56.8083 76.4282 56.96 76.0619 56.96 75.68C56.96 75.2981 56.8083 74.9318 56.5383 74.6618C56.2682 74.3917 55.9019 74.24 55.52 74.24C55.1381 74.24 54.7718 74.3917 54.5018 74.6618C54.2317 74.9318 54.08 75.2981 54.08 75.68Z"
                        fill="black" />
                    <path
                        d="M62.72 75.68V77.12H65.6V74.24H64.16C63.7781 74.24 63.4118 74.3917 63.1417 74.6618C62.8717 74.9318 62.72 75.2981 62.72 75.68Z"
                        fill="black" />
                    <path
                        d="M65.6 77.12H67.04C67.4219 77.12 67.7882 76.9683 68.0582 76.6982C68.3283 76.4282 68.48 76.0619 68.48 75.68C68.48 75.2981 68.3283 74.9318 68.0582 74.6618C67.7882 74.3917 67.4219 74.24 67.04 74.24H65.6V77.12Z"
                        fill="black" />
                    <path
                        d="M72.8 77.12H74.24V74.24H71.36V75.68C71.36 76.0619 71.5117 76.4282 71.7818 76.6982C72.0518 76.9683 72.4181 77.12 72.8 77.12Z"
                        fill="black" />
                    <path d="M77.1164 74.2363H74.2364V77.1163H77.1164V74.2363Z" fill="black" />
                    <path
                        d="M80 75.68V77.12H77.12V74.24H78.56C78.9419 74.24 79.3082 74.3917 79.5782 74.6618C79.8483 74.9318 80 75.2981 80 75.68Z"
                        fill="black" />
                    <path
                        d="M32.48 80.0001H33.92V77.1201H31.04V78.5601C31.04 78.942 31.1917 79.3083 31.4617 79.5784C31.7318 79.8484 32.0981 80.0001 32.48 80.0001Z"
                        fill="black" />
                    <path d="M36.8 77.1165H33.92V79.9965H36.8V77.1165Z" fill="black" />
                    <path d="M39.68 77.1165H36.8V79.9965H39.68V77.1165Z" fill="black" />
                    <path
                        d="M41.12 80.0001H39.68V77.1201H42.56V78.5601C42.56 78.942 42.4083 79.3083 42.1382 79.5784C41.8682 79.8484 41.5019 80.0001 41.12 80.0001Z"
                        fill="black" />
                    <path
                        d="M42.56 78.5601V77.1201H44C43.6181 77.1201 43.2518 77.2718 42.9818 77.5419C42.7117 77.8119 42.56 78.1782 42.56 78.5601Z"
                        fill="black" />
                    <path
                        d="M51.2 78.5601C51.2 78.942 51.3517 79.3083 51.6218 79.5784C51.8918 79.8484 52.2581 80.0001 52.64 80.0001C53.0219 80.0001 53.3882 79.8484 53.6582 79.5784C53.9283 79.3083 54.08 78.942 54.08 78.5601C54.08 78.1782 53.9283 77.8119 53.6582 77.5419C53.3882 77.2718 53.0219 77.1201 52.64 77.1201C52.2581 77.1201 51.8918 77.2718 51.6218 77.5419C51.3517 77.8119 51.2 78.1782 51.2 78.5601Z"
                        fill="black" />
                    <path
                        d="M62.72 77.1201V78.5601C62.72 78.942 62.8717 79.3083 63.1417 79.5784C63.4118 79.8484 63.7781 80.0001 64.16 80.0001C64.5419 80.0001 64.9082 79.8484 65.1782 79.5784C65.4483 79.3083 65.6 78.942 65.6 78.5601V77.1201H62.72Z"
                        fill="black" />
                    <path
                        d="M65.6 78.5601V77.1201H67.04C66.6581 77.1201 66.2918 77.2718 66.0217 77.5419C65.7517 77.8119 65.6 78.1782 65.6 78.5601Z"
                        fill="black" />
                    <path
                        d="M68.48 78.5601C68.48 78.942 68.6317 79.3083 68.9017 79.5784C69.1718 79.8484 69.5381 80.0001 69.92 80.0001C70.3019 80.0001 70.6682 79.8484 70.9382 79.5784C71.2083 79.3083 71.36 78.942 71.36 78.5601C71.36 78.1782 71.2083 77.8119 70.9382 77.5419C70.6682 77.2718 70.3019 77.1201 69.92 77.1201C69.5381 77.1201 69.1718 77.2718 68.9017 77.5419C68.6317 77.8119 68.48 78.1782 68.48 78.5601Z"
                        fill="black" />
                    <path
                        d="M74.24 78.5601V77.1201H72.8C73.1819 77.1201 73.5482 77.2718 73.8182 77.5419C74.0883 77.8119 74.24 78.1782 74.24 78.5601Z"
                        fill="black" />
                    <path
                        d="M75.68 80.0001H77.12V77.1201H74.24V78.5601C74.24 78.942 74.3917 79.3083 74.6618 79.5784C74.9318 79.8484 75.2981 80.0001 75.68 80.0001Z"
                        fill="black" />
                    <path
                        d="M78.56 80.0001H77.12V77.1201H80V78.5601C80 78.942 79.8483 79.3083 79.5782 79.5784C79.3082 79.8484 78.9419 80.0001 78.56 80.0001Z"
                        fill="black" />
                    <path
                        d="M8.612 8C8.44998 8.00094 8.29486 8.06573 8.1803 8.1803C8.06573 8.29486 8.00094 8.44998 8 8.612V27.5516C8 27.7139 8.06448 27.8696 8.17925 27.9844C8.29403 28.0991 8.44969 28.1636 8.612 28.1636H27.5516C27.7139 28.1636 27.8696 28.0991 27.9844 27.9844C28.0991 27.8696 28.1636 27.7139 28.1636 27.5516V8.612C28.1636 8.44969 28.0991 8.29403 27.9844 8.17925C27.8696 8.06448 27.7139 8 27.5516 8H8.612ZM25.28 13.76V24.92C25.28 25.0155 25.2421 25.107 25.1746 25.1746C25.107 25.2421 25.0155 25.28 24.92 25.28H11.24C11.1445 25.28 11.053 25.2421 10.9854 25.1746C10.9179 25.107 10.88 25.0155 10.88 24.92V11.24C10.88 11.1445 10.9179 11.053 10.9854 10.9854C11.053 10.9179 11.1445 10.88 11.24 10.88H24.92C25.0155 10.88 25.107 10.9179 25.1746 10.9854C25.2421 11.053 25.28 11.1445 25.28 11.24V13.76Z"
                        fill="black" />
                    <path
                        d="M22.4 19.52V14.372C22.4 14.2097 22.3355 14.054 22.2208 13.9393C22.106 13.8245 21.9503 13.76 21.788 13.76H14.372C14.2097 13.76 14.054 13.8245 13.9393 13.9393C13.8245 14.054 13.76 14.2097 13.76 14.372V21.7916C13.76 21.9539 13.8245 22.1096 13.9393 22.2244C14.054 22.3391 14.2097 22.4036 14.372 22.4036H21.788C21.9503 22.4036 22.106 22.3391 22.2208 22.2244C22.3355 22.1096 22.4 21.9539 22.4 21.7916V19.52Z"
                        fill="black" />
                    <path
                        d="M60.4484 8C60.2864 8.00094 60.1313 8.06573 60.0167 8.1803C59.9022 8.29486 59.8374 8.44998 59.8364 8.612V27.5516C59.8364 27.7139 59.9009 27.8696 60.0157 27.9844C60.1305 28.0991 60.2861 28.1636 60.4484 28.1636H79.388C79.5503 28.1636 79.706 28.0991 79.8208 27.9844C79.9355 27.8696 80 27.7139 80 27.5516V8.612C80 8.44969 79.9355 8.29403 79.8208 8.17925C79.706 8.06448 79.5503 8 79.388 8H60.4484ZM77.12 13.76V24.92C77.12 25.0155 77.0821 25.107 77.0146 25.1746C76.9471 25.2421 76.8555 25.28 76.76 25.28H63.08C62.9846 25.28 62.893 25.2421 62.8255 25.1746C62.758 25.107 62.72 25.0155 62.72 24.92V11.24C62.72 11.1445 62.758 11.053 62.8255 10.9854C62.893 10.9179 62.9846 10.88 63.08 10.88H76.76C76.8555 10.88 76.9471 10.9179 77.0146 10.9854C77.0821 11.053 77.12 11.1445 77.12 11.24V13.76Z"
                        fill="black" />
                    <path
                        d="M74.24 19.52V14.372C74.24 14.2916 74.2241 14.2121 74.1934 14.1378C74.1626 14.0636 74.1176 13.9961 74.0607 13.9393C74.0039 13.8824 73.9364 13.8373 73.8622 13.8066C73.7879 13.7758 73.7083 13.76 73.628 13.76H66.212C66.0497 13.76 65.894 13.8245 65.7792 13.9393C65.6645 14.054 65.6 14.2097 65.6 14.372V21.7916C65.6 21.9539 65.6645 22.1096 65.7792 22.2244C65.894 22.3391 66.0497 22.4036 66.212 22.4036H73.628C73.7083 22.4036 73.7879 22.3878 73.8622 22.357C73.9364 22.3263 74.0039 22.2812 74.0607 22.2244C74.1176 22.1675 74.1626 22.1001 74.1934 22.0258C74.2241 21.9516 74.24 21.872 74.24 21.7916V19.52Z"
                        fill="black" />
                    <path
                        d="M8.612 59.84C8.44998 59.841 8.29486 59.9057 8.1803 60.0203C8.06573 60.1349 8.00094 60.29 8 60.452V79.388C8 79.5503 8.06448 79.706 8.17925 79.8208C8.29403 79.9355 8.44969 80 8.612 80H27.5516C27.7139 80 27.8696 79.9355 27.9844 79.8208C28.0991 79.706 28.1636 79.5503 28.1636 79.388V60.4484C28.1636 60.2861 28.0991 60.1305 27.9844 60.0157C27.8696 59.9009 27.7139 59.8364 27.5516 59.8364L8.612 59.84ZM25.28 65.6V76.76C25.28 76.8555 25.2421 76.9471 25.1746 77.0146C25.107 77.0821 25.0155 77.12 24.92 77.12H11.24C11.1445 77.12 11.053 77.0821 10.9854 77.0146C10.9179 76.9471 10.88 76.8555 10.88 76.76V63.08C10.88 62.9846 10.9179 62.893 10.9854 62.8255C11.053 62.758 11.1445 62.72 11.24 62.72H24.92C25.0155 62.72 25.107 62.758 25.1746 62.8255C25.2421 62.893 25.28 62.9846 25.28 63.08V65.6Z"
                        fill="black" />
                    <path
                        d="M22.4 71.3601V66.2121C22.4 66.1317 22.3842 66.0521 22.3534 65.9779C22.3227 65.9036 22.2776 65.8362 22.2208 65.7794C22.1639 65.7225 22.0965 65.6774 22.0222 65.6467C21.948 65.6159 21.8684 65.6001 21.788 65.6001H14.372C14.2916 65.6001 14.2121 65.6159 14.1378 65.6467C14.0636 65.6774 13.9961 65.7225 13.9393 65.7794C13.8824 65.8362 13.8373 65.9036 13.8066 65.9779C13.7758 66.0521 13.76 66.1317 13.76 66.2121V73.6281C13.76 73.7904 13.8245 73.9461 13.9393 74.0608C14.054 74.1756 14.2097 74.2401 14.372 74.2401H21.788C21.9503 74.2401 22.106 74.1756 22.2208 74.0608C22.3355 73.9461 22.4 73.7904 22.4 73.6281V71.3601Z"
                        fill="black" />
                    <circle cx="44" cy="44" r="12" fill="white" />
                    <g clip-path="url(#clip1_63_689)">
                        <path
                            d="M47.9062 36.0001C47.2214 35.9822 46.5394 36.0959 45.8973 36.3349C44.6473 36.8483 44 38.8126 44 38.8126C45.0447 38.9218 46.1007 38.8154 47.1027 38.5001C48.0042 37.9404 48.6768 37.0778 49 36.0671C48.6372 36.0215 48.2719 35.9991 47.9062 36.0001ZM44 38.8573C42.192 38.8573 41.1429 40.0626 41.1429 42.1832C41.1429 42.6296 40.7634 43.076 40.3393 43.6117C39.5439 44.3578 39.0646 45.3803 39 46.4689C39.1177 47.7134 39.6954 48.8694 40.62 49.7107C41.5447 50.552 42.7499 51.0182 44 51.0182C45.2501 51.0182 46.4553 50.552 47.38 49.7107C48.3046 48.8694 48.8823 47.7134 49 46.4689C48.9223 45.3882 48.4542 44.3727 47.683 43.6117C47.2554 43.2416 46.9645 42.7385 46.8571 42.1832C46.8571 40.0626 45.808 38.8573 44 38.8573Z"
                            fill="#E870A1" />
                    </g>
                </g>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H88V88H0V0ZM4 4V84H84V4H4Z" fill="#E870A1" />
                <defs>
                    <clipPath id="clip0_63_689">
                        <rect width="72" height="72" fill="white" transform="translate(8 8)" />
                    </clipPath>
                    <clipPath id="clip1_63_689">
                        <rect width="10" height="15" fill="white" transform="translate(39 36)" />
                    </clipPath>
                </defs>
            </svg>


        </div> <!--.qr-->
        <div class="company">
            <input type="text" value={{ $data->comp_name }} readonly="readonly">
        </div>
        <div class="tag">
            <input type="text" value={{ $data->comp_tag }} readonly="readonly">
        </div>


    </div> <!--.back-outer-container-->

</body>
<footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</footer>

</html>