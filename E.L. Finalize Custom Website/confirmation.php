<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission Confirmation</title>
    <link rel="icon" href="Image/E.L..png" type="image/x-icon" />
   
    <style>
    @import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Nunito:ital,wght@0,300;0,600;0,700;0,900;1,400&family=Roboto:wght@400;500;700&display=swap");
        body {
            font-family: "Nunito", sans-serif;
            font-size: 1rem;
            margin: 0;
            padding: 0;
            background: linear-gradient(to bottom right, #003333, #08493f);
            color: #fff;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header {
            background: url(Image/gmmk2.webp);
            color: white;
            text-align: center;
            padding: 20px 0;
        }

        header h1 {
            position: relative;
            z-index: 1;
        }

        header::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 126.9px;
            background: rgba(0, 0, 0, 0.7);
            z-index: 0;
        }

        /* Nav Bar for Different Website */
        .NavBar {
            background-color: #333;
            overflow: hidden;
        }

        .NavBar a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 72.8px;
            text-decoration: none;
            transition: all 0.2s ease-in-out;
        }

        .NavBar a:hover {
            background-color: #fdfdfd;
            color: #333;
          }

        .container {
          text-align: center;
          margin-top: 70px;
          margin-bottom: 40px;
          margin-left: 20%;
          margin-right: 20%;
          padding: 60px;
          background-color: rgba(255, 255, 255, 0.9);
          border-radius: 8px;
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
     }

        .container h1 {
            color: #333;
        }

        .container p {
            color: #555;
            margin-bottom: 20px;
        }

        .button-container {
            margin-top: 20px;
        }

        .redirect-button {
            display: inline-block;
            padding: 10px 20px;
            text-decoration: none;
            background-color: #08493f;
            color: #fff;
            border-radius: 5px;
            transition: background-color 0.3s ease-in-out;
        }

        .redirect-button:hover {
            background-color: #003333;
        }

        footer {
            background-color: #333;
            padding: 5px;
            margin-top: auto;
            color: rgb(202, 202, 202);
            text-align: center;
        }

        footer ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        footer ul li {
            display: inline;
            margin-right: 10px;
        }
    </style>
</head>

<body>
    <header>
        <h1>E.L. Custom At Your Services</h1>
    </header>

    <nav class="NavBar">
        <a href="E.L.Custom.html">Custom Keyboard Parts and Details</a>
        <a href="E.L.Selling.html">Suggestion Keyboard Parts</a>
        <a href="E.L.VideoPage.html">Guide on how to build</a>
        <a href="E.L.About.html">About Us</a>
        <a href="E.L.Email.html">Email Us Here</a>
    </nav>

    <div class="container">
        <h1>Form Submission Successful</h1>
        <p>Thank you for submitting the form. Your information has been successfully recorded.</p>

        <!-- Button to redirect to the "Email Us" page -->
        <div class="button-container">
            <a href="E.L.Email.html" class="redirect-button">Return</a>
        </div>
    </div>

    <footer>
        <div class="Content">
            <p>&copy; 2023 Your E.L's Customs. All rights reserved.</p>
            <ul>
                <li><a href="E.L.Custom.html">Home</a></li>
                <li><a href="E.L.About.html">About Us</a></li>
                <li><a href="E.L.Email.html">Contact</a></li>
            </ul>
        </div>
    </footer>
</body>
</html>
