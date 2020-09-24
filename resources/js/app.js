require('./bootstrap');


$('.delete').on('click', function (e) {
    var answer = confirm('Do you want to delete?');
    if (!answer) {
        e.preventDefault();
    }
});
