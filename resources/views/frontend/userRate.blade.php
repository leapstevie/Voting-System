<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Vote</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    
    <!-- <style>
        @font-face {
            font-family: "semreap";
            src: url(KhmerOSsiemreap.ttf);
        }

        body {
            background-image: url("picture/backgroud-water1.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }

        body {
            font-family: "semreap";
        }

        header {
            background-color: #000;
        }

        .top-bar {
            background-color: #06C;
            /* Adjusted to match the red bar in the image */
            padding: 10px 0;
        }

        .top-bar .container {
            display: flex;
            align-items: center;
        }

        .logo img {
            height: 50px;
        }

        nav {
            margin-left: auto;
        }

        .nav {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        .nav-item {
            margin-left: 20px;
        }

        .nav-link {
            color: #fff;
            /* Adjusted to match the text color */
            text-decoration: none;
            font-weight: bold;
        }

        .nav-link:hover {
            text-decoration: underline;
        }

        .logo {
            display: flex;
            justify-content: center;
        }

        .news-feed {
            max-width: 600px;
            margin: 30px auto;
            padding: 10px;
        }

        .post {
            margin-bottom: 20px;
            padding: 20px;
        }

        .post:last-child {
            border-bottom: none;
        }

        .user-info {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
            justify-content: center;
        }

        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .user-name {
            font-weight: bold;
            font-size: 18px;
            margin-right: 10px;
        }

        .card {
            border-radius: 15px;
            margin-bottom: 15px;
            padding: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
        }

        .post-content {
            font-size: 18px;
        }

        .star-rating {
            display: flex;
            direction: row;
            justify-content: center;
            align-items: center;
            margin-top: 10px;
        }

        .star {
            font-size: 2rem;
            cursor: pointer;
            color: #ccc;
            transition: color 0.2s;
            padding: 0 18px;
        }

        .star.hover,
        .star.selected {
            color: gold;
        }

        .table th,
        .table td {
            font-size: 12px;
            padding: 0 !important;
            /* Remove padding */
            margin: 0 !important;
            /* Remove margin */
        }

        .star-rating .star {
            font-size: 25px;
        }




        /*------------------------------------------------------------------------ Mobile  Width  < 500 */
        @media only screen and (min-device-width: 300px) and (max-device-width: 500px) {
            .user-name {
                font-weight: bold;
                font-size: 12px;
                margin-right: 10px;
            }

            .star-rating {
                display: flex;
                direction: row;
                justify-content: center;
                align-items: center;
                margin-top: 10px;
            }

            .star {
                font-size: 2rem;
                cursor: pointer;
                color: #ccc;
                transition: color 0.2s;
                padding: 0 14px;
            }

            .star.hover,
            .star.selected {
                color: gold;
            }

            .post-content {
                font-size: 12px;
            }

            .user-info {
                display: flex;
                align-items: center;
                margin-bottom: 10px;
                justify-content: center;
            }

            .name-department {
                font-size: 16px;
            }

            .nav-item {
                font-size: 16px;
            }

            .news-feed {
                margin: 30px auto;
                padding: 10px;
            }

            .rate-title {
                font-size: 10px;
                padding-right: 0px;
            }

            .star-rating .star {
                font-size: 15px;
            }

            h6 {
                font-size: 8px;
            }

            rating-text {
                font-size: 10px;
            }

            .table th,
            .table td {
                font-size: 10px;
                padding-left: 5px !important;
                padding-right: 5px !important;
                margin: 0 !important;
                /* Remove margin */
            }

            .table th,
            .table td .space {
                font-size: 10px;
                padding-left: 5px !important;
                padding-right: 0px !important;
                margin: 0 !important;
                /* Remove margin */
            }

            .logo {
                display: flex;
                justify-content: center;
            }
        }
    </style> -->
</head>

<body>
    <header>
        <div class="top-bar">
            <div class="container d-flex align-items-center">
                <div class="logo">
                    <h3 class="name-department text-white">អង្គភាពលេខាធិការសហគ្រាស</h3>
                </div>
                <nav class="ml-auto">
                    <ul class="nav">
                        <li class="nav-item"><a href="#" class="nav-link">ទំព័រដើម</a></li>
                        <!-- <li class="nav-item"><a href="login.html" class="nav-link">ចាកចេញ</a></li> -->
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <div class="container news-feed">
        <div class="post">
            <div class="card">
                <div class="user-info">
                    <!-- <img src="https://via.placeholder.com/40" class="user-avatar"> -->
                    <span class="user-name">ស៊ិន ចន្ថា</span>
                </div>
                <div class="post-content" style="display: flex;justify-content: center;">
                    អង្គភាពលេខាធិការសហគ្រាស
                </div>
                <hr class="m-1">
                <div class="row">
                    <div class="col-3 mt-3 ">
                        <div class="rate-title">ការវាយតំលៃ</div>
                    </div>
                    <div class="col-7 pl-0">
                        <div class="container m-0 p-0">
                            <table class="table table-borderless text-center">
                                <thead>
                                    <tr class="rate-title p-0">
                                        <td>អាក្រក់</td>
                                        <td>មធ្យម</td>
                                        <td>ធម្មតា</td>
                                        <td>ល្អ</td>
                                        <td>ល្អណាស់</td>
                                    </tr>
                                </thead>
                                <tbody class="rate-title">
                                    <tr>
                                        <td>0%</td>
                                        <td>25%</td>
                                        <td>50%</td>
                                        <td>75%</td>
                                        <td>100%</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <hr class="m-1">
                <div class="row">
                    <div class="col-3 mt-3">
                        <h6>សមត្ថភាព</h6>
                    </div>
                    <div class="col-7 pl-0">
                        <div class="star-rating equity" style="display: flex;justify-content: flex-start;">
                            <span class="star" data-value="1">&#9733;</span>
                            <span class="star" data-value="2">&#9733;</span>
                            <span class="star" data-value="3">&#9733;</span>
                            <span class="star" data-value="4">&#9733;</span>
                            <span class="star" data-value="5">&#9733;</span>
                            <div class="rating-text"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3 mt-3">
                        <h6>គុណធម៌</h6>
                    </div>
                    <div class="col-7 pl-0">
                        <div class="star-rating equity" style="display: flex;justify-content: flex-start;">
                            <span class="star" data-value="1">&#9733;</span>
                            <span class="star" data-value="2">&#9733;</span>
                            <span class="star" data-value="3">&#9733;</span>
                            <span class="star" data-value="4">&#9733;</span>
                            <span class="star" data-value="5">&#9733;</span>
                            <div class="rating-text"></div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-3 mt-3">
                        <h6>សកម្មភាពការងារ</h6>
                    </div>
                    <div class="col-7 pl-0">
                        <div class="star-rating equity" style="display: flex;justify-content: flex-start;">
                            <span class="star" data-value="1">&#9733;</span>
                            <span class="star" data-value="2">&#9733;</span>
                            <span class="star" data-value="3">&#9733;</span>
                            <span class="star" data-value="4">&#9733;</span>
                            <span class="star" data-value="5">&#9733;</span>
                            <div class="rating-text"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="user-info">
                    <!-- <img src="https://via.placeholder.com/40" class="user-avatar"> -->
                    <span class="user-name">ស៊ិន ចន្ថា</span>
                </div>
                <div class="post-content" style="display: flex;justify-content: center;">
                    អង្គភាពលេខាធិការសហគ្រាស
                </div>

                <div class="row">
                    <div class="col-4 mt-3">
                        <div>ការវាយតំលៃ</div>
                    </div>
                    <div class="col-6">
                        <div class="star-rating equity">
                            <span class="ml-2">0%</span>
                            <span class="ml-3">25%</span>
                            <span class="ml-3">50%</span>
                            <span class="ml-3">75%</span>
                            <span class="ml-3">100%</span>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-4 mt-3">
                        <h6>សមត្ថភាព</h6>
                    </div>
                    <div class="col-6">
                        <div class="star-rating equity">
                            <span class="star" data-value="1">&#9733;</span>
                            <span class="star" data-value="2">&#9733;</span>
                            <span class="star" data-value="3">&#9733;</span>
                            <span class="star" data-value="4">&#9733;</span>
                            <span class="star" data-value="5">&#9733;</span>
                            <div class="rating-text"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 mt-3">
                        <h6>គុណធម៌</h6>
                    </div>
                    <div class="col-6">
                        <div class="star-rating equity">
                            <span class="star" data-value="1">&#9733;</span>
                            <span class="star" data-value="2">&#9733;</span>
                            <span class="star" data-value="3">&#9733;</span>
                            <span class="star" data-value="4">&#9733;</span>
                            <span class="star" data-value="5">&#9733;</span>
                            <div class="rating-text"></div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4 mt-3">
                        <h6>សកម្មភាពការងារ</h6>
                    </div>
                    <div class="col-6">
                        <div class="star-rating equity">
                            <span class="star" data-value="1">&#9733;</span>
                            <span class="star" data-value="2">&#9733;</span>
                            <span class="star" data-value="3">&#9733;</span>
                            <span class="star" data-value="4">&#9733;</span>
                            <span class="star" data-value="5">&#9733;</span>
                            <div class="rating-text"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="user-info">
                    <!-- <img src="https://via.placeholder.com/40" class="user-avatar"> -->
                    <span class="user-name">ស៊ិន ចន្ថា</span>
                </div>
                <div class="post-content" style="display: flex;justify-content: center;">
                    អង្គភាពលេខាធិការសហគ្រាស
                </div>
                <div class="row">
                    <div class="col-12 mt-3">
                        <table class="table table-bordered">
                            <tr>
                                <td colspan="2">ការវាយតំលៃ</td>
                                <td>0%</td>
                                <td>25%</td>
                                <td>50%</td>
                                <td>75%</td>
                                <td>100%</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3 mt-3">
                        <h6>សមត្ថភាព</h6>
                    </div>
                    <div class="col-8">
                        <div class="star-rating equity">
                            <span class="star" data-value="1">&#9733;</span>
                            <span class="star" data-value="2">&#9733;</span>
                            <span class="star" data-value="3">&#9733;</span>
                            <span class="star" data-value="4">&#9733;</span>
                            <span class="star" data-value="5">&#9733;</span>
                            <div class="rating-text"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3 mt-3">
                        <h6>គុណធម៌</h6>
                    </div>
                    <div class="col-8">
                        <div class="star-rating equity">
                            <span class="star" data-value="1">&#9733;</span>
                            <span class="star" data-value="2">&#9733;</span>
                            <span class="star" data-value="3">&#9733;</span>
                            <span class="star" data-value="4">&#9733;</span>
                            <span class="star" data-value="5">&#9733;</span>
                            <div class="rating-text"></div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-3 mt-3">
                        <h6>សកម្មភាពការងារ</h6>
                    </div>
                    <div class="col-8">
                        <div class="star-rating equity">
                            <span class="star" data-value="1">&#9733;</span>
                            <span class="star" data-value="2">&#9733;</span>
                            <span class="star" data-value="3">&#9733;</span>
                            <span class="star" data-value="4">&#9733;</span>
                            <span class="star" data-value="5">&#9733;</span>
                            <div class="rating-text"></div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="script.js"></script>
        <script>
            $(document).ready(function() {
                // Texts corresponding to the rating values
                var ratingsText = [
                    "",
                    "អាក្រក់",
                    "មធ្យម",
                    "ធម្មតា",
                    "ល្អ",
                    "ល្អណាស់"
                ];

                // Event listener for mouseover on stars
                $('.star').on('mouseover', function() {
                    // Get the rating value from the star's data-value attribute
                    var index = $(this).data('value');
                    // Highlight stars up to the hovered one within the same star-rating container
                    highlightStars(index, $(this).closest('.star-rating'));
                });

                // Event listener for mouseout from stars
                $('.star').on('mouseout', function() {
                    // Clear highlight from all stars within the same star-rating container
                    clearHighlight($(this).closest('.star-rating'));
                    // Highlight selected stars again within the same container
                    highlightSelectedStars($(this).closest('.star-rating'));
                });

                // Event listener for click on stars
                $('.star').on('click', function() {
                    // Get the rating value from the star's data-value attribute
                    var index = $(this).data('value');
                    // Mark stars up to the clicked one as selected within the same container
                    selectStars(index, $(this).closest('.star-rating'));
                    // Update the rating text based on the selected value within the same container
                    updateRatingText(index, $(this).closest('.star-rating'));
                });

                // Function to highlight stars up to the given index within the container
                function highlightStars(index, container) {
                    clearHighlight(container);
                    for (var i = 1; i <= index; i++) {
                        container.find('.star[data-value="' + i + '"]').addClass('hover');
                    }
                }

                // Function to clear the highlight from all stars within the container
                function clearHighlight(container) {
                    container.find('.star').removeClass('hover');
                }

                // Function to mark stars up to the given index as selected within the container
                function selectStars(index, container) {
                    container.find('.star').removeClass('selected');
                    for (var i = 1; i <= index; i++) {
                        container.find('.star[data-value="' + i + '"]').addClass('selected');
                    }
                }

                // Function to re-highlight the stars that have been marked as selected within the container
                function highlightSelectedStars(container) {
                    container.find('.star.selected').each(function() {
                        var index = $(this).data('value');
                        highlightStars(index, container);
                    });
                }

                // Function to update the rating text based on the selected index within the container
                function updateRatingText(index, container) {
                    container.find('.rating-text').text(ratingsText[index]);
                }
            });
        </script>
</body>

</html>