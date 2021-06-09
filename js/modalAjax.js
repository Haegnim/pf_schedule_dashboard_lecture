
$(function(){
    $.ajax({
        url:"/schedule/php/read_json.php", 
            
        success: function(result){
            //json으로 바꿔준다.
            const obj = JSON.parse(result);
            // console.log(obj[0]);
            // console.log(typeof(obj[0].db_rate));

            const dbRate = Number(obj[0].db_rate);
            const apiRate = Number(obj[0].api_rate);
            const renRate = Number(obj[0].ren_rate);
            const plaRate = Number(obj[0].pla_rate);
            // console.log(obj);
            // console.log(obj[0].api_rate);
            $(".rate-form").html(
                `<p>
                <label for="db_pro">DB Project</label>
                <input type="text" id="db_pro" value="${dbRate}" name="db_pro">
                </p>
                <p>
                <label for="api_pro">API Project</label>
                <input type="text" id="db_pro" value="${apiRate}" name="api_pro">
                </p>
                <p>
                <label for="ren_pro">Renewal Project</label>
                <input type="text" id="ren_pro" value="${renRate}" name="ren_pro">
                </p>
                <p>
                <label for="pla_pro">Planning Project</label>
                <input type="text" id="pla_pro" value="${plaRate}" name="pla_pro">
                </p>`
            );

            $(".each-graph").html(
                `<div class="db-pofol">
                <span class="chart" data-percent="${dbRate}">
                        <span class="percent"></span>
                        <i class="fa fa-database"></i>
                    </span>
                    <b>DB Project</b>
                    
                </div>
                <div class="api-pofol">
                    <span class="chart" data-percent="${apiRate}">
                        <span class="percent"></span>
                        <i class="fa fa-thermometer-half"></i>
                    </span>
                    <b>API Project</b>
                    
                </div>
                <div class="renewal-pofol">
                    <span class="chart" data-percent="${renRate}">
                        <span class="percent"></span>
                        <i class="fa fa-clone"></i>
                    </span>
                    <b>Renewal Project</b>
                    
                </div>
                <div class="panning-pofol">
                    <span class="chart" data-percent="${plaRate}">
                        <span class="percent"></span>
                        <i class="fa fa-bar-chart-o"></i>
                    </span>
                    <b>Planning Project</b>
                    
                </div>`
            );
        }
    });

});