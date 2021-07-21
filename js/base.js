$(document).ready(function () {

  /* Comma to list */

  

var el = $('.facts-block-wrapper .desc');
// run through each element of the returned list
$(el).each(function(key, val) {
    var values = $(val).html().split(',');
    $(val).html('<ul class="facts-block-desc">' + $.map(values, function(v) { 
      return '<li>' + v + '</li>';
    }).join('') + '</ul>');
});



    $('.carousel').carousel({
        interval: 5000
      })
      

    var owl = $('.top-companies-carousel');
      owl.owlCarousel({
        loop: true,
        nav:true,
        navText : ["<i class='fas fa-caret-left'></i>","<i class='fas fa-caret-right'></i>"],
        dots:false,
        responsive: {
          0: {
            items: 2
          },
          600: {
            items: 3
          },
          1000: {
            items: 7
          }
        }
      })

    $('.banner-carousel').owlCarousel({
      items:1,
      lazyLoad:true,
      loop:true,
      autoplay:true,
      autoplayTimeout:3000,
    })

    $('.new-jobs-carousel').owlCarousel({
      items:1,
        loop: true,
        nav:false,
        navText : ["<i class='fas fa-caret-left'></i>","<i class='fas fa-caret-right'></i>"],
        dots:true,
    })
    $('.new-jobs-carousel.type-1').owlCarousel({
      items:1,
        loop: true,
        nav:true,
        navText : ["<i class='fas fa-caret-left'></i>","<i class='fas fa-caret-right'></i>"],
        dots:false,
    })

    $('.testimonials-carousel').owlCarousel({
      margin: 16,
      loop: true,
      nav:true,
      navText : ["<i class='fas fa-caret-left'></i>","<i class='fas fa-caret-right'></i>"],
      dots:false,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 2
        },
        1000: {
          items: 3
        }
      }
    })




    $('.select-skills').select2({
      data: [],
      tags: true,
      maximumSelectionLength: 10,
      tokenSeparators: [',', ' '],
      placeholder: "Skills/Keywords",
      //minimumInputLength: 1,
      //ajax: {
     //   url: "you url to data",
     //   dataType: 'json',
      //  quietMillis: 250,
      //  data: function (term, page) {
      //     return {
      //         q: term, // search term
      //    };
     //  },
     //  results: function (data, page) { 
     //  return { results: data.items };
    //   },
    //   cache: true
     // }
  });

  


  $('.enter-skills').select2({
      data: ["HTML", "CSS", "Accountant", "Developer", "PHP"],
      tags: true,
      maximumSelectionLength: 10,
      tokenSeparators: [',', ' '],
      placeholder: "Skills/Keywords",
  });
  $('.select-location').select2({
    data: [],
    tags: true,
    maximumSelectionLength: 10,
    tokenSeparators: [',', ' '],
    placeholder: "Languages",
  })
  $('.select-jobs-type').select2({
    data: ["HTML", "CSS", "Accountant", "Developer", "PHP"],
    tags: true,
    maximumSelectionLength: 10,
    tokenSeparators: [',', ' '],
    placeholder: "Job Type",
  })
  $('.select-jobs-id').select2({
    data: ["#2315", "#12315", "#715", "#2515", "#2313"],
    tags: true,
    maximumSelectionLength: 10,
    tokenSeparators: [',', ' '],
    placeholder: "Job ID",
  })
  $('.select-industries').select2({
    data: ["HTML", "CSS", "Accountant", "Developer", "PHP"],
    tags: true,
    maximumSelectionLength: 10,
    tokenSeparators: [',', ' '],
    placeholder: "Industries",
  })
  $('.select-companies').select2({
    data: ["HTML", "CSS", "Accountant", "Developer", "PHP"],
    tags: true,
    maximumSelectionLength: 10,
    tokenSeparators: [',', ' '],
    placeholder: "Companies",
  })
  $('.select-experience').select2({
    data: ["1", "2", "3", "4","5+"],
    placeholder: "Years of experience",
  })




  /* Custom Select */
  $('.custom-select').each(function(){
      var $this = $(this), numberOfOptions = $(this).children('option').length;
    
      $this.addClass('select-hidden'); 
      $this.wrap('<div class="select"></div>');
      $this.after('<div class="select-styled"></div>');

      var $styledSelect = $this.next('div.select-styled');
      $styledSelect.text($this.children('option').eq(0).text());
    
      var $list = $('<ul />', {
          'class': 'select-options'
      }).insertAfter($styledSelect);
    
      for (var i = 0; i < numberOfOptions; i++) {
          $('<li />', {
              text: $this.children('option').eq(i).text(),
              rel: $this.children('option').eq(i).val()
          }).appendTo($list);
      }
    
      var $listItems = $list.children('li');
    
      $styledSelect.click(function(e) {
          e.stopPropagation();
          $('div.select-styled.active').not(this).each(function(){
              $(this).removeClass('active').next('ul.select-options').hide();
          });
          $(this).toggleClass('active').next('ul.select-options').toggle();
      });
    
      $listItems.click(function(e) {
          e.stopPropagation();
          $styledSelect.text($(this).text()).removeClass('active');
          $this.val($(this).attr('rel'));
          $list.hide();
          //console.log($this.val());
      });
    
      $(document).click(function() {
          $styledSelect.removeClass('active');
          $list.hide();
      });  

  });

// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).closest(".custom-file").find(".file-name").html(fileName);
});

  /* Collapse */
  function toggleIcon(e) {
      $(e.target)
          .prev('.panel-heading')
          .find(".fa")
          .toggleClass('fa-plus fa-minus');
      $(e.target).next('.panel-heading').removeClass('show')
  }
  $('.panel-group').on('hidden.bs.collapse', toggleIcon);
  $('.panel-group').on('shown.bs.collapse', toggleIcon);


  /* Login - Register Tab */
  $('#login-form-link').click(function(e) {
		$("#login-form").delay(100).fadeIn(100);
 		$("#register-form").fadeOut(100);
		$('#register-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
	$('#register-form-link').click(function(e) {
		$("#register-form").delay(100).fadeIn(100);
 		$("#login-form").fadeOut(100);
		$('#login-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
  });
  
    if($('#ChildVerticalTab_1').length) {
        // Child Tab
        $('#ChildVerticalTab_1').easyResponsiveTabs({
          type: 'vertical',
          width: 'auto',
          fit: true,
          tabidentify: 'ver_1', // The tab groups identifier
          activetab_bg: '#fff', // background color for active tabs in this group
          inactive_bg: '#F5F5F5', // background color for inactive tabs in this group
          active_border_color: '#c1c1c1', // border color for active tabs heads in this group
          active_content_border_color: '#5AB1D0' // border color for active tabs contect in this group so that it matches the tab head border
      });
    }


    // var pathname = window.location.pathname.split( '/' );
    // if(pathname[2] !=='' && pathname[2] !== 'index') {
    //     $('header .navbar').removeClass('navbar-dark').addClass('navbar-light')
    // }
  
});
  
$(".dropdown-item").click(function(e){
  $(this).closest(".dropdown").find(".dropdown-toggle").html($(this).text());
  var linkVal = $(this).data("value");
  var cID = $(this).data("cid");
  var jID = $(this).data("jid");
  var classN = $(this).closest('.dropdown').hasClass('status');
  data = {linkVal:linkVal,cID:cID,jID:jID, class:classN?'status':'actions'};
  statusChange(data);
})

function statusChange(data){
    $.ajax({
      url:'ajax-appliedjob-changestatus',
      data:data,
      type : 'POST' ,
      cache:false,
      success:function(data){
      
    } 
  });
}


/* Custom Dropdown */
$('.c-dropdown').on('keyup', function(e){
  e.preventDefault();
  console.log(this.value.length)
  if(this.value.length > 2){
    $(this).closest('.d-toggle').find('.custom-dropdown').addClass('fade in')
  } else {
    $(this).closest('.d-toggle').find('.custom-dropdown').removeClass('fade in')
  }
})
$(document).on('click', function(e){
  var node = $(e.target);
 
  console.log(node)
  if(!node.hasClass('search-field')) {
    $('.search-field').next().removeClass('fade in')
  }else {
    var len = e.target.value.length;
    if(len > 2){
      $('.search-field').next().addClass('fade in')
    }
  }
  if(!node.hasClass('location-field')) {
    $('.location-field').next().next().removeClass('fade in')
  } else {
      $('.location-field').next().next().addClass('fade in')
  }
})






/* Range Slider */
  // Basic Slider
  var slider = new Slider("#basic", {
    tooltip: 'always'
  });
  var slider = new Slider("#basic2", {
    tooltip: 'always'
  });
  var slider = new Slider("#basic3", {
    tooltip: 'always'
  });
  var slider = new Slider("#basic4", {
    tooltip: 'always'
  });
  var slider = new Slider("#basic5", {
    tooltip: 'always'
  });


  /* File Input */

