/**
 * @file
 * JS handler for reading progres bar.
 */

(function ($) {
  'use strict';
  Drupal.behaviors.reading_progress_bar = {
    attach: function (context, settings) {
      var winHeight = $(window).height();
      var docHeight = $(document).height();
      var progressBar = $('progress');
      var max;
      var value;

      /* Set the max scrollable area */
      max = docHeight - winHeight;
      progressBar.attr('max', max);
      $(document).on('scroll', function () {
        value = $(window).scrollTop();
        progressBar.attr('value', value);
      });
    }
  };
})(jQuery);
