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
  $(".swiper-vidoes").owlCarousel({
    loop: true,
    margin: 20,
    nav: true,
    dots: true,
    responsive: {
      0: {
        items: 1, // شاشات صغيرة: فيديو واحد
      },
      768: {
        items: 3, // شاشات متوسطة: 2
      },
      992: {
        items: 3, // شاشات أكبر: 3 فيديوهات
      },
    },
  });


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
      input.value = parseInt(input.value) + 1; // Increment the value


      valid = parseInt(input.id);
alert(valid);

                var my_arr = valid.split("_");
                var prodid =  my_arr[1];
                var proprc =  'price_'+my_arr[1];
                var protot =  'tot_'+my_arr[1];
  
    unitprice =    document.getElementById('proprc').value; 

    totalprice = Number(unitprice)*Number(input.value);
    document.getElementById(protot).value = totalprice; 

alert(prodid);

    });
  });
  
  document.querySelectorAll('.minusBtn').forEach(button => {
    button.addEventListener('click', function () {
      const input = this.nextElementSibling; // Get the input field
      const currentValue = parseInt(input.value);
      if (currentValue > 0) {
        input.value = currentValue - 1; // Decrement the value, but not below 0
      }


valid = parseInt(input.id);



alert(valid);

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

