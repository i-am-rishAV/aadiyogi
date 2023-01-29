

$(document).ready(function () {
    readRecords();
});

                                  

// to display on dom function..
function readRecords() {
    let readrecord = "readrecord"; // creating a varaible to send to use it as isset function
    $.ajax({
        url: "blog_db.php",
        type: "post",
        data: { readrecord: readrecord }, // sending data from this page 
        success: function (data, status) {
            $('#records').html(data);  // receiving data from price_db page
        }
    });
}

//add record function..
function addrecord() {
    // storing all the inputs by user in variable 

    



    
    let title = $('#title').val();
    let content = $('#content').val(); 

    // let content = document.getElementById('content').value ;  
    let image = $('#image')[0] .files;
    console.log(title, content, image.length);
    
    let formData = new FormData($('#myform')[0]);
    formData.append('submit','create');

    if(title !='' && content !='' && image.length > 0){
        
         $.ajax({

            url:"blog_db.php",
            type: "post",
            data: formData,
            processData:false,
            contentType:false,
            success: function(response){
               if(response== 'success'){
                $('#myform').trigger('reset');
                $('#addservice').modal('hide');
                readRecords();
               }else{
                alert(response);
               }
            }
         });
     

    }else{
        
        alert("please fill everything in the blog form");
    };
    


}

//delect recode function..
function deleteUser(deleteid) {
    //confirming from the user so that it will run only
    // when the user will click yes 
    let conf = confirm("Are yo sure want to delete this data from database");
    if (conf == true) {
        $.ajax({
            url: "blog_db.php",
            type: "post",
            data: { deleteid: deleteid }, //sending the id to write the delete query using this id
            success: function (data, status) {
                readRecords();// after deleting calling readRecord function to display remaining data
            }

        });
    }

}

//edit record function..
function editUser(id) {
    $('#hidden_id').val(id); //giving id to the hidden input

    $.post("blog_db.php", { id: id }, function (data, status) {

        let service = JSON.parse(data); // converting json data to javascript object
        $('#update_title').val(service.title); // accessing the data that we just converted into javascript object
        $('#update_content').val(service.content);
       

    }
    );

    $('#updateservice').modal("show"); // now showing the modal with all the data

}


function updateService() {
    let add_title = $('#update_title').val();
    
    let add_content = $('#update_content').val();
   

    let add_hidden_id = $('#hidden_id').val();

    if (add_title !='' && content !=''){
    $.post("blog_db.php", {

        add_title: add_title,
        add_hidden_id: add_hidden_id,
        add_content: add_content

    },
        function (data, status) {
            $('#updateservice').modal("hide");
            readRecords();
        }

    );
    }else{
        alert ("please fill everything in the blog form");
    }


}