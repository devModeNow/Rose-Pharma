// Instantiate DataTable
$(document).ready(function() {
    var table = $('#data-table').DataTable();

    $('.form-control-search').keyup(function(){
      table.search($(this).val()).draw() ;
    }); 
  });

function checkCategory(){

    let value = $('#catName').val();

    $.ajax({
        type: 'POST',
        url: '../../Controller/medicineController.php',
        cache: false,
        dataType: 'json',
        data: {catName:value},
        success: function(data){

            if(data.status == true){
                $('#errMessage').text(data.message).addClass(data.class);
                $('#addCat').prop('disabled','disabled');
            } else {
                $('#errMessage').text("").removeClass(data.class);
                $('#addCat').prop('disabled',false);
            }

        }
    });
}

function addCategory(){
    
    let value = $('#catName').val();

    if(value == ""){

        $('#errMessage').text('Please enter category name')

    } else {

        $.ajax({
            type: 'POST',
            url: '../../Controller/medicineController.php',
            cache: false,
            dataType: 'json',
            data: {name:value, addCat:'Add Category'},
            success: function(data){

                console.log(data.class);

                if(data.status == true){
                    var notyf = new Notyf();
                    notyf.success(data.message);
                    setTimeout(()=>{location.reload()}, 1000)
                    

                } else {
                    $('#errMessage').text("")
                }
    
            }
        })

    }

}

function deleteCategory(id){

    $.ajax({
        type: 'POST',
        url: '../../Controller/medicineController.php',
        cache: false,
        dataType: 'json',
        data: {key:id, deleteCat: 'Delete Category'},
        success:function(res){

            if(res.status == true){
                var notyf = new Notyf();
                notyf.success(res.message);
                setTimeout(()=>{location.reload()}, 1000)
                
            }
            
        }
    });

}

function checkType(){

    let value = $('#typeName').val();

    $.ajax({
        type: 'POST',
        url: '../../Controller/medicineController.php',
        cache: false,
        dataType: 'json',
        data: {typeName:value},
        success: function(data){

            if(data.status == true){
                $('#errMessage').text(data.message).addClass(data.class);
                $('#addCat').prop('disabled','disabled');
            } else {
                $('#errMessage').text("").removeClass(data.class);
                $('#addCat').prop('disabled',false);
            }

        }
    });
}

function addType(){
    
    let value = $('#typeName').val();

    if(value == ""){

        $('#errMessage').text('Please enter type name').addClass('text-danger');

    } else {

        $.ajax({
            type: 'POST',
            url: '../../Controller/medicineController.php',
            cache: false,
            dataType: 'json',
            data: {name:value, addType:'Add Type'},
            success: function(data){

                console.log(data.class);

                if(data.status == true){
                    var notyf = new Notyf();
                    notyf.success(data.message);
                    setTimeout(()=>{location.reload()}, 1000)
                    

                } else {
                    $('#errMessage').text("")
                }
    
            }
        })

    }

}

function deleteType(id){

    $.ajax({
        type: 'POST',
        url: '../../Controller/medicineController.php',
        cache: false,
        dataType: 'json',
        data: {key:id, deleteType: 'Delete Type'},
        success:function(res){

            if(res.status == true){
                var notyf = new Notyf();
                notyf.success(res.message);
                setTimeout(()=>{location.reload()}, 1000)
                
            }
            
        }
    });

}


function checkProductCode(){

    let value = $('#prodCode').val();

    $.ajax({
        type: 'POST',
        url: '../../Controller/medicineController.php',
        cache: false,
        dataType: 'json',
        data: {typeProdCode:value},
        success: function(data){

            if(data.status == true){
                $('#errMessage').text(data.message).addClass(data.class);
                $('#addProd').prop('disabled','disabled');
            } else {
                $('#errMessage').text("").removeClass(data.class);
                $('#addProd').prop('disabled',false);
            }

        }
    });
}

function checkProductName(){

    let value = $('#prodName').val();

    $.ajax({
        type: 'POST',
        url: '../../Controller/medicineController.php',
        cache: false,
        dataType: 'json',
        data: {typeProdName:value},
        success: function(data){

            if(data.status == true){
                $('#prodnameErrMessage').text(data.message).addClass(data.class);
                $('#addProd').prop('disabled','disabled');
            } else {
                $('#prodnameErrMessage').text("").removeClass(data.class);
                $('#addProd').prop('disabled',false);
            }

        }
    });
}

function addMedicine(){
    
    let prodCode = $('#prodCode').val();
    let prodName = $('#prodName').val();
    let price = $('#price').val();
    let category = $('#category').val();
    let type = $('#type').val();
    let quantity = $('#quantity').val();
    let expiration = $('#expiration').val();
    let description = $('#description').val();
    let isPrescribe = "";

    console.log(expiration)

    if($('#isPrescribe').is(':checked')){
        isPrescribe = true;
    } else {
        isPrescribe = false;
    }

    let productData = {
            'code':prodCode, 
            'name':prodName, 
            'price':price, 
            'category':category, 
            'type':type, 
            'quantity':quantity,
            'expiration':expiration,
            'description':description, 
            'prescribe':isPrescribe,
        }

    if(prodCode == "" || prodName == "" || price == "" || category == "" || type == "" || quantity == ""){

        $('#warningMessage').text('Please enter required details').addClass('alert alert-warning')
        setTimeout(()=>{ $('#warningMessage').hide() },5000)

    } else {

        // console.log(JSON.stringify(productData));

        $.ajax({
            type: 'POST',
            url: '../../Controller/medicineController.php',
            cache: false,
            dataType: 'json',
            data: {addMed:'Add Medicine', data:JSON.stringify(productData)},
            success: function(data){

                if(data.status == true){
                    var notyf = new Notyf();
                    notyf.success(data.message);
                    setTimeout(()=>{location.reload()}, 1000)

                } else {
                    $('#errMessage').text("")
                }
                
    
            }, error: function(err){

                console.log(err)

            }
        })

    }

}