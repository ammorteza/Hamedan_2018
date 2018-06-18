var fileTypes = ['jpg', 'jpeg', 'png'];  //acceptable file types
function readURL(input) {
    if (input.files && input.files[0]) {
        var extension = input.files[0].name.split('.').pop().toLowerCase(),  //file extension from input file
            isSuccess = fileTypes.indexOf(extension) > -1;  //is extension in acceptable types

        if (isSuccess) { //yes
            var reader = new FileReader();
            reader.onload = function (e) {
                $(input).closest('.multi-uploader').find(".multi-uploader-preview").attr('src',e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
        else {
            //console.log('here=>'+$(input).closest('.uploadDoc').find(".docErr").length);
            $(input).closest('.uploadDoc').find(".docErr").fadeIn();
            setTimeout(function() {
                $('.docErr').fadeOut('slow');
            }, 9000);
        }
    }
}

$(document).ready(function(){

    $(document).on('change','.up', function(){
        var id = $(this).attr('id'); /* gets the filepath and filename from the input */
        var profilePicValue = $(this).val();
        var fileNameStart = profilePicValue.lastIndexOf('\\'); /* finds the end of the filepath */
        profilePicValue = profilePicValue.substr(fileNameStart + 1).substring(0,20); /* isolates the filename */
        //var profilePicLabelText = $(".upl"); /* finds the label text */
        if (profilePicValue != '') {
            //console.log($(this).closest('.fileUpload').find('.upl').length);
            $(this).closest('.fileUpload').find('.upl').html(profilePicValue); /* changes the label text */
        }
    });
});

function deleteUploadImgItem(input , isRequire) {
    if (isRequire != 0)
    {
        if($(".uploadDoc").length > 1){
            $(input).closest(".uploadDoc").remove();
        }else{
            alert("You have to upload at least one document.");
        }
    }else{
        $(input).closest(".uploadDoc").remove();
    }
}

function addNewUploadFile(inputName , isRequire)
{
    $("#uploader").append(
        '<div class="large-3 uploadDoc">' +
        '<div class="padding-lr multi-uploader">' +
        '<div class="docErr">Please upload valid file</div>' +
        '<!--error-->' +
        '<div class="fileUpload btn btn-orange"> ' +
        '<img src="https://image.flaticon.com/icons/svg/136/136549.svg" class="icon"> '+
        '<span class="upl" id="upload">Upload document</span>' +
        '<input type="file" class="upload up" id="up" name="' + inputName +'" onchange="readURL(this);" />' +
        '</div>' +
        '<div class="grid-x">'+
        '<div class="large-12">'+
        '<img src="" class="multi-uploader-preview">'+
        '</div>'+
        '</div>'+
        '</div>' +
        '<div class="large-12 padding-lr text-center">' +
        '<a class="btn-check" onclick="deleteUploadImgItem(this , ' + isRequire + ');">' +
        '<i class="fa fa-times"></i>' +
        '</a>' +
        '</div>' +
        '</div>' +
        '</div>');

}