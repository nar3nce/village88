function resetNegative(arr){
    var val = [];

    for(var i = 0; i < arr.length; i++){
        if(arr[i] < 1) {
           val[i] = 0;
        }
        else {
            val[i] = arr[i];
        }
        
    }
        return val;
}
console.log(Negative([1,2,-1,-3]));

function moveForward(arr){
    
    arr.splice(arr.length, 0, 0);
    arr.shift();
    return arr;
}
   

console.log(moveForward([1,2,3]));


function reverseArray(arr){
    
    for(var i = 0; i < arr.length/2; i++) {
        var tmp = arr[i];
        
        arr[i] = arr[arr.length-1-i];
        arr[arr.length-1-i] = tmp;
    }
    
    
    return arr;
}
console.log(reverseArray([1,2,-1,-3]));

function repeatTwice(arr){
    
    var val = [];
    for(var i = 0; i < arr.length; i++) {
       
     val.push(arr[i]);
     val.push(arr[i]);
       
    }
    
    return val;
}
console.log(repeatTwice([4,'Ulysses', 42, false]));