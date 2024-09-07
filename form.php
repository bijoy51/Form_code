<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>demoform</title>
    <link rel="stylesheet" href="form2.css">
    <link rel="stylesheet" href="responsive.css">
</head>
<body>
    <div class="main">
        <div class="container">
            <div class="title">
                <h2>This is a Dynamic biodata form</h2>
                <p>This form created by<br><b><i>Nayem Hasan Bijoy</i></b></p>
                <p>Computer Science and Engineering <br> Islamic University,Kushtia.</p>
            </div>
            <div class="personalInformation">
                <div class="title1"><h3>Personal Information</h3></div>
                    <form action="genarative_form.php" method="POST">
                        <label for="firstName">First Name :</label>
                        <input type="text" name="firstName" class="firstName" required>

                        <label for="lastName">Last Name :</label>
                        <input type="text" name="lastname" class="lastName"><br>

                        <label for="firstName">Father Name :</label>
                        <input type="text" name="fatherName" class="fatherName">

                        <label for="motherName">Mother Name :</label>
                        <input type="text" name="motherName" class="motherName"><br>

                        <label for="options">Date of Birth : </label>
                        <select name="date" id="date">
                            <?php
                            $start_date = 1;
                            $end_date = 31;
                            for ($i = $start_date; $i <= $end_date; $i++){
                                echo "<option name='date'>$i</option>";
                            }
                            ?>
                        </select>
                        <select name="month" id="month">
                            <?php
                            $months = array ("January","February","March","April","May","June","July","August","September",
                            "October","November","December");
                            foreach ($months as $months){
                                echo "<option name='months'>$months</option>";
                            }
                            ?>
                        </select>
                        <select name="year" id="year">
                            <?php
                            $start_year = 1990;
                            $end_year = 2024;
                            for ($i = $start_year; $i <= $end_year; $i++){
                                echo "<option name='year'>$i</option>";
                            }
                            ?>
                        </select><br>

                        <label for="nationality">Nationality : </label>
                        <select name="nationality" id="nationality">
                            <option value="Bangladeshi">Bangladeshi</option>
                        </select><br>

                        <label for="religion">Religion : </label>
                        <select name="religion" id="religion">
                            <?php
                            $religions = array("Islam","Christisnity","Hinduism","Buddhism","Sikhism","judaism",
                            "Confucianism","Taoism","Shinto");
                            foreach ($religions as $religions){
                                echo "<option name='religion'>$religions</option>";
                            }
                            ?>
                        </select><br>

                        <label for="maritalStatus">Marital Status : </label>
                        <select name="maritalStatus" id="maritalStatus">
                            <option value="unmarried">Unmarried</option>
                            <option value="married">Married</option>
                        </select>
                    </form>
            </div>

            <div class="educationalQualification">
                <div class="title2"><h3>Educational Qualification</h3></div>
                <form action="genarative_form.php" method="POST">
                    <label for="sscQualification">*SSC/Equivalent Examination Result</label><br>

                    <label for="sscPoint">GPA :</label>
                    <input type="text" name="sscgpa" id="sscgpa">
                    
                    <label for="sscBoard">Board : </label>
                    <select name="sscBoard" id="sscBoard">
                        <?php
                        $boards = array("Dhaka","Chittagong","Rajshahi","Comilla","Jessore","Sylhet","Barisal","Dinajpur",
                        "Mymensingh","Technical Board");
                        foreach ($boards as $boards){
                            echo "<option name='boards'>$boards</option>";
                        }
                        ?>
                    </select>

                    <label for="sscyear">Passing Year : </label>
                    <select name="passingYear" id="passingYear">
                        <?php
                        $start_year = 2000;
                        $end_year =2024;
                        for ($i = $start_year; $i <= $end_year; $i++){
                            echo "<option name='passingYear'>$i</option>";
                        }
                        ?>
                    </select><br>

                    <label for="hscQualification">*HSC/Equivalent Examination Result</label><br>

                    <label for="hscPoint">GPA :</label>
                    <input type="text" name="hscgpa" id="hscgpa">
                    
                    <label for="hscBoard">Board : </label>
                    <select name="hscBoard" id="hscBoard">
                        <?php
                        $boards = array("Dhaka","Chittagong","Rajshahi","Comilla","Jessore","Sylhet","Barisal","Dinajpur",
                        "Mymensingh","Technical Board");
                        foreach ($boards as $boards){
                            echo "<option name='boards'>$boards</option>";
                        }
                        ?>
                    </select>

                    <label for="hscyear">Passing Year : </label>
                    <select name="passingYear" id="passingYear">
                        <?php
                        $start_year = 2000;
                        $end_year =2024;
                        for ($i = $start_year; $i <= $end_year; $i++){
                            echo "<option name='passingYear'>$i</option>";
                        }
                        ?>
                    </select><br>

                    <label for="graduateQualification">*Graduate/Equivalent Examination Result</label><br>

                    <label for="graduatePoint">CGPA :</label>
                    <input type="text" name="graduatecgpa" id="graduatecgpa">
                    
                    <label for="university">University : </label>
                    <select name="university" id="university">
                        <?php
                        $universitys = array ("University of Dhaka","Jahangirnagar University","University of Rajshahi",
                        "University of Chittagong","Bangladesh University of Engineering and Technology (BUET)",
                        "Khulna University","Shahjalal University of Science and Technology","Islamic University, Kushtia",
                        "Bangladesh Agricultural University","Bangladesh University of Textiles (BUTEX)","Bangladesh Open University",
                        "Jagannath University","Comilla University","National University of Banglades",
                        "Bangabandhu Sheikh Mujib Medical University","Patuakhali Science and Technology University",
                        "Sher-e-Bangla Agricultural University","Noakhali Science and Technology University",
                        "Jessore University of Science and Technology","Barisal University","Begum Rokeya University",
                        "Bangladesh University of Professionals (BUP)","Mawlana Bhashani Science and Technology University",
                        "Bangabandhu Sheikh Mujibur Rahman Science and Technology University",
                        "Khulna University of Engineering & Technology (KUET)","Chittagong University of Engineering & Technology (CUET)",
                        "Rajshahi University of Engineering & Technology (RUET)","Hajee Mohammad Danesh Science and Technology University",
                        "Sylhet Agricultural University","Bangabandhu Sheikh Mujibur Rahman Maritime University");

                        foreach ($universitys as $universitys){
                            echo "<option name='universitys'>$universitys</option>";
                        }
                        ?>
                    </select>

                    <label for="graduateyear">Passing Year : </label>
                    <select name="passingYear" id="passingYear">
                        <?php
                        $start_year = 2000;
                        $end_year =2024;
                        for ($i = $start_year; $i <= $end_year; $i++){
                            echo "<option name='passingYear'>$i</option>";
                        }
                        ?>
                    </select><br>

                    <label for="postGraduateQualification">*Post Graduate/Equivalent Examination Result</label><br>

                    <label for="postGraduatePoint">CGPA :</label>
                    <input type="text" name="postGraduatecgpa" id="postGraduatecgpa">
                    
                    <label for="university">University : </label>
                    <select name="university" id="university">
                        <?php
                        $universitys = array ("University of Dhaka","Jahangirnagar University","University of Rajshahi",
                        "University of Chittagong","Bangladesh University of Engineering and Technology (BUET)",
                        "Khulna University","Shahjalal University of Science and Technology","Islamic University, Kushtia",
                        "Bangladesh Agricultural University","Bangladesh University of Textiles (BUTEX)","Bangladesh Open University",
                        "Jagannath University","Comilla University","National University of Banglades",
                        "Bangabandhu Sheikh Mujib Medical University","Patuakhali Science and Technology University",
                        "Sher-e-Bangla Agricultural University","Noakhali Science and Technology University",
                        "Jessore University of Science and Technology","Barisal University","Begum Rokeya University",
                        "Bangladesh University of Professionals (BUP)","Mawlana Bhashani Science and Technology University",
                        "Bangabandhu Sheikh Mujibur Rahman Science and Technology University",
                        "Khulna University of Engineering & Technology (KUET)","Chittagong University of Engineering & Technology (CUET)",
                        "Rajshahi University of Engineering & Technology (RUET)","Hajee Mohammad Danesh Science and Technology University",
                        "Sylhet Agricultural University","Bangabandhu Sheikh Mujibur Rahman Maritime University");

                        foreach ($universitys as $universitys){
                            echo "<option name='universitys'>$universitys</option>";
                        }
                        ?>
                    </select>

                    <label for="postGraduateyear">Passing Year : </label>
                    <select name="passingYear" id="passingYear">
                        <?php
                        $start_year = 2000;
                        $end_year =2024;
                        for ($i = $start_year; $i <= $end_year; $i++){
                            echo "<option name='passingYear'>$i</option>";
                        }
                        ?>
                    </select><br>
                </form>
            </div>

            <div class="address">
                <div class="title3"><h3>Candidate's Address</h3></div>
                <form action="genarative_form.php" method="POST">
                    <label for="presentAddress">Present Address : </label><br>

                    <label for="division">Division</label>
                    <select name="division" class="presentAddressDesing">
                        <?php
                        $divisions = array ("Dhaka","Chattogram","Khulna","Rajshahi","Barishal","Sylhet","Rangpur","Mymensingh");
                        foreach ($divisions as $divisions){
                            echo "<option name='divisions'>$divisions</option>";
                        }
                        ?>
                    </select>

                    <label for="district">District</label>
                    <select name="district" class="presentAddressDesing">
                        <?php
                        $districts = array ('Dhaka','Faridpur','Gazipur','Gopalganj','Kishoreganj','Madaripur','Manikganj','Munshiganj',
                        'Narayanganj','Narsingdi','Rajbari','Shariatpur','Tangail','Chattogram','Bandarban','Brahmanbaria','Chandpur',
                        'Cumilla',"Cox's Bazar",'Feni','Khagrachari','Lakshmipur','Noakhali','Rangamati','Bagerhat',
                        'Chuadanga','Jashore','Jhenaidah','Khulna','Magura','Kushtia','Meherpur','Narail','Satkhira',
                        'Bogura','Joypurhat','Naogaon','Natore','Chapainawabganj','Pabna','Rajshahi','Sirajganj','Barguna',
                        'Barishal','Bhola','Jhalokathi','Patuakhali','Pirojpur','Habiganj','Moulvibazar','Sunamganj','Sylhet',
                        'Dinajpur','Gaibandha','Kurigram','Lalmonirhat','Nilphamari','Panchagarh','Rangpur','Thakurgaon',
                        'Jamalpur','Mymensingh','Netrokona','Sherpur');
                        foreach ($districts as $districts){
                            echo "<option name='districts'>$districts</option>";
                        }
                        ?>
                    </select>
                    
                    <label for="upazila">upazila/City</label>
                    <input type="text" name="upzilla" class="presentAddressDesing">

                    <label for="village">village</label>
                    <input type="text" name="village" class="presentAddressDesing"><br>

                    <label for="permanentAddress">Permanent Address : </label><br>

                    <label for="division">Division</label>
                    <select name="division" class="permanentAddressDesing">
                        <?php
                        $divisions = array ("Dhaka","Chattogram","Khulna","Rajshahi","Barishal","Sylhet","Rangpur","Mymensingh");
                        foreach ($divisions as $divisions){
                            echo "<option name='divisions'>$divisions</option>";
                        }
                        ?>
                    </select>

                    <label for="district">District</label>
                    <select name="district" class="permanentAddressDesing">
                    <?php
                        $districts = array ('Dhaka','Faridpur','Gazipur','Gopalganj','Kishoreganj','Madaripur','Manikganj','Munshiganj',
                        'Narayanganj','Narsingdi','Rajbari','Shariatpur','Tangail','Chattogram','Bandarban','Brahmanbaria','Chandpur',
                        'Cumilla',"Cox's Bazar",'Feni','Khagrachari','Lakshmipur','Noakhali','Rangamati','Bagerhat',
                        'Chuadanga','Jashore','Jhenaidah','Khulna','Magura','Kushtia','Meherpur','Narail','Satkhira',
                        'Bogura','Joypurhat','Naogaon','Natore','Chapainawabganj','Pabna','Rajshahi','Sirajganj','Barguna',
                        'Barishal','Bhola','Jhalokathi','Patuakhali','Pirojpur','Habiganj','Moulvibazar','Sunamganj','Sylhet',
                        'Dinajpur','Gaibandha','Kurigram','Lalmonirhat','Nilphamari','Panchagarh','Rangpur','Thakurgaon',
                        'Jamalpur','Mymensingh','Netrokona','Sherpur');
                        foreach ($districts as $districts){
                            echo "<option name='districts'>$districts</option>";
                        }
                        ?>
                    </select>

                    <label for="upazila">upazila/City</label>
                    <input type="text" name="upzilla" class="permanentAddressDesing">

                    <label for="village">village</label>
                    <input type="text" name="village" class="permanentAddressDesing">
                </form>
            </div>

            <div class="contactInformation">
                <div class="conInfo"><h3>Contact Information</h3></div>
                <form action="genarative_form.php" method="POST">
                    <label for="number">Mobile Number : </label>
                    <input type="text" name="number" class="contactInfo">

                    <label for="email">Email : </label>
                    <input type="email" name="email" class="contactInfo">
                </form>
            </div>

            <div class="experience">
                <div class="experienceIfAny"><h3>Experience (If Any)</h3></div>
                <form action="genarative_form.php" method="POST">
                    <label for="postName">Post Name :</label>
                    <input type="text" name="postName" class="experiencePart" ><br>

                    <label for="NameOfTheInstitution">Name of the institution :</label>
                    <input type="text" name="NameOfTheInstitution" class="experiencePart" ><br>

                    <label for="durationOfEmployment">Duration of employment :</label>
                    <input type="text" name="durationOfEmployment" class="experiencePart" >
                </form>
            </div>

            <div class="otherInformation">
                <div id="title4"><h3>Other Information</h3></div>
                <form action="genarative_form.php" method="POST">
                    <label for="specialSkills">Special Skills : </label>
                    <input type=" text" name="specialSkills" id="specialSkills">
                </form>
            </div>
            <div class="footer">
                <hr>
                <label for="signature">Signature</label>

                <button type="submit" id="submit">Submit</button>
            </div>
        </div>
    </div>
</body>
</html>