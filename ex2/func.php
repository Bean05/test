<?
$shoppingCart = [
    ['product' => 'Телефон', 'price' => 1200],
       ['product' => 'Наушники', 'price' => 800],
       ['product' => 'Ноутбук', 'price' => 1500],
       // Добавим еще товар для проверки
       ['product' => 'Зарядник', 'price' => 600],
   // Добавьте другие товары по вашему усмотрению
   ];
function sale($arr){
	$res=0;
    $tenSale = false;
    
    foreach($arr as $el){
        if($el['price'] > 1000){
            $tenSale = true;
        }   
        $res+=$el['price'];
    }
    
	if(count($arr) > 3){
		$res-= $res/20;
	}
	
	if($tenSale){
		$res -= $res/10;
	}

    return $res;
}

print_r(sale($shoppingCart));