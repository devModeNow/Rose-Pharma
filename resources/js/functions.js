function updateMedicine(id){

    let key = id;
    let prodCode = $('.prodCodeEdit').val();
    let prodName = $('.prodNameEdit').val();
    let price = $('.priceEdit').val();
    let category = $('.categoryEdit').val();
    let type = $('.typeEdit').val();
    let quantity = $('.quantityEdit').val();
    let description = $('.descriptionEdit').val();
    let isPrescribe = "";

    if($('#isPrescribeEdit').is(':checked')){
        isPrescribe = true;
    } else {
        isPrescribe = false;
    }

    let productData = {
            'id':key,
            'code':prodCode, 
            'name':prodName, 
            'price':price, 
            'category':category, 
            'type':type, 
            'quantity':quantity, 
            'description':description, 
            'prescribe':isPrescribe,
        }

        console.log(productData);

    if(prodCode == "" || prodName == "" || price == "" || category == "" || type == "" || quantity == ""){

        $('#warningMessage').text('Please enter required details').addClass('alert alert-warning')
        setTimeout(()=>{ $('#warningMessage').hide() },5000)

    } else {

        // console.log(JSON.stringify(productData));

        // $.ajax({
        //     type: 'POST',
        //     url: '../../Controller/medicineController.php',
        //     cache: false,
        //     dataType: 'json',
        //     data: {updateMed:'Update Medicine', data:JSON.stringify(productData)},
        //     success: function(data){

        //         if(data.status == true){
        //             var notyf = new Notyf();
        //             notyf.success(data.message);
        //             setTimeout(()=>{location.reload()}, 1000)
                    

        //         } else {
        //             $('#errMessage').text("")
        //         }
                
    
        //     }, error: function(err){

        //         console.log(err)

        //     }
        // })

    }

}

function destroy(id){

    let confirmDelete = 'are you sure you want to delete this?'

    if(confirm(confirmDelete) == true){
        
        $.ajax({
            type: 'POST',
            url: '../../Controller/medicineController.php',
            cache: false,
            dataType: 'json',
            data: {key:id, deleteMed: 'Delete Type'},
            success:function(res){
    
                if(res.status == true){
                    var notyf = new Notyf();
                    notyf.success(res.message);
                    setTimeout(()=>{location.reload()}, 1000)
                    
                }
                
            }
        });

    }

}