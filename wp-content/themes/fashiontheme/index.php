<?php 
    get_header();
?>

<html>

<head>
</head>

<body>
    <div class="row-content-1">
        <div class="c50 c1">
            <div>
                <h1 class="glblfashion">Global Fashion Week 2017<br><span class="bold-700">Abu Dhabi.</span></h1>
                <p class="m-left-3rem paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                    occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
        <div class="c50 c2 no-margin-no-padding">
            <img class="image-c2 w-100" src="http://lorempixel.com/640/480/cats/">
        </div>
    </div>
    <div class="row-content-2">
        <h1 class="centered-flex bold-700">NEWS</h1>
        <div class="posts">
        <?php 

function getCategory(){
	foreach((get_the_category()) as $category) { 
		return $category->cat_name . ' '; 
	} 
}


            if( have_posts() ) {
                while( have_posts() ){
                    echo "<div class='post'>";

                        the_post();

                        echo "<div class='post-header'>";

                            echo "<div>";
                            echo "<h1 class='post-title'>";
                            the_title();
                            echo "</h1>";

                            echo "<p class='no-margin-no-padding post-date'>";
                            echo get_the_date('d F y');
                            echo "</p>";
                            echo "</div>";
                            
                            if(getCategory() == "Brand parade "){
                                echo "<img src='".get_bloginfo( 'template_directory' )."/favorites.svg'>";
                            }else if(getCategory() == "Fashion Catwalk "){
                                echo "<img src='".get_bloginfo( 'template_directory' )."/high-heels.svg'>";
                            }else if(getCategory() == "Pop-up stores "){
                                echo "<img src='".get_bloginfo( 'template_directory' )."/shop.svg'>";
                            }else{
                                echo "Uncategorized";
                            }

                        echo "</div>";

                        echo "<p>";
                        the_content();
                        echo "</p>";
                        
                    echo "</div>";
                }
            }
        ?>
        </div>
    </div>

    <div class="row-content-3">

        <h1 class="centered-flex bold-700 countdown-title">COUNTDOWN</h1>
        
        <div class="countdown">
            <div class="flex">
                <p class="countdown-unit roboto no-topbottom-margin-padding" id="days"></p>
                <p class="roboto no-topbottom-margin-padding">DAYS</p>
            </div>
            <div class="flex">
                <p class="countdown-unit roboto no-topbottom-margin-padding" id="hours"></p>
                <p class="roboto no-topbottom-margin-padding">HOURS</p>
            </div>
            <div class="flex">
                <p class="countdown-unit roboto no-topbottom-margin-padding" id="minutes"></p>
                <p class="roboto no-topbottom-margin-padding">MINUTES</p>
            </div>
            <div class="flex">
                <p class="countdown-unit roboto no-topbottom-margin-padding" id="seconds"></p>
                <p class="roboto no-topbottom-margin-padding">SECONDS</p>
            </div>

        </div>
        </div>
    
    <div class="row-content-1">
        <div class="c50 c1">
            <div>
                <h1 class="glblfashion">Where Is<br>Global Fashion Week 2017<br><span class="bold-700">Abu Dhabi.</span></h1>
                <p class="m-left-3rem paragraph">Global Fashion Week 2017 Abu Dhabi is located
in Burj Khalifa Ballroom.</p>
            </div>
        </div>
        <div class="c50 c2 no-margin-no-padding">
            <img class="image-c2 w-100" src="<?php echo get_bloginfo( 'template_directory' );?>/screenshot.png">
        </div>
    </div>

    <div class="row-content-4">
            <h1 class="centered-flex bold-700" style="margin-bottom:0;">BOOK YOUR TICKETS NOW</h1>
            <a class="centered-flex round-button">BOOK NOW</a> 

    </div>


    <?php get_footer(); ?>

</body>

<script>
var countDown = new Date("Oct 19, 2019 18:00:00").getTime();
var interval = setInterval(function(){
    var distance = countDown - new Date().getTime();;
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    document.getElementById("days").innerHTML = days;
    document.getElementById("hours").innerHTML = hours;
    document.getElementById("minutes").innerHTML = minutes;
    document.getElementById("seconds").innerHTML = seconds;
 
}, 1000);
</script>

</html>