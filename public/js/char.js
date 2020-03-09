

(function ($) {
    try{
        var chart = document.getElementById("mybarChart");
        var firsGrading = {
            label: "1st Grading",
            data: [56, 95, 81, 80, 65, 55],
            borderColor:"#4CAF50", 
            borderWidth: "0",
            backgroundColor:"#C8E6C9",
            fontFamily: "Poppins"
        }
        var secondGrading = {
            label:"2nd Grading",
            data: [82, 84, 41, 91, 86, 72],
            borderColor: "#FF5722",
            borderWidth: "0",
            backgroundColor:  "#FFCCBC",
            fontFamily: "Poppins"
        };
        var thirdGrading = {
            label: "3rd Grading",
            data: [82, 84, 41, 91, 68, 72],
            borderColor: "#03A9F4",
            borderWidth: "0",
            backgroundColor:  "#B3E5FC",
            fontFamily: "Poppins"
        };
        var fourthGrading = {
            label: "4th Grading",
            data: [82, 84, 41, 91, 68, 72, 19],
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