// $(document).ready(function(){
//     $(document).on('click','.increment-btn', function(e) {
//         e.preventDefault();

//         var qty = $(this).closest('.product_data').find('.input-qty').val();
//         // alert(qty);

//         var value = parseInt(qty,10);
//         value = isNaN(value) ? 0 : value;

//         if(value <10 )
//         {
//             value++;
//             //$('.input-qty').val(value);
//             $(this).closest('.product_data').find('.input-qty').val(value);
//         }

//     });

//     $(document).on('click','.decrement-btn', function(e) {
//         e.preventDefault();

//         var qty = $(this).closest('.product_data').find('.input-qty').val();
//         // alert(qty);

//         var value = parseInt(qty,10);
//         value = isNaN(value) ? 0 : value;

//         if(value> 1 )
//         {
//             value--;
//             //$('.input-qty').val(value);
//             $(this).closest('.product_data').find('.input-qty').val(value);
//         }

//     });

//     $(document).on('click','.addToCartBtn', function(e) {
//         e.preventDefault();

//         var qty = $(this).closest('.product_data').find('.input-qty').val();
//         // alert(qty);
//         var prod_id = $(this).val();

//         // alert(prod_id);

//         $.ajax({
//             method: "POST",
//             url:"functions/handlecart.php",
//             data:{
//                 "prod_id":prod_id,
//                 "prod_qty" :qty,
//                 "scope":"add"
//             },
//             success:function(response){
//                 if(response == 201)
//                 {
//                     alert("Product added");
//                 }
//                 else if(response == 401)
//                 {
//                     alert("Login to continue");
//                 }
//                 else if(response == "existing")
//                 {
//                     alert("product already in cart");
//                 }
//                 else if(response == 500)
//                 {
//                     alert("Something went wrong");
//                 }
//             }

//         });
       

//     });

//     $(document).on('click','.updateQty', function() {
//         var qty = $(this).closest('.product_data').find('.input-qty').val();
//         var prod_id = $(this).closest('.product_data').find('.prodId').val();
//         //  alert(qty);

//         $.ajax({
//             method: "POST",
//             url:"functions/handlecart.php",
//             data:{
//                 "prod_id":prod_id,
//                 "prod_qty" :qty,
//                 "scope":"update"
//             },
//             success:function(response){       
               
//             }

//         });
//     });

//     $(document).on('click','.deleteItem',function(){
//         var cart_id = $(this).val();
//         // alert(cart_id);

//         $.ajax({
//             method: "POST",
//             url:"functions/handlecart.php",
//             data:{
//                 "cart_id":cart_id,
//                 "scope":"delete"
//             },
//             success:function(response){       
//                 if(response == 200)
//                 {
//                     alert("Item deleted");
//                     $('#mycart').load(location.href + " #mycart");
//                 }
//                 else 
//                 {
//                     alert(response);
//                 }
               
//             }

//         });


//     });



// });