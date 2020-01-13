
var fname = ['Stefany','Rhea','Regine','Angel Rhose','Richel Vee','Jefriel','John Andrey','Rhafie','Carlo','Gladys']
var lname = ['Bejoc','Estenzo','Colinares','Aresco','Guiroy','Guiwanon','Prucorato','Yagonia','Bitoon','Laping']
var mname = ['K.','L.','Y.','J.','A.','B.','C.','D.','E.','F.']
var profession = ['Filipino Teacher','English Teacher','Mathematics Teacher','Science Teacher','AralPan Teacher','C.L.E. Teacher','T.L.E. Teacher','Music Teacher','Arts Teacher','P.E. Teacher','Health Teacher']
var handledClasses = ['4','5','6','7']
var prf = ['Ms.','Mr.','Mrs.']
var gradelevel = ['Grade 7','Grade 8','Grade 9','Grade 10','Grade 11','Grade 12']
var section = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z']
var subject = ['Filipino','English','Mathematics','Science','AralPan','C.L.E.','T.L.E.','Music','Arts','PE','Health','Homeroom']

$(document).ready(function(){
    for (let i = 0; i < 5; i++) {
        $(
            `<tr style="font-size:12px">
                <td>SUSPENSION OF WORK AND CLASSES AT 3:00 PM TODAY APRIL 24, 2019</td>
                <td class="text-center">General</td>
                <td class="table-data-feature">
                    <button class="item" title="edit" data-toggle="modal" data-target="#editannouncement">
                        <i class="zmdi zmdi-edit"></i>
                    </button>
                    <button class="item sendsms" title="send" >
                        <i class="zmdi zmdi-mail-send"></i>
                    </button>
                </td>
            </tr>`
        ).appendTo('#anouncements');
    }
    $('.sendsms').click(function(){
        // alert()
        $('#aTAB').removeClass('show active')
        $('#unTAB').addClass('show active')

        $('#anouncementTAB').removeClass('show active')
        $('#undeliveredSMSTAB').addClass('show active')
    });
    for(var i = 0 ; i < 20 ; i ++){
        var name = fname[Math.floor((Math.random() * 10) + 1)-1]+" "+mname[Math.floor((Math.random() * 10) + 1)-1]+" "+lname[Math.floor((Math.random() * 10) + 1)-1]
        $(
            `<tr class="tr-shadow">
                <td>23642498</td>
                <td>`+prf[Math.floor((Math.random() * 3) + 1)-1]+` `+name+`</td>
                <td class="text-center">`+profession[Math.floor((Math.random() * 11) + 1)-1]+`</td>
                <td class="text-center">`+handledClasses[Math.floor((Math.random() * 4) + 1)-1]+`</td>
                <td class="text-center">
                    <div class="table-data-feature">
                        <button class="item" title="Send" data-toggle="modal" data-target="#sendModal">
                            <i class="zmdi zmdi-mail-send"></i>
                        </button>
                        <button class="item" data-toggle="tooltip" data-placement="top" title="More" onclick="window.location='viewteacher.html'">
                            <i class="zmdi zmdi-more"></i>
                        </button>
                    </div>
                </td>
            </tr>
            <tr class="spacer"></tr>`
        ).appendTo('#teacherlist');
    }
    for(var i = 0 ; i < 20 ; i ++){
        var name = fname[Math.floor((Math.random() * 10) + 1)-1]+" "+mname[Math.floor((Math.random() * 10) + 1)-1]+" "+lname[Math.floor((Math.random() * 10) + 1)-1]
        $(
            `<tr class="tr-shadow">
                <td>23642498</td>
                <td>`+name+`</td>
                <td class="text-center">`+gradelevel[Math.floor((Math.random() * 6) + 1)-1]+`</td>
                <td class="text-center">`+section[Math.floor((Math.random() * 26) + 1)-1]+`</td>
                <td class="text-center">
                    <div class="table-data-feature">
                        <button class="item" title="Send" data-toggle="modal" data-target="#sendModal">
                            <i class="zmdi zmdi-mail-send"></i>
                        </button>
                        <button class="item" data-toggle="tooltip" data-placement="top" title="More" onclick="window.location='viewstudent.html'">
                            <i class="zmdi zmdi-more"></i>
                        </button>
                    </div>
                </td>
            </tr>
            <tr class="spacer"></tr>`
        ).appendTo('#studentlist');
    }
    for(var i = 0 ; i < 12 ; i++){
        var name = fname[Math.floor((Math.random() * 10) + 1)-1]+" "+mname[Math.floor((Math.random() * 10) + 1)-1]+" "+lname[Math.floor((Math.random() * 10) + 1)-1]
        $(
            `<div class="col-md-6 col-lg-3">
                <div class="statistic__item statistic__item--blue text-center">
                    <span class="desc">`+subject[i]+`</span>
                    <br>
                    <h5><small>`+prf[Math.floor((Math.random() * 3) + 1)-1]+` `+name+`</small></h5>
                </div>
            </div>`
        ).appendTo('#subjects')
    }

    for(var i = 0 ; i < 15 ; i++){
        $(
            `<div class="col-md-6 col-lg-2">
                <div class="statistic__item statistic__item--green text-center">
                    <h3 class="number" style="color:white;"><small>Grade 7</small></h3>
                    <span class="desc">Section `+section[i]+`</span>
                    <br>
                    <a href="assignteacher.html" class="btn btn-secondary btn-sm">Enter</a>
                </div>
            </div>`
        ).appendTo('#classes')
    }
});