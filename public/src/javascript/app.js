/**
 * Created by Joel on 5/21/2016.
 */
$(document).ready(function () {
    $.ajax({
        url: 'home',
        data: '',
        type: 'GET',
        dataType: 'html',
        async: false,
        success: function (response) {
            $('#itemOrdered').html(response);
            console.log(response);
        }
    });
});
