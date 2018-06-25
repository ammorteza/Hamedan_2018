var fileTypes = ['jpg', 'jpeg', 'png'];  //acceptable file types
function readURL(input , inputName , isRequire , uploadIcon , counter) {
    if (input.files && input.files[0]) {
        var extension = input.files[0].name.split('.').pop().toLowerCase(),  //file extension from input file
            isSuccess = fileTypes.indexOf(extension) > -1;  //is extension in acceptable types

        if (isSuccess) { //yes
            var reader = new FileReader();
            reader.onload = function (e) {
                $(input).closest('.multi-uploader').find(".multi-uploader-preview-label").remove();
                $(input).closest('.multi-uploader').find(".fileUpload").append(
                    '<div class="image-preview-container">' +
                    '<img src="' + e.target.result + '" class="multi-uploader-preview"/>' +
                    '<div class="middle">' +
                    '<a onclick="deleteUploadImgItem(this , ' + isRequire + ');"><span class="btn-red"><i class="fas fa-trash-alt size-36"></i></span></a>'+
                    '</div>' +
                    '</div>');
                addNewUploadFile(inputName , isRequire , uploadIcon , counter)
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
    $("form#fileupload :input").each(function(){
        var input = $(this); // A jquery object of the input
        if (input.attr('type') == 'file')
        {
            input.val('');
        }
    }); //clear all input file type

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
            if ($(".uploadDoc").length == 1)
            {
                $(".uploadDoc").each(function (e) {
                    $(this).find('.upload').attr('required', true);
                });
            }
        }else{
            alert("You have to upload at least one document.");
        }
    }else{
        $(input).closest(".uploadDoc").remove();
    }
}

function addNewUploadFile(inputName , isRequire , uploadIcon , counter)
{
    $("#uploader").append(
        '<div class="large-3 uploadDoc">' +
            '<div class="multi-uploader">' +
                '<div class="fileUpload" style="padding: 5px"> ' +
                    '<label for="up' + counter + '" class="multi-uploader-preview-label">' +
                    '<img src="' + uploadIcon + '" class="img-border"/>' +
                    '</label>' +
                    '<input type="file" accept="image/*" class="upload up" id="up' + counter + '" name="' + inputName +'" onchange="readURL(this, \'' + inputName + '\' , \'' + isRequire + '\' , \'' + uploadIcon + '\' , ' + (counter + 1) + ');" />' +
                '</div>' +
            '</div>' +
        '</div>');
}