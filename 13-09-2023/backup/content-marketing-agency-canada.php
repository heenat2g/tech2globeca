<!doctype html>
<html class="no-js" lang="en">
<?php include('include/meta.php');?>
<?php include('include/header.php');?>
		<style>
		@import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css");
body{color: #000;}
.w-90 {
    width: 90%;
    font-size: 17px;
}

		.bg-dark-t2g-5 {
    background-color: rgba(0,0,0,.6);
}

.brandouter {
    padding: 40px 0;
    background: url(images/grey-bg.jpg) top left;
    border-top: 2px solid #f0f0f0;
    text-align: center;
}

.Clientlg-outer {
    width: 20%!important;
    height: auto;
    float: left;
    box-shadow: inset -1px -1px #dceaf4, -1px -1px #dceaf4;
}

.Clientlg {
    transition: .3s;
    text-align: center;
    display: flex;
    align-items: center;
    min-height: 105px;
}

.Clientlg img {
    margin: 0 auto!important;
    width: 204px;
}

.buy-theme span, .all-demo span {
    padding: 0 9px;
    position: relative;
    top: 0;
    opacity: 0;
    display: None !important;
}
header nav.navbar-default, nav.navbar.bootsnav {
    border-bottom: 0;
    background-color: #ffffff;
}

.contact-icon {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    margin: 0 auto 20px;
}
.bg-red-t2g {
    background-color: #c81517;
}

.Clientlg-outera {
    width: 11%;
    float: left;
    /* padding: 0px; */
    box-shadow: inset -1px -1px #dceaf4, -1px -1px #dceaf4;
}

.brandouter3{

padding: 40px 0;
    background: url(images/grey-bg.jpg) top left;
    border-top: 2px solid #f0f0f0;
    text-align: center;
}
.list-style-4 li {
    position: relative;
    padding: 0 0 10px 22px;
    margin: 0 0 10px 0;
    border-bottom: 1px solid rgba(255, 255, 255, 0.2);
}


		</style>
<body> 
        <!-- start page title section -->
        <section class="wow animate__fadeIn parallax top-space" data-parallax-background-ratio="0.5" style="background-image: url(images/Banner-digital-marketing-agency.png); background-position: 0% 0px; visibility: visible; animation-name: fadeIn;">
            <div class="opacity-80 opacity-medium bg-extra-dark-gray"></div>
            <div class="container position-relative">
                <div class="row align-items-center">
                    <div class="col-12 d-flex flex-column text-center justify-content-center page-title-large padding-30px-tb">

                        <!-- start page title -->
						<h2 class="h1 text-uppercase alt-font text-white-2 font-weight-600 mb-0">BEST CONTENT MARKETING SERVICES IN CANADA</h2>
						<p class="p alt-font text-white banner-text mt-3 width-80 mx-auto">
						 One-stop platform that handles everything from content ideation to delivery
						</p>
                        <!-- end page title -->
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title section -->  
		
        <!-- end parallax hero section -->
		

		
        <!-- start about agency section -->
<!--         <section class="wow animate__fadeIn" style="padding: 60px 0;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-xl-8 col-lg-9 col-md-11 text-center margin-six-bottom sm-margin-30px-bottom">
                        <h6 class="font-weight-500 text-extra-dark-gray mb-0" style="font-size: 36px;">
<strong class="font-weight-400">Best Digital Marketing Agency Toronto
</strong>


						</h6>
                    </div>
                </div>
           </div>            
        </section> -->
        <!-- end about agency section -->
		
		<!-- starts breadcrumb section -->  
		<section class="wow animate__fadeIn p-0" style="background-color:rgba(0,0,0,0.1);">
		 <div class="container">
		   <div class="row p-2">
		     <div class="col-12">
			   <ul class="breadcrumb">
			     <li class="m-1"><a class="text-dark"  href="/"> Home</a></li> 
			     <li class="m-1 text-dark">/</li> 
				 <li class="m-1"><a class="text-dark" href="<?php echo $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";?>" > <?php echo str_replace("/","",str_replace("-"," ",$_SERVER['REQUEST_URI'] )) ;?></a></li>
			  </ul>
			 </div>
		    </div>
		</div>
	    </section>
        <!-- end breadcrumb section -->
		
		
	<!--- awards section starts---->
		
		<section class="wow animate__fadeIn parallax" style=" visibility: visible; animation-name: fadeIn;padding:20px 0;">
			<div class="container awards ">
                <div class="row">
				<div class="col-md-12 col-12 col-md-12">
				<h5 class="alt-font text-extra-dark-gray text-center mb-2 font-weight-600">Awards & Recognition</h5>
				 <span class="separator-line-horrizontal-medium-light2 bg-deep-pink d-table mx-auto w-200px mb-3"></span>
				 <!--- p class="alt-font text-extra-large-home text-center">
				  Tech2Globe has been recognized as a leading digital marketing and web development<br> agency from some of the leading industry review sites.
				  </p --->
				  
				  <!-- start swiper pagination -->
				  <div class="swiper-container black-move wow animate__fadeIn swiper-initialized swiper-horizontal swiper-pointer-events" data-slider-options="{ &quot;slidesPerView&quot;: &quot;1&quot;, &quot;allowTouchMove&quot;:true,&quot;paginationClickable&quot;: true, &quot;autoplay&quot;: { &quot;delay&quot;: 3000, &quot;disableOnInteraction&quot;: true }, &quot;navigation&quot;: { &quot;nextEl&quot;: &quot;.swiper-button-next&quot;, &quot;prevEl&quot;: &quot;.swiper-button-prev&quot; }, &quot;pagination&quot;: { &quot;el&quot;: &quot;.swiper-pagination-01&quot;, &quot;clickable&quot;: true }, &quot;breakpoints&quot;: { &quot;1200&quot;: { &quot;slidesPerView&quot;: 4 }, &quot;992&quot;: { &quot;slidesPerView&quot;: 3 }, &quot;768&quot;: { &quot;slidesPerView&quot;: 3 } } }" style="visibility: visible; animation-name: fadeIn;">
                        <div class="swiper-wrapper" id="swiper-wrapper-10b77eb4413a3a8b9" aria-live="off" style="transform: translate3d(-1425px, 0px, 0px); transition-duration: 0ms;">
                            <div class="swiper-slide text-center Clientlg" role="group" aria-label="1 / 10" style="width: 285px;">
							 <img src="images/awards/good-firm.png" alt="" data-no-retina="">
							</div>
                            <div class="swiper-slide text-center Clientlg" role="group" aria-label="2 / 10" style="width: 285px;">
							 <img src="images/awards/clutch-2021.png" alt="" data-no-retina="">
							</div>
                            <div class="swiper-slide text-center Clientlg" role="group" aria-label="3 / 10" style="width: 285px;">
							 <img src="images/awards/clutch-2021-1.png" alt="" data-no-retina="">
							</div>
                            <div class="swiper-slide text-center Clientlg" role="group" aria-label="4 / 10" style="width: 285px;">
							 <img src="images/awards/clutch-2021-2.png" alt="" data-no-retina="">
							</div>
                            <div class="swiper-slide text-center Clientlg" role="group" aria-label="5 / 10" style="width: 285px;">
							 <img src="images/awards/trust-pilot.png" alt="" data-no-retina="">
							</div>
                            <div class="swiper-slide text-center Clientlg" role="group" aria-label="6 / 10" style="width: 285px;">
							 <img src="images/awards/ypca.png" alt="" data-no-retina="">
							</div>
                            <div class="swiper-slide text-center Clientlg" role="group" aria-label="7 / 10" style="width: 285px;">
							 <img src="images/awards/extract.png" alt="" data-no-retina="">
							</div>
                        </div>
                        
                        <!-- <div class="swiper-pagination swiper-pagination-01"></div> -->
                        <!-- end swiper pagination -->
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
					</div>
				</div>
			</div>
		</div>
	</section>
					
		<!--- awards section Ends---->
	
	<section class="bg-light-gray wow animate__fadeIn" id="services" style="visibility: visible; animation-name: fadeIn; padding:40px 0;">
            <div class="container">
				<div class="col-md-12 col-12 col-lg-12 col-xl-12 wow animate__fadeIn align-middle pt-responsive-20">
				 <h1 class="h2 text-extra-dark-gray font-weight-600 alt-font text-center">
							Breathe Life Into Your Brand With Engaging And Impactful Content</h1>
							<span class="mx-auto separator-line-horrizontal-medium-light2 bg-deep-pink d-table w-100px"></span>
							<p class="text-center text-extra-large-home alt-font mt-2" style="font-size: 18px;color: #dd0612;font-weight:500;">
							A one-stop shop for Best content marketing services in Toronto</p>
				 <p class="text-extra-large-home alt-font text-center">
						Tech2Globe Canada, one of the most dependable creative writing organisations, takes great delight in providing the greatest copywriting and content marketing services for all thriving industries.
						We have a staff of creative content writers and experienced copywriters who excel in all aspects of writing, with the goal of providing 100% unique and well-defined material that promotes commerce. By casting magical spells of well-knitted words, our articles have the capability to influence clients to make purchasing decisions.
						</p>
					</div>
            </div>
        </section>	
		
		<!-- start OUR DIGITAL MARKETING LOCATION section -->
		
		<section class="wow animate__fadeIn" style="visibility: visible; animation-name: fadeIn;padding:40px 0;">
            <div class="container"> 
                <div class="row align-items-center text-center">
				 <div class="col-12">
				   <h5 class="h2 alt-font font-weight-600 text-extra-dark-gray margin-15px-bottom text-capitalize">Our digital marketing location</h5>
				   <span class="separator-line-horrizontal-medium-light2 bg-deep-pink d-table mx-auto w-200px mb-3"></span>
				 </div>
				</div>
			  <div class="row">
				<!-- start column -->
				 <div class="col-12 col-md-6 col-xl-4 mt-4">
				  <a href="digital-marketing-toronto"> <div class="bg-light-gray padding-30px-all sm-padding-20px-all last-paragraph-no-margin location-box-shadow">
                            <p class="font-size-16 text-center text-uppercase fw-bold alt-font m-0">Toronto</p>
                      </div></a>
                    </div>
                    <!-- end column -->
				<!-- start column -->
				 <div class="col-12 col-md-6 col-xl-4 mt-4">
				   <a href="digital-marketing-mississauga"><div class="bg-light-gray padding-30px-all sm-padding-20px-all last-paragraph-no-margin location-box-shadow">
                            <p class="font-size-16 text-dark text-center text-uppercase fw-bold alt-font m-0">Mississauga</p>
                      </div></a>
                    </div>
                    <!-- end column -->
				<!-- start column -->
				 <div class="col-12 col-md-6 col-xl-4 mt-4">
				   <a href="digital-marketing-calgary"><div class="bg-light-gray padding-30px-all sm-padding-20px-all last-paragraph-no-margin location-box-shadow">
                            <p class="font-size-16 text-dark text-center text-uppercase fw-bold alt-font m-0">Calgary</p>
                      </div></a>
                    </div>
                    <!-- end column -->
				<!-- start column -->
				 <div class="col-12 col-md-6 col-xl-4 mt-4">
				   <a href="digital-marketing-ottawa"><div class="bg-light-gray padding-30px-all sm-padding-20px-all last-paragraph-no-margin rounded location-box-shadow">
                            <p class="font-size-16 text-dark text-center text-uppercase fw-bold alt-font m-0">Ottawa</p>
                      </div></a>
                    </div>
                    <!-- end column -->
				<!-- start column -->
				 <div class="col-12 col-md-6 col-xl-4 mt-4">
				   <a href="digital-marketing-ontario"><div class="bg-light-gray padding-30px-all sm-padding-20px-all last-paragraph-no-margin rounded location-box-shadow">
                            <p class="font-size-16 text-dark text-center text-uppercase fw-bold alt-font m-0">Ontario</p>
                      </div></a>
                    </div>
                    <!-- end column -->
				<!-- start column -->
				 <div class="col-12 col-md-6 col-xl-4 mt-4">
				   <a href="digital-marketing-vancouver"><div class="bg-light-gray padding-30px-all sm-padding-20px-all last-paragraph-no-margin rounded location-box-shadow" >
                            <p class="font-size-16 text-dark text-center text-uppercase fw-bold alt-font m-0">Vancouver</p>
                      </div></a>
                    </div>
                    <!-- end column -->
                </div>
			</div>
		</section>
		
        <!-- end OUR DIGITAL MARKETING LOCATION section -->
		
		
		<section class="bg-light-gray wow animate__fadeIn" style="visibility: visible; animation-name: fadeIn; padding:40px 0;">
            <div class="container"> 
			         <div class="col-12 col-lg-107 text-center">
                       <h5 class="h2 alt-font text-extra-dark-gray font-weight-600 md-w-100">Transform Your Ideas Into Powerful Storytelling<br>With Our Expert Writing Services</h5>
					   <span class="separator-line-horrizontal-medium-light2 bg-deep-pink d-table mx-auto w-100px"></span>
					   <p class="text-extra-large-home alt-font font-weight-400 text-black mt-3">
					    Tech2Globe Canada has a staff of experienced writers that are well-versed in all aspects of SEO writing. With a creative mindset and originality, our top copywriters put out their best efforts in developing bespoke SEO content tailored to specific company requirements.
						Our SEO writing services include a wide range of topics, including one-page blogs, off-page blogs, website content writing, keyword research, article writing, outreach affordable content marketing services, SEO copywriting, and many others.
					   </p>
                        
					   <p class="text-extra-large-home alt-font font-weight-400 text-black mt-3">
					    Our writers specialise in curating SEO-friendly material that improves the overall SERPs of websites,<br>allowing ambitious companies to achieve the ultimate aim of digital marketing.<br><br>
						<b>Check out our top service offerings:</b>
					   </p>
                    </div>
					
					<div class="row row-cols-lg-3 row-cols-sm-2">
                    <!-- start services item -->
                    <div class="mt-3 col col-12 md-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeInUp last-paragraph-no-margin" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="bg-light-gray box-shadow-light text-center h-100 padding-eighteen-tb feature-box-8 position-relative z-index-5">
                            <div class="d-inline-block margin-20px-bottom">
							<i class="fa-solid fa-pen-nib text-white-2 icon-round-small bg-deep-pink"></i>
							</div>
							 <div class="text-medium alt-font text-capitalize text-extra-dark-gray margin-10px-bottom md-margin-5px-bottom" style="color: #c7010c; font-weight: 700;">
							 Content Writing</div>
                            <p class="lg-w-90 mx-auto text-center font-size-15 p-4">
							 Build Credibility And Revenue Highly researched content Content for Targeted Audience Technical content expertise
							</p>
                            <div class="feature-box-overlay bg-deep-pink"></div>
                        </div>
                    </div>
                    <!-- end services item -->
                    <!-- start services item -->
                    <div class="mt-3 col col-12 md-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeInUp last-paragraph-no-margin" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <div class="bg-light-gray box-shadow-light text-center h-100 padding-eighteen-tb feature-box-8 position-relative z-index-5">
                            <div class="d-inline-block margin-20px-bottom">
							<i class="fa-solid fa-blog text-white-2 icon-round-small bg-deep-pink"></i>
							</div>
							<div class="text-medium alt-font text-capitalize text-extra-dark-gray margin-10px-bottom md-margin-5px-bottom" style="color: #c7010c; font-weight: 700;">
							Blog writing
							</div>
                            <p class="lg-w-90 mx-auto text-center font-size-15 p-4">
							Convey scholarly information Evidence-based reasoning Authoritative point of view Concrete word choice
							</p>
                            <div class="feature-box-overlay bg-deep-pink"></div>
                        </div>
                    </div>
                    <!-- end services item -->
                    <!-- start services item -->
                    <div class="mt-3 col col-12 xs-margin-15px-bottom wow animate__fadeInUp last-paragraph-no-margin" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                        <div class="bg-light-gray box-shadow-light text-center h-100 padding-eighteen-tb feature-box-8 position-relative z-index-5">
                            <div class="d-inline-block margin-20px-bottom">
							<i class="fa-solid fa-file-lines text-white-2 icon-round-small bg-deep-pink"></i>
							</div>
							<div class="text-medium alt-font text-capitalize text-extra-dark-gray margin-10px-bottom md-margin-5px-bottom" style="color: #c7010c; font-weight: 700;">
							Article Writing
							</div>
                            <p class="lg-w-90 mx-auto text-center font-size-15 p-4">
							  Flexible Writing Methods Highly Researched Articles 100% Original Content Keyword Optimised Content
							  </p>
                            <div class="feature-box-overlay bg-deep-pink"></div>
                        </div>
                    </div>
                    <!-- end services item -->
                    <!-- start services item -->
                    <div class="mt-3 col col-12 xs-margin-15px-bottom wow animate__fadeInUp last-paragraph-no-margin" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                        <div class="bg-light-gray box-shadow-light text-center h-100 padding-eighteen-tb feature-box-8 position-relative z-index-5">
                            <div class="d-inline-block margin-20px-bottom">
							<i class="fa-solid fa-file-lines text-white-2 icon-round-small bg-deep-pink"></i>
							</div>
							<div class="text-medium alt-font text-capitalize text-extra-dark-gray margin-10px-bottom md-margin-5px-bottom" style="color: #c7010c; font-weight: 700;">
							Press Release
							</div>
                            <p class="lg-w-90 mx-auto text-center font-size-15 p-4">
							 100% Originally Crafted Content SEO Optimised Content On-Time Delivery Instant Exposure
							</p>
                            <div class="feature-box-overlay bg-deep-pink"></div>
                        </div>
                    </div>
                    <!-- end services item -->
                    <!-- start services item -->
                    <div class="mt-3 col col-12 xs-margin-15px-bottom wow animate__fadeInUp last-paragraph-no-margin" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                        <div class="bg-light-gray box-shadow-light text-center h-100 padding-eighteen-tb feature-box-8 position-relative z-index-5">
                            <div class="d-inline-block margin-20px-bottom">
							<i class="fa-solid fa-file-pen text-white-2 icon-round-small bg-deep-pink"></i>
							</div>
							<div class="text-medium alt-font text-capitalize text-extra-dark-gray margin-10px-bottom md-margin-5px-bottom" style="color: #c7010c; font-weight: 700;">
							Guest Posting
							</div>
                            <p class="lg-w-90 mx-auto text-center font-size-15 p-4">
							Domain & SEO Authority Build Quality Traffic Create Strong Brand Awareness Fast Turn-Around Time
							</p>
                            <div class="feature-box-overlay bg-deep-pink"></div>
                        </div>
                    </div>
                    <!-- end services item -->
                    <!-- start services item -->
                    <div class="mt-3 col col-12 xs-margin-15px-bottom wow animate__fadeInUp last-paragraph-no-margin" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                        <div class="bg-light-gray box-shadow-light text-center h-100 padding-eighteen-tb feature-box-8 position-relative z-index-5">
                            <div class="d-inline-block margin-20px-bottom">
							<i class="fa-solid fa-laptop-file text-white-2 icon-round-small bg-deep-pink"></i>
							</div>
							<div class="text-medium alt-font text-capitalize text-extra-dark-gray margin-10px-bottom md-margin-5px-bottom" style="color: #c7010c; font-weight: 700;">
							Technical Content
							</div>
                            <p class="lg-w-90 mx-auto text-center font-size-15 p-4">
							  SEO Best Practice In Every Stroke Well Researched Content Cites Credible Sources Informative Content
							  </p>
                            <div class="feature-box-overlay bg-deep-pink"></div>
                        </div>
                    </div>
                    <!-- end services item -->
					<!-- start services item -->
                    <div class="mt-3 col col-12 xs-margin-15px-bottom wow animate__fadeInUp last-paragraph-no-margin" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="bg-light-gray box-shadow-light text-center h-100 padding-eighteen-tb feature-box-8 position-relative z-index-5">
                            <div class="d-inline-block margin-20px-bottom">
							<i class="fa-solid fa-cart-shopping text-white-2 icon-round-small bg-deep-pink"></i>
							</div>
							 <div class="text-medium alt-font text-capitalize text-extra-dark-gray margin-10px-bottom md-margin-5px-bottom" style="color: #c7010c; font-weight: 700;">
							 Ecommerce Copywriting</div>
                            <p class="lg-w-90 mx-auto text-center font-size-15 p-4">
							 Content As Per Industry Standards Unique & Descriptive Content Quality And Quantity Result Oriented Content
							</p>
                            <div class="feature-box-overlay bg-deep-pink"></div>
                        </div>
                    </div>
                    <!-- end services item -->
                    <!-- start services item -->
                    <div class="mt-3 col col-12 xs-margin-15px-bottom wow animate__fadeInUp last-paragraph-no-margin" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <div class="bg-light-gray box-shadow-light text-center h-100 padding-eighteen-tb feature-box-8 position-relative z-index-5">
                            <div class="d-inline-block margin-20px-bottom">
							<i class="fa-solid fa-box text-white-2 icon-round-small bg-deep-pink"></i>
							</div>
							<div class="text-medium alt-font text-capitalize text-extra-dark-gray margin-10px-bottom md-margin-5px-bottom" style="color: #c7010c; font-weight: 700;">
							Product Description
							</div>
                            <p class="lg-w-90 mx-auto text-center font-size-15 p-4">
							Creative, And Unique Content Leads On The Targeted Group Expert Content Creators Structure For All Businesses
							</p>
                            <div class="feature-box-overlay bg-deep-pink"></div>
                        </div>
                    </div>
                    <!-- end services item -->
                    <!-- start services item -->
                    <div class="mt-3 col col-12 xs-margin-15px-bottom wow animate__fadeInUp last-paragraph-no-margin" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                        <div class="bg-light-gray box-shadow-light text-center h-100 padding-eighteen-tb feature-box-8 position-relative z-index-5">
                            <div class="d-inline-block margin-20px-bottom">
							<i class="fa-solid fa-clipboard-list text-white-2 icon-round-small bg-deep-pink"></i>
							</div>
							<div class="text-medium alt-font text-capitalize text-extra-dark-gray margin-10px-bottom md-margin-5px-bottom" style="color: #c7010c; font-weight: 700;">
							Product Reviews
							</div>
                            <p class="lg-w-90 mx-auto text-center font-size-15 p-4">
							  Concrete Word Choice Understanding The Customers Highly Strategized Content Unique Writing Proposition
							  </p>
                            <div class="feature-box-overlay bg-deep-pink"></div>
                        </div>
                    </div>
					<!-- start services item for responsives-->
					<!-- start services item -->
                    <div class="mt-3 col col-12 xs-margin-15px-bottom wow animate__fadeInUp last-paragraph-no-margin" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                        <div class="bg-light-gray box-shadow-light text-center h-100 padding-eighteen-tb feature-box-8 position-relative z-index-5">
                            <div class="d-inline-block margin-20px-bottom">
							<i class="fa-solid fa-language text-white-2 icon-round-small bg-deep-pink"></i>
							</div>
							 <div class="text-medium alt-font text-capitalize text-extra-dark-gray margin-10px-bottom md-margin-5px-bottom" style="color: #c7010c; font-weight: 700;">
							 Language Translation</div>
                            <p class="lg-w-90 mx-auto text-center font-size-15 p-4">
							 Professional Interpretation Commercial & Web Translation Industry-Expert Translators Proofreading By Senior Editors
							</p>
                            <div class="feature-box-overlay bg-deep-pink"></div>
                        </div>
                    </div>
                    <!-- end services item -->
                    <!-- start services item -->
                    <div class="mt-3 col col-12 xs-margin-15px-bottom wow animate__fadeInUp last-paragraph-no-margin" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                        <div class="bg-light-gray box-shadow-light text-center h-100 padding-eighteen-tb feature-box-8 position-relative z-index-5">
                            <div class="d-inline-block margin-20px-bottom">
							<i class="fa-solid fa-rectangle-ad text-white-2 icon-round-small bg-deep-pink"></i>
							</div>
							<div class="text-medium alt-font text-capitalize text-extra-dark-gray margin-10px-bottom md-margin-5px-bottom" style="color: #c7010c; font-weight: 700;">
							AD Copywriting Services
							</div>
                            <p class="lg-w-90 mx-auto text-center font-size-15 p-4">
							Complete Research And Planning Asses The Competition Creating Content Considering Your Audience Engaging Ad Copies
							</p>
                            <div class="feature-box-overlay bg-deep-pink"></div>
                        </div>
                    </div>
                    <!-- end services item -->
                    <!-- start services item -->
                    <div class="mt-3 col col-12 xs-margin-15px-bottom wow animate__fadeInUp last-paragraph-no-margin" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                        <div class="bg-light-gray box-shadow-light text-center h-100 padding-eighteen-tb feature-box-8 position-relative z-index-5">
                            <div class="d-inline-block margin-20px-bottom">
							<i class="fa-solid fa-book-open-reader text-white-2 icon-round-small bg-deep-pink"></i>
							</div>
							<div class="text-medium alt-font text-capitalize text-extra-dark-gray margin-10px-bottom md-margin-5px-bottom" style="color: #c7010c; font-weight: 700;">
							Case Studies
							</div>
                            <p class="lg-w-90 mx-auto text-center font-size-15 p-4">
							  All-inclusive Bespoke Case Study Writing Educate Clients and Audience Creative And Versatile Expert Writers Services For Diverse Industry Verticals
							  </p>
                            <div class="feature-box-overlay bg-deep-pink"></div>
                        </div>
                    </div>
					<!-- start services item -->
                    <div class="mt-3 col col-12 xs-margin-15px-bottom wow animate__fadeInUp last-paragraph-no-margin" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="bg-light-gray box-shadow-light text-center h-100 padding-eighteen-tb feature-box-8 position-relative z-index-5">
                            <div class="d-inline-block margin-20px-bottom">
							<i class="fa-solid fa-id-card text-white-2 icon-round-small bg-deep-pink"></i>
							</div>
							 <div class="text-medium alt-font text-capitalize text-extra-dark-gray margin-10px-bottom md-margin-5px-bottom" style="color: #c7010c; font-weight: 700;">
							 Company profile</div>
                            <p class="lg-w-90 mx-auto text-center font-size-15 p-4">
							 Powerful Company Presence Engaging Business Profile Writing Service 100% Plagiarism-free Content Convey Your Business With Attractive Profile
							</p>
                            <div class="feature-box-overlay bg-deep-pink"></div>
                        </div>
                    </div>
                    <!-- end services item -->
                    <!-- start services item -->
                    <div class="mt-3 col col-12 xs-margin-15px-bottom wow animate__fadeInUp last-paragraph-no-margin" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <div class="bg-light-gray box-shadow-light text-center h-100 padding-eighteen-tb feature-box-8 position-relative z-index-5">
                            <div class="d-inline-block margin-20px-bottom">
							<i class="fa-solid fa-envelope-open-text text-white-2 icon-round-small bg-deep-pink"></i>
							</div>
							<div class="text-medium alt-font text-capitalize text-extra-dark-gray margin-10px-bottom md-margin-5px-bottom" style="color: #c7010c; font-weight: 700;">
							Email writing
							</div>
                            <p class="lg-w-90 mx-auto text-center font-size-15 p-4">
							Excellent Content That Drives Results Writing Good Customer Service Emails Engaging Email Copies Compelling Crisp Content
							</p>
                            <div class="feature-box-overlay bg-deep-pink"></div>
                        </div>
                    </div>
                    <!-- end services item -->
                    <!-- start services item -->
                    <div class="mt-3 col col-12 xs-margin-15px-bottom wow animate__fadeInUp last-paragraph-no-margin" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                        <div class="bg-light-gray box-shadow-light text-center h-100 padding-eighteen-tb feature-box-8 position-relative z-index-5">
                            <div class="d-inline-block margin-20px-bottom">
							<i class="fa-solid fa-newspaper text-white-2 icon-round-small bg-deep-pink"></i>
							</div>
							<div class="text-medium alt-font text-capitalize text-extra-dark-gray margin-10px-bottom md-margin-5px-bottom" style="color: #c7010c; font-weight: 700;">
							Newsletters
							</div>
                            <p class="lg-w-90 mx-auto text-center font-size-15 p-4">
							  We can be your word of mouth A/B Testing Mobile Friendly Newsletters Email Support
							  </p>
                            <div class="feature-box-overlay bg-deep-pink"></div>
                        </div>
                    </div>
					<!-- start services item -->
                    <div class="mt-3 col col-12 xs-margin-15px-bottom wow animate__fadeInUp last-paragraph-no-margin" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                        <div class="bg-light-gray box-shadow-light text-center h-100 padding-eighteen-tb feature-box-8 position-relative z-index-5">
                            <div class="d-inline-block margin-20px-bottom">
							<i class="fa-solid fa-laptop-code text-white-2 icon-round-small bg-deep-pink"></i>
							</div>
							 <div class="text-medium alt-font text-capitalize text-extra-dark-gray margin-10px-bottom md-margin-5px-bottom" style="color: #c7010c; font-weight: 700;">
							 Website content</div>
                            <p class="lg-w-90 mx-auto text-center font-size-15 p-4">
							 Highly Appealing, Readable, And Unique Content Content For A Wide Variety Of Sectors Creative And Versatile Web Content Writers Thoroughly Researched Content
							</p>
                            <div class="feature-box-overlay bg-deep-pink"></div>
                        </div>
                    </div>
                    <!-- end services item -->
                    <!-- start services item -->
                    <div class="mt-3 col col-12 xs-margin-15px-bottom wow animate__fadeInUp last-paragraph-no-margin" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                        <div class="bg-light-gray box-shadow-light text-center h-100 padding-eighteen-tb feature-box-8 position-relative z-index-5">
                            <div class="d-inline-block margin-20px-bottom">
							<i class="fa-solid fa-share-nodes text-white-2 icon-round-small bg-deep-pink"></i>
							</div>
							<div class="text-medium alt-font text-capitalize text-extra-dark-gray margin-10px-bottom md-margin-5px-bottom" style="color: #c7010c; font-weight: 700;">
							Social media content
							</div>
                            <p class="lg-w-90 mx-auto text-center font-size-15 p-4">
							Compelling Content That Attracts Connect With Your Audience Precise Content and Creative Graphics Dominate the Social Media Space
							</p>
                            <div class="feature-box-overlay bg-deep-pink"></div>
                        </div>
                    </div>
                    <!-- end services item -->
                    <!-- start services item -->
                    <div class="mt-3 col col-12 xs-margin-15px-bottom wow animate__fadeInUp last-paragraph-no-margin" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                        <div class="bg-light-gray box-shadow-light text-center h-100 padding-eighteen-tb feature-box-8 position-relative z-index-5">
                            <div class="d-inline-block margin-20px-bottom">
							<i class="fa-solid fa-volume-high text-white-2 icon-round-small bg-deep-pink"></i>
							</div>
							<div class="text-medium alt-font text-capitalize text-extra-dark-gray margin-10px-bottom md-margin-5px-bottom" style="color: #c7010c; font-weight: 700;">
							Transcription services
							</div>
                            <p class="lg-w-90 mx-auto text-center font-size-15 p-4">
							  Quick Turnaround Can Be Downloaded In Any Format Transcription By Professionals Confidentiality At Priority
							  </p>
                            <div class="feature-box-overlay bg-deep-pink"></div>
                        </div>
                    </div>
				</div>
			<!-- services item row Ends-->
			</div>
		</div>
       </section>	
	   
	   
	   <!--- CTA section starts---->
		
		<section class="wow animate__fadeIn padding-20px-tb md-padding-20px-tb bg-deep-pink" style="visibility: visible; animation-name: fadeIn;">
            <div class="container">
                <div class="row">
				<h5 class="font-weight-500 text-extra-dark-gray text-center text-white">Ready to Get Started?</h5><br><br>
                    <div class="col-12 col-lg-12 text-center d-flex flex-column flex-md-row align-items-center justify-content-center">
					
                        <span class="text-extra-large-home text-white-2 alt-font d-inline-block margin-30px-right sm-no-margin-right sm-margin-15px-bottom sm-w-100" style="font-size:18px;">Call us Today for a Free Consultation:
						<span class="ms-2">
						<a href="tel:+1-250-206-8787" class="text-white">
						<i class="bi bi-telephone-fill"></i> +1-250-206-8787</a></span>
						<span class="ms-2">
						<a href="mailto:info@tech2globe.ca" class="text-white">
						<i class="fa-solid fa-envelope"></i> info@tech2globe.ca</a></span> <br>
						<br>
						<a type="button" href="contact-us" class="btn btn-outline-light btn-medium border rounded" target="_blank">Let's Talk <i class="fas fa-comment"></i></a></span>
					  
                    </div>                    
                </div>
            </div>
        </section>
		
		<!--- CTA section Ends---->
		<!-- unleash the power section starts --->
		
		<section class="wow animate__fadeIn" style="padding:40px 0;visibility: visible; animation-name: fadeIn;">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-9 col-md-12 col-sm-10 text-center last-paragraph-no-margin pb-5">
                        <h5 class="h2 alt-font font-weight-700 text-extra-dark-gray mb-2">
						Unleash The Power Of Words With Best Content Marketing Services In Toronto</h5>
						<span class="mx-auto separator-line-horrizontal-medium-light2 bg-deep-pink d-table w-100px"></span>
                        <p class="mb-0 text-extra-large-home mt-3">
						 See the benefits accruing to you by hiring the affordable content marketing services of our experienced expert Writers Teams:
						</p>
                    </div>  
                </div>
                <div class="row justify-content-center">
				  <div class="col-md-6 col-xl-3 col-12 text-center feature-box-11 position-relative wow animate__fadeInRight last-paragraph-no-margin" style="visibility: visible; animation-name: fadeInRight;">
            <div class="d-inline-block padding-30px-all w-130px h-130px line-height-65 rounded-circle bg-white text-center">
				<i class="fa-solid fa-user-tie" style="font-size: 4em; color: #ff214f;"></i>
            </div>
            <div class="text-medium alt-font text-capitalize text-extra-dark-gray margin-10px-bottom md-margin-5px-bottom mt-3" style=" font-weight: 700;">Experienced team</div>
            <p class="font-size-15">
			World-class writing at incredibly affordable prices and Prompt delivery
            </p>
		  </div>
		  
				  <div class="col-md-6 col-xl-3 col-12 text-center feature-box-11 position-relative md-margin-eight-bottom sm-margin-ten-bottom wow animate__fadeInRight last-paragraph-no-margin" style="visibility: visible; animation-name: fadeInRight;">
            <div class="d-inline-block padding-30px-all w-130px h-130px line-height-65 rounded-circle bg-white text-center">
				<i class="fa-solid fa-lightbulb" style="font-size: 4em; color: #ff214f;"></i>
            </div>
            <div class="text-medium alt-font text-capitalize text-extra-dark-gray margin-10px-bottom md-margin-5px-bottom mt-3" style=" font-weight: 700;">Custom solutions</div>
            <p class="font-size-15">
			Practicality in capturing the hearts of readers with honesty and truth
            </p>
		  </div>
				  <div class="col-md-6 col-xl-3 col-12 text-center feature-box-11 position-relative md-margin-eight-bottom sm-margin-ten-bottom wow animate__fadeInRight last-paragraph-no-margin" style="visibility: visible; animation-name: fadeInRight;">
            <div class="d-inline-block padding-30px-all w-130px h-130px line-height-65 rounded-circle bg-white text-center">
				<i class="fa-solid fa-headset" style="font-size: 4em; color: #ff214f;"></i>
            </div>
            <div class="text-medium alt-font text-capitalize text-extra-dark-gray margin-10px-bottom md-margin-5px-bottom mt-3" style=" font-weight: 700;">Excellent communication</div>
            <p class="font-size-15">
			Boosting your website's ranking in key search engines
            </p>
		  </div>
				  <div class="col-md-6 col-xl-3 col-12 text-center feature-box-11 position-relative md-margin-eight-bottom sm-margin-ten-bottom wow animate__fadeInRight last-paragraph-no-margin" style="visibility: visible; animation-name: fadeInRight;">
            <div class="d-inline-block padding-30px-all w-130px h-130px line-height-65 rounded-circle bg-white text-center">
				<i class="fa-solid fa-coins" style="font-size: 3em;  color: #ff214f;"></i>
            </div>
            <div class="text-medium alt-font text-capitalize text-extra-dark-gray margin-10px-bottom md-margin-5px-bottom mt-3" style=" font-weight: 700;">Competitive pricing</div>
            <p class="font-size-15">
			Efficient digital marketing across social networking sites to elevate your brand.
            </p>
		  </div>
		 </div>
	  </div>
    </section>
		
		<!-- unleash the power section ends --->
		
		<!--- Step by step section starts ----->
		
		<section class="wow animate__fadeIn parallax" data-parallax-background-ratio="0.5" style="background-image: url(images/banner-home.jpg); visibility: visible; animation-name: fadeIn; background-position: 0% -235px;background-repeat:no-repeat;">
            <div class="opacity-full bg-extra-dark-gray z-index-0"></div>
			<div class="container z-index-5 position-relative">
			<div class="row justify-content-center">
                    <div class="col-12 col-lg-9 col-md-12 col-sm-10 text-center last-paragraph-no-margin">
                        <h5 class="alt-font font-weight-700 text-light mb-2">
						Step-By-Step Approach By Content Marketing Agency Canada<br>To Serve Our Customers</h5>
						<span class="separator-line-horrizontal-medium-light2 mx-auto bg-deep-pink d-table w-100px"></span>
                        <p class="mb-0 alt-font text-light text-extra-large-home mt-3">
						Tech2Globe team obeys a streamlined workflow to deliver fast and affordable content marketing services in the most professional manner saving our client’s valuable time, effort and money!
						</p>
                    </div>  
                </div>
                <div class="row">
                    <!-- start feature box item -->
                    <div class="mt-3 d-block col-12 col-md-6 col-xl-3 feature-box-1 sm-margin-30px-bottom wow fadeIn last-paragraph-no-margin" style="visibility: visible; animation-name: fadeIn;">
                        <div class="d-flex align-items-center margin-15px-bottom alt-font">
                            <h3 class="char-value text-deep-pink letter-spacing-minus-1 text-medium-gray font-weight-600 mb-0">01.</h3>
                            <span class="fw-bold alt-font text-light text-extra-large-home text-large text-white line-height-22 padding-20px-left width-100">
							Consulting & Quoting</span>
                        </div>
                        <p class="alt-font text-white width-90 md-width-100">
						 Discuss goals, express ideas & brief about your company to our expert content strategists
						</p>
                    </div>
                    <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div class="mt-3 d-block col-12 col-md-6 col-xl-3 feature-box-1 sm-margin-30px-bottom wow fadeIn last-paragraph-no-margin" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
                        <div class="d-flex align-items-center margin-15px-bottom alt-font">
                            <h3 class="char-value text-deep-pink letter-spacing-minus-1 text-medium-gray font-weight-600 mb-0">02.</h3>
                            <span class="fw-bold alt-font text-light text-extra-large-home text-large text-white line-height-22 padding-20px-left width-100">Curating</span>
                        </div>
                        <p class="alt-font text-white width-90 md-width-100">
						 Our best copywriters and creative content writers will brainstorm ideas to include.
						</p>
                    </div>
                    <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div class="mt-3 col-12 col-md-6 col-xl-3 feature-box-1 wow fadeIn last-paragraph-no-margin d-block " data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
                        <div class="d-flex align-items-center margin-15px-bottom alt-font">
                            <h3 class="char-value text-deep-pink letter-spacing-minus-1 text-medium-gray font-weight-600 mb-0">03.</h3>
                            <span class="fw-bold  alt-font text-light text-extra-large-home text-large text-white line-height-22 padding-20px-left width-100">
							Quality Checking</span>
                        </div>
                        <p class="width-90 md-width-100 alt-font text-white">
						 Once the writing is done, content is sent to our proficient proofreaders for thorough scrutinization.
						</p>
                    </div>
                    <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div class="mt-3 col-12 col-md-6 col-xl-3 d-block feature-box-1 wow fadeIn last-paragraph-no-margin" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
                        <div class="d-flex align-items-center margin-15px-bottom alt-font">
                            <h3 class="char-value text-deep-pink letter-spacing-minus-1 text-medium-gray font-weight-600 mb-0">04.</h3>
                            <span class="fw-bold alt-font text-light text-extra-large-home text-large text-white line-height-22 padding-20px-left width-100">
							Final Delivery</span>
                        </div>
                        <p class="alt-font text-white width-90 md-width-100">
						 After quality-checking, we deliver the content to our customers to assure top-notch quality work.
						</p>
                    </div>
                    <!-- end feature box item -->
                </div>
            </div>
        </section>
		
		<!--- Step by step section Ends ----->		

		<!--- Why Us section Starts ----->
		
		<section class="padding-five-top padding-five-bottom parallax wow animate__fadeIn mt-2 bg-light-gray" data-parallax-background-ratio="0.4" style="visibility: visible; animation-name: fadeIn; background-position: 0% 9.175px;">
            <div class="container-fluid">
			    <h4 class="h2 alt-font text-extra-dark-gray font-weight-600 text-center mb-2">
				What Makes Tech2Globe Canada<br>Exceptional From Others?</h4>
				<span class="separator-line-horrizontal-medium-light2 mx-auto bg-deep-pink d-table w-100px"></span>
				<p class="text-extra-large-home mt-3" style="text-align: center;">
				There are several factors that can contribute to a best content marketing services in Toronto being considered the finest in its field.
				<br>Some of these factors may include:
				</p>
                <div class="row justify-content-center">
                    <!-- start features box item -->
                    <div class="mt-3 col-12 col-lg-3 col-md-6 col-sm-8 last-paragraph-no-margin wow animate__fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                        <div class="padding-50px-all lg-padding-30px-all bg-white box-shadow text-center h-100">
							<div class="d-inline-block margin-20px-bottom">
							  <i class="fa-solid fa-circle-check text-white-2 icon-round-small bg-deep-pink"></i>
							</div>
						<div class="text-medium alt-font text-capitalize text-extra-dark-gray margin-10px-bottom md-margin-5px-bottom" style="color: #c7010c;font-weight: 700;">
						Quality of work</div>					
                            <p class="font-size-15">
							 A top-notch content marketing company should produce high-quality content that is well-written, accurate, and engaging.
							</p>
                        </div>                    
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="mt-3 col-12 col-lg-3 col-md-6 col-sm-8 last-paragraph-no-margin wow animate__fadeInRight" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInRight;">
                        <div class="padding-50px-all lg-padding-30px-all bg-white box-shadow text-center h-100">
						<div class="d-inline-block margin-20px-bottom">
						 <i class="fa-solid fa-user-tie text-white-2 icon-round-small bg-deep-pink"></i>
						 </div>
						 <div class="text-medium alt-font text-capitalize text-extra-dark-gray margin-10px-bottom md-margin-5px-bottom" style="color: #c7010c; font-weight: 700;">
						 Expertise</div>
                            <p class="font-size-15">
							 An affordable content marketing service should have a team of experts who have a deep understanding of the industry and target audience.
							 </p>
                        </div>                    
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="mt-3 col-12 col-lg-3 col-md-6 col-sm-8 last-paragraph-no-margin wow animate__fadeInRight" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;">
                        <div class="padding-50px-all lg-padding-30px-all bg-white box-shadow text-center h-100">
						<div class="d-inline-block margin-20px-bottom">
						 <i class="fa-solid fa-lightbulb text-white-2 icon-round-small bg-deep-pink"></i>
						 </div>
						 <div class="text-medium alt-font text-capitalize text-extra-dark-gray margin-10px-bottom md-margin-5px-bottom" style="color: #c7010c; font-weight: 700;">
						 Strategy</div>
                            <p class="font-size-15">
							 A great content marketing company should have a clear and well-thought-out content strategy that aligns with the business's overall marketing goals and objectives.
							</p>
                        </div>                    
                    </div>
                    <!-- end features box item -->
					<div class="mt-3 col-12 col-lg-3 col-md-6 col-sm-8 last-paragraph-no-margin wow animate__fadeInRight" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;">
                        <div class="padding-50px-all lg-padding-30px-all bg-white box-shadow text-center h-100">
							<div class="d-inline-block margin-20px-bottom">
						 <i class="fa-solid fa-file-circle-check text-white-2 icon-round-small bg-deep-pink"></i>
							</div>
						<div class="text-medium alt-font text-capitalize text-extra-dark-gray margin-10px-bottom md-margin-5px-bottom" style="color: #c7010c;font-weight: 700;">
						Results</div>					
                            <p class="font-size-15">
							 The best content marketing companies should be able to demonstrate the results they have achieved for their clients, such as increased website traffic.
							</p>
                        </div>                    
                    </div>
					<!-- end features box item -->
					<div class="mt-3 col-12 col-lg-3 col-md-6 col-sm-8 last-paragraph-no-margin wow animate__fadeInRight" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;">
                        <div class="padding-50px-all lg-padding-30px-all bg-white box-shadow text-center h-100">
							<div class="d-inline-block margin-20px-bottom">
						 <i class="fa-solid fa-headset text-white-2 icon-round-small bg-deep-pink"></i>
							</div>
						<div class="text-medium alt-font text-capitalize text-extra-dark-gray margin-10px-bottom md-margin-5px-bottom" style="color: #c7010c;font-weight: 700;">
						Customer service</div>					
                            <p class="font-size-15">
							  An affordable content marketing service should provide excellent customer service, responding to inquiries and requests promptly and working closely with clients to ensure their needs are met.
							</p>
                        </div>                    
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="mt-3 col-12 col-lg-3 col-md-6 col-sm-8 last-paragraph-no-margin wow animate__fadeInRight" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;">
                        <div class="padding-50px-all lg-padding-30px-all bg-white box-shadow text-center h-100">
						<div class="d-inline-block margin-20px-bottom">
						 <i class="fa-solid fa-shuffle text-white-2 icon-round-small bg-deep-pink"></i>
						 </div>
						 <div class="text-medium alt-font text-capitalize text-extra-dark-gray margin-10px-bottom md-margin-5px-bottom" style="color: #c7010c; font-weight: 700;">
						 Flexibility</div>
                            <p class="font-size-15">
							 A great content marketing company should be able to adapt to changes in the market and be flexible in terms of the types of content they produce and the platforms they use to publish it.
							 </p>
                        </div>                    
                    </div>
					
                    <!-- start features box item -->	
					<!-- start features box item -->
                    <div class="mt-3 col-12 col-lg-3 col-md-6 col-sm-8 last-paragraph-no-margin wow animate__fadeInRight" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;">
                        <div class="padding-50px-all lg-padding-30px-all bg-white box-shadow text-center h-100">
						<div class="d-inline-block margin-20px-bottom">
						<i class="fa-solid fa-brain text-white-2 icon-round-small bg-deep-pink"></i>
						</div>
								<div class="text-medium alt-font text-capitalize text-extra-dark-gray margin-10px-bottom md-margin-5px-bottom" style="color: #c7010c; font-weight: 700;">Creativity</div>
                            <p class="font-size-15">
							A content marketing agency Canada should be able to come up with fresh, original ideas for content and present them in an engaging way.
							</p>
                        </div>                    
                    </div>
					
                    <!-- end features box item -->		
					<!-- start features box item -->
                    <div class="mt-3 col-12 col-lg-3 col-md-6 col-sm-8 last-paragraph-no-margin wow animate__fadeInRight" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;">
                        <div class="padding-50px-all lg-padding-30px-all bg-white box-shadow text-center h-100">
						<div class="d-inline-block margin-20px-bottom">
						<i class="fa-solid fa-handshake text-white-2 icon-round-small bg-deep-pink"></i>
						</div>
								<div class="text-medium alt-font text-capitalize text-extra-dark-gray margin-10px-bottom md-margin-5px-bottom" style="color: #c7010c; font-weight: 700;">Collaboration</div>
                            <p class="font-size-15">
							A top content marketing company should be able to work closely with clients and other team members, collaborating to develop and execute a successful content marketing strategy.
							</p>
                        </div>                    
                    </div>
					
                    <!-- end features box item -->
					<div class="mt-3 col-12 col-lg-3 col-md-6 col-sm-8 last-paragraph-no-margin wow animate__fadeInRight" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;">
                        <div class="padding-50px-all lg-padding-30px-all bg-white box-shadow text-center h-100">
							<div class="d-inline-block margin-20px-bottom">
						 <i class="fa-solid fa-laptop-code text-white-2 icon-round-small bg-deep-pink"></i>
							</div>
						<div class="text-medium alt-font text-capitalize text-extra-dark-gray margin-10px-bottom md-margin-5px-bottom" style="color: #c7010c;font-weight: 700;">
						Experience</div>					
                            <p class="font-size-15">
							  A content marketing company should have a track record of working with businesses in a variety of industries, and should be able to draw on this experience to inform their approach.
							</p>
                        </div>                    
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="mt-3 col-12 col-lg-3 col-md-6 col-sm-8 last-paragraph-no-margin wow animate__fadeInRight" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;">
                        <div class="padding-50px-all lg-padding-30px-all bg-white box-shadow text-center h-100">
						<div class="d-inline-block margin-20px-bottom">
						 <i class="fa-solid fa-magnifying-glass text-white-2 icon-round-small bg-deep-pink"></i>
						 </div>
						 <div class="text-medium alt-font text-capitalize text-extra-dark-gray margin-10px-bottom md-margin-5px-bottom" style="color: #c7010c; font-weight: 700;">
						 Transparency</div>
                            <p class="font-size-15">
							 A top content marketing company should be transparent about their processes and fees, and should clearly communicate their expectations and deliverables to clients.
							 </p>
                        </div>                    
                    </div>
					
                    <!-- start features box item -->	
					<!-- start features box item -->
                    <div class="mt-3 col-12 col-lg-3 col-md-6 col-sm-8 last-paragraph-no-margin wow animate__fadeInRight" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;">
                        <div class="padding-50px-all lg-padding-30px-all bg-white box-shadow text-center h-100">
						<div class="d-inline-block margin-20px-bottom">
						<i class="fa-solid fa-coins text-white-2 icon-round-small bg-deep-pink"></i>
						</div>
								<div class="text-medium alt-font text-capitalize text-extra-dark-gray margin-10px-bottom md-margin-5px-bottom" style="color: #c7010c; font-weight: 700;">Cost</div>
                            <p class="font-size-15">
							While cost is not the only factor to consider when choosing a content marketing company, it is important to find a company that offers a good value for the content marketing services they provide.
							</p>
                        </div>                    
                    </div>
					
                    <!-- end features box item -->		
					<!-- start features box item -->
                    <div class="mt-3 col-12 col-lg-3 col-md-6 col-sm-8 last-paragraph-no-margin wow animate__fadeInRight" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;">
                        <div class="padding-50px-all lg-padding-30px-all bg-white box-shadow text-center h-100">
						<div class="d-inline-block margin-20px-bottom">
						<i class="fa-solid fa-globe text-white-2 icon-round-small bg-deep-pink"></i>
						</div>
								<div class="text-medium alt-font text-capitalize text-extra-dark-gray margin-10px-bottom md-margin-5px-bottom" style="color: #c7010c; font-weight: 700;">Online reputation</div>
                            <p class="font-size-15">
							Look for a content marketing agency Canada with a strong online reputation, as this can be an indicator of the quality of their work and customer satisfaction.
							</p>
                        </div>                    
                    </div>
					
                    <!-- end features box item -->	
					
					
					</div>
                </div>
            
        </section>
		
		<!--- Why Us section Ends ----->
		
		<!--- industry section Starts ----->
		
		<section class="border-none wow animate__fadeIn" style="visibility: visible; animation-name: fadeIn; padding: 40px 0px;">
		  <div class="container-fluid ">
			<div class="container">
				 <div class="row">
                    <div class="col-12 text-center">
                       <h3 class="h2 text-capitalize alt-font text-extra-dark-gray mb-3 font-weight-700 md-w-100">Industries We Served</h3>
                        <span class="separator-line-horrizontal-medium-light2 bg-deep-pink d-table mx-auto w-100px"></span>
                        
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-lg-4 row-cols-md-2 row-cols-sm-2 justify-content-center mt-4">

                    <!-- start process step item -->
                    <div class="col-6 col-xl-3 col-md-3 text-center feature-box-11 position-relative md-margin-eight-bottom sm-margin-ten-bottom wow animate__fadeInRight last-paragraph-no-margin" style="visibility: visible; animation-name: fadeInRight;">
                        <div class="hw-100-mob d-inline-block padding-30px-all w-130px h-130px line-height-65 rounded-circle bg-dfdf text-center progress-line">
                           <i class="bi bi-wallet" style="font-size: 3em;    color: #ff214f;"></i>
                        </div>
                        <div class="alt-font margin-30px-top margin-5px-bottom text-dark font-weight-600 text-extra-large-home m-20-mob ">Accounting</div>
                    </div>
                    <!-- end process step item -->
                    <!-- start process step item -->
                    <div class="col-6 col-xl-3 col-md-3 text-center feature-box-11 position-relative md-margin-eight-bottom sm-margin-ten-bottom wow animate__fadeInRight last-paragraph-no-margin" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;">
                        <div class="hw-100-mob d-inline-block padding-30px-all w-130px h-130px line-height-65 rounded-circle bg-dfdf text-center progress-line">
                            <i class="bi bi-heart-pulse" style="font-size: 3em;    color: #ff214f;"></i>
                        </div>
                        <div class="alt-font margin-30px-top margin-5px-bottom text-dark font-weight-600 text-extra-large-home m-20-mob ">Healthcare</div>
                      </div>
                    <!-- end process step item -->
                    <!-- start process step item -->
                    <div class="col-6 col-xl-3 col-md-3 text-center feature-box-11 position-relative xs-margin-ten-bottom wow animate__fadeInRight last-paragraph-no-margin" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInRight;">
                        <div class="hw-100-mob d-inline-block padding-30px-all w-130px h-130px line-height-65 rounded-circle bg-dfdf text-center progress-line">
                          <i class="bi bi-bus-front-fill" style="font-size: 3em;    color: #ff214f;"></i>
                        </div>
                        <div class="alt-font margin-30px-top margin-5px-bottom text-dark font-weight-600 text-extra-large-home m-20-mob ">Transportation</div>
                    </div>
                    <!-- end process step item -->
                    <!-- start process step item -->
                    <div class="col-6 col-xl-3 col-md-3 text-center feature-box-11 position-relative wow animate__fadeInRight last-paragraph-no-margin" data-wow-delay="1.2s" style="visibility: visible; animation-delay: 1.2s; animation-name: fadeInRight;">
                        <div class="hw-100-mob d-inline-block padding-30px-all w-130px h-130px line-height-65 rounded-circle bg-dfdf text-center">
							<i class="bi bi-shop" style="font-size: 3em;    color: #ff214f;"></i>
                        </div>
                        <div class="alt-font margin-30px-top margin-5px-bottom text-dark font-weight-600 text-extra-large-home m-20-mob ">Retail Industry</div>
                    </div>
                    <!-- end process step item -->
			
                </div>
				
				
				
	                <div class="row row-cols-1 row-cols-lg-4 row-cols-md-2 row-cols-sm-2 justify-content-center mt-3">

                    <!-- start process step item -->
                    <div class="col-6 col-xl-3 col-md-3 text-center feature-box-11 position-relative md-margin-eight-bottom sm-margin-ten-bottom wow animate__fadeInRight last-paragraph-no-margin" style="visibility: visible; animation-name: fadeInRight;">
                        <div class="d-inline-block padding-30px-all w-130px h-130px line-height-65 rounded-circle bg-dfdf text-center progress-line hw-100-mob">
							<i class="bi bi-houses" style="font-size: 3em;    color: #ff214f;"></i>
                        </div>
                        <div class="fs-14-mob m-20-mob alt-font margin-30px-top margin-5px-bottom text-dark font-weight-600 text-extra-large-home">Real Estate</div>
                    </div>
                    <!-- end process step item -->
                    <!-- start process step item -->
                    <div class="col-6 col-xl-3 col-md-3 text-center feature-box-11 position-relative md-margin-eight-bottom sm-margin-ten-bottom wow animate__fadeInRight last-paragraph-no-margin" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;">
                        <div class="hw-100-mob d-inline-block padding-30px-all w-130px h-130px line-height-65 rounded-circle bg-dfdf text-center progress-line">
							<i class="bi bi-cart4" style="font-size: 3em;    color: #ff214f;"></i>
                        </div>
                        <div class="fs-14-mob m-20-mob alt-font margin-30px-top margin-5px-bottom text-dark font-weight-600 text-extra-large-home">Ecommerce</div>
                      </div>
                    <!-- end process step item -->
                    <!-- start process step item -->
                    <div class="col-6 col-xl-3 col-md-3 text-center feature-box-11 position-relative xs-margin-ten-bottom wow animate__fadeInRight last-paragraph-no-margin" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInRight;">
                        <div class="hw-100-mob d-inline-block padding-30px-all w-130px h-130px line-height-65 rounded-circle bg-dfdf text-center progress-line">
							<i class="bi bi-egg" style="font-size: 3em;    color: #ff214f;"></i>
                        </div>
                        <div class="m-20-mob alt-font margin-30px-top margin-5px-bottom text-dark font-weight-600 text-extra-large-home">Food &amp; Restaurant </div>
                    </div>
                    <!-- end process step item -->
                    <!-- start process step item -->
                    <div class="col-6 col-xl-3 col-md-3 text-center feature-box-11 position-relative wow animate__fadeInRight last-paragraph-no-margin" data-wow-delay="1.2s" style="visibility: visible; animation-delay: 1.2s; animation-name: fadeInRight;">
                        <div class="hw-100-mob d-inline-block padding-30px-all w-130px h-130px line-height-65 rounded-circle bg-dfdf text-center">
							<i class="bi bi-airplane" style="font-size: 3em;    color: #ff214f;"></i>
                        </div>
                        <div class="m-20-mob alt-font margin-30px-top margin-5px-bottom text-dark font-weight-600 text-extra-large-home">Travel</div>
                    </div>
                    <!-- end process step item -->
                </div>					
            </div>
            </div>
		 </section>
		
		<!--- industry section Ends ----->
		
		<section class="wow fadeIn" style="background: #1c1c1c; visibility: visible; animation-name: fadeIn; padding:40px 0;">
            <div class="container">
                <div class="row align-items-center justify-content-center">
				    <div class="col-12 col-lg-6 text-center">
                        <img src="images/content-writing.png" alt="" class="img-fluid w-100" data-no-retina="">
                    </div> 
                    <div class="col-12 col-lg-6 pt-3">
                        <h5 class="h3 alt-font text-white font-weight-600">
						Hire Qualified Content Experts To Achieve Your Content Marketing Goals
						</h5>
						<span class="separator-line-horrizontal-medium-light2 bg-deep-pink d-table w-100px"></span>
						<p class="font-size-15 home alt-font font-weight-400 text-white mt-3 mb-3">
						 Tech2Globe’s writers take immense interest in your business in finding out your business core functionalities, mode of operation, target audience,
						 the strength and weaknesses to curate the aptly tailored content exclusive to the particular needs.
						 Our team is fluent with SEO writing and we conduct extensive keyword and topic research to create unique content in various formats.<br>
						 <b>Our Promises:</b>
					   </p>
                        <ul class="p-0 list-style-4">
                            <li class="text-capitalize text-white-2">We stick to deadlines</li>
                            <li class="text-capitalize text-white-2">We offer cost-effective service</li>
                            <li class="text-capitalize text-white-2">We follow industry standards</li>
                            <li class="text-capitalize text-white-2">We provide various types of content</li>
                            <li class="text-capitalize text-white-2">We are reliable</li>
                            <li class="text-capitalize text-white-2">We save you a lot of your time</li>
                            <li class="text-capitalize text-white-2">We excel in offering fresh content</li>
                        </ul>
                        <a href="contact-us" class="btn btn-white btn-small text-extra-small border-radius-4 margin-10px-top">
						<i class="fas fa-play-circle icon-very-small margin-5px-right no-margin-left" aria-hidden="true"></i>
						 Contact us</a>
                    </div>
                </div>
            </div>
        </section>
		
		<!--- Why Us section Ends ----->
		
	
	<?php
	/*
        <!-- starts logos box section -->

		<section class="wow animate__fadeIn" style="visibility: visible; animation-name: fadeIn;padding: 0px; background-color: rgb(239, 239, 239); margin-top: 10px; padding-bottom: 45px;">
            <div class="container">
			<h4 class="h3 alt-font text-extra-dark-gray font-weight-600 text-center pt-5">Brands That Trust The Services Of Our<br>iPhone App Development Company Toronto</h4>
			<span class="separator-line-horrizontal-medium-light2 bg-deep-pink d-table mx-auto w-100px"></span>
                <div class="row mt-4">    
                    <div class="swiper-container black-move wow animate__fadeIn swiper-initialized swiper-horizontal swiper-pointer-events" data-slider-options="{ &quot;slidesPerView&quot;: &quot;1&quot;, &quot;allowTouchMove&quot;:true,&quot;paginationClickable&quot;: true, &quot;autoplay&quot;: { &quot;delay&quot;: 3000, &quot;disableOnInteraction&quot;: true }, &quot;navigation&quot;: { &quot;nextEl&quot;: &quot;.swiper-button-next&quot;, &quot;prevEl&quot;: &quot;.swiper-button-prev&quot; }, &quot;pagination&quot;: { &quot;el&quot;: &quot;.swiper-pagination-01&quot;, &quot;clickable&quot;: true }, &quot;breakpoints&quot;: { &quot;1200&quot;: { &quot;slidesPerView&quot;: 4 }, &quot;992&quot;: { &quot;slidesPerView&quot;: 3 }, &quot;768&quot;: { &quot;slidesPerView&quot;: 3 } } }" style="visibility: visible; animation-name: fadeIn;">
                        <div class="swiper-wrapper" id="swiper-wrapper-10b77eb4413a3a8b9" aria-live="off" style="transform: translate3d(-1140px, 0px, 0px); transition-duration: 0ms;">
                            <div class="swiper-slide text-center Clientlg" role="group" aria-label="2 / 8" style="width: 120px;"><img src="images/icons/aquatech.png" alt="" data-no-retina=""></div>
                            <div class="swiper-slide text-center Clientlg" role="group" aria-label="3 / 8" style="width: 120px;"><img src="images/icons/cantabil.png" alt="" data-no-retina=""></div>
                            <div class="swiper-slide text-center Clientlg swiper-slide-prev" role="group" aria-label="4 / 8" style="width: 120px;"><img src="images/icons/abrams.png" alt="" data-no-retina=""></div>
                            <div class="swiper-slide text-center Clientlg swiper-slide-active" role="group" aria-label="5 / 8" style="width: 120px;"><img src="images/icons/creative-arcades.png" alt="" data-no-retina=""></div>
                            <div class="swiper-slide text-center Clientlg swiper-slide-next" role="group" aria-label="6 / 8" style="width: 120px;"><img src="images/icons/hp.png" alt="" data-no-retina=""></div>
                            <div class="swiper-slide text-center Clientlg" role="group" aria-label="7 / 8" style="width: 120px;"><img src="images/icons/luiolui-1.png" alt="" data-no-retina=""></div> 
                            <div class="swiper-slide text-center Clientlg" role="group" aria-label="8 / 8" style="width: 120px;"><img src="images/icons/wellist.png" alt="" data-no-retina=""></div>
                            <div class="swiper-slide text-center Clientlg" role="group" aria-label="9 / 8" style="width: 120px;"><img src="images/icons/follett.png" alt="" data-no-retina=""></div>
                            <div class="swiper-slide text-center Clientlg" role="group" aria-label="10 / 8" style="width: 120px;"><img src="images/icons/aonHewit.png" alt="" data-no-retina=""></div> 
                        </div>
                        <!-- start swiper pagination -->
                        <!-- <div class="swiper-pagination swiper-pagination-01"></div> -->
                        <!-- end swiper pagination -->
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                </div>    
            </div>
        </section>
<!-- end logos section  -->

	
<!--- Accomplishments starts --->
		<section class="wow animate__fadeIn padding-five-top padding-five-bottom" style="visibility: visible; animation-name: fadeIn;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-9 col-md-12 col-sm-10 text-center last-paragraph-no-margin pb-5">
                        <h5 class="alt-font font-weight-600 text-extra-dark-gray margin-15px-bottom">Our Accomplishments</h5>
						<span class="separator-line-horrizontal-medium-light2 bg-deep-pink d-table mx-auto w-100px"></span>
                        <p class="mb-0 text-extra-large-home">In addition to providing you with fast iOS app development services,
						we have decades of experience and numerous successful iOS and Android applications,
						and our devotion to your iOS app project will ensure positive outcomes in all manners
						</p>
                    </div>  
                </div>
                <div class="row justify-content-center">
				  <div class="col-md-4 text-center feature-box-11 position-relative wow animate__fadeInRight last-paragraph-no-margin"
            style="visibility: visible; animation-name: fadeInRight;">
            <div class="d-inline-block padding-30px-all w-130px h-130px line-height-65 rounded-circle bg-white text-center">
				<i class="fa-solid fa-user-tie" style="font-size: 4em; color: #ff214f;"></i>
            </div>
            <div class="text-medium alt-font text-capitalize text-extra-dark-gray margin-10px-bottom md-margin-5px-bottom mt-3">50+ IOS Developers In-House</div>
		  </div>
		  
				  <div class="col-md-4 text-center feature-box-11 position-relative md-margin-eight-bottom sm-margin-ten-bottom wow animate__fadeInRight last-paragraph-no-margin"
            style="visibility: visible; animation-name: fadeInRight;">
            <div class="d-inline-block padding-30px-all w-130px h-130px line-height-65 rounded-circle bg-white text-center">
				<i class="fa-solid fa-lightbulb" style="font-size: 4em; color: #ff214f;"></i>
            </div>
            <div class="text-medium alt-font text-capitalize text-extra-dark-gray margin-10px-bottom md-margin-5px-bottom mt-3">300+ IOS Projects Developed</div>
				</div>
				  <div class="col-md-4 text-center feature-box-11 position-relative md-margin-eight-bottom sm-margin-ten-bottom wow animate__fadeInRight last-paragraph-no-margin"
            style="visibility: visible; animation-name: fadeInRight;">
            <div class="d-inline-block padding-30px-all w-130px h-130px line-height-65 rounded-circle bg-white text-center">
				<i class="fa-solid fa-headset" style="font-size: 4em; color: #ff214f;"></i>
            </div>
            <div class="text-medium alt-font text-capitalize text-extra-dark-gray margin-10px-bottom md-margin-5px-bottom mt-3">20+ Industries Brought on Android, and many more.</div>
		  </div>
		 </div>
	  </div>
    </section>
	
	
	<!--- Accomplishments Ends --->
	*/
	?>
	
<section class="padding-five-top padding-five-bottom wow animate__fadeIn bg-light-gray " style="visibility: visible; animation-name: fadeIn;padding:40px 0;background-color:rgb(223 223 223 / 35%) !important;">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h5 class="alt-font text-extra-dark-gray font-weight-600 md-w-100 mb-2">Don't just take our word for it:</h5>
                        <span class="separator-line-horrizontal-medium-light2 bg-deep-pink d-table mx-auto w-100px"></span>
						<p class="text-extra-large-home alt-font mt-3 text-center text-capitalize" style="font-size: 18px;color: #dd0612;font-weight:500;">
							see what real clients have to say about Tech2Globe's content marketing services</p>
                    </div>
                </div>
				<br>
                <div class="row justify-content-center">

				 <!-- start testimonials item -->
                    <div class="col-12 col-lg-4 col-md-6 col-sm-8 wow animate__fadeIn last-paragraph-no-margin testimonial-style3" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
                        <div class="testimonial-content-box padding-twelve-all bg-white border-radius-6 box-shadow arrow-bottom lg-padding-nine-all md-padding-eight-all text-extra-large-home">
                         "Tech2Globe has exceeded my expectations with their content marketing services. They have a team of skilled writers who produce high-quality, engaging content that resonates with our target audience.<br>
						 They also have a great understanding of SEO and how to use it to drive traffic to our website. I highly recommend Tech2Globe to any business."
                        </div>
                        <div class="testimonial-box padding-25px-all sm-padding-20px-all">
                            <div class="image-box w-20"><img src="images/avtar-16.jpg" class="rounded-circle" alt="" data-no-retina=""></div>
                            <div class="name-box padding-20px-left">
                                <div class="alt-font font-weight-600 text-small text-uppercase text-extra-dark-gray">Ashley Thompson</div>
                            </div>
                        </div>
                    </div>
                    <!-- end testimonials item -->
					
	                    <div class="col-12 col-lg-4 col-md-6 col-sm-8 md-margin-two-bottom wow animate__fadeIn last-paragraph-no-margin testimonial-style3" style="visibility: visible; animation-name: fadeIn;">
                        <div class="testimonial-content-box padding-twelve-all bg-white border-radius-6 box-shadow arrow-bottom lg-padding-nine-all md-padding-eight-all text-extra-large-home">
                          "Tech2Globe has been a game changer for our company. We were struggling to generate leads and increase our online visibility, but since working with Tech2Gobe, we have seen a significant improvement in both areas.
						  Their team is professional, responsive, and always willing to go the extra mile to deliver great results. I can't recommend them enough!"
                        </div>
                        <!-- start testimonials item -->
                        <div class="testimonial-box padding-25px-all sm-padding-20px-all">
                            <div class="image-box w-20"><img src="images/avtar-14.jpg" class="rounded-circle" alt="" data-no-retina=""></div>
                            <div class="name-box padding-20px-left">
                                <div class="alt-font font-weight-600 text-small text-uppercase text-extra-dark-gray">Isabella Rodriguez</div>
                            </div>
                        </div>
                    </div>
                    <!-- end testimonials item -->				
					
					
                    <!-- start testimonials item -->
                    <div class="col-12 col-lg-4 col-md-6 col-sm-8 md-margin-two-bottom wow animate__fadeIn last-paragraph-no-margin testimonial-style3" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
                       <div class="testimonial-content-box padding-twelve-all bg-white border-radius-6 box-shadow arrow-bottom lg-padding-nine-all md-padding-eight-all text-extra-large-home">
                         "We have been working with Tech2Globe for the past year and have seen tremendous results in terms of website traffic and lead generation. Their team is knowledgeable and always willing to provide guidance and support.
						 I highly recommend Tech2Globe to any business looking to improve their online presence through content marketing."
						</div>
                        <div class="testimonial-box padding-25px-all sm-padding-20px-all">
                            <div class="image-box w-20"><img src="images/avtar-15.jpg" class="rounded-circle" alt="" data-no-retina=""></div>
                            <div class="name-box padding-20px-left">
                                <div class="alt-font font-weight-600 text-small text-uppercase text-extra-dark-gray">Henry Moore</div>
                            </div>
                        </div>
                    </div>
                    <!-- end testimonials item -->

                </div>
            </div>
        </section>
	<!-- end testimonial section  -->



	  
	   
        <!-- end parallax with feature box section -->

		
			
<!--- FAQ COntact form starts --->
	   
	   <section class="bg-extra-dark-gray border-none p-0 wow animate__fadeIn" style="visibility: visible; animation-name: fadeIn;">
            <div class="container-fluid">
                <div class="row row-cols-1 row-cols-lg-2 justify-content-center">
                    <div class="col padding-two-lr padding-six-half-tb lg-padding-five-tb lg-padding-six-lr md-padding-six-all sm-padding-50px-tb sm-padding-15px-lr wow animate__fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                        <h5 class="alt-font text-light text-center text-lg-start margin-eight-bottom md-margin-40px-bottom sm-margin-30px-bottom font-weight-600">FAQ's</h5>
                        <!-- start accordion -->
                        <div class="panel-group accordion-event accordion-style2" id="accordion-main" data-active-icon="fa-angle-up" data-inactive-icon="fa-angle-down">
                            <!-- start tab content -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a class="accordion-toggle" data-bs-toggle="collapse" data-bs-parent="#accordion-main" href="#collapseOne">
                                        <div class="panel-title">
                                            <span class="text-extra-dark-gray sm-w-80 d-inline-block text-extra-large-home">What is content marketing?</span>
                                            <i class="fas fa-angle-down text-extra-dark-gray"></i>
                                        </div>
                                    </a>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse shadow-light" data-bs-parent="#accordion-main">
                                    <div class="panel-body text-extra-large-home bg-dark-50 text-c9">
									 Content marketing is the process of creating and distributing valuable, relevant, and consistent content to attract and retain a clearly defined audience, and ultimately, to drive profitable customer action. This can include blog posts, social media posts, email newsletters, videos, podcasts, and other types of content.
									</div>
                                </div>
                            </div>
                            <!-- end tab content -->
                            <!-- start tab content -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a class="accordion-toggle" data-bs-toggle="collapse" data-bs-parent="#accordion-main" href="#collapseTwo">
                                        <div class="panel-title">
                                               <span class="text-extra-dark-gray sm-w-80 d-inline-block text-extra-large-home">What services does a content marketing company offer?</span>
                                            <i class="fas fa-angle-down text-extra-dark-gray"></i>
                                        </div>
                                    </a>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse shadow-light" data-bs-parent="#accordion-main">
                                    <div class="panel-body text-extra-large-home bg-dark-50 text-c9">
									 A content marketing agency Canada typically offer a range of services, including:
									 Content strategy development: This involves creating a plan for creating and distributing content that aligns with the business's goals and objectives. Content creation: This involves creating the actual content, such as blog posts, social media posts, and more. Content distribution: This involves promoting and distributing the content through various channels, such as social media, email newsletters, and more. Analytics and reporting: This involves tracking the performance of the content and providing reports on metrics such as website traffic, engagement, and conversions
									</div>
                                </div>
                            </div>
                            <!-- end tab content -->
                            <!-- start tab content -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a class="accordion-toggle" data-bs-toggle="collapse" data-bs-parent="#accordion-main" href="#collapseThree">
                                        <div class="panel-title">
                                            <span class="text-extra-dark-gray sm-w-80 d-inline-block text-extra-large-home">How does the Best content marketing services in Toronto create content?</span>
                                            <i class="fas fa-angle-down text-extra-dark-gray"></i>
                                        </div>
                                    </a>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse shadow-light" data-bs-parent="#accordion-main">
                                    <div class="panel-body text-extra-large-home bg-dark-50 text-c9">
									 Content marketing companies typically have a team of writers, editors, and content strategists who work together to create content. The process may involve researching topics, developing a content calendar, writing and editing the content, and ensuring that the content is optimised for search engines and meets the needs of the target audience.
									</div>
                                </div>
                            </div>
                            <!-- end tab content -->
							
							
                            <!-- start tab content -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a class="accordion-toggle" data-bs-toggle="collapse" data-bs-parent="#accordion-main" href="#collapsefor">
                                        <div class="panel-title">
                                            <span class="text-extra-dark-gray sm-w-80 d-inline-block text-extra-large-home">How is content marketing services different from other forms of marketing?</span>
                                            <i class="fas fa-angle-down text-extra-dark-gray"></i>
                                        </div>
                                    </a>
                                </div>
                                <div id="collapsefor" class="panel-collapse collapse shadow-light" data-bs-parent="#accordion-main">
                                    <div class="panel-body text-extra-large-home bg-dark-50 text-c9">
									 Content marketing is different from other forms of marketing in that it focuses on creating valuable and relevant content that helps to attract and retain customers, rather than directly promoting products or services. This can help businesses establish trust and credibility with their audience, which can ultimately lead to increased sales and customer loyalty
									</div>
                                </div>
                            </div>
                            <!-- end tab content -->
                             <!-- start tab content -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a class="accordion-toggle" data-bs-toggle="collapse" data-bs-parent="#accordion-main" href="#collapsefive">
                                        <div class="panel-title">
                                            <span class="text-extra-dark-gray sm-w-80 d-inline-block text-extra-large-home">Who can benefit from content marketing services?</span>
                                            <i class="fas fa-angle-down text-extra-dark-gray"></i>
                                        </div>
                                    </a>
                                </div>
                                <div id="collapsefive" class="panel-collapse collapse shadow-light" data-bs-parent="#accordion-main">
                                    <div class="panel-body text-extra-large-home bg-dark-50 text-c9">
									 Content marketing services can be beneficial for businesses of all sizes and industries. By creating valuable content that resonates with their target audience, businesses can attract and retain customers, increase brand awareness, and drive sales.
									</div>
                                </div>
                            </div>
                            <!-- end tab content -->								
							
                        </div>
                        <!-- end accordion -->
                    </div>
				<!------ contact form Starts ------>
										<?php include"include/digital-markiting-form.php"; ?> 
					<!------ contact form Ends ------>
                </div>
            </div>
        </section>
	   
	   <!--- FAQ COntact form Ends --->
	
	
	<!-- include footer -->
		
<?php include('include/footer.php');?>

    </body>
</html>