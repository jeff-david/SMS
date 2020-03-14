var gradelevel = ['Grade 7','Grade 8','Grade 9','Grade 10','Grade 11','Grade 12']

$(document).ready(function() {
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
                                    <th>Lastname</th>
                                    <th>Firstname</th>
                                    <th class="text-right">Average</th>
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
   window.g7rank.forEach(element => {
    $(
        `<tr>
            <td>`+element.lastname+`</td>
            <td>`+element.firstname+`</td>
            <td>`+element.total+`</td>
        </tr>`
    ).appendTo('#gr7');
   }); 
   window.g8rank.forEach(element => {
    $(
        `<tr>
            <td>`+element.lastname+`</td>
            <td>`+element.firstname+`</td>
            <td>`+element.total+`</td>
        </tr>`
    ).appendTo('#gr8');
   }); 
   window.g9rank.forEach(element => {
    $(
        `<tr>
            <td>`+element.lastname+`</td>
            <td>`+element.firstname+`</td>
            <td>`+element.total+`</td>
        </tr>`
    ).appendTo('#gr9');
   }); 
   window.g10rank.forEach(element => {
    $(
        `<tr>
            <td>`+element.lastname+`</td>
            <td>`+element.firstname+`</td>
            <td>`+element.total+`</td>
        </tr>`
    ).appendTo('#gr10');
   }); 
   window.g11rank.forEach(element => {
    $(
        `<tr>
            <td>`+element.lastname+`</td>
            <td>`+element.firstname+`</td>
            <td>`+element.total+`</td>
        </tr>`
    ).appendTo('#gr11');
   }); 
   window.g12rank.forEach(element => {
    $(
        `<tr>
            <td>`+element.lastname+`</td>
            <td>`+element.firstname+`</td>
            <td>`+element.total+`</td>
        </tr>`
    ).appendTo('#gr12');
   }); 
});
