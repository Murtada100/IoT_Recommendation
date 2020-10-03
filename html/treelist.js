// !function ($) {

//     // Le left-menu sign
//     /* for older jquery version
//     $('#left ul.nav li.parent > a > span.sign').click(function () {
//         $(this).find('i:first').toggleClass("icon-minus");
//     }); */

//     $(document).on("click","#left ul.nav li.parent > a > span.sign", function(){          
//         $(this).find('i:first').toggleClass("icon-minus");      
//     }); 

//     // Open Le current menu
//     $("#left ul.nav li.parent.active > a > span.sign").find('i:first').addClass("icon-minus");
//     $("#left ul.nav li.current").parents('ul.children').addClass("in");

// }(window.jQuery);
// need to know which icon is pressed for deleting thing or fog
var fog_counter = 0;
var thing_counter = 0;
var fog_id = '1';

var fog = GetFog(fog_counter);
var thing = GetThing(thing_counter, fog_counter);

$(document).on("click", "span.cloud1", function () {
    fog_counter = fog_counter + 1;
    $('#fogs').append(GetFog(fog_counter));
});

$(document).on("click", ".deleteFog", function () {

    console.log($(this).attr("id"));
    $("div").remove("#fog" + $(this).attr("id"));

});

$(document).on("click", ".deletingThing", function () {

    console.log($(this).attr("id"));
    $("div").remove("#" + $(this).attr("id"));

});


$(document).on("click", "span.fog1", function () {
    // console.log("dsdsds!")
    fog_id = $(this).attr("id");
    thing_counter = $('#fog' + fog_id).children('#things' + fog_id).children('.thing').length + 1;//$('#fog1.thing').length+1;
    $('#fog' + fog_id).children('#things' + fog_id).append(GetThing(thing_counter, fog_id));
});


function GetFog(counter) {
    //  return '<div id="fog' + counter + '" class="fog" data-parent="#fogs"> <a class="card-link" data-toggle="collapse" href="#fog'+counter+'_thing1"> <div class="input-group mb-3"> <div class="input-group-prepend"> <span class="input-group-text"><i class="fas fa-cloud"></i></span> </div> <button type="button" class="btn btn-outline-primary fog"> Fog</button> <div class="input-group-prepend"> <span id="'+counter+'" class="deleteFog input-group-text fog1"><i class="fa fa-times"></i></span> <span class="input-group-text fog1"><i class="fa fa-plus"></i></span> </div> </div> </a> <div id="things"  > </div> </div> ';
    return '<div id="fog' + counter + '" fognumber="'+counter+'" class="fog" data-parent="#fogs"> <a class="card-link" data-toggle="collapse" href="#things' + counter + '"> <div class="input-group mb-3"> <div class="input-group-prepend"> <span class="input-group-text"><i class="fas fa-cloud"></i></span> </div> <button type="button" class="btn btn-outline-info fog"> Fog</button> <div class="input-group-prepend"> <span id="' + counter + '" class="deleteFog input-group-text fog1"><i class="fa fa-times"></i></span> <span id="' + counter + '" class="input-group-text fog1"><i class="fa fa-plus"></i></span> </div> </div> </a> <div id="things' + counter + '"  class="collapse show" data-parent="#fog' + counter + '"> </div> </div> ';
}
$('input[type=range]').on('change', function () {  
    console.log("dsdsds!")
    var range_id = $(this).attr("name");
    var range_value = $(this).val();
    $("span#"+range_id).html(range_value);

});
$(document).on('input', '.slider', function() {
    console.log("dsdsds!")
    var range_id = $(this).attr("name");
    var range_value = $(this).val();
    $("span#"+range_id).html(range_value);
});
function GetThing(counter, fog_counter) {
    // console.log("return here!")
    var thing_id="fog" + fog_counter + "_thing" + counter;
    var inputs='<label for="distance_'+thing_id+'">Distance:  </label><input type="range" class="slider" id="distance_'+thing_id+'" name="distance_'+thing_id+'" min="1" max="100" value="50"> <span id="distance_'+thing_id+'">50</span></br> ';
    inputs=inputs+ '<label for="data_'+thing_id+'">Data Size:  </label><select name="data_'+thing_id+'" id="data_'+thing_id+'" class="custom-select-sm"> <option value="100">100 Bytes</option> <option value="500">500 Bytes</option> <option value="1024">1024 Bytes</option></select>';
    inputs=inputs+ '</br><label for="rate_'+thing_id+'">Rate send:  </label><input type="range"  class="slider" id="rate_'+thing_id+'" min="1" max="100" value="50" name="rate_'+thing_id+'">  <span id="rate_'+thing_id+'">50</span>';
    
    
    //return '<div id="fog'+fog_counter+'_thing' + counter + '" class="thing" data-parent="#fog' + fog_counter + '">  <a class="card-link" data-toggle="collapse" href="#fog' + fog_counter + '_thing' + counter + '_details">  <div class="input-group mb-3">  <div class="input-group-prepend">  <span class="input-group-text"><i class="fas fa-cloud"></i></span>  </div>  <button type="button" class="btn btn-outline-primary thing"> Thing</button>  <div class="input-group-prepend">  <span id="fog'+fog_counter+'_thing' + counter + '" class="deletingThing input-group-text thing1"><i class="fa fa-times"></i></span>     </div>  </div>  </a>  <div id="fog' + fog_counter + '_thing' + counter + '_details" class="collapse show" data-parent="#fog'+fog_counter+'_thing' + counter + '">  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et  dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip  ex ea commodo consequat.   </div> </div>';
    return '<div id="fog' + fog_counter + '_thing' + counter + '" class="thing" data-parent="#things' + fog_counter + '">  <a class="card-link" data-toggle="collapse" href="#fog' + fog_counter + '_thing' + counter + '_details">  <div class="input-group mb-3">  <div class="input-group-prepend">  <span class="input-group-text"><i class="fas fa-cloud"></i></span>  </div>  <button type="button" class="btn btn-outline-success thing"> Thing</button>  <div class="input-group-prepend">  <span id="fog' + fog_counter + '_thing' + counter + '" class="deletingThing input-group-text thing1"><i class="fa fa-times"></i></span>     </div>  </div>  </a>  <div id="fog' + fog_counter + '_thing' + counter + '_details" style=" padding-left: 50px;    width: 550px;" class="collapse show" data-parent="#fog' + fog_counter + '_thing' + counter + '"> '+inputs+'   </div> </div>';
}
function GetData1() {
      

jsonObj = [];
jsonObjTemp=[];
jsonObjTemp['Frequency_rate']=$('#Frequency').val();
jsonObjTemp['Frequency_priority']=$('#FrequencyPriority').val();
jsonObj.push({'Frequency':jsonObjTemp});

jsonObjTemp=[];
jsonObjTemp['Sensitivity_rate']=$('#Sensitivity').val();
jsonObjTemp['Sensitivity_priority']=$('#SensitivityPriority').val();
jsonObj.push({'Sensitivity':jsonObjTemp});


jsonObjTemp=[];
jsonObjTemp['Freshness_rate']=$('#Freshness').val();
jsonObjTemp['Freshness_priority']=$('#FreshnessPriority').val();
jsonObj.push({'Freshness':jsonObjTemp});

jsonObjTemp=[];
jsonObjTemp['Time_rate']=$('#Time').val();
jsonObjTemp['Time_priority']=$('#TimePriority').val();
jsonObj.push({'Time':jsonObjTemp});

jsonObjTemp=[];
jsonObjTemp['Volume_rate']=$('#Volume').val();
jsonObjTemp['Volume_priority']=$('#VolumePriority').val();
jsonObj.push({'Volume':jsonObjTemp});

jsonObjTemp=[];
jsonObjTemp['Criticality_rate']=$('#Criticality').val();
jsonObjTemp['Criticality_priority']=$('#CriticalityPriority').val();
jsonObj.push({'Criticality':jsonObjTemp});
 return jsonObj;

}
function GetData() {
    var fog_number= $('#fogs').children('.fog').length;
    var thing_number= $('div.thing').length;
    console.log(fog_number+"   --    "+thing_number)
    jsonObj = [];
    $("div.fog").each(function() {

          var fognumber = $(this).attr('fognumber');
        var count_thing = $(this).children('#things'+fognumber).children('.thing').length;;
        jsonObjTemp=[];

        $(this).children('#things'+fognumber).children('.thing').each(function() {

            var id_thing= $(this).attr('id');
            var distance=$('input#distance_'+id_thing).val();
            var rate=$('input#rate_'+id_thing).val();
            var data=$('select#data_'+id_thing).val();
            thing={};
            thing ["distance"] = distance;
            thing ["rate"] = rate;
            thing ["data"] = data;
            jsonObjTemp.push({"thing":thing});
            
        });
      
        console.log(fognumber+"   -count_thing:   "+count_thing)

        jsonObj.push({"fog":jsonObjTemp});
    });
   // console.log(jsonObj);
    return jsonObj;
}
function SendData() {
var ddd =GetData();
// alert(ddd);
//    console.log(ddd);
// $.post( "php/reciver.php",ddd, function( data, status, jqXHR ) {
//     alert('status: ' + status + ', data: ' + data );
//     console.log(jqXHR);
//   });
var xhr = new XMLHttpRequest();
xhr.open("POST", "php/reciver.php");
xhr.onreadystatechange = function() { if (xhr.readyState === 4 && xhr.status === 200) { console.log(xhr.responseText); } }
xhr.setRequestHeader("Content-type", "application/json")
xhr.send(JSON.stringify(ddd)); 
}

$(function () {

    $('form').on('submit', function (e) {
        console.log('rrr');
      e.preventDefault();
      $.ajax({
        type: 'post',
        dataType: 'json',
        url: 'php/reciver.php',
        data: JSON.stringify(GetData()),
        success: function (data) {
            console.log(data);
        }
      });

    });

  });