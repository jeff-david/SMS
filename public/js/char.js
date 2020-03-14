

(function ($) {
    try{
        var chart = document.getElementById("mybarChart");
        var firsGrading = {
            label: "1st Grading",
            data: [window.g7_first, window.g8_first, window.g9_first, window.g10_first, window.g11_first, window.g12_first],
            borderColor:"#4CAF50", 
            borderWidth: "0",
            backgroundColor:"#C8E6C9",
            fontFamily: "Poppins"
        }
        var secondGrading = {
            label:"2nd Grading",
            data: [window.g7_second, window.g8_second, window.g9_second, window.g10_second, window.g11_second, window.g12_second],
            borderColor: "#FF5722",
            borderWidth: "0",
            backgroundColor:  "#FFCCBC",
            fontFamily: "Poppins"
        };
        var thirdGrading = {
            label: "3rd Grading",
            data: [window.g7_third, window.g8_third, window.g9_third, window.g10_third, window.g11_third, window.g12_third],
            borderColor: "#03A9F4",
            borderWidth: "0",
            backgroundColor:  "#B3E5FC",
            fontFamily: "Poppins"
        };
        var fourthGrading = {
            label: "4th Grading",
            data: [window.g7_fourth, window.g8_fourth, window.g9_fourth, window.g10_fourth, window.g11_fourth, window.g12_fourth],
            borderColor: "#673AB7",
            borderWidth: "0",
            backgroundColor: "#D1C4E9",
            fontFamily: "Poppins"
        };
        if(chart){
            chart.height = 175;
	    chart.width = 400	;
            var myChart = new Chart(chart,{
                type:'bar',
                data:{
                    labels:['Gr 7','Gr 8','Gr 9','Gr 10','Gr 11','Gr 12'],
                    datasets:[firsGrading,secondGrading,thirdGrading,fourthGrading]
                },
                options: {
                    tooltips: {
                      callbacks: {
                        title: (items, data) => {
                            // items[0].datasetIndex
                            console.log(items[0].xLabel);
                            if(items[0].xLabel === "Gr 7"){
                                return "Grade 7"
                            }else if(items[0].xLabel === "Gr 8"){
                                return "Grade 8"
                            }else if(items[0].xLabel === "Gr 9"){
                                return "Grade 9"
                            }else if(items[0].xLabel === "Gr 10"){
                                return "Grade 10"
                            }else if(items[0].xLabel === "Gr 11"){
                                return "Grade 11"
                            }else if(items[0].xLabel === "Gr 12"){
                                return "Grade 12"
                            }
                        },
                        label: (items, data) => {
                            // console.log(items.datasetIndex);
                            if(items.datasetIndex === 0){
                                return "First Grading: "+items.yLabel+"%"
                            }else if(items.datasetIndex === 1){
                                return "Second Grading: "+items.yLabel+"%"
                            }else if(items.datasetIndex === 2){
                                return "Third Grading: "+items.yLabel+"%"
                            }else{
                                return "Fourth Grading: "+items.yLabel+"%"
                            }
                        }
                      }
                    },
                    title: {
                        display: true,
                        text: 'Average Grade (%)',
                        fontFamily: "Poppins",
                        position: 'left'
                    }
                  }
            });
        }
    }catch(err){
        console.log(err)
    }
})(jQuery);