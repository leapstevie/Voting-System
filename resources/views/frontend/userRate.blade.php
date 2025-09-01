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
            @if(isset($employees) && $employees->count() > 0)
            <table class="table table-hover text-nowrap">
                <thead>
                    <tr>
                        <th>Entry_No</th>
                        <th>EmployeeID</th>
                        <th>PPWSA_Code</th>
                        <th>EmployeeName_KH</th>
                        <th>EmployeeName_EN</th>
                        <th>Department</th>
                        <th>Office</th>
                        <th>Section</th>
                        <th>D_Level</th>
                        <th>Gender</th>
                        <th>Status</th>
                        <th>Remark</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($employees as $emp)
                    <tr>
                        <td>{{ $emp->Entry_No }}</td>
                        <td>{{ $emp->EmployeeID }}</td>
                        <td>{{ $emp->PPWSA_Code }}</td>
                        <td>{{ $emp->EmployeeName_KH }}</td>
                        <td>{{ $emp->EmployeeName_EN }}</td>
                        <td>{{ $emp->Department }}</td>
                        <td>{{ $emp->Office }}</td>
                        <td>{{ $emp->Section }}</td>
                        <td>{{ $emp->D_Level }}</td>
                        <td>{{ $emp->Gender }}</td>
                        <td>{{ $emp->Status }}</td>
                        <td>{{ $emp->Remark }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <form action="{{ route('frontend.userRate.store') }}" method="POST">
                @csrf
                <!-- Hidden inputs for voter info -->
                <input type="hidden" name="employee_id" value="{{ session('EmployeeID') }}">
                <input type="hidden" name="ppwsa_code" value="{{ session('EmployeeCode') }}">
                <input type="hidden" name="employee_name_kh" value="{{ session('EmployeeName_KH') }}">
                <input type="hidden" name="department" value="{{ session('Dept_Code') }}">
                <input type="hidden" name="office" value="{{ session('Office') }}">

                @foreach($employees as $index => $emp)
                <div class="card mb-3 p-3">
                    <input type="hidden" name="votes[{{ $index }}][candidate_id]" value="{{ $emp->EmployeeID }}">
                    <input type="hidden" name="votes[{{ $index }}][candidate_name]" value="{{ $emp->EmployeeName_KH }}">

                    <div class="user-info">
                        <span class="user-name">{{ $emp->EmployeeName_KH }}</span>
                    </div>
                    <div class="post-content" style="display: flex;justify-content: center;">
                        {{ $emp->DepartmentName ?? '' }}
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

                    @php
                    $criteria = ['samattapheap' => 'សមត្ថភាព', 'kountor' => 'គុណធម៌', 'sakammapeap' => 'សកម្មភាពការងារ'];
                    @endphp

                    @foreach($criteria as $field => $label)
                    <div class="row">
                        <div class="col-3 mt-3">
                            <h6>{{ $label }}</h6>
                        </div>
                        <div class="col-8">
                            <div class="star-rating equity" data-index="{{ $index }}" data-field="{{ $field }}">
                                @for($i = 1; $i <= 5; $i++)
                                    <span class="star" data-value="{{ $i }}">&#9733;</span>
                                    @endfor
                                    <input type="hidden" name="votes[{{ $index }}][{{ $field }}]" value="0">
                                    <div class="rating-text"></div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @endforeach
                @else
                <p>No employees found.</p>
                @endif

                <div class="text-center mt-3">
                    <button type="submit" class="btn btn-primary">Submit All Votes</button>
                </div>
            </form>

            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script>
                $(document).ready(function() {
                    var ratingsText = ["", "អាក្រក់", "មធ្យម", "ធម្មតា", "ល្អ", "ល្អណាស់"];

                    $('.star').on('mouseover', function() {
                        var index = $(this).data('value');
                        highlightStars(index, $(this).closest('.star-rating'));
                    });

                    $('.star').on('mouseout', function() {
                        clearHighlight($(this).closest('.star-rating'));
                        highlightSelectedStars($(this).closest('.star-rating'));
                    });

                    $('.star').on('click', function() {
                        var index = $(this).data('value');
                        var container = $(this).closest('.star-rating');
                        var field = container.data('field');
                        var empIndex = container.data('index');

                        selectStars(index, container);
                        updateRatingText(index, container);
                        container.find(`input[name="votes[${empIndex}][${field}]"]`).val(index);
                    });

                    function highlightStars(index, container) {
                        clearHighlight(container);
                        for (var i = 1; i <= index; i++) {
                            container.find('.star[data-value="' + i + '"]').addClass('hover');
                        }
                    }

                    function clearHighlight(container) {
                        container.find('.star').removeClass('hover');
                    }

                    function selectStars(index, container) {
                        container.find('.star').removeClass('selected');
                        for (var i = 1; i <= index; i++) {
                            container.find('.star[data-value="' + i + '"]').addClass('selected');
                        }
                    }

                    function highlightSelectedStars(container) {
                        container.find('.star.selected').each(function() {
                            var index = $(this).data('value');
                            highlightStars(index, container);
                        });
                    }

                    function updateRatingText(index, container) {
                        container.find('.rating-text').text(ratingsText[index]);
                    }
                });
            </script>

            <style>
                .star {
                    font-size: 25px;
                    color: #ccc;
                    cursor: pointer;
                    margin-right: 5px;
                }

                .star.hover,
                .star.selected {
                    color: #ffc107;
                }

                .rating-text {
                    display: inline-block;
                    margin-left: 10px;
                    font-weight: bold;
                }
            </style>

</body>

</html>