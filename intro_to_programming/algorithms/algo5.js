function greaterThanY(arr , y){
   
var val = [];
var count = 0;

for(var i = 0; i < arr.length; i++){
    if(arr[i] > y){
        val = arr[i];
        count++;
        console.log(val);
    }
}
console.log('number of values greater than y : ' + count)
}
greaterThanY([1,2,3,4,5],2);


function minMaxAvg(arr){
var min = arr[0];
var max = arr[0];
var avg = arr[0];

for(var i = 0; i < arr.length; i++){
    if(arr[i] < min) {
        min = arr[i];
    }
    if(arr[i] > max) {
        max = arr[i];
    }
    avg += arr[i];          
}
    return [min,max,avg]
}
console.log(minMaxAvg([1,2,3,4,5]));


function Negative(arr){
    var val = [];

    for(var i = 0; i < arr.length; i++){
        if(arr[i] < 1) {
           val[i] = 'dojo';
        }
        else {
            val[i] = arr[i];
        }
        
    }
        return val;
}
console.log(Negative([1,-2,3,-4,5]));

function removeIndexRange(arr,start,end){

    for(var i = start; i <=end; i++) {
        
        var tmp = arr[i];
        for(var j = i; j < arr.length-1; j++) {
            arr[j] = arr[j+1];
        }
    arr[arr.length-1] = tmp;
    arr.pop();
    i--;
    end--;
}
return arr;    
}
console.log(removeIndexRange([1,-2,3,-4,5],1,2));