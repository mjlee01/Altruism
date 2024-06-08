<?php
    include('Header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles/expert-style.css">
</head>
<body>
    <div class="expert-page-container" style="font-family: Poppins, Arial;">
        <div class="page-title">
            <h1>Meet the Experts</h1>
        </div>

        <div class="teacher-container">
            <div class="teacher-pic">
                <img src="source/pictures/teacher.jpg">
            </div>

            <div class="teacher-intro">
                <div class="teacher-title">
                    Teacher
                </div>

                <div class="teacher-desc">
                Altruism Experts who are educators dedicate their expertise to provide free tutoring or educational guidance to individuals seeking learning support, fostering academic growth within our community.
                </div>
            </div>
        </div>

        <div class="psychotherapist-container">
            <div class="psychotherapist-intro">
                <div class="psychotherapist-title">
                    Psychotherapist
                </div>

                <div class="psychotherapist-desc">
                These experts offer their professional counseling services pro bono, extending support and guidance to those in need of mental health assistance, promoting well-being and resilience.
                </div>
            </div>

            <div class="psychotherapist-pic">
                <img src="source/pictures/psychotherapist.webp">
            </div>
        </div>

        <div class="charity-event-organiser-container">
            <div class="charity-event-organiser-pic">
                <img src="source/pictures/charity event.webp">
            </div>

            <div class="charity-event-organiser-intro">
                <div class="charity-event-organiser-title">
                    Charity Event Organiser
                </div>

                <div class="charity-event-organiser-desc">
                Altruism Experts skilled in event planning and coordination lead volunteer teams for various charitable events, orchestrating impactful initiatives that bring the community together for positive change.
                </div>
            </div>
        </div>

        <div class="medical-professional-container">
            <div class="medical-professional-intro">
                <div class="medical-professional-title">
                    Medical Professional
                </div>

                <div class="medical-professional-desc">
                Medical experts offer their services or consultations free of charge, providing essential healthcare advice and support to individuals who require medical guidance and assistance.
                </div>
            </div>

            <div class="medical-professional-pic">
                <img src="source/pictures/medical professional.jpg">
            </div>
        </div>

        <div class="legal-advisor-container">
            <div class="legal-advisor-pic">
                <img src="source/pictures/legal advisor.jpg">
            </div>

            <div class="legal-advisor-intro">
                <div class="legal-advisor-title">
                    Legal Advisor
                </div>

                <div class="legal-advisor-desc">
                These experts offer legal counsel or guidance, aiding individuals in understanding their rights or offering assistance with legal matters, ensuring access to justice for those in need within the community.
                </div>
            </div>
        </div>
    </div>

    <form action="Event_Form.php" method="$_POST" style="font-family: Poppins, Arial;">
        <div class="expert-recruitment-container">
            <div class="recruitment-description">
                <h2>Utilise your Skills and Expertise and Make a Difference Today</h2>
                <h3>You're not just a volunteer, YOU are the catalyst for positive change</h3>
            </div>
            
            <div class="recruitment-button">
                <input type="submit" name="expert-recruit" value="REGISTER NOW">
            </div>
        </div>
    </form>
</body>
</html>

<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        header("Location:signup.php");
        exit();
    }
?>

<?php
    include('Footer.php');
?>