//Contents Text
const conTxt = document.querySelectorAll('.con-txt p a');

conTxt.forEach(element => {
    const cutTxt = element.textContent.slice(0,10) + "...";
    element.textContent = cutTxt;
});

//Mobile Menu Activate
const mobileMenu = document.querySelector('.mobile-menu');

mobileMenu.onclick = () => {
    mobileMenu.classList.toggle('active');

}

//Pie Chart Rendering Code
document.addEventListener('DOMContentLoaded', function () {

    let lWidth = 10;
    let tWidth = 8;
    let eachSize = 110;
    let pieSize = 200;
    

    let clearSet;
    const winWidth = window.innerWidth;

    if(winWidth <= 1280 && winWidth > 950){
        pieSize = 150;
    } else if(winWidth <= 950) {
        pieSize = 170;
    } else {
        pieSize = 200;
    }

    var chart = window.chart = new EasyPieChart(document.querySelector('.total-chart .chart'), {
        easing: 'easeOutElastic',
        delay: 3000,
        barColor: '#13C7A3',
        trackColor: '#e6e6e6',
        scaleColor: false,
        lineWidth: 18,
        trackWidth: 18,
        size: pieSize,
        lineCap: 'round',
        onStep: function(from, to, percent) {
            this.el.children[0].innerHTML = Math.round(percent);
        }
    });


    window.addEventListener('resize', function(){
        const winWidth = window.innerWidth;

        if(winWidth <= 1280 && winWidth > 950){
            pieSize = 150;
        } else if(winWidth <= 950) {
            pieSize = 170;
        } else {
            pieSize = 200;
        }

        clearTimeout(clearSet);

        clearSet = setTimeout(function(){

            document.querySelector('.total-chart .chart canvas').remove();
            var chart = window.chart = new EasyPieChart(document.querySelector('.total-chart .chart'), {
                easing: 'easeOutElastic',
                delay: 3000,
                barColor: '#13C7A3',
                trackColor: '#e6e6e6',
                scaleColor: false,
                lineWidth: 18,
                trackWidth: 18,
                size: pieSize,
                lineCap: 'round',
                onStep: function(from, to, percent) {
                    this.el.children[0].innerHTML = Math.round(percent);
                    }
            });   
            }, 150);
        });
        
//--------each charts

    if(winWidth <= 950){
        lWidth = 5;
        tWidth = 4;
    } else {
        lWidth = 10;
        tWidth = 8;
    }
    if(winWidth <= 1280){
        eachSize = 90;
    } else {
        eachSize = 110;
    }

    const poData = [
        {poKind:'.db-pofol', bColor:'#13C7A3', tColor:'#e6e6e6'},
        {poKind:'.api-pofol', bColor:'#0078FF', tColor:'#e6e6e6'},
        {poKind:'.renewal-pofol', bColor:'#8933FF', tColor:'#e6e6e6'},
        {poKind:'.panning-pofol', bColor:'#BD5ED9', tColor:'#e6e6e6'},
        //{poKind:'.total-chart', bColor:'#BD5ED9', tColor:'#e6e6e6'}
    ];

    function startPie(){
        poData.map(value => {
            //document.querySelector(value.poKind + ' .chart').remove();
            //console.log(value.b);
            var chart = window.chart = new EasyPieChart(document.querySelector(value.poKind + ' .chart'), {
                easing: 'easeOutElastic',
                delay: 3000,
                barColor: value.bColor,
                trackColor: value.tColor,
                scaleColor: false,
                lineWidth: lWidth,
                trackWidth: tWidth,
                size: eachSize,
                lineCap: 'round',
                onStep: function (from, to, percent) {
                    this.el.children[0].innerHTML = Math.round(percent);
                }
            });
        });
    }
    startPie();    

});