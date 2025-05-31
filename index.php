
<?php include('navbar.php'); ?>
<link href="style/index.css" rel="stylesheet">

<div id="homeContainer">
    <div id="videoBG" class="d-none d-xl-block">
        <!-- <video preload autoplay loop muted class="wrapper__video"><source src="video/concrete-video.mp4"></video> -->
        <img src="images/concrete-driveway.jpg" style="object-fit: cover;" width="100%;"/>
        <div id="headWrapper">
            <div class="container">
                <div class="row">
                    <div class="col-8">
                        <div class="mt-5">
                            <h2 id="headText"><?= $_SESSION['website_name']; ?></h2>
                            <h2 id="subText">Enhance your home or business with our top quality concrete services.</h2>
                        </div>
                    </div>
                    <div class="col-4 d-none d-xl-block">
                       <?php include('resources/contact.php'); ?>
                    </div>
                </div>
            </div>
        </div>        
    </div>
    
    <section class="mobile-contact d-xl-none mt-5">
        <div class="container">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-10">
                    <?php include('resources/contact-mobile.php'); ?>
                </div>
                <div class="col-1"></div>
            </div>
        </div>
    </section>

    <div class="row">
        <div class="col-0 col-xl-1"></div>
        <div class="col-12 col-xl-10">
            <section class="siteInfo py-5">
                <div class="container">
                    <h1 class="font-weight-bold text-center">Welcome to <?= $_SESSION['website_name']; ?></h1>
                    <h3 class="mt-4 text-center">Looking for reliable and affordable concrete contractors? You’ve come to the right place!</h3>
                    <p class="pageText">
                        Welcome to Ann Arbor Concrete Contractors your trusted local experts for high quality concrete services in Ann Arbor and throughout Southeast Michigan, including Detroit, Ypsilanti, Saline, Dexter, and surrounding areas. 
                        We specialize in affordable, long lasting, and visually appealing concrete solutions for residential and commercial properties.
                    </p>
                    <p class="pageText">
                        Looking to improve your property with a new concrete driveway, patio, or sidewalk? Planning a larger project like a concrete foundation, slab installation, or commercial concrete construction? 
                        Our experienced team is here to deliver reliable results with attention to detail and a commitment to excellence.
                        Concrete is one of the most versatile building materials available offering strength, durability, and a modern look that adds value to any home or business. 
                        Whether you need a small concrete repair or a complete new installation, we handle projects of all sizes with professionalism and pride.
                        As a leading concrete company in Ann Arbor, we’re known for our dependable service, strong work ethic, and customer first approach. 
                        If you're searching for “concrete contractors near me” in the Ann Arbor Michigan area, look no further Ann Arbor Concrete Contractors is your go to source for quality, affordable concrete work that stands the test of time.
                    </p>
                </div>
            </section>
            <section class="siteInfo2 py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-4">
                            <div class="card mt-5 mb-lg-0">
                                <div class="card-body">
                                    <img src="images/concrete-img-4.jpg" width="100%;"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-8">
                            <h3 class="font-weight-bold text-center"><?= $_SESSION['website_name']; ?> Your Reliable Concrete Driveway & Construction Specialists</h3>
                            <p class="pageText">
                                At Ann Arbor Concrete Contractors, we proudly offer top-quality concrete driveway installations and a full range of dependable concrete services for both homeowners and businesses.
                                Our team specializes in custom driveways, patios, slabs, and concrete removal, delivering practical and affordable solutions tailored to your unique needs.
                                Whether you’re starting a new construction project, updating your property, or replacing old concrete, we’re here to provide lasting results you can count on.
                            </p>
                            <p class="pageText">
                                With years of experience and a commitment to excellence, we use only the best materials and modern techniques to ensure your concrete looks great and performs even better. 
                                From residential garage driveways to large-scale commercial foundations, no job is too big or too small.
                                We take pride in our craftsmanship, reliability, and client-focused service. 
                                we work closely with you at every stage—from planning to completion—always honoring your timeline, budget, and vision.  
                                When quality and dependability matter, trust Ann Arbor Concrete Contractors to bring your project to life.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="siteInfo2 py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-8">
                            <p class="pageText">
                                At Ann Arbor Concrete Contractors, we’re proud to be recognized as one of the top rated concrete companies in Southeast Michigan. We specialize in delivering durable, high quality, and visually striking concrete driveways for both residential and commercial properties.
                                Your satisfaction is our highest priority. From the start, we take the time to understand your goals, evaluate your space, and design a driveway solution tailored to your style, needs, and budget. 
                                Whether you're installing a brand new driveway, replacing worn out concrete, or upgrading your existing surface, our custom concrete services are built for long lasting performance and standout curb appeal.
                                Our experienced team is committed to delivering on time, detail oriented craftsmanship without ever compromising on quality. No matter the size or complexity of the project, we combine durability, functionality, and visual appeal to ensure exceptional results.
                                Over the years, we’ve built a strong reputation throughout Ann Arbor and Southeast Michigan for reliable, efficient, and affordable driveway installations. We credit our success to the use of premium materials, expert craftsmanship, and seamless project management from start to finish.
                                If you’re searching for a trusted, local concrete contractor in Ann Arbor, look no further. Let Ann Arbor Concrete Contractors turn your vision into a driveway that’s built to last—and designed to impress.
                            </p>
                            <p class="pageText">
                                Over the years, we’ve established a strong reputation for providing exceptional concrete driveway installation services throughout Southeast Michigan. 
                                Our success is driven by the use of premium materials, skilled craftsmanship, and effective project management to ensure every job is completed efficiently and to the highest standards.
                                If you’re looking for a reliable and cost-effective concrete driveway solution, Ann Arbor Concrete Contractors is the trusted team you can count on. Let our experienced professionals turn your vision into reality with a durable, attractive driveway designed to last for years to come.
                            </p>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="card mt-5 mb-lg-0">
                                <div class="card-body">
                                    <img src="images/concrete-img-10.jpg" width="100%;"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="pricing py-5">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="card mb-5 mb-lg-0">
                            <div class="card-body">
                                <h5 class="card-title text-uppercase text-center">BUILT TO LAST</h5>
                                <hr>
                                <p>
                                    Concrete is incredibly resilient, It won’t rot, rust, or catch fire. 
                                    Its natural resistance to water, wind, fire, earthquakes, and vibrations makes it one of the toughest and most durable building materials available. 
                                    This exceptional strength not only reduces long-term maintenance costs but also improves overall safety.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card mb-5 mb-lg-0">
                            <div class="card-body">
                                <h5 class="card-title text-uppercase text-center">LOW MAINTENANCE & Durable</h5>
                                <hr>
                                <p>
                                    Concrete outperforms many other building materials, becoming even more durable over time. 
                                    Its lasting nature means structures need fewer repairs or replacements, resulting in significantly reduced maintenance costs over the years.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card mb-5 mb-lg-0">
                            <div class="card-body">
                                <h5 class="card-title text-uppercase text-center">Concrete Is Cost-Effective</h5>
                                <hr>
                                <p>
                                    Concrete is among the most accessible and cost-effective construction materials worldwide. 
                                    Compared to polymers, steel, and other cement-based products, it offers significantly lower production costs. 
                                    Its main ingredients aggregates, water, and cement—are readily available and typically affordable in most local markets, making concrete an economical option for a wide variety of construction projects.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="siteInfo2 py-5">
                <div class="container">
                    <div class="row">
                        <div class="d-none d-xl-block col-xl-6">
                            <div class="text-center">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/UOHURuAf5iY?si=0VKO_C273sD3w-HF" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>                           
                            </div>
                        </div>
                        <div class="col-12 col-xl-6">
                            <div class="text-center">
                                <h3 class="font-weight-bold"></h3>
                                <p class="pageText">
                                At our Ann Arbor concrete, we bring advanced skills, years of hands-on experience, and cutting-edge technology to every project. 
                                We utilize high-quality tools and heavy-duty machinery, 
                                continually upgrading our equipment to ensure exceptional performance, precision, and efficiency—helping you bring your dream project to life.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-12">
                            <div class="text-center">
                                <h3 class="font-weight-bold">We're here to provide a great service</h3>
                                <p class="pageText">
                                    As a dependable concrete service provider in Ann Arbor and surrounding areas, we're prepared to handle a wide variety of projects including retaining walls, foundations, flooring, resurfacing, stamped concrete, pool decks, driveways, patios, sidewalks, countertops, and more. Our team combines extensive industry knowledge with a commitment to delivering superior results every time.
                                    Whether your project is residential or commercial, we approach each job with the same level of professionalism and care. 
                                </p>
                                <p class="pageText">
                                    Our concrete contractors are committed to strong work ethics and treating every client with respect. 
                                    No project is too large or too small, we work closely as a dedicated team to ensure the job is done right the first time.
                                    As a fully licensed concrete company, we’re focused on delivering top-quality services tailored to your construction needs. 
                                    When you choose to work with us, you’re partnering with a team that values reliability, craftsmanship, and your unique vision.
                                </p>
                            </div>
                        </div>
                    </div>
                    <section class="pricing py-5">
                        <div class="row">
                            <div class="col-12 col-xl-3">
                                <div class="card mb-5 mb-lg-0">
                                    <div class="card-body">
                                        <img src="images/concrete-img-8.jpg" width="100%;" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-3">
                                <div class="card mb-5 mb-lg-0">
                                    <div class="card-body">
                                        <img src="images/concrete-img-9.jpg" width="100%;" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-3">
                                <div class="card mb-5 mb-lg-0">
                                    <div class="card-body">
                                        <img src="images/concrete-img-10.jpg" width="100%;" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-3">
                                <div class="card mb-5 mb-lg-0">
                                    <div class="card-body">
                                        <img src="images/concrete-img-4.jpg" width="100%;" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </section>
        </div>
        <div class="col-0 col-xl-1"></div>
    </div>
</div>

<?php // include('resources/footer.php'); ?>
