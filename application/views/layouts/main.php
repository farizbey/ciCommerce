<!DOCTYPE html>
<html>
<head>
<?php /*head Layout*///include"layout/head_layout.php"; ?> <?php $this->load->view('layouts/head_layout'); ?>
</head>
<body>
	<div class ="bg-white">
		<div class="container bg-grey">
			<div class="row">
                <?php /* Logo and Banner Layout *///include "layout/logoBanner_layout.php"; ?> <?php $this->load->view('layouts/logoBanner_layout'); ?>
			</div>
            <div class="clearfix"></div>
			<?php /*navBar Layout*///include "layout/nav_layout.php"; ?> <?php $this->load->view('layouts/nav_layout'); ?>

			<div class="col-md-6 col-md-offset-3 col-sm-12">
				<?php
                /*searchForm Layout*/
                if (isset($_GET["home"]) || isset($_GET["blog"]) || isset($_GET["collections"]) || empty($_GET)) {
                    //include"layout/searchForm_layout.php";
                    $this->load->view('layouts/searchForm_layout');
                }
                ?> <?php //$this->load->view('layout/searchForm_layout'); ?>
			</div>

			<!-- Half Page Image Background Carousel Header -->
			<?php 
			/*slider Layout*/
           
           if ($this->uri->segment(1) == "home") {
               $this->load->view('layouts/slider_layout');
               echo "<div class='col-lg-12 well'></div>";
           }
			// if (isset($_GET["home"]) || empty($_GET)) {
			// 	//include"layout/slider_layout.php";
   //              $this->load->view('layouts/slider_layout');
			// 	echo "<div class='col-lg-12 well'></div>";
			// }
			?>
			<!-- End of Image Slider -->

			<div class="clearfix"></div>

			<!-- Content -->
			<content id="content">
				<?php 
				/*Calling Page layout*///include "controller/content_controller.php";
                // $this->load->view('controller/content_controller');
				// content_controller();
				$this->load->view($main_view);
                ?>
			</content>
		</div> <!-- End of container bg-grey -->
		<div class="clearfix"></div>
		<!-- Footer -->
		<footer>
			<div class="col-md-12">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<div class="widget">
								<h5>Follow Me:</h5>
								<div class="">
	                                <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
	                                <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
	                                <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
	                                <a href="#"><i class="fa fa-google-plus-square google fa-2x"></i></a> 
	                            </div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="widget">
								<h5>Copyright &copy Fariz R. Bey</h5>
							</div>
						</div>
					</div>
				</div>
			</div> 
		</footer>
        <!-- End of Footer -->
	</div> <!-- End of Wrapper White -->

	<script src="https://code.jquery.com/jquery-3.1.0.min.js" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<script src="https://use.fontawesome.com/97dc384b71.js"></script>

    <script type="text/javascript" src="js/global.js"></script>

</body>
</html>

<script type="text/javascript" language="javascript">


/*
*   Start Search Script
*/

function searchHome()
{
    <?php
    if (isset($_GET['home']) || empty($_GET)) {
    ?>
        $.ajax
        ({
            type:"GET",
            url:"http://localhost/final_encounter/serviceForAjax/searchHome_layout.php",
            // data:{search:txt},
            cache: false,
            data:"search=" + $("#search_id").val(),
            
            beforeSend: function()
            {
                //$("#preloader").fadeIn(1500);
            },
            success: function(data)
            {
                //$("#preloader").fadeOut(1500);
                $("#content").html(data);
                console.log('working');
            },
            error: function() {
                console.log("not working");
                // e.preventDefault();
            }
        });
    <?php
    }
    ?>
}

function searchCollections() {
    <?php 
        if (isset($_GET['collections'])) {
        ?>
            // if (e.which === 13 || e.type === "click") {
                $.ajax
                ({
                    type:"GET",
                    url:"http://localhost/final_encounter/serviceForAjax/searchCollections_layout.php",
                    // data:{search:txt},
                    data:"search=" + $("#search_id").val(),
                    cache: false,
                    beforeSend: function()
                    {
                        //$("#preloader").fadeIn(1500);
                    },
                    success: function(data)
                    {
                        //$("#preloader").fadeOut(1500);
                        $("#content").html(data);
                        console.log('working');
                    },
                    error: function() {
                        console.log("not working");
                    }
                });
            // }
    <?php
    }
    ?>
}

function searchBlog() {
    <?php 
    if (isset($_GET['blog'])) {
    ?>
        // if (e.which === 13 || e.type === "click") {
            $.ajax
            ({
                type:"GET",
                url:"http://localhost/final_encounter/serviceForAjax/searchBlog_layout.php",
                // data:{search:txt},
                data:"search=" + $("#search_id").val(),
                
                beforeSend: function()
                {
                    //$("#preloader").fadeIn(1500);
                },
                success: function(data)
                {
                    //$("#preloader").fadeOut(1500);
                    $("#content").html(data);
                    console.log('working');
                },
                error: function() {
                    console.log("not working");
                }
            });
        // }
    <?php
    }
    ?>
}


/*
*   End Search Script
*/


/*
*   Start Cart Script
*/

function showCart() {
    $.ajax
    ({
        type: "POST",
        url: "http://localhost/final_encounter/serviceForAjax/showCart.php",
        beforeSend: function()
        {

        },
        success: function(data)
        {
            //$("#preloader").fadeOut(1500);
            //alert($(this).attr("cumi"));
            // $("#shoppingcarttable tbody").html(datares);
            
            $("#cartx").html(data);
            

            //---- start edit---
            $(".refreshx").click(function() 
            {
                
                // e.preventDefault();
                // e.stopPropagation();
                //alert($(this).attr("shoes-id"));
                // console.log('cumi');
                var tmp="#qtyx" + $(this).attr("collections_id");
                editCart($(this).attr("collections_id"), $(tmp).val());
                // removeCart($(this).attr("collections_id"));
                // console.log($(this).attr("collections_id"), $(tmp).val());
                // console.log($(tmp).val());
                // e.preventDefault();
            });

            //---- end edit---

            //---- start remove---
            $(".trashx").click(function()
            {
                //alert($(this).attr("shoes-id"));
                var yesno;
                yesno = window.confirm("Are You Sure To Delete ?");
                if (yesno==true) 
                {
                    removeCart($(this).attr("collections_id"));   
                };
            });
            //---- end remove---

        }
    });
}

function showDropDownCart() {
    $.ajax
    ({
        type:"POST",
        url:"http://localhost/final_encounter/serviceForAjax/cartDropDown.php",
        beforeSend: function()
        {
            //$("#preloader").fadeIn(1500);
            //alert($(this).attr("cumi"));
        },
        success: function(data)
        {
            //$("#preloader").fadeOut(1500);
            //alert($(this).attr("cumi"));
            // $(".col-xs-6 banner").html(data);
            // $("fa fa-shopping-cart fa-5x pull-right").html(data);
            $("#cart").html(data);


            //---- start edit---
            $(".refresh").click(function() 
            {
                //alert($(this).attr("shoes-id"));
                // console.log('cumi');
                var tmp="#qty" + $(this).attr("collections_id");
                editCart($(this).attr("collections_id"), $(tmp).val());
            });
            //---- end edit---

            //---- start remove---
            $(".trash").click(function()
            {
                //alert($(this).attr("shoes-id"));
                var yesno;
                yesno = window.confirm("Are You Sure To Delete ?");
                if (yesno==true) 
                {
                    removeCart($(this).attr("collections_id"));   
                };
            });
            //---- end remove---
            
        }
    });
}

function editCart(collections_id, qty) {
    $.ajax
    ({
        type:"POST",
        url:"http://localhost/final_encounter/serviceForAjax/editCart.php",
        data:"collections_id=" + collections_id + "&qty=" + qty,

        beforeSend: function()
        {
            //$("#preloader").fadeIn(1000);
        },
        success: function(data)
        {
            //$("#preloader").fadeOut(1000);
            // $("#totalqty").html(datares + "&nbsp;item(s)");//karena tag span makanyha musti pake .html
            $(".badge").html(data);
            // $("#cart").html();
            // $("#cartx").html();
            showDropDownCart();
            showCart();
            
            // console.log(data);
        }
    });
}

function removeCart(collections_id) {
    $.ajax
    ({
        type:"POST",
        url:"http://localhost/final_encounter/serviceForAjax/removeCart.php",
        data:"collections_id=" + collections_id,

        beforeSend: function()
        {
            //$("#preloader").fadeIn(1000);
        },
        success: function(data)
        {
            //$("#preloader").fadeOut(1000);
            // $("#totalqty").html(datares + "&nbsp;item(s)");
            $(".badge").html(data);
            // $("#cart").html(data);
            // $("#cartx").html(data);
            showCart();
            showDropDownCart();
        }
    });
}

/*
*   End Cart Script
*/


$(document).ready(function() {
    
    /*
    *   Start Search Ready Script
    */

    $("#searchForm").on("keyup", function(e)
    {
        var txt = $("#search_id").val();
        // var key = e.which;
        // console.log(key);
        // e.preventDefault();
        searchHome();
        searchCollections();
        searchBlog();
    });

    $("#searchButton").on("click", function(e)
    {
        var txt = $("#search_id").val();
        // var key = e.which;
        // console.log(key);
        // e.preventDefault();
        searchHome();
        searchCollections();
        searchBlog();
    });

    /*
    *   End Search Ready Script
    */


    /*
    *   Start Cart Ready Script
    */

    $("a.btn-default").click(function()
    {
        var qty=1;
        if ($("#qty").val()!="" && $("#qty").val() !=null && $("#qty").empty())
        {
            qty = $("#qty").val();
        }
        $.ajax
        ({
            type:"POST",
            url:"http://localhost/final_encounter/serviceForAjax/addToCart.php",
            data:"collections_id=" + $(this).attr("collections_id") + "&qty=" + qty,
            beforeSend: function()
            {
                // $("#preloader").fadeIn(1500);
            },
            success: function(data)
            {
                // $("#preloader").fadeOut(1500);
                $(".badge").html(data);
                // showCart();
                showDropDownCart();
                // showCart();
            }
        });
    });

    $("#clearcart").click(function()
    {
        $.ajax
        ({
            type:"POST",
            url:"http://localhost/final_encounter/serviceForAjax/clearCart.php",
            
            beforeSend: function()
            {
                // $("#preloader").fadeIn(1000);
            },

            success: function(data)
            {
                // $("#preloader").fadeOut(1000);
                console.log("cumi");
                showCart();
                showDropDownCart();
                $(".badge").html(data);
            }
        });
    });
    showCart();
    showDropDownCart();
    /*
    *   End Cart Ready Script
    */

 });

</script>
