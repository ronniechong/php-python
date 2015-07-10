$(function(){

    $('#form').on('submit', function(){
        var form        = $(this),
            num         = $(this).find('#form__input--number').val(),
            output      = $('#output'),
            dtStart     = new Date(),
            postData    = {};

        if (!isNaN(num) && num > 0){
            form
                .addClass('loading')
                .find('input')
                .prop('disabled',true);

            output
                .empty()
                .removeClass();

            postData = {
                'num' : num
            }

            $.ajax({
                type: "POST",
                url: "lib/lib.php",
                data: postData,
                success: function(response) {
                    var dtStop  = new Date(),
                        dtDiff  = (dtStop.getTime() - dtStart.getTime())/1000;

                    form
                        .removeClass()
                        .find('input')
                        .prop('disabled',false);

                    output
                        .html(response)
                        .addClass('show');

                    $('#time').text('Finished in ' + dtDiff + ' seconds');
                }
            });
        }

        return false;
    });
});