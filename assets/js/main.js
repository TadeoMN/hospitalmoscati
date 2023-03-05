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

function fullName() {
    const lastName = document.getElementById('lastName').value;
    const surName = document.getElementById('surName').value;
    const firstName = document.getElementById('firstName').value;

    document.getElementById('nameComplete').value = `${lastName} ${surName} ${firstName}`.toUpperCase();
}
