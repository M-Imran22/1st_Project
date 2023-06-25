<?php
require_once("header.php");
?>
<header>
    <a href="#" class="brand">Logo</a>
    <div class="navigation"></div>
    <div class="navigation-items">
        <a href="#" class=" ">Home</a>
        <a href="#">About</a>
        <a href="#">Services</a>
        <a href="#">Contact</a>
    </div>
</header>

<section class="home">
    <img class="img-slide  active " src="./Pic/Galapagos-Islands.jpg" alt="Islands">
    <img class="img-slide" src="./Pic/Chittorgarh-Fort-India.jpg" alt="Fort-India">
    <img class="img-slide" src="./Pic/Cinque-Terre-Italy.jpg" alt="Terre-Italy">
    <img class="img-slide" src="./Pic/Giants-Causeway.jpg" alt="Giants-Causeway">
    <img class="img-slide" src="./Pic/Ha-Long-Bay-Vietnam.jpg" alt="Bay-Vietnam">
    <div class="content content-slide active ">
        <h1>Galapagos<br><span>Island</span></h1>
        <p>The Galapagos Islands are a remote archipelago located in the Pacific Ocean. They are known for their unique wildlife and pristine natural beauty. The islands offer opportunities for wildlife observation, snorkeling, and hiking, making it a popular destination for nature enthusiasts.</p>
        <a href="#">Read More</a>
    </div>
    <div class="content content-slide">
        <h1>Chittorgarh Fort<br><span>India</span></h1>
        <p> Chittorgarh Fort is one of the largest forts in India and a UNESCO World Heritage Site. It is located in the state of Rajasthan and holds great historical significance. The fort showcases impressive architecture and provides a glimpse into the rich cultural heritage of Rajasthan.</p>
        <a href="#">Read More</a>
    </div>
    <div class="content content-slide">
        <h1>Cinque Terre<br><span>Italy</span></h1>
        <p>Cinque Terre is a picturesque coastal region in Italy, comprising five colorful fishing villages: Monterosso al Mare, Vernazza, Corniglia, Manarola, and Riomaggiore. The area is renowned for its rugged cliffs, vineyards, and charming seaside atmosphere. Visitors can explore the villages by foot, enjoy the stunning coastal views, and savor local Italian cuisine.</p>
        <a href="#">Read More</a>
    </div>
    <div class="content content-slide">
        <h1>Giant's<br><span>Causeway</span></h1>
        <p> The Giant's Causeway is a natural wonder located in Northern Ireland. It is a geological formation consisting of thousands of interlocking basalt columns that were formed by volcanic activity millions of years ago. The unique hexagonal-shaped columns create a visually stunning landscape and attract visitors from around the world.</p>
        <a href="#">Read More</a>
    </div>
    <div class="content content-slide">
        <h1>Ha Long Bay<br><span>Vietnam</span></h1>
        <p>Ha Long Bay is a breathtaking natural wonder situated in northeastern Vietnam. It features emerald-green waters, towering limestone islands, and lush vegetation. The bay is a UNESCO World Heritage Site and offers opportunities for cruising, kayaking, and exploring magnificent caves, making it a must-visit destination in Vietnam.</p>
        <a href="#">Read More</a>
    </div>
    <div class="slider-navigation">
        <div class="nav-btn  "></div>
        <div class="nav-btn"></div>
        <div class="nav-btn"></div>
        <div class="nav-btn"></div>
        <div class="nav-btn"></div>
    </div>
</section>

<section class="cardSliderArea ">
    <h2 class="title">THE MOST VISTED PLACES IN THE WORLD</h2>

    <div class="contanir">

        <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false" data-bs-interval="false">

            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselexamplecontrolsnotouching" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#carouselexamplecontrolsnotouching" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#carouselexamplecontrolsnotouching" data-bs-slide-to="2"></button>
            </div>
            <div class=" carousel-inner" style="width: 116%;">
                <div class="carousel-item active">
                    <div class="row m-4 ">
                        <div class="col-6 m-2">
                            <div class="shadow-1-strong" style="background-color: rgba(0, 0, 0, 0.6);">
                                <img src="./Pic/Santorini-Greece.jpg" alt="Santorini-Greece">
                            </div>
                            <div class="slide-show-caption d-none d-md-block">
                                <h5>Second slide label</h5>
                                <p>Some representative placeholder content</br> for the second slide.</p>
                                <a href="#">Read More</a>
                            </div>
                        </div>
                        <div class="col-6 m-2">
                            <img src="./Pic/Cinque-Terre-Italy.jpg" alt="Cinque-Terre-Italy">
                            <div class="slide-show-caption d-none d-md-block">
                                <h5>Second slide label</h5>
                                <p>Some representative placeholder content</br> for the second slide.</p>
                                <a href="#">Read More</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row  ">
                        <div class="col-6 m-4">
                            <img src="./Pic/Northern-Lights-by-Mads-Pihl-4.jpg" alt="Northern-Lights-by-Mads-Pihl">
                        </div>
                        <div class="col-6 m-4">
                            <img src="./Pic/Chittorgarh-Fort-India.jpg" alt="Chittorgarh-Fort-India">
                        </div>

                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row  ">
                        <div class="col-6 m-4">
                            <img src="./Pic/Galapagos-Islands.jpg" alt="Galapagos-Islands">
                            <div class="slide-show-caption d-none d-md-block">
                                <h5>Second slide label</h5>
                                <p>Some representative placeholder content</br> for the second slide.</p>
                                <a href="#">Read More</a>
                            </div>
                            <div class="col-6 m-4">
                                <img src="./Pic/Giants-Causeway.jpg" alt="Giants-Causeway">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

</section>

<section class="blogs-area">
    <h2 class="blogs-title">TOP BLOGS</h2>

    <div class="blogs-lift" style="margin-left: -120px">
        <div class="blogs-liftContent">
            <h1>Jordan</h1>
            <h2>Completely safe oasis isolated from the instability of the region</h2>
            <p>Jordan is a place of supernatural beauty. Imagine Yosemite as a desert with super luxury tented camps. That’s a bit how Wadi Rum feels. And Petra is so ancient you could use the Bible as your guidebook rather than a Lonely Planet. Beyond these obvious destinations, there’s also Al Salt, Jarash, and Amman. Travel here with an open mind, and get ready for and a hospitality that will blow away any expectations. Photo by Scott Sporleder.</p>
            <a href="#">Read More</a>
        </div>

        <img src="../Pic/petra-jordan9.jpg" alt="petra-jordan " class="blogs-liftImg rounded float-end   ">
    </div>
    <div class="blogs-right ">
        <div class="blogs-rightContent">
            <h1>Dominical, Costa Rica</h1>
            <h2>Surf, yoga, and natural foods paradise within easy reach</h2>
            <p>ut of all the places in Costa Rica that should’ve gotten overrun with mass tourism, Dominical has been spared. It remains a small, uncrowded town with a super cool expat scene and awesome restaurants. There are exceptional AirBnb properties overlooking nearby Domincalito (as well as in town). For surfing, Dominical is almost never flat. Photo: Blaze Nowara.</p>
            <a href="#">Read More</a>
        </div>

        <img src="../Pic/Dominica-Blaze.jpg" alt="Dominica-Blaze" class="blogs-rightImg rounded    ">
    </div>
    <div class="blogs-liftContent" style="margin-left: -120px">
        <h1>Havana, Cuba</h1>
        <h2>Rapidly transitioning nation grounded in Caribbean culture and vibrancy</h2>
        <p>Cuba has been among the hottest places to travel for our staff at Matador, with reports always containing two elements: 1. People have more fun there than anywhere else they’ve been in years, and 2. The wifi is the worst they’ve found anywhere (Correlation anyone?). On a recent filmmaking journey, it was noted: “Everyone here has rocking chairs. This is place where people know how to chill.”</p>
        <a href="#">Read More</a>
    </div>

    <img src="../Pic/Cuba-Scott-Sporleder.jpg" alt="Cuba-Scott-Sporleder " class="blogs-liftImg rounded float-end   ">
    </div>
    <div class="blogs-right ">
        <div class="blogs-rightContent">
            <h1>Abu Dhabi, UAE</h1>
            <h2>One of the best places in the world to experience Islamic culture</h2>
            <p>Abu Dhabi is a desert emirate, dotted with oasis towns, date farms, historic forts, natural reserves, mangroves, and dunes that have lured explorers throughout history. As one of the largest mosques on the planet, Sheikh Zayed Grand Mosque receives pilgrims from all over the world during Eid celebrations. Outside of prayer times, it’s also open to non-Muslims and has free guided tours.</p>
            <a href="#">Read More</a>
        </div>

        <img src="../Pic/palace-court-at-abu-dhabi-united-arab-emirates-uae.jpg" alt="palace-court-at-abu-dhabi-united-arab-emirates-uae " class="blogs-rightImg rounded    ">
    </div>

</section>

<?php
require_once("footer.php");
?>