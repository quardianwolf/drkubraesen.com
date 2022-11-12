<?php if ($GLOBALS['settings']['compress'] == 'offline') : ?>


  <!-- <script src="<?= theme('js/jquery-2.1.4.min.js'); ?>"></script>
 -->

		<script src="<?= theme('js/jquery-2.1.4.min.js') ?>" ></script>
		<script src="<?= theme('js/mfn.menu.js') ?>" ></script>
		<script src="<?= theme('js/jquery.plugins.js') ?>" ></script>
		<script src="<?= theme('js/jquery.jplayer.min.js') ?>" ></script>
		<script src="<?= theme('js/animations/animations.js') ?>" ></script>
		<script src="<?= theme('js/translate3d.js') ?>" ></script>
		<script src="<?= theme('js/scripts.js') ?>" ></script>
		<script src="<?= theme('rs-plugin-6.custom/js/revolution.tools.min.js') ?>" ></script>
		<script src="<?= theme('rs-plugin-6.custom/js/rs6.min.js') ?>" ></script>
  
		<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
 		 <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>




<?php else : ?>
  <script src="<?= theme('dist/client_all_scripts.min.js'); ?>" type="text/javascript"></script>
<?php endif; ?>

<script>
      var swiper = new Swiper(".mySwiper", {
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
</script>

<script>
	var revapi1, tpj;

	function revinit_revslider11() {
		jQuery(function() {
			tpj = jQuery;
			revapi1 = tpj("#rev_slider_1_1");
			if(revapi1 == undefined || revapi1.revolution == undefined) {
				revslider_showDoubleJqueryError("rev_slider_1_1");
			} else {
				revapi1.revolution({
					DPR: "dpr",
					sliderLayout: "fullwidth",
					visibilityLevels: "1240,1240,778,778",
					gridwidth: "1240,1240,778,778",
					gridheight: "1080,1080,960,960",
					spinner: "spinner9",
					perspective: 600,
					perspectiveType: "global",
					spinnerclr: "#ab815a",
					editorheight: "1080,768,960,720",
					responsiveLevels: "1240,1240,778,778",
					progressBar: {
						disableProgressBar: true
					},
					navigation: {
						onHoverStop: false
					},
					fallbacks: {
						allowHTML5AutoPlayOnAndroid: true
					},
				});
			}
		});
	}
	var once_revslider11 = false;
	if(document.readyState === "loading") {
		document.addEventListener('readystatechange', function() {
			if((document.readyState === "interactive" || document.readyState === "complete") && !once_revslider11) {
				once_revslider11 = true;
				revinit_revslider11();
			}
		});
	} else {
		once_revslider11 = true;
		revinit_revslider11();
	}
	</script>


<script type="text/javascript">
  jQuery(document).ready(function($) {
    $(document).ready(function() {
      setTimeout(function() {
        $('#form-popup').removeClass('d-none');
      }, 25000);


      $('.mad-navigation li').each(function() {
        var $this = $(this);
        if ($this.find('ul').length > 0) {
          $this.addClass('menu-item-has-children');
        }
      });
    });

    $('.close-btn').click(function() {
      $('#form-popup').addClass('d-none');
    });

    // (function() {
    //   if ("loading" in HTMLImageElement.prototype) {
    //     var lazyEls = document.querySelectorAll("[loading=lazy]");
    //     lazyEls.forEach(function(lazyEl) {
    //       if (lazyEl.tagName == 'IMG') {
    //         /* lazyEl.setAttribute(
    //            "src",
    //            lazyEl.getAttribute("data-src")
    //          );*/
    //       } else {
    //         lazyEl.style.backgroundImage = "url(" + lazyEl.getAttribute("data-src") + ")";
    //       }
    //     });
    //   } else {
    //     var script = document.createElement("script");
    //     script.async = true;
    //     script.src =
    //       "https://cdn.jsdelivr.net/npm/vanilla-lazyload@12.0.0/dist/lazyload.min.js";
    //     window.lazyLoadOptions = {
    //       elements_selector: "[loading=lazy]"
    //       //eventually more options here
    //     };
    //     document.body.appendChild(script);
    //   }
    // })();

    function addNaitonalCode($elem) {
      if ($elem.find('input[name="contact_form_phone"]').val() != '') {
        var data = $elem.find('input[name="contact_form_phone"]').val();
        data = $.trim(data).replace(/ /g, '');
        $elem.find('input[name="contact_form_phone"]').val($elem.find('.selected-flag').attr('title') + data);
      }
    }

    var form = [];

    if ($('form[name="iletisim-formu"]').length > 0) {
      form['iletisim-formu'] = {};

      form['iletisim-formu'].form = $("form[name='iletisim-formu']");
      form['iletisim-formu'].button = form['iletisim-formu'].form.find('button[type="submit"]');
      form['iletisim-formu'].elements = form['iletisim-formu'].form.find('input, select, textarea');

      form['iletisim-formu'].form.validate({
        submitHandler: function(e) {
          e.preventDefault;

          form['iletisim-formu'].button.attr('data-process', 'sending');
          addNaitonalCode(form['iletisim-formu'].form);
          form['iletisim-formu'].allData = form['iletisim-formu'].form.serialize();
          form['iletisim-formu'].elements.css('pointer-events', 'none');

          $.ajax({
            type: "POST",
            url: form['iletisim-formu'].form.attr('action'),
            data: form['iletisim-formu'].allData,
            timeout: 10000,
            cache: false,
            success: function(data) {
              data = jQuery.parseJSON(data);

              document.getElementById('messagebox').innerHTML = data.message;
              $('#messagebox').slideDown('slow');
            },
            error: function(errorThrown) {
              form['iletisim-formu'].button.attr('data-process', 'sending-error')
              form['iletisim-formu'].elements.css('pointer-events', 'none');
              //setTimeout(function(){window.location.reload();},7000);

              //data = jQuery.parseJSON(data);

              /*if( data.status == 'error'){
                form['iletisim-formu'].elements.css('pointer-events','initial');
              }*/
            }

          }); //End of Ajax

        } // End of Submit Handler
      }); // End of validate
    }
  });
</script>
<script async="" src="../js/js.js></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-52CM7KJK0K');
</script>



<script>
	var revapi1, tpj;

	function revinit_revslider11() {
		jQuery(function() {
			tpj = jQuery;
			revapi1 = tpj("#rev_slider_1_1");
			if(revapi1 == undefined || revapi1.revolution == undefined) {
				revslider_showDoubleJqueryError("rev_slider_1_1");
			} else {
				revapi1.revolution({
					DPR: "dpr",
					sliderLayout: "fullwidth",
					visibilityLevels: "1240,1240,778,778",
					gridwidth: "1240,1240,778,778",
					gridheight: "1080,1080,960,960",
					spinner: "spinner9",
					perspective: 600,
					perspectiveType: "global",
					spinnerclr: "#ab815a",
					editorheight: "1080,768,960,720",
					responsiveLevels: "1240,1240,778,778",
					progressBar: {
						disableProgressBar: true
					},
					navigation: {
						onHoverStop: false
					},
					fallbacks: {
						allowHTML5AutoPlayOnAndroid: true
					},
				});
			}
		});
	}
	var once_revslider11 = false;
	if(document.readyState === "loading") {
		document.addEventListener('readystatechange', function() {
			if((document.readyState === "interactive" || document.readyState === "complete") && !once_revslider11) {
				once_revslider11 = true;
				revinit_revslider11();
			}
		});
	} else {
		once_revslider11 = true;
		revinit_revslider11();
	}
	</script>


