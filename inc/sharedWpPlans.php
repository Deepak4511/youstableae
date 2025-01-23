<style>
    .paragraph {
        text-align: center;
        padding: 0px;
        border-bottom: 1px dashed #212529;
        cursor: pointer;
    }


    .custom-tooltip {
        --bs-tooltip-bg: var(--bd-violet-bg);
        --bs-tooltip-color: var(--bs-white);
        background-color: #6b46f2;
        text-align: center;
        border-radius: 2%;
        padding: 10px;
        font-size: 12px;
        border: 1px solid #212529;
    }
</style>

<div class="container">
    <div class="row nav nav-pills wid-more" id="pills-tab" role="tablist" style="padding: 4px;">
        <div class="col-lg-4 nav-button-plans"><button class="nav-link nav-linked active" id="pills-monthly-tab"
                data-bs-toggle="pill" data-bs-target="#pills-yearly" type="button" role="tab"
                aria-controls="pills-monthly" aria-selected="true" tabindex="-1">3 Year</button></div>
        <div class="col-lg-4 nav-button-plans"><button class="nav-link nav-linked" id="pills-half-yearly-tab"
                data-bs-toggle="pill" data-bs-target="#pills-half-yearly" type="button" role="tab"
                aria-controls="pills-half-yearly" aria-selected="false" tabindex="-1">1 Year</button></div>
        <div class="col-lg-4 nav-button-plans"><button class="nav-link nav-linked " id="pills-yearly-tab"
                data-bs-toggle="pill" data-bs-target="#pills-monthly" type="button" role="tab"
                aria-controls="pills-yearly" aria-selected="false">1 Month</button></div>
    </div>



    <div class="tab-content" id="pills-tabContent">
        <!-- start tab content -->
        <div class="tab-pane fade tab-titles" id="pills-monthly" role="tabpanel"
            aria-labelledby="pills-monthly-tab">
            <div class="row flex_unset shared-hosting-m-set">
                <div class="col-md-4 explore-cols">
                    <div class="position-relative h-100">
                        <div class="upper-card">
                            <h4 class="hosting-heading">DaStart</h4>
                            <div class="price-container">
                                <p class="hosting-price indian-host-price"><span class="hin-rs">₹</span>249</p>
                                <p class="hosting-price usa-host-price"><span class="hin-rs">$</span>3.10</p>
                            </div>
                            <a href="https://www.youstable.com/manage/order.php?currency=2&pid=338&billingcycle=monthly"
                                class="link-color-black indian-host-price" target="_self"><button
                                    class="btn-yellow exploreplan-btn comp-button-design" type="submit">Get
                                    Started</button></a>
                            <a href="https://www.youstable.com/manage/order.php?currency=1&pid=338&billingcycle=monthly"
                                class="link-color-black usa-host-price" target="_self"><button
                                    class="btn-yellow exploreplan-btn comp-button-design" type="submit">Get
                                    Started</button></a>
                            <div class="hosting_specification">
                                <div class="d-flex gap-2 specifications">
                                    <img src="assets/img/speci-tick.png" class="specification-tick">
                                    <p>Host 1 Website</p>
                                </div>
                                <div class="d-flex gap-2 specifications">
                                    <img src="assets/img/speci-tick.png" class="specification-tick">
                                    <p>50 GB NVMe SSD</p>
                                </div>
                                <div class="d-flex gap-2 specifications">
                                    <img src="assets/img/speci-tick.png" class="specification-tick">
                                    <p>Unmetered Bandwidth</p>
                                </div>
                                <div class="d-flex gap-2 specifications">
                                    <img src="assets/img/speci-tick.png" class="specification-tick">
                                    <p>512MB RAM</p>
                                </div>
                                <div class="free_setup btn-yellow " bis_skin_checked="1">
                                    <p class="m-0">You Save 0%</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 explore-cols">
                    <div class="position-relative h-100">

                        <div class="upper-card" style="background: #FEFDFF;">
                            <h4 class="hosting-heading">DaProfessional</h4>
                            <div class="price-container">
                                <p class="hosting-price indian-host-price"><span class="hin-rs">₹</span>499</p>
                                <p class="hosting-price usa-host-price"><span class="hin-rs">$</span>6.20</p>
                            </div>
                            <a href="https://www.youstable.com/manage/order.php?currency=2&pid=339&billingcycle=monthly"
                                class="text-white indian-host-price" target="_self"><button
                                    class="btn-purple exploreplan-btn comp-button-design" type="submit">Get
                                    Started</button></a>
                            <a href="https://www.youstable.com/manage/order.php?currency=1&pid=339&billingcycle=monthly"
                                class="text-white usa-host-price" target="_self"><button
                                    class="btn-purple exploreplan-btn comp-button-design" type="submit">Get
                                    Started</button></a>
                            <div class="hosting_specification">
                                <div class="d-flex gap-2 specifications">
                                    <img src="assets/img/speci-tick.png" class="specification-tick">
                                    <p>Host 10 Websites</p>
                                </div>
                                <div class="d-flex gap-2 specifications">
                                    <img src="assets/img/speci-tick.png" class="specification-tick">
                                    <p>100 GB NVMe SSD</p>
                                </div>
                                <div class="d-flex gap-2 specifications">
                                    <img src="assets/img/speci-tick.png" class="specification-tick">
                                    <p>Unmetered Bandwidth</p>
                                </div>
                                <div class="d-flex gap-2 specifications">
                                    <img src="assets/img/speci-tick.png" class="specification-tick">
                                    <p>1GB RAM</p>
                                </div>
                                <div class="free_setup btn-light-purple " bis_skin_checked="1">
                                    <p class="m-0">You Save 0%</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 explore-cols">
                    <div class="position-relative h-100">
                        <div class="upper-card">
                            <h4 class="hosting-heading">DaElite</h4>
                            <div class="price-container">
                                <p class="hosting-price indian-host-price"><span class="hin-rs">₹</span>699</p>
                                <p class="hosting-price usa-host-price"><span class="hin-rs">$</span>8.70</p>
                            </div>
                            <a href="https://www.youstable.com/manage/order.php?currency=2&pid=340&billingcycle=monthly"
                                class="link-color-black indian-host-price" target="_self"><button
                                    class="btn-yellow exploreplan-btn comp-button-design" type="submit">Get
                                    Started</button></a>

                            <a href="https://www.youstable.com/manage/order.php?currency=1&pid=340&billingcycle=monthly"
                                class="link-color-black usa-host-price" target="_self"><button
                                    class="btn-yellow exploreplan-btn comp-button-design" type="submit">Get
                                    Started</button></a>


                            <div class="hosting_specification">
                                <div class="d-flex gap-2 specifications">
                                    <img src="assets/img/speci-tick.png" class="specification-tick">
                                    <p>Host Unlimited Websites</p>
                                </div>
                                <div class="d-flex gap-2 specifications">
                                    <img src="assets/img/speci-tick.png" class="specification-tick">
                                    <p>200 GB NVMe SSD</p>
                                </div>
                                <div class="d-flex gap-2 specifications">
                                    <img src="assets/img/speci-tick.png" class="specification-tick">
                                    <p>Unmetered Bandwidth</p>
                                </div>
                                <div class="d-flex gap-2 specifications">
                                    <img src="assets/img/speci-tick.png" class="specification-tick">
                                    <p>4GB RAM</p>
                                </div>
                                <div class="free_setup btn-yellow " bis_skin_checked="1">
                                    <p class="m-0">You Save 0%</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- close monthly plan -->


        <div class="tab-pane fade tab-titles" id="pills-half-yearly" role="tabpanel"
            aria-labelledby="pills-half-yearly-tab">
            <!-- start Half Yearly tab plan -->
            <div class="row flex_unset shared-hosting-m-set">
                <div class="col-md-4 explore-cols">
                    <div class="position-relative h-100">
                        <div class="upper-card">
                            <h4 class="hosting-heading">DaStart</h4>

                            <div class="price-container">
                                <p class="hosting-price indian-host-price"><span class="hin-rs">₹</span>99</p>
                                <p class="hosting-price usa-host-price"><span class="hin-rs">$</span>1.20</p>
                            </div>
                            <a href="https://www.youstable.com/manage/order.php?currency=2&pid=338&billingcycle=annually"
                                class="link-color-black indian-host-price" target="_self"><button
                                    class="btn-yellow exploreplan-btn comp-button-design" type="submit">Get
                                    Started</button></a>

                            <a href="https://www.youstable.com/manage/order.php?currency=1&pid=338&billingcycle=annually"
                                class="link-color-black usa-host-price" target="_self"><button
                                    class="btn-yellow exploreplan-btn comp-button-design" type="submit">Get
                                    Started</button></a>

                            <div class="hosting_specification">
                                <div class="d-flex gap-2 specifications">
                                    <img src="assets/img/speci-tick.png" class="specification-tick">
                                    <p>Host 1 Website</p>
                                </div>
                                <div class="d-flex gap-2 specifications">
                                    <img src="assets/img/speci-tick.png" class="specification-tick">
                                    <p>50 GB NVMe SSD</p>
                                </div>
                                <div class="d-flex gap-2 specifications">
                                    <img src="assets/img/speci-tick.png" class="specification-tick">
                                    <p>Unmetered Bandwidth</p>
                                </div>
                                <div class="d-flex gap-2 specifications">
                                    <img src="assets/img/speci-tick.png" class="specification-tick">
                                    <p>512MB RAM</p>
                                </div>
                                <div class="free_setup btn-yellow " bis_skin_checked="1">
                                    <p class="m-0">You Save 60%</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 explore-cols">
                    <div class="position-relative h-100">

                        <div class="upper-card" style="background: #FEFDFF;">
                            <h4 class="hosting-heading">DaProfessional</h4>
                            <div class="price-container">
                                <p class="hosting-price indian-host-price"><span class="hin-rs">₹</span>224</p>
                                <p class="hosting-price usa-host-price"><span class="hin-rs">$</span>2.80</p>
                            </div>

                            <a href="https://www.youstable.com/manage/order.php?currency=2&pid=339&billingcycle=annually"
                                class="text-white indian-host-price" target="_self"><button
                                    class="btn-purple exploreplan-btn comp-button-design" type="submit">Get
                                    Started</button></a>

                            <a href="https://www.youstable.com/manage/order.php?currency=1&pid=339&billingcycle=annually"
                                class="text-white usa-host-price" target="_self"><button
                                    class="btn-purple exploreplan-btn comp-button-design" type="submit">Get
                                    Started</button></a>
                            <div class="hosting_specification">
                                <div class="d-flex gap-2 specifications">
                                    <img src="assets/img/speci-tick.png" class="specification-tick">
                                    <p>Host 10 Websites</p>
                                </div>
                                <div class="d-flex gap-2 specifications">
                                    <img src="assets/img/speci-tick.png" class="specification-tick">
                                    <p class="paragraph" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-custom-class="custom-tooltip"
                                        title="Choose a DaProfessional Web Hosting plan for 1 or 3 years and get a free domain name for the first year! You can select from the following extensions: .xyz, .shop, .cam, .co, .blog, .info, .life, .live, .site, .tech, or .technology.After purchasing your hosting plan, the free domain registration will appear in your control panel. The domain is free for the first year, with renewal charges applying after that. This offer cannot be customized.">
                                        1 Free Domain</p>
                                </div>
                                <div class="d-flex gap-2 specifications">
                                    <img src="assets/img/speci-tick.png" class="specification-tick">
                                    <p>100 GB NVMe SSD</p>
                                </div>
                                <div class="d-flex gap-2 specifications">
                                    <img src="assets/img/speci-tick.png" class="specification-tick">
                                    <p>Unmetered Bandwidth</p>
                                </div>
                                <div class="d-flex gap-2 specifications">
                                    <img src="assets/img/speci-tick.png" class="specification-tick">
                                    <p>1GB RAM</p>
                                </div>
                                <div class="free_setup btn-light-purple " bis_skin_checked="1">
                                    <p class="m-0">You Save 55%</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 explore-cols">
                    <div class="position-relative h-100">
                        <div class="upper-card">
                            <h4 class="hosting-heading">DaElite</h4>

                            <div class="price-container">
                                <p class="hosting-price indian-host-price"><span class="hin-rs">₹</span>314</p>
                                <p class="hosting-price usa-host-price"><span class="hin-rs">$</span>3.90</p>
                            </div>
                            <a href="https://www.youstable.com/manage/order.php?currency=2&pid=340&billingcycle=annually"
                                class="link-color-black indian-host-price" target="_self"><button
                                    class="btn-yellow exploreplan-btn comp-button-design" type="submit">Get
                                    Started</button></a>

                            <a href="https://www.youstable.com/manage/order.php?currency=1&pid=340&billingcycle=annually"
                                class="link-color-black usa-host-price" target="_self"><button
                                    class="btn-yellow exploreplan-btn comp-button-design" type="submit">Get
                                    Started</button></a>
                            <div class="hosting_specification">
                                <div class="d-flex gap-2 specifications">
                                    <img src="assets/img/speci-tick.png" class="specification-tick">
                                    <p>Host Unlimited Websites</p>
                                </div>
                                <div class="d-flex gap-2 specifications">
                                    <img src="assets/img/speci-tick.png" class="specification-tick">
                                    <p class="paragraph" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-custom-class="custom-tooltip"
                                        title="Choose a DaElite Web Hosting plan for 1 or 3 years and get a free domain name for the first year! You can select from the following extensions: .com, .xyz, .shop, .cam, .co, .blog, .info, .life, .live, .site, .tech, or .technology.After purchasing your hosting plan, the free domain registration will appear in your control panel. The domain is free for the first year, with renewal charges applying after that. This offer cannot be customized.">
                                        1 Free Domain</p>
                                </div>
                                <div class="d-flex gap-2 specifications">
                                    <img src="assets/img/speci-tick.png" class="specification-tick">
                                    <p>200 GB NVMe SSD</p>
                                </div>
                                <div class="d-flex gap-2 specifications">
                                    <img src="assets/img/speci-tick.png" class="specification-tick">
                                    <p>Unmetered Bandwidth</p>
                                </div>
                                <div class="d-flex gap-2 specifications">
                                    <img src="assets/img/speci-tick.png" class="specification-tick">
                                    <p>4GB RAM</p>
                                </div>
                                <div class="free_setup btn-yellow " bis_skin_checked="1">
                                    <p class="m-0">You Save 55%</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- Close Half Yearly Plan -->



        <div class="tab-pane fade show active tab-titles" id="pills-yearly" role="tabpanel"
            aria-labelledby="pills-yearly-tab">
            <!-- start Yearly tab plan -->
            <div class="row flex_unset shared-hosting-m-set">
                <div class="col-md-4 explore-cols">
                    <div class="position-relative h-100">
                        <div class="upper-card">
                            <h4 class="hosting-heading">DaStart</h4>

                            <div class="price-container">
                                <p class="hosting-price indian-host-price"><span class="hin-rs">₹</span>49</p>
                                <p class="hosting-price usa-host-price"><span class="hin-rs">$</span>0.60</p>
                            </div>

                            <a href="https://www.youstable.com/manage/order.php?currency=2&pid=338&billingcycle=triennially"
                                class="link-color-black indian-host-price" target="_self"><button
                                    class="btn-yellow exploreplan-btn comp-button-design" type="submit">Get
                                    Started</button></a>

                            <a href="https://www.youstable.com/manage/order.php?currency=1&pid=338&billingcycle=triennially"
                                class="link-color-black usa-host-price" target="_self"><button
                                    class="btn-yellow exploreplan-btn comp-button-design" type="submit">Get
                                    Started</button></a>

                            <div class="hosting_specification">
                                <div class="d-flex gap-2 specifications">
                                    <img src="assets/img/speci-tick.png" class="specification-tick">
                                    <p>Host 1 Website</p>
                                </div>
                                <div class="d-flex gap-2 specifications">
                                    <img src="assets/img/speci-tick.png" class="specification-tick">
                                    <p>50 GB NVMe SSD</p>
                                </div>
                                <div class="d-flex gap-2 specifications">
                                    <img src="assets/img/speci-tick.png" class="specification-tick">
                                    <p>Unmetered Bandwidth</p>
                                </div>
                                <div class="d-flex gap-2 specifications">
                                    <img src="assets/img/speci-tick.png" class="specification-tick">
                                    <p>512MB RAM</p>
                                </div>
                                <div class="free_setup btn-yellow " bis_skin_checked="1">
                                    <p class="m-0">You Save 80%</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 explore-cols">
                    <div class="position-relative h-100">

                        <div class="upper-card" style="background: #FEFDFF;">
                            <h4 class="hosting-heading">DaProfessional</h4>
                            <div class="price-container">
                                <p class="hosting-price indian-host-price"><span class="hin-rs">₹</span>149</p>
                                <p class="hosting-price usa-host-price"><span class="hin-rs">$</span>1.80</p>
                            </div>
                            <a href="https://www.youstable.com/manage/order.php?currency=2&pid=339&billingcycle=triennially"
                                class="text-white indian-host-price" target="_self"><button
                                    class="btn-purple exploreplan-btn comp-button-design" type="submit">Get
                                    Started</button></a>

                            <a href="https://www.youstable.com/manage/order.php?currency=1&pid=339&billingcycle=triennially"
                                class="text-white usa-host-price" target="_self"><button
                                    class="btn-purple exploreplan-btn comp-button-design" type="submit">Get
                                    Started</button></a>
                            <div class="hosting_specification">
                                <div class="d-flex gap-2 specifications">
                                    <img src="assets/img/speci-tick.png" class="specification-tick">
                                    <p>Host 10 Websites</p>
                                </div>
                                <div class="d-flex gap-2 specifications">
                                    <img src="assets/img/speci-tick.png" class="specification-tick">
                                    <p class="paragraph" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-custom-class="custom-tooltip"
                                        title="Choose a DaProfessional Web Hosting plan for 1 or 3 years and get a free domain name for the first year! You can select from the following extensions: .xyz, .shop, .cam, .co, .blog, .info, .life, .live, .site, .tech, or .technology.After purchasing your hosting plan, the free domain registration will appear in your control panel. The domain is free for the first year, with renewal charges applying after that. This offer cannot be customized.">
                                        1 Free Domain</p>

                                </div>
                                <div class="d-flex gap-2 specifications">
                                    <img src="assets/img/speci-tick.png" class="specification-tick">
                                    <p>100 GB NVMe SSD</p>
                                </div>
                                <div class="d-flex gap-2 specifications">
                                    <img src="assets/img/speci-tick.png" class="specification-tick">
                                    <p>Unmetered Bandwidth</p>
                                </div>
                                <div class="d-flex gap-2 specifications">
                                    <img src="assets/img/speci-tick.png" class="specification-tick">
                                    <p>1GB RAM</p>
                                </div>
                                <div class="free_setup btn-light-purple " bis_skin_checked="1">
                                    <p class="m-0">You Save 70%</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 explore-cols">
                    <div class="position-relative h-100">
                        <div class="upper-card">
                            <h4 class="hosting-heading">DaElite</h4>

                            <div class="price-container">
                                <p class="hosting-price indian-host-price"><span class="hin-rs">₹</span>209</p>
                                <p class="hosting-price usa-host-price"><span class="hin-rs">$</span>2.60</p>
                            </div>
                            <a href="https://www.youstable.com/manage/order.php?currency=2&pid=340&billingcycle=triennially"
                                class="link-color-black indian-host-price" target="_self"><button
                                    class="btn-yellow exploreplan-btn comp-button-design" type="submit">Get
                                    Started</button></a>

                            <a href="https://www.youstable.com/manage/order.php?currency=1&pid=340&billingcycle=triennially"
                                class="link-color-black usa-host-price" target="_self"><button
                                    class="btn-yellow exploreplan-btn comp-button-design" type="submit">Get
                                    Started</button></a>


                            <div class="hosting_specification">
                                <div class="d-flex gap-2 specifications">
                                    <img src="assets/img/speci-tick.png" class="specification-tick">
                                    <p>Host Unlimited Websites</p>
                                </div>
                                <div class="d-flex gap-2 specifications">
                                    <img src="assets/img/speci-tick.png" class="specification-tick">
                                    <p class="paragraph" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-custom-class="custom-tooltip"
                                        title="Choose a DaElite Web Hosting plan for 1 or 3 years and get a free domain name for the first year! You can select from the following extensions: .com, .xyz, .shop, .cam, .co, .blog, .info, .life, .live, .site, .tech, or .technology.After purchasing your hosting plan, the free domain registration will appear in your control panel. The domain is free for the first year, with renewal charges applying after that. This offer cannot be customized.">
                                        1 Free Domain</p>
                                </div>
                                <div class="d-flex gap-2 specifications">
                                    <img src="assets/img/speci-tick.png" class="specification-tick">
                                    <p>200 GB NVMe SSD</p>
                                </div>
                                <div class="d-flex gap-2 specifications">
                                    <img src="assets/img/speci-tick.png" class="specification-tick">
                                    <p>Unmetered Bandwidth</p>
                                </div>
                                <div class="d-flex gap-2 specifications">
                                    <img src="assets/img/speci-tick.png" class="specification-tick">
                                    <p>4GB RAM</p>
                                </div>
                                <div class="free_setup btn-yellow " bis_skin_checked="1">
                                    <p class="m-0">You Save 70%</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- Close Yearly Plan -->

    </div> <!-- close all tab content -->
    <div class="view-more-content">
        <div class="comparison-button">
            <a href="#viewMoreBtnn" class="View-Full-Comparison">View Full Comparison →</a>
        </div>
    </div>

    <!-- hide hidden content -->
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
<script>
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
    tooltipTriggerList.forEach(tooltipTriggerEl => {
        new bootstrap.Tooltip(tooltipTriggerEl);
    });
</script>