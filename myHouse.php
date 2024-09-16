<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shubik's House</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/x-icon" href="./images/Vector 5.svg">

</head>
<body>
<header>
    <nav id="navbar">
        <div id="navlogo">
            <a  href="index.html"><img src ="images/Vector 5.svg" alt="logo"></a>
            <a id="logotext"  href="index.html">Shubik Bhatt</a>
        </div>
        <div class="links">                
                <a href="myStudy.html">My Studies</a>
                <a href="myHobbies.html">My Hobbies</a>
                <a href="myMusic.html">My Music</a>
                <a href="myHouse.html">My House</a>  
        </div>
    </nav>
</header>
       
    <main>
        <?php
        $house = array(
            "Bedrooms" => 3,
            "Bathrooms" => 2,
            "Address" => "48 Burlington Rd, Homebush, NSW"
        );
        ?>
        <table class="subjectTable">
            <tr> 
                <th>Property</th>
                <th>Value</th>
            </tr>
            <?php
            foreach ($house as $property => $value) {
                echo "<tr>";
                echo "<td>$property</td>";
                echo "<td>$value</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </main>
    <footer>
    
        <div class="footerbar">
    
            <div class="linkTOSocial">
                <a href="https://www.linkedin.com/in/shubik-bhatt-456923228/" target="_blank">
                    <img src="/images/icons/linkedin.jpg" alt="linkedin">
                    </a>
                
                <a href="https://www.facebook.com/shubik.bhatt.18" target="_blank">
                    <img src="/images/icons/facebook.jpg" alt="facebook">
                    </a> 
        
                    <a href="https://github.com/ShubikB" target="_blank" >
                        <img src="/images/icons/github.jpg" alt="githuib">
                        </a>
        
                </div>
                <p>Shubik Bhatt 2024</p>
                <p>0410719302</p>
                <a href="mailto:shubikbhatt2h7h@gmail.com">shubikbhatt2h7h@gmail.com</a>
    
    
        </div>
    </footer>  
    </body>
    </html>