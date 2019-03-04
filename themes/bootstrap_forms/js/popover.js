/**
 * @file
 * Bootstrap Tooltips.
 */

var Drupal = Drupal || {};

(function ($, Drupal, Bootstrap) {
    "use strict";

    /**
     * Bootstrap Tooltips.
     */
    Drupal.behaviors.bootstrapPopovers = {
        attach: function (context) {
            var elements = $(context).find('[data-toggle="popover"]').toArray();

            for (var i = 0; i < elements.length; i++) {
                var $element = $(elements[i]);
                $element.popover();
            }
        },
        detach: function (context) {
            // Destroy all popover.
            $(context).find('[data-toggle="popover"]').popover('destroy');
        }
    };

})(window.jQuery, window.Drupal, window.Drupal.bootstrap);
