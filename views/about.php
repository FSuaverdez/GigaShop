<?php
    include('header.php');
    include('navbar.php');

    $mysqli = new mysqli('localhost', 'root', '','request') or die(mysqli_error($mysqli));
    $result = $mysqli->query("SELECT * FROM products") or die($mysqli->error);
?>
<main class="general-container">
    <section class="container-fluid about-holder mx-auto" style="margin-top: 7.5rem">
        <h1>About Us</h1>
        <hr/>
        <section class="container-fluid mb-5" style="width:95%">
            <div class="aboutus my-3">
                <p class="aboutus-p">Welcome to CompHub Inc., your number one source of hardware components. We're dedicated to giving you the very best of your needed components, with a focus on high-quality technology and world-class service.</p>
                <p class="aboutus-p">Founded in 2021 by SIA Group 4, CompHub Inc. has come a long way from its beginnings in the Technological University of the Philippines. When CompHub first started out, their passion for repair services drove them to provide better services by supplying high-quality technology so that CompHub Inc. can offer you world-class quality experience at your home or in your office. We now serve customers all over country, and are thrilled that we're able to turn our passion into our own website.</p>
                <p class="aboutus-p">We hope you enjoy our products as much as we enjoy offering them to you. If you have any questions or comments, please don't hesitate to contact us.</p>
                <br/>
                <p>Sincerely,<br/>CompHub</p>
            </div>
        </section>

        <h1>Members</h1>
        <hr/>
        <section class="container-fluid about-holder mb-5 mx-auto" style="width: 95%">
            <div class="row mx-auto">
                <div class="col-md-3 col-sm-6 my-3">
                    <div class="member-container">
                        <img src="../images/members/ilarina.jpg" class="round-image" />
                    </div>
                    <p class="member my-2">Rachel Ilarina</p>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <div class="member-container">
                        <img src="../images/members/will.png" class="round-image" />
                    </div>
                    <p class="member my-2">Will Baulete</p>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <div class="member-container">
                    <img src="../images/members/mark.png" class="round-image" />
                    </div>
                    <p class="member my-2">Mark Contado</p>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <div class="member-container">
                    <img src="../images/members/neziah.png" class="round-image" />
                    </div>
                    <p class="member my-2">Neziah Estanislao</p>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <div class="member-container">
                        <img src="../images/members/gerard.jpg" class="round-image" />
                    </div>
                    <p class="member my-2">Gerard Kalambacal</p>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <div class="member-container">
                        <img src="../images/members/alonzo.png" class="round-image" />
                    </div>
                    <p class="member my-2">Alonzo Ramos</p>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <div class="member-container">
                    <img src="../images/members/endrew.png" class="round-image" />
                    </div>
                    <p class="member my-2">Endrew Tolentino</p>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <div class="member-container">
                        <img src="../images/members/julius.png" class="round-image" />
                    </div>
                    <p class="member my-2">Julius Villa</p>
                </div>
            </div>
        </section>
    </section>
</main>

<script>
    document.getElementById("about").style.fontWeight = "bold";
    document.getElementById("navbar").style.padding = "0px 30px";
    document.getElementById("navbar").style.height = "auto";
    document.getElementById("navbar").style.background = "#F7F8F3";
    document.getElementById("navbar").style.transition = "0s";
    document.getElementById("nav-logo").style.display = "block";
                
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("navbar").style.padding = "0px 30px";
            document.getElementById("navbar").style.height = "auto";
            document.getElementById("navbar").style.background = "#F7F8F3";
            document.getElementById("nav-logo").style.display = "block";
        } else {
            document.getElementById("navbar").style.padding = "0px 30px";
            document.getElementById("navbar").style.height = "auto";
            document.getElementById("navbar").style.background = "#F7F8F3";
            document.getElementById("nav-logo").style.display = "block";
        }
    }

    function changeHeight(){
        var x = document.getElementById("navbar");
        if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
            if (x.style.height === "90px") {
                x.style.height = "375px";
            } else {
                x.style.height = "90px";
            }
        // } else if (x.style.height === "100vh" && (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50)) {
        //     if (x.style.height === "100vh") {
        //         x.style.height = "100vh";
        //     } else if (x.style.height === "100vh" && (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50)) {
        //         x.style.height = "375px";
        //     } else {
        //         // x.style.height = "90px";
        //         x.style.height = "375px";
        //     }
        }
    }
</script>

<?php include('footer.php'); ?>