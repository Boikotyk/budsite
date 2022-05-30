$( document ).ready(function() {
    $("#btn").click(
        function(){
            sendAjaxForm('result_form', 'ajax_form', 'action_ajax_form.php');
            return false; 
        }

    );
});
function sendAjaxForm(result_form, ajax_form, url) {
    $.ajax({
        url:     url,
        type:     "POST", 
        dataType: "html",
        data: $("#"+ajax_form).serialize(), 
        success: function(response) {
            result = $.parseJSON(response);
            $('#result_form').html('' +
                '<strong>Результат</strong><br><br>\n' +
                '<p>Периметр фундаменту:'+result.width*result.length+' м</p>\n' +
                '<p>Площа фундаменту:'+result.width*result.length*result.height+' м<sup>2</sup></p>\n' +
                '<p>Об\'єм бетону:'+result.width*result.length*result.height*result.thickness+' м<sup>3</sup></p>');
        },
        error: function(response) { 
            $('#result_form').html('Помилка');
        }
    });
}
$( document ).ready(function() {
    $("#btns").click(
        function(){
            sendAjaxForms('result_forms', 'ajax_forms', 'action_ajax_form.php');
            return false; 
        }
    );
});
function sendAjaxForms(result_forms, ajax_forms, url) {
    $.ajax({
        url:     url,
        type:     "POST", 
        dataType: "html",
        data: $("#"+ajax_forms).serialize(), 
        success: function(response) {
            results = $.parseJSON(response);
            $('#result_forms').html('' +
                '<strong>Результат</strong><br><br>\n' +
                '<p>Периметр фундаменту:'+results.A+results.H+results.B+results.B1+results.D+results.D1+results.PCS+results.typ+' м</p>\n');
        },
        error: function(response) { 
            $('#result_forms').html('Помилка');
        }
    });
}
