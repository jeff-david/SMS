
// var fname = ['Stefany','Rhea','Regine','Angel Rhose','Richel Vee','Jefriel','John Andrey','Rhafie','Carlo','Gladys']
// var lname = ['Bejoc','Estenzo','Colinares','Aresco','Guiroy','Guiwanon','Prucorato','Yagonia','Bitoon','Laping']
// var mname = ['K.','L.','Y.','J.','A.','B.','C.','D.','E.','F.']
// var profession = ['Filipino Teacher','English Teacher','Mathematics Teacher','Science Teacher','AralPan Teacher','C.L.E. Teacher','T.L.E. Teacher','Music Teacher','Arts Teacher','P.E. Teacher','Health Teacher']
// var handledClasses = ['4','5','6','7']
// var prf = ['Ms.','Mr.','Mrs.']
// $(document).ready(function(){

    
//     for(var i = 0 ; i < 20 ; i ++){
//         var name = fname[Math.floor((Math.random() * 10) + 1)-1]+" "+mname[Math.floor((Math.random() * 10) + 1)-1]+" "+lname[Math.floor((Math.random() * 10) + 1)-1]
//         $(
//             `<tr class="tr-shadow">
//                 <td>23642498</td>
//                 <td>`+prf[Math.floor((Math.random() * 3) + 1)-1]+` `+name+`</td>
//                 <td class="text-center">`+profession[Math.floor((Math.random() * 11) + 1)-1]+`</td>
//                 <td class="text-center">`+handledClasses[Math.floor((Math.random() * 4) + 1)-1]+`</td>
//                 <td class="text-center">
//                     <div class="table-data-feature">
//                         <button class="item" title="Send" data-toggle="modal" data-target="#sendModal">
//                             <i class="zmdi zmdi-mail-send"></i>
//                         </button>
//                         <button class="item" data-toggle="tooltip" data-placement="top" title="Edit" onclick="window.location='editteacher.html'">
//                             <i class="zmdi zmdi-edit"></i>
//                         </button>
//                         <button class="item" title="Delete" data-toggle="modal" data-target="#deleteModal">
//                             <i class="zmdi zmdi-delete"></i>
//                         </button>
//                         <button class="item" data-toggle="tooltip" data-placement="top" title="More" onclick="window.location='viewteacher.html'">
//                             <i class="zmdi zmdi-more"></i>
//                         </button>
//                     </div>
//                 </td>
//             </tr>
//             <tr class="spacer"></tr>`
//         ).appendTo('#teacherlist');
//     }
// });