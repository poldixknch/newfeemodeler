$(function () {
    if($('#visitor_menu').length > 0){
        $('#visitor_menu li').each(function(){
           if($(this).find('a').attr('href')===window.location.href) 
               $(this).addClass('active');
        });
    }
    
    $('.savetocloud').click(function () {
        var values = {};
        var addt = [];
        $('input[type="text"]').each(function () {
            var name = $(this).attr('name');
            var val = $(this).val();
            values[name] = val;
            // registering additional fields
            if ($(this).parent().parent().is('.addt')) {
                var self = $(this);
                var grandma = self.parent().parent();
                for (data in grandma.data())
                    var back_number = grandma.attr('data-' + data);
                var ancient_id = grandma.parent().attr('id');
                var jogress = 'addt_'+ancient_id;
                if(typeof values[jogress] === typeof undefined) values[jogress] = [];
                if(values[jogress].indexOf(back_number)<0)values[jogress].push(back_number);
            }
        });
        $(':checkbox').each(function () {
            var name = $(this).attr('name');
            if ($(this).is(':checked'))
                values[name] = true;
        });
        $('select').each(function () {
            var name = $(this).attr('name');
            var val = $(this).val();
            values[name] = val;
        });
        $(':radio').each(function () {
            var name = $(this).attr('name');
            var val = $(this).val();
            values[name] = val;
        });
        $('textarea').each(function () {
            var name = $(this).attr('name');
            var val = $(this).val();
            values[name] = val;
        });

        var currenturl = window.location.href.split('/');
        var iddata = parseInt(currenturl[currenturl.length - 1]);
        $.ajax({
            'url': iddata > 0 ? site_url + 'main/update/' + iddata : site_url + 'main/store',
            'type': 'POST',
            'dataType': 'text',
            'data': {values:JSON.stringify(values)}
            ,
            success: function (id) {
                window.location = site_url + 'main/show/' + id;
            }
            
        });
    });

//    $('input[type="text"]').each(function () {
//        var name = $(this).attr('name');
//        var value = $(this).attr('value');
//        value = (!$(this).is('[value]')) ? '\'\'':'\''+value+'\'';
//        name = '$stored[\''+name+'\']';
//        $(this).attr('value','<?= isset('+name+')?'+name+':'+value+' ?>');
//    });
//    
//    $(':checkbox').each(function () {
//        var name = $(this).attr('name');
//        $(this).attr('henrisusanto','<?= isset($stored[\''+name+'\'])?\'checked\':\'\' ?>');
//    });
    $('.table-user-list select').change(function(){
        if(confirm('Are you sure ?'))
            $(this).closest('tr').find('form').submit();
    });
});