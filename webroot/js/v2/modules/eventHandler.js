import {setupScrollMenu} from "../../base/utils.js";

export const initEventHandlers = () => {
    if ($('.ia').length === 0) {
        $('.dynamic-redirect').addClass('no-ia');
    }

    redirectionsEvent();
    snackbarEventHandler();
    leitlearnLoadingEvent();
    tabsEventHandler();
};

const redirectionsEvent = () => {
    const $btnRedirection = $(".redirect");

    $('.page-redirect[data-redirection]').on('click', function () {
        const redirectionURL = $(this).data('redirection');
        window.location.href = redirectionURL;
    });

    $(document).on("click", ".redirect", function () {
        $("html, body").animate({
            scrollTop: 0
        }, "smooth");
    });

    $(document).on("scroll", function () {
        if ($(window).scrollTop() > 50) {
            $btnRedirection.addClass("show");
        } else {
            $btnRedirection.removeClass("show");
        }
    });

    $('.scroll-menu').each(function () {
        setupScrollMenu($(this));
    });
}

const snackbarEventHandler = () => {
    const $snackbar = $("#snackbar");

    setTimeout(function () {
        if ($snackbar.hasClass("show")) {
            $snackbar.removeClass("show");
        }
    }, 2700);
}

const leitlearnLoadingEvent = () => {
    $(document).ready(function () {
        var loaderWrapper = $(".loading-wrapper");
        loaderWrapper.hide();
    });
}

const tabsEventHandler = () => {
    const $tabButtons = $(".switch-tab");
    const $tabs = $(".tab");

    $tabButtons.on("click", function () {
        $tabButtons.removeClass("active");
        $tabs.hide();

        $(this).addClass("active");

        const targetTabId = $(this).data("tab");
        const $targetTab = $("#" + targetTabId);

        if (targetTabId === "detail-tab-flashcards" || targetTabId === "dashboard-flashcards-tab") {
            $targetTab.show();
        } else {
            $targetTab.css("display", "flex");
        }
    });
}