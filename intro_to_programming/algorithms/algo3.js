function LargestElement(x){

    for(var i=0; i<x.length; i++) {
      //your code here
        if(x[0] < x[i]) {
            x[0] = x[i];
        }
    }
    return x[0];
  }
console.log( LargestElement([1,30,5,7]) ); 