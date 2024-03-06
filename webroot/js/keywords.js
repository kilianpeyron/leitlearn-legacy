$(document).ready(function () {
    var searchInput = $(".search-keywords");
    var id = window.location.pathname.split('/').pop();

    searchInput.on('input', function () {
        var searchText = $(this).val().toLowerCase();
        $('.keywords').each(function () {
            var keywordText = $(this).find('span').text().toLowerCase();
            if (keywordText.includes(searchText)) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
    });
});

$(document).ready(function () {
    var fileInput = $('#profile-picture');
    var imgPreview = $('#profilePicturePreview');

    fileInput.on('change', function (event) {
        var file = event.target.files[0];
        if (file) {
            var reader = new FileReader();
            reader.onload = function (e) {
                imgPreview.attr('src', e.target.result);
            };
            reader.readAsDataURL(file);
        }
    });
});