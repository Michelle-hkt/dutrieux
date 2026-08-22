document.addEventListener('DOMContentLoaded', function () {

    const cookieBanner = document.getElementById('cookie-banner');
    const acceptButton = document.getElementById('cookie-accept');
    const rejectButton = document.getElementById('cookie-reject');

    const cookieConsentKey = 'cabinet_dutrieux_cookie_consent';

    function closeCookieBanner() {
        cookieBanner.classList.add('is-closing');

        setTimeout(function () {
            cookieBanner.remove();
        }, 350);
    }


    if (localStorage.getItem(cookieConsentKey) === 'accepted') {
        cookieBanner.remove();
        return;
    }


    acceptButton.addEventListener('click', function () {

        localStorage.setItem(cookieConsentKey, 'accepted');

        closeCookieBanner();
    });

 
    rejectButton.addEventListener('click', function () {

        closeCookieBanner();
    });

});