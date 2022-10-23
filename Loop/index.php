<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make Your Gf Smile 🥰</title>
    <style>
        form {
            margin: 0 auto;
        }

        input {
            margin-top: 10px;
            display: flex;
        }

        textarea {
            width: 300px;
            padding: 2px;
            font: normal 1em Verdana, sans-serif;
            border: 1px solid #eee;
            height: 100px;
            display: block;
            color: #777;
        }

        body {
            background: rgb(21, 219, 191);
            background: linear-gradient(104deg, rgba(21, 219, 191, 1) 3%, rgba(46, 141, 201, 1) 15%, rgba(138, 43, 179, 1) 48%, rgba(185, 27, 185, 1) 62%, rgba(60, 88, 187, 1) 96%);
            /* background-image: linear-gradient(90deg, white, lightgreen, darkblue);
            background-image: linear-gradient(90deg, white 0%,
                    lightgreen 50%, darkblue 100%); */
            /* background: rgb(21, 219, 191);
            background: linear-gradient(60deg, rgba(21, 219, 191, 1) 3%, rgba(46, 141, 201, 1) 15%, rgba(138, 43, 179, 1) 48%, rgba(185, 27, 185, 1) 62%, rgba(60, 88, 187, 1) 96%); */
        }

        .form-group label {
            margin-bottom: 0;
            font-weight: bold;
            text-align: left !important;

        }

        .div1 {
            height: 300px;
            max-width: 300px;
            overflow-y: scroll;
            border: 5px black solid;
            /* background-color: blueviolet; */
            margin-top: 10px;
            /* border-radius: 20px; */
            color: black;
        }

        .cont {
            background-color: rgba(0, 0, 0, 0.3);
        }

        .navbar {
            padding: 1% 10%;
            /* 1% for top bottom & 10% left right  */
            background-color: rgba(0, 0, 0, 0.3);
        }

        .navbar-icon {
            color: white;
        }

        .navbar-brand img {
            width: 60px;
            height: auto;
        }

        .nav-link {
            color: white;
            margin: 10px;
            border-radius: 5px;
            transition: 0.4s;
        }

        .nav-link:hover {
            background: navy;
            color: white;
            transform: scale(1.1);
        }

        @media (max-width: 768px) {
            .nav-link {
                background: rgb(0, 0, 0, 0.7);
            }

            .banner-container h1 {
                font-size: 1.5rem;
            }
        }
    </style>
</head>

<body>
    <main class="container mt-2 cont p-2">
        <header>
            <!-- <nav>
                        <img src="./logo.jpg" alt="" class="img-fluid" height="90px" width="100px" srcset="">
                </div>
                <div class="col-10">
                    <h1 class=" text-white text-center mr-5 font-weight-bolder display-inline">Nayeeem</h1>
                </div>
                </nav> -->
            <nav class="navbar navbar-expand-lg text-primary fixed">
                <img src="./logo.jpg" height="90px" width="100px" alt="" srcset="" />
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span><i class="fas fa-bars navbar-icon"></i></span>
                </button>

                <div class="collapse navbar-collapse text-primary" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link text-center text-md-left" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-center text-md-left" href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-center text-md-left" href="#about-me">About Me</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-center text-md-left" href="#tutorial">Tutorial</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-center text-md-left" href="#feedback">Feedback</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-center text-md-left" href="#contact">Contact Me</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <center>
            <form action="loopby.php" method="post">
                <div>
                    <div class="form-group text-left w-50">
                        <label for="Text">Enter The Text : </label>
                        <input name='input1' type="text" class="form-control" placeholder="Enter Your Text">
                    </div>
                    <div class="form-group text-left w-50">
                        <label for="number" class="text-left">Enter The Number :</label>
                        <input name='input' type="number" class="form-control" placeholder="Enter The Number">
                    </div>
                    <input type="submit" name="sub" class="btn btn-primary" value="Submit">
                    <div class="">
                        <div name="" class="overflow-auto div1" id="output">

                            <?php
                            if (isset($_POST['sub'])) {
                                $tom = $_POST["input"];
                                $input1 = $_POST['input1'];
                                for ($x = 1; $x <= $tom; $x++) {
                                    $uu =  "<p style='color:green;' class='text-warning'> $input1  $x</p>" . "<br>";
                                    // $uu =  " $input1  $x" . "<br>";
                                    // echo strip_tags($uu);
                                    // echo "<br>";
                                    echo $uu;
                                }
                            }
                            ?>

                        </div>
                    </div>
                    <button class="btn btn-danger mt-3" onclick="clear()">Reset</button>
                    <button class="btn btn-success mt-3" onclick="CopyToClipboard('output')">Copy text</button>
                </div>
            </form>
        </center>
        <?php
        //php
        // for ($x = 0; $x <= $tom; $x++) { // echo "The number is: $x <br>" 
        ?>
    </main>
    <script>
        function CopyToClipboard(id) {
            var r = document.createRange();
            r.selectNode(document.getElementById(id));
            window.getSelection().removeAllRanges();
            window.getSelection().addRange(r);
            try {
                document.execCommand('copy');
                window.getSelection().removeAllRanges();
                console.log('Successfully copy text: hello world ' + r);
            } catch (err) {
                console.log('Unable to copy!');
            }
        }


        // function myFunction() {
        //     // Get the text field
        //     var copyText = document.getElementById("output").innerHTML;

        //     // Select the text field
        //     copyText.select();
        //     copyText.setSelectionRange(0, 99999); // For mobile devices

        //     // Copy the text inside the text field
        //     navigator.clipboard.writeText(copyText.value);

        //     // Alert the copied text
        //     alert("Copied the text: " + copyText.value);
        // }

        function clear() {
            document.getElementById("output").value = ''
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/clipboard@2.0.10/dist/clipboard.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</body>

</html>