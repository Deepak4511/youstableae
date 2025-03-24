<?php
$page = 'datacenter';
include ('inc/header.php');
?>

<style>
    .view-btn {
    border: 1px solid #ffc235;
    background-color: #ffc235;
    color: #000;
    padding: 12px;
    font-size: 22px;
    font-weight: 500;
}

.view-btn:hover {
    background: #292929;
    color: #fff;
}
.badge-title{
background: #f2eeff;
    border-radius: 44px;
    width: fit-content;
    margin: auto;
    padding: 4px 48px;
    font-size: 16px;
    font-weight: 600;
}

.infra_partner{
    border: 1px solid #EBEEF2;
    box-shadow: 0px 1px 4px 0px #0000000D;
    padding: 2px 20px;
    border-radius: 5px;
    text-align: center;
}

.partners {
display: grid;
grid-template-columns: repeat(5, 1fr);
grid-template-rows: repeat(2, 1fr);
grid-column-gap: 6px;
grid-row-gap: 6px;
}
@media(max-width:768px){
    .partners {
grid-template-columns: repeat(2, 1fr);
} 
}
</style>


<section class="banner-sec share-bg data-centers">
  <div class=" container">
    <div class="row align-items-center reverse-column">
      <div class="col-md-6">
        <div class="banner-left-content">
 
          <h1 class="Banner-Heading padding-heading robust">Our Green Data Center Location</h1>
          <p class="Banner-title p-0 mb-4">Global data centres ensure that you can host your data exactly the location you need. Geographically chosen on the core of the Internet Our data centres offer high-speed connectivity and unparalleled availability! Choose a sustainable web hosting service provider that will positively impact the planet.</p>
          
           <div class="d-flex gap-3 lists-hosting">
          </div>
          
        </div>
       <a href="#explore"><button class="btn-yellow btn-explore-plan">DataCenter Location <i class="fa-solid fa-arrow-right"></i></button></a>
        
      </div>
      <div class="col-md-6">
        <img class="banner_img floatings" src="/assets/img/heroImg/Data-Center-Location.png" alt="Banner"
          srcset="">
      </div>
    </div>
  </div>
</section>


<section class="global-hosting-locate" id="explore">
    <div class="container global-hosting-local">
        <div class="row">
           
            <div class="col-lg-5">
                <div class="globe-image">
                    <img src="/assets/img/Global-Hosting-Locations.png" alt="image" class=""/>                    
                </div>
            </div>
            <div class="col-lg-6">
                <div class="content-globe">
                     <h2 class="lobal-hosting-locates">Global Hosting Locations</h2>
                    <p>Launch your website with YouStable in one of our top-tier hosting locations worldwide. <br class="remove-mobile"><br class="remove-mobile">Each of our data centers is directly connected to our Enterprise Edge providers, ensuring the best performance for your site.</p>
                </div>
                
                <div class="global-ul-list">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="lisy-design-global">
                            <ul>
                                <li>Asia </li></strong>
                                <p style="margin-bottom: 0;font-weight: 600;">India</p>
                                <ul style="padding-left: 10px !important;">
                                    <p style="margin-bottom: 0;">- Mumbai</p>
                                    <p>- Indore, MP</p>
                                </ul>
                                
                                <li>Europe </li>
                                <p style="margin-bottom: 0;font-weight: 600;">Netherlands</p>
                                <ul style="padding-left: 10px !important;">
                                    <p style="margin-bottom: 0;">- North Holland</p>
                                    <p>- Amsterdam</p>
                                </ul>
                                
                            </ul>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="lisy-design-globals">
                            <ul>
                                <li>USA</li>
                                <div class="d-flex gap-4">
                                    <div>
                                        <p style="margin-bottom: 0;font-weight: 600;">United States</p>
                                <ul style="padding-left: 10px !important;">
                                    <p style="margin-bottom: 0;">- California</p>
                                    <p style="margin-bottom: 0;">- San Francisco</p>
                                
                                </ul>
                                        <p style="margin-bottom: 0;font-weight: 600;">Florida</p>
                                <ul style="padding-left: 10px !important;">
                                    <p style="margin-bottom: 0;">- Miami</p>
                                    <p style="margin-bottom: 0;">- Tampa</p>
                                
                                </ul>
                                </div>
                                <div>
                                        <p style="margin-bottom: 0;font-weight: 600;">New York</p>
                                <ul style="padding-left: 10px !important;">
                                    <p style="margin-bottom: 0;">- New York City</p>
                                </ul>
                                        <p style="margin-bottom: 0;font-weight: 600;">Texas</p>
                                <ul style="padding-left: 10px !important;">
                                    <p style="margin-bottom: 0;">- Dallas</p>
                                    <p style="margin-bottom: 0;">- Irving</p>
                                </ul>
                                
                                    </div>
                                </div>
                            </ul>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="explore-section plans-mobile-one shared-explore data-center-sec">
  <div class="text-center data-center-head">
    <h2 class="server-heading shared-heading-plan">Infrastructure Partners</h2>
  </div>
  <div class="container">
<div class="partners">
    <div class="infra_partner"><img src="/assets/img/features/cloudflare.png" alt="" class=""></div>
    <div class="infra_partner"><img src="/assets/img/features/cloudlinux.png" alt="" class=""></div>
    <div class="infra_partner"><img src="/assets/img/features/cpannel.png" alt="" class=""></div>
    <div class="infra_partner"><img src="/assets/img/features/softaculous.png" alt="" class="w-100 m-2"></div>
    <div class="infra_partner"><img src="/assets/img/features/litespeed.png" alt="" class="w-100 m-2"></div>
    <div class="infra_partner"><img src="/assets/img/features/bitninja.png" alt="bitninja security" class="w-100 m-2"></div>
    <div class="infra_partner"><img src="/assets/img/features/direct-admin.png" alt="" class="w-100 m-2"></div>
    <div class="infra_partner"><img src="/assets/img/features/intel.png" alt="" class="w-100 m-2"></div>
    <div class="infra_partner"><img src="/assets/img/features/imunify360.png" alt="" class="w-100"></div>
    <div class="infra_partner"><img src="/assets/img/features/jetbackup.png" alt="" class="w-100 m-2"></div>

</div>
</div>
</section>


<section>
<div class='resource-section p-1'>
    <div class="container my-4">
        <h2 class="text-center mb-3 m-auto">Web Hosting Plans for your Every Needs</h2>
        <p class="text-center w-75 m-auto mb-5 sub-heading">
        Discover comprehensive web hosting plans tailored to meet all your online needs. Whether you're a small business, a blogger, or an e-commerce store, we have the perfect hosting solution for you.
        </p>
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="card text-center resource-card">
                    <div class="card-body resource-body">
                        <p class="badge-title mb-4">VPS Hosting</p>
                        
                        
                        <p class='plan-resource-desc mb-4'>Experience ultra-high performance at a very low cost, an ideal hosting for those who are running a high-traffic website.</p>
                        <p class="text-muted mb-3">Starting at</p>
                        <h3 class='mt-4 hosting-price mb-3'>
                            AED 25
                            <small>/month</small>
                        </h3>
                        <a href="/offshore-web-hosting.php"> <button class="btn w-100 view-btn fw-blod">
                                VIEW OPTIONS</button></a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="card text-center resource-card">
                    <div class="card-body resource-body">
                        <p class="badge-title mb-4">Dedicated Server</p>
                        
                        
                        <p class='plan-resource-desc mb-4'>Experience ultra-high performance at a very low cost, an ideal hosting for those who are running a high-traffic website.</p>
                        <p class="text-muted mb-3">Starting at</p>
                        <h3 class='mt-4 hosting-price mb-3'>
                            AED 472
                            <small>/month</small>
                        </h3>
                        <a href=""> <button class="btn w-100 view-btn fw-blod">
                                VIEW OPTIONS</button></a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="card text-center resource-card">
                    <div class="card-body resource-body">
                        <p class="badge-title mb-4">WordPress Hosting</p>
                        <p class='plan-resource-desc mb-4'>Choose the best name that represents your business or website with multiple domain extensions available.</p>
                        <p class="text-muted mb-3">Starting at</p>
                        <h3 class='mt-4 hosting-price mb-3'>
                            AED 6
                            <small>/month</small>
                        </h3>
                        <a href="/offshore-web-hosting.php"> <button class="btn w-100 view-btn fw-blod">
                         VIEW OPTIONS</button></a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="card text-center resource-card">
                    <div class="card-body resource-body">
                        <p class="badge-title mb-4">Shared Hosting</p>
                        
                        
                        <p class='plan-resource-desc mb-4'>Experience the simplest & most cost-effective solution for launching and expanding your website.</p>
                        <p class="text-muted mb-3">Starting at</p>
                        <h3 class='mt-4 hosting-price mb-3'>
                        AED 6
                            <small>/month</small>
                        </h3>
                        <a href="/offshore-web-hosting.php"> <button class="btn w-100 view-btn fw-blod">VIEW OPTIONS</button></a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="card text-center resource-card">
                    <div class="card-body resource-body">
                        <p class="badge-title mb-4">Forex VPS</p>
   
                        <p class='plan-resource-desc mb-4'>Experience the ultimate forex trading to the next level with our Fastest VPS Hosting.</p>
                        <p class="text-muted mb-3">Starting at</p>
                        <h3 class='mt-4 hosting-price mb-3'>
                            AED 112
                            <small>/month</small>
                        </h3>
                        <a href="/offshore-web-hosting.php"> <button class="btn w-100 view-btn fw-blod">
                                VIEW OPTIONS</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include('inc/chatUs.php') ?>

<?php include('inc/footer.php') ?>