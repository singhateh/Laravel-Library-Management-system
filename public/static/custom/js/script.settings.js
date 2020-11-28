function loadResults(){

    var url =  "/books?category_id=" + $('#category_fill').val();

    var table = $('#all-books');
    
    var default_tpl = _.template($('#allbooks_show').html());

    $.ajax({
        url : url,
        success : function(data){
            if($.isEmptyObject(data)){
                table.html('<tr><td colspan="99">No Books in this category</td></tr>');
            } else {
                table.html('');
                for (var book in data) {
                    table.append(default_tpl(data[book]));
                }
            }
        },
        beforeSend : function(){
            table.css({'opacity' : 0.4});
        },
        complete : function() {
            table.css({'opacity' : 1.0});
        }
    });
}

$(document).ready(function(){

    $("#category_fill").change(function(){
        loadResults();
    });

    $(document).on("click","#addStudentCategory",function(){

        var form = $(this).parents('form'),
            module_body = $(this).parents('.module-body'),
            sendJSON ={},
            send_flag = true,
            f$ = function(selector) {
                return form.find(selector);
            };

        category = f$('input[data-form-field~=student_category]').val();
        max_allowed = f$('input[data-form-field~=max_allowed]').val();
        _token = f$('input[data-form-field~=token]').val();

        if(category == "" || max_allowed == "" ){
            module_body.prepend(templates.alert_box( {type: 'danger', message: 'All Fields is Required'} ));
            send_flag = false;
        }
        
        if(send_flag == true){

            $.ajax({
                type : 'POST',
                data : {
                    category : category, _token:_token, max_allowed:max_allowed
                },
                url : '/setting',
                success: function(data) {                    
                    module_body.prepend(templates.alert_box( {type: 'success', message: data} ));
                    clearform();
                },
                error: function(xhr,status,error){
                    var err = eval("(" + xhr.responseText + ")");
                    module_body.prepend(templates.alert_box( {type: 'danger', message: err.error.message} ));
                },
                beforeSend: function() {
                    form.css({'opacity' : '0.4'});
                },
                complete: function() {
                    form.css({'opacity' : '1.0'});
                }
            });
        }
    }); // add books to database

    $(document).on("click","#addBranch",function(){

        var form = $(this).parents('form'),
            module_body = $(this).parents('.module-body'),
            sendJSON ={},
            send_flag = true,
            f$ = function(selector) {
                return form.find(selector);
            };

            branch = f$('input[data-form-field~=branch]').val();
        _token = f$('input[data-form-field~=token]').val();

        if(branch == ""  ){
            module_body.prepend(templates.alert_box( {type: 'danger', message: 'Branch Field is Required'} ));
            send_flag = false;
        }
        
        if(send_flag == true){

            $.ajax({
                type : 'POST',
                data : {
                    branch : branch, _token:_token
                },
                url : '/setting',
                success: function(data) {                    
                    module_body.prepend(templates.alert_box( {type: 'success', message: data} ));
                    clearform1();
                },
                error: function(xhr,status,error){
                    var err = eval("(" + xhr.responseText + ")");
                    module_body.prepend(templates.alert_box( {type: 'danger', message: err.error.message} ));
                },
                beforeSend: function() {
                    form.css({'opacity' : '0.4'});
                },
                complete: function() {
                    form.css({'opacity' : '1.0'});
                }
            });
        }
    });

    
    $(".alert_box").hide().delay(5000).fadeOut();

    loadResults();

});

function clearform(){
    $('#student_category').val('');
    $('#max_allow').val('');
}

function clearform1(){
    $('#branch').val('');
}