


<!DOCTYPE HTML>
<html lang="ar" dir="rtl">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="google-site-verification" content="lk9L83xdbRsSfz3zKGYbzk7GdPGwBoSGyUW5S-eMYAg" />
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Auto Store</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="assets2/img/favicon.png" />
        <link rel="stylesheet" href="assets2/css/normalize.css">
        <link rel="stylesheet" href="assets2/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets2/css/bootstrap.rtl.min.css">
        <link rel="stylesheet" href="assets2/css/all.min.css">
        <link rel="stylesheet" href="assets2/css/magnific-popup.min.css">
        <link rel="stylesheet" href="assets2/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="assets2/css/owl.carousel.min.css">
        <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="assets2/css/style.css">



<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1822296028514369');
fbq('track', 'PageView');
fbq('track', 'ViewContent');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1822296028514369&ev=PageView&noscript=1"
/></noscript>








    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<script language="javascript" type="text/javascript">




//fuction to return the xml http object
function getXMLHTTP() { 
  var xmlhttp = false;  
  try {
    xmlhttp = new XMLHttpRequest();
  } catch(e) {    
    try {     
      xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
    } catch(e) {
      try {
        xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
      } catch(e1) {
        xmlhttp = false;
      }
    }
  }
    
  return xmlhttp;
}
  
function getState(optionElement) {    



    countryId = optionElement.id;
    const container = optionElement.closest('.custom-select-container'); // Find the container
    const selectedOption = container.querySelector('.selected-option'); // Update the selected option
    const formCustom = optionElement.closest('.form-custom'); // Find the parent .form-custom
  
    // Update the selected text
    const text = optionElement.querySelector('span').textContent;
    const graySpan = selectedOption.querySelector('.selected-option-gray');
    if (graySpan) graySpan.textContent = text;
    document.getElementById("city5").value = text;

    // Close the dropdown and reset z-index
    const options = container.querySelector('.custom-options');
    options.style.display = 'none';
    if (formCustom) {
      formCustom.style.zIndex = ''; // Reset z-index
    }



  var strURL = "findState.php?country="+countryId;
  var req    = getXMLHTTP();
  if (req) {
    req.onreadystatechange = function() {
      if (req.readyState == 4) {
        // only if "OK"
        if (req.status == 200) {            
          document.getElementById('statediv').innerHTML=req.responseText;
          
        } else {
          alert("Problem while using XMLHTTP:\n" + req.statusText);
        }
      }       
    }     
    req.open("GET", strURL, true);
    req.send(null);
  }   
}

function getCity(optionElement) {    

    countryId = optionElement.id;
    const container = optionElement.closest('.custom-select-container'); // Find the container
    const selectedOption = container.querySelector('.selected-option'); // Update the selected option
    const formCustom = optionElement.closest('.form-custom'); // Find the parent .form-custom
  
    // Update the selected text
    const text = optionElement.querySelector('span').textContent;
    const graySpan = selectedOption.querySelector('.selected-option-gray');
    if (graySpan) graySpan.textContent = text;
    document.getElementById("state5").value = text;

    // Close the dropdown and reset z-index
    const options = container.querySelector('.custom-options');
    options.style.display = 'none';
    if (formCustom) {
      formCustom.style.zIndex = ''; // Reset z-index
    }


  var strURL = "findCity.php?country="+countryId;
  var req    = getXMLHTTP();
  if (req) {
    req.onreadystatechange = function() {
      if (req.readyState == 4) {
        // only if "OK"
        if (req.status == 200) {            
          document.getElementById('citydiv').innerHTML = req.responseText;            
        } else {
          alert("Problem while using XMLHTTP:\n" + req.statusText);
        }
      }       
    }     
    req.open("GET", strURL, true);
    req.send(null);
  }
}


function getdist(optionElement) {   

    countryId = optionElement.id;
    const container = optionElement.closest('.custom-select-container'); // Find the container
    const selectedOption = container.querySelector('.selected-option'); // Update the selected option
    const formCustom = optionElement.closest('.form-custom'); // Find the parent .form-custom
  
    // Update the selected text
    const text = optionElement.querySelector('span').textContent;
    const graySpan = selectedOption.querySelector('.selected-option-gray');
    if (graySpan) graySpan.textContent = text;
    document.getElementById("dist5").value = text;

    // Close the dropdown and reset z-index
    const options = container.querySelector('.custom-options');
    options.style.display = 'none';
    if (formCustom) {
      formCustom.style.zIndex = ''; // Reset z-index
    }


}

function getpro1(optionElement) {    


    countryId1 = optionElement.id;



    const container = optionElement.closest('.custom-select-container'); // Find the container
    const selectedOption = container.querySelector('.selected-option'); // Update the selected option
    const formCustom = optionElement.closest('.form-custom'); // Find the parent .form-custom
  
    // Update the selected text
    const text = optionElement.querySelector('span').textContent;
    const graySpan = selectedOption.querySelector('.selected-option-gray');
    if (graySpan) graySpan.textContent = text;
    document.getElementById("cartyp").value = text;

    // Close the dropdown and reset z-index
    const options = container.querySelector('.custom-options');
    options.style.display = 'none';
    if (formCustom) {
      formCustom.style.zIndex = ''; // Reset z-index
    }


    if(countryId1 == 'KOP' || countryId1 == 'KAP'){

document.getElementById("prodiv1").style.display = 'flex';
document.getElementById("prodiv").style.display = 'none';


    }else{


document.getElementById("prodiv1").style.display = 'none';
document.getElementById("prodiv").style.display = 'flex';


    }

}







// function updateprice() { 


// document.getElementById("voutcher_am").value = Number(document.getElementById("discout1").value) +  Number(document.getElementById("discout2").value);


// document.getElementById("pricee").value =  Number(document.getElementById("p1pricee").value) +  Number(document.getElementById("p2pricee").value) - Number(document.getElementById("voutcher_am").value);



// document.getElementById("shipping22").value =  Number(document.getElementById("delivery").value) +  Number(document.getElementById("p1pricee").value)+  Number(document.getElementById("p2pricee").value) - Number(document.getElementById("voutcher_am").value);
// }








</script>









    </head>
    
    <body>
        
        <header class="header">
            <div class="video-bg">
                <video src="assets2/videos/main1.mp4" autoplay loop muted class="w-100"></video>
            </div>
            <div class="title-header">
                <h1>TINT YOUR <br> CAR <br> WITH <br> CREATIVE</h1>
            </div>
        </header>

        <section class="logo-content">
            <div class="container">
                <div class="logo">
                    <img src="assets2/img/logo/logo.png" class="img-fluid" alt="Logo">
                </div>
                <div class="slogan">
                    <h2 class="text-center"> خصوصيتك في عربيتك </h2>
                </div>
            </div>
        </section>

        <section class="about">
            <div class="container">
                <div class="head-section">
                    <h2> الفاميه الكريتف </h2>
                    <h4> اسكرينه عزل حراري سهل الفك و التركيب و الاستخدام المتكرر </h4>
                </div>


                <div class="video" >

<video width="100%" height="450"  autoplay loop muted src="assets2/videos/main.mp4">

                   </video>
                </div>



                <div class="order-now">
                    <a href="#form-sale" class="btn-order">
                        <i class="fa-solid fa-angle-down"></i>
                        <span> اطلب الان </span>
                    </a>
                </div>
            </div>
        </section>

        <section class="slider-videos">
            <div class="container">
                <div class="owl-carousel owl-theme swiper-vidoes">
                    <!-- <div class="swiper-wrapper"> -->
                        <div class="item">



                            <div class="video-item">




<iframe height="300" width= "100%" src="https://www.tiktok.com/player/v1/7442298616489708807?&music_info=1&description=1" allow="fullscreen" title="test"></iframe>




                                <h4> فيديو تركيب الفاميه الكريتف </h4>
                            </div>



                        </div>
                        <div class="item">
                            <div class="video-item">
<iframe height="300" width= "100%" src="https://www.tiktok.com/player/v1/7442299408709979410?&music_info=1&description=1" allow="fullscreen" title="test"></iframe>

                                <h4> فيديو تركيب الفاميه الكريتف </h4>
                            </div>
                        </div>
                        <div class="item">
                            <div class="video-item">
                              <h4>
<iframe height="300" width= "100%" src="https://www.tiktok.com/player/v1/7442300234299936007?&music_info=1&description=1" allow="fullscreen" title="test"></iframe>
                                </h4>
                            </div>
                        </div>
                        <div class="item">
                            <div class="video-item">
                             
<iframe height="300" width= "100%" src="https://www.tiktok.com/player/v1/7442300795283983634?&music_info=1&description=1" allow="fullscreen" title="test"></iframe>
                                
                            </div>
                        </div>
                        <div class="item">
                            <div class="video-item">
<iframe height="300" width= "100%" src="https://www.tiktok.com/player/v1/7442301333622885639?&music_info=1&description=1" allow="fullscreen" title="test"></iframe>
                                <h4> فيديو تركيب الفاميه الكريتف </h4>
                            </div>
                        </div>
                        <div class="item">
                            <div class="video-item">
<iframe height="300" width= "100%" src="https://www.tiktok.com/player/v1/7442302252678761735?&music_info=1&description=1" allow="fullscreen" title="test"></iframe>
                                <h4> فيديو تركيب الفاميه الكريتف </h4>
                            </div>
                        </div>
                        <div class="item">
                            <div class="video-item">
<iframe height="300" width= "100%" src="https://www.tiktok.com/player/v1/7442300234299936007?&music_info=1&description=1" allow="fullscreen" title="test"></iframe>
                                <h4> فيديو تركيب الفاميه الكريتف </h4>
                            </div>
                        </div>
                        <div class="item">
                            <div class="video-item">
<!--                                 <a href="https://www.youtube.com/embed/BjHDFDuG41U?si=knvuF-eGlG_bTU3K" class="popup-youtube">
                                    <img src="assets2/img/video/3.jpg" class="img-fluid img-video w-100" alt="">
                                    <div class="layer">
                                        <img src="assets2/img/icons/play.png" class="img-fluid" width="50" alt="">
                                    </div>
                                </a> -->


<iframe height="300" width= "100%" src="https://www.tiktok.com/player/v1/7442301333622885639?&music_info=1&description=1" allow="fullscreen" title="test"></iframe>


                                <h4> فيديو تركيب الفاميه الكريتف </h4>
                            </div>
                        </div>
                    <!-- </div> -->
                </div>
            </div>
        </section>
        
        <section class="features">
            <div class="img-features">
                <img src="assets2/img/bg/3.webp" class="img-fluid height="189" width= "100%" alt="">
            </div>
            <div class="container">
                <div class="features-content">
                    <ul class="features-list list-unstyled">
                        <li>
                            <img src="assets2/img/icons/truck.png" width="40" alt="" class="img-fluid">
                            <span> الشحن خلال 3-5 ايام </span>
                        </li>
                        <li>
                            <img src="assets2/img/icons/vector.png" width="40" alt="" class="img-fluid">
                            <span> المساعدة عبر الدردشة المباشرة  </span>
                        </li>
                        <li>
                            <img src="assets2/img/icons/like.png" width="40" alt="" class="img-fluid">
                            <span> سهل التركيب خلال 10 دقيقه </span>
                        </li>
                        <li>
                            <img src="assets2/img/icons/money.png" width="40" alt="" class="img-fluid">
                            <span> طرق الدفع امنه </span>
                        </li>
                    </div>
                </div>
            </div>
        </section>

        <section class="content-images">
            <div class="container">
                <div class="images">
                    <div class="img img-big">
                        <img src="assets2/img/gallery/1.webp" alt="" class="img-fluid">
                    </div>
                    <div class="img">
                        <img src="assets2/img/gallery/2.webp" alt="" class="img-fluid">
                    </div>
                    <div class="img">
                        <img src="assets2/img/gallery/3.webp" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="text-images">
                    <h3> محتوي الشحنه </h3>
                    <h6>
                        الشحنه بتوصلك موجود فيها الفاميه و اتاكد ان ختم اوتوستور موجود علي كل قطعه من الفاميه و يكون نفس موديل السياره و بيكون معه كارت دبل فيس و شنطه.
                    </h6>
                </div>
                <div class="images">
                    <div class="img img-big">
                        <img src="assets2/img/gallery/4.webp" alt="" class="img-fluid">
                    </div>
                    <div class="img">
                        <img src="assets2/img/gallery/5.webp" alt="" class="img-fluid">
                    </div>
                    <div class="img">
                        <img src="assets2/img/gallery/6.webp" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="text-images">
                    <h3> طريقه التركيب </h3>
                    <h6>
                        دى طريقة فك وتركيب الفاميه الكريتيف هتلزق حتتين صغيرين  عالزجاج  من فوق هتنزل الفاميه بزاوية  45  درجه وتبتدى تخليه بين الازاز والفرش الخاص بالباب وتنزل الفاميه بشكل طبيعى وتبتدى تساويه عالازاز مع لصق الدابل فيس لثبات الفاميه
                    </h6>
                </div>
                <div class="images">
                    <div class="img img-big">
                        <img src="assets2/img/gallery/7.webp" alt="" class="img-fluid">
                    </div>
                    <div class="img">
                        <img src="assets2/img/gallery/8.webp" alt="" class="img-fluid">
                    </div>
                    <div class="img">
                        <img src="assets2/img/gallery/9.webp" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="text-images">
                    <h3> مواصفات الكريتف </h3>
                    <h6>
                        المنتج عازل 85% للحراره ,و بيكون عليه ضمان سنتين لو ساح من الشمس او ل وده بيضمنلك جوده المنتج ,و بيكون درجه واحده سوبر دارك بيضمنلك خصوصيه الي حد كبير .
                    </h6>
                </div>
                <div class="images">
                    <div class="img img-big">
                        <img src="assets2/img/gallery/10.webp" style="background-repeat: no-repeat;background-size: 100% 100%;" alt="" >
                    </div>
                    <div class="img">
                        <img src="assets2/img/gallery/11.webp" alt="" class="img-fluid">
                    </div>
                    <div class="img">
                        <img src="assets2/img/gallery/12.webp" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="text-images">
                    <h3> الشكل النهائي </h3>
                    <h6>
                        الشكل النهائي للفاميه الكريتف من الخارج و الداخل بتشوف من جوة العربيه و محدش شيفك بوضوح
                    </h6>
                </div>
            </div>
        </section>

        <section class="content-videos">
            <div class="text-videos">
                <h3> فيديو  التركيب </h3>
            </div>
            
<div align="center">

<iframe width="90%" height="200"  src="https://www.youtube.com/embed/ycSglZEbZxA?si=knvuF-eGlG_bTU3K">

                   </iframe>
            </div>
            <div class="text-videos">
                <h3> فيديو تفصيلي للفاميه الكريتف </h3>
            </div>
<div align="center">
<iframe width="90%" height="200"  src="https://www.youtube.com/embed/qxMNbGJi76k?si=knvuF-eGlG_bTU3K">

                   </iframe>
            </div>
        </section>


        <section class="questions">
            <div class="container">
                <div class="head-section">

              <div class="questions-items"></div><br>


                    <h2>
                        <span> اي سوال هيجي في بالك هتلاقيه هنا </span>
                        <img src="assets2/img/icons/like-down.png" width="30" alt="">
                    </h2>
                </div>
                <div class="head-form">

 

                    <form action="#">
                        <!-- <div class="custom-select-container" id="custom-select-container">
                            <div class="custom-select" onclick="toggleDropdown(this)">
                              <span class="selected-option"> الاسئلة </span>
                              <span class="dropdown-arrow"><img src="assets2/img/icons/select.png" width="10" alt=""></span>
                            </div>
                            <ul class="custom-options list-unstyled">
                              <li onclick="selectOption(this)"> هل المنتج عليه ضمان؟ </li>
                              <li onclick="selectOption(this)"> هل المنتج نفسه اكريلك و ملزوق عليه فاميه؟ </li>
                              <li onclick="selectOption(this)"> اعرف اركبه بنفسي ولا لازم انتو تركبوه؟ </li>
                              <li onclick="selectOption(this)"> ما محتويات الشنطة التي تصل مع الفاميه؟ </li>
                              <li onclick="selectOption(this)"> من اين يتم شراء دابل فيس عند انتهاء الموجود مع الفاميه؟ </li>
                              <li onclick="selectOption(this)"> هل العربيات كلها مقاس واحد ولا كل عربيه ليها مقاس؟ </li>
                            </ul>
                        </div> -->
                        <select name="select" id="select">
                            <option disabled selected> الاسئلة </option>
                            <option value="qustt1"> هل المنتج عليه ضمان؟ </option>
                            <option value="qustt2"> هل المنتج نفسه اكريلك و ملزوق عليه فاميه؟ </option>
                            <option value="qustt3"> اعرف اركبه بنفسي ولا لازم انتو تركبوه؟ </option>
                            <option value="qustt4"> ما محتويات الشنطة التي تصل مع الفاميه؟ </option>   
                            <option value="qustt5">    كيف يتم تثبيت الفاميه على الزجاج ؟       </option>   
                            <option value="qustt6"> من اين يتم شراء دابل فيس عند انتهاء الموجود مع الفاميه؟ </option>
                            <option value="qustt7">      الفاميه بيتشال ويتركب كام مره ؟    </option>  
                            <option value="qustt8"> هل العربيات كلها مقاس واحد ولا كل عربيه ليها مقاس؟ </option>
                        </select>
                        <button type="button" class="btn btn-form" onclick="qustfun();"> <span> بحث </span> </button>
                    </form>
                </div>
                <div class="questions-items">
                    <div class="questions-items-content" id="qstcon" style ="display : none;">
                        
                        
                        
                        <div class="item" id="qst1" style ="display : none;">
                            <div class="head-item">
                                <h4>
                                    <span> السؤال: </span>
                                    <span> هل المنتج عليه ضمان؟ </span>
                                </h4>
                            </div>
                            <div class="body-item">
                                <h4>
                                    <span> الاجابة: </span>
                                    <span> المنتج عليه ضمان سنتين لو ساح من الشمس او غير لون. </span>
                                </h4>
                            </div>
                        </div>
                        
                        <div class="item" id="qst2" style ="display : none;">
                            <div class="head-item">
                                <h4>
                                    <span> السؤال: </span>
                                    <span>              هل المنتج نفسه اكريلك و ملزوق عليه فاميه؟                             </span>
                                </h4>
                            </div>
                            <div class="body-item">
                                <h4>
                                    <span> الاجابة: </span>
                                    <span>               الكريتف بيكون كله فاميه مش اكريلك و ملزق عليه فاميه.                               </span>
                                </h4>
                            </div>
                        </div>                        
                        <div class="item" id="qst3" style ="display : none;">
                            <div class="head-item">
                                <h4>
                                    <span> السؤال: </span>
                                    <span>               اعرف اركب الفاميه بنفسي ولا لازم انتو تركبوه؟                            </span>
                                </h4>
                            </div>
                            <div class="body-item">
                                <h4>
                                    <span> الاجابة: </span>
                                    <span>                 حضرتك بتعرف تركبه بنفسك خلال 10 دقايق و ده فيديو التركيب : 
 https://youtu.be/ycSglZEbZxA
                              </span>
                                </h4>
                            </div>
                        </div>                        
                        
                        <div class="item" id="qst4" style ="display : none;">
                            <div class="head-item">
                                <h4>
                                    <span> السؤال: </span>
                                    <span>              ما محتويات الشنطة التى تصل مع الفاميه ؟                            </span>
                                </h4>
                            </div>
                            <div class="body-item">
                                <h4>
                                    <span> الاجابة: </span>
                                    <span>                  الشحنه بتوصل لحضرتك موجود فيها الفاميه و شنطه و دبل فيس                             </span>
                                </h4>
                            </div>
                        </div>                         
                        
                        <div class="item" id="qst5" style ="display : none;">
                            <div class="head-item">
                                <h4>
                                    <span> السؤال: </span>
                                    <span>                كيف يتم تثبيت الفاميه على الزجاج ؟                          </span>
                                </h4>
                            </div>
                            <div class="body-item">
                                <h4>
                                    <span> الاجابة: </span>
                                    <span>                دى طريقة فك وتركيب الفاميه الكريتيف 
هتلزق حتتين صغيرين  عالزجاج  من فوق 
هتنزل الفاميه بزاوية 45 درجه وتبتدى تخليه بين الازاز والفرش الخاص بالباب 
وتنزل الفاميه بشكل طبيعى 
وتبتدى تساويه عالازاز مع لصق الدابل فيس لثبات الفاميه 
ودا فيديو لطريقه الفك والتركيب لسهوله الاستخدام :
https://youtu.be/ycSglZEbZxA                               </span>
                                </h4>
                            </div>
                        </div>                          
                        
                        <div class="item" id="qst6" style ="display : none;">
                            <div class="head-item">
                                <h4>
                                    <span> السؤال: </span>
                                    <span>                من اين يتم شراء دابل فيس عند انتهاء الموجود مع الفاميه ؟                          </span>
                                </h4>
                            </div>
                            <div class="body-item">
                                <h4>
                                    <span> الاجابة: </span>
                                    <span>                    الدبل فيس موجود في كل الفروع و الوكلاء .                           </span>
                                </h4>
                            </div>
                        </div>                         
                        
                         <div class="item" id="qst7" style ="display : none;">
                            <div class="head-item">
                                <h4>
                                    <span> السؤال: </span>
                                    <span>               الفاميه بيتشال ويتركب كام مره ؟                           </span>
                                </h4>
                            </div>
                            <div class="body-item">
                                <h4>
                                    <span> الاجابة: </span>
                                    <span>                بيتشال و يتركب في اي وقت لمده غير محدوده .                               </span>
                                </h4>
                            </div>
                        </div>                             
                        
                        
                         <div class="item" id="qst8" style ="display : none;">
                            <div class="head-item">
                                <h4>
                                    <span> السؤال: </span>
                                    <span>             هل العربيات كلها مقاس واحد ولا كل عربيه ليها مقاس ؟                           </span>
                                </h4>
                            </div>
                            <div class="body-item">
                                <h4>
                                    <span> الاجابة: </span>
                                    <span>        كل عربيه ليها مقاس محدد .                         </span>
                                </h4>
                            </div>
                        </div>                           
                        
                        
                    </div>




                </div>
            </div>

              <br><br><div class="questions-items"></div><br>


        </section>

        <section class="form-sale" id="form-sale">
            <div class="container">

                <form action="" id="form-info" method="post"  role="form2" enctype='multipart/form-data'> 

                    <div class="logo text-center">
                        <img src="assets2/img/logo/logo-dark.png" width="182" alt="" class="img-fluid">
                    </div>
                    <div class="head-section">
                        <h2> فاميـــــه كـــريتيـف </h2>
                        <p> سهــــــل التـــــــركيــب والإزالـــــــــــــة </p>
                    </div>




                    <div class="form-content">
                        <p> للطلب يرجى إدخال معلومات الأسفل: </p>
                        <div class="form-group">
                            <div class="input-group">
                                <label class="input-group-text" for="username"> الاسم: </label>
                                <input type="text" class="form-control" id="me1" name="me1" required  placeholder="مثال: احمد محمد علي" style="color: white;">
                                <span class="star">*</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <label class="input-group-text" for="phone1"> رقم الهاتف: </label>
                                <input type="number" class="form-control" id="me2" required name="me2" placeholder="01012345678" style="color: white;">
                                <span class="star">*</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <label class="input-group-text" for="phone2"> هاتف بديل: </label>
                                <input type="number" class="form-control" id="me3"  name="me3" placeholder="01012345678" style="color: white;">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <label class="input-group-text" for="address"> العنوان: </label>
                                <input type="text" class="form-control"id="me5" name="me5" required placeholder="مثال: حي السلام شارع شبين الكوم" style="color: white;">
                                <span class="star">*</span>
                            </div>
                        </div>
                        <div class="form-group form-custom">
                            <div class="custom-select-container">



                                <div class="custom-select" onclick="toggleDropdown(this)">
                                  <span class="selected-option">
                                    المحافظه:
                                    <span id="country"  class="selected-option-gray" style="color: white !important;"> اختار المحافظه </span>
                                  </span>
                                  <span class="dropdown-arrow"><img src="assets2/img/icons/select.png" width="10" alt=""></span>
                                  <span class="star">*</span>
                                </div>
                                <ul class="custom-options list-unstyled" style="color: white;">
 
            <?php 

            $us_con = sql("SELECT * FROM bosta_zoon GROUP BY city_name_ar", $eo);
            while ($row = mysqli_fetch_array($us_con)) { ?>
            <li  data-value="<?php echo $row['city_name_ar']?>" id="<?php echo $row['id']?>" onclick="getState(this)" > <span> <?php echo $row['city_name_ar']?> </span> </li>
            <?php } ?>


                                </ul>
                            </div>
                        </div>

                          <input type="text" name="me4" required id="city5" style="display: none;">


                        <div class="form-group form-custom">
                            <div class="custom-select-container">
                                <div class="custom-select" onclick="toggleDropdown(this)">
                                  <span class="selected-option">
                                    الحي:
                                    <span class="selected-option-gray" style="color: white !important;"> اختار الحي </span>
                                  </span>
                                  <span class="dropdown-arrow"><img src="assets2/img/icons/select.png" width="10" alt=""></span>
                                  <span class="star">*</span>
                                </div>

                          <div id="statediv">

                                <ul class="custom-options list-unstyled">

                                </ul>


                            </div>
                            </div>
                        </div>

                          <input type="text" required name="mee4" id="state5" style="display: none;">


                        <div class="form-group form-custom">
                            <div class="custom-select-container">
                                <div class="custom-select" onclick="toggleDropdown(this)">
                                  <span class="selected-option">
                                    المنطقه:
                                    <span class="selected-option-gray" style="color: white !important;"> اختار المنطقه </span>
                                  </span>
                                  <span class="dropdown-arrow"><img src="assets2/img/icons/select.png" width="10" alt=""></span>
                                  <span class="star">*</span>
                                </div>
 
                          <div id="citydiv">

                                <ul class="custom-options list-unstyled">

                                </ul>


                            </div>

                            </div>
                        </div>

                      <input type="text" name="mee5" required id="dist5" style="display: none;">



                        <div class="form-group">
                            <div class="input-group">
                                <label class="input-group-text" for="model">
                                    موديل السيارة:
                                </label>
                                <input type="Text" class="form-control" id="me6" name="me6" required placeholder="مثال: Toyota corolla" style="color: white;">
                                <span class="star">*</span>
                            </div>
                        </div>
                        <div class="form-group" >
                            <div class="input-group">
                                <label class="input-group-text" for="year"> سنة الصنع: </label>
                                <input type="text" class="form-control" id="me7" name="me7" required placeholder="2024" style="color: white;">
                                <span class="star">*</span>
                            </div>
                        </div>
                        <div class="form-group form-custom">
                            <div class="custom-select-container">
                                <div class="custom-select" onclick="toggleDropdown(this)">
                                  <span class="selected-option">
                                    نوع السيارة:
                                    <span class="selected-option-gray" style="color: white !important;"> اختار نوع السيارة </span>
                                  </span>
                                  <span class="dropdown-arrow"><img src="assets2/img/icons/select.png" width="10" alt=""></span>
                                  <span class="star">*</span>
                                </div>
                                <ul class="custom-options list-unstyled" style="color: white !important;">
                                    <li id="SDN" onclick="getpro1(this)" class="modelCar">
                                        <img src="assets2/img/icons/1.png" alt="">
                                        <span> سيدان </span>
                                    </li>
                                    <li id="HAT" onclick="getpro1(this)" class="modelCar">
                                        <img src="assets2/img/icons/2.png" alt="">
                                        <span> هاتش باك </span>
                                    </li>
                                    <li id="SUV" onclick="getpro1(this)" class="modelCar">
                                        <img src="assets2/img/icons/3.png" alt="">
                                        <span> SUV </span>
                                    </li>
                                    <li id="KOP" onclick="getpro1(this)" class="modelCar">
                                        <img src="assets2/img/icons/4.png" alt="">
                                        <span> كوبيه </span>
                                    </li>
                                    <li id="KAP" onclick="getpro1(this)" class="modelCar">
                                        <img src="assets2/img/icons/5.png" alt="">
                                        <span> كابورليه </span>
                                    </li>
                                    <li id="WAG" onclick="getpro1(this)" class="modelCar">
                                        <img src="assets2/img/icons/6.png" alt="">
                                        <span> واجن </span>
                                    </li>
                                    <li id="VAN" onclick="getpro1(this)" class="modelCar">
                                        <img src="assets2/img/icons/7.png" alt="">
                                        <span> VAN </span>
                                    </li>
                                    <li id="BUS" onclick="getpro1(this)" class="modelCar">
                                        <img src="assets2/img/icons/8.png" alt="">
                                        <span> BUS </span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                      <input type="text" name="cartyp"  id="cartyp" style="display: none;">


                        
                        <div class="form-group">
                            <div class="input-group">
                                <label class="input-group-text" for="photo">
                                    صوره السياره:
                                    <span>no file chosen</span>
                                </label>
                                <input type="file" class="form-control" name="photo" id="photo" accept="image/*">
                                <div class="addFile" dir="ltr">
                                    <img src="assets2/img/icons/plus.png" alt=""> 
                                    <span> Add file </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <label class="input-group-text" for="code"> كود الخصم: </label>
                                <input type="text" class="form-control" onchange="voutcherfun();" id="voutcher" name="voutcher" style="color: white !important;">
                            </div>
                        </div>
                    </div>



                    <div class="products">
                        <h3 class="head-products"> المنتجات </h3>
                        <div id="prodiv" style="display: none;" class="products-content">





<?php


$us_id1 = sql("SELECT * FROM products WHERE product_custom_field4 = 'online' AND id NOT IN(602,603) ORDER by id", $eo);

$num_id1   = mysqli_num_rows($us_id1);

if ($num_id1 > 0){

while ($rowid = mysqli_fetch_array($us_id1)) {

$proid      = $rowid['id'];

$pro_price = sqlValue("SELECT default_sell_price FROM `variations` WHERE product_id='$proid' limit 1");

// if($proid  == 254){$coun = 5;}else{$coun = 0;}

$coun = 0;
    echo'




                            <div class="product">
                                <div class="top-product">
                                    <h4>'.$rowid['name'].' </h4><br>
                                    <img src="https://autostore-eg.com/pos/public/uploads/img/'.$rowid['image'].'" alt="" class="img-fluid" style="height: 80px;width:150px;">
                                    <div class="price"> '.number_format($pro_price).' EGP </div>
                                </div>

                                <input type="text" id="price_1|'.$proid.'" style="display: none;" value="'.$pro_price.'" >

                                <input type="text" id="tot_1|'.$proid.'" name="qty" style="display: none;" value="0" >
                                <input type="text" id="vout_1|'.$proid.'" name="vout" style="display: none;" value="0" >
                                <input type="text" id="comm_1|'.$proid.'" name="comm" style="display: none;" value="0" >


                                <div class="bottom-product">
                                    <div class="qty">
                                        <button type="button" class="minusBtn"  id="bot1_'.$proid.'">
                                            <img src="assets2/img/icons/minusCircle.png" class="minusImg" alt="">
                                            <img src="assets2/img/icons/minusCircleColor.png" class="minusCircleColorImg" alt="">
                                        </button>
                                        <input type="number" id="pro_1|'.$proid.'" name="pro_'.$proid.'" min="0" class="text-center priceinp" value="'.$coun.'">
                                        <button type="button" class="plusBtn" id="bot2_'.$proid.'">
                                            <img src="assets2/img/icons/plusCircle.png" class="plusCircleImg" alt="">
                                            <img src="assets2/img/icons/plusCircleColor.png" class="plusCircleColorImg" alt="">
                                        </button>
                                    </div>
                                </div>
                            </div>




                            ';
}
}
                            ?>






                        </div>


                        <div id="prodiv1" style="display: none;" class="products-content">





<?php


$us_id1 = sql("SELECT * FROM products WHERE product_custom_field4 = 'online' AND id NOT IN(249,250,251,252,253) ORDER by id", $eo);

$num_id1   = mysqli_num_rows($us_id1);

if ($num_id1 > 0){

while ($rowid = mysqli_fetch_array($us_id1)) {

$proid      = $rowid['id'];

$pro_price = sqlValue("SELECT default_sell_price FROM `variations` WHERE product_id='$proid' limit 1");

// if($proid  == 254){$coun = 5;}else{$coun = 0;}

$coun = 0;
    echo'




                            <div class="product">
                                <div class="top-product">
                                    <h4>'.$rowid['name'].' </h4>
                                    <img src="https://autostore-eg.com/pos/public/uploads/img/'.$rowid['image'].'" alt="" class="img-fluid" style="height: 80px;width:150px;">
                                    <div class="price"> '.number_format($pro_price).' EGP </div>
                                </div>

                                <input type="text" id="price_2|'.$proid.'" style="display: none;" value="'.$pro_price.'" >

                                <input type="text" id="tot_2|'.$proid.'" name="qty" style="display: none;" value="0" >
                                <input type="text" id="vout_2|'.$proid.'" name="vout" style="display: none;" value="0" >
                                <input type="text" id="comm_2|'.$proid.'" name="comm" style="display: none;" value="0" >


                                <div class="bottom-product">
                                    <div class="qty">
                                        <button type="button" class="minusBtn">
                                            <img src="assets2/img/icons/minusCircle.png" class="minusImg" alt="">
                                            <img src="assets2/img/icons/minusCircleColor.png" class="minusCircleColorImg" alt="">
                                        </button>
                                        <input type="number" id="pro_2|'.$proid.'" name="pro_2'.$proid.'" min="0" class="text-center priceinp" value="'.$coun.'">
                                        <button type="button" class="plusBtn" >
                                            <img src="assets2/img/icons/plusCircle.png" class="plusCircleImg" alt="">
                                            <img src="assets2/img/icons/plusCircleColor.png" class="plusCircleColorImg" alt="">
                                        </button>
                                    </div>
                                </div>
                            </div>



                            ';
}
}
                            ?>






                        </div>





                    </div>


                    <input type="text" style="display: none;" id="totprice" name="totprice" value="0">
                    <input type="text" style="display: none;" id="voutcheram" name="voutcheram" value="0">


                    <div class="priceRevision">
                        <h4>
                            مصاريف شحن المنتج:
                             <span> 100 EGP </span>
                        </h4>
                        <h4>
                            اجمالي الخصم:
                             <a id ="disspan">  0.00 </a> EGP
                        </h4>
                        <h4>
                            اجمالي المبلغ المطلوب:
                             <a id ="totspan1"> 0.00 </a> <a >EGP </a> 
                        </h4>
                        <h3>
                            <a id ="totspan"> 0.00 </a> EGP
                        </h3>

                        <h2>
                            شكرا لطلبك من اوتو ستور اضغط علي تأكيد الطلب لتحصيل المبلغ  لتأكيد عملية الشحن.
                        </h2>



                        <button type="submit" name="submit" class="btn btn-submit" id="orderConfirmBtn">
                            <span> تأكيد الطلب </span>
                        </button>



        <input id="discout1" name="discout1" style="display: none;" type="text" value="">

        <input id="commission1" name="commission1" style="display: none;" type="text"  value="">




                    </div>
                </form>
            </div>
        </section>

        <section class="branches">
            <div class="head-branches">
                <h3> جميع الفروع و الوكلاء </h3>
            </div>
            <div class="body-branches">
                <div class="start-side">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <div class="start-side-head">
                            <div class="item">
                                <button class="nav-link" id="v-pills-main-tab" data-bs-toggle="pill" data-bs-target="#v-pills-main" type="button" role="tab" aria-controls="v-pills-main" aria-selected="true">
                                    <img src="assets2/img/icons/loc.png" width="7.5" alt="">
                                    <span> الفروع الرئيسية </span>
                                </button>
                            </div>
                        </div>
                        <div class="start-side-body">
                            <button class="nav-link active" id="v-pills-cairo-tab" data-bs-toggle="pill" data-bs-target="#v-pills-cairo" type="button" role="tab" aria-controls="v-pills-cairo" aria-selected="true">
                                <img src="assets2/img/icons/loc.png" width="7.5" alt="">
                                <span> القاهره </span>
                            </button>



                            <button class="nav-link" id="v-pills-giza-tab" data-bs-toggle="pill" data-bs-target="#v-pills-giza" type="button" role="tab" aria-controls="v-pills-giza" aria-selected="false">
                                <img src="assets2/img/icons/loc.png" width="7.5" alt="">
                                <span> الجيزه </span>
                            </button>
                            <button class="nav-link" id="v-pills-gharb-tab" data-bs-toggle="pill" data-bs-target="#v-pills-gharb" type="button" role="tab" aria-controls="v-pills-gharb" aria-selected="false">
                                <img src="assets2/img/icons/loc.png" width="7.5" alt="">
                                <span> غربيه </span>
                            </button>
                            <button class="nav-link" id="v-pills-domiat-tab" data-bs-toggle="pill" data-bs-target="#v-pills-domiat" type="button" role="tab" aria-controls="v-pills-domiat" aria-selected="false">
                                <img src="assets2/img/icons/loc.png" width="7.5" alt="">
                                <span> دمياط </span>
                            </button>
                            <button class="nav-link" id="v-pills-alex-tab" data-bs-toggle="pill" data-bs-target="#v-pills-alex" type="button" role="tab" aria-controls="v-pills-alex" aria-selected="false">
                                <img src="assets2/img/icons/loc.png" width="7.5" alt="">
                                <span> الاسكندريه </span>
                            </button>
                            <button class="nav-link" id="v-pills-fayoum-tab" data-bs-toggle="pill" data-bs-target="#v-pills-fayoum" type="button" role="tab" aria-controls="v-pills-fayoum" aria-selected="true">
                                <img src="assets2/img/icons/loc.png" width="7.5" alt="">
                                <span> الفيوم </span>
                            </button>
                            <button class="nav-link" id="v-pills-ghard-tab" data-bs-toggle="pill" data-bs-target="#v-pills-ghard" type="button" role="tab" aria-controls="v-pills-ghard" aria-selected="false">
                                <img src="assets2/img/icons/loc.png" width="7.5" alt="">
                                <span> الغردقه </span>
                            </button>
                            <button class="nav-link" id="v-pills-suiz-tab" data-bs-toggle="pill" data-bs-target="#v-pills-suiz" type="button" role="tab" aria-controls="v-pills-suiz" aria-selected="false">
                                <img src="assets2/img/icons/loc.png" width="7.5" alt="">
                                <span> السويس </span>
                            </button>
                            <button class="nav-link" id="v-pills-sharq-tab" data-bs-toggle="pill" data-bs-target="#v-pills-sharq" type="button" role="tab" aria-controls="v-pills-sharq" aria-selected="false">
                                <img src="assets2/img/icons/loc.png" width="7.5" alt="">
                                <span> الشرقيه </span>
                            </button>
                            <button class="nav-link" id="v-pills-dakh-tab" data-bs-toggle="pill" data-bs-target="#v-pills-dakh" type="button" role="tab" aria-controls="v-pills-dakh" aria-selected="false">
                                <img src="assets2/img/icons/loc.png" width="7.5" alt="">
                                <span> الدقهليه </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="end-side">
                    <img src="assets2/img/bg/4.png" class="img-fluid w-100" alt="">
                </div>
            </div>
            <div class="footer-branches">
                <div class="tab-content" id="v-pills-tabContent">



                    <div class="tab-pane fade" id="v-pills-main" role="tabpanel" aria-labelledby="v-pills-main-tab" tabindex="0">
                        <div class="item">
                            <img src="assets2/img/icons/loc.png" width="7.5" alt="">
                            <span>
                                📍فرع المتميز محور 26 يوليو بجوار جامعه مصر
                                <a href="https://maps.app.goo.gl/Pg4AU98iVcGr1RCu5" target="_blank">https://maps.app.goo.gl/Pg4AU98iVcGr1RCu5</a>
                            </span>
                        </div>
                        <div class="item">
                            <img src="assets2/img/icons/loc.png" width="7.5" alt="">
                            <span>
                             📍فرع طريق المطار شيراتون داخل بنزينه وطنيه بجوار نادي وادي دجله
                                <a href="https://g.page/Qwaszx12" target="_blank">https://g.page/Qwaszx12</a>
                            </span>
                        </div>

                        <div class="item">
                            <img src="assets2/img/icons/loc.png" width="7.5" alt="">
                            <span>
                        📍مدينة نصر أول عباس العقاد داخل محطه وقود مصر للبترول بجوار ايتوال
                                <a href="https://g.page/Autostoer123" target="_blank">https://g.page/Autostoer123</a>
                            </span>
                        </div>

                        <div class="item">
                            <img src="assets2/img/icons/loc.png" width="7.5" alt="">
                            <span>

                       📍مدخل المحلة الكبري أمام حي النخيل ومستشفي الحميات بجوار تكيف الهداية وستي كافية في الشعبية        

                                <a href="https://g.page/Qwaszx123" target="_blank">https://g.page/Qwaszx123</a>
                            </span>
                        </div>


                    </div>



                    <div class="tab-pane fade show active" id="v-pills-cairo" role="tabpanel" aria-labelledby="v-pills-cairo-tab" tabindex="0">
                        <div class="item">
                            <img src="assets2/img/icons/loc.png" width="7.5" alt="">
                            <span>
                                شيراتون فرع طريق المطار شيراتون داخل بنزينه وطنيه بجوار نادي وادي دجله
                                <a href="https://g.page/Qwaszx12" target="_blank">https://g.page/Qwaszx12</a>
                            </span>
                        </div>
                        <div class="item">
                            <img src="assets2/img/icons/loc.png" width="7.5" alt="">
                            <span>
                                مدينة نصر أول عباس العقاد داخل محطه وقود مصر للبترول بجوار ايتوال
                                <a href="https://g.page/Autostoer123" target="_blank">https://g.page/Autostoer123</a>
                            </span>
                        </div>
                    </div>



                    <div class="tab-pane fade" id="v-pills-giza" role="tabpanel" aria-labelledby="v-pills-giza-tab" tabindex="0">
                        <div class="item">
                            <img src="assets2/img/icons/loc.png" width="7.5" alt="">
                            <span>


           العبد لرفاهية السيارات :  📍 59 ش أبوالهول السياحي المنصوريه مشعل هرم

                                <a href=" https://maps.app.goo.gl/ySuxr" target="_blank"> https://maps.app.goo.gl/ySuxr</a>
                            </span>
                        </div>

                    </div>



                    <div class="tab-pane fade" id="v-pills-gharb" role="tabpanel" aria-labelledby="v-pills-gharb-tab" tabindex="0">
                        <div class="item">
                            <img src="assets2/img/icons/loc.png" width="7.5" alt="">
                            <span>

📍مدخل المحلة الكبري أمام حي النخيل ومستشفي الحميات بجوار تكيف الهداية وستي كافية في الشعبية

                                <a href="https://g.page/Qwaszx123" target="_blank">https://g.page/Qwaszx123</a>
                            </span>
                        </div>
                        <div class="item">
                            <img src="assets2/img/icons/loc.png" width="7.5" alt="">
                            <span>

📍 طنطا : شارع الاستاد امام جيفال محل عبده الأمير لكماليات السيارات 

                                <a href="https://goo.gl/maps/fFKApJwewNJuUbuu5" target="_blank">https://goo.gl/maps/fFKApJwewNJuUbuu5</a>
                            </span>
                        </div>

                        <div class="item">
                            <img src="assets2/img/icons/loc.png" width="7.5" alt="">
                            <span>


                          بلطيم .📍  كنزى لرفاهية السيارات

                                <a href="https://maps.app.goo.gl/i2t1LzbWXzBN5YXZ8 " target="_blank">https://maps.app.goo.gl/i2t1LzbWXzBN5YXZ8 </a>
                            </span>
                        </div>


                    </div>



                    <div class="tab-pane fade" id="v-pills-domiat" role="tabpanel" aria-labelledby="v-pills-domiat-tab" tabindex="0">
                        <div class="item">
                            <img src="assets2/img/icons/loc.png" width="7.5" alt="">
                            <span>

📍 دمياط : دمياط الجديده اخر شارع ١٠٠  المنطقة المركزيه خلف قصر الثقافه (محل ع السريع) 
                                <a href="https://maps.app.goo.gl/fkUYRBkgEaLoqDPL7" target="_blank">https://maps.app.goo.gl/fkUYRBkgEaLoqDPL7</a>
                            </span>
                        </div>

                    </div>



                    <div class="tab-pane fade" id="v-pills-alex" role="tabpanel" aria-labelledby="v-pills-alex-tab" tabindex="0">
                        <div class="item">
                            <img src="assets2/img/icons/loc.png" width="7.5" alt="">
                            <span>

📍 الاسكندريه : عزبه سعد  (محل كماليات عيسي )


                                <a href="https://g.co/kgs/R1Cq5Q" target="_blank">https://g.co/kgs/R1Cq5Q</a>
                            </span>
                        </div>
                        <div class="item">
                            <img src="assets2/img/icons/loc.png" width="7.5" alt="">
                            <span>

السعيد لكماليات وقطع غيار السيارات شارع اسكندرية مطروح، أبو يوسف، قسم الدخيلة، الإسكندرية

                                <a href="https://maps.app.goo.gl/hTZW5Br5PaFj4C4R9" target="_blank">https://maps.app.goo.gl/hTZW5Br5PaFj4C4R9</a>
                            </span>
                        </div>
                    </div>




                    <div class="tab-pane fade" id="v-pills-fayoum" role="tabpanel" aria-labelledby="v-pills-fayoum-tab" tabindex="0">
                        <div class="item">
                            <img src="assets2/img/icons/loc.png" width="7.5" alt="">
                            <span>

📍الفيوم : الفيوم شارع مصطفي كامل امام مطاعم الالف جرام (محل حتيته) لرفاهية السيارات

                                <a href="https://goo.gl/maps/v5ZtH7wcQHpsmmPg7" target="_blank">https://goo.gl/maps/v5ZtH7wcQHpsmmPg7</a>
                            </span>
                        </div>

                    </div>



                    <div class="tab-pane fade" id="v-pills-ghard" role="tabpanel" aria-labelledby="v-pills-ghard-tab" tabindex="0">
                        <div class="item">
                            <img src="assets2/img/icons/loc.png" width="7.5" alt="">
                            <span>

الغردقة شارع الحجاز بعد مديرية التربية والتعليم الجديدة بجوار بنزينة الكرنك قبل موقف قنا اسم المحل (كار هاوس)  وكيل شمع الدمياطي ونانو 

                                <a href="https://maps.app.goo.gl/pQCvKziVoXXnSpHJ9" target="_blank">https://maps.app.goo.gl/pQCvKziVoXXnSpHJ9</a>
                            </span>
                        </div>

                    </div>



                    <div class="tab-pane fade" id="v-pills-suiz" role="tabpanel" aria-labelledby="v-pills-suiz-tab" tabindex="0">
                        <div class="item">
                            <img src="assets2/img/icons/loc.png" width="7.5" alt="">
                            <span>

📍 العنوان السويس الملاحه شارع محمد حافظ محلات الشيخ لكماليات وفرش السيارات


                                <a href="https://goo.gl/maps/8HC3s7vTVMCj2hb19" target="_blank">https://goo.gl/maps/8HC3s7vTVMCj2hb19</a>
                            </span>
                        </div>

                    </div>



                    <div class="tab-pane fade" id="v-pills-sharq" role="tabpanel" aria-labelledby="v-pills-sharq-tab" tabindex="0">
                        <div class="item">
                            <img src="assets2/img/icons/loc.png" width="7.5" alt="">
                            <span>

📍 _ الجميل لكماليات السيارات، طريق بلبيس - الزقازيق 

                                <a href="https://goo.gl/maps/5Rejx4RrE1awrfQS6" target="_blank">https://goo.gl/maps/5Rejx4RrE1awrfQS6</a>
                            </span>
                        </div>
                        
                        
<div class="item">
    <img src="assets2/img/icons/loc.png" width="7.5" alt="">
    <span>

📍 الشرقيه  :  العاشر من رمضان  المجاوره العاشره _ شارع الامام مالك بجوار مستشفي بن سينا   ( محل الدبلوماسي )

        <a href="https://goo.gl/maps/UCCswaEAWW4qRpnZ6" target="_blank">https://goo.gl/maps/WGuBqvbcc25WRpzA7</a>
    </span>
</div>                         
                        
                        

                    </div>




                    <div class="tab-pane fade" id="v-pills-dakh" role="tabpanel" aria-labelledby="v-pills-dakh-tab" tabindex="0">
                        <div class="item">
                            <img src="assets2/img/icons/loc.png" width="7.5" alt="">
                            <span>

📍 المنصوره :  أول المشاية السفلية بجوار فيلا غيث - أمام القاعة الزرقاء بنادي الجزيره (محلات ابو الفتوح)

                                <a href="https://goo.gl/maps/WGuBqvbcc25WRpzA7" target="_blank">https://goo.gl/maps/WGuBqvbcc25WRpzA7</a>
                            </span>
                        </div>
                        <div class="item">
                            <img src="assets2/img/icons/loc.png" width="7.5" alt="">
                            <span>

📍الدقهليه : دكرنس (محل محمد عيد )  لكماليات السيارات يوجد فرعين و (اتوبروتكشن)

                                <a href="https://maps.app.goo.gl/rteVujcnTwTERR4JA" target="_blank">https://maps.app.goo.gl/rteVujcnTwTERR4JA</a>
                            </span>
                        </div>
                        
               
                        
                        
                    </div>
                </div>
            </div>
        </section>

        <footer class="footer">
            <div class="container">
                <div class="footer-content-top">
                    <div class="footer-list">
                        <h4> رابط الصفحه </h4>
                        <ul class="list-unstyled list-social">
                            <li>
                                <a href="https://www.facebook.com/AutoStoreOfficial">
                                    <i class="fa-brands fa-square-facebook"></i>
                                    <span> Auto store </span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/autostoreegypt/?locale=us&hl=am-et">
                                    <i class="fa-brands fa-instagram"></i>
                                    <span> autostoreegypt </span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.tiktok.com/@autostore.official">
                                    <i class="fa-brands fa-tiktok"></i>
                                    <span> @autostore.official </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-list">
                        <h4> تواصل معنا </h4>
                        <ul class="list-unstyled list-social">
                            <li>
                                <a href="tel:+201011103388">
                                    <img src="assets2/img/icons/mobile.png" width="13" alt="">
                                    <span> +201011103388 </span>
                                </a>
                            </li>
                            <li>
                                <a href="https://api.whatsapp.com/send?phone=201011103388">
                                    <i class="fa-brands fa-whatsapp"></i>
                                    <span> +0201011103388 </span>
                                </a>
                            </li>
                            <li>
                                <a href="mailto:sales@autostore-eg.com">
                                    <img src="assets2/img/icons/mail.png" width="13" alt="">
                                    <span> sales@autostore-eg.com </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="footer-content-bottom text-start">
                    <div class="mark-item">
                        <img src="assets2/img/icons/telemark.png" width="25" alt="">
                        <div class="list-mark list-unstyled">
                            <li>
                                <a href="https://www.instagram.com/autostoreeg/?locale=us&hl=am-et" target="_blank">
                                    <span class="icon">
                                        <i class="fa-brands fa-instagram"></i>
                                    </span>
                                    <span class="text">Instagram</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/AutoStoreOfficial" target="_blank">
                                    <span class="icon">
                                        <i class="fa-brands fa-square-facebook"></i>
                                    </span>
                                    <span class="text">Face book</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://api.whatsapp.com/send?phone=201011103388" target="_blank">
                                    <span class="icon">
                                        <i class="fa-brands fa-whatsapp"></i>
                                    </span>
                                    <span class="text">Whatsapp</span>
                                </a>
                            </li>
                            <li>
                                <a href="tel:+201011103388" target="_blank">
                                    <span class="icon">
                                        <img src="assets2/img/icons/phone.png" width="14" alt="">
                                    </span>
                                    <span class="text">Call us</span>
                                </a>
                            </li>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <script src="assets2/js/jquery-3.3.1.min.js"></script>
        <script src="assets2/js/popper.min.js"></script>
        <script src="assets2/js/bootstrap.min.js"></script>
        <script src="assets2/js/magnific-popup.min.js"></script>
        <script src="assets2/js/owl.carousel.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
<!--         <script src="assets2/js/plugins.js"></script>
 -->        <script>
                //nice select
    $(document).ready(function() {
        $("#select").select2();
        // $('select').selectize({
        //  sortField: 'text'
        // });
      });











$(document).ready(function () {
    
    /*================== Slider Carsouel ===================*/
    // var sliderCarousel = new Swiper(".swiper-vidoes",{
    //     autoplay: true,
    //     slidesPerView: 2,
    //     spaceBetween: 15,
    //     loop: true,
    //     breakpoints: {
    //       575: {
    //         slidesPerView: 2,
    //       },
    //       991: {
    //         slidesPerView: 2,
    //       },
    //     },
    //     navigation: {
    //         nextEl: ".swiper-btn-next",
    //         prevEl: ".swiper-btn-prev",
    //     },
    // })
    $('.swiper-vidoes').owlCarousel({
        loop:true,
        margin: 12,
        items: 2,
        nav:true,
        dots: false,
        rtl: true,
        responsive:{
            0:{
                items:2
            },
            600:{
                items:2
            },
            1000:{
                items:2
            }
        },
        navText: [
            '<img src="assets2/img/icons/next.png" class="img-fluid" width="17" alt="">',
            '<img src="assets2/img/icons/prev.png" class="img-fluid" width="17" alt="">'
        ],
  })
    /*================== Slider Carsouel ===================*/
  
    /*================== Image Popup ===================*/
    if ($('.image-link').length) {
        $('.image-link').magnificPopup({ 
        type: 'image',
        mainClass: 'mfp-with-zoom', // this class is for CSS animation below

        zoom: {
            enabled: true, // By default it's false, so don't forget to enable it

            duration: 300, // duration of the effect, in milliseconds
            easing: 'ease-in-out', // CSS transition easing function 

            // The "opener" function should return the element from which popup will be zoomed in
            // and to which popup will be scaled down
            // By defailt it looks for an image tag:
            opener: function(openerElement) {
            // openerElement is the element on which popup was initialized, in this case its <a> tag
            // you don't need to add "opener" option if this code matches your needs, it's defailt one.
            return openerElement.is('img') ? openerElement : openerElement.find('img');
            }
            
        },
        image: {
            // options for image content type
            titleSrc: 'title'
        },
        gallery: {
            // options for gallery
            enabled: true
        },
        

        });// JavaScript Document
    }
    /*================== Image Popup ===================*/

    /*================== Video Popup ===================*/
    $('.popup-youtube, .popup-vimeo, .popup-googlemap').magnificPopup({
        disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: "auto",
        closeBtnInside: false
    });
    /*================== Video Popup ===================*/


    var imgHeight = $('.branches .body-branches .end-side img').height()
    console.log(imgHeight);
    
    $('.branches .body-branches .start-side-body').css('maxHeight', imgHeight - 36)

})

function toggleDropdown(selectElement) {
    const container = selectElement.closest('.custom-select-container'); // Find the container
    const options = container.querySelector('.custom-options'); // Find the dropdown options
    const formCustom = selectElement.closest('.form-custom'); // Find the parent .form-custom
  
    // Close other dropdowns and reset z-index
    document.querySelectorAll('.custom-select-container').forEach((el) => {
      el.querySelector('.custom-options').style.display = 'none';
      const parentForm = el.closest('.form-custom');
      if (parentForm) {
        parentForm.style.zIndex = ''; // Reset z-index
      }
    });
  
    // Toggle the clicked dropdown
    if (options.style.display === 'block') {
      options.style.display = 'none';
      if (formCustom) {
        formCustom.style.zIndex = ''; // Reset z-index
      }
    } else {
      options.style.display = 'block';
      if (formCustom) {
        formCustom.style.zIndex = '9999'; // Set z-index to 9999
      }
    }
  }
  
  function selectOption(optionElement) {
    const container = optionElement.closest('.custom-select-container'); // Find the container
    const selectedOption = container.querySelector('.selected-option'); // Update the selected option
    const formCustom = optionElement.closest('.form-custom'); // Find the parent .form-custom
  
    // Update the selected text
    const text = optionElement.querySelector('span').textContent;
    const graySpan = selectedOption.querySelector('.selected-option-gray');
    if (graySpan) graySpan.textContent = text;
  
    // Close the dropdown and reset z-index
    const options = container.querySelector('.custom-options');
    options.style.display = 'none';
    if (formCustom) {
      formCustom.style.zIndex = ''; // Reset z-index
    }
  }
  
  // Close all dropdowns when clicking outside and reset z-index
  document.addEventListener('click', (event) => {
    const isDropdownClick = event.target.closest('.custom-select-container');
    if (!isDropdownClick) {
      document.querySelectorAll('.custom-select-container').forEach((el) => {
        el.querySelector('.custom-options').style.display = 'none';
        const parentForm = el.closest('.form-custom');
        if (parentForm) {
          parentForm.style.zIndex = ''; // Reset z-index
        }
      });
    }
  });
  


  document.getElementById('photo').addEventListener('change', function () {
    const labelSpan = this.closest('.input-group').querySelector('.input-group-text span'); // Find the span inside the label
    const fileName = this.files[0]?.name || 'no file chosen'; // Get the file name or default text
    labelSpan.textContent = fileName; // Update the span's text
  });

  

  // Select all plus and minus buttons
    document.querySelectorAll('.plusBtn').forEach(button => {
    button.addEventListener('click', function () {
      const input = this.previousElementSibling; // Get the input field
      valid = input.id;
       var voutcher =document.getElementById("voutcher").value;


                var my_arr = valid.split("_");
                var prodid =  my_arr[1];
                var proprc =  'price_'+my_arr[1];
                var protot =  'tot_'+my_arr[1];
                var vouttot =  'vout_'+my_arr[1];
                var commtot =  'comm_'+my_arr[1];
                var prodid1 =  prodid.split("|");
                var prodid1 =  prodid1[1];


if(prodid1  == 254){alert('الحد الادنى لطلب هذا المنتج 5 قطع'); coun = 5;}else{coun = 1;}


      input.value = parseInt(input.value) + Number(coun); // Increment the value


                unitprice  = document.getElementById(proprc).value; 
                totalprice = Number(unitprice)*Number(input.value);
                document.getElementById(protot).value = totalprice; 

                calculate();
    });
    
    
    
  });
  
  document.querySelectorAll('.minusBtn').forEach(button => {
    button.addEventListener('click', function () {
      const input = this.nextElementSibling; // Get the input field
      const currentValue = parseInt(input.value);

      valid = input.id;

                var my_arr = valid.split("_");
                var prodid =  my_arr[1];
                var proprc =  'price_'+my_arr[1];
                var protot =  'tot_'+my_arr[1];
                var vouttot =  'vout_'+my_arr[1];
                var commtot =  'comm_'+my_arr[1];
                var prodid1 =  prodid.split("|");
                var prodid1 =  prodid1[1];


if(prodid1  == 254){alert('الحد الادنى لطلب هذا المنتج 5 قطع'); coun = 5;}else{coun = 1;}

if (currentValue > 0) {
      input.value = parseInt(input.value) - Number(coun); // Increment the value





      }


    unitprice  = document.getElementById(proprc).value; 
    totalprice = Number(unitprice)*Number(input.value);
    document.getElementById(protot).value = totalprice; 

    calculate();

    });
  });
  

  document.querySelectorAll('.mark-item').forEach(item => {
    item.addEventListener('click', function () {
        // Toggle active class for the current .list-mark
        const currentListMark = this.querySelector('.list-mark');
        
        // Check if the clicked .list-mark is already active
        if (currentListMark.classList.contains('active')) {
            currentListMark.classList.remove('active');
        } else {
            // Remove 'active' class from all .list-mark elements
            document.querySelectorAll('.list-mark').forEach(mark => mark.classList.remove('active'));

            // Add 'active' class to the clicked one
            currentListMark.classList.add('active');
        }
    });
});




    function calculate(){


    var voutcher =document.getElementById("voutcher").value;

    var arr = document.getElementsByName('qty');
    var tot=0;
    for(var i=0;i<arr.length;i++){
        if(parseFloat(arr[i].value))
            tot += parseFloat(arr[i].value);
    }
    document.getElementById('totprice').value = tot;
    document.getElementById('totspan1').innerText = Number(tot)+ Number(100);
    document.getElementById('totspan').innerText = Number(tot)+ Number(100);
    tot.toFixed(2);



    // var arr = document.getElementsByName('vout');
    // var tot=0;
    // for(var i=0;i<arr.length;i++){
    //     if(parseFloat(arr[i].value))
    //         tot += parseFloat(arr[i].value);
    // }
    // document.getElementById('voutcheram').value = tot;
    // tot.toFixed(2);


   if(voutcher != ""){

        document.getElementById('voutcheram').value = 0;

        document.querySelectorAll('.priceinp').forEach(input  => {
        
        input.value = parseInt(input.value); // Increment the value
              
        if(input.value > 0){
              
            var my_arr = input.id.split("_");
            var prodid =  my_arr[1];     
            var prodid =  prodid.split("|");     
            var prodid =  prodid[1];     
              
      $.ajax({
        url: 'productvalue.php',
        data: { 

          Product_Name: prodid,
          voutcherval : voutcher


         },
        success: function(data){    

                var my_arr = data.split("|");
                console.log( my_arr[0] + "" + my_arr[1] + ""+ my_arr[2] + "");

                    disct1  = my_arr[1];
                    commis1 = my_arr[2];

                  lastvout = document.getElementById('voutcheram').value;


                document.getElementById('voutcheram').value = Number(disct1) + Number(lastvout);


              }

                });


        
        }
        });

                }


        }


      function qustfun(){

    unitprice  = document.getElementById('select').value; 


document.getElementById('qstcon').style.display = 'block';
  if(unitprice == 'qustt1'){document.getElementById('qst1').style.display = 'block'; }
  if(unitprice == 'qustt2'){document.getElementById('qst2').style.display = 'block'; }
  if(unitprice == 'qustt3'){document.getElementById('qst3').style.display = 'block'; }
  if(unitprice == 'qustt4'){document.getElementById('qst4').style.display = 'block'; }
  if(unitprice == 'qustt5'){document.getElementById('qst5').style.display = 'block'; }
  if(unitprice == 'qustt6'){document.getElementById('qst6').style.display = 'block'; }
  if(unitprice == 'qustt7'){document.getElementById('qst7').style.display = 'block'; }
  if(unitprice == 'qustt8'){document.getElementById('qst8').style.display = 'block'; }

        }



        </script>

    </body>
</html>