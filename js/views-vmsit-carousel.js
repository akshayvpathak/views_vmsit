(function ($, Drupal, drupalSettings) {
  /**
   * @namespace
   */
  Drupal.behaviors.views_vmsitAccessData = {
    attach: function (context) {
      var id = drupalSettings.slick_var_id;
      //console.log(id);
      var arrow1 = drupalSettings.slick_var_arrow;
      //console.log(arrow1);
      var speed1 = drupalSettings.slick_var_speed;
      //console.log(speed1);
      var dots1 = drupalSettings.slick_var_dots;
      //console.log(dots1);
      var infinite1 = drupalSettings.slick_var_infinite;
      //console.log(infinite1);
      var variablewidth1 = drupalSettings.slick_var_variablewidth;
      //console.log(variablewidth1);
      var options = {
        infinite: infinite1,
        slidesToShow: 4,
        slidesToScroll: 1,
        dots: dots1,
        arrows: arrow1,
        autoplay: false,
        autoplayspeed: 1000,
        variableWidth: false,
        speed: speed1,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 4,
              slidesToScroll: 1,
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
      }
      $('#' + id).not('.slick-initialized').slick(options);
    }
  };
})(jQuery, Drupal, drupalSettings);