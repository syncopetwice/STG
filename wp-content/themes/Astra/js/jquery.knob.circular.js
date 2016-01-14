jQuery(function(){
  var $ = jQuery;
  $("#circular-bars").css({visibility: "visible"});
  // Flag for animation of progressbars
  var isAnimated = false;
  // Animate function
  function animate(elements) {
    var Elements = $(elements);
    Elements.each(function(index, value) { 
      var Element = value;
      var Percent = $(Element).attr("value");
      $(Element).knob({ 
        "value": 0, 
        "min":0,
        "max":100,
        "width": 170,
        "height": 170,
        "skin":"tron",
        "readOnly":true,
        "thickness": 0.18,
        "dynamicDraw": true,
        "displayInput":false,
        "fgColor": "#fff",
        "bgColor": "#8cd4f2"
      });
      $(Element).append(function() {
          var label = $(Element).parent().parent().find('.circular-bar-content label');
          label.text(Percent+'%');
      });
      $({value: 0}).animate({ value: Percent }, {
          duration: 1000,
          easing: 'swing',
          progress: function () {
            $(Element).val(Math.ceil(this.value)).trigger('change');
          }
      });
    });
    isAnimated = true;
 }

  // Check if progressbar wasn't in viewport, then check scroll event, flag, viewport and animate it.
  $(document).scroll(function(){
    if(isAnimated === false) {
      if($("#circular-bars").is(":in-viewport")) {
        animate($(".dial"));
      }
    }
  });
  // Check if progressbar was refreshed in viewport, then just animate it.
  if($("#circular-bars").is(":in-viewport")) {
    animate($(".dial"));
  }
});