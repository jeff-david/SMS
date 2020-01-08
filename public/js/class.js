
var section = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z']

var gl = ['Grade 7','Grade 8','Grade 9','Grade 10','Grade 11','Grade 12']
var subject = ['Filipino','English','Mathematics','Science','AralPan','C.L.E.','T.L.E.','Music','Arts','PE','Health','Homeroom']

$(document).ready(function(){
    
    for(var i = 0 ; i < 12 ; i++){
        $(
            `<div class="col-md-6 col-lg-3">
                <div class="statistic__item statistic__item--blue text-center">
                    <span class="desc">`+subject[i]+`</span>
                    <br>
                    <button type="button" class="btn btn-info mb-1" data-toggle="modal" data-target="#staticModal">Assign</button>
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
    for(var i = 0 ; i < 6 ; i++){
        $(
            `<div class="col-md-6 col-lg-2">
                <div class="statistic__item statistic__item--green text-center">
                    <h3 class="number" style="color:white;"><small>Grade 7</small></h3>
                    <span class="desc">Section `+section[i]+`</span>
                    <br>
                    <a href="studentlist.html" class="btn btn-secondary btn-sm">Enter</a>
                </div>
            </div>`
        ).appendTo('#tclasses')
    }

    $('#filter').click(function(){
        var grlevel = $('#gradelevel').val();
        var color
        var glabel
        $('#classes').empty();

        if(grlevel == 1){
            glabel = gl[0]
            color = 'green'
        }else if(grlevel == 2){
            glabel = gl[1]
            color = 'yellow'
        }else if(grlevel == 3){
            glabel = gl[2]
            color = 'red'
        }else if(grlevel == 4){
            glabel = gl[3]
            color = 'blue'
        }else if(grlevel == 5){
            glabel = gl[4]
            color = 'purple'
        }else if(grlevel == 6){
            glabel = gl[5]
            color = 'orange'
        }
        for(var i = 0 ; i < 15 ; i++){
            $(
                `<div class="col-md-6 col-lg-2">
                    <div class="statistic__item statistic__item--`+color+` text-center">
                        <h3 class="number" style="color:white;"><small>`+glabel+`</small></h3>
                        <span class="desc">Section `+section[i]+`</span>
                        <br>
                        <a href="assignteacher.html" class="btn btn-secondary btn-sm">Enter</a>
                    </div>
                </div>`
            ).appendTo('#classes')
        }
    });
});