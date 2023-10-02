


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Verify</title>
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="assets/css/verify.css">
    <link rel="icon" type="image/x-icon" href="assets/images/brain.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/success.css">
    <style>
        svg {
            width : 100px;
            height: 100px;

            position: absolute;
            top: 150px;
            left: 50%;
            margin-bottom: 50px;
            margin-left: -50px;
            }


            svg.animate path {
            animation: dash 0.75s linear both;
            animation-delay: 0.5s;
            }

            @keyframes dash {
            0% { stroke-dashoffset: 210; }
            75% { stroke-dashoffset: -220; }
            100% { stroke-dashoffset: -205; }
            }
    </style>
</head>
  <body>
  <?php include 'navigationbar.php';?>
    <div class="container-sm">
    <div class="row justify-content-center align-items-center mt-5">
        <div class="col-lg-4">
            <form action="login.php" class="d-block w-100 rounded mt-5 p-4">
                <div class="container ">
                <svg viewBox="0 0 100 100" class="animate">
                <filter id="dropshadow" height="100%">
                    <feGaussianBlur in="SourceAlpha" stdDeviation="3" result="blur" />
                    <feFlood flood-color="rgba(76, 175, 80, 1)" flood-opacity="0.5" result="color" />
                    <feComposite in="color" in2="blur" operator="in" result="blur" />
                    <feMerge>
                    <feMergeNode />
                    <feMergeNode in="SourceGraphic" />
                    </feMerge>
                </filter>

                <circle cx="50" cy="50" r="46.5" fill="none" stroke="rgba(76, 175, 80, 0.5)" stroke-width="5" />

                <path d="M67,93 A46.5,46.5 0,1,0 7,32 L43,67 L88,19" fill="none" stroke="rgba(76, 175, 80, 1)" stroke-width="5" stroke-linecap="round" stroke-dasharray="80 1000" stroke-dashoffset="-220" style="filter:url(#dropshadow)" />
                </svg>
                
                </div>
                
                <br><br><br><br>
                <p class="mt-2" style="text-align: center; font-size: 14px;">Congratulation you have successfully create your account please continue to login.</p>
                <button type="submit" style="background-color: rgb(62, 0, 133); height: 45px" class="mt-5 btn btn-primary w-100 my-1 border-0 mb-3">Continue to login</button>
                
            </form>
        </div>
    </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script>
        document.querySelector('button').addEventListener('click', () => {
        document.querySelector('svg').classList.remove('animate');
        setTimeout(function() {
            document.querySelector('svg').classList.add('animate');
        }, 10);
        });
    </script>
  </body>
</html>
