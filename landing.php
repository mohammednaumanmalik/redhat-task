
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Zero Trust Security E-book</title>

    <!-- Bootstrap 3 CSS -->
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">

    <style>
        * {
            box-sizing: border-box;
        }

        html,
        body {
            margin: 0 !important;
            padding: 0 !important;
            width: 100%;
        }

        body {
            padding-bottom: 60px !important;
        }

        /* Header */
        .header {
            width: 100%;
            height: 130px;
            background: #000;
            margin: 0 !important;
            padding: 0 !important;
            line-height: 0;
            overflow: hidden;
        }

        .header img {
            width: 300px;
            max-width: 100%;
            height: 130px;
            padding: 15px 20px;
            margin: 0;
            display: block;
            object-fit: contain;
        }

        /* Hero Banner */
        .hero {
            width: 100%;
            margin: 0 !important;
            padding: 0 !important;
            line-height: 0;
        }

        .hero img {
            width: 100%;
            height: auto;
            display: block;
            
            border: 0;
            margin-top:-50px;
        }

        /* Main Content */
        .content-section {
            padding-top: 50px;
        }

        .content h3 {
            color: #ee0000;
        }

        .content h1 {
            padding-top: 15px;
            font-size: 36px;
            line-height: 1.3;
        }

        .content p {
            font-size: 18px;
            line-height: 1.7;
            padding-top: 20px;
        }

        .content li {
            font-size: 17px;
            line-height: 2;
        }

        /* Download Button */
        .btn-download {
            padding: 18px 20px;
            color: white;
            background: #ee0000;
            border-radius: 0;
            border: none;
            font-size: 16px;
            width: 60%;
            margin-top: 20px;
        }

        .btn-download:hover,
        .btn-download:focus {
            background: #cc0000;
            color: white;
        }

        /* Form */
        #form {
            padding: 20px 30px;
        }

        .main {
            padding: 35px;
            background: #efefef;
            border: 2px solid rgb(222, 214, 214);
        }

        .main h3 {
            margin-top: 0;
        }

        .main p {
            font-size: 16px;
            padding-top: 10px;
            margin-bottom: 25px;
        }

        .form-group {
            margin-bottom: 18px;
        }

        .form-control {
            height: 45px;
            border-radius: 0;
            font-size: 15px;
        }

        .main .btn-download {
            width: 100%;
        }

        /* Tablet */
        @media (max-width: 991px) {

            .content h1 {
                font-size: 30px;
            }

            #form {
                padding: 20px 15px;
            }

            .main {
                padding: 25px;
            }
        }

        /* Mobile */
        @media (max-width: 767px) {

            .header {
                height: 85px;
                min-height: 85px;
            }

            .header img {
                width: 240px;
                height: 85px;
                padding: 10px 15px;
            }

            .content-section {
                padding: 25px 15px;
            }

            .content h1 {
                font-size: 28px;
                padding-top: 5px;
            }

            .content p {
                font-size: 16px;
            }

            .content li {
                font-size: 15px;
            }

            #form {
                padding: 20px 0;
            }

            .main {
                padding: 25px 20px;
            }

            .btn-download {
                width: 100%;
            }
        }
    </style>

</head>

<body>

    <!-- Header -->
    <div class="header">

        <img src="images/Screenshot 2026-11-06 153128.png"
             alt="Logo">

    </div>

    <!-- Hero Banner -->
    <div class="hero">

        <img src="images/banner.png"
             alt="Zero Trust Security Banner">

    </div>

    <!-- Main Section -->
    <div class="container content-section">

        <div class="row">

            <!-- Left Content -->
            <div class="col-md-7 content">

                <h3>FREE E-BOOK</h3>

                <h1>
                    Zero trust security for government agencies
                </h1>

                <p>
                    Government agencies face evolving cyber threats across
                    applications, devices and infrastructure. This e-book
                    explains the principles of zero trust and how agencies
                    can plan a more resilient security approach.
                </p>

                <h3 style="color:#000;">
                    <b>What you will learn</b>
                </h3>

                <ul>
                    <li>
                        Understand the principles of zero trust security
                    </li>

                    <li>
                        Explore the seven pillars of zero trust maturity.
                    </li>

                    <li>
                        Learn how Red Hat can support your zero trust journey.
                    </li>
                </ul>

            </div>

            <!-- Right Form -->
            <div class="col-md-5" id="form">

                <div class="main">

                    <form action="action.php" method="POST">

                        <h3>
                            <b>Download the e-book</b>
                        </h3>

                        <p>Complete all fields below.</p>

                        <!-- First Name -->
                        <div class="form-group">

                            <input
                                type="text"
                                name="first_name"
                                class="form-control"
                                placeholder="First Name"
                                required
                            >

                        </div>

                        <!-- Last Name -->
                        <div class="form-group">

                            <input
                                type="text"
                                name="last_name"
                                class="form-control"
                                placeholder="Last Name"
                                required
                            >

                        </div>

                        <!-- Business Email -->
                        <div class="form-group">

                            <input
                                type="email"
                                name="business_email"
                                class="form-control"
                                placeholder="Business Email"
                                required
                            >

                        </div>

                        <!-- Phone -->
                        <div class="form-group">

                            <input
                                type="tel"
                                name="phone"
                                class="form-control"
                                placeholder="Phone Number"
                                required
                            >

                        </div>




                        <div class="form-group">

                            <input
                                type="tel"
                                name="job_title"
                                class="form-control"
                                placeholder="Job Title"
                                required
                            >

                        </div>

                        <!-- Company Size -->
                        <div class="form-group">

                            <select
                                name="company_size"
                                class="form-control"
                                required
                            >

                                <option value="">
                                    Select Company Size
                                </option>

                                <option value="1-50">
                                    1-50 Employees
                                </option>

                                <option value="51-200">
                                    51-200 Employees
                                </option>

                                <option value="201-500">
                                    201-500 Employees
                                </option>

                                <option value="501-1000">
                                    501-1000 Employees
                                </option>

                                <option value=" 1,001+">
                                     1,001+
                                </option>

                                
                            </select>

                        </div>


                        <div class="form-group">

                            <select
                                name="industry"
                                class="form-control"
                                required
                            >

                                <option value="">
                                    Industry
                                </option>

                                <option value="Government / Public Sector">
                                    Government / Public Sector
                                </option>

                                <option value="IT / Technology">
                                    IT / Technology
                                </option>

                                <option value="Education">
                                    Education
                                </option>

                                <option value="Healthcare;">
                                    Healthcare;
                                </option>

                                <option value="Financial Services">
                                   Financial Services
                                </option>

                                <option value="Other">
                                    Other
                                </option>

                            </select>

                        </div>


                       <div class="form-group">
    <label style="font-weight: normal; display: flex; align-items: flex-start; gap: 10px; line-height: 1.5;">

        <input type="checkbox"
               name="check"
               value="Yes"
               required
               style="margin: 4px 0 0; width: 16px; height: 16px; flex-shrink: 0;">

        <span>
            I agree to be contacted about this resource and related products or services.
        </span>

    </label>
</div>


                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-download">
                            Download E-book
                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</body>
</html>
