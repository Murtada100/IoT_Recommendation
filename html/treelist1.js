
var fog_counter = 0;
var thing_counter = 0;
var fog_id = '1';

var fog = GetFog(fog_counter);
var thing = GetThing(thing_counter, fog_counter);
$("#DistanceMatrix").hide();
// $(document).on("click", "button.cloud", function () {
//     console.log("dsdsds!")
//     fog_counter = fog_counter + 1;
//     $('#fogs').append(GetFog(fog_counter));
// });

$(document).on("click", ".deleteFog", function () {

    console.log($(this).attr("id"));
    $("div").remove("#fog" + $(this).attr("id"));

});

$(document).on("click", ".deletingThing", function () {

    console.log($(this).attr("id"));
    $("div").remove("#" + $(this).attr("id"));

});

$(document).on("click", "#submit", function () {

    var cri = GetData1();
    $("#Criteria_hidden").val(JSON.stringify(cri));
    //   $("#Criteria_hidden").hide();
    console.log(cri);
    var clo = GetData();
    $("#cloud_hidden").val(JSON.stringify(clo));
    //$("#custId").val(JSON.stringify(clo));

    //   $("#cloud_hidden").hide();
});
$("input").change(function () {
    alert("The text has been changed.");
    fill_divs();
});
function fill_divs() {
    var cri = GetData1();
    $("#Criteria_hidden").html(JSON.stringify(cri));
    $("#Criteria_hidden").hide();
    console.log(cri);
    var clo = GetData();
    $("#cloud_hidden").html(JSON.stringify(clo));
    $("#cloud_hidden").hide();
}
$(document).on("click", "span.fog1", function () {
    // console.log("dsdsds!")
    fog_id = $(this).attr("id");
    thing_counter = $('#fog' + fog_id).children('#things' + fog_id).children('.thing').length + 1;//$('#fog1.thing').length+1;
    $('#fog' + fog_id).children('#things' + fog_id).append(GetThing(thing_counter, fog_id));
});


function GetFog(counter) {
    var domain_selector='<select name="domain_fog_' + counter + '" id="domain_fog_' + counter + '" class="custom-select-sm domain_selector"> <option value="1">D 1</option> </select>'

    //  return '<div id="fog' + counter + '" class="fog" data-parent="#fogs"> <a class="card-link" data-toggle="collapse" href="#fog'+counter+'_thing1"> <div class="input-group mb-3"> <div class="input-group-prepend"> <span class="input-group-text"><i class="fas fa-cloud"></i></span> </div> <button type="button" class="btn btn-outline-primary fog"> Fog</button> <div class="input-group-prepend"> <span id="'+counter+'" class="deleteFog input-group-text fog1"><i class="fa fa-times"></i></span> <span class="input-group-text fog1"><i class="fa fa-plus"></i></span> </div> </div> </a> <div id="things"  > </div> </div> ';
    return '<div id="fog' + counter + '" fognumber="' + counter + '" class="fog" data-parent="#fogs">  <div class="input-group mb-3"> <div class="input-group-prepend">  </div>   '+domain_selector+'<button type="button" class="btn btn-outline-info fog"> Fog</button>  <div class="input-group-prepend"> <span id="' + counter + '" class="deleteFog input-group-text fog1"><i class="fa fa-times"></i></span></div> </div> </div> ';
}
$('input[type=range]').on('change', function () {
    console.log("dsdsds!")
    var range_id = $(this).attr("name");
    var range_value = $(this).val();
    $("span#" + range_id).html(range_value);

});
$(document).on('input', '.slider', function () {
    console.log("dsdsds!")
    var range_id = $(this).attr("name");
    var range_value = $(this).val();
    $("span#" + range_id).html(range_value);
});

$(document).on('input', '.checkboxww', function () {
    console.log("tttttttttttttt!")
    //   var value = $(this).prop("checked") ? 'true' : 'false';                     
    if ($(this).is(':checked')) {
        $('.checkboxww').prop('checked', false); // Unchecks it

        $('.checkboxww').val('false');
        $(this).prop('checked', true); // Unchecks it
        
        $(this).val('true');
    }
});

function GetThing1(counter, fog_counter) {
    // console.log("return here!")
    var thing_id = "fog" + fog_counter + "_thing" + counter;
    var inputs = '<label for="distance_' + thing_id + '">Distance:  </label><input type="range" class="slider" id="distance_' + thing_id + '" name="distance_' + thing_id + '" min="1" max="100" value="50"> <span id="distance_' + thing_id + '">50</span></br> ';
    inputs = inputs + '<label for="data_' + thing_id + '">Data Size:  </label><select name="data_' + thing_id + '" id="data_' + thing_id + '" class="custom-select-sm"> <option value="100">100 Bytes</option> <option value="500">500 Bytes</option> <option value="1024">1024 Bytes</option></select>';
    inputs = inputs + '</br><label for="rate_' + thing_id + '">Rate send:  </label><input type="range"  class="slider" id="rate_' + thing_id + '" min="1" max="100" value="50" name="rate_' + thing_id + '">  <span id="rate_' + thing_id + '">50</span>';
    inputs = inputs + '</br> <input type="checkbox" id="check_' + thing_id + '" class="checkboxww" name="check_' + thing_id + '" value="false"> <label for="check_' + thing_id + '">Recommend for this</label><br>';


    //return '<div id="fog'+fog_counter+'_thing' + counter + '" class="thing" data-parent="#fog' + fog_counter + '">  <a class="card-link" data-toggle="collapse" href="#fog' + fog_counter + '_thing' + counter + '_details">  <div class="input-group mb-3">  <div class="input-group-prepend">  <span class="input-group-text"><i class="fas fa-cloud"></i></span>  </div>  <button type="button" class="btn btn-outline-primary thing"> Thing</button>  <div class="input-group-prepend">  <span id="fog'+fog_counter+'_thing' + counter + '" class="deletingThing input-group-text thing1"><i class="fa fa-times"></i></span>     </div>  </div>  </a>  <div id="fog' + fog_counter + '_thing' + counter + '_details" class="collapse show" data-parent="#fog'+fog_counter+'_thing' + counter + '">  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et  dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip  ex ea commodo consequat.   </div> </div>';
    return '<div id="fog' + fog_counter + '_thing' + counter + '" class="thing" data-parent="#things' + fog_counter + '">  <a class="card-link" data-toggle="collapse" href="#fog' + fog_counter + '_thing' + counter + '_details">  <div class="input-group mb-3">  <div class="input-group-prepend">  <span class="input-group-text"><i class="fas fa-cloud"></i></span>  </div>  <button type="button" class="btn btn-outline-success thing"> Thing</button>  <div class="input-group-prepend">  <span id="fog' + fog_counter + '_thing' + counter + '" class="deletingThing input-group-text thing1"><i class="fa fa-times"></i></span>     </div>  </div>  </a>  <div id="fog' + fog_counter + '_thing' + counter + '_details" style=" padding-left: 50px;    width: 550px;" class="collapse show" data-parent="#fog' + fog_counter + '_thing' + counter + '"> ' + inputs + '   </div> </div>';
}

function GetThing(counter) {
    // console.log("return here!")
    var thing_id = "thing_" + counter;
    // var inputs = '<label for="distance_' + thing_id + '">Distance:  </label><input type="range" class="slider" id="distance_' + thing_id + '" name="distance_' + thing_id + '" min="1" max="100" value="50"> <span id="distance_' + thing_id + '">50</span></br> ';
    // inputs = inputs + '<label for="data_' + thing_id + '">Data Size:  </label><select name="data_' + thing_id + '" id="data_' + thing_id + '" class="custom-select-sm"> <option value="100">100 Bytes</option> <option value="500">500 Bytes</option> <option value="1024">1024 Bytes</option></select>';
    // inputs = inputs + '</br><label for="rate_' + thing_id + '">Rate send:  </label><input type="range"  class="slider" id="rate_' + thing_id + '" min="1" max="100" value="50" name="rate_' + thing_id + '">  <span id="rate_' + thing_id + '">50</span>';
    // inputs = inputs + '</br> <input type="checkbox" id="check_' + thing_id + '" class="checkboxww" name="check_' + thing_id + '" value="false"> <label for="check_' + thing_id + '">Recommend for this</label><br>';
var domain_selector='<select name="domain_' + thing_id + '" id="domain_' + thing_id + '" class="custom-select-sm domain_selector"> <option value="1">D 1</option> </select>'
    var inputs = '<div class="form-group" style="background: aliceblue;"> <label for="Frequency_' + thing_id + '">Frequency:</label> <input type="range" class="form-control" min="1" max="100" value="50" id="Frequency_' + thing_id + '"> </div> '
        + '<div class="form-group" style="background: aliceblue;"> <label for="Sensitivity_' + thing_id + '">Sensitivity:</label> <input type="range" class="form-control" min="1" max="100" value="50" id="Sensitivity_' + thing_id + '"></div>'
        + '<div class="form-group" style="background: aliceblue;"> <label for="Freshness_' + thing_id + '">Freshness:</label> <input type="range" class="form-control" min="1" max="100" value="50" id="Freshness_' + thing_id + '"> </div>'
        + '<div class="form-group" style="background: aliceblue;"> <label for="Time_' + thing_id + '">Time:</label> <input type="range" class="form-control" min="1" max="100" value="50" id="Time_' + thing_id + '"> </div> '
        + '<div class="form-group" style="background: aliceblue;"> <label for="Volume_' + thing_id + '">Volume:</label> <input type="range" class="form-control" min="1" max="100" value="50" id="Volume_' + thing_id + '"> </div> '
        + '<div class="form-group" style="background: aliceblue;"> <label for="Criticality_' + thing_id + '">Criticality:</label> <input type="range" class="form-control" min="1" max="100" value="50" id="Criticality_' + thing_id + '"> </div>';
    //return '<div id="fog'+fog_counter+'_thing' + counter + '" class="thing" data-parent="#fog' + fog_counter + '">  <a class="card-link" data-toggle="collapse" href="#fog' + fog_counter + '_thing' + counter + '_details">  <div class="input-group mb-3">  <div class="input-group-prepend">  <span class="input-group-text"><i class="fas fa-cloud"></i></span>  </div>  <button type="button" class="btn btn-outline-primary thing"> Thing</button>  <div class="input-group-prepend">  <span id="fog'+fog_counter+'_thing' + counter + '" class="deletingThing input-group-text thing1"><i class="fa fa-times"></i></span>     </div>  </div>  </a>  <div id="fog' + fog_counter + '_thing' + counter + '_details" class="collapse show" data-parent="#fog'+fog_counter+'_thing' + counter + '">  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et  dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip  ex ea commodo consequat.   </div> </div>';
    return '<div id="thing_' + counter + '" class="thing" thingnumber="'+counter+'" >  <a class="card-link" data-toggle="collapse" href="#thing_' + counter + '_details">  <div class="input-group mb-3">  <div class="input-group-prepend">    </div>  '+domain_selector+'  <button type="button" class="btn btn-outline-success thing"> Thing</button>  <div class="input-group-prepend">  <span id="thing' + counter + '" class="deletingThing input-group-text thing1"><i class="fa fa-times"></i></span>    </div>  </div>  </a> <div id="thing_' + counter + '_details"  class="collapse" data-parent="#thing_' + counter + '"> ' + inputs + '   </div> </div>';
}


function GetData1() {
    console.log("dsdsds!")

    jsonObj = [];
    jsonObjTemp = {};
    jsonObjTemp['Frequency_rate'] = $('#Frequency').val();
    jsonObjTemp['Frequency_priority'] = $('#FrequencyPriority').val();
    jsonObj.push({ 'Frequency': jsonObjTemp });

    jsonObjTemp = {};
    jsonObjTemp['Sensitivity_rate'] = $('#Sensitivity').val();
    jsonObjTemp['Sensitivity_priority'] = $('#SensitivityPriority').val();
    jsonObj.push({ 'Sensitivity': jsonObjTemp });


    jsonObjTemp = {};
    jsonObjTemp['Freshness_rate'] = $('#Freshness').val();
    jsonObjTemp['Freshness_priority'] = $('#FreshnessPriority').val();
    jsonObj.push({ 'Freshness': jsonObjTemp });

    jsonObjTemp = {};
    jsonObjTemp['Time_rate'] = $('#Time').val();
    jsonObjTemp['Time_priority'] = $('#TimePriority').val();
    jsonObj.push({ 'Time': jsonObjTemp });

    jsonObjTemp = {};
    jsonObjTemp['Volume_rate'] = $('#Volume').val();
    jsonObjTemp['Volume_priority'] = $('#VolumePriority').val();
    jsonObj.push({ 'Volume': jsonObjTemp });

    jsonObjTemp = {};
    jsonObjTemp['Criticality_rate'] = $('#Criticality').val();
    jsonObjTemp['Criticality_priority'] = $('#CriticalityPriority').val();
    jsonObj.push({ 'Criticality': jsonObjTemp });
    return jsonObj;

}
function GetData() {
    console.log("dsdsds!")
    var fog_number = $('#fogs').children('.fog').length;
    var thing_number = $('div.thing').length;
    console.log(fog_number + "   --    " + thing_number)
    jsonObj = [];
    $("div.fog").each(function () {

        var fognumber = $(this).attr('fognumber');
        var count_thing = $(this).children('#things' + fognumber).children('.thing').length;;
        jsonObjTemp = [];

        $(this).children('#things' + fognumber).children('.thing').each(function () {

            var id_thing = $(this).attr('id');
            var distance = $('input#distance_' + id_thing).val();
            var rate = $('input#rate_' + id_thing).val();
            var data = $('select#data_' + id_thing).val();
            var check = $('input#check_' + id_thing).val();
            thing = {};
            thing["distance"] = distance;
            thing["rate"] = rate;
            thing["data"] = data;
            thing["check"] = check;
            jsonObjTemp.push({ "thing": thing });

        });

        console.log(fognumber + "   -count_thing:   " + count_thing)

        jsonObj.push({ "fog": jsonObjTemp });
    });
    // console.log(jsonObj);
    return jsonObj;
} 


/////////////////////// new code \\\\\\\\\\\\\\\\\\\\
var clouds_count=0;
var domains_count=1;// as at the begining we have only one domain so always we have one at less 
function AddCloud(){
    console.log(GetCloud(clouds_count))
    clouds_count = clouds_count + 1;
    $('#clouds').append(GetCloud(clouds_count));
}

function GetCloud(counter) {
    var domain_selector='<select name="domain_cloud_' + counter + '" id="domain_cloud_' + counter + '" class="custom-select-sm domain_selector"> <option value="1">D 1</option> </select>'

       return  '<div id="cloud' + counter + '" cloudnumber="' + counter + '" class="cloud"><div class="input-group mb-3"><div class="input-group-prepend">  </div>'+domain_selector+'  <button type="button" class="btn btn-outline-info cloud"> Cloud</button>      <div class="input-group-prepend"> <span id="' + counter + '" class="deleteCloud input-group-text cloud' + counter + '"><i class="fa fa-times"></i></span>  </div></div></div>';
}



function AddFog(){ 
    fog_counter = fog_counter + 1;
    $('#fogs').append(GetFog(fog_counter));
}

function AddThing(){ 
    thing_counter = thing_counter + 1;
    $('#things').append(GetThing(thing_counter));
}

function AddDomain(){

var temp_domains_count=domains_count+1
    document.getElementById("div_rateSendMatrix").style.display = "block";
     
    $('#rateSendMatrix tr').append('<td>Domain '+temp_domains_count+'</td>');
    var new_row='<td>Domain '+temp_domains_count+'</td>';
    for (let index = 0; index <temp_domains_count; index++) {
      //  const element = array[index];
        new_row=new_row+'<td>   <input type="number" class="rateSendMatrix_numbers" value="1" id="Domain_'+temp_domains_count+'_Domain_'+(index+1)+'" name="quantity" min="1" >  </td>';
    }
    $("#rateSendMatrix tr:last").after(
        "<tr>" +
        new_row+
        "</tr>");
        console.log(new_row)



    document.getElementById("div_DistanceMatrix").style.display = "block";
    
    $('#DistanceMatrix tr').append('<td>Domain '+temp_domains_count+'</td>');
    var new_row='<td>Domain '+temp_domains_count+'</td>';
    for (let index = 0; index <temp_domains_count; index++) {
      //  const element = array[index];
        new_row=new_row+'<td>   <input type="number" class="DistanceMatrix_numbers" value="1" id="Domain_'+temp_domains_count+'_Domain_'+(index+1)+'" name="quantity" min="1" >  </td>';
    }
    $("#DistanceMatrix tr:last").after(
        "<tr>" +
        new_row+
        "</tr>");
        console.log(new_row)
        domains_count=temp_domains_count;
        

        $(".domain_selector").append(new Option("D "+temp_domains_count, temp_domains_count));

}


function GetAllData(){
 
    //var fog_number = $('#fogs').children('.fog').length;
    var fog_number = $('div.fog').length;
    var thing_number = $('div.thing').length;
    console.log(fog_number + "   --    " + thing_number)
    jsonObj = [];
    jsonObjTemp = [];
    $("div.cloud").each(function () {

        var cloudnumber = $(this).attr('cloudnumber');
       // var count_thing = $(this).children('#things' + fognumber).children('.thing').length;
        var domain_cloud = $('select#domain_cloud_' + cloudnumber).val();
        cloud = {};
        cloud["cloudnumber"] = cloudnumber;
        cloud["cloud_domain"] = domain_cloud;
        jsonObjTemp.push({ "cloud": cloud });
    });

    jsonObj.push({ "clouds": jsonObjTemp });
    

    jsonObjTemp = [];
    $("div.fog").each(function () {

        var fognumber = $(this).attr('fognumber');
       // var count_thing = $(this).children('#things' + fognumber).children('.thing').length;
        var domain_fog = $('select#domain_fog_' + fognumber).val();
        fog = {};
        fog["fognumber"] = fognumber;
        fog["fog_domain"] = domain_fog;
        jsonObjTemp.push({ "fog": fog });
    });

    jsonObj.push({ "fogs": jsonObjTemp });
    


    jsonObjTemp = [];
        $('div.thing').each(function () {

            var id_thing = $(this).attr('thingnumber');
            var domain_thing = $('select#domain_thing_' + id_thing).val();

            var Frequency = $('input#Frequency_thing_' + id_thing).val();
            var Sensitivity = $('input#Sensitivity_thing_' + id_thing).val();
            var Freshness = $('input#Freshness_thing_' + id_thing).val();
            var Time = $('input#Time_thing_' + id_thing).val();
            var Volume = $('input#Volume_thing_' + id_thing).val();
            var Criticality = $('input#Criticality_thing_' + id_thing).val();     

            thing = {};
            thing["thingnumber"] = id_thing;
            thing["thing_domain"] = domain_thing;
            thing["Frequency"] = Frequency;
            thing["Sensitivity"] = Sensitivity;
            thing["Freshness"] = Freshness;
            thing["Time"] = Time;
            thing["Volume"] = Volume;
            thing["Criticality"] = Criticality;
            jsonObjTemp.push({ "thing": thing });

        });

    //     console.log(fognumber + "   -count_thing:   " + count_thing)

         jsonObj.push({ "things": jsonObjTemp });
     
    // console.log(jsonObj);
    return jsonObj;
}