
var fname = ['Stefany','Rhea','Regine','Angel Rhose','Richel Vee','Jefriel','John Andrey','Rhafie','Carlo','Gladys']
var lname = ['Bejoc','Estenzo','Colinares','Aresco','Guiroy','Guiwanon','Prucorato','Yagonia','Bitoon','Laping']
var mname = ['K.','L.','Y.','J.','A.','B.','C.','D.','E.','F.']
var gradelevel = ['Grade 7','Grade 8','Grade 9','Grade 10','Grade 11','Grade 12']
var section = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z']
var grades = [99.45,98.12,97.45,97.25,98.36]
$(document).ready(function(){
    for(var i = 0 ; i < 20 ; i ++){
        var name = fname[Math.floor((Math.random() * 10) + 1)-1]+" "+mname[Math.floor((Math.random() * 10) + 1)-1]+" "+lname[Math.floor((Math.random() * 10) + 1)-1]
        var stg = grades[Math.floor((Math.random() * 5) + 1)-1]
        var ndg =grades[Math.floor((Math.random() * 5) + 1)-1]
        var rdg =grades[Math.floor((Math.random() * 5) + 1)-1]
        var thg =grades[Math.floor((Math.random() * 5) + 1)-1]
        var finalgrade = (stg + ndg + rdg + thg)/4
        $(
            `<tr class="tr-shadow">
                <td>23642498</td>
                <td>`+name+`</td>
                <td><input type="text" style="width:90px;" class="text-center form-control" value="`+stg.toFixed(2)+`" ></td>
                <td><input type="text" style="width:90px;" class="text-center form-control" value="`+ndg.toFixed(2)+`" ></td>
                <td><input type="text" style="width:90px;" class="text-center form-control" value="`+rdg.toFixed(2)+`" ></td>
                <td><input type="text" style="width:90px;" class="text-center form-control" value="`+thg.toFixed(2)+`" ></td>
                <td><input type="text" style="width:90px;" class="text-center form-control" value="`+finalgrade.toFixed(2)+`" readonly></td>
                <td class="text-center">
                    <div class="table-data-feature">
                        <button class="item" data-toggle="tooltip" data-placement="top" title="More" onclick="window.location='viewstudent.html'">
                            <i class="zmdi zmdi-more"></i>
                        </button>
                    </div>
                </td>
            </tr>
            <tr class="spacer"></tr>`
        ).appendTo('#tstudentlist');
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
                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit" onclick="window.location='editstudent.html'">
                            <i class="zmdi zmdi-edit"></i>
                        </button>
                        <button class="item" title="Delete" data-toggle="modal" data-target="#deleteModal">
                            <i class="zmdi zmdi-delete"></i>
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
});