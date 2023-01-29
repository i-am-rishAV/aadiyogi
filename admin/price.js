

$(document).ready(function () {
    readRecords();
});

// to display on dom function..
function readRecords() {
    let readrecord = "readrecord"; // creating a varaible to send to use it as isset function
    $.ajax({
        url: "price_db.php",
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
    let price = $('#price').val();
    let des1 = $('#des1').val();
    let des2 = $('#des2').val();
    let des3 = $('#des3').val();
    let des4 = $('#des4').val();
    let des5 = $('#des5').val();



    $.ajax({

        url: "price_db.php",
        type: "post",
        //sending the inputs stored in varaibles to run queries to store in database 
        data: {
            title: title,
            price: price,
            des1: des1,
            des2: des2,
            des3: des3,
            des4: des4,
            des5: des5
        },

        success: function (data, status) {
            $('#title').val(""); //  reseting the value back to null
            $('#price').val("");
            $('#des1').val("");
            $('#des2').val("");
            $('#des3').val("");
            $('#des4').val("");
            $('#des5').val("");
            $('#addprice').modal("hide");
            readRecords(); //to display the new data entered in database we callinf this function
            
        }

    });

    

}

//delect recode function..
function deleteUser(deleteid) {
    //confirming from the user so that it will run only
    // when the user will click yes 
    let conf = confirm("Are yo sure want to delete this data from database");
    if (conf == true) {
        $.ajax({
            url: "price_db.php",
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

    $.post("price_db.php", { id: id }, function (data, status) {

        let price = JSON.parse(data); // converting json data to javascript object
        $('#update_title').val(price.title); // accessing the data that we just converted into javascript object
        $('#update_price').val(price.price);
        $('#update_des1').val(price.des1);
        $('#update_des2').val(price.des2);
        $('#update_des3').val(price.des3);
        $('#update_des4').val(price.des4);
        $('#update_des5').val(price.des5);

    }
    );

    $('#update_price_modal').modal("show"); // now showing the modal with all the data

}


function updateprice() {
    let add_title = $('#update_title').val();
    let add_price = $('#update_price').val();
    let add_des1 = $('#update_des1').val();
    let add_des2 = $('#update_des2').val();
    let add_des3 = $('#update_des3').val();
    let add_des4 = $('#update_des4').val();
    let add_des5 = $('#update_des5').val();

    let add_hidden_id = $('#hidden_id').val();

    $.post("price_db.php", {

        add_title: add_title,
        add_hidden_id: add_hidden_id,
        add_price: add_price,
        add_des1: add_des1,
        add_des2: add_des2,
        add_des3: add_des3,
        add_des4: add_des4,
        add_des5: add_des5

    },
        function (data, status) {
            $('#update_price_modal').modal("hide");
            readRecords();
        }

    );
}