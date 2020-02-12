var grades = [98.54,98.50,97.15,97.421,96.55,96.357,96.123,96.111,95.98,95.87]
var fname = ['Stefany','Rhea','Regine','Angel Rhose','Richel Vee','Jefriel','John Andrey','Rhafie','Carlo','Gladys']
var lname = ['Bejoc','Estenzo','Colinares','Aresco','Guiroy','Guiwanon','Prucorato','Yagonia','Bitoon','Laping']
var mname = ['K.','L.','Y.','J.','A.','B.','C.','D.','E.','F.']
var gradelevel = ['Grade 7','Grade 8','Grade 9','Grade 10','Grade 11','Grade 12']

var monthname = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sept','Oct','Nov','Dec']

var d = new Date();
var month = d.getMonth();
var date = d.getDate();
var year = d.getFullYear();
var dateToday = monthname[month - 1]+" "+date+", "+year

var idno = Math.floor(Math.random() * 90000) + 10000 



$(document).ready(function(){
    for(var i = 0 ; i < 6 ;i++){
        var idgr = "gr"+(i+7)
        $(
            `<div class="col-md-6 col-lg-4">
                <!-- TOP CAMPAIGN-->
                <div class="top-campaign">
                    <h3 class="title-3 m-b-30">`+gradelevel[i]+` Top Rankers</h3>
                    <div class="table-responsive">
                        <table class="table table-top-campaign">
                            <thead>
                                <tr>
                                    <th>Names</th>
                                    <th class="text-right">Grades</th>
                                </tr>
                            </thead>
                            <tbody id="`+idgr+`">
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END TOP CAMPAIGN-->
            </div>`
        ).appendTo('#rank');
    }

    for(var i = 0 ; i < 10 ; i++){
        var name = fname[Math.floor((Math.random() * 10) + 1)-1]+" "+mname[Math.floor((Math.random() * 10) + 1)-1]+" "+lname[Math.floor((Math.random() * 10) + 1)-1]
        $(
            `<tr>
                <td>`+name+`</td>
                <td>`+parseFloat(grades[i]).toFixed(2)+`</td>
            </tr>`
        ).appendTo('#gr7');
    }

    for(var i = 0 ; i < 10 ; i++){
        var name = fname[Math.floor((Math.random() * 10) + 1)-1]+" "+mname[Math.floor((Math.random() * 10) + 1)-1]+" "+lname[Math.floor((Math.random() * 10) + 1)-1]
        $(
            `<tr>
                <td>`+name+`</td>
                <td>`+parseFloat(grades[i]).toFixed(2)+`</td>
            </tr>`
        ).appendTo('#gr8');
    }

    for(var i = 0 ; i < 10 ; i++){
        var name = fname[Math.floor((Math.random() * 10) + 1)-1]+" "+mname[Math.floor((Math.random() * 10) + 1)-1]+" "+lname[Math.floor((Math.random() * 10) + 1)-1]
        $(
            `<tr>
                <td>`+name+`</td>
                <td>`+parseFloat(grades[i]).toFixed(2)+`</td>
            </tr>`
        ).appendTo('#gr9');
    }
    
    for(var i = 0 ; i < 10 ; i++){
        var name = fname[Math.floor((Math.random() * 10) + 1)-1]+" "+mname[Math.floor((Math.random() * 10) + 1)-1]+" "+lname[Math.floor((Math.random() * 10) + 1)-1]
        $(
            `<tr>
                <td>`+name+`</td>
                <td>`+parseFloat(grades[i]).toFixed(2)+`</td>
            </tr>`
        ).appendTo('#gr10');
    }

    for(var i = 0 ; i < 10 ; i++){
        var name = fname[Math.floor((Math.random() * 10) + 1)-1]+" "+mname[Math.floor((Math.random() * 10) + 1)-1]+" "+lname[Math.floor((Math.random() * 10) + 1)-1]
        $(
            `<tr>
                <td>`+name+`</td>
                <td>`+parseFloat(grades[i]).toFixed(2)+`</td>
            </tr>`
        ).appendTo('#gr11');
    }
    
    for(var i = 0 ; i < 10 ; i++){
        var name = fname[Math.floor((Math.random() * 10) + 1)-1]+" "+mname[Math.floor((Math.random() * 10) + 1)-1]+" "+lname[Math.floor((Math.random() * 10) + 1)-1]
        $(
            `<tr>
                <td>`+name+`</td>
                <td>`+parseFloat(grades[i]).toFixed(2)+`</td>
            </tr>`
        ).appendTo('#gr12');
    }
    $('#idno').val(year+" - "+idno);
   
    
    $('#datetoday').val(dateToday);
});