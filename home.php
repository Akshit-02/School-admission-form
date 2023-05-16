<?php
include 'partials/dbconnect.php';

if (isset($_POST['form_sub'])) {
    $sname = $_POST['sname'];
    $gname = $_POST['gname'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $class = $_POST['class'];
    $shift = $_POST['shift'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];


    $query1 = "insert into admission_form(sname,gname,contact,address,class,shift,dob,gender) values('$sname','$gname',$contact,'$address',$class,'$shift','$dob',' $gender')";
    $result1 = mysqli_query($con, $query1);
    if ($result1) {
        echo "<script>alert('Form submitted successfully!!')</script>";
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home|MKP</title>
    <link rel="stylesheet" href="css/homecss.css">
</head>

<body>
    <div class="navbar">
        <div class="logo">
            <img src="img/logo.png" alt="">
            <h1>Masti Ki Paathshala</h1>
        </div>
        <div class="sections">
            <a href="#banner">Home</a>
            <a href="#about-us">About Us</a>
            <a href="#head">Admission Form</a>
            <a href="">Contact Us</a>
        </div>
        <div class="login">
            <button class="logbtn"><span><a href="login.php">Admin Login</a></span></button>
        </div>
    </div>
    <div class="banner" id="banner">
        <div class="slideshow-container">
            <div class="mySlides fade">
                <img src="img/school1.jpg" style="width:100% ;height:700px">
            </div>
            <div class="mySlides fade">
                <img src="img/school3.jpg" style="width:100%;height:700px">
            </div>

            <div class="mySlides fade">
                <img src="img/school2.jpg" style="width:100%;height:700px">
            </div>

            <div class="mySlides fade">
                <img src="img/school4.jpg" style="width:100%;height:700px">
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>

        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>

        </div>
    </div>

    <div class="about-us" id="about-us">
        <h2>About Us</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum, non provident! Consequuntur, ex optio
            error eligendi non fugit perspiciatis nesciunt, ipsum doloremque dolor maiores ut quae minima ullam
            voluptatibus provident ab tempora aspernatur. Recusandae asperiores, repudiandae magni, rem atque
            perspiciatis nemo iste dicta nihil praesentium cumque sit quae numquam culpa accusamus nobis. Voluptatibus
            iusto quae libero necessitatibus voluptas qui laboriosam voluptate illum ipsum dolorem, quos repellendus cum
            provident voluptatum, consectetur aut facilis neque? Quisquam illum voluptate totam vero cumque culpa
            laudantium modi? Incidunt corporis non numquam est reprehenderit sint laudantium similique ab! Magnam a
            suscipit tenetur ullam iusto laborum eveniet.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore deleniti impedit sed in odio, molestiae
            eligendi doloribus dolore modi sit consectetur, quasi ex quia? Assumenda sint placeat repudiandae unde
            dolorem soluta iure animi consequatur rem, quas quaerat provident temporibus. Corporis perferendis iure ut
            adipisci facilis voluptas illum, odit exercitationem veritatis nam laudantium ex magni, odio earum fugit.
            Eligendi magnam fugiat qui unde in laborum officia quam consequatur quae! Officiis, quibusdam.
        </p>
        <button class="btn"><span>Read More</span></button>
    </div>
    <div class="head" id="head">
        <h3>Admission Form</h3>
    </div>
    <div class="admission-form">
        <form action="" method="post">
            <div class="sname">
                <label for="">Student Name</label><br>
                <input type="text" name="sname" id="sname" placeholder="Enter Full Name">
            </div>
            <div class="gname">
                <label for="">Guardian Name</label><br>
                <input type="text" name="gname" id="gname" placeholder="Enter Guardian Name">
            </div>
            <div class="contact">
                <label for="">Contact No.</label><br>
                <input type="number" name="contact" id="contact" minlength="10" maxlength="10"
                    placeholder="Enter contact number">
            </div>
            <div class="address">
                <label for="">Address</label><br>
                <input type="text" name="address" id="address" placeholder="Enter full home address">
            </div>
            <div class="cclass">
                <label for="">Class</label><br>
                <input type="number" name="class" id="class"
                    placeholder="Enter class in which you want to take admission">
            </div>
            <div class="shift">
                <label for="">Shift</label><br>
                <select name="shift" id="shift">
                    <option value="">Select shift</option>
                    <option value="morning">Morning</option>
                    <option value="evening">Evening</option>
                </select>
            </div>
            <div class="dob">
                <label for="">Date of Birth</label><br>
                <input type="date" name="dob" id="dob">
            </div>
            <div class="gender">
                <label for="">Gender</label><br>
                <input type="radio" name="gender" value="male" id="gender"><span>Male</span>
                <input type="radio" name="gender" value="female" id="gender"><span>Female</span>
                <input type="radio" name="gender" value="others" id="gender"><span>Others</span>
            </div>
            <div class="submit">
                <input type="submit" name="form_sub" value="Submit" class="sub-btn">
            </div>
        </form>
    </div>

    <div class="footer">
        <p>Copyright &copy; Akshit Murarka</p>
    </div>

    <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) { slideIndex = 1 }
            slides[slideIndex - 1].style.display = "block";
            setTimeout(showSlides, 3000);
        }
    </script>
</body>
</html>