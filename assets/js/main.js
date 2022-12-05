$(document).ready(function () {
    if (!window.matchMedia)
        return;
    let current = $('head > link[rel="icon"][media]');
    $.each(current, function (i, icon) {
        let match = window.matchMedia(icon.media);
        function swap() {
            if (match.matches) {
                current.remove();
                current = $(icon).appendTo('head');
            }
        }
        match.addListener(swap);
        swap();
    });
});