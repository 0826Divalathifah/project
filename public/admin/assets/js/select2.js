(function($) {
  'use strict';
//membuat dropdown yang mendukung pilihan satu item saja (single selection).
  if ($(".js-example-basic-single").length) {
    $(".js-example-basic-single").select2();
  }
//membuat dropdown yang mendukung pilihan ganda (multiple selection).
  if ($(".js-example-basic-multiple").length) {
    $(".js-example-basic-multiple").select2();
  }
})(jQuery);