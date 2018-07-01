Foundation.Abide.defaults.patterns['alpha_numeric_unicode'] = /^[\u0600-\u06FF-a-zA-Z0-9- ]*$/;
Foundation.Abide.defaults.patterns['alpha_unicode'] = /^[\u0600-\u06FF-a-zA-Z- ]*$/;
$(document).foundation();

$('[data-loading-start]').click(function() {
    $(this).addClass('hide')
    $('[data-loading-end]').removeClass('hide')
});

$('[show-element-tag]').addClass('show-display-tag')
$('[hide-element-tag]').addClass('hide-display-tag')

