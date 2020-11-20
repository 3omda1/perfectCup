<?php
//Initialize Session
session_start();

if (isset($_SESSION['login'])) {

    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>The perfect cup - Blog</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="brand">The perfect cup</div>
    <div class="address-bar">Mousa nizar st
        Alfawal , Faiyum - Egypt</div>

    <!-- Navigation -->
    <?php require_once 'nav.php'; ?>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">

                    <h2 class="text-center">Welcome <?php echo $fname; echo " "; echo $lname; ?> - <a href="logout.php">Logout</a></h2>

                    <hr>
                    <h2 class="intro-text text-center">The perfect cup
                        <strong>blog</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slide-1.jpg" alt="">
                    <h2>COCONUT OIL COFFEE
                        <br>
                        <small>JULY 30, 2020</small>
                    </h2>
                    <p>Start your morning off with this great recipe for hot coffee with coconut oil and butter.</p>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slide-2.jpg" alt="">
                    <h2>IRISH COFFEE
                        <br>
                        <small>JULY 30, 2020</small>
                    </h2>
                    <p>Take the edge off with a Fresh hot cup of coffee made with Irish whiskey and Irish Cream.</p>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/caramel-2.jpg" alt="" style="width:843;hight:403">
                    <h2>FROZEN CARAMEL LATTE
                        <br>
                        <small>JULY 30, 2020</small>
                    </h2>
                    <p>Sweetened with caramel sauce and topped with whipped cream, this will make you happy any time of day.</p>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal3">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <ul class="pager">
                        <li class="previous"><a href="#">&larr; Older</a>
                        </li>
                        <li class="next"><a href="#">Newer &rarr;</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->
    <!-- Modal 1 -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Coconut Oil Coffee</h4>
                </div>
                <div class="modal-body">
                    <p> <span style="font-weight:bold;">3 </span> Health Benefits of Drinking Coconut Oil Coffee
                        If you’re not a coffee drinker, there’s no reason to start drinking coffee after reading this post. And I’m not suggesting by any means that this coconut oil coffee is for everyone. In the end, coconut oil is a saturated fat and having that frequently may not be the best option for everyone. However from all of my research about it, I’ve found that enjoying this drink maybe once a week as a treat is not only delicious but can have some strong healthy benefits like the following:
                        <br><span style="font-weight:bold;">1- Increase Energy:</span> Coconut oil is a “thermogenic” food, which means it generates heat in your body. When you eat it, it can help you create energy and burn more fat. Combine that with coffee, and you’ll be a caffeine machine! <br>
                        <span style="font-weight:bold;">2- Improve Metabolism:</span> The caffeine in coffee is known to give your metabolism a push. And coconut oil is largely considered a natural laxative which means it helps to improve your digestion. Combining those two ingredients has a big impact on your digestive system. <br>
                        <span style="font-weight:bold;">3- Boost Immune: </span> One of the main fatty acids found in coconut oil is lauric acid, which can actually help fight germs and bacteria.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

    <!-- Modal 2 -->
    <div id="myModal2" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Irish Coffee</h4>
                </div>
                <div class="modal-body">
                    <p><span style="font-weight:bold;">5 Surprising Health Benefits of Irish Coffee:</span> <br>The average person doesn’t really think of coffee as a “healthy” drink, let alone Irish coffee.

                        Irish coffee, in case you are not familiar with the term, is coffee mixed with alcohol. <br>Of course, there are many people who believe that alcohol is unhealthy. There are also people who believe that coffee is unhealthy. So, when you mix the two together, it makes sense that there would be some people who think Irish coffee is the worst drink possible.

                        With all of that said, though, both alcohol and coffee are fine in moderation. And, in fact, Irish coffee can actually offer up some surprising health benefits. <br> <span style="font-weight:bold;">The Basics of Irish Coffee</span> <br>Before going into the many health benefits of Irish coffee, it is important to understand how this drink is made and how to make Irish coffee

                        A basic Irish coffee recipe involves mixing together steaming hot coffee, your favorite whiskey (preferably an Irish whiskey), sugar (brown sugar can be used if preferred), and thick cream. The cream is why this drink is often referred to as Irish cream coffee.

                        The drink should be served in special Irish coffee mugs, but, regardless of how it is served and what whiskey is used, it still can provide many excellent benefits. <br>
                        <span style="font-weight:bold;">1- A Reduced Risk of Heart Disease.</span> <br>
                        <span style="font-weight:bold;">2- A Reduced Risk of Diabetes.</span> <br>
                        <span style="font-weight:bold;">3- A Reduced Risk of Stroke.</span> <br>
                        <span style="font-weight:bold;">4- A Reduced Risk of Parkinson’s Disease.</span> <br>
                        <span style="font-weight:bold;">5- A Reduced Risk of Liver Disease.</span> <br>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

    <!-- Modal 3 -->
    <div id="myModal3" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Frozen Caramel Latte</h4>
                </div>
                <div class="modal-body">
                    <p  style="line-height:40px";><span style="font-weight:bold;">How to Make an Iced Caramel Latte with Vanilla Cream:</span> <br> <br><span style="font-weight:bold;">STEP ONE:</span>
                        Add heavy whipping cream, vanilla and granulated sugar to a medium-sized bowl. <br>
                        <span style="font-weight:bold;">STEP TWO: </span>Using a hand mixer or whisk, beat until it achieves a thick and creamy consistency. Be careful not to overmix, or you’ll end up with whipped cream. <br>
                        <span style="font-weight:bold;">STEP THREE: </span>Add caramel sauce, brown sugar and brewed espresso to a large glass. <br>
                        <span style="font-weight:bold;">STEP FOUR: </span>Mix together until combined, then add ice. <br>
                        <span style="font-weight:bold;">STEP FIVE: </span>Slowly top off with about ½ cup of the vanilla cream. <br>
                        <span style="font-weight:bold;">STEP SIX:</span>Serve and enjoy!



                    </p>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>




    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy;The perfect cup by <a href="https://www.facebook.com/profile.php?id=100007795414563">Abo 3mad </a> 2020</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
<?php

} else {
    header("location:login.php ");
}
?>
