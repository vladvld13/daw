<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>title</title>
    <link href = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel= "stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</head>

<style>

        body {
        background-color: lightblue;
        }
    		#img {
		  border-radius: 15px;
		  width: 170px;
		}	
            #nav{
                width:100%;
            }

        #page_title{
            text-align:center;

        }
        #registr{
            text-align:center;
            font: 20px sans-serif;
        }

        .input_box{
            padding-top: 10px;
            padding-bottom: 10px;
        }

        .flip-box {
        padding-left: 30px;
        padding-right: 30px;
        padding-top: 30px;
        padding-bottom:30px;
        background-color: transparent;
        width: 300px;
        height: 200px;
        border: 0px;
        }

        /* This container is needed to position the front and back side */
        .flip-box-inner {
        position: relative;
        width: 100%;
        height: 100%;
        text-align: center;
        transition: transform 0.8s;
        transform-style: preserve-3d;
        }

        /* Do an horizontal flip when you move the mouse over the flip box container */
        .flip-box:hover .flip-box-inner {
        transform: rotateY(180deg);
        }

        /* Position the front and back side */
        .flip-box-front, .flip-box-back {
        position: absolute;
        width: 100%;
        height: 100%;
        -webkit-backface-visibility: hidden; /* Safari */
        backface-visibility: hidden;
        }

        /* Style the front side (fallback if image is missing) */
        .flip-box-front {
        background-color: transparent;
        color: transparent;
        }

        /* Style the back side */
        .flip-box-back {
        background-color: lightyellow;
        color: black;
        transform: rotateY(180deg);
        }
        .navbar{
            z-index:1;
        }
</style>

<body>