<?php
$page = 'domain-registration';
include('inc/header.php');
?>

<style>
    .domain-card{
        border: 1px solid #4927b9;
        border-radius: 10px; height: 100%;
    }
    .domain-price{
      font-size: 42px; font-weight: 700;  
    }

    .domain-btn{
        font-size: 21px;
    font-weight: 500;
    padding: 8px 20px;
    border-radius: 6px;
    background-color: #ffc235;
    color: #343434;
    border: 1px solid #ffc235;

    }

    .domain-content{
        font-size: 18px;
        font-weight: 400;
    }

    .plan-table-responsive {
    border: 1px solid #ebeef2;
    box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
    border-radius: 10px;}

    .plan-table-data {
    padding: 12px 5px !important;
}

.plan-table-heading {
    font-size: 18px;
    padding: 20px 5px !important;
    background-color: #5835d2 !important;
    color: #fff !important;
}

.plan-table-data{
    font-size: 18px;
    font-weight: 400;
}
.dedicated-plan-responsive {
    overflow: auto;
}

    @media (max-width: 1199px) {
    .plan-table-responsive {
        width: 800px;
    }
}
</style>

<section class="banner-sec share-bg">
    <div class=" container">
        <div class="row align-items-start reverse-column">
            <div class="col-md-6 domain-wid">
                <div class="banner-left-content margin-top dedicated-margin domain-reg">
                    <h1 class="doamin-reg mobile-domain-heading desk-domain-heading ">Search & Register a Domain Name</h1>
                    <p class="domain-banner-title p-0">Get a perfect domain name for your website that represents <br
                            class="remove-mobile">your brand online.</p>
                    <div class="d-flex gap-3 lists-hosting server-listing">
                        <form action="https://www.youstable.com/manage/cart.php?a=add&domain=register&query="
                            method="post" style="width: 100%;">
                            <div class="form-group has-search">
                                <span class="fa fa-search form-control-feedback"></span>
                                <input type="text" autocomplete="off" class="form-control find-domain "
                                    placeholder="Enter a desired domain name here" name="query">

                            </div>
                        </form>
                        <script>
                            var input = document.getElementById("suggested_names");
                            input.addEventListener("keypress", function(event) {
                                if (event.key === "Enter") {
                                    event.preventDefault();
                                    document.getElementById("btnsearch").click();
                                }
                            });
                        </script>

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <img class="domain-reg-img floatings" src="assets/img/domain-hero-image.png" alt="Banner" srcset="">
            </div>
        </div>
    </div>
</section>


<section class="awesome-youstable affiliate-two affiliate-four">
    <div class="container">
        <div class="right-cols-awesome">
            <div class="text-center">
                <h2 class="ay_heading">Domain Extensions-On Demand</h2>
                <p class="server-title title_sides_width">Looking for gTLD, sTLD & ccTLD domian name extension? YouStable has got it all for you.
                    Take a look at some of the most famous Domain name extensions.</p>
            </div>
              <div class="row">
                <div class="col-md-4">
                    <div class="domain-card text-center p-5">
                        <h2>.COM</h2>
                        <p class="domain-content">The most recognised Domain extension stands for Component Object Model and it was introduced by Microsoft in 1993.</p>
                        <h1 class="domain-price">AED 39</h1>
                        <div class="">
                            <a href="#domain_section"><button class="domain-btn">Register</button></a>
                            <a href="https://www.youstable.com/manage/cart.php?a=add&domain=transfer"><button class="domain-btn">Transfer</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                <div class="domain-card text-center p-5">
                        <h2>.CO.IN</h2>
                        <p class="domain-content">CO.IN is a country code domain extension. Fulfill various business criteria's by using it.</p>
                        <h1 class="domain-price">AED 21</h1>
                        <div class="">
                            <a href="#domain_section"><button class="domain-btn">Register</button></a>
                            <a href="https://www.youstable.com/manage/cart.php?a=add&domain=transfer"><button class="domain-btn">Transfer</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                <div class="domain-card text-center p-5">
                        <h2>.ONLINE</h2>
                        <p class="domain-content">.online a top-level domain since 2014. The user often uses this generic domain to get their website a proper domain name.</p>
                        <h1 class="domain-price">AED 31</h1>
                        <div class="">
                            <a href="#domain_section"><button class="domain-btn">Register</button></a>
                            <a href="https://www.youstable.com/manage/cart.php?a=add&domain=transfer"><button class="domain-btn">Transfer</button></a>
                        </div>
                    </div>
                </div>
              </div>
        </div>
    </div>
</section>


<section class="explore-section plans-mobile-one shared-explore review-margin" id="explore">
    <div class="text-center shared-hosting-plan-heading shared-hosting-plan-heading-one">
        <h2 class="server-heading shared-heading-plan">Pick the Best Dedicated Server Hosting Plans</h2>
        <p class="server-title choose">Experience extreme performance, dedicated resources, and full control with our cost-effective dedicated server hosting plans in Dubai. These plans offer the speed that your website demands.</p>

    </div>
    <div class='dedicated-plan-responsive'>
    <div class="container my-4">
    <div class="plan-table-responsive">
            <table class="table table-bordered text-center align-middle">
                <thead class="table-light">
                    <tr>
                        <th class='plan-table-heading start-radius'>TLD</th>
                        <th class='plan-table-heading'>Min. Years</th>
                        <th class='plan-table-heading'>Register</th>
                        <th class='plan-table-heading'>Transfer</th>
                        <th class='plan-table-heading'>Renew</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class='text-start position-relative plan-table-data'>
                        .com
                        </td>
                        <td class='plan-table-data'>1</td>
                        <td class='plan-table-data'>$16.99</td>
                        <td class='plan-table-data'>$16.99</td>
                        <td class='plan-table-data'>$16.99</td>
                    </tr>
                    <tr>
                        <td class='text-start position-relative plan-table-data'>
                        .net
                        </td>
                        <td class='plan-table-data'>1</td>
                        <td class='plan-table-data'>$18.99</td>
                        <td class='plan-table-data'>$18.99</td>
                        <td class='plan-table-data'>$18.99</td>
                    </tr>
                    <tr>
                        <td class='text-start position-relative plan-table-data'>
                        .online
                        </td>
                        <td class='plan-table-data'>1</td>
                        <td class='plan-table-data'>$12.99</td>
                        <td class='plan-table-data'>$41.99</td>
                        <td class='plan-table-data'>$41.99</td>
                    </tr>
                    <tr>
                        <td class='text-start position-relative plan-table-data'>
                        .in
                        </td>
                        <td class='plan-table-data'>1</td>
                        <td class='plan-table-data'>$7.99</td>
                        <td class='plan-table-data'>$7.99</td>
                        <td class='plan-table-data'>$7.99</td>
                    </tr>
                    <tr>
                        <td class='text-start position-relative plan-table-data'>
                        .org.in
                        </td>
                        <td class='plan-table-data'>1</td>
                        <td class='plan-table-data'>$6.99</td>
                        <td class='plan-table-data'>$6.99</td>
                        <td class='plan-table-data'>$6.99</td>
                    </tr>
                    <tr>
                        <td class='text-start position-relative plan-table-data'>
                        .net.in
                        </td>
                        <td class='plan-table-data'>1</td>
                        <td class='plan-table-data'>$6.99</td>
                        <td class='plan-table-data'>$6.99</td>
                        <td class='plan-table-data'>$6.99</td>
                    </tr>
                    <tr>
                        <td class='text-start position-relative plan-table-data'>
                        .co.in
                        </td>
                        <td class='plan-table-data'>1</td>
                        <td class='plan-table-data'>$6.99</td>
                        <td class='plan-table-data'>$6.99</td>
                        <td class='plan-table-data'>$6.99</td>
                    </tr>
                    <tr>
                        <td class='text-start position-relative plan-table-data'>
                        .in.net
                        </td>
                        <td class='plan-table-data'>1</td>
                        <td class='plan-table-data'>$10.99</td>
                        <td class='plan-table-data'>$10.99</td>
                        <td class='plan-table-data'>$10.99</td>
                    </tr>
                    <tr>
                        <td class='text-start position-relative plan-table-data'>
                        .org
                        </td>
                        <td class='plan-table-data'>1</td>
                        <td class='plan-table-data'>$17.99</td>
                        <td class='plan-table-data'>$17.99</td>
                        <td class='plan-table-data'>$17.99</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    </div>
</section>


<section class="hosting-rating">
    <div class="container">

        <div class="d-flex justify-content-between">
            <span class="text-start">
                <img src="assets/img/yellow-circle.png" class="floating yellow-circle">
            </span>
            <span class="text-end">
                <img src="assets/img/cloud-circle.png" class="movingcloud">
            </span>
        </div>
        <?php include('animate-text.php') ?>

        <div class="d-flex justify-content-between">
            <span class="text-start">
                <img src="assets/img/cloud-wave.png" class="movingclouds">
            </span>
            <span class="text-end">
                <img src="assets/img/wave-yellow.png" class="floating">
            </span>
        </div>


    </div>
</section>


<?php
include('inc/customer-reviews.php');
?>


<!-- Eleventh section (FAQ) -->
<section class="faq">
    <div class="container">
        <h2 class="text-center faq-question">Frequently Asked Questions</h2>
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item faq-items">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button acc-purple-bg" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        What is a domain name?
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">To simply explain a domain name, it is the name that is given to the website for its unique identification. The name after the “www” while searching for a website is known as a domain name.</div>
                </div>
            </div>

            <div class="accordion-item faq-items">
                <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        What is domain name registration?
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">You will need a registrar to get the available domain name registered on your name so that no one can obtain or steal it after you have your authority on it. So the process of getting your domain name registered is called domain name registration.

                    </div>
                </div>
            </div>

            <div class="accordion-item faq-items">
                <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        If I register A domain, do I need web hosting to have a website?
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Yes, you will need a domain in the first place, but after naming your website and getting it completed, you will need a web hosting provider and their services to get your website live and running on the internet.
                    </div>
                </div>
            </div>

            <div class="accordion-item faq-items">
                <h2 class="accordion-header" id="flush-headingFour">
                    <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                        How can I get a free domain registration?
                    </button>
                </h2>
                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">If you buy one of the annual or triannual web hosting plans offered by YouStable, you’ll get a free domain name registration with it</div>
                </div>
            </div>

            <div class="accordion-item faq-items">
                <h2 class="accordion-header" id="flush-headingFive">
                    <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFour">
                        Is it possible to modify a domain name once it has been registered?

                    </button>
                </h2>
                <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Once you get your domain namer registered, you will not be able to change it. You can either drop that domain name and get another one registered at any time; otherwise, you will have to continue with the same after registration.</div>
                </div>
            </div>
            <div class="accordion-item faq-items">
                <h2 class="accordion-header" id="flush-headingSix">
                    <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseFour">
                        Can I Transfer A Domain I Already Own To Youstable?


                    </button>
                </h2>
                <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Yes, YouStable provides Domain Transfer services.
                        </ul>
                    </div>
                </div>


            </div>
            <div class="accordion-item faq-items">
                <h2 class="accordion-header" id="flush-headingSix">
                    <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseFour">
                        How Do I Search If My Domain Name Is Available To Be Registered?

                    </button>
                </h2>
                <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">The search box mentioned at the start of this webpage will help you in searching for a domain name and let you know if it's available in the market or not.</div>
                </div>

            </div>
            <div class="accordion-item faq-items">
                <h2 class="accordion-header" id="flush-headingSix">
                    <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseFour">
                        How Do I Choose The Perfect Domain?
                    </button>
                </h2>
                <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">There are some aspects you need to keep in mind to decide on a perfect domain name for yourself. Those things are like choosing a short domain name. In this case, the lesser, the better! Incorporate your brand name, research before deciding, think as per your targetted and local audience, and in the last, decide quickly and act even more quick to lay your hands on your desired and decided domain!</div>
                </div>

            </div>



            <div class="accordion-item faq-items">
                <h2 class="accordion-header" id="flush-headingSix1">
                    <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseSix1" aria-expanded="false" aria-controls="flush-collapseFour">
                        Can I register more than one Domain Name at a time?
                    </button>
                </h2>
                <div id="flush-collapseSix1" class="accordion-collapse collapse" aria-labelledby="flush-headingSix1"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Yes, you can register more than a single domain simultaneously.</div>
                </div>

            </div>

            <div class="accordion-item faq-items">
                <h2 class="accordion-header" id="flush-headingSix2">
                    <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseSix2" aria-expanded="false" aria-controls="flush-collapseFour">
                        How do I know if I have registered a Domain Name successfully?
                    </button>
                </h2>
                <div id="flush-collapseSix2" class="accordion-collapse collapse" aria-labelledby="flush-headingSix2"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">As soon as you register your domain name, you will receive a mail of successful registration from YouStable to let you know about the completion and implementation of the process.</div>
                </div>

            </div>

            <div class="accordion-item faq-items">
                <h2 class="accordion-header" id="flush-headingSix3">
                    <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseSix3" aria-expanded="false" aria-controls="flush-collapseFour">
                        Can I modify the DNS server information?
                    </button>
                </h2>
                <div id="flush-collapseSix3" class="accordion-collapse collapse" aria-labelledby="flush-headingSix3"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Go to the YouStable domain management dashboard and modify the DNS server information according to your needs.</div>
                </div>

            </div>

            <div class="accordion-item faq-items">
                <h2 class="accordion-header" id="flush-headingSix4">
                    <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseSix4" aria-expanded="false" aria-controls="flush-collapseFour">
                        What is domain privacy, and do I need it?
                    </button>
                </h2>
                <div id="flush-collapseSix4" class="accordion-collapse collapse" aria-labelledby="flush-headingSix4"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Domain privacy protects your personal details from anyone who searches about your domain, safeguarding all confidential information. Yes, you need it to keep your website and your business safe!</div>
                </div>

            </div>


        </div>
    </div>
</section>


<?php include('inc/chatUs.php') ?>

<?php include('inc/footer.php') ?>