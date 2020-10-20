jQuery(document).ready(function(){
    $("#generateForecast").click(function(e){

        $("#resultsTable > tbody").empty();

        var forecastInput = {
            noStudyPerday: $("#noStudyPerday").val(),
            noStudyGrowthPercentage: $("#noStudyGrowthPercentage").val(),
            noOfMonthsToForecast: $("#noOfMonthsToForecast").val()
        }

        $.ajax({
            type:"POST",
            url: "/server-side/api/calculate-forecast.php",
            dataType: "json",
            contentType: "application/json",
            data: JSON.stringify(forecastInput),
            success: function (data){

                $("#labelNoStudies").html(forecastInput['noStudyPerday']);
                $("#labelStudyGrowth").html(forecastInput['noStudyGrowthPercentage']);
                $("#labelMonthsForecast").html(forecastInput['noOfMonthsToForecast']);

                $("#noStudyPerday").val('');
                $("#noStudyGrowthPercentage").val('');
                $("#noOfMonthsToForecast").val('');

                console.log(data);
                for(var i=0; i < data.length; i++) {
                    $('#resultsTable > tbody:last-child').append(
                        '<tr><td>'+data[i]["monthYear"]+
                        '</td><td>'+data[i]["studiesTotal"]+
                        '</td><td>$'+data[i]["costForcasted"]+'</td></tr>'
                    );
                }

            }
        });
    });
});