// Forms Demo
// ----------------------------------- 


(function(window, document, $, undefined){

  $(function(){

    // BOOTSTRAP SLIDER CTRL
    // ----------------------------------- 

    $('[data-ui-slider]').slider();

    // CHOSEN
    // ----------------------------------- 

    $('.chosen-select').chosen();

    // MASKED
    // ----------------------------------- 

   // $('[data-masked]').inputmask();

    // FILESTYLE
    // ----------------------------------- 

    //$('.filestyle').filestyle();

    // WYSIWYG
    // ----------------------------------- 

    //$('.wysiwyg').wysiwyg();


    // DATETIMEPICKER
    // ----------------------------------- 
    $('#datetimepickersearch_1').datetimepicker({
    	format: 'DD-MM-YYYY'
    });
    
    $('#datetimepickersearch_2').datetimepicker({
    	format: 'DD-MM-YYYY'
    });
    
    $('#datetimepicker_1').datetimepicker({
    	format: 'DD-MM-YYYY LT',
    	icons: {
          time: 'fa fa-clock-o',
          date: 'fa fa-calendar',
          up: 'fa fa-chevron-up',
          down: 'fa fa-chevron-down',
          previous: 'fa fa-chevron-left',
          next: 'fa fa-chevron-right',
          today: 'fa fa-crosshairs',
          clear: 'fa fa-trash'
        }
    });
    
    $('#datetimepicker_2').datetimepicker({
    	format: 'DD-MM-YYYY LT',
    	icons: {
            time: 'fa fa-clock-o',
            date: 'fa fa-calendar',
            up: 'fa fa-chevron-up',
            down: 'fa fa-chevron-down',
            previous: 'fa fa-chevron-left',
            next: 'fa fa-chevron-right',
            today: 'fa fa-crosshairs',
            clear: 'fa fa-trash'
          }
      });
    
    // only time
    $('#datetimepicker2').datetimepicker({
        format: 'LT'
    });
    
	  //init timepicker for new line
	$('input.start').datetimepicker({
    	format: 'LT'
    });
	
    $('input.end').datetimepicker({
    	format: 'LT'
    });

  });

})(window, document, window.jQuery);