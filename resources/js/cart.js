let data = {
    'meds': []
}

function updateCart() {

    let container = $('#cartList')

    container.empty()

    for(let i = 0; i < data.meds.length; i++){

        $('.delete').on('click', () => {
            console.log('delete clicked')
        })

        container.append(
                '<div class="col-4">'+
                    '<p>' + data.meds[i].name + '</p>'+
                '</div>'+
                '<div class="col-2">'+
                    '<p>' + data.meds[i].price + '</p>'+
                '</div>'+
                '<div class="col-4">'+
                    '<input type="number" class="form-control" required placeholder="quantity">'+
               '</div>'+
                '<div class="col-2">'+
                    '<i class="delete oi oi-trash mr-2"></i>'+
               '</div>'
            )

    }
}

updateCart()

function addToCart(id, name, price) {
    
    const cart = {

            id: id,
            name: name,
            price: price
    }

    data.meds.push(cart)

    $('#addToCartButton_'+id).prop('disabled', true)
    updateCart()

}