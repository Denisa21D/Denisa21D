// store total item is localStorage 
function set_total(value){
	
var total=value;
localStorage.setItem("total_Item1", total);

	
	
}
function dum(){
	var x=null;
	localStorage.setItem("total_Item1", x);
		localStorage.setItem('order2', x);
	localStorage.setItem('price2', x);
	localStorage.setItem('img2', x);
}


function get_total(){
	var total =0;
	var x =localStorage.getItem("total_Item1");
        if(Number.isNaN(x)|| localStorage.getItem('total_Item1') == null){
			//window.alert("get_total  empty");
			set_total(0);
			
			
		}else{
			total=localStorage.getItem("total_Item1")*1;
			//window.alert(total);
		}
	
	return total;
	
}
 // end
 //   save array to local store
 function get_order(){
	 var order =[];
 if(localStorage.getItem('order2') == "NaN"  || localStorage.getItem('order2') == null){
	  //window.alert("order empty");
}else{
	  
	order =  JSON.parse(localStorage.getItem('order2'));
	 //window.alert("order value"+order);
}
      return order;
 }

//alert('last item stored ' + myArray[myArray.length-1]);

function set_order(value){
	
		var order=[];
	if(get_order()=="NaN" || get_order() == null){
		
	}else{
		//window.alert("get_order "+get_order());
	 order =get_order();
	}

	order[get_total()]=value;
	localStorage.setItem('order2', JSON.stringify(order));
}
 
 //end
 //   save array to local store
 function get_price(){
	 var price =[];
 if(localStorage.getItem('price2') == "NaN" || localStorage.getItem('price2') == null){
	
}else{
	price =  JSON.parse(localStorage.getItem('price2'));
}
      return price;
 }

//alert('last item stored ' + myArray[myArray.length-1]);

function set_price(value){
		var price=[];
	if(get_price()=="NaN" || get_price() == null){
		
	}else{
	 price =get_price();
	}
	
	price.push(value);
	localStorage.setItem('price2', JSON.stringify(price));
}
 
 //end
 
  //   save array to local store
 function get_img(){
	 var img =[];
 if(localStorage.getItem('img2') == "NaN"|| localStorage.getItem('img2') == null ){
	
}else{
	img =  JSON.parse(localStorage.getItem('img2'));
}
      return img;
 }

//alert('last item stored ' + myArray[myArray.length-1]);

function set_img(value){
	var img=[];
	if(get_img()==null || get_img() == null){
		
	}else{
	var img =get_img();
	}

	img.push(value);
	
	localStorage.setItem('img2', JSON.stringify(img));
}
 
 //end

//                      0                   2                          4                         6                   
var items=["Lavender Soap","$50","Lavender Bath Salt","$29","Lavender infused oil","$15","Lavender Hand Scrub","$19"];
var img=["s6-unsplash.jpg","","salt1.jpg","","s5-unsplash.jpg","","sugarScrub.png",""];
var order;
var price;
var oimg;
function numberitem(){
	
	
  return get_total();	
}

function dumvalue(){
	
	Additem(0);
	Additem(2);
	Additem(0);
	
}

function Additem(value){
	value = value*1;
	var total_Item=get_total(); // totalitems
	//window.alert(" total "+total_Item);
	switch(value){
		
		case 0:
		
		
		set_order(items[value]);
		
	  // window.alert(items[value]);
		set_price(items[value+1]);
		set_img(img[value]);
	 
		total_Item++;
		set_total(total_Item);// value local 
	
		update();
		
		break;
		
		case 2:
set_order(items[value]);
		set_price(items[value+1]);
		set_img(img[value]);
		total_Item++;
		set_total(total_Item);
		update();
		
		break;
		
		case 4:
set_order(items[value]);
		set_price(items[value+1]);
		set_img(img[value]);
		total_Item++;
		set_total(total_Item);
		update();
		
		break;
		
		case 6:
set_order(items[value]);
		set_price(items[value+1]);
		set_img(img[value]);
		total_Item++;
		set_total(total_Item);
		update();
		
		break;
		
		default:
		
	set_order(items[value]);
		set_price(items[value+1]);
		set_img(img[value]);
		total_Item++;
		set_total(total_Item);
		update();
		//window.alert("Design deafult");
		
		
	}
		
	}
	
	function item_price(value){
	
var price=get_price();

	value=value*1;
	return price[value];
	
}
	
	
function item_name(value){
	var order=get_order();
	value=value*1;
	return order[value];
	
}

function image_name(value){
	var oimg=get_img();
	return oimg[value];
}

function update(){
	var x= numberitem()*1;
	if(x==0 || Number.isNaN(x) || x==null){
		
			document.getElementById("item_number").innerHTML = "0";
			set_total(0);
	}else{
		//window.alert("Not Empty "+x);
	document.getElementById("item_number").innerHTML = get_total();
	updatelist();
	
	}
	
}

function updatelist(){
	
	var x= numberitem()*1;
	var tag_value="";
	var total="";
	var numt=0.0;
	var price=0;
	for(var i =0;i<x;i++){
		price=item_price(i);
		
 tag_value =tag_value+'<li> <a href="#" class="photo"><img src="'+image_name(i)+'" class="cart-thumb" alt="" /></a>  <h6> <a href="#">'+item_name(i) +'</a></h6>      <p>1x - <span class="price">'+price +'</span></p> </li>';
				numt=numt+item_price(i)*1.0;	   
	}
	 total='<li class="total"> <a href="cart.php" class="btn btn-default hvr-hover btn-cart">VIEW CART</a> <span class="float-right"><strong>Total</strong>:'+numt+'</span></li>';
	document.getElementById("cart_list").innerHTML= tag_value+total;
	
	
}



function updatefinallist(){
	//dumvalue();
	var x= numberitem()*1;
	var tag_value="";
	var total="";
	var numt=0;
	var price=0;
	for(var i =0;i<x;i++){
		////window.alert(i);
		price=item_price(i);
		numt=numt+item_price(i)*1;	
		total=total+' <tr> <td class="thumbnail-img"> <a href="#">'+
									'<img class="img-fluid" src="'+image_name(i)+'" alt="" />'+
								'</a>'+
                                    '</td>'+
                                    '<td class="name-pr">'+
                                        '<a href="#">'+
									item_name(i)
								+'</a>'+
                                    '</td>'+
                                    '<td class="price-pr">'+
                                        '<p>'+price+'</p>'+
                                    '</td>'+
                                    '<td class="quantity-box"><input type="number" size="4" value="1" min="0" step="1" class="c-input-text qty text"></td>'+
                                    '<td class="total-pr">'+
                                        '<p>'+price+'</p>'+
                                    '</td>'+
                                    '<td class="remove-pr">'+
                                        '<a href="#">'+
									'<i class="fas fa-times"></i>'+
								'</a>'+
                                    '</td>'+
                                '</tr>';
		
	}
	
	document.getElementById("cart_final_list").innerHTML=total;
	
	                   var sum= '<h3>Order summary</h3>'+
                        '<div class="d-flex">'+
                       '    <h4>Sub Total</h4>'+
                        '    <div class="ml-auto font-weight-bold">'+numt +' </div>'+
                        '</div>'+
                        '<div class="d-flex">'+
                         '   <h4>Discount</h4>'+
                          '  <div class="ml-auto font-weight-bold"> £0 </div>'+
                       ' </div>'+
                        '<hr class="my-1">'+
                   '     <div class="d-flex">'+
                    '        <h4>Coupon Discount</h4>'+
                     '       <div class="ml-auto font-weight-bold"> £0 </div>'+
                    '    </div>'+
                     '   <div class="d-flex">'+
                      '      <h4>Tax</h4>'+
                       '     <div class="ml-auto font-weight-bold"> £0 </div>'+
                      '  </div>'+
           '             <div class="d-flex">'+
            '                <h4>Shipping Cost</h4>'+
             '               <div class="ml-auto font-weight-bold"> Free </div>'+
              '          </div>'+
               '         <hr>'+
                '        <div class="d-flex gr-total">'+
                 '           <h5>Grand Total</h5>'+
                  '          <div class="ml-auto h5"> '+numt +' </div>'+
                   '     </div>'+
                    '    <hr>';
	                               
	document.getElementById("bill").innerHTML=sum;
	
	
}
function updatelist2(){
	var x= numberitem()*1;
	var tag_value="";
	var total="";
	var numt=0;
	var price=0;
	for(var i =0;i<x;i++){
		price=item_price(i);
		
 tag_value =tag_value+  '<div class="media mb-2 border-bottom">'+
                         '               <div class="media-body"> <a style="color:black;" href="detail.html">'+item_name(i)+'</a>'+
                          '                  <div style="color:black;" class="small text-muted">Price:'+price+' <span class="mx-2">|</span> Qty: 1 <span class="mx-2">|</span> Subtotal: '+price+'</div>'+
                           '             </div>'+
                            '        </div>';
				numt=numt+item_price(i)*1;	   
	}
	 	document.getElementById("bill2").innerHTML= tag_value;
		
			                   var sum=     '<div class="title-left">'+
                                    '<h3>Your order</h3>'+
                                '</div>'+
                                '<div class="d-flex">'+
                                 '   <div class="font-weight-bold">Product</div>'+
                                  '  <div class="ml-auto font-weight-bold">Total</div>'+
                                '</div>'+
                                '<hr class="my-1">'+
                        '<div class="d-flex">'+
                       '    <h4>Sub Total</h4>'+
                        '    <div class="ml-auto font-weight-bold">'+numt +' </div>'+
                        '</div>'+
                        '<div class="d-flex">'+
                         '   <h4>Discount</h4>'+
                          '  <div class="ml-auto font-weight-bold"> £0 </div>'+
                       ' </div>'+
                        '<hr class="my-1">'+
                   '     <div class="d-flex">'+
                    '        <h4>Coupon Discount</h4>'+
                     '       <div class="ml-auto font-weight-bold"> £0 </div>'+
                    '    </div>'+
                     '   <div class="d-flex">'+
                      '      <h4>Tax</h4>'+
                       '     <div class="ml-auto font-weight-bold"> £0 </div>'+
                      '  </div>'+
           '             <div class="d-flex">'+
            '                <h4>Shipping Cost</h4>'+
             '               <div class="ml-auto font-weight-bold"> Free </div>'+
              '          </div>'+
               '         <hr>'+
                '        <div class="d-flex gr-total">'+
                 '           <h5>Grand Total</h5>'+
                  '          <div class="ml-auto h5"> '+numt +' </div>'+
                   '     </div>'+
                    '    <hr>';
	                               
	document.getElementById("bill3").innerHTML=sum;
	
	
}

  





