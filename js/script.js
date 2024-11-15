let day='sunday'
let weather ='sunny'
let season = 'Monsoon'

let result = (day =='sunday' && weather == 'sunny' && season=='Monsoon')? "The weather is sunny and season is monsoon" : 
(day =='sunday' && weather == 'rainy' && season=='Monsoon')? "The weather is rainy and season is monsoon" :
"The weather is winter and season in monsoon.";

console.log(result)