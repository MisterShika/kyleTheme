let language = 'english';

$('#translate').click(function(){
    if(language == 'english'){
        $('.english').css('display', 'none');
        $('.japanese').css('display', 'block');
        language = 'japanese';
    }else{
        $('.japanese').css('display', 'none');
        $('.english').css('display', 'block');
        language = 'english';
    }
});