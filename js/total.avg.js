$(function(){
  $.ajax({
      url:"/schedule/data/sp_rate.json", 
          
      success: function(result){
        const obj = JSON.parse(result);
        const dbRate = Number(obj[0].db_rate);
        const apiRate = Number(obj[0].api_rate);
        const renRate = Number(obj[0].ren_rate);
        const plaRate = Number(obj[0].pla_rate);

        console.log(dbRate);
        console.log(apiRate);
        console.log(renRate);
        console.log(plaRate);

        const spAvg = (dbRate * 0.4) + (apiRate * 0.2) + (renRate * 0.1) + (plaRate * 0.3);

        console.log(spAvg);
      }
    });

  });