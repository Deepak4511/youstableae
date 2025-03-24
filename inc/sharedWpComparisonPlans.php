<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    .paragraph {
        padding: 0px;
        border-bottom: 1px dashed #212529;
        cursor: pointer;
    }


    /* .tooltip .tooltip-inner {
        --bs-tooltip-bg: var(--bd-violet-bg);
        --bs-tooltip-color: var(--bs-white);
        background-color: #6b46f8;
        text-align: center;
        border-radius: 2%;
        padding: 10px;
        font-size: 12px;
    } */

    .checkmark {
        color: #6b46f8;
        font-weight: bold;
    }

    .sticky-table-footer {
        position: sticky;
        bottom: 0;
        border-bottom: 1px solid #f6f6f6;
    }

    p.hosting-price.indian-host-prices,
    p.hosting-price.usa-host-prices {
        margin-top: -7px !important;
        font-size: 24px;
    }

    span.hin-rs {
        font-size: 26px !important;
    }

    .price-container.share-set-pd {
        margin-bottom: -26px !important;
    }

    button.btn-yellow.exploreplan-btn.comp-button-design,
    button.btn-purple.exploreplan-btn.comp-button-design {
        margin-top: 8px !important;
        margin-bottom: 0px !important;
        font-size: 16px;
    }
</style>

<style>
    .table-container {
        border: 1px solid #f6f6f6;
        border-radius: 15px;
    }

    .table-striped {
        border-bottom: 1px solid #f6f6f6;
    }

    .table-heading {
        width: 25%;
        padding: 20px;
        font-size: 20px;
        font-weight: 700;
    }

    .table-option {
        width: 25%;
        padding: 20px;
    }

    .heading-section {
        background-color: #ffff;
        position: sticky;
        top: 110px;
        border: 1px solid #f6f6f6;
        border-radius: 15px 15px 0px 0px;
    }
    .bottom-section{
        position: sticky;
        bottom: 0px;
        background-color: #fff;
        border-bottom: 1px solid #f6f6f6;
    }

    .bottom-option{
        padding: 12px;
        width: 25%;
        border-top: 1px solid #f6f6f6;
    }
    .style-strip{
        background-color: #f6f6f6;
    }

    @media(max-width:786px) {
        .scroll-table {
            overflow: auto;
        }

        .table-container {
            width: 786px;
        }

        .compare-section {
            max-height: 545px;
            overflow-y: scroll;
        }


        .heading-section {
            top: 0px;
        }

    }
</style>



<section class="mb-5" id="viewMoreBtnn">
    <div class="container ">
        <div class="row">
            <div class="scroll-table">
                <div class="table-container">
                    <div class="heading-section">
                        <div class="table-striped table-top  d-flex">
                            <div class="table-heading">
                                Plan Features
                            </div>
                            <div class="table-heading">
                                DaStart
                            </div>
                            <div class="table-heading">
                                DaProfessional
                            </div>
                            <div class="table-heading">
                                DaElite
                            </div>

                        </div>
                    </div>
                    <div class="compare-section">
                        <div class="table-striped d-flex style-strip" >
                            <div class="table-option">
                                Host Website
                            </div>
                            <div class="table-option">
                                1
                            </div>
                            <div class="table-option">10</div>
                            <div class="table-option">Unlimited</div>
                        </div>
                        <div class="table-striped d-flex">
                            <div class="table-option">Free Domain</div>
                            <div class="table-option"><span class="text-danger">✘</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                        </div>
                        <div class="table-striped style-strip d-flex">
                            <div class="table-option">Locations</div>
                            <div class="table-option">USA</div>
                            <div class="table-option">USA</div>
                            <div class="table-option">USA</div>
                        </div>
                        <div class="table-striped d-flex">
                            <div class="table-option">NVMe SSD Drive</div>
                            <div class="table-option">50GB</div>
                            <div class="table-option">100GB</div>
                            <div class="table-option">200GB</div>
                        </div>
                        <div class="table-striped style-strip d-flex">
                            <div class="table-option">Bandwidth</div>
                            <div class="table-option">Unmetered</div>
                            <div class="table-option">Unmetered</div>
                            <div class="table-option">Unmetered</div>
                        </div>
                        <div class="table-striped d-flex">
                            <div class="table-option">Control Panel</div>
                            <div class="table-option">DirectAdmin</div>
                            <div class="table-option">DirectAdmin</div>
                            <div class="table-option">DirectAdmin</div>
                        </div>
                        <div class="table-striped style-strip d-flex">
                            <div class="table-option">1-Click Installer</div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                        </div>
                        <div class="table-striped d-flex">
                            <div class="table-option">Drag and Drop Sitebuilder</div>
                            <div class="table-option">Free</div>
                            <div class="table-option">Free</div>
                            <div class="table-option">Free</div>
                        </div>
                        <div class="table-striped style-strip d-flex">
                            <div class="table-option">Sub-Domains</div>
                            <div class="table-option">5</div>
                            <div class="table-option">10</div>
                            <div class="table-option">100</div>
                        </div>
                        <div class="table-striped d-flex">
                            <div class="table-option">Parked Domains</div>
                            <div class="table-option">5</div>
                            <div class="table-option">10</div>
                            <div class="table-option">100</div>
                        </div>
                        <div class="table-striped style-strip d-flex">
                            <div class="table-option">Addon Domains</div>
                            <div class="table-option"><span class="text-danger">✘</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                        </div>
                        <div class="table-striped d-flex">
                            <div class="table-option">SSL Certificate</div>
                            <div class="table-option">LetsEncrypt</div>
                            <div class="table-option">LetsEncrypt</div>
                            <div class="table-option">LetsEncrypt</div>
                        </div>
                        <div class="table-striped style-strip d-flex">
                            <div class="table-option">Website Backup</div>
                            <div class="table-option">Free</div>
                            <div class="table-option">Free</div>
                            <div class="table-option">Free</div>
                        </div>
                        <div class="table-striped d-flex">
                            <div class="table-option">FTP Users</div>
                            <div class="table-option">5</div>
                            <div class="table-option">10</div>
                            <div class="table-option">100</div>
                        </div>
                        <div class="table-striped style-strip d-flex">
                            <div class="table-option">Softaculous Installer</div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                        </div>
                        <div class="table-striped d-flex">
                            <div class="fw-bold" style="padding: 20px;"><span style="text-decoration: dashed;">Control Panel Features</span></div>
                        </div>
                        <div class="table-striped style-strip d-flex">
                            <div class="table-option">FTP Account Management</div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                        </div>
                        <div class="table-striped d-flex">
                            <div class="table-option">Virus Scanner</div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                        </div>
                        <div class="table-striped style-strip d-flex">
                            <div class="table-option"> Apache Handlers Manager</div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                        </div>
                        <div class="table-striped d-flex">
                            <div class="table-option">Hotlink Protection</div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                        </div>
                        <div class="table-striped style-strip d-flex">
                            <div class="table-option">IP Deny Manager</div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                        </div>
                        <div class="table-striped d-flex">
                            <div class="table-option">Index Manager</div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                        </div>
                        <div class="table-striped style-strip d-flex">
                            <div class="table-option"> MIME Types Manager</div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                        </div>
                        <div class="table-striped d-flex">
                            <div class="table-option"> Redirect Manager</div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                        </div>
                        <div class="table-striped style-strip d-flex">
                            <div class="table-option">Change Language</div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                        </div>
                        <div class="table-striped d-flex">
                            <div class="table-option">Web Disk</div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                        </div>
                        <div class="table-striped style-strip d-flex">
                            <div class="table-option">Password Protection</div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                        </div>
                        <div class="table-striped d-flex">
                            <div class="table-option"> Multiple PHP Support</div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                        </div>
                        <div class="table-striped style-strip d-flex">
                            <div class="table-option"> Customizable php.ini</div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                        </div>
                        <div class="table-striped d-flex">
                            <div class="table-option">Cron Jobs</div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                        </div>
                        <div class="table-striped style-strip d-flex">
                            <div class="table-option"> Manage DNS</div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                        </div>
                        <div class="table-striped d-flex">
                            <div class="table-option"> Install PHP PEAR Packages</div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                        </div>
                        <div class="table-striped style-strip d-flex">
                            <div class="table-option"> Install Perl Modules</div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                        </div>
                        <div class="table-striped d-flex">
                            <div class="table-option">Backup Manager</div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                        </div>
                        <div class="table-striped style-strip d-flex">
                            <div class="table-option"> Git Version Control</div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                        </div>
                        <div class="table-striped  d-flex">
                            <div class="table-option">Resource Usage Monitoring</div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                        </div>
                        <div class="table-striped style-strip d-flex">
                            <div class="table-option">User Manager</div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                        </div>
                        <div class="table-striped  d-flex">
                            <div class="table-option">Style and Preferences Management</div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                        </div>
                        <div class="table-striped style-strip d-flex">
                            <div class="table-option">File Manager</div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                        </div>
                        <div class="table-striped  d-flex">
                            <div class="table-option">Cache Manager</div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                        </div>
                        <div class="table-striped style-strip d-flex">
                            <div class="table-option">Custom Error Pages</div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                        </div>
                        <div class="table-striped  d-flex">
                            <div class="fw-bold" style="padding: 20px;"><span style="text-decoration: dashed;">Server Features</span></div>
                        </div>
                        <div class="table-striped style-strip d-flex">
                            <div class="table-option"> Apache with LiteSpeed</div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                        </div>
                        <div class="table-striped   d-flex">
                            <div class="table-option">HTTP/2</div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                        </div>
                        <div class="table-striped style-strip  d-flex">
                            <div class="table-option">PHP 7.4 to 8.2</div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                        </div>
                        <div class="table-striped  d-flex">
                            <div class="table-option"> WAF Protection</div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                        </div>
                        <div class="table-striped style-strip  d-flex">
                            <div class="table-option"> Database Optimizer</div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                        </div>
                        <div class="table-striped  d-flex">
                            <div class="table-option">Lossless Data Compression</div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                        </div>
                        <div class="table-striped  style-strip d-flex">
                            <div class="table-option">Browser Optimization</div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                        </div>
                        <div class="table-striped  d-flex">
                            <div class="table-option">Memcached</div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                        </div>
                        <div class="table-striped  style-strip d-flex">
                            <div class="table-option">OPCache</div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                        </div>
                        <div class="table-striped  d-flex">
                            <div class="table-option"> Mod_Expires</div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                        </div>
                        <div class="table-striped style-strip d-flex">
                            <div class="table-option"> Laravel</div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                        </div>
                        <div class="table-striped d-flex">
                            <div class="table-option"> CodeIgnitor</div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                        </div>
                        <div class="table-striped style-strip d-flex">
                            <div class="table-option">Leverage Browser Caching</div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                        </div>
                        <div class="table-striped  d-flex">
                            <div class="table-option"> Gzip Compression</div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                        </div>
                        <div class="table-striped style-strip d-flex">
                            <div class="table-option">Expires Headers</div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                        </div>
                        <div class="table-striped  d-flex">
                            <div class="table-option"> KeepAlive</div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                        </div>
                        <div class="table-striped style-strip  d-flex">
                            <div class="table-option">WP-CLI</div>
                            <div class="table-option"><span class="text-danger">✘</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                        </div>
                        <div class="table-striped d-flex">
                            <div class="table-option"> 1-Click Installer</div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                        </div>
                        <div class="table-striped style-strip d-flex">
                            <div class="fw-bold" style="padding: 20px;"><span style="text-decoration: dashed;">Database Features</span></div>
                        </div>
                        <div class="table-striped d-flex">
                            <div class="table-option">MySQL Databases</div>
                            <div class="table-option">5</div>
                            <div class="table-option">10</div>
                            <div class="table-option">100</div>
                        </div>
                        <div class="table-striped style-strip d-flex">
                            <div class="table-option">MySQL DB Size</div>
                            <div class="table-option">1000MB</div>
                            <div class="table-option">1000MB</div>
                            <div class="table-option">1000MB</div>
                        </div>
                        <div class="table-striped d-flex">
                            <div class="table-option">PHP MyAdmin</div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                        </div>
                        <div class="table-striped style-strip  d-flex">
                            <div class="table-option">Remote MySQL</div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                        </div>
                        <div class="table-striped  d-flex">
                            <div class="fw-bold" style="padding: 20px;"><span style="text-decoration: dashed;">Email Features</span></div>
                        </div>
                        <div class="table-striped style-strip d-flex">
                            <div class="table-option">Email Accounts</div>
                            <div class="table-option">5 Email Accounts</div>
                            <div class="table-option">10 Email Accounts</div>
                            <div class="table-option">100 Email Accounts</div>
                        </div>
                        <div class="table-striped  d-flex">
                            <div class="table-option">Email Forwarders</div>
                            <div class="table-option">Unlimited</div>
                            <div class="table-option">Unlimited</div>
                            <div class="table-option">Unlimited</div>
                        </div>
                        <div class="table-striped style-strip d-flex">
                            <div class="table-option">Email Autoresponders</div>
                            <div class="table-option">Unlimited</div>
                            <div class="table-option">Unlimited</div>
                            <div class="table-option">Unlimited</div>
                        </div>
                        <div class="table-striped  d-flex">
                            <div class="table-option">Attachment Limit</div>
                            <div class="table-option">10 MB</div>
                            <div class="table-option">50 MB</div>
                            <div class="table-option">100 MB</div>
                        </div>
                        <div class="table-striped style-strip d-flex">
                            <div class="table-option">Webmail</div>
                            <div class="table-option">RoundCube Webmail</div>
                            <div class="table-option">RoundCube Webmail</div>
                            <div class="table-option">RoundCube Webmail</div>
                        </div>
                        <div class="table-striped  d-flex">
                            <div class="table-option">Protocols</div>
                            <div class="table-option">SMTP, POP3, IMAP</div>
                            <div class="table-option">SMTP, POP3, IMAP</div>
                            <div class="table-option">SMTP, POP3, IMAP</div>
                        </div>
                        <div class="table-striped style-strip d-flex">
                            <div class="table-option">SPF and DKIM Support</div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                        </div>
                        <div class="table-striped  d-flex">
                            <div class="table-option">Overall Mailbox Storage</div>
                            <div class="table-option">2 GB</div>
                            <div class="table-option">5 GB</div>
                            <div class="table-option">10 GB</div>
                        </div>
                        <div class="table-striped style-strip d-flex">
                            <div class="table-option">Email Sends Per Hour</div>
                            <div class="table-option">25 Emails Per Hour</div>
                            <div class="table-option">50 Emails Per Hour</div>
                            <div class="table-option">100 Emails Per Hour</div>
                        </div>
                        <div class="table-striped  d-flex">
                            <div class="table-option">Webmail in Gmail</div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                        </div>
                        <div class="table-striped style-strip d-flex">
                            <div class="table-option">Email Clients</div>
                            <div class="table-option">Outlook / Thunderbird / Mac Mail</div>
                            <div class="table-option">Outlook / Thunderbird / Mac Mail</div>
                            <div class="table-option">Outlook / Thunderbird / Mac Mail</div>
                        </div>
                        <div class="table-striped  d-flex">
                            <div class="fw-bold" style="padding: 20px;">Security Solutions</div>
                        </div>
                        <div class="table-striped style-strip d-flex">
                            <div class="table-option">Network Firewall</div>
                            <div class="table-option"><span class="checkmark">✔</span> </div>
                            <div class="table-option"><span class="checkmark">✔</span> </div>
                            <div class="table-option"><span class="checkmark">✔</span> </div>
                        </div>
                        <div class="table-striped  d-flex">
                            <div class="table-option"> Web Application Firewall</div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span> </div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                        </div>
                        <div class="table-striped style-strip d-flex">
                            <div class="table-option">Brute-force Protection</div>
                            <div class="table-option"><span class="checkmark">✔</span> </div>
                            <div class="table-option"><span class="checkmark">✔</span> </div>
                            <div class="table-option"><span class="checkmark">✔</span> </div>
                        </div>
                        <div class="table-striped d-flex">
                            <div class="table-option">Exploits and Malware Protect</div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                        </div>
                        <div class="table-striped style-strip d-flex">
                            <div class="table-option">Malware Scan and Reports</div>
                            <div class="table-option"><span class="checkmark">✔</span> </div>
                            <div class="table-option"><span class="checkmark">✔</span> </div>
                            <div class="table-option"><span class="checkmark">✔</span> </div>
                        </div>
                        <div class="table-striped d-flex">
                            <div class="table-option"> Two-Factor Authentication (2FA)</div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                        </div>
                        <div class="table-striped style-strip d-flex">
                            <div class="table-option">Monarx Server Security</div>
                            <div class="table-option"><span class="checkmark">✔</span> </div>
                            <div class="table-option"><span class="checkmark">✔</span> </div>
                            <div class="table-option"><span class="checkmark">✔</span> </div>
                        </div>
                        <div class="table-striped d-flex">
                            <div class="table-option">Account Isolation</div>
                            <div class="table-option"><span class="checkmark">✔</span> </div>
                            <div class="table-option"><span class="checkmark">✔</span> </div>
                            <div class="table-option"><span class="checkmark">✔</span> </div>
                        </div>
                        <div class="table-striped style-strip d-flex">
                            <div class="table-option">Power / Network / Hardware Redundancy</div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                        </div>

                        <div class="table-striped d-flex">
                            <div class="fw-bold" style="padding: 20px;">Account Resources</div>
                        </div>
                        <div class="table-striped style-strip d-flex">
                            <div class="table-option"> CPU Core</div>
                            <div class="table-option">1</div>
                            <div class="table-option">2</div>
                            <div class="table-option">2</div>
                        </div>
                        <div class="table-striped d-flex">
                            <div class="table-option"> RAM</div>
                            <div class="table-option">512MB</div>
                            <div class="table-option">1GB</div>
                            <div class="table-option">4GB</div>
                        </div>
                        <div class="table-striped style-strip d-flex">
                            <div class="table-option"> Concurrent Connections (EP)</div>
                            <div class="table-option">20</div>
                            <div class="table-option">40</div>
                            <div class="table-option">60</div>
                        </div>
                        <div class="table-striped d-flex">
                            <div class="table-option"> Number of Processes (nPROC)</div>
                            <div class="table-option">20</div>
                            <div class="table-option">50</div>
                            <div class="table-option">100</div>
                        </div>
                        <div class="table-striped style-strip d-flex">
                            <div class="table-option"> IO Limit</div>
                            <div class="table-option">1MBPS</div>
                            <div class="table-option">5MBPS</div>
                            <div class="table-option">10MBPS</div>
                        </div>
                        <div class="table-striped  d-flex">
                            <div class="table-option"> File (Inode) Limit</div>
                            <div class="table-option">75,000</div>
                            <div class="table-option">250,000</div>
                            <div class="table-option">500,000</div>
                        </div>
                        <div class="table-striped style-strip d-flex">
                            <div class="fw-bold" style="padding: 20px;">Our Guarantees</div>
                        </div>
                        <div class="table-striped d-flex">
                            <div class="table-option"> 30 Day Money Back Guarantee</div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                        </div>
                        <div class="table-striped style-strip d-flex">
                            <div class="table-option"> 99.95% Uptime Guarantee</div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                        </div>
                        <div class="table-striped d-flex">
                            <div class="table-option"> Upgrade on Pro Rata Basis</div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                        </div>
                        <div class="table-striped style-strip d-flex">
                            <div class="table-option"> 24/7/365 Expert Support</div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                        </div>
                        <div class="table-striped d-flex">
                            <div class="table-option"> Free Website Migration</div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                        </div>
                        <div class="table-striped style-strip d-flex">
                            <div class="table-option"> Instant Setup</div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                        </div>
                        <div class="table-striped d-flex">
                            <div class="table-option">Free Video Tutorials</div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                            <div class="table-option"><span class="checkmark">✔</span></div>
                        </div>
                        <div class="bottom-section">
                            <div class="d-flex">
                                <div class="bottom-option"></div>
                                <div class="bottom-option">

                                    <div class="price-container share-set-pd">
                                        <p class="hosting-price indian-host-price indian-host-prices"><span
                                                class="hin-rs">AED </span>6</p>

                                        <p class="per_month comp-table-year">/mo*</p>
                                    </div>
                                    <a href="https://www.youstable.com/manage/order.php?currency=1&pid=338"
                                        class="link-color-black indian-host-price" target="_self"><button
                                            class="btn-yellow exploreplan-btn comp-button-design" type="submit">Get Started </button></a>

                                    <a href="https://www.youstable.com/manage/order.php?currency=1&pid=338"
                                        class="link-color-black usa-host-price" target="_self" style="display: none;"><button
                                            class="btn-yellow exploreplan-btn comp-button-design" type="submit">Get Started </button></a>
                                </div>
                                <div class="bottom-option">
                                    <div class="price-container share-set-pd">
                                        <p class="hosting-price indian-host-price indian-host-prices"><span
                                                class="hin-rs">AED </span>8</p>
                                        <p class="per_month comp-table-year">/mo*</p>
                                    </div>
                                    <a href="https://www.youstable.com/manage/order.php?currency=1&pid=339"
                                        class="text-white indian-host-price" target="_self"><button
                                            class="btn-purple exploreplan-btn comp-button-design" type="submit">Get Started </button></a>

                                    <a href="https://www.youstable.com/manage/order.php?currency=1&pid=339"
                                        class="text-white usa-host-price" target="_self" style="display: none;"><button
                                            class="btn-purple exploreplan-btn comp-button-design" type="submit">Get Started </button></a>
                                </div>
                                <div class="bottom-option">
                                    <div class="price-container share-set-pd">
                                        <p class="hosting-price indian-host-price indian-host-prices"><span
                                                class="hin-rs">AED </span>11</p>
                                        <p class="per_month comp-table-year">/mo*</p>
                                    </div>
                                    <a href="https://www.youstable.com/manage/order.php?currency=1&pid=340"
                                        class="link-color-black indian-host-price" target="_self"><button
                                            class="btn-yellow exploreplan-btn comp-button-design" type="submit">Get Started </button></a>

                                    <a href="https://www.youstable.com/manage/order.php?currency=1&pid=340"
                                        class="link-color-black usa-host-price" target="_self" style="display: none;"><button
                                            class="btn-yellow exploreplan-btn comp-button-design" type="submit">Get Started </button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
<script>
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
    tooltipTriggerList.forEach(tooltipTriggerEl => {
        new bootstrap.Tooltip(tooltipTriggerEl);
    });
</script>