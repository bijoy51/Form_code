<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genarative form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $firstName = htmlspecialchars ($_POST['firstName']);
    }
    ?>
    <div class="main">
        <div class="container">
            <div class="cv_header">
                <h1>This is a Dynamic form</h1>
                <p>This CV created for <br><b>.....</b></p>
            </div>

            <div class="personalInformation">
                <div class="title1"><h3>Personal Information</h3></div>
                <p>
                    <?php if(isset($_POST['fastName']))   ?>
                    Name : <?php echo $_POST['fastName']; ?>
                </p>
                <p>Father Name : </p>
                <p>Mother Name : </p>
                <p>Date of Birth : </p>
                <p>Nationality : </p>
                <p>Religion : </p>
                <p>Marital Status : </p>
            </div>

            <div class="educationalQualification">
                <div class="title2"><h3>Educational Qualification</h3></div>

                <p1>*SSC/Equivalent Examination Result</p1><br>
                <p>GPA :</p>
                <p>Board : </p>
                <p>Passing Year : </p>

                <p1>*HSC/Equivalent Examination Result</p1><br>
                <p>GPA :</p>
                <p>Board : </p>
                <p>Passing Year : </p>

                <p1>*Graduate/Equivalent Examination Result</p1><br>
                <p>CGPA :</p>
                <p>University : </p>
                <p>Passing Year : </p>

                <p1>*Postgraduate/Equivalent Examination Result</p1><br>
                <p>CGPA :</p>
                <p>University : </p>
                <p>Passing Year : </p>
            </div>

            <div class="candidatesAddress">
                <div class="title2"><h3>Candidate's Address</h3></div>

                <p1>Present Address</p1><br>
                <p>Division :</p>
                <p>District : </p>
                <p>Upazila/City : </p>
                <p>Village</p>

                <p1>Permanent Address</p1><br>
                <p>Division :</p>
                <p>District : </p>
                <p>Upazila/City : </p>
                <p>Village</p>
            </div>

            <div class="contactInformation">
                <div class="title2"><h3>Contact Information</h3></div>

                <p>Mobile Number :</p>
                <p>Email : </p>
            </div>

            <div class="experiance">
                <div class="title2"><h3>Experience (If Any)</h3></div>

                <p>Post Name :</p>
                <p>Name of institution : </p>
                <p>Duration of employment : </p>
            </div>

            <div class="otherInformation">
                <div class="title2"><h3>Others Information</h3></div>

                <p>Special Skills :</p>
            </div>
        </div>
    </div>
    ?>
</body>
</html>