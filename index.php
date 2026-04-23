<?php
// Project: Arihant City Kalyan Bhiwandi
// Optimized for Local (XAMPP) and Vercel Deployment
$data_file = 'data.json';
$data = [];
if (file_exists($data_file)) {
    $data = json_decode(file_get_contents($data_file), true);
}

function get_val($key, $fallback = '') {
    global $data;
    return (isset($data[$key]) && !empty($data[$key])) ? $data[$key] : $fallback;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="BqrJA3zOXY1BMJfMDregV83Q_vmVHwKuDiYp21c-v24" />
    <title>Arihant City Kalyan Bhiwandi | 1, 2, 3 & 4 BHK Flats in Thane Project</title>

    <!-- ================= UPDATED SEO META TAGS ================= -->
    <link rel="icon" href="images/favicon.jpg" type="image/jpg" sizes="16x16">
    <meta name="description"
        content="Discover Arihant City Kalyan Bhiwandi. Premium 1, 2, 3 & 4 BHK flats in Thane project with modern amenities, excellent connectivity, and high-rise living." />
    <meta name="keywords"
        content="Arihant City Kalyan Bhiwandi, 1 BHK in Bhiwandi, 2 BHK in Bhiwandi, 3 BHK in Bhiwandi, 4 BHK flats in Thane project, Arihant Group Bhiwandi" />
    <meta name="author" content="Arihant City Authorized Partner" />
    <meta property="og:locale" content="en_IN" />
    <meta property="og:site_name" content="Arihant City Kalyan Bhiwandi" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Arihant City Kalyan Bhiwandi | Luxury 1, 2, 3 & 4 BHK" />
    <meta property="og:description"
        content="Elevate your lifestyle at Arihant City Kalyan Bhiwandi. High-rise living on Kalyan Bypass with world-class amenities and premium residences." />
    <meta property="og:url" content="https://arihantcity.site/" />
    <meta property="og:image" content="https://arihantcity.site/images/favicon.jpg" />
    <meta property="article:published_time" content="2026-04-17T09:05:09+05:30" />
    <meta property="article:modified_time" content="2026-04-17T10:15:27+05:30" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Arihant City Kalyan Bhiwandi - Premium Real Estate on Kalyan Bypass" />
    <meta name="twitter:description"
        content="Explore Arihant City Kalyan Bhiwandi. Enjoy high-rise living with seamless connectivity and premium amenities." />
    <meta name="twitter:image" content="https://arihantcity.site/images/favicon.jpg" />
    <link rel="shortcut icon" type="image/jpg" href="https://arihantcity.site/images/favicon.jpg" />
    <link rel="canonical" href="https://arihantcity.site/" />
    <!-- ====================================================================== -->

    <style>
        /* CSS Variables */
        :root {
            --primary-green: #a88c39;
            --light-green: #eef0e5;
            --mid-green: #a88c39;
            --tan-bg: #eef0e5;
            --white: #ffffff;
            --dark-text: black;
            --gray-text: black;
            --footer-bg: #a88c39;
            --accent-gold: #a88c39;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            color: var(--dark-text);
            line-height: 1.6;
            background-color: var(--white);
        }

        img {
            max-width: 100%;
            height: auto;
            display: block;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
        }

        .section-padding {
            padding: 60px 0;
        }

        .text-center {
            text-align: center;
        }

        .section-title {
            color: var(--primary-green);
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 15px;
            font-size: 1.8rem;
        }

        .section-subtitle {
            font-size: 1rem;
            color: var(--gray-text);
            margin-bottom: 30px;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }

        .btn {
            display: inline-block;
            background-color: var(--primary-green);
            color: var(--white);
            padding: 12px 30px;
            text-decoration: none;
            border-radius: 5px;
            text-transform: uppercase;
            font-size: 0.85rem;
            font-weight: bold;
            border: none;
            cursor: pointer;
            transition: 0.3s;
            margin-top: 20px;
        }

        .btn:hover {
            background-color: #927a32;
        }

        header {
            background-color: var(--primary-green);
            padding: 15px 0;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo-img {
            height: 45px;
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 20px;
        }

        .nav-links a {
            color: var(--white);
            text-decoration: none;
            font-size: 0.85rem;
            text-transform: uppercase;
        }

        .hero {
            width: 100%;
            display: block;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 30px 0;
        }

        th {
            background-color: var(--primary-green);
            color: var(--white);
            padding: 15px;
            text-transform: uppercase;
        }

        td {
            padding: 15px;
            border-bottom: 1px solid #ddd;
            background-color: #fcfbf7;
            text-align: center;
        }

        .grid-2x2 {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 25px;
        }

        .card {
            background: var(--white);
            padding: 15px;
            text-align: center;
            border-radius: 5px;
            border: 1px solid var(--light-green);
        }

        .card img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            margin-bottom: 15px;
        }

        .conn-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            text-align: left;
            margin-top: 30px;
        }

        .conn-col h4 {
            margin-bottom: 10px;
            color: var(--primary-green);
        }

        .conn-col ul {
            list-style: none;
            font-size: 0.9rem;
        }

        .conn-col li {
            margin-bottom: 8px;
        }

        .comfort-list-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
            text-align: left;
        }

        .comfort-list-grid li {
            list-style: none;
            padding-left: 20px;
            position: relative;
        }

        .comfort-list-grid li::before {
            content: "✓";
            position: absolute;
            left: 0;
            color: var(--primary-green);
        }

        .contact-section {
            display: flex;
            background: #fcfbf7;
        }

        .map-container {
            flex: 1.5;
            min-height: 500px;
        }

        .map-container iframe {
            width: 100%;
            height: 100%;
            border: none;
        }

        .form-container {
            flex: 1;
            padding: 50px 40px;
            background-color: #f4f1e6;
        }

        .form-container input,
        .form-container select,
        .form-container textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        footer {
            background-color: var(--footer-bg);
            color: var(--white);
            padding: 40px 0;
            text-align: center;
            font-size: 0.85rem;
        }

        @media (max-width: 768px) {
            .grid-2x2, .conn-grid, .comfort-list-grid, .contact-section {
                grid-template-columns: 1fr;
                flex-direction: column;
            }
        }
    </style>
</head>

<body>

    <header>
        <div class="nav-container container">
            <a href="index.php"><img id="logo" src="<?= get_val('site_logo', 'images/site_logo_1776905712.png') ?>" alt="Arihant City Logo" class="logo-img"></a>
            <nav>
                <ul class="nav-links">
                    <li><a href="#overview">Overview</a></li>
                    <li><a href="#amenities">Amenities</a></li>
                    <li><a href="#connectivity">Connectivity</a></li>
                    <li><a href="#plans">Floor Plans</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <img src="<?= get_val('hero_banner', 'images/hero_banner_1776905712.jpg') ?>" alt="Arihant City Hero Banner" class="hero">

        <section id="overview" class="section-padding container text-center">
            <h2 class="section-title"><?= get_val('ov_title', 'ARIHANT CITY KALYAN BHIWANDI - PROJECT OVERVIEW') ?></h2>
            <p class="section-subtitle"><?= get_val('ov_desc', 'Experience the ultimate lifestyle at Arihant City, a premier residential township...') ?></p>

            <table>
                <thead>
                    <tr>
                        <th>Configuration</th>
                        <th>Carpet Area</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1 BHK Luxury</td>
                        <td><?= get_val('p_2bhk_area', '543 SqFt') ?></td>
                        <td><?= get_val('p_2bhk_price', '₹ 44.99 Lakhs*') ?></td>
                    </tr>
                    <tr>
                        <td>2 BHK Elite</td>
                        <td><?= get_val('p_3bhk_area', '760 SqFt') ?></td>
                        <td><?= get_val('p_3bhk_price', '₹ 89.99 Lakhs*') ?></td>
                    </tr>
                </tbody>
            </table>
            <button class="btn">Download Full Price List</button>
        </section>

        <section class="section-padding" style="background-color: var(--light-green);">
            <div class="container text-center">
                <h2 class="section-title"><?= get_val('story_title', 'THE LEGACY OF ARIHANT CITY') ?></h2>
                <div style="text-align: justify; max-width: 900px; margin: 0 auto; margin-bottom: 30px;">
                    <?= nl2br(get_val('story_desc', 'Arihant City is a meticulously planned township...')) ?>
                </div>
                <img src="<?= get_val('story_img', 'images/story_img_1776905960.jpg') ?>" alt="Arihant City Story" style="max-width: 700px; margin: 0 auto; border: 5px solid #fff;">
            </div>
        </section>

        <section id="amenities" class="section-padding container text-center">
            <h2 class="section-title"><?= get_val('am_title', 'PREMIUM AMENITIES') ?></h2>
            <p class="section-subtitle"><?= get_val('am_desc', 'World-class facilities for your comfort.') ?></p>
            <div class="grid-2x2">
                <div class="card"><img src="<?= get_val('am1_img', 'images/am1_img_1776905960.jpg') ?>" alt="Amenity 1"><h3>Swimming Pool</h3></div>
                <div class="card"><img src="<?= get_val('am2_img', 'images/am2_img_1776905960.jpg') ?>" alt="Amenity 2"><h3>Clubhouse</h3></div>
                <div class="card"><img src="<?= get_val('am3_img', 'images/am3_img_1776905960.jpg') ?>" alt="Amenity 3"><h3>Fitness Center</h3></div>
                <div class="card"><img src="<?= get_val('am4_img', 'images/am4_img_1776905960.jpg') ?>" alt="Amenity 4"><h3>Gardens</h3></div>
            </div>
        </section>

        <section id="connectivity" class="section-padding" style="background-color: #fcfbf7;">
            <div class="container text-center">
                <h2 class="section-title"><?= get_val('conn_title', 'STRATEGIC CONNECTIVITY') ?></h2>
                <p class="section-subtitle"><?= get_val('conn_desc', 'Everything you need is just minutes away.') ?></p>
                <div class="conn-grid">
                    <div class="conn-col"><h4>Transport</h4><ul><li>Metro Line 5 - 0.2 km</li><li>Kalyan Station - 8.4 km</li></ul></div>
                    <div class="conn-col"><h4>Education</h4><ul><li>Swayam Siddhi College</li><li>Holy Cross School</li></ul></div>
                    <div class="conn-col"><h4>Lifestyle</h4><ul><li>McDonald's - 1.2 km</li><li>Dmart - 2.5 km</li></ul></div>
                    <div class="conn-col"><h4>Healthcare</h4><ul><li>Life Care Hospital</li><li>Fortis Hospital</li></ul></div>
                </div>
            </div>
        </section>

        <section id="plans" class="section-padding container text-center">
            <h2 class="section-title"><?= get_val('fp_title', 'MASTER PLANS') ?></h2>
            <div class="grid-2x2">
                <img src="<?= get_val('fp1_img', 'images/fp1_img_1776490386.jpg') ?>" alt="Floor Plan 1" style="border: 1px solid #ddd;">
                <img src="<?= get_val('fp2_img', 'images/fp2_img_1776490386.jpg') ?>" alt="Floor Plan 2" style="border: 1px solid #ddd;">
            </div>
        </section>

        <section id="blogs" class="section-padding container">
            <h2 class="section-title text-center">LATEST INSIGHTS & BLOG</h2>
            <p class="section-subtitle text-center">Expert advice and updates on Arihant City Kalyan Bhiwandi and the Thane-Bhiwandi real estate market.</p>
            <div class="grid-2x2">
                <div class="card" style="text-align: left; padding: 20px;">
                    <h3 style="color: var(--primary-green); margin-bottom: 10px;">1 BHK Luxury Living in Bhiwandi</h3>
                    <p style="font-size: 0.9rem; color: #555;">Discover why 1 BHK flats in Arihant City are the perfect start for young professionals...</p>
                    <a href="blog/1bhk-flats-in-thane.html" style="color: var(--primary-green); font-weight: bold; text-decoration: none; display: block; margin-top: 10px;">Read More &rarr;</a>
                </div>
                <div class="card" style="text-align: left; padding: 20px;">
                    <h3 style="color: var(--primary-green); margin-bottom: 10px;">The Rise of Kalyan-Bhiwandi Bypass</h3>
                    <p style="font-size: 0.9rem; color: #555;">How infrastructure is making Arihant City the most connected project in Thane...</p>
                    <a href="blog/residential-projects-in-thane.html" style="color: var(--primary-green); font-weight: bold; text-decoration: none; display: block; margin-top: 10px;">Read More &rarr;</a>
                </div>
                <div class="card" style="text-align: left; padding: 20px;">
                    <h3 style="color: var(--primary-green); margin-bottom: 10px;">Affordable Luxury in Thane District</h3>
                    <p style="font-size: 0.9rem; color: #555;">Arihant City Kalyan Bhiwandi offers premium amenities at unbeatable prices...</p>
                    <a href="blog/affordable-flats-in-thane.html" style="color: var(--primary-green); font-weight: bold; text-decoration: none; display: block; margin-top: 10px;">Read More &rarr;</a>
                </div>
                <div class="card" style="text-align: left; padding: 20px;">
                    <h3 style="color: var(--primary-green); margin-bottom: 10px;">Investment Potential in Bhiwandi</h3>
                    <p style="font-size: 0.9rem; color: #555;">Why real estate experts are recommending Arihant City for long-term growth...</p>
                    <a href="blog/future-of-bhiwandi-real-estate.html" style="color: var(--primary-green); font-weight: bold; text-decoration: none; display: block; margin-top: 10px;">Read More &rarr;</a>
                </div>
            </div>
            <div class="text-center" style="margin-top: 30px;">
                <a href="blog/index.html" class="btn">View All Articles</a>
            </div>
        </section>

        <section id="contact" class="contact-section">
            <div class="map-container">
                <iframe src="<?= get_val('google_map', 'https://www.google.com/maps/embed?pb=...') ?>" loading="lazy"></iframe>
            </div>
            <div class="form-container">
                <h2 class="section-title">Enquire Now</h2>
                <p>Register to get exclusive pricing and priority access.</p>
                <form action="contact.php" method="POST">
                    <input type="text" name="name" placeholder="Full Name" required>
                    <input type="tel" name="phone" placeholder="Mobile Number" required>
                    <select name="config">
                        <option value="1BHK">1 BHK</option>
                        <option value="2BHK">2 BHK</option>
                        <option value="3BHK">3 BHK</option>
                        <option value="4BHK">4 BHK</option>
                    </select>
                    <button type="submit" class="btn" style="width: 100%;">Submit Enquiry</button>
                </form>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <div style="margin-bottom: 20px;">
                <a href="index.php" style="color: #fff; text-decoration: none; margin: 0 10px;">Home</a> |
                <a href="blog/index.html" style="color: #fff; text-decoration: none; margin: 0 10px;">Blogs</a> |
                <a href="disclaimer.html" style="color: #fff; text-decoration: none; margin: 0 10px;">Disclaimer</a> |
                <a href="privacy-policy.html" style="color: #fff; text-decoration: none; margin: 0 10px;">Privacy Policy</a> |
                <a href="terms-and-conditions.html" style="color: #fff; text-decoration: none; margin: 0 10px;">Terms & Conditions</a>
            </div>
            <p>© 2026 Arihant City Kalyan Bhiwandi. All Rights Reserved.</p>
            <p style="margin-top: 10px; font-size: 0.75rem; opacity: 0.8;">Disclaimer: All images and plans are artist's impressions. Please refer to RERA for accurate details.</p>
        </div>
    </footer>

</body>
</html>